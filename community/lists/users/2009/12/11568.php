<?
$subject_val = "Re: [OMPI users] About openmpi-mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 08:38:47 2009" -->
<!-- isoreceived="20091217133847" -->
<!-- sent="Thu, 17 Dec 2009 13:33:39 -0000" -->
<!-- isosent="20091217133339" -->
<!-- name="Min Zhu" -->
<!-- email="min.zhu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About openmpi-mpirun" -->
<!-- id="64102FE81CF56640B4AE9EEF9B0026F5818BC5_at_kl-exc-001.res.lan" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B2A2F58.6010003_at_icps.u-strasbg.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] About openmpi-mpirun<br>
<strong>From:</strong> Min Zhu (<em>min.zhu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-17 08:33:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11569.php">Romaric David: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Previous message:</strong> <a href="11567.php">Romaric David: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>In reply to:</strong> <a href="11567.php">Romaric David: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11569.php">Romaric David: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Reply:</strong> <a href="11569.php">Romaric David: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>I excuted 
<br>
bsub -e ERR -o OUT -n 16 openmpi-mpirun &quot;/bin/sh -c ulimit -s unlimited; ./wrf.exe&quot;
<br>
<p>Here is the results, it seems that wrf.exe didn't run. ERR file is empty.
<br>
<p>------------------------------------------------------------
<br>
<p>Sender: LSF System &lt;lavaadmin_at_compute-10&gt;
<br>
Subject: Job 647: &lt;openmpi-mpirun &quot;/bin/sh -c ulimit -s unlimited; ./wrf.exe&quot;&gt; Done
<br>
<p>Job &lt;openmpi-mpirun &quot;/bin/sh -c ulimit -s unlimited; ./wrf.exe&quot;&gt; was submitted from host &lt;seamus&gt; by user &lt;mzh&gt;.
<br>
Job was executed on host(s) &lt;8*compute-10&gt;, in queue &lt;normal&gt;, as user &lt;mzh&gt;.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;8*compute-11&gt;
<br>
&lt;/home/mzh&gt; was used as the home directory.
<br>
&lt;/home/mzh/wrf-intel/test/run1&gt; was used as the working directory.
<br>
Started at Thu Dec 17 15:27:18 2009
<br>
Results reported at Thu Dec 17 15:27:27 2009
<br>
<p>Your job looked like:
<br>
<p>------------------------------------------------------------
<br>
# LSBATCH: User input
<br>
openmpi-mpirun &quot;/bin/sh -c ulimit -s unlimited; ./wrf.exe&quot;
<br>
------------------------------------------------------------
<br>
<p>Successfully completed.
<br>
<p>Resource usage summary:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;CPU time   :      0.05 sec.
<br>
<p>The output (if any) follows:
<br>
<p>unlimited
<br>
unlimited
<br>
unlimited
<br>
unlimited
<br>
unlimited
<br>
unlimited
<br>
unlimited
<br>
unlimited
<br>
unlimited
<br>
unlimited
<br>
unlimited
<br>
unlimited
<br>
unlimited
<br>
unlimited
<br>
unlimited
<br>
unlimited
<br>
<p><p>PS:
<br>
<p>Read file &lt;ERR&gt; for stderr output of this job.
<br>
---------------------------------------------------------
<br>
<p>Thanks,
<br>
<p>Min Zhu
<br>
<p><p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Romaric David
<br>
Sent: 17 December 2009 13:17
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] About openmpi-mpirun
<br>
<p><p><p>Min Zhu a &#233;crit :
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a question to ask you. If I issue a command &quot;bsub -n 16
</span><br>
<span class="quotelev1">&gt; openmpi-mpirun ./wrf.exe&quot; to my 128-core (16 nodes)cluster, the job
</span><br>
<span class="quotelev1">&gt; failed to run due to stacksize problem. Openmpi-mpirun is a wrapper
</span><br>
<span class="quotelev1">&gt; script written by Platform. If I want to add '/bin/sh -c ulimit -s
</span><br>
<span class="quotelev1">&gt; unlimited' to the above bsub command, how I can do it? Thank you very
</span><br>
<span class="quotelev1">&gt; much in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Hello,
<br>
<p>you should add it before wrf.exe :
<br>
<p>openmpi-mpirun &quot;sh -c ulmit -s unlimited  ; ./wrf.exe&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regards,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R. David
<br>
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>CONFIDENTIALITY NOTICE: This e-mail, including any attachments, contains information that may be confidential, and is protected by copyright. It is directed to the intended recipient(s) only.  If you have received this e-mail in error please e-mail the sender by replying to this message, and then delete the e-mail. Unauthorised disclosure, publication, copying or use of this e-mail is prohibited.  Any communication of a personal nature in this e-mail is not made by or on behalf of any RES group company. E-mails sent or received may be monitored to ensure compliance with the law, regulation and/or our policies.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11569.php">Romaric David: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Previous message:</strong> <a href="11567.php">Romaric David: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>In reply to:</strong> <a href="11567.php">Romaric David: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11569.php">Romaric David: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Reply:</strong> <a href="11569.php">Romaric David: "Re: [OMPI users] About openmpi-mpirun"</a>
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
