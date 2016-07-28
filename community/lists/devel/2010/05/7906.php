<?
$subject_val = "Re: [OMPI devel] Thread safety levels";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 09:55:37 2010" -->
<!-- isoreceived="20100510135537" -->
<!-- sent="Mon, 10 May 2010 22:55:29 +0900" -->
<!-- isosent="20100510135529" -->
<!-- name="Kawashima" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Thread safety levels" -->
<!-- id="87wrvblv3i.wl%t-kawashima_at_jp.fujitsu.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Prayer.1.3.2.1005101402320.24337_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Thread safety levels<br>
<strong>From:</strong> Kawashima (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-10 09:55:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7907.php">Eugene Loh: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Previous message:</strong> <a href="7905.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>In reply to:</strong> <a href="7905.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7907.php">Eugene Loh: "Re: [OMPI devel] Thread safety levels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nick and all,
<br>
<p><span class="quotelev3">&gt; &gt;&gt; On others, they use a completely different (and seriously incompatible,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; at both the syntactic and semantic levels) set of libraries.  E.g. AIX.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Sorry, I don't know these issue well.
</span><br>
<span class="quotelev2">&gt; &gt;Do you mean the case I wrote above about malloc?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No.  You have to compile using different paths if you want threading,
</span><br>
<span class="quotelev1">&gt; and that generated incompatible code (in a very few ways, but ones
</span><br>
<span class="quotelev1">&gt; that hit my users).
</span><br>
<p>Though some systems may be OK with source code modification suggested
<br>
by Sylvain, some other systems are NG with it.
<br>
It differs by architectures, OS implementations, and configurations.
<br>
I've understood your point. Thanks.
<br>
<p>But another quiestion:
<br>
configure --enable-mpi-threads (for v1.4) enables MPI_THREAD_FUNNELED/
<br>
SERIALIZED/MULTIPLE. Does this option resolve issue pointed out by Nick?
<br>
<p>By the way, how about MPICH2 or other MPI implementation?
<br>
Does anyone know?
<br>
<p>Regards,
<br>
Kawashima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7907.php">Eugene Loh: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Previous message:</strong> <a href="7905.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>In reply to:</strong> <a href="7905.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7907.php">Eugene Loh: "Re: [OMPI devel] Thread safety levels"</a>
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
