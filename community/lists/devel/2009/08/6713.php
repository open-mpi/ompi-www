<?
$subject_val = "Re: [OMPI devel] RFC: convert send to ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 17:42:37 2009" -->
<!-- isoreceived="20090824214237" -->
<!-- sent="Mon, 24 Aug 2009 17:42:32 -0400" -->
<!-- isosent="20090824214232" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: convert send to ssend" -->
<!-- id="5EF3D6A5-8382-4BC7-A09F-A6270F1BFC8F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1251135334.32269.124.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: convert send to ssend<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 17:42:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6714.php">Patrick Geoffray: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6712.php">George Bosilca: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<li><strong>In reply to:</strong> <a href="6707.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2009, at 1:35 PM, Ashley Pittman wrote:
<br>
<p><span class="quotelev2">&gt; &gt; The point of b is for sysadmins (or individual developers) who  
</span><br>
<span class="quotelev1">&gt; want to
</span><br>
<span class="quotelev2">&gt; &gt; force there to *always* be correct MPI applications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But couldn't the sysadmin equally well write a config file to achieve
</span><br>
<span class="quotelev1">&gt; the same effect should they want to?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, probably so.  I was only pulling from the precedent of the MPI  
<br>
param checking for the tri-state.
<br>
<p><span class="quotelev1">&gt; Having it enabled (and on) in the standard &quot;debug&quot; build is going to
</span><br>
<span class="quotelev1">&gt; change the behaviour of applications with using a debug library, may
</span><br>
<span class="quotelev1">&gt; well render bugs un-reproducible in debug mode or worse you may end up
</span><br>
<span class="quotelev1">&gt; with end-user applications that only run in debug mode and not with a
</span><br>
<span class="quotelev1">&gt; normal build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Agreed.  Just to be totally clear: I, too, would not advocate that  
<br>
this feature be automatically enabled in debug builds.  It should  
<br>
default to compiled-out in all cases -- only enabled via a configure  
<br>
switch.
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
<li><strong>Next message:</strong> <a href="6714.php">Patrick Geoffray: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6712.php">George Bosilca: "Re: [OMPI devel] New frameworks and contribs in the trunk"</a>
<li><strong>In reply to:</strong> <a href="6707.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
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
