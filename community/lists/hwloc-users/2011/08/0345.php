<?
$subject_val = "Re: [hwloc-users] Thread core affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  1 08:51:59 2011" -->
<!-- isoreceived="20110801125159" -->
<!-- sent="Mon, 01 Aug 2011 14:51:55 +0200" -->
<!-- isosent="20110801125155" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread core affinity" -->
<!-- id="4E36A16B.3030407_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUXfyi4963W20-Kt7eHqzMPwEp0E_1DtLO-_qrCY3q+H0Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-01 08:51:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0346.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0344.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0343.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0346.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0346.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;PU P#0&quot; means &quot;PU object with physical index 0&quot;.
<br>
&quot;P#&quot; prefix means &quot;physical index&quot;.
<br>
&quot;L#&quot; prefix means &quot;logical index&quot; (the one you want to use in
<br>
get_obj_by_type).
<br>
Use -l or -p to switch from one to the other in lstopo.
<br>
<p>Brice
<br>
<p><p><p>Le 01/08/2011 14:47, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so, if I inderstand well, PU P# numbers are not  the same specified
</span><br>
<span class="quotelev1">&gt;  as HWLOC_OBJ_PU flag?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/8/1 Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 01/08/2011 12:16, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev2">&gt;     &gt; Hi,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; reading a hwloc-v1.2-a4 manual, on page 15, i look an example
</span><br>
<span class="quotelev2">&gt;     &gt; with 4-socket 2-core machine with hyperthreading.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Core id's are not exclusive as said before. PU's id are
</span><br>
<span class="quotelev1">&gt;     exclusive but
</span><br>
<span class="quotelev2">&gt;     &gt; not physically sequential (I suppose)
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; PU P#0 is in socket P#0 on Core P#0. PU P#1 is in another socket!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     These indexes are &quot;physical indexes&quot; (that's the default in the
</span><br>
<span class="quotelev1">&gt;     graphical lstopo output). But we may want to make that clearer in
</span><br>
<span class="quotelev1">&gt;     the doc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brice
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
<span class="quotelev1">&gt; www.cineca.it &lt;<a href="http://www.cineca.it">http://www.cineca.it</a>&gt;                    Tel:   +39 051
</span><br>
<span class="quotelev1">&gt; 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it &lt;<a href="http://cineca.it">http://cineca.it</a>&gt;          
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0345/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0346.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0344.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0343.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0346.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0346.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
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
