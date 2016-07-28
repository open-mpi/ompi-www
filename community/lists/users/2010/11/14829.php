<?
$subject_val = "Re: [OMPI users] Unable to find the following executable";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 10:27:27 2010" -->
<!-- isoreceived="20101118152727" -->
<!-- sent="Thu, 18 Nov 2010 08:25:23 -0700" -->
<!-- isosent="20101118152523" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to find the following executable" -->
<!-- id="AANLkTinzsO4rcPyPzc6+DXs-TV-igR=1OD5TN3CBzbPN_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimbDfR3NEg+mVWtJW8R7BZGAgeSSWSFL97GNBnY_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-18 10:25:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14830.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Previous message:</strong> <a href="14828.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>In reply to:</strong> <a href="14828.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14830.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Reply:</strong> <a href="14830.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is you &quot;hello world&quot; test program in the same directory as SWMF? Is it
<br>
possible that the path you are specifying is not available on all of the
<br>
remote machines? That's the most common problem we see.
<br>
<p><p>On Thu, Nov 18, 2010 at 7:59 AM, Tushar Andriyas &lt;thugnomics28_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
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
<span class="quotelev1">&gt; SWMF.e143439) and UINTA (SWMF.e143440) with the *whole path of the exe as
</span><br>
<span class="quotelev1">&gt; Srirangam mentioned as follows (in the batch file)*.
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
<span class="quotelev1">&gt; srirangam.v.addepalli_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Tushar,
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried supplying the full path of the executable just to check ?
</span><br>
<span class="quotelev2">&gt;&gt; Rangam
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf
</span><br>
<span class="quotelev2">&gt;&gt; Of Tushar Andriyas [thugnomics28_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, November 17, 2010 8:49 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Unable to find the following executable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi there,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am new to using mpi commands and was stuck in problem with running a
</span><br>
<span class="quotelev2">&gt;&gt; code. When I submit my job through a batch file, the job exits with the
</span><br>
<span class="quotelev2">&gt;&gt; message that the executable could not be found on the machines. I have tried
</span><br>
<span class="quotelev2">&gt;&gt; a lot of options such as PBS -V and so on on but the problem persists. If
</span><br>
<span class="quotelev2">&gt;&gt; someone is interested, I can send the full info on the cluster, the compiler
</span><br>
<span class="quotelev2">&gt;&gt; and openmpi settings and other stuff. BTW the launcher is torque (which you
</span><br>
<span class="quotelev2">&gt;&gt; might have guessed). The code does not have a forum so I am in a deep mire.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Tushar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14829/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14830.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Previous message:</strong> <a href="14828.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>In reply to:</strong> <a href="14828.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14830.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Reply:</strong> <a href="14830.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
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
