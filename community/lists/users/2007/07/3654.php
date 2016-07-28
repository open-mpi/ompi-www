<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 19:29:06 2007" -->
<!-- isoreceived="20070711232906" -->
<!-- sent="Wed, 11 Jul 2007 19:28:58 -0400 (EDT)" -->
<!-- isosent="20070711232858" -->
<!-- name="Jelena Pjesivac-Grbovic" -->
<!-- email="pjesa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce problem" -->
<!-- id="Pine.LNX.4.62.0707111924210.8062_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1184194855.469561274c808_at_gradh.pa.uky.edu" -->
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
<strong>From:</strong> Jelena Pjesivac-Grbovic (<em>pjesa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 19:28:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3655.php">Lev Gelb: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<li><strong>Previous message:</strong> <a href="3653.php">anyili_at_[hidden]: "[OMPI users] MPI_Reduce problem"</a>
<li><strong>In reply to:</strong> <a href="3653.php">anyili_at_[hidden]: "[OMPI users] MPI_Reduce problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3657.php">anyi li: "Re: [OMPI users] MPI_Reduce problem"</a>
<li><strong>Reply:</strong> <a href="3657.php">anyi li: "Re: [OMPI users] MPI_Reduce problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Anyi,
<br>
<p>you are using reduce incorrectly: you cannot use the same buffer as input 
<br>
and output.
<br>
If you want to do operation in place, you must specify &quot;MPI_IN_PLACE&quot; 
<br>
as send buffer at the root process.
<br>
Thus, your code should look something like:
<br>
--------
<br>
&nbsp;&nbsp;&nbsp;int* ttt = (int*)malloc(2 * sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;ttt[0] = myworldrank + 1;
<br>
&nbsp;&nbsp;&nbsp;ttt[1] = myworldrank * 2;
<br>
&nbsp;&nbsp;&nbsp;if (root == myworldrank) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce(MPI_IN_PLACE, ttt, 2, MPI_INT, MPI_SUM, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce(ttt, NULL, 2, MPI_INT, MPI_SUM, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;FOR_WORLDNODE0 printf(&quot;%d, %d\n&quot; , ttt[0],ttt[1]);
<br>
--------
<br>
<p>hope this helps,
<br>
Jelena
<br>
PS. If I remember correctly the standard, you must specify send buffer on 
<br>
non-root nodes - it cannot be MPI_IN_PLACE (if you try it - you'll get 
<br>
segfault).
<br>
<p>On Wed, 11 Jul 2007 anyili_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  I have a code which have a identical vector on each node,  I am going to do
</span><br>
<span class="quotelev1">&gt; the vector sum and return result to root.  Such like this,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  int* ttt = (int*)malloc(2 * sizeof(int));
</span><br>
<span class="quotelev1">&gt;  ttt[0] = myworldrank + 1;
</span><br>
<span class="quotelev1">&gt;  ttt[1] = myworldrank * 2;
</span><br>
<span class="quotelev1">&gt;   MPI_Allreduce(ttt, ttt, 2, MPI_INT, MPI_SUM, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  FOR_WORLDNODE0 printf(&quot;%d, %d\n&quot; , ttt[0],ttt[1]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  myworldrank is the rank of local node, if I run this code under 4 nodes, what
</span><br>
<span class="quotelev1">&gt; I expect  return is 10,12. But what I got is 18,24. So I'm confused here on
</span><br>
<span class="quotelev1">&gt; MPI_Reduce, is that supposed to do the vector sum ?
</span><br>
<span class="quotelev1">&gt;  I tried MPI_Allreduce, it gave me the correct answer 10, 12.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Is there someone met the same problems or I am wrong on calling MPI_Reduce()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks.
</span><br>
<span class="quotelev1">&gt; Anyi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
--
Jelena Pjesivac-Grbovic, Pjesa
Graduate Research Assistant
Innovative Computing Laboratory
Computer Science Department, UTK
Claxton Complex 350
(865) 974 - 6722 
(865) 974 - 6321
jpjesiva_at_[hidden]
Murphy's Law of Research:
         Enough research will tend to support your theory.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3655.php">Lev Gelb: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<li><strong>Previous message:</strong> <a href="3653.php">anyili_at_[hidden]: "[OMPI users] MPI_Reduce problem"</a>
<li><strong>In reply to:</strong> <a href="3653.php">anyili_at_[hidden]: "[OMPI users] MPI_Reduce problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3657.php">anyi li: "Re: [OMPI users] MPI_Reduce problem"</a>
<li><strong>Reply:</strong> <a href="3657.php">anyi li: "Re: [OMPI users] MPI_Reduce problem"</a>
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
