<?
$subject_val = "Re: [OMPI users] Openpi 1.4.1 PGI 10.2.1 libpgnuma issue";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 25 06:41:38 2010" -->
<!-- isoreceived="20100425104138" -->
<!-- sent="Sun, 25 Apr 2010 12:41:05 +0200" -->
<!-- isosent="20100425104105" -->
<!-- name="Francesco Iannone" -->
<!-- email="francesco.iannone_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openpi 1.4.1 PGI 10.2.1 libpgnuma issue" -->
<!-- id="C7F9E8E3.EDAC%francesco.iannone_at_frascati.enea.it" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C7F7AD19.ED87%francesco.iannone_at_frascati.enea.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openpi 1.4.1 PGI 10.2.1 libpgnuma issue<br>
<strong>From:</strong> Francesco Iannone (<em>francesco.iannone_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-25 06:41:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12768.php">Sylvestre Ledru: "[OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<li><strong>Previous message:</strong> <a href="12766.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>In reply to:</strong> <a href="12759.php">Francesco Iannone: "[OMPI users]  Openpi 1.4.1 PGI 10.2.1 libpgnuma issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry I made a mistake to insert into zipped files.
<br>
<p>So I send it once again.
<br>
<p>regards
<br>
<p><p>On 23/04/10 20.01, &quot;Francesco Iannone&quot; &lt;francesco.iannone_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Dear all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I rebuilt openmpi 1.4.1 with PGI 10.2.1 enabling the libpgnuma.a of PGI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Linux kernel 2.6.18-164.11.1.el5 #1 SMP Sat Jan 23 21:22:33 CET 2010 x86_64
</span><br>
<span class="quotelev1">&gt; x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have the follow problem to rebuild the package considering libnuma.a as
</span><br>
<span class="quotelev1">&gt; symbolic link to PGI NUMA library libpgnuma.a:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CC   --mode=link pgcc  -O -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -export-dynamic   -o opal_wrapper opal_wrapper.o ../../../opal/libopen-pal.la
</span><br>
<span class="quotelev1">&gt; -lnsl -lutil  -lpthread
</span><br>
<span class="quotelev1">&gt; libtool: link: pgcc -O -DNDEBUG -o .libs/opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev1">&gt; -Wl,--export-dynamic  ../../../opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev1">&gt; -L/afs/efda-itm.eu/project/compilers/pgi10.2/linux86-64/2010/libso/ -lnuma
</span><br>
<span class="quotelev1">&gt; -ldl -lnsl -lutil -lpthread -Wl,-rpath -Wl,/opt/mpi/openmpi-1.4.1/pgi/lib
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `mbind'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `numa_setlocal_memory'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `numa_set_strict'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/afs/efda-itm.eu/project/mpi/openmpi-1.4.1_build_pgi/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/afs/efda-itm.eu/project/mpi/openmpi-1.4.1_build_pgi/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached you find the output of the configure and make zipped.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could somebody help me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dr. Francesco Iannone
</span><br>
<span class="quotelev1">&gt; Associazione EURATOM-ENEA sulla Fusione
</span><br>
<span class="quotelev1">&gt; C.R. ENEA Frascati
</span><br>
<span class="quotelev1">&gt; Via E. Fermi 45
</span><br>
<span class="quotelev1">&gt; 00044 Frascati (Roma) Italy
</span><br>
<span class="quotelev1">&gt; phone 00-39-06-9400-5124
</span><br>
<span class="quotelev1">&gt; fax 00-39-06-9400-5524
</span><br>
<span class="quotelev1">&gt; mailto:francesco.iannone_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.afs.enea.it/iannone">http://www.afs.enea.it/iannone</a>
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
<p>Dr. Francesco Iannone
<br>
Associazione EURATOM-ENEA sulla Fusione
<br>
C.R. ENEA Frascati
<br>
Via E. Fermi 45
<br>
00044 Frascati (Roma) Italy
<br>
phone 00-39-06-9400-5124
<br>
fax 00-39-06-9400-5524
<br>
mailto:francesco.iannone_at_[hidden]
<br>
<a href="http://www.afs.enea.it/iannone">http://www.afs.enea.it/iannone</a>
<br>
<p><p><p>
<p><p>
<br><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12767/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>video/x-flv attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12767/build.tar.gz">build.tar.gz</a>
</ul>
<!-- attachment="build.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12768.php">Sylvestre Ledru: "[OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<li><strong>Previous message:</strong> <a href="12766.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>In reply to:</strong> <a href="12759.php">Francesco Iannone: "[OMPI users]  Openpi 1.4.1 PGI 10.2.1 libpgnuma issue"</a>
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
