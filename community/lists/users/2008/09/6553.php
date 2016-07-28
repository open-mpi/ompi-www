<?
$subject_val = "Re: [OMPI users] bug in MPI_File_get_position_shared ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 17:03:45 2008" -->
<!-- isoreceived="20080915210345" -->
<!-- sent="Mon, 15 Sep 2008 16:03:39 -0500" -->
<!-- isosent="20080915210339" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in MPI_File_get_position_shared ?" -->
<!-- id="20080915210339.GB6682_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="023F1DB0-8E8D-4C8C-8156-80AE52FF041F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] bug in MPI_File_get_position_shared ?<br>
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-15 17:03:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6552.php">Shafagh Jafer: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6361.php">Jeff Squyres: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6370.php">Yvan Fournier: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Aug 16, 2008 at 08:05:14AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 13, 2008, at 7:06 PM, Yvan Fournier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I seem to have encountered a bug in MPI-IO, in which
</span><br>
<span class="quotelev2">&gt;&gt; MPI_File_get_position_shared hangs when called by multiple processes  
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; a communicator. It can be illustrated by the following simple test  
</span><br>
<span class="quotelev2">&gt;&gt; case,
</span><br>
<span class="quotelev2">&gt;&gt; in which a file is simply created with C IO, and opened with MPI-IO.
</span><br>
<span class="quotelev2">&gt;&gt; (defining or undefining MY_MPI_IO_BUG on line 5 enables/disables the
</span><br>
<span class="quotelev2">&gt;&gt; bug). From the MPI2 documentation, It seems that all processes should 
</span><br>
<span class="quotelev2">&gt;&gt; be
</span><br>
<span class="quotelev2">&gt;&gt; able to call MPI_File_get_position_shared, but if more than one  
</span><br>
<span class="quotelev2">&gt;&gt; process
</span><br>
<span class="quotelev2">&gt;&gt; uses it, it fails. Setting the shared pointer helps, but this should  
</span><br>
<span class="quotelev2">&gt;&gt; not
</span><br>
<span class="quotelev2">&gt;&gt; be necessary, and the code still hangs (in more complete code, after
</span><br>
<span class="quotelev2">&gt;&gt; writing data).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I encounter the same problem with Open MPI 1.2.6 and MPICH2 1.0.7, so
</span><br>
<span class="quotelev2">&gt;&gt; I may have misread the documentation, but I suspect a ROMIO bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bummer.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be best to report this directly to the ROMIO maintainers via 
</span><br>
<span class="quotelev1">&gt; romio-maint_at_mcs.anl.gov.  They lurk on this list, but they may not be 
</span><br>
<span class="quotelev1">&gt; paying attention to every mail.
</span><br>
<p>Hi, that would be me, and yup, as you can see I don't check in too
<br>
often.  
<br>
<p>Just to wrap this up, I'm glad you found workarounds.  Shared file
<br>
pointers have a certain seductive quality about them, but they are a
<br>
pain in the neck to implement in the library.  
<br>
<p>You will almost assuredly scale to larger numbers of processors and
<br>
achieve higher I/O bandwidth if you do just a little bit of work.
<br>
Keep track of file offsets on your own and instead of doing
<br>
independent I/O use MPI_File_read_at_all or MPI_File_write_at_all.
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6552.php">Shafagh Jafer: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6361.php">Jeff Squyres: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6370.php">Yvan Fournier: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
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
