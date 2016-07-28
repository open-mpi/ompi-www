<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 31 13:03:04 2006" -->
<!-- isoreceived="20060731170304" -->
<!-- sent="Mon, 31 Jul 2006 11:03:02 -0600" -->
<!-- isosent="20060731170302" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] progress thread check" -->
<!-- id="1154365382.28998.22.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="Pine.GSO.4.62.0607270748130.26983_at_enterprise" -->
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
<strong>Date:</strong> 2006-07-31 13:03:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/08/0982.php">Chris Hennes: "[OMPI devel] MPI_MAX_INFO_KEY used when MPI_MAX_INFO_VAL should be"</a>
<li><strong>Previous message:</strong> <a href="0980.php">Brian Barrett: "Re: [OMPI devel] universal / &quot;fat&quot; binary support?"</a>
<li><strong>In reply to:</strong> <a href="0978.php">Graham E Fagg: "[OMPI devel] progress thread check"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2006-07-27 at 07:49 -0400, Graham E Fagg wrote:
<br>
<span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt;   is there a single function call that components can use to check that the 
</span><br>
<span class="quotelev1">&gt; progress thread is up and running ?
</span><br>
<p>Not really.  But if the define OMPI_ENABLE_PROGRESS_THREADS is 1 and
<br>
opal_using_threads() returns true, then it can be assumed the event
<br>
progress thread is running.
<br>
<p>brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/08/0982.php">Chris Hennes: "[OMPI devel] MPI_MAX_INFO_KEY used when MPI_MAX_INFO_VAL should be"</a>
<li><strong>Previous message:</strong> <a href="0980.php">Brian Barrett: "Re: [OMPI devel] universal / &quot;fat&quot; binary support?"</a>
<li><strong>In reply to:</strong> <a href="0978.php">Graham E Fagg: "[OMPI devel] progress thread check"</a>
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
