<?
$subject_val = "Re: [OMPI users] To connect two computers as two nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 31 15:38:11 2009" -->
<!-- isoreceived="20090531193811" -->
<!-- sent="Sun, 31 May 2009 15:37:52 -0400" -->
<!-- isosent="20090531193752" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] To connect two computers as two nodes" -->
<!-- id="4A22DC90.4020604_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9b0da5ce0905300754k764f7a7am4e19cdf08c0113e3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] To connect two computers as two nodes<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-31 15:37:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9478.php">Gus Correa: "Re: [OMPI users] Performance testing software?"</a>
<li><strong>Previous message:</strong> <a href="9476.php">wruslan wyusoff: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9471.php">jody: "Re: [OMPI users] To connect two computers as two nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9472.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] To connect two computers as two nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Depesh, list
<br>
<p>1) I second Jody's suggestion, the OpenMPI FAQ are an excellent
<br>
resource.  I would add also the OpenMPI README file.
<br>
Read them carefully  before you start.  Or better, **study** them!
<br>
<p>2) As for the connection, I presume you have at least one ethernet port
<br>
on each computer.
<br>
In this case the cheaper physical connection, without a switch,
<br>
is to plugin a Cat5e Ethernet cable across the two computer ports.
<br>
If it the NICs are Fast Ethernet (100Mb/s) you may need a crossover
<br>
cable, or a crossover cable adapter.  For Gigabit Ethernet ports
<br>
all may work well with a regular cable.
<br>
<p>If you have a cheap 5-8 port Ethernet unmanaged switch (Fast Ethernet or 
<br>
Gigabit Ethernet), you can use it
<br>
instead of direct connection.
<br>
The switch should be dedicated only for this objective,
<br>
better not hook more computers to it, or use any uplink to another network.
<br>
Just plug a regular Ethernet
<br>
cable between each computer NIC/port and the switch
<br>
(don't use crossover cables).
<br>
<p>3) You need to assign IP addresses to the two computers,
<br>
or better, to each Ethernet port on each computer.
<br>
Actually, what you are doing is to create a private network for MPI
<br>
communication, a very simple one with two computers only.
<br>
<p>If you are running CentOS, RHEL, of Fedora this is done
<br>
in by editing the /etc/syconfig/network-scripts/ifcfg-ethX,
<br>
where X is 0,1,2, etc, depending on which port you are using for the 
<br>
private network.
<br>
Before you edit, make a backup copy of the original file (if it exists)
<br>
for safety (cp ifcfg-ethX ifcfg-ethX.original).
<br>
The you can add or replace lines like these:
<br>
<p>DEVICE=ethX
<br>
BOOTPROTO=static
<br>
HWADDR=rs:tu:vx:yz
<br>
IPADDR=192.168.1.1
<br>
NETMASK=255.255.255.0
<br>
ONBOOT=yes
<br>
<p>NOTE:
<br>
<p>A) The network prefix 192.168 is specific for private networks.
<br>
B) The netmask 255.255.255.0 would allow up to 254 computers (but you 
<br>
will use only two).
<br>
C) The hdwaddr above should be filled with the hexadecimal MAC address 
<br>
of your NIC/port, not with rs:tu:vx:yz, of course.
<br>
D) You can use IPADDR=192.168.1.1 for one computer, and 
<br>
IPADDR=192.168.1.2 for the other.
<br>
<p>There must be similar files in other Linux distributions
<br>
(Ubuntu, SLES, etc), but I am not familiar to those distros,
<br>
you need to find the appropriate files if you use those distros.
<br>
<p>Be careful so as not to break any existing ifcfg-ethX
<br>
configuration file that you may want to keep.
<br>
For instance, you may want to keep one port/NIC to connect to the 
<br>
Internet (if the computers are not on the Internet, this shouldn't be a 
<br>
problem).
<br>
In this case you should use another port/NIC for the
<br>
private network. (If you don't have two ports, the best thing to do is
<br>
to buy NICs and install on the motherboard slots.)
<br>
<p><p>4) On each computer create a file /etc/hosts with a content like this:
<br>
<p>127.0.0.1	localhost.localdomain	localhost
<br>
192.168.1.1	computer-1
<br>
192.168.1.2	computer-2
<br>
<p>Where you can replace &quot;computer-1&quot; and &quot;computer-2&quot; by the names you
<br>
prefer to use, and I assume you configured the computers with the 
<br>
private IP addresses 192.168.1.1 and 192.168.1.2.
<br>
<p>If the /etc/hosts file is already there,
<br>
just add the lines above that are missing.
<br>
<p>5) You also need to establish ssh passwordless connections between
<br>
the two computers.  There are many recipes for this,
<br>
if you Google them out.  Here is one example:
<br>
<p><a href="http://agenda.clustermonkey.net/index.php/Passwordless_SSH_Logins">http://agenda.clustermonkey.net/index.php/Passwordless_SSH_Logins</a>
<br>
<p>6) Reboot the computers for the changes to take effect.
<br>
<p>7) Check if it works with ping:
<br>
<p>On computer-1 do &quot;ping computer-2&quot;
<br>
On computer-2 do &quot;ping computer-1&quot;
<br>
<p>8) Install OpenMPI from the source files.
<br>
Read the README file and the FAQ carefully, particularly the ones
<br>
about installation.
<br>
Download the tarball file and  untar it.
<br>
Configure it with a prefix that won't overwrite anything on Linux.
<br>
Something like this:  ./configure --prefix=/my/path/to/openmpi-1.3.2 .
<br>
You can choose the compilers to use during configure also.
<br>
Then do make and make install.
<br>
Read the FAQ again to learn how to compile and run and MPI program.
<br>
<p>9) You will need to create an OpenMPI &quot;hostfile&quot; with this content:
<br>
<p>computer-1 slots=1
<br>
computer-1 slots=1
<br>
<p><p>You can the /my/path/to/openmpi-1.3.2/openmpi-default-hostfile with
<br>
the contents above.
<br>
<p>Use &quot;slots=1&quot; if you have single-processor, single-core computers.
<br>
If one or both of them are, say, dual-processor quad-core,
<br>
then you have 8 slots on each, so use &quot;slots=8&quot; instead.
<br>
<p>10) Note:  You need to install OpenMPI this on *BOTH* computers,
<br>
or install on a  directory that is (NFS) mounted on both computers.
<br>
<p>I hope this helps.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p><p><p>jody wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I think the best way to start is to look at the FAQ -
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
</span><br>
<span class="quotelev1">&gt; there you find explanations on how to prepare your computers,
</span><br>
<span class="quotelev1">&gt; how to install Open-MPI, how to compile MPI-Programs and how to run them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards
</span><br>
<span class="quotelev1">&gt;   Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, May 30, 2009 at 1:03 PM, deepesh reja&lt;drejaorai_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; I am new to parallel programming. Can you please tell me how i can connect
</span><br>
<span class="quotelev2">&gt;&gt; two computers to run a parallel program.
</span><br>
<span class="quotelev2">&gt;&gt; Please give me whole idea how to setup all the processors to respond to a
</span><br>
<span class="quotelev2">&gt;&gt; parallel program.
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Deepesh Reja
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="9478.php">Gus Correa: "Re: [OMPI users] Performance testing software?"</a>
<li><strong>Previous message:</strong> <a href="9476.php">wruslan wyusoff: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compiler error: Segmentation fault - openmpi-1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9471.php">jody: "Re: [OMPI users] To connect two computers as two nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9472.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] To connect two computers as two nodes"</a>
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
