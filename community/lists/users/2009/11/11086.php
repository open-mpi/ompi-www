<?
$subject_val = "Re: [OMPI users] problem using openmpi with DMTCP";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 08:37:46 2009" -->
<!-- isoreceived="20091106133746" -->
<!-- sent="Fri, 6 Nov 2009 06:37:42 -0700" -->
<!-- isosent="20091106133742" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem using openmpi with DMTCP" -->
<!-- id="E3BA6E89-E483-43E1-B362-181852C5E511_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="446620.84148.qm_at_web31005.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem using openmpi with DMTCP<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-06 08:37:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11087.php">Josh Hursey: "Re: [OMPI users] problems with checkpointing an mpi job"</a>
<li><strong>Previous message:</strong> <a href="11085.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10798.php">Kritiraj Sajadah: "[OMPI users] problem using openmpi with DMTCP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Sorry for the excessive delay in replying)
<br>
<p>I do not have any experience with the DMTCP project, so I can only  
<br>
speculate on what might be going on here. If you are using DMTCP to  
<br>
transparently checkpoint Open MPI you will need to make sure that you  
<br>
are not using any other interconnect other than TCP.
<br>
<p>If you are building an OPAL CRS component for DMTCP (actually you  
<br>
probably want their MTCP project which is just the local checkpoint/ 
<br>
restart service), then what you might be seeing are the TCP sockets  
<br>
that are left open across a checkpoint operation. As an optimization  
<br>
for checkpoint-&gt;continue we leave sockets open when we checkpoint.  
<br>
Since most checkpoint/restart services will skip over the socket fd  
<br>
(since they are not supported) and take the checkpoint we leave them  
<br>
open, and close them only on restart. I suspect that DMTCP is erroring  
<br>
out since it is trying to do something else with those fds.
<br>
<p>You may want to try just using the MTCP project, or ask for a way to  
<br>
shut off the socket negotiation and just ignore the socket fds.
<br>
<p>Let me know how it goes.
<br>
<p>-- Josh
<br>
<p>On Sep 28, 2009, at 9:55 AM, Kritiraj Sajadah wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;          I am trying to integrate DMTCP with openmpi. IF I run a c  
</span><br>
<span class="quotelev1">&gt; application, it works fine. But when I execute the program using  
</span><br>
<span class="quotelev1">&gt; mpirun, It checkpoints application but gives error when restarting  
</span><br>
<span class="quotelev1">&gt; the application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #############
</span><br>
<span class="quotelev1">&gt; [31007] WARNING at connection.cpp:303 in restore; REASON='JWARNING 
</span><br>
<span class="quotelev1">&gt; ((_sockDomain == AF_INET || _sockDomain == AF_UNIX ) &amp;&amp; _sockType ==  
</span><br>
<span class="quotelev1">&gt; SOCK_STREAM) failed'
</span><br>
<span class="quotelev1">&gt;     id() = 2ab3f248-30933-4ac0d75a(99007)
</span><br>
<span class="quotelev1">&gt;     _sockDomain = 10
</span><br>
<span class="quotelev1">&gt;     _sockType = 1
</span><br>
<span class="quotelev1">&gt;     _sockProtocol = 0
</span><br>
<span class="quotelev1">&gt; Message: socket type not yet [fully] supported
</span><br>
<span class="quotelev1">&gt; [31007] WARNING at connection.cpp:303 in restore; REASON='JWARNING 
</span><br>
<span class="quotelev1">&gt; ((_sockDomain == AF_INET || _sockDomain == AF_UNIX ) &amp;&amp; _sockType ==  
</span><br>
<span class="quotelev1">&gt; SOCK_STREAM) failed'
</span><br>
<span class="quotelev1">&gt;     id() = 2ab3f248-30943-4ac0d75c(99007)
</span><br>
<span class="quotelev1">&gt;     _sockDomain = 10
</span><br>
<span class="quotelev1">&gt;     _sockType = 1
</span><br>
<span class="quotelev1">&gt;     _sockProtocol = 0
</span><br>
<span class="quotelev1">&gt; Message: socket type not yet [fully] supported
</span><br>
<span class="quotelev1">&gt; [31013] WARNING at connection.cpp:87 in restartDup2; REASON='JWARNING 
</span><br>
<span class="quotelev1">&gt; (_real_dup2 ( oldFd, fd ) == fd) failed'
</span><br>
<span class="quotelev1">&gt;     oldFd = 537
</span><br>
<span class="quotelev1">&gt;     fd = 1
</span><br>
<span class="quotelev1">&gt;     (strerror((*__errno_location ()))) = Bad file descriptor
</span><br>
<span class="quotelev1">&gt; [31013] WARNING at connectionmanager.cpp:627 in closeAll;  
</span><br>
<span class="quotelev1">&gt; REASON='JWARNING(_real_close ( i-&gt;second ) ==0) failed'
</span><br>
<span class="quotelev1">&gt;     i-&gt;second = 537
</span><br>
<span class="quotelev1">&gt;     (strerror((*__errno_location ()))) = Bad file descriptor
</span><br>
<span class="quotelev1">&gt; [31015] WARNING at connectionmanager.cpp:627 in closeAll;  
</span><br>
<span class="quotelev1">&gt; REASON='JWARNING(_real_close ( i-&gt;second ) ==0) failed'
</span><br>
<span class="quotelev1">&gt;     i-&gt;second = 537
</span><br>
<span class="quotelev1">&gt;     (strerror((*__errno_location ()))) = Bad file descriptor
</span><br>
<span class="quotelev1">&gt; [31017] WARNING at connectionmanager.cpp:627 in closeAll;  
</span><br>
<span class="quotelev1">&gt; REASON='JWARNING(_real_close ( i-&gt;second ) ==0) failed'
</span><br>
<span class="quotelev1">&gt;     i-&gt;second = 537
</span><br>
<span class="quotelev1">&gt;     (strerror((*__errno_location ()))) = Bad file descriptor
</span><br>
<span class="quotelev1">&gt; [31007] WARNING at connectionmanager.cpp:627 in closeAll;  
</span><br>
<span class="quotelev1">&gt; REASON='JWARNING(_real_close ( i-&gt;second ) ==0) failed'
</span><br>
<span class="quotelev1">&gt;     i-&gt;second = 537
</span><br>
<span class="quotelev1">&gt;     (strerror((*__errno_location ()))) = Bad file descriptor
</span><br>
<span class="quotelev1">&gt; MTCP: mtcp_restart_nolibc: mapping current version of /usr/lib/gconv/ 
</span><br>
<span class="quotelev1">&gt; gconv-modules.cache into memory;
</span><br>
<span class="quotelev1">&gt;  _not_ file as it existed at time of checkpoint.
</span><br>
<span class="quotelev1">&gt;  Change mtcp_restart_nolibc.c:634 and re-compile, if you want  
</span><br>
<span class="quotelev1">&gt; different behavior.
</span><br>
<span class="quotelev1">&gt; [31015] ERROR at connection.cpp:372 in restoreOptions;  
</span><br>
<span class="quotelev1">&gt; REASON='JASSERT(ret == 0) failed'
</span><br>
<span class="quotelev1">&gt;     (strerror((*__errno_location ()))) = Invalid argument
</span><br>
<span class="quotelev1">&gt;     fds[0] = 6
</span><br>
<span class="quotelev1">&gt;     opt-&gt;first = 26
</span><br>
<span class="quotelev1">&gt;     opt-&gt;second.size() = 4
</span><br>
<span class="quotelev1">&gt; Message: restoring setsockopt failed
</span><br>
<span class="quotelev1">&gt; Terminating...
</span><br>
<span class="quotelev1">&gt; #############################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions is very welcomed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Raj
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11087.php">Josh Hursey: "Re: [OMPI users] problems with checkpointing an mpi job"</a>
<li><strong>Previous message:</strong> <a href="11085.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10798.php">Kritiraj Sajadah: "[OMPI users] problem using openmpi with DMTCP"</a>
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
