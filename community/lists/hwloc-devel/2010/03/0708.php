<?
$subject_val = "Re: [hwloc-devel] 1.0-rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 06:37:18 2010" -->
<!-- isoreceived="20100303113718" -->
<!-- sent="Wed, 3 Mar 2010 05:37:10 -0600" -->
<!-- isosent="20100303113710" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0-rc1" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA17056703_at_XMB-RCD-205.cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[hwloc-devel] 1.0-rc1" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.0-rc1<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 06:37:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0709.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795"</a>
<li><strong>Previous message:</strong> <a href="0707.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/02/0686.php">Brice Goglin: "[hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0784.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounnds reasonable to me:
<br>

<br>
1. Drop --log and --phys; only have --verb
<br>
2. Print phys as an attribute; print lots more phys's with --verb
<br>
3. I don't have much of an opinion wrt gui output, but it should be consistent with all the other flavors of output
<br>

<br>
My $0.02. 
<br>

<br>
-jms
<br>
Sent from my PDA.  No type good.
<br>

<br>
----- Original Message -----
<br>
From: hwloc-devel-bounces_at_[hidden] &lt;hwloc-devel-bounces_at_[hidden]&gt;
<br>
To: Hardware locality development list &lt;hwloc-devel_at_[hidden]&gt;
<br>
Sent: Wed Mar 03 03:56:42 2010
<br>
Subject: Re: [hwloc-devel] 1.0-rc1
<br>

<br>
Brice Goglin wrote:
<br>
<span class="quotelev2">&gt;&gt; What hasn't been finished yet and to my opinion needs to be for v1.0, is
</span><br>
<span class="quotelev2">&gt;&gt; the prefix/suffix/whatever to easily distinguish between physical and
</span><br>
<span class="quotelev2">&gt;&gt; logical numbers in lstopo.  
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I played with this today and arrived to these conclusions:
</span><br>
<span class="quotelev1">&gt; * Having 'l' or 'p' prefix without # or any other special character is
</span><br>
<span class="quotelev1">&gt; very confusing since we already have things like L1 for cache levels and
</span><br>
<span class="quotelev1">&gt; P for proc numbers
</span><br>
<span class="quotelev1">&gt; * Having nothing before the number is a bad idea, it would be confusing
</span><br>
<span class="quotelev1">&gt; with cache/misc levels
</span><br>
<span class="quotelev1">&gt; * I like '#' as a prefix since it's widely used as a symbol meaning
</span><br>
<span class="quotelev1">&gt; &quot;number&quot; and I found no other nice character
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I see two solutions:
</span><br>
<span class="quotelev1">&gt; * p#2 and l#2 (prefixed with a space)
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; * #2p and #2l
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>

<br>
I am asking people here, some are confused by all these
<br>
--logical/--physical outputs. One idea that came is to always keep the
<br>
logical index and print the physical index as an attribute. Something like:
<br>

<br>
$ lstopo -
<br>
Machine(1508MB) + Socket#0 (phys=0) + L2(phys=0,2048KB)
<br>
&nbsp;&nbsp;L1(phys=0,32KB) + Core#0(phys=0) + P#0(phys=0)
<br>
&nbsp;&nbsp;L1(phys=1,32KB) + Core#1(phys=1) + P#1(phys=1)
<br>

<br>

<br>
I am interested by this idea. The physical index could actually be
<br>
displayed as an attribute for Proc all the time since it's often
<br>
interesting. The physical index of other objects is often useless and
<br>
even confusing.
<br>

<br>
So what about we:
<br>
1) keep --logical by default, add physical index in Proc attributes by
<br>
default
<br>
2) if --verbose, we add the physical index in every object attribute
<br>
3) if --physical, we replace #0 with physical indexes as #0p (and don't
<br>
print logical indexes anywhere)
<br>
I would actually just drop (3). If we really need --physical to match
<br>
other tools command-line options, we could just make --physical
<br>
equivalent to --verbose.
<br>

<br>
Brice
<br>

<br>
_______________________________________________
<br>
hwloc-devel mailing list
<br>
hwloc-devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0708/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0709.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795"</a>
<li><strong>Previous message:</strong> <a href="0707.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/02/0686.php">Brice Goglin: "[hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0784.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
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
