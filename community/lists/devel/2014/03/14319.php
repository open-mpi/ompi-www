<?
$subject_val = "Re: [OMPI devel] [OMPI bugs] [Open MPI] #4354: Move r30966 to v1.7 branch (In mtl_mxm, don't disconnect from)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 11:18:56 2014" -->
<!-- isoreceived="20140311151856" -->
<!-- sent="Tue, 11 Mar 2014 15:18:30 +0000" -->
<!-- isosent="20140311151830" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI bugs] [Open MPI] #4354: Move r30966 to v1.7 branch (In mtl_mxm, don't disconnect from)" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A3ECEC682_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="057.84caba9a2a75604726c0d4942b307049_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI bugs] [Open MPI] #4354: Move r30966 to v1.7 branch (In mtl_mxm, don't disconnect from)<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 11:18:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14320.php">Orion Poplawski: "[OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Previous message:</strong> <a href="14318.php">Dave Goodell (dgoodell): "[OMPI devel] onesided/test_acc2 failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yossi, is it possible to handle this with OBJ_RELEASE? 
<br>
<p>-----Original Message-----
<br>
From: bugs [mailto:bugs-bounces_at_[hidden]] On Behalf Of Open MPI
<br>
Sent: Monday, March 10, 2014 12:22 PM
<br>
Cc: bugs_at_[hidden]
<br>
Subject: Re: [OMPI bugs] [Open MPI] #4354: Move r30966 to v1.7 branch (In mtl_mxm, don't disconnect from)
<br>
<p>#4354: Move r30966 to v1.7 branch (In mtl_mxm, don't disconnect from)
<br>
-----------------------------------+-----------------------------
<br>
Reporter:  yosefe                  |       Owner:  yosefe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Type:  changeset move request  |      Status:  assigned
<br>
Priority:  major                   |   Milestone:  Open MPI 1.7.5
<br>
&nbsp;Version:  trunk                   |  Resolution:
<br>
Keywords:                          |
<br>
-----------------------------------+-----------------------------
<br>
<p>Comment (by yosefe):
<br>
<p>&nbsp;The same thing is done in mca_bml_r2_del_procs(): Only processes with  refcount 1 are eventually passed to btl_del_procs():
<br>
<p>&nbsp;{{{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(p = 0; p &lt; nprocs; p++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_proc_t *proc = procs[p];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(((opal_object_t*)proc)-&gt;obj_reference_count == 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;del_procs[n_del_procs++] = proc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;}}}
<br>
<p>&nbsp;miked reviewed it.
<br>
<p><pre>
--
Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/4354#comment:2">https://svn.open-mpi.org/trac/ompi/ticket/4354#comment:2</a>&gt;
Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
_______________________________________________
bugs mailing list
bugs_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/bugs">http://www.open-mpi.org/mailman/listinfo.cgi/bugs</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14320.php">Orion Poplawski: "[OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Previous message:</strong> <a href="14318.php">Dave Goodell (dgoodell): "[OMPI devel] onesided/test_acc2 failures"</a>
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
