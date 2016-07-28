<?
$subject_val = "Re: [OMPI devel] Outstanding 1.3 RTE features";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 13:08:13 2008" -->
<!-- isoreceived="20080507170813" -->
<!-- sent="Wed, 7 May 2008 13:08:04 -0400" -->
<!-- isosent="20080507170804" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Outstanding 1.3 RTE features" -->
<!-- id="6CF17D62-D3FE-4779-BD38-3A076F2824AB_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C44717AB.5133%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Outstanding 1.3 RTE features<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-07 13:08:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3852.php">Ralph Castain: "Re: [OMPI devel] Outstanding 1.3 RTE features"</a>
<li><strong>Previous message:</strong> <a href="3850.php">Ralph Castain: "[OMPI devel] Outstanding 1.3 RTE features"</a>
<li><strong>In reply to:</strong> <a href="3850.php">Ralph Castain: "[OMPI devel] Outstanding 1.3 RTE features"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3852.php">Ralph Castain: "Re: [OMPI devel] Outstanding 1.3 RTE features"</a>
<li><strong>Reply:</strong> <a href="3852.php">Ralph Castain: "Re: [OMPI devel] Outstanding 1.3 RTE features"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 7, 2008, at 10:24 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; * static ports - basic infrastructure for procs and orteds to use
</span><br>
<span class="quotelev1">&gt;  static OOB/TCP ports, but we don't currently take advantage of it.
</span><br>
<span class="quotelev1">&gt;  This shouldn't require any API changes or major restructuring of
</span><br>
<span class="quotelev1">&gt;  code as everything required is already there.
</span><br>
<p>This feature is already in Open MPI for the last 6 months. Port  
<br>
limitation was implemented for both the OOB TCP and the BTL TCP, with  
<br>
and without ipv6 support. Setting the min and max to the same value,  
<br>
force Open MPI (including ORTE) to use a static port.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: parameter &quot;oob_tcp_port_min_v4&quot; (current  
<br>
value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Starting port allowed (IPv4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: parameter &quot;oob_tcp_port_range_v4&quot; (current  
<br>
value: &quot;65535&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Range of allowed ports (IPv4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: parameter &quot;oob_tcp_port_min_v6&quot; (current  
<br>
value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Starting port allowed (IPv6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: parameter &quot;oob_tcp_port_range_v6&quot; (current  
<br>
value: &quot;65535&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Range of allowed ports (IPv6)
<br>
<p><span class="quotelev1">&gt; * usage reporting - add appropriate mpirun cmd line option to
</span><br>
<span class="quotelev1">&gt;  request the orteds to report proc resource usage upon proc
</span><br>
<span class="quotelev1">&gt;  termination. Pretty trivial to do. Requested by a few users
</span><br>
<span class="quotelev1">&gt;  and a couple of tool developers.
</span><br>
<p>I don't think this is the role of the runtime. Any user can write a 2  
<br>
lines sh script to do this, there is no reason to integrate it deeply  
<br>
inside ORTE.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3851/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3852.php">Ralph Castain: "Re: [OMPI devel] Outstanding 1.3 RTE features"</a>
<li><strong>Previous message:</strong> <a href="3850.php">Ralph Castain: "[OMPI devel] Outstanding 1.3 RTE features"</a>
<li><strong>In reply to:</strong> <a href="3850.php">Ralph Castain: "[OMPI devel] Outstanding 1.3 RTE features"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3852.php">Ralph Castain: "Re: [OMPI devel] Outstanding 1.3 RTE features"</a>
<li><strong>Reply:</strong> <a href="3852.php">Ralph Castain: "Re: [OMPI devel] Outstanding 1.3 RTE features"</a>
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
