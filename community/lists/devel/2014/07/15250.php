<?
$subject_val = "Re: [OMPI devel] v1.8 - compile/dist problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 09:59:38 2014" -->
<!-- isoreceived="20140724135938" -->
<!-- sent="Thu, 24 Jul 2014 13:59:37 +0000" -->
<!-- isosent="20140724135937" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8 - compile/dist problem" -->
<!-- id="39C3EB5E-1473-4E9A-9A43-557D0F2B9D57_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="74D7B32D-A1ED-47DD-BFF0-50E10BCC78D1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.8 - compile/dist problem<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 09:59:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15251.php">Rolf vandeVaart: "Re: [OMPI devel] PML-bfo deadlocks for message size &gt; eager limit after connection loss"</a>
<li><strong>Previous message:</strong> <a href="15249.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc2 ready for test"</a>
<li><strong>In reply to:</strong> <a href="15248.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15252.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15252.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another data point:
<br>
<p>I just bootstrapped with Automake 1.14.1, and got the same result (i.e., ls -l before configure, the &quot;hooks&quot; directory is NOT there, run configure, ls -l and the &quot;hooks&quot; directory IS there).
<br>
<p>I'm guessing something changed elsewhere in the toolchain on RHEL7/SLES12(beta) that is causing this problem.
<br>
<p>Bert: how is the &quot;hooks&quot; directory normally created?  Do you have some specific .m4 that creates it?  Or is it a side-effect of something in configure?
<br>
<p><p><p><p>On Jul 24, 2014, at 9:42 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 24, 2014, at 8:55 AM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But the dep rules should already ensure this, as it creates the .deps directory at the end of configure. Though if this is not guaranteed to happen (maybe it depends on the used compiler) than we would need to ensure it in the makefile itself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, if I:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - expand last night's v1.8 nightly tarball on a RHEL 6.5 machine
</span><br>
<span class="quotelev1">&gt; - look in ompi/contrib/vt/vt/tools/vtunify/mpi,
</span><br>
<span class="quotelev1">&gt;  *** the hooks subdirectory is NOT there ***
</span><br>
<span class="quotelev1">&gt; - run configure
</span><br>
<span class="quotelev1">&gt; - look in ompi/contrib/vt/vt/tools/vtunify/mpi,
</span><br>
<span class="quotelev1">&gt;  *** the hooks subdirectory IS there ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So at least for AC 2.69, AM 1.12.2, LT 2.4.2, M4 1.4.16 (which is what is used to make the 1.8 tarball) on RHEL 6.x, it works as expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this not true on a RHEL 7 or SLES 12 (beta) machine?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or is this not true for some different set of gnu autotools to bootstrap the tarball?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15248.php">http://www.open-mpi.org/community/lists/devel/2014/07/15248.php</a>
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
<li><strong>Next message:</strong> <a href="15251.php">Rolf vandeVaart: "Re: [OMPI devel] PML-bfo deadlocks for message size &gt; eager limit after connection loss"</a>
<li><strong>Previous message:</strong> <a href="15249.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc2 ready for test"</a>
<li><strong>In reply to:</strong> <a href="15248.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15252.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15252.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
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
