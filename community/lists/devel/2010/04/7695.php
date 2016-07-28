<?
$subject_val = "Re: [OMPI devel] compile openmpi error on debian";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 04:34:02 2010" -->
<!-- isoreceived="20100406083402" -->
<!-- sent="Tue, 6 Apr 2010 10:33:56 +0200" -->
<!-- isosent="20100406083356" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] compile openmpi error on debian" -->
<!-- id="201004061033.56632.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="n2i632a27d11004041833qc9237dd5q80190ed7af00d81f_at_mail.gmail.com" -->
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
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 04:33:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7696.php">N.M. Maclaren: "Re: [OMPI devel] inquiry about mpirun"</a>
<li><strong>Previous message:</strong> <a href="7694.php">luyang dong: "[OMPI devel] inquiry about mpirun"</a>
<li><strong>In reply to:</strong> <a href="7692.php">hu yaohui: "Re: [OMPI devel] compile openmpi error on debian"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7710.php">hu yaohui: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>Reply:</strong> <a href="7710.php">hu yaohui: "Re: [OMPI devel] compile openmpi error on debian"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Yaohui,
<br>
<p>can you tell me the version of your gcc and g++ compiler?
<br>
It seems to me that your g++ compiler is older (&lt;4.2) than your gcc compiler. 
<br>
If that's true, then we have to enhance the VT configure, so that the 
<br>
availability of '-fopenmp' for g++ will be tested.
<br>
<p>Matthias
<br>
<p>On Monday 05 April 2010 03:33:06 hu yaohui wrote:
<br>
<span class="quotelev1">&gt; Thank you very much!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yaohui!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Apr 3, 2010 at 7:09 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Can you try Open MPI v1.4.1?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If that doesn't work, you can disable building VampirTrace; it's an
</span><br>
<span class="quotelev2">&gt; &gt; optional component of Open MPI with the following configure argument:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    ./configure --enable-contrib-no-build=vt ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 3, 2010, at 1:22 AM, hu yaohui wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi all,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; when i make openmpi on debian, i meet the following error that i dont
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; know why?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Making all in vtfilter
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[6]: Entering directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; `/root/openmpi-1.4-ht/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; g++ -DHAVE_CONFIG_H -I. -I../.. -I../../extlib/otf/otflib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -I../../extlib/otf/otflib -I../../vtlib/ -I../../vtlib  -D_GNU_SOURCE
</span><br>
<span class="quotelev2">&gt; &gt; -fopenmp -DVT_OMP -g -finline-functions -pthread -MT vtfilter-vt_filter.o
</span><br>
<span class="quotelev2">&gt; &gt; -MD -MP -MF .deps/vtfilter-vt_filter.Tpo -c -o vtfilter-vt_filter.o `test
</span><br>
<span class="quotelev2">&gt; &gt; -f 'vt_filter.cc' || echo './'`vt_filter.cc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; cc1plus: error: unrecognized command line option &quot;-fopenmp&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[6]: *** [vtfilter-vt_filter.o] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[6]: Leaving directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; `/root/openmpi-1.4-ht/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[5]: Leaving directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; `/root/openmpi-1.4-ht/ompi/contrib/vt/vt/tools'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[4]: Leaving directory `/root/openmpi-1.4-ht/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[3]: Leaving directory `/root/openmpi-1.4-ht/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[2]: Leaving directory `/root/openmpi-1.4-ht/ompi/contrib/vt'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[1]: Leaving directory `/root/openmpi-1.4-ht/ompi'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;/snip&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; someone tell me it's the gcc version's problem,but my gcc is the latest
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; one,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is someone know the reason i meet this probelm
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks &amp; Regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Yaohui Hu
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
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7696.php">N.M. Maclaren: "Re: [OMPI devel] inquiry about mpirun"</a>
<li><strong>Previous message:</strong> <a href="7694.php">luyang dong: "[OMPI devel] inquiry about mpirun"</a>
<li><strong>In reply to:</strong> <a href="7692.php">hu yaohui: "Re: [OMPI devel] compile openmpi error on debian"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7710.php">hu yaohui: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>Reply:</strong> <a href="7710.php">hu yaohui: "Re: [OMPI devel] compile openmpi error on debian"</a>
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
