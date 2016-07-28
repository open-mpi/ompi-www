<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar  3 19:19:01 2006" -->
<!-- isoreceived="20060304001901" -->
<!-- sent="Fri, 3 Mar 2006 19:18:52 -0500" -->
<!-- isosent="20060304001852" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE" -->
<!-- id="611E190B-2B9B-4719-B260-368B5C526257_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C02E226C.906E%xyang_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-03 19:18:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0780.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Previous message:</strong> <a href="0778.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="0778.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0784.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Reply:</strong> <a href="0784.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 3, 2006, at 6:42 PM, Xiaoning (David) Yang wrote:
<br>
<p><span class="quotelev1">&gt;       call MPI_REDUCE(mypi,pi,1,MPI_DOUBLE_PRECISION,MPI_SUM,0,
</span><br>
<span class="quotelev1">&gt;      &amp;                  MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I use MPI_IN_PLACE in the MPI_REDUCE call? If I can, how?  
</span><br>
<span class="quotelev1">&gt; Thanks for any help!
</span><br>
<p>MPI_IN_PLACE is an MPI-2 construct, and is defined in the MPI-2  
<br>
standard.  Its use in MPI_REDUCE is defined in section 7.3.3:
<br>
<p><a href="http://www.mpi-forum.org/docs/mpi-20-html/node150.htm#Node150">http://www.mpi-forum.org/docs/mpi-20-html/node150.htm#Node150</a>
<br>
<p>It says:
<br>
<p>&quot;The ``in place'' option for intracommunicators is specified by  
<br>
passing the value MPI_IN_PLACE to the argument sendbuf at the root.  
<br>
In such case, the input data is taken at the root from the receive  
<br>
buffer, where it will be replaced by the output data.&quot;
<br>
<p>In the simple pi example program, it doesn't make much sense to use  
<br>
MPI_IN_PLACE except as an example to see how it is used (i.e., it  
<br>
won't gain much in terms of efficiency because you're only dealing  
<br>
with a single MPI_DOUBLE_PRECISION).  But you would want to put an  
<br>
&quot;if&quot; statement around the call to MPI_REDUCE and pass MPI_IN_PLACE as  
<br>
the first argument, and mypi as the second argument for the root.   
<br>
For all other processes, use the same MPI_REDUCE that you're using now.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0780.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Previous message:</strong> <a href="0778.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="0778.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0784.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Reply:</strong> <a href="0784.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
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
