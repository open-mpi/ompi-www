<?
$subject_val = "Re: [OMPI users] Need libmpi_f90.a";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 16:01:40 2016" -->
<!-- isoreceived="20160711200140" -->
<!-- sent="Mon, 11 Jul 2016 20:01:38 +0000" -->
<!-- isosent="20160711200138" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need libmpi_f90.a" -->
<!-- id="672B1E3F-53C0-4AE6-B4BF-61613CC4F4C7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADa2P2Uxvze9iKD_Qt9eTWt+SkY2rke=tK_4sMwFLQ9BZw6Wqw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need libmpi_f90.a<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-11 16:01:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29643.php">Gilles Gouaillardet: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>Previous message:</strong> <a href="29641.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>In reply to:</strong> <a href="29641.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29645.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>Reply:</strong> <a href="29645.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 11, 2016, at 3:25 PM, Mahmood Naderan &lt;mahmood.nt_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; # ls -l libmpi*
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 root root 1029580 Jul 11 23:51 libmpi_mpifh.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 root root   17292 Jul 11 23:51 libmpi_usempi.a
</span><br>
<p>These are the two for v1.10.x.
<br>
<p>Sorry; one thing I wasn't clear on (I had forgotten): the libraries changed name from v1.6.x to v1.10.x.
<br>
<p>This is why we recommend you use the wrapper compilers to compile MPI applications, and/or at least use the wrapper compilers or pkg-config to determine what the correct flags are to pass to the compiler/linker if you're not using the wrapper compilers directly.
<br>
<p>See this FAQ item if you don't want to use the wrapper compilers:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers">https://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers</a>
<br>
<p>I see that we have not mentioned in there that you can use pkg-config, too; I'll see if we can add that shortly.  The use of pkg-config is documented here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/blob/master/README#L1744-L1771">https://github.com/open-mpi/ompi/blob/master/README#L1744-L1771</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29643.php">Gilles Gouaillardet: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>Previous message:</strong> <a href="29641.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>In reply to:</strong> <a href="29641.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29645.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>Reply:</strong> <a href="29645.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
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
