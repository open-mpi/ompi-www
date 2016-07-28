<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  2 00:21:10 2007" -->
<!-- isoreceived="20071002042110" -->
<!-- sent="Tue, 2 Oct 2007 06:21:05 +0200" -->
<!-- isosent="20071002042105" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB component static compile failures" -->
<!-- id="4241A24E-E183-4AEF-AC97-E29860CC3DD5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="72075DAE-8EB5-4C39-88C7-AD44A10BF6BC_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-02 00:21:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2374.php">Rolf.Vandevaart_at_[hidden]: "[OMPI devel] --mca btl_base_debug"</a>
<li><strong>Previous message:</strong> <a href="2372.php">Brian Barrett: "[OMPI devel] OpenIB component static compile failures"</a>
<li><strong>In reply to:</strong> <a href="2372.php">Brian Barrett: "[OMPI devel] OpenIB component static compile failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2375.php">Brian Barrett: "Re: [OMPI devel] OpenIB component static compile failures"</a>
<li><strong>Reply:</strong> <a href="2375.php">Brian Barrett: "Re: [OMPI devel] OpenIB component static compile failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a known issue; no one had expressed any desire to have it fixed:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=mpi-apps#static-mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps#static-mpi-apps</a>
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=mpi-apps#static-ofa-mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps#static-ofa-mpi-apps</a>
<br>
<p>Feel free to file a ticket and fix if you'd like...
<br>
<p><p>On Oct 1, 2007, at 11:56 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's a problem with the OpenIB components when statically
</span><br>
<span class="quotelev1">&gt; linking.  For whatever reason, the configure logic is not adding the
</span><br>
<span class="quotelev1">&gt; right -L and -l flags to the mpicc wrapper flags.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [17:26] brbarret_at_odin:pts/8 examples&gt; mpicc -showme
</span><br>
<span class="quotelev1">&gt; gcc -I/u/brbarret/Software/x86_64-unknown-linux-gnu/ompi/devel/
</span><br>
<span class="quotelev1">&gt; include -pthread -L/u/brbarret/Software/x86_64-unknown-linux-gnu/ompi/
</span><br>
<span class="quotelev1">&gt; devel/lib -lmpi -lopen-rte -lopen-pal -lnuma -ldl -Wl,--export-
</span><br>
<span class="quotelev1">&gt; dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt; [17:42] brbarret_at_odin:pts/8 examples&gt; make hello_c
</span><br>
<span class="quotelev1">&gt; mpicc -g    hello_c.c   -o hello_c
</span><br>
<span class="quotelev1">&gt; /u/brbarret/Software/x86_64-unknown-linux-gnu/ompi/devel/lib/libmpi.a
</span><br>
<span class="quotelev1">&gt; (btl_openib_component.o)(.text+0x895): In function `openib_reg_mr':
</span><br>
<span class="quotelev1">&gt; /u/brbarret/odin/ompi/trunk/ompi/mca/btl/openib/
</span><br>
<span class="quotelev1">&gt; btl_openib_component.c:304: undefined reference to `ibv_reg_mr'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and many more, obviously.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good luck,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2374.php">Rolf.Vandevaart_at_[hidden]: "[OMPI devel] --mca btl_base_debug"</a>
<li><strong>Previous message:</strong> <a href="2372.php">Brian Barrett: "[OMPI devel] OpenIB component static compile failures"</a>
<li><strong>In reply to:</strong> <a href="2372.php">Brian Barrett: "[OMPI devel] OpenIB component static compile failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2375.php">Brian Barrett: "Re: [OMPI devel] OpenIB component static compile failures"</a>
<li><strong>Reply:</strong> <a href="2375.php">Brian Barrett: "Re: [OMPI devel] OpenIB component static compile failures"</a>
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
