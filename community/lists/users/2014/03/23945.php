<?
$subject_val = "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 11:18:34 2014" -->
<!-- isoreceived="20140324151834" -->
<!-- sent="Mon, 24 Mar 2014 08:16:31 -0700" -->
<!-- isosent="20140324151631" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3" -->
<!-- id="DED75F47-6F2A-4C36-B167-A7115CCE3335_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF10BADB5F.850B98B8-ON49257C9F.00804194-49257C9F.00814C4F_at_jcity.maeda.co.jp" -->
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
<strong>Date:</strong> 2014-03-24 11:16:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23946.php">Ralph Castain: "Re: [OMPI users] cleanup of round robin mappers"</a>
<li><strong>Previous message:</strong> <a href="23944.php">Ralph Castain: "Re: [OMPI users] delays in Isend"</a>
<li><strong>In reply to:</strong> <a href="23887.php">tmishima_at_[hidden]: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The &quot;updated&quot;field in the orte_job_t structure is only used to help reduce the size of the launch message sent to all the daemons. Basically, we only include info on jobs that have been changed - thus, it only gets used when the app calls comm_spawn. After every launch, we automatically change it to false and require that we change it to true if the number of daemons changes.
<br>
<p>Since we won't have added any daemons, we don't really need to update the field, but probably should change do as you suggest just to ensure the value is right. Thanks!
<br>
Ralph
<br>
<p>On Mar 18, 2014, at 4:31 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I confirmed your fix worked good for me. But, I guess at least
</span><br>
<span class="quotelev1">&gt; we should add the line &quot;daemons-&gt;updated = false;&quot; in the last
</span><br>
<span class="quotelev1">&gt; if-clause, although I'm not sure how the variable is used.
</span><br>
<span class="quotelev1">&gt; Is it okay, Ralph?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Understood, and your logic is correct. It's just that I'd rather each
</span><br>
<span class="quotelev1">&gt; launcher decide to declare the daemons as reported rather than doing it in
</span><br>
<span class="quotelev1">&gt; the common code, just in case someone writes a
</span><br>
<span class="quotelev2">&gt;&gt; launcher where they choose to respond differently to the case where no
</span><br>
<span class="quotelev1">&gt; new daemons need to be launched.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 17, 2014, at 6:43 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do not understand your fix yet, but it would be better, I guess.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll check it later, but now please let me expalin what I thought:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If some nodes are allocated, it doen't go through this part because
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_list_get_size(&amp;nodes) &gt; 0 at this location.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1590    if (0 == opal_list_get_size(&amp;nodes)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1591        OPAL_OUTPUT_VERBOSE((5,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_plm_base_framework.framework_output,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1592                             &quot;%s plm:base:setup_vm only HNP in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1593                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1594        /* cleanup */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1595        OBJ_DESTRUCT(&amp;nodes);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1596        /* mark that the daemons have reported so we can proceed */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1597        daemons-&gt;state = ORTE_JOB_STATE_DAEMONS_REPORTED;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1598	     daemons-&gt;updated = false;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1599        return ORTE_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1600    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After filtering, opal_list_get_size(&amp;nodes) becomes zero at this
</span><br>
<span class="quotelev1">&gt; location.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That's why I think I should add two lines 1597,1598 to the if-clause
</span><br>
<span class="quotelev1">&gt; below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1660    if (0 == opal_list_get_size(&amp;nodes)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1661        OPAL_OUTPUT_VERBOSE((5,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_plm_base_framework.framework_output,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1662                             &quot;%s plm:base:setup_vm only HNP left&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1663                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1664        OBJ_DESTRUCT(&amp;nodes);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1665        return ORTE_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tetsuya
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmm...no, I don't think that's the correct patch. We want that
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to remain &quot;clean&quot; as it's job is simply to construct the list of nodes
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the VM. It's the responsibility of the launcher to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; decide what to do with it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please see <a href="https://svn.open-mpi.org/trac/ompi/ticket/4408">https://svn.open-mpi.org/trac/ompi/ticket/4408</a> for a fix
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 17, 2014, at 5:40 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Ralph, I found another corner case hangup in openmpi-1.7.5rc3.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Condition:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. allocate some nodes using RM such as TORQUE.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. request the head node only in executing the job with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -host or -hostfile option.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Example:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. allocate node05,node06 using TORQUE.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. request node05 only with -host option
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [mishima_at_manage ~]$ qsub -I -l nodes=node05+node06
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; qsub: waiting for job 8661.manage.cluster to start
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; qsub: job 8661.manage.cluster ready
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [mishima_at_node05 ~]$ cat $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node05
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node06
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [mishima_at_node05 ~]$ mpirun -np 1 -host node05
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;&lt; hang here &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And, my fix for plm_base_launch_support.c is as follows:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- plm_base_launch_support.c   2014-03-12 05:51:45.000000000 +0900
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +++ plm_base_launch_support.try.c       2014-03-18 08:38:03.000000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +0900
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -1662,7 +1662,11 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       OPAL_OUTPUT_VERBOSE((5,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_plm_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                            &quot;%s plm:base:setup_vm only HNP left&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                            ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        /* cleanup */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       OBJ_DESTRUCT(&amp;nodes);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        /* mark that the daemons have reported so we can proceed */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        daemons-&gt;state = ORTE_JOB_STATE_DAEMONS_REPORTED;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        daemons-&gt;updated = false;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23946.php">Ralph Castain: "Re: [OMPI users] cleanup of round robin mappers"</a>
<li><strong>Previous message:</strong> <a href="23944.php">Ralph Castain: "Re: [OMPI users] delays in Isend"</a>
<li><strong>In reply to:</strong> <a href="23887.php">tmishima_at_[hidden]: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
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
