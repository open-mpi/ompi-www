<?
$subject_val = "[OMPI devel] trunk - non-portable examples/Makefie";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 01:14:22 2014" -->
<!-- isoreceived="20140109061422" -->
<!-- sent="Wed, 8 Jan 2014 22:14:18 -0800" -->
<!-- isosent="20140109061418" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk - non-portable examples/Makefie" -->
<!-- id="CAAvDA17DNb+Zn8SDdCutn4js6jkre3_ytkQa7kAuebFNCejUKg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] trunk - non-portable examples/Makefie<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 01:14:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13616.php">Paul Hargrove: "[OMPI devel] trunk - broken logic for oshmem:bindings:fort"</a>
<li><strong>Previous message:</strong> <a href="13614.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13634.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - non-portable examples/Makefie"</a>
<li><strong>Reply:</strong> <a href="13634.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - non-portable examples/Makefie"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With Ralph's fix for opal/util/path.c, I can build the trunk on
<br>
FreeBSD-9/x86-64.
<br>
However, building the examples fails with:
<br>
<p>$ cp -r $SRCDIR/examples .
<br>
$ cd examples
<br>
$ make
<br>
mpicc -g  hello_c.c  -o hello_c
<br>
mpicc -g  ring_c.c  -o ring_c
<br>
mpicc -g  connectivity_c.c  -o connectivity_c
<br>
shmemcc -g  -o hello_oshmem
<br>
/usr/lib/crt1.o: In function `_start':
<br>
crt1.c:(.text+0x8a): undefined reference to `main'
<br>
*** [hello_oshmem] Error code 1
<br>
<p>Stop in /usr/home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/BLD/examples.
<br>
*** [mpi] Error code 1
<br>
<p>Stop in /usr/home/phargrov/OMPI/openmpi-trunk-freebsd9-amd64/BLD/examples.
<br>
<p>Notice the lack of a source file on the failing shmemcc command line!!
<br>
<p>The commands for SHMEM and Java examples all use &quot;$^&quot;, which is NOT
<br>
supported by FreeBSD's make.
<br>
I can work-around this by explicitly using gmake, but a portable Makefile
<br>
would be a better fix.
<br>
Since all uses of &quot;$^&quot; are for targets having *exactly* one dependency, it
<br>
is safe/correct to substitute &quot;$?&quot;.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13615/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13616.php">Paul Hargrove: "[OMPI devel] trunk - broken logic for oshmem:bindings:fort"</a>
<li><strong>Previous message:</strong> <a href="13614.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13634.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - non-portable examples/Makefie"</a>
<li><strong>Reply:</strong> <a href="13634.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - non-portable examples/Makefie"</a>
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
