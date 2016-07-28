<?
$subject_val = "Re: [OMPI devel] alps ras patch for SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 12:27:26 2010" -->
<!-- isoreceived="20100709162726" -->
<!-- sent="Fri, 9 Jul 2010 18:27:20 +0200" -->
<!-- isosent="20100709162720" -->
<!-- name="Jerome Soumagne" -->
<!-- email="soumagne_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] alps ras patch for SLURM" -->
<!-- id="4C374DE8.2070304_at_cscs.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A7942AA7-9D4B-498A-B573-4AFE4B38DB54_at_ornl.gov" -->
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
<strong>From:</strong> Jerome Soumagne (<em>soumagne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-09 12:27:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8166.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8164.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8161.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8166.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Reply:</strong> <a href="8166.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ken,
<br>
<p>That's interesting, setting the OMPI_ALPS_RESID in the modules so that 
<br>
it executes the ras-alps-command.sh is a good idea. In this case another 
<br>
way would be to add an extra line in this script with the 
<br>
BASIL_RESERVATION_ID as you did for the BATCH_PARTITION_ID.
<br>
I have another possible patch then:
<br>
<p>Index: ras-alps-command.sh
<br>
===================================================================
<br>
--- ras-alps-command.sh    (revision 23365)
<br>
+++ ras-alps-command.sh    (working copy)
<br>
@@ -22,6 +22,13 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
<p>+  # If the SLURM BASIL_RESERVATION_ID is set, use it.
<br>
+  if [ &quot;${BASIL_RESERVATION_ID}&quot; != &quot;&quot; ]
<br>
+  then
<br>
+      ${ECHO} ${BASIL_RESERVATION_ID}
<br>
+      exit 0
<br>
+  fi
<br>
+
<br>
&nbsp;&nbsp;# Extract the batch job ID directly from the environment, if available.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;jid=${BATCH_JOBID:--1}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if [ $jid -eq -1 ]
<br>
<p><p>Thanks for your help in the clarification.
<br>
<p>Jerome
<br>
<p>On 07/09/2010 05:41 PM, Matney Sr, Kenneth D. wrote:
<br>
<span class="quotelev1">&gt; Hi Jerome,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am in part responsible for the current incarnation of the ALPS  support in OMPI.  We use the
</span><br>
<span class="quotelev1">&gt; modules environment to set OMPI_ALPS_RESID to the ALPS reservation ID, the pertinent
</span><br>
<span class="quotelev1">&gt; parts of which are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    set           ridpath                         ${basedir}/share/openmpi
</span><br>
<span class="quotelev1">&gt;    set           ridname                         ras-alps-command.sh
</span><br>
<span class="quotelev1">&gt;    set           rid                             ${ridpath}/${ridname}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Set local cluster parameters for XT5.
</span><br>
<span class="quotelev1">&gt;    set           resId                           [exec /bin/bash ${rid}]
</span><br>
<span class="quotelev1">&gt;    setenv        OMPI_ALPS_RESID                 $resId
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Originally, the Cray XT systems automatically set an environmental variable, BATCH_PARTITION_ID
</span><br>
<span class="quotelev1">&gt; to the ALPS reservation ID for the job.  However, newer versions do not expose the ALPS reservation
</span><br>
<span class="quotelev1">&gt; ID to the user.  So, we need a way to get the ALPS reservation ID of the Torque job.  Unfortunately,
</span><br>
<span class="quotelev1">&gt; Cray has not made the internal structure of ALPS that does this available.  So, we are forced to use
</span><br>
<span class="quotelev1">&gt; apstat to get this information.  But, apstat is not as robust as we might like.  Ergo, the script is used to
</span><br>
<span class="quotelev1">&gt; loop on apstat until it does not fail.  In the end, we obtain the ALPS reservation ID for the current
</span><br>
<span class="quotelev1">&gt; Torque job and set it to OMPI_ALPS_RESID.  I chose this name so as to avoid namespace conflicts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, the ALPS RAS mca is being selected, because your patch tells the ALPS RAS mca that
</span><br>
<span class="quotelev1">&gt; BASIL_RESERVATION_ID is equivalent to OMPI_ALPS_RESID.  In turn, while you invoke OMPI with
</span><br>
<span class="quotelev1">&gt; mpirun, the OMPI version of mpirun will select the ALPS PLM mca.  This will launch your job with an
</span><br>
<span class="quotelev1">&gt; aprun (under the covers).  So, your job does show a successful run.  However, you may not be taking
</span><br>
<span class="quotelev1">&gt; the path through mpirun that you intended.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do hope that I have cleared up some confusion.
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ken Matney, Sr.
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 9, 2010, at 6:19 AM, Jerome Soumagne wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've recently installed OpenMPI on one of our Cray XT5 machines, here at CSCS. This machine uses SLURM for launching jobs.
</span><br>
<span class="quotelev1">&gt; Doing an salloc defines this environment variable:
</span><br>
<span class="quotelev1">&gt;                BASIL_RESERVATION_ID
</span><br>
<span class="quotelev1">&gt;                The reservation ID on Cray systems running ALPS/BASIL only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since the alps ras module tries to find a variable called OMPI_ALPS_RESID which is set using a script, we thought that for SLURM systems it would be a good idea to directly integrate this BASIL_RESERVATION_ID variable in the code, rather than using a script. The small patch is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jerome
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; J&#233;r&#244;me Soumagne
</span><br>
<span class="quotelev1">&gt; Scientific Computing Research Group
</span><br>
<span class="quotelev1">&gt; CSCS, Swiss National Supercomputing Centre
</span><br>
<span class="quotelev1">&gt; Galleria 2, Via Cantonale  | Tel: +41 (0)91 610 8258
</span><br>
<span class="quotelev1">&gt; CH-6928 Manno, Switzerland | Fax: +41 (0)91 610 8282
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;patch_slurm_alps.txt&gt;&lt;ATT00001..txt&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8165/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8166.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8164.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8161.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8166.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Reply:</strong> <a href="8166.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
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
