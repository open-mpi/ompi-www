<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul 15 17:20:42 2007" -->
<!-- isoreceived="20070715212042" -->
<!-- sent="Sun, 15 Jul 2007 15:20:32 -0600" -->
<!-- isosent="20070715212032" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Removal of cellid" -->
<!-- id="C2BFEBC0.348C%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-15 17:20:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1899.php">Ralph Castain: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Previous message:</strong> <a href="1897.php">Matthew Moskewicz: "[OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1956.php">Ralph H Castain: "Re: [OMPI devel] Removal of cellid"</a>
<li><strong>Reply:</strong> <a href="1956.php">Ralph H Castain: "Re: [OMPI devel] Removal of cellid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo folks
<br>
<p>I have completed the removal of the cellid from the orte_process_name_t
<br>
struct on a tmp branch. Tim Prins has successfully tested it on odin, thor,
<br>
and bigred at IU - I have checked it on coyote and yellowrail at LANL, as
<br>
well as on a standalone Mac. It seems to work just fine in all those
<br>
environments.
<br>
<p>Accordingly, I plan to check it into the trunk late Monday afternoon
<br>
(probably around 4pm Eastern). As part of the change, I'll be getting rid of
<br>
some obsolete test code, plus the setup_hnp and orte-console code (the
<br>
latter depends upon the former, which is so obsolete it won't run anyway -
<br>
and our revised launch procedure won't support).
<br>
<p>Just wanted to give you a &quot;heads-up&quot; in case you have any tmp branches out
<br>
there that might be impacted. I rolled the Voltaire tmp branch into the
<br>
trunk in preparation for this change so I could deal with the conflicts
<br>
(rather than asking them to do so).
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1899.php">Ralph Castain: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Previous message:</strong> <a href="1897.php">Matthew Moskewicz: "[OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1956.php">Ralph H Castain: "Re: [OMPI devel] Removal of cellid"</a>
<li><strong>Reply:</strong> <a href="1956.php">Ralph H Castain: "Re: [OMPI devel] Removal of cellid"</a>
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
