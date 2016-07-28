<?
$subject_val = "[OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 22:19:01 2016" -->
<!-- isoreceived="20160211031901" -->
<!-- sent="Thu, 11 Feb 2016 14:18:50 +1100" -->
<!-- isosent="20160211031850" -->
<!-- name="Michael Rezny" -->
<!-- email="michael.rezny_at_[hidden]" -->
<!-- subject="[OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external" -->
<!-- id="CAGFyy0zRS7XFDe8EKDziFYocbtbVU8MuCypfwQp2UovJVwuZew_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external<br>
<strong>From:</strong> Michael Rezny (<em>michael.rezny_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-10 22:18:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18573.php">Gilles Gouaillardet: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18571.php">Lisandro Dalcin: "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18573.php">Gilles Gouaillardet: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18573.php">Gilles Gouaillardet: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am running Ubuntu 14.04 LTS with OpenMPI 1.6.5 and gcc 4.8.4
<br>
<p>On a single rank program which just packs and unpacks two ints using
<br>
MPI_Pack_external and MPI_Unpack_external
<br>
the unpacked ints are in the wrong endian order.
<br>
<p>However, on a HPC, (not Ubuntu), using OpenMPI 1.6.5 and gcc 4.8.4 the
<br>
unpacked ints are correct.
<br>
<p>Is it possible to get some assistance to track down what is going on?
<br>
<p>Here is the output from the program:
<br>
<p>&nbsp;~/tests/mpi/Pack test1
<br>
send data 000004d2 0000162e
<br>
MPI_Pack_external: 0
<br>
buffer size: 8
<br>
MPI_unpack_external: 0
<br>
recv data d2040000 2e160000
<br>
<p>And here is the source code:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char *argv[]) {
<br>
&nbsp;&nbsp;int numRanks, myRank, error;
<br>
<p>&nbsp;&nbsp;int send_data[2] = {1234, 5678};
<br>
&nbsp;&nbsp;int recv_data[2];
<br>
<p>&nbsp;&nbsp;MPI_Aint buffer_size = 1000;
<br>
&nbsp;&nbsp;char buffer[buffer_size];
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numRanks);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;myRank);
<br>
<p>&nbsp;&nbsp;printf(&quot;send data %08x %08x \n&quot;, send_data[0], send_data[1]);
<br>
<p>&nbsp;&nbsp;MPI_Aint position = 0;
<br>
&nbsp;&nbsp;error = MPI_Pack_external(&quot;external32&quot;, (void*) send_data, 2, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffer, buffer_size, &amp;position);
<br>
&nbsp;&nbsp;printf(&quot;MPI_Pack_external: %d\n&quot;, error);
<br>
<p>&nbsp;&nbsp;printf(&quot;buffer size: %d\n&quot;, (int) position);
<br>
<p>&nbsp;&nbsp;position = 0;
<br>
&nbsp;&nbsp;error = MPI_Unpack_external(&quot;external32&quot;, buffer, buffer_size, &amp;position,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recv_data, 2, MPI_INT);
<br>
&nbsp;&nbsp;printf(&quot;MPI_unpack_external: %d\n&quot;, error);
<br>
<p>&nbsp;&nbsp;printf(&quot;recv data %08x %08x \n&quot;, recv_data[0], recv_data[1]);
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18572/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18573.php">Gilles Gouaillardet: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18571.php">Lisandro Dalcin: "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18573.php">Gilles Gouaillardet: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18573.php">Gilles Gouaillardet: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
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
