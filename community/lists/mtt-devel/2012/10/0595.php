<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1535 - trunk/lib/MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  2 09:31:44 2012" -->
<!-- isoreceived="20121002133144" -->
<!-- sent="Tue, 2 Oct 2012 09:31:46 -0400" -->
<!-- isosent="20121002133146" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1535 - trunk/lib/MTT" -->
<!-- id="13C99B0D-4FFD-4CDC-A700-7A375EC0BD12_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20121002123558.7DFD915FA1F_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1535 - trunk/lib/MTT<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-02 09:31:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/01/0596.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/08/0594.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1481 - in trunk: client lib/MTT/Reporter"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What was wrong with @param@ processing?
<br>
<p>Please, please, please provide more detail in your commit messages.
<br>
<p>:-(
<br>
<p><p>On Oct 2, 2012, at 8:35 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2012-10-02 08:35:58 EDT (Tue, 02 Oct 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 1535
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1535">https://svn.open-mpi.org/trac/mtt/changeset/1535</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fixed @param@ processing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Values.pm |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;   1 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Values.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Values.pm	Fri Sep 28 18:17:22 2012	(r1534)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Values.pm	2012-10-02 08:35:58 EDT (Tue, 02 Oct 2012)	(r1535)
</span><br>
<span class="quotelev1">&gt; @@ -185,9 +185,9 @@
</span><br>
<span class="quotelev1">&gt;         my $val;
</span><br>
<span class="quotelev1">&gt;         if ($var_name =~ m/^!/) {
</span><br>
<span class="quotelev1">&gt;             # don't call EvaluateString for @!var_name@, only &quot;copy-paste&quot; value from section parameter
</span><br>
<span class="quotelev1">&gt; -            $val = $ini-&gt;val($section, substr($var_name,1));
</span><br>
<span class="quotelev1">&gt; +            $val = join(&quot;\n&quot;,$ini-&gt;val($section, substr($var_name,1)));
</span><br>
<span class="quotelev1">&gt;         } else {
</span><br>
<span class="quotelev1">&gt; -            $val = EvaluateString($ini-&gt;val($section, $var_name), $ini, $section);
</span><br>
<span class="quotelev1">&gt; +            $val = EvaluateString(join(&quot;\n&quot;, $ini-&gt;val($section, $var_name), $ini, $section));
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         Debug(&quot;Got var_name: $var_name -&gt; $val\n&quot;);
</span><br>
<span class="quotelev1">&gt;         if (!defined($val)) {
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/01/0596.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/08/0594.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1481 - in trunk: client lib/MTT/Reporter"</a>
<!-- nextthread="start" -->
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
