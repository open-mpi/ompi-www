<?
$subject_val = "[OMPI devel] valgrind problem with 1.4.1 and MPI_Allgather()";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  7 22:21:28 2010" -->
<!-- isoreceived="20100308032128" -->
<!-- sent="Sun, 7 Mar 2010 21:21:19 -0600" -->
<!-- isosent="20100308032119" -->
<!-- name="Barry Smith" -->
<!-- email="bsmith_at_[hidden]" -->
<!-- subject="[OMPI devel] valgrind problem with 1.4.1 and MPI_Allgather()" -->
<!-- id="0327C880-901C-4E4D-A449-9F1C99E5AAE4_at_mcs.anl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0D575EF0-E9E4-4D2D-8BEC-BD3413BAA7C9_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] valgrind problem with 1.4.1 and MPI_Allgather()<br>
<strong>From:</strong> Barry Smith (<em>bsmith_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-07 22:21:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7567.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)"</a>
<li><strong>Previous message:</strong> <a href="7565.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Barry Smith &lt;bsmith_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: March 7, 2010 9:17:10 PM CST
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: Satish Balay &lt;balay_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: valgrind problem with 1.4.1 and MPI_Allgather()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ==9066== Source and destination overlap in memcpy(0xa571694,  
</span><br>
<span class="quotelev1">&gt; 0xa571698, 8)
</span><br>
<span class="quotelev2">&gt; &gt; ==9066==    at 0xC5B224: memcpy (mc_replace_strmem.c:482)
</span><br>
<span class="quotelev2">&gt; &gt; ==9066==    by 0x91FC39: ompi_ddt_copy_content_same_ddt (in ./ex3)
</span><br>
<span class="quotelev2">&gt; &gt; ==9066==    by 0x949DFA: ompi_coll_tuned_allgather_intra_bruck  
</span><br>
<span class="quotelev1">&gt; (in ./ex3)
</span><br>
<span class="quotelev2">&gt; &gt; ==9066==    by 0x9287AF: MPI_Allgather (in ./ex3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7566/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7567.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)"</a>
<li><strong>Previous message:</strong> <a href="7565.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD*(take 2)"</a>
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
