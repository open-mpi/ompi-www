<?
$subject_val = "Re: [OMPI devel] undefined references for rdma_get_peer_addr &amp;	rdma_get_local_addr";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  3 10:57:25 2008" -->
<!-- isoreceived="20080503145725" -->
<!-- sent="Sat, 03 May 2008 10:56:57 -0400" -->
<!-- isosent="20080503145657" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] undefined references for rdma_get_peer_addr &amp;amp;	rdma_get_local_addr" -->
<!-- id="481C7D39.7050100_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="91148C0B-9C60-484C-826F-5E44CE1FCBB1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] undefined references for rdma_get_peer_addr &amp;	rdma_get_local_addr<br>
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-03 10:56:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3811.php">George Bosilca: "Re: [OMPI devel] MCA component open"</a>
<li><strong>Previous message:</strong> <a href="3809.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>In reply to:</strong> <a href="3806.php">Jeff Squyres: "Re: [OMPI devel] undefined references for rdma_get_peer_addr &amp; rdma_get_local_addr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3815.php">Jeff Squyres: "Re: [OMPI devel] undefined references for rdma_get_peer_addr &amp;	rdma_get_local_addr"</a>
<li><strong>Reply:</strong> <a href="3815.php">Jeff Squyres: "Re: [OMPI devel] undefined references for rdma_get_peer_addr &amp;	rdma_get_local_addr"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure Jeff, see attached.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; (moving to devel so that others are aware)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Crud.  Can you send me your config.log?  I don't know why it's able to  
</span><br>
<span class="quotelev1">&gt; find rdma_get_peer_addr() in configure, but then later not able to  
</span><br>
<span class="quotelev1">&gt; find it during the build - I'd like to see what happened during  
</span><br>
<span class="quotelev1">&gt; configure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 2, 2008, at 7:09 PM, Pak Lui wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that the cpc3 merge causes my Ranger build to break. I  
</span><br>
<span class="quotelev2">&gt;&gt; believe it is using OFED 1.2 but I don't know how to check. It  
</span><br>
<span class="quotelev2">&gt;&gt; passes the ompi_check_openib.m4 that you added in for the  
</span><br>
<span class="quotelev2">&gt;&gt; rdma_get_peer_addr. Is there a missing #include for openib/ofed  
</span><br>
<span class="quotelev2">&gt;&gt; related somewhere?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   1236 checking rdma/rdma_cma.h usability... yes
</span><br>
<span class="quotelev2">&gt;&gt;   1237 checking rdma/rdma_cma.h presence... yes
</span><br>
<span class="quotelev2">&gt;&gt;   1238 checking for rdma/rdma_cma.h... yes
</span><br>
<span class="quotelev2">&gt;&gt;   1239 checking for rdma_create_id in -lrdmacm... yes
</span><br>
<span class="quotelev2">&gt;&gt;   1240 checking for rdma_get_peer_addr... yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pgCC -DHAVE_CONFIG_H -I. -I../../../../ompi/tools/ompi_info - 
</span><br>
<span class="quotelev2">&gt;&gt; I../../../opal/include -I../../../orte/include -I../../../ompi/ 
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../opal/mca/paffinity/linux/plpa/src/libplpa - 
</span><br>
<span class="quotelev2">&gt;&gt; DOMPI_CONFIGURE_USER=&quot;\&quot;paklui\&quot;&quot; - 
</span><br>
<span class="quotelev2">&gt;&gt; DOMPI_CONFIGURE_HOST=&quot;\&quot;login4.ranger.tacc.utexas.edu\&quot;&quot; - 
</span><br>
<span class="quotelev2">&gt;&gt; DOMPI_CONFIGURE_DATE=&quot;\&quot;Fri May  2 17:07:01 CDT 2008\&quot;&quot; - 
</span><br>
<span class="quotelev2">&gt;&gt; DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; -DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot; - 
</span><br>
<span class="quotelev2">&gt;&gt; DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; -DOMPI_BUILD_CFLAGS=&quot;\&quot;-O -DNDEBUG   
</span><br>
<span class="quotelev2">&gt;&gt; \&quot;&quot; -DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../../.. -I../../.. -I../../../../ 
</span><br>
<span class="quotelev2">&gt;&gt; opal/include -I../../../../orte/include -I../../../../ompi/include  - 
</span><br>
<span class="quotelev2">&gt;&gt; D_REENTRANT\&quot;&quot; -DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O -DNDEBUG  \&quot;&quot; - 
</span><br>
<span class="quotelev2">&gt;&gt; DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../../.. -I../../.. -I../../../../ 
</span><br>
<span class="quotelev2">&gt;&gt; opal/include -I../../../../orte/include -I../../../../ompi/include  - 
</span><br>
<span class="quotelev2">&gt;&gt; D_REENTRANT\&quot;&quot; -DOMPI_BUILD_FFLAGS=&quot;\&quot;\&quot;&quot; - 
</span><br>
<span class="quotelev2">&gt;&gt; DOMPI_BUILD_FCFLAGS=&quot;\&quot;\&quot;&quot; -DOMPI_BUILD_LDFLAGS=&quot;\&quot; \&quot;&quot; - 
</span><br>
<span class="quotelev2">&gt;&gt; DOMPI_BUILD_LIBS=&quot;\&quot;-lnsl -lutil  -lpthread\&quot;&quot; - 
</span><br>
<span class="quotelev2">&gt;&gt; DOMPI_CC_ABSOLUTE=&quot;\&quot;/opt/apps/pgi/7.1/linux86-64/7.1-2/bin/pgcc\&quot;&quot; - 
</span><br>
<span class="quotelev2">&gt;&gt; DOMPI_CXX_ABSOLUTE=&quot;\&quot;/opt/apps/pgi/7.1/linux86-64/7.1-2/bin/pgCC\&quot;&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_F77_ABSOLUTE=&quot;\&quot;/opt/apps/pgi/7.1/linux86-64/7.1-2/bin/ 
</span><br>
<span class="quotelev2">&gt;&gt; pgf77\&quot;&quot; -DOMPI_F90_ABSOLUTE=&quot;\&quot;/opt/apps/pgi/7.1/linux86-64/7.1-2/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin/pgf95\&quot;&quot; -DOMPI_F90_BUILD_SIZE=&quot;\&quot;small\&quot;&quot; -I../../../.. - 
</span><br>
<span class="quotelev2">&gt;&gt; I../../.. -I../../../../opal/include -I../../../../orte/include - 
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include  -D_REENTRANT  -O -DNDEBUG   -c -o  
</span><br>
<span class="quotelev2">&gt;&gt; version.o ../../../../ompi/tools/ompi_info/version.cc
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../libtool --tag=CXX   --mode=link pgCC  -O -DNDEBUG - 
</span><br>
<span class="quotelev2">&gt;&gt; o ompi_info components.o ompi_info.o output.o param.o  
</span><br>
<span class="quotelev2">&gt;&gt; version.o ../../../ompi/libmpi.la -lnsl -lutil  -lpthread
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: pgCC -O -DNDEBUG -o .libs/ompi_info components.o  
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info.o output.o param.o version.o  ../../../ompi/.libs/ 
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.so -L/opt/ofed/lib64 -libcm -lrdmacm -libverbs -lrt /share/ 
</span><br>
<span class="quotelev2">&gt;&gt; home/00951/paklui/ompi-trunk5/config-data1/orte/.libs/libopen- 
</span><br>
<span class="quotelev2">&gt;&gt; rte.so /share/home/00951/paklui/ompi-trunk5/config-data1/opal/.libs/ 
</span><br>
<span class="quotelev2">&gt;&gt; libopen-pal.so -lnuma -ldl -lnsl -lutil -lpthread -Wl,--rpath -Wl,/ 
</span><br>
<span class="quotelev2">&gt;&gt; share/home/00951/paklui/ompi-trunk5/shared-install1/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [1]    Exit 2                        make install &gt;&amp;  
</span><br>
<span class="quotelev2">&gt;&gt; make.install.log.0
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to  
</span><br>
<span class="quotelev2">&gt;&gt; `rdma_get_peer_addr'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to  
</span><br>
<span class="quotelev2">&gt;&gt; `rdma_get_local_addr'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [ompi_info] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/share/home/00951/paklui/ompi-trunk5/ 
</span><br>
<span class="quotelev2">&gt;&gt; config-data1/ompi/tools/ompi_info'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/share/home/00951/paklui/ompi-trunk5/ 
</span><br>
<span class="quotelev2">&gt;&gt; config-data1/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Pak Lui
</span><br>
<span class="quotelev2">&gt;&gt; pak.lui_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3810/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3811.php">George Bosilca: "Re: [OMPI devel] MCA component open"</a>
<li><strong>Previous message:</strong> <a href="3809.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>In reply to:</strong> <a href="3806.php">Jeff Squyres: "Re: [OMPI devel] undefined references for rdma_get_peer_addr &amp; rdma_get_local_addr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3815.php">Jeff Squyres: "Re: [OMPI devel] undefined references for rdma_get_peer_addr &amp;	rdma_get_local_addr"</a>
<li><strong>Reply:</strong> <a href="3815.php">Jeff Squyres: "Re: [OMPI devel] undefined references for rdma_get_peer_addr &amp;	rdma_get_local_addr"</a>
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
