<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 10:51:16 2007" -->
<!-- isoreceived="20071025145116" -->
<!-- sent="Thu, 25 Oct 2007 10:50:56 -0400" -->
<!-- isosent="20071025145056" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] nbcbench output format changed" -->
<!-- id="6495049D-CDB0-479C-B5EE-0B206137B951_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2E41C6C2-8385-4969-89FF-1271AF524D47_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-25 10:50:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0183.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: ibm)"</a>
<li><strong>Previous message:</strong> <a href="0181.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>In reply to:</strong> <a href="0181.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/01/0201.php">Ethan Mallove: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Torsten --
<br>
<p>It looks like the output format of nbcbench changed.  Why?
<br>
<p>I built the MTT plugin to accept output of the following format (this  
<br>
is what the output format was when we were in Paris):
<br>
<p>2 4096 4096 (3)  25.99 ::  14.07 | 12.16 50.07 11.21 7.87 (24.08)  
<br>
(-0.98/-0.80) 2.86 3.10 ::
<br>
<p>We were saving the 2nd and 9th tokens from the line (file size and  
<br>
total time).  However, from manually running nbcbench, I now see  
<br>
output like this:
<br>
<p>8 131072  :: 4656.79 ::
<br>
<p>Am I now supposed to be saving the 2nd and 4th tokens?
<br>
<p>When you change the output format, you need to tell me so that I can  
<br>
update the parser...   #$%#@$%@#$%#%$!!
<br>
<p><p><p>On Oct 25, 2007, at 9:24 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Hrm.  I wonder what is causing it...  I'll dig.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 25, 2007, at 9:23 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm still getting a flood of these every day. Jeff can you turn off
</span><br>
<span class="quotelev2">&gt;&gt; the source of this until you get a chance to fix it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 25, 2007, at 8:53 AM, jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SQL QUERY: INSERT INTO latency_bandwidth
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	(latency_bandwidth_id, message_size, latency_min, latency_avg,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latency_max, bandwidth_min, bandwidth_avg, bandwidth_max) VALUES
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	('180545',
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '{1,2,4,8,16,32,64,128,256,512,1024,2048,4096,8192,16384,32768,65536 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31072,262144,524288,1048576}', DEFAULT, '{,,,,,,,,,,,,,,,,,,,,}',
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DEFAULT, DEFAULT, DEFAULT, DEFAULT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SQL ERROR: ERROR:  malformed array literal: &quot;{,,,,,,,,,,,,,,,,,,,,}&quot;
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
<li><strong>Next message:</strong> <a href="0183.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: ibm)"</a>
<li><strong>Previous message:</strong> <a href="0181.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>In reply to:</strong> <a href="0181.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/01/0201.php">Ethan Mallove: "Re: [MTT devel] MTT server error (user: cisco)"</a>
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
