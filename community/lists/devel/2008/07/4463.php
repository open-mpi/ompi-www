<?
$subject_val = "Re: [OMPI devel] 1.3 build failing on MacOSX";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 11:35:03 2008" -->
<!-- isoreceived="20080728153503" -->
<!-- sent="Mon, 28 Jul 2008 11:31:51 -0400" -->
<!-- isosent="20080728153151" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 build failing on MacOSX" -->
<!-- id="FB902930-5BB6-457B-9955-71164CBF75BE_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="8BB3C7C7-DBEE-4549-8E27-56849D090D1A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3 build failing on MacOSX<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 11:31:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4464.php">Ralph Castain: "[OMPI devel] Change in slot_list specification"</a>
<li><strong>Previous message:</strong> <a href="4462.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4449.php">Jeff Squyres: "Re: [OMPI devel] 1.3 build failing on MacOSX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking into it a bit more, the situation is a little convoluted.   
<br>
I've filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/1419">https://svn.open-mpi.org/trac/ompi/ticket/1419</a>; followups  
<br>
will occur there.
<br>
<p><p>On Jul 28, 2008, at 9:42 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Blast.  Looks like a problem with the new ROMIO I brought in last  
</span><br>
<span class="quotelev1">&gt; week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll fix shortly; thanks for the heads-up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2008, at 9:36 AM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm getting the following when I try and build 1.3 from SVN:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gcc -DHAVE_CONFIG_H -I. -I../../adio/include -DOMPI_BUILDING=1 -I/ 
</span><br>
<span class="quotelev2">&gt;&gt; Users/greg/Documents/workspaces/ptp_head/ompi/ompi/mca/io/romio/ 
</span><br>
<span class="quotelev2">&gt;&gt; romio/../../../../.. -I/Users/greg/Documents/workspaces/ptp_head/ 
</span><br>
<span class="quotelev2">&gt;&gt; ompi/ompi/mca/io/romio/romio/../../../../../opal/include - 
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../../../../opal/include -I../../../../../../../ompi/ 
</span><br>
<span class="quotelev2">&gt;&gt; include -I/Users/greg/Documents/workspaces/ptp_head/ompi/ompi/mca/ 
</span><br>
<span class="quotelev2">&gt;&gt; io/romio/romio/include -I/Users/greg/Documents/workspaces/ptp_head/ 
</span><br>
<span class="quotelev2">&gt;&gt; ompi/ompi/mca/io/romio/romio/adio/include -D_REENTRANT -g -Wall - 
</span><br>
<span class="quotelev2">&gt;&gt; Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -Wstrict- 
</span><br>
<span class="quotelev2">&gt;&gt; prototypes -Wcomment -pedantic -Wno-long-double -Werror-implicit- 
</span><br>
<span class="quotelev2">&gt;&gt; function-declaration -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_ROMIOCONF_H -DHAVE_ROMIOCONF_H -I../../include -MT  
</span><br>
<span class="quotelev2">&gt;&gt; ad_write_nolock.lo -MD -MP -MF .deps/ad_write_nolock.Tpo -c  
</span><br>
<span class="quotelev2">&gt;&gt; ad_write_nolock.c  -fno-common -DPIC -o .libs/ad_write_nolock.o
</span><br>
<span class="quotelev2">&gt;&gt; ad_write_nolock.c: In function &#145;ADIOI_NOLOCK_WriteStrided&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; ad_write_nolock.c:92: error: implicit declaration of function  
</span><br>
<span class="quotelev2">&gt;&gt; &#145;lseek64&#146;
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** [ad_write_nolock.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Configured with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --with-platform=contrib/platform/lanl/macosx-dynamic
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
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
<li><strong>Next message:</strong> <a href="4464.php">Ralph Castain: "[OMPI devel] Change in slot_list specification"</a>
<li><strong>Previous message:</strong> <a href="4462.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4449.php">Jeff Squyres: "Re: [OMPI devel] 1.3 build failing on MacOSX"</a>
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
