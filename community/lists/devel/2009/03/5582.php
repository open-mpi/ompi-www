<?
$subject_val = "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 06:52:51 2009" -->
<!-- isoreceived="20090305115251" -->
<!-- sent="Thu, 05 Mar 2009 13:52:44 +0200" -->
<!-- isosent="20090305115244" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out" -->
<!-- id="49AFBD0C.8040001_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51336.128.165.0.81.1236173303.squirrel_at_webmail.lanl.gov" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 06:52:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5583.php">Jeff Squyres: "[OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1) is available"</a>
<li><strong>Previous message:</strong> <a href="5581.php">Jeff Squyres: "[OMPI devel] Fwd: Mercurial 1.2 released!"</a>
<li><strong>In reply to:</strong> <a href="5572.php">Ralph H. Castain: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5584.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>Reply:</strong> <a href="5584.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried to build latest OFED with new ompi rc4, but is looks that vtune 
<br>
code is broken again ?
<br>
<p>gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/otflib 
<br>
-I../extlib/otf/otflib     -D_GNU_SOURCE 
<br>
-DBINDIR=\&quot;/usr/local/mpi/gcc/openmpi-1.3.1rc4/bin\&quot; 
<br>
-DDATADIR=\&quot;/usr/local/mpi/gcc/openmpi-1.3.1rc4/share\&quot; -DRFG  
<br>
-DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 
<br>
-fexceptions -fstack-protector --param=ssp-buffer-size=4 -m32 
<br>
-march=i386 -mtune=generic -fasynchronous-unwind-tables -MT 
<br>
vt_iowrap_helper.o -MD -MP -MF .deps/vt_iowrap_helper.Tpo -c -o 
<br>
vt_iowrap_helper.o vt_iowrap_helper.c
<br>
gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/otflib 
<br>
-I../extlib/otf/otflib     -D_GNU_SOURCE 
<br>
-DBINDIR=\&quot;/usr/local/mpi/gcc/openmpi-1.3.1rc4/bin\&quot; 
<br>
-DDATADIR=\&quot;/usr/local/mpi/gcc/openmpi-1.3.1rc4/share\&quot; -DRFG  
<br>
-DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 
<br>
-fexceptions -fstack-protector --param=ssp-buffer-size=4 -m32 
<br>
-march=i386 -mtune=generic -fasynchronous-unwind-tables -MT 
<br>
rfg_regions.o -MD -MP -MF .deps/rfg_regions.Tpo -c -o rfg_regions.o 
<br>
rfg_regions.c
<br>
*vt_iowrap.c:1242: error: expected declaration specifiers or '...' 
<br>
before numeric constant
<br>
vt_iowrap.c:1243: error: conflicting types for '__fprintf_chk'
<br>
*gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib 
<br>
-I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE 
<br>
-DBINDIR=\&quot;/usr/local/mpi/gcc/openmpi-1.3.1rc4/bin\&quot; 
<br>
-DDATADIR=\&quot;/usr/local/mpi/gcc/openmpi-1.3.1rc4/share\&quot; -DRFG  
<br>
-DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 
<br>
-fexceptions -fstack-protector --param=ssp-buffer-size=4 -m32 
<br>
-march=i386 -mtune=generic -fasynchronous-unwind-tables -MT rfg_filter.o 
<br>
-MD -MP -MF .deps/rfg_filter.Tpo -c -o rfg_filter.o rfg_filter.c
<br>
make[5]: *** [vt_iowrap.o] Error 1
<br>
make[5]: *** Waiting for unfinished jobs....
<br>
mv -f .deps/vt_iowrap_helper.Tpo .deps/vt_iowrap_helper.Po
<br>
mv -f .deps/rfg_filter.Tpo .deps/rfg_filter.Po
<br>
mv -f .deps/rfg_regions.Tpo .deps/rfg_regions.Po
<br>
make[5]: Leaving directory 
<br>
`/var/tmp/OFED_topdir/BUILD/openmpi-1.3.1rc4/ompi/contrib/vt/vt/vtlib'
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[4]: Leaving directory 
<br>
`/var/tmp/OFED_topdir/BUILD/openmpi-1.3.1rc4/ompi/contrib/vt/vt'
<br>
make[3]: *** [all] Error 2
<br>
make[3]: Leaving directory 
<br>
`/var/tmp/OFED_topdir/BUILD/openmpi-1.3.1rc4/ompi/contrib/vt/vt'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory 
<br>
`/var/tmp/OFED_topdir/BUILD/openmpi-1.3.1rc4/ompi/contrib/vt'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/var/tmp/OFED_topdir/BUILD/openmpi-1.3.1rc4/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
error: Bad exit status from /var/tmp/rpm-tmp.43206 (%build)
<br>
<p><p><p>Ralph H. Castain wrote:
<br>
<span class="quotelev1">&gt; Looks okay to me Brian - I went ahead and filed the CMR and sent it on to
</span><br>
<span class="quotelev1">&gt; Brad for approval.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 3 Mar 2009, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, 3 Mar 2009, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.3.1rc3 had a race condition in the ORTE shutdown sequence.  The only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; difference between rc3 and rc4 was a fix for that race condition.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; test ASAP:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   <a href="http://www.open-mpi.org/software/ompi/v1.3/">http://www.open-mpi.org/software/ompi/v1.3/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm sorry, I've failed to test rc1 &amp; rc2 on Catamount.  I'm getting a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure in the ORTE code.  I'll do a bit more testing and send Ralph an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e-mail this afternoon.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Attached is a patch against v1.3 branch that makes it work on Red Storm.
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure it's right, so I'm just e-mailing it rather than committing..
</span><br>
<span class="quotelev2">&gt;&gt; Sorry Ralph, but can you take a look? :(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5583.php">Jeff Squyres: "[OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1 (rc1) is available"</a>
<li><strong>Previous message:</strong> <a href="5581.php">Jeff Squyres: "[OMPI devel] Fwd: Mercurial 1.2 released!"</a>
<li><strong>In reply to:</strong> <a href="5572.php">Ralph H. Castain: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5584.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>Reply:</strong> <a href="5584.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
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
