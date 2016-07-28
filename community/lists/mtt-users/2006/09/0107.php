<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 26 15:17:36 2006" -->
<!-- isoreceived="20060926191736" -->
<!-- sent="Tue, 26 Sep 2006 15:17:31 -0400" -->
<!-- isosent="20060926191731" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Post run result submission" -->
<!-- id="20060926191730.GC12177_at_sr1-ubur-07.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87B78BE5-2317-458C-873E-A11C510112BA_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-09-26 15:17:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0108.php">Josh Hursey: "Re: [MTT users] Post run result submission"</a>
<li><strong>Previous message:</strong> <a href="0106.php">Josh Hursey: "[MTT users] Post run result submission"</a>
<li><strong>In reply to:</strong> <a href="0106.php">Josh Hursey: "[MTT users] Post run result submission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0108.php">Josh Hursey: "Re: [MTT users] Post run result submission"</a>
<li><strong>Reply:</strong> <a href="0108.php">Josh Hursey: "Re: [MTT users] Post run result submission"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Sep/26/2006 02:01:41PM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; I'm setting up MTT on BigRed at IU, and due to some visibility  
</span><br>
<span class="quotelev1">&gt; requirements of the compute nodes I segment the MTT operations.  
</span><br>
<span class="quotelev1">&gt; Currently I have a perl script that does all the svn and wget  
</span><br>
<span class="quotelev1">&gt; interactions from the login node, then compiles and runs on the  
</span><br>
<span class="quotelev1">&gt; compute nodes. This all seems to work fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I am wondering how to get the textfile results that were  
</span><br>
<span class="quotelev1">&gt; generated back to the MTT database once the run has finished.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>If you run the &quot;MPI Install&quot;, &quot;Test build&quot;, and &quot;Test run&quot;
<br>
sections from the same machine (call it the
<br>
&quot;Install-Build-Run&quot; node), I would think you could then
<br>
additionaly run the &quot;Reporter: IU Database&quot; section. Or can
<br>
you not do the HTTP POST from Install-Build-Run node? 
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; I know HLRS deals with this situation, is there a supported way of  
</span><br>
<span class="quotelev1">&gt; doing this yet or is it a future work item still?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently I have a method to send a summary email to our team after  
</span><br>
<span class="quotelev1">&gt; the results are generated, so this isn't a show stopper for IU or  
</span><br>
<span class="quotelev1">&gt; anything, just something so we can share our results with the rest of  
</span><br>
<span class="quotelev1">&gt; the team.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
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
<li><strong>Next message:</strong> <a href="0108.php">Josh Hursey: "Re: [MTT users] Post run result submission"</a>
<li><strong>Previous message:</strong> <a href="0106.php">Josh Hursey: "[MTT users] Post run result submission"</a>
<li><strong>In reply to:</strong> <a href="0106.php">Josh Hursey: "[MTT users] Post run result submission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0108.php">Josh Hursey: "Re: [MTT users] Post run result submission"</a>
<li><strong>Reply:</strong> <a href="0108.php">Josh Hursey: "Re: [MTT users] Post run result submission"</a>
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
