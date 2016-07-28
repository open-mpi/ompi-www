<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 25 11:44:08 2006" -->
<!-- isoreceived="20061025154408" -->
<!-- sent="Wed, 25 Oct 2006 11:43:59 -0400" -->
<!-- isosent="20061025154359" -->
<!-- name="Katherine Holcomb" -->
<!-- email="kholcomb_at_[hidden]" -->
<!-- subject="[OMPI users] Starting on remote nodes" -->
<!-- id="1161791039.26570.346.camel_at_shavano.itc.virginia.edu" -->
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
<strong>From:</strong> Katherine Holcomb (<em>kholcomb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-25 11:43:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2047.php">Rainer Keller: "Re: [OMPI users] Starting on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="2045.php">Michael Kluskens: "[OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2047.php">Rainer Keller: "Re: [OMPI users] Starting on remote nodes"</a>
<li><strong>Reply:</strong> <a href="2047.php">Rainer Keller: "Re: [OMPI users] Starting on remote nodes"</a>
<li><strong>Reply:</strong> <a href="2048.php">Michael Kluskens: "Re: [OMPI users] Starting on remote nodes"</a>
<li><strong>Reply:</strong> <a href="2049.php">Michael Kluskens: "Re: [OMPI users] Starting on remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We currently use MPICH on our Linux clusters, but due to a high
<br>
frequency of semaphore problems we are planning to replace it.  OpenMPI
<br>
looks like our best candidate but we have hit a snag.  We support
<br>
multiple compilers (specifically PGI and Intel) and due to
<br>
incompatibilities in different vendors' f90 .mod files, we have separate
<br>
directories for OpenMPI with each compiler.  Therefore we cannot set a
<br>
global path to the OpenMPI binaries -- it will differ depending on the
<br>
user's choice of compiler.  I have read about the --prefix flag and this
<br>
does work, but our users are mostly barely conversant with Unix and many
<br>
would have difficulty finding and specifying the appropriate path.  (We
<br>
use the modules software environment currently to set paths and the like
<br>
for them.)  Is there some way to specify something like &quot;use the same
<br>
path as you are in&quot; from the root process?  There was some allusion in
<br>
the FAQ to changing the wrappers to include directives, but the link led
<br>
to a &quot;no such category&quot; page.
<br>
<pre>
-- 
Katherine Holcomb, Ph.D.                kholcomb_at_[hidden]
Research Computing Support Group - ITC  Office Phone: (434) 982-5948
148 BSEL, Clark Hall                    Center Phone: (434) 243-8799
University of Virginia 22904            
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2047.php">Rainer Keller: "Re: [OMPI users] Starting on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="2045.php">Michael Kluskens: "[OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2047.php">Rainer Keller: "Re: [OMPI users] Starting on remote nodes"</a>
<li><strong>Reply:</strong> <a href="2047.php">Rainer Keller: "Re: [OMPI users] Starting on remote nodes"</a>
<li><strong>Reply:</strong> <a href="2048.php">Michael Kluskens: "Re: [OMPI users] Starting on remote nodes"</a>
<li><strong>Reply:</strong> <a href="2049.php">Michael Kluskens: "Re: [OMPI users] Starting on remote nodes"</a>
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
