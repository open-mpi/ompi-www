<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 13 16:52:27 2005" -->
<!-- isoreceived="20050913215227" -->
<!-- sent="Tue, 13 Sep 2005 15:52:24 -0600" -->
<!-- isosent="20050913215224" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Startup/shutdown performance" -->
<!-- id="6.2.3.4.2.20050913154534.01f74d50_at_pobox1663.lanl.gov" -->
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
<strong>From:</strong> Ralph H. Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-13 16:52:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0344.php">Galen M. Shipman: "Registration Cache changes"</a>
<li><strong>Previous message:</strong> <a href="0342.php">Galen M. Shipman: "Re:  OMPI compile failing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo folks
<br>
<p>Josh ran some tests for me on Odin earlier today - the results show a 
<br>
major improvement in our startup/shutdown performance. As you may 
<br>
recall, our times grew roughly exponentially before - as the attached 
<br>
graph shows, they now grow roughly linearly. The data also shows that 
<br>
the MPI_INIT penalty is fairly small. This is due to the data 
<br>
exchange being &quot;encapsulated&quot; in the initial data sent back at the 
<br>
stage_1 trigger, thus avoiding any further overhead as the number of 
<br>
processes grows. The data was taken using the rsh launcher.
<br>
<p>We should be able to further improve our scalability once we (a) 
<br>
incorporate a tree-based scheme into the rsh launcher and (b) utilize 
<br>
a tree-based (or better) broadcast mechanism for sending the trigger 
<br>
messages (right now, we send them linearly across the processes).
<br>
<p>Anyway, thought you might find this of interest.
<br>
Ralph
<br>
[]
<br>
<p><p>
<p>
<br><p>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="../../att-0343/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="../../att-0343/perf.jpg" alt="perf.jpg">
<!-- attachment="perf.jpg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0344.php">Galen M. Shipman: "Registration Cache changes"</a>
<li><strong>Previous message:</strong> <a href="0342.php">Galen M. Shipman: "Re:  OMPI compile failing"</a>
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
