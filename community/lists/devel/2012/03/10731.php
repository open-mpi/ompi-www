<?
$subject_val = "Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 18 15:52:52 2012" -->
<!-- isoreceived="20120318195252" -->
<!-- sent="Sun, 18 Mar 2012 20:52:47 +0100" -->
<!-- isosent="20120318195247" -->
<!-- name="Hugo Daniel Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problems obtaining jdata-&amp;gt;map in the HNP." -->
<!-- id="CABdqK12egc7WPSzY=K_2ri9cG6=PAiHBsXASMXhPDLqS6b_gOw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D7966A29-08EE-4565-BE26-AC322006E3A0_at_open-mpi.org" -->
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
<strong>From:</strong> Hugo Daniel Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-18 15:52:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10732.php">Christopher Samuel: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>Previous message:</strong> <a href="10730.php">Ralph Castain: "Re: [OMPI devel] New odls component fails"</a>
<li><strong>In reply to:</strong> <a href="10729.php">Ralph Castain: "Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph.
<br>
<p>I'm not using the trunk, i'm using a version from a year ago.
<br>
<p>So, if i understand correctly, the best way to make what i want is to
<br>
include my data structure into the orte_nidmap, then cycle across all the
<br>
processes in my application to fill my structure.
<br>
<p>Thanks for your reply Ralph.
<br>
<p>Hugo
<br>
<p>El 18 de marzo de 2012 19:46, Ralph Castain &lt;rhc_at_[hidden]&gt; escribi&#243;:
<br>
<p><span class="quotelev1">&gt; Is this in the trunk? Or in some release branch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The daemon job has a map and nodes defined in it on the trunk, but not in
</span><br>
<span class="quotelev1">&gt; earlier releases. If you want the HNP to find that info in an earlier
</span><br>
<span class="quotelev1">&gt; release, you could instead cycle across the entries in orte_node_pool,
</span><br>
<span class="quotelev1">&gt; looking for those that have a daemon assigned to them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for the daemons - no, they don't have a copy of the orte_node_t
</span><br>
<span class="quotelev1">&gt; structures. Once the new state machine gets committed, then they will - but
</span><br>
<span class="quotelev1">&gt; in the meantime, the only node-type information they have is in the
</span><br>
<span class="quotelev1">&gt; orte_nidmap list. See the definition of orte_nid_t in
</span><br>
<span class="quotelev1">&gt; orte/runtime/orte_globals.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 18, 2012, at 9:38 AM, Hugo Daniel Meyer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've included a new list in the orte_node_t (because i need to have a copy
</span><br>
<span class="quotelev1">&gt; of my data structure per daemon), it is an array of my own data structure,
</span><br>
<span class="quotelev1">&gt; which i will fill with data about the processes in the job, and other data
</span><br>
<span class="quotelev1">&gt; that interest me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For test purposes, i'm trying to command the table fill from the process
</span><br>
<span class="quotelev1">&gt; with rank 0. This process send a message (send_buffer) to his HNP (using
</span><br>
<span class="quotelev1">&gt; &quot;process_command&quot; of orted_comm.c). The HNP receives this command and try
</span><br>
<span class="quotelev1">&gt; to obtain jdata of the daemons with the jobid of the  sent by the rank 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * if (NULL == (jdata_orte = orte_get_job_data_object(jobid_orted)){*
</span><br>
<span class="quotelev1">&gt; *         // problem*
</span><br>
<span class="quotelev1">&gt; *}*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I obtain the jdata_orte without problems, but, the jdata_orte-&gt;map is
</span><br>
<span class="quotelev1">&gt; null, and of course, i cannot do something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *node_from_map =
</span><br>
<span class="quotelev1">&gt; (orte_node_t*)opal_pointer_array_get_item(jdata-&gt;map-&gt;nodes, i);*
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to obtain every node, and access my table to fill it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is, the daemons do not fill this information, that's why i get
</span><br>
<span class="quotelev1">&gt; the jdata-&gt;map equal to NULL? If so, how can i obtain all the orte_node_t
</span><br>
<span class="quotelev1">&gt; objects to fill them with the information that i need? As i understand,
</span><br>
<span class="quotelev1">&gt; each daemon has a copy of the orte_node_t structures, is this so?
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10731/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10732.php">Christopher Samuel: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>Previous message:</strong> <a href="10730.php">Ralph Castain: "Re: [OMPI devel] New odls component fails"</a>
<li><strong>In reply to:</strong> <a href="10729.php">Ralph Castain: "Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
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
