<?
$subject_val = "Re: [OMPI users] problem using openmpi with DMTCP";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 09:21:01 2009" -->
<!-- isoreceived="20090929132101" -->
<!-- sent="Tue, 29 Sep 2009 09:20:56 -0400" -->
<!-- isosent="20090929132056" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem using openmpi with DMTCP" -->
<!-- id="30F668E5-C742-407F-ABBE-EC56FDACF627_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 09:20:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10814.php">Blosch, Edwin L: "Re: [OMPI users] &quot;Failed to find the	followingexecutable&quot;	problemunder Torque"</a>
<li><strong>Previous message:</strong> <a href="10812.php">Jeff Squyres: "Re: [OMPI users] &quot;Failed to find the followingexecutable&quot;	problemunder Torque"</a>
<li><strong>In reply to:</strong> <a href="10798.php">Kritiraj Sajadah: "[OMPI users] problem using openmpi with DMTCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11086.php">Josh Hursey: "Re: [OMPI users] problem using openmpi with DMTCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you're integrating a new checkpoint/restart system inside Open MPI,  
<br>
you probably want to re-send this mail to the devel list to get the  
<br>
attention of the right people who can help you.
<br>
<p><p>On Sep 28, 2009, at 11:55 AM, Kritiraj Sajadah wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;           I am trying to integrate DMTCP with openmpi. IF I run a c  
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
<span class="quotelev1">&gt; [31007] WARNING at connection.cpp:303 in restore;  
</span><br>
<span class="quotelev1">&gt; REASON='JWARNING((_sockDomain == AF_INET || _sockDomain == AF_UNIX )  
</span><br>
<span class="quotelev1">&gt; &amp;&amp; _sockType == SOCK_STREAM) failed'
</span><br>
<span class="quotelev1">&gt;      id() = 2ab3f248-30933-4ac0d75a(99007)
</span><br>
<span class="quotelev1">&gt;      _sockDomain = 10
</span><br>
<span class="quotelev1">&gt;      _sockType = 1
</span><br>
<span class="quotelev1">&gt;      _sockProtocol = 0
</span><br>
<span class="quotelev1">&gt; Message: socket type not yet [fully] supported
</span><br>
<span class="quotelev1">&gt; [31007] WARNING at connection.cpp:303 in restore;  
</span><br>
<span class="quotelev1">&gt; REASON='JWARNING((_sockDomain == AF_INET || _sockDomain == AF_UNIX )  
</span><br>
<span class="quotelev1">&gt; &amp;&amp; _sockType == SOCK_STREAM) failed'
</span><br>
<span class="quotelev1">&gt;      id() = 2ab3f248-30943-4ac0d75c(99007)
</span><br>
<span class="quotelev1">&gt;      _sockDomain = 10
</span><br>
<span class="quotelev1">&gt;      _sockType = 1
</span><br>
<span class="quotelev1">&gt;      _sockProtocol = 0
</span><br>
<span class="quotelev1">&gt; Message: socket type not yet [fully] supported
</span><br>
<span class="quotelev1">&gt; [31013] WARNING at connection.cpp:87 in restartDup2;  
</span><br>
<span class="quotelev1">&gt; REASON='JWARNING(_real_dup2 ( oldFd, fd ) == fd) failed'
</span><br>
<span class="quotelev1">&gt;      oldFd = 537
</span><br>
<span class="quotelev1">&gt;      fd = 1
</span><br>
<span class="quotelev1">&gt;      (strerror((*__errno_location ()))) = Bad file descriptor
</span><br>
<span class="quotelev1">&gt; [31013] WARNING at connectionmanager.cpp:627 in closeAll;  
</span><br>
<span class="quotelev1">&gt; REASON='JWARNING(_real_close ( i-&gt;second ) ==0) failed'
</span><br>
<span class="quotelev1">&gt;      i-&gt;second = 537
</span><br>
<span class="quotelev1">&gt;      (strerror((*__errno_location ()))) = Bad file descriptor
</span><br>
<span class="quotelev1">&gt; [31015] WARNING at connectionmanager.cpp:627 in closeAll;  
</span><br>
<span class="quotelev1">&gt; REASON='JWARNING(_real_close ( i-&gt;second ) ==0) failed'
</span><br>
<span class="quotelev1">&gt;      i-&gt;second = 537
</span><br>
<span class="quotelev1">&gt;      (strerror((*__errno_location ()))) = Bad file descriptor
</span><br>
<span class="quotelev1">&gt; [31017] WARNING at connectionmanager.cpp:627 in closeAll;  
</span><br>
<span class="quotelev1">&gt; REASON='JWARNING(_real_close ( i-&gt;second ) ==0) failed'
</span><br>
<span class="quotelev1">&gt;      i-&gt;second = 537
</span><br>
<span class="quotelev1">&gt;      (strerror((*__errno_location ()))) = Bad file descriptor
</span><br>
<span class="quotelev1">&gt; [31007] WARNING at connectionmanager.cpp:627 in closeAll;  
</span><br>
<span class="quotelev1">&gt; REASON='JWARNING(_real_close ( i-&gt;second ) ==0) failed'
</span><br>
<span class="quotelev1">&gt;      i-&gt;second = 537
</span><br>
<span class="quotelev1">&gt;      (strerror((*__errno_location ()))) = Bad file descriptor
</span><br>
<span class="quotelev1">&gt; MTCP: mtcp_restart_nolibc: mapping current version of /usr/lib/gconv/ 
</span><br>
<span class="quotelev1">&gt; gconv-modules.cache into memory;
</span><br>
<span class="quotelev1">&gt;   _not_ file as it existed at time of checkpoint.
</span><br>
<span class="quotelev1">&gt;   Change mtcp_restart_nolibc.c:634 and re-compile, if you want  
</span><br>
<span class="quotelev1">&gt; different behavior.
</span><br>
<span class="quotelev1">&gt; [31015] ERROR at connection.cpp:372 in restoreOptions;  
</span><br>
<span class="quotelev1">&gt; REASON='JASSERT(ret == 0) failed'
</span><br>
<span class="quotelev1">&gt;      (strerror((*__errno_location ()))) = Invalid argument
</span><br>
<span class="quotelev1">&gt;      fds[0] = 6
</span><br>
<span class="quotelev1">&gt;      opt-&gt;first = 26
</span><br>
<span class="quotelev1">&gt;      opt-&gt;second.size() = 4
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10814.php">Blosch, Edwin L: "Re: [OMPI users] &quot;Failed to find the	followingexecutable&quot;	problemunder Torque"</a>
<li><strong>Previous message:</strong> <a href="10812.php">Jeff Squyres: "Re: [OMPI users] &quot;Failed to find the followingexecutable&quot;	problemunder Torque"</a>
<li><strong>In reply to:</strong> <a href="10798.php">Kritiraj Sajadah: "[OMPI users] problem using openmpi with DMTCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11086.php">Josh Hursey: "Re: [OMPI users] problem using openmpi with DMTCP"</a>
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
