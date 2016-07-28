<?
$subject_val = "[OMPI devel] Results of OMPI developer's meeting last week";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 17 15:35:50 2013" -->
<!-- isoreceived="20131217203550" -->
<!-- sent="Tue, 17 Dec 2013 20:35:49 +0000" -->
<!-- isosent="20131217203549" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Results of OMPI developer's meeting last week" -->
<!-- id="A5E6C00E-7C04-4522-81CA-B60637D2F52D_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Results of OMPI developer's meeting last week<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-17 15:35:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13457.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13455.php">Joshua Ladd: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you weren't at the OMPI developer's meeting last week, you should look at the wiki to see all the things that were discussed and the decisions that were made:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/Dec13Meeting">https://svn.open-mpi.org/trac/ompi/wiki/Dec13Meeting</a>
<br>
<p>One important change is that we decided for v1.7.3 to change OMPI's default mapping and binding scheme:
<br>
<p>- Mapping:
<br>
&nbsp;&nbsp;&nbsp;if #procs &lt;= 2, default to map-by core
<br>
&nbsp;&nbsp;&nbsp;if #procs &gt; 2, default to map-by socket
<br>
- Binding:
<br>
&nbsp;&nbsp;&nbsp;default to bind-to core
<br>
- Ranking (ordering):
<br>
&nbsp;&nbsp;&nbsp;default to rank-by &lt;obj&gt;, where &lt;obj&gt; is whatever object we mapped against
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13457.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13455.php">Joshua Ladd: "Re: [OMPI devel] bug in mca framework?"</a>
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
