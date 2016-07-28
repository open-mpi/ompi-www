<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 19 07:30:34 2007" -->
<!-- isoreceived="20070919113034" -->
<!-- sent="Wed, 19 Sep 2007 07:30:24 -0400" -->
<!-- isosent="20070919113024" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT server error (user: uh)" -->
<!-- id="FA331CB4-5B6A-4FDB-9FA6-463CBAAB2CED_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F596C79F-0810-4E4A-8742-1C6E84CD7A72_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-09-19 07:30:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0109.php">Ethan Mallove: "Re: [MTT devel] MTT server error (user: sun)"</a>
<li><strong>Previous message:</strong> <a href="0107.php">Jeff Squyres: "Re: [MTT devel] sanity check a reporter commit"</a>
<li><strong>In reply to:</strong> <a href="0105.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0126.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Reply:</strong> <a href="0126.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's weird; I don't know.
<br>
<p>Mohamad: can you send a snipit of your INI file that sets up the  
<br>
value &quot;run_random_hostname_patterns.pl&quot;?  I'm curious to see how it's  
<br>
propagating down into the resource_manager value...
<br>
<p><p>On Sep 18, 2007, at 8:43 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; This is weird. How could the script &quot;./wrappers/
</span><br>
<span class="quotelev1">&gt; run_random_hostname_patterns.pl&quot; be submitted as the 'launcher' to
</span><br>
<span class="quotelev1">&gt; the database? I thought submit.php would only get valid launchers
</span><br>
<span class="quotelev1">&gt; from the client?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 18, 2007, at 8:05 PM, jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SQL QUERY: INSERT INTO test_run_command
</span><br>
<span class="quotelev2">&gt;&gt; 	(test_run_command_id, launcher, resource_mgr, parameters, network,
</span><br>
<span class="quotelev2">&gt;&gt; test_run_network_id) VALUES
</span><br>
<span class="quotelev2">&gt;&gt; 	('132', './wrappers/run_random_hostname_patterns.pl', 'slurm', '',
</span><br>
<span class="quotelev2">&gt;&gt; '', '2')
</span><br>
<span class="quotelev2">&gt;&gt; SQL ERROR: ERROR:  value too long for type character varying(16)
</span><br>
<span class="quotelev2">&gt;&gt; SQL ERROR:
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0109.php">Ethan Mallove: "Re: [MTT devel] MTT server error (user: sun)"</a>
<li><strong>Previous message:</strong> <a href="0107.php">Jeff Squyres: "Re: [MTT devel] sanity check a reporter commit"</a>
<li><strong>In reply to:</strong> <a href="0105.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0126.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Reply:</strong> <a href="0126.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
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
