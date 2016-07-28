<?
$subject_val = "Re: [OMPI users] Unable to find the following executable";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 09:59:36 2010" -->
<!-- isoreceived="20101118145936" -->
<!-- sent="Thu, 18 Nov 2010 07:59:22 -0700" -->
<!-- isosent="20101118145922" -->
<!-- name="Tushar Andriyas" -->
<!-- email="thugnomics28_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to find the following executable" -->
<!-- id="AANLkTimbDfR3NEg+mVWtJW8R7BZGAgeSSWSFL97GNBnY_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="15F71B097D330B42AA606A4AD8CA9640E72EA85D87_at_CRATUS.ttu.edu" -->
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
<strong>Date:</strong> 2010-11-18 09:59:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14829.php">Ralph Castain: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Previous message:</strong> <a href="14827.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14820.php">Addepalli, Srirangam V: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14829.php">Ralph Castain: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Reply:</strong> <a href="14829.php">Ralph Castain: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>Thanks for the expedite reply. The thing is that although the mpirun is
<br>
setup correctly (since a simple hello world works), when I run the main
<br>
SWMF.exe executable, the cluster machines somehow fail to find the
<br>
executable (SWMF.exe).
<br>
<p>So, I have attached the sample error file from one of the runs
<br>
(SWMF.e143438) and also the MAKEFILES so that you could better gauge the
<br>
problem. The makefiles have Linux as the OS and pgf90 as compiler with
<br>
mpif90 as the linker. I am using openmpi-1.2.7-pgi. Job is submitted using a
<br>
batch file (job.bats) and the scheduler is Torque (version I am not sure but
<br>
I can see three on the machines viz 2.0.0, 2.2.1, 2.5.2).
<br>
<p>I have also attached an error file from one of the clusters (WASATCH viz
<br>
SWMF.e143439) and UINTA (SWMF.e143440) with the *whole path of the exe as
<br>
Srirangam mentioned as follows (in the batch file)*.
<br>
<p>mpirun --prefix /opt/libraries/openmpi/openmpi-1.2.7-pgi
<br>
/home/A00945081/SWMF_v2.3/run/SWMF.exe &gt; runlog_`date +%y%m%d%H%M`
<br>
<p>I have tried both mpirun and mpiexec but nothing seems to work.
<br>
<p>Tushar
<br>
<p>On Wed, Nov 17, 2010 at 8:12 PM, Addepalli, Srirangam V &lt;
<br>
srirangam.v.addepalli_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Tushar,
</span><br>
<span class="quotelev1">&gt; Have you tried supplying the full path of the executable just to check ?
</span><br>
<span class="quotelev1">&gt; Rangam
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev1">&gt; Tushar Andriyas [thugnomics28_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, November 17, 2010 8:49 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>





<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14828/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14828/job.bats">job.bats</a>
</ul>
<!-- attachment="job.bats" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14828/Makefile.def">Makefile.def</a>
</ul>
<!-- attachment="Makefile.def" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14828/Makefile.conf">Makefile.conf</a>
</ul>
<!-- attachment="Makefile.conf" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14828/SWMF.e143438">SWMF.e143438</a>
</ul>
<!-- attachment="SWMF.e143438" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14828/SWMF.e143439">SWMF.e143439</a>
</ul>
<!-- attachment="SWMF.e143439" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14828/SWMF.e143440">SWMF.e143440</a>
</ul>
<!-- attachment="SWMF.e143440" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14829.php">Ralph Castain: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Previous message:</strong> <a href="14827.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14820.php">Addepalli, Srirangam V: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14829.php">Ralph Castain: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Reply:</strong> <a href="14829.php">Ralph Castain: "Re: [OMPI users] Unable to find the following executable"</a>
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
