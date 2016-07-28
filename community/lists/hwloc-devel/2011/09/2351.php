<?
$subject_val = "Re: [hwloc-devel] Something lighter-weight than XML?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  2 05:54:57 2011" -->
<!-- isoreceived="20110902095457" -->
<!-- sent="Fri, 2 Sep 2011 05:54:50 -0400" -->
<!-- isosent="20110902095450" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Something lighter-weight than XML?" -->
<!-- id="C837C029-9D2B-4AAD-B6BA-859B38357AC9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E603422.3090106_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Something lighter-weight than XML?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-02 05:54:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2352.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2350.php">Christopher Samuel: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2350.php">Christopher Samuel: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2365.php">Christopher Samuel: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2365.php">Christopher Samuel: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 1, 2011, at 9:40 PM, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; Well BG/P doesn't support Open-MPI, but the service
</span><br>
<span class="quotelev1">&gt; (management) node and the front end (login) nodes are
</span><br>
<span class="quotelev1">&gt; PPC SLES10 and libxml2 is there..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tambo-m:~ # rpm -q libxml2
</span><br>
<span class="quotelev1">&gt; libxml2-2.6.23-15.25.5
</span><br>
<p>Fail enough, but do the back-end nodes have libxml?  For us to do what we want, it would need to be available on all nodes because the OMPI orted processes would be querying hwloc for the local topology and then sending it to the &quot;head&quot; node process (usually mpirun) for further analysis and process mapping.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2352.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2350.php">Christopher Samuel: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2350.php">Christopher Samuel: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2365.php">Christopher Samuel: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2365.php">Christopher Samuel: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
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
