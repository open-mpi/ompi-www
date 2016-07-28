<?
$subject_val = "Re: [OMPI devel] &quot;--pernode N&quot; bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 13:11:05 2014" -->
<!-- isoreceived="20140331171105" -->
<!-- sent="Mon, 31 Mar 2014 17:10:45 +0000" -->
<!-- isosent="20140331171045" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;--pernode N&amp;quot; bug?" -->
<!-- id="A51EC0CE-5949-4DCB-AF63-7EBF6E2057A0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="321FC4A0-C000-4E00-A2AB-214FBC5AD3D5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;--pernode N&quot; bug?<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-31 13:10:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14434.php">Mike Dubman: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>Previous message:</strong> <a href="14432.php">Ralph Castain: "Re: [OMPI devel] &quot;--pernode N&quot; bug?"</a>
<li><strong>In reply to:</strong> <a href="14432.php">Ralph Castain: "Re: [OMPI devel] &quot;--pernode N&quot; bug?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*sigh*
<br>
<p>Thanks Ralph.  I had another MPI implementation's CLI options wedged in my brain (where &quot;--perhost&quot; take's an argument).
<br>
<p>Sorry for the noise,
<br>
-Dave
<br>
<p>On Mar 31, 2014, at 12:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Well, that's why it is a &quot;deprecated&quot; option! :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like the command line parser then gets confused by the error in your option - if you look more closely at the error, you'll see that it picked up the &quot;2&quot; as the name of your executable. This is because &quot;pernode&quot; doesn't take an argument - it is shorthand for &quot;npernode 1&quot;. You probably meant to use the &quot;npernode&quot; option, which would have worked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 31, 2014, at 9:57 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I use the &quot;--pernode&quot; option (instead of &quot;--map-by ppr:1:node&quot;) with v1.8_at_r31295, I get this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----8&lt;----
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec --pernode 2 -n 4 --host dg1,dg2 ./ring_c
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; The following command line options and corresponding MCA parameter have
</span><br>
<span class="quotelev2">&gt;&gt; been deprecated and replaced as follows:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Command line options:
</span><br>
<span class="quotelev2">&gt;&gt;   Deprecated:  --pernode, -pernode
</span><br>
<span class="quotelev2">&gt;&gt;   Replacement: --map-by ppr:1:node
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Equivalent MCA parameter:
</span><br>
<span class="quotelev2">&gt;&gt;   Deprecated:  rmaps_base_pernode, rmaps_ppr_pernode
</span><br>
<span class="quotelev2">&gt;&gt;   Replacement: rmaps_base_mapping_policy=ppr:1:node
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The deprecated forms *will* disappear in a future version of Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; Please update to the new syntax.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec was unable to find the specified executable file, and therefore
</span><br>
<span class="quotelev2">&gt;&gt; did not launch the job.  This error was first reported for process
</span><br>
<span class="quotelev2">&gt;&gt; rank 0; it may have occurred for other processes as well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; NOTE: A common cause for this error is misspelling a mpiexec command
</span><br>
<span class="quotelev2">&gt;&gt;     line parameter option (remember that mpiexec interprets the first
</span><br>
<span class="quotelev2">&gt;&gt;     unrecognized command line token as the executable).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Node:       savbu-usnic-a
</span><br>
<span class="quotelev2">&gt;&gt; Executable: 2
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ----8&lt;----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's a strange error for two reasons:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * because mpiexec shouldn't be launching on the head node (I passed &quot;--host dg1,dg2&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; * because the head node (savbu-usnic-a) actually does have a copy of this file in the exact same place as dg1/dg2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Everything works as expected if I pass the non-deprecated form of the option to mpiexec.  I checked quickly at the tip of the v1.7 branch (v1.7_at_r31182) and it has the same behavior.  I have not tried any other revisions yet.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Dave
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14434.php">Mike Dubman: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>Previous message:</strong> <a href="14432.php">Ralph Castain: "Re: [OMPI devel] &quot;--pernode N&quot; bug?"</a>
<li><strong>In reply to:</strong> <a href="14432.php">Ralph Castain: "Re: [OMPI devel] &quot;--pernode N&quot; bug?"</a>
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
