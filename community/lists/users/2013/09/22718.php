<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.3 problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 24 15:36:50 2013" -->
<!-- isoreceived="20130924193650" -->
<!-- sent="Tue, 24 Sep 2013 12:36:46 -0700" -->
<!-- isosent="20130924193646" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.3 problem" -->
<!-- id="B4DD6235-B7FD-42DE-9D9D-D15D82460524_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="8CCCC747FD74954AB8E26B1F2EFBA6E2078E72C4_at_MS-EX2VKS.erdc.dren.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.6.3 problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-24 15:36:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22719.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
<li><strong>Previous message:</strong> <a href="22717.php">Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor: "[OMPI users] OpenMPI 1.6.3 problem"</a>
<li><strong>In reply to:</strong> <a href="22717.php">Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor: "[OMPI users] OpenMPI 1.6.3 problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22719.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to be clear - are you saying the job fails to run? Or just that it emits this warning (not error) and then runs to completion?
<br>
<p>This is a warning we added at some point because jobs were hanging due to exhausting registered memory, and people didn't know why. If you check out the link, I believe we tell you how to turn off the warning if you are sure your system is correctly configured.
<br>
<p><p>On Sep 24, 2013, at 12:20 PM, &quot;Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor&quot; &lt;clifton.W.bryan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; We are having problems with OpenMPI 1.6.3 &#150; it gives the below error message when trying to run:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 32 ./mpi_test.x
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; WARNING: It appears that your OpenFabrics subsystem is configured to only allow registering part of your physical memory.  This can cause MPI jobs to run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This may be caused by your OpenFabrics vendor limiting the amount of physical memory that can be registered.  You should investigate the relevant Linux kernel module parameters that control how much physical memory can be registered, and increase them to allow registering all physical memory on your machine.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; See this Open MPI FAQ item for more information on these Linux kernel module
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; parameters:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a> &lt;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Local host:              akutilm-0006.ors.hpc.mil
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Registerable memory:     131072 MiB
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Total memory:            258542 MiB
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Your MPI job will continue, but may be behave poorly and/or hang.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; akutilm-0006.ors.hpc.mil
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; akutilm-0006.ors.hpc.mil
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [akutilm-0006.ors.hpc.mil:10970] 31 more processes have sent help message help-mpi-btl-openib.txt / reg mem limit low [akutilm-0006.ors.hpc.mil:10970] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Openmpi 1.4.3 works fine.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Clif
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22718/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22719.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
<li><strong>Previous message:</strong> <a href="22717.php">Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor: "[OMPI users] OpenMPI 1.6.3 problem"</a>
<li><strong>In reply to:</strong> <a href="22717.php">Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor: "[OMPI users] OpenMPI 1.6.3 problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22719.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
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
