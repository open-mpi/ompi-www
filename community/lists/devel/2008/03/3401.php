<?
$subject_val = "[OMPI devel] libevent vs. libev";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 16:39:02 2008" -->
<!-- isoreceived="20080306213902" -->
<!-- sent="Thu, 6 Mar 2008 16:38:49 -0500" -->
<!-- isosent="20080306213849" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] libevent vs. libev" -->
<!-- id="847E8E56-55EC-4E34-85E0-4DDF594D463B_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] libevent vs. libev<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 16:38:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3402.php">Ralf Wildenhues: "[OMPI devel] 3 test failures"</a>
<li><strong>Previous message:</strong> <a href="3400.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI: since I was the one who stirred up the hornet's nest a while  
<br>
ago :-), I thought I'd update everyone -- we're actually *not* going  
<br>
to use libev anymore.  We're simply going to update to a newer version  
<br>
of libevent, which seems to have all the things that we care about  
<br>
(better performance, smaller footprint, etc.).
<br>
<p>George/UTK has done a bunch of the work for upgrading (based on a pile  
<br>
of information provided by Brian at the Paris meeting); I'm helping  
<br>
them integrate it into the trunk over the next week or so.
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
<li><strong>Next message:</strong> <a href="3402.php">Ralf Wildenhues: "[OMPI devel] 3 test failures"</a>
<li><strong>Previous message:</strong> <a href="3400.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766"</a>
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
