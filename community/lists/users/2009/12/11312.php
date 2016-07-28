<?
$subject_val = "Re: [OMPI users] Program deadlocks, on simple send/recv loop";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 11:15:38 2009" -->
<!-- isoreceived="20091201161538" -->
<!-- sent="Tue, 01 Dec 2009 16:15:30 +0000" -->
<!-- isosent="20091201161530" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program deadlocks, on simple send/recv loop" -->
<!-- id="1259684130.3532.293.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="13E7FC1A-8EB2-4163-ADC4-9A77437033D4_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program deadlocks, on simple send/recv loop<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 11:15:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11313.php">Jurgen Heymann: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<li><strong>Previous message:</strong> <a href="11311.php">Brock Palen: "[OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="11311.php">Brock Palen: "[OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11373.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11373.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-12-01 at 10:46 -0500, Brock Palen wrote:
<br>
<span class="quotelev1">&gt; The attached code, is an example where openmpi/1.3.2 will lock up, if  
</span><br>
<span class="quotelev1">&gt; ran on 48 cores, of IB (4 cores per node),
</span><br>
<span class="quotelev1">&gt; The code loops over recv from all processors on rank 0 and sends from  
</span><br>
<span class="quotelev1">&gt; all other ranks, as far as I know this should work, and I can't see  
</span><br>
<span class="quotelev1">&gt; why not.
</span><br>
<span class="quotelev1">&gt; Note yes I know we can do the same thing with a gather, this is a  
</span><br>
<span class="quotelev1">&gt; simple case to demonstrate the issue.
</span><br>
<span class="quotelev1">&gt; Note that if I increase the openib eager limit, the program runs,  
</span><br>
<span class="quotelev1">&gt; which normally means improper MPI, but I can't on my own figure out  
</span><br>
<span class="quotelev1">&gt; the problem with this code.
</span><br>
<p>What are you increasing the eager limit from and too?  There is a
<br>
moderate amount of data flowing and as the receives are made
<br>
synchronously and in order it could be that you there are several
<br>
thousand unexpected messages arriving before the one you are looking for
<br>
which will lead to long receive queues and a need to buffer lots of
<br>
data.
<br>
<p><span class="quotelev1">&gt; Any input on why code like this locks up.
</span><br>
<p>If you ran padb against this code when it had locked up you should be
<br>
able to get some more information, in particular the message queues for
<br>
rank zero.  Hopefully this information would be useful.
<br>
<p><a href="http://padb.pittman.org.uk/full-report.html">http://padb.pittman.org.uk/full-report.html</a>
<br>
<p>Ashley Pittman.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11313.php">Jurgen Heymann: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<li><strong>Previous message:</strong> <a href="11311.php">Brock Palen: "[OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="11311.php">Brock Palen: "[OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11373.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11373.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
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
