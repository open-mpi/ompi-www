<?
$subject_val = "Re: [OMPI devel] SDP support for OPEN-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  1 13:11:49 2008" -->
<!-- isoreceived="20080101181149" -->
<!-- sent="Tue, 01 Jan 2008 10:11:41 -0800" -->
<!-- isosent="20080101181141" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SDP support for OPEN-MPI" -->
<!-- id="477A825D.2090509_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4779FB16.8020805_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SDP support for OPEN-MPI<br>
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-01 13:11:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2921.php">Jeff Squyres: "Re: [OMPI devel] Cisco MTT runs"</a>
<li><strong>Previous message:</strong> <a href="2919.php">Josh Hursey: "Re: [OMPI devel] Cisco MTT runs"</a>
<li><strong>In reply to:</strong> <a href="2917.php">Patrick Geoffray: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2922.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Reply:</strong> <a href="2922.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Patrick Geoffray wrote:
<br>
<span class="quotelev1">&gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We would like to add SDP support for OPENMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; SDP can be used to accelerate job start ( oob over sdp ) and IPoIB
</span><br>
<span class="quotelev2">&gt;&gt; performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I fail to see the reason to pollute the TCP btl with IB-specific SDP stuff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the oob, this is arguable, but doesn't SDP allow for *transparent* 
</span><br>
<span class="quotelev1">&gt; socket replacement at runtime ? In this case, why not use this mechanism 
</span><br>
<span class="quotelev1">&gt; and keep the code clean ?
</span><br>
<p><p>Furthermore, why would a user choose to use SDP and TCP/IPoIB when the 
<br>
OpenIB BTL is available using the native verbs interface?  FWIW, this 
<br>
same sort of question gets asked of the uDAPL BTL -- the answer there 
<br>
being that the uDAPL BTL runs in places the OpenIB BTL does not.  Is 
<br>
this true here as well?
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2921.php">Jeff Squyres: "Re: [OMPI devel] Cisco MTT runs"</a>
<li><strong>Previous message:</strong> <a href="2919.php">Josh Hursey: "Re: [OMPI devel] Cisco MTT runs"</a>
<li><strong>In reply to:</strong> <a href="2917.php">Patrick Geoffray: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2922.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Reply:</strong> <a href="2922.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
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
