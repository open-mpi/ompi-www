<?
$subject_val = "Re: [OMPI users] Test works with 3 computers, but not 4?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 15:42:56 2009" -->
<!-- isoreceived="20090729194256" -->
<!-- sent="Wed, 29 Jul 2009 13:42:39 -0600" -->
<!-- isosent="20090729194239" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Test works with 3 computers, but not 4?" -->
<!-- id="F3427867-7830-48E4-893F-34E01BC856B1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c19fcadc0907291219w6f9912eep45d06e6dd9bf559b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Test works with 3 computers, but not 4?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-29 15:42:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10132.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Previous message:</strong> <a href="10130.php">David Doria: "[OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>In reply to:</strong> <a href="10130.php">David Doria: "[OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10132.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Reply:</strong> <a href="10132.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Reply:</strong> <a href="10134.php">Nifty Tom Mitchell: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds like perhaps IOF messages aren't getting relayed along the  
<br>
daemons. Note that the daemon on each node does have to be able to  
<br>
send TCP messages to all other nodes, not just mpirun.
<br>
<p>Couple of things you can do to check:
<br>
<p>1. -mca routed direct - this will send all messages direct instead of  
<br>
across the daemons
<br>
<p>2. --leave-session-attached - will allow you to see any errors  
<br>
reported by the daemons, including those from attempting to relay  
<br>
messages
<br>
<p>Ralph
<br>
<p>On Jul 29, 2009, at 1:19 PM, David Doria wrote:
<br>
<p><span class="quotelev1">&gt; I wrote a simple program to display &quot;hello world&quot; from each process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run this (126 - my machine, 122, and 123), everything works  
</span><br>
<span class="quotelev1">&gt; fine:
</span><br>
<span class="quotelev1">&gt; [doriad_at_daviddoria MPITest]$ mpirun -H  
</span><br>
<span class="quotelev1">&gt; 10.1.2.126,10.1.2.122,10.1.2.123 hello-mpi
</span><br>
<span class="quotelev2">&gt; &gt;From process 1 out of 3, Hello World!
</span><br>
<span class="quotelev1">&gt; From process 2 out of 3, Hello World!
</span><br>
<span class="quotelev1">&gt; From process 3 out of 3, Hello World!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run this (126 - my machine, 122, and 125), everything works  
</span><br>
<span class="quotelev1">&gt; fine:
</span><br>
<span class="quotelev1">&gt; [doriad_at_daviddoria MPITest]$ mpirun -H  
</span><br>
<span class="quotelev1">&gt; 10.1.2.126,10.1.2.122,10.1.2.125 hello-mpi
</span><br>
<span class="quotelev2">&gt; &gt;From process 2 out of 3, Hello World!
</span><br>
<span class="quotelev1">&gt; From process 1 out of 3, Hello World!
</span><br>
<span class="quotelev1">&gt; From process 3 out of 3, Hello World!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run this (126 - my machine, 123, and 125), everything works  
</span><br>
<span class="quotelev1">&gt; fine:
</span><br>
<span class="quotelev1">&gt; [doriad_at_daviddoria MPITest]$ mpirun -H  
</span><br>
<span class="quotelev1">&gt; 10.1.2.126,10.1.2.123,10.1.2.125 hello-mpi
</span><br>
<span class="quotelev2">&gt; &gt;From process 2 out of 3, Hello World!
</span><br>
<span class="quotelev1">&gt; From process 1 out of 3, Hello World!
</span><br>
<span class="quotelev1">&gt; From process 3 out of 3, Hello World!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when I run this (126 - my machine, 122, 123, AND 125), I  
</span><br>
<span class="quotelev1">&gt; get no output at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any way to check what is going on / does anyone know what  
</span><br>
<span class="quotelev1">&gt; that would happen? I'm using OpenMPI 1.3.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David
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
<li><strong>Next message:</strong> <a href="10132.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Previous message:</strong> <a href="10130.php">David Doria: "[OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>In reply to:</strong> <a href="10130.php">David Doria: "[OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10132.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Reply:</strong> <a href="10132.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Reply:</strong> <a href="10134.php">Nifty Tom Mitchell: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
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
