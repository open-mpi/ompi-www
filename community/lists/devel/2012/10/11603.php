<?
$subject_val = "[OMPI devel] Cross Memory Attach: What am I Missing?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 17 17:30:35 2012" -->
<!-- isoreceived="20121017213035" -->
<!-- sent="Wed, 17 Oct 2012 21:30:30 +0000" -->
<!-- isosent="20121017213030" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] Cross Memory Attach: What am I Missing?" -->
<!-- id="2F7AEC0555CE39418857F909CEE0451B111BDC5C_at_ECS-EXG-P-MB03.win.lanl.gov" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Cross Memory Attach: What am I Missing?<br>
<strong>From:</strong> Gutierrez, Samuel K (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-17 17:30:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11604.php">Kawashima, Takahiro: "[OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<li><strong>Previous message:</strong> <a href="11602.php">Jeff Squyres: "[OMPI devel] 1.6.3rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11605.php">George Bosilca: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Reply:</strong> <a href="11605.php">George Bosilca: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to run with CMA support, but process_vm_readv is failing with EPERM when trying to use it as a regular user (everything seems to work fine as root). I've looked around for some solutions, but I can't seem to find what I'm looking for. The documentation states that the target and source processes need to have the same GID and UID to work properly. It appears that they do, so my feeling is that I'm missing something.
<br>
<p>Any help is greatly appreciated.
<br>
<p>Thanks,
<br>
<p>Sam
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11603/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11604.php">Kawashima, Takahiro: "[OMPI devel] [patch] SEGV on processing unexpected messages"</a>
<li><strong>Previous message:</strong> <a href="11602.php">Jeff Squyres: "[OMPI devel] 1.6.3rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11605.php">George Bosilca: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Reply:</strong> <a href="11605.php">George Bosilca: "Re: [OMPI devel] Cross Memory Attach: What am I Missing?"</a>
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
