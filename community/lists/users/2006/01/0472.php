<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan  4 15:14:13 2006" -->
<!-- isoreceived="20060104201413" -->
<!-- sent="Wed, 4 Jan 2006 15:14:05 -0500" -->
<!-- isosent="20060104201405" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="301CF475-E60A-46F9-BBD1-E3EB5746D554_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.58.0601041234190.17147_at_schwinn.mcs.anl.gov" -->
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
<strong>Date:</strong> 2006-01-04 15:14:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0473.php">Tom Rosmond: "[O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>Previous message:</strong> <a href="0471.php">Anthony Chan: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0471.php">Anthony Chan: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0488.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0488.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 4, 2006, at 2:08 PM, Anthony Chan wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Either my program quits without writing the logfile (and without
</span><br>
<span class="quotelev2">&gt;&gt; complaining) or it crashes in MPI_Finalize. I get the message
</span><br>
<span class="quotelev2">&gt;&gt; &quot;33 additional processes aborted (not shown)&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is not MPE error message.  If the logging crashes in  
</span><br>
<span class="quotelev1">&gt; MPI_Finalize,
</span><br>
<span class="quotelev1">&gt; it usually means the merging of logging data from child nodes fails.
</span><br>
<span class="quotelev1">&gt; Since you didn't get any MPE error messages, so it means the cause of
</span><br>
<span class="quotelev1">&gt; the crash isn't expected by MPE.  Does anyone know if &quot;33 additional
</span><br>
<span class="quotelev1">&gt; processes aborted (not shown)&quot; is from OpenMPI ?
</span><br>
<p>Yes, it is.  It is from mpirun telling you that 33 processes -- in  
<br>
addition to the error message that it must have shown above that --  
<br>
aborted.  So I'm guessing that 34 total processes aborted.
<br>
<p>Are you getting corefiles for these processes?  (might need to check  
<br>
the limit of your coredumpsize)
<br>
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
<li><strong>Next message:</strong> <a href="0473.php">Tom Rosmond: "[O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>Previous message:</strong> <a href="0471.php">Anthony Chan: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0471.php">Anthony Chan: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0488.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0488.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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
