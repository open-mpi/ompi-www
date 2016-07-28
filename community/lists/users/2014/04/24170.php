<?
$subject_val = "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 02:29:46 2014" -->
<!-- isoreceived="20140414062946" -->
<!-- sent="Mon, 14 Apr 2014 00:29:30 -0600" -->
<!-- isosent="20140414062930" -->
<!-- name="Daniel Milroy" -->
<!-- email="Daniel.Milroy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4" -->
<!-- id="93B0BFDB4CD56A40BBAE7FB8D8984BF701211EEA16B1_at_EXC4.ad.colorado.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8A80A682-0205-4BB3-8A12-210F0A800A6E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4<br>
<strong>From:</strong> Daniel Milroy (<em>Daniel.Milroy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 02:29:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24171.php">Lubrano Francesco: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<li><strong>Previous message:</strong> <a href="24169.php">Ralph Castain: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<li><strong>In reply to:</strong> <a href="24153.php">Jeff Squyres (jsquyres): "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24189.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff,
<br>
<p>I will pass your recommendation to the users and apprise you when I receive a response.
<br>
<p><p>Thank you,
<br>
<p>Dan Milroy
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Friday, April 11, 2014 6:45 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4
<br>
<p>Sorry for the delay in replying.
<br>
<p>Can you try upgrading to Open MPI 1.8, which was released last week?  We refreshed the version of ROMIO that is included in OMPI 1.8 vs. 1.6.
<br>
<p><p>On Apr 8, 2014, at 6:49 PM, Daniel Milroy &lt;Daniel.Milroy_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Recently a couple of our users have experienced difficulties with compute jobs failing with OpenMPI 1.6.4 compiled against GCC 4.7.2, with the nodes running kernel 2.6.32-279.5.2.el6.x86_64.  The error is:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; File locking failed in ADIOI_Set_lock(fd 7,cmd F_SETLKW/7,type F_WRLCK/1,whence 0) with return value FFFFFFFF and errno 26.
</span><br>
<span class="quotelev1">&gt; - If the file system is NFS, you need to use NFS version 3, ensure that the lockd daemon is running on all the machines, and mount the directory with the 'noac' option (no attribute caching).
</span><br>
<span class="quotelev1">&gt; - If the file system is LUSTRE, ensure that the directory is mounted with the 'flock' option.
</span><br>
<span class="quotelev1">&gt; ADIOI_Set_lock:: Function not implemented ADIOI_Set_lock:offset 0, 
</span><br>
<span class="quotelev1">&gt; length 8
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The file system in question is indeed Lustre, and mounting with flock isn't possible in our environment.  I recommended the following changes to the users' code:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; MPI_Info_set(info, &quot;collective_buffering&quot;, &quot;true&quot;); MPI_Info_set(info, 
</span><br>
<span class="quotelev1">&gt; &quot;romio_lustre_ds_in_coll&quot;, &quot;disable&quot;); MPI_Info_set(info, 
</span><br>
<span class="quotelev1">&gt; &quot;romio_ds_read&quot;, &quot;disable&quot;); MPI_Info_set(info, &quot;romio_ds_write&quot;, 
</span><br>
<span class="quotelev1">&gt; &quot;disable&quot;);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Which results in the same error as before.  Are there any other MPI options I can set?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thank you in advance for any advice,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Dan Milroy
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24171.php">Lubrano Francesco: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<li><strong>Previous message:</strong> <a href="24169.php">Ralph Castain: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<li><strong>In reply to:</strong> <a href="24153.php">Jeff Squyres (jsquyres): "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24189.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
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
