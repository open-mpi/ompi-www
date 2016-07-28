<?
$subject_val = "Re: [OMPI users] Unable to find the following executable";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 20 12:34:11 2010" -->
<!-- isoreceived="20101120173411" -->
<!-- sent="Sat, 20 Nov 2010 11:32:49 -0600" -->
<!-- isosent="20101120173249" -->
<!-- name="Addepalli, Srirangam V" -->
<!-- email="srirangam.v.addepalli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to find the following executable" -->
<!-- id="15F71B097D330B42AA606A4AD8CA9640E72EA85DA8_at_CRATUS.ttu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTim8oVdXKa7wOS6UmZyFEwE9ELvjS-T4kozVehWw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to find the following executable<br>
<strong>From:</strong> Addepalli, Srirangam V (<em>srirangam.v.addepalli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-20 12:32:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14846.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Previous message:</strong> <a href="14844.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>In reply to:</strong> <a href="14844.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14846.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Reply:</strong> <a href="14846.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Tushar,
<br>
MPIRUN is not able to spawn processes on the  node allocated. This should help
<br>
<p>#!/bin/sh
<br>
#PBS -V
<br>
#PBS -q wasatch
<br>
#PBS -N SWMF
<br>
#PBS -l nodes=2:ppn=8
<br>
# change to the run directory
<br>
#cd $SWMF_v2.3/run
<br>
cat `echo ${PBS_NODEFILE}` &gt; list_of_nodes
<br>
mpirun -np 8   /home/A00945081/SWMF_v2.3/run/SWMF.exe  &gt; run.log
<br>
<p><p>Rangam
<br>
<p>&nbsp;
<br>
________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Tushar Andriyas [thugnomics28_at_[hidden]]
<br>
Sent: Saturday, November 20, 2010 10:48 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Unable to find the following executable
<br>
<p>Hi Rangam,
<br>
<p>I ran the batch file that you gave and have attached the error file. Also, since the WASATCH cluster is kind of small, people usually run on UINTA. So, if possible could you look at the uinta error files?
<br>
Tushar
<br>
<p>On Fri, Nov 19, 2010 at 12:31 PM, Addepalli, Srirangam V &lt;srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt; wrote:
<br>
Hello Tushar,
<br>
After looking at the log files you attached it appears  that there are multiple issues.
<br>
<p>[0,1,11]: Myrinet/GM on host wasatch-55 was unable to find any NICs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
<p>Usually they occur if there is a mismatch in mpirun version and mca blt selection.  I suggest the following order to check if the job actually works on a single node
<br>
<p>#!/bin/sh
<br>
#PBS -V
<br>
#PBS -q wasatch
<br>
#PBS -N SWMF
<br>
#PBS -l nodes=2:ppn=8
<br>
# change to the run directory
<br>
#cd $SWMF_v2.3/run
<br>
cat `echo ${PBS_NODEFILE}` &gt; list_of_nodes
<br>
mpirun -np 8 -machinefile list_of_nodes  /home/A00945081/SWMF_v2.3/run/SWMF.exe  &gt; run.log
<br>
<p><p>Rangam
<br>
<p><p>________________________________________
<br>
From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf Of Tushar Andriyas [thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;]
<br>
Sent: Friday, November 19, 2010 1:11 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Unable to find the following executable
<br>
<p>Hey Rangam,
<br>
<p>I tried out the batch script and the error file comes out empty and the output file has /home/A00945081/SWM_v2.3/run/SWMF.exe (WHEN RUN ON A SINGLE MACHINE) and the same with multiple machines in the run. So, does that mean that the exe is auto mounted ? What should I do next?
<br>
<p>Tushar
<br>
<p>On Fri, Nov 19, 2010 at 10:05 AM, Addepalli, Srirangam V &lt;srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&gt; wrote:
<br>
Hello Tushar,
<br>
<p>Try the following script.
<br>
<p>#!/bin/sh
<br>
#PBS -V
<br>
#PBS -q wasatch
<br>
#PBS -N SWMF
<br>
#PBS -l nodes=1:ppn=8
<br>
# change to the run directory
<br>
#cd $SWMF_v2.3/run
<br>
cat `echo ${PBS_NODEFILE}` &gt; list_of_nodes
<br>
<p><p><p><p>The objective is to check if your user directories are auto mounted on compute nodes and are available during run time.
<br>
<p>If the job returns information about SWMF.exe then it can be safely assumed that user directories are being auto mounted.
<br>
<p>Rangam
<br>
<p><p><p>________________________________________
<br>
From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt; [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;] On Behalf Of Tushar Andriyas [thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;]
<br>
Sent: Friday, November 19, 2010 8:35 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Unable to find the following executable
<br>
<p>It just gives back the info on folders in my home directory. Dont get me wrong but i m kinda new in this. So, could u type out d full command which i need to give?
<br>
<p>Tushar
<br>
<p>On Thu, Nov 18, 2010 at 8:35 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&gt; wrote:
<br>
You can qsub a simple &quot;ls&quot; on that path - that will tell you if the path is valid on all machines in that allocation.
<br>
<p>What typically happens is that home directories aren't remotely mounted, or are mounted on a different location.
<br>
<p><p>On Thu, Nov 18, 2010 at 8:31 AM, Tushar Andriyas &lt;thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&gt; wrote:
<br>
no its not in the same directory as SWMF. I guess the path is the same since all the machines in a cluster are configured d same way. How do I know if this is not the case?
<br>
<p><p>On Thu, Nov 18, 2010 at 8:25 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&gt; wrote:
<br>
Is you &quot;hello world&quot; test program in the same directory as SWMF? Is it possible that the path you are specifying is not available on all of the remote machines? That's the most common problem we see.
<br>
<p><p>On Thu, Nov 18, 2010 at 7:59 AM, Tushar Andriyas &lt;thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;&gt; wrote:
<br>
Hi there,
<br>
<p>Thanks for the expedite reply. The thing is that although the mpirun is setup correctly (since a simple hello world works), when I run the main SWMF.exe executable, the cluster machines somehow fail to find the executable (SWMF.exe).
<br>
<p>So, I have attached the sample error file from one of the runs (SWMF.e143438) and also the MAKEFILES so that you could better gauge the problem. The makefiles have Linux as the OS and pgf90 as compiler with mpif90 as the linker. I am using openmpi-1.2.7-pgi. Job is submitted using a batch file (job.bats) and the scheduler is Torque (version I am not sure but I can see three on the machines viz 2.0.0, 2.2.1, 2.5.2).
<br>
<p>I have also attached an error file from one of the clusters (WASATCH viz SWMF.e143439) and UINTA (SWMF.e143440) with the whole path of the exe as Srirangam mentioned as follows (in the batch file).
<br>
<p>mpirun --prefix /opt/libraries/openmpi/openmpi-1.2.7-pgi   /home/A00945081/SWMF_v2.3/run/SWMF.exe &gt; runlog_`date +%y%m%d%H%M`
<br>
<p>I have tried both mpirun and mpiexec but nothing seems to work.
<br>
<p>Tushar
<br>
<p><p>On Wed, Nov 17, 2010 at 8:12 PM, Addepalli, Srirangam V &lt;srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&gt;&gt; wrote:
<br>
Hello Tushar,
<br>
Have you tried supplying the full path of the executable just to check ?
<br>
Rangam
<br>
________________________________________
<br>
From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt; [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;] On Behalf Of Tushar Andriyas [thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;]
<br>
Sent: Wednesday, November 17, 2010 8:49 PM
<br>
To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;
<br>
Subject: [OMPI users] Unable to find the following executable
<br>
<p>Hi there,
<br>
<p>I am new to using mpi commands and was stuck in problem with running a code. When I submit my job through a batch file, the job exits with the message that the executable could not be found on the machines. I have tried a lot of options such as PBS -V and so on on but the problem persists. If someone is interested, I can send the full info on the cluster, the compiler and openmpi settings and other stuff. BTW the launcher is torque (which you might have guessed). The code does not have a forum so I am in a deep mire.
<br>
<p>Thanks,
<br>
Tushar
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14846.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Previous message:</strong> <a href="14844.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>In reply to:</strong> <a href="14844.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14846.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Reply:</strong> <a href="14846.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
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
