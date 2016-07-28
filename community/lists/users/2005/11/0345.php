<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 15 11:44:00 2005" -->
<!-- isoreceived="20051115164400" -->
<!-- sent="Tue, 15 Nov 2005 08:43:58 -0800" -->
<!-- isosent="20051115164358" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors" -->
<!-- id="de7cd3a86b5a3e18ca88a83925c587ca_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051114183023.GA20326_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-15 11:43:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0346.php">Jeff Squyres: "Re: [O-MPI users] HPL and TCP"</a>
<li><strong>Previous message:</strong> <a href="0344.php">Allan Menezes: "[O-MPI users] hpl and tcp"</a>
<li><strong>In reply to:</strong> <a href="0335.php">Daryl W. Grunau: "[O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0357.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Daryl --
<br>
<p>I don't think that anyone directly replied to you, but I saw some 
<br>
commits fixing this yesterday (actually, they were already on the 
<br>
trunk; we forgot to bring them over to the v1.0 branch).  Could you 
<br>
give this morning's nightly snapshot tarball a whirl?
<br>
<p><p>On Nov 14, 2005, at 10:30 AM, Daryl W. Grunau wrote:
<br>
<p><span class="quotelev1">&gt; Hi, I'm trying to compile rc6 on my BProc cluster and failed to build 
</span><br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev1">&gt; follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/usr/src/redhat/BUILD/openmpi-1.0rc6/orte/mca/pls/bproc'
</span><br>
<span class="quotelev1">&gt; depbase=`echo pls_bproc.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`; \
</span><br>
<span class="quotelev1">&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc 
</span><br>
<span class="quotelev1">&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../include -I../../../../include  
</span><br>
<span class="quotelev1">&gt; -I/usr/src/redhat/BUILD/openmpi-1.0rc6/src/include  
</span><br>
<span class="quotelev1">&gt; -DORTE_BINDIR=&quot;\&quot;/opt/OpenMPI/openmpi-1.0rc6/ib/bin\&quot;&quot; 
</span><br>
<span class="quotelev1">&gt; -I../../../../include -I../../../.. -I../../../.. 
</span><br>
<span class="quotelev1">&gt; -I../../../../include -I../../../../opal -I../../../../orte 
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi    -DNDEBUG -O2 -g -pipe -m64 -fno-strict-aliasing 
</span><br>
<span class="quotelev1">&gt; -pthread -MT pls_bproc.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o 
</span><br>
<span class="quotelev1">&gt; pls_bproc.lo pls_bproc.c; \
</span><br>
<span class="quotelev1">&gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f &quot;$depbase.Tpo&quot;; 
</span><br>
<span class="quotelev1">&gt; exit 1; fi
</span><br>
<span class="quotelev1">&gt;  gcc -DHAVE_CONFIG_H -I. -I. -I../../../../include 
</span><br>
<span class="quotelev1">&gt; -I../../../../include 
</span><br>
<span class="quotelev1">&gt; -I/usr/src/redhat/BUILD/openmpi-1.0rc6/src/include 
</span><br>
<span class="quotelev1">&gt; -DORTE_BINDIR=\&quot;/opt/OpenMPI/openmpi-1.0rc6/ib/bin\&quot; 
</span><br>
<span class="quotelev1">&gt; -I../../../../include -I../../../.. -I../../../.. 
</span><br>
<span class="quotelev1">&gt; -I../../../../include -I../../../../opal -I../../../../orte 
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi -DNDEBUG -O2 -g -pipe -m64 -fno-strict-aliasing 
</span><br>
<span class="quotelev1">&gt; -pthread -MT pls_bproc.lo -MD -MP -MF .deps/pls_bproc.Tpo -c 
</span><br>
<span class="quotelev1">&gt; pls_bproc.c -o pls_bproc.o
</span><br>
<span class="quotelev1">&gt; pls_bproc.c: In function `orte_pls_bproc_node_array':
</span><br>
<span class="quotelev1">&gt; pls_bproc.c:122: error: structure has no member named `node_name'
</span><br>
<span class="quotelev1">&gt; pls_bproc.c:123: error: structure has no member named `node_name'
</span><br>
<span class="quotelev1">&gt; pls_bproc.c:140: error: structure has no member named `node_name'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [pls_bproc.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/usr/src/redhat/BUILD/openmpi-1.0rc6/orte/mca/pls/bproc'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/usr/src/redhat/BUILD/openmpi-1.0rc6/orte/mca/pls'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/usr/src/redhat/BUILD/openmpi-1.0rc6/orte/mca'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/usr/src/redhat/BUILD/openmpi-1.0rc6/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the full configure line (from config.log):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ ./configure --build=x86_64-redhat-linux-gnu 
</span><br>
<span class="quotelev1">&gt; --host=x86_64-redhat-linux-gnu --target=x86_64-redhat-linux-gnu 
</span><br>
<span class="quotelev1">&gt; --program-prefix= --prefix=/opt/OpenMPI/openmpi-1.0rc6/ib 
</span><br>
<span class="quotelev1">&gt; --exec-prefix=/opt/OpenMPI/openmpi-1.0rc6/ib 
</span><br>
<span class="quotelev1">&gt; --bindir=/opt/OpenMPI/openmpi-1.0rc6/ib/bin 
</span><br>
<span class="quotelev1">&gt; --sbindir=/opt/OpenMPI/openmpi-1.0rc6/ib/sbin --sysconfdir=/etc 
</span><br>
<span class="quotelev1">&gt; --datadir=/opt/OpenMPI/openmpi-1.0rc6/ib/share 
</span><br>
<span class="quotelev1">&gt; --includedir=/opt/OpenMPI/openmpi-1.0rc6/ib/include 
</span><br>
<span class="quotelev1">&gt; --libdir=/opt/OpenMPI/openmpi-1.0rc6/ib/lib64 
</span><br>
<span class="quotelev1">&gt; --libexecdir=/opt/OpenMPI/openmpi-1.0rc6/ib/libexec 
</span><br>
<span class="quotelev1">&gt; --localstatedir=/var 
</span><br>
<span class="quotelev1">&gt; --sharedstatedir=/opt/OpenMPI/openmpi-1.0rc6/ib/com 
</span><br>
<span class="quotelev1">&gt; --mandir=/usr/share/man --infodir=/usr/share/info 
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/OpenMPI/openmpi-1.0rc6/ib 
</span><br>
<span class="quotelev1">&gt; --sysconfdir=/opt/OpenMPI/openmpi-1.0rc6/ib/etc --disable-shared 
</span><br>
<span class="quotelev1">&gt; --enable-static --with-bproc 
</span><br>
<span class="quotelev1">&gt; --with-mvapi=/opt/IB/ibgd-1.8.0/driver/infinihost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any advice appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daryl
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0346.php">Jeff Squyres: "Re: [O-MPI users] HPL and TCP"</a>
<li><strong>Previous message:</strong> <a href="0344.php">Allan Menezes: "[O-MPI users] hpl and tcp"</a>
<li><strong>In reply to:</strong> <a href="0335.php">Daryl W. Grunau: "[O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0357.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
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
