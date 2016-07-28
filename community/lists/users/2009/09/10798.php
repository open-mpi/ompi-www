<?
$subject_val = "[OMPI users] problem using openmpi with DMTCP";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 11:55:28 2009" -->
<!-- isoreceived="20090928155528" -->
<!-- sent="Mon, 28 Sep 2009 08:55:24 -0700 (PDT)" -->
<!-- isosent="20090928155524" -->
<!-- name="Kritiraj Sajadah" -->
<!-- email="ksajadah_at_[hidden]" -->
<!-- subject="[OMPI users] problem using openmpi with DMTCP" -->
<!-- id="446620.84148.qm_at_web31005.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] problem using openmpi with DMTCP<br>
<strong>From:</strong> Kritiraj Sajadah (<em>ksajadah_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-28 11:55:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10799.php">Blosch, Edwin L: "Re: [OMPI users] &quot;Failed to find the following executable&quot;	problemunder Torque"</a>
<li><strong>Previous message:</strong> <a href="10797.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program	using	thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10813.php">Jeff Squyres: "Re: [OMPI users] problem using openmpi with DMTCP"</a>
<li><strong>Reply:</strong> <a href="10813.php">Jeff Squyres: "Re: [OMPI users] problem using openmpi with DMTCP"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11086.php">Josh Hursey: "Re: [OMPI users] problem using openmpi with DMTCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am trying to integrate DMTCP with openmpi. IF I run a c application, it works fine. But when I execute the program using mpirun, It checkpoints application but gives error when restarting the application.
<br>
<p>#############
<br>
[31007] WARNING at connection.cpp:303 in restore; REASON='JWARNING((_sockDomain == AF_INET || _sockDomain == AF_UNIX ) &amp;&amp; _sockType == SOCK_STREAM) failed'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;id() = 2ab3f248-30933-4ac0d75a(99007)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_sockDomain = 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_sockType = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_sockProtocol = 0
<br>
Message: socket type not yet [fully] supported
<br>
[31007] WARNING at connection.cpp:303 in restore; REASON='JWARNING((_sockDomain == AF_INET || _sockDomain == AF_UNIX ) &amp;&amp; _sockType == SOCK_STREAM) failed'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;id() = 2ab3f248-30943-4ac0d75c(99007)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_sockDomain = 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_sockType = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_sockProtocol = 0
<br>
Message: socket type not yet [fully] supported
<br>
[31013] WARNING at connection.cpp:87 in restartDup2; REASON='JWARNING(_real_dup2 ( oldFd, fd ) == fd) failed'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;oldFd = 537
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fd = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(strerror((*__errno_location ()))) = Bad file descriptor
<br>
[31013] WARNING at connectionmanager.cpp:627 in closeAll; REASON='JWARNING(_real_close ( i-&gt;second ) ==0) failed'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i-&gt;second = 537
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(strerror((*__errno_location ()))) = Bad file descriptor
<br>
[31015] WARNING at connectionmanager.cpp:627 in closeAll; REASON='JWARNING(_real_close ( i-&gt;second ) ==0) failed'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i-&gt;second = 537
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(strerror((*__errno_location ()))) = Bad file descriptor
<br>
[31017] WARNING at connectionmanager.cpp:627 in closeAll; REASON='JWARNING(_real_close ( i-&gt;second ) ==0) failed'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i-&gt;second = 537
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(strerror((*__errno_location ()))) = Bad file descriptor
<br>
[31007] WARNING at connectionmanager.cpp:627 in closeAll; REASON='JWARNING(_real_close ( i-&gt;second ) ==0) failed'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i-&gt;second = 537
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(strerror((*__errno_location ()))) = Bad file descriptor
<br>
MTCP: mtcp_restart_nolibc: mapping current version of /usr/lib/gconv/gconv-modules.cache into memory;
<br>
&nbsp;&nbsp;_not_ file as it existed at time of checkpoint.
<br>
&nbsp;&nbsp;Change mtcp_restart_nolibc.c:634 and re-compile, if you want different behavior.
<br>
[31015] ERROR at connection.cpp:372 in restoreOptions; REASON='JASSERT(ret == 0) failed'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(strerror((*__errno_location ()))) = Invalid argument
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fds[0] = 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opt-&gt;first = 26
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opt-&gt;second.size() = 4
<br>
Message: restoring setsockopt failed
<br>
Terminating...
<br>
#############################################################
<br>
<p>Any suggestions is very welcomed.
<br>
<p>regards,
<br>
<p>Raj
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10799.php">Blosch, Edwin L: "Re: [OMPI users] &quot;Failed to find the following executable&quot;	problemunder Torque"</a>
<li><strong>Previous message:</strong> <a href="10797.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program	using	thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10813.php">Jeff Squyres: "Re: [OMPI users] problem using openmpi with DMTCP"</a>
<li><strong>Reply:</strong> <a href="10813.php">Jeff Squyres: "Re: [OMPI users] problem using openmpi with DMTCP"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11086.php">Josh Hursey: "Re: [OMPI users] problem using openmpi with DMTCP"</a>
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
