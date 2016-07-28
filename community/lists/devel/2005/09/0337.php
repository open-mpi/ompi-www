<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 13 14:51:05 2005" -->
<!-- isoreceived="20050913195105" -->
<!-- sent="Tue, 13 Sep 2005 13:50:59 -0600" -->
<!-- isosent="20050913195059" -->
<!-- name="Nathan DeBardeleben" -->
<!-- email="ndebard_at_[hidden]" -->
<!-- subject="OMPI compile failing" -->
<!-- id="43272DA3.1070506_at_lanl.gov" -->
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
<strong>From:</strong> Nathan DeBardeleben (<em>ndebard_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-13 14:50:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0338.php">Tim S. Woodall: "Re:  OMPI compile failing"</a>
<li><strong>Previous message:</strong> <a href="0336.php">Ralf Wildenhues: "Re:  64bit shared library problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0338.php">Tim S. Woodall: "Re:  OMPI compile failing"</a>
<li><strong>Reply:</strong> <a href="0338.php">Tim S. Woodall: "Re:  OMPI compile failing"</a>
<li><strong>Reply:</strong> <a href="0341.php">Galen M. Shipman: "Re:  OMPI compile failing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Compiling I get:
<br>
<p><span class="quotelev1">&gt;  gcc -DHAVE_CONFIG_H -I. -I. -I../../../../include 
</span><br>
<span class="quotelev1">&gt; -I../../../../include -I../../../../include -I../../../.. 
</span><br>
<span class="quotelev1">&gt; -I../../../.. -I../../../../include -I../../../../opal 
</span><br>
<span class="quotelev1">&gt; -I../../../../orte -I../../../../ompi -g -Wall -Wundef -Wno-long-long 
</span><br>
<span class="quotelev1">&gt; -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment 
</span><br>
<span class="quotelev1">&gt; -pedantic -Werror-implicit-function-declaration -fno-strict-aliasing 
</span><br>
<span class="quotelev1">&gt; -MT btl_gm.lo -MD -MP -MF .deps/btl_gm.Tpo -c btl_gm.c  -fPIC -DPIC -o 
</span><br>
<span class="quotelev1">&gt; .libs/btl_gm.o
</span><br>
<span class="quotelev1">&gt; btl_gm.c: In function `mca_btl_gm_prepare_src':
</span><br>
<span class="quotelev1">&gt; btl_gm.c:237: error: `gm_btl' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; btl_gm.c:237: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; btl_gm.c:237: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; btl_gm.c: In function `mca_btl_gm_prepare_dst':
</span><br>
<span class="quotelev1">&gt; btl_gm.c:398: warning: ISO C89 forbids mixed declarations and code
</span><br>
<span class="quotelev1">&gt; btl_gm.c:404: error: structure has no member named `mpoo_retain'
</span><br>
<span class="quotelev1">&gt; btl_gm.c:381: warning: unused variable `gm_btl'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [btl_gm.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/ndebard/ompi/ompi/mca/btl/gm'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/ndebard/ompi/ompi/dynamic-mca/btl'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/ndebard/ompi/ompi/dynamic-mca'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/ndebard/ompi/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; [sparkplug]~/ompi &gt; 
</span><br>
<p>I've configured using the option I thought to disable this:
<br>
<p><span class="quotelev1">&gt; --enable-mca-no-build=ptl-gm
</span><br>
<p>I even tried --enable-mca-no-build=btl-gm.
<br>
No luck.
<br>
<p><pre>
-- 
-- Nathan
Correspondence
---------------------------------------------------------------------
Nathan DeBardeleben, Ph.D.
Los Alamos National Laboratory
Parallel Tools Team
High Performance Computing Environments
phone: 505-667-3428
email: ndebard_at_[hidden]
---------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0338.php">Tim S. Woodall: "Re:  OMPI compile failing"</a>
<li><strong>Previous message:</strong> <a href="0336.php">Ralf Wildenhues: "Re:  64bit shared library problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0338.php">Tim S. Woodall: "Re:  OMPI compile failing"</a>
<li><strong>Reply:</strong> <a href="0338.php">Tim S. Woodall: "Re:  OMPI compile failing"</a>
<li><strong>Reply:</strong> <a href="0341.php">Galen M. Shipman: "Re:  OMPI compile failing"</a>
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
