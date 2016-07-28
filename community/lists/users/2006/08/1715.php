<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  3 08:04:21 2006" -->
<!-- isoreceived="20060803120421" -->
<!-- sent="Thu, 3 Aug 2006 14:04:11 +0200" -->
<!-- isosent="20060803120411" -->
<!-- name="Gunnar Johansson" -->
<!-- email="gunjo81_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI application fails with errno 113" -->
<!-- id="c8c0af0608030504r1e5460d1hf6b08a222848689a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C0F75AD8.15B73%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Gunnar Johansson (<em>gunjo81_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-03 08:04:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1716.php">Jeff Squyres: "Re: [OMPI users] MPI application fails with errno 113"</a>
<li><strong>Previous message:</strong> <a href="1714.php">Jeff Squyres: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>In reply to:</strong> <a href="1713.php">Jeff Squyres: "Re: [OMPI users] MPI application fails with errno 113"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1716.php">Jeff Squyres: "Re: [OMPI users] MPI application fails with errno 113"</a>
<li><strong>Reply:</strong> <a href="1716.php">Jeff Squyres: "Re: [OMPI users] MPI application fails with errno 113"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thank you very much for your answer, but I'm very embarassed to say
<br>
that some of our machines in our setup still had a firewall enabled.
<br>
Which of course I should have verified in the first place, before
<br>
posting the question here.
<br>
<p>Still, I'm impressed that OpenMPI still made it through the firewalls
<br>
to some extent!
<br>
<p>Thanks,  Gunnar Johansson
<br>
<p>On 8/3/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Greetings Gunnar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you provide all the information listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, what version are you using?  We had some bugs in the TCP
</span><br>
<span class="quotelev1">&gt; connection code dealing with multiple networks that were recently fixed.
</span><br>
<span class="quotelev1">&gt; Could you try the latest 1.1.1 beta and see if that fixes your problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.1/">http://www.open-mpi.org/software/ompi/v1.1/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/25/06 11:13 AM, &quot;Gunnar Johansson&quot; &lt;gunjo81_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We have set up OpenMPI over a set of 5 machines (2 dual CPU) and get this
</span><br>
<span class="quotelev2">&gt; &gt; error when trying to start an MPI application with more than 5 processes:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,2][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt; &gt; connect() failed with errno=113
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anything below 5 proc. works great. We have set the btl_tcp_if_include and
</span><br>
<span class="quotelev2">&gt; &gt; and the oob_tcp_include to the correct interface to use on each machine.
</span><br>
<span class="quotelev2">&gt; &gt; Anything else we can try / diagnostics to run to provide more info about the
</span><br>
<span class="quotelev2">&gt; &gt; problem?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, Gunnar Johansson
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="1716.php">Jeff Squyres: "Re: [OMPI users] MPI application fails with errno 113"</a>
<li><strong>Previous message:</strong> <a href="1714.php">Jeff Squyres: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>In reply to:</strong> <a href="1713.php">Jeff Squyres: "Re: [OMPI users] MPI application fails with errno 113"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1716.php">Jeff Squyres: "Re: [OMPI users] MPI application fails with errno 113"</a>
<li><strong>Reply:</strong> <a href="1716.php">Jeff Squyres: "Re: [OMPI users] MPI application fails with errno 113"</a>
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
