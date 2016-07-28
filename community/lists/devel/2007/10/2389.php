<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  6 07:19:55 2007" -->
<!-- isoreceived="20071006111955" -->
<!-- sent="Sat, 6 Oct 2007 13:19:49 +0200" -->
<!-- isosent="20071006111949" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Consolidating some IB code" -->
<!-- id="112DB3AF-5B82-481E-A8EC-D8CBF41E80F7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-06 07:19:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2390.php">Andrew Friedley: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Previous message:</strong> <a href="2388.php">Jeff Squyres: "Re: [OMPI devel] --mca btl_base_debug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2390.php">Andrew Friedley: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Reply:</strong> <a href="2390.php">Andrew Friedley: "Re: [OMPI devel] Consolidating some IB code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI: at the meeting in Paris this week, we decided that it would be a  
<br>
good idea to consolidate some &quot;utility&quot; IB code into mca/common/of  
<br>
(OpenFabrics) so that it could be shared among multiple components  
<br>
(e.g., some IB-specific collective components).
<br>
<p>Exactly what will be moved into common is still TBD, but some obvious  
<br>
candidates are HCA information/querying/selecting, protection  
<br>
domains, etc.  QP creation will likely not be worth sharing, but  
<br>
we'll see.  More info later, but I figured it was worth a &quot;heads up&quot;  
<br>
to everyone before you see the /tmp-public/of-common commit in a few  
<br>
minutes.  :-)
<br>
<p>I'll be creating a skeleton mca/common/of pseudo-component shortly;  
<br>
Gleb and Torsten will likely be populating it in the not-distant future.
<br>
<p>Andrew Friedley: you might also want to get in on this stuff...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2390.php">Andrew Friedley: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Previous message:</strong> <a href="2388.php">Jeff Squyres: "Re: [OMPI devel] --mca btl_base_debug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2390.php">Andrew Friedley: "Re: [OMPI devel] Consolidating some IB code"</a>
<li><strong>Reply:</strong> <a href="2390.php">Andrew Friedley: "Re: [OMPI devel] Consolidating some IB code"</a>
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
