<?
$subject_val = "Re: [OMPI users] remote host not accessible";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 17:00:31 2008" -->
<!-- isoreceived="20080401210031" -->
<!-- sent="Tue, 1 Apr 2008 13:54:49 -0700" -->
<!-- isosent="20080401205449" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] remote host not accessible" -->
<!-- id="D2D5965B-2671-4DC1-81F5-4278910776C2_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47F29F41.1040301_at_bredband.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] remote host not accessible<br>
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-01 16:54:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5290.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Previous message:</strong> <a href="5288.php">Danesh Daroui: "[OMPI users] remote host not accessible"</a>
<li><strong>In reply to:</strong> <a href="5288.php">Danesh Daroui: "[OMPI users] remote host not accessible"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5290.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Reply:</strong> <a href="5290.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Danesh,
<br>
<p>Do they all have access to the sam file system/physical hard drive.  
<br>
You will probably need to NFS mount the filesystem on master on the  
<br>
other two systems.
<br>
<p>Doug Reeder
<br>
On Apr 1, 2008, at 1:46 PM, Danesh Daroui wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed Open-MPI on three machine which runs OpenSUSE and it
</span><br>
<span class="quotelev1">&gt; has been installed successfully. I can submit jobs locally on each
</span><br>
<span class="quotelev1">&gt; machine using &quot;mpirun&quot; and it works fine. I have defined a
</span><br>
<span class="quotelev1">&gt; host file on one of them (master) where I have defined IP address of
</span><br>
<span class="quotelev1">&gt; each machine and number of slots. First when I tried to submit jobs to
</span><br>
<span class="quotelev1">&gt; master it asked for password for SSH connection which showed
</span><br>
<span class="quotelev1">&gt; that master can communicate with slaves. Then I setup all machines to
</span><br>
<span class="quotelev1">&gt; communicate with each other using SSH without password. Now when I
</span><br>
<span class="quotelev1">&gt; submit a job on master, the job just blocks and nothing
</span><br>
<span class="quotelev1">&gt; happens. The program runs locally on each machine but it will not run
</span><br>
<span class="quotelev1">&gt; when I submit it on master to be run on slaves. What can it be?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5290.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Previous message:</strong> <a href="5288.php">Danesh Daroui: "[OMPI users] remote host not accessible"</a>
<li><strong>In reply to:</strong> <a href="5288.php">Danesh Daroui: "[OMPI users] remote host not accessible"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5290.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Reply:</strong> <a href="5290.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
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
