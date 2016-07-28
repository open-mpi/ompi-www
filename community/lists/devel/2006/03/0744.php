<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar  6 12:35:49 2006" -->
<!-- isoreceived="20060306173549" -->
<!-- sent="Mon, 6 Mar 2006 12:35:41 -0500" -->
<!-- isosent="20060306173541" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Changes to configure" -->
<!-- id="833CE1E3-B548-4883-91F5-381C177A8164_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-03-06 12:35:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0745.php">Jeff Squyres: "[OMPI devel] Open MPI SVN outage"</a>
<li><strong>Previous message:</strong> <a href="0743.php">Leslie Watter: "Re: [OMPI devel] MPI Applications"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1. If you have a top-level include/ directory, you should rm -rf it.   
<br>
This directory is now defunct; svn didn't remove it only because  
<br>
there are generated files in there (SVN never removes files that it  
<br>
didn't commit).  All the results from configure are now going to opal/ 
<br>
include/opal_config.h).  This caused some confusion among developers  
<br>
today, so I thought I'd re-iterate this point on the list.
<br>
<p>2. The default debugging option when compiling with GNU compilers is  
<br>
now -g3.  Until a few minutes ago, this was not recognized in another  
<br>
part of configure, and we also added &quot;-O3&quot; which was causing some  
<br>
headaches for some people.  So I violated the &quot;don't commit configure  
<br>
changes during the work day&quot; to fix this problem.
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
<li><strong>Next message:</strong> <a href="0745.php">Jeff Squyres: "[OMPI devel] Open MPI SVN outage"</a>
<li><strong>Previous message:</strong> <a href="0743.php">Leslie Watter: "Re: [OMPI devel] MPI Applications"</a>
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
