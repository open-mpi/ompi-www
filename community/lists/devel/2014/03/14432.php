<?
$subject_val = "Re: [OMPI devel] &quot;--pernode N&quot; bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 13:05:38 2014" -->
<!-- isoreceived="20140331170538" -->
<!-- sent="Mon, 31 Mar 2014 10:05:17 -0700" -->
<!-- isosent="20140331170517" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;--pernode N&amp;quot; bug?" -->
<!-- id="321FC4A0-C000-4E00-A2AB-214FBC5AD3D5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46CFD83C-21F4-436D-BB62-F5D1AAF1E3E5_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-31 13:05:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14433.php">Dave Goodell (dgoodell): "Re: [OMPI devel] &quot;--pernode N&quot; bug?"</a>
<li><strong>Previous message:</strong> <a href="14431.php">Dave Goodell (dgoodell): "[OMPI devel] &quot;--pernode N&quot; bug?"</a>
<li><strong>In reply to:</strong> <a href="14431.php">Dave Goodell (dgoodell): "[OMPI devel] &quot;--pernode N&quot; bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14433.php">Dave Goodell (dgoodell): "Re: [OMPI devel] &quot;--pernode N&quot; bug?"</a>
<li><strong>Reply:</strong> <a href="14433.php">Dave Goodell (dgoodell): "Re: [OMPI devel] &quot;--pernode N&quot; bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, that's why it is a &quot;deprecated&quot; option! :-)
<br>
<p>Looks like the command line parser then gets confused by the error in your option - if you look more closely at the error, you'll see that it picked up the &quot;2&quot; as the name of your executable. This is because &quot;pernode&quot; doesn't take an argument - it is shorthand for &quot;npernode 1&quot;. You probably meant to use the &quot;npernode&quot; option, which would have worked.
<br>
<p><p>On Mar 31, 2014, at 9:57 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I use the &quot;--pernode&quot; option (instead of &quot;--map-by ppr:1:node&quot;) with v1.8_at_r31295, I get this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt; $ mpiexec --pernode 2 -n 4 --host dg1,dg2 ./ring_c
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The following command line options and corresponding MCA parameter have
</span><br>
<span class="quotelev1">&gt; been deprecated and replaced as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Command line options:
</span><br>
<span class="quotelev1">&gt;    Deprecated:  --pernode, -pernode
</span><br>
<span class="quotelev1">&gt;    Replacement: --map-by ppr:1:node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Equivalent MCA parameter:
</span><br>
<span class="quotelev1">&gt;    Deprecated:  rmaps_base_pernode, rmaps_ppr_pernode
</span><br>
<span class="quotelev1">&gt;    Replacement: rmaps_base_mapping_policy=ppr:1:node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The deprecated forms *will* disappear in a future version of Open MPI.
</span><br>
<span class="quotelev1">&gt; Please update to the new syntax.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to find the specified executable file, and therefore
</span><br>
<span class="quotelev1">&gt; did not launch the job.  This error was first reported for process
</span><br>
<span class="quotelev1">&gt; rank 0; it may have occurred for other processes as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: A common cause for this error is misspelling a mpiexec command
</span><br>
<span class="quotelev1">&gt;      line parameter option (remember that mpiexec interprets the first
</span><br>
<span class="quotelev1">&gt;      unrecognized command line token as the executable).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Node:       savbu-usnic-a
</span><br>
<span class="quotelev1">&gt; Executable: 2
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's a strange error for two reasons:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * because mpiexec shouldn't be launching on the head node (I passed &quot;--host dg1,dg2&quot;)
</span><br>
<span class="quotelev1">&gt; * because the head node (savbu-usnic-a) actually does have a copy of this file in the exact same place as dg1/dg2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything works as expected if I pass the non-deprecated form of the option to mpiexec.  I checked quickly at the tip of the v1.7 branch (v1.7_at_r31182) and it has the same behavior.  I have not tried any other revisions yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14433.php">Dave Goodell (dgoodell): "Re: [OMPI devel] &quot;--pernode N&quot; bug?"</a>
<li><strong>Previous message:</strong> <a href="14431.php">Dave Goodell (dgoodell): "[OMPI devel] &quot;--pernode N&quot; bug?"</a>
<li><strong>In reply to:</strong> <a href="14431.php">Dave Goodell (dgoodell): "[OMPI devel] &quot;--pernode N&quot; bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14433.php">Dave Goodell (dgoodell): "Re: [OMPI devel] &quot;--pernode N&quot; bug?"</a>
<li><strong>Reply:</strong> <a href="14433.php">Dave Goodell (dgoodell): "Re: [OMPI devel] &quot;--pernode N&quot; bug?"</a>
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
