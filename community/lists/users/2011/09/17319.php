<?
$subject_val = "Re: [OMPI users] Can you set the gid of the processes created	by	mpirun?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 16 11:04:42 2011" -->
<!-- isoreceived="20110916150442" -->
<!-- sent="Fri, 16 Sep 2011 10:04:21 -0500" -->
<!-- isosent="20110916150421" -->
<!-- name="Ed Blosch" -->
<!-- email="eblosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can you set the gid of the processes created	by	mpirun?" -->
<!-- id="006501cc7481$ea3189a0$be949ce0$_at_net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F057A1C5-E850-4006-9894-A920F99592FF_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can you set the gid of the processes created	by	mpirun?<br>
<strong>From:</strong> Ed Blosch (<em>eblosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-16 11:04:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17320.php">Jeff Squyres: "Re: [OMPI users] openmpi configure error"</a>
<li><strong>Previous message:</strong> <a href="17318.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>In reply to:</strong> <a href="17312.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In my case the directories are actually the &quot;tmp&quot; directories created by the
<br>
job-scheduling system, but I think a wrapper script could chgrp and setguid
<br>
appropriately so that a process running group 1040 would effectively write
<br>
files with group ownership 650. Thanks for the clever idea.
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Reuti
<br>
Sent: Thursday, September 15, 2011 12:23 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Can you set the gid of the processes created by
<br>
mpirun?
<br>
<p>Edwin, going back to this:
<br>
<p><span class="quotelev2">&gt;&gt; The mpirun command is invoked when the user's group is 'set group' to
</span><br>
group 650.  When the rank 0 process creates files, they have group ownership
<br>
650.  But the user's login group is group 1040. The child processes that get
<br>
started on other nodes run with group 1040, and the files they create have
<br>
group ownership 1040.
<br>
<p>What about setting the set-guid flag for the directory? Created files
<br>
therein will inherit the group from the folder then (which has to be set to
<br>
the group in question of course).
<br>
<p>-- Reuti
<br>
_______________________________________________
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
<li><strong>Next message:</strong> <a href="17320.php">Jeff Squyres: "Re: [OMPI users] openmpi configure error"</a>
<li><strong>Previous message:</strong> <a href="17318.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>In reply to:</strong> <a href="17312.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
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
