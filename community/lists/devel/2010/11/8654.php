<?
$subject_val = "Re: [OMPI devel] Question about barrier()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  2 11:54:47 2010" -->
<!-- isoreceived="20101102155447" -->
<!-- sent="Tue, 2 Nov 2010 11:54:43 -0400" -->
<!-- isosent="20101102155443" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about barrier()" -->
<!-- id="90F4DE0A-2FE5-4C3F-A906-5FF9916C21B4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E708E32060_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Question about barrier()<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-02 11:54:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8655.php">Mike Dubman: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="8653.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question about barrier()"</a>
<li><strong>In reply to:</strong> <a href="8653.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question about barrier()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 2, 2010, at 10:11 AM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes, I am calling MPI_Init_thread() with MPI_THREAD_MULTIPLE. And I have enabled thread and mpi_threads while configuring OpenMPI. BTW, I am using OpenMPI 1.4.2.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; It will be helpful to know if this is a design constraint or some implementation defect.
</span><br>
<p>When you use MPI_THREAD_MULTIPLE, we're activating locks that aren't necessary when you're MPI_THREAD_SINGLE.  These locks therefore cost overhead time that you don't normally see (and potentially system time as opposed to user time).  To date, we haven't spent a huge amount of time optimizing the THREAD_MULTIPLE code paths.  There's a number of efforts going on that may help with this, but it will take some time.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8655.php">Mike Dubman: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="8653.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question about barrier()"</a>
<li><strong>In reply to:</strong> <a href="8653.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question about barrier()"</a>
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
