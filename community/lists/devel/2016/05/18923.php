<?
$subject_val = "[OMPI devel] [2.0.0rc2] Solaris Studio 12.5-beta build failure (libtool, w/ patch)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 00:13:47 2016" -->
<!-- isoreceived="20160506041347" -->
<!-- sent="Thu, 5 May 2016 21:13:29 -0700" -->
<!-- isosent="20160506041329" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc2] Solaris Studio 12.5-beta build failure (libtool, w/ patch)" -->
<!-- id="CAAvDA17_tg2a1U2DLyQNwPTR_KsCx4xX+q8vdYQ3-wmFpW76-g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc2] Solaris Studio 12.5-beta build failure (libtool, w/ patch)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 00:13:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18924.php">Nathan Hjelm: "Re: [OMPI devel] Question about 'progress function'"</a>
<li><strong>Previous message:</strong> <a href="18922.php">dpchoudh .: "Re: [OMPI devel] Question about 'progress function'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18949.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc2] Solaris Studio 12.5-beta build failure (libtool, w/ patch)"</a>
<li><strong>Reply:</strong> <a href="18949.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc2] Solaris Studio 12.5-beta build failure (libtool, w/ patch)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Disclamer first:
<br>
Yes, I am testing a *beta* compiler but this is NOT about a compiler bug.
<br>
I leave it to the judgment of others whether my findings warrant any
<br>
action.
<br>
<p><p>I am testing the 2.0.0rc2 tarball with the Oracle Solaris Studio 12.5-beta
<br>
for Linux.
<br>
<p>With Studio 12.4 all is fine on the same system with identical configure
<br>
options.
<br>
The configure command options in both cases (with different $PATH):
<br>
<p>--prefix=[...] --enable-debug --enable-mpi-cxx CC=cc CXX=CC FC=f95
<br>
<p><p>With 12.5-beta (but not 12.4) I see the following failure while building
<br>
the fortran bindings:
<br>
<p>/bin/sh ../../../../libtool  --tag=FC   --mode=link f95
<br>
-I../../../../ompi/include
<br>
-I/scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u5b/openmpi-2.0.0rc2/ompi/include
<br>
-I../../../..
<br>
-I/scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u5b/openmpi-2.0.0rc2
<br>
&nbsp;-g -version-info 20:0:0   -o libmpi_usempi_ignore_tkr.la -rpath
<br>
/scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u5b/INST/lib
<br>
mpi-ignore-tkr.lo
<br>
/scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u5b/BLD/opal/
<br>
libopen-pal.la -lrt -lm -lutil
<br>
<p>libtool: link: f95 -shared   .libs/mpi-ignore-tkr.o    -rpath
<br>
/scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u5b/BLD/opal/.libs
<br>
-rpath
<br>
/scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u5b/INST/lib
<br>
/scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u5b/BLD/opal/.libs/libopen-pal.so
<br>
-ldl -lnuma -lrt -lm -lutil  -g   -mt -soname
<br>
libmpi_usempi_ignore_tkr.so.20 -o .libs/libmpi_usempi_ignore_tkr.so.20.0.0
<br>
<p>f90: Warning: Option -shared passed to ld, if ld is invoked, ignored
<br>
otherwise
<br>
f90: Warning: Option -path passed to ld, if ld is invoked, ignored otherwise
<br>
f90: Warning: Option -path passed to ld, if ld is invoked, ignored otherwise
<br>
f90: Warning: Option -soname passed to ld, if ld is invoked, ignored
<br>
otherwise
<br>
/usr/bin/ld: unrecognized option '-path'
<br>
/usr/bin/ld: use the --help option for usage information
<br>
make[2]: *** [libmpi_usempi_ignore_tkr.la] Error 2
<br>
<p><p>My first observation is that f95 command line produced by libtool doesn't
<br>
look at all like the same step when using the 12.4 compiler:
<br>
<p>libtool: link: f95 -G  -KPIC  .libs/mpi-ignore-tkr.o   -Qoption ld -rpath
<br>
-Qoption ld
<br>
/scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u4/BLD/opal/.libs
<br>
-Qoption ld -rpath -Qoption ld
<br>
/scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u4/INST/lib
<br>
/scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u4/BLD/opal/.libs/libopen-pal.so
<br>
-ldl -lnuma -lrt -lm -lutil  -g   -mt -Qoption ld -soname -Qoption ld
<br>
libmpi_usempi_ignore_tkr.so.20 -o .libs/libmpi_usempi_ignore_tkr.so.20.0.0
<br>
<p><p>So, my initial diagnosis was that this is most likely a libtool bug.
<br>
BUT, I also know that autogen.pl contains logic for &quot;Patching configure for
<br>
Sun Studio Fortran version strings&quot;.
<br>
So, I recognized that Open MPI's autogen.pl might be where the fix belongs.
<br>
<p>Continuing on that line of though I discovered that the version strings for
<br>
the Fortran compiler have changed between 12.4 and 12.5-beta:
<br>
<p>$ /opt/oracle/solarisstudio12.4/bin/f95 -V
<br>
f90: Sun Fortran 95 8.7 Linux_i386 2014/10/20
<br>
$ /opt/oracle/solarisstudio12.5-beta/bin/f95 -V
<br>
f90: Studio 12.5 Fortran 95 8.8 Linux_i386 Beta 2015/11/17
<br>
<p><p>Notice that &quot;Sun&quot; is gone, and thus the patterns used by libtool no longer
<br>
match!
<br>
So, this *is* a libtool &quot;issue&quot;, but can hardly be blamed on libtool.
<br>
<p>FWIW: the C and C++ compiler still say &quot;Sun&quot; and match the patterns used by
<br>
libtool:
<br>
<p>$ /opt/oracle/solarisstudio12.5-beta/bin/cc -V
<br>
cc: Studio 12.5 Sun C 5.14 Linux_i386 Beta 2015/11/17
<br>
$ /opt/oracle/solarisstudio12.5-beta/bin/CC -V
<br>
CC: Studio 12.5 Sun C++ 5.14 Linux_i386 Beta 2015/11/17
<br>
<p><p>I checked the libtool git repo, and there is no upstream fix for this (Ralf
<br>
W., are you still on this list?)
<br>
So, for all that wind-up this posting comes down to a small addition to
<br>
autogen.sh:
<br>
<p>--- a/autogen.pl
<br>
+++ b/autogen.pl
<br>
@@ -977,6 +977,12 @@ sub patch_autotools_output {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$c =~ s/$search_string/$replace_string/;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>+    # Oracle has apparently begun (as of 12.5-beta) removing the &quot;Sun&quot;
<br>
branding.
<br>
+    # So this patch (cumulative over the previous one) is required.
<br>
+    push(@verbose_out, $indent_str . &quot;Patching configure for Oracle Studio
<br>
Fortran version strings\n&quot;);
<br>
+    $c =~ s/\*Sun\*Fortran\*\)/*Sun*Fortran* | *Studio*Fortran*)/g;
<br>
+    $c =~ s/\*Sun\\ F\*\)(.*\n\s+tmp_sharedflag=)/*Sun\\ F* |
<br>
*Studio*Fortran*)$1/g;
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# See
<br>
<a href="http://git.savannah.gnu.org/cgit/libtool.git/commit/?id=v2.2.6-201-g519bf91">http://git.savannah.gnu.org/cgit/libtool.git/commit/?id=v2.2.6-201-g519bf91</a>
<br>
for details
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Note that this issue was fixed in LT 2.2.8, however most distros are
<br>
still using 2.2.6b
<br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18923/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18924.php">Nathan Hjelm: "Re: [OMPI devel] Question about 'progress function'"</a>
<li><strong>Previous message:</strong> <a href="18922.php">dpchoudh .: "Re: [OMPI devel] Question about 'progress function'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18949.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc2] Solaris Studio 12.5-beta build failure (libtool, w/ patch)"</a>
<li><strong>Reply:</strong> <a href="18949.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc2] Solaris Studio 12.5-beta build failure (libtool, w/ patch)"</a>
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
