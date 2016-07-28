<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 14 15:25:56 2007" -->
<!-- isoreceived="20070514192556" -->
<!-- sent="Mon, 14 May 2007 21:25:34 +0200" -->
<!-- isosent="20070514192534" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multiple MPI_Reduce" -->
<!-- id="200705142125.34458.keller_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="f6a174940705141129qa9d984ek1af87426e78ca729_at_mail.gmail.com" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-14 15:25:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3270.php">Adrian Knoth: "Re: [OMPI users] multiple MPI_Reduce"</a>
<li><strong>Previous message:</strong> <a href="3268.php">Jayanta Roy: "[OMPI users] multiple MPI_Reduce"</a>
<li><strong>In reply to:</strong> <a href="3268.php">Jayanta Roy: "[OMPI users] multiple MPI_Reduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3270.php">Adrian Knoth: "Re: [OMPI users] multiple MPI_Reduce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jay,
<br>
On Monday 14 May 2007 20:29, Jayanta Roy wrote:
<br>
<span class="quotelev1">&gt; In my 4 nodes cluster I want to run two MPI_Reduce on two communicators
</span><br>
<span class="quotelev1">&gt; (one using Node1, Node2 and other using Node3, Node4).
</span><br>
<span class="quotelev1">&gt; Now to create communicator I used ...
</span><br>
<span class="quotelev1">&gt; MPI_Comm MPI_COMM_G1, MPI_COMM_G2;
</span><br>
<span class="quotelev1">&gt; MPI_Group g0, g1, g2;
</span><br>
<span class="quotelev1">&gt; MPI_Comm_group(MPI_COMM_WORLD,&amp;g0);
</span><br>
<span class="quotelev1">&gt; MPI_Group_incl(g0,g_size,&amp;r_array[0],&amp;g1);
</span><br>
<span class="quotelev1">&gt; MPI_Group_incl(g0,g_size,&amp;r_array[2],&amp;g2);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_create(MPI_COMM_WORLD,g1,&amp;MPI_COMM_G1);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_create(MPI_COMM_WORLD,g2,&amp;MPI_COMM_G2);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then I used
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; f(myrank = 0 || myrank == 1)
</span><br>
If You really are doing above, then no one would participate in this 
<br>
operation, but
<br>
<p><span class="quotelev1">&gt; MPI_Reduce(corrbuf,corr_sum,CORR_SIZE,MPI_FLOAT,MPI_SUM,0,MPI_COMM_G1);
</span><br>
<span class="quotelev1">&gt; if(myrank = 2 || myrank == 3)
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^^^
<br>
every one would particpate here (as myrank=2 != 0)
<br>
And then the reduce with processes not belonging to it would fail.
<br>
<p><p><span class="quotelev1">&gt; MPI_Reduce(corrbuf,corr_sum,CORR_SIZE,MPI_FLOAT,MPI_SUM,0,MPI_COMM_G2);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the program terminate because of &quot;An error occurred in MPI_Reduce&quot;!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anybody help me, what is the wrong I am doing?
</span><br>
<p>Just to make sure, the below runs fine.
<br>
Please always compile with -Wall or similar compiler-flags.
<br>
<p>With best regards,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 High Performance Computing       Tel: ++49 (0)711-685 6 5858
   Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
 POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]     
 ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
 70550 Stuttgart

</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3269/test_reduce.c">test_reduce.c</a>
</ul>
<!-- attachment="test_reduce.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3270.php">Adrian Knoth: "Re: [OMPI users] multiple MPI_Reduce"</a>
<li><strong>Previous message:</strong> <a href="3268.php">Jayanta Roy: "[OMPI users] multiple MPI_Reduce"</a>
<li><strong>In reply to:</strong> <a href="3268.php">Jayanta Roy: "[OMPI users] multiple MPI_Reduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3270.php">Adrian Knoth: "Re: [OMPI users] multiple MPI_Reduce"</a>
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
