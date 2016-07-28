<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 17:31:06 2014" -->
<!-- isoreceived="20140514213106" -->
<!-- sent="Wed, 14 May 2014 17:31:04 -0400" -->
<!-- isosent="20140514213104" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="5373E098.3090403_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5373D76C.4050000_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about scheduler support<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 17:31:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24363.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24361.php">Jack Stalnaker: "[OMPI users] Build failure on scientific linux 5.4"</a>
<li><strong>In reply to:</strong> <a href="24360.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24363.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24363.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
Oh, I know that, what I am refering to is that slurm and loadleveler 
<br>
support are enabled by default, and it seems that if we're using 
<br>
Torque/Moab, we have no use for slurm and loadleveler support.
<br>
<p>My point is not that it is hard to compile it with torque support, my 
<br>
point is that it is compiling support for many schedulers while I'm 
<br>
rather convinced that very few sites actually use multiple schedulers at 
<br>
the same time.
<br>
<p><p>Maxime
<br>
<p>Le 2014-05-14 16:51, Gus Correa a &#233;crit :
<br>
<span class="quotelev1">&gt; On 05/14/2014 04:25 PM, Maxime Boissonneault wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I was compiling OpenMPI 1.8.1 today and I noticed that pretty much every
</span><br>
<span class="quotelev2">&gt;&gt; single scheduler has its support enabled by default at configure (except
</span><br>
<span class="quotelev2">&gt;&gt; the one I need, which is Torque). Is there a reason for that ? Why not
</span><br>
<span class="quotelev2">&gt;&gt; have a single scheduler enabled and require to specify it at configure
</span><br>
<span class="quotelev2">&gt;&gt; time ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any reason for me to build with loadlever or slurm if we're
</span><br>
<span class="quotelev2">&gt;&gt; using torque ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maxime Boisssonneault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Maxime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't tried 1.8.1 yet.
</span><br>
<span class="quotelev1">&gt; However, for all previous versions of OMPI I tried, up to 1.6.5,
</span><br>
<span class="quotelev1">&gt; all it took to configure it with Torque support was to point configure
</span><br>
<span class="quotelev1">&gt; to the Torque installation directory (which is non-standard in my case):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --with-tm=/opt/torque/bla/bla
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My two cents,
</span><br>
<span class="quotelev1">&gt; Gus Correa
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
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24363.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24361.php">Jack Stalnaker: "[OMPI users] Build failure on scientific linux 5.4"</a>
<li><strong>In reply to:</strong> <a href="24360.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24363.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24363.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
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
