<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 09:12:43 2007" -->
<!-- isoreceived="20070726131243" -->
<!-- sent="Thu, 26 Jul 2007 09:12:26 -0400" -->
<!-- isosent="20070726131226" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] openib credits problem" -->
<!-- id="5FA8BEAE-BEEA-42E5-BBE9-5E792A6761F6_at_cisco.com" -->
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
<strong>Date:</strong> 2007-07-26 09:12:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2008.php">Gleb Natapov: "Re: [OMPI devel] openib credits problem"</a>
<li><strong>Previous message:</strong> <a href="2006.php">Jeff Squyres: "[OMPI devel] static rate / connection modularity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2008.php">Gleb Natapov: "Re: [OMPI devel] openib credits problem"</a>
<li><strong>Reply:</strong> <a href="2008.php">Gleb Natapov: "Re: [OMPI devel] openib credits problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I got a problem in MTT runs last night with the openib BTL w.r.t.  
<br>
credits:
<br>
<p>[...lots of IMB output...]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]    
<br>
Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000       367.66       371.58        
<br>
369.34         0.00
<br>
IMB-MPI1: ./btl_openib_endpoint.h:261: Assertion `endpoint-&gt;qps 
<br>
[qp].u.pp_qp.rd_credits &lt; rd_num' failed.
<br>
<p>Gleb -- you've been mucking around in here recently; did something  
<br>
you do cause this, perchance?
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
<li><strong>Next message:</strong> <a href="2008.php">Gleb Natapov: "Re: [OMPI devel] openib credits problem"</a>
<li><strong>Previous message:</strong> <a href="2006.php">Jeff Squyres: "[OMPI devel] static rate / connection modularity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2008.php">Gleb Natapov: "Re: [OMPI devel] openib credits problem"</a>
<li><strong>Reply:</strong> <a href="2008.php">Gleb Natapov: "Re: [OMPI devel] openib credits problem"</a>
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
