<?
$subject_val = "Re: [OMPI devel] 1.3 build failing on MacOSX";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 09:42:31 2008" -->
<!-- isoreceived="20080728134231" -->
<!-- sent="Mon, 28 Jul 2008 09:42:14 -0400" -->
<!-- isosent="20080728134214" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 build failing on MacOSX" -->
<!-- id="8BB3C7C7-DBEE-4549-8E27-56849D090D1A_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="8EDF3A6D-4A71-4C16-A166-3A499D76FD4B_at_computer.org" -->
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
<strong>Date:</strong> 2008-07-28 09:42:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4450.php">Jeff Squyres: "[OMPI devel] MCA base changes"</a>
<li><strong>Previous message:</strong> <a href="4448.php">Greg Watson: "[OMPI devel] 1.3 build failing on MacOSX"</a>
<li><strong>In reply to:</strong> <a href="4448.php">Greg Watson: "[OMPI devel] 1.3 build failing on MacOSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4463.php">Jeff Squyres: "Re: [OMPI devel] 1.3 build failing on MacOSX"</a>
<li><strong>Reply:</strong> <a href="4463.php">Jeff Squyres: "Re: [OMPI devel] 1.3 build failing on MacOSX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Blast.  Looks like a problem with the new ROMIO I brought in last week.
<br>
<p>I'll fix shortly; thanks for the heads-up.
<br>
<p><p>On Jul 28, 2008, at 9:36 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; I'm getting the following when I try and build 1.3 from SVN:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I../../adio/include -DOMPI_BUILDING=1 -I/ 
</span><br>
<span class="quotelev1">&gt; Users/greg/Documents/workspaces/ptp_head/ompi/ompi/mca/io/romio/ 
</span><br>
<span class="quotelev1">&gt; romio/../../../../.. -I/Users/greg/Documents/workspaces/ptp_head/ 
</span><br>
<span class="quotelev1">&gt; ompi/ompi/mca/io/romio/romio/../../../../../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../../../../../../../opal/include -I../../../../../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -I/Users/greg/Documents/workspaces/ptp_head/ompi/ompi/mca/io/ 
</span><br>
<span class="quotelev1">&gt; romio/romio/include -I/Users/greg/Documents/workspaces/ptp_head/ompi/ 
</span><br>
<span class="quotelev1">&gt; ompi/mca/io/romio/romio/adio/include -D_REENTRANT -g -Wall -Wundef - 
</span><br>
<span class="quotelev1">&gt; Wno-long-long -Wsign-compare -Wmissing-prototypes -Wstrict- 
</span><br>
<span class="quotelev1">&gt; prototypes -Wcomment -pedantic -Wno-long-double -Werror-implicit- 
</span><br>
<span class="quotelev1">&gt; function-declaration -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; DHAVE_ROMIOCONF_H -DHAVE_ROMIOCONF_H -I../../include -MT  
</span><br>
<span class="quotelev1">&gt; ad_write_nolock.lo -MD -MP -MF .deps/ad_write_nolock.Tpo -c  
</span><br>
<span class="quotelev1">&gt; ad_write_nolock.c  -fno-common -DPIC -o .libs/ad_write_nolock.o
</span><br>
<span class="quotelev1">&gt; ad_write_nolock.c: In function &#145;ADIOI_NOLOCK_WriteStrided&#146;:
</span><br>
<span class="quotelev1">&gt; ad_write_nolock.c:92: error: implicit declaration of function  
</span><br>
<span class="quotelev1">&gt; &#145;lseek64&#146;
</span><br>
<span class="quotelev1">&gt; make[5]: *** [ad_write_nolock.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configured with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --with-platform=contrib/platform/lanl/macosx-dynamic
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
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
<li><strong>Next message:</strong> <a href="4450.php">Jeff Squyres: "[OMPI devel] MCA base changes"</a>
<li><strong>Previous message:</strong> <a href="4448.php">Greg Watson: "[OMPI devel] 1.3 build failing on MacOSX"</a>
<li><strong>In reply to:</strong> <a href="4448.php">Greg Watson: "[OMPI devel] 1.3 build failing on MacOSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4463.php">Jeff Squyres: "Re: [OMPI devel] 1.3 build failing on MacOSX"</a>
<li><strong>Reply:</strong> <a href="4463.php">Jeff Squyres: "Re: [OMPI devel] 1.3 build failing on MacOSX"</a>
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
