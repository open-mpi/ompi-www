<?
$subject_val = "Re: [OMPI devel] SDP support for OPEN-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  1 03:34:44 2008" -->
<!-- isoreceived="20080101083444" -->
<!-- sent="Tue, 01 Jan 2008 03:34:30 -0500" -->
<!-- isosent="20080101083430" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SDP support for OPEN-MPI" -->
<!-- id="4779FB16.8020805_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="39C75744D164D948A170E9792AF8E7CA4296AD_at_exil.voltaire.com" -->
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
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-01 03:34:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2918.php">Adrian Knoth: "Re: [OMPI devel] Minor patch for !IPV6_V6ONLY"</a>
<li><strong>Previous message:</strong> <a href="2916.php">Paul H. Hargrove: "[OMPI devel] Trac nit-pick"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2911.php">Lenny Verkhovsky: "[OMPI devel] SDP support for OPEN-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2920.php">Andrew Friedley: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Reply:</strong> <a href="2920.php">Andrew Friedley: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lenny Verkhovsky wrote:
<br>
<span class="quotelev1">&gt; We would like to add SDP support for OPENMPI.
</span><br>
<p><span class="quotelev1">&gt; SDP can be used to accelerate job start ( oob over sdp ) and IPoIB
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<p>I fail to see the reason to pollute the TCP btl with IB-specific SDP stuff.
<br>
<p>For the oob, this is arguable, but doesn't SDP allow for *transparent* 
<br>
socket replacement at runtime ? In this case, why not use this mechanism 
<br>
and keep the code clean ?
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2918.php">Adrian Knoth: "Re: [OMPI devel] Minor patch for !IPV6_V6ONLY"</a>
<li><strong>Previous message:</strong> <a href="2916.php">Paul H. Hargrove: "[OMPI devel] Trac nit-pick"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2911.php">Lenny Verkhovsky: "[OMPI devel] SDP support for OPEN-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2920.php">Andrew Friedley: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Reply:</strong> <a href="2920.php">Andrew Friedley: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
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
