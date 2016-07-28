<?
$subject_val = "[OMPI devel] compile openmpi error on debian";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  3 01:22:05 2010" -->
<!-- isoreceived="20100403052205" -->
<!-- sent="Sat, 3 Apr 2010 13:22:01 +0800" -->
<!-- isosent="20100403052201" -->
<!-- name="hu yaohui" -->
<!-- email="loki2441_at_[hidden]" -->
<!-- subject="[OMPI devel] compile openmpi error on debian" -->
<!-- id="k2z632a27d11004022222gafbf3691l1f399842c42d9e01_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] compile openmpi error on debian<br>
<strong>From:</strong> hu yaohui (<em>loki2441_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-03 01:22:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7691.php">Jeff Squyres: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>Previous message:</strong> <a href="7689.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (9)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7691.php">Jeff Squyres: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>Reply:</strong> <a href="7691.php">Jeff Squyres: "Re: [OMPI devel] compile openmpi error on debian"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
when i make openmpi on debian, i meet the following error that i dont know
<br>
why?
<br>
&lt;snip&gt;
<br>
Making all in vtfilter
<br>
make[6]: Entering directory
<br>
`/root/openmpi-1.4-ht/ompi/contrib/vt/vt/tools/vtfilter'
<br>
g++ -DHAVE_CONFIG_H -I. -I../.. -I../../extlib/otf/otflib
<br>
-I../../extlib/otf/otflib -I../../vtlib/ -I../../vtlib  -D_GNU_SOURCE
<br>
-fopenmp -DVT_OMP -g -finline-functions -pthread -MT vtfilter-vt_filter.o
<br>
-MD -MP -MF .deps/vtfilter-vt_filter.Tpo -c -o vtfilter-vt_filter.o `test -f
<br>
'vt_filter.cc' || echo './'`vt_filter.cc
<br>
cc1plus: error: unrecognized command line option &quot;-fopenmp&quot;
<br>
make[6]: *** [vtfilter-vt_filter.o] Error 1
<br>
make[6]: Leaving directory
<br>
`/root/openmpi-1.4-ht/ompi/contrib/vt/vt/tools/vtfilter'
<br>
make[5]: *** [all-recursive] Error 1
<br>
make[5]: Leaving directory `/root/openmpi-1.4-ht/ompi/contrib/vt/vt/tools'
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[4]: Leaving directory `/root/openmpi-1.4-ht/ompi/contrib/vt/vt'
<br>
make[3]: *** [all] Error 2
<br>
make[3]: Leaving directory `/root/openmpi-1.4-ht/ompi/contrib/vt/vt'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/root/openmpi-1.4-ht/ompi/contrib/vt'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/root/openmpi-1.4-ht/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
&lt;/snip&gt;
<br>
someone tell me it's the gcc version's problem,but my gcc is the latest one,
<br>
is someone know the reason i meet this probelm
<br>
<p>Thanks &amp; Regards
<br>
Yaohui Hu
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7690/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7691.php">Jeff Squyres: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>Previous message:</strong> <a href="7689.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (9)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7691.php">Jeff Squyres: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>Reply:</strong> <a href="7691.php">Jeff Squyres: "Re: [OMPI devel] compile openmpi error on debian"</a>
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
