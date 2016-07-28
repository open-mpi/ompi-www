<?
$subject_val = "[OMPI users] Qlogic &amp; openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 27 15:12:17 2011" -->
<!-- isoreceived="20111127201217" -->
<!-- sent="Sun, 27 Nov 2011 23:11:42 +0300" -->
<!-- isosent="20111127201142" -->
<!-- name="Arnaud Heritier" -->
<!-- email="gmarns_at_[hidden]" -->
<!-- subject="[OMPI users] Qlogic &amp;amp; openmpi" -->
<!-- id="CAJ9JPxHxFfuQjzsx56554NVOyCJNPW3Y_mcf4N+mxV5UhQvmQQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Qlogic &amp; openmpi<br>
<strong>From:</strong> Arnaud Heritier (<em>gmarns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-27 15:11:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17839.php">Igor Geier: "[OMPI users] Open MPI and SLURM_CPUS_PER_TASK"</a>
<li><strong>Previous message:</strong> <a href="17837.php">Ralph Castain: "Re: [OMPI users] open-mpi error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17853.php">Jeff Squyres: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Reply:</strong> <a href="17853.php">Jeff Squyres: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I run into a stange problem with qlogic OFED and openmpi. When i submit
<br>
(through SGE) 2 jobs on the same node, the second job ends up with:
<br>
<p>(ipath/PSM)[10292]: can't open /dev/ipath, network down (err=26)
<br>
<p>I'm pretty sure the infiniband is working well as the other job runs fine.
<br>
<p>Here is details about the configuration:
<br>
<p>Qlogic HCA: InfiniPath_QMH7342 (2 ports but only one connected to a switch)
<br>
qlogic_ofed-1.5.3-7.0.0.0.35 (rocks cluster roll)
<br>
openmpi 1.5.4 (./configure --with-psm --with-openib --with-sge)
<br>
<p>-------------
<br>
<p>In order to fix this problem i recompiled openmpi without psm support, but
<br>
i faced an other problem:
<br>
<p>The OpenFabrics (openib) BTL failed to initialize while trying to
<br>
allocate some locked memory.  This typically can indicate that the
<br>
memlock limits are set too low.  For most HPC installations, the
<br>
memlock limits should be set to &quot;unlimited&quot;.  The failure occured
<br>
here:
<br>
<p>&nbsp;&nbsp;Local host:    compute-0-6.local
<br>
&nbsp;&nbsp;OMPI source:   btl_openib.c:329
<br>
&nbsp;&nbsp;Function:      ibv_create_srq()
<br>
&nbsp;&nbsp;Device:        qib0
<br>
&nbsp;&nbsp;Memlock limit: *unlimited*
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17838/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17839.php">Igor Geier: "[OMPI users] Open MPI and SLURM_CPUS_PER_TASK"</a>
<li><strong>Previous message:</strong> <a href="17837.php">Ralph Castain: "Re: [OMPI users] open-mpi error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17853.php">Jeff Squyres: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Reply:</strong> <a href="17853.php">Jeff Squyres: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
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
