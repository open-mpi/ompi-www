<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 30 10:52:50 2007" -->
<!-- isoreceived="20070830145250" -->
<!-- sent="Thu, 30 Aug 2007 10:52:45 -0400" -->
<!-- isosent="20070830145245" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] reporter.php" -->
<!-- id="BA6E062F-CDB6-4452-BC2C-8F12817A11C4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F7B970F6-D6D7-4D0D-86BF-F75A54E0C0AC_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-30 10:52:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0051.php">Jeff Squyres: "Re: [MTT devel] reporter.php"</a>
<li><strong>Previous message:</strong> <a href="0049.php">Jeff Squyres: "Re: [MTT devel] reporter.php"</a>
<li><strong>In reply to:</strong> <a href="0049.php">Jeff Squyres: "Re: [MTT devel] reporter.php"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0051.php">Jeff Squyres: "Re: [MTT devel] reporter.php"</a>
<li><strong>Reply:</strong> <a href="0051.php">Jeff Squyres: "Re: [MTT devel] reporter.php"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just finished cleaning up the warnings in the stats php script.  
<br>
There is one warning I don't know how to fix:
<br>
-----------------
<br>
PHP Warning:  Missing argument 1 for print_ga() in /nfs/rontok/xraid/ 
<br>
data/osl/www/www.open-mpi.org/mtt/google-analytics.inc on line 6,  
<br>
referer: <a href="http://www.open-mpi.org/mtt/stats/index.php">http://www.open-mpi.org/mtt/stats/index.php</a>
<br>
-----------------
<br>
<p>I think this one is for Jeff.
<br>
<p>-- Josh
<br>
<p>On Aug 30, 2007, at 10:37 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; K.  I made the switch index.php &lt;--&gt; reporter.php.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 30, 2007, at 10:33 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FYI: I finished cleaning up the PHP submit script. It seems that
</span><br>
<span class="quotelev2">&gt;&gt; there are some associated issues with the stats PHP script. I'm
</span><br>
<span class="quotelev2">&gt;&gt; cleaning that up at the moment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 30, 2007, at 9:47 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I donno. But I would favor the index.php route as well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also FYI I'm working on the submit.php script a bit this morning.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doing 2 things:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   - Cleaning up error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   - Inserting a transaction to solve a race condition that was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; triggered last night by an IU submit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 30, 2007, at 9:39 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So is there any reason we have the reporter in reporter.php instead
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of index.php?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Or is this only for hysterical raisins?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For aesthetic reasons, I'd be in favor of moving reporter.php
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; back to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; index.php and putting in a redirect file from reporter.php back to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; index.php (or, more specifically, back to .).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0051.php">Jeff Squyres: "Re: [MTT devel] reporter.php"</a>
<li><strong>Previous message:</strong> <a href="0049.php">Jeff Squyres: "Re: [MTT devel] reporter.php"</a>
<li><strong>In reply to:</strong> <a href="0049.php">Jeff Squyres: "Re: [MTT devel] reporter.php"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0051.php">Jeff Squyres: "Re: [MTT devel] reporter.php"</a>
<li><strong>Reply:</strong> <a href="0051.php">Jeff Squyres: "Re: [MTT devel] reporter.php"</a>
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
