<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 15 15:03:07 2006" -->
<!-- isoreceived="20061215200307" -->
<!-- sent="Fri, 15 Dec 2006 15:03:06 -0500" -->
<!-- isosent="20061215200306" -->
<!-- name="Doug Gregor" -->
<!-- email="dgregor_at_[hidden]" -->
<!-- subject="[OMPI users] Big improvements in derived datatype performance on 1.2" -->
<!-- id="566BD3FD-70E7-430C-BBCC-63717021DF9E_at_cs.indiana.edu" -->
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
<strong>From:</strong> Doug Gregor (<em>dgregor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-15 15:03:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2371.php">George Bosilca: "Re: [OMPI users] Big improvements in derived datatype performance on 1.2"</a>
<li><strong>Previous message:</strong> <a href="2369.php">Brian W. Barrett: "Re: [OMPI users] Multiple definition of `malloc' and other symbols when doing static builds with mpif90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2371.php">George Bosilca: "Re: [OMPI users] Big improvements in derived datatype performance on 1.2"</a>
<li><strong>Reply:</strong> <a href="2371.php">George Bosilca: "Re: [OMPI users] Big improvements in derived datatype performance on 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>While doing some benchmarking with derived data types, I found that  
<br>
the prerelease Open MPI 1.2 is giving *much* better performance than  
<br>
Open MPI 1.1. My simple benchmark is a modified NetPIPE that sends/ 
<br>
receives data via a derived data type build with MPI_Contiguous(1,  
<br>
MPI_BYTE, ...) rather than MPI_BYTE. With Open MPI 1.1, this killed  
<br>
performance; with Open MPI 1.2, it had essentially no performance  
<br>
impact. Here's the NetPIPE chart, for reference:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.generic-programming.org/~dgregor/images/blog/netpipe">http://www.generic-programming.org/~dgregor/images/blog/netpipe</a>- 
<br>
ompi.png
<br>
<p>This message was originally going to point out the performance issues  
<br>
with Open MPI 1.1, but instead I'll just say &quot;Keep up the good work!&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cheers,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doug &quot;even-if-I-were-objective-Open MPI-would-be-better&quot; Gregor
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2371.php">George Bosilca: "Re: [OMPI users] Big improvements in derived datatype performance on 1.2"</a>
<li><strong>Previous message:</strong> <a href="2369.php">Brian W. Barrett: "Re: [OMPI users] Multiple definition of `malloc' and other symbols when doing static builds with mpif90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2371.php">George Bosilca: "Re: [OMPI users] Big improvements in derived datatype performance on 1.2"</a>
<li><strong>Reply:</strong> <a href="2371.php">George Bosilca: "Re: [OMPI users] Big improvements in derived datatype performance on 1.2"</a>
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
