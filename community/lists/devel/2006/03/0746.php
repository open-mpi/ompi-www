<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 10 18:02:18 2006" -->
<!-- isoreceived="20060310230218" -->
<!-- sent="Fri, 10 Mar 2006 18:02:09 -0500" -->
<!-- isosent="20060310230209" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] ptmalloc2 and iof changes tonight" -->
<!-- id="0CB82CE0-BFA0-404D-9AB9-A65D0D37F0F9_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-10 18:02:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0747.php">Christian Leber: "[OMPI devel] writing a module to use OMPI on another network interface"</a>
<li><strong>Previous message:</strong> <a href="0745.php">Jeff Squyres: "[OMPI devel] Open MPI SVN outage"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey all -
<br>
<p>Just a heads up - I'm going to be committing two changes tonight that  
<br>
will require a re-autogen/configure.  The first is to fix an issue  
<br>
with ptmalloc2 that Tim discovered - it turns out that we were not  
<br>
properly enabling the threading support inside ptmalloc2, and that's  
<br>
an issue...  The second is to enable pty support for systems (like  
<br>
Solaris) that don't provide an openpty() call.  This should fix the  
<br>
weird IOF issues that Pierre reported on the users list this week.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0747.php">Christian Leber: "[OMPI devel] writing a module to use OMPI on another network interface"</a>
<li><strong>Previous message:</strong> <a href="0745.php">Jeff Squyres: "[OMPI devel] Open MPI SVN outage"</a>
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
