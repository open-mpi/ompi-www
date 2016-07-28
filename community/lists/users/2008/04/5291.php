<?
$subject_val = "Re: [OMPI users] remote host not accessible";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 17:35:31 2008" -->
<!-- isoreceived="20080401213531" -->
<!-- sent="Tue, 1 Apr 2008 14:29:52 -0700" -->
<!-- isosent="20080401212952" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] remote host not accessible" -->
<!-- id="52318383-71C5-4FAB-A4A5-9C4D28ED239F_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47F2A7A7.3070709_at_bredband.net" -->
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
<strong>Date:</strong> 2008-04-01 17:29:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5292.php">Robin Humble: "[OMPI users] multi-rail failover with IB"</a>
<li><strong>Previous message:</strong> <a href="5290.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>In reply to:</strong> <a href="5290.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5293.php">Jon Mason: "Re: [OMPI users] remote host not accessible"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Danesh,
<br>
<p>The filesystem physically on the master, specifically including the  
<br>
directory where you are running the open-mpi program, should be NFS  
<br>
mounted by the slave machines. The absolute path name should be the  
<br>
same on all machines. I don't know if that will fix your problem but  
<br>
we had to do thaqt on our linux clusters and os x clusters.
<br>
<p>Doug
<br>
On Apr 1, 2008, at 2:22 PM, Danesh Daroui wrote:
<br>
<p><span class="quotelev1">&gt; You mean I should mount NFS filesystems of slave machine on master so
</span><br>
<span class="quotelev1">&gt; their disks can be accessed from a mount point on master? In that  
</span><br>
<span class="quotelev1">&gt; cases,
</span><br>
<span class="quotelev1">&gt; what moint point on master
</span><br>
<span class="quotelev1">&gt; shoud it be? Should I configure open-MPI about this mount point? Can't
</span><br>
<span class="quotelev1">&gt; it work without mounting? I think it should work since the  
</span><br>
<span class="quotelev1">&gt; processes are
</span><br>
<span class="quotelev1">&gt; locally run via SSH on remote machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder skrev:
</span><br>
<span class="quotelev2">&gt;&gt; Danesh,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do they all have access to the sam file system/physical hard drive.
</span><br>
<span class="quotelev2">&gt;&gt; You will probably need to NFS mount the filesystem on master on the
</span><br>
<span class="quotelev2">&gt;&gt; other two systems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 1, 2008, at 1:46 PM, Danesh Daroui wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have installed Open-MPI on three machine which runs OpenSUSE  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has been installed successfully. I can submit jobs locally on each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine using &quot;mpirun&quot; and it works fine. I have defined a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host file on one of them (master) where I have defined IP address of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each machine and number of slots. First when I tried to submit  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jobs to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; master it asked for password for SSH connection which showed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that master can communicate with slaves. Then I setup all  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicate with each other using SSH without password. Now when I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; submit a job on master, the job just blocks and nothing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happens. The program runs locally on each machine but it will not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when I submit it on master to be run on slaves. What can it be?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5292.php">Robin Humble: "[OMPI users] multi-rail failover with IB"</a>
<li><strong>Previous message:</strong> <a href="5290.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>In reply to:</strong> <a href="5290.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5293.php">Jon Mason: "Re: [OMPI users] remote host not accessible"</a>
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
