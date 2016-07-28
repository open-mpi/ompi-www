<?
$subject_val = "Re: [OMPI users] Job hangs when daemon does not report back from remote machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  9 15:29:26 2009" -->
<!-- isoreceived="20090209202926" -->
<!-- sent="Tue, 10 Feb 2009 09:29:17 +1300" -->
<!-- isosent="20090209202917" -->
<!-- name="Kersey Black" -->
<!-- email="kblack_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Job hangs when daemon does not report back from remote machine" -->
<!-- id="652E9AF3-841D-42B6-BB08-0A51A2646D44_at_jsd.claremont.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4443612-EC7B-4D1A-9715-1F83EFE0C372_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Job hangs when daemon does not report back from remote machine<br>
<strong>From:</strong> Kersey Black (<em>kblack_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-09 15:29:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8000.php">Joe Griffin: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>Previous message:</strong> <a href="7998.php">Iannetti, Anthony C. (GRC-RTB0): "[OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>In reply to:</strong> <a href="7997.php">Ralph Castain: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks much for all the help.
<br>
I will work to wall things off, but as the means of doing that is not  
<br>
obvious with the way the network is configured, I will also be  
<br>
watchful for new versions which might provide options for this  
<br>
situation.
<br>
<p>Cheers, Kersey
<br>
<p>On Feb 10, 2009, at 2:54 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; The default launcher is ssh - the &quot;rsh&quot; things you see are the name  
</span><br>
<span class="quotelev1">&gt; of the particular component, not the name of the actual command  
</span><br>
<span class="quotelev1">&gt; being used. That launcher looks for &quot;ssh&quot; first, and then falls back  
</span><br>
<span class="quotelev1">&gt; to &quot;rsh&quot; if ssh isn't found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI currently doesn't support restricted port ranges. We are  
</span><br>
<span class="quotelev1">&gt; working on a new release that does, but it won't be out for a few  
</span><br>
<span class="quotelev1">&gt; weeks. Until that time, my only suggestion would be to look at  
</span><br>
<span class="quotelev1">&gt; removing the firewall on every node in favor of a firewall on the  
</span><br>
<span class="quotelev1">&gt; outside of the cluster. I'm not sure any other solution is available  
</span><br>
<span class="quotelev1">&gt; just yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8000.php">Joe Griffin: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>Previous message:</strong> <a href="7998.php">Iannetti, Anthony C. (GRC-RTB0): "[OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>In reply to:</strong> <a href="7997.php">Ralph Castain: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
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
