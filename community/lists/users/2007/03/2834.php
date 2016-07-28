<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 19 07:23:47 2007" -->
<!-- isoreceived="20070319112347" -->
<!-- sent="Mon, 19 Mar 2007 07:23:44 -0400" -->
<!-- isosent="20070319112344" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted takes 100 percent cpu, how to avoid this??" -->
<!-- id="51430E51-B7A4-4FEF-8CDA-29BD26C637DA_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="575921.7425.qm_at_web35101.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-19 07:23:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2835.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 531, Issue 3"</a>
<li><strong>Previous message:</strong> <a href="2833.php">Bala: "Re: [OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
<li><strong>In reply to:</strong> <a href="2823.php">Bala: "[OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2838.php">Bala: "Re: [OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
<li><strong>Reply:</strong> <a href="2838.php">Bala: "Re: [OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bala,
<br>
<p>This is a known problem with the 1.1 series. The bad news is that I  
<br>
know of no fix for this, though many people work around this problem  
<br>
by running a cleanup script after each unclean run. The good news is  
<br>
that the 1.2 series is MUCH better, though still not perfect. I would  
<br>
suggest trying out 1.2 and seeing if it works for you.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p>On Mar 17, 2007, at 9:58 AM, Bala wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;        we have installed 16 node Intel X86_64
</span><br>
<span class="quotelev1">&gt; dual CPU and dual core cluster( blade servers)
</span><br>
<span class="quotelev1">&gt; with OFED-1.1, that installs OpenMPI as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  we are able to run some sample programs also,
</span><br>
<span class="quotelev1">&gt; after few time when we run the sample and do
</span><br>
<span class="quotelev1">&gt; some Ctrl+C to stop the program we notice that
</span><br>
<span class="quotelev1">&gt; some &quot;orted&quot; is still running and takes 100% cpu
</span><br>
<span class="quotelev1">&gt; as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. why some times this &quot;orted&quot; process not stopped
</span><br>
<span class="quotelev1">&gt;    and how to avoid this??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. we can kill with -9 option, but the problem is
</span><br>
<span class="quotelev1">&gt;   while running various OpenMPI programs we can
</span><br>
<span class="quotelev1">&gt;   see each one has one &quot;orted&quot;, don't know
</span><br>
<span class="quotelev1">&gt;   which process is idle to kill.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Bala.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2835.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 531, Issue 3"</a>
<li><strong>Previous message:</strong> <a href="2833.php">Bala: "Re: [OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
<li><strong>In reply to:</strong> <a href="2823.php">Bala: "[OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2838.php">Bala: "Re: [OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
<li><strong>Reply:</strong> <a href="2838.php">Bala: "Re: [OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
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
