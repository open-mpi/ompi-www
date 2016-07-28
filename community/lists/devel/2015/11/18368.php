<?
$subject_val = "Re: [OMPI devel] interfaces gone?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 12:17:34 2015" -->
<!-- isoreceived="20151112171734" -->
<!-- sent="Thu, 12 Nov 2015 11:17:31 -0600" -->
<!-- isosent="20151112171731" -->
<!-- name="Edgar Gabriel" -->
<!-- email="egabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] interfaces gone?" -->
<!-- id="5644C9AB.80209_at_central.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5644C89F.80305_at_central.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] interfaces gone?<br>
<strong>From:</strong> Edgar Gabriel (<em>egabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-12 12:17:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18369.php">Federico Reghenzani: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Previous message:</strong> <a href="18367.php">Edgar Gabriel: "[OMPI devel] interfaces gone?"</a>
<li><strong>In reply to:</strong> <a href="18367.php">Edgar Gabriel: "[OMPI devel] interfaces gone?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
argh. Forget about it. Sorry for the noise. linked to the wrong version :-(
<br>
Edgar
<br>
<p>On 11/12/2015 11:13 AM, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; I have an interesting observation on master, for whatever reason the new
</span><br>
<span class="quotelev1">&gt; non-blocking collective I/O interfaces don't seem to be generated
</span><br>
<span class="quotelev1">&gt; anymore correctly. Does anybody have an idea what could cause that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/gabriel/ompi-tests/mpi2basic_tests/file/read_all.c:416: undefined
</span><br>
<span class="quotelev1">&gt; reference to `MPI_File_iread_all'
</span><br>
<span class="quotelev1">&gt; /home/gabriel/ompi-tests/mpi2basic_tests/file/read_all.c:463: undefined
</span><br>
<span class="quotelev1">&gt; reference to `MPI_File_iread_at_all'
</span><br>
<span class="quotelev1">&gt; /home/gabriel/ompi-tests/mpi2basic_tests/file/read_all.c:464: undefined
</span><br>
<span class="quotelev1">&gt; reference to `MPI_File_iread_at_all'
</span><br>
<span class="quotelev1">&gt; write_all.o: In function `write_all_test':
</span><br>
<span class="quotelev1">&gt; /home/gabriel/ompi-tests/mpi2basic_tests/file/write_all.c:612: undefined
</span><br>
<span class="quotelev1">&gt; reference to `MPI_File_iwrite_all'
</span><br>
<span class="quotelev1">&gt; /home/gabriel/ompi-tests/mpi2basic_tests/file/write_all.c:667: undefined
</span><br>
<span class="quotelev1">&gt; reference to `MPI_File_iwrite_at_all'
</span><br>
<span class="quotelev1">&gt; /home/gabriel/ompi-tests/mpi2basic_tests/file/write_all.c:668: undefined
</span><br>
<span class="quotelev1">&gt; reference to `MPI_File_iwrite_at_all'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="18369.php">Federico Reghenzani: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Previous message:</strong> <a href="18367.php">Edgar Gabriel: "[OMPI devel] interfaces gone?"</a>
<li><strong>In reply to:</strong> <a href="18367.php">Edgar Gabriel: "[OMPI devel] interfaces gone?"</a>
<!-- nextthread="start" -->
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
