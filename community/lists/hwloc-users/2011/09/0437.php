<?
$subject_val = "[hwloc-users] Re :  Re : hwloc topology check initializing";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  3 09:37:47 2011" -->
<!-- isoreceived="20110903133747" -->
<!-- sent="Sat, 3 Sep 2011 15:37:41 +0200 (CEST)" -->
<!-- isosent="20110903133741" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="[hwloc-users] Re :  Re : hwloc topology check initializing" -->
<!-- id="F38017BE-78ED-4397-AE39-BAB20C535595_at_inria.fr" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [hwloc-users] Re :  Re : hwloc topology check initializing<br>
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-03 09:37:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0438.php">Gabriele Fatigati: "Re: [hwloc-users] Re : Re : hwloc topology check initializing"</a>
<li><strong>Previous message:</strong> <a href="0436.php">Gabriele Fatigati: "Re: [hwloc-users] Re : hwloc topology check initializing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0438.php">Gabriele Fatigati: "Re: [hwloc-users] Re : Re : hwloc topology check initializing"</a>
<li><strong>Reply:</strong> <a href="0438.php">Gabriele Fatigati: "Re: [hwloc-users] Re : Re : hwloc topology check initializing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There's no way to implement this check safely (being non NULL doesn't mean it was properly initialized by the user, it could still point to random memory that would cause a segfault when checking).
<br>
<p>If you really need something like this, put an integer value on the side of the topology variable, and make 0 or 1 depending on whether the topology was init or not.
<br>
<p>Brice
<br>
<p><p>----- Reply message -----
<br>
De : &quot;Gabriele Fatigati&quot; &lt;g.fatigati_at_[hidden]&gt;
<br>
Pour&#194;&#160;: &quot;Hardware locality user list&quot; &lt;hwloc-users_at_[hidden]&gt;
<br>
Objet : [hwloc-users] Re : hwloc topology check initializing
<br>
Date : sam., sept. 3, 2011 15:26
<br>
<p><p><p><p>Hi Brice,
<br>
<p>but it works only if the user  assing NULL to topology.
<br>
<p>hwloc_topology_init() does not check the argument passed ? There are no ways
<br>
to check if topology is initialized or not?
<br>
<p>Thanks.
<br>
<p>2011/9/3 Brice Goglin &lt;brice.goglin_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Assign NULL to the topology when declaring the variable. It will be changed
</span><br>
<span class="quotelev1">&gt; into something else when init() is called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Reply message -----
</span><br>
<span class="quotelev1">&gt; De : &quot;Gabriele Fatigati&quot; &lt;g.fatigati_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Pour : &quot;Hardware locality user list&quot; &lt;hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Objet : [hwloc-users] hwloc topology check initializing
</span><br>
<span class="quotelev1">&gt; Date : sam., sept. 3, 2011 10:56
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear hwloc users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; how to check if my hwloc topology is initialized? I have to use
</span><br>
<span class="quotelev1">&gt; hwloc_topology_check? This code not works:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_topology_t topology;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if( topology==NULL)
</span><br>
<span class="quotelev1">&gt;  exit(-1);
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
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0438.php">Gabriele Fatigati: "Re: [hwloc-users] Re : Re : hwloc topology check initializing"</a>
<li><strong>Previous message:</strong> <a href="0436.php">Gabriele Fatigati: "Re: [hwloc-users] Re : hwloc topology check initializing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0438.php">Gabriele Fatigati: "Re: [hwloc-users] Re : Re : hwloc topology check initializing"</a>
<li><strong>Reply:</strong> <a href="0438.php">Gabriele Fatigati: "Re: [hwloc-users] Re : Re : hwloc topology check initializing"</a>
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
