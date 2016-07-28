<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 08:28:01 2007" -->
<!-- isoreceived="20070726122801" -->
<!-- sent="Thu, 26 Jul 2007 08:27:45 -0400" -->
<!-- isosent="20070726122745" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] static rate / connection modularity" -->
<!-- id="8924C858-9406-4A8C-9276-8EF7FDAC0F3F_at_cisco.com" -->
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
<strong>Date:</strong> 2007-07-26 08:27:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2007.php">Jeff Squyres: "[OMPI devel] openib credits problem"</a>
<li><strong>Previous message:</strong> <a href="2005.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm about ready to start on the connection modularity stuff in the  
<br>
openib BTL.  A few changes are getting rolled up in this work:
<br>
<p>1. Modularize the connection scheme in the openib BTL as per previous  
<br>
discussions (use function pointers to choose between the current OOB  
<br>
wireup and the RDMA CM -- I'll probably do just a skeleton of the  
<br>
RDMA CM at first; to be filled in later).  Preliminary prototypes of  
<br>
this work in a /tmp branch showed that it cleaned up  
<br>
btl_openib_endpoint.c a *lot*.
<br>
<p>2. [Re-]Fix the problem with having heterogeneous numbers of ports  
<br>
across hosts (it seems to be broken again -- bonk).
<br>
<p>3. Remove the static rate MCA parameter and instead, have the  
<br>
endpoints negotiate (either in the modex or at wireup time --  
<br>
whichever works best) to use the speed of the slower port.
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
<li><strong>Next message:</strong> <a href="2007.php">Jeff Squyres: "[OMPI devel] openib credits problem"</a>
<li><strong>Previous message:</strong> <a href="2005.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
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
