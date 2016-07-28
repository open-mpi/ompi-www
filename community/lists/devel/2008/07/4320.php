<?
$subject_val = "Re: [OMPI devel] PLM consistency: launch agent param";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 10:46:36 2008" -->
<!-- isoreceived="20080711144636" -->
<!-- sent="Fri, 11 Jul 2008 08:46:27 -0600" -->
<!-- isosent="20080711144627" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PLM consistency: launch agent param" -->
<!-- id="C49CCE63.E42E%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48777110.8060009_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PLM consistency: launch agent param<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-11 10:46:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4321.php">Ralph H Castain: "[OMPI devel] PLM consistency: priority"</a>
<li><strong>Previous message:</strong> <a href="4319.php">Don Kerr: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<li><strong>In reply to:</strong> <a href="4319.php">Don Kerr: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I suppose we could even just make it an mpirun cmd line param, at that
<br>
point. As an MCA param, though, we have typically insisted on a particular
<br>
syntax that includes framework and component...
<br>
<p><p>On 7/11/08 8:41 AM, &quot;Don Kerr&quot; &lt;Don.Kerr_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; For something as fundamental as launch do we still need to specify the
</span><br>
<span class="quotelev1">&gt; component, could it just be &quot;launch_agent&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Sounds good to me.  We've done similar things in other frameworks --
</span><br>
<span class="quotelev2">&gt;&gt; put in MCA base params for things that all components could use.  How
</span><br>
<span class="quotelev2">&gt;&gt; about plm_base_launch_agent?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 11, 2008, at 10:17 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since the question of backward compatibility of params came up... ;-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been perusing the various PLM modules to check consistency. One
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thing I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; noted right away is that -every- PLM module registers an MCA param to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; let
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the user specify an orted cmd. I believe this specifically was done so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; people could insert their favorite debugger in front of the &quot;orted&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawned command line - e.g., &quot;valgrind orted&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is that this forces the user to have to figure out the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; name of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the PLM module being used as the param is called &quot;-mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm_rsh_agent&quot;, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;-mca plm_lsf_orted&quot;, or...you name it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For users that only ever operate in one environment, who cares. However,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; many users (at least around here) operate in multiple environments,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; creates confusion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I propose to create a single MCA param name for this value -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;-mca plm_launch_agent&quot; or whatever - and get rid of all these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; individual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; registrations to reduce the user confusion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Comments? I'll put my helmet on....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4321.php">Ralph H Castain: "[OMPI devel] PLM consistency: priority"</a>
<li><strong>Previous message:</strong> <a href="4319.php">Don Kerr: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<li><strong>In reply to:</strong> <a href="4319.php">Don Kerr: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
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
