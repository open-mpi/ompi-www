<?
$subject_val = "Re: [OMPI devel] 1.5 supported systems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 22 21:20:49 2012" -->
<!-- isoreceived="20120223022049" -->
<!-- sent="Wed, 22 Feb 2012 18:13:12 -0800" -->
<!-- isosent="20120223021312" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5 supported systems" -->
<!-- id="B33F6CB0-6604-4463-9F01-273A1A092DF5_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4F459C97.1080801_at_lbl.gov" -->
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
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-22 21:13:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10573.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Previous message:</strong> <a href="10571.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>In reply to:</strong> <a href="10571.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10573.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Reply:</strong> <a href="10573.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Reply:</strong> <a href="10574.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>Haven't you been running Intel compilers on OS X?
<br>
<p>Also, do we have specifics about which gcc's on Mac OS X?  I have (OS  
<br>
X 10.5.8):
<br>
<p><span class="quotelev1">&gt; savaii:~ baker$ ls -l /usr/bin/gcc*
</span><br>
<span class="quotelev1">&gt; lrwxr-xr-x  1 root  wheel       7 Oct  2  2009 /usr/bin/gcc -&gt; gcc-4.0
</span><br>
<span class="quotelev1">&gt; -r-xr-xr-x  1 root  wheel  258368 Feb 19  2008 /usr/bin/gcc-3.3
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 root  wheel   93088 Feb  5  2009 /usr/bin/gcc-4.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 root  wheel  105680 Apr 27  2009 /usr/bin/gcc-4.2
</span><br>
<p><span class="quotelev1">&gt; savaii:~ baker$ ls -l /usr/bin/cc*
</span><br>
<span class="quotelev1">&gt; lrwxr-xr-x  1 root  wheel  7 Oct  2  2009 /usr/bin/cc -&gt; gcc-4.0
</span><br>
<p><span class="quotelev1">&gt; savaii:~ baker$ ls /Developer/usr/llvm-gcc-4.2/bin/*cc*
</span><br>
<span class="quotelev1">&gt; /Developer/usr/llvm-gcc-4.2/bin/i686-apple-darwin9-llvm-gcc-4.2
</span><br>
<span class="quotelev1">&gt; /Developer/usr/llvm-gcc-4.2/bin/llvm-gcc-4.2
</span><br>
<span class="quotelev1">&gt; /Developer/usr/llvm-gcc-4.2/bin/powerpc-apple-darwin9-llvm-gcc-4.2
</span><br>
<p><p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On 22 Feb 2012, at 5:55 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Folks at Oracle should decide, but I suspect &quot;Solaris 10&quot; should be  
</span><br>
<span class="quotelev1">&gt; updated to &quot;Solaris 10 and 11&quot;, or just &quot;11&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/22/2012 2:44 PM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Please verify this list of supported systems for the v1.5.5 release:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - The run-time systems that are currently supported are:
</span><br>
<span class="quotelev2">&gt;&gt;   - rsh / ssh
</span><br>
<span class="quotelev2">&gt;&gt;   - LoadLeveler
</span><br>
<span class="quotelev2">&gt;&gt;   - PBS Pro, Open PBS, Torque
</span><br>
<span class="quotelev2">&gt;&gt;   - Platform LSF (v7.0.2 and later)
</span><br>
<span class="quotelev2">&gt;&gt;   - SLURM
</span><br>
<span class="quotelev2">&gt;&gt;   - Cray XT-3, XT-4, and XT-5
</span><br>
<span class="quotelev2">&gt;&gt;   - Oracle Grid Engine (OGE) 6.1, 6.2 and open source Grid Engine
</span><br>
<span class="quotelev2">&gt;&gt;   - Microsoft Windows CCP (Microsoft Windows server 2003 and 2008)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Systems that have been tested are:
</span><br>
<span class="quotelev2">&gt;&gt;   - Linux (various flavors/distros), 32 bit, with gcc, and Oracle
</span><br>
<span class="quotelev2">&gt;&gt;     Solaris Studio 12
</span><br>
<span class="quotelev2">&gt;&gt;   - Linux (various flavors/distros), 64 bit (x86), with gcc, Absoft,
</span><br>
<span class="quotelev2">&gt;&gt;     Intel, Portland, and Oracle Solaris Studio 12 compilers (*)
</span><br>
<span class="quotelev2">&gt;&gt;   - OS X (10.5, 10.6, 10.7), 32 and 64 bit (x86_64), with gcc and
</span><br>
<span class="quotelev2">&gt;&gt;     Absoft compilers (*)
</span><br>
<span class="quotelev2">&gt;&gt;   - Oracle Solaris 10, 32 and 64 bit (SPARC, i386, x86_64), with
</span><br>
<span class="quotelev2">&gt;&gt;     Oracle Solaris Studio 12
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   (*) Be sure to read the Compiler Notes, below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Other systems have been lightly (but not fully tested):
</span><br>
<span class="quotelev2">&gt;&gt;   - Other 64 bit platforms (e.g., Linux on PPC64)
</span><br>
<span class="quotelev2">&gt;&gt;   - Microsoft Windows CCP (Microsoft Windows server 2003 and 2008);
</span><br>
<span class="quotelev2">&gt;&gt;     see the README.WINDOWS file.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10572/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10573.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Previous message:</strong> <a href="10571.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>In reply to:</strong> <a href="10571.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10573.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Reply:</strong> <a href="10573.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Reply:</strong> <a href="10574.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
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
