<?
$subject_val = "Re: [hwloc-users] Selecting real cores vs HT cores";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 13 07:54:17 2014" -->
<!-- isoreceived="20141213125417" -->
<!-- sent="Sat, 13 Dec 2014 12:54:15 +0000" -->
<!-- isosent="20141213125415" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Selecting real cores vs HT cores" -->
<!-- id="D9EF05CB-0C16-48D4-952C-3C5162CDDC12_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAGKz=uLA5Zd4q5kj4rnnUmBB-OhRhy_o9Gs57jrGRbyJGfGD=g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Selecting real cores vs HT cores<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-13 07:54:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1135.php">Brice Goglin: "[hwloc-users] wrong os_index on AIX -&gt; please test"</a>
<li><strong>Previous message:</strong> <a href="1133.php">Jeff Hammond: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>In reply to:</strong> <a href="1133.php">Jeff Hammond: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1130.php">Brice Goglin: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check out, in particular, the section &quot;Single-task and multi-task modes&quot;.
<br>

<br>

<br>

<br>

<br>
On Dec 11, 2014, at 11:06 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; Can someone post docs for this resource halving Squyres claims? I've never heard of this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, December 11, 2014, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Jeff Squyres (jsquyres), le Thu 11 Dec 2014 21:12:27 +0000, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; When the BIOS is set to enable hyper threading, then several resources on the core are split when the machine is booted up (e.g., some of the queue depths for various processing units in the core are half the length that they are when hyperthreading is disabled in the BIOS).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps some queues get divided, but most of the resources (such as
</span><br>
<span class="quotelev1">&gt; cache, TLB, etc.) are completely available when using only one
</span><br>
<span class="quotelev1">&gt; hyperthread, like they would be with HT disabled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/12/1132.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/12/1132.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/12/1134.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/12/1134.php</a>
</span><br>

<br>

<br>
--
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1134/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1134/Hyperthreading.pdf">Hyperthreading.pdf</a>
</ul>
<!-- attachment="Hyperthreading.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1135.php">Brice Goglin: "[hwloc-users] wrong os_index on AIX -&gt; please test"</a>
<li><strong>Previous message:</strong> <a href="1133.php">Jeff Hammond: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>In reply to:</strong> <a href="1133.php">Jeff Hammond: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1130.php">Brice Goglin: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
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
