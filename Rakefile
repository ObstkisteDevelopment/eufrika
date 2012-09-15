Dir.glob("#{File.dirname(__FILE__)}/lib/tasks/**/*.rake").each do |e|
  puts e
  load e
end

task :default => 'images:setup'