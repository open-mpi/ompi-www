<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct  4 20:48:42 2007" -->
<!-- isoreceived="20071005004842" -->
<!-- sent="Thu, 4 Oct 2007 20:48:38 -0400" -->
<!-- isosent="20071005004838" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT server error (user: iu)" -->
<!-- id="6D7CB788-1F46-44C9-B21B-72677C223B42_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B798796B-0A8A-478D-9106-CCC4AE7C9E77_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-10-04 20:48:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0150.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: iu)"</a>
<li><strong>Previous message:</strong> <a href="0148.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: iu)"</a>
<li><strong>In reply to:</strong> <a href="0148.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: iu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0150.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: iu)"</a>
<li><strong>Reply:</strong> <a href="0150.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: iu)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just lengthened the size of the 'launcher' value to 128 chars.  
<br>
Hopefully that helps.
<br>
<p>In the process I noticed a 'stuck' postgres select that was from  
<br>
yesterday sometime. The only way to get rid of it was to restart the  
<br>
postgres server. All looks well now.
<br>
<p>-- Josh
<br>
<p>On Oct 4, 2007, at 7:40 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Just got this from IU. Looks like BigRed is using a script for
</span><br>
<span class="quotelev1">&gt; launch. Should I make the 'laucher' field a bit larger?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 4, 2007, at 7:19 PM, jjhursey_at_[hidden] wrote:
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
<span class="quotelev2">&gt;&gt; 	('247', '/N/u/mpiteam/BigRed/local/bin/dompich', 'loadleveler',
</span><br>
<span class="quotelev2">&gt;&gt; '', '', '2')
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0150.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: iu)"</a>
<li><strong>Previous message:</strong> <a href="0148.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: iu)"</a>
<li><strong>In reply to:</strong> <a href="0148.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: iu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0150.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: iu)"</a>
<li><strong>Reply:</strong> <a href="0150.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: iu)"</a>
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
