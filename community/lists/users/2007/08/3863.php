<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 15 11:52:46 2007" -->
<!-- isoreceived="20070815155246" -->
<!-- sent="Wed, 15 Aug 2007 08:52:40 -0700" -->
<!-- isosent="20070815155240" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] redirecting stdin" -->
<!-- id="46C32148.50101_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="104EE965-6A0D-4A1F-A284-6178985FE9C8_at_cisco.com" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-15 11:52:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3864.php">Jeff Squyres: "Re: [OMPI users] redirecting stdin"</a>
<li><strong>Previous message:</strong> <a href="3862.php">Jeff Squyres: "Re: [OMPI users] redirecting stdin"</a>
<li><strong>In reply to:</strong> <a href="3862.php">Jeff Squyres: "Re: [OMPI users] redirecting stdin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3864.php">Jeff Squyres: "Re: [OMPI users] redirecting stdin"</a>
<li><strong>Reply:</strong> <a href="3864.php">Jeff Squyres: "Re: [OMPI users] redirecting stdin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Point away :)  Dunno if it's something I'll be able to do on my own, but 
<br>
I'll give it a shot.
<br>
<p>Andrew
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; You are hitting this bug:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/ompi/ticket/1047">https://svn.open-mpi.org/trac/ompi/ticket/1047</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have unfortunately not had time to dig into it :-(, but I'd be  
</span><br>
<span class="quotelev1">&gt; happy to point you in the right direction...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 15, 2007, at 11:44 AM, Andrew Friedley wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm helping someone at LLNL get running with Open MPI, and the current
</span><br>
<span class="quotelev2">&gt;&gt; snag seems to be that stdin redirection doesnt work right.  A quick  
</span><br>
<span class="quotelev2">&gt;&gt; look
</span><br>
<span class="quotelev2">&gt;&gt; at the orterun manpage indicates something like this should work:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 cat &lt; foo.txt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I run just say on the head node without any slurm allocation, this
</span><br>
<span class="quotelev2">&gt;&gt; works just the same as `cat &lt; foo.txt`.  But if I grab a one node
</span><br>
<span class="quotelev2">&gt;&gt; interactive slurm allocation, then run the same command again (cat
</span><br>
<span class="quotelev2">&gt;&gt; should now be running out on the compute node), I get no output.  Is
</span><br>
<span class="quotelev2">&gt;&gt; this expected behavior?  I'm seeing this on a recent trunk build and
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.3 release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Andrew
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3864.php">Jeff Squyres: "Re: [OMPI users] redirecting stdin"</a>
<li><strong>Previous message:</strong> <a href="3862.php">Jeff Squyres: "Re: [OMPI users] redirecting stdin"</a>
<li><strong>In reply to:</strong> <a href="3862.php">Jeff Squyres: "Re: [OMPI users] redirecting stdin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3864.php">Jeff Squyres: "Re: [OMPI users] redirecting stdin"</a>
<li><strong>Reply:</strong> <a href="3864.php">Jeff Squyres: "Re: [OMPI users] redirecting stdin"</a>
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
