<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 11:31:21 2007" -->
<!-- isoreceived="20070710153121" -->
<!-- sent="Tue, 10 Jul 2007 09:31:13 -0600" -->
<!-- isosent="20070710153113" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ticket 1023" -->
<!-- id="C2B90261.9DC4%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="39C75744D164D948A170E9792AF8E7CA02B3EF_at_exil.voltaire.com" -->
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
<strong>Date:</strong> 2007-07-10 11:31:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1836.php">Jeff Squyres: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Previous message:</strong> <a href="1834.php">Sharon Melamed: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>In reply to:</strong> <a href="1834.php">Sharon Melamed: "Re: [OMPI devel] ticket 1023"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1841.php">Sharon Melamed: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Reply:</strong> <a href="1841.php">Sharon Melamed: "Re: [OMPI devel] ticket 1023"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, I see the problem. I think you have misunderstood the ODLS framework.
<br>
<p>The ODLS is the &quot;Orte Daemon Launch Subsystem&quot; and is used by the orted to
<br>
launch the local procs. Mpirun also accesses the ODLS, but only to construct
<br>
the add_procs message that gets sent to the daemons.
<br>
<p>The problem is, therefore, that systems which do not use the orteds to
<br>
actually launch the backend processes will not have access to the ODLS on
<br>
the backend machines. Instead, they use their own internal mechanism for
<br>
launching the remote processes. Bproc is an example of this mode of
<br>
operation.
<br>
<p>So if the mapping is in the ODLS component, then systems that do not use the
<br>
orted will not be able to map rank to processor. Does this mean they cannot
<br>
set affinity?
<br>
<p>For example, this change appears to break bproc's ability to do affinity
<br>
since bproc launches the local procs outside of the orteds - is this true,
<br>
or can I set affinity without going through the ODLS? That would be an issue
<br>
for LANL, I believe.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 7/10/07 9:18 AM, &quot;Sharon Melamed&quot; &lt;sharonm_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The responsibility for mapping rank to processor is in the ODLS
</span><br>
<span class="quotelev1">&gt; component.
</span><br>
<span class="quotelev1">&gt; I didn't touch the orted code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you doesn't use orted - you steel use the ODLS component (like ODLS
</span><br>
<span class="quotelev1">&gt; bproc). Any way you mast have a component in the end machine that builds
</span><br>
<span class="quotelev1">&gt; the orte_odls_child_t structure from the RMAPS information and launch
</span><br>
<span class="quotelev1">&gt; the local processes. Currently this component is the ODLS. Most of my
</span><br>
<span class="quotelev1">&gt; work is in the ODLS component so if you decide to eliminate the orteds
</span><br>
<span class="quotelev1">&gt; you mast, somehow, preserve the ODLS functionality.
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
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph H Castain
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, July 10, 2007 4:43 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] ticket 1023
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I understood our original discussions, this would move responsibility
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; mapping rank to processor back into the orted - is that still true?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reason I ask is to again clarify for people if we are doing so as it (a)
</span><br>
<span class="quotelev1">&gt; impacts those systems that don't use our orteds (e.g., will affinity
</span><br>
<span class="quotelev1">&gt; still
</span><br>
<span class="quotelev1">&gt; work in those environments?); and (b) it will make elimination of the
</span><br>
<span class="quotelev1">&gt; orteds
</span><br>
<span class="quotelev1">&gt; just a little more difficult.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So could you please clarify for everyone what this code functionally
</span><br>
<span class="quotelev1">&gt; does?
</span><br>
<span class="quotelev1">&gt; All 1023 does is layout syntax - it doesn't clearly state what happens
</span><br>
<span class="quotelev1">&gt; where.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/10/07 7:32 AM, &quot;Sharon Melamed&quot; &lt;sharonm_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello All,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; In the recent few weeks I implemented ticket 1023
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="https://svn.open-mpi.org/trac/ompi/ticket/1023">https://svn.open-mpi.org/trac/ompi/ticket/1023</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1023">https://svn.open-mpi.org/trac/ompi/ticket/1023</a>&gt; ).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In a few words, the purpose of ticket 1023 is to expand the hostfile
</span><br>
<span class="quotelev1">&gt; syntax to
</span><br>
<span class="quotelev2">&gt;&gt; precisely specify slot
</span><br>
<span class="quotelev2">&gt;&gt; location (in terms of virtual CPU ID or socket core notation) in the
</span><br>
<span class="quotelev1">&gt; node
</span><br>
<span class="quotelev2">&gt;&gt; and/or rank in a MCW.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The code is in a temporary branch
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/svn/ompi/tmp/sharon/">https://svn.open-mpi.org/svn/ompi/tmp/sharon/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The changes are:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. In the RAS base component:
</span><br>
<span class="quotelev2">&gt;&gt;    a. Added new list of orte_ras_proc_t structures
</span><br>
<span class="quotelev2">&gt;&gt;    b. Each orte_ras_proc_t structure contains 3 members: node_name,
</span><br>
<span class="quotelev1">&gt; rank and
</span><br>
<span class="quotelev2">&gt;&gt; cpu_list.
</span><br>
<span class="quotelev2">&gt;&gt;    c. the cpu_list is a string representing the slot list from the
</span><br>
<span class="quotelev1">&gt; hostfile
</span><br>
<span class="quotelev2">&gt;&gt; i.e.: if the 
</span><br>
<span class="quotelev2">&gt;&gt;       SLOT token in the hostfile is - SLOT=1_at_2:1,3:1-4, the slot_list
</span><br>
<span class="quotelev1">&gt; string
</span><br>
<span class="quotelev2">&gt;&gt; is: 2:1,3:7-9.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 2. In the RDS hostfile component:
</span><br>
<span class="quotelev2">&gt;&gt;    a. Added new token SLOT to the lex parser.
</span><br>
<span class="quotelev2">&gt;&gt;    b. filling the orte_ras_proc_t structure list according the SLOT
</span><br>
<span class="quotelev1">&gt; token in
</span><br>
<span class="quotelev2">&gt;&gt; the hostfile.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 3. In the RMAPS round robin component:
</span><br>
<span class="quotelev2">&gt;&gt;    a. Added new member to orte_mapped_node_t structure - slot_list
</span><br>
<span class="quotelev1">&gt; (similar to
</span><br>
<span class="quotelev2">&gt;&gt; the slot_list 
</span><br>
<span class="quotelev2">&gt;&gt;       in the orte_ras_proc_t structure)
</span><br>
<span class="quotelev2">&gt;&gt;    b. in the orte_rmaps_rr_map, mapping job according to hostfile
</span><br>
<span class="quotelev1">&gt; ranks before
</span><br>
<span class="quotelev2">&gt;&gt; mapping the job
</span><br>
<span class="quotelev2">&gt;&gt;       by slot or by node.
</span><br>
<span class="quotelev2">&gt;&gt;    c. in the orte_rmaps_rr_map, arranging the MCW ranks according to
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; hostfile.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 4. in the ODLS default module:
</span><br>
<span class="quotelev2">&gt;&gt;    a. Added slot_list to orte_odls_default_get_add_procs_data.
</span><br>
<span class="quotelev2">&gt;&gt;    b. Added slot_list to orte_odls_default_launch_local_procs.
</span><br>
<span class="quotelev2">&gt;&gt;    c. Added new member to the child structure a cpu_set bitmap (for
</span><br>
<span class="quotelev1">&gt; PLPA)
</span><br>
<span class="quotelev2">&gt;&gt;    d. Added mapping of the slot_list string to a cpu_set bitmap in the
</span><br>
<span class="quotelev1">&gt; child
</span><br>
<span class="quotelev2">&gt;&gt; structure.  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; For more details you can browse the code.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I would like to merge these changes to the trunk as soon as possible
</span><br>
<span class="quotelev1">&gt; since, as
</span><br>
<span class="quotelev2">&gt;&gt; I understood from Ralph Castain emails,
</span><br>
<span class="quotelev2">&gt;&gt; The Open RTE will go through a lot of changes in the near future and
</span><br>
<span class="quotelev1">&gt; since
</span><br>
<span class="quotelev2">&gt;&gt; this is a relatively small change I want to merge
</span><br>
<span class="quotelev2">&gt;&gt; it before the big change.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Any comments?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Sharon.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="1836.php">Jeff Squyres: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Previous message:</strong> <a href="1834.php">Sharon Melamed: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>In reply to:</strong> <a href="1834.php">Sharon Melamed: "Re: [OMPI devel] ticket 1023"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1841.php">Sharon Melamed: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Reply:</strong> <a href="1841.php">Sharon Melamed: "Re: [OMPI devel] ticket 1023"</a>
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
