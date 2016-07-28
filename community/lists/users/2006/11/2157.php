<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  8 10:18:16 2006" -->
<!-- isoreceived="20061108151816" -->
<!-- sent="Wed, 8 Nov 2006 08:18:03 -0700" -->
<!-- isosent="20061108151803" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] are there any gotchas to running over myrinet" -->
<!-- id="DF66E4D5-3B35-4F6B-BF82-BD53084A9083_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="829768.85728.qm_at_web30303.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-08 10:18:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2158.php">Eric Thibodeau: "[OMPI users] Running in a heterogeneous environment (Opteron Head + Athlon nodes)"</a>
<li><strong>Previous message:</strong> <a href="2156.php">shane kennedy: "[OMPI users] are there any gotchas to running over myrinet"</a>
<li><strong>In reply to:</strong> <a href="2156.php">shane kennedy: "[OMPI users] are there any gotchas to running over myrinet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2159.php">shane kennedy: "Re: [OMPI users] are there any gotchas to running over myrinet"</a>
<li><strong>Reply:</strong> <a href="2159.php">shane kennedy: "Re: [OMPI users] are there any gotchas to running over myrinet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 8, 2006, at 8:06 AM, shane kennedy wrote:
<br>
<p><span class="quotelev1">&gt; i've run my mm5 weather modeling app over mpich gig-e
</span><br>
<span class="quotelev1">&gt; &amp; myrinet, &amp; open-mpi gig-e.  when i tried open-mpi
</span><br>
<span class="quotelev1">&gt; over myrinet, i was able to compile &amp; run w/o issue,
</span><br>
<span class="quotelev1">&gt; but i get no net traffic over the myrinet switch.  the
</span><br>
<span class="quotelev1">&gt; job cranks up the cpu's but never completes.  i'm
</span><br>
<span class="quotelev1">&gt; using the myrinet MX driver.  i have the myrinet libs
</span><br>
<span class="quotelev1">&gt; set in both LD_LIBRARY_PATH &amp; the ld.so.conf file.
</span><br>
<span class="quotelev1">&gt; any advice/suggestions would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt; i've listed my compile options below:
</span><br>
<p>Did you build the MX driver?  Unless MX is in one of the compiler  
<br>
search paths, you'll likely need to add the configure argument --with- 
<br>
mx=&lt;PATH TO MX&gt; when building Open MPI.  You can determine whether  
<br>
you have MX support in your current Open MPI build by running the  
<br>
&quot;ompi_info&quot; command.  If you see a line that includes btl: mx, then  
<br>
you have MX support and something else is going on.  Otherwise, the  
<br>
issue is building MX support into your copy of Open MPI.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2158.php">Eric Thibodeau: "[OMPI users] Running in a heterogeneous environment (Opteron Head + Athlon nodes)"</a>
<li><strong>Previous message:</strong> <a href="2156.php">shane kennedy: "[OMPI users] are there any gotchas to running over myrinet"</a>
<li><strong>In reply to:</strong> <a href="2156.php">shane kennedy: "[OMPI users] are there any gotchas to running over myrinet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2159.php">shane kennedy: "Re: [OMPI users] are there any gotchas to running over myrinet"</a>
<li><strong>Reply:</strong> <a href="2159.php">shane kennedy: "Re: [OMPI users] are there any gotchas to running over myrinet"</a>
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
