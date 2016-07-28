<?
$subject_val = "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 17:51:47 2010" -->
<!-- isoreceived="20100217225147" -->
<!-- sent="Wed, 17 Feb 2010 17:51:42 -0500" -->
<!-- isosent="20100217225142" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning" -->
<!-- id="80F00569-5587-4137-9973-CFF81574AE03_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100217200542.GE9993_at_gmx.de" -->
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
<strong>Date:</strong> 2010-02-17 17:51:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7453.php">Christian Csar: "[OMPI devel] Limitations on pending nonblocking operations"</a>
<li><strong>Previous message:</strong> <a href="7451.php">Jeff Squyres: "Re: [OMPI devel] PATCH: remove trailing colon at the end of thegenerated	LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="7450.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7454.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7454.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 17, 2010, at 3:05 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev2">&gt; &gt; The issue is that if the user has to specify -static to their linker,
</span><br>
<span class="quotelev2">&gt; &gt; they *also* have to specify --ompi:static, or Bad Things will happen.
</span><br>
<span class="quotelev2">&gt; &gt; Or, if they don't specify -static but *only* specify --ompi:static,
</span><br>
<span class="quotelev2">&gt; &gt; Bad Things will happen.  In short: it seems like adding yet another
</span><br>
<span class="quotelev2">&gt; &gt; wrapper-compiler-specific flag to the MPI ecosystem will cause
</span><br>
<span class="quotelev2">&gt; &gt; confusion, fear, and possibly the death of some cats.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you care for omitting -lopen-pal and -lorte only for capable Linux
</span><br>
<span class="quotelev1">&gt; systems?  With new-enough binutils, you should be able to use
</span><br>
<span class="quotelev1">&gt; -Wl,--as-needed -Wl,--no-as-needed around these two libs.
</span><br>
<p>Mmmm.  Good point.  But I don't think it helps us on Solaris or OS X, does it?  (maybe it does on OS X?)  Or do all linkers have some kind of option like this?  (this *might* be a way out, but I would probably need to be convinced :-) )
<br>
<p><span class="quotelev1">&gt; I'm not entirely sure I understand your argumentation for why libmpi
</span><br>
<span class="quotelev1">&gt; from 1.5.x has to be binary incompatible, but I haven't fully thought
</span><br>
<span class="quotelev1">&gt; through this yet.
</span><br>
<p>The context for this issue is so long that much was left out of my mail.  Here's this particular issue in a nutshell:
<br>
<p>- Open MPI v1.4.1 has libmpi at 0:1:0 and libopen-rte and libopen-pal both at 0:0:0.
<br>
- Open MPI v1.4.1 links MPI apps against -lmpi -lopen-rte -lopen-pal.
<br>
- If we start .so versioning properly in v1.5, it's likely that libopen-rte and libopen-pal will both be 1:0:0.
<br>
&nbsp;&nbsp;--&gt; Note that these are both internal libraries; there are no symbols in these libraries that are used in the MPI applications.
<br>
- Open MPI v1.5 libmpi *could* be 1:0:1.
<br>
- Hence, an a.out created for OMPI v1.4.1 would work fine with v1.5 libmpi.
<br>
- But that a.out would not work with v1.5 libopen-rte and libopen-pal.
<br>
<p>The problem is that our internal APIs change not infrequently, and potentially in incompatible ways.  This shouldn't (doesn't) matter to MPI applications, but because we &quot;-lmpi -lopen-rte -lopen-pal&quot; even for shared library linking, the linker thinks that it *does* matter because we've established an explicit dependency from a.out to all 3 libraries.
<br>
<p>My initial idea was to add special flags to the wrapper compilers that the user would use to indicate whether it should be &quot;-lmpi&quot; (shared link) or &quot;-lmpi -lopen-rte -lopen-pal&quot; (static link).  Brian hates this.  :-)
<br>
<p>Brian's idea is to make libmpi.la slurp up libopen-rte.la as a convenience library.  Similarly, have libopen-rte.la slurp up libopen-pal.la as a convenience library.  Hence, only -lmpi is needed regardless of whether you're linking statically or dynamically.
<br>
<p>Regardless of which way we go, if we start .so versioning libopen-rte and libopen-pal in v1.5, ABI will break between v1.4 and v1.5.  We *do* need to fix the .so versioning issues of libopen-rte and libopen-pal; if we don't do it for v1.5.0, our next opportunity will be to do it in v1.7 (which is quite a long time off) because I refuse to do this size of a change in the middle of a release series.  All we'll have done is put off the pain until later.
<br>
<p>Hopefully, that made sense.  :-)
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
<li><strong>Next message:</strong> <a href="7453.php">Christian Csar: "[OMPI devel] Limitations on pending nonblocking operations"</a>
<li><strong>Previous message:</strong> <a href="7451.php">Jeff Squyres: "Re: [OMPI devel] PATCH: remove trailing colon at the end of thegenerated	LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="7450.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7454.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7454.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
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
