<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 20:41:58 2009" -->
<!-- isoreceived="20090528004158" -->
<!-- sent="Wed, 27 May 2009 20:40:46 -0400" -->
<!-- isosent="20090528004046" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292" -->
<!-- id="32CF5D08-CED0-46C4-81CA-1847AD3525ED_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0905271702k37a9e40dn6a0a1a5c3b161171_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 20:40:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6134.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Previous message:</strong> <a href="6132.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6130.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6134.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Reply:</strong> <a href="6134.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No there is no such constraint. Rainer's commit only changed the  
<br>
hardcoded value to another define, which this time can be set by the  
<br>
user at configure time. However, the default value is exactly the same  
<br>
as before (for MPI hostnames is set to 256).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 27, 2009, at 20:02 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I can't find that max hostname constraint in the above commit  
</span><br>
<span class="quotelev1">&gt; (probably just tired eyes). However, note that ORTE doesn't have any  
</span><br>
<span class="quotelev1">&gt; hostname length constraint, so if we are now adding one to the OMPI  
</span><br>
<span class="quotelev1">&gt; layer, we have a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, in the ompi_proc_t struct, we simply point it at the  
</span><br>
<span class="quotelev1">&gt; ORTE name so we avoid impacting the memory footprint by copying the  
</span><br>
<span class="quotelev1">&gt; hostname. Thus, it isn't clear to me -where- we are restricting  
</span><br>
<span class="quotelev1">&gt; hostname lengths - can someone point it out?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIQ: we routinely see hostnames much longer than 16 chars on the  
</span><br>
<span class="quotelev1">&gt; user list and on many clusters here. Having such a small restriction  
</span><br>
<span class="quotelev1">&gt; will cause major problems with our user base.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 27, 2009 at 8:11 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On May 27, 2009, at 9:54 AM, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; One thing to note about this change is that it will break binary
</span><br>
<span class="quotelev2">&gt; &gt; compatibility between 1.3/1.4 and the 1.5/1.6 series (since these
</span><br>
<span class="quotelev2">&gt; &gt; values are #define's, and therefore are resolved at compile time --
</span><br>
<span class="quotelev2">&gt; &gt; not run-time).
</span><br>
<span class="quotelev1">&gt; Where's the break??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My bad -- you're entirely right.  I mis-read; you kept all the  
</span><br>
<span class="quotelev1">&gt; defaults exactly the same.  Good!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Several of my other comments are therefore invalid.  :-)  But the  
</span><br>
<span class="quotelev1">&gt; _OPAL_ -&gt; OPAL_ prefix thing is still relevant (that would be the  
</span><br>
<span class="quotelev1">&gt; only _OPAL prefix that I'm aware of).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6134.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Previous message:</strong> <a href="6132.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6130.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6134.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Reply:</strong> <a href="6134.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
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
