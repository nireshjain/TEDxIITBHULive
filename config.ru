use Rack::Static,
  :urls => ["/static","/images","/js","/css"],
  :root => "static"

run lambda { |env|
  [
    200,
    {
      'Content-Type'  => 'text/html',
      'Cache-Control' => 'public, max-age=86400'
    },
    File.open('static/index.html','static/about.html','static/team.html', File::RDONLY)
  ]
}