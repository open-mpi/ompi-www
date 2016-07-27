<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 - trunk/lib/MTT/Values/Functions/MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 11:30:27 2014" -->
<!-- isoreceived="20140407153027" -->
<!-- sent="Mon, 7 Apr 2014 15:30:27 +0000" -->
<!-- isosent="20140407153027" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 - trunk/lib/MTT/Values/Functions/MPI" -->
<!-- id="A39DC78C-507F-4B92-8FBA-6BE3A9C115BB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140405232728.446AA15FF17_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 - trunk/lib/MTT/Values/Functions/MPI<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 11:30:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0617.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 - trunk/lib/MTT/Values/Functions/MPI"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/10/0615.php">Jeff Squyres (jsquyres): "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0617.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 - trunk/lib/MTT/Values/Functions/MPI"</a>
<li><strong>Reply:</strong> <a href="0617.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 - trunk/lib/MTT/Values/Functions/MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike --
<br>
<p>Why did you comment these out?  By definition, --debug output should be a LOT of output.
<br>
<p><p>On Apr 5, 2014, at 7:27 PM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2014-04-05 19:27:28 EDT (Sat, 05 Apr 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 1637
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1637">https://svn.open-mpi.org/trac/mtt/changeset/1637</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; silence print
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Values/Functions/MPI/OMPI.pm |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;   1 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Values/Functions/MPI/OMPI.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Values/Functions/MPI/OMPI.pm	Mon Mar 17 14:14:47 2014	(r1636)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Values/Functions/MPI/OMPI.pm	2014-04-05 19:27:28 EDT (Sat, 05 Apr 2014)	(r1637)
</span><br>
<span class="quotelev1">&gt; @@ -331,7 +331,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     # Check the environment for OMPI_MCA_* values
</span><br>
<span class="quotelev1">&gt;     foreach my $e (keys(%ENV)) {
</span><br>
<span class="quotelev1">&gt; -        Debug(&quot;Functions::MPI::OMPI: Checking env key: $e\n&quot;);
</span><br>
<span class="quotelev1">&gt; +        #Debug(&quot;Functions::MPI::OMPI: Checking env key: $e\n&quot;);
</span><br>
<span class="quotelev1">&gt;         if ($e =~ m/^OMPI_MCA_(\S+)/) {
</span><br>
<span class="quotelev1">&gt;             my $v = $ENV{&quot;OMPI_MCA_$1&quot;};
</span><br>
<span class="quotelev1">&gt;             push(@params, &quot;--env-mca $1 $v&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -339,7 +339,7 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     $str = join(' ', @params);
</span><br>
<span class="quotelev1">&gt; -    Debug(&quot;Functions::MPI::OMPI: Returning MCA params $str\n&quot;);
</span><br>
<span class="quotelev1">&gt; +    #Debug(&quot;Functions::MPI::OMPI: Returning MCA params $str\n&quot;);
</span><br>
<span class="quotelev1">&gt;     $str;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="0617.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 - trunk/lib/MTT/Values/Functions/MPI"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/10/0615.php">Jeff Squyres (jsquyres): "Re: [MTT devel] mtt-relay patch - create pid file when run as daemon"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0617.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 - trunk/lib/MTT/Values/Functions/MPI"</a>
<li><strong>Reply:</strong> <a href="0617.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 - trunk/lib/MTT/Values/Functions/MPI"</a>
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
