<?
$subject_val = "[hwloc-devel] Attribute unsed not regognized";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 06:09:10 2010" -->
<!-- isoreceived="20100326100910" -->
<!-- sent="Fri, 26 Mar 2010 11:09:05 +0100" -->
<!-- isosent="20100326100905" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="[hwloc-devel] Attribute unsed not regognized" -->
<!-- id="36ca99e91003260309p6a2cbd78nc8513c225d5fd235_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [hwloc-devel] Attribute unsed not regognized<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 06:09:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0796.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Previous message:</strong> <a href="0794.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0796.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Reply:</strong> <a href="0796.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Reply:</strong> <a href="0806.php">Samuel Thibault: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I still get warnings for unused parameters from the hwloc/helper.h
<br>
header.  The code to check this attribute is this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int square(int arg1 __attribute__ ((__unused__)), int arg2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int square(int arg1, int arg2) { return arg2; }
<br>
<p>But this results in this conflig.log output:
<br>
<p>configure:11129: checking for __attribute__(unused)
<br>
configure:11152: gcc -std=gnu99 -c  -Wall -Wunused-parameter -Wundef
<br>
-Wno-long-long -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes
<br>
-Wcomment -pedantic  conftest.c &gt;&amp;5
<br>
conftest.c: In function 'square':
<br>
conftest.c:44: warning: unused parameter 'arg1'
<br>
conftest.c: At top level:
<br>
conftest.c:48: warning: function declaration isn't a prototype
<br>
configure:11152: $? = 0
<br>
configure:11236: result: yes
<br>
<p>AFAIK the correct usage would be:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int square(int __attribute__ ((__unused__)) arg1, int arg2) {
<br>
return arg2; }
<br>
<p>I.e. the attribute is between type and name. Also, it needs to be in
<br>
the declaration not in the prototype. The output for this code is:
<br>
<p>configure:11129: checking for __attribute__(unused)
<br>
configure:11151: gcc -std=gnu99 -c  -Wall -Wunused-parameter -Wundef
<br>
-Wno-long-long -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes
<br>
-Wcomment -pedantic  conftest.c &gt;&amp;5
<br>
conftest.c:43: warning: no previous prototype for 'square'
<br>
conftest.c:47: warning: function declaration isn't a prototype
<br>
configure:11151: $? = 0
<br>
configure:11235: result: yes
<br>
<p>This results only in a warning that the prototype is missing.
<br>
<p>Also, the use of the unused attribute for static functions does not
<br>
need a prototype:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extern int square1(int arg1, int arg2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int square1(int arg1 __attribute__ ((__unused__)), int arg2)
<br>
{ return arg2; }
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static int __attribute__ ((__unused__)) square2(int arg1, int
<br>
arg2) { return arg1 * arg2; }
<br>
<p>Results in this output:
<br>
<p>configure:11129: checking for __attribute__(unused)
<br>
configure:11154: gcc -std=gnu99 -c  -Wall -Wunused-parameter -Wundef
<br>
-Wno-long-long -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes
<br>
-Wcomment -pedantic  conftest.c &gt;&amp;5
<br>
conftest.c:50: warning: function declaration isn't a prototype
<br>
configure:11154: $? = 0
<br>
configure:11238: result: yes
<br>
<p>This is on ubuntu woth this compiler:
<br>
<p>$ gcc -v
<br>
Using built-in specs.
<br>
Target: x86_64-linux-gnu
<br>
Configured with: ../src/configure -v --with-pkgversion='Ubuntu
<br>
4.4.1-4ubuntu9'
<br>
--with-bugurl=file:///usr/share/doc/gcc-4.4/README.Bugs
<br>
--enable-languages=c,c++,fortran,objc,obj-c++ --prefix=/usr
<br>
--enable-shared --enable-multiarch --enable-linker-build-id
<br>
--with-system-zlib --libexecdir=/usr/lib --without-included-gettext
<br>
--enable-threads=posix --with-gxx-include-dir=/usr/include/c++/4.4
<br>
--program-suffix=-4.4 --enable-nls --enable-clocale=gnu
<br>
--enable-libstdcxx-debug --enable-objc-gc --disable-werror
<br>
--with-arch-32=i486 --with-tune=generic --enable-checking=release
<br>
--build=x86_64-linux-gnu --host=x86_64-linux-gnu
<br>
--target=x86_64-linux-gnu
<br>
Thread model: posix
<br>
gcc version 4.4.1 (Ubuntu 4.4.1-4ubuntu9)
<br>
<p>Regards,
<br>
Bert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0796.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Previous message:</strong> <a href="0794.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0796.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Reply:</strong> <a href="0796.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Reply:</strong> <a href="0806.php">Samuel Thibault: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
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
