<?
$subject_val = "Re: [OMPI users] How to link the statically compiled OpenMPI library ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 11:08:08 2016" -->
<!-- isoreceived="20160317150808" -->
<!-- sent="Thu, 17 Mar 2016 15:08:02 +0000" -->
<!-- isosent="20160317150802" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to link the statically compiled OpenMPI library ?" -->
<!-- id="A4D925F3-7F31-42EA-A40A-5B760E860063_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 11:08:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28737.php">Nathan Hjelm: "Re: [OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<li><strong>Previous message:</strong> <a href="28735.php">evelina dumitrescu: "[OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<li><strong>In reply to:</strong> <a href="28735.php">evelina dumitrescu: "[OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28737.php">Nathan Hjelm: "Re: [OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 17, 2016, at 10:54 AM, evelina dumitrescu &lt;evelina.a.dumitrescu_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I unsuccessfully tried to link the statically compiled OpenMPI library.
</span><br>
<span class="quotelev1">&gt; I used for compilation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --enable-static -disable-shared
</span><br>
<span class="quotelev1">&gt; make -j 4
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I try to link the library to my executable, I get the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gcc mm.c --static -I/usr/local/include/openmpi mm.c -o mm.out -L/usr/local/lib -L/usr/local/lib/openmpi -lmpi -lopen-rte -lopen-pal -Wl,--whole-archive -libverbs  -Wl,--no-whole-archive -lrt -Wl,--export-dynamic -Wl,-Bdynamic -ldl -lc -lnsl -lutil -lm -ldl -fPIE -pie 
</span><br>
<p>Looks like you found the FAQ item about compiling statically -- good!
<br>
<p>I think the dl library is only available for dynamic builds, not static builds (i.e., this is not an Open MPI thing; it's an OS/library thing).
<br>
<p>Have you tried removing the -ldl's from your link line?
<br>
<p>Also, is there a reason you list mm.c twice on your compile line?  That seems incorrect.
<br>
<p><span class="quotelev1">&gt; /usr/bin/ld: /usr/lib/gcc/x86_64-linux-gnu/4.8/crtbeginT.o: relocation R_X86_64_32 against `__TMC_END__' can not be used when making a shared object; recompile with -fPIC
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.8/crtbeginT.o: error adding symbols: Bad value
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use openmpi-1.10.2 and Ubuntu 14.04.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What am I doing wrog ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Evelina
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28735.php">http://www.open-mpi.org/community/lists/users/2016/03/28735.php</a>
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
<li><strong>Next message:</strong> <a href="28737.php">Nathan Hjelm: "Re: [OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<li><strong>Previous message:</strong> <a href="28735.php">evelina dumitrescu: "[OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<li><strong>In reply to:</strong> <a href="28735.php">evelina dumitrescu: "[OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28737.php">Nathan Hjelm: "Re: [OMPI users] How to link the statically compiled OpenMPI library ?"</a>
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
