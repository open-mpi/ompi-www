<?
$subject_val = "[OMPI devel] accessors to context id and message id's";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 11:22:02 2007" -->
<!-- isoreceived="20071105162202" -->
<!-- sent="Mon, 05 Nov 2007 08:01:07 -0500" -->
<!-- isosent="20071105130107" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] accessors to context id and message id's" -->
<!-- id="472F1413.5080902_at_sun.com" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-05 08:01:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2546.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16644"</a>
<li><strong>Previous message:</strong> <a href="2544.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2556.php">George Bosilca: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>Reply:</strong> <a href="2556.php">George Bosilca: "Re: [OMPI devel] accessors to context id and message id's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Currently in order to do message tracing one either has to rely on some 
<br>
error prone postprocessing of data or replicating some MPI internals up 
<br>
in the PMPI layer.  It would help Sun's tools group (and I believe U 
<br>
Dresden also) if Open MPI would create a couple APIs that exoposed the 
<br>
following:
<br>
<p>1. PML Message ids used for a request
<br>
2. Context id for a specific communicator
<br>
<p>I could see a couple ways of providing this information.  Either by 
<br>
extending the PERUSE probes or creating actual functions that one would 
<br>
pass in a request handle or communicator handle to get the appropriate 
<br>
data back.
<br>
<p>This is just a thought right now which why this email is not in an RFC 
<br>
format.  I wanted to get a feel from the community as to the interest in 
<br>
such APIs and if anyone may have specific issues with us providing such 
<br>
interfaces.  If the responses seems positive I will follow this message 
<br>
up with an RFC.
<br>
<p>thanks,
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2546.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16644"</a>
<li><strong>Previous message:</strong> <a href="2544.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2556.php">George Bosilca: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>Reply:</strong> <a href="2556.php">George Bosilca: "Re: [OMPI devel] accessors to context id and message id's"</a>
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
