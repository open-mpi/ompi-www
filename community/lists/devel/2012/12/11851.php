<?
$subject_val = "Re: [OMPI devel] opempi with gcc4.8 on Mac OSX10.7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 21:51:46 2012" -->
<!-- isoreceived="20121215025146" -->
<!-- sent="Fri, 14 Dec 2012 18:51:12 -0800" -->
<!-- isosent="20121215025112" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opempi with gcc4.8 on Mac OSX10.7" -->
<!-- id="CAAvDA159b5x+5dEQwvOCXzDBTRD9iEf+2C7rjdSr5Y-tjQ+9gw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A4E5F9B6-FC09-481D-82CC-60831FFE43C3_at_caltech.edu" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-14 21:51:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11852.php">surendra_at_[hidden]: "Re: [OMPI devel] opempi with gcc4.8 on Mac OSX10.7"</a>
<li><strong>Previous message:</strong> <a href="11850.php">surendra_at_[hidden]: "[OMPI devel] opempi with gcc4.8 on Mac OSX10.7"</a>
<li><strong>In reply to:</strong> <a href="11850.php">surendra_at_[hidden]: "[OMPI devel] opempi with gcc4.8 on Mac OSX10.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11852.php">surendra_at_[hidden]: "Re: [OMPI devel] opempi with gcc4.8 on Mac OSX10.7"</a>
<li><strong>Reply:</strong> <a href="11852.php">surendra_at_[hidden]: "Re: [OMPI devel] opempi with gcc4.8 on Mac OSX10.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Surendra,
<br>
<p>There is no &quot;release&quot; of gcc-4.8 yet, and my experience (not Open MPI
<br>
related) with recent snapshots has encountered many bugs still to be fixed
<br>
before any release.  Even if you could build Open MPI with gcc-4.8, I would
<br>
not (at this time) trust it with any &quot;production&quot; jobs.
<br>
<p>Looking at the config.log you attached, it looks like your installation of
<br>
gcc is unable to run the &quot;as&quot; assembler, which probably means you don't
<br>
have Apple Xcode installed (which is the preferred source of the assembler
<br>
and linker on Mac OSX).  So, I doubt that you can even build a &quot;Hello,
<br>
World!&quot; C program with your gcc installation - have you tried?
<br>
<p>-Paul
<br>
<p><p>On Fri, Dec 14, 2012 at 6:45 PM, &lt;surendra_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11851/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11852.php">surendra_at_[hidden]: "Re: [OMPI devel] opempi with gcc4.8 on Mac OSX10.7"</a>
<li><strong>Previous message:</strong> <a href="11850.php">surendra_at_[hidden]: "[OMPI devel] opempi with gcc4.8 on Mac OSX10.7"</a>
<li><strong>In reply to:</strong> <a href="11850.php">surendra_at_[hidden]: "[OMPI devel] opempi with gcc4.8 on Mac OSX10.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11852.php">surendra_at_[hidden]: "Re: [OMPI devel] opempi with gcc4.8 on Mac OSX10.7"</a>
<li><strong>Reply:</strong> <a href="11852.php">surendra_at_[hidden]: "Re: [OMPI devel] opempi with gcc4.8 on Mac OSX10.7"</a>
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
