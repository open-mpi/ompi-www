<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  6 16:28:59 2012" -->
<!-- isoreceived="20120206212859" -->
<!-- sent="Mon, 06 Feb 2012 16:28:51 -0500" -->
<!-- isosent="20120206212851" -->
<!-- name="Tom Bryan" -->
<!-- email="tombry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="CB55B043.12A7C%tombry_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A2CEACAA-D05F-4C36-A5AF-E91E7AF08D56_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine<br>
<strong>From:</strong> Tom Bryan (<em>tombry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-06 16:28:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18407.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18405.php">Richard Walsh: "Re: [OMPI users] IO performance"</a>
<li><strong>In reply to:</strong> <a href="18401.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18407.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18407.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/6/12 8:14 AM, &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; If I need MPI_THREAD_MULTIPLE, and openmpi is compiled with thread support,
</span><br>
<span class="quotelev2">&gt;&gt; it's not clear to me whether MPI::Init_Thread() and
</span><br>
<span class="quotelev2">&gt;&gt; MPI::Inint_Thread(MPI::THREAD_MULTIPLE) would give me the same behavior from
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you need thread support, you will need MPI::Init_Thread and it needs one
</span><br>
<span class="quotelev1">&gt; argument (or three).
</span><br>
<p>Sorry, typo on my side.  I meant to compare
<br>
MPI::Init_thread(MPI::THREAD_MULTIPLE) and MPI::Init().  I think that your
<br>
first reply mentioned replacing MPI::Init_thread by MPI::Init.
<br>
<p><span class="quotelev1">&gt; I suggest to use a stable version 1.4.4 for your experiments. As you said you
</span><br>
<span class="quotelev1">&gt; are new MPI, you could get misled between wrong error messages and bugs and
</span><br>
<span class="quotelev1">&gt; error messages due to a programming error on your side.
</span><br>
<p>OK.  I'll certainly set it up so that I can validate what's supposed to
<br>
work.  I'll have to check with our main MPI developers to see whether
<br>
there's anything in 1.5.x that they need.
<br>
<p><span class="quotelev2">&gt;&gt; 1. I'm still surprised that the SGE behavior is so different when I
</span><br>
<span class="quotelev2">&gt;&gt; configure my SGE queue differently.  See test &quot;a&quot; in the .tgz.  When I just
</span><br>
<span class="quotelev2">&gt;&gt; run mpitest in mpi.sh and ask for exactly 5 slots (-pe orte 5-5), it works
</span><br>
<span class="quotelev2">&gt;&gt; if the queue is configured to use a single host.  I see 1 MASTER and 4
</span><br>
<span class="quotelev2">&gt;&gt; SLAVES in qstat -g t, and I get the correct output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fine. (&quot;job_is_first_task true&quot; in the PE according to this.)
</span><br>
<p>Yes, I believe that job_is_first_task will need to be true for our
<br>
environment.
<br>
<p><span class="quotelev2">&gt;&gt;  If the queue is set to
</span><br>
<span class="quotelev2">&gt;&gt; use multiple hosts, the jobs hang in spawn/init, and I get errors
</span><br>
<span class="quotelev2">&gt;&gt; [grid-03.cisco.com][[19159,2],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint
</span><br>
<span class="quotelev2">&gt;&gt; _complete_connect] connect() to 192.168.122.1 failed: Connection refused
</span><br>
<span class="quotelev2">&gt;&gt; (111)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the setting in SGE for:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ qconf -sconf
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; qlogin_command               builtin
</span><br>
<span class="quotelev1">&gt; qlogin_daemon                builtin
</span><br>
<span class="quotelev1">&gt; rlogin_command               builtin
</span><br>
<span class="quotelev1">&gt; rlogin_daemon                builtin
</span><br>
<span class="quotelev1">&gt; rsh_command                  builtin
</span><br>
<span class="quotelev1">&gt; rsh_daemon                   builtin
</span><br>
<span class="quotelev1">&gt; If it's set to use ssh,
</span><br>
<p>Nope.  My output is the same as yours.
<br>
qlogin_command               builtin
<br>
qlogin_daemon                builtin
<br>
rlogin_command               builtin
<br>
rlogin_daemon                builtin
<br>
rsh_command                  builtin
<br>
rsh_daemon                   builtin
<br>
<p><p><span class="quotelev1">&gt; But I wonder, why it's working for some nodes?
</span><br>
<p>I don't think that it's working on some nodes.  In my other cases where it
<br>
hangs, I don't always get those &quot;connection refused&quot; errors.
<br>
<p>I'm not sure, but the &quot;connection refused&quot; errors might be a red herring.
<br>
The machines' primary NICs are on a different private network (172.28.*.*).
<br>
The 192.168.122.1 address is actually the machine's own virbr0 device, which
<br>
the documentations says is a &quot;xen interface used by Virtualization guest and
<br>
host oses for network communication.&quot;
<br>
<p><span class="quotelev1">&gt; Are there custom configuration per node, and some are faulty:
</span><br>
<p>I did a qconf -sconf machine for each host in my grid.  I get identical
<br>
output like this for each machine.
<br>
$ qconf -sconf grid-03
<br>
#grid-03.cisco.com:
<br>
mailer                       /bin/mail
<br>
xterm                        /usr/bin/xterm
<br>
<p>So, I think that the SGE config is the same across those machines.
<br>
<p><span class="quotelev2">&gt;&gt; 2. I guess I'm not sure how SGE is supposed to behave.  Experiment &quot;a&quot; and
</span><br>
<span class="quotelev2">&gt;&gt; &quot;b&quot; were identical except that I changed -pe orte 5-5 to -pe orte 5-.  The
</span><br>
<span class="quotelev2">&gt;&gt; single case works like before, and the multiple exec host case fails as
</span><br>
<span class="quotelev2">&gt;&gt; before.  The difference is that qstat -g t shows additional SLAVEs that
</span><br>
<span class="quotelev2">&gt;&gt; don't seem to correspond to any jobs on the exec hosts.  Are these SLAVEs
</span><br>
<span class="quotelev2">&gt;&gt; just slots that are reserved for my job but that I'm not using?  If my job
</span><br>
<span class="quotelev2">&gt;&gt; will only use 5 slots, then I should set the SGE qsub job to ask for exactly
</span><br>
<span class="quotelev2">&gt;&gt; 5 with &quot;-pe orte 5-5&quot;, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correct. The remaining ones are just unused. You could adjust your application
</span><br>
<span class="quotelev1">&gt; of course to check how many slots were granted, and start slaves according to
</span><br>
<span class="quotelev1">&gt; the information you got to use all granted slots.
</span><br>
<p>OK.  That makes sense.  In our intended uses, I believe that we'll know
<br>
exactly how many slots the application will need, and it will use the same
<br>
number of slots throughout the entire job.
<br>
<p><span class="quotelev2">&gt;&gt; 3. Experiment &quot;d&quot; was similar to &quot;b&quot;, but I use mpi.sh uses &quot;mpiexec -np 1
</span><br>
<span class="quotelev2">&gt;&gt; mpitest&quot; instead of running mpitest directly.  Now both the single machine
</span><br>
<span class="quotelev2">&gt;&gt; queue and multiple machine queue work.  So, mpiexec seems to make my
</span><br>
<span class="quotelev2">&gt;&gt; multi-machine configuration happier.  In this case, I'm still using &quot;-pe
</span><br>
<span class="quotelev2">&gt;&gt; orte 5-&quot;, and I'm still seeing the extra SLAVE slots granted in qstat -g t.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then case a) could show a bug in 1.5.4. For me both we working, but the
</span><br>
<p>OK.  That helps to explain my confusion.  Our previous experiments (where I
<br>
was told that case (a) was working) were with Open MPI 1.4.x.  Should I open
<br>
a bug for this issue?
<br>
<p><span class="quotelev1">&gt; allocation was different. The correct allocation I only got with &quot;mpiexec -np
</span><br>
<span class="quotelev1">&gt; 1&quot;. In your case 4 were routed to one remote machine: the machine where the
</span><br>
<span class="quotelev1">&gt; jobscript runs is usually the first entry in the machinefile, but on grid-03
</span><br>
<span class="quotelev1">&gt; you got only one slot by accident, and so the 4 additional ones were routed to
</span><br>
<span class="quotelev1">&gt; the next machine it found in the machinefile.
</span><br>
<p>FYI, I think that this particular allocation was a mis-configuration on my
<br>
side.  It looks like SGE thinks that grid-03 only has 1 slot available.
<br>
<p><span class="quotelev2">&gt;&gt; 4. Based on &quot;d&quot;, I thought that I could follow the approach in &quot;a&quot;.  That
</span><br>
<span class="quotelev2">&gt;&gt; is, for experiment &quot;e&quot;, I used mpiexec -np 1, but I also used -pe orte 5-5.
</span><br>
<span class="quotelev2">&gt;&gt; I thought that this would make the multi-machine queue reserve only the 5
</span><br>
<span class="quotelev2">&gt;&gt; slots that I needed.  The single machine queue works correctly, but now the
</span><br>
<span class="quotelev2">&gt;&gt; multi-machine case hangs with no errors.  The output from qstat and pstree
</span><br>
<span class="quotelev2">&gt;&gt; are what I'd expect, but it seems to hang in Span_multiple and Init_thread.
</span><br>
<span class="quotelev2">&gt;&gt; I really expected this to work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, this should work across multiple machines. And it's using `qrsh -inherit
</span><br>
<span class="quotelev1">&gt; ...` so it's failing somewhere in Open MPI - is it working with 1.4.4?
</span><br>
<p>I'm not sure.  We no longer have our 1.4 test environment, so I'm in the
<br>
process of building that now.  I'll let you know once I have a chance to run
<br>
that experiment.
<br>
<p>Thanks,
<br>
---Tom
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18407.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18405.php">Richard Walsh: "Re: [OMPI users] IO performance"</a>
<li><strong>In reply to:</strong> <a href="18401.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18407.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18407.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
