<?
$subject_val = "Re: [OMPI users] libnuma under ompi 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 10:37:46 2009" -->
<!-- isoreceived="20090304153746" -->
<!-- sent="Wed, 04 Mar 2009 10:37:42 -0500" -->
<!-- isosent="20090304153742" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libnuma under ompi 1.3" -->
<!-- id="49AEA046.80507_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F8071E49-7560-453E-B667-9362096DA361_at_cisco.com" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 10:37:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8286.php">Mattijs Janssens: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Previous message:</strong> <a href="8284.php">Prentice Bisbal: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>In reply to:</strong> <a href="8280.php">Jeff Squyres: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8289.php">Ralph Castain: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Reply:</strong> <a href="8289.php">Ralph Castain: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>See my reply to Dr. Frankcombe's original e-mail. I've experienced this
<br>
same problem with the PGI compilers, so this isn't limited to just the
<br>
Intel compilers. I provided a fix, but I think OpenMPI should be able to
<br>
figure out and add the correct linker flags during the
<br>
configuration/build stage.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Hmm; that's odd.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is icc / icpc able to find libnuma with no -L, but ifort is unable to
</span><br>
<span class="quotelev1">&gt; find it without a -L?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 3, 2009, at 10:00 PM, Terry Frankcombe wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Having just downloaded and installed Open MPI 1.3 with ifort and gcc, I
</span><br>
<span class="quotelev2">&gt;&gt; merrily went off to compile my application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my final link with mpif90 I get the error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: cannot find -lnuma
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Adding --showme reveals that
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -I/home/terry/bin/Local/include -pthread -I/home/terry/bin/Local/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; is added to the compile early in the aggregated ifort command, and
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -L/home/terry/bin/Local/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte
</span><br>
<span class="quotelev2">&gt;&gt; -lopen-pal -lpbs -lnuma -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; is added to the end.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I note than when compiling Open MPI -lnuma was visible in the gcc
</span><br>
<span class="quotelev2">&gt;&gt; arguments, with no added -L.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On this system libnuma.so exists in /usr/lib64.  My (somewhat long!)
</span><br>
<span class="quotelev2">&gt;&gt; configure command was
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-static --disable-shared
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/home/terry/bin/Local --enable-picky --disable-heterogeneous
</span><br>
<span class="quotelev2">&gt;&gt; --without-slurm --without-alps --without-xgrid --without-sge
</span><br>
<span class="quotelev2">&gt;&gt; --without-loadleveler --without-lsf F77=ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Should mpif90 have bundled a -L/usr/lib64 in there somewhere?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Terry
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Terry Frankcombe
</span><br>
<span class="quotelev2">&gt;&gt; Research School of Chemistry, Australian National University
</span><br>
<span class="quotelev2">&gt;&gt; Ph: (+61) 0417 163 509    Skype: terry.frankcombe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8286.php">Mattijs Janssens: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Previous message:</strong> <a href="8284.php">Prentice Bisbal: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>In reply to:</strong> <a href="8280.php">Jeff Squyres: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8289.php">Ralph Castain: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Reply:</strong> <a href="8289.php">Ralph Castain: "Re: [OMPI users] libnuma under ompi 1.3"</a>
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
