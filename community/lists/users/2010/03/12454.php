<?
$subject_val = "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 11:47:16 2010" -->
<!-- isoreceived="20100329154716" -->
<!-- sent="Mon, 29 Mar 2010 11:47:12 -0400" -->
<!-- isosent="20100329154712" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster" -->
<!-- id="280420F2-657B-4C24-8815-7065EC6622CA_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="958403f51003231442o4f6b4ccai1e3a84574208b08f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 11:47:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12455.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Previous message:</strong> <a href="12453.php">Josh Hursey: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>In reply to:</strong> <a href="12414.php">fengguang tian: "[OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12456.php">fengguang tian: "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't 	work on cluster"</a>
<li><strong>Reply:</strong> <a href="12456.php">fengguang tian: "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't 	work on cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does this happen when you run without '-am ft-enable-cr' (so a no-C/R  
<br>
run)?
<br>
<p>This will help us determine if your problem is with the C/R work or  
<br>
with the ORTE runtime. I suspect that there is something odd with your  
<br>
system that is confusing the runtime (so not a C/R problem).
<br>
<p>Have you made sure to remove the previous versions of Open MPI from  
<br>
all machines on your cluster, before installing the new version?  
<br>
Sometimes problems like this come up because of mismatches in Open MPI  
<br>
versions on a machine.
<br>
<p>-- Josh
<br>
<p>On Mar 23, 2010, at 5:42 PM, fengguang tian wrote:
<br>
<p><span class="quotelev1">&gt; I met the same problem with this link:<a href="http://www.open-mpi.org/community/lists/users/2009/12/11374.php">http://www.open-mpi.org/community/lists/users/2009/12/11374.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in the link, they give a solution that use v1.4 open mpi instead of  
</span><br>
<span class="quotelev1">&gt; v1.3 open mpi. but, I am using v1.7a1r22794 open mpi, and met the  
</span><br>
<span class="quotelev1">&gt; same problem.
</span><br>
<span class="quotelev1">&gt; here is what I have done:
</span><br>
<span class="quotelev1">&gt; my cluster composed of two machines:nimbus(master) and  
</span><br>
<span class="quotelev1">&gt; nimbus1(slave), when I run mpirun -np 40 -am ft-enable-cr -- 
</span><br>
<span class="quotelev1">&gt; hostfile .mpihostfile myapplication
</span><br>
<span class="quotelev1">&gt; on the nimbus, and it doesn't work, it shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [nimbus1:21387] opal_os_dirpath_create: Error: Unable to create the  
</span><br>
<span class="quotelev1">&gt; sub-directory (/tmp/openmpi-sessions-mpiu_at_nimbus1_0/59759) of (/tmp/ 
</span><br>
<span class="quotelev1">&gt; openmpi-sessions-mpiu_at_nimbus1_0/59759/0/1), mkdir failed [1]
</span><br>
<span class="quotelev1">&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: Error in file util/ 
</span><br>
<span class="quotelev1">&gt; session_dir.c at line 106
</span><br>
<span class="quotelev1">&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: Error in file util/ 
</span><br>
<span class="quotelev1">&gt; session_dir.c at line 399
</span><br>
<span class="quotelev1">&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: Error in file base/ 
</span><br>
<span class="quotelev1">&gt; ess_base_std_orted.c at line 301
</span><br>
<span class="quotelev1">&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: A message is  
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is  
</span><br>
<span class="quotelev1">&gt; unknown in file rml_oob_send.c at line 104
</span><br>
<span class="quotelev1">&gt; [nimbus1:21387] [[59759,0],1] could not get route to  
</span><br>
<span class="quotelev1">&gt; [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: A message is  
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is  
</span><br>
<span class="quotelev1">&gt; unknown in file util/show_help.c at line 602
</span><br>
<span class="quotelev1">&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: Error in file  
</span><br>
<span class="quotelev1">&gt; ess_env_module.c at line 143
</span><br>
<span class="quotelev1">&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: A message is  
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is  
</span><br>
<span class="quotelev1">&gt; unknown in file rml_oob_send.c at line 104
</span><br>
<span class="quotelev1">&gt; [nimbus1:21387] [[59759,0],1] could not get route to  
</span><br>
<span class="quotelev1">&gt; [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: A message is  
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is  
</span><br>
<span class="quotelev1">&gt; unknown in file util/show_help.c at line 602
</span><br>
<span class="quotelev1">&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: Error in file runtime/ 
</span><br>
<span class="quotelev1">&gt; orte_init.c at line 129
</span><br>
<span class="quotelev1">&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: A message is  
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is  
</span><br>
<span class="quotelev1">&gt; unknown in file rml_oob_send.c at line 104
</span><br>
<span class="quotelev1">&gt; [nimbus1:21387] [[59759,0],1] could not get route to  
</span><br>
<span class="quotelev1">&gt; [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: A message is  
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is  
</span><br>
<span class="quotelev1">&gt; unknown in file util/show_help.c at line 602
</span><br>
<span class="quotelev1">&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: Error in file orted/ 
</span><br>
<span class="quotelev1">&gt; orted_main.c at line 355
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 10737) died unexpectedly with status 255 while  
</span><br>
<span class="quotelev1">&gt; attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers
</span><br>
<span class="quotelev1">&gt; fengguang
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
<li><strong>Next message:</strong> <a href="12455.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Previous message:</strong> <a href="12453.php">Josh Hursey: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>In reply to:</strong> <a href="12414.php">fengguang tian: "[OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12456.php">fengguang tian: "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't 	work on cluster"</a>
<li><strong>Reply:</strong> <a href="12456.php">fengguang tian: "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't 	work on cluster"</a>
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
