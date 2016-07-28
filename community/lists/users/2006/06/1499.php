<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 13:31:31 2006" -->
<!-- isoreceived="20060629173131" -->
<!-- sent="Thu, 29 Jun 2006 13:31:38 -0400" -->
<!-- isosent="20060629173138" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] auto detect hosts" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9C57_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] auto detect hosts" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-29 13:31:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1500.php">openmpi-user: "Re: [OMPI users] users Digest, Vol 318, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="1498.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<li><strong>Maybe in reply to:</strong> <a href="1449.php">Michael Kluskens: "[OMPI users] auto detect hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1621.php">Michael Kluskens: "Re: [OMPI users] auto detect hosts"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1621.php">Michael Kluskens: "Re: [OMPI users] auto detect hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying.  Too much travel, and too much e-mail!
<br>
:-) 
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev1">&gt; Sent: Monday, June 19, 2006 4:56 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] auto detect hosts
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How does OpenMPI auto-detect available hosts?
</span><br>
<p>It doesn't.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; I'm running on a cluster of dual-opterons running Debian Linux.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just using &quot;mpirun -np 4 hostname&quot; somehow OpenMPI located the second
</span><br>
<span class="quotelev1">&gt; dual-opteron in the stack of machines but no more than that,
</span><br>
<span class="quotelev1">&gt; regardless of how many processes I asked for.
</span><br>
<p>I'm surprised that it finds a second host at all if you don't specify a
<br>
hostfile (or have some batch scheduler that is specifying other hosts).
<br>
<p>If Open MPI doesn't find any host specification at all, it simply uses
<br>
the name &quot;localhost&quot;.  That being said, it is possible to have a default
<br>
hostfile in $prefix/etc/openmpi-default-hostfile.  If you've added hosts
<br>
in there, Open MPI should use them by default (even if you didn't
<br>
specify anything on the command line).
<br>
<p>Is that the case, perchance?
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1500.php">openmpi-user: "Re: [OMPI users] users Digest, Vol 318, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="1498.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<li><strong>Maybe in reply to:</strong> <a href="1449.php">Michael Kluskens: "[OMPI users] auto detect hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1621.php">Michael Kluskens: "Re: [OMPI users] auto detect hosts"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1621.php">Michael Kluskens: "Re: [OMPI users] auto detect hosts"</a>
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
