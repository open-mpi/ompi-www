<?
$subject_val = "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  3 13:20:00 2011" -->
<!-- isoreceived="20110103182000" -->
<!-- sent="Mon, 3 Jan 2011 19:19:53 +0100" -->
<!-- isosent="20110103181953" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?" -->
<!-- id="20110103181953.GA5121_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1752159667.1731741.1294074856997.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-03 13:19:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1766.php">Jeff Squyres: "[hwloc-devel] Check docs"</a>
<li><strong>Previous message:</strong> <a href="1764.php">Jiri Hladky: "[hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1764.php">Jiri Hladky: "[hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1774.php">Jiri Hladky: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<li><strong>Reply:</strong> <a href="1774.php">Jiri Hladky: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jiri Hladky, le Mon 03 Jan 2011 18:14:16 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I would like to check out if hwloc supports IBM's s390 architecture.
</span><br>
<p>Hwloc's support on Linux is mostly linux-dependant. With the /sys stuff
<br>
being hardware-independant, it should in principle &quot;just work&quot; on s390,
<br>
provided the s390-specific part announces proper things in /sys. We
<br>
don't have our own s390, so we couldn't test. The Debian s390 testboxes
<br>
only announce 2 processors, so there's not much topology to discover
<br>
there, but it basically works, announcing the 2 processors :) I wonder
<br>
what would be discovered on bigger machines. In any case, if you have
<br>
any chance of running gather-topology on such beast, let us know :)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1766.php">Jeff Squyres: "[hwloc-devel] Check docs"</a>
<li><strong>Previous message:</strong> <a href="1764.php">Jiri Hladky: "[hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1764.php">Jiri Hladky: "[hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1774.php">Jiri Hladky: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<li><strong>Reply:</strong> <a href="1774.php">Jiri Hladky: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
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
