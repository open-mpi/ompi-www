<?
$subject_val = "Re: [OMPI users] How to test it";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  5 15:15:11 2010" -->
<!-- isoreceived="20100105201511" -->
<!-- sent="Tue, 5 Jan 2010 15:14:52 -0500" -->
<!-- isosent="20100105201452" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to test it" -->
<!-- id="CFC84D75-F1DC-446C-8ACE-648BBF0B51B3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4788ffe71001050818s15d0eeb2ja27e06f8d44c1529_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to test it<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-05 15:14:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11697.php">Jeff Squyres: "Re: [OMPI users] openib btl slows down application"</a>
<li><strong>Previous message:</strong> <a href="11695.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="11692.php">Leonardo Machado Moreira: "[OMPI users] How to test it"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11698.php">Leonardo Machado Moreira: "Re: [OMPI users] How to test it"</a>
<li><strong>Reply:</strong> <a href="11698.php">Leonardo Machado Moreira: "Re: [OMPI users] How to test it"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to try something simpler than java to start with.  For example:
<br>
<p>mpirun -np 4 hostname
<br>
<p>(where hostname is the POSIX command line app, not an MPI app)
<br>
<p>You should see the hostnames from the first 4 hosts in your hostfile (assuming each one of them has 1 process slot).  Then try running the samples that are in the examples/ directory in the Open MPI tarball (make sure that the example executables are available in the same location on every node).  For example:
<br>
<p>cd examples
<br>
make
<br>
mpirun -np 4 hello_c
<br>
<p>That's a trivial C MPI application that is the MPI equivalent of &quot;hello world&quot;.
<br>
<p><p>On Jan 5, 2010, at 11:18 AM, Leonardo Machado Moreira wrote:
<br>
<p><span class="quotelev1">&gt; Hi, I have created a cluster with openmpi this way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1 - Configured SSH with authorized_keys from the server to the nodes.
</span><br>
<span class="quotelev1">&gt; 2 - In /etc/openmpi-default-hostfile\ I have typed the IP of every nodes and the server.
</span><br>
<span class="quotelev1">&gt; 3 - Afterward I have created a Java application of two threads just to type a text on the console and runned it by
</span><br>
<span class="quotelev1">&gt; mpirun -1 java javaprogram
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; mpirun -2 java javaprogram
</span><br>
<span class="quotelev1">&gt; It is on the ps -aux of the server but the nodes are still stoped.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can I know that my mpi is working
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11697.php">Jeff Squyres: "Re: [OMPI users] openib btl slows down application"</a>
<li><strong>Previous message:</strong> <a href="11695.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="11692.php">Leonardo Machado Moreira: "[OMPI users] How to test it"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11698.php">Leonardo Machado Moreira: "Re: [OMPI users] How to test it"</a>
<li><strong>Reply:</strong> <a href="11698.php">Leonardo Machado Moreira: "Re: [OMPI users] How to test it"</a>
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
