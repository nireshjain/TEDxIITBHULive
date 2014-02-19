use Rack::Static,
  :urls => ["root", "/js", "/images", "/css"],
  :root => "static"

run lambda { |env|
  [
    200,
    {
      'Content-Type'  => 'text/html',
      'Cache-Control' => 'public, max-age=86400'
    },
    File.open('static/index.html', File::RDONLY)
  ]
}