<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  3 11:36:03 2006" -->
<!-- isoreceived="20060103163603" -->
<!-- sent="Tue, 3 Jan 2006 11:35:57 -0500" -->
<!-- isosent="20060103163557" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0" -->
<!-- id="A03314D1-B133-483C-944B-84059BF6A6D4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43B8E9C4.7000008_at_nchc.org.tw" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-03 11:35:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0463.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0461.php">Enzo: "Re: [O-MPI users] Rendezvous Question"</a>
<li><strong>In reply to:</strong> <a href="0456.php">Jyh-Shyong Ho: "[O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0481.php">Jyh-Shyong Ho: "Re: [O-MPI users] OpenMPI 1.0.1 with gcc-4.0.2"</a>
<li><strong>Reply:</strong> <a href="0481.php">Jyh-Shyong Ho: "Re: [O-MPI users] OpenMPI 1.0.1 with gcc-4.0.2"</a>
<li><strong>Reply:</strong> <a href="0482.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 2, 2006, at 3:52 AM, Jyh-Shyong Ho wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to install OpenMPI 1.0.1 on my Athlon X2 computer  
</span><br>
<span class="quotelev1">&gt; running SuSE10.0,
</span><br>
<span class="quotelev1">&gt; the installation failed when I included --with-tm=/opt/torque  
</span><br>
<span class="quotelev1">&gt; option with the
</span><br>
<span class="quotelev1">&gt; error message:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; gcc -shared  .libs/pls_tm_component.o .libs/pls_tm_module.o  -Wl,-- 
</span><br>
<span class="quotelev1">&gt; rpath -Wl,/home/c00jsh00/openmpi-1.0.1/orte/.libs -Wl,--rpath -Wl,/ 
</span><br>
<span class="quotelev1">&gt; home/c00jsh00/openmpi-1.0.1/opal/.libs -Wl,--rpath -Wl,/opt/openmpi/ 
</span><br>
<span class="quotelev1">&gt; lib -L/opt/torque/lib -lpbs /home/c00jsh00/openmpi-1.0.1/orte/.libs/ 
</span><br>
<span class="quotelev1">&gt; liborte.so -L/home/c00jsh00/openmpi-1.0.1/opal/.libs /home/c00jsh00/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.0.1/opal/.libs/libopal.so -lm -lutil -lnsl  -pthread -Wl,- 
</span><br>
<span class="quotelev1">&gt; soname -Wl,mca_pls_tm.so -o .libs/mca_pls_tm.so
</span><br>
<span class="quotelev1">&gt; /usr/lib64/gcc/x86_64-suse-linux/4.0.2/../../../../x86_64-suse- 
</span><br>
<span class="quotelev1">&gt; linux/bin/ld: /opt/torque/lib/libpbs.a(tm.o): relocation  
</span><br>
<span class="quotelev1">&gt; R_X86_64_32S against `a local symbol' can not be used when making a  
</span><br>
<span class="quotelev1">&gt; shared object; recompile with -fPIC
</span><br>
<span class="quotelev1">&gt; /opt/torque/lib/libpbs.a: could not read symbols: Bad value
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My TORQUE is 2.0.0p4, the latest version. Any hint?
</span><br>
<p>The problem is that Torque (and all the PBS derivatives I've seen)  
<br>
only provide static libraries and we are trying to build a shared  
<br>
library linked against those static libraries.  This happens to work  
<br>
for x86 code, but not for x86_64 code.  Unfortunately, the only  
<br>
solution at this time is to build Open MPI as static libraries with  
<br>
the configure options &quot;--enable-static --disable-shared&quot;.
<br>
<p>With a couple of changes to the build system, we should be able to  
<br>
allow the TM component to be built as part of libmpi.so (as opposed  
<br>
to a dynamically opened shared object), but that will not presently  
<br>
work with Open MPI 1.0.1 (or the upcoming 1.0.2 release).  Of course,  
<br>
the easiest (and most flexible) solution for your problem would be  
<br>
the Torque team releasing their libraries as both shared and static  
<br>
libraries.  It doesn't appear their build system supports this  
<br>
presently, which is most unfortunate as it prevents us from building  
<br>
TM support as a DSO...
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0463.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0461.php">Enzo: "Re: [O-MPI users] Rendezvous Question"</a>
<li><strong>In reply to:</strong> <a href="0456.php">Jyh-Shyong Ho: "[O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0481.php">Jyh-Shyong Ho: "Re: [O-MPI users] OpenMPI 1.0.1 with gcc-4.0.2"</a>
<li><strong>Reply:</strong> <a href="0481.php">Jyh-Shyong Ho: "Re: [O-MPI users] OpenMPI 1.0.1 with gcc-4.0.2"</a>
<li><strong>Reply:</strong> <a href="0482.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
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
