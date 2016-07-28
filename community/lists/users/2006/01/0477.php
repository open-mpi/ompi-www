<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan  4 18:21:13 2006" -->
<!-- isoreceived="20060104232113" -->
<!-- sent="Wed, 4 Jan 2006 18:21:05 -0500" -->
<!-- isosent="20060104232105" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] mpirun --prefix" -->
<!-- id="4A012214-0180-4B7B-A65D-02079B1B988A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.58.0511221104401.23144_at_schwinn.mcs.anl.gov" -->
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
<strong>Date:</strong> 2006-01-04 18:21:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0478.php">Jeff Squyres: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>Previous message:</strong> <a href="0476.php">Tom Rosmond: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0383.php">Anthony Chan: "[O-MPI users] mpirun --prefix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0479.php">Anthony Chan: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>Reply:</strong> <a href="0479.php">Anthony Chan: "Re: [O-MPI users] mpirun --prefix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Anthony --
<br>
<p>I'm really sorry; we just noticed this message today -- it got lost  
<br>
in the post-SC recovery/holiday craziness.  :-(
<br>
<p>Your request is fairly reasonable, but I wouldn't want to make it the  
<br>
default behavior.  Specifically, I can envision some scenarios where  
<br>
it might be problematic (e.g., heterogeneous situations -- which we  
<br>
don't yet support, but definitely will someday).
<br>
<p>How about this -- an ISV asked me for a similar feature a little  
<br>
while ago: if mpirun is invoked with an absolute pathname, then use  
<br>
that base directory (minus the difference from $bindir) as an option  
<br>
to an implicit --prefix.
<br>
<p>(your suggestion may actually be parsed as exactly that, but I wasn't  
<br>
entirely sure)
<br>
<p><p>On Nov 22, 2005, at 12:20 PM, Anthony Chan wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is not a bug just wonder if this can be improved.  I have been
</span><br>
<span class="quotelev1">&gt; running openmpi linked program with command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;openmpi-install-dir&gt;/bin/mpirun --prefix &lt;openmpi-install-dir&gt; \
</span><br>
<span class="quotelev1">&gt;                                  --host A  -np N a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My understanding is that --prefix allows extra search path in  
</span><br>
<span class="quotelev1">&gt; addition to
</span><br>
<span class="quotelev1">&gt; PATH and LD_LIBRARY_PATH, correct me if I am wrong.  Assuming that
</span><br>
<span class="quotelev1">&gt; openmpi's install directory structure is fixed, would it possible for
</span><br>
<span class="quotelev1">&gt; mpirun to search &lt;openmpi-install-dir&gt; automatically for libmpi.so &amp;
</span><br>
<span class="quotelev1">&gt; friends so to avoid the redundant --prefix &lt;openmpi-install-dir&gt; to
</span><br>
<span class="quotelev1">&gt; mpirun ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; A.Chan
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
<p><p><pre>
--
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0478.php">Jeff Squyres: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>Previous message:</strong> <a href="0476.php">Tom Rosmond: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0383.php">Anthony Chan: "[O-MPI users] mpirun --prefix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0479.php">Anthony Chan: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>Reply:</strong> <a href="0479.php">Anthony Chan: "Re: [O-MPI users] mpirun --prefix"</a>
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
