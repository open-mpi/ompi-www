<?
$subject_val = "Re: [OMPI users] MPI_Put/Get with many nested derived type";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 21 10:15:29 2016" -->
<!-- isoreceived="20160521141529" -->
<!-- sent="Sat, 21 May 2016 23:15:27 +0900" -->
<!-- isosent="20160521141527" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Put/Get with many nested derived type" -->
<!-- id="CAAkFZ5vP+91CxSqBEE+_xNcfhesVqvRO==eBEQjbQbY8_4hFqw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5vqpWO-A047rP-+46nh1EAPxVVG9izmGH4-r3g_iPxRRA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Put/Get with many nested derived type<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-21 10:15:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29263.php">Akihiro Tabuchi: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Previous message:</strong> <a href="29261.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>In reply to:</strong> <a href="29261.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29263.php">Akihiro Tabuchi: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Reply:</strong> <a href="29263.php">Akihiro Tabuchi: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here are attached two patches (one for master, one for v1.10)
<br>
<p>please consider these as experimental ones :
<br>
- they cannot hurt
<br>
- they might not always work
<br>
- they will likely allocate a bit more memory than necessary
<br>
- if something goes wrong, it will hopefully be caught soon enough in
<br>
a new assert clause
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Sat, May 21, 2016 at 9:19 PM, Gilles Gouaillardet
<br>
&lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Tabuchi-san,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for the report.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is indeed a bug i was able to reproduce on my linux laptop (for
</span><br>
<span class="quotelev1">&gt; some unknown reasons, there is no crash on OS X )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_datatype_pack_description_length malloc 88 bytes for the datatype
</span><br>
<span class="quotelev1">&gt; description, but 96 bytes are required.
</span><br>
<span class="quotelev1">&gt; this causes a memory corruption with undefined side effects (crash in
</span><br>
<span class="quotelev1">&gt; MPI_Type_free, or in MPI_Win_unlock)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; iirc, we made some changes to ensure  data is always aligned (Sparc
</span><br>
<span class="quotelev1">&gt; processors require this), and we could have missed
</span><br>
<span class="quotelev1">&gt; some stuff, and hence malloc less bytes than required.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; On Sat, May 21, 2016 at 5:50 PM, Akihiro Tabuchi
</span><br>
<span class="quotelev1">&gt; &lt;tabuchi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At OpenMPI 1.10.2, MPI_Type_free crashes with a many nested derived type after using MPI_Put/Get
</span><br>
<span class="quotelev2">&gt;&gt; with the datatype as target_datatype.
</span><br>
<span class="quotelev2">&gt;&gt; The test code is attached.
</span><br>
<span class="quotelev2">&gt;&gt; In the code, MPI_Type_free crashes if N_NEST &gt;= 4.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This problem occurs at OpenMPI 1.8.5 or later.
</span><br>
<span class="quotelev2">&gt;&gt; There is no problem at OpenMPI 1.8.4, MPICH 3.2, and MVAPICH 2.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone know about the problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Akihiro
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Akihiro Tabuchi
</span><br>
<span class="quotelev2">&gt;&gt; HPCS Lab, Univ. of Tsukuba
</span><br>
<span class="quotelev2">&gt;&gt; tabuchi_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29260.php">http://www.open-mpi.org/community/lists/users/2016/05/29260.php</a>
</span><br>
<p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29262/datatype_description.master.patch">datatype_description.master.patch</a>
</ul>
<!-- attachment="datatype_description.master.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29262/datatype_description.v1.10.patch">datatype_description.v1.10.patch</a>
</ul>
<!-- attachment="datatype_description.v1.10.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29263.php">Akihiro Tabuchi: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Previous message:</strong> <a href="29261.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>In reply to:</strong> <a href="29261.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29263.php">Akihiro Tabuchi: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Reply:</strong> <a href="29263.php">Akihiro Tabuchi: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
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
