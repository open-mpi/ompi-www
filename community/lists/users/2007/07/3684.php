<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 16 12:26:02 2007" -->
<!-- isoreceived="20070716162602" -->
<!-- sent="Mon, 16 Jul 2007 10:25:30 -0600" -->
<!-- isosent="20070716162530" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] DataTypes with &amp;quot;holes&amp;quot; for writing files" -->
<!-- id="0E149E05-963B-405D-8BB1-6279AB830351_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0707160842p4bbcd15du7787f28b45859677_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-16 12:25:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3685.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3683.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>In reply to:</strong> <a href="3683.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3709.php">Robert Latham: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wouldn't worry about it.  1.2.3 has no ROMIO fixes over 1.2.2.
<br>
<p>Brian
<br>
<p>On Jul 16, 2007, at 9:42 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.2.2, so i am lagging a bit behind.
</span><br>
<span class="quotelev1">&gt; Should i update to 1.2.3 and do the test again?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/16/07, Brian Barrett &lt;bbarrett_at_[hidden]&gt; wrote: Jody -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I usually update the ROMIO package before each major release (1.0,
</span><br>
<span class="quotelev1">&gt; 1.1, 1.2, etc.) and then only within a major release series when a
</span><br>
<span class="quotelev1">&gt; bug is found that requires an update.  This seems to be one of those
</span><br>
<span class="quotelev1">&gt; times ;).  Just to make sure we're all on the same page, which
</span><br>
<span class="quotelev1">&gt; version of Open MPI are you currently using?  I've filed a bug report
</span><br>
<span class="quotelev1">&gt; (you'll get an e-mail about it) about updating ROMIO for the 1.2
</span><br>
<span class="quotelev1">&gt; series.  I'm not sure if it will make 1.2.4, but it could.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 16, 2007, at 12:45 AM, jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rob, thanks for your info.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you know whether OpenMPI will use a newer version
</span><br>
<span class="quotelev2">&gt; &gt; of ROMIO sometimes soon?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jody
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 7/13/07, Robert Latham &lt;robl_at_[hidden]&gt; wrote:On Tue, Jul 10,
</span><br>
<span class="quotelev2">&gt; &gt; 2007 at 04:36:01PM +0000, jody wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Error: Unsupported datatype passed to  
</span><br>
<span class="quotelev1">&gt; ADIOI_Count_contiguous_blocks
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [aim-nano_02:22229] MPI_ABORT invoked on rank 0 in communicator
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_COMM_WORLD with errorcode 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jody:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI uses an old version of ROMIO.  You get this error because  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; ADIOI_Count_contiguous_blocks routine in this version of ROMIO does
</span><br>
<span class="quotelev2">&gt; &gt; not understand all MPI datatypes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can verify that this is the case by building your test against
</span><br>
<span class="quotelev2">&gt; &gt; MPICH2, which should succeed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ==rob
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Rob Latham
</span><br>
<span class="quotelev2">&gt; &gt; Mathematics and Computer Science Division    A215 0178 EA2D B059  
</span><br>
<span class="quotelev1">&gt; 8CDF
</span><br>
<span class="quotelev2">&gt; &gt; Argonne National Lab, IL USA                 B29D F333 664A 4280  
</span><br>
<span class="quotelev1">&gt; 315B
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="3685.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3683.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>In reply to:</strong> <a href="3683.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3709.php">Robert Latham: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
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
