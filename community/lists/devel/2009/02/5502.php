<?
$subject_val = "[OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 21 02:11:56 2009" -->
<!-- isoreceived="20090221071156" -->
<!-- sent="Fri, 20 Feb 2009 23:11:02 -0800" -->
<!-- isosent="20090221071102" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: eliminating &amp;quot;descriptor&amp;quot; argument from sendi function" -->
<!-- id="499FA906.6080409_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-21 02:11:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5503.php">Eugene Loh: "[OMPI devel] sendi side effects in the case of failure"</a>
<li><strong>Previous message:</strong> <a href="5501.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5504.php">Jeff Squyres: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5504.php">Jeff Squyres: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What:  Eliminate the &quot;descriptor&quot; argument from sendi functions.
<br>
<p>Why:  The only thing this argument is used for is so that the sendi 
<br>
function can allocate a descriptor in the event that the &quot;send&quot; cannot 
<br>
complete.  But, in that case, the sendi reverts to the PML, where there 
<br>
is already code to allocate a descriptor.  So, each sendi function (in 
<br>
each BTL that has a sendi function) must have code that is already in 
<br>
the PML anyhow.  This is unnecessary extra coding and not clean design.
<br>
<p>Where:  In each BTL that has a sendi function (only three, and there are 
<br>
not all used) and in the function prototype and at the PML calling site.
<br>
<p>When:  I'd like to incorporate this in the shared-memory latency work 
<br>
I'm doing that we're targetting for 1.3.x.
<br>
<p>Timeout:  Feb 27.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5503.php">Eugene Loh: "[OMPI devel] sendi side effects in the case of failure"</a>
<li><strong>Previous message:</strong> <a href="5501.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5504.php">Jeff Squyres: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5504.php">Jeff Squyres: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
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
