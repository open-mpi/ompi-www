<?
$subject_val = "[OMPI users]  MPI_Type_free and non-blocking operations";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 09:00:16 2016" -->
<!-- isoreceived="20160113140016" -->
<!-- sent="Wed, 13 Jan 2016 23:00:15 +0900" -->
<!-- isosent="20160113140015" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI users]  MPI_Type_free and non-blocking operations" -->
<!-- id="CAAkFZ5vc09dZaGjjs4cN3ctSi=VWYuFRE58mZTJ7ZTEzFEvSUg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="ABDC446F6E5B1F488295A06A64CA3EFE0144E8B0_at_doug.risc.local" -->
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
<strong>Subject:</strong> [OMPI users]  MPI_Type_free and non-blocking operations<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-13 09:00:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28266.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28264.php">CUDENNEC Loic: "[OMPI users] Call for Papers: 4th Alchemy Workshop on Manycore programming"</a>
<li><strong>In reply to:</strong> <a href="28263.php">Thomas Ponweiser: "[OMPI users] MPI_Type_free and non-blocking operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28279.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_free and non-blocking operations"</a>
<li><strong>Reply:</strong> <a href="28279.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_free and non-blocking operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thomas,
<br>
<p>thanks for the report,
<br>
<p>at first glance, libnbc (the default module that implements non blocking
<br>
collective) does not retain/release datatypes, that is why you ran into
<br>
this kind of trouble.
<br>
<p>I quickly checked the code, and it seems this kind of mechanism is also
<br>
missing for MPI_Isend/MPI_Irecv ...
<br>
<p>I will investigate this further
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, January 13, 2016, Thomas Ponweiser &lt;
<br>
Thomas.Ponweiser_at_[hidden]
<br>
&lt;javascript:_e(%7B%7D,'cvml','Thomas.Ponweiser_at_[hidden]');&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear friends of Open MPI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am currently facing a problem in connection with MPI_Ibcast and
</span><br>
<span class="quotelev1">&gt; MPI_Type_free. I've been able to isolate the problem in a minimalistic test
</span><br>
<span class="quotelev1">&gt; program which I attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe some of you can tell me what I am doing wrong or confirm that this
</span><br>
<span class="quotelev1">&gt; might be a bug in Open MPI (I am using version 1.10.1).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is what I am doing:
</span><br>
<span class="quotelev1">&gt; 1) I have two struct types, foo_type and bar_type, as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; typedef struct
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int v[6];
</span><br>
<span class="quotelev1">&gt;    long l;
</span><br>
<span class="quotelev1">&gt; } foo_type;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; typedef struct
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int v[3];
</span><br>
<span class="quotelev1">&gt;    foo_type foo;
</span><br>
<span class="quotelev1">&gt; } bar_type;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) I am creating corresponding MPI types (foo_mpitype and bar_mpitype)
</span><br>
<span class="quotelev1">&gt; with MPI_Type_create_struct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) I am freeing foo_mpitype.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4) I am broadcasting a variable of type bar_type with MPI_Ibcast (using
</span><br>
<span class="quotelev1">&gt; count = 1 and datatype = bar_mpitype).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5) I am freeing bar_mpitype.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6) I am waiting for the completion of step 4) with MPI_Wait.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In step 6) I get a segmentation fault within MPI_Wait, but only if the MPI
</span><br>
<span class="quotelev1">&gt; job is larger than 4 processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Testing with MPICH 3.2, the program seems to work just fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found out that swapping the steps 5) and 6) helps. But I think this
</span><br>
<span class="quotelev1">&gt; should not make any difference, according to the description of
</span><br>
<span class="quotelev1">&gt; MPI_Type_free at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mpi-forum.org/docs/mpi-1.1/mpi-11-html/node58.html">http://www.mpi-forum.org/docs/mpi-1.1/mpi-11-html/node58.html</a>: &quot;Any
</span><br>
<span class="quotelev1">&gt; communication that is currently using this datatype will complete
</span><br>
<span class="quotelev1">&gt; normally.&quot; And: &quot; Freeing a datatype does not affect any other datatype
</span><br>
<span class="quotelev1">&gt; that was built from the freed datatype.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (In fact, doing the same thing, that is MPI_IBcast followed by
</span><br>
<span class="quotelev1">&gt; MPI_Type_free followed by MPI_Wait, with foo_type and foo_mpitype seems to
</span><br>
<span class="quotelev1">&gt; work fine).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; kind regards,
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28265/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28266.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28264.php">CUDENNEC Loic: "[OMPI users] Call for Papers: 4th Alchemy Workshop on Manycore programming"</a>
<li><strong>In reply to:</strong> <a href="28263.php">Thomas Ponweiser: "[OMPI users] MPI_Type_free and non-blocking operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28279.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_free and non-blocking operations"</a>
<li><strong>Reply:</strong> <a href="28279.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_free and non-blocking operations"</a>
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
