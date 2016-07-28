<?
$subject_val = "Re: [OMPI users] How to test it";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  5 17:38:58 2010" -->
<!-- isoreceived="20100105223858" -->
<!-- sent="Tue, 05 Jan 2010 17:38:49 -0500" -->
<!-- isosent="20100105223849" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to test it" -->
<!-- id="4B43BF79.1050101_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4788ffe71001051418r51a717a1j26a86e7c12cfff0b_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-05 17:38:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11700.php">Saurabh T: "[OMPI users] OpenMPI w valgrind: need to recompile?"</a>
<li><strong>Previous message:</strong> <a href="11698.php">Leonardo Machado Moreira: "Re: [OMPI users] How to test it"</a>
<li><strong>In reply to:</strong> <a href="11698.php">Leonardo Machado Moreira: "Re: [OMPI users] How to test it"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Leonardo
<br>
<p>It depends on how many &quot;slots&quot; (a.k.a. CPUs/cores) you have per node.
<br>
<p>You can add the flag &quot;-bynode&quot; to the mpiexec command line
<br>
to force it to run on different nodes.
<br>
<p>&quot;man mpiexec&quot; is a helpful source of information about these things.
<br>
<p>I hope this helps.
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>Leonardo Machado Moreira wrote:
<br>
<span class="quotelev1">&gt; Sorry If I misunderstood but, Should the mpirun -np4 hostname command 
</span><br>
<span class="quotelev1">&gt; return all the machines no the openmpi-default-hostfile?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My host file has just two ips, the first is the server and the second a 
</span><br>
<span class="quotelev1">&gt; node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 192.168.0.1
</span><br>
<span class="quotelev1">&gt; 192.168.0.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It just return the name of my server 4 times.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same happens with other commands like &quot;ls&quot; or just &quot;dir&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't understood yet why does the mpi run the process 4 times or x 
</span><br>
<span class="quotelev1">&gt; times. It must be just one but spreading it on the other machines. Must 
</span><br>
<span class="quotelev1">&gt; not it??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 5, 2010 at 6:14 PM, Jeff Squyres &lt;jsquyres_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     You might want to try something simpler than java to start with.
</span><br>
<span class="quotelev1">&gt;      For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mpirun -np 4 hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     (where hostname is the POSIX command line app, not an MPI app)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     You should see the hostnames from the first 4 hosts in your hostfile
</span><br>
<span class="quotelev1">&gt;     (assuming each one of them has 1 process slot).  Then try running
</span><br>
<span class="quotelev1">&gt;     the samples that are in the examples/ directory in the Open MPI
</span><br>
<span class="quotelev1">&gt;     tarball (make sure that the example executables are available in the
</span><br>
<span class="quotelev1">&gt;     same location on every node).  For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     cd examples
</span><br>
<span class="quotelev1">&gt;     make
</span><br>
<span class="quotelev1">&gt;     mpirun -np 4 hello_c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     That's a trivial C MPI application that is the MPI equivalent of
</span><br>
<span class="quotelev1">&gt;     &quot;hello world&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     On Jan 5, 2010, at 11:18 AM, Leonardo Machado Moreira wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;      &gt; Hi, I have created a cluster with openmpi this way.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; 1 - Configured SSH with authorized_keys from the server to the nodes.
</span><br>
<span class="quotelev2">&gt;      &gt; 2 - In /etc/openmpi-default-hostfile\ I have typed the IP of
</span><br>
<span class="quotelev1">&gt;     every nodes and the server.
</span><br>
<span class="quotelev2">&gt;      &gt; 3 - Afterward I have created a Java application of two threads
</span><br>
<span class="quotelev1">&gt;     just to type a text on the console and runned it by
</span><br>
<span class="quotelev2">&gt;      &gt; mpirun -1 java javaprogram
</span><br>
<span class="quotelev2">&gt;      &gt; or
</span><br>
<span class="quotelev2">&gt;      &gt; mpirun -2 java javaprogram
</span><br>
<span class="quotelev2">&gt;      &gt; It is on the ps -aux of the server but the nodes are still stoped.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; How can I know that my mpi is working
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Thanks a lot
</span><br>
<span class="quotelev2">&gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;      &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;      &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;      &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Jeff Squyres
</span><br>
<span class="quotelev1">&gt;     jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="11700.php">Saurabh T: "[OMPI users] OpenMPI w valgrind: need to recompile?"</a>
<li><strong>Previous message:</strong> <a href="11698.php">Leonardo Machado Moreira: "Re: [OMPI users] How to test it"</a>
<li><strong>In reply to:</strong> <a href="11698.php">Leonardo Machado Moreira: "Re: [OMPI users] How to test it"</a>
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
