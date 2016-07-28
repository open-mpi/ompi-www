<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 14 13:30:28 2005" -->
<!-- isoreceived="20051114183028" -->
<!-- sent="Mon, 14 Nov 2005 11:30:23 -0700" -->
<!-- isosent="20051114183023" -->
<!-- name="Daryl W. Grunau" -->
<!-- email="dwg_at_[hidden]" -->
<!-- subject="[O-MPI users] OMPI 1.0 rc6 --with-bproc errors" -->
<!-- id="20051114183023.GA20326_at_lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Daryl W. Grunau (<em>dwg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-14 13:30:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0336.php">Allan Menezes: "[O-MPI users] HPL and TCP"</a>
<li><strong>Previous message:</strong> <a href="0334.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0345.php">Jeff Squyres: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Reply:</strong> <a href="0345.php">Jeff Squyres: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Maybe reply:</strong> <a href="0357.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Maybe reply:</strong> <a href="0367.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I'm trying to compile rc6 on my BProc cluster and failed to build as
<br>
follows:
<br>
<p>make[4]: Entering directory `/usr/src/redhat/BUILD/openmpi-1.0rc6/orte/mca/pls/bproc'
<br>
depbase=`echo pls_bproc.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`; \
<br>
if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -DHAVE_CONFIG_H -I. -I. -I../../../../include -I../../../../include  -I/usr/src/redhat/BUILD/openmpi-1.0rc6/src/include  -DORTE_BINDIR=&quot;\&quot;/opt/OpenMPI/openmpi-1.0rc6/ib/bin\&quot;&quot; -I../../../../include -I../../../.. -I../../../.. -I../../../../include -I../../../../opal -I../../../../orte -I../../../../ompi    -DNDEBUG -O2 -g -pipe -m64 -fno-strict-aliasing -pthread -MT pls_bproc.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o pls_bproc.lo pls_bproc.c; \
<br>
then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f &quot;$depbase.Tpo&quot;; exit 1; fi
<br>
&nbsp;gcc -DHAVE_CONFIG_H -I. -I. -I../../../../include -I../../../../include -I/usr/src/redhat/BUILD/openmpi-1.0rc6/src/include -DORTE_BINDIR=\&quot;/opt/OpenMPI/openmpi-1.0rc6/ib/bin\&quot; -I../../../../include -I../../../.. -I../../../.. -I../../../../include -I../../../../opal -I../../../../orte -I../../../../ompi -DNDEBUG -O2 -g -pipe -m64 -fno-strict-aliasing -pthread -MT pls_bproc.lo -MD -MP -MF .deps/pls_bproc.Tpo -c pls_bproc.c -o pls_bproc.o
<br>
pls_bproc.c: In function `orte_pls_bproc_node_array':
<br>
pls_bproc.c:122: error: structure has no member named `node_name'
<br>
pls_bproc.c:123: error: structure has no member named `node_name'
<br>
pls_bproc.c:140: error: structure has no member named `node_name'
<br>
make[4]: *** [pls_bproc.lo] Error 1
<br>
make[4]: Leaving directory `/usr/src/redhat/BUILD/openmpi-1.0rc6/orte/mca/pls/bproc'
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[3]: Leaving directory `/usr/src/redhat/BUILD/openmpi-1.0rc6/orte/mca/pls'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/usr/src/redhat/BUILD/openmpi-1.0rc6/orte/mca'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/usr/src/redhat/BUILD/openmpi-1.0rc6/orte'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Here's the full configure line (from config.log):
<br>
<p>&nbsp;&nbsp;$ ./configure --build=x86_64-redhat-linux-gnu --host=x86_64-redhat-linux-gnu --target=x86_64-redhat-linux-gnu --program-prefix= --prefix=/opt/OpenMPI/openmpi-1.0rc6/ib --exec-prefix=/opt/OpenMPI/openmpi-1.0rc6/ib --bindir=/opt/OpenMPI/openmpi-1.0rc6/ib/bin --sbindir=/opt/OpenMPI/openmpi-1.0rc6/ib/sbin --sysconfdir=/etc --datadir=/opt/OpenMPI/openmpi-1.0rc6/ib/share --includedir=/opt/OpenMPI/openmpi-1.0rc6/ib/include --libdir=/opt/OpenMPI/openmpi-1.0rc6/ib/lib64 --libexecdir=/opt/OpenMPI/openmpi-1.0rc6/ib/libexec --localstatedir=/var --sharedstatedir=/opt/OpenMPI/openmpi-1.0rc6/ib/com --mandir=/usr/share/man --infodir=/usr/share/info --prefix=/opt/OpenMPI/openmpi-1.0rc6/ib --sysconfdir=/opt/OpenMPI/openmpi-1.0rc6/ib/etc --disable-shared --enable-static --with-bproc --with-mvapi=/opt/IB/ibgd-1.8.0/driver/infinihost
<br>
<p><p>Any advice appreciated!
<br>
<p>Daryl
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0336.php">Allan Menezes: "[O-MPI users] HPL and TCP"</a>
<li><strong>Previous message:</strong> <a href="0334.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0345.php">Jeff Squyres: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Reply:</strong> <a href="0345.php">Jeff Squyres: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Maybe reply:</strong> <a href="0357.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Maybe reply:</strong> <a href="0367.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
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
