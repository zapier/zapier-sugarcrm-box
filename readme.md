# SugarCRM Vagrant Box
This is a vagrant box to bootstrap virtual machines running sugarCRM
locally for testing. 

## Using It

* Install Virtual Box
* Install [Vagrant](http://www.vagrantup.com)
* type `vagrant up` (first time will take a little while)

Now edit the Vagrantfile and uncomment the :owner portion in the
following line:

```ruby
  config.vm.share_folder "www", "/var/www/html/", "./SugarCE-Full-6.5.8" #, :owner => 'apache'

```

* Type vagrant reload
* profit

Now if you go to http://localhost:8888 you'll have a shiney SugarCRM
instance up and running. 

Type `vagrant halt` to halt the VM and vagrant up to bring it back up. 

## Auths
Login with admin/admin


## Updating It
* Update manifests under puppet/manifests if you want to change the
system configuration
* update share/db.sql if you want to add something to the database that
will always be there whenever someone boots this box.


