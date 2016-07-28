<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 14 14:29:23 2007" -->
<!-- isoreceived="20070514182923" -->
<!-- sent="Mon, 14 May 2007 23:59:18 +0530" -->
<!-- isosent="20070514182918" -->
<!-- name="Jayanta Roy" -->
<!-- email="jay.roys_at_[hidden]" -->
<!-- subject="[OMPI users] multiple MPI_Reduce" -->
<!-- id="f6a174940705141129qa9d984ek1af87426e78ca729_at_mail.gmail.com" -->
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
<strong>From:</strong> Jayanta Roy (<em>jay.roys_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-14 14:29:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3269.php">Rainer Keller: "Re: [OMPI users] multiple MPI_Reduce"</a>
<li><strong>Previous message:</strong> <a href="3267.php">Nym: "[OMPI users] MPI_TYPE_STRUCT Not"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3269.php">Rainer Keller: "Re: [OMPI users] multiple MPI_Reduce"</a>
<li><strong>Reply:</strong> <a href="3269.php">Rainer Keller: "Re: [OMPI users] multiple MPI_Reduce"</a>
<li><strong>Reply:</strong> <a href="3270.php">Adrian Knoth: "Re: [OMPI users] multiple MPI_Reduce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In my 4 nodes cluster I want to run two MPI_Reduce on two communicators (one
<br>
using Node1, Node2 and other using Node3, Node4).
<br>
Now to create communicator I used ...
<br>
MPI_Comm MPI_COMM_G1, MPI_COMM_G2;
<br>
MPI_Group g0, g1, g2;
<br>
MPI_Comm_group(MPI_COMM_WORLD,&amp;g0);
<br>
MPI_Group_incl(g0,g_size,&amp;r_array[0],&amp;g1);
<br>
MPI_Group_incl(g0,g_size,&amp;r_array[2],&amp;g2);
<br>
MPI_Comm_create(MPI_COMM_WORLD,g1,&amp;MPI_COMM_G1);
<br>
MPI_Comm_create(MPI_COMM_WORLD,g2,&amp;MPI_COMM_G2);
<br>
<p>And then I used
<br>
<p>f(myrank = 0 || myrank == 1)
<br>
MPI_Reduce(corrbuf,corr_sum,CORR_SIZE,MPI_FLOAT,MPI_SUM,0,MPI_COMM_G1);
<br>
if(myrank = 2 || myrank == 3)
<br>
MPI_Reduce(corrbuf,corr_sum,CORR_SIZE,MPI_FLOAT,MPI_SUM,0,MPI_COMM_G2);
<br>
<p>But the program terminate because of &quot;An error occurred in MPI_Reduce&quot;!
<br>
<p>Can anybody help me, what is the wrong I am doing?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3268/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3269.php">Rainer Keller: "Re: [OMPI users] multiple MPI_Reduce"</a>
<li><strong>Previous message:</strong> <a href="3267.php">Nym: "[OMPI users] MPI_TYPE_STRUCT Not"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3269.php">Rainer Keller: "Re: [OMPI users] multiple MPI_Reduce"</a>
<li><strong>Reply:</strong> <a href="3269.php">Rainer Keller: "Re: [OMPI users] multiple MPI_Reduce"</a>
<li><strong>Reply:</strong> <a href="3270.php">Adrian Knoth: "Re: [OMPI users] multiple MPI_Reduce"</a>
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
