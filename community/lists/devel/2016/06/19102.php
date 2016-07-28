<?
$subject_val = "Re: [OMPI devel] v2.x nightly tarball created";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 13:33:00 2016" -->
<!-- isoreceived="20160615173300" -->
<!-- sent="Wed, 15 Jun 2016 11:32:57 -0600" -->
<!-- isosent="20160615173257" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v2.x nightly tarball created" -->
<!-- id="57619149.8090303_at_cora.nwra.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="A54DF448-347B-40F1-88A5-4A74B70A2620_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v2.x nightly tarball created<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 13:32:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19103.php">Howard Pritchard: "[OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<li><strong>Previous message:</strong> <a href="19101.php">Ralph Castain: "[OMPI devel] Last call: OMPI v1.10.3 release"</a>
<li><strong>In reply to:</strong> <a href="19100.php">Jeff Squyres (jsquyres): "[OMPI devel] v2.x nightly tarball created"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 06/14/2016 10:37 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Per discussion on the webex today, a new nightly snapshot tarball was just created for the v2.x branch with all the latest MPI_Request updates:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="https://www.open-mpi.org/nightly/v2.x/">https://www.open-mpi.org/nightly/v2.x/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please be sure to test this; we'd like to make a v2.0.0rc3 tarball with all these changes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>It appears that
<br>
<a href="https://github.com/open-mpi/ompi/commit/11e2d7886eaf90089e7bc85cad5bc1c89c38afcd">https://github.com/open-mpi/ompi/commit/11e2d7886eaf90089e7bc85cad5bc1c89c38afcd</a>
<br>
appears to break building on Fedora rawhide due to use of __malloc_hook_init:
<br>
<p>libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../ompi/include
<br>
-I../oshmem/include
<br>
-I../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen
<br>
-I../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen
<br>
-I../ompi/mpiext/cuda/c -I.. -I../orte/include -DNDEBUG -O2 -g -pipe -Wall
<br>
-Werror=format-security -Wp,-D_FORTIFY_SOURCE=2 -fexceptions
<br>
-fstack-protector-strong --param=ssp-buffer-size=4 -grecord-gcc-switches
<br>
-specs=/usr/lib/rpm/redhat/redhat-hardened-cc1 -m64 -mtune=generic
<br>
-finline-functions -fno-strict-aliasing -pthread -MT runtime/ompi_mpi_init.lo
<br>
-MD -MP -MF runtime/.deps/ompi_mpi_init.Tpo -c runtime/ompi_mpi_init.c  -fPIC
<br>
-DPIC -o runtime/.libs/ompi_mpi_init.o
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../opal/include -I../ompi/include
<br>
-I../oshmem/include
<br>
-I../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen
<br>
-I../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen
<br>
-I../ompi/mpiext/cuda/c -I.. -I../orte/include -DNDEBUG -O2 -g -pipe -Wall
<br>
-Werror=format-security -Wp,-D_FORTIFY_SOURCE=2 -fexceptions
<br>
-fstack-protector-strong --param=ssp-buffer-size=4 -grecord-gcc-switches
<br>
-specs=/usr/lib/rpm/redhat/redhat-hardened-cc1 -m64 -mtune=generic
<br>
-finline-functions -fno-strict-aliasing -pthread -MT
<br>
runtime/ompi_mpi_finalize.lo -MD -MP -MF runtime/.deps/ompi_mpi_finalize.Tpo
<br>
-c runtime/ompi_mpi_finalize.c  -fPIC -DPIC -o runtime/.libs/ompi_mpi_finalize.o
<br>
runtime/ompi_mpi_init.c:101:22: error: attempt to use poisoned
<br>
&quot;__malloc_initialize_hook&quot;
<br>
&nbsp;OPAL_DECLSPEC void (*__malloc_initialize_hook) (void) =
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p><p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder/CoRA Office             FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19103.php">Howard Pritchard: "[OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<li><strong>Previous message:</strong> <a href="19101.php">Ralph Castain: "[OMPI devel] Last call: OMPI v1.10.3 release"</a>
<li><strong>In reply to:</strong> <a href="19100.php">Jeff Squyres (jsquyres): "[OMPI devel] v2.x nightly tarball created"</a>
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
