<?
$subject_val = "Re: [OMPI devel] Amateur Guidance";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 14:40:26 2008" -->
<!-- isoreceived="20081103194026" -->
<!-- sent="Mon, 3 Nov 2008 14:40:17 -0500" -->
<!-- isosent="20081103194017" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Amateur Guidance" -->
<!-- id="27C34DDE-7C8D-4F00-B8DA-7D948FBF68E3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="490F1B35.8010406_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Amateur Guidance<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-03 14:40:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4846.php">Leonardo Fialho: "Re: [OMPI devel] Error after ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="4844.php">Leonardo Fialho: "[OMPI devel] Error after ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="4842.php">Eugene Loh: "Re: [OMPI devel] Amateur Guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4867.php">Timothy Hayes: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>Reply:</strong> <a href="4867.php">Timothy Hayes: "Re: [OMPI devel] Amateur Guidance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 3, 2008, at 10:39 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Main answer: no great docs to look at.  I think I've asked some OMPI  
</span><br>
<span class="quotelev1">&gt; experts and that was basically the answer they gave me.
</span><br>
<p>This is unfortunately the current state of the art -- no one has had  
<br>
time to write up good docs.
<br>
<p>Galen pointed to the new papers -- our main PML these days is  
<br>
&quot;ob1&quot; (teg died a long time ago).
<br>
<p>PML = Point to point messaging layer; it's basically the layer that is  
<br>
right behind MPI_SEND and friends.
<br>
<p>The ob1 PML uses BTL modules underneath.  BTL = Byte transfer layer;  
<br>
individual modules that send bytes back and forth over individual  
<br>
transports (e.g., shared memory, TCP, openfabrics, etc.).  There's a  
<br>
BTL for each of the major transports that we support.  The protocols  
<br>
that ob1 uses are described nicely in the papers that Galen sent, but  
<br>
the specific function interfaces are only best described in ompi/mca/ 
<br>
btl/btl.h.
<br>
<p>Alternatively, we have a &quot;cm&quot; PML which uses MTL modules underneath.   
<br>
MTL = Matching transport layer; it's basically for transports that  
<br>
expose very MPI-like interfaces (e.g., elan, tports, PSM, portals,  
<br>
MX).  This cm component is extremely thin; it basically provides a  
<br>
shim between Open MPI and the underlying transport.
<br>
<p>The big difference between cm and ob1 is that ob1 is a progress engine  
<br>
that tracks multiple transport interfaces (e.g., shared memory, tcp,  
<br>
openfabrics, ...etc. -- and therefore potentially multiple BTL module  
<br>
instances) and cm is a thin shim that simply translates between OMPI  
<br>
and the back-end interface -- cm will only use *ONE* MTL module  
<br>
instance.  Specifically: it is expected that the one MTL module will  
<br>
do all the progression, striping, ...or whatever it wants to do to  
<br>
move bytes from A to B by itself (very little/no help at all from  
<br>
OMPI's infrastructure).
<br>
<p>Does that help some?
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
<li><strong>Next message:</strong> <a href="4846.php">Leonardo Fialho: "Re: [OMPI devel] Error after ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="4844.php">Leonardo Fialho: "[OMPI devel] Error after ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="4842.php">Eugene Loh: "Re: [OMPI devel] Amateur Guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4867.php">Timothy Hayes: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>Reply:</strong> <a href="4867.php">Timothy Hayes: "Re: [OMPI devel] Amateur Guidance"</a>
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
