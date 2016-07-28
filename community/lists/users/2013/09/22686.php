<?
$subject_val = "[OMPI users] intermittent node file error running with torque/maui integration";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 09:55:45 2013" -->
<!-- isoreceived="20130920135545" -->
<!-- sent="Fri, 20 Sep 2013 09:55:44 -0400" -->
<!-- isosent="20130920135544" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="[OMPI users] intermittent node file error running with torque/maui integration" -->
<!-- id="B695C61E-461C-47E1-8634-FB492CA04947_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> [OMPI users] intermittent node file error running with torque/maui integration<br>
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 09:55:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22687.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>Previous message:</strong> <a href="22685.php">Siegmar Gross: "[OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22687.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>Reply:</strong> <a href="22687.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>Reply:</strong> <a href="22698.php">Gus Correa: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi - we've been using openmpi for a while, but only for the last few months
<br>
with torque/maui.  Intermittently (maybe 1/10 jobs), we get mpi jobs that fail with the error:
<br>
<p>[compute-2-4:32448] [[52041,0],0] ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 142
<br>
[compute-2-4:32448] [[52041,0],0] ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 82
<br>
[compute-2-4:32448] [[52041,0],0] ORTE_ERROR_LOG: File open failure in file base/ras_base_allocate.c at line 149
<br>
[compute-2-4:32448] [[52041,0],0] ORTE_ERROR_LOG: File open failure in file base/plm_base_launch_support.c at line 99
<br>
[compute-2-4:32448] [[52041,0],0] ORTE_ERROR_LOG: File open failure in file plm_tm_module.c at line 194
<br>
<p>This is completely unrepeatable - resubmitting the same job almost
<br>
always works the second time around.  The line appears to be
<br>
associated with looking for the torque/maui generated node file,
<br>
and when I do something like
<br>
&nbsp;&nbsp;echo $PBS_NODEFILE
<br>
&nbsp;&nbsp;cat $PBS_NODEFILE
<br>
it appears that the file is present and correct.  
<br>
<p>We're running OpenMPI 1.6.4, configured with 
<br>
./configure \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix=${DEST} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-tm=/usr/local/torque \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpirun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-openib=/usr \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-openib-libdir=/usr/lib64
<br>
<p>Has anyone seen anything like this before, or has any ideas of what might
<br>
be happening?  It appears to be a line where openmpi looks for
<br>
the PBS node file, which is on a local filesystem (e.g. PBS_NODEFILE=/var/spool/torque/aux//4600.tin).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>
<p><p><p>Noam Bernstein
<br>
Center for Computational Materials Science
<br>
NRL Code 6390
<br>
noam.bernstein_at_[hidden]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22687.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>Previous message:</strong> <a href="22685.php">Siegmar Gross: "[OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22687.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>Reply:</strong> <a href="22687.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>Reply:</strong> <a href="22698.php">Gus Correa: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
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
