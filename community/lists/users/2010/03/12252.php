<?
$subject_val = "Re: [OMPI users] Limit to number of processes on one node?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  4 15:42:05 2010" -->
<!-- isoreceived="20100304204205" -->
<!-- sent="Thu, 04 Mar 2010 15:41:59 -0500" -->
<!-- isosent="20100304204159" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Limit to number of processes on one node?" -->
<!-- id="4B901B17.2060804_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="997E1084-CFAC-4966-9936-BF36871DB5BE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Limit to number of processes on one node?<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-04 15:41:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12253.php">Aurélien Bouteiller: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12251.php">Dave Love: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>In reply to:</strong> <a href="12243.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Mar 4, 2010, at 7:51 AM, Prentice Bisbal wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 4, 2010, at 7:27 AM, Prentice Bisbal wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mar 3, 2010, at 12:16 PM, Prentice Bisbal wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Prentice Bisbal wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Prentice Bisbal wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is there a limit on how many MPI processes can run on a single host?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Depending on which OMPI release you're using, I think you need something
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; like 4*np up to 7*np (plus a few) descriptors.  So, with 256, you need
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1000+ descriptors.  You're quite possibly up against your limit, though
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't know for sure that that's the problem here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; You say you're running 1.2.8.  That's &quot;a while ago&quot;, so would you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; consider updating as a first step?  Among other things, newer OMPIs will
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; generate a much clearer error message if the descriptor limit is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; While 1.2.8 might be &quot;a while ago&quot;, upgrading software just because it's
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;old&quot; is not a valid argument.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I can install the lastest version of OpenMPI, but it will take a little
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; while.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Maybe not because it is &quot;old&quot;, but Eugene is correct. The old versions of OMPI required more file descriptors than the newer versions.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That said, you'll still need a minimum of 4x the number of procs on the node even with the latest release. I suggest talking to your sys admin about getting the limit increased. It sounds like it has been set unrealistically low.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I *am* the system admin! ;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The file descriptor limit is the default for RHEL,  1024, so I would not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; characterize it as &quot;unrealistically low&quot;.  I assume someone with much
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; more knowledge of OS design and administration than me came up with this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default, so I'm hesitant to change it without good reason. If there was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; good reason, I'd have no problem changing it. I have read that setting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it to more than 8192 can lead to system instability.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Never heard that, and most HPC systems have it set a great deal higher without trouble.
</span><br>
<span class="quotelev2">&gt;&gt; I just read that the other day. Not sure where, though. Probably a forum
</span><br>
<span class="quotelev2">&gt;&gt; posting somewhere. I'll take your word for it that it's safe to increase
</span><br>
<span class="quotelev2">&gt;&gt; if necessary.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, the choice is yours. If you have a large SMP system, you'll eventually be forced to change it or severely limit its usefulness for MPI. RHEL sets it that low arbitrarily as a way of saving memory by keeping the fd table small, not because the OS can't handle it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyway, that is the problem. Nothing we (or any MPI) can do about it as the fd's are required for socket-based communications and to forward I/O.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, Ralph, that's exactly the answer I was looking for - where this
</span><br>
<span class="quotelev2">&gt;&gt; limit was coming from.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can see how on a large SMP system the fd limit would have to be
</span><br>
<span class="quotelev2">&gt;&gt; increased. In normal circumstances, my cluster nodes should never have
</span><br>
<span class="quotelev2">&gt;&gt; more than 8 MPI processes running at once (per node), so I shouldn't be
</span><br>
<span class="quotelev2">&gt;&gt; hitting that limit on my cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, okay! That helps a great deal in figuring out what to advise you. In your earlier note, it sounded like you were running all 512 procs on one node, so I assumed you had a large single-node SMP.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case, though, the problem is solely that you are using the 1.2 series. In that series, mpirun and each process opened many more sockets to all processes in the job. That's why you are overrunning your limit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Starting with 1.3, the number of sockets being opened on each is only 3 times the number of procs on the node, plus a couple for the daemon. If you are using TCP for MPI communications, then each MPI connection will open another socket as these messages are direct and not routed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Upgrading to the 1.4 series should resolve the problem you saw.
</span><br>
<p>After upgrading to 1.4.1, I can start up to 253 processes on one host:
<br>
<p>mpirun -np 253 mpihello
<br>
<p>This is an increase of ~100 over 1.2.8. When it does fail, it gives more
<br>
useful error message:
<br>
<p>$ mpirun -np 254 mpihello
<br>
[juno.sns.ias.edu:22862] [[6399,0],0] ORTE_ERROR_LOG: The system limit
<br>
on number of network connections a process can open was reached in file
<br>
../../../../../orte/mca/oob/tcp/oob_tcp.c at line 447
<br>
--------------------------------------------------------------------------
<br>
Error: system limit exceeded on number of network connections that can
<br>
be open
<br>
<p>This can be resolved by setting the mca parameter
<br>
opal_set_max_sys_limits to 1,
<br>
increasing your limit descriptor setting (using limit or ulimit commands),
<br>
or asking the system administrator to increase the system limit.
<br>
--------------------------------------------------------------------------
<br>
<p><p>Case closed, court adjourned. Thanks for all the help and explanations.
<br>
<p>Prentice
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is admittedly unusual situation - in normal use, no one would ever
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; want to run that many processes on a single system - so I don't see any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; justification for modifying that setting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yesterday I spoke to the researcher who originally asked me this limit -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; he just wanted to know what the limit was, and doesn't actually plan to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do any &quot;real&quot; work with that many processes on a single node, rendering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this whole discussion academic.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I did install OpenMPI 1.4.1 yesterday, but I haven't had a chance to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; test it yet. I'll post the results of testing here.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have a user trying to test his code on the command-line on a single
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; host before running it on our cluster like so:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np X foo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When he tries to run it on large number of process (X = 256, 512), the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; program fails, and I can reproduce this with a simple &quot;Hello, World&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; program:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ mpirun -np 256 mpihello
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 0 on node juno.sns.ias.edu
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 252 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've done some testing and found that X &lt;155 for this program to work.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is this a bug, part of the standard, or design/implementation decision?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; One possible issue is the limit on the number of descriptors.  The error
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; message should be pretty helpful and descriptive, but perhaps you're
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; using an older version of OMPI.  If this is your problem, one workaround
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is something like this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; unlimit descriptors
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 256 mpihello
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Looks like I'm not allowed to set that as a regular user:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ ulimit -n 2048
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -bash: ulimit: open files: cannot modify limit: Operation not permitted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Since I am the admin, I could change that elsewhere, but I'd rather not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; do that system-wide unless absolutely necessary.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; though I guess the syntax depends on what shell you're running.  Another
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is to set the MCA parameter opal_set_max_sys_limits to 1.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; That didn't work either:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ mpirun -mca opal_set_max_sys_limits 1 -np 256 mpihello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 0 on node juno.sns.ias.edu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 252 additional processes aborted (not shown)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Prentice Bisbal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Linux Software Support Specialist/System Administrator
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; School of Natural Sciences
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Institute for Advanced Study
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Princeton, NJ
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Prentice Bisbal
</span><br>
<span class="quotelev2">&gt;&gt; Linux Software Support Specialist/System Administrator
</span><br>
<span class="quotelev2">&gt;&gt; School of Natural Sciences
</span><br>
<span class="quotelev2">&gt;&gt; Institute for Advanced Study
</span><br>
<span class="quotelev2">&gt;&gt; Princeton, NJ
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><pre>
-- 
Prentice Bisbal
Linux Software Support Specialist/System Administrator
School of Natural Sciences
Institute for Advanced Study
Princeton, NJ
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12253.php">Aurélien Bouteiller: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12251.php">Dave Love: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>In reply to:</strong> <a href="12243.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
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
