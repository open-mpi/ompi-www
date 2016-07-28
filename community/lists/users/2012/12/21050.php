<?
$subject_val = "Re: [OMPI users] Open-mpi running issue and bug";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 29 13:07:20 2012" -->
<!-- isoreceived="20121229180720" -->
<!-- sent="Sat, 29 Dec 2012 18:07:11 +0000" -->
<!-- isosent="20121229180711" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-mpi running issue and bug" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC3768E824_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0C499E3F-567D-45F3-9037-DF08A3A96C25_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open-mpi running issue and bug<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-29 13:07:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21051.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Previous message:</strong> <a href="21049.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>In reply to:</strong> <a href="21049.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21073.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21073.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please sent all the info listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Dec 28, 2012, at 11:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; What version of OMPI are you using? How was it configured?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 28, 2012, at 2:16 AM, Edge Edge &lt;edge_diners_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Currently I was trying to run mpirun to improve the performance of my running.
</span><br>
<span class="quotelev2">&gt;&gt; However it keeps on showing the following bug:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [home:07059] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev2">&gt;&gt; [home:07059] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [sample-1.fa] Error 255
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can I know how to solve this bug?
</span><br>
<span class="quotelev2">&gt;&gt; I got try to google around but I still fail to find related answer.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Below is the spec of my server:
</span><br>
<span class="quotelev2">&gt;&gt; Linux home 2.6.32-71.el6.x86_64 #1 SMP Wed Sep 1 01:33:01 EDT 2010 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hope it is useful for you in order to solve the bug.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; best regards
</span><br>
<span class="quotelev2">&gt;&gt; Edge
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="21051.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Previous message:</strong> <a href="21049.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>In reply to:</strong> <a href="21049.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21073.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21073.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
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
