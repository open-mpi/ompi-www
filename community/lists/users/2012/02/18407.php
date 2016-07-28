<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  6 17:10:39 2012" -->
<!-- isoreceived="20120206221039" -->
<!-- sent="Mon, 6 Feb 2012 23:10:19 +0100" -->
<!-- isosent="20120206221019" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="423B187C-86B9-46B3-9DA4-40FA70636D77_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CB55B043.12A7C%tombry_at_cisco.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-06 17:10:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18408.php">James Torossian: "[OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Previous message:</strong> <a href="18406.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18406.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18423.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18423.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 06.02.2012 um 22:28 schrieb Tom Bryan:
<br>
<p><span class="quotelev1">&gt; On 2/6/12 8:14 AM, &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I need MPI_THREAD_MULTIPLE, and openmpi is compiled with thread support,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's not clear to me whether MPI::Init_Thread() and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::Inint_Thread(MPI::THREAD_MULTIPLE) would give me the same behavior from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you need thread support, you will need MPI::Init_Thread and it needs one
</span><br>
<span class="quotelev2">&gt;&gt; argument (or three).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, typo on my side.  I meant to compare
</span><br>
<span class="quotelev1">&gt; MPI::Init_thread(MPI::THREAD_MULTIPLE) and MPI::Init().  I think that your
</span><br>
<span class="quotelev1">&gt; first reply mentioned replacing MPI::Init_thread by MPI::Init.
</span><br>
<p>Yes, if you don't need threads, I don't see any reason why it should add anything to the environment what you could make use of.
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What is the setting in SGE for:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ qconf -sconf
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; qlogin_command               builtin
</span><br>
<span class="quotelev2">&gt;&gt; qlogin_daemon                builtin
</span><br>
<span class="quotelev2">&gt;&gt; rlogin_command               builtin
</span><br>
<span class="quotelev2">&gt;&gt; rlogin_daemon                builtin
</span><br>
<span class="quotelev2">&gt;&gt; rsh_command                  builtin
</span><br>
<span class="quotelev2">&gt;&gt; rsh_daemon                   builtin
</span><br>
<span class="quotelev2">&gt;&gt; If it's set to use ssh,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nope.  My output is the same as yours.
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
<p>Fine.
<br>
<p><p><span class="quotelev2">&gt;&gt; But I wonder, why it's working for some nodes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think that it's working on some nodes.  In my other cases where it
</span><br>
<span class="quotelev1">&gt; hangs, I don't always get those &quot;connection refused&quot; errors.
</span><br>
<p>If &quot;builtin&quot; is used, there is no reason to get &quot;connection refused&quot;. The error message from Open MPI should be different in case of a closed firewall IIRC.
<br>
<p><p><span class="quotelev1">&gt; I'm not sure, but the &quot;connection refused&quot; errors might be a red herring.
</span><br>
<span class="quotelev1">&gt; The machines' primary NICs are on a different private network (172.28.*.*).
</span><br>
<span class="quotelev1">&gt; The 192.168.122.1 address is actually the machine's own virbr0 device, which
</span><br>
<span class="quotelev1">&gt; the documentations says is a &quot;xen interface used by Virtualization guest and
</span><br>
<span class="quotelev1">&gt; host oses for network communication.&quot;
</span><br>
<p>By default Open MPI is using the primary interface for its communication AFAIK.
<br>
<p><p><span class="quotelev2">&gt;&gt; Are there custom configuration per node, and some are faulty:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did a qconf -sconf machine for each host in my grid.  I get identical
</span><br>
<span class="quotelev1">&gt; output like this for each machine.
</span><br>
<span class="quotelev1">&gt; $ qconf -sconf grid-03
</span><br>
<span class="quotelev1">&gt; #grid-03.cisco.com:
</span><br>
<span class="quotelev1">&gt; mailer                       /bin/mail
</span><br>
<span class="quotelev1">&gt; xterm                        /usr/bin/xterm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I think that the SGE config is the same across those machines.
</span><br>
<p>Yes, ok. Then it's fine.
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Experiment &quot;d&quot; was similar to &quot;b&quot;, but I use mpi.sh uses &quot;mpiexec -np 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpitest&quot; instead of running mpitest directly.  Now both the single machine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; queue and multiple machine queue work.  So, mpiexec seems to make my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multi-machine configuration happier.  In this case, I'm still using &quot;-pe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte 5-&quot;, and I'm still seeing the extra SLAVE slots granted in qstat -g t.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Then case a) could show a bug in 1.5.4. For me both we working, but the
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK.  That helps to explain my confusion.  Our previous experiments (where I
</span><br>
<span class="quotelev1">&gt; was told that case (a) was working) were with Open MPI 1.4.x.  Should I open
</span><br>
<span class="quotelev1">&gt; a bug for this issue?
</span><br>
<p>I'm not sure, as for me it's working. Maybe it has really something to do with the virtual machines setup.
<br>
<p><p><span class="quotelev2">&gt;&gt; Yes, this should work across multiple machines. And it's using `qrsh -inherit
</span><br>
<span class="quotelev2">&gt;&gt; ...` so it's failing somewhere in Open MPI - is it working with 1.4.4?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure.  We no longer have our 1.4 test environment, so I'm in the
</span><br>
<span class="quotelev1">&gt; process of building that now.  I'll let you know once I have a chance to run
</span><br>
<span class="quotelev1">&gt; that experiment.
</span><br>
<p>Ok.
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18408.php">James Torossian: "[OMPI users] O-MPI Support for Windows 7"</a>
<li><strong>Previous message:</strong> <a href="18406.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18406.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18423.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18423.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
