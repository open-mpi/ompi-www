<?
$subject_val = "Re: [hwloc-users] hwloc set membind function";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 25 15:11:15 2011" -->
<!-- isoreceived="20110925191115" -->
<!-- sent="Sun, 25 Sep 2011 21:11:09 +0200" -->
<!-- isosent="20110925191109" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc set membind function" -->
<!-- id="4E7F7CCD.7060805_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUUf8MV7HptnmCY1SUN1Q5jeBP_iYZNG=ZiV8mgts2hB1Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc set membind function<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-25 15:11:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/10/0468.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.2.2 released"</a>
<li><strong>Previous message:</strong> <a href="0466.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>In reply to:</strong> <a href="0466.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0453.php">Samuel Thibault: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/09/2011 21:05, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; Ok,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so, set_membind() merged with HWLOC_MEMBIND_BIND is useless?
</span><br>
<p>It's likely the most useful memory binding case. It's similar to what
<br>
numactl --membind does for instance, very common.
<br>
<p><span class="quotelev1">&gt; The behaviour I want to set is it possible?
</span><br>
<p>I just said &quot;you have to touch right after malloc.&quot;
<br>
<p>Brice
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/9/25 Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 25/09/2011 20:57, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev2">&gt;     &gt; after done this, memory is allocated not in a local node of thread
</span><br>
<span class="quotelev2">&gt;     &gt; that does set_membind and malloc, but in node of  thread that
</span><br>
<span class="quotelev1">&gt;     touches
</span><br>
<span class="quotelev2">&gt;     &gt; it. And I don't understand this behaviour :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Memory is allocated when first-touched. If there's no area-specific
</span><br>
<span class="quotelev1">&gt;     policy, it's allocated according to the policy of the thread that
</span><br>
<span class="quotelev1">&gt;     touches, not according to the policy of the one that did malloc.
</span><br>
<span class="quotelev1">&gt;     If you
</span><br>
<span class="quotelev1">&gt;     want to follow the malloc'er thread, you have to touch right after
</span><br>
<span class="quotelev1">&gt;     malloc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;     hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPC specialist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it &lt;<a href="http://www.cineca.it">http://www.cineca.it</a>&gt;                    Tel:   +39 051
</span><br>
<span class="quotelev1">&gt; 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it &lt;<a href="http://cineca.it">http://cineca.it</a>&gt;          
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0467/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/10/0468.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.2.2 released"</a>
<li><strong>Previous message:</strong> <a href="0466.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<li><strong>In reply to:</strong> <a href="0466.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc set membind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0453.php">Samuel Thibault: "Re: [hwloc-users] hwloc set membind function"</a>
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
