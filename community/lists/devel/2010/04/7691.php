<?
$subject_val = "Re: [OMPI devel] compile openmpi error on debian";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  3 07:09:36 2010" -->
<!-- isoreceived="20100403110936" -->
<!-- sent="Sat, 3 Apr 2010 07:09:31 -0400" -->
<!-- isosent="20100403110931" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] compile openmpi error on debian" -->
<!-- id="2B917894-7ADA-4DAA-A61E-BB14E4504CE9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="k2z632a27d11004022222gafbf3691l1f399842c42d9e01_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-03 07:09:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7692.php">hu yaohui: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>Previous message:</strong> <a href="7690.php">hu yaohui: "[OMPI devel] compile openmpi error on debian"</a>
<li><strong>In reply to:</strong> <a href="7690.php">hu yaohui: "[OMPI devel] compile openmpi error on debian"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7692.php">hu yaohui: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>Reply:</strong> <a href="7692.php">hu yaohui: "Re: [OMPI devel] compile openmpi error on debian"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you try Open MPI v1.4.1?
<br>
<p>If that doesn't work, you can disable building VampirTrace; it's an optional component of Open MPI with the following configure argument:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;./configure --enable-contrib-no-build=vt ...
<br>
<p><p><p>On Apr 3, 2010, at 1:22 AM, hu yaohui wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; when i make openmpi on debian, i meet the following error that i dont know why?
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; Making all in vtfilter
</span><br>
<span class="quotelev1">&gt; make[6]: Entering directory `/root/openmpi-1.4-ht/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev1">&gt; g++ -DHAVE_CONFIG_H -I. -I../.. -I../../extlib/otf/otflib -I../../extlib/otf/otflib -I../../vtlib/ -I../../vtlib  -D_GNU_SOURCE -fopenmp -DVT_OMP -g -finline-functions -pthread -MT vtfilter-vt_filter.o -MD -MP -MF .deps/vtfilter-vt_filter.Tpo -c -o vtfilter-vt_filter.o `test -f 'vt_filter.cc' || echo './'`vt_filter.cc
</span><br>
<span class="quotelev1">&gt; cc1plus: error: unrecognized command line option &quot;-fopenmp&quot;
</span><br>
<span class="quotelev1">&gt; make[6]: *** [vtfilter-vt_filter.o] Error 1
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory `/root/openmpi-1.4-ht/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev1">&gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory `/root/openmpi-1.4-ht/ompi/contrib/vt/vt/tools'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/root/openmpi-1.4-ht/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/root/openmpi-1.4-ht/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/root/openmpi-1.4-ht/ompi/contrib/vt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/root/openmpi-1.4-ht/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; &lt;/snip&gt;
</span><br>
<span class="quotelev1">&gt; someone tell me it's the gcc version's problem,but my gcc is the latest one,
</span><br>
<span class="quotelev1">&gt; is someone know the reason i meet this probelm
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks &amp; Regards
</span><br>
<span class="quotelev1">&gt; Yaohui Hu
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7692.php">hu yaohui: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>Previous message:</strong> <a href="7690.php">hu yaohui: "[OMPI devel] compile openmpi error on debian"</a>
<li><strong>In reply to:</strong> <a href="7690.php">hu yaohui: "[OMPI devel] compile openmpi error on debian"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7692.php">hu yaohui: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>Reply:</strong> <a href="7692.php">hu yaohui: "Re: [OMPI devel] compile openmpi error on debian"</a>
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
