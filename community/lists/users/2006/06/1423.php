<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 15 10:13:37 2006" -->
<!-- isoreceived="20060615141337" -->
<!-- sent="Thu, 15 Jun 2006 07:13:26 -0700" -->
<!-- isosent="20060615141326" -->
<!-- name="Doolittle, Joshua" -->
<!-- email="joshua.doolittle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with open MPI and Slurm" -->
<!-- id="AF293AF0A07C8A44A6098DA99D03713005F5E6C1_at_pnlmse24.pnl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1150378754.30726.3.camel_at_boxtop.lanl.gov" -->
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
<strong>From:</strong> Doolittle, Joshua (<em>joshua.doolittle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-15 10:13:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1424.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>Previous message:</strong> <a href="1422.php">Brock Palen: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>In reply to:</strong> <a href="1419.php">Brian Barrett: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That was exactly the problem I was having.  We were use to doing it one
<br>
way, with a certain other MPI library.  After digging around and not
<br>
doing it &quot;the way it has always been done&quot;, I actually read the slurm
<br>
quickstart page.  That fixed all my problems.  But thank you all for
<br>
your help.
<br>
<p>- Joshua Doolittle
<br>
- Intern 2 
<br>
- (509) 376-3958
<br>
- EMSL High Perf. Computing
<br>
&nbsp;
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Brian Barrett
<br>
Sent: Thursday, June 15, 2006 6:39 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Trouble with open MPI and Slurm
<br>
<p>On Wed, 2006-06-14 at 10:05 -0700, Doolittle, Joshua wrote:
<br>
<span class="quotelev1">&gt; I am running Open MPI version 1.0.2 and slurm 1.1.0.  I can run slurm 
</span><br>
<span class="quotelev1">&gt; jobs, and I can run mpi jobs.  However, when I run a mpi job in slurm 
</span><br>
<span class="quotelev1">&gt; batch mode with 4 processes, the processes do not talk to each other.
</span><br>
<span class="quotelev1">&gt; They act like they are the only process.  I'm running these in slurm 
</span><br>
<span class="quotelev1">&gt; batch mode.  The job that I'm running is a simple mpi optimized hello 
</span><br>
<span class="quotelev1">&gt; world.  I'm running these on an opteron (x86_64) blade system from a 
</span><br>
<span class="quotelev1">&gt; head node.  Any help would be greatly appreciated.
</span><br>
<p>How are you running your batch job?  Unlike some MPI implementations,
<br>
Open MPI jobs  can not be started under SLURM without the use of mpirun.
<br>
You can either run mpirun under an interactive session:
<br>
<p>&nbsp;&nbsp;&nbsp;srun -N 4 -A
<br>
&nbsp;&nbsp;&nbsp;mpirun -np 4 ./foobar
<br>
<p>or from a batch script:
<br>
<p>&nbsp;&nbsp;&nbsp;echo &quot;mpirun -np 4 ./foobar&quot; &gt; foo.sh
<br>
&nbsp;&nbsp;&nbsp;chmod +x foo.sh
<br>
&nbsp;&nbsp;&nbsp;srun -N 4 -b foo.sh
<br>
<p>But you can't submit your application directly without mpirun.  This is
<br>
a feature we would like to support in the future, but there are some
<br>
licensing issues (we would have to link with their GPL'ed libraries,
<br>
which wouldn't work so well for us).
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1424.php">Martin Schafföner: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>Previous message:</strong> <a href="1422.php">Brock Palen: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<li><strong>In reply to:</strong> <a href="1419.php">Brian Barrett: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
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
