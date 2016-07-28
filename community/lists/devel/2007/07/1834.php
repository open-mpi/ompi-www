<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 11:18:41 2007" -->
<!-- isoreceived="20070710151841" -->
<!-- sent="Tue, 10 Jul 2007 18:18:34 +0300" -->
<!-- isosent="20070710151834" -->
<!-- name="Sharon Melamed" -->
<!-- email="sharonm_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ticket 1023" -->
<!-- id="39C75744D164D948A170E9792AF8E7CA02B3EF_at_exil.voltaire.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2B8E91F.9DA4%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Sharon Melamed (<em>sharonm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 11:18:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1835.php">Ralph H Castain: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Previous message:</strong> <a href="1833.php">Ralph H Castain: "[OMPI devel] Bproc support"</a>
<li><strong>In reply to:</strong> <a href="1831.php">Ralph H Castain: "Re: [OMPI devel] ticket 1023"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1835.php">Ralph H Castain: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Reply:</strong> <a href="1835.php">Ralph H Castain: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Reply:</strong> <a href="1836.php">Jeff Squyres: "Re: [OMPI devel] ticket 1023"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>The responsibility for mapping rank to processor is in the ODLS
<br>
component.
<br>
I didn't touch the orted code.
<br>
<p>If you doesn't use orted - you steel use the ODLS component (like ODLS
<br>
bproc). Any way you mast have a component in the end machine that builds
<br>
the orte_odls_child_t structure from the RMAPS information and launch
<br>
the local processes. Currently this component is the ODLS. Most of my
<br>
work is in the ODLS component so if you decide to eliminate the orteds
<br>
you mast, somehow, preserve the ODLS functionality.
<br>
<p>Sharon.
<br>
<p>&nbsp;&nbsp;
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Ralph H Castain
<br>
Sent: Tuesday, July 10, 2007 4:43 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] ticket 1023
<br>
<p>As I understood our original discussions, this would move responsibility
<br>
for
<br>
mapping rank to processor back into the orted - is that still true?
<br>
<p>Reason I ask is to again clarify for people if we are doing so as it (a)
<br>
impacts those systems that don't use our orteds (e.g., will affinity
<br>
still
<br>
work in those environments?); and (b) it will make elimination of the
<br>
orteds
<br>
just a little more difficult.
<br>
<p>So could you please clarify for everyone what this code functionally
<br>
does?
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
<span class="quotelev1">&gt; In a few words, the purpose of ticket 1023 is to expand the hostfile
</span><br>
syntax to
<br>
<span class="quotelev1">&gt; precisely specify slot
</span><br>
<span class="quotelev1">&gt; location (in terms of virtual CPU ID or socket core notation) in the
</span><br>
node
<br>
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
<span class="quotelev1">&gt;    b. Each orte_ras_proc_t structure contains 3 members: node_name,
</span><br>
rank and
<br>
<span class="quotelev1">&gt; cpu_list.
</span><br>
<span class="quotelev1">&gt;    c. the cpu_list is a string representing the slot list from the
</span><br>
hostfile
<br>
<span class="quotelev1">&gt; i.e.: if the 
</span><br>
<span class="quotelev1">&gt;       SLOT token in the hostfile is - SLOT=1_at_2:1,3:1-4, the slot_list
</span><br>
string
<br>
<span class="quotelev1">&gt; is: 2:1,3:7-9.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2. In the RDS hostfile component:
</span><br>
<span class="quotelev1">&gt;    a. Added new token SLOT to the lex parser.
</span><br>
<span class="quotelev1">&gt;    b. filling the orte_ras_proc_t structure list according the SLOT
</span><br>
token in
<br>
<span class="quotelev1">&gt; the hostfile.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 3. In the RMAPS round robin component:
</span><br>
<span class="quotelev1">&gt;    a. Added new member to orte_mapped_node_t structure - slot_list
</span><br>
(similar to
<br>
<span class="quotelev1">&gt; the slot_list 
</span><br>
<span class="quotelev1">&gt;       in the orte_ras_proc_t structure)
</span><br>
<span class="quotelev1">&gt;    b. in the orte_rmaps_rr_map, mapping job according to hostfile
</span><br>
ranks before
<br>
<span class="quotelev1">&gt; mapping the job
</span><br>
<span class="quotelev1">&gt;       by slot or by node.
</span><br>
<span class="quotelev1">&gt;    c. in the orte_rmaps_rr_map, arranging the MCW ranks according to
</span><br>
the
<br>
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
<span class="quotelev1">&gt;    c. Added new member to the child structure a cpu_set bitmap (for
</span><br>
PLPA)
<br>
<span class="quotelev1">&gt;    d. Added mapping of the slot_list string to a cpu_set bitmap in the
</span><br>
child
<br>
<span class="quotelev1">&gt; structure.  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; For more details you can browse the code.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I would like to merge these changes to the trunk as soon as possible
</span><br>
since, as
<br>
<span class="quotelev1">&gt; I understood from Ralph Castain emails,
</span><br>
<span class="quotelev1">&gt; The Open RTE will go through a lot of changes in the near future and
</span><br>
since
<br>
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
<p><p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1835.php">Ralph H Castain: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Previous message:</strong> <a href="1833.php">Ralph H Castain: "[OMPI devel] Bproc support"</a>
<li><strong>In reply to:</strong> <a href="1831.php">Ralph H Castain: "Re: [OMPI devel] ticket 1023"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1835.php">Ralph H Castain: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Reply:</strong> <a href="1835.php">Ralph H Castain: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Reply:</strong> <a href="1836.php">Jeff Squyres: "Re: [OMPI devel] ticket 1023"</a>
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
