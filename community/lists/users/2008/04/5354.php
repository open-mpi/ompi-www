<?
$subject_val = "Re: [OMPI users] submitted job stops";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  9 16:41:37 2008" -->
<!-- isoreceived="20080409204137" -->
<!-- sent="Wed, 9 Apr 2008 16:41:29 -0400" -->
<!-- isosent="20080409204129" -->
<!-- name="Mark Kosmowski" -->
<!-- email="mark.kosmowski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] submitted job stops" -->
<!-- id="c84311bb0804091341y70388c3bm2b83b4efd1a39b42_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] submitted job stops" -->
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
<strong>Subject:</strong> Re: [OMPI users] submitted job stops<br>
<strong>From:</strong> Mark Kosmowski (<em>mark.kosmowski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-09 16:41:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5355.php">Reuti: "Re: [OMPI users] submitted job stops"</a>
<li><strong>Previous message:</strong> <a href="5353.php">Danesh Daroui: "Re: [OMPI users] submitted job stops"</a>
<li><strong>Maybe in reply to:</strong> <a href="5341.php">Danesh Daroui: "[OMPI users] submitted job stops"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would try specifically allowing only the network interface if it is
<br>
eth0 (or eth1, etc) on each node.  Reconfigure the nodes if needed so
<br>
that each interface is the same eth number for this.
<br>
<p>I had this same issue occur and I think it was because some of my
<br>
nodes had one network for the ompi communications and another to the
<br>
internet.  I told my nodes to only use eth0 (the ompi network) and all
<br>
was better.
<br>
<p>The command option to do this is in the FAQ*.  Alternatively, you can
<br>
search the mailing list for my last name - a different poster here was
<br>
kind enough to spell out exactly what to do.
<br>
<p>* here is a link to the FAQ section:
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
<p>Quickly test with the hostname command to make sure the problem is
<br>
solved.  I tried running the hostname command from each node to make
<br>
sure everything was fixed on my system.
<br>
<p>Good luck!
<br>
<p><span class="quotelev1">&gt; Message: 8
</span><br>
<span class="quotelev1">&gt; Date: Wed, 09 Apr 2008 22:17:59 +0200
</span><br>
<span class="quotelev1">&gt; From: Danesh Daroui &lt;Danesh.D_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] submitted job stops
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;47FD2477.1010109_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark Kosmowski skrev:
</span><br>
<span class="quotelev2">&gt; &gt; Danesh:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Have you tried &quot;mpirun -np 4 --hostfile hosts hostname&quot; to verify that
</span><br>
<span class="quotelev2">&gt; &gt; ompi is working?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run &quot;mpirun -np 4 --hostfile hosts hostname&quot; same thing happens
</span><br>
<span class="quotelev1">&gt; and it just hangs. Can it be a clue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you remote access from each node to each other node?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Yes all nodes can have access to each other via SSH and can login
</span><br>
<span class="quotelev1">&gt; without being prompted for password.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If any node has more than 1 network device, are you using the ompi
</span><br>
<span class="quotelev2">&gt; &gt; options to specify which device to use?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each node has one network interface which works properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Danesh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Good luck,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mark
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5355.php">Reuti: "Re: [OMPI users] submitted job stops"</a>
<li><strong>Previous message:</strong> <a href="5353.php">Danesh Daroui: "Re: [OMPI users] submitted job stops"</a>
<li><strong>Maybe in reply to:</strong> <a href="5341.php">Danesh Daroui: "[OMPI users] submitted job stops"</a>
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
