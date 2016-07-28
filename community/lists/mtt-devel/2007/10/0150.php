<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct  5 02:26:11 2007" -->
<!-- isoreceived="20071005062611" -->
<!-- sent="Fri, 5 Oct 2007 08:26:08 +0200" -->
<!-- isosent="20071005062608" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT server error (user: iu)" -->
<!-- id="84323CE9-AE77-42CE-AA99-DD119984B3F7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6D7CB788-1F46-44C9-B21B-72677C223B42_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-10-05 02:26:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0151.php">Jeff Squyres: "Re: [MTT devel] Differing DoCommand::Cmd return values depending on caller"</a>
<li><strong>Previous message:</strong> <a href="0149.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: iu)"</a>
<li><strong>In reply to:</strong> <a href="0149.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: iu)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
K; thanks.
<br>
<p>As usual, when people start using new MTT features, they use them in  
<br>
new/unique ways that we hadn't thought of...  ;-)
<br>
<p><p>On Oct 5, 2007, at 2:48 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; I just lengthened the size of the 'launcher' value to 128 chars.
</span><br>
<span class="quotelev1">&gt; Hopefully that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the process I noticed a 'stuck' postgres select that was from
</span><br>
<span class="quotelev1">&gt; yesterday sometime. The only way to get rid of it was to restart the
</span><br>
<span class="quotelev1">&gt; postgres server. All looks well now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 4, 2007, at 7:40 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just got this from IU. Looks like BigRed is using a script for
</span><br>
<span class="quotelev2">&gt;&gt; launch. Should I make the 'laucher' field a bit larger?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 4, 2007, at 7:19 PM, jjhursey_at_[hidden] wrote:
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
<span class="quotelev3">&gt;&gt;&gt; 	('247', '/N/u/mpiteam/BigRed/local/bin/dompich', 'loadleveler',
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '', '', '2')
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
<li><strong>Next message:</strong> <a href="0151.php">Jeff Squyres: "Re: [MTT devel] Differing DoCommand::Cmd return values depending on caller"</a>
<li><strong>Previous message:</strong> <a href="0149.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: iu)"</a>
<li><strong>In reply to:</strong> <a href="0149.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: iu)"</a>
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
