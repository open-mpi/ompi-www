<?
$subject_val = "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 08:26:21 2008" -->
<!-- isoreceived="20080513122621" -->
<!-- sent="Tue, 13 May 2008 08:26:11 -0400" -->
<!-- isosent="20080513122611" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple" -->
<!-- id="D0367613-AC67-44AE-937F-45B6700D668B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF8C9415F0.26C11F2C-ON48257448.0024AB2A-48257448.00252EA4_at_cn.ibm.com" -->
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
<strong>Subject:</strong> Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-13 08:26:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0547.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Previous message:</strong> <a href="0545.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>In reply to:</strong> <a href="0545.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0557.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Reply:</strong> <a href="0557.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 13, 2008, at 2:58 AM, Wen Hao Wang wrote:
<br>
<p><span class="quotelev1">&gt; I run client/mtt with debug model, and found mtt script exited in  
</span><br>
<span class="quotelev1">&gt; following code section of lib/MTT/Module.pm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 32 my $str = &quot;require $module&quot;;
</span><br>
<span class="quotelev1">&gt; 33 Debug(&quot;Evaluating: $str\n&quot;);
</span><br>
<span class="quotelev1">&gt; 34 my $check = eval $str;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When require error occured, $str was set to  
</span><br>
<span class="quotelev1">&gt; &quot;MTT::Test::Specify::Simple
</span><br>
<span class="quotelev1">&gt; Simple&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Note that this *usually* indicates an error in the INI file.  Perhaps  
<br>
we should have better error checking/reporting for this case...
<br>
<p>Can you send your ini file?
<br>
<p><span class="quotelev1">&gt; This is not a valid Perl module, so mtt failed. I had no time to  
</span><br>
<span class="quotelev1">&gt; probe why/where such value was got. I just modified Module.pm to  
</span><br>
<span class="quotelev1">&gt; work around the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_host MTT]# !diff
</span><br>
<span class="quotelev1">&gt; diff primary/Module.pm ./lib/MTT/Module.pm
</span><br>
<span class="quotelev1">&gt; 31a32,38
</span><br>
<span class="quotelev2">&gt; &gt; if ($module =~ m/Simple/)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; if (length($module) &gt; 26)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; ($module) = $module =~ m/(.*::Simple)/;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This should not be necessary; we all run MTT with the Specify::Simple  
<br>
module every night.
<br>
<p><span class="quotelev1">&gt; With this workaround, $str was changed back to  
</span><br>
<span class="quotelev1">&gt; &quot;MTT::Test::Specify::Simple&quot;, and mtt script could continue. Ater  
</span><br>
<span class="quotelev1">&gt; all the tests finished, I found some MTT cases failed. For those  
</span><br>
<span class="quotelev1">&gt; failed cases, who will probe it? Or how can I probe them? Here list  
</span><br>
<span class="quotelev1">&gt; one section that returned error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | command | mpirun -np 2 --mca btl tcp,self --prefix /LTC/MTT/ 
</span><br>
<span class="quotelev1">&gt; installs/Urs4/install       |
</span><br>
<span class="quotelev1">&gt; | | t_win |
</span><br>
<span class="quotelev1">&gt; | duration | 0 seconds |
</span><br>
<span class="quotelev1">&gt; | exit_value | 1 |
</span><br>
<span class="quotelev1">&gt; | result_message | Failed; exit status: 1 |
</span><br>
<span class="quotelev1">&gt; | result_stdout | WIN_BASIC: passed |
</span><br>
<span class="quotelev1">&gt; | | WIN_OVERLAP: passed |
</span><br>
<span class="quotelev1">&gt; | | WIN_OVERLAP2: passed |
</span><br>
<span class="quotelev1">&gt; | | WIN_OVERLAP3: passed |
</span><br>
<span class="quotelev1">&gt; | | LOCK_EPOCH: passed |
</span><br>
<span class="quotelev1">&gt; | | FENCE_EPOCH: failed |
</span><br>
<span class="quotelev1">&gt; | | MISC: passed |
</span><br>
<span class="quotelev1">&gt; | | POST_EPOCH: passed |
</span><br>
<span class="quotelev1">&gt; | | WIN_BASIC: passed |
</span><br>
<span class="quotelev1">&gt; | | WIN_OVERLAP: passed |
</span><br>
<span class="quotelev1">&gt; | | WIN_OVERLAP2: passed |
</span><br>
<span class="quotelev1">&gt; | | WIN_OVERLAP3: passed |
</span><br>
<span class="quotelev1">&gt; | | LOCK_EPOCH: passed |
</span><br>
<span class="quotelev1">&gt; | | FENCE_EPOCH: passed |
</span><br>
<span class="quotelev1">&gt; | | MISC: passed |
</span><br>
<span class="quotelev1">&gt; | | POST_EPOCH: passed |
</span><br>
<span class="quotelev1">&gt; | | t_win: FAILED 1 |
</span><br>
<span class="quotelev1">&gt; | start_timestamp | Tue May 13 04:54:59 2008 |
</span><br>
<span class="quotelev1">&gt; | test_name | t_win |
</span><br>
<span class="quotelev1">&gt; | variant | 2 |
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>These results are reported to the central OMPI MTT database where we  
<br>
get e-mail reports each morning.
<br>
<p>This particular failure is a known issue; I believe there's a trac  
<br>
ticket open on it.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0547.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Previous message:</strong> <a href="0545.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>In reply to:</strong> <a href="0545.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0557.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Reply:</strong> <a href="0557.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
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
