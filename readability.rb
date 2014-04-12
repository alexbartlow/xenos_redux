require 'typhoeus'
require 'json'
require 'uri'
require 'fileutils'

API_KEY = "fb9673e1c10a29d419eb3bd9935009f1ae151d1e"

def make_request(url, hydra)
  uri = URI.parse(URI.escape(url))
  path = uri.path

  output_file = File.join('output', path)

  return if File.size?(output_file)

  FileUtils.mkdir_p(File.dirname(output_file))

  request = Typhoeus::Request.new(
    "http://readability.com/api/content/v1/parser",
    {
      method: :get,
      params: {
        url: "http://" + url,
        token: API_KEY
      }
    }
  )

  request.on_complete do |response|
    if response.success?
      json = JSON.parse(response.body)
      json["path"] = path

      puts "OK " + path

      File.open(output_file, 'w') {|f| f.puts json.to_json}
    else
      puts "ERROR " + path
      puts response.body.inspect
    end
  end

  hydra.queue(request)
end

hydra = Typhoeus::Hydra.new(max_concurrency: 5)

ARGF.each_line do |line|
  uri = line.chomp
  make_request(uri, hydra)
end

hydra.run


