<?
$subject_val = "Re: [OMPI users] MPI_Type_free and non-blocking operations";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 21:07:13 2016" -->
<!-- isoreceived="20160115020713" -->
<!-- sent="Fri, 15 Jan 2016 11:07:09 +0900" -->
<!-- isosent="20160115020709" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_free and non-blocking operations" -->
<!-- id="5698544D.7070104_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5vc09dZaGjjs4cN3ctSi=VWYuFRE58mZTJ7ZTEzFEvSUg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Type_free and non-blocking operations<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-14 21:07:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28280.php">George Bosilca: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28278.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28265.php">Gilles Gouaillardet: "[OMPI users]  MPI_Type_free and non-blocking operations"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thomas,
<br>
<p>i did double check this and
<br>
- there is no problem with MPI_Isend/MPI_Irecv (datatypes are correctly 
<br>
retained/released, and this part is well &quot;hidden&quot; inside some macros)
<br>
- there is no such thing with libnbc (and hence the bug). depending on 
<br>
the collective and the algo that will be chosed (depends on communicator 
<br>
and message size) you may or may not hit the bug.
<br>
<p>i opened <a href="https://github.com/open-mpi/ompi/issues/1304">https://github.com/open-mpi/ompi/issues/1304</a> in order to track 
<br>
this issue, and will start making a proof of concept from now.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 1/13/2016 11:00 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Thomas,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for the report,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; at first glance, libnbc (the default module that implements non 
</span><br>
<span class="quotelev1">&gt; blocking collective) does not retain/release datatypes, that is why 
</span><br>
<span class="quotelev1">&gt; you ran into this kind of trouble.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I quickly checked the code, and it seems this kind of mechanism is 
</span><br>
<span class="quotelev1">&gt; also missing for MPI_Isend/MPI_Irecv ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will investigate this further
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday, January 13, 2016, Thomas Ponweiser 
</span><br>
<span class="quotelev1">&gt; &lt;Thomas.Ponweiser_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','Thomas.Ponweiser_at_[hidden]');&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Dear friends of Open MPI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am currently facing a problem in connection with MPI_Ibcast and
</span><br>
<span class="quotelev1">&gt;     MPI_Type_free. I've been able to isolate the problem in a
</span><br>
<span class="quotelev1">&gt;     minimalistic test program which I attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Maybe some of you can tell me what I am doing wrong or confirm
</span><br>
<span class="quotelev1">&gt;     that this might be a bug in Open MPI (I am using version 1.10.1).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Here is what I am doing:
</span><br>
<span class="quotelev1">&gt;     1) I have two struct types, foo_type and bar_type, as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     typedef struct
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;        int v[6];
</span><br>
<span class="quotelev1">&gt;        long l;
</span><br>
<span class="quotelev1">&gt;     } foo_type;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     typedef struct
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;        int v[3];
</span><br>
<span class="quotelev1">&gt;        foo_type foo;
</span><br>
<span class="quotelev1">&gt;     } bar_type;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2) I am creating corresponding MPI types (foo_mpitype and
</span><br>
<span class="quotelev1">&gt;     bar_mpitype) with MPI_Type_create_struct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     3) I am freeing foo_mpitype.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     4) I am broadcasting a variable of type bar_type with MPI_Ibcast
</span><br>
<span class="quotelev1">&gt;     (using count = 1 and datatype = bar_mpitype).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     5) I am freeing bar_mpitype.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     6) I am waiting for the completion of step 4) with MPI_Wait.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     In step 6) I get a segmentation fault within MPI_Wait, but only if
</span><br>
<span class="quotelev1">&gt;     the MPI job is larger than 4 processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Testing with MPICH 3.2, the program seems to work just fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I found out that swapping the steps 5) and 6) helps. But I think
</span><br>
<span class="quotelev1">&gt;     this should not make any difference, according to the description
</span><br>
<span class="quotelev1">&gt;     of MPI_Type_free at
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.mpi-forum.org/docs/mpi-1.1/mpi-11-html/node58.html">http://www.mpi-forum.org/docs/mpi-1.1/mpi-11-html/node58.html</a>:
</span><br>
<span class="quotelev1">&gt;     &quot;Any communication that is currently using this datatype will
</span><br>
<span class="quotelev1">&gt;     complete normally.&quot; And: &quot; Freeing a datatype does not affect any
</span><br>
<span class="quotelev1">&gt;     other datatype that was built from the freed datatype.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     (In fact, doing the same thing, that is MPI_IBcast followed by
</span><br>
<span class="quotelev1">&gt;     MPI_Type_free followed by MPI_Wait, with foo_type and foo_mpitype
</span><br>
<span class="quotelev1">&gt;     seems to work fine).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks in advance for your help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     kind regards,
</span><br>
<span class="quotelev1">&gt;     Thomas
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28265.php">http://www.open-mpi.org/community/lists/users/2016/01/28265.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28279/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28280.php">George Bosilca: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28278.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28265.php">Gilles Gouaillardet: "[OMPI users]  MPI_Type_free and non-blocking operations"</a>
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
