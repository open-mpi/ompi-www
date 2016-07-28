<?
$subject_val = "[OMPI devel] mpool errors fatal";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 21:05:57 2009" -->
<!-- isoreceived="20090414010557" -->
<!-- sent="Mon, 13 Apr 2009 21:05:52 -0400" -->
<!-- isosent="20090414010552" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] mpool errors fatal" -->
<!-- id="DBBD59F6-60D8-43AC-9ADD-602C10098DDF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] mpool errors fatal<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-13 21:05:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5819.php">Rob Egan: "[OMPI devel] 1.3.1 version/subversion discrepancy"</a>
<li><strong>Previous message:</strong> <a href="5817.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just made a change in the mpool base memory hook callback; please see:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/20984">https://svn.open-mpi.org/trac/ompi/changeset/20984</a>
<br>
<p>In short, I made the error that Lenny discovered (which turned out to  
<br>
be an ob1 issue, not a memory hooks issue) in <a href="https://svn.open-mpi.org/trac/ompi/ticket/1875">https://svn.open-mpi.org/trac/ompi/ticket/1875</a> 
<br>
&nbsp;&nbsp;be a fatal error rather than just calling opal_output().  So if this  
<br>
error ever happens again, it'll definitely show up in MTT via a bunch  
<br>
of failed tests (rather than someone happening to notice some  
<br>
opal_output's in the middle of a run).
<br>
<p>I made the error fatal by calling _exit(), though -- quite  
<br>
ungraceful.  The problem is that this is a void-returning callback in  
<br>
the middle of the memory allocator; there's no way to pass an error up  
<br>
higher for better handling.  Other options include:
<br>
<p>1. We could set a global variable, but then we'd have to notice that  
<br>
global error at some point later -- there's no real guarantee when  
<br>
exactly that would happen.
<br>
2. We could set a zero-time event to fire that would do some better  
<br>
cleanup/error handling, but that might (will?) call malloc()  
<br>
(remember: we're in a callback from the memory allocator, so calling  
<br>
malloc() may do Bad Things).
<br>
3. ...?
<br>
<p>However, I think that if this situation arises, we're in a bad place  
<br>
anyway -- perhaps the most sane thing to do is just exit cleanly.   
<br>
&quot;Better&quot; error handling might have us exit a bit more cleanly (e.g.,  
<br>
do some cleanup first), but _exit() will get the job done.  And then  
<br>
ORTE takes over and kills the rest of the job.
<br>
<p>*** Note that the old code was calling opal_output() to print the  
<br>
message, which might (will?) call malloc() anyway, so Bad Things could  
<br>
well have happened.  Meaning that the message may not have actually  
<br>
gotten printed out -- yoinks.  So the &quot;print the message&quot; code had to  
<br>
be updated anyway.  I think the only controversial point in this  
<br>
commit is that I called _exit().
<br>
<p>Comments?  Or is calling _exit() the least sucky thing to do here?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5819.php">Rob Egan: "[OMPI devel] 1.3.1 version/subversion discrepancy"</a>
<li><strong>Previous message:</strong> <a href="5817.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
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
