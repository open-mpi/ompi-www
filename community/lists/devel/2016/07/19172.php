<?
$subject_val = "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 13:44:40 2016" -->
<!-- isoreceived="20160708174440" -->
<!-- sent="Fri, 8 Jul 2016 12:44:32 -0500" -->
<!-- isosent="20160708174432" -->
<!-- name="Edgar Gabriel" -->
<!-- email="egabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end" -->
<!-- id="3d6f3f32-520b-f681-95e7-fe074a02b88a_at_central.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="577FE0A3.9000805_at_giref.ulaval.ca" -->
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
<strong>From:</strong> Edgar Gabriel (<em>egabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-08 13:44:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19173.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19171.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19171.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19173.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19173.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ok, but just to be able to construct a test case, basically what you are 
<br>
doing is
<br>
<p>MPI_File_write_all_begin (fh, NULL, 0, some datatype);
<br>
<p>MPI_File_write_all_end (fh, NULL, &amp;status),
<br>
<p>is this correct?
<br>
<p>Thanks
<br>
<p>Edgar
<br>
<p><p>On 7/8/2016 12:19 PM, Eric Chamberland wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08/07/16 12:52 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The default MPI I/O library has changed in the 2.x release to OMPIO for
</span><br>
<span class="quotelev1">&gt; ok, I am now doing I/O on my own hard drive... but I can test over NFS
</span><br>
<span class="quotelev1">&gt; easily.  For Lustre, I will have to produce a reduced example out of our
</span><br>
<span class="quotelev1">&gt; test suite...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; most file systems. I can look into that problem, any chance to get
</span><br>
<span class="quotelev2">&gt;&gt; access to the testsuite that you mentioned?
</span><br>
<span class="quotelev1">&gt; Yikes! Sounds interesting, but difficult to realize...  Our in-house
</span><br>
<span class="quotelev1">&gt; code is not public... :/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I however proposed (to myself) to add a nightly compilation of openmpi
</span><br>
<span class="quotelev1">&gt; (see <a href="http://www.open-mpi.org/community/lists/users/2016/06/29515.php">http://www.open-mpi.org/community/lists/users/2016/06/29515.php</a>) so
</span><br>
<span class="quotelev1">&gt; I can report problems before releases are made...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, I will work on the little script to automate the
</span><br>
<span class="quotelev1">&gt; MPI+PETSc+InHouseCode combination so I get give you a feedback as soon
</span><br>
<span class="quotelev1">&gt; as you will propose me to test a patch...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hoping this will be enough convenient for you...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/8/2016 11:32 AM, Eric Chamberland wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am testing for the first time the 2.X release candidate.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a segmentation violation using  MPI_File_write_all_end(MPI_File
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fh, const void *buf, MPI_Status *status)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The &quot;special&quot; thing, may be that in the faulty test cases, there are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes that haven't written anything, so they a a zero length buffer,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so the second parameter (buf) passed is a null pointer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Until now, it was a valid call, has it changed?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW: We are using our test suite (~2000 nightly tests) successfully
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with openmpi-1.{6,8,10}.* and MPICH since many years...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19169.php">http://www.open-mpi.org/community/lists/devel/2016/07/19169.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19171.php">http://www.open-mpi.org/community/lists/devel/2016/07/19171.php</a>
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
--
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19173.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19171.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19171.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19173.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19173.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
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
