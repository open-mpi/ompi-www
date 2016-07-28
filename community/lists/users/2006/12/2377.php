<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 18 14:36:10 2006" -->
<!-- isoreceived="20061218193610" -->
<!-- sent="Mon, 18 Dec 2006 14:36:12 -0500" -->
<!-- isosent="20061218193612" -->
<!-- name="Doug Gregor" -->
<!-- email="dgregor_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Big improvements in derived datatype performance on 1.2" -->
<!-- id="927A451F-D2FB-439E-A5E5-5C957CC953C1_at_cs.indiana.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6BB60700-EEF3-4476-BF45-67BF228157A7_at_cs.utk.edu" -->
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
<strong>From:</strong> Doug Gregor (<em>dgregor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-18 14:36:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2378.php">Lydia Heck: "[OMPI users] crashed openmpi job fails to clean up ...."</a>
<li><strong>Previous message:</strong> <a href="2376.php">Jeff Squyres: "[OMPI users] Open MPI web site outage"</a>
<li><strong>In reply to:</strong> <a href="2371.php">George Bosilca: "Re: [OMPI users] Big improvements in derived datatype performance on 1.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>On Dec 15, 2006, at 4:05 PM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Thanks for the graph. I was wondering how do we compare with the
</span><br>
<span class="quotelev1">&gt; others MPI implementations. If you have others MPI installed on your
</span><br>
<span class="quotelev1">&gt; cluster can you do the same measurements with them and augment your
</span><br>
<span class="quotelev1">&gt; graph with the results ?
</span><br>
<p>Here's a graph with Open MPI 1.2, MVAPICH2 0.9.8, and LAM/MPI 7.1.2.  
<br>
It looks like derived datatypes don't have any real cost in this case  
<br>
on any of these implementations. Open MPI 1.1 was *much* slower with  
<br>
derived datatypes than with primitive/built-in data types, but I ran  
<br>
out of space to show that here.
<br>
<p>I hope that helps.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cheers,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doug
<br>
<p><p>
<br><hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2377/netpipe-ompi.pdf">netpipe-ompi.pdf</a>
</ul>
<!-- attachment="netpipe-ompi.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2378.php">Lydia Heck: "[OMPI users] crashed openmpi job fails to clean up ...."</a>
<li><strong>Previous message:</strong> <a href="2376.php">Jeff Squyres: "[OMPI users] Open MPI web site outage"</a>
<li><strong>In reply to:</strong> <a href="2371.php">George Bosilca: "Re: [OMPI users] Big improvements in derived datatype performance on 1.2"</a>
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
