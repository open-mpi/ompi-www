<?
$subject_val = "Re: [OMPI devel] PLM consistency: launch agent param";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 10:31:58 2008" -->
<!-- isoreceived="20080711143158" -->
<!-- sent="Fri, 11 Jul 2008 10:19:06 -0400" -->
<!-- isosent="20080711141906" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PLM consistency: launch agent param" -->
<!-- id="A0F66308-2A4E-44F4-ACDD-DC44A5BF8ACB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C49CC790.E41C%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-11 10:19:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4319.php">Don Kerr: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<li><strong>Previous message:</strong> <a href="4317.php">Terry Dontje: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>In reply to:</strong> <a href="4315.php">Ralph H Castain: "[OMPI devel] PLM consistency: launch agent param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4319.php">Don Kerr: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<li><strong>Reply:</strong> <a href="4319.php">Don Kerr: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds good to me.  We've done similar things in other frameworks --  
<br>
put in MCA base params for things that all components could use.  How  
<br>
about plm_base_launch_agent?
<br>
<p><p>On Jul 11, 2008, at 10:17 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Since the question of backward compatibility of params came up... ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been perusing the various PLM modules to check consistency. One  
</span><br>
<span class="quotelev1">&gt; thing I
</span><br>
<span class="quotelev1">&gt; noted right away is that -every- PLM module registers an MCA param  
</span><br>
<span class="quotelev1">&gt; to let
</span><br>
<span class="quotelev1">&gt; the user specify an orted cmd. I believe this specifically was done so
</span><br>
<span class="quotelev1">&gt; people could insert their favorite debugger in front of the &quot;orted&quot;  
</span><br>
<span class="quotelev1">&gt; on the
</span><br>
<span class="quotelev1">&gt; spawned command line - e.g., &quot;valgrind orted&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that this forces the user to have to figure out the  
</span><br>
<span class="quotelev1">&gt; name of
</span><br>
<span class="quotelev1">&gt; the PLM module being used as the param is called &quot;-mca  
</span><br>
<span class="quotelev1">&gt; plm_rsh_agent&quot;, or
</span><br>
<span class="quotelev1">&gt; &quot;-mca plm_lsf_orted&quot;, or...you name it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For users that only ever operate in one environment, who cares.  
</span><br>
<span class="quotelev1">&gt; However,
</span><br>
<span class="quotelev1">&gt; many users (at least around here) operate in multiple environments,  
</span><br>
<span class="quotelev1">&gt; and this
</span><br>
<span class="quotelev1">&gt; creates confusion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I propose to create a single MCA param name for this value -  
</span><br>
<span class="quotelev1">&gt; something like
</span><br>
<span class="quotelev1">&gt; &quot;-mca plm_launch_agent&quot; or whatever - and get rid of all these  
</span><br>
<span class="quotelev1">&gt; individual
</span><br>
<span class="quotelev1">&gt; registrations to reduce the user confusion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comments? I'll put my helmet on....
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4319.php">Don Kerr: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<li><strong>Previous message:</strong> <a href="4317.php">Terry Dontje: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>In reply to:</strong> <a href="4315.php">Ralph H Castain: "[OMPI devel] PLM consistency: launch agent param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4319.php">Don Kerr: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
<li><strong>Reply:</strong> <a href="4319.php">Don Kerr: "Re: [OMPI devel] PLM consistency: launch agent param"</a>
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
