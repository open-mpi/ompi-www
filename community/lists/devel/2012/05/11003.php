<?
$subject_val = "[OMPI devel] 1.6.0 - make check failures on OSX Lion using clang-3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 17 15:15:37 2012" -->
<!-- isoreceived="20120517191537" -->
<!-- sent="Thu, 17 May 2012 19:15:33 +0000 (GMT)" -->
<!-- isosent="20120517191533" -->
<!-- name="P. Martin" -->
<!-- email="mrsmiley98_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.6.0 - make check failures on OSX Lion using clang-3.1" -->
<!-- id="815791323.28269.1337282133143.JavaMail.mail_at_webmail14" -->
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
<strong>Subject:</strong> [OMPI devel] 1.6.0 - make check failures on OSX Lion using clang-3.1<br>
<strong>From:</strong> P. Martin (<em>mrsmiley98_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-17 15:15:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11004.php">Ralph Castain: "[OMPI devel] ORTE async operations"</a>
<li><strong>Previous message:</strong> <a href="11002.php">Jeff Squyres: "[OMPI devel] Register by COB Fri, Jun 1 for OMPI devel meeting"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, I'm reporting these make check failures on OSX Lion 10.7.4
<br>
for Homebrew, a package installer for Macs.  I am trying to author
<br>
the updated install script for openmpi-1.6.0 using Homebrew, but
<br>
I get a few test failures using the default compiler, clang-3.1.
<br>
<p>Note: I get no test failures using llvm-gcc-4.2.1 (5658, 2336.9).
<br>
<p>My setup:
<br>
iMac from 2009
<br>
OSX Lion 10.7.4
<br>
Core i5 quad-core 64-bit nehalem
<br>
8MB RAM
<br>
XCode 4.3.2
<br>
clang 3.1 (build 318)
<br>
gfortran 4.2.4-5666.3
<br>
<p>I took a look at your FAQ and searched both users and devel lists
<br>
for clang and OSX posts concerning test failures, but I only found
<br>
one thread where a clang bug was found concerning weak symbols.
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2010/10/14438.php">http://www.open-mpi.org/community/lists/users/2010/10/14438.php</a>
<br>
<a href="http://llvm.org/bugs/show_bug.cgi?id=8383">http://llvm.org/bugs/show_bug.cgi?id=8383</a>
<br>
<p>As the bug report on llvm.org is still open with no updates,
<br>
I just tested it, and clang-3.1 returns an error now instead
<br>
of compiling that:
<br>
<p>$ clang -shared -fvisibility=hidden weak.c -o libweak.so &amp;&amp; nm -D libweak.so | grep foo
<br>
weak.c:6:36: error: only weak aliases are supported on darwin
<br>
int foo_b(void) __attribute((weak, alias((&quot;foo_c&quot;))));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p><p>So here is what happened with me and openmpi-1.6.0 and make check:
<br>
<p>configure terminal output - <a href="https://gist.github.com/2720855">https://gist.github.com/2720855</a>
<br>
config.log -  <a href="https://raw.github.com/gist/2720840">https://raw.github.com/gist/2720840</a>
<br>
make V=1 log -  <a href="https://raw.github.com/gist/2720893">https://raw.github.com/gist/2720893</a>
<br>
make V=1 check -  <a href="https://gist.github.com/2720908">https://gist.github.com/2720908</a>
<br>
<p>Let me know how I can help.  I suppose the warnings between lines
<br>
745-800 of the log for make check in datatype are significant where there
<br>
are a couple of array out of bounds errors, and later the abort trap 6
<br>
messages.  Also line 1811 of the configure terminal output mentioned
<br>
Darwin being an unknown architecture.
<br>
<p>Okay that's about it.  I hope it was ok to gist those logs as versus
<br>
load your mail server up, but I can fix that if you need it.
<br>
<p>2bits
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11004.php">Ralph Castain: "[OMPI devel] ORTE async operations"</a>
<li><strong>Previous message:</strong> <a href="11002.php">Jeff Squyres: "[OMPI devel] Register by COB Fri, Jun 1 for OMPI devel meeting"</a>
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
