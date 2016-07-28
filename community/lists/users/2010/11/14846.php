<?
$subject_val = "Re: [OMPI users] Unable to find the following executable";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 20 13:12:02 2010" -->
<!-- isoreceived="20101120181202" -->
<!-- sent="Sat, 20 Nov 2010 11:11:57 -0700" -->
<!-- isosent="20101120181157" -->
<!-- name="Tushar Andriyas" -->
<!-- email="thugnomics28_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to find the following executable" -->
<!-- id="AANLkTinAT+-+k_mEePrPgfLUGYs55apAjsEjPNzq2_t0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="15F71B097D330B42AA606A4AD8CA9640E72EA85DA8_at_CRATUS.ttu.edu" -->
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
<strong>From:</strong> Tushar Andriyas (<em>thugnomics28_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-20 13:11:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14847.php">John Hearns: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster (fwd)"</a>
<li><strong>Previous message:</strong> <a href="14845.php">Addepalli, Srirangam V: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>In reply to:</strong> <a href="14845.php">Addepalli, Srirangam V: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14848.php">Addepalli, Srirangam V: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Reply:</strong> <a href="14848.php">Addepalli, Srirangam V: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rangam,
<br>
<p>It does not want to run at all. Attached is the log file from the batch file
<br>
run u sent.
<br>
<p>On Sat, Nov 20, 2010 at 10:32 AM, Addepalli, Srirangam V &lt;
<br>
srirangam.v.addepalli_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Tushar,
</span><br>
<span class="quotelev1">&gt; MPIRUN is not able to spawn processes on the  node allocated. This should
</span><br>
<span class="quotelev1">&gt; help
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; #PBS -V
</span><br>
<span class="quotelev1">&gt; #PBS -q wasatch
</span><br>
<span class="quotelev1">&gt; #PBS -N SWMF
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev1">&gt; # change to the run directory
</span><br>
<span class="quotelev1">&gt; #cd $SWMF_v2.3/run
</span><br>
<span class="quotelev1">&gt; cat `echo ${PBS_NODEFILE}` &gt; list_of_nodes
</span><br>
<span class="quotelev1">&gt; mpirun -np 8   /home/A00945081/SWMF_v2.3/run/SWMF.exe  &gt; run.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rangam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev1">&gt; Tushar Andriyas [thugnomics28_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, November 20, 2010 10:48 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Unable to find the following executable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Rangam,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran the batch file that you gave and have attached the error file. Also,
</span><br>
<span class="quotelev1">&gt; since the WASATCH cluster is kind of small, people usually run on UINTA. So,
</span><br>
<span class="quotelev1">&gt; if possible could you look at the uinta error files?
</span><br>
<span class="quotelev1">&gt; Tushar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Nov 19, 2010 at 12:31 PM, Addepalli, Srirangam V &lt;
</span><br>
<span class="quotelev1">&gt; srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello Tushar,
</span><br>
<span class="quotelev1">&gt; After looking at the log files you attached it appears  that there are
</span><br>
<span class="quotelev1">&gt; multiple issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,11]: Myrinet/GM on host wasatch-55 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Usually they occur if there is a mismatch in mpirun version and mca blt
</span><br>
<span class="quotelev1">&gt; selection.  I suggest the following order to check if the job actually works
</span><br>
<span class="quotelev1">&gt; on a single node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; #PBS -V
</span><br>
<span class="quotelev1">&gt; #PBS -q wasatch
</span><br>
<span class="quotelev1">&gt; #PBS -N SWMF
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev1">&gt; # change to the run directory
</span><br>
<span class="quotelev1">&gt; #cd $SWMF_v2.3/run
</span><br>
<span class="quotelev1">&gt; cat `echo ${PBS_NODEFILE}` &gt; list_of_nodes
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 -machinefile list_of_nodes
</span><br>
<span class="quotelev1">&gt;  /home/A00945081/SWMF_v2.3/run/SWMF.exe  &gt; run.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rangam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf
</span><br>
<span class="quotelev1">&gt; Of Tushar Andriyas [thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, November 19, 2010 1:11 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Unable to find the following executable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hey Rangam,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried out the batch script and the error file comes out empty and the
</span><br>
<span class="quotelev1">&gt; output file has /home/A00945081/SWM_v2.3/run/SWMF.exe (WHEN RUN ON A SINGLE
</span><br>
<span class="quotelev1">&gt; MACHINE) and the same with multiple machines in the run. So, does that mean
</span><br>
<span class="quotelev1">&gt; that the exe is auto mounted ? What should I do next?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tushar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Nov 19, 2010 at 10:05 AM, Addepalli, Srirangam V &lt;
</span><br>
<span class="quotelev1">&gt; srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; srirangam.v.addepalli_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello Tushar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try the following script.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; #PBS -V
</span><br>
<span class="quotelev1">&gt; #PBS -q wasatch
</span><br>
<span class="quotelev1">&gt; #PBS -N SWMF
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=1:ppn=8
</span><br>
<span class="quotelev1">&gt; # change to the run directory
</span><br>
<span class="quotelev1">&gt; #cd $SWMF_v2.3/run
</span><br>
<span class="quotelev1">&gt; cat `echo ${PBS_NODEFILE}` &gt; list_of_nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The objective is to check if your user directories are auto mounted on
</span><br>
<span class="quotelev1">&gt; compute nodes and are available during run time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the job returns information about SWMF.exe then it can be safely assumed
</span><br>
<span class="quotelev1">&gt; that user directories are being auto mounted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rangam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt; [
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;] On Behalf
</span><br>
<span class="quotelev1">&gt; Of Tushar Andriyas [thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, November 19, 2010 8:35 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Unable to find the following executable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It just gives back the info on folders in my home directory. Dont get me
</span><br>
<span class="quotelev1">&gt; wrong but i m kinda new in this. So, could u type out d full command which i
</span><br>
<span class="quotelev1">&gt; need to give?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tushar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 18, 2010 at 8:35 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev1">&gt; rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; You can qsub a simple &quot;ls&quot; on that path - that will tell you if the path is
</span><br>
<span class="quotelev1">&gt; valid on all machines in that allocation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What typically happens is that home directories aren't remotely mounted, or
</span><br>
<span class="quotelev1">&gt; are mounted on a different location.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 18, 2010 at 8:31 AM, Tushar Andriyas &lt;thugnomics28_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; thugnomics28_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; no its not in the same directory as SWMF. I guess the path is the same
</span><br>
<span class="quotelev1">&gt; since all the machines in a cluster are configured d same way. How do I know
</span><br>
<span class="quotelev1">&gt; if this is not the case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 18, 2010 at 8:25 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev1">&gt; rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Is you &quot;hello world&quot; test program in the same directory as SWMF? Is it
</span><br>
<span class="quotelev1">&gt; possible that the path you are specifying is not available on all of the
</span><br>
<span class="quotelev1">&gt; remote machines? That's the most common problem we see.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 18, 2010 at 7:59 AM, Tushar Andriyas &lt;thugnomics28_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; thugnomics28_at_[hidden]&gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; thugnomics28_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the expedite reply. The thing is that although the mpirun is
</span><br>
<span class="quotelev1">&gt; setup correctly (since a simple hello world works), when I run the main
</span><br>
<span class="quotelev1">&gt; SWMF.exe executable, the cluster machines somehow fail to find the
</span><br>
<span class="quotelev1">&gt; executable (SWMF.exe).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I have attached the sample error file from one of the runs
</span><br>
<span class="quotelev1">&gt; (SWMF.e143438) and also the MAKEFILES so that you could better gauge the
</span><br>
<span class="quotelev1">&gt; problem. The makefiles have Linux as the OS and pgf90 as compiler with
</span><br>
<span class="quotelev1">&gt; mpif90 as the linker. I am using openmpi-1.2.7-pgi. Job is submitted using a
</span><br>
<span class="quotelev1">&gt; batch file (job.bats) and the scheduler is Torque (version I am not sure but
</span><br>
<span class="quotelev1">&gt; I can see three on the machines viz 2.0.0, 2.2.1, 2.5.2).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have also attached an error file from one of the clusters (WASATCH viz
</span><br>
<span class="quotelev1">&gt; SWMF.e143439) and UINTA (SWMF.e143440) with the whole path of the exe as
</span><br>
<span class="quotelev1">&gt; Srirangam mentioned as follows (in the batch file).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /opt/libraries/openmpi/openmpi-1.2.7-pgi
</span><br>
<span class="quotelev1">&gt; /home/A00945081/SWMF_v2.3/run/SWMF.exe &gt; runlog_`date +%y%m%d%H%M`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried both mpirun and mpiexec but nothing seems to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tushar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Nov 17, 2010 at 8:12 PM, Addepalli, Srirangam V &lt;
</span><br>
<span class="quotelev1">&gt; srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; srirangam.v.addepalli_at_[hidden]&gt;&gt;&lt;mailto:srirangam.v.addepalli_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev1">&gt; srirangam.v.addepalli_at_[hidden]&lt;mailto:srirangam.v.addepalli_at_[hidden]&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello Tushar,
</span><br>
<span class="quotelev1">&gt; Have you tried supplying the full path of the executable just to check ?
</span><br>
<span class="quotelev1">&gt; Rangam
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&lt;mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt; [
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt;&gt;] On Behalf
</span><br>
<span class="quotelev1">&gt; Of Tushar Andriyas [thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&lt;mailto:thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&lt;mailto:
</span><br>
<span class="quotelev1">&gt; thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev1">&gt; thugnomics28_at_[hidden]&lt;mailto:thugnomics28_at_[hidden]&gt;&gt;&gt;]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, November 17, 2010 8:49 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Unable to find the following executable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to using mpi commands and was stuck in problem with running a
</span><br>
<span class="quotelev1">&gt; code. When I submit my job through a batch file, the job exits with the
</span><br>
<span class="quotelev1">&gt; message that the executable could not be found on the machines. I have tried
</span><br>
<span class="quotelev1">&gt; a lot of options such as PBS -V and so on on but the problem persists. If
</span><br>
<span class="quotelev1">&gt; someone is interested, I can send the full info on the cluster, the compiler
</span><br>
<span class="quotelev1">&gt; and openmpi settings and other stuff. BTW the launcher is torque (which you
</span><br>
<span class="quotelev1">&gt; might have guessed). The code does not have a forum so I am in a deep mire.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Tushar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&gt;&lt;mailto:users_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14846/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14846/SWMF.e143737">SWMF.e143737</a>
</ul>
<!-- attachment="SWMF.e143737" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14847.php">John Hearns: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster (fwd)"</a>
<li><strong>Previous message:</strong> <a href="14845.php">Addepalli, Srirangam V: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>In reply to:</strong> <a href="14845.php">Addepalli, Srirangam V: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14848.php">Addepalli, Srirangam V: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Reply:</strong> <a href="14848.php">Addepalli, Srirangam V: "Re: [OMPI users] Unable to find the following executable"</a>
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
