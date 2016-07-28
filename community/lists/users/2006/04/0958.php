<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  4 10:33:05 2006" -->
<!-- isoreceived="20060404143305" -->
<!-- sent="Tue, 4 Apr 2006 10:33:04 -0400" -->
<!-- isosent="20060404143304" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron" -->
<!-- id="37C6D8A4-3F5A-4247-8AA1-642F805D9A14_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44325AC1.50603_at_obs.ujf-grenoble.fr" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-04 10:33:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0959.php">Pak Lui: "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Previous message:</strong> <a href="0957.php">Francoise Roch: "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<li><strong>In reply to:</strong> <a href="0957.php">Francoise Roch: "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 4, 2006, at 7:38 AM, Francoise Roch wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Doh!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a problem that was fixed on the trunk long ago and it  
</span><br>
<span class="quotelev2">&gt;&gt; somehow never made it over to the v1.0 branch.  Brian ported it  
</span><br>
<span class="quotelev2">&gt;&gt; over earlier today; it'll be in the 1.0.2a13 that should be on the  
</span><br>
<span class="quotelev2">&gt;&gt; web site in a few hours.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's Ok for the reference problem, that was fixed in
</span><br>
<span class="quotelev1">&gt; the 1.0.2a13 version. But I still got the hieroglyphs when running
</span><br>
<span class="quotelev1">&gt; mpirun, and I still got the same error attempting to force interface
</span><br>
<span class="quotelev1">&gt; exclusion, with this new version.
</span><br>
<p>Ok, I figured out the hieroglyphs issue.  There was a bug fix on the  
<br>
trunk that never made it to the v1.0 branch with regards to standard  
<br>
I/O forwarding on Solaris.  I'm hoping that we can get this fix into  
<br>
1.0.2, but I'm not positive at this point.
<br>
<p>As for the btl_tcp_exclude issue, I'm not able to replicate that,  
<br>
either on our clusters or on your head node (I don't know if I have  
<br>
an account on the other machines in the cluster or not).  I'm  
<br>
wondering if this is a issue where OMPI is just failing to properly  
<br>
figure out your routing topology and is doing something silly.  Can  
<br>
you send the output of /sbin/ifconfig -a for the nodes you are trying  
<br>
to use?  Does the code work without the btl_tcp_if_exclude option?
<br>
<p><p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0959.php">Pak Lui: "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Previous message:</strong> <a href="0957.php">Francoise Roch: "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<li><strong>In reply to:</strong> <a href="0957.php">Francoise Roch: "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
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
