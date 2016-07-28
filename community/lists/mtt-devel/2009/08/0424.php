<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 10:33:29 2009" -->
<!-- isoreceived="20090811143329" -->
<!-- sent="Tue, 11 Aug 2009 10:33:24 -0400" -->
<!-- isosent="20090811143324" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1306" -->
<!-- id="20090811143324.GA34883_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b20b52800908110453s340202b7wcf32b196389aa1b6_at_mail.gmail.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 10:33:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0425.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>Previous message:</strong> <a href="0423.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>In reply to:</strong> <a href="0423.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0425.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>Reply:</strong> <a href="0425.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Aug/11/2009 02:53:50PM, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt;    Hey Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    This code acts as a pre-processor during loading of ini file into mtt.
</span><br>
<span class="quotelev1">&gt;    It replaces builtin vars %VAR% with their values, for example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ...
</span><br>
<span class="quotelev1">&gt;    [Test run: trivial]
</span><br>
<span class="quotelev1">&gt;    my_sect_name=%INI_SECTION_NAME%
</span><br>
<span class="quotelev1">&gt;    ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    %INI_SECTION_NAME% get replaced with real value. (trivial)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    it is useful in the following situation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ...
</span><br>
<span class="quotelev1">&gt;    [test run: trivial]
</span><br>
<span class="quotelev1">&gt;    #param=&amp;test_run_name()
</span><br>
<span class="quotelev1">&gt;    param=%INI_SECTION_NAME%
</span><br>
<span class="quotelev1">&gt;    ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    when &quot;param&quot; was accessed from Reporter context, test_run_name() will
</span><br>
<span class="quotelev1">&gt;    return undef, but real value if %INI_SECTION_NAME% is used!
</span><br>
<p>Doesn't &amp;current_simple_section() do the same thing as
<br>
%INI_SECTION_NAME%? There are a couple predefined INI vars already,
<br>
but they use @VAR@ syntax:
<br>
<p>&nbsp;&nbsp;@INI_NAME@
<br>
&nbsp;&nbsp;@PROGRAM_NAME@
<br>
<p>The predefined vars are for strings that can't be known via the
<br>
Config::IniFiles module (e.g., the full path to the INI file and
<br>
client/mtt).
<br>
<p>Could you add INI_SECTION_NAME to InsertINIPredefines, and use the
<br>
@VAR@ syntax?
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Mike
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On Tue, Aug 11, 2009 at 2:03 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Mike --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Can you explain what this does?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On Aug 11, 2009, at 4:28 AM, &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Author: miked
</span><br>
<span class="quotelev1">&gt;        Date: 2009-08-11 04:28:03 EDT (Tue, 11 Aug 2009)
</span><br>
<span class="quotelev1">&gt;        New Revision: 1306
</span><br>
<span class="quotelev1">&gt;        URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1306">https://svn.open-mpi.org/trac/mtt/changeset/1306</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Log:
</span><br>
<span class="quotelev1">&gt;        added poor-man-inifile-preprocessor
</span><br>
<span class="quotelev1">&gt;        Text files modified:
</span><br>
<span class="quotelev1">&gt;        * trunk/client/mtt * * | * * 3 +++
</span><br>
<span class="quotelev1">&gt;        * trunk/lib/MTT/INI.pm | * *24 ++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;        * 2 files changed, 27 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Modified: trunk/client/mtt
</span><br>
<span class="quotelev1">&gt;        =
</span><br>
<span class="quotelev1">&gt;        =
</span><br>
<span class="quotelev1">&gt;        =
</span><br>
<span class="quotelev1">&gt;        =
</span><br>
<span class="quotelev1">&gt;        =
</span><br>
<span class="quotelev1">&gt;        =
</span><br>
<span class="quotelev1">&gt;        =
</span><br>
<span class="quotelev1">&gt;        =
</span><br>
<span class="quotelev1">&gt;        ======================================================================
</span><br>
<span class="quotelev1">&gt;        --- trunk/client/mtt * *(original)
</span><br>
<span class="quotelev1">&gt;        +++ trunk/client/mtt * *2009-08-11 04:28:03 EDT (Tue, 11 Aug 2009)
</span><br>
<span class="quotelev1">&gt;        @@ -652,6 +652,9 @@
</span><br>
<span class="quotelev1">&gt;        * * * * # Expand all the &quot;include_section&quot; parameters
</span><br>
<span class="quotelev1">&gt;        * * * * $unfiltered = MTT::INI::ExpandIncludeSections($unfiltered);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        + * * * *# Expand all the &quot;%PREDEFINED_VARS%&quot; parameters
</span><br>
<span class="quotelev1">&gt;        + * * * *$unfiltered = MTT::INI::ExpandPredefinedVars($unfiltered);
</span><br>
<span class="quotelev1">&gt;        +
</span><br>
<span class="quotelev1">&gt;        * * * * # Keep an unfiltered version of the ini file for error
</span><br>
<span class="quotelev1">&gt;        checking
</span><br>
<span class="quotelev1">&gt;        * * * * my $filtered = dclone($unfiltered);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Modified: trunk/lib/MTT/INI.pm
</span><br>
<span class="quotelev1">&gt;        ==============================================================================
</span><br>
<span class="quotelev1">&gt;        --- trunk/lib/MTT/INI.pm * * * *(original)
</span><br>
<span class="quotelev1">&gt;        +++ trunk/lib/MTT/INI.pm * * * *2009-08-11 04:28:03 EDT (Tue, 11 Aug
</span><br>
<span class="quotelev1">&gt;        2009)
</span><br>
<span class="quotelev1">&gt;        @@ -275,6 +275,30 @@
</span><br>
<span class="quotelev1">&gt;        * * return $ini;
</span><br>
<span class="quotelev1">&gt;        *}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        +sub ExpandPredefinedVars {
</span><br>
<span class="quotelev1">&gt;        + * *my($ini) = @_;
</span><br>
<span class="quotelev1">&gt;        +
</span><br>
<span class="quotelev1">&gt;        + * *foreach my $section ($ini-&gt;Sections) {
</span><br>
<span class="quotelev1">&gt;        + * * * * * * * foreach my $parameter ($ini-&gt;Parameters($section)) {
</span><br>
<span class="quotelev1">&gt;        + * * * * * * * * * * * my $val = $ini-&gt;val($section, $parameter);
</span><br>
<span class="quotelev1">&gt;        + * * * * * * * * * * * if ( $val =~ /%INI_SECTION_NAME%/i ) {
</span><br>
<span class="quotelev1">&gt;        + * * * * * * * * * * * * * * * my $sect = $section;
</span><br>
<span class="quotelev1">&gt;        + * * * * * * * * * * * * * * * $sect =~ s/test run://gi;
</span><br>
<span class="quotelev1">&gt;        + * * * * * * * * * * * * * * * $sect =~ s/test build://gi;
</span><br>
<span class="quotelev1">&gt;        + * * * * * * * * * * * * * * * $sect =~ s/test get://gi;
</span><br>
<span class="quotelev1">&gt;        + * * * * * * * * * * * * * * * $sect =~ s/mpi get://gi;
</span><br>
<span class="quotelev1">&gt;        + * * * * * * * * * * * * * * * $sect =~ s/mpi install://gi;
</span><br>
<span class="quotelev1">&gt;        + * * * * * * * * * * * * * * * $sect =~ s/mpi details://gi;
</span><br>
<span class="quotelev1">&gt;        + * * * * * * * * * * * * * * * $sect =~ s/reporter://gi;
</span><br>
<span class="quotelev1">&gt;        + * * * * * * * * * * * * * * * $val =~ s/%INI_SECTION_NAME%/$sect/g;
</span><br>
<span class="quotelev1">&gt;        + * * * * * * * * * * * * * * * $ini-&gt;delval($section, $parameter);
</span><br>
<span class="quotelev1">&gt;        + * * * * * * * * * * * * * * * $ini-&gt;newval($section, $parameter,
</span><br>
<span class="quotelev1">&gt;        $val);
</span><br>
<span class="quotelev1">&gt;        + * * * * * * * * * * * }
</span><br>
<span class="quotelev1">&gt;        + * * * * * * * }
</span><br>
<span class="quotelev1">&gt;        + * *}
</span><br>
<span class="quotelev1">&gt;        + * *return $ini;
</span><br>
<span class="quotelev1">&gt;        +}
</span><br>
<span class="quotelev1">&gt;        +
</span><br>
<span class="quotelev1">&gt;        *# Worker subroutine for recursive ExpandIncludeSections
</span><br>
<span class="quotelev1">&gt;        *sub _expand_include_sections {
</span><br>
<span class="quotelev1">&gt;        * * my($ini, $section) = @_;
</span><br>
<span class="quotelev1">&gt;        _______________________________________________
</span><br>
<span class="quotelev1">&gt;        mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt;        mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      --
</span><br>
<span class="quotelev1">&gt;      Jeff Squyres
</span><br>
<span class="quotelev1">&gt;      jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt;      mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; References
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Visible links
</span><br>
<span class="quotelev1">&gt;    . mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    . mailto:miked_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    . <a href="https://svn.open-mpi.org/trac/mtt/changeset/1306">https://svn.open-mpi.org/trac/mtt/changeset/1306</a>
</span><br>
<span class="quotelev1">&gt;    . mailto:mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    . <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt;    . mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    . mailto:mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    . <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0425.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>Previous message:</strong> <a href="0423.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>In reply to:</strong> <a href="0423.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0425.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>Reply:</strong> <a href="0425.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
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
