<?
$subject_val = "[OMPI users] Segmentation fault with MPI_Type_indexed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 09:09:17 2015" -->
<!-- isoreceived="20150305140917" -->
<!-- sent="Thu, 5 Mar 2015 15:09:17 +0100" -->
<!-- isosent="20150305140917" -->
<!-- name="Bogdan Sataric" -->
<!-- email="bogdan.sataric_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault with MPI_Type_indexed" -->
<!-- id="CAJXiSm29ySTvAEr4+0cGB-Od8eFKEXc_Gx1OL9qP8UcYNp0myw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault with MPI_Type_indexed<br>
<strong>From:</strong> Bogdan Sataric (<em>bogdan.sataric_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-05 09:09:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26431.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Previous message:</strong> <a href="26429.php">Ralph Castain: "Re: [OMPI users] Strange rank 0 behavior on Mac OS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26431.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Reply:</strong> <a href="26431.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been having problems with my 3D matrix transpose program. I'm using
<br>
MPI_Type_indexed in order to allign specific blocks that I want to send and
<br>
receive across one or multiple nodes of a cluster. Up to few days ago I was
<br>
able to run my program without any errors. However several test cases on
<br>
the cluster in last few days exposed segmentation fault when I try to form
<br>
indexed type on some specific matrix configurations.
<br>
<p>The code that forms indexed type is as follows:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **argv) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int Nx = 800;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int Ny = 640;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int Nz = 480;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int gsize;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i, j;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;gsize);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;GSIZE: %d\n&quot;, gsize);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype double_complex_type;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype block_send_complex_type;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int * send_displ = (int *) malloc(Nx * Ny/gsize * sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int * send_blocklen = (int *) malloc(Nx * Ny/gsize * sizeof(int));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_contiguous(2, MPI_DOUBLE, &amp;double_complex_type);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;double_complex_type);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i = Ny/gsize - 1; i &gt;= 0 ; i--) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (j = 0; j &lt; Nx; j++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send_displ[(Ny/gsize - 1 - i) * Nx + j] = i * Nz + j * Ny * Nz;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send_blocklen[(Ny/gsize - 1 - i) * Nx + j] = Nz;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_indexed(Nx * Ny/gsize, send_blocklen, send_displ,
<br>
double_complex_type, &amp;block_send_complex_type);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;block_send_complex_type);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;free(send_displ);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;free(send_blocklen);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>Values of the Nx, Ny and Nz respectively are 800, 640 and 480. Value of
<br>
gsize for this test was 1 (simulation of MPI program on 1 node). The node
<br>
has 32GB of RAM and no other memory has been allocated (only this code has
<br>
been run).
<br>
<p>In code basically I'm creating double_complex_type to represent complex
<br>
number (2 contiguous MPI_DOUBLE) values. The whole matrix has 800 * 640 *
<br>
480 of these values and I'm trying to catch these values in the indexed
<br>
type. One indexed type block length is the whole Nz &quot;rod&quot; while ordering of
<br>
these &quot;rods&quot; in displacements array is given by the formula i * Nz + j * Ny
<br>
* Nz. Basically displacements start from top row, and left column of the 3D
<br>
matrix. Then I gradually sweep to the right sight of that top row, then go
<br>
to one row below sweep to the right side and so on until the bottom row.
<br>
<p>The strange thing is that this formula and algorithm *WORK* if I put
<br>
MPI_DOUBLE type instead of derived complex type (1 instead of 2 in
<br>
MPI_TYPE_CONTIGIOUS). Also this formula *WORKS* if I put 1 for Nz dimension
<br>
instead of 480. However if I change Nz to even 2 I get segmentation fault
<br>
error in the MPI_Type_commit call.
<br>
<p>I checked all of the displacements and they seem fine. There is no
<br>
overlapping of displacements or going under 0 or over extent of the formed
<br>
indexed type. Also the size of the datatype is below 4GB (which is I
<br>
believe limit of MPI datatypes (since MPI_Type_size function returns int *
<br>
). Also I believe amount of memory is not an issue as even if I put Nz to
<br>
be 2, I get the same segmentation fault error, and the node has 32GB of RAM
<br>
just for this test.
<br>
<p>What bothers me is that most of other indexed type configurations (with
<br>
plain MPI_DOUBLE type elements), or complex type with smaller matrix (say
<br>
400 * 640 * 480) *WORK* without segmentation fault. Also If I commit the
<br>
indexed type with MPI_DOUBLE type elements even larger matrices work (say
<br>
960 x 800 x 640) which have exactly the same type size as 800 x 640 x 480
<br>
complex indexed type (just under 4GB)! So basically the type size is not an
<br>
issue here, but somehow either number of blocks, size of particular blocks,
<br>
or size of block elements create problems. I'm not sure weather there is
<br>
problem in implementation of OpenMPI or something in my code is wrong...
<br>
<p>I would greatly appreciate any help as I've been stuck on this problem for
<br>
days now and nothing in MPI documentation and the examples I found on the
<br>
internet is giving me a clue where the error might be.
<br>
<p>At the end I would like to say that code has been compiled with Open-MPI
<br>
version 1.6.5.
<br>
<p>Thank you,
<br>
<p>Bogdan Sataric
<br>
<pre>
----
Bogdan Sataric
email: bogdan.sataric_at_[hidden]
phone: +381 21-485-2441
Teaching &amp; Research Assistant
Chair for Applied Computer Science
Faculty of Technical Sciences, Novi Sad, Serbia
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26430/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26431.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Previous message:</strong> <a href="26429.php">Ralph Castain: "Re: [OMPI users] Strange rank 0 behavior on Mac OS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26431.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Reply:</strong> <a href="26431.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
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
