<?
$subject_val = "Re: [OMPI users] remote host not accessible";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 11:05:50 2008" -->
<!-- isoreceived="20080402150550" -->
<!-- sent="Wed, 2 Apr 2008 10:05:44 -0500" -->
<!-- isosent="20080402150544" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] remote host not accessible" -->
<!-- id="200804021005.44528.jon_at_opengridcomputing.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 11:05:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5294.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Previous message:</strong> <a href="5292.php">Robin Humble: "[OMPI users] multi-rail failover with IB"</a>
<li><strong>In reply to:</strong> <a href="5290.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5294.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Reply:</strong> <a href="5294.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday 01 April 2008 04:22:47 pm Danesh Daroui wrote:
<br>
<span class="quotelev1">&gt; You mean I should mount NFS filesystems of slave machine on master so
</span><br>
<span class="quotelev1">&gt; their disks can be accessed from a mount point on master? In that cases,
</span><br>
<span class="quotelev1">&gt; what moint point on master
</span><br>
<span class="quotelev1">&gt; shoud it be? Should I configure open-MPI about this mount point? Can't
</span><br>
<span class="quotelev1">&gt; it work without mounting? I think it should work since the processes are
</span><br>
<span class="quotelev1">&gt; locally run via SSH on remote machines.
</span><br>
<p>Are you running pre-compiled rpm's or did you build from one of the svn trees?  
<br>
If the latter, was it the ompi-trunk tree?  If so, can you try the 
<br>
ompi-1.2-svn tree?
<br>
<p>Thanks,
<br>
Jon
<br>
<p><p><span class="quotelev1">&gt; D.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder skrev:
</span><br>
<span class="quotelev2">&gt; &gt; Danesh,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do they all have access to the sam file system/physical hard drive.
</span><br>
<span class="quotelev2">&gt; &gt; You will probably need to NFS mount the filesystem on master on the
</span><br>
<span class="quotelev2">&gt; &gt; other two systems.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Doug Reeder
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 1, 2008, at 1:46 PM, Danesh Daroui wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have installed Open-MPI on three machine which runs OpenSUSE and it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; has been installed successfully. I can submit jobs locally on each
</span><br>
<span class="quotelev3">&gt; &gt;&gt; machine using &quot;mpirun&quot; and it works fine. I have defined a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; host file on one of them (master) where I have defined IP address of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; each machine and number of slots. First when I tried to submit jobs to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; master it asked for password for SSH connection which showed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that master can communicate with slaves. Then I setup all machines to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; communicate with each other using SSH without password. Now when I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; submit a job on master, the job just blocks and nothing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; happens. The program runs locally on each machine but it will not run
</span><br>
<span class="quotelev3">&gt; &gt;&gt; when I submit it on master to be run on slaves. What can it be?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; D.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5294.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Previous message:</strong> <a href="5292.php">Robin Humble: "[OMPI users] multi-rail failover with IB"</a>
<li><strong>In reply to:</strong> <a href="5290.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5294.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Reply:</strong> <a href="5294.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
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
