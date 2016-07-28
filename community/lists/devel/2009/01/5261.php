<?
$subject_val = "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 14:17:16 2009" -->
<!-- isoreceived="20090121191716" -->
<!-- sent="Wed, 21 Jan 2009 12:17:06 -0700" -->
<!-- isosent="20090121191706" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Use of ompi_proc_t flags field" -->
<!-- id="D431242A-61AB-40EC-9388-1E0F4532857F_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D9DBEA95-63EB-4872-B44A-2E50EE2D35FA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Use of ompi_proc_t flags field<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 14:17:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5262.php">Paul H. Hargrove: "Re: [OMPI devel] VT problems on Debian"</a>
<li><strong>Previous message:</strong> <a href="5260.php">Jeff Squyres: "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<li><strong>In reply to:</strong> <a href="5260.php">Jeff Squyres: "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Appropriate mapper components will be used, along with a file  
<br>
describing which nodes are in which CU etc. So it won't be so much a  
<br>
matter of discovery as pre-knowledge.
<br>
<p><p>On Jan 21, 2009, at 12:02 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Sounds reasonable.  How do you plan to discover this information?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 21, 2009, at 9:58 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What: Extend the current use of the ompi_proc_t flags field  
</span><br>
<span class="quotelev2">&gt;&gt; (without changing the field itself)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why: Provide more atomistic sense of locality to support new  
</span><br>
<span class="quotelev2">&gt;&gt; collective/BTL components
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Where: Add macros to define and check the various flag fields in  
</span><br>
<span class="quotelev2">&gt;&gt; ompi/proc.h. Revise the orte_ess.proc_is_local API to return a  
</span><br>
<span class="quotelev2">&gt;&gt; uint8_t instead of bool.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When: For OMPI v1.4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Timeout: COB Fri, Feb 6, 2009
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ====================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The current ompi_proc_t structure has a uint8_t flags field in it.  
</span><br>
<span class="quotelev2">&gt;&gt; Only one bit of this field is currently used to flag that a proc is  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;local&quot;. In the current context, &quot;local&quot; is constrained to mean  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;local to this node&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; New collectives and BTL components under development by LANL (in  
</span><br>
<span class="quotelev2">&gt;&gt; partnership with others) require a greater degree of granularity on  
</span><br>
<span class="quotelev2">&gt;&gt; the term &quot;local&quot;. For our work, we need to know if the proc is on  
</span><br>
<span class="quotelev2">&gt;&gt; the same socket, PC board, node, switch, and CU (computing unit).  
</span><br>
<span class="quotelev2">&gt;&gt; We therefore propose to define some of the unused bits to flag  
</span><br>
<span class="quotelev2">&gt;&gt; these &quot;local&quot; conditions. This will not extend the field's size,  
</span><br>
<span class="quotelev2">&gt;&gt; nor impact any other current use of the field.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our intent is to add #define's to designate which bits stand for  
</span><br>
<span class="quotelev2">&gt;&gt; which local condition. To make it easier to use, we will add a set  
</span><br>
<span class="quotelev2">&gt;&gt; of macros that test the specific bit - e.g.,  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_PROC_ON_LOCAL_SOCKET. These can be used in the code base to  
</span><br>
<span class="quotelev2">&gt;&gt; clearly indicate which sense of locality is being considered.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We would also modify the orte_ess modules so that each returns a  
</span><br>
<span class="quotelev2">&gt;&gt; uint8_t (to match the ompi_proc_t field) that contains a complete  
</span><br>
<span class="quotelev2">&gt;&gt; description of the locality of this proc. Obviously, not all  
</span><br>
<span class="quotelev2">&gt;&gt; environments will be capable of providing such detailed info. Thus,  
</span><br>
<span class="quotelev2">&gt;&gt; getting a &quot;false&quot; from a test for &quot;on_local_socket&quot; may simply  
</span><br>
<span class="quotelev2">&gt;&gt; indicate a lack of knowledge. This is acceptable for our purposes  
</span><br>
<span class="quotelev2">&gt;&gt; as the algorithm will simply perform sub-optimally, but will still  
</span><br>
<span class="quotelev2">&gt;&gt; work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please feel free to comment and/or request more information.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5262.php">Paul H. Hargrove: "Re: [OMPI devel] VT problems on Debian"</a>
<li><strong>Previous message:</strong> <a href="5260.php">Jeff Squyres: "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<li><strong>In reply to:</strong> <a href="5260.php">Jeff Squyres: "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
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
