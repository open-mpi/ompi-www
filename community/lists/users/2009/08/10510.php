<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 08:32:47 2009" -->
<!-- isoreceived="20090828123247" -->
<!-- sent="Fri, 28 Aug 2009 14:32:42 +0200" -->
<!-- isosent="20090828123242" -->
<!-- name="Federico Golfr&#232; Andreasi" -->
<!-- email="federico.golfre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?" -->
<!-- id="b88e40560908280532s614924e7m7ec0ec68f8ceda13_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A97B20A.1030501_at_biggjapan.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?<br>
<strong>From:</strong> Federico Golfr&#232; Andreasi (<em>federico.golfre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-28 08:32:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10511.php">A. Austen: "[OMPI users] Job distribution on many-core NUMA system"</a>
<li><strong>Previous message:</strong> <a href="10509.php">Ashika Umanga Umagiliya: "[OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>In reply to:</strong> <a href="10509.php">Ashika Umanga Umagiliya: "[OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10547.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10547.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well from what I know Boost.MPI contains only MPI-1 functions
<br>
(but refer to the boost mailing list for support
<br>
<a href="http://lists.boost.org/mailman/listinfo.cgi/boost-users">http://lists.boost.org/mailman/listinfo.cgi/boost-users</a>);
<br>
so Intercommunicators  are not managed by the Boost.MPI library, and you
<br>
have to use the stardard MPI functions.
<br>
<p>So, by now, I think it's not possible to send a user defined serializable
<br>
object through an intercommunicator.
<br>
<p>Federico
<br>
<p><p><p><p><p>2009/8/28 Ashika Umanga Umagiliya &lt;aumanga_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Greetings all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wanted to send come complex user defined types between MPI processes and
</span><br>
<span class="quotelev1">&gt; found out that Boost.MPI is  quite easy to use for my requirement.So far it
</span><br>
<span class="quotelev1">&gt; worked well and I received my object model in every process without
</span><br>
<span class="quotelev1">&gt; problems.
</span><br>
<span class="quotelev1">&gt; Now I am going to spawn processes (using MPI_Comm_spawn, because Boot.MPI
</span><br>
<span class="quotelev1">&gt; doesn't have such a function) and then use Boost.MPI to send the objects
</span><br>
<span class="quotelev1">&gt; across newly created child processes.
</span><br>
<span class="quotelev1">&gt; Is there any issues with this procedure?
</span><br>
<span class="quotelev1">&gt; And Boost.MPI says it only support OpenMPI 1.0.x (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.boost.org/doc/libs/1_40_0/doc/html/mpi/getting_started.html#mpi.mpi_impl">http://www.boost.org/doc/libs/1_40_0/doc/html/mpi/getting_started.html#mpi.mpi_impl</a>
</span><br>
<span class="quotelev1">&gt; )
</span><br>
<span class="quotelev1">&gt; Will there be any version incompatibilities ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks in advance,
</span><br>
<span class="quotelev1">&gt; umanga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10510/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10511.php">A. Austen: "[OMPI users] Job distribution on many-core NUMA system"</a>
<li><strong>Previous message:</strong> <a href="10509.php">Ashika Umanga Umagiliya: "[OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>In reply to:</strong> <a href="10509.php">Ashika Umanga Umagiliya: "[OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10547.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10547.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
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
