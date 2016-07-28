<?
$subject_val = "[OMPI devel] memchecker build broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 09:21:24 2008" -->
<!-- isoreceived="20080212142124" -->
<!-- sent="Tue, 12 Feb 2008 09:21:02 -0500" -->
<!-- isosent="20080212142102" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] memchecker build broken" -->
<!-- id="67AFF2AA-1885-4938-BC1B-72C9A5A7E4E2_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] memchecker build broken<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 09:21:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3204.php">Josh Hursey: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<li><strong>Previous message:</strong> <a href="3202.php">Jeff Squyres: "[OMPI devel] C++ build failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To simplify things, I'm going to start filing tickets for all build  
<br>
breaks that I find.  Here's the latest:
<br>
<p>libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal/include - 
<br>
I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/ 
<br>
linux/plpa/src/libplpa -I../.. -DOMPI_TV_DLL=\&quot;/home/jsquyres/bogus/ 
<br>
lib/openmpi/libompitv.so\&quot; -Wall -Wundef -Wno-long-long -Wsign-compare  
<br>
-Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror- 
<br>
implicit-function-declaration -finline-functions -fno-strict-aliasing - 
<br>
pthread -g -MT libdebuggers_la-ompi_totalview.lo -MD -MP -MF .deps/ 
<br>
libdebuggers_la-ompi_totalview.Tpo -c ompi_totalview.c  -fPIC -DPIC - 
<br>
o .libs/libdebuggers_la-ompi_totalview.o
<br>
In file included from ../../ompi/mca/pml/base/pml_base_request.h:28,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ompi_dll.c:71:
<br>
../../ompi/include/ompi/memchecker.h:22:31: valgrind/valgrind.h: No  
<br>
such file or directory
<br>
In file included from ../../ompi/mca/pml/base/pml_base_request.h:28,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ompi_totalview.c:42:
<br>
../../ompi/include/ompi/memchecker.h:22:31: valgrind/valgrind.h: No  
<br>
such file or directory
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3204.php">Josh Hursey: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<li><strong>Previous message:</strong> <a href="3202.php">Jeff Squyres: "[OMPI devel] C++ build failures"</a>
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
