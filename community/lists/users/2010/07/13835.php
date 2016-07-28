<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 11:19:58 2010" -->
<!-- isoreceived="20100728151958" -->
<!-- sent="Wed, 28 Jul 2010 11:19:43 -0400" -->
<!-- isosent="20100728151943" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="4C504A8F.80309_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1280285941.6911.1387084143_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce on local machine<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 11:19:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13836.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13834.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Maybe in reply to:</strong> <a href="13785.php">Hugo Gagnon: "[OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13836.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13836.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13851.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hugo Gagnon wrote:
<br>
<span class="quotelev1">&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt; Ompi_info --all lists its info regarding fortran right after C. In my
</span><br>
<span class="quotelev1">&gt; case:
</span><br>
<span class="quotelev1">&gt;           Fort real size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort real16 size: 16
</span><br>
<span class="quotelev1">&gt;       Fort dbl prec size: 4
</span><br>
<span class="quotelev1">&gt; Does it make any sense to you?
</span><br>
<p>Hi Hugo
<br>
<p>No, dbl prec size 4 sounds weird, should be 8, I suppose,
<br>
same as real8, right?
<br>
<p>It doesn't make sense, but that's what I have (now that you told me
<br>
that &quot;dbl&quot; , not &quot;double&quot;, is the string to search for):
<br>
<p>$      Fort dbl prec size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl cplx size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl prec align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl cplx align: 4
<br>
<p>Is this a bug in OpenMPI perhaps?
<br>
<p>I didn't come across to this problem, most likely because
<br>
the codes here don't use &quot;double precision&quot; but real*8 or similar.
<br>
<p>Also make sure you are picking the right ompi_info, mpif90/f77, mpiexec.
<br>
Often times old versions and tangled PATH make things very confusing.
<br>
<p>Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13836.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13834.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Maybe in reply to:</strong> <a href="13785.php">Hugo Gagnon: "[OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13836.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13836.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13851.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
