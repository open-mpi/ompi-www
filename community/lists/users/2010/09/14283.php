<?
$subject_val = "Re: [OMPI users] OpenMPI on the ARM processor architecture?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 13:01:02 2010" -->
<!-- isoreceived="20100922170102" -->
<!-- sent="Wed, 22 Sep 2010 13:00:58 -0400" -->
<!-- isosent="20100922170058" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on the ARM processor architecture?" -->
<!-- id="CD0BFD1D-A5AF-4DE7-8A44-A70E796D473C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87iq1xg2y6.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI on the ARM processor architecture?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 13:00:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14284.php">Gabriele Fatigati: "Re: [OMPI users] BTL layer"</a>
<li><strong>Previous message:</strong> <a href="14282.php">Dave Love: "Re: [OMPI users] OpenMPI on the ARM processor architecture?"</a>
<li><strong>In reply to:</strong> <a href="14282.php">Dave Love: "Re: [OMPI users] OpenMPI on the ARM processor architecture?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, the built-in GCC atomics might work.  I don't know if anyone has tried them; they would be most useful because they would allow us to use multiple different platforms.
<br>
<p>Patches would definitely be appreciated here.
<br>
<p><p><p>On Sep 22, 2010, at 12:25 PM, Dave Love wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres &lt;jsquyres_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe that the first step would be to get some assembly for the
</span><br>
<span class="quotelev2">&gt;&gt; ARM platform for some of OMPI's key routines (locks, atomics, etc.).
</span><br>
<span class="quotelev2">&gt;&gt; Beyond that, it *might* &quot;just work&quot;...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is <a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=579505">http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=579505</a>
</span><br>
<span class="quotelev1">&gt; relevant/useful?
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14284.php">Gabriele Fatigati: "Re: [OMPI users] BTL layer"</a>
<li><strong>Previous message:</strong> <a href="14282.php">Dave Love: "Re: [OMPI users] OpenMPI on the ARM processor architecture?"</a>
<li><strong>In reply to:</strong> <a href="14282.php">Dave Love: "Re: [OMPI users] OpenMPI on the ARM processor architecture?"</a>
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
