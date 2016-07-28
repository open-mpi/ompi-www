<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 16:14:42 2014" -->
<!-- isoreceived="20140407201442" -->
<!-- sent="Mon, 7 Apr 2014 20:14:01 +0000" -->
<!-- isosent="20140407201401" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CB62926_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B2F9B5D8-459C-48BC-899C-5049BB693DB4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Problem with shell when launching jobs with	OpenMPI 1.6.5 rsh<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 16:14:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24089.php">Reuti: "Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<li><strong>Previous message:</strong> <a href="24087.php">Ralph Castain: "Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<li><strong>In reply to:</strong> <a href="24087.php">Ralph Castain: "Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24089.php">Reuti: "Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I create a program called hello which just contains the line &quot;echo hello&quot;, then I do
<br>
<p>&quot;/bin/. hello&quot;  then I get permission denied.
<br>
<p>Is that what you mean?
<br>
<p>I might be lost in esoteric corners of Linux.  What is &quot;.&quot; under /bin ?  There is no program there by that name.  I've heard of &quot;.&quot; as a shell built-in, but I haven't seen it prefixed by /bin before.
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Monday, April 07, 2014 3:10 PM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh
<br>
<p>Looks to me like the problem is here:
<br>
<p>/bin/.: Permission denied.
<br>
<p>Appears you don't have permission to exec bash??
<br>
<p><p>On Apr 7, 2014, at 1:04 PM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&lt;mailto:edwin.l.blosch_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>I am submitting a job for execution under SGE.  My default shell is /bin/csh.  The script that is submitted has #!/bin/bash at the top.  The script runs on the 1st node allocated to the job.  The script runs a Python wrapper that ultimately issues the following mpirun command:
<br>
<p>/apps/local/test/openmpi/bin/mpirun --machinefile mpihosts.914 -np 48 -x LD_LIBRARY_PATH -x MPI_ENVIRONMENT=1 --mca btl ^tcp --mca shmem_mmap_relocate_backing_file -1 --bind-to-core --bycore --mca orte_rsh_agent /usr/bin/rsh --mca plm_rsh_disable_qrsh 1 /apps/local/test/solver/bin/solver_openmpi -cycles 50 -ri restart.0 -i flow.inp &gt;&amp; output
<br>
<p>Just so there's no confusion, OpenMPI is built without support for SGE.  It should be using rsh to launch.
<br>
<p>There are 4 nodes involved (each 12 cores, 48 processes total).  In the output file, I see 3 sets of messages as shown below.  I assume I am seeing 1 set of messages for each of the 3 remote nodes where processes need to be launched:
<br>
<p>/bin/.: Permission denied.
<br>
OPAL_PREFIX=/apps/local/falcon2014/openmpi: Command not found.
<br>
export: Command not found.
<br>
PATH=/apps/local/test/openmpi/bin:/bin:/usr/bin:/usr/ccs/bin:/usr/local/bin:/usr/openwin/bin:/usr/local/etc:/home/bloscel/bin:/usr/ucb:/usr/bsd: Command not found.
<br>
export: Command not found.
<br>
LD_LIBRARY_PATH: Undefined variable.
<br>
<p>These look like errors you get when csh is trying to parse commands intended for bash.
<br>
<p>Does anyone know what may be going on here?
<br>
<p>Thanks,
<br>
<p>Ed
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24088/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24089.php">Reuti: "Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<li><strong>Previous message:</strong> <a href="24087.php">Ralph Castain: "Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<li><strong>In reply to:</strong> <a href="24087.php">Ralph Castain: "Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24089.php">Reuti: "Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
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
