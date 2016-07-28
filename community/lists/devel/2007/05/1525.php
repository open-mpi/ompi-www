<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 18:26:45 2007" -->
<!-- isoreceived="20070509222645" -->
<!-- sent="Wed, 09 May 2007 18:26:14 -0700" -->
<!-- isosent="20070510012614" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl - bugs opened" -->
<!-- id="464274B6.2030508_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1178748915.382.145.camel_at_stevo-desktop" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-09 21:26:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1526.php">Peter Kjellstrom: "[OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>Previous message:</strong> <a href="1524.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1522.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1521.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Steve Wise wrote:
<br>
<span class="quotelev2">&gt;&gt; I hope you guys are documenting this in a way that makes this issue 
</span><br>
<span class="quotelev2">&gt;&gt; extremely clear to both uDAPL and OFA verbs (is this the right naming?) 
</span><br>
<span class="quotelev2">&gt;&gt; users.  Maybe it's been done already, but is it possible to emit some 
</span><br>
<span class="quotelev2">&gt;&gt; sort of loud warning/error when the accept()'ing side tries to send 
</span><br>
<span class="quotelev2">&gt;&gt; before a receive?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The connection comes tumbling down.  How's that for loud? :)
</span><br>
<p>works :)
<br>
<p><span class="quotelev1">&gt; Seriously though, it isn't documented well enough.  But we're bleeding
</span><br>
<span class="quotelev1">&gt; edge here. And I'm still hoping somebody will come up with an elegant
</span><br>
<span class="quotelev1">&gt; solution that doesn't break interoperability, applications and/or iwarp
</span><br>
<span class="quotelev1">&gt; hw (i'm a dreamer :). 
</span><br>
<p>Well, if documenting it once saves someone a headache and a few hours of 
<br>
their time, it's probably worth it.
<br>
<p>Seems like everyone understands now what the problem is, that it sucks, 
<br>
and it can't be fixed lower down the stack :)  Thanks for explaining 
<br>
Caitlin/Steve.  As Jeff wrote, dealing with it in the BTLs really won't 
<br>
be that hard, just makes things a little more complicated to maintain.
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1526.php">Peter Kjellstrom: "[OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>Previous message:</strong> <a href="1524.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1522.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1521.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
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
