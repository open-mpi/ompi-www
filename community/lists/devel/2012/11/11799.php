<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 15 19:49:48 2012" -->
<!-- isoreceived="20121116004948" -->
<!-- sent="Thu, 15 Nov 2012 16:49:42 -0800" -->
<!-- isosent="20121116004942" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk" -->
<!-- id="580BD6C1-0D15-4D45-B01F-9333DBF6458A_at_usgs.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7151AE18DE4_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Date:</strong> 2012-11-15 19:49:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11800.php">Sandra Guija: "[OMPI devel] MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="11798.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>In reply to:</strong> <a href="11788.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11779.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>I'm no Perl programmer AT ALL, so take this for what it it worth ($0).
<br>
<p>This RE correctly parses a version no. either at the beginning of the string or preceded by a white-space character.
<br>
<p><span class="quotelev1">&gt; $ echo &quot;10.4.2&quot; | perl -E 'while (&lt;STDIN&gt;) { if ( m/(^|\s)((\d+\.)+\d+)/ ) { $version = $2 ; print $version, &quot;\n&quot; ; last } }'
</span><br>
<span class="quotelev1">&gt; 10.4.2
</span><br>
<p><p>I modified the RE from the last one I saw you post ($version =~ m/\s([\d\.]+\w?)/m;) to allow for multiple digit fields, to remove the &quot;m&quot; modifier ($ is gone now), and to only allow digits in the last field of the version number.
<br>
<p>I don't know all the contortions of version strings you are trying to match, i.e., why you allowed any alphanumeric (including _) for the last field.  This one will match all digits with an optional single letter suffix at the end (i.e., must be at a word boundary).
<br>
<p><span class="quotelev1">&gt; $ echo &quot;10.4.2A&quot; | perl -E 'while (&lt;STDIN&gt;) { if ( m/(^|\s)((\d+\.)+\d+([a-zA-Z]\b)?)/ ) { $version = $2 ; print $version, &quot;\n&quot; ; last } }'
</span><br>
<span class="quotelev1">&gt; 10.4.2A
</span><br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p><p><p>On 15 Nov 2012, at 8:42 AM, Hjelm, Nathan T wrote:
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11799/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11800.php">Sandra Guija: "[OMPI devel] MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="11798.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>In reply to:</strong> <a href="11788.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11779.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
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
