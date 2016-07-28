<?
$subject_val = "Re: [OMPI devel] how should processes be mapped to nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 10:34:58 2009" -->
<!-- isoreceived="20091008143458" -->
<!-- sent="Thu, 08 Oct 2009 07:36:01 -0700" -->
<!-- isosent="20091008143601" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] how should processes be mapped to nodes?" -->
<!-- id="4ACDF8D1.70607_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ACDF81F.4020600_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] how should processes be mapped to nodes?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-08 10:36:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6942.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>Previous message:</strong> <a href="6940.php">Eugene Loh: "[OMPI devel] how should processes be mapped to nodes?"</a>
<li><strong>In reply to:</strong> <a href="6940.php">Eugene Loh: "[OMPI devel] how should processes be mapped to nodes?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, my e-mail below just crossed with another one explaining that 
<br>
behavior has recently been intentionally changed.  I'll go chew on that 
<br>
for a while.
<br>
<p>Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; If I specify two hosts and no &quot;slots&quot; information, processes should be 
</span><br>
<span class="quotelev1">&gt; started in equal numbers on the two hosts.  But, how should they be 
</span><br>
<span class="quotelev1">&gt; ranked?  &quot;Block&quot; or &quot;cyclic&quot; (round robin)?  Did we change this 
</span><br>
<span class="quotelev1">&gt; behavior recently?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % ompi_info | grep &quot;Open MPI:&quot;
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.3.4a1r22009
</span><br>
<span class="quotelev1">&gt; % mpirun -H saem9,saem10 -np 8 -tag-output hostname
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:saem9
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:saem9
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:saem9
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:saem9
</span><br>
<span class="quotelev1">&gt; [1,4]&lt;stdout&gt;:saem10
</span><br>
<span class="quotelev1">&gt; [1,5]&lt;stdout&gt;:saem10
</span><br>
<span class="quotelev1">&gt; [1,6]&lt;stdout&gt;:saem10
</span><br>
<span class="quotelev1">&gt; [1,7]&lt;stdout&gt;:saem10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % ompi_info | grep &quot;Open MPI:&quot;
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.3.4a1r22051
</span><br>
<span class="quotelev1">&gt; % mpirun -H saem9,saem10 -np 8 -tag-output hostname
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:saem9
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stdout&gt;:saem10
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stdout&gt;:saem9
</span><br>
<span class="quotelev1">&gt; [1,3]&lt;stdout&gt;:saem10
</span><br>
<span class="quotelev1">&gt; [1,4]&lt;stdout&gt;:saem9
</span><br>
<span class="quotelev1">&gt; [1,5]&lt;stdout&gt;:saem10
</span><br>
<span class="quotelev1">&gt; [1,6]&lt;stdout&gt;:saem9
</span><br>
<span class="quotelev1">&gt; [1,7]&lt;stdout&gt;:saem10 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6942.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>Previous message:</strong> <a href="6940.php">Eugene Loh: "[OMPI devel] how should processes be mapped to nodes?"</a>
<li><strong>In reply to:</strong> <a href="6940.php">Eugene Loh: "[OMPI devel] how should processes be mapped to nodes?"</a>
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
