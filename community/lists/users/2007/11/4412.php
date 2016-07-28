<?
$subject_val = "Re: [OMPI users] OpenMPI - can you switch off threads?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 13:38:13 2007" -->
<!-- isoreceived="20071106183813" -->
<!-- sent="Tue, 06 Nov 2007 10:38:08 -0800" -->
<!-- isosent="20071106183808" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI - can you switch off threads?" -->
<!-- id="4730B490.5060404_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.GSO.4.64.0711061019550.5112_at_aragorn.brc.West.Sun.COM" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-06 13:38:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4413.php">Mostyn Lewis: "Re: [OMPI users] OpenMPI - can you switch off threads?"</a>
<li><strong>Previous message:</strong> <a href="4411.php">Mostyn Lewis: "[OMPI users] OpenMPI - can you switch off threads?"</a>
<li><strong>In reply to:</strong> <a href="4411.php">Mostyn Lewis: "[OMPI users] OpenMPI - can you switch off threads?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4413.php">Mostyn Lewis: "Re: [OMPI users] OpenMPI - can you switch off threads?"</a>
<li><strong>Reply:</strong> <a href="4413.php">Mostyn Lewis: "Re: [OMPI users] OpenMPI - can you switch off threads?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All thread support is disabled by default in Open MPI; the uDAPL BTL is 
<br>
neither thread safe nor makes use of a threaded uDAPL implementation. 
<br>
For completeness, the thread support is controlled by the 
<br>
--enable-mpi-threads and --enable-progress-threads options to the 
<br>
configure script.
<br>
<p>The referense you're seeing to libpthread.so.0 is a side effect of the 
<br>
way we print backtraces when crashes occur and can be ignored.
<br>
<p>How exactly does your MPI program fail?  Make sure you take a look at 
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> and provide all relevant 
<br>
information.
<br>
<p>Andrew
<br>
<p>Mostyn Lewis wrote:
<br>
<span class="quotelev1">&gt; I'm trying to build a udapl OpenMPI from last Friday's SVN and using
</span><br>
<span class="quotelev1">&gt; Qlogic/QuickSilver/SilverStorm 4.1.0.0.1 software. I can get it
</span><br>
<span class="quotelev1">&gt; made and it works in machine. With IB between 2 machines is fails
</span><br>
<span class="quotelev1">&gt; near termination of a job. Qlogic says they don't have a threaded
</span><br>
<span class="quotelev1">&gt; udapl (libpthread is in the traceback).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How do you (can you?) configure pthreads away alltogether?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mostyn
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
<li><strong>Next message:</strong> <a href="4413.php">Mostyn Lewis: "Re: [OMPI users] OpenMPI - can you switch off threads?"</a>
<li><strong>Previous message:</strong> <a href="4411.php">Mostyn Lewis: "[OMPI users] OpenMPI - can you switch off threads?"</a>
<li><strong>In reply to:</strong> <a href="4411.php">Mostyn Lewis: "[OMPI users] OpenMPI - can you switch off threads?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4413.php">Mostyn Lewis: "Re: [OMPI users] OpenMPI - can you switch off threads?"</a>
<li><strong>Reply:</strong> <a href="4413.php">Mostyn Lewis: "Re: [OMPI users] OpenMPI - can you switch off threads?"</a>
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
