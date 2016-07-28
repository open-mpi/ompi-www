<?
$subject_val = "Re: [OMPI users] remote host not accessible";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 15:31:30 2008" -->
<!-- isoreceived="20080402193130" -->
<!-- sent="Wed, 2 Apr 2008 15:31:18 -0400" -->
<!-- isosent="20080402193118" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] remote host not accessible" -->
<!-- id="57899FAE-8AFD-4C35-AA42-54ABADBA91EE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47F3D8EC.8010208_at_bredband.net" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 15:31:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5296.php">Jeff Squyres: "Re: [OMPI users] multi-rail failover with IB"</a>
<li><strong>Previous message:</strong> <a href="5294.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>In reply to:</strong> <a href="5294.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Compiling the OMPI 1.2.5 tarball should be fine.
<br>
<p>Can you send the information listed on this page:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>Thanks!
<br>
<p><p>On Apr 2, 2008, at 3:05 PM, Danesh Daroui wrote:
<br>
<span class="quotelev1">&gt; No I compiled it myself. I don't know what you mean but I have built  
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev1">&gt; from the file
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.5.tar.gz. Can it be the problem? As I said everything  
</span><br>
<span class="quotelev1">&gt; works
</span><br>
<span class="quotelev1">&gt; fine locally.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jon Mason skrev:
</span><br>
<span class="quotelev2">&gt;&gt; On Tuesday 01 April 2008 04:22:47 pm Danesh Daroui wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You mean I should mount NFS filesystems of slave machine on master  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; their disks can be accessed from a mount point on master? In that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cases,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what moint point on master
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shoud it be? Should I configure open-MPI about this mount point?  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it work without mounting? I think it should work since the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; locally run via SSH on remote machines.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you running pre-compiled rpm's or did you build from one of the  
</span><br>
<span class="quotelev2">&gt;&gt; svn trees?
</span><br>
<span class="quotelev2">&gt;&gt; If the latter, was it the ompi-trunk tree?  If so, can you try the
</span><br>
<span class="quotelev2">&gt;&gt; ompi-1.2-svn tree?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Jon
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Doug Reeder skrev:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Danesh,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do they all have access to the sam file system/physical hard drive.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You will probably need to NFS mount the filesystem on master on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other two systems.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 1, 2008, at 1:46 PM, Danesh Daroui wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have installed Open-MPI on three machine which runs OpenSUSE  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; has been installed successfully. I can submit jobs locally on each
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; machine using &quot;mpirun&quot; and it works fine. I have defined a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; host file on one of them (master) where I have defined IP  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; address of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; each machine and number of slots. First when I tried to submit  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jobs to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; master it asked for password for SSH connection which showed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that master can communicate with slaves. Then I setup all  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; machines to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communicate with each other using SSH without password. Now when I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; submit a job on master, the job just blocks and nothing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; happens. The program runs locally on each machine but it will  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; not run
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when I submit it on master to be run on slaves. What can it be?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; D.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5296.php">Jeff Squyres: "Re: [OMPI users] multi-rail failover with IB"</a>
<li><strong>Previous message:</strong> <a href="5294.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>In reply to:</strong> <a href="5294.php">Danesh Daroui: "Re: [OMPI users] remote host not accessible"</a>
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
