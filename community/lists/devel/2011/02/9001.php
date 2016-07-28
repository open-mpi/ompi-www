<?
$subject_val = "[OMPI devel] Minor OMPI SVN configuration change";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 16 11:24:08 2011" -->
<!-- isoreceived="20110216162408" -->
<!-- sent="Wed, 16 Feb 2011 11:24:03 -0500" -->
<!-- isosent="20110216162403" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Minor OMPI SVN configuration change" -->
<!-- id="8BFBDD6D-ACA8-4E24-9252-2ECB348AEBF1_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Minor OMPI SVN configuration change<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-16 11:24:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9002.php">Jeff Squyres: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<li><strong>Previous message:</strong> <a href="9000.php">Don Kerr: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9003.php">Barrett, Brian W: "Re: [OMPI devel] Minor OMPI SVN configuration change"</a>
<li><strong>Reply:</strong> <a href="9003.php">Barrett, Brian W: "Re: [OMPI devel] Minor OMPI SVN configuration change"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have made a minor change in OMPI's SVN configuration:
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9002.php">Jeff Squyres: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<li><strong>Previous message:</strong> <a href="9000.php">Don Kerr: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9003.php">Barrett, Brian W: "Re: [OMPI devel] Minor OMPI SVN configuration change"</a>
<li><strong>Reply:</strong> <a href="9003.php">Barrett, Brian W: "Re: [OMPI devel] Minor OMPI SVN configuration change"</a>
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
