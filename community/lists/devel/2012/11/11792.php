<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 15 12:16:32 2012" -->
<!-- isoreceived="20121115171632" -->
<!-- sent="Thu, 15 Nov 2012 17:16:27 +0000" -->
<!-- isosent="20121115171627" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7151AE18E0D_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C1D4F17E-3BF8-4876-9D7C-5D6E0C16DF6C_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-11-15 12:16:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11793.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Previous message:</strong> <a href="11791.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>In reply to:</strong> <a href="11790.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11793.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Reply:</strong> <a href="11793.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Opps. missed that one. I updated the regex to make slightly more restricted to fix this case.
<br>
<p>-Nathan
<br>
________________________________________
<br>
From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Thursday, November 15, 2012 10:01 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk
<br>
<p>Just an FYI: on the Mac ML, I see this:
<br>
<p>&nbsp;&nbsp;&nbsp;Searching for m4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found m4 version 4; checking version...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 4 -- need 1
<br>
<p>$ m4 --version
<br>
m4 (GNU M4) 1.4.16
<br>
<p>Looks like the parser isn't quite picking it up correctly, but it is releasing it because it thinks the 4 is above the required 1
<br>
<p><p>On Nov 15, 2012, at 8:42 AM, &quot;Hjelm, Nathan T&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Committed as r27615. Let me know if there are any more issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, November 15, 2012 8:53 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks fine to me. I would only add one further refinement - I think we should check m4, but add a check in autogen.pl so that if we get nothing useful back from -v (or whatever), then output a warning that we couldn't validate the version and assume it is okay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe the tool will return a non-zero status if the option isn't supported, so we should be able to do this - yes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 15, 2012, at 7:48 AM, &quot;Hjelm, Nathan T&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since the version of m4 that comes with Solaris likely works with all our .m4 files and there is no way to check the version (no --version, -v, -V, or anything from what I can tell) I guess we have no choice but to not check the m4 version.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; flex on the other hand we can check. How about this for the new regex (for reference the old one is $version =~ m/\s([\d\w\.]+)$/m; -- matching a version at the end of the line):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $version =~ m/\s([\d\.]+\w?)/m;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It works with Apple's flex and still works with glibtoolize, autoconf, and automake.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Searching for autoconf
</span><br>
<span class="quotelev2">&gt;&gt;    Found autoconf version 2.69; checking version...
</span><br>
<span class="quotelev2">&gt;&gt;      Found version component 2 -- need 2
</span><br>
<span class="quotelev2">&gt;&gt;      Found version component 69 -- need 65
</span><br>
<span class="quotelev2">&gt;&gt;    ==&gt; ACCEPTED
</span><br>
<span class="quotelev2">&gt;&gt;  Searching for libtoolize
</span><br>
<span class="quotelev2">&gt;&gt; libtoolize not found
</span><br>
<span class="quotelev2">&gt;&gt;  Searching for glibtoolize
</span><br>
<span class="quotelev2">&gt;&gt;    Found glibtoolize version 2.4.2; checking version...
</span><br>
<span class="quotelev2">&gt;&gt;      Found version component 2 -- need 2
</span><br>
<span class="quotelev2">&gt;&gt;      Found version component 4 -- need 2
</span><br>
<span class="quotelev2">&gt;&gt;    ==&gt; ACCEPTED
</span><br>
<span class="quotelev2">&gt;&gt;  Searching for automake
</span><br>
<span class="quotelev2">&gt;&gt;    Found automake version 1.12.2; checking version...
</span><br>
<span class="quotelev2">&gt;&gt;      Found version component 1 -- need 1
</span><br>
<span class="quotelev2">&gt;&gt;      Found version component 12 -- need 11
</span><br>
<span class="quotelev2">&gt;&gt;    ==&gt; ACCEPTED
</span><br>
<span class="quotelev2">&gt;&gt;  Searching for flex
</span><br>
<span class="quotelev2">&gt;&gt;    Found flex version 2.5.35; checking version...
</span><br>
<span class="quotelev2">&gt;&gt;      Found version component 2 -- need 2
</span><br>
<span class="quotelev2">&gt;&gt;      Found version component 5 -- need 5
</span><br>
<span class="quotelev2">&gt;&gt;      Found version component 35 -- need 35
</span><br>
<span class="quotelev2">&gt;&gt;    ==&gt; ACCEPTED
</span><br>
<span class="quotelev2">&gt;&gt;  Searching for m4
</span><br>
<span class="quotelev2">&gt;&gt;    Found m4 version 1.4.6; checking version...
</span><br>
<span class="quotelev2">&gt;&gt;      Found version component 1 -- need 1
</span><br>
<span class="quotelev2">&gt;&gt;      Found version component 4 -- need 4
</span><br>
<span class="quotelev2">&gt;&gt;      Found version component 6 -- need 16
</span><br>
<span class="quotelev2">&gt;&gt;    ==&gt; Too low!  Skipping this version
</span><br>
<span class="quotelev2">&gt;&gt;  Searching for gm4
</span><br>
<span class="quotelev2">&gt;&gt;    Found gm4 version 1.4.16; checking version...
</span><br>
<span class="quotelev2">&gt;&gt;      Found version component 1 -- need 1
</span><br>
<span class="quotelev2">&gt;&gt;      Found version component 4 -- need 4
</span><br>
<span class="quotelev2">&gt;&gt;      Found version component 16 -- need 16
</span><br>
<span class="quotelev2">&gt;&gt;    ==&gt; ACCEPTED
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on behalf of Paul Hargrove [phhargrove_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, November 14, 2012 7:37 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Larry Baker
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Larry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just wanted to speak up quickly to be sure nobody used your example to &quot;fix&quot; the Mac OS problem and thereby break Solaris instead.  No personal attack/affront was intended.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul<a href="https://mymail.lanl.gov/owa/?ae=PreFormAction&amp;t=IPM.Note&amp;a=ReplyAll&amp;id=RgAAAAD3GfjXt9HDTI902%2b63W1IcBwCuRfL1X%2babT5m7NFXoIdcVAAAAxVZxAACuRfL1X%2babT5m7NFXoIdcVAAAa4RQFAAAJ">https://mymail.lanl.gov/owa/?ae=PreFormAction&amp;t=IPM.Note&amp;a=ReplyAll&amp;id=RgAAAAD3GfjXt9HDTI902%2b63W1IcBwCuRfL1X%2babT5m7NFXoIdcVAAAAxVZxAACuRfL1X%2babT5m7NFXoIdcVAAAa4RQFAAAJ</a>#
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Nov 14, 2012 at 7:10 PM, Larry Baker &lt;baker_at_[hidden]&lt;mailto:baker_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Paul,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) I wasn't trying to solve the --version issue, only the parsing of the response.
</span><br>
<span class="quotelev2">&gt;&gt; 2) I assumed from the initial e-mail that the broken parser was in a Perl script.  I'm not a Perl person, so I wrote the example regular expression parser in sed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These commands were done on my Mac OS X 10.6 system.  I have no idea where the apps came from.  I know the sed, at least, does not recognize regular expressions documented for GNU sed (such as \&lt; \&gt; for begin/end word).  Maybe it is a BSD sed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was just trying to illustrate how to fix the broken parsing of Ralph's &quot;flex --version&quot;.  Assuming the RE parser I wrote is satisfactory, it would have to be adapted to fit in the framework, i.e., it has to be portable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Larry Baker
</span><br>
<span class="quotelev2">&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev2">&gt;&gt; 650-329-5608&lt;tel:650-329-5608&gt;
</span><br>
<span class="quotelev2">&gt;&gt; baker_at_[hidden]&lt;mailto:baker_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 14 Nov 2012, at 5:41 PM, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Nov 14, 2012 at 6:26 PM, Larry Baker &lt;baker_at_[hidden]&lt;mailto:baker_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; m4 --version | sed -n -E -e '1s/^.*[^A-Za-z0-9_-]?([0-9]+[.][0-9]+[.][0-9]+)[^A-Za-z0-9_-]?.*$/\1/p'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are STILL problems with this approach as it is TWICE specific to GNU software:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) M4 on OpenBSD (maybe others) doesn't support a &quot;--version&quot; flag:
</span><br>
<span class="quotelev2">&gt;&gt; $ m4 --version | sed -n -E -e '1s/^.*[^A-Za-z0-9_-]?([0-9]+[.][0-9]+[.][0-9]+)[^A-Za-z0-9_-]?.*$/\1/p'
</span><br>
<span class="quotelev2">&gt;&gt; m4: unknown option -- -
</span><br>
<span class="quotelev2">&gt;&gt; usage: m4 [-gPs] [-Dname[=value]] [-d flags] [-I dirname] [-o filename]
</span><br>
<span class="quotelev2">&gt;&gt;       [-t macro] [-Uname] [file ...]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) sed on Solaris (maybe others) doesn't support a &quot;-E&quot; flag:
</span><br>
<span class="quotelev2">&gt;&gt; $ m4 --version | sed -n -E -e '1s/^.*[^A-Za-z0-9_-]?([0-9]+[.][0-9]+[.][0-9]+)[^A-Za-z0-9_-]?.*$/\1/p'
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sed: illegal option -- E
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352&lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900&lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11793.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Previous message:</strong> <a href="11791.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>In reply to:</strong> <a href="11790.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11793.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Reply:</strong> <a href="11793.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
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
