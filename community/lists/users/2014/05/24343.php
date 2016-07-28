<?
$subject_val = "Re: [OMPI users] MPI File Open does not work";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 10 10:04:11 2014" -->
<!-- isoreceived="20140510140411" -->
<!-- sent="Sat, 10 May 2014 16:05:32 +0200" -->
<!-- isosent="20140510140532" -->
<!-- name="Imran Ali" -->
<!-- email="imranal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI File Open does not work" -->
<!-- id="1DD00B04-A44D-4EE3-8C85-A28BC895A2F4_at_math.uio.no" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="14F0596C-C5C5-4B1A-A4A8-8849D44AB76A_at_math.uio.no" -->
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
<strong>From:</strong> Imran Ali (<em>imranal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-10 10:05:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24344.php">Ralph Castain: "Re: [OMPI users] No output when adding host to hostfile"</a>
<li><strong>Previous message:</strong> <a href="24342.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<li><strong>In reply to:</strong> <a href="24291.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The issue was resolved using openMPI 1.8.1. After installing this version, I was successfully able to use MPI File Open.
<br>
<p>Thanks for your assistance Jeff Squyres!
<br>
<p>Imran Ali
<br>
<p><p>6. mai 2014 kl. 15:40 skrev Imran Ali &lt;imranal_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6. mai 2014 kl. 15:34 skrev Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 6, 2014, at 9:32 AM, Imran Ali &lt;imranal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will attempt that than. I read at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building#install-overwrite">http://www.open-mpi.org/faq/?category=building#install-overwrite</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that I should completely uninstall my previous version.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, that is best.  OR: you can install into a whole separate tree and ignore the first installation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you recommend to me how I can go about doing it (without root access).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am uncertain where I can use make uninstall.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you don't have write access into the installation tree (i.e., it was installed via root and you don't have root access), then your best bet is simply to install into a new tree.  E.g., if OMPI is installed into /opt/openmpi-1.6.2, try installing into /opt/openmpi-1.6.5, or even $HOME/installs/openmpi-1.6.5, or something like that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My install was in my user directory (i.e $HOME). I managed to locate the source directory and successfully run make uninstall.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will let you know how things went after installation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Imran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="24344.php">Ralph Castain: "Re: [OMPI users] No output when adding host to hostfile"</a>
<li><strong>Previous message:</strong> <a href="24342.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Intercommunicators Collective Communciation"</a>
<li><strong>In reply to:</strong> <a href="24291.php">Imran Ali: "Re: [OMPI users] MPI File Open does not work"</a>
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
