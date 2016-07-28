<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb  5 11:50:31 2007" -->
<!-- isoreceived="20070205165031" -->
<!-- sent="Mon, 5 Feb 2007 11:50:21 -0500" -->
<!-- isosent="20070205165021" -->
<!-- name="Heywood, Todd" -->
<!-- email="heywood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] large jobs hang on startup (deadlock?)" -->
<!-- id="44233CA5B57295409DA4423AECEFFEE701E64DD1_at_mailbox01.cshl.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C1E90726.17F9%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-02-05 11:50:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2605.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<li><strong>Previous message:</strong> <a href="2603.php">Brian Barrett: "Re: [OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<li><strong>In reply to:</strong> <a href="2593.php">Ralph Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2617.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Reply:</strong> <a href="2617.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>&nbsp;
<br>
<p>Thanks for the reply. The OpenMPI version is 1.2b2 (because I would like
<br>
to integrate it with SGE).
<br>
<p>&nbsp;
<br>
<p>Here is what is happening:
<br>
<p>&nbsp;
<br>
<p>(1)     When I run with -debug-daemons (but WITHOUT -d), I get &quot;Daemon
<br>
[0,0,27] checking in as pid 7620 on host blade28&quot; (for example) messages
<br>
for most but not all of the daemons that should be started up, and then
<br>
it hangs. I also notice &quot;reconnecting to LDAP server&quot; messages in
<br>
various /var/log/secure files, and cannot login while things are hung
<br>
(with &quot;su: pam_ldap: ldap_result Can't contact LDAP server&quot; in
<br>
/var/log/messages). So apparently LDAP hits some limit to opening ssh
<br>
sessions, and I'm not sure how to address this.
<br>
<p>(2)     When I run with -debug-daemons AND the debug option -d, all
<br>
daemons start start up and check-in, albeit slowly (debug must slow
<br>
things down so LDAP can handle all the requests??). Then apparently, the
<br>
cpi process is started for each task but it then hangs:
<br>
<p>&nbsp;
<br>
<p>[blade1:23816] spawn: in job_state_callback(jobid = 1, state = 0x4)
<br>
<p>[blade1:23816] Info: Setting up debugger process table for applications
<br>
<p>&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
<p>&nbsp;&nbsp;MPIR_debug_gate = 0
<br>
<p>&nbsp;&nbsp;MPIR_debug_state = 1
<br>
<p>&nbsp;&nbsp;MPIR_acquired_pre_main = 0
<br>
<p>&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
<p>&nbsp;&nbsp;MPIR_proctable_size = 800
<br>
<p>&nbsp;&nbsp;MPIR_proctable:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, blade1, /home4/itstaff/heywood/ompi/cpi,
<br>
24193)
<br>
<p>...
<br>
<p>...(i, host, exe, pid) = (799, blade213,
<br>
/home4/itstaff/heywood/ompi/cpi, 4762)
<br>
<p>&nbsp;
<br>
<p>A &quot;ps&quot; on the head node shows 200 open ssh sessions, and 4 cpi processes
<br>
doing nothing. A ^C gives this:
<br>
<p>&nbsp;
<br>
<p>mpirun: killing job...
<br>
<p>&nbsp;
<br>
<p>------------------------------------------------------------------------
<br>
<pre>
--
WARNING: A process refused to die!
 
Host: blade1
PID:  24193
 
This process may still be running and/or consuming resources.
 
 
 
Still got a ways to go, but any ideas/suggestions are welcome!
 
Thanks,
 
Todd
 
 
________________________________
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Ralph Castain
Sent: Friday, February 02, 2007 5:20 PM
To: Open MPI Users
Subject: Re: [OMPI users] large jobs hang on startup (deadlock?)
 
Hi Todd
To help us provide advice, could you tell us what version of OpenMPI you
are using?
Meantime, try adding &quot;-mca pls_rsh_num_concurrent 200&quot; to your mpirun
command line. You can up the number of concurrent daemons we launch to
anything your system will support - basically, we limit the number only
because some systems have limits on the number of ssh calls we can have
active at any one time. Because we hold stdio open when running with
-debug-daemons, the number of concurrent daemons must match or exceed
the number of nodes you are trying to launch on.
I have a &quot;fix&quot; in the works that will help relieve some of that
restriction, but that won't come out until a later release.
Hopefully, that will allow you to obtain more debug info about why/where
things are hanging.
Ralph
On 2/2/07 11:41 AM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
I have OpenMPI running fine for a small/medium number of tasks (simple
hello or cpi program). But when I try 700 or 800 tasks, it hangs,
apparently on startup. I think this might be related to LDAP, since if I
try to log into my account while the job is hung, I get told my username
doesn't exist. However, I tried adding -debug to the mpirun, and got the
same sequence of output as for successful smaller runs, until it hung
again. So I added --debug-daemons and got this (with an exit, i.e. no
hanging):
...
[blade1:31733] [0,0,0] wrote setup file
------------------------------------------------------------------------
--
The rsh launcher has been given a number of 128 concurrent daemons to
launch and is in a debug-daemons option. However, the total number of
daemons to launch (200) is greater than this value. This is a scenario
that
will cause the system to deadlock.
 
To avoid deadlock, either increase the number of concurrent daemons, or
remove the debug-daemons flag.
------------------------------------------------------------------------
--
[blade1:31733] [0,0,0] ORTE_ERROR_LOG: Fatal in file
../../../../../orte/mca/rmgr/urm/
rmgr_urm.c at line 455
[blade1:31733] mpirun: spawn failed with errno=-6
[blade1:31733] sess_dir_finalize: proc session dir not empty - leaving
 
Any ideas or suggestions appreciated.
 
Todd Heywood
 
 
 
________________________________
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2604/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2605.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<li><strong>Previous message:</strong> <a href="2603.php">Brian Barrett: "Re: [OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<li><strong>In reply to:</strong> <a href="2593.php">Ralph Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2617.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Reply:</strong> <a href="2617.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
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
