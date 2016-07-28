<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 18 14:56:53 2006" -->
<!-- isoreceived="20060518185653" -->
<!-- sent="Thu, 18 May 2006 14:56:52 -0400" -->
<!-- isosent="20060518185652" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling with NAG f95" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF881091_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Compiling with NAG f95" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-18 14:56:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1254.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] tm interface"</a>
<li><strong>Previous message:</strong> <a href="1252.php">Brian Barrett: "Re: [OMPI users] fortran flags using Absoft compilers"</a>
<li><strong>Maybe in reply to:</strong> <a href="1228.php">Brock Palen: "[OMPI users] Compiling with NAG f95"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Brock.  Sorry for the delay on the reply.
<br>
<p>We've never actually tested with the NAG f95 compiler (none of the
<br>
current developers have it), so I'm not surprised that it doesn't work.
<br>
<p>We have what might be a similar issue with the Sun compiler right now,
<br>
however -- it may be the same thing.  I am not personally a Fortran
<br>
guru, so I'm consulting with my local Fortran Guy(tm) and am iterating
<br>
with him on the solution.
<br>
<p>I'll post back here when we have a final solution.
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Brock Palen
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, May 10, 2006 9:34 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Compiling with NAG f95
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone been able to build openmpi-1.0.2 with the NAG fortran  
</span><br>
<span class="quotelev1">&gt; compilers?  I have been trying with no luck, here is what i have  
</span><br>
<span class="quotelev1">&gt; tried and the resulting errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export FC=f95
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/software/rhel4/openmpi-1.0.2/nag --with- 
</span><br>
<span class="quotelev1">&gt; tm=/home/software/torque-2.0.0p8
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./scripts/mpi_ssend_init_f90.f90.sh /usr/local/src/openmpi-1.0.2.nag- 
</span><br>
<span class="quotelev1">&gt; pgi/ompi/mpi/f90 &gt; mpi_ssend_init_f90.f90
</span><br>
<span class="quotelev1">&gt; /afs/engin.umich.edu/caen/rhel_4/nag/bin/f95 -I../../../include - 
</span><br>
<span class="quotelev1">&gt; I../../../include -I.  -c -o mpi_address_f90.o  mpi_address_f90.f90
</span><br>
<span class="quotelev1">&gt; Error: mpi_address_f90.f90: Inconsistent data types for 
</span><br>
<span class="quotelev1">&gt; argument 1 to  
</span><br>
<span class="quotelev1">&gt; MPI_ADDRESS from MPI_ADDRESS0DL2 and MPI_ADDRESS0DL1
</span><br>
<span class="quotelev1">&gt; Error: mpi_address_f90.f90: Inconsistent data types for 
</span><br>
<span class="quotelev1">&gt; argument 1 to  
</span><br>
<span class="quotelev1">&gt; MPI_ADDRESS from MPI_ADDRESS0DL4 and MPI_ADDRESS0DL1
</span><br>
<span class="quotelev1">&gt; ......snip.....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any many more similar messages about &quot;Inconsistent data types&quot;
</span><br>
<span class="quotelev1">&gt; I dont know if it matters, but I have tried both pgi 6.1 for the c  
</span><br>
<span class="quotelev1">&gt; compiler and gcc 3.4.5
</span><br>
<span class="quotelev1">&gt; On RHEL-4 on AMD Opteron
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Brock
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1254.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] tm interface"</a>
<li><strong>Previous message:</strong> <a href="1252.php">Brian Barrett: "Re: [OMPI users] fortran flags using Absoft compilers"</a>
<li><strong>Maybe in reply to:</strong> <a href="1228.php">Brock Palen: "[OMPI users] Compiling with NAG f95"</a>
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
