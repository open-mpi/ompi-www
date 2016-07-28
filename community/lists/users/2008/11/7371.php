<?
$subject_val = "Re: [OMPI users] Want to use MPI using TCP/IP";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 24 09:07:37 2008" -->
<!-- isoreceived="20081124140737" -->
<!-- sent="Mon, 24 Nov 2008 09:06:32 -0500" -->
<!-- isosent="20081124140632" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Want to use MPI using TCP/IP" -->
<!-- id="B35A2F2D-498E-4CE1-8570-E9E550D3361B_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="932621.24027.qm_at_web30108.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Want to use MPI using TCP/IP<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-24 09:06:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7372.php">Jeff Squyres: "Re: [OMPI users] MPI_Gather bug with reproducer code attached"</a>
<li><strong>Previous message:</strong> <a href="7370.php">Parav Pandit: "[OMPI users] Want to use MPI using TCP/IP"</a>
<li><strong>In reply to:</strong> <a href="7370.php">Parav Pandit: "[OMPI users] Want to use MPI using TCP/IP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
install OpenMPI on both systems.  Make sure they are in the same  
<br>
locations.
<br>
Set up ssh so that it does not require a password between the two  
<br>
systems.  MPI will use this to setup the communication.
<br>
<p>Use the wrapper calls to compile,
<br>
mpicc -o ring_c ring_c.c
<br>
<p>Use 'mpirun' to start the job, mpirun --help will give details of its  
<br>
usage.
<br>
mpirun -H machine1,machine2 -np 2 ./ring_c
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Nov 24, 2008, at 6:57 AM, Parav Pandit wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new user of Open-MPI, using stable release 1.2.8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to run example program ring_c.c between two Linux  
</span><br>
<span class="quotelev1">&gt; systems using TCP/IP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can I do that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or there is any other example programs which I can use as reference  
</span><br>
<span class="quotelev1">&gt; to scale from 2 systems to 10 systems?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Parav Pandit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7372.php">Jeff Squyres: "Re: [OMPI users] MPI_Gather bug with reproducer code attached"</a>
<li><strong>Previous message:</strong> <a href="7370.php">Parav Pandit: "[OMPI users] Want to use MPI using TCP/IP"</a>
<li><strong>In reply to:</strong> <a href="7370.php">Parav Pandit: "[OMPI users] Want to use MPI using TCP/IP"</a>
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
