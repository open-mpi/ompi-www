<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug  3 16:34:19 2007" -->
<!-- isoreceived="20070803203419" -->
<!-- sent="Fri, 3 Aug 2007 16:33:51 -0400" -->
<!-- isosent="20070803203351" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot" -->
<!-- id="97362F91-DA17-40CB-A745-3B58F3C7999E_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-03 16:33:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2076.php">dispanser_at_[hidden]: "[OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
<li><strong>Previous message:</strong> <a href="2074.php">Mohamad Chaarawi: "[OMPI devel] Sparse Branch (Heads up Commit)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2077.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>Reply:</strong> <a href="2077.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Upgrade to a newer Libtool 2.1 nightly snapshot (we are  
<br>
currently using 1.2362 2007/01/23) for making OMPI tarballs.
<br>
<p>WHY: <a href="https://svn.open-mpi.org/trac/ompi/ticket/982">https://svn.open-mpi.org/trac/ompi/ticket/982</a> is fixed by newer  
<br>
Libtool snapshots (e.g., 1.2444 2007/04/10 is what I have installed  
<br>
at Cisco).
<br>
<p>WHERE: In the nightly snapshot generation scripts at IU, with the  
<br>
Libtool tarball mirrored on <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>.
<br>
<p>WHEN: ASAP
<br>
<p>----------------------------------------------------------------------
<br>
<p>I propose that we upgrade the Libtool nightly snapshot that is used  
<br>
to create the Open MPI nightly snapshot tarballs.  Doing so fixes the  
<br>
Pathscale C++ NULL handle issue described in ticket #982.
<br>
<p>I realize that this is changing Libtool in mid-stream for the v1.2  
<br>
series, but since we're doing so many other things for v1.2.4, this  
<br>
might not be such a huge change in the overall scheme of things.
<br>
<p>Plus, it's a newer version, so it's better, right?  ;-)
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
<li><strong>Next message:</strong> <a href="2076.php">dispanser_at_[hidden]: "[OMPI devel] Startup failure on mixed IPv4/IPv6 environment (oob tcp bug?)"</a>
<li><strong>Previous message:</strong> <a href="2074.php">Mohamad Chaarawi: "[OMPI devel] Sparse Branch (Heads up Commit)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2077.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>Reply:</strong> <a href="2077.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
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
