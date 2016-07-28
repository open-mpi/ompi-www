<?
$subject_val = "Re: [OMPI devel] opempi with gcc4.8 on Mac OSX10.7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 22:44:21 2012" -->
<!-- isoreceived="20121215034421" -->
<!-- sent="Fri, 14 Dec 2012 19:50:28 -0800" -->
<!-- isosent="20121215035028" -->
<!-- name="surendra_at_[hidden]" -->
<!-- email="surendra_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opempi with gcc4.8 on Mac OSX10.7" -->
<!-- id="B8CEB429-F1BE-435C-8F7A-FFEB5CC54796_at_caltech.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA159b5x+5dEQwvOCXzDBTRD9iEf+2C7rjdSr5Y-tjQ+9gw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opempi with gcc4.8 on Mac OSX10.7<br>
<strong>From:</strong> <a href="mailto:surendra_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20opempi%20with%20gcc4.8%20on%20Mac%20OSX10.7"><em>surendra_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-12-14 22:50:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11853.php">Sylwester Arabas: "Re: [OMPI devel] FOSS for scientists devroom at FOSDEM 2013"</a>
<li><strong>Previous message:</strong> <a href="11851.php">Paul Hargrove: "Re: [OMPI devel] opempi with gcc4.8 on Mac OSX10.7"</a>
<li><strong>In reply to:</strong> <a href="11851.php">Paul Hargrove: "Re: [OMPI devel] opempi with gcc4.8 on Mac OSX10.7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul.  I asked Xcode to install command line tools which gave a different version of gcc that had no problems install openmpi1.6.3
<br>
<p>Surendra
<br>
<p>On Dec 14, 2012, at 6:51 PM, Paul Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Surendra,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is no &quot;release&quot; of gcc-4.8 yet, and my experience (not Open MPI related) with recent snapshots has encountered many bugs still to be fixed before any release.  Even if you could build Open MPI with gcc-4.8, I would not (at this time) trust it with any &quot;production&quot; jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at the config.log you attached, it looks like your installation of gcc is unable to run the &quot;as&quot; assembler, which probably means you don't have Apple Xcode installed (which is the preferred source of the assembler and linker on Mac OSX).  So, I doubt that you can even build a &quot;Hello, World!&quot; C program with your gcc installation - have you tried?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 14, 2012 at 6:45 PM, &lt;surendra_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has openmpi1.6.3 been tested with gcc4.8?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached is my config.log
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; Surendra
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
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11852/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11853.php">Sylwester Arabas: "Re: [OMPI devel] FOSS for scientists devroom at FOSDEM 2013"</a>
<li><strong>Previous message:</strong> <a href="11851.php">Paul Hargrove: "Re: [OMPI devel] opempi with gcc4.8 on Mac OSX10.7"</a>
<li><strong>In reply to:</strong> <a href="11851.php">Paul Hargrove: "Re: [OMPI devel] opempi with gcc4.8 on Mac OSX10.7"</a>
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
