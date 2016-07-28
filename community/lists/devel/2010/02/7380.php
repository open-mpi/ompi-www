<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 15:26:09 2010" -->
<!-- isoreceived="20100208202609" -->
<!-- sent="Mon, 8 Feb 2010 15:25:59 -0500" -->
<!-- isosent="20100208202559" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="A273A43E-F9CB-4592-99AA-218F78F0FAA2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201002080213.o182DX9o012022_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-08 15:25:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7381.php">Jeff Squyres: "Re: [OMPI devel] Create success (r1.7a1r22577)"</a>
<li><strong>Previous message:</strong> <a href="7379.php">Caciano Machado: "[OMPI devel] Vprotocol pessimist - Open MPI 1.4.1 and 1.4.2a1r22558"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8640.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The build machine at IU was running out of disk space.
<br>
<p>I'm not 100% sure that this is the underlying error, but I'm going to kick off another build and see if we get the same dist error.  If so, I'll dig more.
<br>
<p><p>On Feb 7, 2010, at 9:13 PM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev1">&gt;        make distcheck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Start time: Sun Feb  7 21:00:06 EST 2010
</span><br>
<span class="quotelev1">&gt; End time:   Sun Feb  7 21:13:33 EST 2010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt;   CC     opal_convertor_raw.lo
</span><br>
<span class="quotelev1">&gt;   CC     opal_copy_functions.lo
</span><br>
<span class="quotelev1">&gt;   CC     opal_copy_functions_heterogeneous.lo
</span><br>
<span class="quotelev1">&gt;   CC     opal_datatype_add.lo
</span><br>
<span class="quotelev1">&gt;   CC     opal_datatype_clone.lo
</span><br>
<span class="quotelev1">&gt;   CC     opal_datatype_copy.lo
</span><br>
<span class="quotelev1">&gt;   CC     opal_datatype_create.lo
</span><br>
<span class="quotelev1">&gt;   CC     opal_datatype_create_contiguous.lo
</span><br>
<span class="quotelev1">&gt;   CC     opal_datatype_destroy.lo
</span><br>
<span class="quotelev1">&gt;   CC     opal_datatype_dump.lo
</span><br>
<span class="quotelev1">&gt;   CC     opal_datatype_fake_stack.lo
</span><br>
<span class="quotelev1">&gt;   CC     opal_datatype_get_count.lo
</span><br>
<span class="quotelev1">&gt;   CC     opal_datatype_module.lo
</span><br>
<span class="quotelev1">&gt;   CC     opal_datatype_optimize.lo
</span><br>
<span class="quotelev1">&gt;   CC     opal_datatype_pack.lo
</span><br>
<span class="quotelev1">&gt;   CC     opal_datatype_position.lo
</span><br>
<span class="quotelev1">&gt;   CC     opal_datatype_resize.lo
</span><br>
<span class="quotelev1">&gt;   CC     opal_datatype_unpack.lo
</span><br>
<span class="quotelev1">&gt;   CCLD   libdatatype.la
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22568/ompi/openmpi-1.7a1r22568/_build/opal/datatype'
</span><br>
<span class="quotelev1">&gt; Making all in etc
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22568/ompi/openmpi-1.7a1r22568/_build/opal/etc'
</span><br>
<span class="quotelev1">&gt; make[3]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22568/ompi/openmpi-1.7a1r22568/_build/opal/etc'
</span><br>
<span class="quotelev1">&gt; Making all in event
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22568/ompi/openmpi-1.7a1r22568/_build/opal/event'
</span><br>
<span class="quotelev1">&gt; Making all in compat
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22568/ompi/openmpi-1.7a1r22568/_build/opal/event/compat'
</span><br>
<span class="quotelev1">&gt; Making all in sys
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22568/ompi/openmpi-1.7a1r22568/_build/opal/event/compat/sys'
</span><br>
<span class="quotelev1">&gt; make[5]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22568/ompi/openmpi-1.7a1r22568/_build/opal/event/compat/sys'
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22568/ompi/openmpi-1.7a1r22568/_build/opal/event/compat'
</span><br>
<span class="quotelev1">&gt; make[5]: Nothing to be done for `all-am'.
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22568/ompi/openmpi-1.7a1r22568/_build/opal/event/compat'
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22568/ompi/openmpi-1.7a1r22568/_build/opal/event/compat'
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22568/ompi/openmpi-1.7a1r22568/_build/opal/event'
</span><br>
<span class="quotelev1">&gt;   CC     event.lo
</span><br>
<span class="quotelev1">&gt;   CC     log.lo
</span><br>
<span class="quotelev1">&gt;   CC     evutil.lo
</span><br>
<span class="quotelev1">&gt; ../../../opal/event/evutil.c:201:2: #error &quot;I don't know how to parse 64-bit integers.&quot;
</span><br>
<span class="quotelev1">&gt; make[4]: *** [evutil.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22568/ompi/openmpi-1.7a1r22568/_build/opal/event'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22568/ompi/openmpi-1.7a1r22568/_build/opal/event'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22568/ompi/openmpi-1.7a1r22568/_build/opal'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r22568/ompi/openmpi-1.7a1r22568/_build'
</span><br>
<span class="quotelev1">&gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt; Cyrador
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; testing mailing list
</span><br>
<span class="quotelev1">&gt; testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="7381.php">Jeff Squyres: "Re: [OMPI devel] Create success (r1.7a1r22577)"</a>
<li><strong>Previous message:</strong> <a href="7379.php">Caciano Machado: "[OMPI devel] Vprotocol pessimist - Open MPI 1.4.1 and 1.4.2a1r22558"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8640.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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
