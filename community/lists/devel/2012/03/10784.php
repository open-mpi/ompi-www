<?
$subject_val = "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 29 11:19:54 2012" -->
<!-- isoreceived="20120329151954" -->
<!-- sent="Thu, 29 Mar 2012 20:49:49 +0530" -->
<!-- isosent="20120329151949" -->
<!-- name="Raju" -->
<!-- email="brajuk_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Openmpi-1.5.3 issue &amp;quot; initialization failure on /dev/ipath (err=23)&amp;quot;" -->
<!-- id="CAHbsQtRp1gt6CijRJZgtQgFabofOLNwZfBjnUhOWej6TSyHbRA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="96B3BCD2-3F0D-4BF6-BE36-2E73E53ACE04_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;<br>
<strong>From:</strong> Raju (<em>brajuk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-29 11:19:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10785.php">Raju: "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
<li><strong>Previous message:</strong> <a href="10783.php">Ralph Castain: "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
<li><strong>In reply to:</strong> <a href="10783.php">Ralph Castain: "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10785.php">Raju: "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
<li><strong>Reply:</strong> <a href="10785.php">Raju: "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks for the very quick response, I did compiled with -tm option i am
<br>
doing now, once it done i will revert back...
<br>
<p>Thanks
<br>
Raju..
<br>
<p>On Thu, Mar 29, 2012 at 8:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; One thing stands out right away: why are you specifying a hostfile? Did
</span><br>
<span class="quotelev1">&gt; you remember to configure OMPI with --with-tm so we launch via Torque? If
</span><br>
<span class="quotelev1">&gt; not, then you could hit issues as you are actually attempting to launch via
</span><br>
<span class="quotelev1">&gt; ssh, which has implications on a Torque-based system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 29, 2012, at 8:51 AM, Raju wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Team,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using Qlogic Infiniband and Openmpi-1.5.3. I can able to run the jobs
</span><br>
<span class="quotelev1">&gt; by CLI without any issues, but when iam submitting over torque scheduler
</span><br>
<span class="quotelev1">&gt; facing the below issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am facing issue while submitting the jobs through Torque scheduler.
</span><br>
<span class="quotelev1">&gt; Error file is attached
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Overview of the problem:*
</span><br>
<span class="quotelev1">&gt; node1.ibab.ac.in.5910Driver initialization failure on /dev/ipath (err=23)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; PSM was unable to open an endpoint. Please make sure that the network link
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; active on the node and the hardware is functioning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Error: Failure in initializing endpoint
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I gone through the link
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/12/17888.php">http://www.open-mpi.org/community/lists/users/2011/12/17888.php</a> for
</span><br>
<span class="quotelev1">&gt; solution, same followed but no luck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I exported the value in my input submit script file as export
</span><br>
<span class="quotelev1">&gt; PSM_SHAREDCONTEXTS_MAX=16, and submitted the job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sample inputfile is
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #PBS -N matmul
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=1:ppn=1
</span><br>
<span class="quotelev1">&gt; node=1
</span><br>
<span class="quotelev1">&gt; ppn=1
</span><br>
<span class="quotelev1">&gt; nprocs=`expr ${node} \* ${ppn}`
</span><br>
<span class="quotelev1">&gt; echo &quot;--- PBS_NODEFILE CONTENT ---&quot;
</span><br>
<span class="quotelev1">&gt; cat $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; export PSM_SHAREDCONTEXTS_MAX=16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np ${nprocs} --hostfile $PBS_NODEFILE  /home/khan/a.out &lt;
</span><br>
<span class="quotelev1">&gt; /home/khan/iter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know I doing correct or not ? and suggest me for best out ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bhagya Raju K
</span><br>
<span class="quotelev1">&gt; &lt;errfile.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10784/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10785.php">Raju: "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
<li><strong>Previous message:</strong> <a href="10783.php">Ralph Castain: "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
<li><strong>In reply to:</strong> <a href="10783.php">Ralph Castain: "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10785.php">Raju: "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
<li><strong>Reply:</strong> <a href="10785.php">Raju: "Re: [OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
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
