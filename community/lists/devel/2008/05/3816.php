<?
$subject_val = "Re: [OMPI devel] undefined references for rdma_get_peer_addr	&amp;	rdma_get_local_addr";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  4 11:10:54 2008" -->
<!-- isoreceived="20080504151054" -->
<!-- sent="Sun, 04 May 2008 10:10:45 -0500" -->
<!-- isosent="20080504151045" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] undefined references for rdma_get_peer_addr	&amp;amp;	rdma_get_local_addr" -->
<!-- id="481DD1F5.8080504_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5BC1BA75-74F2-4075-A0FB-13D2B3CC0D20_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] undefined references for rdma_get_peer_addr	&amp;	rdma_get_local_addr<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-04 11:10:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3817.php">Pak Lui: "Re: [OMPI devel] undefined references for rdma_get_peer_addr	&amp;	rdma_get_local_addr"</a>
<li><strong>Previous message:</strong> <a href="3815.php">Jeff Squyres: "Re: [OMPI devel] undefined references for rdma_get_peer_addr &amp;	rdma_get_local_addr"</a>
<li><strong>In reply to:</strong> <a href="3815.php">Jeff Squyres: "Re: [OMPI devel] undefined references for rdma_get_peer_addr &amp;	rdma_get_local_addr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3817.php">Pak Lui: "Re: [OMPI devel] undefined references for rdma_get_peer_addr	&amp;	rdma_get_local_addr"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This probably has to do with the fact that rdma_get_peer_addr() is a 
<br>
static inline in /usr/include/rdma/rdma_cma.h.  So if you don't include 
<br>
that file in the test program, then you won't get rdma_get_peer_addr() 
<br>
even if you link with librdmacm.so
<br>
<p>Steve.
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Jon / Steve -- can you comment?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tested with OFED 1.2.5 (which is what I assume you meant) and got:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking for rdma_get_peer_addr... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because that function is not defined in OFED 1.2.5.  Running with OFED  
</span><br>
<span class="quotelev1">&gt; 1.3 (where the function does exist), I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking for rdma_get_peer_addr... yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Outside of all the configure complexity, can you write a simple  
</span><br>
<span class="quotelev1">&gt; program that calls that function and have it compile and link properly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suppose we could change the AC_COMPILE_IFELSE in config/ 
</span><br>
<span class="quotelev1">&gt; ompi_check_openib.m4 to OMPI_LINK_IFELSE, but I'm a little confused as  
</span><br>
<span class="quotelev1">&gt; to why it would compile successfully if the symbol rdma_get_peer_addr  
</span><br>
<span class="quotelev1">&gt; is not declared anywhere (which it shouldn't be in OFED 1.2 or 1.2.5,  
</span><br>
<span class="quotelev1">&gt; AFAIK)...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 3, 2008, at 10:56 AM, Pak Lui wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sure Jeff, see attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (moving to devel so that others are aware)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Crud.  Can you send me your config.log?  I don't know why it's able  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to  find rdma_get_peer_addr() in configure, but then later not able  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to  find it during the build - I'd like to see what happened  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; during  configure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 2, 2008, at 7:09 PM, Pak Lui wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It seems that the cpc3 merge causes my Ranger build to break. I   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; believe it is using OFED 1.2 but I don't know how to check. It   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; passes the ompi_check_openib.m4 that you added in for the   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rdma_get_peer_addr. Is there a missing #include for openib/ofed   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; related somewhere?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  1236 checking rdma/rdma_cma.h usability... yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  1237 checking rdma/rdma_cma.h presence... yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  1238 checking for rdma/rdma_cma.h... yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  1239 checking for rdma_create_id in -lrdmacm... yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  1240 checking for rdma_get_peer_addr... yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pgCC -DHAVE_CONFIG_H -I. -I../../../../ompi/tools/ompi_info -  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I../../../opal/include -I../../../orte/include -I../../../ompi/  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; include -I../../../opal/mca/paffinity/linux/plpa/src/libplpa -  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DOMPI_CONFIGURE_USER=&quot;\&quot;paklui\&quot;&quot; -  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DOMPI_CONFIGURE_HOST=&quot;\&quot;login4.ranger.tacc.utexas.edu\&quot;&quot; -  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DOMPI_CONFIGURE_DATE=&quot;\&quot;Fri May  2 17:07:01 CDT 2008\&quot;&quot; -  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; -DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot; -  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; -DOMPI_BUILD_CFLAGS=&quot;\&quot;-O -DNDEBUG    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; \&quot;&quot; -DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../../.. -I../../.. - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I../../../../ opal/include -I../../../../orte/include - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I../../../../ompi/include  - D_REENTRANT\&quot;&quot; - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O -DNDEBUG  \&quot;&quot; -  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../../.. -I../../.. -I../../../../  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/include -I../../../../orte/include -I../../../../ompi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; include  - D_REENTRANT\&quot;&quot; -DOMPI_BUILD_FFLAGS=&quot;\&quot;\&quot;&quot; -  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DOMPI_BUILD_FCFLAGS=&quot;\&quot;\&quot;&quot; -DOMPI_BUILD_LDFLAGS=&quot;\&quot; \&quot;&quot; -  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DOMPI_BUILD_LIBS=&quot;\&quot;-lnsl -lutil  -lpthread\&quot;&quot; -  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DOMPI_CC_ABSOLUTE=&quot;\&quot;/opt/apps/pgi/7.1/linux86-64/7.1-2/bin/pgcc 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; \&quot;&quot; - DOMPI_CXX_ABSOLUTE=&quot;\&quot;/opt/apps/pgi/7.1/linux86-64/7.1-2/bin/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pgCC\&quot;&quot;  -DOMPI_F77_ABSOLUTE=&quot;\&quot;/opt/apps/pgi/7.1/linux86-64/7.1-2/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bin/ pgf77\&quot;&quot; -DOMPI_F90_ABSOLUTE=&quot;\&quot;/opt/apps/pgi/7.1/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linux86-64/7.1-2/ bin/pgf95\&quot;&quot; -DOMPI_F90_BUILD_SIZE=&quot;\&quot;small\&quot;&quot; - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I../../../.. - I../../.. -I../../../../opal/include -I../../../../ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte/include - I../../../../ompi/include  -D_REENTRANT  -O - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DNDEBUG   -c -o  version.o ../../../../ompi/tools/ompi_info/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version.cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ../../../libtool --tag=CXX   --mode=link pgCC  -O -DNDEBUG  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - o ompi_info components.o ompi_info.o output.o param.o   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version.o ../../../ompi/libmpi.la -lnsl -lutil  -lpthread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: pgCC -O -DNDEBUG -o .libs/ompi_info components.o   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_info.o output.o param.o version.o  ../../../ompi/.libs/  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libmpi.so -L/opt/ofed/lib64 -libcm -lrdmacm -libverbs -lrt /share/  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; home/00951/paklui/ompi-trunk5/config-data1/orte/.libs/libopen-  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rte.so /share/home/00951/paklui/ompi-trunk5/config-data1/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/.libs/ libopen-pal.so -lnuma -ldl -lnsl -lutil -lpthread - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Wl,--rpath -Wl,/ share/home/00951/paklui/ompi-trunk5/shared- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; install1/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [1]    Exit 2                        make install &gt;&amp;   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make.install.log.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `rdma_get_peer_addr'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `rdma_get_local_addr'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [ompi_info] Error 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory `/share/home/00951/paklui/ompi-trunk5/  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; config-data1/ompi/tools/ompi_info'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory `/share/home/00951/paklui/ompi-trunk5/  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; config-data1/ompi'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Pak Lui
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pak.lui_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Pak Lui
</span><br>
<span class="quotelev2">&gt;&gt; pak.lui_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config.log.bz2&gt;&lt;mime-attachment.txt&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3817.php">Pak Lui: "Re: [OMPI devel] undefined references for rdma_get_peer_addr	&amp;	rdma_get_local_addr"</a>
<li><strong>Previous message:</strong> <a href="3815.php">Jeff Squyres: "Re: [OMPI devel] undefined references for rdma_get_peer_addr &amp;	rdma_get_local_addr"</a>
<li><strong>In reply to:</strong> <a href="3815.php">Jeff Squyres: "Re: [OMPI devel] undefined references for rdma_get_peer_addr &amp;	rdma_get_local_addr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3817.php">Pak Lui: "Re: [OMPI devel] undefined references for rdma_get_peer_addr	&amp;	rdma_get_local_addr"</a>
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
