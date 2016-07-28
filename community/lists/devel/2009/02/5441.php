<?
$subject_val = "[OMPI devel] sm latency putback";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 11:04:53 2009" -->
<!-- isoreceived="20090217160453" -->
<!-- sent="Tue, 17 Feb 2009 08:03:53 -0800" -->
<!-- isosent="20090217160353" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] sm latency putback" -->
<!-- id="499ADFE9.6010108_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] sm latency putback<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-17 11:03:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5442.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Previous message:</strong> <a href="5440.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.9 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5452.php">Tim Mattox: "Re: [OMPI devel] sm latency putback"</a>
<li><strong>Reply:</strong> <a href="5452.php">Tim Mattox: "Re: [OMPI devel] sm latency putback"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I just did my first putback to the trunk.  God help us all!
<br>
<p>It's r20578 and feedback (e.g., &quot;you broke everything&quot;) is appreciated, 
<br>
gentle feedback even more so.
<br>
<p>I had claimed at the in-person meeting last week that the &quot;single queue&quot; 
<br>
approach showed no appreciable performance regression in np=2 pingpong 
<br>
latencies.  Now, it looks like there may be a 1-3% slowdown (due 
<br>
principally to the lock that must now be used to write to shared FIFOs), 
<br>
but it's barely out of the noise and already more than won back even 
<br>
just at np=3 (let alone at higher process counts).  I think we're fine here.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5442.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Previous message:</strong> <a href="5440.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.9 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5452.php">Tim Mattox: "Re: [OMPI devel] sm latency putback"</a>
<li><strong>Reply:</strong> <a href="5452.php">Tim Mattox: "Re: [OMPI devel] sm latency putback"</a>
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
