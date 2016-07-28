<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 09:18:13 2007" -->
<!-- isoreceived="20070611131813" -->
<!-- sent="Mon, 11 Jun 2007 06:18:09 -0700 (PDT)" -->
<!-- isosent="20070611131809" -->
<!-- name="victor marian" -->
<!-- email="vctrmarian_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running MPI on a dual-core pentium D" -->
<!-- id="435370.77808.qm_at_web55806.mail.re3.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="466D492C.6040504_at_Sun.COM" -->
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
<strong>From:</strong> victor marian (<em>vctrmarian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 09:18:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3447.php">Don Kerr: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Previous message:</strong> <a href="3445.php">Jeff Squyres: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>In reply to:</strong> <a href="3444.php">Don Kerr: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3449.php">Don Kerr: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Reply:</strong> <a href="3449.php">Don Kerr: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Don,
<br>
<p>Seeing your mail, I suppose you are working at Sun. We
<br>
<p>have a Sun 10000 Server at our university, and my
<br>
program runs almost as fast on 16 UltraSparc2
<br>
processors as on a pentium D.The program is perfectly
<br>
scallable. I am a little bit dissapointed. Our Sparc
<br>
II are at 400MHz, and the Pentium D at 2.8GHz. I could
<br>
expect that the pentium is 4 time faster, but not 16
<br>
times.
<br>
I wonder how a Sparc IV would perform.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Victor
<br>
<p>&nbsp;&nbsp;
<br>
<p>--- Don Kerr &lt;Don.Kerr_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Additionally, Solaris comes with the IB drivers and
</span><br>
<span class="quotelev1">&gt; since the libs are 
</span><br>
<span class="quotelev1">&gt; there OMPI thinks that it is available. You can
</span><br>
<span class="quotelev1">&gt; suppress this message with 
</span><br>
<span class="quotelev1">&gt;     --mca btl_base_warn_component_unused 0
</span><br>
<span class="quotelev1">&gt; or specifically call out the btls you wish to use,
</span><br>
<span class="quotelev1">&gt; example
</span><br>
<span class="quotelev1">&gt;     --mca btl self,sm,tcp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;It means that your OMPI was compiled to support
</span><br>
<span class="quotelev1">&gt; uDAPL  (a type of  
</span><br>
<span class="quotelev2">&gt; &gt;infinibad network)  but that your computer does not
</span><br>
<span class="quotelev1">&gt; have such a card  
</span><br>
<span class="quotelev2">&gt; &gt;installed.  Because you dont it will fall back to
</span><br>
<span class="quotelev1">&gt; ethernet.  But  
</span><br>
<span class="quotelev2">&gt; &gt;because you are just running on a single machine. 
</span><br>
<span class="quotelev1">&gt; You will use the  
</span><br>
<span class="quotelev2">&gt; &gt;fastest form of communication using shared memory. 
</span><br>
<span class="quotelev1">&gt; so you can ignore  
</span><br>
<span class="quotelev2">&gt; &gt;that message.  Unless in the future you add a uDAPL
</span><br>
<span class="quotelev1">&gt; powered network  
</span><br>
<span class="quotelev2">&gt; &gt;and you still get that message then you need to
</span><br>
<span class="quotelev1">&gt; worry.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Brock Palen
</span><br>
<span class="quotelev2">&gt; &gt;Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt; &gt;brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;(734)936-1985
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Jun 10, 2007, at 9:18 AM, victor marian wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Hello,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I have a Pentium D computer with Solaris 10
</span><br>
<span class="quotelev1">&gt; installed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I installed OpenMPI, succesfully compiled my
</span><br>
<span class="quotelev1">&gt; Fortran
</span><br>
<span class="quotelev3">&gt; &gt;&gt;program, but when giving
</span><br>
<span class="quotelev3">&gt; &gt;&gt;mpirun -np 2 progexe
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I receive
</span><br>
<span class="quotelev3">&gt; &gt;&gt;[0,1,0]: uDAPL on host SERVSOLARIS was unable to
</span><br>
<span class="quotelev1">&gt; find
</span><br>
<span class="quotelev3">&gt; &gt;&gt;any NICs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Another transport will be used instead, although
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev3">&gt; &gt;&gt;may result in
</span><br>
<span class="quotelev3">&gt; &gt;&gt;lower performance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I am a begginer in MPI and don't know what it
</span><br>
<span class="quotelev1">&gt; means.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;What
</span><br>
<span class="quotelev3">&gt; &gt;&gt; should I do to solve the problem?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Thank you.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;______________________________________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;______________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Moody friends. Drama queens. Your life? Nope! -
</span><br>
<span class="quotelev1">&gt; their life, your  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;story. Play Sims Stories at Yahoo! Games.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;<a href="http://sims.yahoo.com/">http://sims.yahoo.com/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><p><p>&nbsp;
<br>
____________________________________________________________________________________
<br>
Don't get soaked.  Take a quick peak at the forecast
<br>
with the Yahoo! Search weather shortcut.
<br>
<a href="http://tools.search.yahoo.com/shortcuts/#loc_weather">http://tools.search.yahoo.com/shortcuts/#loc_weather</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3447.php">Don Kerr: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Previous message:</strong> <a href="3445.php">Jeff Squyres: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>In reply to:</strong> <a href="3444.php">Don Kerr: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3449.php">Don Kerr: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Reply:</strong> <a href="3449.php">Don Kerr: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
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
