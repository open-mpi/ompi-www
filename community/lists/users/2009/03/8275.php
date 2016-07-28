<?
$subject_val = "[OMPI users] libnuma under ompi 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 22:00:43 2009" -->
<!-- isoreceived="20090304030043" -->
<!-- sent="Wed, 04 Mar 2009 14:00:31 +1100" -->
<!-- isosent="20090304030031" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="[OMPI users] libnuma under ompi 1.3" -->
<!-- id="1236135631.5834.123.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> [OMPI users] libnuma under ompi 1.3<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-03 22:00:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8276.php">Nathan Baca: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="8274.php">Brian Dobbins: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8280.php">Jeff Squyres: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Reply:</strong> <a href="8280.php">Jeff Squyres: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Reply:</strong> <a href="8284.php">Prentice Bisbal: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Reply:</strong> <a href="8292.php">Joshua Bernstein: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Having just downloaded and installed Open MPI 1.3 with ifort and gcc, I
<br>
merrily went off to compile my application.
<br>
<p>In my final link with mpif90 I get the error:
<br>
<p>/usr/bin/ld: cannot find -lnuma
<br>
<p>Adding --showme reveals that
<br>
<p>-I/home/terry/bin/Local/include -pthread -I/home/terry/bin/Local/lib
<br>
<p>is added to the compile early in the aggregated ifort command, and 
<br>
<p>-L/home/terry/bin/Local/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte
<br>
-lopen-pal -lpbs -lnuma -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
<br>
<p>is added to the end.
<br>
<p>I note than when compiling Open MPI -lnuma was visible in the gcc
<br>
arguments, with no added -L.
<br>
<p>On this system libnuma.so exists in /usr/lib64.  My (somewhat long!)
<br>
configure command was
<br>
<p>./configure --enable-static --disable-shared
<br>
--prefix=/home/terry/bin/Local --enable-picky --disable-heterogeneous
<br>
--without-slurm --without-alps --without-xgrid --without-sge
<br>
--without-loadleveler --without-lsf F77=ifort
<br>
<p><p>Should mpif90 have bundled a -L/usr/lib64 in there somewhere?
<br>
<p>Regards
<br>
Terry
<br>
<p><p><pre>
-- 
Dr. Terry Frankcombe
Research School of Chemistry, Australian National University
Ph: (+61) 0417 163 509    Skype: terry.frankcombe
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8276.php">Nathan Baca: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="8274.php">Brian Dobbins: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8280.php">Jeff Squyres: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Reply:</strong> <a href="8280.php">Jeff Squyres: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Reply:</strong> <a href="8284.php">Prentice Bisbal: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Reply:</strong> <a href="8292.php">Joshua Bernstein: "Re: [OMPI users] libnuma under ompi 1.3"</a>
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
