<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 14 13:59:59 2006" -->
<!-- isoreceived="20060314185959" -->
<!-- sent="Tue, 14 Mar 2006 12:59:52 -0600" -->
<!-- isosent="20060314185952" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_connect and singleton init" -->
<!-- id="20060314185952.GD4010_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="441704D9.40501_at_cs.uh.edu" -->
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
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-14 13:59:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0858.php">Charlie Curry: "[OMPI users] Build OpenMPI as a universal binary on Mac OS X (using x86 Mac)"</a>
<li><strong>Previous message:</strong> <a href="0856.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>In reply to:</strong> <a href="0855.php">Edgar Gabriel: "Re: [OMPI users] MPI_Comm_connect and singleton init"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 14, 2006 at 12:00:57PM -0600, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; you are touching here a difficult area in Open MPI:
</span><br>
<p>I don't doubt it.  I haven't found an MPI implementation yet that does
<br>
this without any quirks or oddities :&gt;
<br>
<p><span class="quotelev1">&gt; - name publishing across independent jobs does unfortunatly not work
</span><br>
<span class="quotelev1">&gt;   right now (It does work, if all processes have been started by the
</span><br>
<span class="quotelev1">&gt;   same mpirun or if the have been spawned by a father process using
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_spawn). Your approach with passing the port as a command
</span><br>
<span class="quotelev1">&gt;   line option should work however.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - you have to start however the orted daemon *before* starting both
</span><br>
<span class="quotelev1">&gt;   jobs using the flags ' orted --seed --persistent --scope public'
</span><br>
<span class="quotelev1">&gt;   These flags are however currently just lightly tested, since a
</span><br>
<span class="quotelev1">&gt;   brand new runtime environment with much better support for these
</span><br>
<span class="quotelev1">&gt;   operations is currently under development.
</span><br>
<p>Ok, got it.   If there is some sort of setup before hand (in this
<br>
case, lanuching orted), then these independent mpi processes will
<br>
have a lot easier time talking to each other.  Makes sense. 
<br>
<p><span class="quotelev1">&gt; - regarding the 'pack data mismatch': do both machines which you are 
</span><br>
<span class="quotelev1">&gt;   using have the same data representation? The reason I ask is
</span><br>
<span class="quotelev1">&gt;   because this looks like a data type mismatch error, and Open MPI
</span><br>
<span class="quotelev1">&gt;   currently does have some restriction regarding different data
</span><br>
<span class="quotelev1">&gt;   formats and endianness...
</span><br>
<p>I'm just running this on the same machine.
<br>
<p>Thanks for the quick response.
<br>
==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Labs, IL USA                B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0858.php">Charlie Curry: "[OMPI users] Build OpenMPI as a universal binary on Mac OS X (using x86 Mac)"</a>
<li><strong>Previous message:</strong> <a href="0856.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>In reply to:</strong> <a href="0855.php">Edgar Gabriel: "Re: [OMPI users] MPI_Comm_connect and singleton init"</a>
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
