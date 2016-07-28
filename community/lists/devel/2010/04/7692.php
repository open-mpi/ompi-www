<?
$subject_val = "Re: [OMPI devel] compile openmpi error on debian";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  4 21:33:13 2010" -->
<!-- isoreceived="20100405013313" -->
<!-- sent="Mon, 5 Apr 2010 09:33:06 +0800" -->
<!-- isosent="20100405013306" -->
<!-- name="hu yaohui" -->
<!-- email="loki2441_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] compile openmpi error on debian" -->
<!-- id="n2i632a27d11004041833qc9237dd5q80190ed7af00d81f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2B917894-7ADA-4DAA-A61E-BB14E4504CE9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] compile openmpi error on debian<br>
<strong>From:</strong> hu yaohui (<em>loki2441_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-04 21:33:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7693.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove messaging loop in proc state update procedure"</a>
<li><strong>Previous message:</strong> <a href="7691.php">Jeff Squyres: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>In reply to:</strong> <a href="7691.php">Jeff Squyres: "Re: [OMPI devel] compile openmpi error on debian"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7695.php">Matthias Jurenz: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>Reply:</strong> <a href="7695.php">Matthias Jurenz: "Re: [OMPI devel] compile openmpi error on debian"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you very much!
<br>
<p>Yaohui!
<br>
<p>On Sat, Apr 3, 2010 at 7:09 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Can you try Open MPI v1.4.1?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If that doesn't work, you can disable building VampirTrace; it's an
</span><br>
<span class="quotelev1">&gt; optional component of Open MPI with the following configure argument:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ./configure --enable-contrib-no-build=vt ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 3, 2010, at 1:22 AM, hu yaohui wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt; when i make openmpi on debian, i meet the following error that i dont
</span><br>
<span class="quotelev1">&gt; know why?
</span><br>
<span class="quotelev2">&gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Making all in vtfilter
</span><br>
<span class="quotelev2">&gt; &gt; make[6]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/root/openmpi-1.4-ht/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev2">&gt; &gt; g++ -DHAVE_CONFIG_H -I. -I../.. -I../../extlib/otf/otflib
</span><br>
<span class="quotelev1">&gt; -I../../extlib/otf/otflib -I../../vtlib/ -I../../vtlib  -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; -fopenmp -DVT_OMP -g -finline-functions -pthread -MT vtfilter-vt_filter.o
</span><br>
<span class="quotelev1">&gt; -MD -MP -MF .deps/vtfilter-vt_filter.Tpo -c -o vtfilter-vt_filter.o `test -f
</span><br>
<span class="quotelev1">&gt; 'vt_filter.cc' || echo './'`vt_filter.cc
</span><br>
<span class="quotelev2">&gt; &gt; cc1plus: error: unrecognized command line option &quot;-fopenmp&quot;
</span><br>
<span class="quotelev2">&gt; &gt; make[6]: *** [vtfilter-vt_filter.o] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[6]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/root/openmpi-1.4-ht/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev2">&gt; &gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[5]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/root/openmpi-1.4-ht/ompi/contrib/vt/vt/tools'
</span><br>
<span class="quotelev2">&gt; &gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[4]: Leaving directory `/root/openmpi-1.4-ht/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: Leaving directory `/root/openmpi-1.4-ht/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory `/root/openmpi-1.4-ht/ompi/contrib/vt'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory `/root/openmpi-1.4-ht/ompi'
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; &lt;/snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt; someone tell me it's the gcc version's problem,but my gcc is the latest
</span><br>
<span class="quotelev1">&gt; one,
</span><br>
<span class="quotelev2">&gt; &gt; is someone know the reason i meet this probelm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks &amp; Regards
</span><br>
<span class="quotelev2">&gt; &gt; Yaohui Hu
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7692/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7693.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove messaging loop in proc state update procedure"</a>
<li><strong>Previous message:</strong> <a href="7691.php">Jeff Squyres: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>In reply to:</strong> <a href="7691.php">Jeff Squyres: "Re: [OMPI devel] compile openmpi error on debian"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7695.php">Matthias Jurenz: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>Reply:</strong> <a href="7695.php">Matthias Jurenz: "Re: [OMPI devel] compile openmpi error on debian"</a>
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
