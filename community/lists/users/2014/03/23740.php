<?
$subject_val = "Re: [OMPI users] OpenMPI job initializing problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  2 13:47:15 2014" -->
<!-- isoreceived="20140302184715" -->
<!-- sent="Sun, 2 Mar 2014 11:47:15 -0700" -->
<!-- isosent="20140302184715" -->
<!-- name="Beichuan Yan" -->
<!-- email="beichuan.yan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI job initializing problem" -->
<!-- id="D67303F39678724DA65819E042CB369892A81D0805_at_EXC2.ad.colorado.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F7A09EDA-5D62-40F8-9F5C-B4C6FC79B520_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI job initializing problem<br>
<strong>From:</strong> Beichuan Yan (<em>beichuan.yan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-02 13:47:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23741.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23739.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23739.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23741.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23741.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks. Yes I am asking sysadmin to install the libibverbs-devel, which has not been installed. 
<br>
<p>It appears that Open MPI 1.6.5 does not need the verbs.h, but 1.7.4 does need it?
<br>
<p>Beichuan
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Sunday, March 02, 2014 11:44
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI job initializing problem
<br>
<p>On Mar 2, 2014, at 10:18 AM, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Make sure you have any ofed/openib &quot;devel&quot; packages installed, in case 
</span><br>
<span class="quotelev1">&gt; they exist and yum lists them.
</span><br>
<span class="quotelev1">&gt; This may be a possible reason for missing header files.
</span><br>
<p>+1
<br>
<p>Look for libibverbs-devel.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="23741.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23739.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23739.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23741.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Reply:</strong> <a href="23741.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI job initializing problem"</a>
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
