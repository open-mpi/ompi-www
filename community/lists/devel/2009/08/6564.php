<?
$subject_val = "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 12:30:39 2009" -->
<!-- isoreceived="20090803163039" -->
<!-- sent="Mon, 3 Aug 2009 12:30:34 -0400" -->
<!-- isosent="20090803163034" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component" -->
<!-- id="05CB7773-3342-4DB6-AD41-727D4011CDC5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A76D6A4.9070509_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-03 12:30:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6565.php">Jeff Squyres: "Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<li><strong>Previous message:</strong> <a href="6563.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>In reply to:</strong> <a href="6555.php">Arthur Huillet: "[OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6566.php">Sylvain Jeaugey: "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<li><strong>Reply:</strong> <a href="6566.php">Sylvain Jeaugey: "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<li><strong>Reply:</strong> <a href="6570.php">Arthur Huillet: "Re: [OMPI devel] [PATCH] Better error reporting when failing to	load a component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 3, 2009, at 8:23 AM, Arthur Huillet wrote:
<br>
<p><span class="quotelev1">&gt; I have recently started working on OpenMPI, and part of my job  
</span><br>
<span class="quotelev1">&gt; consists in adding a new module to OpenMPI.
</span><br>
<p>Cool.  What are you adding?
<br>
<p><span class="quotelev1">&gt; I would like to take this opportunity to thank the people who have  
</span><br>
<span class="quotelev1">&gt; been involved in writing <a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent</a> 
</span><br>
<span class="quotelev1">&gt;  as it was very helpful.
</span><br>
<p>Glad it was helpful!  Feel free to let us know if there's anything  
<br>
else that would be helpful there -- it's easy enough to give you write  
<br>
access to the wiki.
<br>
<p><span class="quotelev1">&gt; Attached is a patch that calls lt_dlerror() in order to show  
</span><br>
<span class="quotelev1">&gt; detailed information about what symbol is missing, when a component  
</span><br>
<span class="quotelev1">&gt; fails to load. I needed it to find out what was wrong in my module  
</span><br>
<span class="quotelev1">&gt; and I believe it can be useful to others as well.
</span><br>
<p>Applied in <a href="https://svn.open-mpi.org/trac/ompi/changeset/21751">https://svn.open-mpi.org/trac/ompi/changeset/21751</a>.  Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6565.php">Jeff Squyres: "Re: [OMPI devel] Invalid initializers in pml_base_request and bml_base_open"</a>
<li><strong>Previous message:</strong> <a href="6563.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>In reply to:</strong> <a href="6555.php">Arthur Huillet: "[OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6566.php">Sylvain Jeaugey: "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<li><strong>Reply:</strong> <a href="6566.php">Sylvain Jeaugey: "Re: [OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<li><strong>Reply:</strong> <a href="6570.php">Arthur Huillet: "Re: [OMPI devel] [PATCH] Better error reporting when failing to	load a component"</a>
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
