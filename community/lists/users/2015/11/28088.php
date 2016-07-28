<?
$subject_val = "Re: [OMPI users] Setting bind-to none as default via environment?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 20 10:19:32 2015" -->
<!-- isoreceived="20151120151932" -->
<!-- sent="Fri, 20 Nov 2015 15:19:05 +0000" -->
<!-- isosent="20151120151905" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting bind-to none as default via environment?" -->
<!-- id="871tbkg0ly.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAAbhqc7ebV-t8yfC2K2BY=Jx77ftOZojFhi6Hjhm-wc9Q4fMsQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting bind-to none as default via environment?<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-20 10:19:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28089.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
<li><strong>Previous message:</strong> <a href="28087.php">Dave Love: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>In reply to:</strong> <a href="28006.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[Another old one.]
<br>
<p>Nick Papior &lt;nickpapior_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Sure, I guess you should use numa to check how the latency/distance is for
</span><br>
<span class="quotelev1">&gt; the other processors to not select a _bad_ node?
</span><br>
<span class="quotelev1">&gt; I am not sure.
</span><br>
<span class="quotelev1">&gt; I can see difficulties in my above post for huge numa nodes, but for 8-10
</span><br>
<span class="quotelev1">&gt; cores per socket it is pretty good. But it is easy to use ;)
</span><br>
<p>Actually, it isn't easy to use, in general.  If you allow sharing of
<br>
nodes, you'll need to schedule to sockets specifically, which your batch
<br>
system must support.  SGE, specifically, doesn't, as it hasn't seemed
<br>
worth it, but it is OK binding to cores.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28089.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
<li><strong>Previous message:</strong> <a href="28087.php">Dave Love: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>In reply to:</strong> <a href="28006.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
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
