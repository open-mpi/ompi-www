<?
$subject_val = "[OMPI users] How to link the statically compiled OpenMPI library ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 10:54:34 2016" -->
<!-- isoreceived="20160317145434" -->
<!-- sent="Thu, 17 Mar 2016 15:54:33 +0100" -->
<!-- isosent="20160317145433" -->
<!-- name="evelina dumitrescu" -->
<!-- email="evelina.a.dumitrescu_at_[hidden]" -->
<!-- subject="[OMPI users] How to link the statically compiled OpenMPI library ?" -->
<!-- id="CALD+GRkcUg7BqvVmt40mA34NXUz_WkkQnQdi=GBwewDSf23sYQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] How to link the statically compiled OpenMPI library ?<br>
<strong>From:</strong> evelina dumitrescu (<em>evelina.a.dumitrescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 10:54:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<li><strong>Previous message:</strong> <a href="28734.php">dpchoudh .: "Re: [OMPI users] Issue about cm PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<li><strong>Reply:</strong> <a href="28736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<li><strong>Reply:</strong> <a href="28737.php">Nathan Hjelm: "Re: [OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello,
<br>
<p>I unsuccessfully tried to link the statically compiled OpenMPI library.
<br>
I used for compilation:
<br>
<p>./configure --enable-static -disable-shared
<br>
make -j 4
<br>
make install
<br>
<p>When I try to link the library to my executable, I get the following error:
<br>
<p>gcc mm.c --static -I/usr/local/include/openmpi mm.c -o mm.out
<br>
-L/usr/local/lib -L/usr/local/lib/openmpi -lmpi -lopen-rte -lopen-pal
<br>
-Wl,--whole-archive -libverbs  -Wl,--no-whole-archive -lrt
<br>
-Wl,--export-dynamic -Wl,-Bdynamic -ldl -lc -lnsl -lutil -lm -ldl -fPIE
<br>
-pie
<br>
<p>/usr/bin/ld: /usr/lib/gcc/x86_64-linux-gnu/4.8/crtbeginT.o: relocation
<br>
R_X86_64_32 against `__TMC_END__' can not be used when making a shared
<br>
object; recompile with -fPIC
<br>
/usr/lib/gcc/x86_64-linux-gnu/4.8/crtbeginT.o: error adding symbols: Bad
<br>
value
<br>
collect2: error: ld returned 1 exit status
<br>
<p>I use openmpi-1.10.2 and Ubuntu 14.04.
<br>
<p>What am I doing wrog ?
<br>
<p>Evelina
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28735/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<li><strong>Previous message:</strong> <a href="28734.php">dpchoudh .: "Re: [OMPI users] Issue about cm PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<li><strong>Reply:</strong> <a href="28736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<li><strong>Reply:</strong> <a href="28737.php">Nathan Hjelm: "Re: [OMPI users] How to link the statically compiled OpenMPI library ?"</a>
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
