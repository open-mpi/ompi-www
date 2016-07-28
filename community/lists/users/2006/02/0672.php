<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 16 10:11:49 2006" -->
<!-- isoreceived="20060216151149" -->
<!-- sent="Thu, 16 Feb 2006 10:11:40 -0500" -->
<!-- isosent="20060216151140" -->
<!-- name="Abhishek Agarwal" -->
<!-- email="a_agarwal_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Recv question" -->
<!-- id="BAY112-F3751D4C30FF60739F8FF5B9EFB0_at_phx.gbl" -->
<!-- inreplyto="8D0C5C7A848CE0469B41D1A6C7ED3C5122FC43_at_MAILIS.pecs.com" -->
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
<strong>From:</strong> Abhishek Agarwal (<em>a_agarwal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-16 10:11:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0673.php">Josh Hursey: "Re: [OMPI users] MPI_Recv question"</a>
<li><strong>Previous message:</strong> <a href="0671.php">Edgar Gabriel: "Re: [OMPI users] Dynamic process question"</a>
<li><strong>In reply to:</strong> <a href="0670.php">Zhao, Yongsheng: "Re: [OMPI users] Dynamic process question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0673.php">Josh Hursey: "Re: [OMPI users] MPI_Recv question"</a>
<li><strong>Reply:</strong> <a href="0673.php">Josh Hursey: "Re: [OMPI users] MPI_Recv question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,
<br>
<p>I am trying to use the MPI_Recv of the open-mpi, but met some problems with 
<br>
MPI_Recv.
<br>
<p>I have two processes in master slave mode and I killed the slave process but 
<br>
my MPI_Recv process is still waiting to get a response from slave and never 
<br>
times out with any error. I am checking the MPI_SUCCESS but it seems to wait 
<br>
for ever and hence the program hangs.
<br>
<p>I am attaching the secition of code which i have used in my program.
<br>
<p><p>--------------------------
<br>
val = MPI_Recv(&amp;ans, 1, MPI_DOUBLE, MPI_ANY_SOURCE, MPI_ANY_TAG,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;newcomm[i], &amp;stat[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (val != MPI_SUCCESS )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Manager: error in Recv\n&quot;);
<br>
<p>--------------------------
<br>
<p>Any advice?
<br>
<p>Thanks,
<br>
<p>Abhishek Agarwal
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0673.php">Josh Hursey: "Re: [OMPI users] MPI_Recv question"</a>
<li><strong>Previous message:</strong> <a href="0671.php">Edgar Gabriel: "Re: [OMPI users] Dynamic process question"</a>
<li><strong>In reply to:</strong> <a href="0670.php">Zhao, Yongsheng: "Re: [OMPI users] Dynamic process question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0673.php">Josh Hursey: "Re: [OMPI users] MPI_Recv question"</a>
<li><strong>Reply:</strong> <a href="0673.php">Josh Hursey: "Re: [OMPI users] MPI_Recv question"</a>
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
