<?
$subject_val = "Re: [OMPI users] How to test it";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  5 17:18:40 2010" -->
<!-- isoreceived="20100105221840" -->
<!-- sent="Tue, 5 Jan 2010 20:18:15 -0200" -->
<!-- isosent="20100105221815" -->
<!-- name="Leonardo Machado Moreira" -->
<!-- email="lm.moreira_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to test it" -->
<!-- id="4788ffe71001051418r51a717a1j26a86e7c12cfff0b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CFC84D75-F1DC-446C-8ACE-648BBF0B51B3_at_cisco.com" -->
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
<strong>From:</strong> Leonardo Machado Moreira (<em>lm.moreira_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-05 17:18:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11699.php">Gus Correa: "Re: [OMPI users] How to test it"</a>
<li><strong>Previous message:</strong> <a href="11697.php">Jeff Squyres: "Re: [OMPI users] openib btl slows down application"</a>
<li><strong>In reply to:</strong> <a href="11696.php">Jeff Squyres: "Re: [OMPI users] How to test it"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11699.php">Gus Correa: "Re: [OMPI users] How to test it"</a>
<li><strong>Reply:</strong> <a href="11699.php">Gus Correa: "Re: [OMPI users] How to test it"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry If I misunderstood but, Should the mpirun -np4 hostname command return
<br>
all the machines no the openmpi-default-hostfile?
<br>
<p>My host file has just two ips, the first is the server and the second a
<br>
node.
<br>
<p>192.168.0.1
<br>
192.168.0.3
<br>
<p>It just return the name of my server 4 times.
<br>
<p>The same happens with other commands like &quot;ls&quot; or just &quot;dir&quot;.
<br>
<p>I didn't understood yet why does the mpi run the process 4 times or x times.
<br>
It must be just one but spreading it on the other machines. Must not it??
<br>
<p><p><p><p><p>On Tue, Jan 5, 2010 at 6:14 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You might want to try something simpler than java to start with.  For
</span><br>
<span class="quotelev1">&gt; example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (where hostname is the POSIX command line app, not an MPI app)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should see the hostnames from the first 4 hosts in your hostfile
</span><br>
<span class="quotelev1">&gt; (assuming each one of them has 1 process slot).  Then try running the
</span><br>
<span class="quotelev1">&gt; samples that are in the examples/ directory in the Open MPI tarball (make
</span><br>
<span class="quotelev1">&gt; sure that the example executables are available in the same location on
</span><br>
<span class="quotelev1">&gt; every node).  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd examples
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 hello_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's a trivial C MPI application that is the MPI equivalent of &quot;hello
</span><br>
<span class="quotelev1">&gt; world&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 5, 2010, at 11:18 AM, Leonardo Machado Moreira wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi, I have created a cluster with openmpi this way.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1 - Configured SSH with authorized_keys from the server to the nodes.
</span><br>
<span class="quotelev2">&gt; &gt; 2 - In /etc/openmpi-default-hostfile\ I have typed the IP of every nodes
</span><br>
<span class="quotelev1">&gt; and the server.
</span><br>
<span class="quotelev2">&gt; &gt; 3 - Afterward I have created a Java application of two threads just to
</span><br>
<span class="quotelev1">&gt; type a text on the console and runned it by
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -1 java javaprogram
</span><br>
<span class="quotelev2">&gt; &gt; or
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -2 java javaprogram
</span><br>
<span class="quotelev2">&gt; &gt; It is on the ps -aux of the server but the nodes are still stoped.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How can I know that my mpi is working
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11698/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11699.php">Gus Correa: "Re: [OMPI users] How to test it"</a>
<li><strong>Previous message:</strong> <a href="11697.php">Jeff Squyres: "Re: [OMPI users] openib btl slows down application"</a>
<li><strong>In reply to:</strong> <a href="11696.php">Jeff Squyres: "Re: [OMPI users] How to test it"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11699.php">Gus Correa: "Re: [OMPI users] How to test it"</a>
<li><strong>Reply:</strong> <a href="11699.php">Gus Correa: "Re: [OMPI users] How to test it"</a>
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
