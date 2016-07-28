<?
$subject_val = "Re: [OMPI devel] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  6 08:06:01 2013" -->
<!-- isoreceived="20130906120601" -->
<!-- sent="Fri, 6 Sep 2013 15:06:00 +0300" -->
<!-- isosent="20130906120600" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (no subject)" -->
<!-- id="CAAoBEvm6x_UUeFSzC3y4hhZgnE=LwgscS_M5Xms2o3U-dR6=xw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAoBEvmduChiw_uU+3CT0btas9e3cvYXL4Qy1adiHZhPnaOvtw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] (no subject)<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-06 08:06:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12876.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="12874.php">Alex Margolin: "[OMPI devel] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="12874.php">Alex Margolin: "[OMPI devel] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12876.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] (no subject)"</a>
<li><strong>Reply:</strong> <a href="12876.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the title and the html... send button got pressed too earl.
<br>
<p>Anyway, I tried to build OMPI without threads at all with the following
<br>
command:
<br>
<p>./configure --prefix=/cs/mosna/alexam02/ompi CFLAGS=-m64 CXXFLAGS=-m64
<br>
--without-threads --without-hwloc --enable-mca-no-build=maffinity,paffinity
<br>
--enable-contrib-no-build=libnbc,vt
<br>
<p>Sadly, the build failed very early:
<br>
<p>&nbsp;&nbsp;CC     runtime/opal_info_support.lo
<br>
runtime/opal_info_support.c: In function 'opal_info_do_params':
<br>
runtime/opal_info_support.c:444:9: error: 'errno' undeclared (first use in
<br>
this function)
<br>
runtime/opal_info_support.c:444:9: note: each undeclared identifier is
<br>
reported only once for each function it appears in
<br>
make[2]: *** [runtime/opal_info_support.lo] Error 1
<br>
make[2]: Leaving directory `/a/store-04/h/lab/mosix/alexam02/ompi-jeff/opal'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/a/store-04/h/lab/mosix/alexam02/ompi-jeff/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p>Should this be a trac ticket?
<br>
<p>Alex
<br>
<p><p><p>On Fri, Sep 6, 2013 at 1:22 PM, Alex Margolin &lt;alex.margolin_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm building ompi r29104 with the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make distclean &amp;&amp; ./autogen.sh &amp;&amp; ./configure
</span><br>
<span class="quotelev1">&gt; --prefix=/cs/mosna/alexam02/ompi CFLAGS=-m64 CXXFLAGS=-m64 --without-hwloc
</span><br>
<span class="quotelev1">&gt; --disable-mpi-threads --disable-progress-threads
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=maffinity,paffinity
</span><br>
<span class="quotelev1">&gt; --enable-contrib-no-build=libnbc,vt &amp;&amp; make &amp;&amp; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I build and run any MPI app, I'm getting the following error (and the
</span><br>
<span class="quotelev1">&gt; app fails):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun: Symbol `orte_process_info' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; mpirun: Symbol `orte_plm' has different size in shared object, consider
</span><br>
<span class="quotelev1">&gt; re-linking
</span><br>
<span class="quotelev1">&gt; mpirun: symbol lookup error: mpirun: undefined symbol:
</span><br>
<span class="quotelev1">&gt; orte_trigger_event_t_class
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anybody ever stumbled on this or something similar in the past?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alex
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12875/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12876.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="12874.php">Alex Margolin: "[OMPI devel] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="12874.php">Alex Margolin: "[OMPI devel] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12876.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] (no subject)"</a>
<li><strong>Reply:</strong> <a href="12876.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] (no subject)"</a>
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
