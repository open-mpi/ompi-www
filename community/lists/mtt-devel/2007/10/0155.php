<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  8 02:31:02 2007" -->
<!-- isoreceived="20071008063102" -->
<!-- sent="Mon, 8 Oct 2007 08:30:33 +0200" -->
<!-- isosent="20071008063033" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT server error (user: cisco)" -->
<!-- id="6B545CE0-D795-4C5A-96C3-078E33DE134D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D7351C8F-209C-45BE-97F3-BB786DBBBE7C_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-10-08 02:30:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0156.php">Jeff Squyres: "[MTT devel] Adding libnbc performance Performance Analyze module for MTT"</a>
<li><strong>Previous message:</strong> <a href="0154.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>In reply to:</strong> <a href="0154.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0180.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ya -- sorry about that.  I was writing the libNBC performance  
<br>
analyzer at the time and had the parser wrong.  More info coming  
<br>
about libNBC shortly -- it outputs a whole pile of data that we're  
<br>
currently not tracking.  We'll need some DB/reporter/client-side work  
<br>
to track it all (analogous to, but easier than what we were  
<br>
previously talking about for SKaMPI).
<br>
<p><p>On Oct 7, 2007, at 7:33 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; FYI:
</span><br>
<span class="quotelev1">&gt; I just got this error from MTT submit.php. It seems that the
</span><br>
<span class="quotelev1">&gt; message_size array is a bit corrupted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 7, 2007, at 11:25 AM, jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SQL QUERY: INSERT INTO latency_bandwidth
</span><br>
<span class="quotelev2">&gt;&gt; 	(latency_bandwidth_id, message_size, latency_min, latency_avg,
</span><br>
<span class="quotelev2">&gt;&gt; latency_max, bandwidth_min, bandwidth_avg, bandwidth_max) VALUES
</span><br>
<span class="quotelev2">&gt;&gt; 	('138988', '{on,with,NBC_Test,each,
</span><br>
<span class="quotelev2">&gt;&gt; 1,2,4,8,16,32,64,128,256,512,1024,2048,4096,8192,16384,32768,65536,13 
</span><br>
<span class="quotelev2">&gt;&gt; 1
</span><br>
<span class="quotelev2">&gt;&gt; 072,262144,524288,1048576}', DEFAULT, '{,,,the,
</span><br>
<span class="quotelev2">&gt;&gt; 9.06,9.06,10.01,10.01,9.06,10.01,9.06,10.01,10.01,10.97,11.92,11.92,2 
</span><br>
<span class="quotelev2">&gt;&gt; 3
</span><br>
<span class="quotelev2">&gt;&gt; .13,29.09,43.15,67.95,120.88,216.96,471.83,1347.06,4244.09}',
</span><br>
<span class="quotelev2">&gt;&gt; DEFAULT, DEFAULT, DEFAULT, DEFAULT)
</span><br>
<span class="quotelev2">&gt;&gt; SQL ERROR: ERROR:  invalid input syntax for integer: &quot;on&quot;
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
<li><strong>Next message:</strong> <a href="0156.php">Jeff Squyres: "[MTT devel] Adding libnbc performance Performance Analyze module for MTT"</a>
<li><strong>Previous message:</strong> <a href="0154.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>In reply to:</strong> <a href="0154.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0180.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
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
