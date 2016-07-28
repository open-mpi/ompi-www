<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 16:55:55 2012" -->
<!-- isoreceived="20120315205555" -->
<!-- sent="Thu, 15 Mar 2012 16:55:50 -0400 (EDT)" -->
<!-- isosent="20120315205550" -->
<!-- name="Joshua Baker-LePain" -->
<!-- email="jlb17_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="alpine.LRH.2.02.1203151653510.31702_at_hogwarts.egr.duke.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8D51868D-B374-440C-B0DD-03DBE39142DA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE<br>
<strong>From:</strong> Joshua Baker-LePain (<em>jlb17_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 16:55:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18793.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18791.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<li><strong>In reply to:</strong> <a href="18788.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18793.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18793.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 15 Mar 2012 at 11:49am, Ralph Castain wrote
<br>
<p><span class="quotelev1">&gt; Here's the patch: I've set it up to go into 1.5, but not 1.4 as that 
</span><br>
<span class="quotelev1">&gt; series is being closed out. Please let me know if this solves the 
</span><br>
<span class="quotelev1">&gt; problem for you.
</span><br>
<p>I couldn't get the included inline patch to apply to 1.5.4 (probably my 
<br>
issue), but I downloaded it from 
<br>
&lt;<a href="https://svn.open-mpi.org/trac/ompi/changeset/26148">https://svn.open-mpi.org/trac/ompi/changeset/26148</a>&gt; and applied that.  My 
<br>
test job ran just fine, and looking at the nodes verified a single orted 
<br>
process per node despite SGE assigning slots in multiple queues.
<br>
<p>In short, WORKSFORME.
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Joshua Baker-LePain
QB3 Shared Cluster Sysadmin
UCSF
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18793.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18791.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<li><strong>In reply to:</strong> <a href="18788.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18793.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18793.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
