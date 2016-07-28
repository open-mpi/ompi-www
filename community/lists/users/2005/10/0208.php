<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 18 23:04:17 2005" -->
<!-- isoreceived="20051019040417" -->
<!-- sent="Wed, 19 Oct 2005 00:04:00 -0400" -->
<!-- isosent="20051019040400" -->
<!-- name="Allan Menezes" -->
<!-- email="amenezes007_at_[hidden]" -->
<!-- subject="[O-MPI users] HPL and OpenMpi RC3" -->
<!-- id="4355C5B0.8010504_at_sympatico.ca" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Allan Menezes (<em>amenezes007_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-18 23:04:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0209.php">Konstantin Karganov: "[O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0207.php">Hugh Merz: "[O-MPI users] thread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0240.php">Jeff Squyres: "Re: [O-MPI users] HPL and OpenMpi RC3"</a>
<li><strong>Reply:</strong> <a href="0240.php">Jeff Squyres: "Re: [O-MPI users] HPL and OpenMpi RC3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Message: 2 Date: Tue, 18 Oct 2005 08:48:45 -0600 From: &quot;Tim S. Woodall&quot; 
<br>
&lt;twoodall_at_[hidden]&gt; Subject: Re: [O-MPI users] Hpl Bench mark and 
<br>
Openmpi rc3 (Jeff Squyres) To: Open MPI Users &lt;users_at_[hidden]&gt; 
<br>
Message-ID: &lt;43550B4D.6080509_at_[hidden]&gt; Content-Type: text/plain; 
<br>
charset=ISO-8859-1; format=flowed
<br>
<p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;    I installed two versions of open mpi slightly different. One on 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi or I would get the gfortran error and the other in 
</span><br>
<span class="quotelev2">&gt;&gt; /home/allan/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; However I do not think that is the problem as the path names are 
</span><br>
<span class="quotelev2">&gt;&gt; specified in the bahrc and bash_profile files of the /home/allan directory.
</span><br>
<span class="quotelev2">&gt;&gt; I also log into user allan who is not a superuser.On running the open 
</span><br>
<span class="quotelev2">&gt;&gt; mpi with HPL I use the following command line:
</span><br>
<span class="quotelev2">&gt;&gt; a1&gt; mpirun -mca pls_rsh_orted /home/allan/openmpi/bin/orted -hostfile aa 
</span><br>
<span class="quotelev2">&gt;&gt; -np 16 ./xhpl
</span><br>
<span class="quotelev2">&gt;&gt; from the directory where xhpl resides such as /homer/open/bench and I 
</span><br>
<span class="quotelev2">&gt;&gt; use the -mca command pls_rsh_orted as it otherwise comes up with an 
</span><br>
<span class="quotelev2">&gt;&gt; error that it cannot find the ORTED daemon on machines a1, a2 etc. That 
</span><br>
<span class="quotelev2">&gt;&gt; is probaly aconfiguration error. However the commands above and the 
</span><br>
<span class="quotelev2">&gt;&gt; setup described works fine and there are no errors in the HPL.out file, 
</span><br>
<span class="quotelev2">&gt;&gt; except that it is slow.
</span><br>
<span class="quotelev2">&gt;&gt; I use an atlas BLAS library for creating xhpl from hpl.tar.gz. The make 
</span><br>
<span class="quotelev2">&gt;&gt; file for hpl uses the atlas libs and the open mpi mpicc compiler for 
</span><br>
<span class="quotelev2">&gt;&gt; both compilation and linking. and I have zeroed out the MPI macro paths 
</span><br>
<span class="quotelev2">&gt;&gt; in Make.open(that's what I reanmed the hpl makefile) for make arch=open 
</span><br>
<span class="quotelev2">&gt;&gt; in hpl directory. Please find attached the ompi_info -all file as 
</span><br>
<span class="quotelev2">&gt;&gt; requested. Thank you very much:
</span><br>
<span class="quotelev2">&gt;&gt; Allan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We've done linpack runs recently w/ Infiniband, which result in performance
<br>
comparable to mvapich, but not w/ the tcp port. Can you try running w/ an
<br>
earlier version, specify on the command line:
<br>
<p>-mca pml teg
<br>
<p>I'm interested in seeing if there is any performance difference.
<br>
<p>Thanks,
<br>
Tim
<br>
<p><p>------------------------------
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>End of users Digest, Vol 112, Issue 1
<br>
*************************************
<br>
<p>Hi Tim,
<br>
&nbsp;&nbsp;I tried the same cluster (16 node x86) with the switches -mca pml teg and I get good performance of 24.52Gflops at N=22500
<br>
and Block size NB=120.
<br>
My command line now looks like :
<br>
a1&gt; mpirun -mca pls_rsh_orted /home/allan/openmpi/bin/orted -mca pml teg -hostile aa -np 16 ./xhpl
<br>
hostfile = aa, containing the addresses of the 16 machines.
<br>
I am using a GS116 16 port netgear Gigabit ethernet switch with Gnet realtek gig ethernet cards
<br>
Why, PLEASE, do these switches pml teg make such a difference? It's 2.6 times more performance in GFlops than what I was getting without them.
<br>
I tried version rc3 and not an earlier version.
<br>
Thank you very much for your assistance!
<br>
Best wishes
<br>
Allan
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0208/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0209.php">Konstantin Karganov: "[O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0207.php">Hugh Merz: "[O-MPI users] thread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0240.php">Jeff Squyres: "Re: [O-MPI users] HPL and OpenMpi RC3"</a>
<li><strong>Reply:</strong> <a href="0240.php">Jeff Squyres: "Re: [O-MPI users] HPL and OpenMpi RC3"</a>
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
