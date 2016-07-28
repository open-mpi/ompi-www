<?
$subject_val = "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 22:40:16 2014" -->
<!-- isoreceived="20140318024016" -->
<!-- sent="Mon, 17 Mar 2014 19:38:45 -0700" -->
<!-- isosent="20140318023845" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3" -->
<!-- id="B0FFB95C-C8DE-45AB-9455-6FFFFCEECDDA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFC5E57976.3835AA14-ON49257C9F.000850C2-49257C9F.00098659_at_jcity.maeda.co.jp" -->
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
<strong>Date:</strong> 2014-03-17 22:38:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23885.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>Previous message:</strong> <a href="23883.php">Elias Rudberg: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>In reply to:</strong> <a href="23882.php">tmishima_at_[hidden]: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23887.php">tmishima_at_[hidden]: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>Reply:</strong> <a href="23887.php">tmishima_at_[hidden]: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Understood, and your logic is correct. It's just that I'd rather each launcher decide to declare the daemons as reported rather than doing it in the common code, just in case someone writes a launcher where they choose to respond differently to the case where no new daemons need to be launched.
<br>
<p><p>On Mar 17, 2014, at 6:43 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not understand your fix yet, but it would be better, I guess.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll check it later, but now please let me expalin what I thought:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If some nodes are allocated, it doen't go through this part because
</span><br>
<span class="quotelev1">&gt; opal_list_get_size(&amp;nodes) &gt; 0 at this location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1590    if (0 == opal_list_get_size(&amp;nodes)) {
</span><br>
<span class="quotelev1">&gt; 1591        OPAL_OUTPUT_VERBOSE((5,
</span><br>
<span class="quotelev1">&gt; orte_plm_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt; 1592                             &quot;%s plm:base:setup_vm only HNP in
</span><br>
<span class="quotelev1">&gt; allocation&quot;,
</span><br>
<span class="quotelev1">&gt; 1593                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev1">&gt; 1594        /* cleanup */
</span><br>
<span class="quotelev1">&gt; 1595        OBJ_DESTRUCT(&amp;nodes);
</span><br>
<span class="quotelev1">&gt; 1596        /* mark that the daemons have reported so we can proceed */
</span><br>
<span class="quotelev1">&gt; 1597        daemons-&gt;state = ORTE_JOB_STATE_DAEMONS_REPORTED;
</span><br>
<span class="quotelev1">&gt; 1598	     daemons-&gt;updated = false;
</span><br>
<span class="quotelev1">&gt; 1599        return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; 1600    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After filtering, opal_list_get_size(&amp;nodes) becomes zero at this location.
</span><br>
<span class="quotelev1">&gt; That's why I think I should add two lines 1597,1598 to the if-clause below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1660    if (0 == opal_list_get_size(&amp;nodes)) {
</span><br>
<span class="quotelev1">&gt; 1661        OPAL_OUTPUT_VERBOSE((5,
</span><br>
<span class="quotelev1">&gt; orte_plm_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt; 1662                             &quot;%s plm:base:setup_vm only HNP left&quot;,
</span><br>
<span class="quotelev1">&gt; 1663                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev1">&gt; 1664        OBJ_DESTRUCT(&amp;nodes);
</span><br>
<span class="quotelev1">&gt; 1665        return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmm...no, I don't think that's the correct patch. We want that function
</span><br>
<span class="quotelev1">&gt; to remain &quot;clean&quot; as it's job is simply to construct the list of nodes for
</span><br>
<span class="quotelev1">&gt; the VM. It's the responsibility of the launcher to
</span><br>
<span class="quotelev2">&gt;&gt; decide what to do with it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please see <a href="https://svn.open-mpi.org/trac/ompi/ticket/4408">https://svn.open-mpi.org/trac/ompi/ticket/4408</a> for a fix
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 17, 2014, at 5:40 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph, I found another corner case hangup in openmpi-1.7.5rc3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Condition:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. allocate some nodes using RM such as TORQUE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. request the head node only in executing the job with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -host or -hostfile option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. allocate node05,node06 using TORQUE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. request node05 only with -host option
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mishima_at_manage ~]$ qsub -I -l nodes=node05+node06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; qsub: waiting for job 8661.manage.cluster to start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; qsub: job 8661.manage.cluster ready
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mishima_at_node05 ~]$ cat $PBS_NODEFILE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node05
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mishima_at_node05 ~]$ mpirun -np 1 -host node05
</span><br>
<span class="quotelev1">&gt; ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;&lt; hang here &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And, my fix for plm_base_launch_support.c is as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- plm_base_launch_support.c   2014-03-12 05:51:45.000000000 +0900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ plm_base_launch_support.try.c       2014-03-18 08:38:03.000000000
</span><br>
<span class="quotelev1">&gt; +0900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1662,7 +1662,11 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OPAL_OUTPUT_VERBOSE((5,
</span><br>
<span class="quotelev1">&gt; orte_plm_base_framework.framework_output,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             &quot;%s plm:base:setup_vm only HNP left&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        /* cleanup */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OBJ_DESTRUCT(&amp;nodes);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        /* mark that the daemons have reported so we can proceed */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        daemons-&gt;state = ORTE_JOB_STATE_DAEMONS_REPORTED;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        daemons-&gt;updated = false;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        return ORTE_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tetsuya
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23885.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>Previous message:</strong> <a href="23883.php">Elias Rudberg: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>In reply to:</strong> <a href="23882.php">tmishima_at_[hidden]: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23887.php">tmishima_at_[hidden]: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>Reply:</strong> <a href="23887.php">tmishima_at_[hidden]: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
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
