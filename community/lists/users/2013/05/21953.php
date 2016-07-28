<?
$subject_val = "Re: [OMPI users] MPIIO max record size";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 22 12:47:51 2013" -->
<!-- isoreceived="20130522164751" -->
<!-- sent="Wed, 22 May 2013 09:47:40 -0700" -->
<!-- isosent="20130522164740" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIIO max record size" -->
<!-- id="1369241260.4423.29.camel_at_cedar.reachone.com" -->
<!-- inreplyto="19FD3231-C5E5-4E7D-A893-F6BEE7727626_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPIIO max record size<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-22 12:47:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21954.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>Previous message:</strong> <a href="21952.php">Ralph Castain: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>In reply to:</strong> <a href="21952.php">Ralph Castain: "Re: [OMPI users] MPIIO max record size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21954.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was afraid that was the case.  Too bad, because applications (and the
<br>
files they use), are getting much too big for the 32 bit limit.
<br>
<p>T. Rosmond
<br>
<p><p>On Wed, 2013-05-22 at 09:37 -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On May 22, 2013, at 9:23 AM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On 05/22/2013 11:33 AM, Tom Rosmond wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for the confirmation of the MPIIO problem.  Interestingly, we
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have the same problem when using MPIIO in INTEL MPI.  So something
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fundamental seems to be wrong.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think but I am not sure that it is because the MPI I/O (ROMIO) code is the same for all distributions...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It has been written by Rob Latham.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Maybe some developers could confirm this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, ROMIO was written by Argonne/MPICH (unfair to point the finger solely at Rob) and picked up by pretty much everyone. The issue isn't a bug in MPIIO, but rather in the MPI functional descriptions. They stipulate that the input param be an int, which defaults to 32-bits on the described system. So there is no way to reference anything beyond 32-bits in size.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Afraid you'll have to do the multiple reads, or switch to a system that defaults to 64-bit integers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Eric
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; T. Rosmond
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, 2013-05-22 at 11:21 -0400, Eric Chamberland wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have experienced the same problem.. and worst, I have discovered a bug
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in MPI I/O...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; look here:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://trac.mpich.org/projects/mpich/ticket/1742">http://trac.mpich.org/projects/mpich/ticket/1742</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and here:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/10/20511.php">http://www.open-mpi.org/community/lists/users/2012/10/20511.php</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Eric
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On 05/21/2013 03:18 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; A colleague and I are running an atmospheric ensemble data assimilation
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; system using MPIIO.  We find that if for an individual
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; MPI_FILE_READ_AT_ALL the block of data read exceeds 2**31 elements, the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; program fails.  Our application is 32 bit fortran (Intel), so we
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; certainly can see why this might be expected.  Is this the case?  We
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; have a workaround by doing multiple reads from the file while moving the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; file view, so it isn't a serious problem.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks for any advice or suggestions
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; T. Rosmond
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21954.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>Previous message:</strong> <a href="21952.php">Ralph Castain: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>In reply to:</strong> <a href="21952.php">Ralph Castain: "Re: [OMPI users] MPIIO max record size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21954.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
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
