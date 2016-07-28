<?
$subject_val = "Re: [OMPI users] OpenMPI and CUDA on cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 14:03:48 2012" -->
<!-- isoreceived="20120501180348" -->
<!-- sent="Tue, 1 May 2012 11:03:23 -0700" -->
<!-- isosent="20120501180323" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and CUDA on cluster" -->
<!-- id="CAOf_+-UwCBMPYkB-mdpecu=_L1Wf=wyEMgqHAc01-LFLv7Uo5A_at_mail.gmail.com" -->
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
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 14:03:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19162.php">Trent: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Previous message:</strong> <a href="19160.php">Jeff Squyres: "Re: [OMPI users] Regarding mpi programming"</a>
<li><strong>In reply to:</strong> <a href="19158.php">Rohan Deshpande: "[OMPI users] OpenMPI and CUDA on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19162.php">Trent: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Best way to find if the application binary can &quot;see&quot; the cuda library is to
<br>
do ldd.
<br>
<p><p><p><p>On Tue, May 1, 2012 at 2:03 AM, Rohan Deshpande &lt;rohand87_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/lib:/usr/local/
</span><br>
<span class="quotelev1">&gt; lib/openmpi/:/usr/local/cuda/lib/:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the machines haves same installation of CUDA and OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone help me with this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This problem is really annoying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19161/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19162.php">Trent: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Previous message:</strong> <a href="19160.php">Jeff Squyres: "Re: [OMPI users] Regarding mpi programming"</a>
<li><strong>In reply to:</strong> <a href="19158.php">Rohan Deshpande: "[OMPI users] OpenMPI and CUDA on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19162.php">Trent: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
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
