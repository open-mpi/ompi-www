<?
$subject_val = "Re: [OMPI devel] mlx4 QP operation err";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 28 20:03:37 2015" -->
<!-- isoreceived="20150129010337" -->
<!-- sent="Thu, 29 Jan 2015 01:00:53 +0000" -->
<!-- isosent="20150129010053" -->
<!-- name="Devendar Bureddy" -->
<!-- email="devendar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mlx4 QP operation err" -->
<!-- id="AM2PR05MB0771310015102ED8ED29D1B1AE300_at_AM2PR05MB0771.eurprd05.prod.outlook.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAFGXdkxm5BAY6upPm7A48Kha8UyPMVWTmL9a+UnAD3fN-GOaWg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mlx4 QP operation err<br>
<strong>From:</strong> Devendar Bureddy (<em>devendar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-28 20:00:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16840.php">Todd Kordenbrock: "Re: [OMPI devel] MTL interfaces"</a>
<li><strong>Previous message:</strong> <a href="16838.php">Christopher Samuel: "Re: [OMPI devel] mlx4 QP operation err"</a>
<li><strong>In reply to:</strong> <a href="16837.php">Dave Turner: "[OMPI devel] mlx4 QP operation err"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
are you able to reproduce this error with ib verbs bw test?  I hope,  you are running on lossless Ethernet fabric setup and selecting correct VLAN .
<br>

<br>
-Devendar
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Dave Turner
<br>
Sent: Wednesday, January 28, 2015 4:31 PM
<br>
To: devel_at_[hidden]
<br>
Subject: [OMPI devel] mlx4 QP operation err
<br>

<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;I'm testing RoCE on 40 Gbps Mellanox ethernet cards and am getting a
<br>
mlx4 QP operation error every time it gets to testing 132 kB packets.  These
<br>
are aggregate tests in that 16 cores on one host are doing bi-directional
<br>
ping-pongs to 16 cores on another host across the Mellanox cards.
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I've found some old references to similar mlx4 errors dating back to
<br>
2009 that lead me to believe this may be a firmware error.  I believe we're
<br>
running the most up to date version of the firmware.
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Could someone comment on whether these are firmware issues, and
<br>
if so how to report them to Mellanox?  I've attached some files with more
<br>
detailed information on this problem.
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave Turner
<br>

<br>
--
<br>
Work:     DaveTurner_at_[hidden]&lt;mailto:DaveTurner_at_[hidden]&gt;     (785) 532-7791
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;118 Nichols Hall, Manhattan KS  66502
<br>
Home:    DrDaveTurner_at_[hidden]&lt;mailto:DrDaveTurner_at_[hidden]&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cell: (785) 770-5929
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16839/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16840.php">Todd Kordenbrock: "Re: [OMPI devel] MTL interfaces"</a>
<li><strong>Previous message:</strong> <a href="16838.php">Christopher Samuel: "Re: [OMPI devel] mlx4 QP operation err"</a>
<li><strong>In reply to:</strong> <a href="16837.php">Dave Turner: "[OMPI devel] mlx4 QP operation err"</a>
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
