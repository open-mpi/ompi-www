<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul 31 22:10:33 2005" -->
<!-- isoreceived="20050801031033" -->
<!-- sent="Sun, 31 Jul 2005 21:10:45 -0600" -->
<!-- isosent="20050801031045" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="os x build" -->
<!-- id="47AF9CAF-AD55-4568-88AE-684047057EA7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-31 22:10:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2005/08/0061.php">Greg Watson: "Re:  os x build"</a>
<li><strong>Previous message:</strong> <a href="0059.php">Ralph H. Castain: "Re:  New Bproc Components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2005/08/0061.php">Greg Watson: "Re:  os x build"</a>
<li><strong>Reply:</strong> <a href="../../2005/08/0061.php">Greg Watson: "Re:  os x build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Anyone having this problem with the latest build:
<br>
<p>Making all in libltdl
<br>
make  all-am
<br>
make[3]: Nothing to be done for `all-am'.
<br>
Making all in asm
<br>
/bin/sh ../../libtool --mode=link --tag=CC gcc  -g -Wall -Wundef -Wno- 
<br>
long-long -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes - 
<br>
Wcomment -pedantic -Wno-long-double -Werror-implicit-function- 
<br>
declaration -fno-strict-aliasing   -export-dynamic   -o libasm.la    
<br>
asm.lo atomic-asm.lo  -lm
<br>
rm -fr  .libs/libasm.a
<br>
ar cru .libs/libasm.a  asm.o atomic-asm.o~ranlib .libs/libasm.a
<br>
ar: atomic-asm.o~ranlib: No such file or directory
<br>
make[2]: *** [libasm.la] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>Something seems to have broken the libtool script.
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2005/08/0061.php">Greg Watson: "Re:  os x build"</a>
<li><strong>Previous message:</strong> <a href="0059.php">Ralph H. Castain: "Re:  New Bproc Components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2005/08/0061.php">Greg Watson: "Re:  os x build"</a>
<li><strong>Reply:</strong> <a href="../../2005/08/0061.php">Greg Watson: "Re:  os x build"</a>
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
