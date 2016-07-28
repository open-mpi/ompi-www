<?
$subject_val = "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 19:02:48 2014" -->
<!-- isoreceived="20140609230248" -->
<!-- sent="Mon, 9 Jun 2014 23:02:46 +0000" -->
<!-- isosent="20140609230246" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E" -->
<!-- id="317BF6BE-1D16-4953-A3FC-2A21B2B0596C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+h+pRWrHsnAj5JG0i3tKhYQZU1hY2nFgx1u_WVhorgB4oRjkA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-09 19:02:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24616.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24614.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>In reply to:</strong> <a href="24614.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24609.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 9, 2014, at 7:00 PM, Vineet Rawat &lt;vineetrawat0_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We actually do ship the &lt;prefix&gt;/share and &lt;prefix&gt;/etc directories. We set OPAL_PREFIX to a sub-directory of our installation and make sure those things are in our PATH/LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can try adding the additional shared libs but it doesn't sound like anything's dlopen'ed so I'm not sure it'll help.
</span><br>
<p>Yeah, probably not -- we're conditioned to think in terms of shared libraries and DSOs, since that's our default configuration.  :-)
<br>
<p>Try those MCA params Ralph suggested; let's see what the debug output shows.
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
<li><strong>Next message:</strong> <a href="24616.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24614.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>In reply to:</strong> <a href="24614.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24609.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
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
