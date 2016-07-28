<?
$subject_val = "Re: [OMPI users] Thread as MPI process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 02:26:32 2010" -->
<!-- isoreceived="20100921062632" -->
<!-- sent="Tue, 21 Sep 2010 08:26:27 +0200" -->
<!-- isosent="20100921062627" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Thread as MPI process" -->
<!-- id="AANLkTikWt4W8-eHuTtowX0=qnJmraNBNgn2FP1VEW7R+_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimW30_fSYgn3pDmtLR7SeBdu7W7HkBGi2x72b7J_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Thread as MPI process<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-21 02:26:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14251.php">Ashley Pittman: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Previous message:</strong> <a href="14249.php">ETHAN DENEAULT: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>In reply to:</strong> <a href="14247.php">Mikael Lavoie: "[OMPI users] Thread as MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14251.php">Ashley Pittman: "Re: [OMPI users] Thread as MPI process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I don't know if i correctly understand what you need, but have you
<br>
already tried  MPI_Comm_spawn?
<br>
<p>Jody
<br>
<p>On Mon, Sep 20, 2010 at 11:24 PM, Mikael Lavoie &lt;mikael.lavoie_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wanna know if it exist a implementation that permit to run a single host
</span><br>
<span class="quotelev1">&gt; process on the master of the cluster, that will then spawn 1 process per -np
</span><br>
<span class="quotelev1">&gt; X defined thread at the host specified in the host list. The host will then
</span><br>
<span class="quotelev1">&gt; act as a syncronized sender/collecter of the work done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would really be the saint-graal of the MPI implementation to me, for the
</span><br>
<span class="quotelev1">&gt; use i wanna make of it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So i wait your answer, hoping that this exist,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mikael Lavoie
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14251.php">Ashley Pittman: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Previous message:</strong> <a href="14249.php">ETHAN DENEAULT: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>In reply to:</strong> <a href="14247.php">Mikael Lavoie: "[OMPI users] Thread as MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14251.php">Ashley Pittman: "Re: [OMPI users] Thread as MPI process"</a>
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
