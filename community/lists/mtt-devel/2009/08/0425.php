<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 03:46:29 2009" -->
<!-- isoreceived="20090812074629" -->
<!-- sent="Wed, 12 Aug 2009 10:46:22 +0300" -->
<!-- isosent="20090812074622" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1306" -->
<!-- id="b20b52800908120046g71e5fe30n6bd7e3937f44d9f7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090811143324.GA34883_at_sun.com" -->
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
<strong>Date:</strong> 2009-08-12 03:46:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0426.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>Previous message:</strong> <a href="0424.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>In reply to:</strong> <a href="0424.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0426.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>Reply:</strong> <a href="0426.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&amp;current_simple_section()  retrieves &quot;active_section&quot; key from
<br>
$MTT::Globals::Values hash, which gets its value when
<br>
starting Test.[get/build/run] and MPI.[get/install] sequences.
<br>
This value is incorrect when read from Reporter context.
<br>
<p><p>The new var @INI_SECTON_NAME@ will represent the ini section name of its
<br>
location inside mtt ini file.
<br>
I moved %INI_SECTON_NAME% to @VAR@ syntax and put it into
<br>
InsertINIPredefines()
<br>
<p>Thanks for comment.
<br>
regards
<br>
Mike
<br>
<p><p>On Tue, Aug 11, 2009 at 5:33 PM, Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Aug/11/2009 02:53:50PM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Hey Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    This code acts as a pre-processor during loading of ini file into mtt.
</span><br>
<span class="quotelev2">&gt; &gt;    It replaces builtin vars %VAR% with their values, for example:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    ...
</span><br>
<span class="quotelev2">&gt; &gt;    [Test run: trivial]
</span><br>
<span class="quotelev2">&gt; &gt;    my_sect_name=%INI_SECTION_NAME%
</span><br>
<span class="quotelev2">&gt; &gt;    ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    %INI_SECTION_NAME% get replaced with real value. (trivial)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    it is useful in the following situation:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    ...
</span><br>
<span class="quotelev2">&gt; &gt;    [test run: trivial]
</span><br>
<span class="quotelev2">&gt; &gt;    #param=&amp;test_run_name()
</span><br>
<span class="quotelev2">&gt; &gt;    param=%INI_SECTION_NAME%
</span><br>
<span class="quotelev2">&gt; &gt;    ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    when &quot;param&quot; was accessed from Reporter context, test_run_name() will
</span><br>
<span class="quotelev2">&gt; &gt;    return undef, but real value if %INI_SECTION_NAME% is used!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doesn't &amp;current_simple_section() do the same thing as
</span><br>
<span class="quotelev1">&gt; %INI_SECTION_NAME%? There are a couple predefined INI vars already,
</span><br>
<span class="quotelev1">&gt; but they use @VAR@ syntax:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  @INI_NAME@
</span><br>
<span class="quotelev1">&gt;  @PROGRAM_NAME@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The predefined vars are for strings that can't be known via the
</span><br>
<span class="quotelev1">&gt; Config::IniFiles module (e.g., the full path to the INI file and
</span><br>
<span class="quotelev1">&gt; client/mtt).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you add INI_SECTION_NAME to InsertINIPredefines, and use the
</span><br>
<span class="quotelev1">&gt; @VAR@ syntax?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Mike
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    On Tue, Aug 11, 2009 at 2:03 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Mike --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Can you explain what this does?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      On Aug 11, 2009, at 4:28 AM, &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        Author: miked
</span><br>
<span class="quotelev2">&gt; &gt;        Date: 2009-08-11 04:28:03 EDT (Tue, 11 Aug 2009)
</span><br>
<span class="quotelev2">&gt; &gt;        New Revision: 1306
</span><br>
<span class="quotelev2">&gt; &gt;        URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1306">https://svn.open-mpi.org/trac/mtt/changeset/1306</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        Log:
</span><br>
<span class="quotelev2">&gt; &gt;        added poor-man-inifile-preprocessor
</span><br>
<span class="quotelev2">&gt; &gt;        Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;        * trunk/client/mtt * * | * * 3 +++
</span><br>
<span class="quotelev2">&gt; &gt;        * trunk/lib/MTT/INI.pm | * *24 ++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt; &gt;        * 2 files changed, 27 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        Modified: trunk/client/mtt
</span><br>
<span class="quotelev2">&gt; &gt;        =
</span><br>
<span class="quotelev2">&gt; &gt;        =
</span><br>
<span class="quotelev2">&gt; &gt;        =
</span><br>
<span class="quotelev2">&gt; &gt;        =
</span><br>
<span class="quotelev2">&gt; &gt;        =
</span><br>
<span class="quotelev2">&gt; &gt;        =
</span><br>
<span class="quotelev2">&gt; &gt;        =
</span><br>
<span class="quotelev2">&gt; &gt;        =
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt;        --- trunk/client/mtt * *(original)
</span><br>
<span class="quotelev2">&gt; &gt;        +++ trunk/client/mtt * *2009-08-11 04:28:03 EDT (Tue, 11 Aug 2009)
</span><br>
<span class="quotelev2">&gt; &gt;        @@ -652,6 +652,9 @@
</span><br>
<span class="quotelev2">&gt; &gt;        * * * * # Expand all the &quot;include_section&quot; parameters
</span><br>
<span class="quotelev2">&gt; &gt;        * * * * $unfiltered =
</span><br>
<span class="quotelev1">&gt; MTT::INI::ExpandIncludeSections($unfiltered);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * *# Expand all the &quot;%PREDEFINED_VARS%&quot; parameters
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * *$unfiltered =
</span><br>
<span class="quotelev1">&gt; MTT::INI::ExpandPredefinedVars($unfiltered);
</span><br>
<span class="quotelev2">&gt; &gt;        +
</span><br>
<span class="quotelev2">&gt; &gt;        * * * * # Keep an unfiltered version of the ini file for error
</span><br>
<span class="quotelev2">&gt; &gt;        checking
</span><br>
<span class="quotelev2">&gt; &gt;        * * * * my $filtered = dclone($unfiltered);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        Modified: trunk/lib/MTT/INI.pm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt;        --- trunk/lib/MTT/INI.pm * * * *(original)
</span><br>
<span class="quotelev2">&gt; &gt;        +++ trunk/lib/MTT/INI.pm * * * *2009-08-11 04:28:03 EDT (Tue, 11
</span><br>
<span class="quotelev1">&gt; Aug
</span><br>
<span class="quotelev2">&gt; &gt;        2009)
</span><br>
<span class="quotelev2">&gt; &gt;        @@ -275,6 +275,30 @@
</span><br>
<span class="quotelev2">&gt; &gt;        * * return $ini;
</span><br>
<span class="quotelev2">&gt; &gt;        *}
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        +sub ExpandPredefinedVars {
</span><br>
<span class="quotelev2">&gt; &gt;        + * *my($ini) = @_;
</span><br>
<span class="quotelev2">&gt; &gt;        +
</span><br>
<span class="quotelev2">&gt; &gt;        + * *foreach my $section ($ini-&gt;Sections) {
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * * * * * foreach my $parameter ($ini-&gt;Parameters($section))
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * * * * * * * * * my $val = $ini-&gt;val($section, $parameter);
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * * * * * * * * * if ( $val =~ /%INI_SECTION_NAME%/i ) {
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * * * * * * * * * * * * * my $sect = $section;
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * * * * * * * * * * * * * $sect =~ s/test run://gi;
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * * * * * * * * * * * * * $sect =~ s/test build://gi;
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * * * * * * * * * * * * * $sect =~ s/test get://gi;
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * * * * * * * * * * * * * $sect =~ s/mpi get://gi;
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * * * * * * * * * * * * * $sect =~ s/mpi install://gi;
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * * * * * * * * * * * * * $sect =~ s/mpi details://gi;
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * * * * * * * * * * * * * $sect =~ s/reporter://gi;
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * * * * * * * * * * * * * $val =~
</span><br>
<span class="quotelev1">&gt; s/%INI_SECTION_NAME%/$sect/g;
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * * * * * * * * * * * * * $ini-&gt;delval($section,
</span><br>
<span class="quotelev1">&gt; $parameter);
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * * * * * * * * * * * * * $ini-&gt;newval($section, $parameter,
</span><br>
<span class="quotelev2">&gt; &gt;        $val);
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * * * * * * * * * }
</span><br>
<span class="quotelev2">&gt; &gt;        + * * * * * * * }
</span><br>
<span class="quotelev2">&gt; &gt;        + * *}
</span><br>
<span class="quotelev2">&gt; &gt;        + * *return $ini;
</span><br>
<span class="quotelev2">&gt; &gt;        +}
</span><br>
<span class="quotelev2">&gt; &gt;        +
</span><br>
<span class="quotelev2">&gt; &gt;        *# Worker subroutine for recursive ExpandIncludeSections
</span><br>
<span class="quotelev2">&gt; &gt;        *sub _expand_include_sections {
</span><br>
<span class="quotelev2">&gt; &gt;        * * my($ini, $section) = @_;
</span><br>
<span class="quotelev2">&gt; &gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;        mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt;        mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      --
</span><br>
<span class="quotelev2">&gt; &gt;      Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt;      jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;      mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;      mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; References
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Visible links
</span><br>
<span class="quotelev2">&gt; &gt;    . mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    . mailto:miked_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    . <a href="https://svn.open-mpi.org/trac/mtt/changeset/1306">https://svn.open-mpi.org/trac/mtt/changeset/1306</a>
</span><br>
<span class="quotelev2">&gt; &gt;    . mailto:mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    . <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev2">&gt; &gt;    . mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    . mailto:mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    . <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0425/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0426.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>Previous message:</strong> <a href="0424.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>In reply to:</strong> <a href="0424.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0426.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>Reply:</strong> <a href="0426.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
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
