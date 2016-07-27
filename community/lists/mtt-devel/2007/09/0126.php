<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 24 17:13:46 2007" -->
<!-- isoreceived="20070924211346" -->
<!-- sent="Mon, 24 Sep 2007 17:13:31 -0400" -->
<!-- isosent="20070924211331" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT server error (user: uh)" -->
<!-- id="59205BB4-1D28-4BCF-8516-0A6EFBFE0028_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FA331CB4-5B6A-4FDB-9FA6-463CBAAB2CED_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-24 17:13:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0127.php">Jeff Squyres: "[MTT devel] if whatami is missing..."</a>
<li><strong>Previous message:</strong> <a href="0125.php">Jeff Squyres: "Re: [MTT devel] Opening the web site...?"</a>
<li><strong>In reply to:</strong> <a href="0108.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0131.php">Mohamad Chaarawi: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mohamad --
<br>
<p>Did you have a chance to look at this?
<br>
<p><p>On Sep 19, 2007, at 7:30 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; That's weird; I don't know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mohamad: can you send a snipit of your INI file that sets up the  
</span><br>
<span class="quotelev1">&gt; value &quot;run_random_hostname_patterns.pl&quot;?  I'm curious to see how  
</span><br>
<span class="quotelev1">&gt; it's propagating down into the resource_manager value...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 18, 2007, at 8:43 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is weird. How could the script &quot;./wrappers/
</span><br>
<span class="quotelev2">&gt;&gt; run_random_hostname_patterns.pl&quot; be submitted as the 'launcher' to
</span><br>
<span class="quotelev2">&gt;&gt; the database? I thought submit.php would only get valid launchers
</span><br>
<span class="quotelev2">&gt;&gt; from the client?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 18, 2007, at 8:05 PM, jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SQL QUERY: INSERT INTO test_run_command
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	(test_run_command_id, launcher, resource_mgr, parameters, network,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test_run_network_id) VALUES
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	('132', './wrappers/run_random_hostname_patterns.pl', 'slurm', '',
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '', '2')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SQL ERROR: ERROR:  value too long for type character varying(16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SQL ERROR:
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0127.php">Jeff Squyres: "[MTT devel] if whatami is missing..."</a>
<li><strong>Previous message:</strong> <a href="0125.php">Jeff Squyres: "Re: [MTT devel] Opening the web site...?"</a>
<li><strong>In reply to:</strong> <a href="0108.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0131.php">Mohamad Chaarawi: "Re: [MTT devel] MTT server error (user: uh)"</a>
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
