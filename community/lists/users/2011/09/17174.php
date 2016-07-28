<?
$subject_val = "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  7 12:59:08 2011" -->
<!-- isoreceived="20110907165908" -->
<!-- sent="Wed, 07 Sep 2011 10:58:56 -0600" -->
<!-- isosent="20110907165856" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can you set the gid of the processes created by	mpirun?" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275C8BF5B4_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="72A33BF4-24DD-4F8D-BE5D-5DB76969434B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can you set the gid of the processes created by	mpirun?<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-07 12:58:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17175.php">Ralph Castain: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17173.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.5.4/Intel XE make check failure (CentOS-5.6 x86_64) [FIXED]"</a>
<li><strong>In reply to:</strong> <a href="17172.php">Ralph Castain: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17175.php">Ralph Castain: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<li><strong>Reply:</strong> <a href="17175.php">Ralph Castain: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<li><strong>Reply:</strong> <a href="17176.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Thanks for the reply.   I'm using 1.4.2.
<br>
<p>We have a job queueing system with a prioritization scheme where the priorities of jobs are in part a function of the group id.  This is why, for us, it is common that the initial mpirun command executes with a group other than the user's default group.   We also have some applications where each process writes data to disk, and the resulting collection of output files has mixed group permissions.  This creates problems --- mostly just inconvenience --- but I could imagine some security-conscious folks might be more concerned about it.   Also, if it's relevant, the OpenMPI we are using is built without support for the job-queueing system (our preference for various reasons).
<br>
<p>Ed
<br>
<p>From: Ralph Castain [mailto:rhc_at_[hidden]]
<br>
Sent: Wednesday, September 07, 2011 8:53 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Can you set the gid of the processes created by mpirun?
<br>
<p>On Sep 7, 2011, at 7:38 AM, Blosch, Edwin L wrote:
<br>
<p><p>The mpirun command is invoked when the user's group is 'set group' to group 650.  When the rank 0 process creates files, they have group ownership 650.  But the user's login group is group 1040. The child processes that get started on other nodes run with group 1040, and the files they create have group ownership 1040.
<br>
<p>Is there a way to tell mpirun to start the child processes with the same uid and gid as the rank 0 process?
<br>
<p>I'm afraid not - never came up before. Could be done, but probably not right away. What version are you using?
<br>
<p><p><p>Thanks
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17174/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17175.php">Ralph Castain: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17173.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.5.4/Intel XE make check failure (CentOS-5.6 x86_64) [FIXED]"</a>
<li><strong>In reply to:</strong> <a href="17172.php">Ralph Castain: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17175.php">Ralph Castain: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<li><strong>Reply:</strong> <a href="17175.php">Ralph Castain: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<li><strong>Reply:</strong> <a href="17176.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
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
