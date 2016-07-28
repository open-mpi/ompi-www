<?
$subject_val = "[OMPI users] segfault when resuming on different host";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 29 14:08:11 2011" -->
<!-- isoreceived="20111229190811" -->
<!-- sent="Thu, 29 Dec 2011 11:19:47 -0700" -->
<!-- isosent="20111229181947" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="[OMPI users] segfault when resuming on different host" -->
<!-- id="4EFCAF43.8060408_at_byu.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] segfault when resuming on different host<br>
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-29 13:19:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18071.php">Josh Hursey: "Re: [OMPI users] segfault when resuming on different host"</a>
<li><strong>Previous message:</strong> <a href="18069.php">Yevgeny Kliteynik: "Re: [OMPI users] Problems when running open-MPI on OFED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18071.php">Josh Hursey: "Re: [OMPI users] segfault when resuming on different host"</a>
<li><strong>Reply:</strong> <a href="18071.php">Josh Hursey: "Re: [OMPI users] segfault when resuming on different host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, all.
<br>
<p>I'm in the middle of testing some of the checkpoint/restart capabilities
<br>
of OpenMPI with BLCR on our cluster.  I've been able to checkpoint and
<br>
restart successfully when I restart on the same nodes as it was running
<br>
previously.  But when I try to restart on a different host, I always get
<br>
an error like this:
<br>
<p><span class="quotelev1">&gt; $ ompi-restart ompi_global_snapshot_15935.ckpt
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 15201 on node m5stage-1-2.local exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p><p>Now, it's very possible that I've missed something during the setup, or
<br>
that despite my failure to find it while searching the mailing list,
<br>
that this is already answered somewhere, but none of the threads I could
<br>
find seemed to apply (eg. cr_restart *is* installed, etc.).
<br>
<p>I'm attaching a tarball that contains the source code of the very-simple
<br>
test application, as well as some example output of &quot;ompi_info --all&quot;
<br>
and &quot;ompi_info -v ompi full --parsable&quot;.  I don't know if this will be
<br>
useful or not.
<br>
<p>This is being tested on CentOS v5.4 with BLCR v0.8.4.  I've seen this
<br>
problem with OpenMPI v1.4.2, v1.4.4, and v1.5.4.
<br>
<p>If anyone has any ideas on what's going on, or how to best debug this,
<br>
I'd love to hear about it.
<br>
<p>I don't mind doing the legwork too, but I'm just stumped where to go
<br>
from here.  I have some core files, but I'm having trouble getting the
<br>
symbols from the backtrace in gdb.  Maybe I'm doing it wrong.
<br>
<p><p>TIA,
<br>
<p><pre>
-- 
Lloyd Brown
Systems Administrator
Fulton Supercomputing Lab
Brigham Young University
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>

</pre>
<hr>
<ul>
<li>application/gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18070/byufsl_debugging_segfault_on_resume.tar.gz">byufsl_debugging_segfault_on_resume.tar.gz</a>
</ul>
<!-- attachment="byufsl_debugging_segfault_on_resume.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18071.php">Josh Hursey: "Re: [OMPI users] segfault when resuming on different host"</a>
<li><strong>Previous message:</strong> <a href="18069.php">Yevgeny Kliteynik: "Re: [OMPI users] Problems when running open-MPI on OFED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18071.php">Josh Hursey: "Re: [OMPI users] segfault when resuming on different host"</a>
<li><strong>Reply:</strong> <a href="18071.php">Josh Hursey: "Re: [OMPI users] segfault when resuming on different host"</a>
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
