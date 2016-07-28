<?
$subject_val = "[OMPI devel] &quot;--pernode N&quot; bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 12:57:08 2014" -->
<!-- isoreceived="20140331165708" -->
<!-- sent="Mon, 31 Mar 2014 16:57:06 +0000" -->
<!-- isosent="20140331165706" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="[OMPI devel] &amp;quot;--pernode N&amp;quot; bug?" -->
<!-- id="46CFD83C-21F4-436D-BB62-F5D1AAF1E3E5_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] &quot;--pernode N&quot; bug?<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-31 12:57:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14432.php">Ralph Castain: "Re: [OMPI devel] &quot;--pernode N&quot; bug?"</a>
<li><strong>Previous message:</strong> <a href="14430.php">Ralph Castain: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14432.php">Ralph Castain: "Re: [OMPI devel] &quot;--pernode N&quot; bug?"</a>
<li><strong>Reply:</strong> <a href="14432.php">Ralph Castain: "Re: [OMPI devel] &quot;--pernode N&quot; bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>When I use the &quot;--pernode&quot; option (instead of &quot;--map-by ppr:1:node&quot;) with v1.8_at_r31295, I get this:
<br>
<p>----8&lt;----
<br>
$ mpiexec --pernode 2 -n 4 --host dg1,dg2 ./ring_c
<br>
--------------------------------------------------------------------------
<br>
The following command line options and corresponding MCA parameter have
<br>
been deprecated and replaced as follows:
<br>
<p>&nbsp;&nbsp;Command line options:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Deprecated:  --pernode, -pernode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Replacement: --map-by ppr:1:node
<br>
<p>&nbsp;&nbsp;Equivalent MCA parameter:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Deprecated:  rmaps_base_pernode, rmaps_ppr_pernode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Replacement: rmaps_base_mapping_policy=ppr:1:node
<br>
<p>The deprecated forms *will* disappear in a future version of Open MPI.
<br>
Please update to the new syntax.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec was unable to find the specified executable file, and therefore
<br>
did not launch the job.  This error was first reported for process
<br>
rank 0; it may have occurred for other processes as well.
<br>
<p>NOTE: A common cause for this error is misspelling a mpiexec command
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;line parameter option (remember that mpiexec interprets the first
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unrecognized command line token as the executable).
<br>
<p>Node:       savbu-usnic-a
<br>
Executable: 2
<br>
--------------------------------------------------------------------------
<br>
----8&lt;----
<br>
<p>That's a strange error for two reasons:
<br>
<p>* because mpiexec shouldn't be launching on the head node (I passed &quot;--host dg1,dg2&quot;)
<br>
* because the head node (savbu-usnic-a) actually does have a copy of this file in the exact same place as dg1/dg2
<br>
<p>Everything works as expected if I pass the non-deprecated form of the option to mpiexec.  I checked quickly at the tip of the v1.7 branch (v1.7_at_r31182) and it has the same behavior.  I have not tried any other revisions yet.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14432.php">Ralph Castain: "Re: [OMPI devel] &quot;--pernode N&quot; bug?"</a>
<li><strong>Previous message:</strong> <a href="14430.php">Ralph Castain: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14432.php">Ralph Castain: "Re: [OMPI devel] &quot;--pernode N&quot; bug?"</a>
<li><strong>Reply:</strong> <a href="14432.php">Ralph Castain: "Re: [OMPI devel] &quot;--pernode N&quot; bug?"</a>
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
