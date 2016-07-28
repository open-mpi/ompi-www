<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  7 14:42:27 2007" -->
<!-- isoreceived="20070207194227" -->
<!-- sent="Wed, 07 Feb 2007 12:42:14 -0700" -->
<!-- isosent="20070207194214" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] large jobs hang on startup (deadlock?)" -->
<!-- id="C1EF79A6.18E7%rhc_at_lanl.gov" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="44233CA5B57295409DA4423AECEFFEE701E64DE3_at_mailbox01.cshl.edu" -->
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
<strong>Date:</strong> 2007-02-07 14:42:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2636.php">Nader Ahmadi: "[OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
<li><strong>Previous message:</strong> <a href="2634.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>In reply to:</strong> <a href="2634.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2664.php">Jeff Squyres: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/7/07 12:07 PM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<p>Patience is not an issue since I have a workaround (a locally
<br>
<span class="quotelev1">&gt; authenticated user), and other users are not running large enough MPI jobs to
</span><br>
<span class="quotelev1">&gt; hit this problem.
</span><br>
<p>I'm a bit confused now though. I thought that setting this
<br>
<span class="quotelev1">&gt; switch would set off 50 ssh sessions at a time, or 50 connections to slapd.
</span><br>
<span class="quotelev1">&gt; I.e. a second group of 50 connections wouldn't initiate until the first group
</span><br>
<span class="quotelev1">&gt; &quot;closed&quot; their sessions, which should be reflected by a corresponding decrease
</span><br>
<span class="quotelev1">&gt; in the number of established connections for slapd. So my conclusion was that
</span><br>
<span class="quotelev1">&gt; no sessions are &quot;closing&quot;.
</span><br>
<p>The way the rsh launcher works is to fork/exec num_concurrent rsh/ssh
<br>
sessions, and watch as each one &quot;closes&quot; the connection back to the HNP.
<br>
When that block has cleared, we then begin launching the next one. Note that
<br>
we are talking here about closure of stdin/stdout connections - i.e., the
<br>
orteds &quot;daemonize&quot; themselves after launch, thus severing their stdin/stdout
<br>
relationship back to the HNP.
<br>
<p>It is possible that this mechanism isn't actually limiting the launch rate -
<br>
e.g., the orteds may daemonize themselves so quickly that the block launch
<br>
doesn't help. In a soon-to-come future version, we won't use that mechanism
<br>
for determining when to launch the next block - my offer of a patch was to
<br>
give you that new version now, modify it to more explicitly limit launch
<br>
rate, and see if that helped. I'll try to put that together in the next week
<br>
or so.
<br>
<p>Since you observed that the pls_rsh_num_concurrent option had no impact on
<br>
the *rate* at which we launched, that would indicate that either the slapd
<br>
connection isn't bottlenecking - the time to authenticate is showing as
<br>
independent of the rate at which we are hitting the slapd - or we are not
<br>
rate limiting as we had hoped. Hence my comment that it may not look like a
<br>
rate issue.
<br>
<p>As I said earlier, we have never tested this with LDAP. From what I
<br>
understand of LDAP (which is limited, I admit), the ssh'd process (the orted
<br>
in this case) forms an authentication connection back to the slapd. It may
<br>
not be possible to sever this connection during the life of that process.
<br>
There typically are limits on the number of simultaneous LDAP sessions a
<br>
single user can have open - mainly for security reasons - so that could also
<br>
be causing the problem.
<br>
<p>Given that you also observed that the total number of nodes we could launch
<br>
upon was the same regardless of the rate, it could be that we are hitting
<br>
the LDAP session limit.
<br>
<p>Logging may have a broader impact than just slapd response rate - I honestly
<br>
don't know.
<br>
<p>Hope that helps - I'll pass along that patch as soon as I can.
<br>
Ralph
<br>
<p><span class="quotelev1">&gt;
</span><br>
<p>There's also the observation that when slapd is
<br>
<span class="quotelev1">&gt; slowed down by logging (extensively), things hang with fewer number of
</span><br>
<span class="quotelev1">&gt; established connections (open ssh sessions). I don't see how this fitrs with a
</span><br>
<span class="quotelev1">&gt; total number of connections limitation.
</span><br>
<p><p><p><span class="quotelev1">&gt; Thanks,
</span><br>
<p>Todd
<br>
<p>-----Original
<br>
<span class="quotelev1">&gt; Message-----
</span><br>
From: users-bounces_at_[hidden]
<br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
Sent:
<br>
<span class="quotelev1">&gt; Wednesday, February 07, 2007 1:28 PM
</span><br>
To: Open MPI Users
<br>
Subject: Re: [OMPI
<br>
<span class="quotelev1">&gt; users] large jobs hang on startup (deadlock?)
</span><br>
<p>Hi Todd
<br>
<p>I truly appreciate
<br>
<span class="quotelev1">&gt; your patience. If the rate was the same with that switch
</span><br>
set, then that would
<br>
<span class="quotelev1">&gt; indicate to me that we aren't having trouble getting
</span><br>
through the slapd - it
<br>
<span class="quotelev1">&gt; probably isn't a problem with how hard we are driving
</span><br>
it, but rather with the
<br>
<span class="quotelev1">&gt; total number of connections being created.
</span><br>
Basically, we need to establish one
<br>
<span class="quotelev1">&gt; connection/node to launch the orteds
</span><br>
(the app procs are just fork/exec'd by
<br>
<span class="quotelev1">&gt; the orteds so they shouldn't see the
</span><br>
slapd).
<br>
<p>The issue may have to do with
<br>
<span class="quotelev1">&gt; limits on the total number of LDAP
</span><br>
authentication connections allowed for one
<br>
<span class="quotelev1">&gt; user. I believe that is settable,
</span><br>
but will have to look it up and/or ask a few
<br>
<span class="quotelev1">&gt; friends that might know.
</span><br>
<p>I have not seen an LDAP-based cluster before (though
<br>
<span class="quotelev1">&gt; authentication onto the
</span><br>
head node of a cluster is frequently handled that
<br>
<span class="quotelev1">&gt; way), but that doesn't
</span><br>
mean someone hasn't done it.
<br>
<p>Again, appreciate the
<br>
<span class="quotelev1">&gt; patience.
</span><br>
Ralph
<br>
&nbsp;
<br>
<p><p>On 2/7/07 10:28 AM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt;
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<p>Unfortunately, adding &quot;-mca pls_rsh_num_concurrent 50&quot; to
<br>
<span class="quotelev1">&gt; mpirun
</span><br>
<span class="quotelev1">&gt; (with just -np and -hostfile) has no effect. The number of
</span><br>
<span class="quotelev1">&gt; established
</span><br>
<span class="quotelev1">&gt; connections for slapd grows to the same number at the same rate
</span><br>
<span class="quotelev1">&gt; as without it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>BTW, I upgraded from 1.2b2 to
<br>
<span class="quotelev1">&gt; 1.2b3
</span><br>
<p>Thanks,
<br>
<p>TOdd
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
<span class="quotelev1">&gt; Ralph Castain
</span><br>
Sent: Tuesday,
<br>
<span class="quotelev1">&gt; February 06, 2007 6:48 PM
</span><br>
To: Open MPI
<br>
<span class="quotelev1">&gt; Users
</span><br>
Subject: Re: [OMPI users] large
<br>
<span class="quotelev1">&gt; jobs hang on startup (deadlock?)
</span><br>
<p>Hi
<br>
<span class="quotelev1">&gt; Todd
</span><br>
<p>Just as a thought - you could try
<br>
<span class="quotelev1">&gt; not using --debug-daemons or -d
</span><br>
<span class="quotelev1">&gt; and
</span><br>
instead setting &quot;-mca
<br>
<span class="quotelev1">&gt; pls_rsh_num_concurrent 50&quot; or some such small
</span><br>
<span class="quotelev1">&gt; number.
</span><br>
This will tell the
<br>
<span class="quotelev1">&gt; system to launch 50 ssh calls at a time, waiting
</span><br>
<span class="quotelev1">&gt; for each
</span><br>
group to complete
<br>
<span class="quotelev1">&gt; before launching the next. You can't use it
</span><br>
<span class="quotelev1">&gt; with
</span><br>
--debug-daemons as that
<br>
<span class="quotelev1">&gt; option prevents the ssh calls from &quot;closing&quot; so
</span><br>
<span class="quotelev1">&gt; that
</span><br>
you can get the output
<br>
<span class="quotelev1">&gt; from the daemons. You can still launch as big a
</span><br>
<span class="quotelev1">&gt; job
</span><br>
as you like - we'll just
<br>
<span class="quotelev1">&gt; do it 50 ssh calls at a time.
</span><br>
<p>If we are truly
<br>
<span class="quotelev1">&gt; overwhelming the slapd, then
</span><br>
<span class="quotelev1">&gt; this should alleviate the
</span><br>
problem.
<br>
<p>Let me know
<br>
<span class="quotelev1">&gt; if you get to try
</span><br>
<span class="quotelev1">&gt; it...
</span><br>
Ralph
<br>
<p><p>On 2/6/07 4:05 PM, &quot;Heywood, Todd&quot;
<br>
<span class="quotelev1">&gt; &lt;heywood_at_[hidden]&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<p>It looks that way. I created a user
<br>
<span class="quotelev1">&gt; local to each node, with
</span><br>
<span class="quotelev1">&gt; local
</span><br>
<span class="quotelev1">&gt; authentication via /etc/passwd and
</span><br>
<span class="quotelev1">&gt; /etc/shadow, and OpenMPI scales up
</span><br>
<span class="quotelev1">&gt; just
</span><br>
<span class="quotelev1">&gt; fine for that.
</span><br>
<p>I know this is an
<br>
<span class="quotelev1">&gt; OpenMPI list, but does anyone know
</span><br>
<span class="quotelev1">&gt; how
</span><br>
<span class="quotelev1">&gt; common or uncommon LDAP-based
</span><br>
<span class="quotelev1">&gt; clusters are? I would have thought this
</span><br>
<span class="quotelev1">&gt; issue
</span><br>
<span class="quotelev1">&gt; would have arisen elsewhere,
</span><br>
<span class="quotelev1">&gt; but Googling MPI+LDAP (and similar)
</span><br>
<span class="quotelev1">&gt; doesn't turn
</span><br>
<span class="quotelev1">&gt; up much.
</span><br>
<p>I'd certainly
<br>
<span class="quotelev1">&gt; be willing to test any patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<p>Todd
<br>
<p>-----Original
<br>
<span class="quotelev1">&gt; Message-----
</span><br>
From: users-bounces_at_[hidden]
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph H Castain
</span><br>
Sent:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tuesday, February 06, 2007 9:54 AM
</span><br>
To: Open MPI Users
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;users_at_[hidden]&gt;
</span><br>
Subject: Re: [OMPI users] large jobs hang on startup
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (deadlock?)
</span><br>
<p>It sounds to me like we are probably overwhelming your slapd
<br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; your test
</span><br>
would seem to indicate that slowing down the slapd makes us
<br>
<span class="quotelev1">&gt; fail
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; even with
</span><br>
smaller jobs, which tends to support that idea.
<br>
<p>We
<br>
<span class="quotelev1">&gt; frankly
</span><br>
<span class="quotelev1">&gt; haven't
</span><br>
<span class="quotelev1">&gt; encountered that before since our rsh tests have all
</span><br>
<span class="quotelev1">&gt; been
</span><br>
done using
<br>
<span class="quotelev1">&gt; non-LDAP
</span><br>
<span class="quotelev1">&gt; authentication (basically, we ask that you setup
</span><br>
<span class="quotelev1">&gt; rsh
</span><br>
<span class="quotelev1">&gt; to
</span><br>
auto-authenticate on
<br>
<span class="quotelev1">&gt; each node). It sounds like we need to add an
</span><br>
<span class="quotelev1">&gt; ability
</span><br>
<span class="quotelev1">&gt; to
</span><br>
slow down so that the
<br>
<span class="quotelev1">&gt; daemon doesn't &quot;fail&quot; due to
</span><br>
<span class="quotelev1">&gt; authentication
</span><br>
<span class="quotelev1">&gt; timeout
</span><br>
and/or slapd rejection due
<br>
<span class="quotelev1">&gt; to the queue being
</span><br>
<span class="quotelev1">&gt; full.
</span><br>
<p>This may take a
<br>
<span class="quotelev1">&gt; little time to fix due to other
</span><br>
<span class="quotelev1">&gt; priorities, and
</span><br>
<span class="quotelev1">&gt; will almost
</span><br>
certainly have
<br>
<span class="quotelev1">&gt; to be released in a subsequent
</span><br>
<span class="quotelev1">&gt; 1.2.x version.
</span><br>
<span class="quotelev1">&gt; Meantime, I'll
</span><br>
let you know
<br>
<span class="quotelev1">&gt; when I get something to test -
</span><br>
<span class="quotelev1">&gt; would you be
</span><br>
<span class="quotelev1">&gt; willing to give it
</span><br>
a shot if I
<br>
<span class="quotelev1">&gt; provide a patch? I don't have
</span><br>
<span class="quotelev1">&gt; access to an
</span><br>
<span class="quotelev1">&gt; LDAP-based system.
</span><br>
<p>Ralph
<br>
<p><p>On
<br>
<span class="quotelev1">&gt; 2/6/07 7:44 AM, &quot;Heywood, Todd&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;heywood_at_[hidden]&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<p>Thanks for the reply. This is a
<br>
<span class="quotelev1">&gt; tough
</span><br>
<span class="quotelev1">&gt; one. It is OpenLDAP. I had
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thought that I might be hitting a file
</span><br>
<span class="quotelev1">&gt; descriptor
</span><br>
<span class="quotelev1">&gt; limit for slapd (LDAP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; daemon), which ulimit -n does not
</span><br>
<span class="quotelev1">&gt; effect (you have to
</span><br>
<span class="quotelev1">&gt; rebuild LDAP with a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; different FD_SETSIZE variable).
</span><br>
<span class="quotelev1">&gt; However, I simply turned
</span><br>
<span class="quotelev1">&gt; on more
</span><br>
<span class="quotelev1">&gt; expressive
</span><br>
<span class="quotelev1">&gt; logging to /var/log/slapd,
</span><br>
<span class="quotelev1">&gt; and that resulted in smaller
</span><br>
<span class="quotelev1">&gt; jobs
</span><br>
<span class="quotelev1">&gt; (which
</span><br>
<span class="quotelev1">&gt; successfully ran before)
</span><br>
<span class="quotelev1">&gt; hanging. Go figure. It appears that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; daemons are up
</span><br>
<span class="quotelev1">&gt; and running (from
</span><br>
<span class="quotelev1">&gt; ps), and everything hangs in MPI_Init.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ctl-C
</span><br>
<span class="quotelev1">&gt; gives
</span><br>
<p>[blade1:04524]
<br>
<span class="quotelev1">&gt; ERROR: A daemon on node blade26 failed to
</span><br>
<span class="quotelev1">&gt; start
</span><br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
[blade1:04524] ERROR: There may be more information
<br>
<span class="quotelev1">&gt; available
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from
</span><br>
[blade1:04524] ERROR: the remote shell (see
<br>
<span class="quotelev1">&gt; above).
</span><br>
[blade1:04524]
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR:
</span><br>
<span class="quotelev1">&gt; The daemon exited unexpectedly with status
</span><br>
<span class="quotelev1">&gt; 255.
</span><br>
<p>I'm interested
<br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; any
</span><br>
<span class="quotelev1">&gt; suggestion, semi-fixes, etc. which might help
</span><br>
<span class="quotelev1">&gt; get to the bottom
</span><br>
<span class="quotelev1">&gt; of this.
</span><br>
<span class="quotelev1">&gt; Right
</span><br>
<span class="quotelev1">&gt; now: whether the daemons are indeed up
</span><br>
<span class="quotelev1">&gt; and running, or if
</span><br>
<span class="quotelev1">&gt; there are
</span><br>
<span class="quotelev1">&gt; some that
</span><br>
<span class="quotelev1">&gt; are not (causing MPI_Init to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of
</span><br>
<span class="quotelev1">&gt; Ralph H Castain
</span><br>
Sent:
<br>
<span class="quotelev1">&gt; Tuesday, February 06, 2007 8:52 AM
</span><br>
To: Open
<br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Users
</span><br>
<span class="quotelev1">&gt; &lt;users_at_[hidden]&gt;
</span><br>
Subject: Re: [OMPI users] large jobs hang
<br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; startup
</span><br>
<span class="quotelev1">&gt; (deadlock?)
</span><br>
<p>Well, I can't say for sure about LDAP. I did a
<br>
<span class="quotelev1">&gt; quick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; search and
</span><br>
<span class="quotelev1">&gt; found two
</span><br>
things:
<br>
<p>1. there are limits imposed in LDAP
<br>
<span class="quotelev1">&gt; that may
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; apply to your
</span><br>
<span class="quotelev1">&gt; situation, and
</span><br>
<p>2. that statement varies
<br>
<span class="quotelev1">&gt; tremendously
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; depending upon the
</span><br>
<span class="quotelev1">&gt; specific LDAP
</span><br>
implementation you are
<br>
<span class="quotelev1">&gt; using
</span><br>
<p>I would
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; suggest you see which LDAP
</span><br>
<span class="quotelev1">&gt; you are using and contact
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; respective
</span><br>
organization to ask if they do have
<br>
<span class="quotelev1">&gt; such a limit, and if
</span><br>
<span class="quotelev1">&gt; so,
</span><br>
<span class="quotelev1">&gt; how
</span><br>
<span class="quotelev1">&gt; to adjust
</span><br>
it.
<br>
<p>It sounds like maybe we are
<br>
<span class="quotelev1">&gt; hitting the LDAP
</span><br>
<span class="quotelev1">&gt; server
</span><br>
<span class="quotelev1">&gt; with too
</span><br>
<span class="quotelev1">&gt; many requests
</span><br>
too rapidly. Usually, the issue
<br>
<span class="quotelev1">&gt; is not
</span><br>
<span class="quotelev1">&gt; starting
</span><br>
<span class="quotelev1">&gt; fast enough,
</span><br>
<span class="quotelev1">&gt; so this is a
</span><br>
new one! We don't currently check to
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; see if
</span><br>
<span class="quotelev1">&gt; everything started
</span><br>
<span class="quotelev1">&gt; up okay, so
</span><br>
that is why the processes might hang
<br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; we
</span><br>
<span class="quotelev1">&gt; hope to fix that soon.
</span><br>
<span class="quotelev1">&gt; I'll have
</span><br>
to see if there is something we
<br>
<span class="quotelev1">&gt; can do to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; help alleviate such
</span><br>
<span class="quotelev1">&gt; problems -
</span><br>
might not be in time for the
<br>
<span class="quotelev1">&gt; 1.2 release,
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt; perhaps it will
</span><br>
<span class="quotelev1">&gt; make a
</span><br>
subsequent &quot;fix&quot; or, if you
<br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt; willing/interested, I
</span><br>
<span class="quotelev1">&gt; could provide
</span><br>
<span class="quotelev1">&gt; it to
</span><br>
you as a &quot;patch&quot; you could
<br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev1">&gt; until a later official
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; release.
</span><br>
<p>Meantime, you might try upgrading
<br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; 1.2b3 or even a nightly
</span><br>
<span class="quotelev1">&gt; release
</span><br>
<span class="quotelev1">&gt; from
</span><br>
the trunk. There are known
<br>
<span class="quotelev1">&gt; problems
</span><br>
<span class="quotelev1">&gt; with 1.2b2 (which is why
</span><br>
<span class="quotelev1">&gt; there is a
</span><br>
<span class="quotelev1">&gt; b3
</span><br>
and soon to be an rc1),
<br>
<span class="quotelev1">&gt; though I
</span><br>
<span class="quotelev1">&gt; don't think that will be the
</span><br>
<span class="quotelev1">&gt; problem
</span><br>
<span class="quotelev1">&gt; here.
</span><br>
At the least, the
<br>
<span class="quotelev1">&gt; nightly trunk
</span><br>
<span class="quotelev1">&gt; has a much better response to
</span><br>
<span class="quotelev1">&gt; ctrl-c in
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<p>Ralph
<br>
<p><p>On
<br>
<span class="quotelev1">&gt; 2/5/07 9:50 AM,
</span><br>
<span class="quotelev1">&gt; &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for
</span><br>
<span class="quotelev1">&gt; the reply. The OpenMPI version is 1.2b2
</span><br>
<span class="quotelev1">&gt; (because I
</span><br>
<span class="quotelev1">&gt; would
</span><br>
<span class="quotelev1">&gt; like to
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1)
</span><br>
<span class="quotelev1">&gt; When I run with &#194;&#173;debug-daemons (but WITHOUT &#194;&#173;d), I
</span><br>
<span class="quotelev1">&gt; get &#194;&#179;Daemon&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,0,27]
</span><br>
<span class="quotelev1">&gt; checking in as pid 7620 on host blade28&#194;&#178; (for example)
</span><br>
<span class="quotelev1">&gt; messages
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; most
</span><br>
<span class="quotelev1">&gt; but not all of the daemons that should be started up,
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; then it
</span><br>
<span class="quotelev1">&gt; hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also notice &#194;&#179;reconnecting to LDAP server&#194;&#178; messages in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; various
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /var/log/secure files, and cannot login while things are hung
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (with &#194;&#179;su:&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pam_ldap: ldap_result Can't contact LDAP server&#194;&#178; in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /var/log/messages).
</span><br>
<span class="quotelev1">&gt; So
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; apparently LDAP hits some limit to opening ssh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sessions, and I&#194;&#185;m not
</span><br>
<span class="quotelev1">&gt; sure
</span><br>
<span class="quotelev1">&gt; how
</span><br>
<span class="quotelev1">&gt; to address this.
</span><br>
<span class="quotelev1">&gt; (2)     When I run
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; &#194;&#173;debug-daemons AND
</span><br>
<span class="quotelev1">&gt; the debug
</span><br>
<span class="quotelev1">&gt; option &#194;&#173;d, all daemons
</span><br>
<span class="quotelev1">&gt; start start
</span><br>
<span class="quotelev1">&gt; up and
</span><br>
<span class="quotelev1">&gt; check-in, albeit
</span><br>
<span class="quotelev1">&gt; slowly (debug
</span><br>
<span class="quotelev1">&gt; must slow things down so
</span><br>
<span class="quotelev1">&gt; LDAP
</span><br>
<span class="quotelev1">&gt; can handle
</span><br>
<span class="quotelev1">&gt; all the
</span><br>
<span class="quotelev1">&gt; requests??). Then
</span><br>
<span class="quotelev1">&gt; apparently, the cpi process is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; started for each
</span><br>
<span class="quotelev1">&gt; task
</span><br>
<span class="quotelev1">&gt; but it then hangs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [blade1:23816] spawn: in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; job_state_callback(jobid
</span><br>
<span class="quotelev1">&gt; = 1, state = 0x4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [blade1:23816] Info: Setting
</span><br>
<span class="quotelev1">&gt; up
</span><br>
<span class="quotelev1">&gt; debugger process table
</span><br>
<span class="quotelev1">&gt; for applications
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPIR_debug_gate = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPIR_acquired_pre_main =
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPIR_i_am_starter =
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable_size =
</span><br>
<span class="quotelev1">&gt; 800
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (i, host, exe, pid) =
</span><br>
<span class="quotelev1">&gt; (0, blade1,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home4/itstaff/heywood/ompi/cpi, 24193)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#197;&#160;
</span><br>
<span class="quotelev1">&gt; &#197;&#160;(i, host, exe,
</span><br>
<span class="quotelev1">&gt; pid) =
</span><br>
<span class="quotelev1">&gt; (799,
</span><br>
<span class="quotelev1">&gt; blade213, /home4/itstaff/heywood/ompi/cpi,
</span><br>
<span class="quotelev1">&gt; 4762)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; A &#194;&#179;ps&#194;&#178;
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev1">&gt; the head node
</span><br>
<span class="quotelev1">&gt; shows 200 open ssh sessions, and 4 cpi
</span><br>
<span class="quotelev1">&gt; processes doing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Still got a ways to go, but any ideas/suggestions are
</span><br>
<span class="quotelev1">&gt; welcome!
</span><br>
<span class="quotelev1">&gt;  
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
<span class="quotelev1">&gt; From:
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf
</span><br>
<span class="quotelev1">&gt; Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Friday, February 02, 2007 5:20 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re:
</span><br>
<span class="quotelev1">&gt; [OMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users] large jobs hang on
</span><br>
<span class="quotelev1">&gt; startup (deadlock?)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hi Todd
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; help us
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; provide advice, could
</span><br>
<span class="quotelev1">&gt; you tell us what version of OpenMPI you
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt; using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meantime, try
</span><br>
<span class="quotelev1">&gt; adding &#194;&#179;-mca pls_rsh_num_concurrent 200&#194;&#178;
</span><br>
<span class="quotelev1">&gt; to your mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; command
</span><br>
<span class="quotelev1">&gt; line.
</span><br>
<span class="quotelev1">&gt; You can up the number of concurrent daemons
</span><br>
<span class="quotelev1">&gt; we launch to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; anything your
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; system will support &#194;&#173; basically, we limit the
</span><br>
<span class="quotelev1">&gt; number only
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; because some
</span><br>
<span class="quotelev1">&gt; systems
</span><br>
<span class="quotelev1">&gt; have limits on the number of ssh calls
</span><br>
<span class="quotelev1">&gt; we can have
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; active at
</span><br>
<span class="quotelev1">&gt; any one time.
</span><br>
<span class="quotelev1">&gt; Because we hold stdio open when
</span><br>
<span class="quotelev1">&gt; running with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#185;debug-daemons, the number of
</span><br>
<span class="quotelev1">&gt; concurrent daemons must match
</span><br>
<span class="quotelev1">&gt; or exceed
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; number of nodes you are trying to
</span><br>
<span class="quotelev1">&gt; launch on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a
</span><br>
<span class="quotelev1">&gt; &#194;&#179;fix&#194;&#178;
</span><br>
<span class="quotelev1">&gt; in the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; works that will help relieve some of that restriction,
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; won&#194;&#185;t come
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; out until a later release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hopefully, that will allow
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you to obtain
</span><br>
<span class="quotelev1">&gt; more
</span><br>
<span class="quotelev1">&gt; debug info about why/where
</span><br>
<span class="quotelev1">&gt; things are hanging.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; 11:41 AM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I have OpenMPI
</span><br>
<span class="quotelev1">&gt; running
</span><br>
<span class="quotelev1">&gt; fine for a small/medium number of tasks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (simple hello
</span><br>
<span class="quotelev1">&gt; or cpi
</span><br>
<span class="quotelev1">&gt; program). But
</span><br>
<span class="quotelev1">&gt; when I try 700 or 800 tasks, it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hangs, apparently on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; startup. I think this
</span><br>
<span class="quotelev1">&gt; might be related to LDAP,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; since if I try to log into
</span><br>
<span class="quotelev1">&gt; my
</span><br>
<span class="quotelev1">&gt; account while the
</span><br>
<span class="quotelev1">&gt; job is hung, I get
</span><br>
<span class="quotelev1">&gt; told
</span><br>
<span class="quotelev1">&gt; my username doesn&#194;&#185;t exist.
</span><br>
<span class="quotelev1">&gt; However,
</span><br>
<span class="quotelev1">&gt; I tried adding
</span><br>
<span class="quotelev1">&gt; &#194;&#173;debug to the
</span><br>
<span class="quotelev1">&gt; mpirun,
</span><br>
<span class="quotelev1">&gt; and got the same sequence of
</span><br>
<span class="quotelev1">&gt; output as
</span><br>
<span class="quotelev1">&gt; for successful
</span><br>
<span class="quotelev1">&gt; smaller
</span><br>
<span class="quotelev1">&gt; runs,
</span><br>
<span class="quotelev1">&gt; until it hung again. So I added
</span><br>
<span class="quotelev1">&gt; &#194;&#173;-debug-daemons
</span><br>
<span class="quotelev1">&gt; and got this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (with an
</span><br>
<span class="quotelev1">&gt; exit, i.e. no hanging):
</span><br>
<span class="quotelev1">&gt; &#197;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [blade1:31733] [0,0,0] wrote
</span><br>
<span class="quotelev1">&gt; setup
</span><br>
<span class="quotelev1">&gt; file
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
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The rsh launcher has been given a number of 128 concurrent daemons
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; launch
</span><br>
<span class="quotelev1">&gt; and is in a debug-daemons option. However, the total number
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; daemons to
</span><br>
<span class="quotelev1">&gt; launch (200) is greater than this value. This is a
</span><br>
<span class="quotelev1">&gt; scenario
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; will cause
</span><br>
<span class="quotelev1">&gt; the system to deadlock.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; To avoid
</span><br>
<span class="quotelev1">&gt; deadlock, either
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; increase the number of
</span><br>
<span class="quotelev1">&gt; concurrent daemons, or
</span><br>
<span class="quotelev1">&gt; remove
</span><br>
<span class="quotelev1">&gt; the debug-daemons
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; flag.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/rmgr/urm/
</span><br>
<span class="quotelev1">&gt; rmgr_urm.c at line 455
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [blade1:31733]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun: spawn failed with errno=-6
</span><br>
<span class="quotelev1">&gt; [blade1:31733]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sess_dir_finalize: proc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Any ideas
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; suggestions
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________
</span><br>
users mailing
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _____________________________________________
</span><br>
users mailing
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; list
</span><br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
users mailing
<br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _____________________________________________
</span><br>
users mailing
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; list
</span><br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="2636.php">Nader Ahmadi: "[OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
<li><strong>Previous message:</strong> <a href="2634.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>In reply to:</strong> <a href="2634.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2664.php">Jeff Squyres: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
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
