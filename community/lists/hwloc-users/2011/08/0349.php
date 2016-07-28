<?
$subject_val = "Re: [hwloc-users] Thread core affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  1 09:33:17 2011" -->
<!-- isoreceived="20110801133317" -->
<!-- sent="Mon, 01 Aug 2011 15:33:12 +0200" -->
<!-- isosent="20110801133312" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread core affinity" -->
<!-- id="4E36AB18.2090803_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUUKHB7kgX0w9FeJKEGyGQHsw6VxsCJQ4LUACcssdS9+sA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-08-01 09:33:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0350.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.2.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="0348.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0348.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0344.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's just a coincidence. Most modern machines (many of them are NUMA)
<br>
have non sequential numbers (to maximize memory bandwidth in the dumb
<br>
cases).
<br>
<p>Brice
<br>
<p><p><p><p>Le 01/08/2011 15:29, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; Ok,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; now it's more clear. Just a little question. Why in a NUMA machine,
</span><br>
<span class="quotelev1">&gt; PU# are sequential (page 17), and in a non NUMA machine are not
</span><br>
<span class="quotelev1">&gt; sequential? ( page 16)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/8/1 Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You're confusing object types with index types.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     PU is an object type, like Core, Socket, ... &quot;logical processor&quot;
</span><br>
<span class="quotelev1">&gt;     is a generic name for cores when there's no SMT, hardware threads
</span><br>
<span class="quotelev1">&gt;     when there's SMT/Hyperthreading, ... PU is basically the smallest
</span><br>
<span class="quotelev1">&gt;     thing that can run a software thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     &quot;P#&quot; is just the way you're numbering object, it works for PU and
</span><br>
<span class="quotelev1">&gt;     for other object types.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Any object of any type can be identified through a unique logical
</span><br>
<span class="quotelev1">&gt;     index, and possibly non-unique physical index.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     We don't often use the name &quot;logical processor&quot; because it's
</span><br>
<span class="quotelev1">&gt;     indeed confusing. &quot;Processing Unit&quot; is less confusing, that's why
</span><br>
<span class="quotelev1">&gt;     it's the official name for the smallest objects in hwloc.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 01/08/2011 15:04, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     Hi Brice,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     you said:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;PU P#0&quot; means &quot;PU object with physical index 0&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;P#&quot; prefix means &quot;physical index&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     But from the hwloc manual, page 58:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     HWLOC_OBJ_PU: Processing Unit, or (Logical) Processor..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     but it is in conflict with what you said :(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     2011/8/1 Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &quot;PU P#0&quot; means &quot;PU object with physical index 0&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;         &quot;P#&quot; prefix means &quot;physical index&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;         &quot;L#&quot; prefix means &quot;logical index&quot; (the one you want to use in
</span><br>
<span class="quotelev2">&gt;&gt;         get_obj_by_type).
</span><br>
<span class="quotelev2">&gt;&gt;         Use -l or -p to switch from one to the other in lstopo.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Le 01/08/2011 14:47, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Hi Brice,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         so, if I inderstand well, PU P# numbers are not  the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         specified  as HWLOC_OBJ_PU flag?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         2011/8/1 Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Le 01/08/2011 12:16, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;             &gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;             &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;             &gt; reading a hwloc-v1.2-a4 manual, on page 15, i look an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             example
</span><br>
<span class="quotelev4">&gt;&gt;&gt;             &gt; with 4-socket 2-core machine with hyperthreading.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;             &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;             &gt; Core id's are not exclusive as said before. PU's id
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             are exclusive but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;             &gt; not physically sequential (I suppose)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;             &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;             &gt; PU P#0 is in socket P#0 on Core P#0. PU P#1 is in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             another socket!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             These indexes are &quot;physical indexes&quot; (that's the default
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             graphical lstopo output). But we may want to make that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             clearer in the doc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Ing. Gabriele Fatigati
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Parallel programmer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Supercomputing Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         www.cineca.it &lt;<a href="http://www.cineca.it">http://www.cineca.it</a>&gt;                   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Tel:   +39 051 6171722
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         g.fatigati [AT] cineca.it &lt;<a href="http://cineca.it">http://cineca.it</a>&gt;          
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Parallel programmer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Supercomputing Group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     www.cineca.it &lt;<a href="http://www.cineca.it">http://www.cineca.it</a>&gt;                    Tel:  
</span><br>
<span class="quotelev2">&gt;&gt;     +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     g.fatigati [AT] cineca.it &lt;<a href="http://cineca.it">http://cineca.it</a>&gt;          
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0349/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0350.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.2.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="0348.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0348.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0344.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
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
