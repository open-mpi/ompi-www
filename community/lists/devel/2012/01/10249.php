<?
$subject_val = "Re: [OMPI devel] 1.4.5rc2 test results";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 24 13:22:28 2012" -->
<!-- isoreceived="20120124182228" -->
<!-- sent="Tue, 24 Jan 2012 10:22:22 -0800" -->
<!-- isosent="20120124182222" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc2 test results" -->
<!-- id="CAAvDA16hSJqho-OzJr5BZd-9Om8-qe6moR=_PK-ktWaiU8H24g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C5B772AD-405E-4264-99CA-729DBCEC102B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc2 test results<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-24 13:22:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10250.php">Y.MATSUMOTO: "[OMPI devel] [PATCH] MPI_FILE_SEEK_SHARED is wrong in Fortran"</a>
<li><strong>Previous message:</strong> <a href="10248.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>In reply to:</strong> <a href="10248.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10231.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did warn Jeff off-list at one point that I was planning/plotting to
<br>
automate my testing of RCs.  Now you've seen the result of that.
<br>
<p>Terry has been in contact on the Solaris issue.
<br>
<p>On the GNU-vs-Berkeley make issue (bug #2954): the patch Jeff green lighted
<br>
has only been tested on FreeBSD and hypothesized (in the mailing list
<br>
thread) to work correctly with GNU Make. It would be good if others can
<br>
test it too.
<br>
As for a corresponding patch for 1.4: the only difference is OPAL_ vs OMPI_
<br>
prefixes for configure variables in the relevant portion of
<br>
opal/asm/Makefile.am.  With that in mind it should be simple to
<br>
&quot;s/OPAL_/OMPI_/g&quot; the existing patch to get it to apply to 1.4.x.
<br>
<p>Keep in mind that I can provide system access to a developer or two if
<br>
needed to help resolve any of these issues.
<br>
Unfortunately, the OS X 1.3/ppc is one of the few I test on that I don't
<br>
have the ability to grant accounts.
<br>
<p>I never looked into the OpenBSD/ROMIO problems beyond what appears in the
<br>
mailing list archive.
<br>
<p>-Paul
<br>
<p><p>On Tue, Jan 24, 2012 at 7:39 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Paul -- *Many* thanks for all of this; sorry for the slow followup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've green lighted the 1.5 patch for netbsd (I think we need a
</span><br>
<span class="quotelev1">&gt; corresponding fix posted for v1.4), and asked Terry to act on your Solaris
</span><br>
<span class="quotelev1">&gt; comments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We'll talk today on the call about what to do with OS X 10.3/ppc and
</span><br>
<span class="quotelev1">&gt; opensbd ROMIO issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10249/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10250.php">Y.MATSUMOTO: "[OMPI devel] [PATCH] MPI_FILE_SEEK_SHARED is wrong in Fortran"</a>
<li><strong>Previous message:</strong> <a href="10248.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>In reply to:</strong> <a href="10248.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10231.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
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
