<?
$subject_val = "Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 18 14:46:15 2012" -->
<!-- isoreceived="20120318184615" -->
<!-- sent="Sun, 18 Mar 2012 12:46:05 -0600" -->
<!-- isosent="20120318184605" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problems obtaining jdata-&amp;gt;map in the HNP." -->
<!-- id="D7966A29-08EE-4565-BE26-AC322006E3A0_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CABdqK1147UZefAFwiDUfugGunU=PEnUSMVx-ibL5f=pJH31nyA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-18 14:46:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10730.php">Ralph Castain: "Re: [OMPI devel] New odls component fails"</a>
<li><strong>Previous message:</strong> <a href="10728.php">Hugo Daniel Meyer: "[OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<li><strong>In reply to:</strong> <a href="10728.php">Hugo Daniel Meyer: "[OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10731.php">Hugo Daniel Meyer: "Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<li><strong>Reply:</strong> <a href="10731.php">Hugo Daniel Meyer: "Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this in the trunk? Or in some release branch?
<br>
<p>The daemon job has a map and nodes defined in it on the trunk, but not in earlier releases. If you want the HNP to find that info in an earlier release, you could instead cycle across the entries in orte_node_pool, looking for those that have a daemon assigned to them.
<br>
<p>As for the daemons - no, they don't have a copy of the orte_node_t structures. Once the new state machine gets committed, then they will - but in the meantime, the only node-type information they have is in the orte_nidmap list. See the definition of orte_nid_t in orte/runtime/orte_globals.h.
<br>
<p><p>On Mar 18, 2012, at 9:38 AM, Hugo Daniel Meyer wrote:
<br>
<p><span class="quotelev1">&gt; Hello.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've included a new list in the orte_node_t (because i need to have a copy of my data structure per daemon), it is an array of my own data structure, which i will fill with data about the processes in the job, and other data that interest me. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For test purposes, i'm trying to command the table fill from the process with rank 0. This process send a message (send_buffer) to his HNP (using &quot;process_command&quot; of orted_comm.c). The HNP receives this command and try to obtain jdata of the daemons with the jobid of the  sent by the rank 0. 
</span><br>
<span class="quotelev1">&gt;  if (NULL == (jdata_orte = orte_get_job_data_object(jobid_orted)){
</span><br>
<span class="quotelev1">&gt;          // problem
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; I obtain the jdata_orte without problems, but, the jdata_orte-&gt;map is null, and of course, i cannot do something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node_from_map = (orte_node_t*)opal_pointer_array_get_item(jdata-&gt;map-&gt;nodes, i);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need to obtain every node, and access my table to fill it. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question is, the daemons do not fill this information, that's why i get the jdata-&gt;map equal to NULL? If so, how can i obtain all the orte_node_t objects to fill them with the information that i need? As i understand, each daemon has a copy of the orte_node_t structures, is this so?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugo
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10729/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10730.php">Ralph Castain: "Re: [OMPI devel] New odls component fails"</a>
<li><strong>Previous message:</strong> <a href="10728.php">Hugo Daniel Meyer: "[OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<li><strong>In reply to:</strong> <a href="10728.php">Hugo Daniel Meyer: "[OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10731.php">Hugo Daniel Meyer: "Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<li><strong>Reply:</strong> <a href="10731.php">Hugo Daniel Meyer: "Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
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
