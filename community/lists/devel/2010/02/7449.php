<?
$subject_val = "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 14:19:31 2010" -->
<!-- isoreceived="20100217191931" -->
<!-- sent="Wed, 17 Feb 2010 14:19:25 -0500" -->
<!-- isosent="20100217191925" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning" -->
<!-- id="24086B94-A5CB-42CE-92DF-82CA2826A430_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="40A72C03-7059-40FA-A828-6B7C2554DA7C_at_sandia.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-17 14:19:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7450.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7448.php">Barrett, Brian W: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>In reply to:</strong> <a href="7448.php">Barrett, Brian W: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7450.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7450.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian and I talked higher bandwidth to figure this out.
<br>
<p>The issue is that if the user has to specify -static to their linker, they *also* have to specify --ompi:static, or Bad Things will happen.  Or, if they don't specify -static but *only* specify --ompi:static, Bad Things will happen.  In short: it seems like adding yet another wrapper-compiler-specific flag to the MPI ecosystem will cause confusion, fear, and possibly the death of some cats.
<br>
<p>The alternate proposal is to have one-big-honkin' libmpi that slurps in all of libopen-rte and libopen-pal.  We'll still install libopen-rte and libopen-pal because the tools (like orterun and friends) will need them.  But MPI apps will only -lmpi, regardless of whether they are static or shared.  There will never be a need to -lopen-rte and -lopen-pal for MPI apps.
<br>
<p>Analogous things will happen for ORTE: libopen-rte will slurp in libopen-pal.  And ORTE apps will only -lopen-rte.  Birds will sing.  Children will play.  The world will be content.
<br>
<p>--&gt; NOTE: The ABI break will still occur between 1.4 and 1.5 because we'll be .so versioning libopen-pal and libopen-rte.  The only issue Brian was concerned about was the modification of the wrapper compilers.
<br>
<p>If we do this, is there anyone who will still want the old 3-library behavior?  Specifically:
<br>
<p>a) the libraries are not slurped into each other, and
<br>
b) the MPI wrapper compilers still list all 3 libraries / ORTE wrapper compilers still list 2 libs
<br>
<p>If so, we can add a --with-wrappers-linking-all-libs configure switch (or something with a better name) to support the old behavior, but I'd argue that it should not be the default.
<br>
<p><p><p>On Feb 17, 2010, at 1:31 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 17, 2010, at 11:23 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Here's my proposal on how to change the wrapper compilers to understand the difference between static and dynamic linking:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** FIRST: give the wrapper the ability to link one library or all libraries
</span><br>
<span class="quotelev2">&gt; &gt; - wrapper data text files grow a new option: libs_private (a la pkg-config(1) files)
</span><br>
<span class="quotelev2">&gt; &gt; - wrapper data text files list -l&lt;top_lib&gt; in libs, and everything else in libs_private.  For example, for mpicc:
</span><br>
<span class="quotelev2">&gt; &gt;  libs=-lmpi
</span><br>
<span class="quotelev2">&gt; &gt;  libs_private=-lopen-rte -lopen-pal
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** NEXT: give the wrappers the ability to switch between just ${libs} or ${libs}+${libs_private}.  Pseudocode:
</span><br>
<span class="quotelev2">&gt; &gt; - wrapper always adds ${libs} to the argv
</span><br>
<span class="quotelev2">&gt; &gt; - wrapper examines each argv[x]:
</span><br>
<span class="quotelev2">&gt; &gt;  --ompi:shared) found_in_argv=1 ;;
</span><br>
<span class="quotelev2">&gt; &gt;  --ompi:static) add ${libs_private} ; found_in_argv=1 ;;
</span><br>
<span class="quotelev2">&gt; &gt; - if (!found_in_argv)
</span><br>
<span class="quotelev2">&gt; &gt;  - if default set via configure, add ${libs_private} (SEE BELOW)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is horrible!  Users want to be able to specify -Bstatic or -static or whatever and have the right things happen.  I have a better idea - since there's basically no set of users which use OMPI's libopal and some other libopal (and indeed, that's near impossible do to the horrible API exposed by opal (data type sizes changing based on configure arguments, for example), let's give up and just have libmpi.{so,a} and completely avoid this whole rat hole of a problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's simply no way your solution is workable for most users.  They'll just end up wondering why when they do -Bstatic (or whatever the option is on their compiler) they get missing symbol link errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="7450.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7448.php">Barrett, Brian W: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>In reply to:</strong> <a href="7448.php">Barrett, Brian W: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7450.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7450.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
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
