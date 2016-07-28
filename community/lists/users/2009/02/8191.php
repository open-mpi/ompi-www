<?
$subject_val = "Re: [OMPI users] New User question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 20:43:51 2009" -->
<!-- isoreceived="20090225014351" -->
<!-- sent="Tue, 24 Feb 2009 18:43:39 -0700" -->
<!-- isosent="20090225014339" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New User question" -->
<!-- id="9B4AECB2-3339-4963-86CE-45B13995EDB7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="974996.81242.qm_at_web57801.mail.re3.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] New User question<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 20:43:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8192.php">Sangamesh B: "[OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Previous message:</strong> <a href="8190.php">Vittorio: "[OMPI users] 3.5 seconds before application launches"</a>
<li><strong>In reply to:</strong> <a href="8188.php">Larry Adelberg: "[OMPI users] New User question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is in your cmd line:
<br>
<p><span class="quotelev1">&gt; mpirun --np 2 --nolocal APPNAME
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You forgot to include a -hostfile or -host option, so OMPI only knows  
<br>
about your local node - which you told it not to use.
<br>
<p>Provide a hostfile, or specify a set of hosts with -host, and it  
<br>
should work fine.
<br>
<p>Ralph
<br>
<p><p>On Feb 24, 2009, at 11:54 AM, Larry Adelberg wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am sorry to ask what is probably a newbie question, I have  
</span><br>
<span class="quotelev1">&gt; searched the archives but am probably not using the proper key word  
</span><br>
<span class="quotelev1">&gt; to locate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am working on an atmospheric model which uses openmpi/openrte.  I  
</span><br>
<span class="quotelev1">&gt; have two nodes setup but the model only runs on one node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can use mpirun to execute an application on another node by  
</span><br>
<span class="quotelev1">&gt; entering the below on HOST1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --np 2 --host HOST2 APPNAME
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this scenario, the system connects via ssh to HOST2 and runs the  
</span><br>
<span class="quotelev1">&gt; application without a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I attempt to run:
</span><br>
<span class="quotelev1">&gt; mpirun --np 2 --nolocal APPNAME
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get:
</span><br>
<span class="quotelev1">&gt; [virtualModel1:03939] [0,0,0] ORTE_ERROR_LOG: Temporarily out of  
</span><br>
<span class="quotelev1">&gt; resource in file base/rmaps_base_support_fns.c at line 168
</span><br>
<span class="quotelev1">&gt; [virtualModel1:03939] [0,0,0] ORTE_ERROR_LOG: Temporarily out of  
</span><br>
<span class="quotelev1">&gt; resource in file rmaps_rr.c at line 402
</span><br>
<span class="quotelev1">&gt; [virtualModel1:03939] [0,0,0] ORTE_ERROR_LOG: Temporarily out of  
</span><br>
<span class="quotelev1">&gt; resource in file base/rmaps_base_map_job.c at line 210
</span><br>
<span class="quotelev1">&gt; [virtualModel1:03939] [0,0,0] ORTE_ERROR_LOG: Temporarily out of  
</span><br>
<span class="quotelev1">&gt; resource in file rmgr_urm.c at line 372
</span><br>
<span class="quotelev1">&gt; [virtualModel1:03939] mpirun: spawn failed with errno=-3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the source code, that is the area where the available  
</span><br>
<span class="quotelev1">&gt; nodes are enumerated and this error appears to indicate no &quot;non- 
</span><br>
<span class="quotelev1">&gt; local&quot; node is available if I am interpreting this correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the hosts file correct along with the ssh key so the user can  
</span><br>
<span class="quotelev1">&gt; login without a password etc etc.  I don't know where the system  
</span><br>
<span class="quotelev1">&gt; looks for identification of node IPs so this can be enumerated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone give me a quick pointer to the correct location in the  
</span><br>
<span class="quotelev1">&gt; manual (I realize the answer is RTM but I have not found the answer  
</span><br>
<span class="quotelev1">&gt; in the manual thus far so I figured I would throw it out there to  
</span><br>
<span class="quotelev1">&gt; the experts).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your patience with my query.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8191/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8192.php">Sangamesh B: "[OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Previous message:</strong> <a href="8190.php">Vittorio: "[OMPI users] 3.5 seconds before application launches"</a>
<li><strong>In reply to:</strong> <a href="8188.php">Larry Adelberg: "[OMPI users] New User question"</a>
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
