<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 15 12:18:50 2005" -->
<!-- isoreceived="20050215171850" -->
<!-- sent="Tue, 15 Feb 2005 12:18:43 -0500" -->
<!-- isosent="20050215171843" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Thread-safety and daemon initiation" -->
<!-- id="a1f345d780892c09b828cc574daa7d85_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.WNT.4.62.0502151129430.2380_at_blackbox" -->
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
<strong>Date:</strong> 2005-02-15 12:18:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0008.php">Dale Harris: "[O-MPI users] bproc support?"</a>
<li><strong>Previous message:</strong> <a href="0006.php">Mitch Sukalski: "Re: [O-MPI users] Thread-safety and daemon initiation"</a>
<li><strong>In reply to:</strong> <a href="0005.php">George Bosilca: "Re: [O-MPI users] Thread-safety and daemon initiation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0006.php">Mitch Sukalski: "Re: [O-MPI users] Thread-safety and daemon initiation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Neil.
<br>
<p>In addition to what George and Mitch said:
<br>
<p>Open MPI will not require a full set of daemons like LAM/MPI does.  You 
<br>
can have a full set if you wish, especially in environments where it 
<br>
makes sense (e.g., rsh/ssh, where there is little other infrastructure 
<br>
to do proper distributed process control).  There will be helper 
<br>
commands analogous to lamboot/lamhalt to help launch/kill these 
<br>
daemons.
<br>
<p>For other environments, you can simply mpirun directly.  Unlike LAM, 
<br>
mpirun has the capability to talk to PBS (for example), rather than 
<br>
lamboot.
<br>
<p><span class="quotelev1">&gt; 1) Is Open MPI thread-safe (assuming the system-supplied libraries are 
</span><br>
<span class="quotelev1">&gt; thread-safe)? In particular will it be possible to call MPI routines 
</span><br>
<span class="quotelev1">&gt; from OpenMP regions and will it be possible to use OpenMP directives 
</span><br>
<span class="quotelev1">&gt; within MPI tasks?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Does Open MPI use the same mechanism as LAM-MPI's &quot;lamboot&quot; 
</span><br>
<span class="quotelev1">&gt; (rsh/ssh) to start daemons on other nodes or is there a different 
</span><br>
<span class="quotelev1">&gt; mechanism altogether?
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
<li><strong>Next message:</strong> <a href="0008.php">Dale Harris: "[O-MPI users] bproc support?"</a>
<li><strong>Previous message:</strong> <a href="0006.php">Mitch Sukalski: "Re: [O-MPI users] Thread-safety and daemon initiation"</a>
<li><strong>In reply to:</strong> <a href="0005.php">George Bosilca: "Re: [O-MPI users] Thread-safety and daemon initiation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0006.php">Mitch Sukalski: "Re: [O-MPI users] Thread-safety and daemon initiation"</a>
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
