# No-Excuses Modern Drupal Workflow
A repository for those who have run out of excuses and are ready to finally put their system requirements in code. Welcome.

##Requirements

------------
* [virtualBox](https://www.virtualbox.org/wiki/Downloads) >= 4.3.x
* [vagrant](http://downloads.vagrantup.com/) >= 1.6.x
* [ansible](http://docs.ansible.com/ansible/intro_installation.html#installing-the-control-machine) >= 1.8.x
* Make sure your `ansible/inventories/dev` is executable.

## Getting Started

------------------

1. From inside the project root, run `vagrant up`
2. You will be prompted for the administration password on your host machine. Obey.
3. Visit `192.168.33.99` in your browser of choice.

## How do I work on this?

------------------

1. From inside this project root `vagrant ssh`
2. Navigate to `/vagrant/www`

There is your project. Run `drush` commands from the `www` directory just like you would without a VB.

## Troubleshooting

------------------

* If you get the error `Command: ["hostonlyif", "create"]`, you need to restart VirtualBox.

```
sudo /Library/Application\ Support/VirtualBox/LaunchDaemons/VirtualBoxStartup.sh restart
```

* If you vagrant up and note that there are no files in your /var/www/sites/SITE, it is very likely that your NFS did not mount correctly. The solution is to halt the box, remove your exports file, and reboot the box. If this was not the problem, no harm will be done.
```
vagrant halt;
sudo rm /etc/exports;
vagrant up;
```

