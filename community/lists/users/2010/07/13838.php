<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 11:55:27 2010" -->
<!-- isoreceived="20100728155527" -->
<!-- sent="Wed, 28 Jul 2010 11:55:17 -0400" -->
<!-- isosent="20100728155517" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="4C5052E5.1050507_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BF229FCA-7912-482F-9F9D-DC544F4702CD_at_cisco.com" -->
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
<strong>Date:</strong> 2010-07-28 11:55:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13839.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13837.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13836.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13839.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13839.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>I surely can send you the logs, but they're big.
<br>
Off the list perhaps?
<br>
<p>Thanks,
<br>
Gus
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 28, 2010, at 11:19 AM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ompi_info --all lists its info regarding fortran right after C. In my
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ummm.... right... I should know that.  I wrote ompi_info, after all.  :-)  I ran &quot;ompi_info -all | grep -i fortran&quot; and didn't see the fortran info, and I forgot that I put that stuff in there.  Oops!  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; case:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Fort real size: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Fort real16 size: 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fort dbl prec size: 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That does seems weird.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No, dbl prec size 4 sounds weird, should be 8, I suppose,
</span><br>
<span class="quotelev2">&gt;&gt; same as real8, right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It doesn't make sense, but that's what I have (now that you told me
</span><br>
<span class="quotelev2">&gt;&gt; that &quot;dbl&quot; , not &quot;double&quot;, is the string to search for):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $      Fort dbl prec size: 4
</span><br>
<span class="quotelev2">&gt;&gt;        Fort dbl cplx size: 4
</span><br>
<span class="quotelev2">&gt;&gt;       Fort dbl prec align: 4
</span><br>
<span class="quotelev2">&gt;&gt;       Fort dbl cplx align: 4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this a bug in OpenMPI perhaps?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Getting sizeof and alignment of Fortran variable types is very problematic.  Can you send the stdout/stderr of configure and the config.log?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13839.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13837.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13836.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13839.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13839.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
