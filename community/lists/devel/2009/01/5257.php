<?
$subject_val = "[OMPI devel] RFC: Use of ompi_proc_t flags field";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 09:58:23 2009" -->
<!-- isoreceived="20090121145823" -->
<!-- sent="Wed, 21 Jan 2009 07:58:12 -0700" -->
<!-- isosent="20090121145812" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Use of ompi_proc_t flags field" -->
<!-- id="E3E2EAF1-EB8B-419D-A14D-232A1BBEB920_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Use of ompi_proc_t flags field<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 09:58:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5258.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5256.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5260.php">Jeff Squyres: "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<li><strong>Reply:</strong> <a href="5260.php">Jeff Squyres: "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Extend the current use of the ompi_proc_t flags field (without  
<br>
changing the field itself)
<br>
<p>Why: Provide more atomistic sense of locality to support new  
<br>
collective/BTL components
<br>
<p>Where: Add macros to define and check the various flag fields in ompi/ 
<br>
proc.h. Revise the orte_ess.proc_is_local API to return a uint8_t  
<br>
instead of bool.
<br>
<p>When: For OMPI v1.4
<br>
<p>Timeout: COB Fri, Feb 6, 2009
<br>
<p>====================================
<br>
<p>The current ompi_proc_t structure has a uint8_t flags field in it.  
<br>
Only one bit of this field is currently used to flag that a proc is  
<br>
&quot;local&quot;. In the current context, &quot;local&quot; is constrained to mean &quot;local  
<br>
to this node&quot;.
<br>
<p>New collectives and BTL components under development by LANL (in  
<br>
partnership with others) require a greater degree of granularity on  
<br>
the term &quot;local&quot;. For our work, we need to know if the proc is on the  
<br>
same socket, PC board, node, switch, and CU (computing unit). We  
<br>
therefore propose to define some of the unused bits to flag these  
<br>
&quot;local&quot; conditions. This will not extend the field's size, nor impact  
<br>
any other current use of the field.
<br>
<p>Our intent is to add #define's to designate which bits stand for which  
<br>
local condition. To make it easier to use, we will add a set of macros  
<br>
that test the specific bit - e.g., OMPI_PROC_ON_LOCAL_SOCKET. These  
<br>
can be used in the code base to clearly indicate which sense of  
<br>
locality is being considered.
<br>
<p>We would also modify the orte_ess modules so that each returns a  
<br>
uint8_t (to match the ompi_proc_t field) that contains a complete  
<br>
description of the locality of this proc. Obviously, not all  
<br>
environments will be capable of providing such detailed info. Thus,  
<br>
getting a &quot;false&quot; from a test for &quot;on_local_socket&quot; may simply  
<br>
indicate a lack of knowledge. This is acceptable for our purposes as  
<br>
the algorithm will simply perform sub-optimally, but will still work.
<br>
<p>Please feel free to comment and/or request more information.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5258.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5256.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5260.php">Jeff Squyres: "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<li><strong>Reply:</strong> <a href="5260.php">Jeff Squyres: "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
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
