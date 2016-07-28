<?
$subject_val = "Re: [OMPI devel] Cross Memory Attach: What am I Missing?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 18 09:44:23 2012" -->
<!-- isoreceived="20121018134423" -->
<!-- sent="Thu, 18 Oct 2012 15:44:16 +0200" -->
<!-- isosent="20121018134416" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Cross Memory Attach: What am I Missing?" -->
<!-- id="2813FC92-FFE8-4101-96F7-AF342B5EDA94_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2F7AEC0555CE39418857F909CEE0451B111BDC5C_at_ECS-EXG-P-MB03.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Cross Memory Attach: What am I Missing?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-18 09:44:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11606.php">Barrett, Brian W: "[OMPI devel] &quot;Fake&quot; mpool usage"</a>
<li><strong>Previous message:</strong> <a href="11604.php">Kawashima, Takahiro: "[OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<li><strong>In reply to:</strong> <a href="11603.php">Gutierrez, Samuel K: "[OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11611.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Reply:</strong> <a href="11611.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check the permissions granted by pam. Look in the /etc/security to check for any type of restrictions.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Oct 17, 2012, at 23:30 , &quot;Gutierrez, Samuel K&quot; &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to run with CMA support, but process_vm_readv is failing with EPERM when trying to use it as a regular user (everything seems to work fine as root). I've looked around for some solutions, but I can't seem to find what I'm looking for. The documentation states that the target and source processes need to have the same GID and UID to work properly. It appears that they do, so my feeling is that I'm missing something.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sam
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11605/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11606.php">Barrett, Brian W: "[OMPI devel] &quot;Fake&quot; mpool usage"</a>
<li><strong>Previous message:</strong> <a href="11604.php">Kawashima, Takahiro: "[OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<li><strong>In reply to:</strong> <a href="11603.php">Gutierrez, Samuel K: "[OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11611.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Reply:</strong> <a href="11611.php">Gutierrez, Samuel K: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
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
