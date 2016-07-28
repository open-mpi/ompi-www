<?
$subject_val = "Re: [OMPI users] How to link the statically compiled OpenMPI library ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 11:55:54 2016" -->
<!-- isoreceived="20160317155554" -->
<!-- sent="Thu, 17 Mar 2016 09:55:55 -0600" -->
<!-- isosent="20160317155555" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to link the statically compiled OpenMPI library ?" -->
<!-- id="20160317155555.GA69078_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALD+GRkcUg7BqvVmt40mA34NXUz_WkkQnQdi=GBwewDSf23sYQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to link the statically compiled OpenMPI library ?<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 11:55:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28738.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<li><strong>In reply to:</strong> <a href="28735.php">evelina dumitrescu: "[OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Instead of --static try using -Wl,-Bstatic. I do not think you can
<br>
safely mix --static with -Wl,-Bdynamic.
<br>
<p>-Nathan
<br>
HPC-ENV, LANL
<br>
<p>On Thu, Mar 17, 2016 at 03:54:33PM +0100, evelina dumitrescu wrote:
<br>
<span class="quotelev1">&gt;    hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I unsuccessfully tried to link the statically compiled OpenMPI library.
</span><br>
<span class="quotelev1">&gt;    I used for compilation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ./configure --enable-static -disable-shared
</span><br>
<span class="quotelev1">&gt;    make -j 4
</span><br>
<span class="quotelev1">&gt;    make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    When I try to link the library to my executable, I get the following
</span><br>
<span class="quotelev1">&gt;    error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    gcc mm.c --static -I/usr/local/include/openmpi mm.c -o mm.out
</span><br>
<span class="quotelev1">&gt;    -L/usr/local/lib -L/usr/local/lib/openmpi -lmpi -lopen-rte -lopen-pal
</span><br>
<span class="quotelev1">&gt;    -Wl,--whole-archive -libverbs  -Wl,--no-whole-archive -lrt
</span><br>
<span class="quotelev1">&gt;    -Wl,--export-dynamic -Wl,-Bdynamic -ldl -lc -lnsl -lutil -lm -ldl -fPIE
</span><br>
<span class="quotelev1">&gt;    -pie
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /usr/bin/ld: /usr/lib/gcc/x86_64-linux-gnu/4.8/crtbeginT.o: relocation
</span><br>
<span class="quotelev1">&gt;    R_X86_64_32 against `__TMC_END__' can not be used when making a shared
</span><br>
<span class="quotelev1">&gt;    object; recompile with -fPIC
</span><br>
<span class="quotelev1">&gt;    /usr/lib/gcc/x86_64-linux-gnu/4.8/crtbeginT.o: error adding symbols: Bad
</span><br>
<span class="quotelev1">&gt;    value
</span><br>
<span class="quotelev1">&gt;    collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I use openmpi-1.10.2 and Ubuntu 14.04.
</span><br>
<span class="quotelev1">&gt;    What am I doing wrog ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Evelina
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28735.php">http://www.open-mpi.org/community/lists/users/2016/03/28735.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28737/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28738.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<li><strong>In reply to:</strong> <a href="28735.php">evelina dumitrescu: "[OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<!-- nextthread="start" -->
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
