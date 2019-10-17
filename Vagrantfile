Vagrant.configure("2") do |config|
  config.vm.define "webserverq" do |webserverq|
    webserverq.vm.hostname = "webserverq"
    webserverq.vm.box = "bento/ubuntu-16.04"
    webserverq.vm.network "private_network", ip: "192.168.16.188"

    # Opsional. Edit sesuai dengan nama network adapter di komputer
    #node.vm.network "public_network", bridge: "Qualcomm Atheros QCA9377 Wireless Network Adapter"
    
    webserverq.vm.provider "virtualbox" do |vb|
      vb.name = "webserverq"
      vb.gui = false
      vb.memory = "1024"
    end

    webserverq.vm.provision "shell", path: "deployWebServer.sh", privileged: false
  end
end