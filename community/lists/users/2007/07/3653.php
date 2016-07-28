<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 19:00:59 2007" -->
<!-- isoreceived="20070711230059" -->
<!-- sent="Wed, 11 Jul 2007 19:00:55 -0400" -->
<!-- isosent="20070711230055" -->
<!-- name="anyili_at_[hidden]" -->
<!-- email="anyili_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Reduce problem" -->
<!-- id="1184194855.469561274c808_at_gradh.pa.uky.edu" -->
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
<strong>From:</strong> <a href="mailto:anyili_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_Reduce%20problem"><em>anyili_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-07-11 19:00:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3654.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] MPI_Reduce problem"</a>
<li><strong>Previous message:</strong> <a href="3652.php">Ralph Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3654.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] MPI_Reduce problem"</a>
<li><strong>Reply:</strong> <a href="3654.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] MPI_Reduce problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;I have a code which have a identical vector on each node,  I am going to do
<br>
the vector sum and return result to root.  Such like this,
<br>
<p>&nbsp;&nbsp;int* ttt = (int*)malloc(2 * sizeof(int));
<br>
&nbsp;&nbsp;ttt[0] = myworldrank + 1;
<br>
&nbsp;&nbsp;ttt[1] = myworldrank * 2;
<br>
&nbsp;&nbsp;&nbsp;MPI_Allreduce(ttt, ttt, 2, MPI_INT, MPI_SUM, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;FOR_WORLDNODE0 printf(&quot;%d, %d\n&quot; , ttt[0],ttt[1]);
<br>
<p>&nbsp;&nbsp;myworldrank is the rank of local node, if I run this code under 4 nodes, what
<br>
I expect  return is 10,12. But what I got is 18,24. So I'm confused here on
<br>
MPI_Reduce, is that supposed to do the vector sum ?
<br>
&nbsp;&nbsp;I tried MPI_Allreduce, it gave me the correct answer 10, 12.
<br>
<p>&nbsp;&nbsp;Is there someone met the same problems or I am wrong on calling MPI_Reduce()
<br>
<p>&nbsp;&nbsp;Thanks.
<br>
Anyi
<br>
<p><p><p>&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3654.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] MPI_Reduce problem"</a>
<li><strong>Previous message:</strong> <a href="3652.php">Ralph Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3654.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] MPI_Reduce problem"</a>
<li><strong>Reply:</strong> <a href="3654.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] MPI_Reduce problem"</a>
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
