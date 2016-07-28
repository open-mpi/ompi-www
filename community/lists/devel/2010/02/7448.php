<?
$subject_val = "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 13:32:13 2010" -->
<!-- isoreceived="20100217183213" -->
<!-- sent="Wed, 17 Feb 2010 11:31:43 -0700" -->
<!-- isosent="20100217183143" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning" -->
<!-- id="40A72C03-7059-40FA-A828-6B7C2554DA7C_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B4BE40F6-9388-4E2B-B556-D2B238B18ABE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-17 13:31:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7449.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7447.php">Jeff Squyres: "[OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>In reply to:</strong> <a href="7447.php">Jeff Squyres: "[OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7449.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7449.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 17, 2010, at 11:23 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Here's my proposal on how to change the wrapper compilers to understand the difference between static and dynamic linking:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** FIRST: give the wrapper the ability to link one library or all libraries
</span><br>
<span class="quotelev1">&gt; - wrapper data text files grow a new option: libs_private (a la pkg-config(1) files)
</span><br>
<span class="quotelev1">&gt; - wrapper data text files list -l&lt;top_lib&gt; in libs, and everything else in libs_private.  For example, for mpicc:
</span><br>
<span class="quotelev1">&gt;  libs=-lmpi
</span><br>
<span class="quotelev1">&gt;  libs_private=-lopen-rte -lopen-pal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** NEXT: give the wrappers the ability to switch between just ${libs} or ${libs}+${libs_private}.  Pseudocode:
</span><br>
<span class="quotelev1">&gt; - wrapper always adds ${libs} to the argv
</span><br>
<span class="quotelev1">&gt; - wrapper examines each argv[x]:
</span><br>
<span class="quotelev1">&gt;  --ompi:shared) found_in_argv=1 ;;
</span><br>
<span class="quotelev1">&gt;  --ompi:static) add ${libs_private} ; found_in_argv=1 ;;
</span><br>
<span class="quotelev1">&gt; - if (!found_in_argv) 
</span><br>
<span class="quotelev1">&gt;  - if default set via configure, add ${libs_private} (SEE BELOW)
</span><br>
<p>This is horrible!  Users want to be able to specify -Bstatic or -static or whatever and have the right things happen.  I have a better idea - since there's basically no set of users which use OMPI's libopal and some other libopal (and indeed, that's near impossible do to the horrible API exposed by opal (data type sizes changing based on configure arguments, for example), let's give up and just have libmpi.{so,a} and completely avoid this whole rat hole of a problem?
<br>
<p>There's simply no way your solution is workable for most users.  They'll just end up wondering why when they do -Bstatic (or whatever the option is on their compiler) they get missing symbol link errors.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7449.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7447.php">Jeff Squyres: "[OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>In reply to:</strong> <a href="7447.php">Jeff Squyres: "[OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7449.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7449.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
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
