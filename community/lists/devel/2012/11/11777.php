<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 14 18:26:39 2012" -->
<!-- isoreceived="20121114232639" -->
<!-- sent="Wed, 14 Nov 2012 15:26:32 -0800" -->
<!-- isosent="20121114232632" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk" -->
<!-- id="66243916-B0B3-4F42-A103-9605B713859D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20121113072810.CFEFF160285_at_tiger.crest.iu.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-14 18:26:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11778.php">Larry Baker: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Previous message:</strong> <a href="11776.php">Jeff Squyres: "[OMPI devel] topics for Dec. developer's meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11778.php">Larry Baker: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Reply:</strong> <a href="11778.php">Larry Baker: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Reply:</strong> <a href="11779.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry Nathan - I had to revert this out as it broke builds on Mac ML. The problem is that the find_and_check parser looks for parens to find the version number, expecting something like this:
<br>
<p>$ m4 --version
<br>
m4 (GNU M4) 1.4.16
<br>
<p>or this:
<br>
<p>$ gcc --version
<br>
i686-apple-darwin11-llvm-gcc-4.2 (GCC) 4.2.1
<br>
<p>However, on Mac ML, you get this for flex:
<br>
<p>$ flex --version
<br>
flex 2.5.35 Apple(flex-31)
<br>
<p>And so the parser incorrectly rejects the flex version. We'll have to come up with a more robust way of getting version numbers so we can do this test.
<br>
<p><p><p>On Nov 12, 2012, at 11:28 PM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: hjelmn (Nathan Hjelm)
</span><br>
<span class="quotelev1">&gt; Date: 2012-11-13 02:28:10 EST (Tue, 13 Nov 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 27601
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/27601">https://svn.open-mpi.org/trac/ompi/changeset/27601</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; enforce minimum flex version in autogen.pl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;  trunk/autogen.pl |     4 ++++                                    
</span><br>
<span class="quotelev1">&gt;  1 files changed, 4 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/autogen.pl
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/autogen.pl	Tue Nov 13 02:21:10 2012	(r27600)
</span><br>
<span class="quotelev1">&gt; +++ trunk/autogen.pl	2012-11-13 02:28:10 EST (Tue, 13 Nov 2012)	(r27601)
</span><br>
<span class="quotelev1">&gt; @@ -56,11 +56,13 @@
</span><br>
<span class="quotelev1">&gt; my $ompi_automake_version = &quot;1.11.1&quot;;
</span><br>
<span class="quotelev1">&gt; my $ompi_autoconf_version = &quot;2.65&quot;;
</span><br>
<span class="quotelev1">&gt; my $ompi_libtool_version = &quot;2.2.6b&quot;;
</span><br>
<span class="quotelev1">&gt; +my $ompi_flex_version = &quot;2.5.35&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Search paths
</span><br>
<span class="quotelev1">&gt; my $ompi_autoconf_search = &quot;autoconf&quot;;
</span><br>
<span class="quotelev1">&gt; my $ompi_automake_search = &quot;automake&quot;;
</span><br>
<span class="quotelev1">&gt; my $ompi_libtoolize_search = &quot;libtoolize;glibtoolize&quot;;
</span><br>
<span class="quotelev1">&gt; +my $ompi_flex_search = &quot;flex&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # One-time setup
</span><br>
<span class="quotelev1">&gt; my $username;
</span><br>
<span class="quotelev1">&gt; @@ -797,6 +799,7 @@
</span><br>
<span class="quotelev1">&gt;    GNU Autoconf: $ompi_autoconf_version
</span><br>
<span class="quotelev1">&gt;    GNU Automake: $ompi_automake_version
</span><br>
<span class="quotelev1">&gt;    GNU Libtool: $ompi_libtool_version
</span><br>
<span class="quotelev1">&gt; +    Flex: $ompi_flex_version
</span><br>
<span class="quotelev1">&gt; =================================================================\n&quot;;
</span><br>
<span class="quotelev1">&gt;    my_exit(1);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; @@ -1015,6 +1018,7 @@
</span><br>
<span class="quotelev1">&gt; &amp;find_and_check(&quot;autoconf&quot;, $ompi_autoconf_search, $ompi_autoconf_version);
</span><br>
<span class="quotelev1">&gt; &amp;find_and_check(&quot;libtool&quot;, $ompi_libtoolize_search, $ompi_libtool_version);
</span><br>
<span class="quotelev1">&gt; &amp;find_and_check(&quot;automake&quot;, $ompi_automake_search, $ompi_automake_version);
</span><br>
<span class="quotelev1">&gt; +&amp;find_and_check(&quot;flex&quot;, $ompi_flex_search, $ompi_flex_version);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11778.php">Larry Baker: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Previous message:</strong> <a href="11776.php">Jeff Squyres: "[OMPI devel] topics for Dec. developer's meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11778.php">Larry Baker: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Reply:</strong> <a href="11778.php">Larry Baker: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
<li><strong>Reply:</strong> <a href="11779.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27601 - trunk"</a>
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
