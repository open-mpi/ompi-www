<?
$subject_val = "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 11:31:38 2009" -->
<!-- isoreceived="20090930153138" -->
<!-- sent="Wed, 30 Sep 2009 11:31:28 -0400" -->
<!-- isosent="20090930153128" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi" -->
<!-- id="4AC379D0.5030806_at_ldeo.columbia.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="9b0da5ce0909300309l770d0f40j67c10aff5a13745a_at_mail.gmail.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-30 11:31:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10832.php">Constantinos Makassikis: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>Previous message:</strong> <a href="10830.php">jody: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<li><strong>In reply to:</strong> <a href="10830.php">jody: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ankur Pachauri
<br>
<p>Besides what Jody already said.
<br>
<p>1) Do these machines have Internet IP addresses
<br>
and, say, corresponding Ethernet interfaces that
<br>
you want to use for MPI?
<br>
<p>2) Or are you planning to establish a private network
<br>
only for using OpenMPI?
<br>
<p>I would suggest using #2.
<br>
<p>Typically this can be done if you don't care about having
<br>
Internet connections on each machine, and will dedicate
<br>
&quot;the&quot; single Ethernet port on each machine to MPI,
<br>
or if you have two or more Ethernet ports on each machine,
<br>
so that you can use one of them only for MPI.
<br>
Many current motherboards come with two onboard Gigabit
<br>
Ethernet ports.
<br>
Check what you have.
<br>
<p>On either case you need an Ethernet switch to connect the machines.
<br>
(Don't use an Ethernet hub, or the performance will be very poor.)
<br>
<p>If you don't care much about high performance,
<br>
or if your budget is tight,
<br>
a cheap SOHO (unmanaged) type Ethernet switch will do.
<br>
I have a test/toy cluster here built with these switches
<br>
and it works fine, although it will never make it to Top500,
<br>
of course.
<br>
There are even 5-port and 8-port switches of this kind.
<br>
<p>If you care about high performance you need a better switch.
<br>
<p>You need to connect the &quot;MPI&quot; ports to the switch,
<br>
using Cat5e or Cat6 Ethernet cables.
<br>
For an unmanaged switch that is basically it.
<br>
<p>***
<br>
<p>You need to configure a private network (typically with
<br>
IP addresses like 192.168.1.1, 192.168.1.2, ...
<br>
192.168.1.5.
<br>
On Fedora this is done by editing a configuration file
<br>
called /etc/sysconfig/network-scripts/ifcfg-ethX (where X is
<br>
0 or 1, depending on the port you are using for MPI).
<br>
Check the RedHat user's guide for details (Fedora is very similar).
<br>
<p>Here is one example:
<br>
<p>$ cat /etc/sysconfig/network-scripts/ifcfg-eth1
<br>
# name of your Ethernet controller
<br>
DEVICE=eth1
<br>
TYPE=Ethernet
<br>
ONBOOT=yes
<br>
BOOTPROTO=none
<br>
NETWORK=192.168.1.0
<br>
NETMASK=255.255.255.0
<br>
IPADDR=192.168.1.1
<br>
HWADDR=ab:cd:ef:12:34:56
<br>
<p>The items that vary on each node are the IPADDR (IP address)
<br>
and the HWADDRR (the MAC address of your Ethernet port dedicated
<br>
to MPI).
<br>
<p>You need to create or extend a /etc/hosts file on *every* node,
<br>
with the name and IP address of all other nodes.
<br>
For instance:
<br>
<p>$ cat /etc/hosts
<br>
<p>... stuff that was already there (don't remove the loopback address!)
<br>
<p>node01-mpi 192.168.1.1
<br>
node02-mpi 192.168.1.2
<br>
...
<br>
node05-mpi 192.168.1.5
<br>
<p>***
<br>
<p>NOTE: You need to use the *same* names above (actually associated to
<br>
the Ethernet port on the node, not only to the node itself)
<br>
in your OpenMPI nodes file (or use the same names in the
<br>
mpiexec command line).
<br>
<p>***
<br>
<p>Reboot the machines and check if the private subnet is working.
<br>
Use ping across all pairs of machines.
<br>
For instance, login to node01 and
<br>
do:
<br>
<p>ping -I eth1 -R node02-mpi
<br>
<p>The output should tell you if the &quot;MPI&quot; IP addresses
<br>
(and Ethernet ports) are being used.
<br>
<p>Repeat the procedure on all pairs of nodes ( 4! = 24 pairs for you).
<br>
<p>You need to establish passwordless connections across the node.
<br>
There are many ways to do this.
<br>
<p>For a private subnet (like the 192.168.10 above)
<br>
a simple one is to generate a single RSA key (with ssh-keygen)
<br>
*without passphrase*.
<br>
<p>Then copy the rsa-pub file to the /etc/ssh/ssh_known_hosts2
<br>
Edit the ssh_known_hosts2 file, repeat the key for as many
<br>
nodes you have (5 times in your case), and put the IP address
<br>
and MPI interface name of each node, something like this:
<br>
<p>192.168.1.1,node01-mpi ssh-rsa Your-public-RSA-Key-goes-here
<br>
192.168.1.2,node02-mpi ssh-rsa Your-public-RSA-Key-goes-here
<br>
...
<br>
192.168.1.5,node05-mpi ssh-rsa Your-public-RSA-Key-goes-here
<br>
<p>Note, it is the *same* RSA public key on all lines.
<br>
<p>Check if passwordless ssh is working.
<br>
This can be done by logging in to each node and then
<br>
ssh to another node:
<br>
<p>Say, from node01 try:
<br>
<p>ssh node02-mpi
<br>
<p>Repeat on all pairs of nodes.
<br>
<p>***
<br>
<p>Well, save some mistake in the details above,
<br>
this should work.
<br>
<p>I hope this helps.
<br>
<p>Gus Correa
<br>
<p><p><p>jody wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; All of your questions are answered in the FAQ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you have a TCP/IP connection between your machines so that each
</span><br>
<span class="quotelev1">&gt; machine can reach every other one,
</span><br>
<span class="quotelev1">&gt; that will be ok.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First make sure you can get access from each machine to every other
</span><br>
<span class="quotelev1">&gt; one using ssh without a password.
</span><br>
<span class="quotelev1">&gt; See the FAQ:
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/faq/?category=rsh">http://www.open-mpi.org/faq/?category=rsh</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Make sure to set PATH and LD_LIBRARY_PATH as described in the FAQ:
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Next, make sure your application is accessible by all of your
</span><br>
<span class="quotelev1">&gt; machines. I use an nfs directory shared by all my machines,
</span><br>
<span class="quotelev1">&gt; and that is where i put the application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To start your application, follow the instructions in the FAQ:
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you want to use host files, read about how to use them in the FAQ:
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/faq/?category=running#mpirun-host">http://www.open-mpi.org/faq/?category=running#mpirun-host</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 30, 2009 at 11:00 AM, ankur pachauri
</span><br>
<span class="quotelev1">&gt; &lt;ankurpachauri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been able to install open mpi on two independent machines having FC
</span><br>
<span class="quotelev2">&gt;&gt; 10. The simple hello world programms are running fine on the independent
</span><br>
<span class="quotelev2">&gt;&gt; machines....But can any one pls help me by letting me know how to connect
</span><br>
<span class="quotelev2">&gt;&gt; the two machines and run a common program between the two....how do we a do
</span><br>
<span class="quotelev2">&gt;&gt; a lamboot -v lamhosts in case of openmpi?
</span><br>
<span class="quotelev2">&gt;&gt; How do we get the open mpi running on the two computers simultaneously and
</span><br>
<span class="quotelev2">&gt;&gt; excute a common program on the two machines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Sep 30, 2009 at 12:24 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have look at the Open MPI FAQ:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It gives you all the information you need to start working with your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Sep 30, 2009 at 8:25 AM, ankur pachauri &lt;ankurpachauri_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dear all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i am new to openmpi, all that i need is to set up the cluster of around
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes in my lab, i am using fedora 7 in the lab. so i'll be thankfull to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if let me know the steps or the procedure to setup the cluster(as in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; case of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lam/mpi- passwordless ssh or nfs mount and ...).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ankur Pachauri.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 09927590910
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Research Scholar,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; software engineering.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Department of Mathematics
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dayalbagh Educational Institute
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dayalbagh,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; AGRA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ankur Pachauri.
</span><br>
<span class="quotelev2">&gt;&gt; 09927590910
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Research Scholar,
</span><br>
<span class="quotelev2">&gt;&gt; software engineering.
</span><br>
<span class="quotelev2">&gt;&gt; Department of Mathematics
</span><br>
<span class="quotelev2">&gt;&gt; Dayalbagh Educational Institute
</span><br>
<span class="quotelev2">&gt;&gt; Dayalbagh,
</span><br>
<span class="quotelev2">&gt;&gt; AGRA
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10832.php">Constantinos Makassikis: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>Previous message:</strong> <a href="10830.php">jody: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<li><strong>In reply to:</strong> <a href="10830.php">jody: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
