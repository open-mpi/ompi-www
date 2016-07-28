<?
$subject_val = "Re: [OMPI devel] delivering SIGUSR2 to an ompi process";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 14:04:24 2010" -->
<!-- isoreceived="20100825180424" -->
<!-- sent="Wed, 25 Aug 2010 13:04:15 -0500" -->
<!-- isosent="20100825180415" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] delivering SIGUSR2 to an ompi process" -->
<!-- id="4C755B1F.2050808_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D3369DA8-0026-4B81-970E-51363B959475_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] delivering SIGUSR2 to an ompi process<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 14:04:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8357.php">Ralph Castain: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Previous message:</strong> <a href="8355.php">Ralph Castain: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>In reply to:</strong> <a href="8355.php">Ralph Castain: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8357.php">Ralph Castain: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Reply:</strong> <a href="8357.php">Ralph Castain: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Reply:</strong> <a href="8375.php">Sylvain Jeaugey: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/25/2010 12:43 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Aug 25, 2010, at 11:26 AM, Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; On 08/25/2010 11:33 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We don't use it - mpirun traps it and then propagates it by default to all remote procs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; So I should send the signal to the mpirun process?
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; Yes - however, note that it will be propagated to ALL processes in the job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to only get the signal in one proc, you can just do a &quot;kill&quot; to that specific process on its node. We don't trap signals on the application procs themselves, so your proc can do whatever it wants with it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>Something is funny then.  When I send SIGUSR2 to the process itself -or- 
<br>
to the mpirun proc, it just kills the process and doesn't get to my sig 
<br>
handler.  And my same library works when I run the job using mvapich2.
<br>
<p>I'll keep digging.
<br>
<p>Thanks!
<br>
<p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8357.php">Ralph Castain: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Previous message:</strong> <a href="8355.php">Ralph Castain: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>In reply to:</strong> <a href="8355.php">Ralph Castain: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8357.php">Ralph Castain: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Reply:</strong> <a href="8357.php">Ralph Castain: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Reply:</strong> <a href="8375.php">Sylvain Jeaugey: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
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
