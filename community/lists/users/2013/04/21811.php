<?
$subject_val = "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 28 06:11:34 2013" -->
<!-- isoreceived="20130428101134" -->
<!-- sent="Sun, 28 Apr 2013 12:10:46 +0200" -->
<!-- isosent="20130428101046" -->
<!-- name="Sebastian Rettenberger" -->
<!-- email="rettenbs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange &amp;quot;All-to-All&amp;quot; behavior" -->
<!-- id="1955003.O763IOqn1r_at_sarge.rettenberger.homelinux.net" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CA+3Wo4dT_Dwi74YnPP4L81LmYgahctCShArXiE3gBkdOVTryyg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange &quot;All-to-All&quot; behavior<br>
<strong>From:</strong> Sebastian Rettenberger (<em>rettenbs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-28 06:10:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21812.php">E.O.: "[OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Previous message:</strong> <a href="21810.php">George Bosilca: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>In reply to:</strong> <a href="21808.php">Stephan Wolf: "[OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21839.php">Number Cruncher: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>hast du das Problem nur mit OpenMPI oder auch mit anderen MPI Bibliotheken 
<br>
(z.B. MPICH2)
<br>
<p>Ansonsten kannst du auch mal probieren, ob du das All-to-all mit Collectives 
<br>
hin bekommst, z.B. Scatter oder Gatter.
<br>
<p>Viele Gr&#195;&#188;&#195;&#159;e
<br>
Sebastian
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have encountered really bad performance when all the nodes send data
</span><br>
<span class="quotelev1">&gt; to all the other nodes. I use Isend and Irecv with multiple
</span><br>
<span class="quotelev1">&gt; outstanding sends per node. I debugged the behavior and came to the
</span><br>
<span class="quotelev1">&gt; following conclusion: It seems that one sender locks out all other
</span><br>
<span class="quotelev1">&gt; senders for one receiver. This sender releases the receiver only when
</span><br>
<span class="quotelev1">&gt; there are no more sends posted or a node with lower rank, wants to
</span><br>
<span class="quotelev1">&gt; send to this node (deadlock prevention). As a consequence, node 0
</span><br>
<span class="quotelev1">&gt; sends all its data to all nodes, while all others are waiting, then
</span><br>
<span class="quotelev1">&gt; node 1 sends all the data, &#226;&#128;&#166;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the rationale behind this behaviour and can I change it by
</span><br>
<span class="quotelev1">&gt; some MCA parameter?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stephan
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

<br><p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21811/signature.asc">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21812.php">E.O.: "[OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Previous message:</strong> <a href="21810.php">George Bosilca: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>In reply to:</strong> <a href="21808.php">Stephan Wolf: "[OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21839.php">Number Cruncher: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
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
