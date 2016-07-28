<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov 11 20:03:16 2005" -->
<!-- isoreceived="20051112010316" -->
<!-- sent="Sat, 12 Nov 2005 02:03:23 +0100" -->
<!-- isosent="20051112010323" -->
<!-- name="Dries Kimpe" -->
<!-- email="Dries.Kimpe_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Tests with current version" -->
<!-- id="43753F5B.90105_at_cs.kuleuven.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20051112004230.41547.qmail_at_web31510.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Dries Kimpe (<em>Dries.Kimpe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-11 20:03:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0320.php">Galen M. Shipman: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Previous message:</strong> <a href="0318.php">Jonathan Day: "[O-MPI users] Tests with current version"</a>
<li><strong>In reply to:</strong> <a href="0318.php">Jonathan Day: "[O-MPI users] Tests with current version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0322.php">Brian Barrett: "Re: [O-MPI users] Tests with current version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem occurs when specifying both
<br>
--enable-static and --enable-shared ...
<br>
<p><p>The following error appears:
<br>
<p>[...]
<br>
-rpath -Wl,/home/lts/work/openmpi/openmpi-1.0rc5/orte/.libs -Wl,--rpath
<br>
-Wl,/home/lts/coolfluid/ompi/lib
<br>
/home/lts/work/openmpi/openmpi-1.0rc5/orte/.libs/liborte.so
<br>
-L/home/lts/work/openmpi/openmpi-1.0rc5/opal/.libs -lm -lutil -lnsl
<br>
-pthread -Wl,-soname -Wl,libmpi.so.0 -o .libs/libmpi.so.0.0.0
<br>
mca/pml/teg/.libs/libmca_pml_teg.a(pml_teg_ptl.o):(.data.rel+0x0):
<br>
multiple definition of `mca_pml_base_ptl_t_class'
<br>
mca/pml/uniq/.libs/libmca_pml_uniq.a(pml_uniq_ptl.o):(.data.rel+0x0):
<br>
first defined here
<br>
/usr/lib/gcc/i686-pc-linux-gnu/3.4.4/../../../../i686-pc-linux-gnu/bin/ld:
<br>
warning: creating a DT_TEXTREL in object.
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [libmpi.la] Fout 1
<br>
make[2]: Leaving directory `/home/lts/work/openmpi/openmpi-1.0rc5/ompi'
<br>
make[1]: *** [all-recursive] Fout 1
<br>
make[1]: Leaving directory `/home/lts/work/openmpi/openmpi-1.0rc5/ompi'
<br>
make: *** [all-recursive] Fout 1
<br>
<p><p>The following configure options were used:
<br>
<p>&nbsp;&nbsp;$ ./configure --prefix=/home/lts/coolfluid/ompi --enable-shared
<br>
--enable-static --with-pic --with-mpi-param-check=always
<br>
<p>Build &amp; make log attached.
<br>
<p>&nbsp;&nbsp;Greetings,
<br>
&nbsp;&nbsp;Dries
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've not determined exactly what triggers it, but the
</span><br>
<span class="quotelev1">&gt; functions in ompi/ompi/mca/pml/pml_teg_ptl.c can clash
</span><br>
<span class="quotelev1">&gt; with functions from ompi/ompi/mca/pml/pml_uniq_ptl.c
</span><br>
<span class="quotelev1">&gt; on compile. I'm guessing that I'm using a combination
</span><br>
<span class="quotelev1">&gt; of compile options that aren't getting tested that
</span><br>
<span class="quotelev1">&gt; often, if I'm the only one noticing this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/openmpi --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt; --enable-progress-threads --with-threads=posix
</span><br>
<span class="quotelev1">&gt; --enable-shared --enable-static --enable-mpi-f77
</span><br>
<span class="quotelev1">&gt; --enable-mpi-f90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could someone verify that this problem is repeatable
</span><br>
<span class="quotelev1">&gt; and not simply a problem at this end?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jonathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		
</span><br>
<span class="quotelev1">&gt; __________________________________ 
</span><br>
<span class="quotelev1">&gt; Yahoo! FareChase: Search multiple travel sites in one click.
</span><br>
<span class="quotelev1">&gt; <a href="http://farechase.yahoo.com">http://farechase.yahoo.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>

<br><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0319/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0319/make.log.bz2">make.log.bz2</a>
</ul>
<!-- attachment="make.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0320.php">Galen M. Shipman: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Previous message:</strong> <a href="0318.php">Jonathan Day: "[O-MPI users] Tests with current version"</a>
<li><strong>In reply to:</strong> <a href="0318.php">Jonathan Day: "[O-MPI users] Tests with current version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0322.php">Brian Barrett: "Re: [O-MPI users] Tests with current version"</a>
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
