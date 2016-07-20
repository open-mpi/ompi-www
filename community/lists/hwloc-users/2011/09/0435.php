<?
$subject_val = "[hwloc-users] Re :  hwloc topology check initializing";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  3 05:26:34 2011" -->
<!-- isoreceived="20110903092634" -->
<!-- sent="Sat, 3 Sep 2011 11:26:28 +0200 (CEST)" -->
<!-- isosent="20110903092628" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="[hwloc-users] Re :  hwloc topology check initializing" -->
<!-- id="AEA82C64-0576-4A50-956B-AD892948B5C1_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-users] Re :  hwloc topology check initializing<br>
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-03 05:26:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0436.php">Gabriele Fatigati: "Re: [hwloc-users] Re : hwloc topology check initializing"</a>
<li><strong>Previous message:</strong> <a href="0434.php">Gabriele Fatigati: "[hwloc-users] hwloc topology check initializing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0436.php">Gabriele Fatigati: "Re: [hwloc-users] Re : hwloc topology check initializing"</a>
<li><strong>Reply:</strong> <a href="0436.php">Gabriele Fatigati: "Re: [hwloc-users] Re : hwloc topology check initializing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Assign NULL to the topology when declaring the variable. It will be changed into something else when init() is called.
<br>
<p>Brice
<br>
<p>----- Reply message -----
<br>
De : &quot;Gabriele Fatigati&quot; &lt;g.fatigati_at_[hidden]&gt;
<br>
Pour&#194;&#160;: &quot;Hardware locality user list&quot; &lt;hwloc-users_at_[hidden]&gt;
<br>
Objet : [hwloc-users] hwloc topology check initializing
<br>
Date : sam., sept. 3, 2011 10:56
<br>
<p><p><p><p>Dear hwloc users,
<br>
<p>how to check if my hwloc topology is initialized? I have to use
<br>
hwloc_topology_check? This code not works:
<br>
<p>hwloc_topology_t topology;
<br>
<p>if( topology==NULL)
<br>
&nbsp;&nbsp;exit(-1);
<br>
<p><p><p><p><p><pre>
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
<li><strong>Next message:</strong> <a href="0436.php">Gabriele Fatigati: "Re: [hwloc-users] Re : hwloc topology check initializing"</a>
<li><strong>Previous message:</strong> <a href="0434.php">Gabriele Fatigati: "[hwloc-users] hwloc topology check initializing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0436.php">Gabriele Fatigati: "Re: [hwloc-users] Re : hwloc topology check initializing"</a>
<li><strong>Reply:</strong> <a href="0436.php">Gabriele Fatigati: "Re: [hwloc-users] Re : hwloc topology check initializing"</a>
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
