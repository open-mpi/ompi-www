<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 23 09:20:55 2007" -->
<!-- isoreceived="20070123142055" -->
<!-- sent="Mon, 22 Jan 2007 14:40:19 -0700" -->
<!-- isosent="20070122214019" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="[OMPI devel] Libtool update for v1.2" -->
<!-- id="ED26B00B-BA25-4452-996D-55803912EBA7_at_lanl.gov" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-22 16:40:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1268.php">Jeff Squyres: "Re: [OMPI devel] Libtool update for v1.2"</a>
<li><strong>Previous message:</strong> <a href="1266.php">Brian W. Barrett: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1268.php">Jeff Squyres: "Re: [OMPI devel] Libtool update for v1.2"</a>
<li><strong>Reply:</strong> <a href="1268.php">Jeff Squyres: "Re: [OMPI devel] Libtool update for v1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>In December I had brought up the idea of updating the snapshot of  
<br>
Libtool 2 that we use for building the v1.2 branch to a more recent  
<br>
snapshot.  The group seemed to think this was a good idea and I was  
<br>
going to do it, then got sidetracked working around a bug in their  
<br>
support for dylib (OS X's shared libraries).  I committed a  
<br>
workaround to the trunk today for the bug (as well as sending one of  
<br>
the LIbtool developers a patch to libtool that resolves the issue).
<br>
<p>Once I hear back from Ralf (the LT developer), I'd like to finally do  
<br>
the LT update for our v1.2 tarballs.  The advantage to us is slightly  
<br>
faster builds, fixed convenience library dependencies (no more having  
<br>
to set LIBS=/usr/lib64), and more bug fixes.
<br>
<p>Does this still sound agreeable to everyone?
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1268.php">Jeff Squyres: "Re: [OMPI devel] Libtool update for v1.2"</a>
<li><strong>Previous message:</strong> <a href="1266.php">Brian W. Barrett: "Re: [OMPI devel] 1.2b3 fails on bluesteel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1268.php">Jeff Squyres: "Re: [OMPI devel] Libtool update for v1.2"</a>
<li><strong>Reply:</strong> <a href="1268.php">Jeff Squyres: "Re: [OMPI devel] Libtool update for v1.2"</a>
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
