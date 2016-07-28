<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 11:30:46 2010" -->
<!-- isoreceived="20100728153046" -->
<!-- sent="Wed, 28 Jul 2010 11:31:35 -0400" -->
<!-- isosent="20100728153135" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="BF229FCA-7912-482F-9F9D-DC544F4702CD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C504A8F.80309_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 11:31:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13837.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13835.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13835.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13838.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13838.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 28, 2010, at 11:19 AM, Gus Correa wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Ompi_info --all lists its info regarding fortran right after C. In my
</span><br>
<p>Ummm.... right... I should know that.  I wrote ompi_info, after all.  :-)  I ran &quot;ompi_info -all | grep -i fortran&quot; and didn't see the fortran info, and I forgot that I put that stuff in there.  Oops!  :-)
<br>
<p><span class="quotelev2">&gt; &gt; case:
</span><br>
<span class="quotelev2">&gt; &gt;           Fort real size: 4
</span><br>
<span class="quotelev2">&gt; &gt;          Fort real4 size: 4
</span><br>
<span class="quotelev2">&gt; &gt;          Fort real8 size: 8
</span><br>
<span class="quotelev2">&gt; &gt;         Fort real16 size: 16
</span><br>
<span class="quotelev2">&gt; &gt;       Fort dbl prec size: 4
</span><br>
<p>That does seems weird.  
<br>
<p><span class="quotelev1">&gt; No, dbl prec size 4 sounds weird, should be 8, I suppose,
</span><br>
<span class="quotelev1">&gt; same as real8, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It doesn't make sense, but that's what I have (now that you told me
</span><br>
<span class="quotelev1">&gt; that &quot;dbl&quot; , not &quot;double&quot;, is the string to search for):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $      Fort dbl prec size: 4
</span><br>
<span class="quotelev1">&gt;        Fort dbl cplx size: 4
</span><br>
<span class="quotelev1">&gt;       Fort dbl prec align: 4
</span><br>
<span class="quotelev1">&gt;       Fort dbl cplx align: 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a bug in OpenMPI perhaps?
</span><br>
<p>Getting sizeof and alignment of Fortran variable types is very problematic.  Can you send the stdout/stderr of configure and the config.log?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13837.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13835.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13835.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13838.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13838.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
