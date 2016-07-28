<?
$subject_val = "Re: [OMPI devel] 1.7.x support statement";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  4 07:47:56 2013" -->
<!-- isoreceived="20131004114756" -->
<!-- sent="Fri, 4 Oct 2013 11:47:54 +0000" -->
<!-- isosent="20131004114754" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.x support statement" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F91DAA2_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="524EA78D.4070406_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.x support statement<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-04 07:47:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13053.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<li><strong>Previous message:</strong> <a href="13051.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem 32 bit compile failures"</a>
<li><strong>In reply to:</strong> <a href="13050.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13053.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<li><strong>Reply:</strong> <a href="13053.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good call; yes.
<br>
<p>Marco: is there any chance you can run Open MPI through the MPI Testing Tool (MTT) on a regular basis, and submit your results to mtt.open-mpi.org?
<br>
<p>You can run as few or as many tests a night as you want.  For example, the Absoft compiler company runs only hello world and ring MPI tests each night (i.e., their goal is to ensure that everything is *compiling* correctly with their compiler, and then they only have to run a small number of tests to ensure that stuff is actually running properly).
<br>
<p>I'd be happy to chat with you about this to get you started with MTT.
<br>
<p><p>On Oct 4, 2013, at 7:33 AM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Il 10/4/2013 1:08 PM, Jeff Squyres (jsquyres) ha scritto:
</span><br>
<span class="quotelev2">&gt;&gt; This is in the README -- is it still accurate?  I'm thinking that all Solaris support should move to the &quot;lightly but not fully tested&quot; category, for example:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; - Systems that have been tested are:
</span><br>
<span class="quotelev2">&gt;&gt;   - Linux (various flavors/distros), 32 bit, with gcc
</span><br>
<span class="quotelev2">&gt;&gt;   - Linux (various flavors/distros), 64 bit (x86), with gcc, Absoft,
</span><br>
<span class="quotelev2">&gt;&gt;     Intel, Portland, and Oracle Solaris Studio 12.3 compilers (*)
</span><br>
<span class="quotelev2">&gt;&gt;   - OS X (10.5, 10.6, 10.7), 32 and 64 bit (x86_64), with gcc and
</span><br>
<span class="quotelev2">&gt;&gt;     Absoft compilers (*)
</span><br>
<span class="quotelev2">&gt;&gt;   - Oracle Solaris 10 and 11, 64 bit (SPARC, i386, x86_64),
</span><br>
<span class="quotelev2">&gt;&gt;     with Oracle Solaris Studio 12.2 and 12.3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   (*) Be sure to read the Compiler Notes, below.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Other systems have been lightly (but not fully tested):
</span><br>
<span class="quotelev2">&gt;&gt;   - Other 64 bit platforms (e.g., Linux on PPC64)
</span><br>
<span class="quotelev2">&gt;&gt;   - 32-bit Solaris
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you can add on the &quot;Other systems&quot;
</span><br>
<span class="quotelev1">&gt;  Cygwin 32 &amp; 64 bit with gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13053.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<li><strong>Previous message:</strong> <a href="13051.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem 32 bit compile failures"</a>
<li><strong>In reply to:</strong> <a href="13050.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13053.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<li><strong>Reply:</strong> <a href="13053.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
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
