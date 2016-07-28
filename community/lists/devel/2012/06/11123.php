<?
$subject_val = "[OMPI devel] SSL certificates changing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 19 13:30:29 2012" -->
<!-- isoreceived="20120619173029" -->
<!-- sent="Tue, 19 Jun 2012 13:30:24 -0400" -->
<!-- isosent="20120619173024" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] SSL certificates changing" -->
<!-- id="89CD3049-B50D-4716-A319-617818CF518A_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] SSL certificates changing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-19 13:30:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11124.php">George Bosilca: "Re: [OMPI devel] ORTE"</a>
<li><strong>Previous message:</strong> <a href="11122.php">George Bosilca: "Re: [OMPI devel] Modex"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Heads up: the SSL certificates on www.open-mpi.org and svn.open-mpi.org will be changing soon (sometime this week; exact time/date TBD).
<br>
<p>I'm told that these new SSL certificates should no longer require the Indiana University Computer Science CA certificate -- they should be accepted by all major browsers without complaint.  They will also use a stronger crypto algorithm (recent versions of Chrome complain about the algorithm used in the current certificates).
<br>
<p>*** Your browser probably won't display anything different to you.
<br>
*** The svn client may warn you that the https/SSL fingerprints have changed.
<br>
<p>The new SSL fingerprints will be:
<br>
<p>svn.open-mpi.org:
<br>
<p>SHA1: 9C:7F:F3:30:3C:25:98:E5:09:00:D5:35:6D:DC:A9:71:05:3C:D4:91
<br>
MD5:  AD:95:9B:DD:90:C1:4F:F7:5B:5A:BF:47:C9:AB:47:90
<br>
<p>www.open-mpi.org:
<br>
<p>SHA1: 4D:5D:1E:9C:67:B0:D0:92:90:4E:8B:52:2A:39:81:74:94:48:5B:FC
<br>
MD5:  1B:34:D7:1C:5E:A9:2B:25:A3:4A:3C:6D:5C:DA:01:71
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
<li><strong>Next message:</strong> <a href="11124.php">George Bosilca: "Re: [OMPI devel] ORTE"</a>
<li><strong>Previous message:</strong> <a href="11122.php">George Bosilca: "Re: [OMPI devel] Modex"</a>
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
