<?
$subject_val = "[OMPI users] understanding mpi_gather-mpi_gatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 10:43:28 2015" -->
<!-- isoreceived="20150930144328" -->
<!-- sent="Wed, 30 Sep 2015 16:43:27 +0200" -->
<!-- isosent="20150930144327" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="[OMPI users] understanding mpi_gather-mpi_gatherv" -->
<!-- id="CAG8o1y4hRneOjVtt2Ypv3LRfR6V=P6bharFysTDPjx408LeHAg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] understanding mpi_gather-mpi_gatherv<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 10:43:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27738.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27739.php">Jeff Squyres (jsquyres): "Re: [OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<li><strong>Reply:</strong> <a href="27739.php">Jeff Squyres (jsquyres): "Re: [OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<li><strong>Reply:</strong> <a href="27740.php">Nick Papior: "Re: [OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dear all,
<br>
I am not sure if I have understood correctly  mpi_gather and mpi_gatherv.
<br>
This is my problem:
<br>
<p>I have a complex vector, let's say: X1, where X1 is (1:625).
<br>
<p>Each CPU work only with some element of X1, let say:
<br>
<p>CPU 0 --&gt; X1(iEnd-iStart)  150 elements
<br>
CPU 1 --&gt; X1(iEnd-iStart)  150 elements
<br>
CPU 2 --&gt; X1(iEnd-iStart)  150 elements
<br>
CPU 3 --&gt; X1(iEnd-iStart)  175 elements
<br>
<p>I would like to collect all the data in only one vector, let's say PP(1:625)
<br>
<p>is it correct to write?
<br>
CALL MPI_Gather(X1(iStart:iEnd), iEnd-iStart+1, MPI_DOUBLE_COMPLEX,
<br>
PHIH(1:625), 625, MPI_DOUBLE_COMPLEX, 0, MPI_COMM_WORLD,MPIdata%iErr)
<br>
<p>In my case I get an error:
<br>
An error occurred in MPI_Gather
<br>
[diedroLap:3995] *** reported by process [140052855128065,0]
<br>
[diedroLap:3995] *** on communicator MPI_COMM_WORLD
<br>
[diedroLap:3995] *** MPI_ERR_TRUNCATE: message truncated
<br>
<p>Is this because each SubVector X1 has a different size?
<br>
<p>really really thanks
<br>
<p>Diego
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27737/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27738.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27739.php">Jeff Squyres (jsquyres): "Re: [OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<li><strong>Reply:</strong> <a href="27739.php">Jeff Squyres (jsquyres): "Re: [OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<li><strong>Reply:</strong> <a href="27740.php">Nick Papior: "Re: [OMPI users] understanding mpi_gather-mpi_gatherv"</a>
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
