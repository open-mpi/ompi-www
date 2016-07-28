<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 14:35:18 2007" -->
<!-- isoreceived="20071001183518" -->
<!-- sent="Mon, 01 Oct 2007 19:23:34 +0100" -->
<!-- isosent="20071001182334" -->
<!-- name="Si Hammond" -->
<!-- email="simon.hammond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with 'orted'" -->
<!-- id="47013B26.7030706_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="547db2260710010526l43603405ne6cab3f82f2e44df_at_mail.gmail.com" -->
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
<strong>From:</strong> Si Hammond (<em>simon.hammond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-01 14:23:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4118.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Previous message:</strong> <a href="4116.php">Tim Prins: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>In reply to:</strong> <a href="4115.php">Amit Kumar Saha: "[OMPI users] problem with 'orted'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4128.php">Amit Kumar Saha: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>Reply:</strong> <a href="4128.php">Amit Kumar Saha: "Re: [OMPI users] problem with 'orted'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Amit Kumar Saha wrote:
<br>
<span class="quotelev1">&gt; hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using Open MPI 1.2.3 to run a task on 4 hosts as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; amit_at_ubuntu-desktop-1:~/mpi-exec$ mpirun --np 4 --hostfile
</span><br>
<span class="quotelev1">&gt; mpi-host-file ParallelSearch
</span><br>
<span class="quotelev1">&gt; bash: /usr/local/bin/orted: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that 'orted' is not found on one of the 4 hosts. I
</span><br>
<span class="quotelev1">&gt; investigated the problem and found out that whereas 'orted' is stored
</span><br>
<span class="quotelev1">&gt; in /usr/local/bin on all the other 3 hosts, it is in /usr/bin/orted on
</span><br>
<span class="quotelev1">&gt; the erroneous host. I tried to create a soft link to solve the problem
</span><br>
<span class="quotelev1">&gt; but sadly it is not so simple, it seems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would be nice to know how to get around this problem.
</span><br>
<p>Can you make sure that orted is in the PATH variable for each machine?
<br>
You can do this by adding it to /etc/bash.bashrc or an appropriate file?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Amit
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4118.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Previous message:</strong> <a href="4116.php">Tim Prins: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>In reply to:</strong> <a href="4115.php">Amit Kumar Saha: "[OMPI users] problem with 'orted'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4128.php">Amit Kumar Saha: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>Reply:</strong> <a href="4128.php">Amit Kumar Saha: "Re: [OMPI users] problem with 'orted'"</a>
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
