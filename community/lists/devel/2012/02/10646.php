<?
$subject_val = "Re: [OMPI devel] 1.5 supported systems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 15:02:06 2012" -->
<!-- isoreceived="20120229200206" -->
<!-- sent="Wed, 29 Feb 2012 12:02:01 -0800" -->
<!-- isosent="20120229200201" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5 supported systems" -->
<!-- id="CC159578-3908-4E9C-A2BC-C584868BE534_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAAvDA147cMzN2PV9EzFvN3QxwnGjYNwK_H7LnuwOHFEX20LCwA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-02-29 15:02:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10647.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Previous message:</strong> <a href="10645.php">Paul Hargrove: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>In reply to:</strong> <a href="10640.php">Paul Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10647.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Reply:</strong> <a href="10647.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>Thanks.  As it happened, I just had someone come to me yesterday  
<br>
looking for help compiling OpenMPI on a Mac using the Intel  
<br>
compilers.  I compiled and validated the 1.5.3 distribution on my Mac  
<br>
(10.5.8) using Intel V11.1 (not the latest).  He has the V11.1  
<br>
compilers on his Mac, which is running 10.6.  I'll be sure to report  
<br>
any problems we run into.
<br>
<p>I do not have time to systematically go through my 1.4.3 patches  
<br>
against the 1.5.5 code, but I did just look at configure in the  
<br>
nightly 1.5.5rc3 candidate.  I don't remember which platform/compiler  
<br>
caused me to fix this, but I still see a logic problem in enabling  
<br>
support for Fortran&lt;-&gt;C data marshaling.  (It was probably a make  
<br>
check failure.)  In configure, I added extra checks to make sure that  
<br>
the data formats are the same between the Fortran and C compilers.   
<br>
The 1.5.5 configure still has the incomplete tests.
<br>
<p>This is the snippet of my patch to the 1.4.3 configure with the added  
<br>
logic (the line numbers will be wrong, but you get the idea):
<br>
<p><span class="quotelev1">&gt; @@ -47269,7 +47277,7 @@
</span><br>
<span class="quotelev1">&gt;      # there are some places in the code where we have to have  
</span><br>
<span class="quotelev1">&gt; *something*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  cat &gt;&gt;confdefs.h &lt;&lt;_ACEOF
</span><br>
<span class="quotelev1">&gt; -#define OMPI_HAVE_FORTRAN_REAL16 $ofc_have_type
</span><br>
<span class="quotelev1">&gt; +#define OMPI_HAVE_FORTRAN_REAL16 ( $ofc_have_type &amp;&amp;  
</span><br>
<span class="quotelev1">&gt; OMPI_REAL16_MATCHES_C )
</span><br>
<span class="quotelev1">&gt;  _ACEOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -50744,7 +50752,7 @@
</span><br>
<span class="quotelev1">&gt;      # there are some places in the code where we have to have  
</span><br>
<span class="quotelev1">&gt; *something*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  cat &gt;&gt;confdefs.h &lt;&lt;_ACEOF
</span><br>
<span class="quotelev1">&gt; -#define OMPI_HAVE_FORTRAN_COMPLEX32 $ofc_have_type
</span><br>
<span class="quotelev1">&gt; +#define OMPI_HAVE_FORTRAN_COMPLEX32 ( $ofc_have_type &amp;&amp;  
</span><br>
<span class="quotelev1">&gt; OMPI_REAL16_MATCHES_C )
</span><br>
<span class="quotelev1">&gt;  _ACEOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -58335,7 +58343,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  cat &gt;&gt;confdefs.h &lt;&lt;_ACEOF
</span><br>
<span class="quotelev1">&gt; -#define OMPI_HAVE_F90_REAL16 $ofc_have_type
</span><br>
<span class="quotelev1">&gt; +#define OMPI_HAVE_F90_REAL16 ( $ofc_have_type &amp;&amp;  
</span><br>
<span class="quotelev1">&gt; OMPI_REAL16_MATCHES_C )
</span><br>
<span class="quotelev1">&gt;  _ACEOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -60152,7 +60160,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  cat &gt;&gt;confdefs.h &lt;&lt;_ACEOF
</span><br>
<span class="quotelev1">&gt; -#define OMPI_HAVE_F90_COMPLEX32 $ofc_have_type
</span><br>
<span class="quotelev1">&gt; +#define OMPI_HAVE_F90_COMPLEX32 ( $ofc_have_type &amp;&amp;  
</span><br>
<span class="quotelev1">&gt; OMPI_REAL16_MATCHES_C )
</span><br>
<span class="quotelev1">&gt;  _ACEOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On 28 Feb 2012, at 10:05 PM, Paul Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I went ahead and tried Intel's latest compilers for MacOS 10.6.
</span><br>
<span class="quotelev1">&gt; They don't yet support MacOS 10.7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All looks good w/ these compilers and the 1.5.5rc3 tarball.
</span><br>
<span class="quotelev1">&gt; I think this testing is too preliminary to consider this a  
</span><br>
<span class="quotelev1">&gt; &quot;supported&quot; compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 22, 2012 at 6:57 PM, Paul H. Hargrove  
</span><br>
<span class="quotelev1">&gt; &lt;PHHargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I have NOT been running Intel's compilers on Macs, only on Linux.
</span><br>
<span class="quotelev1">&gt; I *tried* PGI's compilers on MacOS, but that was a flop.
</span><br>
<span class="quotelev1">&gt; I have used Clang (comes w/ XCode 4.2) on MacOS, and that works for  
</span><br>
<span class="quotelev1">&gt; me but is not extensively tested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/22/2012 6:13 PM, Larry Baker wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Haven't you been running Intel compilers on OS X?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, do we have specifics about which gcc's on Mac OS X?  I have  
</span><br>
<span class="quotelev2">&gt;&gt; (OS X 10.5.8):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; savaii:~ baker$ ls -l /usr/bin/gcc*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxr-xr-x  1 root  wheel       7 Oct  2  2009 /usr/bin/gcc -&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc-4.0
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
<span class="quotelev3">&gt;&gt;&gt; Folks at Oracle should decide, but I suspect &quot;Solaris 10&quot; should  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be updated to &quot;Solaris 10 and 11&quot;, or just &quot;11&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2/22/2012 2:44 PM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please verify this list of supported systems for the v1.5.5  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; release:
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
<span class="quotelev4">&gt;&gt;&gt;&gt;   - Linux (various flavors/distros), 64 bit (x86), with gcc,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Absoft,
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
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10646/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10647.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Previous message:</strong> <a href="10645.php">Paul Hargrove: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>In reply to:</strong> <a href="10640.php">Paul Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10647.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Reply:</strong> <a href="10647.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
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
