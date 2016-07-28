<?
$subject_val = "Re: [OMPI users] Printing information on computing nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 14 14:18:20 2011" -->
<!-- isoreceived="20111114191820" -->
<!-- sent="Mon, 14 Nov 2011 20:18:16 +0100" -->
<!-- isosent="20111114191816" -->
<!-- name="Radomir Szewczyk" -->
<!-- email="radomir.szewczyk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Printing information on computing nodes." -->
<!-- id="CAPnWtGLGTnhZ2AberK_JFqxtX4DdWoy85hOn7D5VWvFcT_+pwQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="323D056D-4EAD-4898-B76D-A385F4296593_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Radomir Szewczyk (<em>radomir.szewczyk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-14 14:18:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17771.php">Ralph Castain: "Re: [OMPI users] Printing information on computing nodes."</a>
<li><strong>Previous message:</strong> <a href="17769.php">Reuti: "Re: [OMPI users] Printing information on computing nodes."</a>
<li><strong>In reply to:</strong> <a href="17769.php">Reuti: "Re: [OMPI users] Printing information on computing nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17771.php">Ralph Castain: "Re: [OMPI users] Printing information on computing nodes."</a>
<li><strong>Reply:</strong> <a href="17771.php">Ralph Castain: "Re: [OMPI users] Printing information on computing nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So there is no solution? e.g. my 2 computers that are computing nodes
<br>
and are placed in different room on different floors. And the target
<br>
user wants to monitor the progress of computation independently which
<br>
have to be printed on their lcd monitors.
<br>
<p>2011/11/14 Reuti &lt;reuti_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 14.11.2011 um 19:54 schrieb Radomir Szewczyk:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem I'm facing now is how to print information on computing nodes.
</span><br>
<span class="quotelev2">&gt;&gt; E.g. I've got 10 real computers wired into one cluster with pelicanhpc.
</span><br>
<span class="quotelev2">&gt;&gt; I need each one of them to print results independently on their
</span><br>
<span class="quotelev2">&gt;&gt; screens. How To?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the stdout will be collected by the MPI library and all goes to the terminal where you started the mpiexec.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First you have to decide, what do you mean by &quot;their screens&quot;. As MPI is started &#160;by an SSH connection or alike, there is nothing where it can be output at the first place. They even maybe operated headless.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Otherwise: is there X11 running on all the nodes, or would it help to write something to the local virtual console like /dev/vcs7 or /dev/console in a text based session?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It may be an easy task, but I'm new to this and didn't find proper info.
</span><br>
<span class="quotelev2">&gt;&gt; Cheers
</span><br>
<span class="quotelev2">&gt;&gt; Radomir Szewczyk
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="17771.php">Ralph Castain: "Re: [OMPI users] Printing information on computing nodes."</a>
<li><strong>Previous message:</strong> <a href="17769.php">Reuti: "Re: [OMPI users] Printing information on computing nodes."</a>
<li><strong>In reply to:</strong> <a href="17769.php">Reuti: "Re: [OMPI users] Printing information on computing nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17771.php">Ralph Castain: "Re: [OMPI users] Printing information on computing nodes."</a>
<li><strong>Reply:</strong> <a href="17771.php">Ralph Castain: "Re: [OMPI users] Printing information on computing nodes."</a>
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
