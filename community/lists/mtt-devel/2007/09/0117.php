<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Sep 22 11:07:20 2007" -->
<!-- isoreceived="20070922150720" -->
<!-- sent="Sat, 22 Sep 2007 11:07:06 -0400" -->
<!-- isosent="20070922150706" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT server error (user: cisco)" -->
<!-- id="61BA0E56-5354-4977-A06C-2009E38C3A72_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8F205C21-964C-4A72-A0C8-017C6192492B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-09-22 11:07:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0118.php">Jeff Squyres: "Re: [MTT devel] 2nd cut at MTT web site"</a>
<li><strong>Previous message:</strong> <a href="0116.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>In reply to:</strong> <a href="0116.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0154.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It could be that I was hitting ctrl-C for a bunch of my tests.
<br>
<p>Let's ignore unless it repeats; thanks for being diligent, though!
<br>
<p><p>On Sep 22, 2007, at 10:56 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; So I got two of these emails this morning. Any thoughts on why these
</span><br>
<span class="quotelev1">&gt; 2 latency/bandwidth submissions are failing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is with:
</span><br>
<span class="quotelev1">&gt; SQL ERROR: ERROR:  malformed array literal:
</span><br>
<span class="quotelev1">&gt; &quot;{136.36,124.59,124.58,124.61,124.74,124.52,124.57,137.98,124.62,124.6 
</span><br>
<span class="quotelev1">&gt; 9,
</span><br>
<span class="quotelev1">&gt; ,
</span><br>
<span class="quotelev1">&gt; 124.81,140.91,186.13,187.51,309.31,419.06,743.33,1574.05,3542.81,7342. 
</span><br>
<span class="quotelev1">&gt; 21
</span><br>
<span class="quotelev1">&gt; ,15831.27,38853.38,77511.53,130775.23}&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More specifically it is probably the empty array entry about 11
</span><br>
<span class="quotelev1">&gt; entries into the array (&quot;124.69,,124.81&quot;). Could this be the result
</span><br>
<span class="quotelev1">&gt; of an error that was not caught properly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 22, 2007, at 8:23 AM, jjhursey_at_[hidden] wrote:
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
<span class="quotelev2">&gt;&gt; 	('107215',
</span><br>
<span class="quotelev2">&gt;&gt; '{0,1,2,4,8,16,32,64,128,256,19024,512,1024,2048,4096,8192,16384,3276 
</span><br>
<span class="quotelev2">&gt;&gt; 8
</span><br>
<span class="quotelev2">&gt;&gt; ,65536,131072,262144,524288,1048576,2097152,4194304}',
</span><br>
<span class="quotelev2">&gt;&gt; '{135.69,124.04,124.28,124.20,124.40,124.27,124.17,124.29,124.26,124. 
</span><br>
<span class="quotelev2">&gt;&gt; 2
</span><br>
<span class="quotelev2">&gt;&gt; 9,5,124.40,140.17,185.32,187.23,307.94,418.52,741.56,1568.65,3537.90, 
</span><br>
<span class="quotelev2">&gt;&gt; 7
</span><br>
<span class="quotelev2">&gt;&gt; 314.73,15428.99,37013.45,68857.91,111194.49}',
</span><br>
<span class="quotelev2">&gt;&gt; '{136.36,124.59,124.58,124.61,124.74,124.52,124.57,137.98,124.62,124. 
</span><br>
<span class="quotelev2">&gt;&gt; 6
</span><br>
<span class="quotelev2">&gt;&gt; 9,,124.81,140.91,186.13,187.51,309.31,419.06,743.33,1574.05,3542.81,7 
</span><br>
<span class="quotelev2">&gt;&gt; 3
</span><br>
<span class="quotelev2">&gt;&gt; 42.21,15831.27,38853.38,77511.53,130775.23}',
</span><br>
<span class="quotelev2">&gt;&gt; '{137.07,125.04,125.02,125.07,125.17,124.93,124.93,151.80,125.04,125. 
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt; 8,,125.29,141.53,187.11,187.89,310.59,419.98,744.73,1580.83,3546.58,7 
</span><br>
<span class="quotelev2">&gt;&gt; 3
</span><br>
<span class="quotelev2">&gt;&gt; 71.56,16254.56,40249.37,87200.25,149653.98}', DEFAULT,
</span><br>
<span class="quotelev2">&gt;&gt; '{0.00,0.03,0.06,0.12,0.24,0.49,0.98,1.61,3.90,7.81,,15.59,27.60,41.7 
</span><br>
<span class="quotelev2">&gt;&gt; 5
</span><br>
<span class="quotelev2">&gt;&gt; ,
</span><br>
<span class="quotelev2">&gt;&gt; 83.16,100.61,148.82,167.85,158.14,140.98,135.66,123.04,99.38,91.74,10 
</span><br>
<span class="quotelev2">&gt;&gt; 6
</span><br>
<span class="quotelev2">&gt;&gt; .91}', DEFAULT)
</span><br>
<span class="quotelev2">&gt;&gt; SQL ERROR: ERROR:  malformed array literal:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;{136.36,124.59,124.58,124.61,124.74,124.52,124.57,137.98,124.62,124. 
</span><br>
<span class="quotelev2">&gt;&gt; 6
</span><br>
<span class="quotelev2">&gt;&gt; 9,,124.81,140.91,186.13,187.51,309.31,419.06,743.33,1574.05,3542.81,7 
</span><br>
<span class="quotelev2">&gt;&gt; 3
</span><br>
<span class="quotelev2">&gt;&gt; 42.21,15831.27,38853.38,77511.53,130775.23}&quot;
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
<li><strong>Next message:</strong> <a href="0118.php">Jeff Squyres: "Re: [MTT devel] 2nd cut at MTT web site"</a>
<li><strong>Previous message:</strong> <a href="0116.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>In reply to:</strong> <a href="0116.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0154.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
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
