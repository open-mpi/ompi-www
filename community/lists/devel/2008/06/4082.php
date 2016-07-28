<?
$subject_val = "Re: [OMPI devel] parallel make install";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 17:37:19 2008" -->
<!-- isoreceived="20080603213719" -->
<!-- sent="Tue, 3 Jun 2008 17:37:03 -0400" -->
<!-- isosent="20080603213703" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] parallel make install" -->
<!-- id="813C0C57-D33A-4174-935D-E3C0F4A681A0_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46147903-BAA9-4AAB-98DB-02F22B8DF471_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] parallel make install<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-03 17:37:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4083.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Previous message:</strong> <a href="4081.php">Jeff Squyres: "Re: [OMPI devel] parallel make install"</a>
<li><strong>In reply to:</strong> <a href="4081.php">Jeff Squyres: "Re: [OMPI devel] parallel make install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4083.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This happens for me on several systems. Usually when NFS is involved,  
<br>
but it happened lately on my MAC laptop.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 3, 2008, at 5:11 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for following up on this -- I saw this as well and was dubious,
</span><br>
<span class="quotelev1">&gt; but didn't have a chance to follow up with Tim.  I saw the mail that
</span><br>
<span class="quotelev1">&gt; showed the failed tarball build -- here's the output (I don't know if
</span><br>
<span class="quotelev1">&gt; we have any more records than this; Tim?):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status
</span><br>
<span class="quotelev1">&gt;       make -j 4 distcheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Start time: Fri May 30 00:13:38 EDT 2008
</span><br>
<span class="quotelev1">&gt; End time:   Fri May 30 00:30:16 EDT 2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt; make[3]: Nothing to be done for `install-exec-am'.
</span><br>
<span class="quotelev1">&gt; test -z &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/ 
</span><br>
<span class="quotelev1">&gt; create-
</span><br>
<span class="quotelev1">&gt; r18551/ompi/openmpi-1.3a1r18551/_inst/share/openmpi/amca-param-sets&quot;
</span><br>
<span class="quotelev1">&gt; || /bin/mkdir -p &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/
</span><br>
<span class="quotelev1">&gt; trunk/create-r18551/ompi/openmpi-1.3a1r18551/_inst/share/openmpi/amca-
</span><br>
<span class="quotelev1">&gt; param-sets&quot;
</span><br>
<span class="quotelev1">&gt; /usr/bin/install -c -m 644 '../../contrib/amca-param-sets/
</span><br>
<span class="quotelev1">&gt; example.conf' '/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/
</span><br>
<span class="quotelev1">&gt; create-r18551/ompi/openmpi-1.3a1r18551/_inst/share/openmpi/amca-param-
</span><br>
<span class="quotelev1">&gt; sets/example.conf'
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/ 
</span><br>
<span class="quotelev1">&gt; contrib'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/ 
</span><br>
<span class="quotelev1">&gt; contrib'
</span><br>
<span class="quotelev1">&gt; Making install in opal
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal'
</span><br>
<span class="quotelev1">&gt; Making install in include
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/
</span><br>
<span class="quotelev1">&gt; include'
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/
</span><br>
<span class="quotelev1">&gt; include'
</span><br>
<span class="quotelev1">&gt; make[4]: Nothing to be done for `install-exec-am'.
</span><br>
<span class="quotelev1">&gt; test -z &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/ 
</span><br>
<span class="quotelev1">&gt; create-
</span><br>
<span class="quotelev1">&gt; r18551/ompi/openmpi-1.3a1r18551/_inst/include&quot; || /bin/mkdir -p &quot;/ 
</span><br>
<span class="quotelev1">&gt; home/
</span><br>
<span class="quotelev1">&gt; mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3a1r18551/_inst/include&quot;
</span><br>
<span class="quotelev1">&gt; test -z &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/ 
</span><br>
<span class="quotelev1">&gt; create-
</span><br>
<span class="quotelev1">&gt; r18551/ompi/openmpi-1.3a1r18551/_inst/include&quot; || /bin/mkdir -p &quot;/ 
</span><br>
<span class="quotelev1">&gt; home/
</span><br>
<span class="quotelev1">&gt; mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3a1r18551/_inst/include&quot;
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/
</span><br>
<span class="quotelev1">&gt; include'
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/
</span><br>
<span class="quotelev1">&gt; include'
</span><br>
<span class="quotelev1">&gt; Making install in libltdl
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/
</span><br>
<span class="quotelev1">&gt; libltdl'
</span><br>
<span class="quotelev1">&gt; make  install-am
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/
</span><br>
<span class="quotelev1">&gt; libltdl'
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/
</span><br>
<span class="quotelev1">&gt; libltdl'
</span><br>
<span class="quotelev1">&gt; test -z &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/ 
</span><br>
<span class="quotelev1">&gt; create-
</span><br>
<span class="quotelev1">&gt; r18551/ompi/openmpi-1.3a1r18551/_inst/lib&quot; || /bin/mkdir -p &quot;/home/
</span><br>
<span class="quotelev1">&gt; mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3a1r18551/_inst/lib&quot;
</span><br>
<span class="quotelev1">&gt; test -z &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/ 
</span><br>
<span class="quotelev1">&gt; create-
</span><br>
<span class="quotelev1">&gt; r18551/ompi/openmpi-1.3a1r18551/_inst/include&quot; || /bin/mkdir -p &quot;/ 
</span><br>
<span class="quotelev1">&gt; home/
</span><br>
<span class="quotelev1">&gt; mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3a1r18551/_inst/include&quot;
</span><br>
<span class="quotelev1">&gt; test -z &quot;&quot; || /bin/mkdir -p &quot;&quot;
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/
</span><br>
<span class="quotelev1">&gt; libltdl'
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/
</span><br>
<span class="quotelev1">&gt; libltdl'
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/
</span><br>
<span class="quotelev1">&gt; libltdl'
</span><br>
<span class="quotelev1">&gt; Making install in asm
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
</span><br>
<span class="quotelev1">&gt; asm'
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
</span><br>
<span class="quotelev1">&gt; asm'
</span><br>
<span class="quotelev1">&gt; make[4]: Nothing to be done for `install-exec-am'.
</span><br>
<span class="quotelev1">&gt; make[4]: Nothing to be done for `install-data-am'.
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
</span><br>
<span class="quotelev1">&gt; asm'
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
</span><br>
<span class="quotelev1">&gt; asm'
</span><br>
<span class="quotelev1">&gt; Making install in etc
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
</span><br>
<span class="quotelev1">&gt; etc'
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
</span><br>
<span class="quotelev1">&gt; etc'
</span><br>
<span class="quotelev1">&gt; test -z &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/ 
</span><br>
<span class="quotelev1">&gt; create-
</span><br>
<span class="quotelev1">&gt; r18551/ompi/openmpi-1.3a1r18551/_inst/etc&quot; || /bin/mkdir -p &quot;/home/
</span><br>
<span class="quotelev1">&gt; mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3a1r18551/_inst/etc&quot;
</span><br>
<span class="quotelev1">&gt; /usr/bin/install -c -m 644 ../../../opal/etc/openmpi-mca-params.conf /
</span><br>
<span class="quotelev1">&gt; home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/
</span><br>
<span class="quotelev1">&gt; ompi/openmpi-1.3a1r18551/_inst/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; /usr/bin/install: cannot create regular file `/home/mpiteam/openmpi/
</span><br>
<span class="quotelev1">&gt; nightly-tarball-build-root/trunk/create-r18551/ompi/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3a1r18551/_inst/etc/openmpi-mca-params.conf': No such file
</span><br>
<span class="quotelev1">&gt; or directory
</span><br>
<span class="quotelev1">&gt; make[4]: *** [install-data-local] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[4]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
</span><br>
<span class="quotelev1">&gt; etc'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
</span><br>
<span class="quotelev1">&gt; etc'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build'
</span><br>
<span class="quotelev1">&gt; make: *** [distcheck] Error 2
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim -- has this error happened before?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 3, 2008, at 5:07 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello there,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a change recently mentions this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; | r18552 | timattox | 2008-05-30 06:39:48 +0200 (Fri, 30 May 2008) |
</span><br>
<span class="quotelev2">&gt;&gt; 4 lines
</span><br>
<span class="quotelev2">&gt;&gt; | Changed paths:
</span><br>
<span class="quotelev2">&gt;&gt; |    M /trunk/contrib/nightly/create_tarball.sh
</span><br>
<span class="quotelev2">&gt;&gt; |
</span><br>
<span class="quotelev2">&gt;&gt; | Apparently &quot;make -j 4 distcheck&quot; has a race condition when
</span><br>
<span class="quotelev2">&gt;&gt; &quot;installing&quot; in
</span><br>
<span class="quotelev2">&gt;&gt; | parallel.  Remove the &quot;-j 4&quot; so we don't get random tarball build
</span><br>
<span class="quotelev2">&gt;&gt; failures.
</span><br>
<span class="quotelev2">&gt;&gt; | Hopefully this won't take all that much longer to make the tarball
</span><br>
<span class="quotelev2">&gt;&gt; each night.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you fill me in on details here, like the nature of the race or a
</span><br>
<span class="quotelev2">&gt;&gt; build log showing the failure, the Automake version used to
</span><br>
<span class="quotelev2">&gt;&gt; autogen.sh,
</span><br>
<span class="quotelev2">&gt;&gt; and so on?  Because if that turns out to be a race within Automake
</span><br>
<span class="quotelev2">&gt;&gt; code,
</span><br>
<span class="quotelev2">&gt;&gt; it'd be nice to fix it; well, and if it turns out to be a race in  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI
</span><br>
<span class="quotelev2">&gt;&gt; code, it'd be nice to fix it, too.  ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Ralf
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4082/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4083.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Previous message:</strong> <a href="4081.php">Jeff Squyres: "Re: [OMPI devel] parallel make install"</a>
<li><strong>In reply to:</strong> <a href="4081.php">Jeff Squyres: "Re: [OMPI devel] parallel make install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4083.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
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
