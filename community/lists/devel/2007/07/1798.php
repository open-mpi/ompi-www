<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  5 18:56:53 2007" -->
<!-- isoreceived="20070705225653" -->
<!-- sent="Thu, 5 Jul 2007 16:56:08 -0600" -->
<!-- isosent="20070705225608" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] One-sided operations with Portals" -->
<!-- id="5BE08ACC-7C31-49EF-89A3-A60D3AAE4184_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="72208BE3C2373746A87FCCEBA1BF1B73025E98E6_at_G3W0069.americas.hpqcorp.net" -->
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
<strong>Date:</strong> 2007-07-05 18:56:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1799.php">Jeff Squyres: "Re: [OMPI devel] One-sided operations with Portals"</a>
<li><strong>Previous message:</strong> <a href="1797.php">Glendenning, Lisa: "[OMPI devel] One-sided operations with Portals"</a>
<li><strong>In reply to:</strong> <a href="1797.php">Glendenning, Lisa: "[OMPI devel] One-sided operations with Portals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1799.php">Jeff Squyres: "Re: [OMPI devel] One-sided operations with Portals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 5, 2007, at 4:16 PM, Glendenning, Lisa wrote:
<br>
<p><span class="quotelev1">&gt; Ron Brightwell at SNL has asked me to look into optimizing Open MPI's
</span><br>
<span class="quotelev1">&gt; one-sided operations over Portals.  Does anyone have any guidance or
</span><br>
<span class="quotelev1">&gt; thoughts for this?
</span><br>
<p>Hi Lisa -
<br>
<p>There are currently two implementations of the one-sided interface  
<br>
for Open MPI: pt2pt and rdma.
<br>
<p>The pt2pt component is implemented entirely over the interfaces used  
<br>
to implement the MPI-1 point-to-point interface.  So it ends up doing  
<br>
lots of copies and is entirely two-sided.  It could support async  
<br>
progress with threads, but that doesn't help the XT platform all that  
<br>
much.  It was the first one-sided component implemented, mostly  
<br>
because we needed to support protocols like MX and PSM that don't  
<br>
really expose one-sided semantics, and I only wanted to support one  
<br>
new component per release.
<br>
<p>The rdma component is implemented over our BTL (byte transport layer  
<br>
-- the device driver our communication is written over), and can  
<br>
either use call-back based send/receive or true rdma.  The true rdma  
<br>
is only for put/get for contiguous datatypes.  The performance on  
<br>
OpenIB is ok, but not great (I'll send you some more details off  
<br>
list).  I'd assume that the performance on Portals would be similar.   
<br>
However, the btl_put and btl_get implementation for the Portals BTL  
<br>
was implemented assuming it would only be used the way the PML (the  
<br>
MPI-1 point-to-point implementation) used it.  It won't work with the  
<br>
rdma one-sided component at this time.  I can go into more details if  
<br>
you decide that fixing the Portals BTL to support the rdma component  
<br>
is a path you want to look at.
<br>
<p>Then, of course, there's the option of writing a Portals-specific one- 
<br>
sided component.  The component interface is pretty straight-forward  
<br>
-- it's the MPI-2 one-sided chapter interface functions, plus an  
<br>
initialization function.  This is the path towards best performance,  
<br>
but also means the most code to write.  The existing code in Open MPI  
<br>
handles the attribute management, but that's about it if you go this  
<br>
route.  Of course, you can always copy freely from the rdma and pt2pt  
<br>
components.  There used to be a document somewhere describing how to  
<br>
add a new component, but I think it is horribly out of date.  I'll  
<br>
see if I can find it and send it your way.
<br>
<p>Of course, the first starting point is to get a checkout of the code  
<br>
and get it built.  There are instructions for getting an SVN checkout  
<br>
of Open MPI (and how to get it built from there) available on the web  
<br>
page:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/svn/">http://www.open-mpi.org/svn/</a>
<br>
<p>Building on the XT platform (if you're going that route) is slightly  
<br>
more complicated, and you probably want to take a look at the  
<br>
horribly out of date wiki page on the subject here:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/CrayXT3">https://svn.open-mpi.org/trac/ompi/wiki/CrayXT3</a>
<br>
<p><p>Hopefully, that's enough to get you started.  If you have any  
<br>
questions, ask away.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian W. Barrett
   Networking Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1799.php">Jeff Squyres: "Re: [OMPI devel] One-sided operations with Portals"</a>
<li><strong>Previous message:</strong> <a href="1797.php">Glendenning, Lisa: "[OMPI devel] One-sided operations with Portals"</a>
<li><strong>In reply to:</strong> <a href="1797.php">Glendenning, Lisa: "[OMPI devel] One-sided operations with Portals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1799.php">Jeff Squyres: "Re: [OMPI devel] One-sided operations with Portals"</a>
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
