<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 25 08:17:39 2007" -->
<!-- isoreceived="20070725121739" -->
<!-- sent="Wed, 25 Jul 2007 08:17:21 -0400" -->
<!-- isosent="20070725121721" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance tuning: focus on latency" -->
<!-- id="AC5090C1-DB3F-4AE0-A2FE-A076815C6519_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1D5F93ED-C1DD-4556-ABAB-F77479BD3028_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-25 08:17:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3761.php">Peter Kjellstrom: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>Previous message:</strong> <a href="3759.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>In reply to:</strong> <a href="3752.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 23, 2007, at 8:53 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; It looks like we enable Nagle right when TCP BTL connections are
</span><br>
<span class="quotelev1">&gt; made.  Surprisingly, it looks like we don't have a run-time option to
</span><br>
<span class="quotelev1">&gt; turn it off for power-users like you who want to really tweak around.
</span><br>
<p>I should note that I got the logic backwards here (@#@#$@#$!!! I'm  
<br>
going to claim it was too early in the morning when I initially  
<br>
replied...).  Open MPI *disables* Nagle's algorithm by default.  In  
<br>
hindsight, this is exactly what you would expect since OMPI is trying  
<br>
to reduce latency.
<br>
<p>Setting optval to 1 enables NODELAY, which *disables* Nagle's algorithm.
<br>
Setting optval to 0 disables NODELAY, which *enables* Nagle's algorithm.
<br>
<p>I'm adding a new MCA parameter named &quot;btl_tcp_use_nagle&quot; which will  
<br>
make this a bit easier to set (no negative logic for the user to  
<br>
figure out) in a future release -- probably the 1.3 series.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3761.php">Peter Kjellstrom: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>Previous message:</strong> <a href="3759.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>In reply to:</strong> <a href="3752.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
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
