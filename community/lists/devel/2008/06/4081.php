<?
$subject_val = "Re: [OMPI devel] parallel make install";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 17:11:41 2008" -->
<!-- isoreceived="20080603211141" -->
<!-- sent="Tue, 3 Jun 2008 17:11:32 -0400" -->
<!-- isosent="20080603211132" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] parallel make install" -->
<!-- id="46147903-BAA9-4AAB-98DB-02F22B8DF471_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080603210725.GC31122_at_ins.uni-bonn.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-03 17:11:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4082.php">George Bosilca: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Previous message:</strong> <a href="4080.php">Ralf Wildenhues: "[OMPI devel] parallel make install"</a>
<li><strong>In reply to:</strong> <a href="4080.php">Ralf Wildenhues: "[OMPI devel] parallel make install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4082.php">George Bosilca: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Reply:</strong> <a href="4082.php">George Bosilca: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Reply:</strong> <a href="4083.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for following up on this -- I saw this as well and was dubious,  
<br>
but didn't have a chance to follow up with Tim.  I saw the mail that  
<br>
showed the failed tarball build -- here's the output (I don't know if  
<br>
we have any more records than this; Tim?):
<br>
<p><p>ERROR: Command returned a non-zero exist status
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make -j 4 distcheck
<br>
<p>Start time: Fri May 30 00:13:38 EDT 2008
<br>
End time:   Fri May 30 00:30:16 EDT 2008
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
make[3]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create- 
<br>
r18551/ompi/openmpi-1.3a1r18551/_inst/share/openmpi/amca-param-sets&quot;  
<br>
|| /bin/mkdir -p &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/ 
<br>
trunk/create-r18551/ompi/openmpi-1.3a1r18551/_inst/share/openmpi/amca- 
<br>
param-sets&quot;
<br>
/usr/bin/install -c -m 644 '../../contrib/amca-param-sets/ 
<br>
example.conf' '/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/ 
<br>
create-r18551/ompi/openmpi-1.3a1r18551/_inst/share/openmpi/amca-param- 
<br>
sets/example.conf'
<br>
make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/contrib'
<br>
make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/contrib'
<br>
Making install in opal
<br>
make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal'
<br>
Making install in include
<br>
make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
<br>
include'
<br>
make[4]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
<br>
include'
<br>
make[4]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create- 
<br>
r18551/ompi/openmpi-1.3a1r18551/_inst/include&quot; || /bin/mkdir -p &quot;/home/ 
<br>
mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/ 
<br>
openmpi-1.3a1r18551/_inst/include&quot;
<br>
test -z &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create- 
<br>
r18551/ompi/openmpi-1.3a1r18551/_inst/include&quot; || /bin/mkdir -p &quot;/home/ 
<br>
mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/ 
<br>
openmpi-1.3a1r18551/_inst/include&quot;
<br>
make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
<br>
include'
<br>
make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
<br>
include'
<br>
Making install in libltdl
<br>
make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
<br>
libltdl'
<br>
make  install-am
<br>
make[4]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
<br>
libltdl'
<br>
make[5]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
<br>
libltdl'
<br>
test -z &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create- 
<br>
r18551/ompi/openmpi-1.3a1r18551/_inst/lib&quot; || /bin/mkdir -p &quot;/home/ 
<br>
mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/ 
<br>
openmpi-1.3a1r18551/_inst/lib&quot;
<br>
test -z &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create- 
<br>
r18551/ompi/openmpi-1.3a1r18551/_inst/include&quot; || /bin/mkdir -p &quot;/home/ 
<br>
mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/ 
<br>
openmpi-1.3a1r18551/_inst/include&quot;
<br>
test -z &quot;&quot; || /bin/mkdir -p &quot;&quot;
<br>
make[5]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
<br>
libltdl'
<br>
make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
<br>
libltdl'
<br>
make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/ 
<br>
libltdl'
<br>
Making install in asm
<br>
make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/asm'
<br>
make[4]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/asm'
<br>
make[4]: Nothing to be done for `install-exec-am'.
<br>
make[4]: Nothing to be done for `install-data-am'.
<br>
make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/asm'
<br>
make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/asm'
<br>
Making install in etc
<br>
make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/etc'
<br>
make[4]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/etc'
<br>
test -z &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create- 
<br>
r18551/ompi/openmpi-1.3a1r18551/_inst/etc&quot; || /bin/mkdir -p &quot;/home/ 
<br>
mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ompi/ 
<br>
openmpi-1.3a1r18551/_inst/etc&quot;
<br>
/usr/bin/install -c -m 644 ../../../opal/etc/openmpi-mca-params.conf / 
<br>
home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r18551/ 
<br>
ompi/openmpi-1.3a1r18551/_inst/etc/openmpi-mca-params.conf
<br>
/usr/bin/install: cannot create regular file `/home/mpiteam/openmpi/ 
<br>
nightly-tarball-build-root/trunk/create-r18551/ompi/ 
<br>
openmpi-1.3a1r18551/_inst/etc/openmpi-mca-params.conf': No such file  
<br>
or directory
<br>
make[4]: *** [install-data-local] Error 1
<br>
make[4]: *** Waiting for unfinished jobs....
<br>
make[4]: *** Waiting for unfinished jobs....
<br>
make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/etc'
<br>
make[3]: *** [install-am] Error 2
<br>
make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal/etc'
<br>
make[2]: *** [install-recursive] Error 1
<br>
make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build/opal'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
<br>
build-root/trunk/create-r18551/ompi/openmpi-1.3a1r18551/_build'
<br>
make: *** [distcheck] Error 2
<br>
=======================================================================
<br>
<p>Tim -- has this error happened before?
<br>
<p><p><p><p><p>On Jun 3, 2008, at 5:07 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello there,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a change recently mentions this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | r18552 | timattox | 2008-05-30 06:39:48 +0200 (Fri, 30 May 2008) |  
</span><br>
<span class="quotelev1">&gt; 4 lines
</span><br>
<span class="quotelev1">&gt; | Changed paths:
</span><br>
<span class="quotelev1">&gt; |    M /trunk/contrib/nightly/create_tarball.sh
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | Apparently &quot;make -j 4 distcheck&quot; has a race condition when  
</span><br>
<span class="quotelev1">&gt; &quot;installing&quot; in
</span><br>
<span class="quotelev1">&gt; | parallel.  Remove the &quot;-j 4&quot; so we don't get random tarball build  
</span><br>
<span class="quotelev1">&gt; failures.
</span><br>
<span class="quotelev1">&gt; | Hopefully this won't take all that much longer to make the tarball  
</span><br>
<span class="quotelev1">&gt; each night.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you fill me in on details here, like the nature of the race or a
</span><br>
<span class="quotelev1">&gt; build log showing the failure, the Automake version used to  
</span><br>
<span class="quotelev1">&gt; autogen.sh,
</span><br>
<span class="quotelev1">&gt; and so on?  Because if that turns out to be a race within Automake  
</span><br>
<span class="quotelev1">&gt; code,
</span><br>
<span class="quotelev1">&gt; it'd be nice to fix it; well, and if it turns out to be a race in OMPI
</span><br>
<span class="quotelev1">&gt; code, it'd be nice to fix it, too.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Ralf
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
<li><strong>Next message:</strong> <a href="4082.php">George Bosilca: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Previous message:</strong> <a href="4080.php">Ralf Wildenhues: "[OMPI devel] parallel make install"</a>
<li><strong>In reply to:</strong> <a href="4080.php">Ralf Wildenhues: "[OMPI devel] parallel make install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4082.php">George Bosilca: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Reply:</strong> <a href="4082.php">George Bosilca: "Re: [OMPI devel] parallel make install"</a>
<li><strong>Reply:</strong> <a href="4083.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
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
