<?
$subject_val = "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 13:19:48 2016" -->
<!-- isoreceived="20160708171948" -->
<!-- sent="Fri, 8 Jul 2016 13:19:31 -0400" -->
<!-- isosent="20160708171931" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end" -->
<!-- id="577FE0A3.9000805_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="f3b54b1e-f301-a0c3-ea36-72d654a1f7c7_at_central.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-08 13:19:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19172.php">Edgar Gabriel: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19170.php">Edgar Gabriel: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19170.php">Edgar Gabriel: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19172.php">Edgar Gabriel: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19172.php">Edgar Gabriel: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On 08/07/16 12:52 PM, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; The default MPI I/O library has changed in the 2.x release to OMPIO for
</span><br>
<p>ok, I am now doing I/O on my own hard drive... but I can test over NFS 
<br>
easily.  For Lustre, I will have to produce a reduced example out of our 
<br>
test suite...
<br>
<p><span class="quotelev1">&gt; most file systems. I can look into that problem, any chance to get
</span><br>
<span class="quotelev1">&gt; access to the testsuite that you mentioned?
</span><br>
<p>Yikes! Sounds interesting, but difficult to realize...  Our in-house 
<br>
code is not public... :/
<br>
<p>I however proposed (to myself) to add a nightly compilation of openmpi 
<br>
(see <a href="http://www.open-mpi.org/community/lists/users/2016/06/29515.php">http://www.open-mpi.org/community/lists/users/2016/06/29515.php</a>) so 
<br>
I can report problems before releases are made...
<br>
<p>Anyway, I will work on the little script to automate the 
<br>
MPI+PETSc+InHouseCode combination so I get give you a feedback as soon 
<br>
as you will propose me to test a patch...
<br>
<p>Hoping this will be enough convenient for you...
<br>
<p>Thanks!
<br>
<p>Eric
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/8/2016 11:32 AM, Eric Chamberland wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am testing for the first time the 2.X release candidate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a segmentation violation using  MPI_File_write_all_end(MPI_File
</span><br>
<span class="quotelev2">&gt;&gt; fh, const void *buf, MPI_Status *status)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;special&quot; thing, may be that in the faulty test cases, there are
</span><br>
<span class="quotelev2">&gt;&gt; processes that haven't written anything, so they a a zero length buffer,
</span><br>
<span class="quotelev2">&gt;&gt; so the second parameter (buf) passed is a null pointer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Until now, it was a valid call, has it changed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eric
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: We are using our test suite (~2000 nightly tests) successfully
</span><br>
<span class="quotelev2">&gt;&gt; with openmpi-1.{6,8,10}.* and MPICH since many years...
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19169.php">http://www.open-mpi.org/community/lists/devel/2016/07/19169.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19172.php">Edgar Gabriel: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19170.php">Edgar Gabriel: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19170.php">Edgar Gabriel: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19172.php">Edgar Gabriel: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19172.php">Edgar Gabriel: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
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
