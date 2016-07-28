<?
$subject_val = "[OMPI devel] RoCE plus QDR IB tunable parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 17:37:48 2015" -->
<!-- isoreceived="20150206223748" -->
<!-- sent="Fri, 6 Feb 2015 16:37:46 -0600" -->
<!-- isosent="20150206223746" -->
<!-- name="Dave Turner" -->
<!-- email="drdaveturner_at_[hidden]" -->
<!-- subject="[OMPI devel] RoCE plus QDR IB tunable parameters" -->
<!-- id="CAFGXdkxk+ap0oP+CMboH54qjw4gdJggKkS+tMy3v1UQsWUX4PQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] RoCE plus QDR IB tunable parameters<br>
<strong>From:</strong> Dave Turner (<em>drdaveturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-06 17:37:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16952.php">George Bosilca: "Re: [OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Previous message:</strong> <a href="16950.php">Ralph Castain: "[OMPI devel] PMIx support in ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16952.php">George Bosilca: "Re: [OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Reply:</strong> <a href="16952.php">George Bosilca: "Re: [OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We have nodes in our HPC system that have 2 NIC's,
<br>
one being QDR IB and the second being a slower 10 Gbps card
<br>
configured for both RoCE and TCP.  Aggregate bandwidth
<br>
tests with 20 cores on one node yelling at 20 cores on a second
<br>
node (attached roce.ib.aggregate.pdf) show that without tuning
<br>
the slower RoCE interface is being used for small messages
<br>
then QDR IB is used for larger messages (red line).  Tuning
<br>
the tcp_exclusivity to 1024 to match the openib_exclusivity
<br>
adds another 20 Gbps of bidirectional bandwidth to the high end (green
<br>
line),
<br>
and I'm guessing this is TCP traffic and not RoCE.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So by default the slower interface is being chosen on the low end, and
<br>
I don't think there are tunable parameters to allow me to choose the
<br>
QDR interface as the default.  Going forward we'll probably just disable
<br>
RoCE on these nodes and go with QDR IB plus 10 Gbps TCP for large messages.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;However, I do think these issues will come up more in the future.
<br>
With the low latency of RoCE matching IB, there are more opportunities
<br>
to do channel bonding or allowing multiple interfaces for aggregate traffic
<br>
for even smaller message sizes.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave Turner
<br>
<p><pre>
-- 
Work:     DaveTurner_at_[hidden]     (785) 532-7791
             118 Nichols Hall, Manhattan KS  66502
Home:    DrDaveTurner_at_[hidden]
              cell: (785) 770-5929



</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16951/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16951/roce.ib.aggregate.pdf">roce.ib.aggregate.pdf</a>
</ul>
<!-- attachment="roce.ib.aggregate.pdf" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16951/roce.ib.pdf">roce.ib.pdf</a>
</ul>
<!-- attachment="roce.ib.pdf" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16951/ompi_info.all">ompi_info.all</a>
</ul>
<!-- attachment="ompi_info.all" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16952.php">George Bosilca: "Re: [OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Previous message:</strong> <a href="16950.php">Ralph Castain: "[OMPI devel] PMIx support in ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16952.php">George Bosilca: "Re: [OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>Reply:</strong> <a href="16952.php">George Bosilca: "Re: [OMPI devel] RoCE plus QDR IB tunable parameters"</a>
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
