<?
$subject_val = "[OMPI devel] Component open";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 13:30:44 2008" -->
<!-- isoreceived="20081022173044" -->
<!-- sent="Wed, 22 Oct 2008 11:30:38 -0600" -->
<!-- isosent="20081022173038" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Component open" -->
<!-- id="9DD56635-2DC7-49C7-915C-C8F170B6E118_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Component open<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 13:30:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4785.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="4783.php">Leonardo Fialho: "[OMPI devel] Restarting processes on different node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4795.php">George Bosilca: "Re: [OMPI devel] Component open"</a>
<li><strong>Reply:</strong> <a href="4795.php">George Bosilca: "Re: [OMPI devel] Component open"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been digging a little into optimization and found something that  
<br>
seems counterintuitive in the way OMPI is handling components.  
<br>
Specifically, if I specify a component I want used for a framework,  
<br>
OMPI still does a component load and open on every component in the  
<br>
framework - it only uses my specification during &quot;select&quot;.
<br>
<p>Thus, the cmd line
<br>
<p>mpirun -mca routed linear
<br>
<p>still results in the loading and opening of the direct and binomial  
<br>
components - even though we have directed the framework not to use them.
<br>
<p>This causes us to waste memory when there is no possibility of a  
<br>
different component being selected. Is there a reason why &quot;open&quot; isn't  
<br>
using the mca params to guide the components it is loading?
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4785.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="4783.php">Leonardo Fialho: "[OMPI devel] Restarting processes on different node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4795.php">George Bosilca: "Re: [OMPI devel] Component open"</a>
<li><strong>Reply:</strong> <a href="4795.php">George Bosilca: "Re: [OMPI devel] Component open"</a>
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
