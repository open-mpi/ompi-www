<?
$subject_val = "[OMPI devel] PMI2 in Slurm 14.11.8";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 23:09:53 2015" -->
<!-- isoreceived="20150902030953" -->
<!-- sent="Wed, 2 Sep 2015 13:09:49 +1000" -->
<!-- isosent="20150902030949" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] PMI2 in Slurm 14.11.8" -->
<!-- id="55E6687D.2030701_at_unimelb.edu.au" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] PMI2 in Slurm 14.11.8<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-01 23:09:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17918.php">Christopher Samuel: "Re: [OMPI devel] PMI2 in Slurm 14.11.8"</a>
<li><strong>Previous message:</strong> <a href="17916.php">Ralph Castain: "Re: [OMPI devel] Problem running from ompi master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17918.php">Christopher Samuel: "Re: [OMPI devel] PMI2 in Slurm 14.11.8"</a>
<li><strong>Maybe reply:</strong> <a href="17918.php">Christopher Samuel: "Re: [OMPI devel] PMI2 in Slurm 14.11.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>The OpenMPI FAQ says:
<br>
<p><a href="https://www.open-mpi.org/faq/?category=slurm#slurm-direct-srun-mpi-apps">https://www.open-mpi.org/faq/?category=slurm#slurm-direct-srun-mpi-apps</a>
<br>
<p># Yes, if you have configured OMPI --with-pmi=foo, where foo is
<br>
# the path to the directory where pmi.h/pmi2.h is located.
<br>
# Slurm (&gt; 2.6, &gt; 14.03) installs PMI-2 support by default.
<br>
<p>However, we've found on a new system we're bringing up this doesn't
<br>
appear to be true for the vanilla Slurm 14.11.8 we're installing.
<br>
<p>Instead PMI2 is in a contrib directory which appears to need manual
<br>
intervention to install.
<br>
<p>I've sent an email to the Slurm list to query this behaviour but I was
<br>
wondering in case anyone had run into this here too?
<br>
<p>All the best,
<br>
Chris
<br>
<pre>
-- 
 Christopher Samuel        Senior Systems Administrator
 VLSCI - Victorian Life Sciences Computation Initiative
 Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
 <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17918.php">Christopher Samuel: "Re: [OMPI devel] PMI2 in Slurm 14.11.8"</a>
<li><strong>Previous message:</strong> <a href="17916.php">Ralph Castain: "Re: [OMPI devel] Problem running from ompi master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17918.php">Christopher Samuel: "Re: [OMPI devel] PMI2 in Slurm 14.11.8"</a>
<li><strong>Maybe reply:</strong> <a href="17918.php">Christopher Samuel: "Re: [OMPI devel] PMI2 in Slurm 14.11.8"</a>
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
