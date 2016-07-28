<?
$subject_val = "Re: [OMPI devel] undefined references forrdma_get_peer_addr	&amp;	rdma_get_local_addr";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  4 14:14:00 2008" -->
<!-- isoreceived="20080504181400" -->
<!-- sent="Sun, 4 May 2008 12:13:50 -0600" -->
<!-- isosent="20080504181350" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] undefined references forrdma_get_peer_addr	&amp;amp;	rdma_get_local_addr" -->
<!-- id="E09426BC-55A5-4758-BEC0-4DCB837DFB01_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E7FD839BAFD8CA499213A6EE26F2368004CA03_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] undefined references forrdma_get_peer_addr	&amp;	rdma_get_local_addr<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-04 14:13:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3822.php">Roland Dreier: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>Previous message:</strong> <a href="3820.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] undefined references forrdma_get_peer_addr	&amp;	rdma_get_local_addr"</a>
<li><strong>In reply to:</strong> <a href="3820.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] undefined references forrdma_get_peer_addr	&amp;	rdma_get_local_addr"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I might see the issue.  Jeff, I'm assuming you're using a  
<br>
developer build of Open MPI with GNU, Intel, or Pathscale compilers,  
<br>
right?  At least someone below was using PGI.  The first three  
<br>
compilers on a developer build have the magic pixie dust arguments  
<br>
added that makes calling an undeclared function an error.  PGI, Sun  
<br>
Workshop, and non-developer builds don't have that pixie dust.  So  
<br>
it's not an error to call an undeclared function in those cases, and  
<br>
AC_COMPILE_IFELSE won't error out.  AC_LINK_IFELSE should always be  
<br>
used to check for functions for precisely that reason.
<br>
<p>Brian
<br>
<p>On May 4, 2008, at 11:41 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; As steve mentioned, its inline.  But I don't understand how that  
</span><br>
<span class="quotelev1">&gt; would even compile if its not in rdma_cma.h.  Iflink will catch it,  
</span><br>
<span class="quotelev1">&gt; but I'm still a little uneasy not understanding why it passes the  
</span><br>
<span class="quotelev1">&gt; compile...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From:   Pak Lui [mailto:Pak.Lui_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent:   Sunday, May 04, 2008 11:44 AM Eastern Standard Time
</span><br>
<span class="quotelev1">&gt; To:     Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject:        Re: [OMPI devel] undefined references  
</span><br>
<span class="quotelev1">&gt; forrdma_get_peer_addr     &amp;       rdma_get_local_addr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Jon / Steve -- can you comment?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tested with OFED 1.2.5 (which is what I assume you meant) and got:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; checking for rdma_get_peer_addr... no
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Because that function is not defined in OFED 1.2.5.  Running with  
</span><br>
<span class="quotelev1">&gt; OFED
</span><br>
<span class="quotelev2">&gt; &gt; 1.3 (where the function does exist), I get:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; checking for rdma_get_peer_addr... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For me it seems to be running with 1.2.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; login3% /opt/ofed/bin/ofed_info | head -1
</span><br>
<span class="quotelev1">&gt; OFED-1.2.5.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No rmda_get_peer_addr or rmda_get_local_addr in these .so's,  
</span><br>
<span class="quotelev1">&gt; assumingly
</span><br>
<span class="quotelev1">&gt; they are coming from there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; login3% ls librdmacm.so*
</span><br>
<span class="quotelev1">&gt; librdmacm.so  librdmacm.so.1  librdmacm.so.1.0.0  librdmacm.so.1.0.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; login3% nm librdmacm.so* | grep rdma_get_
</span><br>
<span class="quotelev1">&gt; 0000000000003470 T rdma_get_cm_event
</span><br>
<span class="quotelev1">&gt; 0000000000001a20 T rdma_get_devices
</span><br>
<span class="quotelev1">&gt; 0000000000003470 T rdma_get_cm_event
</span><br>
<span class="quotelev1">&gt; 0000000000001a20 T rdma_get_devices
</span><br>
<span class="quotelev1">&gt; 0000000000003470 T rdma_get_cm_event
</span><br>
<span class="quotelev1">&gt; 0000000000001a20 T rdma_get_devices
</span><br>
<span class="quotelev1">&gt; 0000000000003470 T rdma_get_cm_event
</span><br>
<span class="quotelev1">&gt; 0000000000001a20 T rdma_get_devices
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I don't see rdma_get_peer_addr appeared in the
</span><br>
<span class="quotelev1">&gt; /opt/ofed/include/rdma/rdma_cma.h either. Not knowing how it actually
</span><br>
<span class="quotelev1">&gt; know about the interface (and it's not inline) there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Outside of all the configure complexity, can you write a simple
</span><br>
<span class="quotelev2">&gt; &gt; program that calls that function and have it compile and link  
</span><br>
<span class="quotelev1">&gt; properly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are the references of rmda_get_peer_addr from the config.log:
</span><br>
<span class="quotelev1">&gt;    47858 configure:120941: checking for rdma_get_peer_addr
</span><br>
<span class="quotelev1">&gt;    47859 configure:120966: pgcc -c -g   -D_REENTRANT
</span><br>
<span class="quotelev1">&gt; -I/opt/ofed/include conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt;    47860 PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt; (conftest        .c: 412)
</span><br>
<span class="quotelev1">&gt;    47861 PGC/x86-64 Linux 7.1-2: compilation completed with warnings
</span><br>
<span class="quotelev1">&gt;    47862 configure:120972: $? = 0
</span><br>
<span class="quotelev1">&gt;    47863 configure:120987: result: yes
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;    48355 configure:123600: checking for rdma_get_peer_addr
</span><br>
<span class="quotelev1">&gt;    48356 configure:123625: pgcc -c -g   -D_REENTRANT
</span><br>
<span class="quotelev1">&gt; -I/opt/ofed/include conftes        t.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt;    48357 PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt; (conftest        .c: 423)
</span><br>
<span class="quotelev1">&gt;    48358 PGC/x86-64 Linux 7.1-2: compilation completed with warnings
</span><br>
<span class="quotelev1">&gt;    48359 configure:123631: $? = 0
</span><br>
<span class="quotelev1">&gt;    48360 configure:123646: result: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's my program, not sure if it's doing it correctly. I am no m4
</span><br>
<span class="quotelev1">&gt; expert, so how do I run the ompi_check_openib.m4 independently and see
</span><br>
<span class="quotelev1">&gt; the conftest.c??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; login3% cat mytest.c
</span><br>
<span class="quotelev1">&gt; #include &quot;rdma/rdma_cma.h&quot;
</span><br>
<span class="quotelev1">&gt; int main (void) {
</span><br>
<span class="quotelev1">&gt;      void *ret = (void*) rdma_get_peer_addr((struct rdma_cm_id*)0);
</span><br>
<span class="quotelev1">&gt;      return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It gives me a warning if I just try to create an object, which is  
</span><br>
<span class="quotelev1">&gt; what I
</span><br>
<span class="quotelev1">&gt; see in the config.log.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; login3% pgcc -c -g   -D_REENTRANT  -I/opt/ofed/include mytest.c
</span><br>
<span class="quotelev1">&gt; PGC-W-0155-Pointer value created from a nonlong integral type   
</span><br>
<span class="quotelev1">&gt; (mytest.c: 3)
</span><br>
<span class="quotelev1">&gt; PGC/x86-64 Linux 7.1-2: compilation completed with warnings
</span><br>
<span class="quotelev1">&gt; login3% echo $?
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But trying to create an executable would give me the error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; login3% pgcc -g -D_REENTRANT -I/opt/ofed/include mytest.c -o mytest
</span><br>
<span class="quotelev1">&gt; PGC-W-0155-Pointer value created from a nonlong integral type   
</span><br>
<span class="quotelev1">&gt; (mytest.c: 3)
</span><br>
<span class="quotelev1">&gt; PGC/x86-64 Linux 7.1-2: compilation completed with warnings
</span><br>
<span class="quotelev1">&gt; /tmp/pgccjF6BryhFmWS.o: In function `main':
</span><br>
<span class="quotelev1">&gt; /share/home/00951/paklui/ompi-trunk5/config-data1-debug/mytest.c:3:
</span><br>
<span class="quotelev1">&gt; undefined reference to `rdma_get_peer_addr'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm, any clues, comments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I suppose we could change the AC_COMPILE_IFELSE in config/
</span><br>
<span class="quotelev2">&gt; &gt; ompi_check_openib.m4 to OMPI_LINK_IFELSE, but I'm a little  
</span><br>
<span class="quotelev1">&gt; confused as
</span><br>
<span class="quotelev2">&gt; &gt; to why it would compile successfully if the symbol  
</span><br>
<span class="quotelev1">&gt; rdma_get_peer_addr
</span><br>
<span class="quotelev2">&gt; &gt; is not declared anywhere (which it shouldn't be in OFED 1.2 or  
</span><br>
<span class="quotelev1">&gt; 1.2.5,
</span><br>
<span class="quotelev2">&gt; &gt; AFAIK)...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 3, 2008, at 10:56 AM, Pak Lui wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sure Jeff, see attached.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (moving to devel so that others are aware)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Crud.  Can you send me your config.log?  I don't know why it's  
</span><br>
<span class="quotelev1">&gt; able
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to  find rdma_get_peer_addr() in configure, but then later not  
</span><br>
<span class="quotelev1">&gt; able
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to  find it during the build - I'd like to see what happened
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; during  configure.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On May 2, 2008, at 7:09 PM, Pak Lui wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; It seems that the cpc3 merge causes my Ranger build to break. I
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; believe it is using OFED 1.2 but I don't know how to check. It
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; passes the ompi_check_openib.m4 that you added in for the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; rdma_get_peer_addr. Is there a missing #include for openib/ofed
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; related somewhere?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  1236 checking rdma/rdma_cma.h usability... yes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  1237 checking rdma/rdma_cma.h presence... yes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  1238 checking for rdma/rdma_cma.h... yes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  1239 checking for rdma_create_id in -lrdmacm... yes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  1240 checking for rdma_get_peer_addr... yes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; pgCC -DHAVE_CONFIG_H -I. -I../../../../ompi/tools/ompi_info -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I../../../opal/include -I../../../orte/include -I../../../ompi/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; include -I../../../opal/mca/paffinity/linux/plpa/src/libplpa -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; DOMPI_CONFIGURE_USER=&quot;\&quot;paklui\&quot;&quot; -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; DOMPI_CONFIGURE_HOST=&quot;\&quot;login4.ranger.tacc.utexas.edu\&quot;&quot; -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; DOMPI_CONFIGURE_DATE=&quot;\&quot;Fri May  2 17:07:01 CDT 2008\&quot;&quot; -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; -DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot; -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; -DOMPI_BUILD_CFLAGS=&quot;\&quot;-O -DNDEBUG
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; \&quot;&quot; -DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../../.. -I../../.. -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I../../../../ opal/include -I../../../../orte/include -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I../../../../ompi/include  - D_REENTRANT\&quot;&quot; -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O -DNDEBUG  \&quot;&quot; -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../../.. -I../../.. - 
</span><br>
<span class="quotelev1">&gt; I../../../../
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; opal/include -I../../../../orte/include -I../../../../ompi/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; include  - D_REENTRANT\&quot;&quot; -DOMPI_BUILD_FFLAGS=&quot;\&quot;\&quot;&quot; -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; DOMPI_BUILD_FCFLAGS=&quot;\&quot;\&quot;&quot; -DOMPI_BUILD_LDFLAGS=&quot;\&quot; \&quot;&quot; -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; DOMPI_BUILD_LIBS=&quot;\&quot;-lnsl -lutil  -lpthread\&quot;&quot; -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; DOMPI_CC_ABSOLUTE=&quot;\&quot;/opt/apps/pgi/7.1/linux86-64/7.1-2/bin/pgcc
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; \&quot;&quot; - DOMPI_CXX_ABSOLUTE=&quot;\&quot;/opt/apps/pgi/7.1/linux86-64/7.1-2/ 
</span><br>
<span class="quotelev1">&gt; bin/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; pgCC\&quot;&quot;  -DOMPI_F77_ABSOLUTE=&quot;\&quot;/opt/apps/pgi/7.1/ 
</span><br>
<span class="quotelev1">&gt; linux86-64/7.1-2/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; bin/ pgf77\&quot;&quot; -DOMPI_F90_ABSOLUTE=&quot;\&quot;/opt/apps/pgi/7.1/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; linux86-64/7.1-2/ bin/pgf95\&quot;&quot; -DOMPI_F90_BUILD_SIZE=&quot;\&quot;small 
</span><br>
<span class="quotelev1">&gt; \&quot;&quot; -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I../../../.. - I../../.. -I../../../../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../../../../
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; orte/include - I../../../../ompi/include  -D_REENTRANT  -O -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; DNDEBUG   -c -o  version.o ../../../../ompi/tools/ompi_info/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; version.cc
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /bin/sh ../../../libtool --tag=CXX   --mode=link pgCC  -O - 
</span><br>
<span class="quotelev1">&gt; DNDEBUG
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; - o ompi_info components.o ompi_info.o output.o param.o
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; version.o ../../../ompi/libmpi.la -lnsl -lutil  -lpthread
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; libtool: link: pgCC -O -DNDEBUG -o .libs/ompi_info components.o
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ompi_info.o output.o param.o version.o  ../../../ompi/.libs/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; libmpi.so -L/opt/ofed/lib64 -libcm -lrdmacm -libverbs -lrt / 
</span><br>
<span class="quotelev1">&gt; share/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; home/00951/paklui/ompi-trunk5/config-data1/orte/.libs/libopen-
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; rte.so /share/home/00951/paklui/ompi-trunk5/config-data1/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; opal/.libs/ libopen-pal.so -lnuma -ldl -lnsl -lutil -lpthread -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Wl,--rpath -Wl,/ share/home/00951/paklui/ompi-trunk5/shared-
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; install1/lib
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [1]    Exit 2                        make install &gt;&amp;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make.install.log.0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; `rdma_get_peer_addr'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; `rdma_get_local_addr'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make[2]: *** [ompi_info] Error 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make[2]: Leaving directory `/share/home/00951/paklui/ompi-trunk5/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; config-data1/ompi/tools/ompi_info'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make[1]: Leaving directory `/share/home/00951/paklui/ompi-trunk5/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; config-data1/ompi'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; - Pak Lui
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; pak.lui_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - Pak Lui
</span><br>
<span class="quotelev3">&gt; &gt;&gt; pak.lui_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;config.log.bz2&gt;&lt;mime-attachment.txt&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Pak Lui
</span><br>
<span class="quotelev1">&gt; pak.lui_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
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
<li><strong>Next message:</strong> <a href="3822.php">Roland Dreier: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>Previous message:</strong> <a href="3820.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] undefined references forrdma_get_peer_addr	&amp;	rdma_get_local_addr"</a>
<li><strong>In reply to:</strong> <a href="3820.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] undefined references forrdma_get_peer_addr	&amp;	rdma_get_local_addr"</a>
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
