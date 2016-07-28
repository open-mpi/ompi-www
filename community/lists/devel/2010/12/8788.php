<?
$subject_val = "Re: [OMPI devel] Connection architectures behind the MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 12:11:23 2010" -->
<!-- isoreceived="20101217171123" -->
<!-- sent="Fri, 17 Dec 2010 12:11:18 -0500" -->
<!-- isosent="20101217171118" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Connection architectures behind the MPI" -->
<!-- id="5ED83E92-21BD-429D-8F95-A73086ABFA18_at_eecs.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AANLkTimr+GJSPj_HO7Sv3F87VxFXQzb0A85oWKY9Wc+q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Connection architectures behind the MPI<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 12:11:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8789.php">George Bosilca: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8787.php">Ralph Castain: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>In reply to:</strong> <a href="8783.php">&#213;&#197;&#190;&#167;: "[OMPI devel] Connection architectures behind the MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, the threads share the underlying resources (connections included). This is required by the matching semantic of MPI, where the matching has to be done in order per peers.
<br>
<p>There is no paper related to this topic [unfortunately].
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Dec 17, 2010, at 02:47 , &#229;&#188;&#160;&#230;&#153;&#182; wrote:
<br>
<p><span class="quotelev1">&gt; In the MPI_THREAD_MULTIPLE mode ,every thread can use MPI_Send(), MPI_Recv() simulately. I wonder the connection architectures behind the implement&#227;&#128;&#130;Does every thread have its own specific socket storage&#239;&#188;&#159;Or all the thread share the same socket when they connect to the same rank process and use some synchronization  mechanism&#227;&#128;&#130;Is there any paper relate to this topic?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8789.php">George Bosilca: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8787.php">Ralph Castain: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>In reply to:</strong> <a href="8783.php">&#213;&#197;&#190;&#167;: "[OMPI devel] Connection architectures behind the MPI"</a>
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
