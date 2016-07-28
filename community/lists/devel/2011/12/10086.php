<?
$subject_val = "[OMPI devel] OMPI 1.4.5rc1 tested: MacOS/ppc and *BSD/amd64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 22:58:34 2011" -->
<!-- isoreceived="20111214035834" -->
<!-- sent="Tue, 13 Dec 2011 19:58:13 -0800" -->
<!-- isosent="20111214035813" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI 1.4.5rc1 tested: MacOS/ppc and *BSD/amd64" -->
<!-- id="4EE81ED5.3000701_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FA4CADBB-0548-44CE-87BD-641A7CB97A2C_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI 1.4.5rc1 tested: MacOS/ppc and *BSD/amd64<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 22:58:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10087.php">Paul H. Hargrove: "[OMPI devel] OMPI 1.4.5rc1 tested: elan"</a>
<li><strong>Previous message:</strong> <a href="10085.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="10054.php">Jeff Squyres: "[OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10087.php">Paul H. Hargrove: "[OMPI devel] OMPI 1.4.5rc1 tested: elan"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have tried 8 non-mainstream test platforms, using their &quot;/usr/bin/gcc&quot; 
<br>
compilers:
<br>
<p>MacOS 10.3 (Panther) on PPC:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gcc (GCC) 3.3 20030304 (Apple Computer, Inc. build 1666)
<br>
MacOS 10.4 (Tiger) on PPC:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;powerpc-apple-darwin8-gcc-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc. 
<br>
build 5341)
<br>
MacOS 10.5 (Leopard) on PPC:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;powerpc-apple-darwin9-gcc-4.0.1 (GCC) 4.0.1 (Apple Inc. build 5488)
<br>
FreeBSD-8.2-RELEASE on amd64:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gcc (GCC) 4.2.1 20070719  [FreeBSD]
<br>
FreeBSD-7.2-RELEASE on amd64:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gcc (GCC) 4.2.1 20070719  [FreeBSD]
<br>
FreeBSD-6.3-RELEASE on amd64:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gcc (GCC) 3.4.6 [FreeBSD] 20060305
<br>
NetBSD-5.1 on amd64:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gcc (GCC) 4.1.3 20080704 prerelease (NetBSD nb2 20081120)
<br>
OpenBSD-5.0 on amd64:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gcc (GCC) 4.2.1 20070719
<br>
<p>On all but two I was able to configure w/ only a --prefix option, and 
<br>
then &quot;make&quot;, &quot;make install&quot; and &quot;make check&quot; w/o errors (where &quot;gmake&quot; 
<br>
replaces &quot;make&quot; on the BSD hosts).
<br>
<p>On OpenBSD I had to configure with --disable-io-romio, because the build 
<br>
failed otherwise.
<br>
The errors are the same as I experienced with an older OpenBSD-4.6 on 
<br>
ompi-1.4.3rc1:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2010/08/8338.php">http://www.open-mpi.org/community/lists/devel/2010/08/8338.php</a>
<br>
<p>On MacOS 10.3 (Panther) I experienced the following failure at &quot;make&quot; time:
<br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../opal/util 
</span><br>
<span class="quotelev1">&gt; -I../../opal/include -I../../orte/include -I../../ompi/include 
</span><br>
<span class="quotelev1">&gt; -I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../.. -I../.. 
</span><br>
<span class="quotelev1">&gt; -I../../../opal/include -I../../../orte/include 
</span><br>
<span class="quotelev1">&gt; -I../../../ompi/include -D_REENTRANT -O3 -DNDEBUG -finline-functions 
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -MT path.lo -MD -MP -MF .deps/path.Tpo -c 
</span><br>
<span class="quotelev1">&gt; ../../../opal/util/path.c  -fno-common -DPIC -o .libs/path.o
</span><br>
<span class="quotelev1">&gt; ../../../opal/util/path.c: In function `opal_path_nfs':
</span><br>
<span class="quotelev1">&gt; ../../../opal/util/path.c:508: error: `MFSTYPENAMELEN' undeclared 
</span><br>
<span class="quotelev1">&gt; (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../opal/util/path.c:508: error: (Each undeclared identifier is 
</span><br>
<span class="quotelev1">&gt; reported only once
</span><br>
<span class="quotelev1">&gt; ../../../opal/util/path.c:508: error: for each function it appears in.)
</span><br>
Which is from the following in opal/util/path.c:
<br>
<span class="quotelev1">&gt; #elif (defined(__APPLE__) &amp;&amp; defined(__MACH__))
</span><br>
<span class="quotelev1">&gt;     for (i = 0; i &lt; FS_TYPES_NUM; i++)
</span><br>
<span class="quotelev1">&gt;         if (0 == strncasecmp (fs_types[i].f_fsname, buf.f_fstypename, 
</span><br>
<span class="quotelev1">&gt; MFSTYPENAMELEN))
</span><br>
<span class="quotelev1">&gt;             goto found;
</span><br>
On this system, it appears that MFSNAMELEN is the proper length (as w/ 
<br>
FreeBSD):
<br>
<span class="quotelev1">&gt; $ man statfs | grep NAMELEN
</span><br>
<span class="quotelev1">&gt;      #define MFSNAMELEN   15 /* length of fs type name, not inc. nul */
</span><br>
<span class="quotelev1">&gt;      #define MNAMELEN     90 /* length of buffer for returned name */
</span><br>
<span class="quotelev1">&gt;          char    f_fstypename[MFSNAMELEN]; /* fs type name */
</span><br>
<span class="quotelev1">&gt;          char    f_mntonname[MNAMELEN];    /* directory on which 
</span><br>
<span class="quotelev1">&gt; mounted */
</span><br>
<span class="quotelev1">&gt;          char    f_mntfromname[MNAMELEN];  /* mounted file system */
</span><br>
<span class="quotelev1">&gt; $ grep -rl MFSNAMELEN /usr/include/
</span><br>
<span class="quotelev1">&gt; /usr/include/sys/mount.h
</span><br>
By editing opal/util/path.c to make that change, I was STILL able to 
<br>
complete the &quot;make&quot;, reaching the following error linking ompi_info:
<br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CXX   --mode=link g++  -O3 -DNDEBUG 
</span><br>
<span class="quotelev1">&gt; -finline-functions   -export-dynamic   -o ompi_info components.o 
</span><br>
<span class="quotelev1">&gt; ompi_info.o output.o param.o version.o ../../../ompi/libmpi.la
</span><br>
<span class="quotelev1">&gt; libtool: link: g++ -O3 -DNDEBUG -finline-functions -o .libs/ompi_info 
</span><br>
<span class="quotelev1">&gt; components.o ompi_info.o output.o param.o version.o -Wl,-bind_at_load  
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.dylib 
</span><br>
<span class="quotelev1">&gt; /home/phargrove/openmpi-1.4.5rc1/BUILD-dftl/orte/.libs/libopen-rte.dylib 
</span><br>
<span class="quotelev1">&gt; /home/phargrove/openmpi-1.4.5rc1/BUILD-dftl/opal/.libs/libopen-pal.dylib
</span><br>
<span class="quotelev1">&gt; ld: Undefined symbols:
</span><br>
<span class="quotelev1">&gt; _pthread_atfork
</span><br>
Clearly -lpthread is needed &quot;somewhere&quot;, but I didn't pursue this 
<br>
platform any deeper.
<br>
<p><p><p>In the unlikely event anybody wants to follow up on either failure, let 
<br>
me know.
<br>
<p>There were a fair number of warnings at build time on several of the builds.
<br>
I will report any that I find alarming IF/when I've had a chance to pick 
<br>
through them.
<br>
<p>Note that I've not *run* any MPI applications yet.
<br>
<p>-Paul
<br>
<p><p>On 12/8/2011 2:13 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; 1.4.5rc1 is now posted in the usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gearing up for a pre-Christmas release -- please test!  There have only been a few bug fixes since 1.4.4.  See <a href="http://svn.open-mpi.org/svn/ompi/branches/v1.4/NEWS">http://svn.open-mpi.org/svn/ompi/branches/v1.4/NEWS</a> for details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (note that we'll likely have a 1.5.5rc1 shortly, too)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10087.php">Paul H. Hargrove: "[OMPI devel] OMPI 1.4.5rc1 tested: elan"</a>
<li><strong>Previous message:</strong> <a href="10085.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="10054.php">Jeff Squyres: "[OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10087.php">Paul H. Hargrove: "[OMPI devel] OMPI 1.4.5rc1 tested: elan"</a>
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
