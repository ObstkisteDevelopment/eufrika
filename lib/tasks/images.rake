require 'fileutils'

namespace :images do
  # Change dir to root of project
  FileUtils.cd(File.join(File.dirname(__FILE__),"../.."))
  desc "download sample layout files"
  task :download do
    base_url = "http://ftp.obstkiste.org/eufrica"
    files = ["images.tgz"]
    files.each do |f|
      `wget #{base_url}/#{f}`
    end
  end

  desc "extract sample layout files"
  task :extract do
    if File.exists?(File.join(File.dirname(__FILE__),"../../images.tgz"))
      `tar xvfz images.tgz`
      `rm images.tgz`
    else
      puts "Please download files first!"
    end
  end

  desc "setup sample layout files"
  task :setup => [:download, :extract]
end