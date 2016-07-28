<?
$subject_val = "Re: [OMPI users] MPI File Open does not work";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 09:34:40 2014" -->
<!-- isoreceived="20140506133440" -->
<!-- sent="Tue, 6 May 2014 13:34:38 +0000" -->
<!-- isosent="20140506133438" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI File Open does not work" -->
<!-- id="2A933C0E-80F6-4DED-B44C-53B5F37EFC0C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FA6DFFFF-6C66-4A47-84FC-148FB51CE162_at_math.uio.no" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI File Open does not work<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-06 09:34:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24291.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>Previous message:</strong> <a href="24289.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>In reply to:</strong> <a href="24289.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24291.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>Reply:</strong> <a href="24291.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 6, 2014, at 9:32 AM, Imran Ali &lt;imranal_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I will attempt that than. I read at
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#install-overwrite">http://www.open-mpi.org/faq/?category=building#install-overwrite</a> 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that I should completely uninstall my previous version.
</span><br>
<p>Yes, that is best.  OR: you can install into a whole separate tree and ignore the first installation.
<br>
<p><span class="quotelev1">&gt; Could you recommend to me how I can go about doing it (without root access).
</span><br>
<span class="quotelev1">&gt; I am uncertain where I can use make uninstall.
</span><br>
<p>If you don't have write access into the installation tree (i.e., it was installed via root and you don't have root access), then your best bet is simply to install into a new tree.  E.g., if OMPI is installed into /opt/openmpi-1.6.2, try installing into /opt/openmpi-1.6.5, or even $HOME/installs/openmpi-1.6.5, or something like that.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24291.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>Previous message:</strong> <a href="24289.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>In reply to:</strong> <a href="24289.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24291.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>Reply:</strong> <a href="24291.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
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
