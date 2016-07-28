<?
$subject_val = "Re: [OMPI users] OpenMPI Hangs, No Error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 07:34:56 2010" -->
<!-- isoreceived="20100707113456" -->
<!-- sent="Wed, 7 Jul 2010 07:35:08 -0400" -->
<!-- isosent="20100707113508" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Hangs, No Error" -->
<!-- id="213018FB-0A64-4844-90B5-B93AE9F794FE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="43CAFA05-45B9-47B5-89AE-7D7AC75FD36F_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Hangs, No Error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 07:35:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13494.php">Jeff Squyres: "Re: [OMPI users] Sending an objects vector via MPI C++"</a>
<li><strong>Previous message:</strong> <a href="13492.php">Saygin Arkan: "[OMPI users] Sending an objects vector via MPI C++"</a>
<li><strong>In reply to:</strong> <a href="13491.php">Reuti: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13567.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 6, 2010, at 6:36 PM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; But just for curiosity: at one point Open MPI chooses the ports. At 
</span><br>
<span class="quotelev1">&gt; that point it might possible to implement to start two SSH tunnels per 
</span><br>
<span class="quotelev1">&gt; slave node to have both directions and the daemons have to contact 
</span><br>
<span class="quotelev1">&gt; then &quot;localhost&quot; on a specific port which will be tunneled to each 
</span><br>
<span class="quotelev1">&gt; slave. In principle it should work I think, but it's just not 
</span><br>
<span class="quotelev1">&gt; implemented for now.
</span><br>
<p>Agreed.  Patches would be welcome!  :-)
<br>
<p><span class="quotelev1">&gt; Maybe it could be an addition to Open MPI for security concerned 
</span><br>
<span class="quotelev1">&gt; usage. I wonder about the speed impact, when compression is switched 
</span><br>
<span class="quotelev1">&gt; on per se in SSH in such a setup in case you transfer large amounts of 
</span><br>
<span class="quotelev1">&gt; data via Open MPI.
</span><br>
<p>For control data (i.e., control messages passed during MPI startup, shutdown, etc.), the impact may not matter much.  For MPI data (i.e., having something like an &quot;ssh&quot; BTL), I could imagine quite a bit of slowdown.  But then again, it depends on what your goals are -- if your local policies demand ssh or nothing, having &quot;slow&quot; MPI might be better than nothing.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="13494.php">Jeff Squyres: "Re: [OMPI users] Sending an objects vector via MPI C++"</a>
<li><strong>Previous message:</strong> <a href="13492.php">Saygin Arkan: "[OMPI users] Sending an objects vector via MPI C++"</a>
<li><strong>In reply to:</strong> <a href="13491.php">Reuti: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13567.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
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
