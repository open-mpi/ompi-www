<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  6 18:48:14 2007" -->
<!-- isoreceived="20070206234814" -->
<!-- sent="Tue, 06 Feb 2007 16:48:05 -0700" -->
<!-- isosent="20070206234805" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] large jobs hang on startup (deadlock?)" -->
<!-- id="C1EE61C5.18BD%rhc_at_lanl.gov" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="44233CA5B57295409DA4423AECEFFEE701E64DDE_at_mailbox01.cshl.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-06 18:48:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2632.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Previous message:</strong> <a href="2630.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>In reply to:</strong> <a href="2630.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2632.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Reply:</strong> <a href="2632.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Todd
<br>
<p>Just as a thought - you could try not using --debug-daemons or -d and
<br>
instead setting &quot;-mca pls_rsh_num_concurrent 50&quot; or some such small number.
<br>
This will tell the system to launch 50 ssh calls at a time, waiting for each
<br>
group to complete before launching the next. You can't use it with
<br>
--debug-daemons as that option prevents the ssh calls from &quot;closing&quot; so that
<br>
you can get the output from the daemons. You can still launch as big a job
<br>
as you like - we'll just do it 50 ssh calls at a time.
<br>
<p>If we are truly overwhelming the slapd, then this should alleviate the
<br>
problem.
<br>
<p>Let me know if you get to try it...
<br>
Ralph
<br>
<p><p>On 2/6/07 4:05 PM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<p>It looks that way. I created a user local to each node, with local
<br>
<span class="quotelev1">&gt; authentication via /etc/passwd and /etc/shadow, and OpenMPI scales up just
</span><br>
<span class="quotelev1">&gt; fine for that.
</span><br>
<p>I know this is an OpenMPI list, but does anyone know how
<br>
<span class="quotelev1">&gt; common or uncommon LDAP-based clusters are? I would have thought this issue
</span><br>
<span class="quotelev1">&gt; would have arisen elsewhere, but Googling MPI+LDAP (and similar) doesn't turn
</span><br>
<span class="quotelev1">&gt; up much.
</span><br>
<p>I'd certainly be willing to test any patch.
<br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<p>Todd
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden]
<br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph H Castain
</span><br>
Sent:
<br>
<span class="quotelev1">&gt; Tuesday, February 06, 2007 9:54 AM
</span><br>
To: Open MPI Users
<br>
<span class="quotelev1">&gt; &lt;users_at_[hidden]&gt;
</span><br>
Subject: Re: [OMPI users] large jobs hang on startup
<br>
<span class="quotelev1">&gt; (deadlock?)
</span><br>
<p>It sounds to me like we are probably overwhelming your slapd -
<br>
<span class="quotelev1">&gt; your test
</span><br>
would seem to indicate that slowing down the slapd makes us fail
<br>
<span class="quotelev1">&gt; even with
</span><br>
smaller jobs, which tends to support that idea.
<br>
<p>We frankly haven't
<br>
<span class="quotelev1">&gt; encountered that before since our rsh tests have all been
</span><br>
done using non-LDAP
<br>
<span class="quotelev1">&gt; authentication (basically, we ask that you setup rsh to
</span><br>
auto-authenticate on
<br>
<span class="quotelev1">&gt; each node). It sounds like we need to add an ability to
</span><br>
slow down so that the
<br>
<span class="quotelev1">&gt; daemon doesn't &quot;fail&quot; due to authentication timeout
</span><br>
and/or slapd rejection due
<br>
<span class="quotelev1">&gt; to the queue being full.
</span><br>
<p>This may take a little time to fix due to other
<br>
<span class="quotelev1">&gt; priorities, and will almost
</span><br>
certainly have to be released in a subsequent
<br>
<span class="quotelev1">&gt; 1.2.x version. Meantime, I'll
</span><br>
let you know when I get something to test -
<br>
<span class="quotelev1">&gt; would you be willing to give it
</span><br>
a shot if I provide a patch? I don't have
<br>
<span class="quotelev1">&gt; access to an LDAP-based system.
</span><br>
<p>Ralph
<br>
<p><p>On 2/6/07 7:44 AM, &quot;Heywood, Todd&quot;
<br>
<span class="quotelev1">&gt; &lt;heywood_at_[hidden]&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<p>Thanks for the reply. This is a tough
<br>
<span class="quotelev1">&gt; one. It is OpenLDAP. I had
</span><br>
<span class="quotelev1">&gt; thought that I might be hitting a file descriptor
</span><br>
<span class="quotelev1">&gt; limit for slapd (LDAP
</span><br>
<span class="quotelev1">&gt; daemon), which ulimit -n does not effect (you have to
</span><br>
<span class="quotelev1">&gt; rebuild LDAP with a
</span><br>
<span class="quotelev1">&gt; different FD_SETSIZE variable). However, I simply turned
</span><br>
<span class="quotelev1">&gt; on more expressive
</span><br>
<span class="quotelev1">&gt; logging to /var/log/slapd, and that resulted in smaller
</span><br>
<span class="quotelev1">&gt; jobs (which
</span><br>
<span class="quotelev1">&gt; successfully ran before) hanging. Go figure. It appears that
</span><br>
<span class="quotelev1">&gt; daemons are up
</span><br>
<span class="quotelev1">&gt; and running (from ps), and everything hangs in MPI_Init.
</span><br>
<span class="quotelev1">&gt; Ctl-C
</span><br>
<span class="quotelev1">&gt; gives
</span><br>
<p>[blade1:04524] ERROR: A daemon on node blade26 failed to start
<br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
[blade1:04524] ERROR: There may be more information available
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from
</span><br>
[blade1:04524] ERROR: the remote shell (see above).
<br>
[blade1:04524]
<br>
<span class="quotelev1">&gt; ERROR:
</span><br>
<span class="quotelev1">&gt; The daemon exited unexpectedly with status 255.
</span><br>
<p>I'm interested in
<br>
<span class="quotelev1">&gt; any
</span><br>
<span class="quotelev1">&gt; suggestion, semi-fixes, etc. which might help get to the bottom of this.
</span><br>
<span class="quotelev1">&gt; Right
</span><br>
<span class="quotelev1">&gt; now: whether the daemons are indeed up and running, or if there are
</span><br>
<span class="quotelev1">&gt; some that
</span><br>
<span class="quotelev1">&gt; are not (causing MPI_Init to
</span><br>
<span class="quotelev1">&gt; hang).
</span><br>
<p>Thanks,
<br>
<p>Todd
<br>
<p>-----Original
<br>
<span class="quotelev1">&gt; Message-----
</span><br>
From:
<br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev1">&gt; Ralph H Castain
</span><br>
Sent:
<br>
<span class="quotelev1">&gt; Tuesday, February 06, 2007 8:52 AM
</span><br>
To: Open MPI
<br>
<span class="quotelev1">&gt; Users
</span><br>
<span class="quotelev1">&gt; &lt;users_at_[hidden]&gt;
</span><br>
Subject: Re: [OMPI users] large jobs hang on
<br>
<span class="quotelev1">&gt; startup
</span><br>
<span class="quotelev1">&gt; (deadlock?)
</span><br>
<p>Well, I can't say for sure about LDAP. I did a quick
<br>
<span class="quotelev1">&gt; search and
</span><br>
<span class="quotelev1">&gt; found two
</span><br>
things:
<br>
<p>1. there are limits imposed in LDAP that may
<br>
<span class="quotelev1">&gt; apply to your
</span><br>
<span class="quotelev1">&gt; situation, and
</span><br>
<p>2. that statement varies tremendously
<br>
<span class="quotelev1">&gt; depending upon the
</span><br>
<span class="quotelev1">&gt; specific LDAP
</span><br>
implementation you are using
<br>
<p>I would
<br>
<span class="quotelev1">&gt; suggest you see which LDAP
</span><br>
<span class="quotelev1">&gt; you are using and contact the
</span><br>
<span class="quotelev1">&gt; respective
</span><br>
organization to ask if they do have
<br>
<span class="quotelev1">&gt; such a limit, and if so, how
</span><br>
<span class="quotelev1">&gt; to adjust
</span><br>
it.
<br>
<p>It sounds like maybe we are
<br>
<span class="quotelev1">&gt; hitting the LDAP server with too
</span><br>
<span class="quotelev1">&gt; many requests
</span><br>
too rapidly. Usually, the issue
<br>
<span class="quotelev1">&gt; is not starting fast enough,
</span><br>
<span class="quotelev1">&gt; so this is a
</span><br>
new one! We don't currently check to
<br>
<span class="quotelev1">&gt; see if everything started
</span><br>
<span class="quotelev1">&gt; up okay, so
</span><br>
that is why the processes might hang -
<br>
<span class="quotelev1">&gt; we hope to fix that soon.
</span><br>
<span class="quotelev1">&gt; I'll have
</span><br>
to see if there is something we can do to
<br>
<span class="quotelev1">&gt; help alleviate such
</span><br>
<span class="quotelev1">&gt; problems -
</span><br>
might not be in time for the 1.2 release, but
<br>
<span class="quotelev1">&gt; perhaps it will
</span><br>
<span class="quotelev1">&gt; make a
</span><br>
subsequent &quot;fix&quot; or, if you are willing/interested, I
<br>
<span class="quotelev1">&gt; could provide
</span><br>
<span class="quotelev1">&gt; it to
</span><br>
you as a &quot;patch&quot; you could use until a later official
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; release.
</span><br>
<p>Meantime, you might try upgrading to 1.2b3 or even a nightly
<br>
<span class="quotelev1">&gt; release
</span><br>
<span class="quotelev1">&gt; from
</span><br>
the trunk. There are known problems with 1.2b2 (which is why
<br>
<span class="quotelev1">&gt; there is a
</span><br>
<span class="quotelev1">&gt; b3
</span><br>
and soon to be an rc1), though I don't think that will be the
<br>
<span class="quotelev1">&gt; problem
</span><br>
<span class="quotelev1">&gt; here.
</span><br>
At the least, the nightly trunk has a much better response to
<br>
<span class="quotelev1">&gt; ctrl-c in
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<p>Ralph
<br>
<p><p>On 2/5/07 9:50 AM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt;
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for the reply. The OpenMPI version is 1.2b2
</span><br>
<span class="quotelev1">&gt; (because I
</span><br>
<span class="quotelev1">&gt; would like to
</span><br>
<span class="quotelev1">&gt; integrate it with SGE).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Here is what is
</span><br>
<span class="quotelev1">&gt; happening:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1)     When I run with &#194;&#173;debug-daemons (but WITHOUT &#194;&#173;d), I
</span><br>
<span class="quotelev1">&gt; get &#194;&#179;Daemon&gt;
</span><br>
<span class="quotelev1">&gt; [0,0,27] checking in as pid 7620 on host blade28&#194;&#178; (for example)
</span><br>
<span class="quotelev1">&gt; messages for
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; most but not all of the daemons that should be started up,
</span><br>
<span class="quotelev1">&gt; and then it
</span><br>
<span class="quotelev1">&gt; hangs.
</span><br>
<span class="quotelev1">&gt; I also notice &#194;&#179;reconnecting to LDAP server&#194;&#178; messages in
</span><br>
<span class="quotelev1">&gt; various
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /var/log/secure files, and cannot login while things are hung
</span><br>
<span class="quotelev1">&gt; (with &#194;&#179;su:&gt;
</span><br>
<span class="quotelev1">&gt; pam_ldap: ldap_result Can't contact LDAP server&#194;&#178; in
</span><br>
<span class="quotelev1">&gt; /var/log/messages). So
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; apparently LDAP hits some limit to opening ssh
</span><br>
<span class="quotelev1">&gt; sessions, and I&#194;&#185;m not sure
</span><br>
<span class="quotelev1">&gt; how
</span><br>
<span class="quotelev1">&gt; to address this.
</span><br>
<span class="quotelev1">&gt; (2)     When I run with
</span><br>
<span class="quotelev1">&gt; &#194;&#173;debug-daemons AND the debug
</span><br>
<span class="quotelev1">&gt; option &#194;&#173;d, all daemons
</span><br>
<span class="quotelev1">&gt; start start up and
</span><br>
<span class="quotelev1">&gt; check-in, albeit slowly (debug
</span><br>
<span class="quotelev1">&gt; must slow things down so
</span><br>
<span class="quotelev1">&gt; LDAP can handle
</span><br>
<span class="quotelev1">&gt; all the requests??). Then
</span><br>
<span class="quotelev1">&gt; apparently, the cpi process is
</span><br>
<span class="quotelev1">&gt; started for each
</span><br>
<span class="quotelev1">&gt; task but it then hangs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [blade1:23816] spawn: in
</span><br>
<span class="quotelev1">&gt; job_state_callback(jobid = 1, state = 0x4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [blade1:23816] Info: Setting up
</span><br>
<span class="quotelev1">&gt; debugger process table for applications
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPIR_debug_gate = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPIR_acquired_pre_main = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable_size =
</span><br>
<span class="quotelev1">&gt; 800
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (i, host, exe, pid) = (0, blade1,
</span><br>
<span class="quotelev1">&gt; /home4/itstaff/heywood/ompi/cpi, 24193)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#197;&#160;
</span><br>
<span class="quotelev1">&gt; &#197;&#160;(i, host, exe, pid) = (799,
</span><br>
<span class="quotelev1">&gt; blade213, /home4/itstaff/heywood/ompi/cpi,
</span><br>
<span class="quotelev1">&gt; 4762)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; A &#194;&#179;ps&#194;&#178; on the head node
</span><br>
<span class="quotelev1">&gt; shows 200 open ssh sessions, and 4 cpi
</span><br>
<span class="quotelev1">&gt; processes doing
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Still got a ways to go, but any ideas/suggestions are welcome!
</span><br>
<span class="quotelev1">&gt;  
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf
</span><br>
<span class="quotelev1">&gt; Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Friday, February 02, 2007 5:20 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; provide advice, could you tell us what version of OpenMPI you are
</span><br>
<span class="quotelev1">&gt; using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meantime, try adding &#194;&#179;-mca pls_rsh_num_concurrent 200&#194;&#178; to your mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; command
</span><br>
<span class="quotelev1">&gt; line. You can up the number of concurrent daemons we launch to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; anything your
</span><br>
<span class="quotelev1">&gt; system will support &#194;&#173; basically, we limit the number only
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; because some systems
</span><br>
<span class="quotelev1">&gt; have limits on the number of ssh calls we can have
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; active at any one time.
</span><br>
<span class="quotelev1">&gt; Because we hold stdio open when running with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#185;debug-daemons, the number of
</span><br>
<span class="quotelev1">&gt; concurrent daemons must match or exceed the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; number of nodes you are trying to
</span><br>
<span class="quotelev1">&gt; launch on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a &#194;&#179;fix&#194;&#178; in the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; works that will help relieve some of that restriction,
</span><br>
<span class="quotelev1">&gt; but that won&#194;&#185;t come
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; out until a later release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hopefully, that will allow you to obtain
</span><br>
<span class="quotelev1">&gt; more
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
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev1">&gt; 2/2/07
</span><br>
<span class="quotelev1">&gt; 11:41 AM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I have OpenMPI
</span><br>
<span class="quotelev1">&gt; running
</span><br>
<span class="quotelev1">&gt; fine for a small/medium number of tasks (simple hello
</span><br>
<span class="quotelev1">&gt; or cpi
</span><br>
<span class="quotelev1">&gt; program). But
</span><br>
<span class="quotelev1">&gt; when I try 700 or 800 tasks, it hangs, apparently on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; startup. I think this
</span><br>
<span class="quotelev1">&gt; might be related to LDAP, since if I try to log into
</span><br>
<span class="quotelev1">&gt; my
</span><br>
<span class="quotelev1">&gt; account while the
</span><br>
<span class="quotelev1">&gt; job is hung, I get told my username doesn&#194;&#185;t exist.
</span><br>
<span class="quotelev1">&gt; However,
</span><br>
<span class="quotelev1">&gt; I tried adding
</span><br>
<span class="quotelev1">&gt; &#194;&#173;debug to the mpirun, and got the same sequence of
</span><br>
<span class="quotelev1">&gt; output as
</span><br>
<span class="quotelev1">&gt; for successful
</span><br>
<span class="quotelev1">&gt; smaller runs, until it hung again. So I added
</span><br>
<span class="quotelev1">&gt; &#194;&#173;-debug-daemons
</span><br>
<span class="quotelev1">&gt; and got this
</span><br>
<span class="quotelev1">&gt; (with an exit, i.e. no hanging):
</span><br>
<span class="quotelev1">&gt; &#197;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [blade1:31733] [0,0,0] wrote setup
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The rsh launcher has been given a number of 128 concurrent daemons to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; launch
</span><br>
<span class="quotelev1">&gt; and is in a debug-daemons option. However, the total number of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; daemons to
</span><br>
<span class="quotelev1">&gt; launch (200) is greater than this value. This is a scenario
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; will cause
</span><br>
<span class="quotelev1">&gt; the system to deadlock.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; To avoid deadlock, either
</span><br>
<span class="quotelev1">&gt; increase the number of
</span><br>
<span class="quotelev1">&gt; concurrent daemons, or
</span><br>
<span class="quotelev1">&gt; remove the debug-daemons
</span><br>
<span class="quotelev1">&gt; flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [blade1:31733] [0,0,0] ORTE_ERROR_LOG: Fatal in file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/rmgr/urm/
</span><br>
<span class="quotelev1">&gt; rmgr_urm.c at line 455
</span><br>
<span class="quotelev1">&gt; [blade1:31733]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun: spawn failed with errno=-6
</span><br>
<span class="quotelev1">&gt; [blade1:31733] sess_dir_finalize: proc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Any ideas or suggestions
</span><br>
<span class="quotelev1">&gt; appreciated.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing
</span><br>
<span class="quotelev1">&gt; list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><p>_______________________
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________
</span><br>
users mailing
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; list
</span><br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>__
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _____________________________________________
</span><br>
users mailing
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; list
</span><br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><span class="quotelev1">&gt; _______________________________________________
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2632.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Previous message:</strong> <a href="2630.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>In reply to:</strong> <a href="2630.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2632.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Reply:</strong> <a href="2632.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
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
