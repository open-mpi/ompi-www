<?
$subject_val = "[OMPI users] Announcing recent package builds of qtop for multiple distros";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  9 09:10:45 2012" -->
<!-- isoreceived="20120709131045" -->
<!-- sent="Mon, 9 Jul 2012 15:10:39 +0200" -->
<!-- isosent="20120709131039" -->
<!-- name="Fotis Georgatos" -->
<!-- email="fotis_at_[hidden]" -->
<!-- subject="[OMPI users] Announcing recent package builds of qtop for multiple distros" -->
<!-- id="4FFAD84F.4020406_at_cern.ch" -->
<!-- charset="ISO-8859-7" -->
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
<strong>Subject:</strong> [OMPI users] Announcing recent package builds of qtop for multiple distros<br>
<strong>From:</strong> Fotis Georgatos (<em>fotis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-09 09:10:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19746.php">Crni Gorac: "[OMPI users] gpudirect p2p (again)?"</a>
<li><strong>Previous message:</strong> <a href="19744.php">Ammar Ahmad Awan: "[OMPI users] Difference between read and write performance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I was just debugging something else and realized that some fellows here
<br>
may be interested in the following tool, to monitor (PBS) queuing systems:
<br>
<a href="http://fotis.web.cern.ch/fotis/QTOP/">http://fotis.web.cern.ch/fotis/QTOP/</a>
<br>
The original version is a single shell script prototyped around torque,
<br>
while we have a wrapper-workaround for SGE systems lying somewhere around.
<br>
<p>Prepackaged versions for multiple linux distros can be found here:
<br>
<a href="https://build.opensuse.org/package/show?package=qtop&amp;project=home:georgatos">https://build.opensuse.org/package/show?package=qtop&amp;project=home:georgatos</a>
<br>
<p>A new version in Python as at the works during this period so, some more
<br>
queuing systems and vis. modes will be supported; if interested drop a note.
<br>
<p>ps. In case you wonder why this fits here, it is because you can see
<br>
in qtop's output the exact allocation of cores per node (look at columns);
<br>
that in turn is very useful to debug other problems rel. cores scheduling.
<br>
<p>enjoy,
<br>
Fotis
<br>
<p><pre>
-- 
echo &quot;sysadmin know better bash than english&quot; | sed s/min/mins/ \
	| sed 's/better bash/bash better/' # Yelling in a CERN forum
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19746.php">Crni Gorac: "[OMPI users] gpudirect p2p (again)?"</a>
<li><strong>Previous message:</strong> <a href="19744.php">Ammar Ahmad Awan: "[OMPI users] Difference between read and write performance"</a>
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
