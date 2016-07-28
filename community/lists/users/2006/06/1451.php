<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 19 15:31:01 2006" -->
<!-- isoreceived="20060619193101" -->
<!-- sent="Mon, 19 Jun 2006 21:30:55 +0200" -->
<!-- isosent="20060619193055" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] auto detect hosts" -->
<!-- id="DD4FE55C-99A3-4542-BBCB-B55C64124CAF_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EC01C91C-52AA-462A-A8FB-C48B1BE15E09_at_ieee.org" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-19 15:30:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1452.php">Michael Kluskens: "Re: [OMPI users] auto detect hosts"</a>
<li><strong>Previous message:</strong> <a href="1450.php">Owen Stampflee: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>In reply to:</strong> <a href="1449.php">Michael Kluskens: "[OMPI users] auto detect hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1452.php">Michael Kluskens: "Re: [OMPI users] auto detect hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 19.06.2006 um 20:02 schrieb Michael Kluskens:
<br>
<p><span class="quotelev1">&gt; How does OpenMPI auto-detect available hosts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The master node has an internal ip of 10.0.0.0 and the second node
</span><br>
<span class="quotelev1">&gt; has an ip of 10.0.0.1 and a name of &quot;node02&quot; and &quot;node2&quot;
</span><br>
<p>I would suggest not to use .0 at all as a host address, as it usually  
<br>
refers to a subnet by convention. And having it in the same order as  
<br>
the name, avoids the offset. I mean .1 = node01, .2 = node02...
<br>
<p>I don't know, whether this is related in any way to the effect you  
<br>
observe.
<br>
<p>Cheers - Reuti
<br>
<p><p><span class="quotelev1">&gt; I've been unable to find a file that contains only the name of my
</span><br>
<span class="quotelev1">&gt; second node and not the others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm currently running OpenMPI 1.2a1r10297.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1452.php">Michael Kluskens: "Re: [OMPI users] auto detect hosts"</a>
<li><strong>Previous message:</strong> <a href="1450.php">Owen Stampflee: "Re: [OMPI users] Error Polling HP CQ Status on PPC64 LInux with IB"</a>
<li><strong>In reply to:</strong> <a href="1449.php">Michael Kluskens: "[OMPI users] auto detect hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1452.php">Michael Kluskens: "Re: [OMPI users] auto detect hosts"</a>
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
