<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 07:53:56 2009" -->
<!-- isoreceived="20090811115356" -->
<!-- sent="Tue, 11 Aug 2009 14:53:50 +0300" -->
<!-- isosent="20090811115350" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1306" -->
<!-- id="b20b52800908110453s340202b7wcf32b196389aa1b6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F1DC7762-5A2E-4C41-835D-315AFDEB3E5E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1306<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 07:53:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0424.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>Previous message:</strong> <a href="0422.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>In reply to:</strong> <a href="0422.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0424.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>Reply:</strong> <a href="0424.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Jeff,
<br>
<p>This code acts as a pre-processor during loading of ini file into mtt.
<br>
It replaces builtin vars %VAR% with their values, for example:
<br>
<p>...
<br>
[Test run: trivial]
<br>
my_sect_name=%INI_SECTION_NAME%
<br>
...
<br>
<p>%INI_SECTION_NAME% get replaced with real value. (trivial)
<br>
<p><p><p>it is useful in the following situation:
<br>
<p>...
<br>
[test run: trivial]
<br>
#param=&amp;test_run_name()
<br>
param=%INI_SECTION_NAME%
<br>
...
<br>
<p>when &quot;param&quot; was accessed from Reporter context, test_run_name() will return
<br>
undef, but real value if %INI_SECTION_NAME% is used!
<br>
<p><p><p>regards
<br>
<p>Mike
<br>
<p>On Tue, Aug 11, 2009 at 2:03 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Mike --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you explain what this does?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 11, 2009, at 4:28 AM, &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Author: miked
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2009-08-11 04:28:03 EDT (Tue, 11 Aug 2009)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 1306
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1306">https://svn.open-mpi.org/trac/mtt/changeset/1306</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; added poor-man-inifile-preprocessor
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/client/mtt     |     3 +++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/lib/MTT/INI.pm |    24 ++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;   2 files changed, 27 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/client/mtt
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/client/mtt    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/client/mtt    2009-08-11 04:28:03 EDT (Tue, 11 Aug 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -652,6 +652,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;         # Expand all the &quot;include_section&quot; parameters
</span><br>
<span class="quotelev2">&gt;&gt;         $unfiltered = MTT::INI::ExpandIncludeSections($unfiltered);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +        # Expand all the &quot;%PREDEFINED_VARS%&quot; parameters
</span><br>
<span class="quotelev2">&gt;&gt; +        $unfiltered = MTT::INI::ExpandPredefinedVars($unfiltered);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;         # Keep an unfiltered version of the ini file for error checking
</span><br>
<span class="quotelev2">&gt;&gt;         my $filtered = dclone($unfiltered);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/lib/MTT/INI.pm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/lib/MTT/INI.pm        (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/lib/MTT/INI.pm        2009-08-11 04:28:03 EDT (Tue, 11 Aug 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -275,6 +275,30 @@
</span><br>
<span class="quotelev2">&gt;&gt;     return $ini;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +sub ExpandPredefinedVars {
</span><br>
<span class="quotelev2">&gt;&gt; +    my($ini) = @_;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    foreach my $section ($ini-&gt;Sections) {
</span><br>
<span class="quotelev2">&gt;&gt; +               foreach my $parameter ($ini-&gt;Parameters($section)) {
</span><br>
<span class="quotelev2">&gt;&gt; +                       my $val = $ini-&gt;val($section, $parameter);
</span><br>
<span class="quotelev2">&gt;&gt; +                       if ( $val =~ /%INI_SECTION_NAME%/i ) {
</span><br>
<span class="quotelev2">&gt;&gt; +                               my $sect = $section;
</span><br>
<span class="quotelev2">&gt;&gt; +                               $sect =~ s/test run://gi;
</span><br>
<span class="quotelev2">&gt;&gt; +                               $sect =~ s/test build://gi;
</span><br>
<span class="quotelev2">&gt;&gt; +                               $sect =~ s/test get://gi;
</span><br>
<span class="quotelev2">&gt;&gt; +                               $sect =~ s/mpi get://gi;
</span><br>
<span class="quotelev2">&gt;&gt; +                               $sect =~ s/mpi install://gi;
</span><br>
<span class="quotelev2">&gt;&gt; +                               $sect =~ s/mpi details://gi;
</span><br>
<span class="quotelev2">&gt;&gt; +                               $sect =~ s/reporter://gi;
</span><br>
<span class="quotelev2">&gt;&gt; +                               $val =~ s/%INI_SECTION_NAME%/$sect/g;
</span><br>
<span class="quotelev2">&gt;&gt; +                               $ini-&gt;delval($section, $parameter);
</span><br>
<span class="quotelev2">&gt;&gt; +                               $ini-&gt;newval($section, $parameter, $val);
</span><br>
<span class="quotelev2">&gt;&gt; +                       }
</span><br>
<span class="quotelev2">&gt;&gt; +               }
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    return $ini;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;  # Worker subroutine for recursive ExpandIncludeSections
</span><br>
<span class="quotelev2">&gt;&gt;  sub _expand_include_sections {
</span><br>
<span class="quotelev2">&gt;&gt;     my($ini, $section) = @_;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0423/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0424.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>Previous message:</strong> <a href="0422.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>In reply to:</strong> <a href="0422.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0424.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>Reply:</strong> <a href="0424.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
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
