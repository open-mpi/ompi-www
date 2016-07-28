<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 15 16:06:37 2006" -->
<!-- isoreceived="20061215210637" -->
<!-- sent="Fri, 15 Dec 2006 16:05:09 -0500" -->
<!-- isosent="20061215210509" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Big improvements in derived datatype performance on 1.2" -->
<!-- id="6BB60700-EEF3-4476-BF45-67BF228157A7_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="566BD3FD-70E7-430C-BBCC-63717021DF9E_at_cs.indiana.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-15 16:05:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2372.php">Nader Ahmadi: "[OMPI users] OpenMPI output problem, for IBM AIX 5.3"</a>
<li><strong>Previous message:</strong> <a href="2370.php">Doug Gregor: "[OMPI users] Big improvements in derived datatype performance on 1.2"</a>
<li><strong>In reply to:</strong> <a href="2370.php">Doug Gregor: "[OMPI users] Big improvements in derived datatype performance on 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2377.php">Doug Gregor: "Re: [OMPI users] Big improvements in derived datatype performance on 1.2"</a>
<li><strong>Reply:</strong> <a href="2377.php">Doug Gregor: "Re: [OMPI users] Big improvements in derived datatype performance on 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doug,
<br>
<p>Thanks for the graph. I was wondering how do we compare with the  
<br>
others MPI implementations. If you have others MPI installed on your  
<br>
cluster can you do the same measurements with them and augment your  
<br>
graph with the results ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 15, 2006, at 3:03 PM, Doug Gregor wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While doing some benchmarking with derived data types, I found that
</span><br>
<span class="quotelev1">&gt; the prerelease Open MPI 1.2 is giving *much* better performance than
</span><br>
<span class="quotelev1">&gt; Open MPI 1.1. My simple benchmark is a modified NetPIPE that sends/
</span><br>
<span class="quotelev1">&gt; receives data via a derived data type build with MPI_Contiguous(1,
</span><br>
<span class="quotelev1">&gt; MPI_BYTE, ...) rather than MPI_BYTE. With Open MPI 1.1, this killed
</span><br>
<span class="quotelev1">&gt; performance; with Open MPI 1.2, it had essentially no performance
</span><br>
<span class="quotelev1">&gt; impact. Here's the NetPIPE chart, for reference:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	<a href="http://www.generic-programming.org/~dgregor/images/blog/netpipe">http://www.generic-programming.org/~dgregor/images/blog/netpipe</a>-
</span><br>
<span class="quotelev1">&gt; ompi.png
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This message was originally going to point out the performance issues
</span><br>
<span class="quotelev1">&gt; with Open MPI 1.1, but instead I'll just say &quot;Keep up the good work!&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Cheers,
</span><br>
<span class="quotelev1">&gt; 	Doug &quot;even-if-I-were-objective-Open MPI-would-be-better&quot; Gregor
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2372.php">Nader Ahmadi: "[OMPI users] OpenMPI output problem, for IBM AIX 5.3"</a>
<li><strong>Previous message:</strong> <a href="2370.php">Doug Gregor: "[OMPI users] Big improvements in derived datatype performance on 1.2"</a>
<li><strong>In reply to:</strong> <a href="2370.php">Doug Gregor: "[OMPI users] Big improvements in derived datatype performance on 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2377.php">Doug Gregor: "Re: [OMPI users] Big improvements in derived datatype performance on 1.2"</a>
<li><strong>Reply:</strong> <a href="2377.php">Doug Gregor: "Re: [OMPI users] Big improvements in derived datatype performance on 1.2"</a>
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
