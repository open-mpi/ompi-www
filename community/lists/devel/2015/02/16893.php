<?
$subject_val = "Re: [OMPI devel] RFC: Remove embedded libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 20:48:00 2015" -->
<!-- isoreceived="20150203014800" -->
<!-- sent="Mon, 2 Feb 2015 17:47:58 -0800" -->
<!-- isosent="20150203014758" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove embedded libltdl" -->
<!-- id="CAAvDA17T13u4zFtYfFKjAUynPnT8bya4t-0y=ZpN87o1_Pu5Uw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA15zSBDzg+9Dqu0QcBcGSJHN3z7mHPtC=zoPvjHVo9Q3Pw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove embedded libltdl<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 20:47:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16894.php">Paul Hargrove: "[OMPI devel] Build failure on OpenBSD (deja vu)"</a>
<li><strong>Previous message:</strong> <a href="16892.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16888.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16907.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16907.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Feb 2, 2015 at 4:13 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; HOWEVER - switching from PGI to GNU compilers made the problem go away.
</span><br>
<span class="quotelev1">&gt; So, I suspect it may be an issue with the installation/configuration of
</span><br>
<span class="quotelev1">&gt; the PGI compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I've reproduced the problem on a non-Cray system with four different
<br>
installations of the PGI compilers.
<br>
The system has PGI 10.x and 11.x installed by the sys admins.
<br>
It also has my private installs of 9.x and 12.x, which I know were
<br>
installed with just the defaults.
<br>
<p>I'll report my test results more completely later, but all 4 PGI-based
<br>
builds I have results for so far have failed with libtool replacing
<br>
&quot;-lltdl&quot; in  link command line with &quot;/usr/lib/libltdl.so&quot; rather than the
<br>
correct &quot;/usr/lib64/libltdl.so&quot;.
<br>
<p>So, this is a PGI compiler issue not a Cray one.
<br>
Will know later is &quot;PGI&quot; needs to be replaced with &quot;non-GNU&quot;
<br>
<p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16893/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16894.php">Paul Hargrove: "[OMPI devel] Build failure on OpenBSD (deja vu)"</a>
<li><strong>Previous message:</strong> <a href="16892.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16888.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16907.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16907.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
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
