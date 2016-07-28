<?
$subject_val = "Re: [OMPI users] MPIIO max record size";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 22 12:23:41 2013" -->
<!-- isoreceived="20130522162341" -->
<!-- sent="Wed, 22 May 2013 12:23:36 -0400" -->
<!-- isosent="20130522162336" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIIO max record size" -->
<!-- id="519CF108.4060404_at_giref.ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1369236830.4423.20.camel_at_cedar.reachone.com" -->
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
<strong>Date:</strong> 2013-05-22 12:23:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21950.php">Tim Prince: "Re: [OMPI users] basic questions about compiling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21948.php">Paul Kapinos: "Re: [OMPI users] basic questions about compiling OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="21939.php">Tom Rosmond: "[OMPI users] MPIIO max record size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21952.php">Ralph Castain: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>Reply:</strong> <a href="21952.php">Ralph Castain: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/07/22342.php">Rob Latham: "Re: [OMPI users] MPIIO max record size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/22/2013 11:33 AM, Tom Rosmond wrote:
<br>
<span class="quotelev1">&gt; Thanks for the confirmation of the MPIIO problem.  Interestingly, we
</span><br>
<span class="quotelev1">&gt; have the same problem when using MPIIO in INTEL MPI.  So something
</span><br>
<span class="quotelev1">&gt; fundamental seems to be wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I think but I am not sure that it is because the MPI I/O (ROMIO) code is 
<br>
the same for all distributions...
<br>
<p>It has been written by Rob Latham.
<br>
<p>Maybe some developers could confirm this?
<br>
<p>Eric
<br>
<p><span class="quotelev1">&gt; T. Rosmond
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 2013-05-22 at 11:21 -0400, Eric Chamberland wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have experienced the same problem.. and worst, I have discovered a bug
</span><br>
<span class="quotelev2">&gt;&gt; in MPI I/O...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; look here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://trac.mpich.org/projects/mpich/ticket/1742">http://trac.mpich.org/projects/mpich/ticket/1742</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/10/20511.php">http://www.open-mpi.org/community/lists/users/2012/10/20511.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eric
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 05/21/2013 03:18 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A colleague and I are running an atmospheric ensemble data assimilation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system using MPIIO.  We find that if for an individual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_FILE_READ_AT_ALL the block of data read exceeds 2**31 elements, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program fails.  Our application is 32 bit fortran (Intel), so we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; certainly can see why this might be expected.  Is this the case?  We
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have a workaround by doing multiple reads from the file while moving the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file view, so it isn't a serious problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for any advice or suggestions
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; T. Rosmond
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21950.php">Tim Prince: "Re: [OMPI users] basic questions about compiling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21948.php">Paul Kapinos: "Re: [OMPI users] basic questions about compiling OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="21939.php">Tom Rosmond: "[OMPI users] MPIIO max record size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21952.php">Ralph Castain: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>Reply:</strong> <a href="21952.php">Ralph Castain: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/07/22342.php">Rob Latham: "Re: [OMPI users] MPIIO max record size"</a>
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
