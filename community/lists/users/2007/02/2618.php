<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  6 09:44:14 2007" -->
<!-- isoreceived="20070206144414" -->
<!-- sent="Tue, 6 Feb 2007 09:44:07 -0500" -->
<!-- isosent="20070206144407" -->
<!-- name="Heywood, Todd" -->
<!-- email="heywood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] large jobs hang on startup (deadlock?)" -->
<!-- id="44233CA5B57295409DA4423AECEFFEE701E64DD7_at_mailbox01.cshl.edu" -->
<!-- charset="windows-1257" -->
<!-- inreplyto="C1EDD5FF.7785%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Heywood, Todd (<em>heywood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-06 09:44:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2619.php">Avishay Traeger: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Previous message:</strong> <a href="2617.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>In reply to:</strong> <a href="2617.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2620.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Reply:</strong> <a href="2620.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks for the reply. This is a tough one. It is OpenLDAP. I had thought that I might be hitting a file descriptor limit for slapd (LDAP daemon), which ulimit -n does not effect (you have to rebuild LDAP with a different FD_SETSIZE variable). However, I simply turned on more expressive logging to /var/log/slapd, and that resulted in smaller jobs (which successfully ran before) hanging. Go figure. It appears that daemons are up and running (from ps), and everything hangs in MPI_Init. Ctl-C gives
<br>
<p>[blade1:04524] ERROR: A daemon on node blade26 failed to start as expected.
<br>
[blade1:04524] ERROR: There may be more information available from
<br>
[blade1:04524] ERROR: the remote shell (see above).
<br>
[blade1:04524] ERROR: The daemon exited unexpectedly with status 255.
<br>
<p>I'm interested in any suggestion, semi-fixes, etc. which might help get to the bottom of this. Right now: whether the daemons are indeed up and running, or if there are some that are not (causing MPI_Init to hang).
<br>
<p>Thanks,
<br>
<p>Todd
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph H Castain
<br>
Sent: Tuesday, February 06, 2007 8:52 AM
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] large jobs hang on startup (deadlock?)
<br>
<p>Well, I can't say for sure about LDAP. I did a quick search and found two
<br>
things:
<br>
<p>1. there are limits imposed in LDAP that may apply to your situation, and
<br>
<p>2. that statement varies tremendously depending upon the specific LDAP
<br>
implementation you are using
<br>
<p>I would suggest you see which LDAP you are using and contact the respective
<br>
organization to ask if they do have such a limit, and if so, how to adjust
<br>
it.
<br>
<p>It sounds like maybe we are hitting the LDAP server with too many requests
<br>
too rapidly. Usually, the issue is not starting fast enough, so this is a
<br>
new one! We don't currently check to see if everything started up okay, so
<br>
that is why the processes might hang - we hope to fix that soon. I'll have
<br>
to see if there is something we can do to help alleviate such problems -
<br>
might not be in time for the 1.2 release, but perhaps it will make a
<br>
subsequent &quot;fix&quot; or, if you are willing/interested, I could provide it to
<br>
you as a &quot;patch&quot; you could use until a later official release.
<br>
<p>Meantime, you might try upgrading to 1.2b3 or even a nightly release from
<br>
the trunk. There are known problems with 1.2b2 (which is why there is a b3
<br>
and soon to be an rc1), though I don't think that will be the problem here.
<br>
At the least, the nightly trunk has a much better response to ctrl-c in it.
<br>
<p>Ralph
<br>
<p><p>On 2/5/07 9:50 AM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for the reply. The OpenMPI version is 1.2b2 (because I would like to
</span><br>
<span class="quotelev1">&gt; integrate it with SGE).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Here is what is happening:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; (1)     When I run with &#173;debug-daemons (but WITHOUT &#173;d), I get &#179;Daemon
</span><br>
<span class="quotelev1">&gt; [0,0,27] checking in as pid 7620 on host blade28&#178; (for example) messages for
</span><br>
<span class="quotelev1">&gt; most but not all of the daemons that should be started up, and then it hangs.
</span><br>
<span class="quotelev1">&gt; I also notice &#179;reconnecting to LDAP server&#178; messages in various
</span><br>
<span class="quotelev1">&gt; /var/log/secure files, and cannot login while things are hung (with &#179;su:
</span><br>
<span class="quotelev1">&gt; pam_ldap: ldap_result Can't contact LDAP server&#178; in /var/log/messages). So
</span><br>
<span class="quotelev1">&gt; apparently LDAP hits some limit to opening ssh sessions, and I&#185;m not sure how
</span><br>
<span class="quotelev1">&gt; to address this.
</span><br>
<span class="quotelev1">&gt; (2)     When I run with &#173;debug-daemons AND the debug option &#173;d, all daemons
</span><br>
<span class="quotelev1">&gt; start start up and check-in, albeit slowly (debug must slow things down so
</span><br>
<span class="quotelev1">&gt; LDAP can handle all the requests??). Then apparently, the cpi process is
</span><br>
<span class="quotelev1">&gt; started for each task but it then hangs:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [blade1:23816] spawn: in job_state_callback(jobid = 1, state = 0x4)
</span><br>
<span class="quotelev1">&gt; [blade1:23816] Info: Setting up debugger process table for applications
</span><br>
<span class="quotelev1">&gt;  MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_debug_gate = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;  MPIR_acquired_pre_main = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable_size = 800
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;    (i, host, exe, pid) = (0, blade1, /home4/itstaff/heywood/ompi/cpi, 24193)
</span><br>
<span class="quotelev1">&gt; &#208;
</span><br>
<span class="quotelev1">&gt; &#208;(i, host, exe, pid) = (799, blade213, /home4/itstaff/heywood/ompi/cpi, 4762)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; A &#179;ps&#178; on the head node shows 200 open ssh sessions, and 4 cpi processes doing
</span><br>
<span class="quotelev1">&gt; nothing. A ^C gives this:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Host: blade1
</span><br>
<span class="quotelev1">&gt; PID:  24193
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Still got a ways to go, but any ideas/suggestions are welcome!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Todd
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf
</span><br>
<span class="quotelev1">&gt; Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Friday, February 02, 2007 5:20 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] large jobs hang on startup (deadlock?)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hi Todd
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To help us provide advice, could you tell us what version of OpenMPI you are
</span><br>
<span class="quotelev1">&gt; using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meantime, try adding &#179;-mca pls_rsh_num_concurrent 200&#178; to your mpirun command
</span><br>
<span class="quotelev1">&gt; line. You can up the number of concurrent daemons we launch to anything your
</span><br>
<span class="quotelev1">&gt; system will support &#173; basically, we limit the number only because some systems
</span><br>
<span class="quotelev1">&gt; have limits on the number of ssh calls we can have active at any one time.
</span><br>
<span class="quotelev1">&gt; Because we hold stdio open when running with &#139;debug-daemons, the number of
</span><br>
<span class="quotelev1">&gt; concurrent daemons must match or exceed the number of nodes you are trying to
</span><br>
<span class="quotelev1">&gt; launch on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a &#179;fix&#178; in the works that will help relieve some of that restriction,
</span><br>
<span class="quotelev1">&gt; but that won&#185;t come out until a later release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hopefully, that will allow you to obtain more debug info about why/where
</span><br>
<span class="quotelev1">&gt; things are hanging.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/2/07 11:41 AM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I have OpenMPI running fine for a small/medium number of tasks (simple hello
</span><br>
<span class="quotelev1">&gt; or cpi program). But when I try 700 or 800 tasks, it hangs, apparently on
</span><br>
<span class="quotelev1">&gt; startup. I think this might be related to LDAP, since if I try to log into my
</span><br>
<span class="quotelev1">&gt; account while the job is hung, I get told my username doesn&#185;t exist. However,
</span><br>
<span class="quotelev1">&gt; I tried adding &#173;debug to the mpirun, and got the same sequence of output as
</span><br>
<span class="quotelev1">&gt; for successful smaller runs, until it hung again. So I added &#173;-debug-daemons
</span><br>
<span class="quotelev1">&gt; and got this (with an exit, i.e. no hanging):
</span><br>
<span class="quotelev1">&gt; &#208;
</span><br>
<span class="quotelev1">&gt; [blade1:31733] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The rsh launcher has been given a number of 128 concurrent daemons to
</span><br>
<span class="quotelev1">&gt; launch and is in a debug-daemons option. However, the total number of
</span><br>
<span class="quotelev1">&gt; daemons to launch (200) is greater than this value. This is a scenario that
</span><br>
<span class="quotelev1">&gt; will cause the system to deadlock.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; To avoid deadlock, either increase the number of concurrent daemons, or
</span><br>
<span class="quotelev1">&gt; remove the debug-daemons flag.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [blade1:31733] [0,0,0] ORTE_ERROR_LOG: Fatal in file
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/rmgr/urm/
</span><br>
<span class="quotelev1">&gt; rmgr_urm.c at line 455
</span><br>
<span class="quotelev1">&gt; [blade1:31733] mpirun: spawn failed with errno=-6
</span><br>
<span class="quotelev1">&gt; [blade1:31733] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Any ideas or suggestions appreciated.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Todd Heywood
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
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
<span class="quotelev1">&gt;  
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
<p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2619.php">Avishay Traeger: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Previous message:</strong> <a href="2617.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>In reply to:</strong> <a href="2617.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2620.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Reply:</strong> <a href="2620.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
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
