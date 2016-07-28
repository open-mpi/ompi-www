<?
$subject_val = "Re: [OMPI devel] testing if Fortran compiler likes the C++ exception flags";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 21 08:05:54 2012" -->
<!-- isoreceived="20120421120554" -->
<!-- sent="Sat, 21 Apr 2012 08:05:49 -0400" -->
<!-- isosent="20120421120549" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] testing if Fortran compiler likes the C++ exception flags" -->
<!-- id="47FFC44B-E73B-4609-8814-1255AEAF8607_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F9214ED.1070801_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] testing if Fortran compiler likes the C++ exception flags<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-21 08:05:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10898.php">Jeffrey Squyres: "[OMPI devel] RFC: removing maffinity, paffinity, carto frameworks"</a>
<li><strong>Previous message:</strong> <a href="10896.php">Eugene Loh: "[OMPI devel] testing if Fortran compiler likes the C++ exception flags"</a>
<li><strong>In reply to:</strong> <a href="10896.php">Eugene Loh: "[OMPI devel] testing if Fortran compiler likes the C++ exception flags"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops!  Sorry about that -- fixed in r26309.
<br>
<p>On Apr 20, 2012, at 10:01 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I think this is related to the &quot;Fortran merge.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Last night, Oracle MTT tests couldn't build the trunk (r26307) with Intel compilers.  Specifically, configure fails with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    checking to see if Fortran compiler likes the C++ exception flags... no
</span><br>
<span class="quotelev1">&gt;    configure: WARNING: C++ exception flags are different between the C and Fortran compilers; this
</span><br>
<span class="quotelev1">&gt;    configure script cannot currently handle this scenario.  Either disable C++ exception support or send mail to the Open MPI users list.
</span><br>
<span class="quotelev1">&gt;    configure: error: *** Cannot continue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking in the config.log file, I see this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    configure:30518: checking to see if Fortran compiler likes the C++ exception flags
</span><br>
<span class="quotelev1">&gt;    configure:30538: icc -c -O3 -DNDEBUG -Wall -static-intel -m32 -finline-functions -fno-strict-aliasing -restrict -fexceptions  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt;    conftest.c(223): error: identifier &quot;INTEGER&quot; is undefined
</span><br>
<span class="quotelev1">&gt;     INTEGER I
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like the test is failing because configure is trying to compile Fortran source code in a *.c file with the C compiler.
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
<li><strong>Next message:</strong> <a href="10898.php">Jeffrey Squyres: "[OMPI devel] RFC: removing maffinity, paffinity, carto frameworks"</a>
<li><strong>Previous message:</strong> <a href="10896.php">Eugene Loh: "[OMPI devel] testing if Fortran compiler likes the C++ exception flags"</a>
<li><strong>In reply to:</strong> <a href="10896.php">Eugene Loh: "[OMPI devel] testing if Fortran compiler likes the C++ exception flags"</a>
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
