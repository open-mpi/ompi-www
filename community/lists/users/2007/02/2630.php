<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  6 18:05:46 2007" -->
<!-- isoreceived="20070206230546" -->
<!-- sent="Tue, 6 Feb 2007 18:05:38 -0500" -->
<!-- isosent="20070206230538" -->
<!-- name="Heywood, Todd" -->
<!-- email="heywood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] large jobs hang on startup (deadlock?)" -->
<!-- id="44233CA5B57295409DA4423AECEFFEE701E64DDE_at_mailbox01.cshl.edu" -->
<!-- charset="windows-1257" -->
<!-- inreplyto="C1EDE4A9.7790%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-02-06 18:05:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2631.php">Ralph Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Previous message:</strong> <a href="2629.php">Jeff Squyres: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>In reply to:</strong> <a href="2620.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2631.php">Ralph Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Reply:</strong> <a href="2631.php">Ralph Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Reply:</strong> <a href="2664.php">Jeff Squyres: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>It looks that way. I created a user local to each node, with local authentication via /etc/passwd and /etc/shadow, and OpenMPI scales up just fine for that.
<br>
<p>I know this is an OpenMPI list, but does anyone know how common or uncommon LDAP-based clusters are? I would have thought this issue would have arisen elsewhere, but Googling MPI+LDAP (and similar) doesn't turn up much.
<br>
<p>I'd certainly be willing to test any patch. Thanks.
<br>
<p>Todd
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph H Castain
<br>
Sent: Tuesday, February 06, 2007 9:54 AM
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] large jobs hang on startup (deadlock?)
<br>
<p>It sounds to me like we are probably overwhelming your slapd - your test
<br>
would seem to indicate that slowing down the slapd makes us fail even with
<br>
smaller jobs, which tends to support that idea.
<br>
<p>We frankly haven't encountered that before since our rsh tests have all been
<br>
done using non-LDAP authentication (basically, we ask that you setup rsh to
<br>
auto-authenticate on each node). It sounds like we need to add an ability to
<br>
slow down so that the daemon doesn't &quot;fail&quot; due to authentication timeout
<br>
and/or slapd rejection due to the queue being full.
<br>
<p>This may take a little time to fix due to other priorities, and will almost
<br>
certainly have to be released in a subsequent 1.2.x version. Meantime, I'll
<br>
let you know when I get something to test - would you be willing to give it
<br>
a shot if I provide a patch? I don't have access to an LDAP-based system.
<br>
<p>Ralph
<br>
<p><p>On 2/6/07 7:44 AM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<p>Thanks for the reply. This is a tough one. It is OpenLDAP. I had
<br>
<span class="quotelev1">&gt; thought that I might be hitting a file descriptor limit for slapd (LDAP
</span><br>
<span class="quotelev1">&gt; daemon), which ulimit -n does not effect (you have to rebuild LDAP with a
</span><br>
<span class="quotelev1">&gt; different FD_SETSIZE variable). However, I simply turned on more expressive
</span><br>
<span class="quotelev1">&gt; logging to /var/log/slapd, and that resulted in smaller jobs (which
</span><br>
<span class="quotelev1">&gt; successfully ran before) hanging. Go figure. It appears that daemons are up
</span><br>
<span class="quotelev1">&gt; and running (from ps), and everything hangs in MPI_Init. Ctl-C
</span><br>
<span class="quotelev1">&gt; gives
</span><br>
<p>[blade1:04524] ERROR: A daemon on node blade26 failed to start as
<br>
<span class="quotelev1">&gt; expected.
</span><br>
[blade1:04524] ERROR: There may be more information available
<br>
<span class="quotelev1">&gt; from
</span><br>
[blade1:04524] ERROR: the remote shell (see above).
<br>
[blade1:04524] ERROR:
<br>
<span class="quotelev1">&gt; The daemon exited unexpectedly with status 255.
</span><br>
<p>I'm interested in any
<br>
<span class="quotelev1">&gt; suggestion, semi-fixes, etc. which might help get to the bottom of this. Right
</span><br>
<span class="quotelev1">&gt; now: whether the daemons are indeed up and running, or if there are some that
</span><br>
<span class="quotelev1">&gt; are not (causing MPI_Init to hang).
</span><br>
<p>Thanks,
<br>
<p>Todd
<br>
<p>-----Original
<br>
<span class="quotelev1">&gt; Message-----
</span><br>
From: users-bounces_at_[hidden]
<br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph H Castain
</span><br>
Sent:
<br>
<span class="quotelev1">&gt; Tuesday, February 06, 2007 8:52 AM
</span><br>
To: Open MPI Users
<br>
<span class="quotelev1">&gt; &lt;users_at_[hidden]&gt;
</span><br>
Subject: Re: [OMPI users] large jobs hang on startup
<br>
<span class="quotelev1">&gt; (deadlock?)
</span><br>
<p>Well, I can't say for sure about LDAP. I did a quick search and
<br>
<span class="quotelev1">&gt; found two
</span><br>
things:
<br>
<p>1. there are limits imposed in LDAP that may apply to your
<br>
<span class="quotelev1">&gt; situation, and
</span><br>
<p>2. that statement varies tremendously depending upon the
<br>
<span class="quotelev1">&gt; specific LDAP
</span><br>
implementation you are using
<br>
<p>I would suggest you see which LDAP
<br>
<span class="quotelev1">&gt; you are using and contact the respective
</span><br>
organization to ask if they do have
<br>
<span class="quotelev1">&gt; such a limit, and if so, how to adjust
</span><br>
it.
<br>
<p>It sounds like maybe we are
<br>
<span class="quotelev1">&gt; hitting the LDAP server with too many requests
</span><br>
too rapidly. Usually, the issue
<br>
<span class="quotelev1">&gt; is not starting fast enough, so this is a
</span><br>
new one! We don't currently check to
<br>
<span class="quotelev1">&gt; see if everything started up okay, so
</span><br>
that is why the processes might hang -
<br>
<span class="quotelev1">&gt; we hope to fix that soon. I'll have
</span><br>
to see if there is something we can do to
<br>
<span class="quotelev1">&gt; help alleviate such problems -
</span><br>
might not be in time for the 1.2 release, but
<br>
<span class="quotelev1">&gt; perhaps it will make a
</span><br>
subsequent &quot;fix&quot; or, if you are willing/interested, I
<br>
<span class="quotelev1">&gt; could provide it to
</span><br>
you as a &quot;patch&quot; you could use until a later official
<br>
<span class="quotelev1">&gt; release.
</span><br>
<p>Meantime, you might try upgrading to 1.2b3 or even a nightly release
<br>
<span class="quotelev1">&gt; from
</span><br>
the trunk. There are known problems with 1.2b2 (which is why there is a
<br>
<span class="quotelev1">&gt; b3
</span><br>
and soon to be an rc1), though I don't think that will be the problem
<br>
<span class="quotelev1">&gt; here.
</span><br>
At the least, the nightly trunk has a much better response to ctrl-c in
<br>
<span class="quotelev1">&gt; it.
</span><br>
<p>Ralph
<br>
<p><p>On 2/5/07 9:50 AM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for the reply. The OpenMPI version is 1.2b2 (because I
</span><br>
<span class="quotelev1">&gt; would like to
</span><br>
<span class="quotelev1">&gt; integrate it with SGE).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Here is what is happening:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1)     When I run with &#173;debug-daemons (but WITHOUT &#173;d), I get &#179;Daemon&gt;
</span><br>
<span class="quotelev1">&gt; [0,0,27] checking in as pid 7620 on host blade28&#178; (for example) messages for
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; most but not all of the daemons that should be started up, and then it
</span><br>
<span class="quotelev1">&gt; hangs.
</span><br>
<span class="quotelev1">&gt; I also notice &#179;reconnecting to LDAP server&#178; messages in various
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /var/log/secure files, and cannot login while things are hung (with &#179;su:&gt;
</span><br>
<span class="quotelev1">&gt; pam_ldap: ldap_result Can't contact LDAP server&#178; in /var/log/messages). So
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; apparently LDAP hits some limit to opening ssh sessions, and I&#185;m not sure
</span><br>
<span class="quotelev1">&gt; how
</span><br>
<span class="quotelev1">&gt; to address this.
</span><br>
<span class="quotelev1">&gt; (2)     When I run with &#173;debug-daemons AND the debug
</span><br>
<span class="quotelev1">&gt; option &#173;d, all daemons
</span><br>
<span class="quotelev1">&gt; start start up and check-in, albeit slowly (debug
</span><br>
<span class="quotelev1">&gt; must slow things down so
</span><br>
<span class="quotelev1">&gt; LDAP can handle all the requests??). Then
</span><br>
<span class="quotelev1">&gt; apparently, the cpi process is
</span><br>
<span class="quotelev1">&gt; started for each task but it then hangs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [blade1:23816] spawn: in job_state_callback(jobid = 1, state = 0x4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [blade1:23816] Info: Setting up debugger process table for applications
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_debug_gate = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPIR_acquired_pre_main = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable_size =
</span><br>
<span class="quotelev1">&gt; 800
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;    (i, host, exe, pid) = (0, blade1,
</span><br>
<span class="quotelev1">&gt; /home4/itstaff/heywood/ompi/cpi, 24193)
</span><br>
<span class="quotelev1">&gt; &#208;
</span><br>
<span class="quotelev1">&gt; &#208;(i, host, exe, pid) = (799,
</span><br>
<span class="quotelev1">&gt; blade213, /home4/itstaff/heywood/ompi/cpi, 4762)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; A &#179;ps&#178; on the head node
</span><br>
<span class="quotelev1">&gt; shows 200 open ssh sessions, and 4 cpi processes doing
</span><br>
<span class="quotelev1">&gt; nothing. A ^C gives
</span><br>
<span class="quotelev1">&gt; this:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; This
</span><br>
<span class="quotelev1">&gt; process may still be running and/or consuming resources.
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
<span class="quotelev1">&gt; Still got a ways to go, but any ideas/suggestions are welcome!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf
</span><br>
<span class="quotelev1">&gt; Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent:
</span><br>
<span class="quotelev1">&gt; Friday, February 02, 2007 5:20 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI
</span><br>
<span class="quotelev1">&gt; users] large jobs hang on startup (deadlock?)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hi Todd
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To help us
</span><br>
<span class="quotelev1">&gt; provide advice, could you tell us what version of OpenMPI you are
</span><br>
<span class="quotelev1">&gt; using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meantime, try adding &#179;-mca pls_rsh_num_concurrent 200&#178; to your mpirun
</span><br>
<span class="quotelev1">&gt; command
</span><br>
<span class="quotelev1">&gt; line. You can up the number of concurrent daemons we launch to
</span><br>
<span class="quotelev1">&gt; anything your
</span><br>
<span class="quotelev1">&gt; system will support &#173; basically, we limit the number only
</span><br>
<span class="quotelev1">&gt; because some systems
</span><br>
<span class="quotelev1">&gt; have limits on the number of ssh calls we can have
</span><br>
<span class="quotelev1">&gt; active at any one time.
</span><br>
<span class="quotelev1">&gt; Because we hold stdio open when running with
</span><br>
<span class="quotelev1">&gt; &#139;debug-daemons, the number of
</span><br>
<span class="quotelev1">&gt; concurrent daemons must match or exceed the
</span><br>
<span class="quotelev1">&gt; number of nodes you are trying to
</span><br>
<span class="quotelev1">&gt; launch on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a &#179;fix&#178; in the
</span><br>
<span class="quotelev1">&gt; works that will help relieve some of that restriction,
</span><br>
<span class="quotelev1">&gt; but that won&#185;t come
</span><br>
<span class="quotelev1">&gt; out until a later release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hopefully, that will allow you to obtain more
</span><br>
<span class="quotelev1">&gt; debug info about why/where
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
<span class="quotelev1">&gt; On 2/2/07
</span><br>
<span class="quotelev1">&gt; 11:41 AM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I have OpenMPI running
</span><br>
<span class="quotelev1">&gt; fine for a small/medium number of tasks (simple hello
</span><br>
<span class="quotelev1">&gt; or cpi program). But
</span><br>
<span class="quotelev1">&gt; when I try 700 or 800 tasks, it hangs, apparently on
</span><br>
<span class="quotelev1">&gt; startup. I think this
</span><br>
<span class="quotelev1">&gt; might be related to LDAP, since if I try to log into my
</span><br>
<span class="quotelev1">&gt; account while the
</span><br>
<span class="quotelev1">&gt; job is hung, I get told my username doesn&#185;t exist. However,
</span><br>
<span class="quotelev1">&gt; I tried adding
</span><br>
<span class="quotelev1">&gt; &#173;debug to the mpirun, and got the same sequence of output as
</span><br>
<span class="quotelev1">&gt; for successful
</span><br>
<span class="quotelev1">&gt; smaller runs, until it hung again. So I added &#173;-debug-daemons
</span><br>
<span class="quotelev1">&gt; and got this
</span><br>
<span class="quotelev1">&gt; (with an exit, i.e. no hanging):
</span><br>
<span class="quotelev1">&gt; &#208;
</span><br>
<span class="quotelev1">&gt; [blade1:31733] [0,0,0] wrote setup
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The rsh launcher has been given a number of 128 concurrent daemons to
</span><br>
<span class="quotelev1">&gt; launch
</span><br>
<span class="quotelev1">&gt; and is in a debug-daemons option. However, the total number of
</span><br>
<span class="quotelev1">&gt; daemons to
</span><br>
<span class="quotelev1">&gt; launch (200) is greater than this value. This is a scenario that
</span><br>
<span class="quotelev1">&gt; will cause
</span><br>
<span class="quotelev1">&gt; the system to deadlock.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; To avoid deadlock, either increase the number of
</span><br>
<span class="quotelev1">&gt; concurrent daemons, or
</span><br>
<span class="quotelev1">&gt; remove the debug-daemons flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [blade1:31733] [0,0,0] ORTE_ERROR_LOG: Fatal in file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/rmgr/urm/
</span><br>
<span class="quotelev1">&gt; rmgr_urm.c at line 455
</span><br>
<span class="quotelev1">&gt; [blade1:31733]
</span><br>
<span class="quotelev1">&gt; mpirun: spawn failed with errno=-6
</span><br>
<span class="quotelev1">&gt; [blade1:31733] sess_dir_finalize: proc
</span><br>
<span class="quotelev1">&gt; session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Any ideas or suggestions appreciated.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><p>_______________________
<br>
<span class="quotelev1">&gt; ________________________
</span><br>
users mailing
<br>
<span class="quotelev1">&gt; list
</span><br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>__
<br>
<span class="quotelev1">&gt; _____________________________________________
</span><br>
users mailing
<br>
<span class="quotelev1">&gt; list
</span><br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p>_______________________________________________
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
<li><strong>Next message:</strong> <a href="2631.php">Ralph Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Previous message:</strong> <a href="2629.php">Jeff Squyres: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>In reply to:</strong> <a href="2620.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2631.php">Ralph Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Reply:</strong> <a href="2631.php">Ralph Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Reply:</strong> <a href="2664.php">Jeff Squyres: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
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
