<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 15 11:54:46 2007" -->
<!-- isoreceived="20070815155446" -->
<!-- sent="Wed, 15 Aug 2007 11:54:19 -0400" -->
<!-- isosent="20070815155419" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] redirecting stdin" -->
<!-- id="D9907BB8-6E4A-42B2-826E-628171D0F749_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46C32148.50101_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-08-15 11:54:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3865.php">Hor Meng Yoong: "[OMPI users] openMPI on openBSD, anyone?"</a>
<li><strong>Previous message:</strong> <a href="3863.php">Andrew Friedley: "Re: [OMPI users] redirecting stdin"</a>
<li><strong>In reply to:</strong> <a href="3863.php">Andrew Friedley: "Re: [OMPI users] redirecting stdin"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the web archives: moving this conversation to a higher-bandwidth  
<br>
medium... (telephone) :-)
<br>
<p><p>On Aug 15, 2007, at 11:52 AM, Andrew Friedley wrote:
<br>
<p><span class="quotelev1">&gt; Point away :)  Dunno if it's something I'll be able to do on my  
</span><br>
<span class="quotelev1">&gt; own, but
</span><br>
<span class="quotelev1">&gt; I'll give it a shot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You are hitting this bug:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="https://svn.open-mpi.org/trac/ompi/ticket/1047">https://svn.open-mpi.org/trac/ompi/ticket/1047</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have unfortunately not had time to dig into it :-(, but I'd be
</span><br>
<span class="quotelev2">&gt;&gt; happy to point you in the right direction...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 15, 2007, at 11:44 AM, Andrew Friedley wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm helping someone at LLNL get running with Open MPI, and the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; current
</span><br>
<span class="quotelev3">&gt;&gt;&gt; snag seems to be that stdin redirection doesnt work right.  A quick
</span><br>
<span class="quotelev3">&gt;&gt;&gt; look
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at the orterun manpage indicates something like this should work:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 1 cat &lt; foo.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I run just say on the head node without any slurm allocation,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works just the same as `cat &lt; foo.txt`.  But if I grab a one node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interactive slurm allocation, then run the same command again (cat
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should now be running out on the compute node), I get no output.  Is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this expected behavior?  I'm seeing this on a recent trunk build and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2.3 release.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andrew
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="3865.php">Hor Meng Yoong: "[OMPI users] openMPI on openBSD, anyone?"</a>
<li><strong>Previous message:</strong> <a href="3863.php">Andrew Friedley: "Re: [OMPI users] redirecting stdin"</a>
<li><strong>In reply to:</strong> <a href="3863.php">Andrew Friedley: "Re: [OMPI users] redirecting stdin"</a>
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
