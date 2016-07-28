<?
$subject_val = "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 14:02:54 2009" -->
<!-- isoreceived="20090121190254" -->
<!-- sent="Wed, 21 Jan 2009 14:02:48 -0500" -->
<!-- isosent="20090121190248" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Use of ompi_proc_t flags field" -->
<!-- id="D9DBEA95-63EB-4872-B44A-2E50EE2D35FA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E3E2EAF1-EB8B-419D-A14D-232A1BBEB920_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 14:02:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5261.php">Ralph Castain: "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<li><strong>Previous message:</strong> <a href="5259.php">Jeff Squyres: "[OMPI devel] VT problems on Debian"</a>
<li><strong>In reply to:</strong> <a href="5257.php">Ralph Castain: "[OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5261.php">Ralph Castain: "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<li><strong>Reply:</strong> <a href="5261.php">Ralph Castain: "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds reasonable.  How do you plan to discover this information?
<br>
<p>On Jan 21, 2009, at 9:58 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; What: Extend the current use of the ompi_proc_t flags field (without  
</span><br>
<span class="quotelev1">&gt; changing the field itself)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why: Provide more atomistic sense of locality to support new  
</span><br>
<span class="quotelev1">&gt; collective/BTL components
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where: Add macros to define and check the various flag fields in  
</span><br>
<span class="quotelev1">&gt; ompi/proc.h. Revise the orte_ess.proc_is_local API to return a  
</span><br>
<span class="quotelev1">&gt; uint8_t instead of bool.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When: For OMPI v1.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Timeout: COB Fri, Feb 6, 2009
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ====================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The current ompi_proc_t structure has a uint8_t flags field in it.  
</span><br>
<span class="quotelev1">&gt; Only one bit of this field is currently used to flag that a proc is  
</span><br>
<span class="quotelev1">&gt; &quot;local&quot;. In the current context, &quot;local&quot; is constrained to mean  
</span><br>
<span class="quotelev1">&gt; &quot;local to this node&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; New collectives and BTL components under development by LANL (in  
</span><br>
<span class="quotelev1">&gt; partnership with others) require a greater degree of granularity on  
</span><br>
<span class="quotelev1">&gt; the term &quot;local&quot;. For our work, we need to know if the proc is on  
</span><br>
<span class="quotelev1">&gt; the same socket, PC board, node, switch, and CU (computing unit). We  
</span><br>
<span class="quotelev1">&gt; therefore propose to define some of the unused bits to flag these  
</span><br>
<span class="quotelev1">&gt; &quot;local&quot; conditions. This will not extend the field's size, nor  
</span><br>
<span class="quotelev1">&gt; impact any other current use of the field.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our intent is to add #define's to designate which bits stand for  
</span><br>
<span class="quotelev1">&gt; which local condition. To make it easier to use, we will add a set  
</span><br>
<span class="quotelev1">&gt; of macros that test the specific bit - e.g.,  
</span><br>
<span class="quotelev1">&gt; OMPI_PROC_ON_LOCAL_SOCKET. These can be used in the code base to  
</span><br>
<span class="quotelev1">&gt; clearly indicate which sense of locality is being considered.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We would also modify the orte_ess modules so that each returns a  
</span><br>
<span class="quotelev1">&gt; uint8_t (to match the ompi_proc_t field) that contains a complete  
</span><br>
<span class="quotelev1">&gt; description of the locality of this proc. Obviously, not all  
</span><br>
<span class="quotelev1">&gt; environments will be capable of providing such detailed info. Thus,  
</span><br>
<span class="quotelev1">&gt; getting a &quot;false&quot; from a test for &quot;on_local_socket&quot; may simply  
</span><br>
<span class="quotelev1">&gt; indicate a lack of knowledge. This is acceptable for our purposes as  
</span><br>
<span class="quotelev1">&gt; the algorithm will simply perform sub-optimally, but will still work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please feel free to comment and/or request more information.
</span><br>
<span class="quotelev1">&gt; Ralph
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5261.php">Ralph Castain: "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<li><strong>Previous message:</strong> <a href="5259.php">Jeff Squyres: "[OMPI devel] VT problems on Debian"</a>
<li><strong>In reply to:</strong> <a href="5257.php">Ralph Castain: "[OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5261.php">Ralph Castain: "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<li><strong>Reply:</strong> <a href="5261.php">Ralph Castain: "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
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
