<?
$subject_val = "[OMPI users] core dump while running openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 14 16:08:36 2009" -->
<!-- isoreceived="20090314200836" -->
<!-- sent="Sat, 14 Mar 2009 13:08:31 -0700 (PDT)" -->
<!-- isosent="20090314200831" -->
<!-- name="Ted Yu" -->
<!-- email="tedhyu_at_[hidden]" -->
<!-- subject="[OMPI users] core dump while running openmpi" -->
<!-- id="800720.25827.qm_at_web82703.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] core dump while running openmpi<br>
<strong>From:</strong> Ted Yu (<em>tedhyu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-14 16:08:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8452.php">George Bosilca: "Re: [OMPI users] freeing attributes on communicators"</a>
<li><strong>Previous message:</strong> <a href="8450.php">ben rodriguez: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8454.php">Terry Frankcombe: "Re: [OMPI users] core dump while running openmpi"</a>
<li><strong>Reply:</strong> <a href="8454.php">Terry Frankcombe: "Re: [OMPI users] core dump while running openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there:
<br>
<p>I'm trying to install an old version of openmpi 1.1.1
<br>
on a 32 bit cluster and running a program with it.&#160; This program runs fine for another 64 bit
<br>
cluster which has openmpi 1.1.1 installed, but when running this on the 32 bit cluster, I get the
<br>
following error:
<br>
<p>/var/spool/pbs/mom_priv/jobs/282832.borg.SC:
<br>
line 37: 13154 Segmentation fault&#160;&#160;&#160;&#160;&#160; (core dumped)
<br>
/ul/tedhyu/openmpi/openmpi-1.1.1/install/bin/mpirun -machinefile
<br>
${PBS_NODEFILE} -np ${NPROCS} ${CODE}
<br>
<p>Has anybody encountered this error before?&#160; If you have any advice, it would be much appreciated.
<br>
<p>Regards,
<br>
<p>Ted


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8451/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8452.php">George Bosilca: "Re: [OMPI users] freeing attributes on communicators"</a>
<li><strong>Previous message:</strong> <a href="8450.php">ben rodriguez: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8454.php">Terry Frankcombe: "Re: [OMPI users] core dump while running openmpi"</a>
<li><strong>Reply:</strong> <a href="8454.php">Terry Frankcombe: "Re: [OMPI users] core dump while running openmpi"</a>
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
