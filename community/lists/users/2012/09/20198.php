<?
$subject_val = "Re: [OMPI users] Setting RPATH for Open MPI libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 10:20:28 2012" -->
<!-- isoreceived="20120912142028" -->
<!-- sent="Wed, 12 Sep 2012 10:20:31 -0400" -->
<!-- isosent="20120912142031" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting RPATH for Open MPI libraries" -->
<!-- id="F1C78253-2FA7-4779-AA75-EF7FE05B3023_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAM9tzSnG2D5Hr-TB7zxWU57WcS8wDXMFOQUQWVua_6KAZ-uvGA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting RPATH for Open MPI libraries<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 10:20:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20199.php">Brice Goglin: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20197.php">Jeff Squyres: "Re: [OMPI users] Ensuring use of real cores"</a>
<li><strong>In reply to:</strong> <a href="20190.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20206.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Reply:</strong> <a href="20206.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have a long-standing philosophy that OMPI should add the bare minimum number of preprocessor/compiler/linker flags to its wrapper compilers, and let the user/administrator customize from there.
<br>
<p>That being said, a looong time ago, I started a patch to add a --with-rpath option to configure, but never finished it.  :-\  I can try to get it back on my to-do list.
<br>
<p>For the moment, you might want to try the configure --enable-mpirun-prefix-by-default option, too.
<br>
<p><p><p>On Sep 11, 2012, at 2:31 PM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Sep 11, 2012 at 2:29 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; With &quot;user&quot; you mean someone compiling Open MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20199.php">Brice Goglin: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20197.php">Jeff Squyres: "Re: [OMPI users] Ensuring use of real cores"</a>
<li><strong>In reply to:</strong> <a href="20190.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20206.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Reply:</strong> <a href="20206.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
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
