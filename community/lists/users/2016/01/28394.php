<?
$subject_val = "Re: [OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 27 20:11:18 2016" -->
<!-- isoreceived="20160128011118" -->
<!-- sent="Thu, 28 Jan 2016 10:11:13 +0900" -->
<!-- isosent="20160128011113" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)" -->
<!-- id="56A96AB1.8070807_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="B5E7491E7F72164997C336AA7C85A5FC74C302E1_at_ucolhpkt.easf.csd.disa.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-27 20:11:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28395.php">Gilles Gouaillardet: "Re: [OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)"</a>
<li><strong>Previous message:</strong> <a href="28393.php">Ben Menadue: "[OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>In reply to:</strong> <a href="28392.php">Ramsey, James J CIV USARMY RDECOM ARL (US): "[OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28395.php">Gilles Gouaillardet: "Re: [OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)"</a>
<li><strong>Reply:</strong> <a href="28395.php">Gilles Gouaillardet: "Re: [OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
James,
<br>
<p>that is definetly a bug in OpenMPI, and i will push a fix shortly
<br>
(well, at least when github is back online ...)
<br>
<p>Thanks and regards,
<br>
<p>Gilles
<br>
<p>On 1/28/2016 1:46 AM, Ramsey, James J CIV USARMY RDECOM ARL (US) wrote:
<br>
<span class="quotelev1">&gt; In case the last message came out garbled because newlines were removed, I've send it again. Anyway,I've been trying to create a derived datatype for use in one-sided communication, and I find that attempting to modify the extents to account for potential alignment issues is making things *worse*, at least when one-sided communication is used. Modifying extents seems to work fine when using the datatype for two-sided communication, however. I also find that the problem seems to occur with the version of OpenMPI on my workstation (which, unfortunately, is a prior stable release, 1.8.5), but not with Cray's MPICH. Mainly, I'm trying to figure out if there's a problem with my code that OpenMPI is catching but Cray is not, or if the problem is at OpenMPI's end. The attached test code that triggers the problem for me when compiled with &quot;-DADJ_EXTENT&quot;.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28392.php">http://www.open-mpi.org/community/lists/users/2016/01/28392.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28394/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28395.php">Gilles Gouaillardet: "Re: [OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)"</a>
<li><strong>Previous message:</strong> <a href="28393.php">Ben Menadue: "[OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>In reply to:</strong> <a href="28392.php">Ramsey, James J CIV USARMY RDECOM ARL (US): "[OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28395.php">Gilles Gouaillardet: "Re: [OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)"</a>
<li><strong>Reply:</strong> <a href="28395.php">Gilles Gouaillardet: "Re: [OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)"</a>
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
