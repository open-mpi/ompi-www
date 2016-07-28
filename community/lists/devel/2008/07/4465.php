<?
$subject_val = "[OMPI devel] Change in hostfile behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 11:44:06 2008" -->
<!-- isoreceived="20080728154406" -->
<!-- sent="Mon, 28 Jul 2008 09:43:58 -0600" -->
<!-- isosent="20080728154358" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Change in hostfile behavior" -->
<!-- id="CDD368DC-1C9C-4CB5-8BA9-C9FBA3D2A2A5_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Change in hostfile behavior<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 11:43:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4466.php">George Bosilca: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4464.php">Ralph Castain: "[OMPI devel] Change in slot_list specification"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4472.php">Tim Mattox: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>Reply:</strong> <a href="4472.php">Tim Mattox: "Re: [OMPI devel] Change in hostfile behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per an earlier telecon, I have modified the hostfile behavior slightly  
<br>
to allow hostfiles to subdivide allocations.
<br>
<p>Briefly: given an allocation, we allow users to specify --hostfile on  
<br>
a per-app_context basis. In this mode, the hostfile info is used to  
<br>
filter the nodes that will be used for that app_context. However, the  
<br>
prior implementation only filtered the nodes themselves - i.e., it was  
<br>
a binary filter that allowed you to include or exclude an entire node.
<br>
<p>The change now allows you to include a specified #slots for a given  
<br>
node as opposed to -all- slots from that node. You are limited to the  
<br>
#slots included in the original allocation. I just realized that I  
<br>
hadn't output a warning if you attempt to violate this condition -  
<br>
will do so shortly. Rather than just abort if this happens, I set the  
<br>
allocation to that of the original - please let me know if you would  
<br>
prefer it to abort.
<br>
<p>If you have interest in this behavior, please check it out and let me  
<br>
know if this meets needs.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4466.php">George Bosilca: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4464.php">Ralph Castain: "[OMPI devel] Change in slot_list specification"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4472.php">Tim Mattox: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>Reply:</strong> <a href="4472.php">Tim Mattox: "Re: [OMPI devel] Change in hostfile behavior"</a>
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
