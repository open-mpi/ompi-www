<?
$subject_val = "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 09:55:25 2009" -->
<!-- isoreceived="20090120145525" -->
<!-- sent="Tue, 20 Jan 2009 09:55:00 -0500" -->
<!-- isosent="20090120145500" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed" -->
<!-- id="49ED146E-B020-401A-9B21-55DCA4117FE1_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="20090120141737.GR20654_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 09:55:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5234.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5232.php">Ralph Castain: "Re: [OMPI devel] When can I use OOB channel?"</a>
<li><strong>In reply to:</strong> <a href="5230.php">Jonathan Billings: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, _FORTIFY_SOURCE does a lot of pedantic things -- google around  
<br>
and you'll find out what it does.  FWIW, we had to make some other  
<br>
changes in OMPI to handle _FORTIFY_SOURCE as well.
<br>
<p>On Jan 20, 2009, at 9:17 AM, Jonathan Billings wrote:
<br>
<p><span class="quotelev1">&gt; I believe the situation that is causing the error has to do with GCC's
</span><br>
<span class="quotelev1">&gt; FORTIFY_SOURCE.  I'm building under CentOS 5.2 using the 1.3 src.rpm
</span><br>
<span class="quotelev1">&gt; available on the website:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/ 
</span><br>
<span class="quotelev1">&gt; otflib -I../extlib/otf/otflib -D_GNU_SOURCE -DBINDIR=\&quot;/usr/bin\&quot; - 
</span><br>
<span class="quotelev1">&gt; DDATADIR=\&quot;/usr/share\&quot; -DRFG  -DVT_MEMHOOK -DVT_IOWRAP -O2 -g -pipe  
</span><br>
<span class="quotelev1">&gt; -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions -fstack-protector -- 
</span><br>
<span class="quotelev1">&gt; param=ssp-buffer-size=4 -m64 -mtune=generic -MT vt_iowrap.o -MD -MP - 
</span><br>
<span class="quotelev1">&gt; MF .deps/vt_iowrap.Tpo -c -o vt_iowrap.o vt_iowrap.c
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c:1242: error: expected declaration specifiers or &#145;...&#146;
</span><br>
<span class="quotelev1">&gt; before numeric constant
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c:1243: error: conflicting types for &#145;__fprintf_chk&#146;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %
</span><br>
<span class="quotelev1">&gt; (compile fails)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cd into the appropriate area, and re-run the gcc without
</span><br>
<span class="quotelev1">&gt; -D_FORTIFY_SOURCE=2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/ 
</span><br>
<span class="quotelev1">&gt; otflib -I../extlib/otf/otflib -D_GNU_SOURCE -DBINDIR=\&quot;/usr/bin\&quot; - 
</span><br>
<span class="quotelev1">&gt; DDATADIR=\&quot;/usr/share\&quot; -DRFG  -DVT_MEMHOOK -DVT_IOWRAP -O2 -g -pipe  
</span><br>
<span class="quotelev1">&gt; -Wall -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64 - 
</span><br>
<span class="quotelev1">&gt; mtune=generic -MT vt_iowrap.o -MD -MP -MF .deps/vt_iowrap.Tpo -c -o  
</span><br>
<span class="quotelev1">&gt; vt_iowrap.o vt_iowrap.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %
</span><br>
<span class="quotelev1">&gt; (compile succeeds)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I change the spec file to remove the -D_FORTIFY_SOURCE define from
</span><br>
<span class="quotelev1">&gt; RPM_OPT_FLAGS (like what is done for non-gcc compilers) the build
</span><br>
<span class="quotelev1">&gt; succeeds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears that the additional define is more strict and causes
</span><br>
<span class="quotelev1">&gt; problems when the default RPM build environment is kept intact.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jonathan Billings &lt;jonathan.billings_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; The College of Language, Science, and the Arts
</span><br>
<span class="quotelev1">&gt; LS&amp;A IT - Research Systems and Support
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
<li><strong>Next message:</strong> <a href="5234.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5232.php">Ralph Castain: "Re: [OMPI devel] When can I use OOB channel?"</a>
<li><strong>In reply to:</strong> <a href="5230.php">Jonathan Billings: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
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
