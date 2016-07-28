<?
$subject_val = "Re: [OMPI devel] Launcher in trunk is broken?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 17 23:08:00 2011" -->
<!-- isoreceived="20111018030800" -->
<!-- sent="Mon, 17 Oct 2011 23:07:54 -0400" -->
<!-- isosent="20111018030754" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Launcher in trunk is broken?" -->
<!-- id="241E325B-A472-4AAA-9453-17B2031A458E_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DC4D6C01-EB4E-4530-83B9-6CC7FC1B6348_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Launcher in trunk is broken?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-17 23:07:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9832.php">George Bosilca: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="9830.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="9816.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed by r25313.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 11, 2011, at 16:54 , Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The patches (25245, 25248) proposed so far as a solution to this problem should be removed, as they do not really solve the problem, instead they alleviate the symptoms. From here there are two possible fixes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Put back the code dealing with the daemons leaving the job in the &quot;default&quot; version of the orted error manager.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here are the lines to be added in update_status in orte/mca/errmgr/default_orted/errmgr_default_orted.c:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 	 if (0 == orte_routed.num_routes() &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; 	     0 == opal_list_get_size(&amp;orte_local_children)) {
</span><br>
<span class="quotelev2">&gt;&gt; 	     orte_quit();
</span><br>
<span class="quotelev2">&gt;&gt; 	 }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for looking at this more closely. I'll restore those lines, and see if we are actually getting there. Could be the system I'm using behaves differently.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9832.php">George Bosilca: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="9830.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="9816.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
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
