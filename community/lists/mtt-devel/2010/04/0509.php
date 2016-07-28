<?
$subject_val = "[MTT devel] new patch";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 23 12:48:31 2010" -->
<!-- isoreceived="20100423164831" -->
<!-- sent="Fri, 23 Apr 2010 12:48:27 -0400" -->
<!-- isosent="20100423164827" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] new patch" -->
<!-- id="6139B0B1-C5FA-497C-9AEB-5A03A5085A6B_at_cisco.com" -->
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
<strong>Subject:</strong> [MTT devel] new patch<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-23 12:48:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0510.php">Jeff Squyres: "Re: [MTT devel] new patch"</a>
<li><strong>Previous message:</strong> <a href="0508.php">Jeff Squyres: "Re: [MTT devel] patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0510.php">Jeff Squyres: "Re: [MTT devel] new patch"</a>
<li><strong>Reply:</strong> <a href="0510.php">Jeff Squyres: "Re: [MTT devel] new patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan --
<br>
<p>Here's a new patch that fixes the problem the way we talked about on the phone: saves now only save one section of the hash, so there should never be collisions on the loads.  merge_hashes() therefore got deleted.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0509/dumpfile.patch">dumpfile.patch</a>
</ul>
<!-- attachment="dumpfile.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0510.php">Jeff Squyres: "Re: [MTT devel] new patch"</a>
<li><strong>Previous message:</strong> <a href="0508.php">Jeff Squyres: "Re: [MTT devel] patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0510.php">Jeff Squyres: "Re: [MTT devel] new patch"</a>
<li><strong>Reply:</strong> <a href="0510.php">Jeff Squyres: "Re: [MTT devel] new patch"</a>
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
