<?
$subject_val = "[OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 12:32:54 2013" -->
<!-- isoreceived="20131204173254" -->
<!-- sent="Wed, 04 Dec 2013 10:32:53 -0700" -->
<!-- isosent="20131204173253" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &amp;quot;-Werror=format-security&amp;quot; flag is used" -->
<!-- id="529F6745.7040700_at_cora.nwra.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="bug-1037231-140047_at_bugzilla.redhat.com" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 12:32:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13377.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
<li><strong>Previous message:</strong> <a href="13375.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13377.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
<li><strong>Reply:</strong> <a href="13377.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The attached patch fixes this issue.
<br>
<p><p>-------- Original Message --------
<br>
Subject: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is 
<br>
used
<br>
Date: Tue, 03 Dec 2013 03:26:30 +0000
<br>
From: bugzilla_at_[hidden]
<br>
To: orion_at_[hidden]
<br>
<p><a href="https://bugzilla.redhat.com/show_bug.cgi?id=1037231">https://bugzilla.redhat.com/show_bug.cgi?id=1037231</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bug ID: 1037231
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Summary: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;used
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product: Fedora
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Version: rawhide
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Component: openmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assignee: dledford_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reporter: dkholia_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QA Contact: extras-qa_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CC: dakingun_at_[hidden], dledford_at_[hidden],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fenlason_at_[hidden], orion_at_[hidden]
<br>
<p><p><p><p>Description of problem
<br>
----------------------
<br>
<p>openmpi fails to build if &quot;-Werror=format-security&quot; flag is used.
<br>
<p>...
<br>
<p>btl_usnic_module.c:829:5: error: format not a string literal and no format
<br>
arguments [-Werror=format-security]
<br>
<p>...
<br>
<p>We are working on a proposal to enable &quot;-Werror=format-security&quot; for all
<br>
packages. Once this flag is enabled, GCC will refuse to compile code that could
<br>
be vulnerable to a string format security flaw. For more details, please see
<br>
<a href="https://fedorahosted.org/fesco/ticket/1185">https://fedorahosted.org/fesco/ticket/1185</a> page.
<br>
<p>To understand why it is important to fix this, please see
<br>
<a href="https://fedoraproject.org/wiki/Format-Security-FAQ">https://fedoraproject.org/wiki/Format-Security-FAQ</a> page.
<br>
<p>How to fix this
<br>
---------------
<br>
<p>The fix for these errors is quite simple. It's a matter of changing a
<br>
line like,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(foo);
<br>
<p>to read,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s&quot;, foo);
<br>
<p>That's it.
<br>
<p>Please fix this issue in rawhide with a patch (which you should submit
<br>
to upstream to merge moving forward). Please do a new build with the
<br>
fix in rawhide. Other releases do not need to be directly fixed, but
<br>
there should be no harm in pushing out this fix/patch with other needed
<br>
changes to those branches.
<br>
<p>In the event you don't fix this bug before the next mass rebuild,
<br>
provenpackagers may step in and update your package(s) to fix this
<br>
issue.
<br>
<p>How reproducible
<br>
----------------
<br>
<p>Build openmpi-1.7.3-1.fc21.src.rpm with &quot;-Werror=format-security&quot; flag to
<br>
reproduce the problem.
<br>
<p>To make this process easier, you can use a modified &quot;redhat-rpm-config&quot; package
<br>
from <a href="http://people.fedoraproject.org/~halfie/artifacts/redhat-rpm-config/">http://people.fedoraproject.org/~halfie/artifacts/redhat-rpm-config/</a> URL.
<br>
<p>$ sha256sum redhat-rpm-config-9.1.0-56.fc20.*
<br>
faad7594b2080fe76497d0ce50808c905a93dd7b41c1defdde5ca57e3833d3d2
<br>
redhat-rpm-config-9.1.0-56.fc20.noarch.rpm
<br>
5aa9357174305c7285ffdbc92d7ffe1c07a8a95d5459b930461308f5aad75413
<br>
redhat-rpm-config-9.1.0-56.fc20.src.rpm
<br>
<p><pre>
-- 
You are receiving this mail because:
You are on the CC list for the bug.
Unsubscribe from this bug 
<a href="https://bugzilla.redhat.com/token.cgi?t=g1lCzLGyFI&amp;a=cc_unsubscribe">https://bugzilla.redhat.com/token.cgi?t=g1lCzLGyFI&amp;a=cc_unsubscribe</a>

</pre>
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13376/openmpi-format.patch">openmpi-format.patch</a>
</ul>
<!-- attachment="openmpi-format.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13377.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
<li><strong>Previous message:</strong> <a href="13375.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13377.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
<li><strong>Reply:</strong> <a href="13377.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
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
