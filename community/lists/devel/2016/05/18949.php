<?
$subject_val = "Re: [OMPI devel] [2.0.0rc2] Solaris Studio 12.5-beta build failure (libtool, w/ patch)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 03:32:46 2016" -->
<!-- isoreceived="20160510073246" -->
<!-- sent="Tue, 10 May 2016 16:32:44 +0900" -->
<!-- isosent="20160510073244" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc2] Solaris Studio 12.5-beta build failure (libtool, w/ patch)" -->
<!-- id="7cb6e570-7e96-828d-e5f2-ec3debf5bdfb_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA17_tg2a1U2DLyQNwPTR_KsCx4xX+q8vdYQ3-wmFpW76-g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc2] Solaris Studio 12.5-beta build failure (libtool, w/ patch)<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 03:32:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18950.php">Sreenidhi Bharathkar Ramesh: "[OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>Previous message:</strong> <a href="18948.php">Josh Hursey: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>In reply to:</strong> <a href="18923.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] Solaris Studio 12.5-beta build failure (libtool, w/ patch)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul,
<br>
<p><p>i pushed your patch at 
<br>
<a href="https://github.com/open-mpi/ompi/commit/ef3ee027b07fa8cd447e4fffec56ecfe3332548e">https://github.com/open-mpi/ompi/commit/ef3ee027b07fa8cd447e4fffec56ecfe3332548e</a> 
<br>
and will PR from now
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 5/6/2016 1:13 PM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; Disclamer first:
</span><br>
<span class="quotelev1">&gt; Yes, I am testing a *beta* compiler but this is NOT about a compiler bug.
</span><br>
<span class="quotelev1">&gt; I leave it to the judgment of others whether my findings warrant any 
</span><br>
<span class="quotelev1">&gt; action.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am testing the 2.0.0rc2 tarball with the Oracle Solaris Studio 
</span><br>
<span class="quotelev1">&gt; 12.5-beta for Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With Studio 12.4 all is fine on the same system with identical 
</span><br>
<span class="quotelev1">&gt; configure options.
</span><br>
<span class="quotelev1">&gt; The configure command options in both cases (with different $PATH):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --prefix=[...] --enable-debug --enable-mpi-cxx CC=cc CXX=CC FC=f95
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With 12.5-beta (but not 12.4) I see the following failure while 
</span><br>
<span class="quotelev1">&gt; building the fortran bindings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../../libtool  --tag=FC   --mode=link f95 
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include 
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u5b/openmpi-2.0.0rc2/ompi/include 
</span><br>
<span class="quotelev1">&gt; -I../../../.. 
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u5b/openmpi-2.0.0rc2 
</span><br>
<span class="quotelev1">&gt;  -g -version-info 20:0:0   -o libmpi_usempi_ignore_tkr.la 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://libmpi_usempi_ignore_tkr.la">http://libmpi_usempi_ignore_tkr.la</a>&gt; -rpath 
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u5b/INST/lib 
</span><br>
<span class="quotelev1">&gt; mpi-ignore-tkr.lo 
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u5b/BLD/opal/libopen-pal.la 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://libopen-pal.la">http://libopen-pal.la</a>&gt; -lrt -lm -lutil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: link: f95 -shared   .libs/mpi-ignore-tkr.o    -rpath 
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u5b/BLD/opal/.libs 
</span><br>
<span class="quotelev1">&gt; -rpath 
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u5b/INST/lib 
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u5b/BLD/opal/.libs/libopen-pal.so 
</span><br>
<span class="quotelev1">&gt; -ldl -lnuma -lrt -lm -lutil  -g   -mt -soname 
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.so.20 -o .libs/libmpi_usempi_ignore_tkr.so.20.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; f90: Warning: Option -shared passed to ld, if ld is invoked, ignored 
</span><br>
<span class="quotelev1">&gt; otherwise
</span><br>
<span class="quotelev1">&gt; f90: Warning: Option -path passed to ld, if ld is invoked, ignored 
</span><br>
<span class="quotelev1">&gt; otherwise
</span><br>
<span class="quotelev1">&gt; f90: Warning: Option -path passed to ld, if ld is invoked, ignored 
</span><br>
<span class="quotelev1">&gt; otherwise
</span><br>
<span class="quotelev1">&gt; f90: Warning: Option -soname passed to ld, if ld is invoked, ignored 
</span><br>
<span class="quotelev1">&gt; otherwise
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: unrecognized option '-path'
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: use the --help option for usage information
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libmpi_usempi_ignore_tkr.la 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://libmpi_usempi_ignore_tkr.la">http://libmpi_usempi_ignore_tkr.la</a>&gt;] Error 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My first observation is that f95 command line produced by libtool 
</span><br>
<span class="quotelev1">&gt; doesn't look at all like the same step when using the 12.4 compiler:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: link: f95 -G  -KPIC  .libs/mpi-ignore-tkr.o   -Qoption ld 
</span><br>
<span class="quotelev1">&gt; -rpath -Qoption ld 
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u4/BLD/opal/.libs 
</span><br>
<span class="quotelev1">&gt; -Qoption ld -rpath -Qoption ld 
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u4/INST/lib 
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-2.0.0rc2-linux-x86_64-ss12u4/BLD/opal/.libs/libopen-pal.so 
</span><br>
<span class="quotelev1">&gt; -ldl -lnuma -lrt -lm -lutil  -g   -mt -Qoption ld -soname -Qoption ld 
</span><br>
<span class="quotelev1">&gt; libmpi_usempi_ignore_tkr.so.20 -o .libs/libmpi_usempi_ignore_tkr.so.20.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, my initial diagnosis was that this is most likely a libtool bug.
</span><br>
<span class="quotelev1">&gt; BUT, I also know that autogen.pl &lt;<a href="http://autogen.pl">http://autogen.pl</a>&gt; contains logic 
</span><br>
<span class="quotelev1">&gt; for &quot;Patching configure for Sun Studio Fortran version strings&quot;.
</span><br>
<span class="quotelev1">&gt; So, I recognized that Open MPI's autogen.pl &lt;<a href="http://autogen.pl">http://autogen.pl</a>&gt; might 
</span><br>
<span class="quotelev1">&gt; be where the fix belongs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Continuing on that line of though I discovered that the version 
</span><br>
<span class="quotelev1">&gt; strings for the Fortran compiler have changed between 12.4 and 12.5-beta:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     $ /opt/oracle/solarisstudio12.4/bin/f95 -V
</span><br>
<span class="quotelev1">&gt;     f90: Sun Fortran 95 8.7 Linux_i386 2014/10/20
</span><br>
<span class="quotelev1">&gt;     $ /opt/oracle/solarisstudio12.5-beta/bin/f95 -V
</span><br>
<span class="quotelev1">&gt;     f90: Studio 12.5 Fortran 95 8.8 Linux_i386 Beta 2015/11/17
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Notice that &quot;Sun&quot; is gone, and thus the patterns used by libtool no 
</span><br>
<span class="quotelev1">&gt; longer match!
</span><br>
<span class="quotelev1">&gt; So, this *is* a libtool &quot;issue&quot;, but can hardly be blamed on libtool.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: the C and C++ compiler still say &quot;Sun&quot; and match the patterns 
</span><br>
<span class="quotelev1">&gt; used by libtool:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     $ /opt/oracle/solarisstudio12.5-beta/bin/cc -V
</span><br>
<span class="quotelev1">&gt;     cc: Studio 12.5 Sun C 5.14 Linux_i386 Beta 2015/11/17
</span><br>
<span class="quotelev1">&gt;     $ /opt/oracle/solarisstudio12.5-beta/bin/CC -V
</span><br>
<span class="quotelev1">&gt;     CC: Studio 12.5 Sun C++ 5.14 Linux_i386 Beta 2015/11/17
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked the libtool git repo, and there is no upstream fix for this 
</span><br>
<span class="quotelev1">&gt; (Ralf W., are you still on this list?)
</span><br>
<span class="quotelev1">&gt; So, for all that wind-up this posting comes down to a small addition 
</span><br>
<span class="quotelev1">&gt; to autogen.sh:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- a/autogen.pl &lt;<a href="http://autogen.pl">http://autogen.pl</a>&gt;
</span><br>
<span class="quotelev1">&gt; +++ b/autogen.pl &lt;<a href="http://autogen.pl">http://autogen.pl</a>&gt;
</span><br>
<span class="quotelev1">&gt; @@ -977,6 +977,12 @@ sub patch_autotools_output {
</span><br>
<span class="quotelev1">&gt;          $c =~ s/$search_string/$replace_string/;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +    # Oracle has apparently begun (as of 12.5-beta) removing the 
</span><br>
<span class="quotelev1">&gt; &quot;Sun&quot; branding.
</span><br>
<span class="quotelev1">&gt; +    # So this patch (cumulative over the previous one) is required.
</span><br>
<span class="quotelev1">&gt; +    push(@verbose_out, $indent_str . &quot;Patching configure for Oracle 
</span><br>
<span class="quotelev1">&gt; Studio Fortran version strings\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    $c =~ s/\*Sun\*Fortran\*\)/*Sun*Fortran* | *Studio*Fortran*)/g;
</span><br>
<span class="quotelev1">&gt; +    $c =~ s/\*Sun\\ F\*\)(.*\n\s+tmp_sharedflag=)/*Sun\\ F* | 
</span><br>
<span class="quotelev1">&gt; *Studio*Fortran*)$1/g;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      # See 
</span><br>
<span class="quotelev1">&gt; <a href="http://git.savannah.gnu.org/cgit/libtool.git/commit/?id=v2.2.6-201-g519bf91">http://git.savannah.gnu.org/cgit/libtool.git/commit/?id=v2.2.6-201-g519bf91</a> 
</span><br>
<span class="quotelev1">&gt; for details
</span><br>
<span class="quotelev1">&gt;      # Note that this issue was fixed in LT 2.2.8, however most 
</span><br>
<span class="quotelev1">&gt; distros are still using 2.2.6b
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18923.php">http://www.open-mpi.org/community/lists/devel/2016/05/18923.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18949/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18950.php">Sreenidhi Bharathkar Ramesh: "[OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>Previous message:</strong> <a href="18948.php">Josh Hursey: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>In reply to:</strong> <a href="18923.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] Solaris Studio 12.5-beta build failure (libtool, w/ patch)"</a>
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
