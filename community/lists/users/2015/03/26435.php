<?
$subject_val = "Re: [OMPI users] Segmentation fault with MPI_Type_indexed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 18:52:59 2015" -->
<!-- isoreceived="20150305235259" -->
<!-- sent="Thu, 5 Mar 2015 18:52:58 -0500" -->
<!-- isosent="20150305235258" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with MPI_Type_indexed" -->
<!-- id="CAMJJpkVyZjRXkhkxKGEmWeXbYZqT8b=0nQB8-16B=Yoh3HKY7Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJXiSm3Ei-v7yOw13+Pu-jWqFHFXwdeG_w1MYwK2utoA2ErUZg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-03-05 18:52:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26436.php">Irena Johnson: "[OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>Previous message:</strong> <a href="26434.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>In reply to:</strong> <a href="26433.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26440.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Reply:</strong> <a href="26440.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Mar 5, 2015 at 6:22 PM, Bogdan Sataric &lt;bogdan.sataric_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So is it safe for me to assume that my code is good and that you will
</span><br>
<span class="quotelev1">&gt; remove this bug from next OpenMPI version?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes I think it is safe to assume your code is correct (or at least it
<br>
follows the specifications you describe in your email).
<br>
<p>Also I would like to know which future OpenMPI version will incorporate
<br>
<span class="quotelev1">&gt; this fix (so I can try my code in fixed version)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I pushed the code in the trunk, and created a request to get it into the
<br>
1.8.5. So you can try any nightly build starting from tonight, and then any
<br>
stable release after the 1.8.4
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; On Thu, Mar 5, 2015 at 6:31 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bogdan,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As far as I can tell your code is correct, and the problem is coming from
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI. More specifically, I used alloca in the optimization stage in
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Type_commit, and as your arrays of length were too large, alloca failed
</span><br>
<span class="quotelev2">&gt;&gt; and lead to a segfault. I fixed in the trunk (3c489ea), and this will get
</span><br>
<span class="quotelev2">&gt;&gt; into our next release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately there is no fix for the 1.6 that I can think of.
</span><br>
<span class="quotelev2">&gt;&gt; Apparently, you are really the first that run into such kind of problems,
</span><br>
<span class="quotelev2">&gt;&gt; so guess you are the first creating gigantic datatypes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the bug report,
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Mar 5, 2015 at 9:09 AM, Bogdan Sataric &lt;bogdan.sataric_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been having problems with my 3D matrix transpose program. I'm using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Type_indexed in order to allign specific blocks that I want to send and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; receive across one or multiple nodes of a cluster. Up to few days ago I was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; able to run my program without any errors. However several test cases on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the cluster in last few days exposed segmentation fault when I try to form
</span><br>
<span class="quotelev3">&gt;&gt;&gt; indexed type on some specific matrix configurations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The code that forms indexed type is as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int Nx = 800;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int Ny = 640;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int Nz = 480;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int gsize;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int i, j;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;gsize);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     printf(&quot;GSIZE: %d\n&quot;, gsize);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Datatype double_complex_type;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Datatype block_send_complex_type;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int * send_displ = (int *) malloc(Nx * Ny/gsize * sizeof(int));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int * send_blocklen = (int *) malloc(Nx * Ny/gsize * sizeof(int));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Type_contiguous(2, MPI_DOUBLE, &amp;double_complex_type);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Type_commit(&amp;double_complex_type);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     for (i = Ny/gsize - 1; i &gt;= 0 ; i--) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         for (j = 0; j &lt; Nx; j++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             send_displ[(Ny/gsize - 1 - i) * Nx + j] = i * Nz + j * Ny *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nz;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             send_blocklen[(Ny/gsize - 1 - i) * Nx + j] = Nz;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Type_indexed(Nx * Ny/gsize, send_blocklen, send_displ,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; double_complex_type, &amp;block_send_complex_type);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Type_commit(&amp;block_send_complex_type);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     free(send_displ);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     free(send_blocklen);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Values of the Nx, Ny and Nz respectively are 800, 640 and 480. Value of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gsize for this test was 1 (simulation of MPI program on 1 node). The node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has 32GB of RAM and no other memory has been allocated (only this code has
</span><br>
<span class="quotelev3">&gt;&gt;&gt; been run).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In code basically I'm creating double_complex_type to represent complex
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number (2 contiguous MPI_DOUBLE) values. The whole matrix has 800 * 640 *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 480 of these values and I'm trying to catch these values in the indexed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type. One indexed type block length is the whole Nz &quot;rod&quot; while ordering of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these &quot;rods&quot; in displacements array is given by the formula i * Nz + j * Ny
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Nz. Basically displacements start from top row, and left column of the 3D
</span><br>
<span class="quotelev3">&gt;&gt;&gt; matrix. Then I gradually sweep to the right sight of that top row, then go
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to one row below sweep to the right side and so on until the bottom row.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The strange thing is that this formula and algorithm *WORK* if I put
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_DOUBLE type instead of derived complex type (1 instead of 2 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_TYPE_CONTIGIOUS). Also this formula *WORKS* if I put 1 for Nz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dimension instead of 480. However if I change Nz to even 2 I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; segmentation fault error in the MPI_Type_commit call.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I checked all of the displacements and they seem fine. There is no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; overlapping of displacements or going under 0 or over extent of the formed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; indexed type. Also the size of the datatype is below 4GB (which is I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; believe limit of MPI datatypes (since MPI_Type_size function returns int *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ). Also I believe amount of memory is not an issue as even if I put Nz to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be 2, I get the same segmentation fault error, and the node has 32GB of RAM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just for this test.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What bothers me is that most of other indexed type configurations (with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plain MPI_DOUBLE type elements), or complex type with smaller matrix (say
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 400 * 640 * 480) *WORK* without segmentation fault. Also If I commit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the indexed type with MPI_DOUBLE type elements even larger matrices work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (say 960 x 800 x 640) which have exactly the same type size as 800 x 640 x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 480 complex indexed type (just under 4GB)! So basically the type size is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not an issue here, but somehow either number of blocks, size of particular
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blocks, or size of block elements create problems. I'm not sure weather
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there is problem in implementation of OpenMPI or something in my code is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrong...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would greatly appreciate any help as I've been stuck on this problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for days now and nothing in MPI documentation and the examples I found on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the internet is giving me a clue where the error might be.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At the end I would like to say that code has been compiled with Open-MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version 1.6.5.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bogdan Sataric
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bogdan Sataric
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email: bogdan.sataric_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; phone: +381 21-485-2441
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Teaching &amp; Research Assistant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chair for Applied Computer Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Faculty of Technical Sciences, Novi Sad, Serbia
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26430.php">http://www.open-mpi.org/community/lists/users/2015/03/26430.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26431.php">http://www.open-mpi.org/community/lists/users/2015/03/26431.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26433.php">http://www.open-mpi.org/community/lists/users/2015/03/26433.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26435/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26436.php">Irena Johnson: "[OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>Previous message:</strong> <a href="26434.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>In reply to:</strong> <a href="26433.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26440.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Reply:</strong> <a href="26440.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
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
