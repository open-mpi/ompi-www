<?
$subject_val = "Re: [OMPI devel] compile openmpi error on debian";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  7 11:24:41 2010" -->
<!-- isoreceived="20100407152441" -->
<!-- sent="Wed, 7 Apr 2010 23:24:36 +0800" -->
<!-- isosent="20100407152436" -->
<!-- name="hu yaohui" -->
<!-- email="loki2441_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] compile openmpi error on debian" -->
<!-- id="w2i632a27d11004070824rf9d04906hd8660aa57fccb54b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201004061033.56632.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>Date:</strong> 2010-04-07 11:24:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7711.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7709.php">Rolf vandeVaart: "[OMPI devel] RFC: Change bml_base_btl_array to an array of pointers"</a>
<li><strong>In reply to:</strong> <a href="7695.php">Matthias Jurenz: "Re: [OMPI devel] compile openmpi error on debian"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Matthias,
<br>
Yes, you are right ,my g++ version is 4.1 and my gcc is 4.3, i update the
<br>
g++,it's ok now.
<br>
<p>Thanks &amp; Regards
<br>
Yaohui
<br>
<p>On Tue, Apr 6, 2010 at 4:33 PM, Matthias Jurenz &lt;
<br>
matthias.jurenz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Yaohui,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you tell me the version of your gcc and g++ compiler?
</span><br>
<span class="quotelev1">&gt; It seems to me that your g++ compiler is older (&lt;4.2) than your gcc
</span><br>
<span class="quotelev1">&gt; compiler.
</span><br>
<span class="quotelev1">&gt; If that's true, then we have to enhance the VT configure, so that the
</span><br>
<span class="quotelev1">&gt; availability of '-fopenmp' for g++ will be tested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Monday 05 April 2010 03:33:06 hu yaohui wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yaohui!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sat, Apr 3, 2010 at 7:09 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Can you try Open MPI v1.4.1?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If that doesn't work, you can disable building VampirTrace; it's an
</span><br>
<span class="quotelev3">&gt; &gt; &gt; optional component of Open MPI with the following configure argument:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    ./configure --enable-contrib-no-build=vt ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Apr 3, 2010, at 1:22 AM, hu yaohui wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi all,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; when i make openmpi on debian, i meet the following error that i dont
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; know why?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Making all in vtfilter
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make[6]: Entering directory
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; `/root/openmpi-1.4-ht/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; g++ -DHAVE_CONFIG_H -I. -I../.. -I../../extlib/otf/otflib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -I../../extlib/otf/otflib -I../../vtlib/ -I../../vtlib  -D_GNU_SOURCE
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -fopenmp -DVT_OMP -g -finline-functions -pthread -MT
</span><br>
<span class="quotelev1">&gt; vtfilter-vt_filter.o
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -MD -MP -MF .deps/vtfilter-vt_filter.Tpo -c -o vtfilter-vt_filter.o
</span><br>
<span class="quotelev1">&gt; `test
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -f 'vt_filter.cc' || echo './'`vt_filter.cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; cc1plus: error: unrecognized command line option &quot;-fopenmp&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make[6]: *** [vtfilter-vt_filter.o] Error 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make[6]: Leaving directory
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; `/root/openmpi-1.4-ht/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make[5]: Leaving directory
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; `/root/openmpi-1.4-ht/ompi/contrib/vt/vt/tools'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make[4]: Leaving directory `/root/openmpi-1.4-ht/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make[3]: Leaving directory `/root/openmpi-1.4-ht/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make[2]: Leaving directory `/root/openmpi-1.4-ht/ompi/contrib/vt'
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make[1]: Leaving directory `/root/openmpi-1.4-ht/ompi'
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;/snip&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; someone tell me it's the gcc version's problem,but my gcc is the
</span><br>
<span class="quotelev1">&gt; latest
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; one,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; is someone know the reason i meet this probelm
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks &amp; Regards
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Yaohui Hu
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7710/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7711.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7709.php">Rolf vandeVaart: "[OMPI devel] RFC: Change bml_base_btl_array to an array of pointers"</a>
<li><strong>In reply to:</strong> <a href="7695.php">Matthias Jurenz: "Re: [OMPI devel] compile openmpi error on debian"</a>
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
