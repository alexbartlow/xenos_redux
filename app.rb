require 'sinatra'
require 'json'
require 'haml'
require 'nokogiri'
require 'uri'

def fetch_file(path)
  page = JSON.parse(
    File.read(
      File.join("output/www.xenos.org", path)
  ))
  
  noko = Nokogiri::HTML.parse(page['content'])

  noko.search('a').each do |a|
    link = URI.parse(a['href'] || '').path

    if link && %w{.html .htm}.include?(File.extname(link))
      a['href'] = link
    end
  end

  page['content'] = noko.to_html

  return page
end

get '/' do
  haml :index, :format => :html5
end

get '/stylesheet.css' do
  sass :app
end

get '/*' do |path|
  return 404 if path.include?('..')
  @page = fetch_file(path)
  haml :page, :format => :html5
end

