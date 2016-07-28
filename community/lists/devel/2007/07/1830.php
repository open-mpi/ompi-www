<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 09:32:24 2007" -->
<!-- isoreceived="20070710133224" -->
<!-- sent="Tue, 10 Jul 2007 16:32:16 +0300" -->
<!-- isosent="20070710133216" -->
<!-- name="Sharon Melamed" -->
<!-- email="sharonm_at_[hidden]" -->
<!-- subject="[OMPI devel] ticket 1023" -->
<!-- id="39C75744D164D948A170E9792AF8E7CA02B3EE_at_exil.voltaire.com" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2007-07-10 09:32:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1831.php">Ralph H Castain: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Previous message:</strong> <a href="1829.php">Tim Prins: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1831.php">Ralph H Castain: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Reply:</strong> <a href="1831.php">Ralph H Castain: "Re: [OMPI devel] ticket 1023"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,
<br>
<p>&nbsp;
<br>
<p>In the recent few weeks I implemented ticket 1023
<br>
(<a href="https://svn.open-mpi.org/trac/ompi/ticket/1023">https://svn.open-mpi.org/trac/ompi/ticket/1023</a>
<br>
&lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1023">https://svn.open-mpi.org/trac/ompi/ticket/1023</a>&gt; ).
<br>
<p>In a few words, the purpose of ticket 1023 is to expand the hostfile
<br>
syntax to precisely specify slot
<br>
location (in terms of virtual CPU ID or socket core notation) in the
<br>
node and/or rank in a MCW.
<br>
<p>&nbsp;
<br>
<p>The code is in a temporary branch
<br>
<a href="https://svn.open-mpi.org/svn/ompi/tmp/sharon/">https://svn.open-mpi.org/svn/ompi/tmp/sharon/</a> 
<br>
<p>The changes are:
<br>
<p>1. In the RAS base component:
<br>
<p>&nbsp;&nbsp;&nbsp;a. Added new list of orte_ras_proc_t structures
<br>
<p>&nbsp;&nbsp;&nbsp;b. Each orte_ras_proc_t structure contains 3 members: node_name, rank
<br>
and cpu_list.
<br>
<p>&nbsp;&nbsp;&nbsp;c. the cpu_list is a string representing the slot list from the
<br>
hostfile i.e.: if the 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SLOT token in the hostfile is - SLOT=1_at_2:1,3:1-4, the slot_list
<br>
string is: 2:1,3:7-9.
<br>
<p>&nbsp;
<br>
<p>2. In the RDS hostfile component:
<br>
<p>&nbsp;&nbsp;&nbsp;a. Added new token SLOT to the lex parser.
<br>
<p>&nbsp;&nbsp;&nbsp;b. filling the orte_ras_proc_t structure list according the SLOT
<br>
token in the hostfile.
<br>
<p>&nbsp;
<br>
<p>3. In the RMAPS round robin component:
<br>
<p>&nbsp;&nbsp;&nbsp;a. Added new member to orte_mapped_node_t structure - slot_list
<br>
(similar to the slot_list 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in the orte_ras_proc_t structure)
<br>
<p>&nbsp;&nbsp;&nbsp;b. in the orte_rmaps_rr_map, mapping job according to hostfile ranks
<br>
before mapping the job
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;by slot or by node.
<br>
<p>&nbsp;&nbsp;&nbsp;c. in the orte_rmaps_rr_map, arranging the MCW ranks according to the
<br>
hostfile.
<br>
<p>&nbsp;
<br>
<p>4. in the ODLS default module:
<br>
<p>&nbsp;&nbsp;&nbsp;a. Added slot_list to orte_odls_default_get_add_procs_data.
<br>
<p>&nbsp;&nbsp;&nbsp;b. Added slot_list to orte_odls_default_launch_local_procs.
<br>
<p>&nbsp;&nbsp;&nbsp;c. Added new member to the child structure a cpu_set bitmap (for
<br>
PLPA)
<br>
<p>&nbsp;&nbsp;&nbsp;d. Added mapping of the slot_list string to a cpu_set bitmap in the
<br>
child structure.  
<br>
<p>&nbsp;
<br>
<p>For more details you can browse the code.
<br>
<p>&nbsp;
<br>
<p>I would like to merge these changes to the trunk as soon as possible
<br>
since, as I understood from Ralph Castain emails,
<br>
<p>The Open RTE will go through a lot of changes in the near future and
<br>
since this is a relatively small change I want to merge 
<br>
<p>it before the big change.
<br>
<p>&nbsp;
<br>
<p>Any comments?
<br>
<p>&nbsp;
<br>
<p>Sharon.
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1830/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1831.php">Ralph H Castain: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Previous message:</strong> <a href="1829.php">Tim Prins: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1831.php">Ralph H Castain: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>Reply:</strong> <a href="1831.php">Ralph H Castain: "Re: [OMPI devel] ticket 1023"</a>
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
