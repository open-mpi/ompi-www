<?
$subject_val = "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 08:01:39 2009" -->
<!-- isoreceived="20090305130139" -->
<!-- sent="Thu, 5 Mar 2009 08:01:32 -0500" -->
<!-- isosent="20090305130132" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out" -->
<!-- id="9AC58BF0-887E-4E6D-8786-5FBABB0890DC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49AFBD0C.8040001_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 08:01:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5585.php">Pavel Shamis (Pasha): "Re: [OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1)	is available"</a>
<li><strong>Previous message:</strong> <a href="5583.php">Jeff Squyres: "[OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1) is available"</a>
<li><strong>In reply to:</strong> <a href="5582.php">Pavel Shamis (Pasha): "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops -- didn't see this mail until after I posted my other mail (cross- 
<br>
posted from the OFED list).
<br>
<p>I put &quot;VT&quot; in the subject of my other post to better catch the  
<br>
attention of the VT guys...
<br>
<p><p>On Mar 5, 2009, at 6:52 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; I tried to build latest OFED with new ompi rc4, but is looks that  
</span><br>
<span class="quotelev1">&gt; vtune
</span><br>
<span class="quotelev1">&gt; code is broken again ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/ 
</span><br>
<span class="quotelev1">&gt; otflib
</span><br>
<span class="quotelev1">&gt; -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; -DBINDIR=\&quot;/usr/local/mpi/gcc/openmpi-1.3.1rc4/bin\&quot;
</span><br>
<span class="quotelev1">&gt; -DDATADIR=\&quot;/usr/local/mpi/gcc/openmpi-1.3.1rc4/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m32
</span><br>
<span class="quotelev1">&gt; -march=i386 -mtune=generic -fasynchronous-unwind-tables -MT
</span><br>
<span class="quotelev1">&gt; vt_iowrap_helper.o -MD -MP -MF .deps/vt_iowrap_helper.Tpo -c -o
</span><br>
<span class="quotelev1">&gt; vt_iowrap_helper.o vt_iowrap_helper.c
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/ 
</span><br>
<span class="quotelev1">&gt; otflib
</span><br>
<span class="quotelev1">&gt; -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; -DBINDIR=\&quot;/usr/local/mpi/gcc/openmpi-1.3.1rc4/bin\&quot;
</span><br>
<span class="quotelev1">&gt; -DDATADIR=\&quot;/usr/local/mpi/gcc/openmpi-1.3.1rc4/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m32
</span><br>
<span class="quotelev1">&gt; -march=i386 -mtune=generic -fasynchronous-unwind-tables -MT
</span><br>
<span class="quotelev1">&gt; rfg_regions.o -MD -MP -MF .deps/rfg_regions.Tpo -c -o rfg_regions.o
</span><br>
<span class="quotelev1">&gt; rfg_regions.c
</span><br>
<span class="quotelev1">&gt; *vt_iowrap.c:1242: error: expected declaration specifiers or '...'
</span><br>
<span class="quotelev1">&gt; before numeric constant
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c:1243: error: conflicting types for '__fprintf_chk'
</span><br>
<span class="quotelev1">&gt; *gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; -DBINDIR=\&quot;/usr/local/mpi/gcc/openmpi-1.3.1rc4/bin\&quot;
</span><br>
<span class="quotelev1">&gt; -DDATADIR=\&quot;/usr/local/mpi/gcc/openmpi-1.3.1rc4/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m32
</span><br>
<span class="quotelev1">&gt; -march=i386 -mtune=generic -fasynchronous-unwind-tables -MT  
</span><br>
<span class="quotelev1">&gt; rfg_filter.o
</span><br>
<span class="quotelev1">&gt; -MD -MP -MF .deps/rfg_filter.Tpo -c -o rfg_filter.o rfg_filter.c
</span><br>
<span class="quotelev1">&gt; make[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev1">&gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vt_iowrap_helper.Tpo .deps/vt_iowrap_helper.Po
</span><br>
<span class="quotelev1">&gt; mv -f .deps/rfg_filter.Tpo .deps/rfg_filter.Po
</span><br>
<span class="quotelev1">&gt; mv -f .deps/rfg_regions.Tpo .deps/rfg_regions.Po
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/var/tmp/OFED_topdir/BUILD/openmpi-1.3.1rc4/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/var/tmp/OFED_topdir/BUILD/openmpi-1.3.1rc4/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/var/tmp/OFED_topdir/BUILD/openmpi-1.3.1rc4/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/var/tmp/OFED_topdir/BUILD/openmpi-1.3.1rc4/ompi/contrib/vt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/var/tmp/OFED_topdir/BUILD/openmpi-1.3.1rc4/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; error: Bad exit status from /var/tmp/rpm-tmp.43206 (%build)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph H. Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Looks okay to me Brian - I went ahead and filed the CMR and sent  
</span><br>
<span class="quotelev1">&gt; it on to
</span><br>
<span class="quotelev2">&gt; &gt; Brad for approval.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, 3 Mar 2009, Brian W. Barrett wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Tue, 3 Mar 2009, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1.3.1rc3 had a race condition in the ORTE shutdown sequence.   
</span><br>
<span class="quotelev1">&gt; The only
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; difference between rc3 and rc4 was a fix for that race condition.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Please
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; test ASAP:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   <a href="http://www.open-mpi.org/software/ompi/v1.3/">http://www.open-mpi.org/software/ompi/v1.3/</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm sorry, I've failed to test rc1 &amp; rc2 on Catamount.  I'm  
</span><br>
<span class="quotelev1">&gt; getting a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; compile
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; failure in the ORTE code.  I'll do a bit more testing and send  
</span><br>
<span class="quotelev1">&gt; Ralph an
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; e-mail this afternoon.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Attached is a patch against v1.3 branch that makes it work on Red  
</span><br>
<span class="quotelev1">&gt; Storm.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm not sure it's right, so I'm just e-mailing it rather than  
</span><br>
<span class="quotelev1">&gt; committing..
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sorry Ralph, but can you take a look? :(
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brian_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5585.php">Pavel Shamis (Pasha): "Re: [OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1)	is available"</a>
<li><strong>Previous message:</strong> <a href="5583.php">Jeff Squyres: "[OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1) is available"</a>
<li><strong>In reply to:</strong> <a href="5582.php">Pavel Shamis (Pasha): "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
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
