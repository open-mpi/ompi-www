<?
$subject_val = "[OMPI devel] 32-bit openib is broken on the trunk as of Nov 27th, r16799";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 14:45:23 2007" -->
<!-- isoreceived="20071205194523" -->
<!-- sent="Wed, 5 Dec 2007 14:45:17 -0500" -->
<!-- isosent="20071205194517" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="[OMPI devel] 32-bit openib is broken on the trunk as of Nov 27th, r16799" -->
<!-- id="ea86ce220712051145r6c197ba8rac0f5f6f44e5fae1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 32-bit openib is broken on the trunk as of Nov 27th, r16799<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 14:45:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2733.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<li><strong>Previous message:</strong> <a href="2731.php">Karol Mroz: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2766.php">Gleb Natapov: "Re: [OMPI devel] 32-bit openib is broken on the trunk as of Nov	27th, r16799"</a>
<li><strong>Reply:</strong> <a href="2766.php">Gleb Natapov: "Re: [OMPI devel] 32-bit openib is broken on the trunk as of Nov	27th, r16799"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
It appears that sometime after r16777, and by r16799, that something
<br>
was broken on the trunk's openib support for 32-bit builds.
<br>
The 64-bit tests all seem normal, as well as the 32-bit &amp; 64-bit tests on
<br>
the 1.2 branch on the same machine (odin).
<br>
<p>See this MTT results page permalink showing the 32-bit odin runs:
<br>
<a href="http://www.open-mpi.org/mtt/index.php?do_redir=468">http://www.open-mpi.org/mtt/index.php?do_redir=468</a>
<br>
<p>Pasha &amp; Gleb, you both did a variety of checkins in that svn r# range.
<br>
Do either of you have time to investigate this?
<br>
<p>Here is a snippet from one randomly picked failed test (out of thousands):
<br>
[1,1][btl_openib_component.c:1665:btl_openib_module_progress] from
<br>
odin001 to: odin001 error
<br>
polling LP CQ with status LOCAL PROTOCOL ERROR status number 4 for
<br>
wr_id 141733120 opcode 128
<br>
qp_idx 3
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 29761 on
<br>
node odin001 calling &quot;abort&quot;. This will have caused other processes
<br>
in the application to be terminated by signals sent by mpirun
<br>
(as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>Thanks, and happy bug hunting!
<br>
<pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2733.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<li><strong>Previous message:</strong> <a href="2731.php">Karol Mroz: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2766.php">Gleb Natapov: "Re: [OMPI devel] 32-bit openib is broken on the trunk as of Nov	27th, r16799"</a>
<li><strong>Reply:</strong> <a href="2766.php">Gleb Natapov: "Re: [OMPI devel] 32-bit openib is broken on the trunk as of Nov	27th, r16799"</a>
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
