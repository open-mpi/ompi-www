<?
$subject_val = "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 12:52:17 2016" -->
<!-- isoreceived="20160708165217" -->
<!-- sent="Fri, 8 Jul 2016 11:52:14 -0500" -->
<!-- isosent="20160708165214" -->
<!-- name="Edgar Gabriel" -->
<!-- email="egabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end" -->
<!-- id="f3b54b1e-f301-a0c3-ea36-72d654a1f7c7_at_central.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="577FD5BB.3080000_at_giref.ulaval.ca" -->
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
<strong>Date:</strong> 2016-07-08 12:52:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19171.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19169.php">Eric Chamberland: "[OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19169.php">Eric Chamberland: "[OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19171.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19171.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The default MPI I/O library has changed in the 2.x release to OMPIO for 
<br>
most file systems. I can look into that problem, any chance to get 
<br>
access to the testsuite that you mentioned?
<br>
<p>Thanks
<br>
Edgar
<br>
<p><p>On 7/8/2016 11:32 AM, Eric Chamberland wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am testing for the first time the 2.X release candidate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a segmentation violation using  MPI_File_write_all_end(MPI_File
</span><br>
<span class="quotelev1">&gt; fh, const void *buf, MPI_Status *status)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;special&quot; thing, may be that in the faulty test cases, there are
</span><br>
<span class="quotelev1">&gt; processes that haven't written anything, so they a a zero length buffer,
</span><br>
<span class="quotelev1">&gt; so the second parameter (buf) passed is a null pointer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Until now, it was a valid call, has it changed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: We are using our test suite (~2000 nightly tests) successfully
</span><br>
<span class="quotelev1">&gt; with openmpi-1.{6,8,10}.* and MPICH since many years...
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19169.php">http://www.open-mpi.org/community/lists/devel/2016/07/19169.php</a>
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
<li><strong>Next message:</strong> <a href="19171.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19169.php">Eric Chamberland: "[OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19169.php">Eric Chamberland: "[OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19171.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19171.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
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
