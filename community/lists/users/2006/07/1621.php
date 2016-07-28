<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 14 10:40:37 2006" -->
<!-- isoreceived="20060714144037" -->
<!-- sent="Fri, 14 Jul 2006 10:07:45 -0400" -->
<!-- isosent="20060714140745" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] auto detect hosts" -->
<!-- id="55D2C336-44A8-4013-B88D-1215CB487FBB_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9C57_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-14 10:07:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1622.php">Brock Palen: "Re: [OMPI users] BTL devices"</a>
<li><strong>Previous message:</strong> <a href="1620.php">Michael Kluskens: "[OMPI users] BTL devices"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1499.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] auto detect hosts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 29, 2006, at 1:31 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I'm running on a cluster of dual-opterons running Debian Linux.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just using &quot;mpirun -np 4 hostname&quot; somehow OpenMPI located the second
</span><br>
<span class="quotelev2">&gt;&gt; dual-opteron in the stack of machines but no more than that,
</span><br>
<span class="quotelev2">&gt;&gt; regardless of how many processes I asked for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm surprised that it finds a second host at all if you don't  
</span><br>
<span class="quotelev1">&gt; specify a
</span><br>
<span class="quotelev1">&gt; hostfile (or have some batch scheduler that is specifying other  
</span><br>
<span class="quotelev1">&gt; hosts).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If Open MPI doesn't find any host specification at all, it simply uses
</span><br>
<span class="quotelev1">&gt; the name &quot;localhost&quot;.  That being said, it is possible to have a  
</span><br>
<span class="quotelev1">&gt; default
</span><br>
<span class="quotelev1">&gt; hostfile in $prefix/etc/openmpi-default-hostfile.  If you've added  
</span><br>
<span class="quotelev1">&gt; hosts
</span><br>
<span class="quotelev1">&gt; in there, Open MPI should use them by default (even if you didn't
</span><br>
<span class="quotelev1">&gt; specify anything on the command line).
</span><br>
<p>I discovered much later that apparently I had modified the default  
<br>
hostfile a long time ago.  This needs to be documented in a couple  
<br>
more places, obviously I read about it once or twice and then never  
<br>
saw that buried documentation again in related documentation.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1622.php">Brock Palen: "Re: [OMPI users] BTL devices"</a>
<li><strong>Previous message:</strong> <a href="1620.php">Michael Kluskens: "[OMPI users] BTL devices"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1499.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] auto detect hosts"</a>
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
