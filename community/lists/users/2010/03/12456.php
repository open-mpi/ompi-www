<?
$subject_val = "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't 	work on cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 11:56:14 2010" -->
<!-- isoreceived="20100329155614" -->
<!-- sent="Mon, 29 Mar 2010 11:56:09 -0400" -->
<!-- isosent="20100329155609" -->
<!-- name="fengguang tian" -->
<!-- email="fernyabc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't 	work on cluster" -->
<!-- id="958403f51003290856h159a3830r168f19ac5674f6a2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="280420F2-657B-4C24-8815-7065EC6622CA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't 	work on cluster<br>
<strong>From:</strong> fengguang tian (<em>fernyabc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 11:56:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12457.php">Josh Hursey: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Previous message:</strong> <a href="12455.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>In reply to:</strong> <a href="12454.php">Josh Hursey: "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi
<br>
I solve this problem, some previous versions of directories in the cluster
<br>
are not removed, after I remove them, it works fine. thank you
<br>
<p>cheers
<br>
fengguang
<br>
<p>On Mon, Mar 29, 2010 at 11:47 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Does this happen when you run without '-am ft-enable-cr' (so a no-C/R run)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will help us determine if your problem is with the C/R work or with
</span><br>
<span class="quotelev1">&gt; the ORTE runtime. I suspect that there is something odd with your system
</span><br>
<span class="quotelev1">&gt; that is confusing the runtime (so not a C/R problem).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you made sure to remove the previous versions of Open MPI from all
</span><br>
<span class="quotelev1">&gt; machines on your cluster, before installing the new version? Sometimes
</span><br>
<span class="quotelev1">&gt; problems like this come up because of mismatches in Open MPI versions on a
</span><br>
<span class="quotelev1">&gt; machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 23, 2010, at 5:42 PM, fengguang tian wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I met the same problem with this link:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/12/11374.php">http://www.open-mpi.org/community/lists/users/2009/12/11374.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in the link, they give a solution that use v1.4 open mpi instead of v1.3
</span><br>
<span class="quotelev2">&gt;&gt; open mpi. but, I am using v1.7a1r22794 open mpi, and met the same problem.
</span><br>
<span class="quotelev2">&gt;&gt; here is what I have done:
</span><br>
<span class="quotelev2">&gt;&gt; my cluster composed of two machines:nimbus(master) and nimbus1(slave),
</span><br>
<span class="quotelev2">&gt;&gt; when I run mpirun -np 40 -am ft-enable-cr --hostfile .mpihostfile
</span><br>
<span class="quotelev2">&gt;&gt; myapplication
</span><br>
<span class="quotelev2">&gt;&gt; on the nimbus, and it doesn't work, it shows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [nimbus1:21387] opal_os_dirpath_create: Error: Unable to create the
</span><br>
<span class="quotelev2">&gt;&gt; sub-directory (/tmp/openmpi-sessions-mpiu_at_nimbus1_0/59759) of
</span><br>
<span class="quotelev2">&gt;&gt; (/tmp/openmpi-sessions-mpiu_at_nimbus1_0/59759/0/1), mkdir failed [1]
</span><br>
<span class="quotelev2">&gt;&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; util/session_dir.c at line 106
</span><br>
<span class="quotelev2">&gt;&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; util/session_dir.c at line 399
</span><br>
<span class="quotelev2">&gt;&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; base/ess_base_std_orted.c at line 301
</span><br>
<span class="quotelev2">&gt;&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: A message is attempting to
</span><br>
<span class="quotelev2">&gt;&gt; be sent to a process whose contact information is unknown in file
</span><br>
<span class="quotelev2">&gt;&gt; rml_oob_send.c at line 104
</span><br>
<span class="quotelev2">&gt;&gt; [nimbus1:21387] [[59759,0],1] could not get route to [[INVALID],INVALID]
</span><br>
<span class="quotelev2">&gt;&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: A message is attempting to
</span><br>
<span class="quotelev2">&gt;&gt; be sent to a process whose contact information is unknown in file
</span><br>
<span class="quotelev2">&gt;&gt; util/show_help.c at line 602
</span><br>
<span class="quotelev2">&gt;&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; ess_env_module.c at line 143
</span><br>
<span class="quotelev2">&gt;&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: A message is attempting to
</span><br>
<span class="quotelev2">&gt;&gt; be sent to a process whose contact information is unknown in file
</span><br>
<span class="quotelev2">&gt;&gt; rml_oob_send.c at line 104
</span><br>
<span class="quotelev2">&gt;&gt; [nimbus1:21387] [[59759,0],1] could not get route to [[INVALID],INVALID]
</span><br>
<span class="quotelev2">&gt;&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: A message is attempting to
</span><br>
<span class="quotelev2">&gt;&gt; be sent to a process whose contact information is unknown in file
</span><br>
<span class="quotelev2">&gt;&gt; util/show_help.c at line 602
</span><br>
<span class="quotelev2">&gt;&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_init.c at line 129
</span><br>
<span class="quotelev2">&gt;&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: A message is attempting to
</span><br>
<span class="quotelev2">&gt;&gt; be sent to a process whose contact information is unknown in file
</span><br>
<span class="quotelev2">&gt;&gt; rml_oob_send.c at line 104
</span><br>
<span class="quotelev2">&gt;&gt; [nimbus1:21387] [[59759,0],1] could not get route to [[INVALID],INVALID]
</span><br>
<span class="quotelev2">&gt;&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: A message is attempting to
</span><br>
<span class="quotelev2">&gt;&gt; be sent to a process whose contact information is unknown in file
</span><br>
<span class="quotelev2">&gt;&gt; util/show_help.c at line 602
</span><br>
<span class="quotelev2">&gt;&gt; [nimbus1:21387] [[59759,0],1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; orted/orted_main.c at line 355
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 10737) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev2">&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cheers
</span><br>
<span class="quotelev2">&gt;&gt; fengguang
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12456/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12457.php">Josh Hursey: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Previous message:</strong> <a href="12455.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>In reply to:</strong> <a href="12454.php">Josh Hursey: "Re: [OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster"</a>
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
