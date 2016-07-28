<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 20:43:35 2009" -->
<!-- isoreceived="20090528004335" -->
<!-- sent="Wed, 27 May 2009 20:43:30 -0400" -->
<!-- isosent="20090528004330" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292" -->
<!-- id="99D3442B-2494-4CF7-8A6E-048835AC2ACF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="32CF5D08-CED0-46C4-81CA-1847AD3525ED_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 20:43:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6135.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Previous message:</strong> <a href="6133.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>In reply to:</strong> <a href="6133.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6135.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Reply:</strong> <a href="6135.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think Ralph was asking &quot;where is this value used?&quot;
<br>
<p>This particular value is one of the constants defined in mpi.h, and  
<br>
it's used in some of the public MPI data structures (the length of  
<br>
some strings returned by MPI to the application).
<br>
<p><p>On May 27, 2009, at 8:40 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; No there is no such constraint. Rainer's commit only changed the  
</span><br>
<span class="quotelev1">&gt; hardcoded value to another define, which this time can be set by the  
</span><br>
<span class="quotelev1">&gt; user at configure time. However, the default value is exactly the  
</span><br>
<span class="quotelev1">&gt; same as before (for MPI hostnames is set to 256).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 27, 2009, at 20:02 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't find that max hostname constraint in the above commit  
</span><br>
<span class="quotelev2">&gt;&gt; (probably just tired eyes). However, note that ORTE doesn't have  
</span><br>
<span class="quotelev2">&gt;&gt; any hostname length constraint, so if we are now adding one to the  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI layer, we have a problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For example, in the ompi_proc_t struct, we simply point it at the  
</span><br>
<span class="quotelev2">&gt;&gt; ORTE name so we avoid impacting the memory footprint by copying the  
</span><br>
<span class="quotelev2">&gt;&gt; hostname. Thus, it isn't clear to me -where- we are restricting  
</span><br>
<span class="quotelev2">&gt;&gt; hostname lengths - can someone point it out?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIQ: we routinely see hostnames much longer than 16 chars on the  
</span><br>
<span class="quotelev2">&gt;&gt; user list and on many clusters here. Having such a small  
</span><br>
<span class="quotelev2">&gt;&gt; restriction will cause major problems with our user base.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 27, 2009 at 8:11 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On May 27, 2009, at 9:54 AM, Rainer Keller wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; One thing to note about this change is that it will break binary
</span><br>
<span class="quotelev3">&gt;&gt; &gt; compatibility between 1.3/1.4 and the 1.5/1.6 series (since these
</span><br>
<span class="quotelev3">&gt;&gt; &gt; values are #define's, and therefore are resolved at compile time --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; not run-time).
</span><br>
<span class="quotelev2">&gt;&gt; Where's the break??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My bad -- you're entirely right.  I mis-read; you kept all the  
</span><br>
<span class="quotelev2">&gt;&gt; defaults exactly the same.  Good!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Several of my other comments are therefore invalid.  :-)  But the  
</span><br>
<span class="quotelev2">&gt;&gt; _OPAL_ -&gt; OPAL_ prefix thing is still relevant (that would be the  
</span><br>
<span class="quotelev2">&gt;&gt; only _OPAL prefix that I'm aware of).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="6135.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Previous message:</strong> <a href="6133.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>In reply to:</strong> <a href="6133.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6135.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Reply:</strong> <a href="6135.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
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
