<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 - trunk/lib/MTT/Values/Functions/MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 18:35:31 2014" -->
<!-- isoreceived="20140407223531" -->
<!-- sent="Tue, 8 Apr 2014 01:35:29 +0300" -->
<!-- isosent="20140407223529" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 - trunk/lib/MTT/Values/Functions/MPI" -->
<!-- id="CAAO1KybidWFRa1F_vgMNkdc3XQdx7P-iSN5ZTRLtQSR7=-9wSQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A39DC78C-507F-4B92-8FBA-6BE3A9C115BB_at_cisco.com" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 18:35:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0618.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 -	trunk/lib/MTT/Values/Functions/MPI"</a>
<li><strong>Previous message:</strong> <a href="0616.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 - trunk/lib/MTT/Values/Functions/MPI"</a>
<li><strong>In reply to:</strong> <a href="0616.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 - trunk/lib/MTT/Values/Functions/MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0618.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 -	trunk/lib/MTT/Values/Functions/MPI"</a>
<li><strong>Reply:</strong> <a href="0618.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 -	trunk/lib/MTT/Values/Functions/MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ohh.. it is just flooding the log with same data for every test launch.
<br>
<p>maybe we should have verbose level in mtt?
<br>
<p><p>On Mon, Apr 7, 2014 at 6:30 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Mike --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why did you comment these out?  By definition, --debug output should be a
</span><br>
<span class="quotelev1">&gt; LOT of output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 5, 2014, at 7:27 PM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2014-04-05 19:27:28 EDT (Sat, 05 Apr 2014)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 1637
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1637">https://svn.open-mpi.org/trac/mtt/changeset/1637</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; silence print
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/lib/MTT/Values/Functions/MPI/OMPI.pm |     4 ++--
</span><br>
<span class="quotelev2">&gt; &gt;   1 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/lib/MTT/Values/Functions/MPI/OMPI.pm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/lib/MTT/Values/Functions/MPI/OMPI.pm        Mon Mar 17
</span><br>
<span class="quotelev1">&gt; 14:14:47 2014        (r1636)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Values/Functions/MPI/OMPI.pm        2014-04-05
</span><br>
<span class="quotelev1">&gt; 19:27:28 EDT (Sat, 05 Apr 2014)      (r1637)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -331,7 +331,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     # Check the environment for OMPI_MCA_* values
</span><br>
<span class="quotelev2">&gt; &gt;     foreach my $e (keys(%ENV)) {
</span><br>
<span class="quotelev2">&gt; &gt; -        Debug(&quot;Functions::MPI::OMPI: Checking env key: $e\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +        #Debug(&quot;Functions::MPI::OMPI: Checking env key: $e\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;         if ($e =~ m/^OMPI_MCA_(\S+)/) {
</span><br>
<span class="quotelev2">&gt; &gt;             my $v = $ENV{&quot;OMPI_MCA_$1&quot;};
</span><br>
<span class="quotelev2">&gt; &gt;             push(@params, &quot;--env-mca $1 $v&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; @@ -339,7 +339,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     $str = join(' ', @params);
</span><br>
<span class="quotelev2">&gt; &gt; -    Debug(&quot;Functions::MPI::OMPI: Returning MCA params $str\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +    #Debug(&quot;Functions::MPI::OMPI: Returning MCA params $str\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;     $str;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0617/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0618.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 -	trunk/lib/MTT/Values/Functions/MPI"</a>
<li><strong>Previous message:</strong> <a href="0616.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 - trunk/lib/MTT/Values/Functions/MPI"</a>
<li><strong>In reply to:</strong> <a href="0616.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 - trunk/lib/MTT/Values/Functions/MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0618.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 -	trunk/lib/MTT/Values/Functions/MPI"</a>
<li><strong>Reply:</strong> <a href="0618.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1637 -	trunk/lib/MTT/Values/Functions/MPI"</a>
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
