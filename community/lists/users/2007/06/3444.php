<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 09:08:10 2007" -->
<!-- isoreceived="20070611130810" -->
<!-- sent="Mon, 11 Jun 2007 09:07:56 -0400" -->
<!-- isosent="20070611130756" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running MPI on a dual-core pentium D" -->
<!-- id="466D492C.6040504_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="15536B24-1612-461F-A9C0-589FCC9E6956_at_umich.edu" -->
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
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 09:07:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3445.php">Jeff Squyres: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Previous message:</strong> <a href="3443.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
<li><strong>In reply to:</strong> <a href="3426.php">Brock Palen: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3446.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Reply:</strong> <a href="3446.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Additionally, Solaris comes with the IB drivers and since the libs are 
<br>
there OMPI thinks that it is available. You can suppress this message with 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--mca btl_base_warn_component_unused 0
<br>
or specifically call out the btls you wish to use, example
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--mca btl self,sm,tcp
<br>
<p>Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt;It means that your OMPI was compiled to support uDAPL  (a type of  
</span><br>
<span class="quotelev1">&gt;infinibad network)  but that your computer does not have such a card  
</span><br>
<span class="quotelev1">&gt;installed.  Because you dont it will fall back to ethernet.  But  
</span><br>
<span class="quotelev1">&gt;because you are just running on a single machine.  You will use the  
</span><br>
<span class="quotelev1">&gt;fastest form of communication using shared memory.  so you can ignore  
</span><br>
<span class="quotelev1">&gt;that message.  Unless in the future you add a uDAPL powered network  
</span><br>
<span class="quotelev1">&gt;and you still get that message then you need to worry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brock Palen
</span><br>
<span class="quotelev1">&gt;Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt;brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt;(734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jun 10, 2007, at 9:18 AM, victor marian wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I have a Pentium D computer with Solaris 10 installed.
</span><br>
<span class="quotelev2">&gt;&gt;I installed OpenMPI, succesfully compiled my Fortran
</span><br>
<span class="quotelev2">&gt;&gt;program, but when giving
</span><br>
<span class="quotelev2">&gt;&gt;mpirun -np 2 progexe
</span><br>
<span class="quotelev2">&gt;&gt;I receive
</span><br>
<span class="quotelev2">&gt;&gt;[0,1,0]: uDAPL on host SERVSOLARIS was unable to find
</span><br>
<span class="quotelev2">&gt;&gt;any NICs.
</span><br>
<span class="quotelev2">&gt;&gt;Another transport will be used instead, although this
</span><br>
<span class="quotelev2">&gt;&gt;may result in
</span><br>
<span class="quotelev2">&gt;&gt;lower performance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I am a begginer in MPI and don't know what it means.
</span><br>
<span class="quotelev2">&gt;&gt;What
</span><br>
<span class="quotelev2">&gt;&gt; should I do to solve the problem?
</span><br>
<span class="quotelev2">&gt;&gt;Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;______________________________________________________________________ 
</span><br>
<span class="quotelev2">&gt;&gt;______________
</span><br>
<span class="quotelev2">&gt;&gt;Moody friends. Drama queens. Your life? Nope! - their life, your  
</span><br>
<span class="quotelev2">&gt;&gt;story. Play Sims Stories at Yahoo! Games.
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://sims.yahoo.com/">http://sims.yahoo.com/</a>
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3445.php">Jeff Squyres: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Previous message:</strong> <a href="3443.php">Jeff Pummill: "Re: [OMPI users] Library Definitions"</a>
<li><strong>In reply to:</strong> <a href="3426.php">Brock Palen: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3446.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Reply:</strong> <a href="3446.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
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
