<?
$subject_val = "Re: [OMPI users] MPI_Barrier, again";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 28 08:24:44 2012" -->
<!-- isoreceived="20120128132444" -->
<!-- sent="Sat, 28 Jan 2012 08:24:39 -0500" -->
<!-- isosent="20120128132439" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Barrier, again" -->
<!-- id="1859C141-813D-46BA-97BC-4B0290FB3291_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKaC6EweorUj2qObA8-mUiSuSJyioLaxE0mY-hG1rrYurAPQag_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Barrier, again<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-28 08:24:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18313.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18311.php">Jeff Squyres: "Re: [OMPI users] MPI_Intercomm_create hangs"</a>
<li><strong>In reply to:</strong> <a href="18298.php">Evgeniy Shapiro: "[OMPI users] MPI_Barrier, again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18314.php">Evgeniy Shapiro: "Re: [OMPI users] MPI_Barrier, again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there any chance you can make a small-ish reproducer of the issue that we can run?
<br>
<p>On Jan 27, 2012, at 10:45 AM, Evgeniy Shapiro wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a strange problem with MPI_Barrier occurring when writing to a
</span><br>
<span class="quotelev1">&gt; file. The output subroutine (the code is in FORTRAN) is called from
</span><br>
<span class="quotelev1">&gt; the main program and there is an MPI_Barrier just before the call.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the subroutine
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Process 0 checks whether the first file exists and, if not, -
</span><br>
<span class="quotelev1">&gt; creates the file 1, writes the file header and closes the file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. there is a loop over the data sets with an embedded barrier
</span><br>
<span class="quotelev1">&gt;  do i=0, iDatasets
</span><br>
<span class="quotelev1">&gt;   call MPI_Barrier
</span><br>
<span class="quotelev1">&gt;   if I do not own data - cycle and go to the next dataset (and barrier)
</span><br>
<span class="quotelev1">&gt;   check if the file exists, if not - sleep and check again until it
</span><br>
<span class="quotelev1">&gt; does (needed to make sure the buffer has been flushed)
</span><br>
<span class="quotelev1">&gt;   write my portion of the file
</span><br>
<span class="quotelev1">&gt;  end do
</span><br>
<span class="quotelev1">&gt; in theory the above should result in a sequential write of datasets
</span><br>
<span class="quotelev1">&gt; to the file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Process 0 checks whether the second file exists and, if not, -
</span><br>
<span class="quotelev1">&gt; creates the file 2, writes the file header and closes the file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. there is a loop over the data sets with an embedded barrier
</span><br>
<span class="quotelev1">&gt;  do i=0, iDatasets
</span><br>
<span class="quotelev1">&gt;   call MPI_Barrier
</span><br>
<span class="quotelev1">&gt;   if I do not own data - cycle and go to the next dataset (and barrier)
</span><br>
<span class="quotelev1">&gt;   check if the file exists, if not - sleep and check again until it
</span><br>
<span class="quotelev1">&gt; does (needed to make sure the buffer has been flushed)
</span><br>
<span class="quotelev1">&gt;   write my portion of the file including a link to the 1st file
</span><br>
<span class="quotelev1">&gt;  end do
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The sub is called several times (different files/datasets) with a
</span><br>
<span class="quotelev1">&gt; barrier between calls, erratically the program hangs in one of the
</span><br>
<span class="quotelev1">&gt; calls. The likelihood of the program hanging increases with the
</span><br>
<span class="quotelev1">&gt; increase of the number of processes.  DDT shows that when this happens
</span><br>
<span class="quotelev1">&gt; some of the processes including 0 are waiting at barrier inside the
</span><br>
<span class="quotelev1">&gt; first loop, some - at the second barrier and one whereas one  process
</span><br>
<span class="quotelev1">&gt; is in the sleep/check file status cycle in the second loop. So somehow
</span><br>
<span class="quotelev1">&gt; a part of  processes go through the 1st barrier before process 0.
</span><br>
<span class="quotelev1">&gt; This is a debug version, so no loop unrolling etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there anything I can do to make sure that the first barrier is
</span><br>
<span class="quotelev1">&gt; observed by all processes? Any advice greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Evgeniy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI: 1.4.3
</span><br>
<span class="quotelev1">&gt; (I cannot use parallel mpi io in this situation for various reasons)
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18313.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18311.php">Jeff Squyres: "Re: [OMPI users] MPI_Intercomm_create hangs"</a>
<li><strong>In reply to:</strong> <a href="18298.php">Evgeniy Shapiro: "[OMPI users] MPI_Barrier, again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18314.php">Evgeniy Shapiro: "Re: [OMPI users] MPI_Barrier, again"</a>
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
