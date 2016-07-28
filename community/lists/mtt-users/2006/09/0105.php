<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 20 17:16:35 2006" -->
<!-- isoreceived="20060920211635" -->
<!-- sent="Wed, 20 Sep 2006 17:19:02 -0400" -->
<!-- isosent="20060920211902" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Timeouts for specific tests" -->
<!-- id="20060920211901.GE14716_at_burl-ct-v440-2" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3631228C-0D22-47D5-B805-DC1903835FEE_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-09-20 17:19:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0106.php">Josh Hursey: "[MTT users] Post run result submission"</a>
<li><strong>Previous message:</strong> <a href="0104.php">Josh Hursey: "[MTT users] Timeouts for specific tests"</a>
<li><strong>In reply to:</strong> <a href="0104.php">Josh Hursey: "[MTT users] Timeouts for specific tests"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not sure if this will work, but here goes (correct me if I'm
<br>
wrong, Jeff).
<br>
<p>Try appending the following to the intel section of your ini (put
<br>
the names of the tests you expect to take 5 min, in a file named
<br>
'supposed_to_take_5_min' next to your other test lists):
<br>
<p>simple_timeout:tests = &amp;find_executables(&quot;src/&quot; . &quot;&amp;cat(&quot;supposed_to_take_5_min&quot;)&quot;)
<br>
simple_timeout:np = &amp;env_max_procs()
<br>
simple_timeout:timeout = 300
<br>
simple_timeout:exclusive = 1
<br>
<p>-Ethan
<br>
<p>On Wed, Sep/20/2006 01:04:55PM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Is it possible to specify a timeout for a specific test in a test  
</span><br>
<span class="quotelev1">&gt; suite in addition to the test suite as a whole?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example some of the Intel tests take about 6 minutes to complete  
</span><br>
<span class="quotelev1">&gt; normally, but the rest of the tests usually finish in a minute or so.  
</span><br>
<span class="quotelev1">&gt; I'd like to keep the 1 min tests from waiting 6 min when they fail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just trying to tune our runs a bit here at IU. Not a bit deal if it  
</span><br>
<span class="quotelev1">&gt; can't at the moment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="0106.php">Josh Hursey: "[MTT users] Post run result submission"</a>
<li><strong>Previous message:</strong> <a href="0104.php">Josh Hursey: "[MTT users] Timeouts for specific tests"</a>
<li><strong>In reply to:</strong> <a href="0104.php">Josh Hursey: "[MTT users] Timeouts for specific tests"</a>
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
