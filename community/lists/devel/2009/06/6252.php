<?
$subject_val = "[OMPI devel] connect management for multirail (Open-)MX";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 17 08:22:36 2009" -->
<!-- isoreceived="20090617122236" -->
<!-- sent="Wed, 17 Jun 2009 14:23:06 +0200" -->
<!-- isosent="20090617122306" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[OMPI devel] connect management for multirail (Open-)MX" -->
<!-- id="4A38E02A.7070900_at_inria.fr" -->
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
<strong>Subject:</strong> [OMPI devel] connect management for multirail (Open-)MX<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-17 08:23:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6253.php">Ashley Pittman: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6251.php">Jeff Squyres: "Re: [OMPI devel] 1.3.3 Release Schedule"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6259.php">George Bosilca: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
<li><strong>Reply:</strong> <a href="6259.php">George Bosilca: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am debugging some sort of deadlock when doing multirail over Open-MX.
<br>
What I am seeing with 2 processes and 2 boards per node with *MX* is:
<br>
1) process 0 rail 0 connects to process 1 rail 0
<br>
2) p1r0 connects back to p0r0
<br>
3) p0 rail 1 connects to p1 rail 1
<br>
4) p1r1 connects back to p0r1
<br>
For some reason, with *Open-MX*, process 0 seems to start (3) before
<br>
process 1 has finished (2). It probably causes a deadlock because p1 is
<br>
polling on rail 0 for (2), while (3) needs somebody to poll on rail 1
<br>
for the connect handshake.
<br>
<p>So, the question is: is there anything in OMPI (1.3) guarantying that
<br>
the above 4 steps will occur in some specified order? If so, Open-MX is
<br>
probably doing something wrong breaking the order. If not, adding a
<br>
progression thread to Open-MX might be the only solution...
<br>
<p>thanks,
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6253.php">Ashley Pittman: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6251.php">Jeff Squyres: "Re: [OMPI devel] 1.3.3 Release Schedule"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6259.php">George Bosilca: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
<li><strong>Reply:</strong> <a href="6259.php">George Bosilca: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
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
