<?
$subject_val = "Re: [OMPI users] iof, readline, lost stdin buffering";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 20:34:57 2008" -->
<!-- isoreceived="20080403003457" -->
<!-- sent="Wed, 2 Apr 2008 20:34:48 -0400" -->
<!-- isosent="20080403003448" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] iof, readline, lost stdin buffering" -->
<!-- id="38829780-31F0-4225-BAF9-369B8B68E932_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e1ac6ccc0804011136le37e417g6eebe9385a6171d5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] iof, readline, lost stdin buffering<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 20:34:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5299.php">Pavel Shamis (Pasha): "Re: [OMPI users] multi-rail failover with IB"</a>
<li><strong>Previous message:</strong> <a href="5297.php">Patrick Heckeler: "[OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
<li><strong>In reply to:</strong> <a href="5287.php">Will Portnoy: "[OMPI users] iof, readline, lost stdin buffering"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5305.php">Will Portnoy: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>Reply:</strong> <a href="5305.php">Will Portnoy: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 1, 2008, at 2:36 PM, Will Portnoy wrote:
<br>
<span class="quotelev1">&gt; I am using MPI in a somewhat nontraditional fashion.  My program calls
</span><br>
<span class="quotelev1">&gt; MPI_Comm_Spawn to start worker processes that are driven by my
</span><br>
<span class="quotelev1">&gt; shell-like program.  My program uses readline for input, and is *not*
</span><br>
<span class="quotelev1">&gt; started by mpirun.
</span><br>
<p>Do you mean that you are starting it via ./my_mpi_program?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem where if I paste large amounts of text to my program
</span><br>
<span class="quotelev1">&gt; in my terminal, much of it is lost (where large is still less than
</span><br>
<span class="quotelev1">&gt; 1K).  Without MPI, this normal input buffering worked, and the program
</span><br>
<span class="quotelev1">&gt; processed the buffered input as it finished processing earlier input.
</span><br>
<p>Uck.  :-(
<br>
<p>What happens if you replace readline with a simple fgets() (or  
<br>
equivalent)?  That is, I'm curious to see if the problem is with  
<br>
OMPI's interaction with readline or our I/O forwarding in general.
<br>
<p><span class="quotelev1">&gt; I understand that the i/o forwarding system may not interact well with
</span><br>
<span class="quotelev1">&gt; the readline library, and I'm guessing this may the cause. (It's
</span><br>
<span class="quotelev1">&gt; probably not relevant, but I'm using putty as a ssh client to reach
</span><br>
<span class="quotelev1">&gt; the linux machine).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this likely?  I can try to put together a reproduction case, though
</span><br>
<span class="quotelev1">&gt; it will require quite a bit of work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to disable the iof system?  I only need stdin, stdout,
</span><br>
<span class="quotelev1">&gt; stderr from my non-mpirun-started program and none of the worker
</span><br>
<span class="quotelev1">&gt; processes.
</span><br>
<p>No, it is not possible to disable iof.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any other suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will
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
<li><strong>Next message:</strong> <a href="5299.php">Pavel Shamis (Pasha): "Re: [OMPI users] multi-rail failover with IB"</a>
<li><strong>Previous message:</strong> <a href="5297.php">Patrick Heckeler: "[OMPI users] error when sending a single 'long double' from an amd64 architecture to a ppc and a sparc machine"</a>
<li><strong>In reply to:</strong> <a href="5287.php">Will Portnoy: "[OMPI users] iof, readline, lost stdin buffering"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5305.php">Will Portnoy: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>Reply:</strong> <a href="5305.php">Will Portnoy: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
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
