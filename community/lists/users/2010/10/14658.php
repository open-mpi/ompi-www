<?
$subject_val = "Re: [OMPI users] open MPI please recommend a debugger for open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 13:21:53 2010" -->
<!-- isoreceived="20101029172153" -->
<!-- sent="Fri, 29 Oct 2010 18:21:46 +0100" -->
<!-- isosent="20101029172146" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open MPI please recommend a debugger for open MPI" -->
<!-- id="61514DE3-631D-4B18-8DA3-0978360BEF17_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimMNi21ccaD0XuPC5kCEBRtqs08zMq_DNwBHYj3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] open MPI please recommend a debugger for open MPI<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-29 13:21:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14659.php">Jack Bryan: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Previous message:</strong> <a href="14657.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="14648.php">Jeremy Roberts: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14659.php">Jack Bryan: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Reply:</strong> <a href="14659.php">Jack Bryan: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 29 Oct 2010, at 12:06, Jeremy Roberts wrote:
<br>
<p><span class="quotelev1">&gt; I'd suggest looking into TotalView (<a href="http://www.totalviewtech.com">http://www.totalviewtech.com</a>) and/or DDT (<a href="http://www.allinea.com/">http://www.allinea.com/</a>).  I've used TotalView pretty extensively and found it to be pretty easy to use.  They are both commercial, however, and not cheap.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I know, there isn't a whole lot of open source support for parallel debugging. The Parallel Tools Platform of Eclipse claims to provide a parallel debugger, though I have yet to try it (<a href="http://www.eclipse.org/ptp/">http://www.eclipse.org/ptp/</a>).
</span><br>
<p>Jeremy has covered the graphical parallel debuggers that I'm aware of, for a different approach there is padb which isn't a &quot;parallel debugger&quot; in the traditional model but is able to show you the same type of information, it won't allow you to point-and-click through the source or single step through the code but it is lightweight and will show you the information which you need to know. 
<br>
<p>Padb needs to integrate with the resource manager, I know it works with pbs_pro but it seems there are a few issues on your system which is pbs (without the pro).  I can help you with this and work through the problems but only if you work with me and provide details of the integration, in particular I've sent you a version which has a small patch and some debug printfs added, if you could send me the output from this I'd be able to tell you if it was likely to work and how to go about making it do so.
<br>
<p>Ashley.
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
<li><strong>Next message:</strong> <a href="14659.php">Jack Bryan: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Previous message:</strong> <a href="14657.php">Reuti: "Re: [OMPI users] mixed versions of openmpi ? (1.4.1 and 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="14648.php">Jeremy Roberts: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14659.php">Jack Bryan: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Reply:</strong> <a href="14659.php">Jack Bryan: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
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
