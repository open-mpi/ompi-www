<?
$subject_val = "Re: [OMPI users] Printing information on computing nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 14 14:13:45 2011" -->
<!-- isoreceived="20111114191345" -->
<!-- sent="Mon, 14 Nov 2011 20:13:33 +0100" -->
<!-- isosent="20111114191333" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Printing information on computing nodes." -->
<!-- id="323D056D-4EAD-4898-B76D-A385F4296593_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAPnWtG+7ny_5igUT4rDoaVQtakt60MfdN+EUR+QwhW5dDbmD-w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Printing information on computing nodes.<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-14 14:13:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17770.php">Radomir Szewczyk: "Re: [OMPI users] Printing information on computing nodes."</a>
<li><strong>Previous message:</strong> <a href="17768.php">Radomir Szewczyk: "[OMPI users] Printing information on computing nodes."</a>
<li><strong>In reply to:</strong> <a href="17768.php">Radomir Szewczyk: "[OMPI users] Printing information on computing nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17770.php">Radomir Szewczyk: "Re: [OMPI users] Printing information on computing nodes."</a>
<li><strong>Reply:</strong> <a href="17770.php">Radomir Szewczyk: "Re: [OMPI users] Printing information on computing nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 14.11.2011 um 19:54 schrieb Radomir Szewczyk:
<br>
<p><span class="quotelev1">&gt; The problem I'm facing now is how to print information on computing nodes.
</span><br>
<span class="quotelev1">&gt; E.g. I've got 10 real computers wired into one cluster with pelicanhpc.
</span><br>
<span class="quotelev1">&gt; I need each one of them to print results independently on their
</span><br>
<span class="quotelev1">&gt; screens. How To?
</span><br>
<p>the stdout will be collected by the MPI library and all goes to the terminal where you started the mpiexec.
<br>
<p>First you have to decide, what do you mean by &quot;their screens&quot;. As MPI is started  by an SSH connection or alike, there is nothing where it can be output at the first place. They even maybe operated headless.
<br>
<p>Otherwise: is there X11 running on all the nodes, or would it help to write something to the local virtual console like /dev/vcs7 or /dev/console in a text based session?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; It may be an easy task, but I'm new to this and didn't find proper info.
</span><br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt; Radomir Szewczyk
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
<li><strong>Next message:</strong> <a href="17770.php">Radomir Szewczyk: "Re: [OMPI users] Printing information on computing nodes."</a>
<li><strong>Previous message:</strong> <a href="17768.php">Radomir Szewczyk: "[OMPI users] Printing information on computing nodes."</a>
<li><strong>In reply to:</strong> <a href="17768.php">Radomir Szewczyk: "[OMPI users] Printing information on computing nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17770.php">Radomir Szewczyk: "Re: [OMPI users] Printing information on computing nodes."</a>
<li><strong>Reply:</strong> <a href="17770.php">Radomir Szewczyk: "Re: [OMPI users] Printing information on computing nodes."</a>
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
