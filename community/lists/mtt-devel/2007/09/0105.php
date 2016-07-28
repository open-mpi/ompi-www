<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 18 20:45:37 2007" -->
<!-- isoreceived="20070919004537" -->
<!-- sent="Tue, 18 Sep 2007 20:43:47 -0400" -->
<!-- isosent="20070919004347" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT server error (user: uh)" -->
<!-- id="F596C79F-0810-4E4A-8742-1C6E84CD7A72_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200709190005.l8J055WR031382_at_milliways.osl.iu.edu" -->
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
<strong>Date:</strong> 2007-09-18 20:43:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0106.php">Ethan Mallove: "Re: [MTT devel] sanity check a reporter commit"</a>
<li><strong>Previous message:</strong> <a href="0104.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: sun)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0108.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Reply:</strong> <a href="0108.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Maybe reply:</strong> <a href="0131.php">Mohamad Chaarawi: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0158.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is weird. How could the script &quot;./wrappers/ 
<br>
run_random_hostname_patterns.pl&quot; be submitted as the 'launcher' to  
<br>
the database? I thought submit.php would only get valid launchers  
<br>
from the client?
<br>
<p>-- Josh
<br>
<p>On Sep 18, 2007, at 8:05 PM, jjhursey_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SQL QUERY: INSERT INTO test_run_command
</span><br>
<span class="quotelev1">&gt; 	(test_run_command_id, launcher, resource_mgr, parameters, network,  
</span><br>
<span class="quotelev1">&gt; test_run_network_id) VALUES
</span><br>
<span class="quotelev1">&gt; 	('132', './wrappers/run_random_hostname_patterns.pl', 'slurm', '',  
</span><br>
<span class="quotelev1">&gt; '', '2')
</span><br>
<span class="quotelev1">&gt; SQL ERROR: ERROR:  value too long for type character varying(16)
</span><br>
<span class="quotelev1">&gt; SQL ERROR:
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0106.php">Ethan Mallove: "Re: [MTT devel] sanity check a reporter commit"</a>
<li><strong>Previous message:</strong> <a href="0104.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: sun)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0108.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Reply:</strong> <a href="0108.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Maybe reply:</strong> <a href="0131.php">Mohamad Chaarawi: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0158.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
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
