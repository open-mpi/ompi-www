<?
$subject_val = "[OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 12 12:46:35 2011" -->
<!-- isoreceived="20111212174635" -->
<!-- sent="Mon, 12 Dec 2011 19:46:08 +0200" -->
<!-- isosent="20111212174608" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="[OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5" -->
<!-- id="CAL3GGtrOzHt+nbxhfNOfY9FirhAXhKScFd4ukLL6pAdvdom-OA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-12 12:46:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10062.php">Mike Dubman: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Previous message:</strong> <a href="10060.php">Ralph Castain: "[OMPI devel] Process mapping and affinity on the devel trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10062.php">Mike Dubman: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Reply:</strong> <a href="10062.php">Mike Dubman: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Reply:</strong> <a href="10081.php">Christopher Yeoh: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>The latest v1.5 from trunk, compiled in debug mode yields following error
<br>
with openib.
<br>
The quick blame leads to the following commit:
<br>
<p>r25616 | bosilca | 2011-12-10 00:18:16 +0200 (Sat, 10 Dec 2011) | 4 lines
<br>
Fixes #2930: CMR: memcpy() w/overlapping addresses in
<br>
btl_openib_connect_oob.c
<br>
Patch attached to the ticket.
<br>
<p><p><p>========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: boo12   Num procs: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [35908,1] Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [35908,1] Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [35908,1] Process rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [35908,1] Process rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [35908,1] Process rank: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [35908,1] Process rank: 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [35908,1] Process rank: 12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [35908,1] Process rank: 14
<br>
<p>&nbsp;Data for node: boo11   Num procs: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [35908,1] Process rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [35908,1] Process rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [35908,1] Process rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [35908,1] Process rank: 7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [35908,1] Process rank: 9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [35908,1] Process rank: 11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [35908,1] Process rank: 13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [35908,1] Process rank: 15
<br>
&nbsp;=============================================================
<br>
malloc debug: Invalid free (btl_openib_endpoint.c, 452)
<br>
malloc debug: Invalid free (btl_openib_endpoint.c, 452)
<br>
malloc debug: Invalid free (btl_openib_endpoint.c, 452)
<br>
malloc debug: Invalid free (btl_openib_endpoint.c, 452)
<br>
malloc debug: Invalid free (btl_openib_endpoint.c, 452)
<br>
malloc debug: Invalid free (btl_openib_endpoint.c, 452)
<br>
malloc debug: Invalid free (btl_openib_endpoint.c, 452)
<br>
malloc debug: Invalid free (btl_openib_endpoint.c, 452)
<br>
malloc debug: Invalid free (btl_openib_endpoint.c, 452)
<br>
malloc debug: Invalid free (btl_openib_endpoint.c, 452)
<br>
malloc debug: Invalid free (btl_openib_endpoint.c, 452)
<br>
FYI
<br>
M
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10061/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10062.php">Mike Dubman: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Previous message:</strong> <a href="10060.php">Ralph Castain: "[OMPI devel] Process mapping and affinity on the devel trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10062.php">Mike Dubman: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Reply:</strong> <a href="10062.php">Mike Dubman: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Reply:</strong> <a href="10081.php">Christopher Yeoh: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
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
