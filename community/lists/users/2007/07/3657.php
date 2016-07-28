<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 21:40:17 2007" -->
<!-- isoreceived="20070712014017" -->
<!-- sent="Wed, 11 Jul 2007 21:40:13 -0400" -->
<!-- isosent="20070712014013" -->
<!-- name="anyi li" -->
<!-- email="anyili0928_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce problem" -->
<!-- id="6762adfa0707111840n278bec3ve8d8ebe7b4755575_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.62.0707111924210.8062_at_reliant.cs.utk.edu" -->
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
<strong>From:</strong> anyi li (<em>anyili0928_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 21:40:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3658.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3656.php">Ralph Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<li><strong>In reply to:</strong> <a href="3654.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] MPI_Reduce problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jelena,
<br>
<p>&nbsp;&nbsp;int* ttt = (int*)malloc(2 * sizeof(int));
<br>
&nbsp;&nbsp;ttt[0] = myworldrank + 1;
<br>
&nbsp;&nbsp;ttt[1] = myworldrank * 2;
<br>
&nbsp;&nbsp;if(myworldrank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce(MPI_IN_PLACE, ttt, 2, MPI_INT, MPI_SUM, 0,
<br>
MPI_COMM_WORLD); //sum all logdetphi from different nodes
<br>
&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce(ttt, NULL, 2, MPI_INT, MPI_SUM, 0, MPI_COMM_WORLD);
<br>
//sum all logdetphi from different nodes
<br>
<p>&nbsp;&nbsp;FOR_WORLDNODE0 printf(&quot;%d, %d\n&quot; , ttt[0],ttt[1]);
<br>
<p><p>That works. Thanks so much.
<br>
<p>Anyi
<br>
<p>On 7/11/07, Jelena Pjesivac-Grbovic &lt;pjesa_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Anyi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you are using reduce incorrectly: you cannot use the same buffer as input
</span><br>
<span class="quotelev1">&gt; and output.
</span><br>
<span class="quotelev1">&gt; If you want to do operation in place, you must specify &quot;MPI_IN_PLACE&quot;
</span><br>
<span class="quotelev1">&gt; as send buffer at the root process.
</span><br>
<span class="quotelev1">&gt; Thus, your code should look something like:
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt;    int* ttt = (int*)malloc(2 * sizeof(int));
</span><br>
<span class="quotelev1">&gt;    ttt[0] = myworldrank + 1;
</span><br>
<span class="quotelev1">&gt;    ttt[1] = myworldrank * 2;
</span><br>
<span class="quotelev1">&gt;    if (root == myworldrank) {
</span><br>
<span class="quotelev1">&gt;       MPI_Reduce(MPI_IN_PLACE, ttt, 2, MPI_INT, MPI_SUM, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    } else {
</span><br>
<span class="quotelev1">&gt;       MPI_Reduce(ttt, NULL, 2, MPI_INT, MPI_SUM, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    FOR_WORLDNODE0 printf(&quot;%d, %d\n&quot; , ttt[0],ttt[1]);
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hope this helps,
</span><br>
<span class="quotelev1">&gt; Jelena
</span><br>
<span class="quotelev1">&gt; PS. If I remember correctly the standard, you must specify send buffer on
</span><br>
<span class="quotelev1">&gt; non-root nodes - it cannot be MPI_IN_PLACE (if you try it - you'll get
</span><br>
<span class="quotelev1">&gt; segfault).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 11 Jul 2007 anyili_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;  I have a code which have a identical vector on each node,  I am going to do
</span><br>
<span class="quotelev2">&gt; &gt; the vector sum and return result to root.  Such like this,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  int* ttt = (int*)malloc(2 * sizeof(int));
</span><br>
<span class="quotelev2">&gt; &gt;  ttt[0] = myworldrank + 1;
</span><br>
<span class="quotelev2">&gt; &gt;  ttt[1] = myworldrank * 2;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Allreduce(ttt, ttt, 2, MPI_INT, MPI_SUM, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;  FOR_WORLDNODE0 printf(&quot;%d, %d\n&quot; , ttt[0],ttt[1]);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  myworldrank is the rank of local node, if I run this code under 4 nodes, what
</span><br>
<span class="quotelev2">&gt; &gt; I expect  return is 10,12. But what I got is 18,24. So I'm confused here on
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Reduce, is that supposed to do the vector sum ?
</span><br>
<span class="quotelev2">&gt; &gt;  I tried MPI_Allreduce, it gave me the correct answer 10, 12.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Is there someone met the same problems or I am wrong on calling MPI_Reduce()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Thanks.
</span><br>
<span class="quotelev2">&gt; &gt; Anyi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jelena Pjesivac-Grbovic, Pjesa
</span><br>
<span class="quotelev1">&gt; Graduate Research Assistant
</span><br>
<span class="quotelev1">&gt; Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; Computer Science Department, UTK
</span><br>
<span class="quotelev1">&gt; Claxton Complex 350
</span><br>
<span class="quotelev1">&gt; (865) 974 - 6722
</span><br>
<span class="quotelev1">&gt; (865) 974 - 6321
</span><br>
<span class="quotelev1">&gt; jpjesiva_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Murphy's Law of Research:
</span><br>
<span class="quotelev1">&gt;          Enough research will tend to support your theory.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3658.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3656.php">Ralph Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<li><strong>In reply to:</strong> <a href="3654.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] MPI_Reduce problem"</a>
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
