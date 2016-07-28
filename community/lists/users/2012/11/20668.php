<?
$subject_val = "Re: [OMPI users] mpi_leave_pinned is dangerous";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 09:43:40 2012" -->
<!-- isoreceived="20121108144340" -->
<!-- sent="Thu, 8 Nov 2012 09:43:35 -0500" -->
<!-- isosent="20121108144335" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_leave_pinned is dangerous" -->
<!-- id="A11AF308-83CB-4480-B1BE-3DABEE2DAC03_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5E5E956C-4705-4144-9FA7-22B12F297AE5_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_leave_pinned is dangerous<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-08 09:43:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20669.php">Brice Goglin: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Previous message:</strong> <a href="20667.php">Lim Jiew Meng: "[OMPI users] MPI_ERR_TRUNCATE: On Broadcast"</a>
<li><strong>In reply to:</strong> <a href="20666.php">Shamis, Pavel: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20669.php">Brice Goglin: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Reply:</strong> <a href="20669.php">Brice Goglin: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Reply:</strong> <a href="20673.php">Shamis, Pavel: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that the saga of trying to push ummunotify upstream to Linux ended up with Linus essentially saying &quot;fix your own network stack; don't put this in the main kernel.&quot;
<br>
<p>He's was right back then.  With a 2nd &quot;customer&quot; for this kind of thing (cuda), that equation might be changing, but I'll leave that to Nvidia to push on Linus.  :-)
<br>
<p>Something like ummunotify should be in the ibcore area in the kernel.  And at least initially, probably something like this should be in the cuda kernel module(s).
<br>
<p>Just my $0.02...
<br>
<p><p><p>On Nov 8, 2012, at 9:38 AM, Shamis, Pavel wrote:
<br>
<p><span class="quotelev1">&gt; Another good reason for ummunotify kernel module
</span><br>
<span class="quotelev1">&gt; (<a href="http://lwn.net/Articles/345013/">http://lwn.net/Articles/345013/</a>)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Computer Science Research Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 8, 2012, at 9:08 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 8, 2012, at 8:51 AM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure.  I will look into this.   And thank you for the feedback Jens!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, I +1 Jens' request.  MPI implementations are able to handle network registration mechanisms via standard memory hooks (their hooks are actually pretty terrible, but for the most part, they are generally functional).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If CUDA requires registered memory, then it should also provide hooks so that MPI implementations can &quot;just make it work&quot; from the users' perspective (and please please please provide BETTER hooks than verbs / glibc malloc!).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="20669.php">Brice Goglin: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Previous message:</strong> <a href="20667.php">Lim Jiew Meng: "[OMPI users] MPI_ERR_TRUNCATE: On Broadcast"</a>
<li><strong>In reply to:</strong> <a href="20666.php">Shamis, Pavel: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20669.php">Brice Goglin: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Reply:</strong> <a href="20669.php">Brice Goglin: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Reply:</strong> <a href="20673.php">Shamis, Pavel: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
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
