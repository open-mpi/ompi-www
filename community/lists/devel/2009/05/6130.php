<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 20:02:36 2009" -->
<!-- isoreceived="20090528000236" -->
<!-- sent="Wed, 27 May 2009 18:02:31 -0600" -->
<!-- isosent="20090528000231" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292" -->
<!-- id="71d2d8cc0905271702k37a9e40dn6a0a1a5c3b161171_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BC027221-B46A-4988-9891-E82AAE41569B_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 20:02:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6131.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285"</a>
<li><strong>Previous message:</strong> <a href="6129.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<li><strong>In reply to:</strong> <a href="6115.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6133.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Reply:</strong> <a href="6133.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't find that max hostname constraint in the above commit (probably just
<br>
tired eyes). However, note that ORTE doesn't have any hostname length
<br>
constraint, so if we are now adding one to the OMPI layer, we have a
<br>
problem.
<br>
<p>For example, in the ompi_proc_t struct, we simply point it at the ORTE name
<br>
so we avoid impacting the memory footprint by copying the hostname. Thus, it
<br>
isn't clear to me -where- we are restricting hostname lengths - can someone
<br>
point it out?
<br>
<p>FWIQ: we routinely see hostnames much longer than 16 chars on the user list
<br>
and on many clusters here. Having such a small restriction will cause major
<br>
problems with our user base.
<br>
<p><p><p>On Wed, May 27, 2009 at 8:11 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On May 27, 2009, at 9:54 AM, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; One thing to note about this change is that it will break binary
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
<span class="quotelev1">&gt; My bad -- you're entirely right.  I mis-read; you kept all the defaults
</span><br>
<span class="quotelev1">&gt; exactly the same.  Good!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Several of my other comments are therefore invalid.  :-)  But the _OPAL_ -&gt;
</span><br>
<span class="quotelev1">&gt; OPAL_ prefix thing is still relevant (that would be the only _OPAL prefix
</span><br>
<span class="quotelev1">&gt; that I'm aware of).
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6130/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6131.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285"</a>
<li><strong>Previous message:</strong> <a href="6129.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<li><strong>In reply to:</strong> <a href="6115.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6133.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Reply:</strong> <a href="6133.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
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
