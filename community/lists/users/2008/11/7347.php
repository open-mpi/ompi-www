<?
$subject_val = "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 14:17:25 2008" -->
<!-- isoreceived="20081119191725" -->
<!-- sent="Wed, 19 Nov 2008 14:17:19 -0500" -->
<!-- isosent="20081119191719" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)" -->
<!-- id="9D96C3B9C12B4C4A9BD31761B4F824103419DDD7EA_at_imibou-nt-1-ex.IMI.LOCAL" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4924622D.2080305_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)<br>
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-19 14:17:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7348.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7346.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>In reply to:</strong> <a href="7346.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7349.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Reply:</strong> <a href="7349.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4)  Well, this sounds reasonable, but according to the MPI-1 standard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (see page 40 for non-blocking send/recv, a more detailed explanation in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; page 30):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;A nonblocking send call indicates that the system may start copying
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; data out of the send buffer. The sender should */not access*/ any part
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of the send buffer after a nonblocking send operation is called, until
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the send completes.&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So before calling MPI_Wait to complete an isend operation, any 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; access to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the send buffer is illegal. It might be a little strict, but we have to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do what the standard says.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This have been changed in the new version of the MPI standard (2.1). 
</span><br>
<span class="quotelev2">&gt;&gt; There is no restriction anymore regarding the read operations on the 
</span><br>
<span class="quotelev2">&gt;&gt; buffers used for non-blocking sends.
</span><br>
<span class="quotelev1">&gt;Do you mean the next coming version of MPI standard? Because checking 
</span><br>
<span class="quotelev1">&gt;again standard 2.1 , I didn't see any changes of those paragraphs. See 
</span><br>
<span class="quotelev1">&gt;MPI Standard 2.1 (PDF version), page 52, and page 41.
</span><br>
<p>The (non modifying) access to a send buffer was agreed for MPI Standard 2.2 not version 2.1 see the MPI 2.2 Wiki: 
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/MpiTwoTwoWikiPage">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/MpiTwoTwoWikiPage</a>
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/45">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/45</a>
<br>
<p>Martin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7348.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7346.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>In reply to:</strong> <a href="7346.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7349.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Reply:</strong> <a href="7349.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
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
