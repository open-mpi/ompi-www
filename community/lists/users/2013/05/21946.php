<?
$subject_val = "Re: [OMPI users] MPIIO max record size";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 22 11:21:09 2013" -->
<!-- isoreceived="20130522152109" -->
<!-- sent="Wed, 22 May 2013 11:21:01 -0400" -->
<!-- isosent="20130522152101" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIIO max record size" -->
<!-- id="519CE25D.9010502_at_giref.ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1369163938.4936.13.camel_at_cedar.reachone.com" -->
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
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-22 11:21:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21947.php">Nathan Hjelm: "Re: [OMPI users] basic questions about compiling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21945.php">Blosch, Edwin L: "[OMPI users] basic questions about compiling OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21939.php">Tom Rosmond: "[OMPI users] MPIIO max record size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21949.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have experienced the same problem.. and worst, I have discovered a bug 
<br>
in MPI I/O...
<br>
<p>look here:
<br>
<a href="http://trac.mpich.org/projects/mpich/ticket/1742">http://trac.mpich.org/projects/mpich/ticket/1742</a>
<br>
<p>and here:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2012/10/20511.php">http://www.open-mpi.org/community/lists/users/2012/10/20511.php</a>
<br>
<p>Eric
<br>
<p>On 05/21/2013 03:18 PM, Tom Rosmond wrote:
<br>
<span class="quotelev1">&gt; Hello:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A colleague and I are running an atmospheric ensemble data assimilation
</span><br>
<span class="quotelev1">&gt; system using MPIIO.  We find that if for an individual
</span><br>
<span class="quotelev1">&gt; MPI_FILE_READ_AT_ALL the block of data read exceeds 2**31 elements, the
</span><br>
<span class="quotelev1">&gt; program fails.  Our application is 32 bit fortran (Intel), so we
</span><br>
<span class="quotelev1">&gt; certainly can see why this might be expected.  Is this the case?  We
</span><br>
<span class="quotelev1">&gt; have a workaround by doing multiple reads from the file while moving the
</span><br>
<span class="quotelev1">&gt; file view, so it isn't a serious problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any advice or suggestions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; T. Rosmond
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21947.php">Nathan Hjelm: "Re: [OMPI users] basic questions about compiling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21945.php">Blosch, Edwin L: "[OMPI users] basic questions about compiling OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21939.php">Tom Rosmond: "[OMPI users] MPIIO max record size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21949.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
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
