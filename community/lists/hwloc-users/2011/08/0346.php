<?
$subject_val = "Re: [hwloc-users] Thread core affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  1 09:04:28 2011" -->
<!-- isoreceived="20110801130428" -->
<!-- sent="Mon, 1 Aug 2011 15:04:24 +0200" -->
<!-- isosent="20110801130424" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread core affinity" -->
<!-- id="CAJNPZUX3n6QDXDDSRAnBFeG2Efv+TOs4jkYugkZ8diWFvcNKnA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E36A16B.3030407_at_inria.fr" -->
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
<strong>Date:</strong> 2011-08-01 09:04:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0347.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0345.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0345.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0347.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0347.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>you said:
<br>
<p>&quot;PU P#0&quot; means &quot;PU object with physical index 0&quot;.
<br>
&quot;P#&quot; prefix means &quot;physical index&quot;.
<br>
<p>But from the hwloc manual, page 58:
<br>
<p><p>HWLOC_OBJ_PU: Processing Unit, or (Logical) Processor..
<br>
<p><p>but it is in conflict with what you said :(
<br>
<p><p>2011/8/1 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; &quot;PU P#0&quot; means &quot;PU object with physical index 0&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;P#&quot; prefix means &quot;physical index&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;L#&quot; prefix means &quot;logical index&quot; (the one you want to use in
</span><br>
<span class="quotelev1">&gt; get_obj_by_type).
</span><br>
<span class="quotelev1">&gt; Use -l or -p to switch from one to the other in lstopo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 01/08/2011 14:47, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  so, if I inderstand well, PU P# numbers are not  the same specified  as
</span><br>
<span class="quotelev1">&gt; HWLOC_OBJ_PU flag?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/8/1 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 01/08/2011 12:16, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; reading a hwloc-v1.2-a4 manual, on page 15, i look an example
</span><br>
<span class="quotelev3">&gt;&gt; &gt; with 4-socket 2-core machine with hyperthreading.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Core id's are not exclusive as said before. PU's id are exclusive but
</span><br>
<span class="quotelev3">&gt;&gt; &gt; not physically sequential (I suppose)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; PU P#0 is in socket P#0 on Core P#0. PU P#1 is in another socket!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  These indexes are &quot;physical indexes&quot; (that's the default in the
</span><br>
<span class="quotelev2">&gt;&gt; graphical lstopo output). But we may want to make that clearer in the doc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0346/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0347.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0345.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0345.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0347.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0347.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
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
