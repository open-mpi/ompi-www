<?
$subject_val = "Re: [OMPI devel] regression with derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 02:50:46 2014" -->
<!-- isoreceived="20140508065046" -->
<!-- sent="Thu, 8 May 2014 06:50:42 +0000" -->
<!-- isosent="20140508065042" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] regression with derived datatypes" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A8AF9C9_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="536AF40A.5060002_at_iferc.org" -->
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
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 02:50:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14743.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14741.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14739.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14743.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14743.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since I have a system that has the scif libraries installed I will try to reproduce and see if I can come up with a fix. It will probably be sometime next week at the earliest.
<br>
<p>-Nathan
<br>
________________________________________
<br>
From: devel [devel-bounces_at_[hidden]] on behalf of Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]]
<br>
Sent: Wednesday, May 07, 2014 9:03 PM
<br>
To: devel_at_[hidden]
<br>
Subject: Re: [OMPI devel] regression with derived datatypes
<br>
<p>On 2014/05/08 2:15, Ralph Castain wrote:
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
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14739.php">http://www.open-mpi.org/community/lists/devel/2014/05/14739.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14743.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14741.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14739.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14743.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14743.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
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
