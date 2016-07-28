<?
$subject_val = "Re: [OMPI users] libnuma under ompi 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 11:39:51 2009" -->
<!-- isoreceived="20090304163951" -->
<!-- sent="Wed, 4 Mar 2009 09:39:41 -0700" -->
<!-- isosent="20090304163941" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libnuma under ompi 1.3" -->
<!-- id="4DC4D618-423C-4D2D-A723-CEBE1AB524A0_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49AEA046.80507_at_ias.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 11:39:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8290.php">Jeff Squyres: "Re: [OMPI users] metahosts (like in MP-MPICH)"</a>
<li><strong>Previous message:</strong> <a href="8288.php">Yury Tarasievich: "Re: [OMPI users] metahosts (like in MP-MPICH)"</a>
<li><strong>In reply to:</strong> <a href="8285.php">Prentice Bisbal: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8284.php">Prentice Bisbal: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Problem is that some systems install both 32 and 64 bit support, and  
<br>
build OMPI both ways. So we really can't just figure it out without  
<br>
some help.
<br>
<p>At our location, we simply take care to specify the -L flag to point  
<br>
to the correct version so we avoid any confusion.
<br>
<p><p>On Mar 4, 2009, at 8:37 AM, Prentice Bisbal wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See my reply to Dr. Frankcombe's original e-mail. I've experienced  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; same problem with the PGI compilers, so this isn't limited to just the
</span><br>
<span class="quotelev1">&gt; Intel compilers. I provided a fix, but I think OpenMPI should be  
</span><br>
<span class="quotelev1">&gt; able to
</span><br>
<span class="quotelev1">&gt; figure out and add the correct linker flags during the
</span><br>
<span class="quotelev1">&gt; configuration/build stage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hmm; that's odd.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is icc / icpc able to find libnuma with no -L, but ifort is unable to
</span><br>
<span class="quotelev2">&gt;&gt; find it without a -L?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 3, 2009, at 10:00 PM, Terry Frankcombe wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Having just downloaded and installed Open MPI 1.3 with ifort and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; merrily went off to compile my application.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my final link with mpif90 I get the error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/ld: cannot find -lnuma
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Adding --showme reveals that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/home/terry/bin/Local/include -pthread -I/home/terry/bin/Local/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is added to the compile early in the aggregated ifort command, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/home/terry/bin/Local/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lopen-pal -lpbs -lnuma -ldl -Wl,--export-dynamic -lnsl -lutil -lm  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -ldl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is added to the end.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I note than when compiling Open MPI -lnuma was visible in the gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arguments, with no added -L.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On this system libnuma.so exists in /usr/lib64.  My (somewhat long!)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure command was
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --enable-static --disable-shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=/home/terry/bin/Local --enable-picky --disable- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; heterogeneous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --without-slurm --without-alps --without-xgrid --without-sge
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --without-loadleveler --without-lsf F77=ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Should mpif90 have bundled a -L/usr/lib64 in there somewhere?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Terry
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dr. Terry Frankcombe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Research School of Chemistry, Australian National University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph: (+61) 0417 163 509    Skype: terry.frankcombe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Prentice
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8290.php">Jeff Squyres: "Re: [OMPI users] metahosts (like in MP-MPICH)"</a>
<li><strong>Previous message:</strong> <a href="8288.php">Yury Tarasievich: "Re: [OMPI users] metahosts (like in MP-MPICH)"</a>
<li><strong>In reply to:</strong> <a href="8285.php">Prentice Bisbal: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8284.php">Prentice Bisbal: "Re: [OMPI users] libnuma under ompi 1.3"</a>
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
