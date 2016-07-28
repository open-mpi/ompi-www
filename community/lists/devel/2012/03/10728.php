<?
$subject_val = "[OMPI devel] Problems obtaining jdata-&gt;map in the HNP.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 18 11:38:27 2012" -->
<!-- isoreceived="20120318153827" -->
<!-- sent="Sun, 18 Mar 2012 16:38:23 +0100" -->
<!-- isosent="20120318153823" -->
<!-- name="Hugo Daniel Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="[OMPI devel] Problems obtaining jdata-&amp;gt;map in the HNP." -->
<!-- id="CABdqK1147UZefAFwiDUfugGunU=PEnUSMVx-ibL5f=pJH31nyA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Problems obtaining jdata-&gt;map in the HNP.<br>
<strong>From:</strong> Hugo Daniel Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-18 11:38:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10729.php">Ralph Castain: "Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<li><strong>Previous message:</strong> <a href="10727.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10729.php">Ralph Castain: "Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<li><strong>Reply:</strong> <a href="10729.php">Ralph Castain: "Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello.
<br>
<p>I've included a new list in the orte_node_t (because i need to have a copy
<br>
of my data structure per daemon), it is an array of my own data structure,
<br>
which i will fill with data about the processes in the job, and other data
<br>
that interest me.
<br>
<p>For test purposes, i'm trying to command the table fill from the process
<br>
with rank 0. This process send a message (send_buffer) to his HNP (using
<br>
&quot;process_command&quot; of orted_comm.c). The HNP receives this command and try
<br>
to obtain jdata of the daemons with the jobid of the  sent by the rank 0.
<br>
<p>* if (NULL == (jdata_orte = orte_get_job_data_object(jobid_orted)){*
<br>
*         // problem*
<br>
*}*
<br>
<p>I obtain the jdata_orte without problems, but, the jdata_orte-&gt;map is null,
<br>
and of course, i cannot do something like:
<br>
<p>*node_from_map =
<br>
(orte_node_t*)opal_pointer_array_get_item(jdata-&gt;map-&gt;nodes, i);*
<br>
*
<br>
*
<br>
<p>I need to obtain every node, and access my table to fill it.
<br>
<p>My question is, the daemons do not fill this information, that's why i get
<br>
the jdata-&gt;map equal to NULL? If so, how can i obtain all the orte_node_t
<br>
objects to fill them with the information that i need? As i understand,
<br>
each daemon has a copy of the orte_node_t structures, is this so?
<br>
<p>Thanks for the help.
<br>
<p>Hugo
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10728/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10729.php">Ralph Castain: "Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<li><strong>Previous message:</strong> <a href="10727.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10729.php">Ralph Castain: "Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<li><strong>Reply:</strong> <a href="10729.php">Ralph Castain: "Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
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
