<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 17:56:33 2007" -->
<!-- isoreceived="20071001215633" -->
<!-- sent="Mon, 1 Oct 2007 15:56:27 -0600" -->
<!-- isosent="20071001215627" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenIB component static compile failures" -->
<!-- id="72075DAE-8EB5-4C39-88C7-AD44A10BF6BC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-10-01 17:56:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2373.php">Jeff Squyres: "Re: [OMPI devel] OpenIB component static compile failures"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/09/2371.php">Adrian Knoth: "Re: [OMPI devel] Small manual page patches from Debian package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2373.php">Jeff Squyres: "Re: [OMPI devel] OpenIB component static compile failures"</a>
<li><strong>Reply:</strong> <a href="2373.php">Jeff Squyres: "Re: [OMPI devel] OpenIB component static compile failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>There's a problem with the OpenIB components when statically  
<br>
linking.  For whatever reason, the configure logic is not adding the  
<br>
right -L and -l flags to the mpicc wrapper flags.
<br>
<p>[17:26] brbarret_at_odin:pts/8 examples&gt; mpicc -showme
<br>
gcc -I/u/brbarret/Software/x86_64-unknown-linux-gnu/ompi/devel/ 
<br>
include -pthread -L/u/brbarret/Software/x86_64-unknown-linux-gnu/ompi/ 
<br>
devel/lib -lmpi -lopen-rte -lopen-pal -lnuma -ldl -Wl,--export- 
<br>
dynamic -lnsl -lutil -lm -ldl
<br>
[17:42] brbarret_at_odin:pts/8 examples&gt; make hello_c
<br>
mpicc -g    hello_c.c   -o hello_c
<br>
/u/brbarret/Software/x86_64-unknown-linux-gnu/ompi/devel/lib/libmpi.a 
<br>
(btl_openib_component.o)(.text+0x895): In function `openib_reg_mr':
<br>
/u/brbarret/odin/ompi/trunk/ompi/mca/btl/openib/ 
<br>
btl_openib_component.c:304: undefined reference to `ibv_reg_mr'
<br>
<p>and many more, obviously.
<br>
<p>Good luck,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2373.php">Jeff Squyres: "Re: [OMPI devel] OpenIB component static compile failures"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/09/2371.php">Adrian Knoth: "Re: [OMPI devel] Small manual page patches from Debian package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2373.php">Jeff Squyres: "Re: [OMPI devel] OpenIB component static compile failures"</a>
<li><strong>Reply:</strong> <a href="2373.php">Jeff Squyres: "Re: [OMPI devel] OpenIB component static compile failures"</a>
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
