<?
$subject_val = "[OMPI devel] .so version numbers in 1.5.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  2 11:11:14 2011" -->
<!-- isoreceived="20110202161114" -->
<!-- sent="Wed, 2 Feb 2011 11:11:10 -0500" -->
<!-- isosent="20110202161110" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] .so version numbers in 1.5.2" -->
<!-- id="6B8DA2D7-91A6-4C65-92FA-EC90643E4A37_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] .so version numbers in 1.5.2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-02 11:11:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8955.php">Jeff Squyres: "Re: [OMPI devel] Building Open MPI components outside of the	sourcetree"</a>
<li><strong>Previous message:</strong> <a href="8953.php">Javier Martinez Canillas: "Re: [OMPI devel] ompi-dmtcp configure options"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like we forgot to update the .so version numbers in 1.5.1.  :-(
<br>
<p>Luckily, the only ones that should have been affected were libopen-rte and libopen-pal.  Can someone check my logic, below?
<br>
<p>- As of 1.5.0, all version numbers were 1:0:0 (except common:sm)
<br>
- None of the &quot;common&quot; libraries have changed since 1.5.0
<br>
<p>- All MPI libs did not change in 1.5.1 (woot)
<br>
- ORTE changed in 1.5.1, but no interface changes
<br>
- OPAL changed in 1.5.1, but no interface changes
<br>
- So v1.5.1 versions should have changed to:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte: 1:1:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal: 1:1:0
<br>
<p>I'm going to base the 1.5.2 .so version numbers on what we should have done in 1.5.1 (although the issue is somewhat moot; you'll see below):
<br>
<p>- libmpi changed in 1.5.2, but no interface changes
<br>
- Other MPI libs did not change in 1.5.2
<br>
- ORTE had some globals and functions added, and at least rmcast.h had
<br>
&nbsp;&nbsp;interfaces changed
<br>
- OPAL had interfaces added in 1.5.2 (e.g., ring_buffer), and
<br>
&nbsp;&nbsp;at least one interface change (opal_show_help changed from a function to
<br>
&nbsp;&nbsp;a global variable)
<br>
- So v1.5.2 versions should change to:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi: 1:1:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte: 2:0:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal: 2:0:0
<br>
<p>Right?
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
<li><strong>Next message:</strong> <a href="8955.php">Jeff Squyres: "Re: [OMPI devel] Building Open MPI components outside of the	sourcetree"</a>
<li><strong>Previous message:</strong> <a href="8953.php">Javier Martinez Canillas: "Re: [OMPI devel] ompi-dmtcp configure options"</a>
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
