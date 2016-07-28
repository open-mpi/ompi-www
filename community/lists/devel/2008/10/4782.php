<?
$subject_val = "[OMPI devel] Direct routed module";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 16:53:29 2008" -->
<!-- isoreceived="20081021205329" -->
<!-- sent="Tue, 21 Oct 2008 14:53:23 -0600" -->
<!-- isosent="20081021205323" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Direct routed module" -->
<!-- id="836FC7D6-E616-42CD-83DF-424494C23126_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Direct routed module<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-21 16:53:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4783.php">Leonardo Fialho: "[OMPI devel] Restarting processes on different node"</a>
<li><strong>Previous message:</strong> <a href="4781.php">Stephan Kramer: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4787.php">Jeff Squyres: "Re: [OMPI devel] Direct routed module"</a>
<li><strong>Reply:</strong> <a href="4787.php">Jeff Squyres: "Re: [OMPI devel] Direct routed module"</a>
<li><strong>Reply:</strong> <a href="4790.php">George Bosilca: "Re: [OMPI devel] Direct routed module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>I am working on adding a new radix tree routed module and am  
<br>
simultaneously doing a little streamlining to the overall routed- 
<br>
related code for scalability. One thing that would help cleanup  
<br>
several areas of the code base would be to finally dump the &quot;direct&quot;  
<br>
routed module.
<br>
<p>As you may recall, this module has been continued for historical  
<br>
purposes. It is not scalable since it requires that every process open  
<br>
a direct connection to every other process in the job. This is what  
<br>
pre-1.3 systems do. We originally left it alive for two reasons: (a)  
<br>
we wanted to have a fallback position while we developed the more  
<br>
scalable alternatives, and (b) the C/R code didn't support routed RML  
<br>
comm.
<br>
<p>The latter situation was resolved some months ago, and we have had  
<br>
plenty of validation of our routed comm system. Thus, if there are no  
<br>
objections by the end of the week, I will remove this module and  
<br>
cleanup the code.
<br>
<p>Please let me know if this is a concern.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4783.php">Leonardo Fialho: "[OMPI devel] Restarting processes on different node"</a>
<li><strong>Previous message:</strong> <a href="4781.php">Stephan Kramer: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4787.php">Jeff Squyres: "Re: [OMPI devel] Direct routed module"</a>
<li><strong>Reply:</strong> <a href="4787.php">Jeff Squyres: "Re: [OMPI devel] Direct routed module"</a>
<li><strong>Reply:</strong> <a href="4790.php">George Bosilca: "Re: [OMPI devel] Direct routed module"</a>
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
