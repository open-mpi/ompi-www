<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1607 - in trunk/lib/MTT: Reporter	Values/Functions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 26 13:11:20 2013" -->
<!-- isoreceived="20130326171120" -->
<!-- sent="Tue, 26 Mar 2013 17:11:15 +0000" -->
<!-- isosent="20130326171115" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1607 - in trunk/lib/MTT: Reporter	Values/Functions" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FC6DBA_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130325160755.0CB2B15F967_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1607 - in trunk/lib/MTT: Reporter	Values/Functions<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-26 13:11:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0607.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTT feature request"</a>
<li><strong>Previous message:</strong> <a href="0605.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1602 - in trunk/lib/MTT: . Reporter"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a bad commit:
<br>
<p>Global symbol &quot;$url&quot; requires explicit package name at /opt/local/lib/perl5/site_perl/5.12.4/MTT/Values/Functions/Icc_codecov.pm line 107.
<br>
<p>Please fix.
<br>
<p><p>On Mar 25, 2013, at 12:07 PM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2013-03-25 12:07:54 EDT (Mon, 25 Mar 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 1607
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1607">https://svn.open-mpi.org/trac/mtt/changeset/1607</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Make  mtt doesn't die if connecting failed;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Reporter/MTTMongodb.pm          |    11 ++++++++++-                             
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Values/Functions/Icc_codecov.pm |    16 +++++++++++++---                        
</span><br>
<span class="quotelev1">&gt;   2 files changed, 23 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Reporter/MTTMongodb.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Reporter/MTTMongodb.pm	Sat Mar 23 14:57:45 2013	(r1606)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Reporter/MTTMongodb.pm	2013-03-25 12:07:54 EDT (Mon, 25 Mar 2013)	(r1607)
</span><br>
<span class="quotelev1">&gt; @@ -117,7 +117,16 @@
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	if($enable_mongo == 1)
</span><br>
<span class="quotelev1">&gt; 	{
</span><br>
<span class="quotelev1">&gt; -		eval &quot;\$conn = MongoDB::Connection-&gt;new(host =&gt; \$url);&quot;;
</span><br>
<span class="quotelev1">&gt; +		my $flag;
</span><br>
<span class="quotelev1">&gt; +		eval &quot;\$conn = MongoDB::Connection-&gt;new(host =&gt; \$url);
</span><br>
<span class="quotelev1">&gt; +			 \$flag=1&quot;;
</span><br>
<span class="quotelev1">&gt; +		if(defined($flag))
</span><br>
<span class="quotelev1">&gt; +		{
</span><br>
<span class="quotelev1">&gt; +			$conn = MongoDB::Connection-&gt;new(host =&gt; $url);
</span><br>
<span class="quotelev1">&gt; +		}else
</span><br>
<span class="quotelev1">&gt; +		{
</span><br>
<span class="quotelev1">&gt; +			$conn = undef;
</span><br>
<span class="quotelev1">&gt; +		}
</span><br>
<span class="quotelev1">&gt; 		
</span><br>
<span class="quotelev1">&gt; 		if(defined($conn))
</span><br>
<span class="quotelev1">&gt; 		{
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Values/Functions/Icc_codecov.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Values/Functions/Icc_codecov.pm	Sat Mar 23 14:57:45 2013	(r1606)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Values/Functions/Icc_codecov.pm	2013-03-25 12:07:54 EDT (Mon, 25 Mar 2013)	(r1607)
</span><br>
<span class="quotelev1">&gt; @@ -99,9 +99,19 @@
</span><br>
<span class="quotelev1">&gt; 	if($enable_mongo == 1)
</span><br>
<span class="quotelev1">&gt; 	{
</span><br>
<span class="quotelev1">&gt; 		#$conn = MongoDB::Connection-&gt;new(host =&gt; $dbase_url);
</span><br>
<span class="quotelev1">&gt; -		eval &quot;\$conn = MongoDB::Connection-&gt;new(host =&gt; \$dbase_url);&quot;;
</span><br>
<span class="quotelev1">&gt; -		$db = $conn-&gt;mlnx_mtt;
</span><br>
<span class="quotelev1">&gt; -		$codecov_reports = $db-&gt;Coverage;
</span><br>
<span class="quotelev1">&gt; +		my $flag;
</span><br>
<span class="quotelev1">&gt; +		eval &quot;\$conn = MongoDB::Connection-&gt;new(host =&gt; \$dbase_url);
</span><br>
<span class="quotelev1">&gt; +			 \$flag=1&quot;;
</span><br>
<span class="quotelev1">&gt; +		if(defined($flag))
</span><br>
<span class="quotelev1">&gt; +		{
</span><br>
<span class="quotelev1">&gt; +			$conn = MongoDB::Connection-&gt;new(host =&gt; $url);
</span><br>
<span class="quotelev1">&gt; +			$db = $conn-&gt;mlnx_mtt;
</span><br>
<span class="quotelev1">&gt; +			$codecov_reports = $db-&gt;Coverage;
</span><br>
<span class="quotelev1">&gt; +		}else
</span><br>
<span class="quotelev1">&gt; +		{
</span><br>
<span class="quotelev1">&gt; +			$enable_mongo = 0;
</span><br>
<span class="quotelev1">&gt; +			$conn = undef;
</span><br>
<span class="quotelev1">&gt; +		}
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	my $hash_to_insert = {};
</span><br>
<span class="quotelev1">&gt; 	opendir DIR,&quot;$codecov_dir&quot; or (Warning(&quot;Icc codecov: Cannot open codeocdir: $codecov_dir\n&quot;) and return 0);
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
<li><strong>Next message:</strong> <a href="0607.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTT feature request"</a>
<li><strong>Previous message:</strong> <a href="0605.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1602 - in trunk/lib/MTT: . Reporter"</a>
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
