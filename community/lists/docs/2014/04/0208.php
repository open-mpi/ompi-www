<?
$subject_val = "[OMPI docs] One possible typo in MPI_Alltoallv documentation on mac";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 20 23:28:35 2014" -->
<!-- isoreceived="20140421032835" -->
<!-- sent="Sun, 20 Apr 2014 23:28:12 -0400" -->
<!-- isosent="20140421032812" -->
<!-- name="Xuankang Lin" -->
<!-- email="lxk19921205_at_[hidden]" -->
<!-- subject="[OMPI docs] One possible typo in MPI_Alltoallv documentation on mac" -->
<!-- id="CAEAyHEcy=V9nBbbbUY1aa+rjibsi+gtYhCPZ6YQt6qT2=HJYVA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI docs] One possible typo in MPI_Alltoallv documentation on mac<br>
<strong>From:</strong> Xuankang Lin (<em>lxk19921205_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-20 23:28:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0209.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] One possible typo in MPI_Alltoallv documentation on mac"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2014/02/0207.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0209.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] One possible typo in MPI_Alltoallv documentation on mac"</a>
<li><strong>Reply:</strong> <a href="0209.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] One possible typo in MPI_Alltoallv documentation on mac"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I am using Mac OS X 10.9.2 and there seems to be a typo in the man page of
<br>
MPI_Alltoallv:
<br>
<p>C Syntax
<br>
<span class="quotelev1">&gt;        #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;        int MPI_Alltoallv(const void *sendbuf, const int sendcounts[],
</span><br>
<span class="quotelev1">&gt;             const int sdisplsP, MPI_Datatype sendtype,
</span><br>
<span class="quotelev1">&gt;             void *recvbuf, const int recvcounts[],
</span><br>
<span class="quotelev1">&gt;             const int rdispls[], MPI_Datatype recvtype, MPI_Comm comm)
</span><br>
<p><p><span class="quotelev1">&gt;        int MPI_Ialltoallv(const void *sendbuf, const int sendcounts[],
</span><br>
<span class="quotelev1">&gt;             const int sdisplsP, MPI_Datatype sendtype,
</span><br>
<span class="quotelev1">&gt;             void *recvbuf, const int recvcounts[],
</span><br>
<span class="quotelev1">&gt;             const int rdispls[], MPI_Datatype recvtype, MPI_Comm comm,
</span><br>
<span class="quotelev1">&gt;             MPI_Request *request)
</span><br>
<p><p>In both definitions there are &quot;const int sdisplsP&quot; which I think is a typo.
<br>
<p>Thanks.
<br>
<p>Best,
<br>
Xuankang
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/docs/att-0208/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0209.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] One possible typo in MPI_Alltoallv documentation on mac"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2014/02/0207.php">Kelly Black: "Re: [OMPI docs] Behavior of --host and --hostfile flags on mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0209.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] One possible typo in MPI_Alltoallv documentation on mac"</a>
<li><strong>Reply:</strong> <a href="0209.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] One possible typo in MPI_Alltoallv documentation on mac"</a>
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
