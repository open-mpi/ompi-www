<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 09:56:24 2007" -->
<!-- isoreceived="20070611135624" -->
<!-- sent="Mon, 11 Jun 2007 09:56:08 -0400" -->
<!-- isosent="20070611135608" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running MPI on a dual-core pentium D" -->
<!-- id="466D5478.4060103_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="435370.77808.qm_at_web55806.mail.re3.yahoo.com" -->
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
<strong>Date:</strong> 2007-06-11 09:56:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3450.php">Brock Palen: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Previous message:</strong> <a href="3448.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>In reply to:</strong> <a href="3446.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3451.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Reply:</strong> <a href="3451.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Victor,
<br>
<p>Obviously there are many variables involved with getting the best 
<br>
performance out of a machine and understanding the 2 environments you 
<br>
are comparing would be necessary as well as the job. I would not be able 
<br>
to get my hands on another E10K for validation or projecting possible 
<br>
gains myself. If your university is looking to expand maybe gettting a 
<br>
sales engineer involved for a proper analysis and proposal would be of 
<br>
interest.
<br>
<p>I am curious what benchmark you are using to compare the two platforms 
<br>
though.
<br>
<p>-DON 
<br>
<p>victor marian wrote:
<br>
<p><span class="quotelev1">&gt;Hi Don,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Seeing your mail, I suppose you are working at Sun. We
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;have a Sun 10000 Server at our university, and my
</span><br>
<span class="quotelev1">&gt;program runs almost as fast on 16 UltraSparc2
</span><br>
<span class="quotelev1">&gt;processors as on a pentium D.The program is perfectly
</span><br>
<span class="quotelev1">&gt;scallable. I am a little bit dissapointed. Our Sparc
</span><br>
<span class="quotelev1">&gt;II are at 400MHz, and the Pentium D at 2.8GHz. I could
</span><br>
<span class="quotelev1">&gt;expect that the pentium is 4 time faster, but not 16
</span><br>
<span class="quotelev1">&gt;times.
</span><br>
<span class="quotelev1">&gt;I wonder how a Sparc IV would perform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                     Victor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--- Don Kerr &lt;Don.Kerr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Additionally, Solaris comes with the IB drivers and
</span><br>
<span class="quotelev2">&gt;&gt;since the libs are 
</span><br>
<span class="quotelev2">&gt;&gt;there OMPI thinks that it is available. You can
</span><br>
<span class="quotelev2">&gt;&gt;suppress this message with 
</span><br>
<span class="quotelev2">&gt;&gt;    --mca btl_base_warn_component_unused 0
</span><br>
<span class="quotelev2">&gt;&gt;or specifically call out the btls you wish to use,
</span><br>
<span class="quotelev2">&gt;&gt;example
</span><br>
<span class="quotelev2">&gt;&gt;    --mca btl self,sm,tcp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;It means that your OMPI was compiled to support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;uDAPL  (a type of  
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;infinibad network)  but that your computer does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;have such a card  
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;installed.  Because you dont it will fall back to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;ethernet.  But  
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;because you are just running on a single machine. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;You will use the  
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;fastest form of communication using shared memory. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;so you can ignore  
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;that message.  Unless in the future you add a uDAPL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;powered network  
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;and you still get that message then you need to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;worry.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Center for Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;(734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Jun 10, 2007, at 9:18 AM, victor marian wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I have a Pentium D computer with Solaris 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;installed.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I installed OpenMPI, succesfully compiled my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Fortran
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;program, but when giving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;mpirun -np 2 progexe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I receive
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[0,1,0]: uDAPL on host SERVSOLARIS was unable to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;find
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;any NICs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Another transport will be used instead, although
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;this
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;may result in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;lower performance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I am a begginer in MPI and don't know what it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;means.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;What
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;should I do to solve the problem?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Thank you.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;______________________________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;______________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Moody friends. Drama queens. Your life? Nope! -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;their life, your  
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;story. Play Sims Stories at Yahoo! Games.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;<a href="http://sims.yahoo.com/">http://sims.yahoo.com/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;____________________________________________________________________________________
</span><br>
<span class="quotelev1">&gt;Don't get soaked.  Take a quick peak at the forecast
</span><br>
<span class="quotelev1">&gt;with the Yahoo! Search weather shortcut.
</span><br>
<span class="quotelev1">&gt;<a href="http://tools.search.yahoo.com/shortcuts/#loc_weather">http://tools.search.yahoo.com/shortcuts/#loc_weather</a>
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
<li><strong>Next message:</strong> <a href="3450.php">Brock Palen: "Re: [OMPI users] Library Definitions"</a>
<li><strong>Previous message:</strong> <a href="3448.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>In reply to:</strong> <a href="3446.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3451.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Reply:</strong> <a href="3451.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
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
