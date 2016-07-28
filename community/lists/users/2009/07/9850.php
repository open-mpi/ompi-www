<?
$subject_val = "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 23:00:30 2009" -->
<!-- isoreceived="20090707030030" -->
<!-- sent="Mon, 06 Jul 2009 23:00:09 -0400" -->
<!-- isosent="20090707030009" -->
<!-- name="John Phillips" -->
<!-- email="phillips_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers" -->
<!-- id="h2udnq$p43$1_at_ger.gmane.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F198185A-F877-4939-8840-E77980086062_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers<br>
<strong>From:</strong> John Phillips (<em>phillips_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 23:00:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9851.php">John Phillips: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>Previous message:</strong> <a href="9849.php">Doug Reeder: "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>In reply to:</strong> <a href="9842.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Luis Vitorio Cargnini wrote:
<br>
<span class="quotelev1">&gt; just one additional and if I have:
</span><br>
<span class="quotelev1">&gt; vector&lt; vector&lt;double&gt; &gt; x;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How to use the MPI_Send
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Send(&amp;x[0][0], x[0].size(),MPI_DOUBLE, 2, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>&nbsp;&nbsp;&nbsp;Vitorio,
<br>
<p>&nbsp;&nbsp;&nbsp;The standard provides no information on where the different parts of 
<br>
the data will be, relative to each other. In specific, there is no 
<br>
reason to believe that the data in the different internally nested 
<br>
doubles will be contiguous. (In fact, I know of no platform where it 
<br>
will be.) That means trying to send the whole structure at once is 
<br>
problematic.
<br>
<p>&nbsp;&nbsp;&nbsp;What you wrote will provide a pointer to the first element of the 
<br>
first nested vector to MPI_Send, and the length of that nested vector. 
<br>
If that is what you intend, I expect it to work. (I have not tested it, 
<br>
so I may be misthinking something here.) The other nested vectors could 
<br>
be sent for themselves, using separate MPI_Send calls.
<br>
<p>&nbsp;&nbsp;&nbsp;The only reliable way to send all of the data at once would be to 
<br>
serialize it off to a single vector or array for the send, then repack 
<br>
it in the structure after it is received.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;John
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9851.php">John Phillips: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>Previous message:</strong> <a href="9849.php">Doug Reeder: "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>In reply to:</strong> <a href="9842.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
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
