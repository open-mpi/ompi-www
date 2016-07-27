<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1377";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  3 07:54:23 2011" -->
<!-- isoreceived="20110103125423" -->
<!-- sent="Mon, 3 Jan 2011 07:54:18 -0500" -->
<!-- isosent="20110103125418" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1377" -->
<!-- id="0F6EEB88-89AF-49C0-AD3A-2272C771FB00_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201012290852.oBT8qOp9027682_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1377<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-03 07:54:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0542.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1377"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/12/0540.php">Joshua Hursey: "Re: [MTT devel] MTT Database Maintenance:  Yearly Reminder"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0542.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1377"</a>
<li><strong>Reply:</strong> <a href="0542.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1377"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike -- 
<br>
<p>Can you explain this one a little?  I don't understand the example you gave in the comment.
<br>
<p>Also, are you adding all the new funclets to the wiki documentation?
<br>
<p><p><p>On Dec 29, 2010, at 3:52 AM, miked_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked
</span><br>
<span class="quotelev1">&gt; Date: 2010-12-29 03:52:24 EST (Wed, 29 Dec 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 1377
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1377">https://svn.open-mpi.org/trac/mtt/changeset/1377</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; added mtt_switch to simplify if-then-else cases in ini files
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Values/Functions.pm |    21 +++++++++++++++++++++                   
</span><br>
<span class="quotelev1">&gt;   1 files changed, 21 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Values/Functions.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Values/Functions.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Values/Functions.pm	2010-12-29 03:52:24 EST (Wed, 29 Dec 2010)
</span><br>
<span class="quotelev1">&gt; @@ -3163,4 +3163,25 @@
</span><br>
<span class="quotelev1">&gt; 	return $x-&gt;{result_stdout};
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Poor man switch statement
</span><br>
<span class="quotelev1">&gt; +# Example: mtt_switch(@np@, 9, &quot;return1&quot;, 100, return2&quot;, &quot;default&quot;, 0);
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +sub mtt_switch
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    my ($var, %cases) = @_;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if ($cases{$var}) {
</span><br>
<span class="quotelev1">&gt; +        return $cases{$var};
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if ($cases{'default'}) {
</span><br>
<span class="quotelev1">&gt; +        return $cases{'default'};
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    Debug(&quot;ERROR: Not found case for $var\n&quot;);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; 1;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0542.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1377"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/12/0540.php">Joshua Hursey: "Re: [MTT devel] MTT Database Maintenance:  Yearly Reminder"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0542.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1377"</a>
<li><strong>Reply:</strong> <a href="0542.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1377"</a>
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
