<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 19 21:56:59 2006" -->
<!-- isoreceived="20060720015659" -->
<!-- sent="Thu, 20 Jul 2006 11:56:46 +1000" -->
<!-- isosent="20060720015646" -->
<!-- name="gh rory" -->
<!-- email="gh.rory_at_[hidden]" -->
<!-- subject="[OMPI devel] one-sided communication implementation" -->
<!-- id="c305f6e20607191856u2ac3a6ech8b4a4b35cb963f9e_at_mail.gmail.com" -->
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
<strong>From:</strong> gh rory (<em>gh.rory_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-19 21:56:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0975.php">Pierre: "Re: [OMPI devel] Problem compiling openmpi 1.1"</a>
<li><strong>Previous message:</strong> <a href="0973.php">Adrian Knoth: "Re: [OMPI devel] Building ompi occasionally touches the source files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/08/0986.php">gh rory: "Re: [OMPI devel] one-sided communication implementation"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/08/0986.php">gh rory: "Re: [OMPI devel] one-sided communication implementation"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/08/0992.php">Brian Barrett: "Re: [OMPI devel] one-sided communication implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In the process of trying to create a wrapper for open mpi to another
<br>
language.  Specifically, I am trying to understand how the remote memory
<br>
access/one-sided communication works in open mpi 1.1, and I am having some
<br>
trouble.
<br>
<p>I have begun by trying to trace the steps in a simple MPI_Get call.  It
<br>
seems that ompi_osc_pt2pt_replyreq_recv in
<br>
ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c is the function that receives the
<br>
data for the requesting process, however I have not been able to find the
<br>
part of the code that receives the request at the other end.  It looks like
<br>
ompi_osc_pt2pt_component_fragment_cb in osc_pt2pt_component.c sends the data
<br>
back to the requesting process, but I can't see where the data is actually
<br>
copied.
<br>
<p>Can someone please point me in the right direction?  Is there any
<br>
documentation on the one-sided communication implementation that I should be
<br>
reading?
<br>
<p>Thanks,
<br>
<p><p>Rory.
<br>
<pre>
-- 
gh.rory_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0974/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0975.php">Pierre: "Re: [OMPI devel] Problem compiling openmpi 1.1"</a>
<li><strong>Previous message:</strong> <a href="0973.php">Adrian Knoth: "Re: [OMPI devel] Building ompi occasionally touches the source files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/08/0986.php">gh rory: "Re: [OMPI devel] one-sided communication implementation"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/08/0986.php">gh rory: "Re: [OMPI devel] one-sided communication implementation"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/08/0992.php">Brian Barrett: "Re: [OMPI devel] one-sided communication implementation"</a>
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
