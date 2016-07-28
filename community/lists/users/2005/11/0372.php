<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 21 08:00:15 2005" -->
<!-- isoreceived="20051121130015" -->
<!-- sent="Mon, 21 Nov 2005 08:00:05 -0500" -->
<!-- isosent="20051121130005" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Minor issue: Failthrough of MCA components." -->
<!-- id="4ec3e6c13dda2e265651437ed81d2e3d_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-21 08:00:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0373.php">Troy Telford: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>Previous message:</strong> <a href="0371.php">Brian Barrett: "Re: [O-MPI users] --with-wrapper-ldflags question"</a>
<li><strong>In reply to:</strong> <a href="0361.php">Troy Telford: "[O-MPI users] Minor issue: Failthrough of MCA components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0373.php">Troy Telford: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>Reply:</strong> <a href="0373.php">Troy Telford: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Although George fixed the MX-abort error, let me clarify the rationale  
<br>
here...
<br>
<p>You are correct that at run-time, OMPI tries to load an run every  
<br>
component that it finds.  So if you have BTL components build for all  
<br>
interconnects, OMPI will query each of them at run-time and try to use  
<br>
them.
<br>
<p>But right now, we do not have a way to show exactly which interconnects  
<br>
and which networks are actually being used.  Although this is a planned  
<br>
feature, for 1.0 we compromised and decided that if any of the  
<br>
low-latency/high-speed network components decided that they could not  
<br>
be used, they would print out a warning message.  This should cover  
<br>
95+% of misconfiguration cases (e.g., the user meant to be using IB,  
<br>
but something went wrong and OMPI failed over to TCP).
<br>
<p>These warnings will likely be removed (or, more specifically, only  
<br>
displayed if requested) once we include the feature to display which  
<br>
BTL components/networks are being used at run-time.
<br>
<p><p>On Nov 17, 2005, at 1:00 PM, Troy Telford wrote:
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
<span class="quotelev1">&gt; My understanding is that when you use 'mpirun' without specifying an  
</span><br>
<span class="quotelev1">&gt; MCA
</span><br>
<span class="quotelev1">&gt; (including systemwide and/or user configurations in ~/.openmpi) ,  
</span><br>
<span class="quotelev1">&gt; OpenMPI
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
<span class="quotelev1">&gt; drivers can be loaded for the Myrinet hardware at a given time.  If I  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; the 'MX' drivers installed, mpirun will flash a message to stderr about
</span><br>
<span class="quotelev1">&gt; the GM component not being able to find hardware
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; [0,1,0]: Myrinet/GM on host n61 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; -- but OpenMPI simply (for lack of a better phrase) 'fails over' and  
</span><br>
<span class="quotelev1">&gt; uses  
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
<span class="quotelev1">&gt; MX:n62:mx_init:querying driver for version info:error 1:Failure  
</span><br>
<span class="quotelev1">&gt; querying
</span><br>
<span class="quotelev1">&gt; MX driver(wrong driver?)
</span><br>
<span class="quotelev1">&gt;          last syscall error=2:No such file or directory
</span><br>
<span class="quotelev1">&gt; MX:Aborting
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And if /neither/ MX nor GM is loaded (leaving me with Gigabit  
</span><br>
<span class="quotelev1">&gt; Ethernet), I
</span><br>
<span class="quotelev1">&gt; receive both error messages (and it exits).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Removing the MX components (I package it all up in RPM's; makes it  
</span><br>
<span class="quotelev1">&gt; easier
</span><br>
<span class="quotelev1">&gt; to manage) will then allow OpenMPI to 'failover' to TCP.  (Producing  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; same warning as when the GM component 'fails over' to MX).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The openib and mvapi components seem to behave properly, failing over  
</span><br>
<span class="quotelev1">&gt; to a
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
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0373.php">Troy Telford: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>Previous message:</strong> <a href="0371.php">Brian Barrett: "Re: [O-MPI users] --with-wrapper-ldflags question"</a>
<li><strong>In reply to:</strong> <a href="0361.php">Troy Telford: "[O-MPI users] Minor issue: Failthrough of MCA components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0373.php">Troy Telford: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>Reply:</strong> <a href="0373.php">Troy Telford: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
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
