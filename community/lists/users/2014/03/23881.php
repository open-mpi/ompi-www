<?
$subject_val = "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 21:26:45 2014" -->
<!-- isoreceived="20140318012645" -->
<!-- sent="Mon, 17 Mar 2014 18:25:23 -0700" -->
<!-- isosent="20140318012523" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3" -->
<!-- id="EC2378DD-1163-4323-8CB8-AEC976DDE9DF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF39E5DFC6.6E3A4C73-ON49257C9F.000282BD-49257C9F.0003B832_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-17 21:25:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23882.php">tmishima_at_[hidden]: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>Previous message:</strong> <a href="23880.php">tmishima_at_[hidden]: "[OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>In reply to:</strong> <a href="23880.php">tmishima_at_[hidden]: "[OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23882.php">tmishima_at_[hidden]: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>Reply:</strong> <a href="23882.php">tmishima_at_[hidden]: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm...no, I don't think that's the correct patch. We want that function to remain &quot;clean&quot; as it's job is simply to construct the list of nodes for the VM. It's the responsibility of the launcher to decide what to do with it.
<br>
<p>Please see <a href="https://svn.open-mpi.org/trac/ompi/ticket/4408">https://svn.open-mpi.org/trac/ompi/ticket/4408</a> for a fix
<br>
<p>Ralph
<br>
<p>On Mar 17, 2014, at 5:40 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph, I found another corner case hangup in openmpi-1.7.5rc3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Condition:
</span><br>
<span class="quotelev1">&gt; 1. allocate some nodes using RM such as TORQUE.
</span><br>
<span class="quotelev1">&gt; 2. request the head node only in executing the job with
</span><br>
<span class="quotelev1">&gt;   -host or -hostfile option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Example:
</span><br>
<span class="quotelev1">&gt; 1. allocate node05,node06 using TORQUE.
</span><br>
<span class="quotelev1">&gt; 2. request node05 only with -host option
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage ~]$ qsub -I -l nodes=node05+node06
</span><br>
<span class="quotelev1">&gt; qsub: waiting for job 8661.manage.cluster to start
</span><br>
<span class="quotelev1">&gt; qsub: job 8661.manage.cluster ready
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_node05 ~]$ cat $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; node05
</span><br>
<span class="quotelev1">&gt; node06
</span><br>
<span class="quotelev1">&gt; [mishima_at_node05 ~]$ mpirun -np 1 -host node05 ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; &lt;&lt; hang here &gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And, my fix for plm_base_launch_support.c is as follows:
</span><br>
<span class="quotelev1">&gt; --- plm_base_launch_support.c   2014-03-12 05:51:45.000000000 +0900
</span><br>
<span class="quotelev1">&gt; +++ plm_base_launch_support.try.c       2014-03-18 08:38:03.000000000 +0900
</span><br>
<span class="quotelev1">&gt; @@ -1662,7 +1662,11 @@
</span><br>
<span class="quotelev1">&gt;         OPAL_OUTPUT_VERBOSE((5, orte_plm_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt;                              &quot;%s plm:base:setup_vm only HNP left&quot;,
</span><br>
<span class="quotelev1">&gt;                              ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev1">&gt; +        /* cleanup */
</span><br>
<span class="quotelev1">&gt;         OBJ_DESTRUCT(&amp;nodes);
</span><br>
<span class="quotelev1">&gt; +        /* mark that the daemons have reported so we can proceed */
</span><br>
<span class="quotelev1">&gt; +        daemons-&gt;state = ORTE_JOB_STATE_DAEMONS_REPORTED;
</span><br>
<span class="quotelev1">&gt; +        daemons-&gt;updated = false;
</span><br>
<span class="quotelev1">&gt;         return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tetsuya
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23882.php">tmishima_at_[hidden]: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>Previous message:</strong> <a href="23880.php">tmishima_at_[hidden]: "[OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>In reply to:</strong> <a href="23880.php">tmishima_at_[hidden]: "[OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23882.php">tmishima_at_[hidden]: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>Reply:</strong> <a href="23882.php">tmishima_at_[hidden]: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
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
