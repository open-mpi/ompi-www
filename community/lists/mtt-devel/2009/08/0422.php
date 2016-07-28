<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 07:03:52 2009" -->
<!-- isoreceived="20090811110352" -->
<!-- sent="Tue, 11 Aug 2009 07:03:47 -0400" -->
<!-- isosent="20090811110347" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1306" -->
<!-- id="F1DC7762-5A2E-4C41-835D-315AFDEB3E5E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200908110828.n7B8S3pd003259_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 07:03:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0423.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/07/0421.php">Jeff Squyres (jsquyres): "Re: [MTT devel] OTF testing tool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0423.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>Reply:</strong> <a href="0423.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike --
<br>
<p>Can you explain what this does?
<br>
<p>On Aug 11, 2009, at 4:28 AM, &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked
</span><br>
<span class="quotelev1">&gt; Date: 2009-08-11 04:28:03 EDT (Tue, 11 Aug 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 1306
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1306">https://svn.open-mpi.org/trac/mtt/changeset/1306</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; added poor-man-inifile-preprocessor
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/client/mtt     |     3 +++
</span><br>
<span class="quotelev1">&gt;    trunk/lib/MTT/INI.pm |    24 ++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;    2 files changed, 27 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/client/mtt
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/client/mtt    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/client/mtt    2009-08-11 04:28:03 EDT (Tue, 11 Aug 2009)
</span><br>
<span class="quotelev1">&gt; @@ -652,6 +652,9 @@
</span><br>
<span class="quotelev1">&gt;          # Expand all the &quot;include_section&quot; parameters
</span><br>
<span class="quotelev1">&gt;          $unfiltered = MTT::INI::ExpandIncludeSections($unfiltered);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        # Expand all the &quot;%PREDEFINED_VARS%&quot; parameters
</span><br>
<span class="quotelev1">&gt; +        $unfiltered = MTT::INI::ExpandPredefinedVars($unfiltered);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;          # Keep an unfiltered version of the ini file for error  
</span><br>
<span class="quotelev1">&gt; checking
</span><br>
<span class="quotelev1">&gt;          my $filtered = dclone($unfiltered);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/INI.pm
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/INI.pm        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/INI.pm        2009-08-11 04:28:03 EDT (Tue, 11 Aug  
</span><br>
<span class="quotelev1">&gt; 2009)
</span><br>
<span class="quotelev1">&gt; @@ -275,6 +275,30 @@
</span><br>
<span class="quotelev1">&gt;      return $ini;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +sub ExpandPredefinedVars {
</span><br>
<span class="quotelev1">&gt; +    my($ini) = @_;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    foreach my $section ($ini-&gt;Sections) {
</span><br>
<span class="quotelev1">&gt; +               foreach my $parameter ($ini-&gt;Parameters($section)) {
</span><br>
<span class="quotelev1">&gt; +                       my $val = $ini-&gt;val($section, $parameter);
</span><br>
<span class="quotelev1">&gt; +                       if ( $val =~ /%INI_SECTION_NAME%/i ) {
</span><br>
<span class="quotelev1">&gt; +                               my $sect = $section;
</span><br>
<span class="quotelev1">&gt; +                               $sect =~ s/test run://gi;
</span><br>
<span class="quotelev1">&gt; +                               $sect =~ s/test build://gi;
</span><br>
<span class="quotelev1">&gt; +                               $sect =~ s/test get://gi;
</span><br>
<span class="quotelev1">&gt; +                               $sect =~ s/mpi get://gi;
</span><br>
<span class="quotelev1">&gt; +                               $sect =~ s/mpi install://gi;
</span><br>
<span class="quotelev1">&gt; +                               $sect =~ s/mpi details://gi;
</span><br>
<span class="quotelev1">&gt; +                               $sect =~ s/reporter://gi;
</span><br>
<span class="quotelev1">&gt; +                               $val =~ s/%INI_SECTION_NAME%/$sect/g;
</span><br>
<span class="quotelev1">&gt; +                               $ini-&gt;delval($section, $parameter);
</span><br>
<span class="quotelev1">&gt; +                               $ini-&gt;newval($section, $parameter,  
</span><br>
<span class="quotelev1">&gt; $val);
</span><br>
<span class="quotelev1">&gt; +                       }
</span><br>
<span class="quotelev1">&gt; +               }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    return $ini;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  # Worker subroutine for recursive ExpandIncludeSections
</span><br>
<span class="quotelev1">&gt;  sub _expand_include_sections {
</span><br>
<span class="quotelev1">&gt;      my($ini, $section) = @_;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0423.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/07/0421.php">Jeff Squyres (jsquyres): "Re: [MTT devel] OTF testing tool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0423.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
<li><strong>Reply:</strong> <a href="0423.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1306"</a>
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
