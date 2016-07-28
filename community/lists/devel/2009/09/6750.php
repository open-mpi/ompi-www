<?
$subject_val = "[OMPI devel] suffix flag problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 14:55:18 2009" -->
<!-- isoreceived="20090903185518" -->
<!-- sent="Thu, 03 Sep 2009 14:55:15 -0400" -->
<!-- isosent="20090903185515" -->
<!-- name="David Robertson" -->
<!-- email="robertson_at_[hidden]" -->
<!-- subject="[OMPI devel] suffix flag problems" -->
<!-- id="4AA01113.4010602_at_marine.rutgers.edu" -->
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
<strong>Subject:</strong> [OMPI devel] suffix flag problems<br>
<strong>From:</strong> David Robertson (<em>robertson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-03 14:55:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6751.php">Graham, Richard L.: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6749.php">Ralph Castain: "[OMPI devel] Failed datatype test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6752.php">Chris Samuel: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Reply:</strong> <a href="6752.php">Chris Samuel: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Reply:</strong> <a href="6754.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We use both the PGI and Intel compilers over an Infiniband cluster and I 
<br>
was trying to find a way to have both orteruns in the path (in separate 
<br>
directories) at the same time. I decided to use the --program-suffix 
<br>
option. However, all the symlinks in the resulting bin directory point 
<br>
to executables without the suffix. i.e. mpirun points to orterun when it 
<br>
should point to orterun-pgi. I don't know if the suffixes need to be 
<br>
added in other places as well.
<br>
<p>For now I have manually replaced the symlinks.
<br>
<p>Thanks,
<br>
Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6751.php">Graham, Richard L.: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6749.php">Ralph Castain: "[OMPI devel] Failed datatype test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6752.php">Chris Samuel: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Reply:</strong> <a href="6752.php">Chris Samuel: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Reply:</strong> <a href="6754.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
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
