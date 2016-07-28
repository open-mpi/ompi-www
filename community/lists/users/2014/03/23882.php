<?
$subject_val = "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 21:44:01 2014" -->
<!-- isoreceived="20140318014401" -->
<!-- sent="Tue, 18 Mar 2014 10:43:35 +0900" -->
<!-- isosent="20140318014335" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3" -->
<!-- id="OFC5E57976.3835AA14-ON49257C9F.000850C2-49257C9F.00098659_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EC2378DD-1163-4323-8CB8-AEC976DDE9DF_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20another%20corner%20case%20hangup%20in%20openmpi-1.7.5rc3"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-03-17 21:43:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23883.php">Elias Rudberg: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>Previous message:</strong> <a href="23881.php">Ralph Castain: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>In reply to:</strong> <a href="23881.php">Ralph Castain: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23884.php">Ralph Castain: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>Reply:</strong> <a href="23884.php">Ralph Castain: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do not understand your fix yet, but it would be better, I guess.
<br>
<p>I'll check it later, but now please let me expalin what I thought:
<br>
<p>If some nodes are allocated, it doen't go through this part because
<br>
opal_list_get_size(&amp;nodes) &gt; 0 at this location.
<br>
<p>1590    if (0 == opal_list_get_size(&amp;nodes)) {
<br>
1591        OPAL_OUTPUT_VERBOSE((5,
<br>
orte_plm_base_framework.framework_output,
<br>
1592                             &quot;%s plm:base:setup_vm only HNP in
<br>
allocation&quot;,
<br>
1593                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
<br>
1594        /* cleanup */
<br>
1595        OBJ_DESTRUCT(&amp;nodes);
<br>
1596        /* mark that the daemons have reported so we can proceed */
<br>
1597        daemons-&gt;state = ORTE_JOB_STATE_DAEMONS_REPORTED;
<br>
1598	     daemons-&gt;updated = false;
<br>
1599        return ORTE_SUCCESS;
<br>
1600    }
<br>
<p>After filtering, opal_list_get_size(&amp;nodes) becomes zero at this location.
<br>
That's why I think I should add two lines 1597,1598 to the if-clause below.
<br>
<p>1660    if (0 == opal_list_get_size(&amp;nodes)) {
<br>
1661        OPAL_OUTPUT_VERBOSE((5,
<br>
orte_plm_base_framework.framework_output,
<br>
1662                             &quot;%s plm:base:setup_vm only HNP left&quot;,
<br>
1663                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
<br>
1664        OBJ_DESTRUCT(&amp;nodes);
<br>
1665        return ORTE_SUCCESS;
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; Hmm...no, I don't think that's the correct patch. We want that function
</span><br>
to remain &quot;clean&quot; as it's job is simply to construct the list of nodes for
<br>
the VM. It's the responsibility of the launcher to
<br>
<span class="quotelev1">&gt; decide what to do with it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please see <a href="https://svn.open-mpi.org/trac/ompi/ticket/4408">https://svn.open-mpi.org/trac/ompi/ticket/4408</a> for a fix
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 17, 2014, at 5:40 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph, I found another corner case hangup in openmpi-1.7.5rc3.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Condition:
</span><br>
<span class="quotelev2">&gt; &gt; 1. allocate some nodes using RM such as TORQUE.
</span><br>
<span class="quotelev2">&gt; &gt; 2. request the head node only in executing the job with
</span><br>
<span class="quotelev2">&gt; &gt;   -host or -hostfile option.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Example:
</span><br>
<span class="quotelev2">&gt; &gt; 1. allocate node05,node06 using TORQUE.
</span><br>
<span class="quotelev2">&gt; &gt; 2. request node05 only with -host option
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage ~]$ qsub -I -l nodes=node05+node06
</span><br>
<span class="quotelev2">&gt; &gt; qsub: waiting for job 8661.manage.cluster to start
</span><br>
<span class="quotelev2">&gt; &gt; qsub: job 8661.manage.cluster ready
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_node05 ~]$ cat $PBS_NODEFILE
</span><br>
<span class="quotelev2">&gt; &gt; node05
</span><br>
<span class="quotelev2">&gt; &gt; node06
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_node05 ~]$ mpirun -np 1 -host node05
</span><br>
~/mis/openmpi/demos/myprog
<br>
<span class="quotelev2">&gt; &gt; &lt;&lt; hang here &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And, my fix for plm_base_launch_support.c is as follows:
</span><br>
<span class="quotelev2">&gt; &gt; --- plm_base_launch_support.c   2014-03-12 05:51:45.000000000 +0900
</span><br>
<span class="quotelev2">&gt; &gt; +++ plm_base_launch_support.try.c       2014-03-18 08:38:03.000000000
</span><br>
+0900
<br>
<span class="quotelev2">&gt; &gt; @@ -1662,7 +1662,11 @@
</span><br>
<span class="quotelev2">&gt; &gt;         OPAL_OUTPUT_VERBOSE((5,
</span><br>
orte_plm_base_framework.framework_output,
<br>
<span class="quotelev2">&gt; &gt;                              &quot;%s plm:base:setup_vm only HNP left&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                              ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev2">&gt; &gt; +        /* cleanup */
</span><br>
<span class="quotelev2">&gt; &gt;         OBJ_DESTRUCT(&amp;nodes);
</span><br>
<span class="quotelev2">&gt; &gt; +        /* mark that the daemons have reported so we can proceed */
</span><br>
<span class="quotelev2">&gt; &gt; +        daemons-&gt;state = ORTE_JOB_STATE_DAEMONS_REPORTED;
</span><br>
<span class="quotelev2">&gt; &gt; +        daemons-&gt;updated = false;
</span><br>
<span class="quotelev2">&gt; &gt;         return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23883.php">Elias Rudberg: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>Previous message:</strong> <a href="23881.php">Ralph Castain: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>In reply to:</strong> <a href="23881.php">Ralph Castain: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23884.php">Ralph Castain: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>Reply:</strong> <a href="23884.php">Ralph Castain: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
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
