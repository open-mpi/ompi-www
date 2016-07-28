<?
$subject_val = "Re: [OMPI devel] alps ras patch for SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 11:41:53 2010" -->
<!-- isoreceived="20100709154153" -->
<!-- sent="Fri, 09 Jul 2010 11:41:48 -0400" -->
<!-- isosent="20100709154148" -->
<!-- name="Matney Sr, Kenneth D." -->
<!-- email="matneykdsr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] alps ras patch for SLURM" -->
<!-- id="A7942AA7-9D4B-498A-B573-4AFE4B38DB54_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C36F79E.5030209_at_cscs.ch" -->
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
<strong>Subject:</strong> Re: [OMPI devel] alps ras patch for SLURM<br>
<strong>From:</strong> Matney Sr, Kenneth D. (<em>matneykdsr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-09 11:41:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8162.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8160.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8151.php">Jerome Soumagne: "[OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8165.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Reply:</strong> <a href="8165.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jerome,
<br>
<p>I am in part responsible for the current incarnation of the ALPS  support in OMPI.  We use the
<br>
modules environment to set OMPI_ALPS_RESID to the ALPS reservation ID, the pertinent
<br>
parts of which are:
<br>
<p>&nbsp;&nbsp;set           ridpath                         ${basedir}/share/openmpi
<br>
&nbsp;&nbsp;set           ridname                         ras-alps-command.sh
<br>
&nbsp;&nbsp;set           rid                             ${ridpath}/${ridname}
<br>
<p># Set local cluster parameters for XT5.
<br>
&nbsp;&nbsp;set           resId                           [exec /bin/bash ${rid}]
<br>
&nbsp;&nbsp;setenv        OMPI_ALPS_RESID                 $resId
<br>
<p>Originally, the Cray XT systems automatically set an environmental variable, BATCH_PARTITION_ID
<br>
to the ALPS reservation ID for the job.  However, newer versions do not expose the ALPS reservation
<br>
ID to the user.  So, we need a way to get the ALPS reservation ID of the Torque job.  Unfortunately,
<br>
Cray has not made the internal structure of ALPS that does this available.  So, we are forced to use
<br>
apstat to get this information.  But, apstat is not as robust as we might like.  Ergo, the script is used to
<br>
loop on apstat until it does not fail.  In the end, we obtain the ALPS reservation ID for the current
<br>
Torque job and set it to OMPI_ALPS_RESID.  I chose this name so as to avoid namespace conflicts.
<br>
<p>So, the ALPS RAS mca is being selected, because your patch tells the ALPS RAS mca that
<br>
BASIL_RESERVATION_ID is equivalent to OMPI_ALPS_RESID.  In turn, while you invoke OMPI with
<br>
mpirun, the OMPI version of mpirun will select the ALPS PLM mca.  This will launch your job with an
<br>
aprun (under the covers).  So, your job does show a successful run.  However, you may not be taking
<br>
the path through mpirun that you intended.
<br>
<p>I do hope that I have cleared up some confusion.
<br>
<pre>
--
Ken Matney, Sr.
Oak Ridge National Laboratory
On Jul 9, 2010, at 6:19 AM, Jerome Soumagne wrote:
Hi,
We've recently installed OpenMPI on one of our Cray XT5 machines, here at CSCS. This machine uses SLURM for launching jobs.
Doing an salloc defines this environment variable:
              BASIL_RESERVATION_ID
              The reservation ID on Cray systems running ALPS/BASIL only.
Since the alps ras module tries to find a variable called OMPI_ALPS_RESID which is set using a script, we thought that for SLURM systems it would be a good idea to directly integrate this BASIL_RESERVATION_ID variable in the code, rather than using a script. The small patch is attached.
Regards,
Jerome
--
J&#233;r&#244;me Soumagne
Scientific Computing Research Group
CSCS, Swiss National Supercomputing Centre
Galleria 2, Via Cantonale  | Tel: +41 (0)91 610 8258
CH-6928 Manno, Switzerland | Fax: +41 (0)91 610 8282
&lt;patch_slurm_alps.txt&gt;&lt;ATT00001..txt&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8162.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8160.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8151.php">Jerome Soumagne: "[OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8165.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Reply:</strong> <a href="8165.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
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
