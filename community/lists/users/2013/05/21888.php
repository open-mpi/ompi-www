<?
$subject_val = "Re: [OMPI users] /usr/bin/ld: skipping incompatible ......";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  9 08:32:33 2013" -->
<!-- isoreceived="20130509123233" -->
<!-- sent="Thu, 9 May 2013 12:32:28 +0000" -->
<!-- isosent="20130509123228" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] /usr/bin/ld: skipping incompatible ......" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6120F7_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMZtdMt+ZU6c8mzgBs1=AYv_bmirxjBrPXx0QAxAeVgF-eDe+w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] /usr/bin/ld: skipping incompatible ......<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-09 08:32:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21889.php">Pepito Perez: "Re: [OMPI users] mpirun error"</a>
<li><strong>Previous message:</strong> <a href="21887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] confirm f86638f44cf1158fef247b0df762b406d12ec202"</a>
<li><strong>In reply to:</strong> <a href="21885.php">Matteo Parsani: "[OMPI users] /usr/bin/ld: skipping incompatible ......"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21892.php">Matteo Parsani: "Re: [OMPI users] /usr/bin/ld: skipping incompatible ......"</a>
<li><strong>Reply:</strong> <a href="21892.php">Matteo Parsani: "Re: [OMPI users] /usr/bin/ld: skipping incompatible ......"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you cited the correct prior thread on the OMPI users list, and I think it correctly identifies the problem: the linker is finding the &quot;wrong&quot; library first, determines that it is wrong, and skips it.
<br>
<p>You probably should remove the &quot;wrong&quot; library from your LD_LIBRARY_PATH (e.g., if you're building for 64 bit, then remove the 32 bit library dir, and vice versa).  You *might* be able to remove both of those directories from your LD_LIBRARY_PATH, because gcc might be searching those directories anyway (because it knows where it built/installed itself, unless you moved the tree after installation).
<br>
<p>Regardless, this is really more of a gcc question than an Open MPI question, because you probably have this same problem with anything that you compile with this compiler, right?
<br>
<p><p>On May 8, 2013, at 3:12 PM, Matteo Parsani &lt;parsani.matteo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; I have recently installed gcc 4.7.3 on my cent OS 6.4. Moreover, I have compiled openmpi 1.6.4 with the above compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My LD_LIBRARY_PATH is set correctly and it points to both /lib and /lib64 where libgfortran.so and libgcc_s.so for 32 and 64 bits are located.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Every time I compile a Fortran, a C or a C++ source code with the wrapper mpif90, mpicc or mpicx I get this warning:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: skipping incompatible /scratch/home0/pmatteo/research/lib_install/lib/libgfortran.so when searching for -lgfortran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: skipping incompatible /scratch/home0/pmatteo/research/lib_install/lib/libgcc_s.so when searching for -lgcc_s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have switch my LD_LIBRARY_PATH as suggested in this thread: <a href="http://www.open-mpi.org/community/lists/users/2009/02/8067.php">http://www.open-mpi.org/community/lists/users/2009/02/8067.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but nothing change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea what I am doing wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know that it is just a warning but I would like to avoid it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Matteo
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21889.php">Pepito Perez: "Re: [OMPI users] mpirun error"</a>
<li><strong>Previous message:</strong> <a href="21887.php">Jeff Squyres (jsquyres): "Re: [OMPI users] confirm f86638f44cf1158fef247b0df762b406d12ec202"</a>
<li><strong>In reply to:</strong> <a href="21885.php">Matteo Parsani: "[OMPI users] /usr/bin/ld: skipping incompatible ......"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21892.php">Matteo Parsani: "Re: [OMPI users] /usr/bin/ld: skipping incompatible ......"</a>
<li><strong>Reply:</strong> <a href="21892.php">Matteo Parsani: "Re: [OMPI users] /usr/bin/ld: skipping incompatible ......"</a>
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
