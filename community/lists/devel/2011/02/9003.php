<?
$subject_val = "Re: [OMPI devel] Minor OMPI SVN configuration change";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 17 10:49:55 2011" -->
<!-- isoreceived="20110217154955" -->
<!-- sent="Thu, 17 Feb 2011 08:49:34 -0700" -->
<!-- isosent="20110217154934" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Minor OMPI SVN configuration change" -->
<!-- id="2D094A28F6B31745BE7B844EA0FF609644509D1E50_at_ES04SNLNT.srn.sandia.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8BFBDD6D-ACA8-4E24-9252-2ECB348AEBF1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Minor OMPI SVN configuration change<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-17 10:49:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9004.php">Ken Lloyd: "Re: [OMPI devel] Minor OMPI SVN configuration change"</a>
<li><strong>Previous message:</strong> <a href="9002.php">Jeff Squyres: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<li><strong>In reply to:</strong> <a href="9001.php">Jeff Squyres: "[OMPI devel] Minor OMPI SVN configuration change"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9004.php">Ken Lloyd: "Re: [OMPI devel] Minor OMPI SVN configuration change"</a>
<li><strong>Reply:</strong> <a href="9004.php">Ken Lloyd: "Re: [OMPI devel] Minor OMPI SVN configuration change"</a>
<li><strong>Reply:</strong> <a href="9005.php">Jeff Squyres: "Re: [OMPI devel] Minor OMPI SVN configuration change"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why did &quot;we&quot; make this change?  It was originally this way, and we changed it to the no-auth way for a reason.
<br>
<p>Brian
<br>
<p><p>----- Original Message -----
<br>
From: Jeff Squyres [mailto:jsquyres_at_[hidden]]
<br>
Sent: Wednesday, February 16, 2011 09:24 AM
<br>
To: Open Developers &lt;devel_at_[hidden]&gt;
<br>
Subject: [OMPI devel] Minor OMPI SVN configuration change
<br>
<p>We have made a minor change in OMPI's SVN configuration:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;If you access the SVN repo over https, you *must* authenticate.
<br>
<p>Previously, you could authenticate or not; SVN would serve up what was appropriate in either case (there's one &quot;private&quot; tree in the SVN repo for not-yet-published academic work).
<br>
<p>Anonymous, read-only access to SVN is still provided over http.
<br>
<p>I doubt that this change will affect most people, because most people check out via https only if they plan to commit -- meaning that they have a write-enabled SVN account.
<br>
<p>Let me know if you have any questions / problems with this change.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9004.php">Ken Lloyd: "Re: [OMPI devel] Minor OMPI SVN configuration change"</a>
<li><strong>Previous message:</strong> <a href="9002.php">Jeff Squyres: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<li><strong>In reply to:</strong> <a href="9001.php">Jeff Squyres: "[OMPI devel] Minor OMPI SVN configuration change"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9004.php">Ken Lloyd: "Re: [OMPI devel] Minor OMPI SVN configuration change"</a>
<li><strong>Reply:</strong> <a href="9004.php">Ken Lloyd: "Re: [OMPI devel] Minor OMPI SVN configuration change"</a>
<li><strong>Reply:</strong> <a href="9005.php">Jeff Squyres: "Re: [OMPI devel] Minor OMPI SVN configuration change"</a>
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
