<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  1 08:08:39 2005" -->
<!-- isoreceived="20050901130839" -->
<!-- sent="Thu, 01 Sep 2005 07:08:37 -0600" -->
<!-- isosent="20050901130837" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="RHC development plans" -->
<!-- id="6.2.3.4.2.20050901065954.01d8be08_at_pobox1663.lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralph H. Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-01 08:08:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0289.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0287.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0295.php">Ralph H. Castain: "Re:  RHC development plans"</a>
<li><strong>Reply:</strong> <a href="0295.php">Ralph H. Castain: "Re:  RHC development plans"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo folks
<br>
<p>Several people have asked lately what I am planning to do next on 
<br>
ORTE. Just to help maintain coordination, here is my current list of 
<br>
planned activities (in priority order). Any requests/suggestions are 
<br>
welcomed - this isn't in concrete by any means.
<br>
<p>1. Add George's architecture info to the proc subscription
<br>
<p>2. Investigate and plug memory leaks, particularly in the registry
<br>
<p>3. Remove warning when default universe can't be contacted, but leave 
<br>
it in for non-default universes
<br>
<p>4. Eliminate singleton and infrastructure flags - just do what needs 
<br>
to be done. Believe the singleton one can be done - infrastructure is 
<br>
not quite as clear
<br>
<p>5. Revise system to allow existence of multiple cells and to create 
<br>
associations between jobid's - involves removing cellid from process 
<br>
name, creation of job &quot;groups&quot;, and a variety of associated 
<br>
alterations. This is needed to allow multiple apps to run and for 
<br>
correct persistent operations ala the Eclipse effort.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0289.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0287.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0295.php">Ralph H. Castain: "Re:  RHC development plans"</a>
<li><strong>Reply:</strong> <a href="0295.php">Ralph H. Castain: "Re:  RHC development plans"</a>
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
