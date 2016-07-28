<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 20:15:40 2007" -->
<!-- isoreceived="20071025001540" -->
<!-- sent="Wed, 24 Oct 2007 20:15:20 -0400" -->
<!-- isosent="20071025001520" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI::BOTTOM vs MPI_BOTTOM" -->
<!-- id="82E9DE65-FDED-4A2D-8732-4EAB4292CED5_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="470D7A06.4070108_at_utias.utoronto.ca" -->
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
<strong>Date:</strong> 2007-10-24 20:15:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4309.php">Jeff Squyres: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
<li><strong>Previous message:</strong> <a href="4307.php">Jorge Parra: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>In reply to:</strong> <a href="4195.php">Stephen Guzik: "[OMPI users] MPI::BOTTOM vs MPI_BOTTOM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow -- that has survived since LAM/MPI -- you're the first person to  
<br>
have ever noticed it.  :-)
<br>
<p>I *think* it's just a wrong type, but I'd prefer to file a ticket so  
<br>
that someone gives it a bit more than a cursory examination before  
<br>
making the change.
<br>
<p>Thanks for pointing it out!
<br>
<p><p>On Oct 10, 2007, at 9:19 PM, Stephen Guzik wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To the Devs. I just noticed that MPI::BOTTOM requires a cast. Not sure
</span><br>
<span class="quotelev1">&gt; if that was intended.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiling 'MPI::COMM_WORLD.Bcast(MPI::BOTTOM, 1, someDataType, 0);'
</span><br>
<span class="quotelev1">&gt; results in:
</span><br>
<span class="quotelev1">&gt; error: invalid conversion from &#145;const void*&#146; to &#145;void*&#146;
</span><br>
<span class="quotelev1">&gt; error: initializing argument 1 of &#145;virtual void MPI::Comm::Bcast 
</span><br>
<span class="quotelev1">&gt; (void*,
</span><br>
<span class="quotelev1">&gt; int, const MPI::Datatype&amp;, int) const&#146;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_BOTTOM, on the other hand, works without a cast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stephen
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4309.php">Jeff Squyres: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
<li><strong>Previous message:</strong> <a href="4307.php">Jorge Parra: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>In reply to:</strong> <a href="4195.php">Stephen Guzik: "[OMPI users] MPI::BOTTOM vs MPI_BOTTOM"</a>
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
