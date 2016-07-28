<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 17:24:09 2007" -->
<!-- isoreceived="20070709212409" -->
<!-- sent="Mon, 9 Jul 2007 15:23:47 -0600" -->
<!-- isosent="20070709212347" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="[OMPI devel] fake rdma flag again?" -->
<!-- id="2E564D47-B585-43D3-9EED-E2B966972708_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-09 17:23:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1819.php">Tim Prins: "Re: [OMPI devel] Ob1 segfault"</a>
<li><strong>Previous message:</strong> <a href="1817.php">Jeff Squyres: "Re: [OMPI devel] &quot;New&quot; IB vendor and MTU question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>I've finally committed a version of the rdma one-sided component that  
<br>
1) works and 2) in certain situations actually does rdma.  I'll make  
<br>
it the default when the BTLs are used as soon as one last bug is  
<br>
fixed in the DDT engine.
<br>
<p>However, there is still one outstanding issue.  Some BTLs (like  
<br>
Portals or MX) advertise the ability to do a put but place  
<br>
restrictions on the put that only work for OB1.  For example, both  
<br>
can only do an RDMA that starts where the prepare_dst() / prepare_src 
<br>
() call said the target buffer was.  This isn't a problem for OB1,  
<br>
but kind of defeats the purpose of one-sided ;). There's also a  
<br>
reference count (I believe) in the Portals put/get code that would  
<br>
make life interesting if a descriptor was doing multiple RDMA ops at  
<br>
once.
<br>
<p>I was thinking that the easy way to solve this was to add a flag  
<br>
(FAKE_RDMA was the current running favorite, since we've used it  
<br>
before for different meaning :) ) to the components that have  
<br>
behaviors that work for OB1, but not a generalized rdma interface.  I  
<br>
was wondering what people thought of this idea and if they had any  
<br>
preference for naming the flag.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1819.php">Tim Prins: "Re: [OMPI devel] Ob1 segfault"</a>
<li><strong>Previous message:</strong> <a href="1817.php">Jeff Squyres: "Re: [OMPI devel] &quot;New&quot; IB vendor and MTU question"</a>
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
