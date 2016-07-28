<?
$subject_val = "Re: [OMPI users] BLCR support not building on 1.5.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 27 16:14:43 2011" -->
<!-- isoreceived="20110527201443" -->
<!-- sent="Fri, 27 May 2011 16:14:37 -0400" -->
<!-- isosent="20110527201437" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLCR support not building on 1.5.3" -->
<!-- id="6F97E245-2D8E-480E-9D7A-4BA88725869B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="197028.51776.qm_at_web121816.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] BLCR support not building on 1.5.3<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-27 16:14:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16653.php">Yevgeny Kliteynik: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Previous message:</strong> <a href="16651.php">Bill Johnstone: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>In reply to:</strong> <a href="16651.php">Bill Johnstone: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm glad that worked.
<br>
<p>I understand the confusion. The configure output could be better. It shouldn't be too difficult to cleanup. I filed a ticket so we don't forget about this issue. The ticket is linked below if you are interested:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2807">https://svn.open-mpi.org/trac/ompi/ticket/2807</a>
<br>
<p>Next time I cycle back to the C/R functionality I'll try to address it, but if someone else beats me to it then that should be reflected in the ticket.
<br>
<p>-- Josh
<br>
<p>On May 27, 2011, at 3:54 PM, Bill Johnstone wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for this.  I've replied further below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt;&gt; From: Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; What other configure options are you passing to Open MPI? Specifically the 
</span><br>
<span class="quotelev2">&gt;&gt; configure test will always fail if '--with-ft=cr' is not specified - by 
</span><br>
<span class="quotelev2">&gt;&gt; default Open MPI will only build the BLCR component if C/R FT is requested by 
</span><br>
<span class="quotelev2">&gt;&gt; the user.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This was it!  Now the BLCR supports builds in just fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I may offer some feedback:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I think &quot;Checkpoint/Restart&quot;, I don't immediately think &quot;Fault Tolerance&quot;; rather, I'm interested in it for a better alternative to suspend/resume.  So I had *no* idea turning on the &quot;ft&quot; configure option this was a prerequisite for BLCR support to compile from just reading the configure help, configure output, docs, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd like to request that this be made easier to spot.  At a minimum, the configure -help output could mention this when it gets to talking about BLCR, or C/R in general.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additionally, in general when configuring components, it would be nice in the config logs if there was a way to get more details about the tests (and why they failed) than just &quot;can compile...no&quot;.  This may require more invasive changes - not being super-knowledgeable about configure, I don't know how much work this would be.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lastly, the standard Open MPI documentation (particularly the FAQ) could be updated in the C/R or BLCR sections to reflect the need for the &quot;--with-ft=cr&quot; argument.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, I really appreciate the assistance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16653.php">Yevgeny Kliteynik: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Previous message:</strong> <a href="16651.php">Bill Johnstone: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>In reply to:</strong> <a href="16651.php">Bill Johnstone: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
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
