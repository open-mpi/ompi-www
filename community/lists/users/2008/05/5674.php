<?
$subject_val = "Re: [OMPI users] Migrating from lam-mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 21:40:09 2008" -->
<!-- isoreceived="20080516014009" -->
<!-- sent="Thu, 15 May 2008 21:39:56 -0400" -->
<!-- isosent="20080516013956" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Migrating from lam-mpi" -->
<!-- id="E5F423D2-BAFC-4233-82AA-DA255B788696_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0805132345l351c3d37md6f6d8b3459f981e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Migrating from lam-mpi<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-15 21:39:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5675.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="5673.php">Ryan Buckley ; 21426: "Re: [OMPI users] Running Hetergenous MPI Application Over	Infiniband"</a>
<li><strong>In reply to:</strong> <a href="5664.php">jody: "Re: [OMPI users] Migrating from lam-mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In addition to what Jody said: I wish there were guides like we had  
<br>
for LAM/MPI, but we simply haven't had the resources to write them.   
<br>
If the FAQ doesn't have what you need, please let us know and perhaps  
<br>
we should add to it.
<br>
<p><p>On May 14, 2008, at 2:45 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; Actually all you need is in this faq:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
</span><br>
<span class="quotelev1">&gt; The analogues to the lam-mpi hostfiles is discussed here
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-host">http://www.open-mpi.org/faq/?category=running#mpirun-host</a>
</span><br>
<span class="quotelev1">&gt; and here
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-host">http://www.open-mpi.org/faq/?category=running#mpirun-host</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no booting required.
</span><br>
<span class="quotelev1">&gt; All you do is start your application with mpirun
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile my_hostfile -np 4 my_parallel_application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 13, 2008 at 7:07 PM, Rob Malpass  
</span><br>
<span class="quotelev1">&gt; &lt;lug_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could someone help me out with some documentation?   I'm searched  
</span><br>
<span class="quotelev2">&gt;&gt; the faq
</span><br>
<span class="quotelev2">&gt;&gt; and can't find exactly what I'm after - which is a sort of setup  
</span><br>
<span class="quotelev2">&gt;&gt; guide.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thus far, I have a couple of Ubuntu nodes running openmpi-1.2.6.    
</span><br>
<span class="quotelev2">&gt;&gt; I've
</span><br>
<span class="quotelev2">&gt;&gt; currently got one setup so it can ssh into the other without a  
</span><br>
<span class="quotelev2">&gt;&gt; password so I
</span><br>
<span class="quotelev2">&gt;&gt; guess all I need to do now is to run the job.   With lam, there was
</span><br>
<span class="quotelev2">&gt;&gt; lam-bhost.def but I've not (this is where I need the help) found any
</span><br>
<span class="quotelev2">&gt;&gt; documentation that talks about the hostfile.   The only thing I can  
</span><br>
<span class="quotelev2">&gt;&gt; find is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#simple-launch">http://www.open-mpi.org/faq/?category=running#simple-launch</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but with lam, as I recall there were a whole host (no pun  
</span><br>
<span class="quotelev2">&gt;&gt; intended!) of
</span><br>
<span class="quotelev2">&gt;&gt; configuration files and some test scripts like recon and lamboot to  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;boot
</span><br>
<span class="quotelev2">&gt;&gt; the supercomputer&quot;.   Are there no such files here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this doesn't offend - I have searched the faq but I can't find
</span><br>
<span class="quotelev2">&gt;&gt; exactly what I'm after - is there a setup guide somewhere?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rob
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5675.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="5673.php">Ryan Buckley ; 21426: "Re: [OMPI users] Running Hetergenous MPI Application Over	Infiniband"</a>
<li><strong>In reply to:</strong> <a href="5664.php">jody: "Re: [OMPI users] Migrating from lam-mpi"</a>
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
