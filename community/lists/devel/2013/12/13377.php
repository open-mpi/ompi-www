<?
$subject_val = "Re: [OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 13:53:15 2013" -->
<!-- isoreceived="20131204185315" -->
<!-- sent="Wed, 4 Dec 2013 18:53:12 +0000" -->
<!-- isosent="20131204185312" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &amp;quot;-Werror=format-security&amp;quot; flag is used" -->
<!-- id="D8B01A46-C2D2-43F3-BDFF-54D7392E9238_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="529F6745.7040700_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 13:53:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13378.php">Orion Poplawski: "Re: [OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
<li><strong>Previous message:</strong> <a href="13376.php">Orion Poplawski: "[OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
<li><strong>In reply to:</strong> <a href="13376.php">Orion Poplawski: "[OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13378.php">Orion Poplawski: "Re: [OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
<li><strong>Reply:</strong> <a href="13378.php">Orion Poplawski: "Re: [OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Orion!
<br>
<p>FWIW, we've already fixed this post-1.7.3; it'll be in the 1.7.4 release.
<br>
<p>The code location for this opal_output() also moved; it's now in btl_usnic_stats.c, if you care.
<br>
<p><p>On Dec 4, 2013, at 12:32 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The attached patch fixes this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------- Original Message --------
</span><br>
<span class="quotelev1">&gt; Subject: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used
</span><br>
<span class="quotelev1">&gt; Date: Tue, 03 Dec 2013 03:26:30 +0000
</span><br>
<span class="quotelev1">&gt; From: bugzilla_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://bugzilla.redhat.com/show_bug.cgi?id=1037231">https://bugzilla.redhat.com/show_bug.cgi?id=1037231</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Bug ID: 1037231
</span><br>
<span class="quotelev1">&gt;           Summary: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is
</span><br>
<span class="quotelev1">&gt;                    used
</span><br>
<span class="quotelev1">&gt;           Product: Fedora
</span><br>
<span class="quotelev1">&gt;           Version: rawhide
</span><br>
<span class="quotelev1">&gt;         Component: openmpi
</span><br>
<span class="quotelev1">&gt;          Assignee: dledford_at_[hidden]
</span><br>
<span class="quotelev1">&gt;          Reporter: dkholia_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        QA Contact: extras-qa_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                CC: dakingun_at_[hidden], dledford_at_[hidden],
</span><br>
<span class="quotelev1">&gt;                    fenlason_at_[hidden], orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Description of problem
</span><br>
<span class="quotelev1">&gt; ----------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi fails to build if &quot;-Werror=format-security&quot; flag is used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btl_usnic_module.c:829:5: error: format not a string literal and no format
</span><br>
<span class="quotelev1">&gt; arguments [-Werror=format-security]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are working on a proposal to enable &quot;-Werror=format-security&quot; for all
</span><br>
<span class="quotelev1">&gt; packages. Once this flag is enabled, GCC will refuse to compile code that could
</span><br>
<span class="quotelev1">&gt; be vulnerable to a string format security flaw. For more details, please see
</span><br>
<span class="quotelev1">&gt; <a href="https://fedorahosted.org/fesco/ticket/1185">https://fedorahosted.org/fesco/ticket/1185</a> page.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To understand why it is important to fix this, please see
</span><br>
<span class="quotelev1">&gt; <a href="https://fedoraproject.org/wiki/Format-Security-FAQ">https://fedoraproject.org/wiki/Format-Security-FAQ</a> page.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How to fix this
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The fix for these errors is quite simple. It's a matter of changing a
</span><br>
<span class="quotelev1">&gt; line like,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   printf(foo);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to read,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   printf(&quot;%s&quot;, foo);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please fix this issue in rawhide with a patch (which you should submit
</span><br>
<span class="quotelev1">&gt; to upstream to merge moving forward). Please do a new build with the
</span><br>
<span class="quotelev1">&gt; fix in rawhide. Other releases do not need to be directly fixed, but
</span><br>
<span class="quotelev1">&gt; there should be no harm in pushing out this fix/patch with other needed
</span><br>
<span class="quotelev1">&gt; changes to those branches.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the event you don't fix this bug before the next mass rebuild,
</span><br>
<span class="quotelev1">&gt; provenpackagers may step in and update your package(s) to fix this
</span><br>
<span class="quotelev1">&gt; issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How reproducible
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Build openmpi-1.7.3-1.fc21.src.rpm with &quot;-Werror=format-security&quot; flag to
</span><br>
<span class="quotelev1">&gt; reproduce the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To make this process easier, you can use a modified &quot;redhat-rpm-config&quot; package
</span><br>
<span class="quotelev1">&gt; from <a href="http://people.fedoraproject.org/~halfie/artifacts/redhat-rpm-config/">http://people.fedoraproject.org/~halfie/artifacts/redhat-rpm-config/</a> URL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ sha256sum redhat-rpm-config-9.1.0-56.fc20.*
</span><br>
<span class="quotelev1">&gt; faad7594b2080fe76497d0ce50808c905a93dd7b41c1defdde5ca57e3833d3d2
</span><br>
<span class="quotelev1">&gt; redhat-rpm-config-9.1.0-56.fc20.noarch.rpm
</span><br>
<span class="quotelev1">&gt; 5aa9357174305c7285ffdbc92d7ffe1c07a8a95d5459b930461308f5aad75413
</span><br>
<span class="quotelev1">&gt; redhat-rpm-config-9.1.0-56.fc20.src.rpm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; You are receiving this mail because:
</span><br>
<span class="quotelev1">&gt; You are on the CC list for the bug.
</span><br>
<span class="quotelev1">&gt; Unsubscribe from this bug <a href="https://bugzilla.redhat.com/token.cgi?t=g1lCzLGyFI&amp;a=cc_unsubscribe">https://bugzilla.redhat.com/token.cgi?t=g1lCzLGyFI&amp;a=cc_unsubscribe</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;openmpi-format.patch&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="13378.php">Orion Poplawski: "Re: [OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
<li><strong>Previous message:</strong> <a href="13376.php">Orion Poplawski: "[OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
<li><strong>In reply to:</strong> <a href="13376.php">Orion Poplawski: "[OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13378.php">Orion Poplawski: "Re: [OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
<li><strong>Reply:</strong> <a href="13378.php">Orion Poplawski: "Re: [OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
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
