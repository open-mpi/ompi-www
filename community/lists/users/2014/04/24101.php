<?
$subject_val = "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 18:48:09 2014" -->
<!-- isoreceived="20140407224809" -->
<!-- sent="Mon, 7 Apr 2014 22:47:19 +0000" -->
<!-- isosent="20140407224719" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CB629F5_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45E9EA31-A3C4-41C6-A052-088CEA3758A5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 18:47:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24102.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Previous message:</strong> <a href="24100.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>In reply to:</strong> <a href="24025.php">Dave Goodell (dgoodell): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24102.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Reply:</strong> <a href="24102.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the confusion.  I am not building OpenMPI from the SVN source.  I downloaded the 1.8 tarball and did configure, and that is what failed.  I was surprised that it didn't work on a vanilla Redhat Enterprise Linux 6, out of the box operating system installation.   
<br>
<p>The error message suggested that I try autoreconf, so I tried it.  
<br>
<p>I can try the autogen.sh script and see if that fixes it, but I'm noticing another thread right now where Jeff is saying that shouldn't be necessary.
<br>
<p>-----Original Message-----
<br>
From: Dave Goodell (dgoodell) [mailto:dgoodell_at_[hidden]] 
<br>
Sent: Tuesday, April 01, 2014 11:20 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6
<br>
<p>On Apr 1, 2014, at 10:26 AM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am getting some errors building 1.8 on RHEL6.  I tried autoreconf as suggested, but it failed for the same reason.  Is there a minimum version of m4 required that is newer than that provided by RHEL6?
</span><br>
<p>Don't run &quot;autoreconf&quot; by hand, make sure to run the &quot;./autogen.sh&quot; script that is packaged with OMPI.  It will also check your versions and warn you if they are out of date.
<br>
<p>Do you need to build OMPI from the SVN source?  Or would a (pre-autogen'ed) release tarball work for you?
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24102.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Previous message:</strong> <a href="24100.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>In reply to:</strong> <a href="24025.php">Dave Goodell (dgoodell): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24102.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Reply:</strong> <a href="24102.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
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
