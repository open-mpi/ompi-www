<?
$subject_val = "[OMPI devel] Large number of Cisco MTT false failures";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 23 13:37:42 2008" -->
<!-- isoreceived="20080223183742" -->
<!-- sent="Sat, 23 Feb 2008 12:37:11 -0600" -->
<!-- isosent="20080223183711" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Large number of Cisco MTT false failures" -->
<!-- id="315D9589-BDE2-44D1-9B73-594C85780BD3_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Large number of Cisco MTT false failures<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-23 13:37:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3293.php">Aurélien Bouteiller: "Re: [OMPI devel] OMPI and Mac Leopard"</a>
<li><strong>Previous message:</strong> <a href="3291.php">Ralph Castain: "[OMPI devel] OMPI and Mac Leopard"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please be aware that this weekend's MTT results will contain a large  
<br>
number of false failures from Cisco.  I made a configuration change in  
<br>
my cluster and unfortunately accidentally only applied it to some of  
<br>
the machines.  Hence, if tests were compiled on a machine with the  
<br>
change and run on machines without the change (or vice versa), the  
<br>
test failed.
<br>
<p>So it's probably best to ignore the cisco MTT results from this  
<br>
weekend.  Sorry...
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
<li><strong>Next message:</strong> <a href="3293.php">Aurélien Bouteiller: "Re: [OMPI devel] OMPI and Mac Leopard"</a>
<li><strong>Previous message:</strong> <a href="3291.php">Ralph Castain: "[OMPI devel] OMPI and Mac Leopard"</a>
<!-- nextthread="start" -->
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
