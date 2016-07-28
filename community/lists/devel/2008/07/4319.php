<?
$subject_val = "Re: [OMPI devel] PLM consistency: launch agent param";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 10:41:30 2008" -->
<!-- isoreceived="20080711144130" -->
<!-- sent="Fri, 11 Jul 2008 10:41:20 -0400" -->
<!-- isosent="20080711144120" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PLM consistency: launch agent param" -->
<!-- id="48777110.8060009_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A0F66308-2A4E-44F4-ACDD-DC44A5BF8ACB_at_cisco.com" -->
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
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-11 10:41:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4320.php">Ralph H Castain: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<li><strong>Previous message:</strong> <a href="4318.php">Jeff Squyres: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<li><strong>In reply to:</strong> <a href="4318.php">Jeff Squyres: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4320.php">Ralph H Castain: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<li><strong>Reply:</strong> <a href="4320.php">Ralph H Castain: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For something as fundamental as launch do we still need to specify the 
<br>
component, could it just be &quot;launch_agent&quot;?
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sounds good to me.  We've done similar things in other frameworks -- 
</span><br>
<span class="quotelev1">&gt; put in MCA base params for things that all components could use.  How 
</span><br>
<span class="quotelev1">&gt; about plm_base_launch_agent?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 11, 2008, at 10:17 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since the question of backward compatibility of params came up... ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've been perusing the various PLM modules to check consistency. One 
</span><br>
<span class="quotelev2">&gt;&gt; thing I
</span><br>
<span class="quotelev2">&gt;&gt; noted right away is that -every- PLM module registers an MCA param to 
</span><br>
<span class="quotelev2">&gt;&gt; let
</span><br>
<span class="quotelev2">&gt;&gt; the user specify an orted cmd. I believe this specifically was done so
</span><br>
<span class="quotelev2">&gt;&gt; people could insert their favorite debugger in front of the &quot;orted&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; on the
</span><br>
<span class="quotelev2">&gt;&gt; spawned command line - e.g., &quot;valgrind orted&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that this forces the user to have to figure out the 
</span><br>
<span class="quotelev2">&gt;&gt; name of
</span><br>
<span class="quotelev2">&gt;&gt; the PLM module being used as the param is called &quot;-mca 
</span><br>
<span class="quotelev2">&gt;&gt; plm_rsh_agent&quot;, or
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-mca plm_lsf_orted&quot;, or...you name it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For users that only ever operate in one environment, who cares. However,
</span><br>
<span class="quotelev2">&gt;&gt; many users (at least around here) operate in multiple environments, 
</span><br>
<span class="quotelev2">&gt;&gt; and this
</span><br>
<span class="quotelev2">&gt;&gt; creates confusion.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I propose to create a single MCA param name for this value - 
</span><br>
<span class="quotelev2">&gt;&gt; something like
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-mca plm_launch_agent&quot; or whatever - and get rid of all these 
</span><br>
<span class="quotelev2">&gt;&gt; individual
</span><br>
<span class="quotelev2">&gt;&gt; registrations to reduce the user confusion.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Comments? I'll put my helmet on....
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4320.php">Ralph H Castain: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<li><strong>Previous message:</strong> <a href="4318.php">Jeff Squyres: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<li><strong>In reply to:</strong> <a href="4318.php">Jeff Squyres: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4320.php">Ralph H Castain: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<li><strong>Reply:</strong> <a href="4320.php">Ralph H Castain: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
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
