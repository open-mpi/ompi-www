<?
$subject_val = "Re: [OMPI users] Segmentation fault with MPI_Type_indexed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 12:31:41 2015" -->
<!-- isoreceived="20150305173141" -->
<!-- sent="Thu, 5 Mar 2015 12:31:39 -0500" -->
<!-- isosent="20150305173139" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with MPI_Type_indexed" -->
<!-- id="CAMJJpkXar0N8f9p5Th3_umgzy6VLbsBGVDeGd5-VazbVYFD00A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJXiSm29ySTvAEr4+0cGB-Od8eFKEXc_Gx1OL9qP8UcYNp0myw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault with MPI_Type_indexed<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-05 12:31:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26432.php">Tom Rosmond: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Previous message:</strong> <a href="26430.php">Bogdan Sataric: "[OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>In reply to:</strong> <a href="26430.php">Bogdan Sataric: "[OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26432.php">Tom Rosmond: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Reply:</strong> <a href="26432.php">Tom Rosmond: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Reply:</strong> <a href="26433.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bogdan,
<br>
<p>As far as I can tell your code is correct, and the problem is coming from
<br>
Open MPI. More specifically, I used alloca in the optimization stage in
<br>
MPI_Type_commit, and as your arrays of length were too large, alloca failed
<br>
and lead to a segfault. I fixed in the trunk (3c489ea), and this will get
<br>
into our next release.
<br>
<p>Unfortunately there is no fix for the 1.6 that I can think of. Apparently,
<br>
you are really the first that run into such kind of problems, so guess you
<br>
are the first creating gigantic datatypes.
<br>
<p>Thanks for the bug report,
<br>
&nbsp;&nbsp;George.
<br>
<p><p>On Thu, Mar 5, 2015 at 9:09 AM, Bogdan Sataric &lt;bogdan.sataric_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I've been having problems with my 3D matrix transpose program. I'm using
</span><br>
<span class="quotelev1">&gt; MPI_Type_indexed in order to allign specific blocks that I want to send and
</span><br>
<span class="quotelev1">&gt; receive across one or multiple nodes of a cluster. Up to few days ago I was
</span><br>
<span class="quotelev1">&gt; able to run my program without any errors. However several test cases on
</span><br>
<span class="quotelev1">&gt; the cluster in last few days exposed segmentation fault when I try to form
</span><br>
<span class="quotelev1">&gt; indexed type on some specific matrix configurations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code that forms indexed type is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int Nx = 800;
</span><br>
<span class="quotelev1">&gt;     int Ny = 640;
</span><br>
<span class="quotelev1">&gt;     int Nz = 480;
</span><br>
<span class="quotelev1">&gt;     int gsize;
</span><br>
<span class="quotelev1">&gt;     int i, j;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;gsize);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     printf(&quot;GSIZE: %d\n&quot;, gsize);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Datatype double_complex_type;
</span><br>
<span class="quotelev1">&gt;     MPI_Datatype block_send_complex_type;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int * send_displ = (int *) malloc(Nx * Ny/gsize * sizeof(int));
</span><br>
<span class="quotelev1">&gt;     int * send_blocklen = (int *) malloc(Nx * Ny/gsize * sizeof(int));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Type_contiguous(2, MPI_DOUBLE, &amp;double_complex_type);
</span><br>
<span class="quotelev1">&gt;     MPI_Type_commit(&amp;double_complex_type);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     for (i = Ny/gsize - 1; i &gt;= 0 ; i--) {
</span><br>
<span class="quotelev1">&gt;         for (j = 0; j &lt; Nx; j++) {
</span><br>
<span class="quotelev1">&gt;             send_displ[(Ny/gsize - 1 - i) * Nx + j] = i * Nz + j * Ny *
</span><br>
<span class="quotelev1">&gt; Nz;
</span><br>
<span class="quotelev1">&gt;             send_blocklen[(Ny/gsize - 1 - i) * Nx + j] = Nz;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Type_indexed(Nx * Ny/gsize, send_blocklen, send_displ,
</span><br>
<span class="quotelev1">&gt; double_complex_type, &amp;block_send_complex_type);
</span><br>
<span class="quotelev1">&gt;     MPI_Type_commit(&amp;block_send_complex_type);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     free(send_displ);
</span><br>
<span class="quotelev1">&gt;     free(send_blocklen);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Values of the Nx, Ny and Nz respectively are 800, 640 and 480. Value of
</span><br>
<span class="quotelev1">&gt; gsize for this test was 1 (simulation of MPI program on 1 node). The node
</span><br>
<span class="quotelev1">&gt; has 32GB of RAM and no other memory has been allocated (only this code has
</span><br>
<span class="quotelev1">&gt; been run).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In code basically I'm creating double_complex_type to represent complex
</span><br>
<span class="quotelev1">&gt; number (2 contiguous MPI_DOUBLE) values. The whole matrix has 800 * 640 *
</span><br>
<span class="quotelev1">&gt; 480 of these values and I'm trying to catch these values in the indexed
</span><br>
<span class="quotelev1">&gt; type. One indexed type block length is the whole Nz &quot;rod&quot; while ordering of
</span><br>
<span class="quotelev1">&gt; these &quot;rods&quot; in displacements array is given by the formula i * Nz + j * Ny
</span><br>
<span class="quotelev1">&gt; * Nz. Basically displacements start from top row, and left column of the 3D
</span><br>
<span class="quotelev1">&gt; matrix. Then I gradually sweep to the right sight of that top row, then go
</span><br>
<span class="quotelev1">&gt; to one row below sweep to the right side and so on until the bottom row.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The strange thing is that this formula and algorithm *WORK* if I put
</span><br>
<span class="quotelev1">&gt; MPI_DOUBLE type instead of derived complex type (1 instead of 2 in
</span><br>
<span class="quotelev1">&gt; MPI_TYPE_CONTIGIOUS). Also this formula *WORKS* if I put 1 for Nz
</span><br>
<span class="quotelev1">&gt; dimension instead of 480. However if I change Nz to even 2 I get
</span><br>
<span class="quotelev1">&gt; segmentation fault error in the MPI_Type_commit call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked all of the displacements and they seem fine. There is no
</span><br>
<span class="quotelev1">&gt; overlapping of displacements or going under 0 or over extent of the formed
</span><br>
<span class="quotelev1">&gt; indexed type. Also the size of the datatype is below 4GB (which is I
</span><br>
<span class="quotelev1">&gt; believe limit of MPI datatypes (since MPI_Type_size function returns int *
</span><br>
<span class="quotelev1">&gt; ). Also I believe amount of memory is not an issue as even if I put Nz to
</span><br>
<span class="quotelev1">&gt; be 2, I get the same segmentation fault error, and the node has 32GB of RAM
</span><br>
<span class="quotelev1">&gt; just for this test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What bothers me is that most of other indexed type configurations (with
</span><br>
<span class="quotelev1">&gt; plain MPI_DOUBLE type elements), or complex type with smaller matrix (say
</span><br>
<span class="quotelev1">&gt; 400 * 640 * 480) *WORK* without segmentation fault. Also If I commit the
</span><br>
<span class="quotelev1">&gt; indexed type with MPI_DOUBLE type elements even larger matrices work (say
</span><br>
<span class="quotelev1">&gt; 960 x 800 x 640) which have exactly the same type size as 800 x 640 x 480
</span><br>
<span class="quotelev1">&gt; complex indexed type (just under 4GB)! So basically the type size is not an
</span><br>
<span class="quotelev1">&gt; issue here, but somehow either number of blocks, size of particular blocks,
</span><br>
<span class="quotelev1">&gt; or size of block elements create problems. I'm not sure weather there is
</span><br>
<span class="quotelev1">&gt; problem in implementation of OpenMPI or something in my code is wrong...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would greatly appreciate any help as I've been stuck on this problem for
</span><br>
<span class="quotelev1">&gt; days now and nothing in MPI documentation and the examples I found on the
</span><br>
<span class="quotelev1">&gt; internet is giving me a clue where the error might be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the end I would like to say that code has been compiled with Open-MPI
</span><br>
<span class="quotelev1">&gt; version 1.6.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bogdan Sataric
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bogdan Sataric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; email: bogdan.sataric_at_[hidden]
</span><br>
<span class="quotelev1">&gt; phone: +381 21-485-2441
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Teaching &amp; Research Assistant
</span><br>
<span class="quotelev1">&gt; Chair for Applied Computer Science
</span><br>
<span class="quotelev1">&gt; Faculty of Technical Sciences, Novi Sad, Serbia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26430.php">http://www.open-mpi.org/community/lists/users/2015/03/26430.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26431/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26432.php">Tom Rosmond: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Previous message:</strong> <a href="26430.php">Bogdan Sataric: "[OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>In reply to:</strong> <a href="26430.php">Bogdan Sataric: "[OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26432.php">Tom Rosmond: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Reply:</strong> <a href="26432.php">Tom Rosmond: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Reply:</strong> <a href="26433.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
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
