<?
$subject_val = "Re: [OMPI users] mpi_leave_pinned is dangerous";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 10:05:31 2012" -->
<!-- isoreceived="20121108150531" -->
<!-- sent="Thu, 8 Nov 2012 10:05:26 -0500" -->
<!-- isosent="20121108150526" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_leave_pinned is dangerous" -->
<!-- id="6B2C5168-C72F-4A31-AE8C-79E53859D30B_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="509BC621.8020509_at_inria.fr" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-08 10:05:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20675.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  How is hwloc used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20673.php">Shamis, Pavel: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>In reply to:</strong> <a href="20669.php">Brice Goglin: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20673.php">Shamis, Pavel: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; * Some perf (or trace?) guys came late and said &quot;oh your code should be
</span><br>
<p>I think eventually there was a consensus that perf/trace doesn't fit well ... (or it requires substantial changes)
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 08/11/2012 15:43, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Note that the saga of trying to push ummunotify upstream to Linux ended up with Linus essentially saying &quot;fix your own network stack; don't put this in the main kernel.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; He's was right back then.  With a 2nd &quot;customer&quot; for this kind of thing (cuda), that equation might be changing, but I'll leave that to Nvidia to push on Linus.  :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Something like ummunotify should be in the ibcore area in the kernel.  And at least initially, probably something like this should be in the cuda kernel module(s).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just my $0.02...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 8, 2012, at 9:38 AM, Shamis, Pavel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another good reason for ummunotify kernel module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (<a href="http://lwn.net/Articles/345013/">http://lwn.net/Articles/345013/</a>)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Research Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science and Math Division
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 8, 2012, at 9:08 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 8, 2012, at 8:51 AM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not sure.  I will look into this.   And thank you for the feedback Jens!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW, I +1 Jens' request.  MPI implementations are able to handle network registration mechanisms via standard memory hooks (their hooks are actually pretty terrible, but for the most part, they are generally functional).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If CUDA requires registered memory, then it should also provide hooks so that MPI implementations can &quot;just make it work&quot; from the users' perspective (and please please please provide BETTER hooks than verbs / glibc malloc!).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="20675.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  How is hwloc used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20673.php">Shamis, Pavel: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>In reply to:</strong> <a href="20669.php">Brice Goglin: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20673.php">Shamis, Pavel: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
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
