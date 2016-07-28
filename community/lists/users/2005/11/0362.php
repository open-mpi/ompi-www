<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 17 14:00:27 2005" -->
<!-- isoreceived="20051117190027" -->
<!-- sent="Thu, 17 Nov 2005 14:00:15 -0500 (Eastern Standard Time)" -->
<!-- isosent="20051117190015" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Minor issue: Failthrough of MCA components." -->
<!-- id="Pine.WNT.4.63.0511171348560.2956_at_bosilca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="op.s0ecapy1ies9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-17 14:00:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0363.php">Brian Barrett: "Re: [O-MPI users] FC4 Compile Problem"</a>
<li><strong>Previous message:</strong> <a href="0361.php">Troy Telford: "[O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>In reply to:</strong> <a href="0361.php">Troy Telford: "[O-MPI users] Minor issue: Failthrough of MCA components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0372.php">Jeff Squyres: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MX library call exit if the error handler is not set before the 
<br>
initialization. This error get fixed, it will get into the tarball 
<br>
shortly.
<br>
<p>Meanwhile you can use the btl_base_exclude=mx,gm in order to force them to 
<br>
be skipped.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Thu, 17 Nov 2005, Troy Telford wrote:
<br>
<p><span class="quotelev1">&gt; I wouldn't be suprised if this is simply an issue of configuration:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my test cluster, I've got Myrinet, InfiniBand, and Gigabit Ethernet
</span><br>
<span class="quotelev1">&gt; support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My understanding is that when you use 'mpirun' without specifying an MCA
</span><br>
<span class="quotelev1">&gt; (including systemwide and/or user configurations in ~/.openmpi) , OpenMPI
</span><br>
<span class="quotelev1">&gt; will simply attempt to use the modules that it can use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This mostly works; however I have found a bug in its mechanism.  (By no
</span><br>
<span class="quotelev1">&gt; means a showstopper, but mildly annoying).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have both the MX and GM BTL components installed; only one set of
</span><br>
<span class="quotelev1">&gt; drivers can be loaded for the Myrinet hardware at a given time.  If I have
</span><br>
<span class="quotelev1">&gt; the 'MX' drivers installed, mpirun will flash a message to stderr about
</span><br>
<span class="quotelev1">&gt; the GM component not being able to find hardware
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,0]: Myrinet/GM on host n61 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; -- but OpenMPI simply (for lack of a better phrase) 'fails over' and uses
</span><br>
<span class="quotelev1">&gt; MX.  And everything is happy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, if I have the 'GM' drivers installed, I recieve a message that
</span><br>
<span class="quotelev1">&gt; the MX component couldn't find Myrinet hardware, and OpenMPI aborts.
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; MX:n62:mx_init:querying driver for version info:error 1:Failure querying
</span><br>
<span class="quotelev1">&gt; MX driver(wrong driver?)
</span><br>
<span class="quotelev1">&gt;         last syscall error=2:No such file or directory
</span><br>
<span class="quotelev1">&gt; MX:Aborting
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And if /neither/ MX nor GM is loaded (leaving me with Gigabit Ethernet), I
</span><br>
<span class="quotelev1">&gt; receive both error messages (and it exits).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Removing the MX components (I package it all up in RPM's; makes it easier
</span><br>
<span class="quotelev1">&gt; to manage) will then allow OpenMPI to 'failover' to TCP.  (Producing the
</span><br>
<span class="quotelev1">&gt; same warning as when the GM component 'fails over' to MX).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The openib and mvapi components seem to behave properly, failing over to a
</span><br>
<span class="quotelev1">&gt; usable interface and continuing execution.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0363.php">Brian Barrett: "Re: [O-MPI users] FC4 Compile Problem"</a>
<li><strong>Previous message:</strong> <a href="0361.php">Troy Telford: "[O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>In reply to:</strong> <a href="0361.php">Troy Telford: "[O-MPI users] Minor issue: Failthrough of MCA components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0372.php">Jeff Squyres: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
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
