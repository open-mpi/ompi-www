<?
$subject_val = "Re: [OMPI devel] suffix flag problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 00:07:06 2009" -->
<!-- isoreceived="20090904040706" -->
<!-- sent="Fri, 4 Sep 2009 07:07:01 +0300" -->
<!-- isosent="20090904040701" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] suffix flag problems" -->
<!-- id="20FA2656-69EC-4C46-AE3C-4D59F9E7560F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AA01113.4010602_at_marine.rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] suffix flag problems<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 00:07:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6755.php">David Robertson: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Previous message:</strong> <a href="6753.php">Jeff Squyres: "Re: [OMPI devel] Failed datatype test"</a>
<li><strong>In reply to:</strong> <a href="6750.php">David Robertson: "[OMPI devel] suffix flag problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6755.php">David Robertson: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Reply:</strong> <a href="6755.php">David Robertson: "Re: [OMPI devel] suffix flag problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 3, 2009, at 9:55 PM, David Robertson wrote:
<br>
<p><span class="quotelev1">&gt; We use both the PGI and Intel compilers over an Infiniband cluster  
</span><br>
<span class="quotelev1">&gt; and I
</span><br>
<span class="quotelev1">&gt; was trying to find a way to have both orteruns in the path (in  
</span><br>
<span class="quotelev1">&gt; separate
</span><br>
<span class="quotelev1">&gt; directories) at the same time. I decided to use the --program-suffix
</span><br>
<span class="quotelev1">&gt; option. However, all the symlinks in the resulting bin directory point
</span><br>
<span class="quotelev1">&gt; to executables without the suffix. i.e. mpirun points to orterun  
</span><br>
<span class="quotelev1">&gt; when it
</span><br>
<span class="quotelev1">&gt; should point to orterun-pgi. I don't know if the suffixes need to be
</span><br>
<span class="quotelev1">&gt; added in other places as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Unfortunately, --program-suffix is not supported by Open MPI at this  
<br>
time (due to mundane, yet surprisingly complex, implementation  
<br>
issues).  Sorry!  :-(
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6755.php">David Robertson: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Previous message:</strong> <a href="6753.php">Jeff Squyres: "Re: [OMPI devel] Failed datatype test"</a>
<li><strong>In reply to:</strong> <a href="6750.php">David Robertson: "[OMPI devel] suffix flag problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6755.php">David Robertson: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Reply:</strong> <a href="6755.php">David Robertson: "Re: [OMPI devel] suffix flag problems"</a>
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
