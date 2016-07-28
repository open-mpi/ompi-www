<?
$subject_val = "Re: [OMPI devel] 1.5 supported systems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 24 03:04:10 2012" -->
<!-- isoreceived="20120224080410" -->
<!-- sent="Fri, 24 Feb 2012 00:04:04 -0800" -->
<!-- isosent="20120224080404" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5 supported systems" -->
<!-- id="CAAvDA16_Yh+CYnT2ijx2n+JMEDY7YWnAYryyddCR2aYqXonH-g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E501EC6F-A3C7-400F-A1E1-F8ED294F9C29_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5 supported systems<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-24 03:04:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10593.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Previous message:</strong> <a href="10591.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc2"</a>
<li><strong>In reply to:</strong> <a href="10586.php">Larry Baker: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10576.php">TERRY DONTJE: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree w/ Jeff that we really should only enumerate &quot;bad&quot; compilers
<br>
(blacklist rather than whitelist).  However, as Larry points out, &quot;gcc&quot; is
<br>
not as clearly defined as it once was.
<br>
<p>Currently I know of both Apple and Oracle shipping compilers with the gcc
<br>
front-end and &quot;other&quot; backend (llvm from Apple, and the Solaris Studio
<br>
backend for Oracle).  IBM also ships a &quot;patched up&quot; gcc variant (known as
<br>
Advance Toolchain or &quot;AT&quot;), with an updated backend for their latest CPUs,
<br>
but at least those are just mods (not replacements) of the gcc backends.
<br>
<p>In the Oracle case, there are systems where &quot;gccfss&quot; gets installed as
<br>
/usr/bin/gcc.  In this case, my v1.5 testing determined, and Oracle agreed,
<br>
that gccfss is inappropriate for building Open MPI.  So, Terry D added
<br>
configure logic to reject &quot;gccfss&quot;.  This compiler is clearly delineated
<br>
from other &quot;gcc&quot; cases by that configure logic (and perhaps the README?).
<br>
<p>In the case of Apple Xcode the *only* gcc provided by Xcode 4.2 is
<br>
&quot;llvm-gcc&quot; (I don't know about Xcode 4.1 or 4.0).  However, my testing on
<br>
MacOS 10.7 has NOT turned up anything that hints at any compiler-specific
<br>
bugs.  So, lets just agree to call this &quot;gcc&quot; for the purpose of the README.
<br>
<p>In the IBM case I have also tested and found NO compile-specific issues,
<br>
and am therefore content with continuing to treat IBM's &quot;AT&quot; compilers just
<br>
as any other &quot;gcc&quot;.
<br>
<p>So, my point of view is that one should treat &quot;gcc the command&quot; the same as
<br>
&quot;gcc the compiler&quot; UNLESS (as with gccfss) there is a known issue to
<br>
recommend otherwise.  Even if a given user knows enough to make the
<br>
distinction, there is currently no &quot;need&quot; for them to do so.  If it quacks
<br>
like a duck...
<br>
<p>-Paul
<br>
<p>On Thu, Feb 23, 2012 at 11:07 AM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm not yet using the Mac OS X LLVM compilers.  I have been under the
</span><br>
<span class="quotelev1">&gt; impression that LLVM compilers are not GNU compilers.  However, given the
</span><br>
<span class="quotelev1">&gt; names llvm-gcc-x.x, I guess they are some sort of hybrid.  (gcc front end,
</span><br>
<span class="quotelev1">&gt; LLVM backend?)  I agree with Jeff's point about not getting too specific
</span><br>
<span class="quotelev1">&gt; about gcc version numbers unless there are known problems.  However, if
</span><br>
<span class="quotelev1">&gt; someone told me that gcc was supported, I would not automatically assume
</span><br>
<span class="quotelev1">&gt; that meant llvm-gcc.  As Paul showed us, the &quot;gcc&quot; command on Mac OS X 10.7
</span><br>
<span class="quotelev1">&gt; is a soft link to an llvm-gcc compiler, not a gcc compiler.  When we say
</span><br>
<span class="quotelev1">&gt; that &quot;gcc&quot; is supported, is that intended to mean the command or the
</span><br>
<span class="quotelev1">&gt; compiler?  I would assume it meant the latter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 23 Feb 2012, at 4:44 AM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I don't think I want to get specific about the gcc versions on any
</span><br>
<span class="quotelev2">&gt;&gt; platform, unless we know that they *don't* work.  There's too many versions
</span><br>
<span class="quotelev2">&gt;&gt; and variants of gcc out there to have an inclusive list -- I'd rather have
</span><br>
<span class="quotelev2">&gt;&gt; an *exclusive* list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 23, 2012, at 3:39 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  And here is the 10.7 machine as promised:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ProductName:    Mac OS X
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ProductVersion: 10.7.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BuildVersion:   11D50b
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxr-xr-x  1 root  wheel  12 Oct 27 14:01 /usr/bin/gcc -&gt; llvm-gcc-4.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Feb 22, 2012 at 7:44 PM, Paul H. Hargrove &lt;PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can get exact info from my MacOS 10.7 machine later, but its gcc is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; llvm-gcc-4.2 IIRC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here are my 10.5 and 10.6:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ProductName:    Mac OS X
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ProductVersion: 10.5.8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BuildVersion:   9L31a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; powerpc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxr-xr-x  1 root  wheel       7 Nov  1  2008 /usr/bin/gcc -&gt; gcc-4.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -r-xr-xr-x  1 root  wheel  258368 Feb 19  2008 /usr/bin/gcc-3.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x  1 root  wheel   93088 Jul 17  2008 /usr/bin/gcc-4.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x  1 root  wheel  105680 May 18  2008 /usr/bin/gcc-4.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ProductName:    Mac OS X
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ProductVersion: 10.5.8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BuildVersion:   9L30
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i386
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxr-xr-x  1 root  wheel      7 Nov  8  2007 /usr/bin/gcc -&gt; gcc-4.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x  1 root  wheel  93072 Sep 23  2007 /usr/bin/gcc-4.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ProductName:    Mac OS X
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ProductVersion: 10.6.8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BuildVersion:   10K549
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i386
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxr-xr-x  1 root  wheel       7 Sep 29  2009 /usr/bin/gcc -&gt; gcc-4.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x  1 root  wheel   97392 May 18  2009 /usr/bin/gcc-4.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x  1 root  wheel  166128 May 18  2009 /usr/bin/gcc-4.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2/22/2012 6:13 PM, Larry Baker wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Paul,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Haven't you been running Intel compilers on OS X?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, do we have specifics about which gcc's on Mac OS X?  I have (OS X
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 10.5.8):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  savaii:~ baker$ ls -l /usr/bin/gcc*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxr-xr-x  1 root  wheel       7 Oct  2  2009 /usr/bin/gcc -&gt; gcc-4.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -r-xr-xr-x  1 root  wheel  258368 Feb 19  2008 /usr/bin/gcc-3.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x  1 root  wheel   93088 Feb  5  2009 /usr/bin/gcc-4.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x  1 root  wheel  105680 Apr 27  2009 /usr/bin/gcc-4.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  savaii:~ baker$ ls -l /usr/bin/cc*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxr-xr-x  1 root  wheel  7 Oct  2  2009 /usr/bin/cc -&gt; gcc-4.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  savaii:~ baker$ ls /Developer/usr/llvm-gcc-4.2/**bin/*cc*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /Developer/usr/llvm-gcc-4.2/**bin/i686-apple-darwin9-llvm-**gcc-4.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /Developer/usr/llvm-gcc-4.2/**bin/llvm-gcc-4.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /Developer/usr/llvm-gcc-4.2/**bin/powerpc-apple-darwin9-**llvm-gcc-4.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Larry Baker
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 22 Feb 2012, at 5:55 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Folks at Oracle should decide, but I suspect &quot;Solaris 10&quot; should be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; updated to &quot;Solaris 10 and 11&quot;, or just &quot;11&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 2/22/2012 2:44 PM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Please verify this list of supported systems for the v1.5.5 release:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - The run-time systems that are currently supported are:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - rsh / ssh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - LoadLeveler
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - PBS Pro, Open PBS, Torque
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - Platform LSF (v7.0.2 and later)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - SLURM
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - Cray XT-3, XT-4, and XT-5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - Oracle Grid Engine (OGE) 6.1, 6.2 and open source Grid Engine
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - Microsoft Windows CCP (Microsoft Windows server 2003 and 2008)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - Systems that have been tested are:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - Linux (various flavors/distros), 32 bit, with gcc, and Oracle
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Solaris Studio 12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - Linux (various flavors/distros), 64 bit (x86), with gcc, Absoft,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Intel, Portland, and Oracle Solaris Studio 12 compilers (*)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - OS X (10.5, 10.6, 10.7), 32 and 64 bit (x86_64), with gcc and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Absoft compilers (*)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - Oracle Solaris 10, 32 and 64 bit (SPARC, i386, x86_64), with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Oracle Solaris Studio 12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  (*) Be sure to read the Compiler Notes, below.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - Other systems have been lightly (but not fully tested):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - Other 64 bit platforms (e.g., Linux on PPC64)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  - Microsoft Windows CCP (Microsoft Windows server 2003 and 2008);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   see the README.WINDOWS file.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ______________________________**_________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC Research Department                   Tel:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ______________________________**_________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ______________________________**_________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/">http://www.cisco.com/web/</a>**
</span><br>
<span class="quotelev2">&gt;&gt; about/doing_business/legal/**cri/&lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ______________________________**_________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10592/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10593.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Previous message:</strong> <a href="10591.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc2"</a>
<li><strong>In reply to:</strong> <a href="10586.php">Larry Baker: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10576.php">TERRY DONTJE: "Re: [OMPI devel] 1.5 supported systems"</a>
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
