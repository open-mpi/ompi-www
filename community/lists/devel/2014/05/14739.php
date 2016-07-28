<?
$subject_val = "Re: [OMPI devel] regression with derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 23:03:26 2014" -->
<!-- isoreceived="20140508030326" -->
<!-- sent="Thu, 08 May 2014 12:03:38 +0900" -->
<!-- isosent="20140508030338" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] regression with derived datatypes" -->
<!-- id="536AF40A.5060002_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="41478E49-114D-4F8B-B0A4-9D11D5F8D3AD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] regression with derived datatypes<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 23:03:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14740.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14738.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14721.php">Ralph Castain: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14742.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14742.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2014/05/08 2:15, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I wonder if that might also explain the issue reported by Gilles regarding the scif BTL? In his example, the problem only occurred if the message was split across scif and vader. If so, then it might be that splitting messages in general is broken.
</span><br>
<span class="quotelev1">&gt;
</span><br>
i am afraid there is a misunderstanding :
<br>
the problem always occur with scif,vader,self (regardless the ompi v1.8
<br>
version)
<br>
the problem occurs with scif,self only if r31496 is applied to ompi v1.8
<br>
<p><p>In my previous email
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/05/14699.php">http://www.open-mpi.org/community/lists/devel/2014/05/14699.php</a>
<br>
i reported the following interesting fact :
<br>
<p>with ompi v1.8 (latest r31678), the following command produces incorrect
<br>
results :
<br>
mpirun -host localhost -np 2 --mca btl scif,self ./test_scif
<br>
<p>but with ompi v1.8 r31309, the very same command produces correct results
<br>
<p>Elena pointed that r31496 is a suspect. so i took the latest v1.8
<br>
(r31678) and reverted r31496 and ...
<br>
<p><p>mpirun -host localhost -np 2 --mca btl scif,self ./test_scif
<br>
<p>works again !
<br>
<p>note that the &quot;default&quot;
<br>
mpirun -host localhost -np 2 --mca btl scif,vader,self ./test_scif
<br>
still produces incorrect results
<br>
<p>in order to reproduce the issue, a MIC is *not* needed,
<br>
you only need to install the software stack, load the mic kernel module
<br>
and make sure you can read/write /dev/mic/*
<br>
<p>bottom line, there are two issues here :
<br>
1) r31496 broke something : mpirun -np 2 -host localhost --mca btl
<br>
scif,self ./test_scif
<br>
2) something else never worked : mpirun -np 2 -host localhost --mca btl
<br>
scif,vader,self ./test_scif
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14740.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14738.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14721.php">Ralph Castain: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14742.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14742.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
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
