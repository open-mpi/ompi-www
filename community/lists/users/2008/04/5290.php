<?
$subject_val = "Re: [OMPI users] remote host not accessible";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 17:22:47 2008" -->
<!-- isoreceived="20080401212247" -->
<!-- sent="Tue, 01 Apr 2008 23:22:47 +0200" -->
<!-- isosent="20080401212247" -->
<!-- name="Danesh Daroui" -->
<!-- email="Danesh.D_at_[hidden]" -->
<!-- subject="Re: [OMPI users] remote host not accessible" -->
<!-- id="47F2A7A7.3070709_at_bredband.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D2D5965B-2671-4DC1-81F5-4278910776C2_at_rain.org" -->
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
<strong>From:</strong> Danesh Daroui (<em>Danesh.D_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-01 17:22:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5291.php">Doug Reeder: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Previous message:</strong> <a href="5289.php">Doug Reeder: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>In reply to:</strong> <a href="5289.php">Doug Reeder: "Re: [OMPI users] remote host not accessible"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5291.php">Doug Reeder: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Reply:</strong> <a href="5291.php">Doug Reeder: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Reply:</strong> <a href="5293.php">Jon Mason: "Re: [OMPI users] remote host not accessible"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You mean I should mount NFS filesystems of slave machine on master so 
<br>
their disks can be accessed from a mount point on master? In that cases, 
<br>
what moint point on master
<br>
shoud it be? Should I configure open-MPI about this mount point? Can't 
<br>
it work without mounting? I think it should work since the processes are 
<br>
locally run via SSH on remote machines.
<br>
<p>D.
<br>
<p><p>Doug Reeder skrev:
<br>
<span class="quotelev1">&gt; Danesh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do they all have access to the sam file system/physical hard drive.  
</span><br>
<span class="quotelev1">&gt; You will probably need to NFS mount the filesystem on master on the  
</span><br>
<span class="quotelev1">&gt; other two systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On Apr 1, 2008, at 1:46 PM, Danesh Daroui wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have installed Open-MPI on three machine which runs OpenSUSE and it
</span><br>
<span class="quotelev2">&gt;&gt; has been installed successfully. I can submit jobs locally on each
</span><br>
<span class="quotelev2">&gt;&gt; machine using &quot;mpirun&quot; and it works fine. I have defined a
</span><br>
<span class="quotelev2">&gt;&gt; host file on one of them (master) where I have defined IP address of
</span><br>
<span class="quotelev2">&gt;&gt; each machine and number of slots. First when I tried to submit jobs to
</span><br>
<span class="quotelev2">&gt;&gt; master it asked for password for SSH connection which showed
</span><br>
<span class="quotelev2">&gt;&gt; that master can communicate with slaves. Then I setup all machines to
</span><br>
<span class="quotelev2">&gt;&gt; communicate with each other using SSH without password. Now when I
</span><br>
<span class="quotelev2">&gt;&gt; submit a job on master, the job just blocks and nothing
</span><br>
<span class="quotelev2">&gt;&gt; happens. The program runs locally on each machine but it will not run
</span><br>
<span class="quotelev2">&gt;&gt; when I submit it on master to be run on slaves. What can it be?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; D.
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5291.php">Doug Reeder: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Previous message:</strong> <a href="5289.php">Doug Reeder: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>In reply to:</strong> <a href="5289.php">Doug Reeder: "Re: [OMPI users] remote host not accessible"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5291.php">Doug Reeder: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Reply:</strong> <a href="5291.php">Doug Reeder: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Reply:</strong> <a href="5293.php">Jon Mason: "Re: [OMPI users] remote host not accessible"</a>
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
