<?
$subject_val = "[OMPI devel] RFC: Remove autogen.sh sym link";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 06:08:56 2014" -->
<!-- isoreceived="20140508100856" -->
<!-- sent="Thu, 8 May 2014 10:08:55 +0000" -->
<!-- isosent="20140508100855" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Remove autogen.sh sym link" -->
<!-- id="DCF2990E-73E4-4766-924E-F632F7E9F83F_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Remove autogen.sh sym link<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 06:08:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14750.php">Joshua Ladd: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>Previous message:</strong> <a href="14748.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14750.php">Joshua Ladd: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>Reply:</strong> <a href="14750.php">Joshua Ladd: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>Reply:</strong> <a href="14751.php">Stephen Poole: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>Reply:</strong> <a href="14752.php">Ashley Pittman: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Remove the backwards-compatibility autogen.sh sym link
<br>
<p>WHY: Because it's time
<br>
<p>WHERE: svn rm autogen.sh
<br>
<p>TIMEOUT: Teleconf next Tuesday, 13 May 2014
<br>
<p>MORE DETAIL:
<br>
<p>We converted from autogen.sh to autogen.pl nearly 4 years ago (2010-09-17).  The autogen.sh-&gt;autogen.pl sym link was put in shortly thereafter as a stopgap measure to give people time to update their automated scripts from autogen.sh to autogen.pl (or better yet, test and see which name they should invoke).
<br>
<p>Every time I type &quot;./au&lt;tab&gt;&quot;, it stops at &quot;./autogen.&quot;, which is just annoying.
<br>
<p>It's been nearly 4 years.  I think it's time to cut the cord: remove the autogen.sh sym link and move on.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14750.php">Joshua Ladd: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>Previous message:</strong> <a href="14748.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14750.php">Joshua Ladd: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>Reply:</strong> <a href="14750.php">Joshua Ladd: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>Reply:</strong> <a href="14751.php">Stephen Poole: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>Reply:</strong> <a href="14752.php">Ashley Pittman: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
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
