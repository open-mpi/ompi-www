<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 11:47:17 2007" -->
<!-- isoreceived="20070710154717" -->
<!-- sent="Tue, 10 Jul 2007 11:46:34 -0400" -->
<!-- isosent="20070710154634" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Textfile Reporter" -->
<!-- id="20070710154633.GB18600_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200707091807.51493.tprins_at_cs.indiana.edu" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 11:46:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0351.php">Tim Prins: "Re: [MTT users] Textfile Reporter"</a>
<li><strong>Previous message:</strong> <a href="0349.php">Tim Prins: "[MTT users] Textfile Reporter"</a>
<li><strong>In reply to:</strong> <a href="0349.php">Tim Prins: "[MTT users] Textfile Reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0351.php">Tim Prins: "Re: [MTT users] Textfile Reporter"</a>
<li><strong>Reply:</strong> <a href="0351.php">Tim Prins: "Re: [MTT users] Textfile Reporter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whoops! I didn't realize anyone was using that Textfile
<br>
module. We can resurrect that if you'd like (call it
<br>
ParseableTextfile).
<br>
<p>There's also the INIFile Reporter. That might be your best
<br>
bet, since there's a Config::INIFiles CPAN module. (Your
<br>
wrappers are in Perl, right?) Though wouldn't it be even
<br>
easier if there were a PerlDumper Reporter module so you
<br>
could read in the data *directly* to your Perl wrappers?
<br>
Your wrapper would do no parsing then. E.g.,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;open(FILE, &quot;&lt; $file&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;undef $/;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$mtt_results = &lt;FILE&gt;;
<br>
<p>-Ethan
<br>
<p><p>On Mon, Jul/09/2007 06:07:51PM, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With the new version of MTT, the textfile report file
</span><br>
<span class="quotelev1">&gt; format changed to a more human readable format. Since we
</span><br>
<span class="quotelev1">&gt; here at IU use a script to parse this, it presents a bit
</span><br>
<span class="quotelev1">&gt; of a problem. I can update our script, but was wondering
</span><br>
<span class="quotelev1">&gt; how stable this new output format is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it will not be very stable, I was wondering if the
</span><br>
<span class="quotelev1">&gt; developers would consider adding a parseable textfile
</span><br>
<span class="quotelev1">&gt; output module. The easiest thing to do for this would be
</span><br>
<span class="quotelev1">&gt; to just import the old textfile module as a new parseable
</span><br>
<span class="quotelev1">&gt; module. I have tried this and it seems to work fine,
</span><br>
<span class="quotelev1">&gt; however there may be problems with this that I am unaware
</span><br>
<span class="quotelev1">&gt; of.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can deal with this either way, but just thought it might
</span><br>
<span class="quotelev1">&gt; make things easier to have a parseable format that is
</span><br>
<span class="quotelev1">&gt; relatively static, and a human readable format that can be
</span><br>
<span class="quotelev1">&gt; tweaked for useability as time goes by.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0351.php">Tim Prins: "Re: [MTT users] Textfile Reporter"</a>
<li><strong>Previous message:</strong> <a href="0349.php">Tim Prins: "[MTT users] Textfile Reporter"</a>
<li><strong>In reply to:</strong> <a href="0349.php">Tim Prins: "[MTT users] Textfile Reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0351.php">Tim Prins: "Re: [MTT users] Textfile Reporter"</a>
<li><strong>Reply:</strong> <a href="0351.php">Tim Prins: "Re: [MTT users] Textfile Reporter"</a>
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
