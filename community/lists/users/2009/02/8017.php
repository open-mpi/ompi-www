<?
$subject_val = "[OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 07:38:29 2009" -->
<!-- isoreceived="20090211123829" -->
<!-- sent="Wed, 11 Feb 2009 13:38:23 +0100" -->
<!-- isosent="20090211123823" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am" -->
<!-- id="1234355903.29157.104.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> [OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-11 07:38:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8018.php">Prentice Bisbal: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<li><strong>Previous message:</strong> <a href="8016.php">Mr Yann JOBIC: "[OMPI users] strange error, seems inable to launch job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8019.php">Ralph Castain: "Re: [OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am"</a>
<li><strong>Reply:</strong> <a href="8019.php">Ralph Castain: "Re: [OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am"</a>
<li><strong>Reply:</strong> <a href="8024.php">Gary Draving: "[OMPI users] openmpi/ib noob question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>orte/mca/plm/tm/Makefile.am is missing a
<br>
mca_plm_tm_la_LIBADD = $(plm_tm_LIBS)
<br>
like the corresponding line in orte/mca/ras/tm/Makefile.am
<br>
mca_ras_tm_la_LIBADD...
<br>
<p>I think this is the cause for the &quot;undefined symbol: tm_init&quot; mail from
<br>
2009-02-09 20:41:45 by Brett Pemberton
<br>
<p>I have the same problem and when closely checking the resulting
<br>
Makefiles and build output i saw that mca_ras_tm.so gets the -ltorque
<br>
added but mca_plm_tm.so doesn't.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8018.php">Prentice Bisbal: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<li><strong>Previous message:</strong> <a href="8016.php">Mr Yann JOBIC: "[OMPI users] strange error, seems inable to launch job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8019.php">Ralph Castain: "Re: [OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am"</a>
<li><strong>Reply:</strong> <a href="8019.php">Ralph Castain: "Re: [OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am"</a>
<li><strong>Reply:</strong> <a href="8024.php">Gary Draving: "[OMPI users] openmpi/ib noob question"</a>
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
