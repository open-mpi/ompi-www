<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 09:43:36 2007" -->
<!-- isoreceived="20070710134336" -->
<!-- sent="Tue, 10 Jul 2007 07:43:27 -0600" -->
<!-- isosent="20070710134327" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ticket 1023" -->
<!-- id="C2B8E91F.9DA4%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="39C75744D164D948A170E9792AF8E7CA02B3EE_at_exil.voltaire.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 09:43:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1832.php">Brian Barrett: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1830.php">Sharon Melamed: "[OMPI devel] ticket 1023"</a>
<li><strong>In reply to:</strong> <a href="1830.php">Sharon Melamed: "[OMPI devel] ticket 1023"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1834.php">Sharon Melamed: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Reply:</strong> <a href="1834.php">Sharon Melamed: "Re: [OMPI devel] ticket 1023"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I understood our original discussions, this would move responsibility for
<br>
mapping rank to processor back into the orted - is that still true?
<br>
<p>Reason I ask is to again clarify for people if we are doing so as it (a)
<br>
impacts those systems that don't use our orteds (e.g., will affinity still
<br>
work in those environments?); and (b) it will make elimination of the orteds
<br>
just a little more difficult.
<br>
<p>So could you please clarify for everyone what this code functionally does?
<br>
All 1023 does is layout syntax - it doesn't clearly state what happens
<br>
where.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 7/10/07 7:32 AM, &quot;Sharon Melamed&quot; &lt;sharonm_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In the recent few weeks I implemented ticket 1023
</span><br>
<span class="quotelev1">&gt; (<a href="https://svn.open-mpi.org/trac/ompi/ticket/1023">https://svn.open-mpi.org/trac/ompi/ticket/1023</a>
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1023">https://svn.open-mpi.org/trac/ompi/ticket/1023</a>&gt; ).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In a few words, the purpose of ticket 1023 is to expand the hostfile syntax to
</span><br>
<span class="quotelev1">&gt; precisely specify slot
</span><br>
<span class="quotelev1">&gt; location (in terms of virtual CPU ID or socket core notation) in the node
</span><br>
<span class="quotelev1">&gt; and/or rank in a MCW.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code is in a temporary branch
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/svn/ompi/tmp/sharon/">https://svn.open-mpi.org/svn/ompi/tmp/sharon/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The changes are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. In the RAS base component:
</span><br>
<span class="quotelev1">&gt;    a. Added new list of orte_ras_proc_t structures
</span><br>
<span class="quotelev1">&gt;    b. Each orte_ras_proc_t structure contains 3 members: node_name, rank and
</span><br>
<span class="quotelev1">&gt; cpu_list.
</span><br>
<span class="quotelev1">&gt;    c. the cpu_list is a string representing the slot list from the hostfile
</span><br>
<span class="quotelev1">&gt; i.e.: if the 
</span><br>
<span class="quotelev1">&gt;       SLOT token in the hostfile is - SLOT=1_at_2:1,3:1-4, the slot_list string
</span><br>
<span class="quotelev1">&gt; is: 2:1,3:7-9.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2. In the RDS hostfile component:
</span><br>
<span class="quotelev1">&gt;    a. Added new token SLOT to the lex parser.
</span><br>
<span class="quotelev1">&gt;    b. filling the orte_ras_proc_t structure list according the SLOT token in
</span><br>
<span class="quotelev1">&gt; the hostfile.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 3. In the RMAPS round robin component:
</span><br>
<span class="quotelev1">&gt;    a. Added new member to orte_mapped_node_t structure - slot_list (similar to
</span><br>
<span class="quotelev1">&gt; the slot_list 
</span><br>
<span class="quotelev1">&gt;       in the orte_ras_proc_t structure)
</span><br>
<span class="quotelev1">&gt;    b. in the orte_rmaps_rr_map, mapping job according to hostfile ranks before
</span><br>
<span class="quotelev1">&gt; mapping the job
</span><br>
<span class="quotelev1">&gt;       by slot or by node.
</span><br>
<span class="quotelev1">&gt;    c. in the orte_rmaps_rr_map, arranging the MCW ranks according to the
</span><br>
<span class="quotelev1">&gt; hostfile.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 4. in the ODLS default module:
</span><br>
<span class="quotelev1">&gt;    a. Added slot_list to orte_odls_default_get_add_procs_data.
</span><br>
<span class="quotelev1">&gt;    b. Added slot_list to orte_odls_default_launch_local_procs.
</span><br>
<span class="quotelev1">&gt;    c. Added new member to the child structure a cpu_set bitmap (for PLPA)
</span><br>
<span class="quotelev1">&gt;    d. Added mapping of the slot_list string to a cpu_set bitmap in the child
</span><br>
<span class="quotelev1">&gt; structure.  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; For more details you can browse the code.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I would like to merge these changes to the trunk as soon as possible since, as
</span><br>
<span class="quotelev1">&gt; I understood from Ralph Castain emails,
</span><br>
<span class="quotelev1">&gt; The Open RTE will go through a lot of changes in the near future and since
</span><br>
<span class="quotelev1">&gt; this is a relatively small change I want to merge
</span><br>
<span class="quotelev1">&gt; it before the big change.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Any comments?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Sharon.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="1832.php">Brian Barrett: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1830.php">Sharon Melamed: "[OMPI devel] ticket 1023"</a>
<li><strong>In reply to:</strong> <a href="1830.php">Sharon Melamed: "[OMPI devel] ticket 1023"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1834.php">Sharon Melamed: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Reply:</strong> <a href="1834.php">Sharon Melamed: "Re: [OMPI devel] ticket 1023"</a>
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
