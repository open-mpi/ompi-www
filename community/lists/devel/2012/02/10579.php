<?
$subject_val = "Re: [OMPI devel] 1.5 supported systems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 23 07:44:19 2012" -->
<!-- isoreceived="20120223124419" -->
<!-- sent="Thu, 23 Feb 2012 07:44:15 -0500" -->
<!-- isosent="20120223124415" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5 supported systems" -->
<!-- id="870969D1-6E1D-4248-A444-5A837E762855_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15E8+izY=JpjMkrwU9Pekx4CMs-egGmg0WhcjXhSNaOYw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-23 07:44:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10580.php">Jeffrey Squyres: "[OMPI devel] 1.5.5rc2"</a>
<li><strong>Previous message:</strong> <a href="10578.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>In reply to:</strong> <a href="10575.php">Paul Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10586.php">Larry Baker: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Reply:</strong> <a href="10586.php">Larry Baker: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think I want to get specific about the gcc versions on any platform, unless we know that they *don't* work.  There's too many versions and variants of gcc out there to have an inclusive list -- I'd rather have an *exclusive* list.
<br>
<p><p>On Feb 23, 2012, at 3:39 AM, Paul Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; And here is the 10.7 machine as promised:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ProductName:	Mac OS X
</span><br>
<span class="quotelev1">&gt; ProductVersion:	10.7.3
</span><br>
<span class="quotelev1">&gt; BuildVersion:	11D50b
</span><br>
<span class="quotelev1">&gt; lrwxr-xr-x  1 root  wheel  12 Oct 27 14:01 /usr/bin/gcc -&gt; llvm-gcc-4.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 22, 2012 at 7:44 PM, Paul H. Hargrove &lt;PHHargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I can get exact info from my MacOS 10.7 machine later, but its gcc is llvm-gcc-4.2 IIRC.
</span><br>
<span class="quotelev1">&gt; Here are my 10.5 and 10.6:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ProductName:    Mac OS X
</span><br>
<span class="quotelev1">&gt; ProductVersion: 10.5.8
</span><br>
<span class="quotelev1">&gt; BuildVersion:   9L31a
</span><br>
<span class="quotelev1">&gt; powerpc
</span><br>
<span class="quotelev1">&gt; lrwxr-xr-x  1 root  wheel       7 Nov  1  2008 /usr/bin/gcc -&gt; gcc-4.0
</span><br>
<span class="quotelev1">&gt; -r-xr-xr-x  1 root  wheel  258368 Feb 19  2008 /usr/bin/gcc-3.3
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 root  wheel   93088 Jul 17  2008 /usr/bin/gcc-4.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 root  wheel  105680 May 18  2008 /usr/bin/gcc-4.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ProductName:    Mac OS X
</span><br>
<span class="quotelev1">&gt; ProductVersion: 10.5.8
</span><br>
<span class="quotelev1">&gt; BuildVersion:   9L30
</span><br>
<span class="quotelev1">&gt; i386
</span><br>
<span class="quotelev1">&gt; lrwxr-xr-x  1 root  wheel      7 Nov  8  2007 /usr/bin/gcc -&gt; gcc-4.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 root  wheel  93072 Sep 23  2007 /usr/bin/gcc-4.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ProductName:    Mac OS X
</span><br>
<span class="quotelev1">&gt; ProductVersion: 10.6.8
</span><br>
<span class="quotelev1">&gt; BuildVersion:   10K549
</span><br>
<span class="quotelev1">&gt; i386
</span><br>
<span class="quotelev1">&gt; lrwxr-xr-x  1 root  wheel       7 Sep 29  2009 /usr/bin/gcc -&gt; gcc-4.2
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 root  wheel   97392 May 18  2009 /usr/bin/gcc-4.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 root  wheel  166128 May 18  2009 /usr/bin/gcc-4.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/22/2012 6:13 PM, Larry Baker wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Paul,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Haven't you been running Intel compilers on OS X?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, do we have specifics about which gcc's on Mac OS X?  I have (OS X 10.5.8):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; savaii:~ baker$ ls -l /usr/bin/gcc*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxr-xr-x  1 root  wheel       7 Oct  2  2009 /usr/bin/gcc -&gt; gcc-4.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -r-xr-xr-x  1 root  wheel  258368 Feb 19  2008 /usr/bin/gcc-3.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x  1 root  wheel   93088 Feb  5  2009 /usr/bin/gcc-4.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rwxr-xr-x  1 root  wheel  105680 Apr 27  2009 /usr/bin/gcc-4.2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; savaii:~ baker$ ls -l /usr/bin/cc*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxr-xr-x  1 root  wheel  7 Oct  2  2009 /usr/bin/cc -&gt; gcc-4.0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; savaii:~ baker$ ls /Developer/usr/llvm-gcc-4.2/bin/*cc*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Developer/usr/llvm-gcc-4.2/bin/i686-apple-darwin9-llvm-gcc-4.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Developer/usr/llvm-gcc-4.2/bin/llvm-gcc-4.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Developer/usr/llvm-gcc-4.2/bin/powerpc-apple-darwin9-llvm-gcc-4.2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Larry Baker
</span><br>
<span class="quotelev2">&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev2">&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev2">&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 22 Feb 2012, at 5:55 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Folks at Oracle should decide, but I suspect &quot;Solaris 10&quot; should be updated to &quot;Solaris 10 and 11&quot;, or just &quot;11&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2/22/2012 2:44 PM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please verify this list of supported systems for the v1.5.5 release:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - The run-time systems that are currently supported are:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - rsh / ssh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - LoadLeveler
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - PBS Pro, Open PBS, Torque
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - Platform LSF (v7.0.2 and later)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - SLURM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - Cray XT-3, XT-4, and XT-5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - Oracle Grid Engine (OGE) 6.1, 6.2 and open source Grid Engine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - Microsoft Windows CCP (Microsoft Windows server 2003 and 2008)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Systems that have been tested are:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - Linux (various flavors/distros), 32 bit, with gcc, and Oracle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Solaris Studio 12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - Linux (various flavors/distros), 64 bit (x86), with gcc, Absoft,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Intel, Portland, and Oracle Solaris Studio 12 compilers (*)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - OS X (10.5, 10.6, 10.7), 32 and 64 bit (x86_64), with gcc and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Absoft compilers (*)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - Oracle Solaris 10, 32 and 64 bit (SPARC, i386, x86_64), with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Oracle Solaris Studio 12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   (*) Be sure to read the Compiler Notes, below.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Other systems have been lightly (but not fully tested):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - Other 64 bit platforms (e.g., Linux on PPC64)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   - Microsoft Windows CCP (Microsoft Windows server 2003 and 2008);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     see the README.WINDOWS file.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          
</span><br>
<span class="quotelev1">&gt; PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: 
</span><br>
<span class="quotelev1">&gt; +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: 
</span><br>
<span class="quotelev1">&gt; +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10580.php">Jeffrey Squyres: "[OMPI devel] 1.5.5rc2"</a>
<li><strong>Previous message:</strong> <a href="10578.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>In reply to:</strong> <a href="10575.php">Paul Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10586.php">Larry Baker: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Reply:</strong> <a href="10586.php">Larry Baker: "Re: [OMPI devel] 1.5 supported systems"</a>
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
