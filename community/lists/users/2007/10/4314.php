<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 20:56:06 2007" -->
<!-- isoreceived="20071025005606" -->
<!-- sent="Wed, 24 Oct 2007 20:55:57 -0400" -->
<!-- isosent="20071025005557" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Number of processes and number of the cores." -->
<!-- id="30B972A6-1524-4D86-A56E-4B760F2D3DAD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9bab5e7a0710231215n42ee4730v70f19227d6549eaf_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-10-24 20:55:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4315.php">Jeff Squyres: "Re: [OMPI users] xcode and ompi"</a>
<li><strong>Previous message:</strong> <a href="4313.php">Jeff Squyres: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>In reply to:</strong> <a href="4284.php">Siamak Riahi: "[OMPI users] Number of processes and number of the cores."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We don't really have this kind of fine-grained processor affinity  
<br>
control in Open MPI yet.
<br>
<p>Is there a reason you want to oversubscribe cores this way?  Open MPI  
<br>
assumes that each process should be as aggressive as possible in  
<br>
terms of performance -- spinning heavily until progress can be made  
<br>
on message passing, etc.
<br>
<p><p>On Oct 23, 2007, at 3:15 PM, Siamak Riahi wrote:
<br>
<p><span class="quotelev1">&gt; I have a question about using the open mpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to tie &quot;N&quot; number of processes to one core and &quot;M&quot; number of  
</span><br>
<span class="quotelev1">&gt; processes to another core. I want to know if open mpi is capable of  
</span><br>
<span class="quotelev1">&gt; doing that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siamak
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="4315.php">Jeff Squyres: "Re: [OMPI users] xcode and ompi"</a>
<li><strong>Previous message:</strong> <a href="4313.php">Jeff Squyres: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>In reply to:</strong> <a href="4284.php">Siamak Riahi: "[OMPI users] Number of processes and number of the cores."</a>
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
