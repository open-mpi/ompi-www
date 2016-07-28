<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Nov 19 13:04:09 2005" -->
<!-- isoreceived="20051119180409" -->
<!-- sent="Sat, 19 Nov 2005 13:04:01 -0500" -->
<!-- isosent="20051119180401" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Configuring port" -->
<!-- id="355e80696d79963388e0a3c7831631a7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="33E8158F-3147-4B35-9C17-C4AE3BF8F535_at_columbia.edu" -->
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
<strong>Date:</strong> 2005-11-19 13:04:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0370.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0368.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>In reply to:</strong> <a href="0355.php">Enrique Curchitser: "Re: [O-MPI users] Configuring port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0378.php">Enrique Curchitser: "Re: [O-MPI users] Configuring port"</a>
<li><strong>Reply:</strong> <a href="0378.php">Enrique Curchitser: "Re: [O-MPI users] Configuring port"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Enrique --
<br>
<p>I also recently added a section to the FAQ about TCP optimization.  
<br>
It's a bit sparse at the moment, but please feel free to pester us with 
<br>
questions -- whenever we see good questions, we add them to the FAQ!
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tuning">http://www.open-mpi.org/faq/?category=tuning</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp">http://www.open-mpi.org/faq/?category=tcp</a>
<br>
<p>Be sure to look at the TCP BTL parameters that are available:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_info --param btl tcp
<br>
<p>Many of them are still lacking descriptions, so, again, feel free to 
<br>
pester us with questions.  :-)
<br>
<p><p>On Nov 16, 2005, at 5:23 PM, Enrique Curchitser wrote:
<br>
<p><span class="quotelev1">&gt; Thank you.  It did the trick!  Now on to optimizing the communications
</span><br>
<span class="quotelev1">&gt; over gig-ethernet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _________________
</span><br>
<span class="quotelev1">&gt; Enrique Curchitser
</span><br>
<span class="quotelev1">&gt; ec605_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 16, 2005, at 4:29 PM, Troy Telford wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 16 Nov 2005 14:16:20 -0700, Enrique Curchitser
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ec605_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I put together a small cluster (4 computers) which has one head node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that sees the world
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and 3 that are on a private network.  If I want to use the head node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (which has 2 NICs)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as part of the ring, how do I tell it to go over the NIC that is part
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the private network?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In mpich, there is a modification to the hostfile, but I did not see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any such thing with OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's an entry from an earlier post to this list (in the archives)
</span><br>
<span class="quotelev2">&gt;&gt; that I
</span><br>
<span class="quotelev2">&gt;&gt; believe applies:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2005/11/0337.php">http://www.open-mpi.org/community/lists/users/2005/11/0337.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0370.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0368.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>In reply to:</strong> <a href="0355.php">Enrique Curchitser: "Re: [O-MPI users] Configuring port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0378.php">Enrique Curchitser: "Re: [O-MPI users] Configuring port"</a>
<li><strong>Reply:</strong> <a href="0378.php">Enrique Curchitser: "Re: [O-MPI users] Configuring port"</a>
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
