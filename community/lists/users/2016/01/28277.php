<?
$subject_val = "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 18:05:16 2016" -->
<!-- isoreceived="20160114230516" -->
<!-- sent="Thu, 14 Jan 2016 18:05:14 -0500" -->
<!-- isosent="20160114230514" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW" -->
<!-- id="22348831-F59E-4A6B-BDE7-170E0F8F7787_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5696EBA0.30304_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-14 18:05:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28278.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28276.php">Howard Pritchard: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
<li><strong>In reply to:</strong> <a href="28270.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28278.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28278.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Jan 13, 2016, at 19:57 , Jim Edwards &lt;jedwards_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George and all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Back to OpenMPI, now the question is :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#147;Is OpenMPI going to be updated (and when) in order to support an intuitive and user friendly feature, that is currently explicitly prohibited by the MPI 3.1 standard, but that might be part of the MPI-4 standard and that we already know is not backward compatible (*) ?
</span><br>
<p>If the MPI Forum agrees to amend the standard to allow this [currently forbidden] behavior, we will be bound to adapt. Meanwhile, I would assume that with regard to this particular question the MPICH implementation is far too user-friendly and only loosely standard compliant.
<br>
<p><span class="quotelev1">&gt; (*) fwiw, mpich already &#147;implements&quot; this, so backward incompatibility would only affect tools currently working with OpenMPI but not with mpich.&quot;
</span><br>
<span class="quotelev1">&gt; i am a pragmatic guy, so i'd rather go for it, but here is what i am gonna do :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; unless George vetoes that, i will add this topic to the weekly call agenda, and wait for the community to make a decision
</span><br>
<span class="quotelev1">&gt; (e.g. go / no go, and milestone if needed 1.10 series ? 2.0 ? 2.1 ? master only ?)
</span><br>
<p>A pragmatic user will certainly appreciate in all circumstances to type less characters (MPI_BYTE) instead of MPI_DATATYPE_NULL when used in combination with a statically known count of 0.
<br>
<p>Cheers,
<br>
&nbsp;&nbsp;George.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28277/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28278.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28276.php">Howard Pritchard: "Re: [OMPI users] problem with execstack and openmpi-v1.10.1-140-g31ff573"</a>
<li><strong>In reply to:</strong> <a href="28270.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28278.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28278.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
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
