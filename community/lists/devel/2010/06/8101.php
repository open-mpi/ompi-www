<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 11 12:54:03 2010" -->
<!-- isoreceived="20100611165403" -->
<!-- sent="Fri, 11 Jun 2010 10:53:50 -0600" -->
<!-- isosent="20100611165350" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing" -->
<!-- id="377CA7C6-99F7-448E-9DA4-48CC6C98652A_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5E93A42C-FF21-4F8F-89C8-0A9E76CD6038_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-11 12:53:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8102.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8100.php">Jeff Squyres: "[OMPI devel] hwloc"</a>
<li><strong>In reply to:</strong> <a href="8098.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8102.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8102.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 11, 2010, at 5:10 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 11, 2010, at 5:43 AM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interesting. Do you think this behavior of the linux kernel would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; change if the file was unlink()ed after attach ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As Jeff pointed out, the file IS unlinked by Open MPI, presumably to
</span><br>
<span class="quotelev2">&gt;&gt; ensure it is not left behind in case of abnormal termination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have to admit that I lied.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sam and I were talking on the phone yesterday about the shm_open() stuff and to my chagrin, I discovered that the mmap'ed files are *not* unlinked in OMPI until MPI_FINALIZE.  I'm not actually sure why; I could have sworn that we unlinked them after everyone mmap'ed them...
</span><br>
<p>The idea was one large memory segment for all processes and it wasn't unlinked after complete attach so that we could have spawned procs also use shmem (which never worked, of course).  So I think we could unlink during init at this point..
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8102.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8100.php">Jeff Squyres: "[OMPI devel] hwloc"</a>
<li><strong>In reply to:</strong> <a href="8098.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8102.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8102.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
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
