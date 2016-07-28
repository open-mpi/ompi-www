<?
$subject_val = "[OMPI users] /usr/bin/ld: skipping incompatible ......";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  8 15:13:01 2013" -->
<!-- isoreceived="20130508191301" -->
<!-- sent="Wed, 8 May 2013 15:12:55 -0400" -->
<!-- isosent="20130508191255" -->
<!-- name="Matteo Parsani" -->
<!-- email="parsani.matteo_at_[hidden]" -->
<!-- subject="[OMPI users] /usr/bin/ld: skipping incompatible ......" -->
<!-- id="CAMZtdMt+ZU6c8mzgBs1=AYv_bmirxjBrPXx0QAxAeVgF-eDe+w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] /usr/bin/ld: skipping incompatible ......<br>
<strong>From:</strong> Matteo Parsani (<em>parsani.matteo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-08 15:12:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21886.php">Bob Ilgner: "[OMPI users] Fwd: confirm f86638f44cf1158fef247b0df762b406d12ec202"</a>
<li><strong>Previous message:</strong> <a href="21884.php">Andreas Sch&#228;fer: "Re: [OMPI users] MPI for real time analysis"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21888.php">Jeff Squyres (jsquyres): "Re: [OMPI users] /usr/bin/ld: skipping incompatible ......"</a>
<li><strong>Reply:</strong> <a href="21888.php">Jeff Squyres (jsquyres): "Re: [OMPI users] /usr/bin/ld: skipping incompatible ......"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
I have recently installed gcc 4.7.3 on my cent OS 6.4. Moreover, I have
<br>
compiled openmpi 1.6.4 with the above compiler.
<br>
<p>My LD_LIBRARY_PATH is set correctly and it points to both /lib and /lib64
<br>
where libgfortran.so and libgcc_s.so for 32 and 64 bits are located.
<br>
<p>Every time I compile a Fortran, a C or a C++ source code with the wrapper
<br>
mpif90, mpicc or mpicx I get this warning:
<br>
<p>/usr/bin/ld: skipping incompatible /scratch/home0/pmatteo
<br>
/research/lib_install/lib/libgfortran.so when searching for -lgfortran
<br>
<p>or
<br>
<p>/usr/bin/ld: skipping incompatible /scratch/home0/pmatteo
<br>
/research/lib_install/lib/libgcc_s.so when searching for -lgcc_s
<br>
<p>I have switch my LD_LIBRARY_PATH as suggested in this thread:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/02/8067.php">http://www.open-mpi.org/community/lists/users/2009/02/8067.php</a>
<br>
<p>but nothing change.
<br>
<p>Any idea what I am doing wrong?
<br>
<p>I know that it is just a warning but I would like to avoid it.
<br>
<p>Thank you.
<br>
<p><p><pre>
-- 
Matteo
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21885/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21886.php">Bob Ilgner: "[OMPI users] Fwd: confirm f86638f44cf1158fef247b0df762b406d12ec202"</a>
<li><strong>Previous message:</strong> <a href="21884.php">Andreas Sch&#228;fer: "Re: [OMPI users] MPI for real time analysis"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21888.php">Jeff Squyres (jsquyres): "Re: [OMPI users] /usr/bin/ld: skipping incompatible ......"</a>
<li><strong>Reply:</strong> <a href="21888.php">Jeff Squyres (jsquyres): "Re: [OMPI users] /usr/bin/ld: skipping incompatible ......"</a>
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
