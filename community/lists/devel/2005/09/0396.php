<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 23 06:29:05 2005" -->
<!-- isoreceived="20050923112905" -->
<!-- sent="Wed, 21 Sep 2005 18:25:26 +0200" -->
<!-- isosent="20050921162526" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="mca selection" -->
<!-- id="cee920052d23a29464fab31fc65eb0cb_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-09-21 11:25:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0397.php">Jeff Squyres: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Previous message:</strong> <a href="0395.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0401.php">George Bosilca: "Re:  mca selection"</a>
<li><strong>Reply:</strong> <a href="0401.php">George Bosilca: "Re:  mca selection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short version:
<br>
--------------
<br>
<p>I'd like to have a single, top-level MCA param for each framework that 
<br>
controls the &quot;include&quot; and &quot;exclude&quot; behavior of components.  Something 
<br>
like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl self,mvapi ...
<br>
<p>would &quot;include&quot; self, mvapi (this actually already works for dynamic 
<br>
compiles).  And:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl !tcp
<br>
<p>would &quot;exclude&quot; tcp.  This would be for all frameworks, at the 
<br>
mca_base_components_open() level, not during framework-specific 
<br>
selection.  Hence, excluded / not-included components wouldn't even be 
<br>
opened (i.e., faster startup and smaller memory footprint).
<br>
<p>Longer version:
<br>
---------------
<br>
<p>Long, long ago, before Tim knew that I put in the &lt;framework&gt; MCA 
<br>
params into mca_base_components_open(), he added btl_base_include and 
<br>
btl_base_exclude to handle this kind of thing.  I think that this 
<br>
should be handled at the MCA level itself -- there should be no need to 
<br>
have this kind of exclusion and inclusion at each framework.
<br>
<p>More specifically, the frameworks can call mca_base_components_open() 
<br>
just as they do now, and if the MCA parameter for that framework was 
<br>
specified, mca_base_components_open() will obey it and pass back a 
<br>
customized list of components back to the caller.  The 
<br>
btl_base_[include|exclude] parameters (and others similar to it) can 
<br>
then be removed.
<br>
<p>Given that I already am on the hook to fix the static compile issue for 
<br>
1.0, adding this functionality would be pretty trivial.  Therefore, I'd 
<br>
like to do it for 1.0.  It would also give us a nice, uniform way of 
<br>
including components across all frameworks.
<br>
<p>It's also shorter to type on the command line.  :-)
<br>
<p>Comments?
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0397.php">Jeff Squyres: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Previous message:</strong> <a href="0395.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0401.php">George Bosilca: "Re:  mca selection"</a>
<li><strong>Reply:</strong> <a href="0401.php">George Bosilca: "Re:  mca selection"</a>
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
