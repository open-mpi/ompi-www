<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  2 19:54:55 2007" -->
<!-- isoreceived="20071002235455" -->
<!-- sent="Tue, 2 Oct 2007 13:54:49 -0600" -->
<!-- isosent="20071002195449" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB component static compile failures" -->
<!-- id="ADAB152B-D288-46A7-BC89-B1E3F1F729E8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="06A28910-4DC0-41D1-8B50-B343D94DC40E_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-02 15:54:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2378.php">Torje Henriksen: "[OMPI devel] Any info regarding sm availible?"</a>
<li><strong>Previous message:</strong> <a href="2376.php">Jeff Squyres: "Re: [OMPI devel] OpenIB component static compile failures"</a>
<li><strong>In reply to:</strong> <a href="2375.php">Brian Barrett: "Re: [OMPI devel] OpenIB component static compile failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
By the way, I filed a bug on this issue:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1155">https://svn.open-mpi.org/trac/ompi/ticket/1155</a>
<br>
<p>Brian
<br>
<p><p>On Oct 2, 2007, at 8:57 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; No, actually, my report isn't about that issue at all.  I'm not  
</span><br>
<span class="quotelev1">&gt; talking about making an entirely statically built application.  I'm  
</span><br>
<span class="quotelev1">&gt; talking about a statically compiled Open MPI with a dynamically  
</span><br>
<span class="quotelev1">&gt; linked application and OFED.  Take a look at the output of mpicc - 
</span><br>
<span class="quotelev1">&gt; showme -- it's not adding *ANY* -l or -L options for InfiniBand.   
</span><br>
<span class="quotelev1">&gt; This is something wrong with Open MPI's configure, which has  
</span><br>
<span class="quotelev1">&gt; changed since v1.2.  On v1.2, the same commands result in:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [10:54] brbarret_at_odin:pts/27 v1.2&gt; mpicc -showme
</span><br>
<span class="quotelev1">&gt; gcc -I/u/brbarret/Software/x86_64-unknown-linux-gnu/ompi/devel/ 
</span><br>
<span class="quotelev1">&gt; include -pthread -L/usr/local/ofed/lib64 -L/u/brbarret/Software/ 
</span><br>
<span class="quotelev1">&gt; x86_64-unknown-linux-gnu/ompi/devel/lib -lmpi -lopen-rte -lopen-pal  
</span><br>
<span class="quotelev1">&gt; -libverbs -lrt -lnuma -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt; [10:55] brbarret_at_odin:pts/27 examples&gt; make ring_c
</span><br>
<span class="quotelev1">&gt; mpicc -g    ring_c.c   -o ring_c
</span><br>
<span class="quotelev1">&gt; [10:55] brbarret_at_odin:pts/27 examples&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 1, 2007, at 10:21 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a known issue; no one had expressed any desire to have it  
</span><br>
<span class="quotelev2">&gt;&gt; fixed:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/faq/?category=mpi-apps#static-mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps#static-mpi-apps</a>
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/faq/?category=mpi-apps#static-ofa-mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps#static-ofa-mpi-apps</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Feel free to file a ticket and fix if you'd like...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 1, 2007, at 11:56 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There's a problem with the OpenIB components when statically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linking.  For whatever reason, the configure logic is not adding the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; right -L and -l flags to the mpicc wrapper flags.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [17:26] brbarret_at_odin:pts/8 examples&gt; mpicc -showme
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc -I/u/brbarret/Software/x86_64-unknown-linux-gnu/ompi/devel/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; include -pthread -L/u/brbarret/Software/x86_64-unknown-linux-gnu/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel/lib -lmpi -lopen-rte -lopen-pal -lnuma -ldl -Wl,--export-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [17:42] brbarret_at_odin:pts/8 examples&gt; make hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc -g    hello_c.c   -o hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /u/brbarret/Software/x86_64-unknown-linux-gnu/ompi/devel/lib/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (btl_openib_component.o)(.text+0x895): In function `openib_reg_mr':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /u/brbarret/odin/ompi/trunk/ompi/mca/btl/openib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_component.c:304: undefined reference to `ibv_reg_mr'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and many more, obviously.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good luck,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2378.php">Torje Henriksen: "[OMPI devel] Any info regarding sm availible?"</a>
<li><strong>Previous message:</strong> <a href="2376.php">Jeff Squyres: "Re: [OMPI devel] OpenIB component static compile failures"</a>
<li><strong>In reply to:</strong> <a href="2375.php">Brian Barrett: "Re: [OMPI devel] OpenIB component static compile failures"</a>
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
