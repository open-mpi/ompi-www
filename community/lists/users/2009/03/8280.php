<?
$subject_val = "Re: [OMPI users] libnuma under ompi 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 09:37:10 2009" -->
<!-- isoreceived="20090304143710" -->
<!-- sent="Wed, 4 Mar 2009 09:37:04 -0500" -->
<!-- isosent="20090304143704" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libnuma under ompi 1.3" -->
<!-- id="F8071E49-7560-453E-B667-9362096DA361_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1236135631.5834.123.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] libnuma under ompi 1.3<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 09:37:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8281.php">Jeff Squyres: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="8279.php">Jeff Squyres: "Re: [OMPI users] metahosts (like in MP-MPICH)"</a>
<li><strong>In reply to:</strong> <a href="8275.php">Terry Frankcombe: "[OMPI users] libnuma under ompi 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8285.php">Prentice Bisbal: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Reply:</strong> <a href="8285.php">Prentice Bisbal: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm; that's odd.
<br>
<p>Is icc / icpc able to find libnuma with no -L, but ifort is unable to  
<br>
find it without a -L?
<br>
<p>On Mar 3, 2009, at 10:00 PM, Terry Frankcombe wrote:
<br>
<p><span class="quotelev1">&gt; Having just downloaded and installed Open MPI 1.3 with ifort and  
</span><br>
<span class="quotelev1">&gt; gcc, I
</span><br>
<span class="quotelev1">&gt; merrily went off to compile my application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my final link with mpif90 I get the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lnuma
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Adding --showme reveals that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -I/home/terry/bin/Local/include -pthread -I/home/terry/bin/Local/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is added to the compile early in the aggregated ifort command, and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -L/home/terry/bin/Local/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte
</span><br>
<span class="quotelev1">&gt; -lopen-pal -lpbs -lnuma -ldl -Wl,--export-dynamic -lnsl -lutil -lm - 
</span><br>
<span class="quotelev1">&gt; ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is added to the end.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I note than when compiling Open MPI -lnuma was visible in the gcc
</span><br>
<span class="quotelev1">&gt; arguments, with no added -L.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On this system libnuma.so exists in /usr/lib64.  My (somewhat long!)
</span><br>
<span class="quotelev1">&gt; configure command was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --enable-static --disable-shared
</span><br>
<span class="quotelev1">&gt; --prefix=/home/terry/bin/Local --enable-picky --disable-heterogeneous
</span><br>
<span class="quotelev1">&gt; --without-slurm --without-alps --without-xgrid --without-sge
</span><br>
<span class="quotelev1">&gt; --without-loadleveler --without-lsf F77=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should mpif90 have bundled a -L/usr/lib64 in there somewhere?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Terry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dr. Terry Frankcombe
</span><br>
<span class="quotelev1">&gt; Research School of Chemistry, Australian National University
</span><br>
<span class="quotelev1">&gt; Ph: (+61) 0417 163 509    Skype: terry.frankcombe
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8281.php">Jeff Squyres: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="8279.php">Jeff Squyres: "Re: [OMPI users] metahosts (like in MP-MPICH)"</a>
<li><strong>In reply to:</strong> <a href="8275.php">Terry Frankcombe: "[OMPI users] libnuma under ompi 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8285.php">Prentice Bisbal: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Reply:</strong> <a href="8285.php">Prentice Bisbal: "Re: [OMPI users] libnuma under ompi 1.3"</a>
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
