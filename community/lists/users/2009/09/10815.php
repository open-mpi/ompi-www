<?
$subject_val = "Re: [OMPI users] use additional interface for openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 09:58:47 2009" -->
<!-- isoreceived="20090929135847" -->
<!-- sent="Tue, 29 Sep 2009 16:58:42 +0300" -->
<!-- isosent="20090929135842" -->
<!-- name="worldeb_at_[hidden]" -->
<!-- email="worldeb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] use additional interface for openmpi" -->
<!-- id="E1MsdE2-00051E-04_at_ffe4.ukr.net" -->
<!-- charset="windows-1251" -->
<!-- inreplyto="9765A1C5-FBB9-4A10-A873-4A5543D78FEC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] use additional interface for openmpi<br>
<strong>From:</strong> <a href="mailto:worldeb_at_[hidden]?Subject=Re:%20[OMPI%20users]%20use%20additional%20interface%20for%20openmpi"><em>worldeb_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-09-29 09:58:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10816.php">Eugene Loh: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Previous message:</strong> <a href="10814.php">Blosch, Edwin L: "Re: [OMPI users] &quot;Failed to find the	followingexecutable&quot;	problemunder Torque"</a>
<li><strong>In reply to:</strong> <a href="10810.php">Jeff Squyres: "Re: [OMPI users] use additional interface for openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10881.php">Jeff Squyres: "Re: [OMPI users] use additional interface for openmpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10881.php">Jeff Squyres: "Re: [OMPI users] use additional interface for openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hi,
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Open MPI should just &quot;figure it out&quot; and do the Right Thing at run-
</span><br>
<span class="quotelev1">&gt; time -- is that not happening?
</span><br>
you are right it should.
<br>
But I want to exclude any traffic from OpenMPI communications, like NFS, traffic from other jobs and so on.
<br>
And use only special ethernet interface for this purpose. 
<br>
<p>So I have OpenMPI 1.3.3 installed on all nodes and head node in the same directory.
<br>
OS is the same on all cluster - debian 5.0
<br>
On nodes I have two interfaces eth0 - for NFS and so on...
<br>
and eht1 for OpenMPI.
<br>
On head node I have 5 interfaces: eth0 for NFS, eth4 for OpenMPI
<br>
Network is next:
<br>
1) Head node eht0 + nodes eht0    : 192.168.0.0/24
<br>
2) Head node eth4 + nodes eth1    : 192.168.1.0/24
<br>
<p>So how I can configure OpenMPI for using only network 2) for my purpose?
<br>
It  is one question.
<br>
<p>Other problem is next: 
<br>
I try to run some examples. But unfortunately it is not work.
<br>
My be it is not correctly configured network.
<br>
<p>I can submit any jobs only on one host from this host.
<br>
When I submit from head node for example to other nodes it hangs  without any messages.
<br>
And on node where I want to calculate I see that here is started orted daemon.
<br>
(I use default config files)
<br>
<p>Below is examples:
<br>
mpirun -v --mca btl self,sm,tcp --mca btl_base_verbose 30 --mca btl_tcp_if_include eth0 -np 2 -host n10,n11 cpi
<br>
no output, no calculations, only orted daemon on nodes
<br>
<p>mpirun -v --mca btl self,sm,tcp --mca btl_base_verbose 30 -np 2 -host n10,n11 cpi
<br>
the same as abowe
<br>
<p>mpirun -v --mca btl self,sm,tcp --mca btl_base_verbose 30 -np 2 -host n00,n00 cpi
<br>
n00 is head node - it works and produces output.
<br>
<p>on nodes:
<br>
route -n
<br>
Kernel IP routing table
<br>
Destination     Gateway         Genmask         Flags Metric Ref    Use Iface
<br>
192.168.0.0      0.0.0.0         255.255.255.0   U     0      0        0 eth0
<br>
192.168.1.0      0.0.0.0         255.255.255.0   U     0      0        0 eth1
<br>
0.0.0.0         192.168.0.100    0.0.0.0         UG    0      0        0 eth0
<br>
<p>on head node:
<br>
192.168.0.0      0.0.0.0         255.255.255.0   U     0      0        0 eth0
<br>
...
<br>
192.168.1.0      0.0.0.0         255.255.255.0   U     0      0        0 eth4
<br>
0.0.0.0         192.168.100.1    0.0.0.0         UG    0      0        0 eth1
<br>
<p>node have name n01-n99
<br>
head node is n00
<br>
<p>hosts file is like this and the same on all nodes:
<br>
<p>127.0.0.1       localhost
<br>
<p>192.168.0.1     n01.local   n01
<br>
192.168.0.2     n02.local   n02
<br>
...
<br>
192.168.0.99   n99.local   n99
<br>
<p>192.168.1.1     n01e.local   n01e
<br>
192.168.1.2     n02e.local   n02e
<br>
...
<br>
192.168.1.99   n99e.local   n99e
<br>
<p>/etc/host.conf:
<br>
multi on
<br>
order hosts,bind
<br>
<p>/etc/resolv.conf:
<br>
search local
<br>
nameserver 127.0.0.1
<br>
<p>DNS is not installed
<br>
<p>/etc/nsswitch.conf:
<br>
...
<br>
hosts:          files dns
<br>
networks:       files
<br>
<p><p>Thanx for help.
<br>
<p><span class="quotelev1">&gt; I want to use for openmpi communication the additional ethernet
</span><br>
<span class="quotelev1">&gt; interfaces on node and head node.
</span><br>
<span class="quotelev1">&gt; its is eth1 on nodes and eth4 on head node.
</span><br>
<span class="quotelev1">&gt; So how can I configure openmpi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I add in config file
</span><br>
<span class="quotelev1">&gt; btl_base_include=tcp,sm,self.
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include=eth1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; will it work or not?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And how is it working with torque batch system (daemons listen eth0
</span><br>
<span class="quotelev1">&gt; on all nodes).
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10816.php">Eugene Loh: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Previous message:</strong> <a href="10814.php">Blosch, Edwin L: "Re: [OMPI users] &quot;Failed to find the	followingexecutable&quot;	problemunder Torque"</a>
<li><strong>In reply to:</strong> <a href="10810.php">Jeff Squyres: "Re: [OMPI users] use additional interface for openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10881.php">Jeff Squyres: "Re: [OMPI users] use additional interface for openmpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10881.php">Jeff Squyres: "Re: [OMPI users] use additional interface for openmpi"</a>
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
