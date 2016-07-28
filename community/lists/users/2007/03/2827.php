<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Mar 18 20:34:22 2007" -->
<!-- isoreceived="20070319003422" -->
<!-- sent="Sun, 18 Mar 2007 19:34:16 -0500" -->
<!-- isosent="20070319003416" -->
<!-- name="David Bronke" -->
<!-- email="whitelynx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Signal 13" -->
<!-- id="d0b79b10703181734g439eca3cncb6a0c2d0123af2e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C2230B12.20AE%rhc_at_lanl.gov" -->
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
<strong>From:</strong> David Bronke (<em>whitelynx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-18 20:34:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2828.php">Mohammad Huwaidi: "Re: [OMPI users] users Digest, Vol 531, Issue 3"</a>
<li><strong>Previous message:</strong> <a href="2826.php">Ralph Castain: "Re: [OMPI users] Signal 13"</a>
<li><strong>In reply to:</strong> <a href="2826.php">Ralph Castain: "Re: [OMPI users] Signal 13"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2853.php">Jeff Squyres: "Re: [OMPI users] Signal 13"</a>
<li><strong>Reply:</strong> <a href="2853.php">Jeff Squyres: "Re: [OMPI users] Signal 13"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's great to hear! For now we'll just create local users for those
<br>
who need access to MPI on this system, but I'll keep an eye on the
<br>
list for when you do get a chance to finish that fix. Thanks again!
<br>
<p>On 3/18/07, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Excellent! Yes, we use pipe in several places, including in the run-time
</span><br>
<span class="quotelev1">&gt; during various stages of launch, so that could be a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, be aware that other users have reported problems on LDAP-based systems
</span><br>
<span class="quotelev1">&gt; when attempting to launch large jobs. The problem is that the OpenMPI launch
</span><br>
<span class="quotelev1">&gt; system has no rate control in it - and the LDAP's slapd servers get
</span><br>
<span class="quotelev1">&gt; overwhelmed by the launch when we ssh on a large number of nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I promised another user to concoct a fix for this problem, but am taking a
</span><br>
<span class="quotelev1">&gt; break from the project for a few months so it may be a little while before a
</span><br>
<span class="quotelev1">&gt; fix is available. When I do get it done, it may or may not make it into an
</span><br>
<span class="quotelev1">&gt; OpenMPI release for some time - I'm not sure how they will decide to
</span><br>
<span class="quotelev1">&gt; schedule the change (is it a &quot;bug&quot;, or a new &quot;feature&quot;?). So I may do an
</span><br>
<span class="quotelev1">&gt; interim release as a patch on the OpenRTE site (since that is the run-time
</span><br>
<span class="quotelev1">&gt; underneath OpenMPI). I'll let people know via this mailing list either way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/18/07 2:06 PM, &quot;David Bronke&quot; &lt;whitelynx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I just received an email from a friend who is helping me work on
</span><br>
<span class="quotelev2">&gt; &gt; resolving this; he was able to trace the problem back to a pipe() call
</span><br>
<span class="quotelev2">&gt; &gt; in OpenMPI apparently:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The problem is with the pipe() system call (which is invoked by the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Send() as far as I can tell) by a LDAP authenticated user.  Still
</span><br>
<span class="quotelev3">&gt; &gt;&gt; working out where exactly that goes wrong, but the fact is that it isn't
</span><br>
<span class="quotelev3">&gt; &gt;&gt; actually a permissions problem - the reason it works as root is because
</span><br>
<span class="quotelev3">&gt; &gt;&gt; root is a local user and does /etc/passwd normal authentication.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I had forgotten to mention that we use LDAP for authentication on this
</span><br>
<span class="quotelev2">&gt; &gt; machine; PAM and NSS are set up to use it, but I'm guessing that
</span><br>
<span class="quotelev2">&gt; &gt; either OpenMPI itself or the pipe() system call won't check with them
</span><br>
<span class="quotelev2">&gt; &gt; when needed... We have made some local users on the machine to get
</span><br>
<span class="quotelev2">&gt; &gt; things going, but I'll probably have to find an LDAP mailing list to
</span><br>
<span class="quotelev2">&gt; &gt; get this issue resolved.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for all the help so far!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 3/16/07, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm afraid I have zero knowledge or experience with gentoo portage, so I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; can't help you there. I always install our releases from the tarball source
</span><br>
<span class="quotelev3">&gt; &gt;&gt; as it is pretty trivial to do and avoids any issues.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I will have to defer to someone who knows that system to help you from here.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It sounds like an installation or configuration issue.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 3/16/07 3:15 PM, &quot;David Bronke&quot; &lt;whitelynx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On 3/15/07, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hmmm...well, a few thoughts to hopefully help with the debugging. One
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; initial comment, though - 1.1.2 is quite old. You might want to upgrade to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1.2 (releasing momentarily - you can use the last release candidate in the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; interim as it is identical).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Version 1.2 doesn't seem to be in gentoo portage yet, so I may end up
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; having to compile from source... I generally prefer to do everything
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; from portage if possible, because it makes upgrades and maintenance
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; much cleaner.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Meantime, looking at this output, there appear to be a couple of common
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; possibilities. First, I don't see any of the diagnostic output from after
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; we
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; do a local fork (we do this prior to actually launching the daemon). Is it
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; possible your system doesn't allow you to fork processes (some don't,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; though
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; it's unusual)?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I don't see any problems with forking on this system... I'm able to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; start a dbus daemon as a regular user without any problems.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Second, it could be that the &quot;orted&quot; program isn't being found in your
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; path.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; People often forget that the path in shells started up by programs isn't
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; necessarily the same as that in their login shell. You might try executing
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; simple shellscript that outputs the results of &quot;which orted&quot; to verify this
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; is correct.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 'which orted' from a shell script gives me '/usr/bin/orted', which
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; seems to be correct.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; BTW, I should have asked as well: what are you running this on, and how did
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; you configure openmpi?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm running this on two identical machines with 2 dual-core
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hyperthreading Xeon processors. (EM64T) I simply installed OpenMPI
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; using portage, with the USE flags &quot;debug fortran pbs -threads&quot;. (I've
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; also tried it with &quot;-debug fortran pbs threads&quot;)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On 3/15/07 5:33 PM, &quot;David Bronke&quot; &lt;whitelynx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I'm using OpenMPI version 1.1.2. I installed it using gentoo portage,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; so I think it has the right permissions... I tried doing 'equery f
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; openmpi | xargs ls -dl' and inspecting the permissions of each file,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; and I don't see much out of the ordinary; it is all owned by
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; root:root, but every file has read permission for user, group, and
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; other. (and execute for each as well when appropriate) From the debug
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; output, I can tell that mpirun is creating the session tree in /tmp,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; and it does seem to be working fine... Here's the output when using
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --debug-daemons:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; $ mpirun -aborted 8 -v -d --debug-daemons -np 8
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /workspace/bronke/mpi/hello
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228]  universe default-universe
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228]  user bronke
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228]  host trixie
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228]  jobid 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228]  procid 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] procdir:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-bronke_at_trixie_0/default-universe/0/0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] jobdir:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-bronke_at_trixie_0/default-universe/0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] unidir:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-bronke_at_trixie_0/default-universe
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] top: openmpi-sessions-bronke_at_trixie_0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] [0,0,0] contact_file
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-bronke_at_trixie_0/default-universe/universe-setup.txt
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] [0,0,0] wrote setup file
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] pls:rsh: final template argv:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --debug-daemons --bootproxy 1 --name &lt;template&gt; --num_procs 2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --vpid_start 0 --nodename &lt;template&gt; --universe
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; bronke_at_trixie:default-universe --nsreplica
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://141.238.31.33:43838&quot; --gprreplica
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://141.238.31.33:43838&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] spawn: in job_state_callback(jobid = 1, state = 0x100)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 0 on node &quot;localhost&quot; exited
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; on signal 13.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] spawn: in job_state_callback(jobid = 1, state = 0x80)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 0 on node &quot;localhost&quot; exited
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; on signal 13.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpirun noticed that job rank 1 with PID 0 on node &quot;localhost&quot; exited
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; on signal 13.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpirun noticed that job rank 2 with PID 0 on node &quot;localhost&quot; exited
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; on signal 13.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpirun noticed that job rank 3 with PID 0 on node &quot;localhost&quot; exited
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; on signal 13.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpirun noticed that job rank 4 with PID 0 on node &quot;localhost&quot; exited
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; on signal 13.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpirun noticed that job rank 5 with PID 0 on node &quot;localhost&quot; exited
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; on signal 13.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpirun noticed that job rank 6 with PID 0 on node &quot;localhost&quot; exited
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; on signal 13.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] ERROR: A daemon on node localhost failed to start as
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; expected.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] The daemon received a signal 13.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] sess_dir_finalize: found proc session dir empty - deleting
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] sess_dir_finalize: found job session dir empty - deleting
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] sess_dir_finalize: found univ session dir empty - deleting
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [trixie:25228] sess_dir_finalize: found top session dir empty - deleting
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On 3/15/07, Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; It isn't a /dev issue. The problem is likely that the system lacks
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; sufficient permissions to either:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 1. create the Open MPI session directory tree. We create a hierarchy of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; subdirectories for temporary storage used for things like your shared
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; memory
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; file - the location of the head of that tree can be specified at run
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; time,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; but has a series of built-in defaults it can search if you don't specify
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; (we look at your environmental variables - e.g., TMP or TMPDIR - as well
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; as
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; the typical Linux/Unix places). You might check to see what your tmp
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; directory is, and that you have write permission into it. Alternatively,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; you
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; can specify your own location (where you know you have permissions!) by
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; setting --tmpdir your-dir on the mpirun command line.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 2. execute or access the various binaries and/or libraries. This is
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; usually
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; caused when someone installs OpenMPI as root, and then tries to execute
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; as
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; non-root user. Best thing here is to either run through the installation
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; directory and add the correct permissions (assuming it is a system-level
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; install), or reinstall as the non-root user (if the install is solely for
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; you anyway).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; You can also set --debug-daemons on the mpirun command line to get more
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; diagnostic output from the daemons and then send that along.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; BTW: if possible, it helps us to advise you if we know which version of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; OpenMPI you are using. ;-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Hope that helps.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On 3/15/07 1:51 PM, &quot;David Bronke&quot; &lt;whitelynx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Ok, now that I've figured out what the signal means, I'm wondering
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; exactly what is running into permission problems... the program I'm
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; running doesn't use any functions except printf, sprintf, and MPI_*...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I was thinking that possibly changes to permissions on certain /dev
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; entries in newer distros might cause this, but I'm not even sure what
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; /dev entries would be used by MPI.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On 3/15/07, McCalla, Mac &lt;macmccalla_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         If the perror command is available on your system it will tell
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; you what the message is associated with the signal value.  On my system
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; RHEL4U3, it is permission denied.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; HTH,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mac mccalla
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Behalf Of David Bronke
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sent: Thursday, March 15, 2007 12:25 PM
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: [OMPI users] Signal 13
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've been trying to get OpenMPI working on two of the computers at a
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; lab
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I help administer, and I'm running into a rather large issue. When
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; running anything using mpirun as a normal user, I get the following
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; output:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ mpirun --no-daemonize --host
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; localhost,localhost,localhost,localhost,localhost,localhost,localhost,l&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; o
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; calhost
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /workspace/bronke/mpi/hello
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 0 on node &quot;localhost&quot; exited on
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; signal 13.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [trixie:18104] ERROR: A daemon on node localhost failed to start as
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; expected.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [trixie:18104] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [trixie:18104] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [trixie:18104] The daemon received a signal 13.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 8 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, running the same exact command line as root works fine:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ sudo mpirun --no-daemonize --host
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; localhost,localhost,localhost,localhost,localhost,localhost,localhost,l&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; o
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; calhost
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /workspace/bronke/mpi/hello
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Password:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; p is 8, my_rank is 0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; p is 8, my_rank is 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; p is 8, my_rank is 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; p is 8, my_rank is 3
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; p is 8, my_rank is 6
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; p is 8, my_rank is 7
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Greetings from process 1!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Greetings from process 2!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Greetings from process 3!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; p is 8, my_rank is 5
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; p is 8, my_rank is 4
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Greetings from process 4!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Greetings from process 5!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Greetings from process 6!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Greetings from process 7!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've looked up signal 13, and have found that it is apparently SIGPIPE;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I also found a thread on the LAM-MPI site:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.lam-mpi.org/MailArchives/lam/2004/08/8486.php">http://www.lam-mpi.org/MailArchives/lam/2004/08/8486.php</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, this thread seems to indicate that the problem would be in the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; application, (/workspace/bronke/mpi/hello in this case) but there are
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; no
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pipes in use in this app, and the fact that it works as expected as
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; root
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; doesn't seem to fit either. I have tried running mpirun with --verbose
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and it doesn't show any more output than without it, so I've run into a
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sort of dead-end on this issue. Does anyone know of any way I can
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; figure
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; out what's going wrong or how I can fix it?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; David H. Bronke
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Lead Programmer
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; G33X Nexus Entertainment
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://games.g33xnexus.com/precursors/">http://games.g33xnexus.com/precursors/</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; v3sw5/7Hhw5/6ln4pr6Ock3ma7u7+8Lw3/7Tm3l6+7Gi2e4t4Mb7Hen5g8+9ORPa22s6MSr&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 7
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; p6
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hackerkey.com
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Support Web Standards! <a href="http://www.webstandards.org/">http://www.webstandards.org/</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><p><pre>
-- 
David H. Bronke
Lead Programmer
G33X Nexus Entertainment
<a href="http://games.g33xnexus.com/precursors/">http://games.g33xnexus.com/precursors/</a>
v3sw5/7Hhw5/6ln4pr6Ock3ma7u7+8Lw3/7Tm3l6+7Gi2e4t4Mb7Hen5g8+9ORPa22s6MSr7p6
hackerkey.com
Support Web Standards! <a href="http://www.webstandards.org/">http://www.webstandards.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2828.php">Mohammad Huwaidi: "Re: [OMPI users] users Digest, Vol 531, Issue 3"</a>
<li><strong>Previous message:</strong> <a href="2826.php">Ralph Castain: "Re: [OMPI users] Signal 13"</a>
<li><strong>In reply to:</strong> <a href="2826.php">Ralph Castain: "Re: [OMPI users] Signal 13"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2853.php">Jeff Squyres: "Re: [OMPI users] Signal 13"</a>
<li><strong>Reply:</strong> <a href="2853.php">Jeff Squyres: "Re: [OMPI users] Signal 13"</a>
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
