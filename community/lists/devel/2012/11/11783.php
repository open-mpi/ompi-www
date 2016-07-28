<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 14 21:10:21 2012" -->
<!-- isoreceived="20121115021021" -->
<!-- sent="Wed, 14 Nov 2012 18:10:15 -0800" -->
<!-- isosent="20121115021015" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk" -->
<!-- id="2482230E-0D7F-4D92-B44F-BE8F3F5980AC_at_usgs.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA16OjnahNKUkwfGTstq7CMS6DRROyTobwUSfBBFuWeShGQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-14 21:10:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11784.php">Larry Baker: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Previous message:</strong> <a href="11782.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>In reply to:</strong> <a href="11780.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11785.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Reply:</strong> <a href="11785.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>1) I wasn't trying to solve the --version issue, only the parsing of the response.
<br>
2) I assumed from the initial e-mail that the broken parser was in a Perl script.  I'm not a Perl person, so I wrote the example regular expression parser in sed.
<br>
<p>These commands were done on my Mac OS X 10.6 system.  I have no idea where the apps came from.  I know the sed, at least, does not recognize regular expressions documented for GNU sed (such as \&lt; \&gt; for begin/end word).  Maybe it is a BSD sed?
<br>
<p>I was just trying to illustrate how to fix the broken parsing of Ralph's &quot;flex --version&quot;.  Assuming the RE parser I wrote is satisfactory, it would have to be adapted to fit in the framework, i.e., it has to be portable.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p><p><p>On 14 Nov 2012, at 5:41 PM, Paul Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Nov 14, 2012 at 6:26 PM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; m4 --version | sed -n -E -e '1s/^.*[^A-Za-z0-9_-]?([0-9]+[.][0-9]+[.][0-9]+)[^A-Za-z0-9_-]?.*$/\1/p'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; There are STILL problems with this approach as it is TWICE specific to GNU software:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) M4 on OpenBSD (maybe others) doesn't support a &quot;--version&quot; flag:
</span><br>
<span class="quotelev1">&gt; $ m4 --version | sed -n -E -e '1s/^.*[^A-Za-z0-9_-]?([0-9]+[.][0-9]+[.][0-9]+)[^A-Za-z0-9_-]?.*$/\1/p'
</span><br>
<span class="quotelev1">&gt; m4: unknown option -- -
</span><br>
<span class="quotelev1">&gt; usage: m4 [-gPs] [-Dname[=value]] [-d flags] [-I dirname] [-o filename]
</span><br>
<span class="quotelev1">&gt;         [-t macro] [-Uname] [file ...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) sed on Solaris (maybe others) doesn't support a &quot;-E&quot; flag:
</span><br>
<span class="quotelev1">&gt; $ m4 --version | sed -n -E -e '1s/^.*[^A-Za-z0-9_-]?([0-9]+[.][0-9]+[.][0-9]+)[^A-Za-z0-9_-]?.*$/\1/p'
</span><br>
<span class="quotelev1">&gt; /bin/sed: illegal option -- E
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11783/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11784.php">Larry Baker: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Previous message:</strong> <a href="11782.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>In reply to:</strong> <a href="11780.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11785.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Reply:</strong> <a href="11785.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
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
