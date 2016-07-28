<?
$subject_val = "[OMPI devel] require newer autoconf?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 21:00:39 2009" -->
<!-- isoreceived="20090318010039" -->
<!-- sent="Tue, 17 Mar 2009 21:00:33 -0400" -->
<!-- isosent="20090318010033" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] require newer autoconf?" -->
<!-- id="AA06AFF6-02B1-45A4-B1F6-FD06D473AE62_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] require newer autoconf?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 21:00:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5655.php">Brian Barrett: "Re: [OMPI devel] require newer autoconf?"</a>
<li><strong>Previous message:</strong> <a href="5653.php">Eugene Loh: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5655.php">Brian Barrett: "Re: [OMPI devel] require newer autoconf?"</a>
<li><strong>Reply:</strong> <a href="5655.php">Brian Barrett: "Re: [OMPI devel] require newer autoconf?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per this thread:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2009/03/8402.php">http://www.open-mpi.org/community/lists/users/2009/03/8402.php</a>
<br>
<p>It took a *loooong* time to figure out that an outdated Autoconf  
<br>
install was the culprit of the &quot;restrict&quot; mess.  The issue is that  
<br>
somewhere between v2.61 and v2.63, Autoconf changed the order of  
<br>
looking for &quot;restrict&quot;-like keywords -- AC 2.63 has the &quot;good&quot; order;  
<br>
AC 2.61 has the &quot;bad&quot; order (hence, PGI worked for me with AC 2.63,  
<br>
but barfed for Mostyn with AC 2.61).
<br>
<p>Should we have our autogen.sh force the use of AC 2.63 and above?   
<br>
(currently, it forces 2.59 and above)
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
<li><strong>Next message:</strong> <a href="5655.php">Brian Barrett: "Re: [OMPI devel] require newer autoconf?"</a>
<li><strong>Previous message:</strong> <a href="5653.php">Eugene Loh: "Re: [OMPI devel] OMPI vs Scali performance comparisons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5655.php">Brian Barrett: "Re: [OMPI devel] require newer autoconf?"</a>
<li><strong>Reply:</strong> <a href="5655.php">Brian Barrett: "Re: [OMPI devel] require newer autoconf?"</a>
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
