<?
$subject_val = "[OMPI devel] how should processes be mapped to nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 10:32:01 2009" -->
<!-- isoreceived="20091008143201" -->
<!-- sent="Thu, 08 Oct 2009 07:33:03 -0700" -->
<!-- isosent="20091008143303" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] how should processes be mapped to nodes?" -->
<!-- id="4ACDF81F.4020600_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] how should processes be mapped to nodes?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-08 10:33:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6941.php">Eugene Loh: "Re: [OMPI devel] how should processes be mapped to nodes?"</a>
<li><strong>Previous message:</strong> <a href="6939.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22066"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6941.php">Eugene Loh: "Re: [OMPI devel] how should processes be mapped to nodes?"</a>
<li><strong>Reply:</strong> <a href="6941.php">Eugene Loh: "Re: [OMPI devel] how should processes be mapped to nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I specify two hosts and no &quot;slots&quot; information, processes should be 
<br>
started in equal numbers on the two hosts.  But, how should they be 
<br>
ranked?  &quot;Block&quot; or &quot;cyclic&quot; (round robin)?  Did we change this behavior 
<br>
recently?
<br>
<p><p><p>% ompi_info | grep &quot;Open MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.3.4a1r22009
<br>
% mpirun -H saem9,saem10 -np 8 -tag-output hostname
<br>
[1,0]&lt;stdout&gt;:saem9
<br>
[1,1]&lt;stdout&gt;:saem9
<br>
[1,2]&lt;stdout&gt;:saem9
<br>
[1,3]&lt;stdout&gt;:saem9
<br>
[1,4]&lt;stdout&gt;:saem10
<br>
[1,5]&lt;stdout&gt;:saem10
<br>
[1,6]&lt;stdout&gt;:saem10
<br>
[1,7]&lt;stdout&gt;:saem10
<br>
<p><p><p><p>% ompi_info | grep &quot;Open MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.3.4a1r22051
<br>
% mpirun -H saem9,saem10 -np 8 -tag-output hostname
<br>
[1,0]&lt;stdout&gt;:saem9
<br>
[1,1]&lt;stdout&gt;:saem10
<br>
[1,2]&lt;stdout&gt;:saem9
<br>
[1,3]&lt;stdout&gt;:saem10
<br>
[1,4]&lt;stdout&gt;:saem9
<br>
[1,5]&lt;stdout&gt;:saem10
<br>
[1,6]&lt;stdout&gt;:saem9
<br>
[1,7]&lt;stdout&gt;:saem10
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6941.php">Eugene Loh: "Re: [OMPI devel] how should processes be mapped to nodes?"</a>
<li><strong>Previous message:</strong> <a href="6939.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22066"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6941.php">Eugene Loh: "Re: [OMPI devel] how should processes be mapped to nodes?"</a>
<li><strong>Reply:</strong> <a href="6941.php">Eugene Loh: "Re: [OMPI devel] how should processes be mapped to nodes?"</a>
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
