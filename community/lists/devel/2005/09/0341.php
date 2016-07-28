<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 13 15:22:54 2005" -->
<!-- isoreceived="20050913202254" -->
<!-- sent="Tue, 13 Sep 2005 14:22:45 -0600" -->
<!-- isosent="20050913202245" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re:  OMPI compile failing" -->
<!-- id="78BF04C7-77CD-4223-9FE5-73477508B4F3_at_cs.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43272DA3.1070506_at_lanl.gov" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-13 15:22:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0342.php">Galen M. Shipman: "Re:  OMPI compile failing"</a>
<li><strong>Previous message:</strong> <a href="0340.php">George Bosilca: "Re:  OMPI compile failing"</a>
<li><strong>In reply to:</strong> <a href="0337.php">Nathan DeBardeleben: "OMPI compile failing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking into it now.. looks like a type or two..
<br>
<p>On Sep 13, 2005, at 1:50 PM, Nathan DeBardeleben wrote:
<br>
<p><span class="quotelev1">&gt; Compiling I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  gcc -DHAVE_CONFIG_H -I. -I. -I../../../../include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../include -I../../../../include -I../../../..
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../.. -I../../../../include -I../../../../opal
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../orte -I../../../../ompi -g -Wall -Wundef -Wno-long-long
</span><br>
<span class="quotelev2">&gt;&gt; -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment
</span><br>
<span class="quotelev2">&gt;&gt; -pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -MT btl_gm.lo -MD -MP -MF .deps/btl_gm.Tpo -c btl_gm.c  -fPIC - 
</span><br>
<span class="quotelev2">&gt;&gt; DPIC -o
</span><br>
<span class="quotelev2">&gt;&gt; .libs/btl_gm.o
</span><br>
<span class="quotelev2">&gt;&gt; btl_gm.c: In function `mca_btl_gm_prepare_src':
</span><br>
<span class="quotelev2">&gt;&gt; btl_gm.c:237: error: `gm_btl' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; btl_gm.c:237: error: (Each undeclared identifier is reported only  
</span><br>
<span class="quotelev2">&gt;&gt; once
</span><br>
<span class="quotelev2">&gt;&gt; btl_gm.c:237: error: for each function it appears in.)
</span><br>
<span class="quotelev2">&gt;&gt; btl_gm.c: In function `mca_btl_gm_prepare_dst':
</span><br>
<span class="quotelev2">&gt;&gt; btl_gm.c:398: warning: ISO C89 forbids mixed declarations and code
</span><br>
<span class="quotelev2">&gt;&gt; btl_gm.c:404: error: structure has no member named `mpoo_retain'
</span><br>
<span class="quotelev2">&gt;&gt; btl_gm.c:381: warning: unused variable `gm_btl'
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [btl_gm.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory `/home/ndebard/ompi/ompi/mca/btl/gm'
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/home/ndebard/ompi/ompi/dynamic-mca/btl'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/ndebard/ompi/ompi/dynamic-mca'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/ndebard/ompi/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; [sparkplug]~/ompi &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've configured using the option I thought to disable this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mca-no-build=ptl-gm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I even tried --enable-mca-no-build=btl-gm.
</span><br>
<span class="quotelev1">&gt; No luck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -- Nathan
</span><br>
<span class="quotelev1">&gt; Correspondence
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; High Performance Computing Environments
</span><br>
<span class="quotelev1">&gt; phone: 505-667-3428
</span><br>
<span class="quotelev1">&gt; email: ndebard_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0342.php">Galen M. Shipman: "Re:  OMPI compile failing"</a>
<li><strong>Previous message:</strong> <a href="0340.php">George Bosilca: "Re:  OMPI compile failing"</a>
<li><strong>In reply to:</strong> <a href="0337.php">Nathan DeBardeleben: "OMPI compile failing"</a>
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
