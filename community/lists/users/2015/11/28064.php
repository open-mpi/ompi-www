<?
$subject_val = "Re: [OMPI users] help understand unhelpful ORTE error message";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 13:45:37 2015" -->
<!-- isoreceived="20151119184537" -->
<!-- sent="Thu, 19 Nov 2015 12:45:23 -0600" -->
<!-- isosent="20151119184523" -->
<!-- name="Howard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help understand unhelpful ORTE error message" -->
<!-- id="FC203DF5-80B6-4AA4-AF3F-8DC4BB8FF9AF_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1852321.UKbvTmxxiX_at_stikine" -->
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
<strong>Subject:</strong> Re: [OMPI users] help understand unhelpful ORTE error message<br>
<strong>From:</strong> Howard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-19 13:45:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28065.php">Saurabh T: "[OMPI users] OpenMPI 1.10.1 crashes with file size limit &lt;= 131072"</a>
<li><strong>Previous message:</strong> <a href="28063.php">Martin Siegert: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>In reply to:</strong> <a href="28063.php">Martin Siegert: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28072.php">Jeff Hammond: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28072.php">Jeff Hammond: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>How did you configure for Cori?  You need to be using the slurm plm component for that system.  I know this sounds like gibberish.  
<br>
<p>There should be a with-slurm configure option to pick up this component. 
<br>
<p>Doesn't mpich have the option to use sysv memory?  You may want to try that
<br>
<p>Oh for tuning params you can use env variables.  For example lets say rather than using the gni provider in ofi mtl you want to try sockets. Then do
<br>
<p>Export OMPI_MCA_mtl_ofi_provider_include=sockets
<br>
<p>In the spirit OMPI - may the force be with you.   
<br>
<p>Howard 
<br>
<p>Von meinem iPhone gesendet
<br>
<p><span class="quotelev1">&gt; Am 19.11.2015 um 11:51 schrieb Martin Siegert &lt;siegert_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Thu 19.11.2015 09:44:20 Jeff Hammond wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I have no idea what this is trying to tell me. Help?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; jhammond_at_nid00024:~/MPI/qoit/collectives&gt; mpirun -n 2 ./driver.x 64
</span><br>
<span class="quotelev2">&gt; &gt; [nid00024:00482] [[46168,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../orte/mca/plm/alps/plm_alps_module.c at line 418
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can run the same job with srun without incident:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; jhammond_at_nid00024:~/MPI/qoit/collectives&gt; srun -n 2 ./driver.x 64
</span><br>
<span class="quotelev2">&gt; &gt; MPI was initialized.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is on the NERSC Cori Cray XC40 system. I build Open-MPI git head from
</span><br>
<span class="quotelev2">&gt; &gt; source for OFI libfabric.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have many other issues, which I will report later. As a spoiler, if I
</span><br>
<span class="quotelev2">&gt; &gt; cannot use your mpirun, I cannot set any of the MCA options there. Is
</span><br>
<span class="quotelev2">&gt; &gt; there a method to set MCA options with environment variables? I could not
</span><br>
<span class="quotelev2">&gt; &gt; find this documented anywhere.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In particular, is there a way to cause shm to not use the global
</span><br>
<span class="quotelev2">&gt; &gt; filesystem? I see this issue comes up a lot and I read the list archives,
</span><br>
<span class="quotelev2">&gt; &gt; but the warning message (
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://github.com/hpc/cce-mpi-openmpi-1.6.4/blob/master/ompi/mca/common/sm/">https://github.com/hpc/cce-mpi-openmpi-1.6.4/blob/master/ompi/mca/common/sm/</a>
</span><br>
<span class="quotelev2">&gt; &gt; help-mpi-common-sm.txt) suggested that I could override it by setting TMP,
</span><br>
<span class="quotelev2">&gt; &gt; TEMP or TEMPDIR, which I did to no avail.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From my experience on edison: the one environment variable that does works is TMPDIR - the one that is not listed in the error message :-)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Can't help you with your mpirun problem though ...
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Martin
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Martin Siegert
</span><br>
<span class="quotelev1">&gt; Head, Research Computing
</span><br>
<span class="quotelev1">&gt; WestGrid/ComputeCanada Site Lead
</span><br>
<span class="quotelev1">&gt; Simon Fraser University
</span><br>
<span class="quotelev1">&gt; Burnaby, British Columbia
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28063.php">http://www.open-mpi.org/community/lists/users/2015/11/28063.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28065.php">Saurabh T: "[OMPI users] OpenMPI 1.10.1 crashes with file size limit &lt;= 131072"</a>
<li><strong>Previous message:</strong> <a href="28063.php">Martin Siegert: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>In reply to:</strong> <a href="28063.php">Martin Siegert: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28072.php">Jeff Hammond: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28072.php">Jeff Hammond: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
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
