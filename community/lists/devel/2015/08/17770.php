<?
$subject_val = "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 20 13:53:58 2015" -->
<!-- isoreceived="20150820175358" -->
<!-- sent="Thu, 20 Aug 2015 17:53:56 +0000" -->
<!-- isosent="20150820175356" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure" -->
<!-- id="14C15A31-8377-4841-BB4B-4015DD83652A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA1555Yr3FOn4W3cNq6-fo2shXcRqNGXNo9-00h34YXb8+w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-20 13:53:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17771.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Previous message:</strong> <a href="17769.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>In reply to:</strong> <a href="17751.php">Paul Hargrove: "[OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17771.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Reply:</strong> <a href="17771.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul --
<br>
<p>Can you give me more info on this?
<br>
<p>Can you &quot;make clean all V=1&quot; in the ompi/mpi/fortran/mpif-h directory and send me the output?
<br>
<p>Additionally, can you send the output of &quot;ls -l ompi/mpi/fortran/mpif-h/.libs&quot; after the make?
<br>
<p><p><span class="quotelev1">&gt; On Aug 14, 2015, at 11:40 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following is seen on my Solaris-11.2 (but not 11.1) system.
</span><br>
<span class="quotelev1">&gt; It is present with the Studio compilers (at least 12.4 and 12.3) for both 32- and 64-bit targets.
</span><br>
<span class="quotelev1">&gt; It is also present with the Gnu compiler for 64-bit targets (with 32-bit the build dies for a different reason).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   FCLD     libmpi_mpifh_pmpi.la
</span><br>
<span class="quotelev1">&gt;   FCLD     libmpi_mpifh_sizeof.la
</span><br>
<span class="quotelev1">&gt;   CCLD     libmpi_mpifh.la
</span><br>
<span class="quotelev1">&gt; ld: fatal: file ./.libs/libmpi_mpifh_sizeof.a: open failed: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On this same system I can build the 1.10.0rc2 tarball fine with identical configure args (other than the prefix setting).
</span><br>
<span class="quotelev1">&gt; I retested RC2 just now to be certain nothing relevant had changed in my configuration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17751.php">http://www.open-mpi.org/community/lists/devel/2015/08/17751.php</a>
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
<li><strong>Next message:</strong> <a href="17771.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Previous message:</strong> <a href="17769.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>In reply to:</strong> <a href="17751.php">Paul Hargrove: "[OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17771.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Reply:</strong> <a href="17771.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
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
