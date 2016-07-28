<?
$subject_val = "Re: [OMPI users] Network connection check";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 10:41:49 2009" -->
<!-- isoreceived="20090723144149" -->
<!-- sent="Thu, 23 Jul 2009 10:41:45 -0400" -->
<!-- isosent="20090723144145" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Network connection check" -->
<!-- id="f869b68c0907230741v7cfe0cf4tb5469517ebcac2d5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="fa4af8200907230725g6454e11i4556fac7a088e800_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Network connection check<br>
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 10:41:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10064.php">Rolf Vandevaart: "Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10062.php">Craig Tierney: "[OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="10061.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10105.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<li><strong>Reply:</strong> <a href="10105.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The 'system' command will fork a separate process to run. If I
<br>
remember correctly, forking within MPI can lead to undefined behavior.
<br>
Can someone in OpenMPI development team clarify?
<br>
<p>What I don't understand is: why is your TCP network so unstable that
<br>
you are worried about reachability? For MPI to run, they should be
<br>
connected on a local switch with a high bandwidth interconnect and not
<br>
dispersed across the internet. Perhaps you should look at the
<br>
underlying cause of network instability. If your network is actually
<br>
stable, then your problem is only theoretical.
<br>
<p>Also, keep in mind that TCP itself offers a keepalive mechanism. Three
<br>
parameters may be specified: the amount of inactivity after which the
<br>
first probe is sent, the number of unanswered probes after which the
<br>
connection is dropped and the interval between the probes. Typing
<br>
'sysctl -a' will print the entire IP MIB that has these names (I don't
<br>
remember them off the top of my head). However, you say that you
<br>
*don't* want to drop the connection, simply want to know about
<br>
connectivity. What you can do, without causing 'undefined' MPI
<br>
behaviour is to implement a similar mechanism in your MPI application.
<br>
<p>Durga
<br>
<p><p>On Thu, Jul 23, 2009 at 10:25 AM, vipin kumar&lt;vipinkumar41_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Thank you all Jeff, Jody, Prentice and Bogdan for your invaluable
</span><br>
<span class="quotelev1">&gt; clarification, solution and suggestion,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI should return a failure if TCP connectivity is lost, even with a
</span><br>
<span class="quotelev2">&gt;&gt; non-blocking point-to-point operation. &#160;The failure should be returned in
</span><br>
<span class="quotelev2">&gt;&gt; the call to MPI_TEST (and friends).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; even if MPI_TEST is a local operation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;So I'm not sure your timeout has meaning here -- if you reach the
</span><br>
<span class="quotelev2">&gt;&gt; timeout, I think it simply means that the MPI communication has not
</span><br>
<span class="quotelev2">&gt;&gt; completed yet. &#160;It does not necessarily mean that the MPI communication has
</span><br>
<span class="quotelev2">&gt;&gt; failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you are absolutely correct., but the job should be done before it expires.
</span><br>
<span class="quotelev1">&gt; that's the reason I am using TIMEOUT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the conclusion is :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI doesn't provide any standard way to check reachability and/or health
</span><br>
<span class="quotelev2">&gt;&gt; of a peer process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's what I wanted to confirm. And to find out the solution, if any, or
</span><br>
<span class="quotelev1">&gt; any alternative.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So now I think, I should go for Jody's approach
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How about you start your MPI program from a shell script that does the
</span><br>
<span class="quotelev2">&gt;&gt; following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Reads a text file containing the names of all the possible candidates
</span><br>
<span class="quotelev2">&gt;&gt; &#160;for MPI nodes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Loops through the list of names from (1) and pings each machine to
</span><br>
<span class="quotelev2">&gt;&gt; see if it's alive. If the host is pingable, then write it's name to a
</span><br>
<span class="quotelev2">&gt;&gt; different text file which will be host as the machine file for the
</span><br>
<span class="quotelev2">&gt;&gt; mpirun command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. Call mpirun using the machine file generated in (2).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am assuming processes have been launched successfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vipin K.
</span><br>
<span class="quotelev1">&gt; Research Engineer,
</span><br>
<span class="quotelev1">&gt; C-DOTB, India
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
<li><strong>Next message:</strong> <a href="10064.php">Rolf Vandevaart: "Re: [OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10062.php">Craig Tierney: "[OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="10061.php">vipin kumar: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10105.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<li><strong>Reply:</strong> <a href="10105.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
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
