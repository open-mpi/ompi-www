<?
$subject_val = "Re: [OMPI users] Why is the eager limit set to 12K?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  7 20:53:33 2012" -->
<!-- isoreceived="20120508005333" -->
<!-- sent="Tue, 8 May 2012 00:53:28 +0000" -->
<!-- isosent="20120508005328" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why is the eager limit set to 12K?" -->
<!-- id="26A7A718-9E00-427A-9D3D-D31239A30FD3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FA7CD60.9090301_at_dps.uibk.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why is the eager limit set to 12K?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-07 20:53:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19215.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem in installation"</a>
<li><strong>Previous message:</strong> <a href="19213.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>In reply to:</strong> <a href="19206.php">Simone Pellegrini: "[OMPI users] Why is the eager limit set to 12K?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19227.php">Simone Pellegrini: "Re: [OMPI users] Why is the eager limit set to 12K?"</a>
<li><strong>Reply:</strong> <a href="19227.php">Simone Pellegrini: "Re: [OMPI users] Why is the eager limit set to 12K?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I *believe* that this value came out of IB hardware history.  I.e., when we wrote the openib BTL, some empirical testing showed that 12k was a good value.
<br>
<p>On May 7, 2012, at 9:25 AM, Simone Pellegrini wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I have one of those 1M dollar questions I guess, but why the eager limit threshold for Infiniband is set to 12KB by default in OpenMPI? I would like to know where this value comes from. I am not wondering whether this is a good setting for this parameter, but just why this is considered to be a good trade-off for all Infiniband clusters. What I would like to know at the end of the story is whether this is an empirical value or if there are architecture characteristics of IB which make this value come out of pen and paper work (any pointer would be appreciated).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks in advance for the reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Simone P.
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
<li><strong>Next message:</strong> <a href="19215.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem in installation"</a>
<li><strong>Previous message:</strong> <a href="19213.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>In reply to:</strong> <a href="19206.php">Simone Pellegrini: "[OMPI users] Why is the eager limit set to 12K?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19227.php">Simone Pellegrini: "Re: [OMPI users] Why is the eager limit set to 12K?"</a>
<li><strong>Reply:</strong> <a href="19227.php">Simone Pellegrini: "Re: [OMPI users] Why is the eager limit set to 12K?"</a>
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
