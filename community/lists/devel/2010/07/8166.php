<?
$subject_val = "Re: [OMPI devel] alps ras patch for SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 12:53:51 2010" -->
<!-- isoreceived="20100709165351" -->
<!-- sent="Fri, 9 Jul 2010 18:53:44 +0200" -->
<!-- isosent="20100709165344" -->
<!-- name="Jerome Soumagne" -->
<!-- email="soumagne_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] alps ras patch for SLURM" -->
<!-- id="4C375418.3040003_at_cscs.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C374DE8.2070304_at_cscs.ch" -->
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
<strong>Date:</strong> 2010-07-09 12:53:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8167.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<li><strong>Previous message:</strong> <a href="8165.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8165.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would prefer the first patch though so that we get rid of scripts and 
<br>
of another env variable but well, I let you choose.
<br>
<p>Jerome
<br>
<p>On 07/09/2010 06:27 PM, Jerome Soumagne wrote:
<br>
<span class="quotelev1">&gt; Hi Ken,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's interesting, setting the OMPI_ALPS_RESID in the modules so that 
</span><br>
<span class="quotelev1">&gt; it executes the ras-alps-command.sh is a good idea. In this case 
</span><br>
<span class="quotelev1">&gt; another way would be to add an extra line in this script with the 
</span><br>
<span class="quotelev1">&gt; BASIL_RESERVATION_ID as you did for the BATCH_PARTITION_ID.
</span><br>
<span class="quotelev1">&gt; I have another possible patch then:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ras-alps-command.sh
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ras-alps-command.sh    (revision 23365)
</span><br>
<span class="quotelev1">&gt; +++ ras-alps-command.sh    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -22,6 +22,13 @@
</span><br>
<span class="quotelev1">&gt;      exit 0
</span><br>
<span class="quotelev1">&gt;    fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +  # If the SLURM BASIL_RESERVATION_ID is set, use it.
</span><br>
<span class="quotelev1">&gt; +  if [ &quot;${BASIL_RESERVATION_ID}&quot; != &quot;&quot; ]
</span><br>
<span class="quotelev1">&gt; +  then
</span><br>
<span class="quotelev1">&gt; +      ${ECHO} ${BASIL_RESERVATION_ID}
</span><br>
<span class="quotelev1">&gt; +      exit 0
</span><br>
<span class="quotelev1">&gt; +  fi
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  # Extract the batch job ID directly from the environment, if available.
</span><br>
<span class="quotelev1">&gt;    jid=${BATCH_JOBID:--1}
</span><br>
<span class="quotelev1">&gt;    if [ $jid -eq -1 ]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help in the clarification.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jerome
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 07/09/2010 05:41 PM, Matney Sr, Kenneth D. wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jerome,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am in part responsible for the current incarnation of the ALPS  support in OMPI.  We use the
</span><br>
<span class="quotelev2">&gt;&gt; modules environment to set OMPI_ALPS_RESID to the ALPS reservation ID, the pertinent
</span><br>
<span class="quotelev2">&gt;&gt; parts of which are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    set           ridpath                         ${basedir}/share/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;    set           ridname                         ras-alps-command.sh
</span><br>
<span class="quotelev2">&gt;&gt;    set           rid                             ${ridpath}/${ridname}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Set local cluster parameters for XT5.
</span><br>
<span class="quotelev2">&gt;&gt;    set           resId                           [exec /bin/bash ${rid}]
</span><br>
<span class="quotelev2">&gt;&gt;    setenv        OMPI_ALPS_RESID                 $resId
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Originally, the Cray XT systems automatically set an environmental variable, BATCH_PARTITION_ID
</span><br>
<span class="quotelev2">&gt;&gt; to the ALPS reservation ID for the job.  However, newer versions do not expose the ALPS reservation
</span><br>
<span class="quotelev2">&gt;&gt; ID to the user.  So, we need a way to get the ALPS reservation ID of the Torque job.  Unfortunately,
</span><br>
<span class="quotelev2">&gt;&gt; Cray has not made the internal structure of ALPS that does this available.  So, we are forced to use
</span><br>
<span class="quotelev2">&gt;&gt; apstat to get this information.  But, apstat is not as robust as we might like.  Ergo, the script is used to
</span><br>
<span class="quotelev2">&gt;&gt; loop on apstat until it does not fail.  In the end, we obtain the ALPS reservation ID for the current
</span><br>
<span class="quotelev2">&gt;&gt; Torque job and set it to OMPI_ALPS_RESID.  I chose this name so as to avoid namespace conflicts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, the ALPS RAS mca is being selected, because your patch tells the ALPS RAS mca that
</span><br>
<span class="quotelev2">&gt;&gt; BASIL_RESERVATION_ID is equivalent to OMPI_ALPS_RESID.  In turn, while you invoke OMPI with
</span><br>
<span class="quotelev2">&gt;&gt; mpirun, the OMPI version of mpirun will select the ALPS PLM mca.  This will launch your job with an
</span><br>
<span class="quotelev2">&gt;&gt; aprun (under the covers).  So, your job does show a successful run.  However, you may not be taking
</span><br>
<span class="quotelev2">&gt;&gt; the path through mpirun that you intended.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do hope that I have cleared up some confusion.
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ken Matney, Sr.
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 9, 2010, at 6:19 AM, Jerome Soumagne wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We've recently installed OpenMPI on one of our Cray XT5 machines, here at CSCS. This machine uses SLURM for launching jobs.
</span><br>
<span class="quotelev2">&gt;&gt; Doing an salloc defines this environment variable:
</span><br>
<span class="quotelev2">&gt;&gt;                BASIL_RESERVATION_ID
</span><br>
<span class="quotelev2">&gt;&gt;                The reservation ID on Cray systems running ALPS/BASIL only.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since the alps ras module tries to find a variable called OMPI_ALPS_RESID which is set using a script, we thought that for SLURM systems it would be a good idea to directly integrate this BASIL_RESERVATION_ID variable in the code, rather than using a script. The small patch is attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jerome
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; J&#233;r&#244;me Soumagne
</span><br>
<span class="quotelev2">&gt;&gt; Scientific Computing Research Group
</span><br>
<span class="quotelev2">&gt;&gt; CSCS, Swiss National Supercomputing Centre
</span><br>
<span class="quotelev2">&gt;&gt; Galleria 2, Via Cantonale  | Tel: +41 (0)91 610 8258
</span><br>
<span class="quotelev2">&gt;&gt; CH-6928 Manno, Switzerland | Fax: +41 (0)91 610 8282
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;patch_slurm_alps.txt&gt;&lt;ATT00001..txt&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8166/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8167.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<li><strong>Previous message:</strong> <a href="8165.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8165.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
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
