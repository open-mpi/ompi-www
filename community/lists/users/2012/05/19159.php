<?
$subject_val = "Re: [OMPI users] OpenMPI and CUDA on cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 06:52:30 2012" -->
<!-- isoreceived="20120501105230" -->
<!-- sent="Tue, 1 May 2012 16:22:26 +0530" -->
<!-- isosent="20120501105226" -->
<!-- name="Mohan L" -->
<!-- email="l.mohanphy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and CUDA on cluster" -->
<!-- id="CADiHtmsMC+nUhnaQtrrSzsvE1iYJSs6bS4Sb6L_Kb+p2vLrCqw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFAE9jhdxytn_kUAPETxLf2yc2Yfw5=grxjDbg7DoDjXPqBTEQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and CUDA on cluster<br>
<strong>From:</strong> Mohan L (<em>l.mohanphy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 06:52:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19160.php">Jeff Squyres: "Re: [OMPI users] Regarding mpi programming"</a>
<li><strong>Previous message:</strong> <a href="19158.php">Rohan Deshpande: "[OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>In reply to:</strong> <a href="19158.php">Rohan Deshpande: "[OMPI users] OpenMPI and CUDA on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19161.php">Jingcha Joba: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, May 1, 2012 at 2:33 PM, Rohan Deshpande &lt;rohand87_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to execute OpenMPI and CUDA code on a cluster. The code works
</span><br>
<span class="quotelev1">&gt; fine on single machine but when I try to execute it on cluster I get error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; error while loading shared libraries: libcudart.so.4: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked my PATH and LD_PATH and it looks ok. I have a .bashrc file which
</span><br>
<span class="quotelev1">&gt; contains following entries -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=$PATH:/usr/local/lib/:/usr/local/lib/openmpi:/usr/local/
</span><br>
<span class="quotelev1">&gt; cuda/bin
</span><br>
<span class="quotelev1">&gt; export
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/lib:/usr/local/lib/openmpi*/*
</span><br>
<span class="quotelev1">&gt; :/usr/local/cuda/lib/:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
I think you have remove trailing slash &quot;/&quot; in the path.
<br>
<p>LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/lib:/usr/local/lib/openmpi:/usr/local/cuda/lib
<br>
<p>export LD_LIBRARY_PATH
<br>
<p>Still it is not working then replay here. There may be some other reason.
<br>
Again I will help you to solve the problem.
<br>
<p><p>Thanks
<br>
Mohan L
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19159/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19160.php">Jeff Squyres: "Re: [OMPI users] Regarding mpi programming"</a>
<li><strong>Previous message:</strong> <a href="19158.php">Rohan Deshpande: "[OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>In reply to:</strong> <a href="19158.php">Rohan Deshpande: "[OMPI users] OpenMPI and CUDA on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19161.php">Jingcha Joba: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
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
