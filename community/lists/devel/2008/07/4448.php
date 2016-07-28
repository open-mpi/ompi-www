<?
$subject_val = "[OMPI devel] 1.3 build failing on MacOSX";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 09:36:44 2008" -->
<!-- isoreceived="20080728133644" -->
<!-- sent="Mon, 28 Jul 2008 09:36:40 -0400" -->
<!-- isosent="20080728133640" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.3 build failing on MacOSX" -->
<!-- id="8EDF3A6D-4A71-4C16-A166-3A499D76FD4B_at_computer.org" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> [OMPI devel] 1.3 build failing on MacOSX<br>
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 09:36:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4449.php">Jeff Squyres: "Re: [OMPI devel] 1.3 build failing on MacOSX"</a>
<li><strong>Previous message:</strong> <a href="4447.php">Ralph Castain: "[OMPI devel] Funny warning message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4449.php">Jeff Squyres: "Re: [OMPI devel] 1.3 build failing on MacOSX"</a>
<li><strong>Reply:</strong> <a href="4449.php">Jeff Squyres: "Re: [OMPI devel] 1.3 build failing on MacOSX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm getting the following when I try and build 1.3 from SVN:
<br>
<p>&nbsp;&nbsp;gcc -DHAVE_CONFIG_H -I. -I../../adio/include -DOMPI_BUILDING=1 -I/ 
<br>
Users/greg/Documents/workspaces/ptp_head/ompi/ompi/mca/io/romio/ 
<br>
romio/../../../../.. -I/Users/greg/Documents/workspaces/ptp_head/ompi/ 
<br>
ompi/mca/io/romio/romio/../../../../../opal/include - 
<br>
I../../../../../../../opal/include -I../../../../../../../ompi/include  
<br>
-I/Users/greg/Documents/workspaces/ptp_head/ompi/ompi/mca/io/romio/ 
<br>
romio/include -I/Users/greg/Documents/workspaces/ptp_head/ompi/ompi/ 
<br>
mca/io/romio/romio/adio/include -D_REENTRANT -g -Wall -Wundef -Wno- 
<br>
long-long -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes - 
<br>
Wcomment -pedantic -Wno-long-double -Werror-implicit-function- 
<br>
declaration -finline-functions -fno-strict-aliasing -DHAVE_ROMIOCONF_H  
<br>
-DHAVE_ROMIOCONF_H -I../../include -MT ad_write_nolock.lo -MD -MP - 
<br>
MF .deps/ad_write_nolock.Tpo -c ad_write_nolock.c  -fno-common -DPIC - 
<br>
o .libs/ad_write_nolock.o
<br>
ad_write_nolock.c: In function &#145;ADIOI_NOLOCK_WriteStrided&#146;:
<br>
ad_write_nolock.c:92: error: implicit declaration of function &#145;lseek64&#146;
<br>
make[5]: *** [ad_write_nolock.lo] Error 1
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>Configured with:
<br>
<p>./configure --with-platform=contrib/platform/lanl/macosx-dynamic
<br>
<p>Any ideas?
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4449.php">Jeff Squyres: "Re: [OMPI devel] 1.3 build failing on MacOSX"</a>
<li><strong>Previous message:</strong> <a href="4447.php">Ralph Castain: "[OMPI devel] Funny warning message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4449.php">Jeff Squyres: "Re: [OMPI devel] 1.3 build failing on MacOSX"</a>
<li><strong>Reply:</strong> <a href="4449.php">Jeff Squyres: "Re: [OMPI devel] 1.3 build failing on MacOSX"</a>
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
