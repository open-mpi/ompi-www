<?
$subject_val = "Re: [hwloc-users] Thread core affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 10:35:00 2011" -->
<!-- isoreceived="20110804143500" -->
<!-- sent="Thu, 4 Aug 2011 16:34:56 +0200" -->
<!-- isosent="20110804143456" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread core affinity" -->
<!-- id="CAJNPZUVVvPpKr_3cTA+xc+F73sSAHTmiaZfLasmAP-ei2iM+8Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110804142547.GE4409_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Thread core affinity<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 10:34:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0369.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0367.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0367.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0369.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok,
<br>
<p>so physical OS index 0 and 1 are not true are physically near on the die.
<br>
<p>Considering that, how I can use cache locality and cache sharing by cores if
<br>
I don't know where my threads will physically bound?
<br>
<p>If L#0 and L#1  where I bind my threads are physically far, may give me bad
<br>
performance.
<br>
<p>2011/8/4 Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Gabriele Fatigati, le Thu 04 Aug 2011 16:14:35 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt;     Socket:
</span><br>
<span class="quotelev2">&gt; &gt;         ______________
</span><br>
<span class="quotelev2">&gt; &gt;        |     ____   ____      |
</span><br>
<span class="quotelev2">&gt; &gt;        |     |core |  |core |    |
</span><br>
<span class="quotelev2">&gt; &gt;        |      ____  ____      |
</span><br>
<span class="quotelev2">&gt; &gt;        |     |core | |core |     |
</span><br>
<span class="quotelev2">&gt; &gt;        |      ____  ____      |
</span><br>
<span class="quotelev2">&gt; &gt;        |     |core | |core |     |
</span><br>
<span class="quotelev2">&gt; &gt;        | ______________|
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; lstopo how create the numerations?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It does not really matter since there is no topology consideration here
</span><br>
<span class="quotelev1">&gt; (no shared cache or such).  In that case hwloc will simply follow the
</span><br>
<span class="quotelev1">&gt; order as provided by the OS. If there were shared caches, they would
</span><br>
<span class="quotelev1">&gt; come into play when sorting the topology.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; It consider physical OS index to list and create cores topology? If
</span><br>
<span class="quotelev2">&gt; &gt; yes, maybe Core L#0  and Core L#1  in a single socket are physically
</span><br>
<span class="quotelev2">&gt; &gt; near.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmm, maybe the confusion comes from the expression &quot;physically near&quot;.
</span><br>
<span class="quotelev1">&gt; What we call physical index have nothing to do with physical proximity.
</span><br>
<span class="quotelev1">&gt; It's just what the physical chip says, which often has nothing to do
</span><br>
<span class="quotelev1">&gt; with physical proximity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is nothing much fancy in the topology creation really: we simply
</span><br>
<span class="quotelev1">&gt; include objects one into the other according to logical inclusion, and
</span><br>
<span class="quotelev1">&gt; finally sort by OS (i.e. physical) index after it's all topology-sorted.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0368/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0369.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0367.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0367.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0369.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
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
