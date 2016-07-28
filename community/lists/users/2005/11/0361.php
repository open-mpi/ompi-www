<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 17 13:00:23 2005" -->
<!-- isoreceived="20051117180023" -->
<!-- sent="Thu, 17 Nov 2005 11:00:15 -0700" -->
<!-- isosent="20051117180015" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="[O-MPI users] Minor issue: Failthrough of MCA components." -->
<!-- id="op.s0ecapy1ies9li_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-17 13:00:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0362.php">George Bosilca: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>Previous message:</strong> <a href="0360.php">Brian Barrett: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0362.php">George Bosilca: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>Reply:</strong> <a href="0362.php">George Bosilca: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>Reply:</strong> <a href="0372.php">Jeff Squyres: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wouldn't be suprised if this is simply an issue of configuration:
<br>
<p>In my test cluster, I've got Myrinet, InfiniBand, and Gigabit Ethernet  
<br>
support.
<br>
<p>My understanding is that when you use 'mpirun' without specifying an MCA  
<br>
(including systemwide and/or user configurations in ~/.openmpi) , OpenMPI  
<br>
will simply attempt to use the modules that it can use.
<br>
<p>This mostly works; however I have found a bug in its mechanism.  (By no  
<br>
means a showstopper, but mildly annoying).
<br>
<p>I have both the MX and GM BTL components installed; only one set of  
<br>
drivers can be loaded for the Myrinet hardware at a given time.  If I have  
<br>
the 'MX' drivers installed, mpirun will flash a message to stderr about  
<br>
the GM component not being able to find hardware
<br>
***
<br>
--------------------------------------------------------------------------
<br>
[0,1,0]: Myrinet/GM on host n61 was unable to find any NICs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
***
<br>
-- but OpenMPI simply (for lack of a better phrase) 'fails over' and uses  
<br>
MX.  And everything is happy.
<br>
<p>However, if I have the 'GM' drivers installed, I recieve a message that  
<br>
the MX component couldn't find Myrinet hardware, and OpenMPI aborts.
<br>
***
<br>
MX:n62:mx_init:querying driver for version info:error 1:Failure querying  
<br>
MX driver(wrong driver?)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;last syscall error=2:No such file or directory
<br>
MX:Aborting
<br>
***
<br>
<p>And if /neither/ MX nor GM is loaded (leaving me with Gigabit Ethernet), I  
<br>
receive both error messages (and it exits).
<br>
<p>Removing the MX components (I package it all up in RPM's; makes it easier  
<br>
to manage) will then allow OpenMPI to 'failover' to TCP.  (Producing the  
<br>
same warning as when the GM component 'fails over' to MX).
<br>
<p>The openib and mvapi components seem to behave properly, failing over to a  
<br>
usable interface and continuing execution.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0362.php">George Bosilca: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>Previous message:</strong> <a href="0360.php">Brian Barrett: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0362.php">George Bosilca: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>Reply:</strong> <a href="0362.php">George Bosilca: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>Reply:</strong> <a href="0372.php">Jeff Squyres: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
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
