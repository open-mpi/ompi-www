<?
$subject_val = "Re: [OMPI devel] [devel-core] carto (fwd)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 26 15:14:14 2008" -->
<!-- isoreceived="20080126201414" -->
<!-- sent="Sat, 26 Jan 2008 15:14:06 -0500 (Eastern Standard Time)" -->
<!-- isosent="20080126201406" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] carto (fwd)" -->
<!-- id="alpine.WNT.1.00.0801261513080.1836_at_alander" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI devel] [devel-core] carto (fwd)" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [devel-core] carto (fwd)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-26 15:14:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3057.php">Ralph H Castain: "[OMPI devel] Trunk borked"</a>
<li><strong>Previous message:</strong> <a href="3055.php">George Bosilca: "[OMPI devel] carto [moved from ompi-core]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On behalf of Jeff Squyres (discussion moved from ompi-core)
<br>
<p>I marginally favor having the .c in SVN (generated from a recent flex)
<br>
so that I don't have to see warnings every day in the MTT output.  :-)
<br>
<p>However, I am *only* in favor of this as long as the makefile
<br>
dependencies can be set right such that it will *not* auto-generate a
<br>
new copy for developers that would lead to an endless sequence of
<br>
developers accidentally committing new lex.c files.  This doesn't
<br>
happen now because the lex.c files are svn:ignore'd.
<br>
<p>George: can you setup those dependencies right?  If so, I'd be in
<br>
favor of committing the generated .c (probably with some comments in
<br>
the Makefile.am or somewhere that we'll see them for when someone
<br>
modifies the .l someday).
<br>
<p><p>On Jan 26, 2008, at 2:00 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; In the file directory in the carto framework the carto_file_lex.c is
</span><br>
<span class="quotelev1">&gt; included in the svn. This is the only place where this happens. It
</span><br>
<span class="quotelev1">&gt; might
</span><br>
<span class="quotelev1">&gt; be a good idea, but I think we should be consistent everywhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Therefore, the first question is: should we generate the .c from
</span><br>
<span class="quotelev1">&gt; the .l
</span><br>
<span class="quotelev1">&gt; every time, or should we provide directly the .c in the svn ? In the
</span><br>
<span class="quotelev1">&gt; case
</span><br>
<span class="quotelev1">&gt; we choose the second option, I prefer if we use one of the latest (and
</span><br>
<span class="quotelev1">&gt; greatest) versions of flex, as it generate more &quot;-pedantic&quot; friendly
</span><br>
<span class="quotelev1">&gt; code,
</span><br>
<span class="quotelev1">&gt; and the code is actually even capable on compiling on Windows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
--
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3057.php">Ralph H Castain: "[OMPI devel] Trunk borked"</a>
<li><strong>Previous message:</strong> <a href="3055.php">George Bosilca: "[OMPI devel] carto [moved from ompi-core]"</a>
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
