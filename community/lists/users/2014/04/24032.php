<?
$subject_val = "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 17:12:22 2014" -->
<!-- isoreceived="20140402211222" -->
<!-- sent="Wed, 2 Apr 2014 23:12:20 +0200" -->
<!-- isosent="20140402211220" -->
<!-- name="Tru Huynh" -->
<!-- email="tru_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6" -->
<!-- id="20140402211220.GV25953_at_sillage.bis.pasteur.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CB61E2D_at_HDXDSP53.us.lmco.com" -->
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
<strong>From:</strong> Tru Huynh (<em>tru_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-02 17:12:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24033.php">Nisha Dhankher -M.Tech(CSE): "[OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24031.php">Ralph Castain: "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>In reply to:</strong> <a href="24023.php">Blosch, Edwin L: "[OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24100.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Reply:</strong> <a href="24100.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr 01, 2014 at 03:26:00PM +0000, Blosch, Edwin L wrote:
<br>
<span class="quotelev1">&gt; I am getting some errors building 1.8 on RHEL6.  I tried autoreconf as
</span><br>
<span class="quotelev1">&gt; suggested, but it failed for the same reason.  Is there a minimum
</span><br>
<span class="quotelev1">&gt; version of m4 required that is newer than that provided by RHEL6?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
What kind of errors? I have build on CentOS-5 (5.10) and CentOS-6 (6.5) x86_64
<br>
without any issue.
<br>
tar xjf openmpi-1.8.tar.bz2
<br>
cd openmpi-1.8/
<br>
./configure --prefix=/c6/shared/openmpi/1.8
<br>
nice make -j 8 &amp;&amp; make check &amp;&amp; make install
<br>
<p>Tru
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24033.php">Nisha Dhankher -M.Tech(CSE): "[OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24031.php">Ralph Castain: "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>In reply to:</strong> <a href="24023.php">Blosch, Edwin L: "[OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24100.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Reply:</strong> <a href="24100.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
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
