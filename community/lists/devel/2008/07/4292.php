<?
$subject_val = "[OMPI devel] IOF repair";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  9 19:26:47 2008" -->
<!-- isoreceived="20080709232647" -->
<!-- sent="Wed, 09 Jul 2008 17:26:36 -0600" -->
<!-- isosent="20080709232636" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] IOF repair" -->
<!-- id="C49AA54C.573E%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] IOF repair<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-09 19:26:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4293.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Previous message:</strong> <a href="4291.php">Jeff Squyres: "Re: [OMPI devel] Open IB BTL and iWARP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4293.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Reply:</strong> <a href="4293.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Reply:</strong> <a href="4295.php">Terry Dontje: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Reply:</strong> <a href="4300.php">Bogdan Costescu: "Re: [OMPI devel] IOF repair"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been investigating Ticket #1135 - stdin is read twice if rank=0
<br>
shares the node with mpirun. Repairing this problem is going to be quite
<br>
difficult due to the rather terrible spaghetti code in the IOF, and the fact
<br>
that the IOF in the HNP actually rml.sends the IO to itself multiple times
<br>
as it cycles through the spaghetti.
<br>
<p>Unfortunately, this problem -is- a regression from 1.2. Rather than spending
<br>
weeks trying to fix it, I see two approaches we could pursue. First, I could
<br>
repair the problem by essentially returning the IOF to its 1.2 state. This
<br>
will have to be done by hand as most of the differences are in function
<br>
calls to utilities that have changed due to the removal of the old NS
<br>
framework. However, there are a few places where the logic itself has been
<br>
modified - and the problem must stem from somewhere in there.
<br>
<p>If I make this change, then we will be no better, and no worse, than 1.2.
<br>
Note that we currently advise people to read from a file instead of from
<br>
stdin to avoid other issues that were present in 1.2.
<br>
<p>Alternatively, we could ship 1.3 as-is, and warn users (similar to 1.2) that
<br>
they should avoiding reading from stdin if there is any chance that rank=0
<br>
could be co-located with mpirun. Note that most of our clusters do not allow
<br>
such co-location - but it is permitted by default by OMPI.
<br>
<p>We already plan to revisit the IOF at next week's technical meeting, with a
<br>
goal of redefining the IOF's API to a more reduced set that reflects a less
<br>
ambitious requirement. I expect to implement those changes fairly soon
<br>
thereafter, but that would be targeted to 1.4 - not 1.3.
<br>
<p>Any thoughts on which way we should go?
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4293.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Previous message:</strong> <a href="4291.php">Jeff Squyres: "Re: [OMPI devel] Open IB BTL and iWARP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4293.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Reply:</strong> <a href="4293.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Reply:</strong> <a href="4295.php">Terry Dontje: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Reply:</strong> <a href="4300.php">Bogdan Costescu: "Re: [OMPI devel] IOF repair"</a>
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
