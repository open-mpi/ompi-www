<?
$subject_val = "Re: [OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 17 18:09:06 2013" -->
<!-- isoreceived="20130617220906" -->
<!-- sent="Mon, 17 Jun 2013 15:09:04 -0700" -->
<!-- isosent="20130617220904" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)" -->
<!-- id="93C57614-5781-46FE-8D76-728757094D2E_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51BF4C70.9010902_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-17 18:09:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22116.php">Haroogan: "Re: [OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)"</a>
<li><strong>Previous message:</strong> <a href="22114.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with	OpenMPI 1.7.1"</a>
<li><strong>In reply to:</strong> <a href="22111.php">Haroogan: "[OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22116.php">Haroogan: "Re: [OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)"</a>
<li><strong>Reply:</strong> <a href="22116.php">Haroogan: "Re: [OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of OMPI are you using?
<br>
<p>On Jun 17, 2013, at 10:50 AM, Haroogan &lt;haroogan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to build OpenMPI with CMake under MinGW-w64 based on GCC 4.8.0 (POSIX Threads), and here is what I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In file included from ../opal/threads/mutex_windows.h:36:0,
</span><br>
<span class="quotelev1">&gt;                  from ../opal/threads/mutex.h:121,
</span><br>
<span class="quotelev1">&gt;                  from ../opal/event/event.h:161,
</span><br>
<span class="quotelev1">&gt;                  from ../opal/event/log.c:60:
</span><br>
<span class="quotelev1">&gt; ../opal/include/opal/sys/atomic.h:577:2: error: #error Atomic arithmetic on pointers not supported
</span><br>
<span class="quotelev1">&gt;  #error Atomic arithmetic on pointers not supported
</span><br>
<span class="quotelev1">&gt;   ^
</span><br>
<span class="quotelev1">&gt; ninja: build stopped: subcommand failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22115/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22116.php">Haroogan: "Re: [OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)"</a>
<li><strong>Previous message:</strong> <a href="22114.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled with	OpenMPI 1.7.1"</a>
<li><strong>In reply to:</strong> <a href="22111.php">Haroogan: "[OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22116.php">Haroogan: "Re: [OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)"</a>
<li><strong>Reply:</strong> <a href="22116.php">Haroogan: "Re: [OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)"</a>
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
