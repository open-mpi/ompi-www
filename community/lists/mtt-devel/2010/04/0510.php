<?
$subject_val = "Re: [MTT devel] new patch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 21:44:04 2010" -->
<!-- isoreceived="20100427014404" -->
<!-- sent="Mon, 26 Apr 2010 21:43:59 -0400" -->
<!-- isosent="20100427014359" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] new patch" -->
<!-- id="A3AE0C63-0D6D-4E88-A1A8-5DB1E7DD3F63_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6139B0B1-C5FA-497C-9AEB-5A03A5085A6B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] new patch<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 21:43:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/11/0511.php">Jeff Squyres: "[MTT devel] questions about MTT database from HDF"</a>
<li><strong>Previous message:</strong> <a href="0509.php">Jeff Squyres: "[MTT devel] new patch"</a>
<li><strong>In reply to:</strong> <a href="0509.php">Jeff Squyres: "[MTT devel] new patch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This actually turned into a total nightmare.  r1362 was not enough to fully address the problem.  
<br>
<p>Attached is a patch that finally allowed me to run properly again.
<br>
<p>Ethan -- can you review?  (I'll remove the debugging stuff in Files.pm before committing)
<br>
<p><p><p>On Apr 23, 2010, at 12:48 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Ethan --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's a new patch that fixes the problem the way we talked about on the phone: saves now only save one section of the hash, so there should never be collisions on the loads.  merge_hashes() therefore got deleted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;dumpfile.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0510/unique-dump-files.patch">unique-dump-files.patch</a>
</ul>
<!-- attachment="unique-dump-files.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/11/0511.php">Jeff Squyres: "[MTT devel] questions about MTT database from HDF"</a>
<li><strong>Previous message:</strong> <a href="0509.php">Jeff Squyres: "[MTT devel] new patch"</a>
<li><strong>In reply to:</strong> <a href="0509.php">Jeff Squyres: "[MTT devel] new patch"</a>
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
