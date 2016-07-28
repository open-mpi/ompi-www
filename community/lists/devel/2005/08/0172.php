<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 17 08:51:51 2005" -->
<!-- isoreceived="20050817135151" -->
<!-- sent="Wed, 17 Aug 2005 07:51:47 -0600" -->
<!-- isosent="20050817135147" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="430340F3.7080308_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9e94414e359dc6560a7412ac62b54ec6_at_open-mpi.org" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-17 08:51:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0173.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0171.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0171.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0173.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Sridhar,
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 17, 2005, at 8:23 AM, Sridhar Chirravuri wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Can someone reply to my mail please?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think you sent your first mail at 6:48am in my time zone (that is 
</span><br>
<span class="quotelev1">&gt; 4:48am Los Alamos time -- I strongly doubt that they are at work 
</span><br>
<span class="quotelev1">&gt; yet...); I'm still processing my mail from last night and am just now 
</span><br>
<span class="quotelev1">&gt; seeing your mail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Global software development is challenging.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Yes - as Jeff indicated it was just 7:00 am as I started catching
<br>
up on email - and then my laptop died...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Here is the output of sample MPI program which sends a char and recvs a
</span><br>
<span class="quotelev2">&gt;&gt;char.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[root_at_micrompi-1 ~]# mpirun -np 2 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;Could not join a running, existing universe
</span><br>
<span class="quotelev2">&gt;&gt;Establishing a new one named: default-universe-12913
</span><br>
<span class="quotelev2">&gt;&gt;[0,0,0] mca_oob_tcp_init: calling orte_gpr.subscribe
</span><br>
<span class="quotelev2">&gt;&gt;[0,0,0] mca_oob_tcp_init: calling orte_gpr.put(orte-job-0)
</span><br>
<span class="quotelev2">&gt;&gt;[snipped]
</span><br>
<span class="quotelev2">&gt;&gt;[0,0,0]-[0,0,1] mca_oob_tcp_send: tag 2
</span><br>
<span class="quotelev2">&gt;&gt;[0,0,0]-[0,0,1] mca_oob_tcp_send: tag 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
So, I'm assuming from your message that since pallas runs ok on
<br>
the same host - this case must be for multiple hosts?
<br>
<p>Looks like the oob connections are comming up.
<br>
Have you tried turning on the mvapi btl debug to see what's
<br>
going on? Try turning off the oob debug and running with:
<br>
<p>mpirun -np 2 -mca pml ob1 -mca btl_base_include self,mvapi -mca btl_base_debug 1 ./a.out
<br>
<p>Sorry this has been such a pain for you - let's see if the mvapi
<br>
debug points out anything.
<br>
<p>Thanks,
<br>
Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0173.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0171.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0171.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0173.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
