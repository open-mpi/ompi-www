<?
$subject_val = "Re: [OMPI users] MPI_Put/Get with many nested derived type";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 21 08:19:45 2016" -->
<!-- isoreceived="20160521121945" -->
<!-- sent="Sat, 21 May 2016 21:19:44 +0900" -->
<!-- isosent="20160521121944" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Put/Get with many nested derived type" -->
<!-- id="CAAkFZ5vqpWO-A047rP-+46nh1EAPxVVG9izmGH4-r3g_iPxRRA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5740213F.20608_at_hpcs.cs.tsukuba.ac.jp" -->
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
<strong>Date:</strong> 2016-05-21 08:19:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29262.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Previous message:</strong> <a href="29260.php">Akihiro Tabuchi: "[OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>In reply to:</strong> <a href="29260.php">Akihiro Tabuchi: "[OMPI users] MPI_Put/Get with many nested derived type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29262.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Reply:</strong> <a href="29262.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tabuchi-san,
<br>
<p>thanks for the report.
<br>
<p>this is indeed a bug i was able to reproduce on my linux laptop (for
<br>
some unknown reasons, there is no crash on OS X )
<br>
<p>ompi_datatype_pack_description_length malloc 88 bytes for the datatype
<br>
description, but 96 bytes are required.
<br>
this causes a memory corruption with undefined side effects (crash in
<br>
MPI_Type_free, or in MPI_Win_unlock)
<br>
<p>iirc, we made some changes to ensure  data is always aligned (Sparc
<br>
processors require this), and we could have missed
<br>
some stuff, and hence malloc less bytes than required.
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p>On Sat, May 21, 2016 at 5:50 PM, Akihiro Tabuchi
<br>
&lt;tabuchi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At OpenMPI 1.10.2, MPI_Type_free crashes with a many nested derived type after using MPI_Put/Get
</span><br>
<span class="quotelev1">&gt; with the datatype as target_datatype.
</span><br>
<span class="quotelev1">&gt; The test code is attached.
</span><br>
<span class="quotelev1">&gt; In the code, MPI_Type_free crashes if N_NEST &gt;= 4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This problem occurs at OpenMPI 1.8.5 or later.
</span><br>
<span class="quotelev1">&gt; There is no problem at OpenMPI 1.8.4, MPICH 3.2, and MVAPICH 2.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone know about the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Akihiro
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Akihiro Tabuchi
</span><br>
<span class="quotelev1">&gt; HPCS Lab, Univ. of Tsukuba
</span><br>
<span class="quotelev1">&gt; tabuchi_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29260.php">http://www.open-mpi.org/community/lists/users/2016/05/29260.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29262.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Previous message:</strong> <a href="29260.php">Akihiro Tabuchi: "[OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>In reply to:</strong> <a href="29260.php">Akihiro Tabuchi: "[OMPI users] MPI_Put/Get with many nested derived type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29262.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Reply:</strong> <a href="29262.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
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
