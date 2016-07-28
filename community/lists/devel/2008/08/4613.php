<?
$subject_val = "[OMPI devel] IOF redesign: cmd line options";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 08:52:03 2008" -->
<!-- isoreceived="20080828125203" -->
<!-- sent="Thu, 28 Aug 2008 06:51:55 -0600" -->
<!-- isosent="20080828125155" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] IOF redesign: cmd line options" -->
<!-- id="E6D3656F-46F8-4C28-9D0D-6DB48DD7B1E4_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] IOF redesign: cmd line options<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-28 08:51:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4614.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Previous message:</strong> <a href="4612.php">Jeff Squyres: "[OMPI devel] MPI 2.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4614.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Reply:</strong> <a href="4614.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Reply:</strong> <a href="4615.php">Greg Watson: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The revised IOF design calls for several new cmd line options:
<br>
<p>1. specify which procs are to receive stdin. The options that were to  
<br>
be supported are: all procs, a specific proc, or no procs. The default  
<br>
will be rank=0 only. All procs not included will have their stdin tied  
<br>
to /dev/null - which means a debugger could not attach to the stdin at  
<br>
a later time.
<br>
<p>2. specify which stdxxx file descriptors you want left open on your  
<br>
procs. Our defaults are to leave stdout/stderr/stddiag open on all  
<br>
procs. This option would allow the user to specify that we tie any or  
<br>
all of these to /dev/null
<br>
<p>3. tag output with [job,rank] on every line. I have currently defined  
<br>
this option to be --tag-output. It is &quot;off&quot; by default, though at  
<br>
least one user has questioned that it should be &quot;on&quot; by default.
<br>
<p>Does anyone have suggestions as to the naming of these cmd line  
<br>
options, their behavior, and/or their default settings? Any additional  
<br>
requests?
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4614.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Previous message:</strong> <a href="4612.php">Jeff Squyres: "[OMPI devel] MPI 2.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4614.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Reply:</strong> <a href="4614.php">Jeff Squyres: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
<li><strong>Reply:</strong> <a href="4615.php">Greg Watson: "Re: [OMPI devel] IOF redesign: cmd line options"</a>
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
