<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 15 10:48:26 2012" -->
<!-- isoreceived="20121115154826" -->
<!-- sent="Thu, 15 Nov 2012 15:48:22 +0000" -->
<!-- isosent="20121115154822" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7151AE18D8C_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA14ASLW9=X=2cHs=w39yYOpOBZ+2Nf8ank=9ZUgvhQPW3A_at_mail.gmail.com" -->
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
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-15 10:48:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11787.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Previous message:</strong> <a href="11785.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>In reply to:</strong> <a href="11785.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11787.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Reply:</strong> <a href="11787.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since the version of m4 that comes with Solaris likely works with all our .m4 files and there is no way to check the version (no --version, -v, -V, or anything from what I can tell) I guess we have no choice but to not check the m4 version.
<br>
<p>flex on the other hand we can check. How about this for the new regex (for reference the old one is $version =~ m/\s([\d\w\.]+)$/m; -- matching a version at the end of the line):
<br>
<p>$version =~ m/\s([\d\.]+\w?)/m;
<br>
<p>It works with Apple's flex and still works with glibtoolize, autoconf, and automake.
<br>
<p>&nbsp;&nbsp;&nbsp;Searching for autoconf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found autoconf version 2.69; checking version...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 2 -- need 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 69 -- need 65
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; ACCEPTED
<br>
&nbsp;&nbsp;&nbsp;Searching for libtoolize
<br>
&nbsp;&nbsp;libtoolize not found
<br>
&nbsp;&nbsp;&nbsp;Searching for glibtoolize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found glibtoolize version 2.4.2; checking version...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 2 -- need 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 4 -- need 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; ACCEPTED
<br>
&nbsp;&nbsp;&nbsp;Searching for automake
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found automake version 1.12.2; checking version...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 1 -- need 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 12 -- need 11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; ACCEPTED
<br>
&nbsp;&nbsp;&nbsp;Searching for flex
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found flex version 2.5.35; checking version...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 2 -- need 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 5 -- need 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 35 -- need 35
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; ACCEPTED
<br>
&nbsp;&nbsp;&nbsp;Searching for m4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found m4 version 1.4.6; checking version...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 1 -- need 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 4 -- need 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 6 -- need 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; Too low!  Skipping this version
<br>
&nbsp;&nbsp;&nbsp;Searching for gm4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found gm4 version 1.4.16; checking version...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 1 -- need 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 4 -- need 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 16 -- need 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; ACCEPTED
<br>
<p><p>-Nathan
<br>
<p>________________________________________
<br>
From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on behalf of Paul Hargrove [phhargrove_at_[hidden]]
<br>
Sent: Wednesday, November 14, 2012 7:37 PM
<br>
To: Larry Baker
<br>
Cc: Open MPI Developers
<br>
Subject: Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk
<br>
<p>Larry,
<br>
<p>I just wanted to speak up quickly to be sure nobody used your example to &quot;fix&quot; the Mac OS problem and thereby break Solaris instead.  No personal attack/affront was intended.
<br>
<p>-Paul<a href="https://mymail.lanl.gov/owa/?ae=PreFormAction&amp;t=IPM.Note&amp;a=ReplyAll&amp;id=RgAAAAD3GfjXt9HDTI902%2b63W1IcBwCuRfL1X%2babT5m7NFXoIdcVAAAAxVZxAACuRfL1X%2babT5m7NFXoIdcVAAAa4RQFAAAJ">https://mymail.lanl.gov/owa/?ae=PreFormAction&amp;t=IPM.Note&amp;a=ReplyAll&amp;id=RgAAAAD3GfjXt9HDTI902%2b63W1IcBwCuRfL1X%2babT5m7NFXoIdcVAAAAxVZxAACuRfL1X%2babT5m7NFXoIdcVAAAa4RQFAAAJ</a>#
<br>
<p>On Wed, Nov 14, 2012 at 7:10 PM, Larry Baker &lt;baker_at_[hidden]&lt;mailto:baker_at_[hidden]&gt;&gt; wrote:
<br>
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
650-329-5608&lt;tel:650-329-5608&gt;
<br>
baker_at_[hidden]&lt;mailto:baker_at_[hidden]&gt;
<br>
<p><p><p>On 14 Nov 2012, at 5:41 PM, Paul Hargrove wrote:
<br>
<p>On Wed, Nov 14, 2012 at 6:26 PM, Larry Baker &lt;baker_at_[hidden]&lt;mailto:baker_at_[hidden]&gt;&gt; wrote:
<br>
m4 --version | sed -n -E -e '1s/^.*[^A-Za-z0-9_-]?([0-9]+[.][0-9]+[.][0-9]+)[^A-Za-z0-9_-]?.*$/\1/p'
<br>
<p><p>There are STILL problems with this approach as it is TWICE specific to GNU software:
<br>
<p>1) M4 on OpenBSD (maybe others) doesn't support a &quot;--version&quot; flag:
<br>
$ m4 --version | sed -n -E -e '1s/^.*[^A-Za-z0-9_-]?([0-9]+[.][0-9]+[.][0-9]+)[^A-Za-z0-9_-]?.*$/\1/p'
<br>
m4: unknown option -- -
<br>
usage: m4 [-gPs] [-Dname[=value]] [-d flags] [-I dirname] [-o filename]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[-t macro] [-Uname] [file ...]
<br>
<p>2) sed on Solaris (maybe others) doesn't support a &quot;-E&quot; flag:
<br>
$ m4 --version | sed -n -E -e '1s/^.*[^A-Za-z0-9_-]?([0-9]+[.][0-9]+[.][0-9]+)[^A-Za-z0-9_-]?.*$/\1/p'
<br>
/bin/sed: illegal option -- E
<br>
<p>-Paul
<br>
<p><pre>
--
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352&lt;tel:%2B1-510-495-2352&gt;
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900&lt;tel:%2B1-510-486-6900&gt;
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
--
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11787.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Previous message:</strong> <a href="11785.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>In reply to:</strong> <a href="11785.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11787.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Reply:</strong> <a href="11787.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
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
