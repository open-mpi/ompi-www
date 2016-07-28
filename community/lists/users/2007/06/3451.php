<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 10:06:15 2007" -->
<!-- isoreceived="20070611140615" -->
<!-- sent="Mon, 11 Jun 2007 07:06:11 -0700 (PDT)" -->
<!-- isosent="20070611140611" -->
<!-- name="victor marian" -->
<!-- email="vctrmarian_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running MPI on a dual-core pentium D" -->
<!-- id="449062.72750.qm_at_web55813.mail.re3.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="466D5478.4060103_at_Sun.COM" -->
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
<strong>Date:</strong> 2007-06-11 10:06:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3452.php">Kees Verstoep: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="3450.php">Brock Palen: "Re: [OMPI users] Library Definitions"</a>
<li><strong>In reply to:</strong> <a href="3449.php">Don Kerr: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Don,
<br>
<p>The first time I ran the program I am working on. It
<br>
is perfectly scallable and on 20 processors it ran on
<br>
27 seconds (on two processors on 300 seconds).
<br>
The I had the curiosity to run it on a pentium D. It
<br>
ran in 30 senconds on a single core. On two cores it
<br>
ran on 37 seconds (I think something is wrong in the
<br>
mixture Solaris+Sunstudio+OpenMpi+Pentium).
<br>
<p>I ran then the NAS benchmarks (CG benchmark CLASS A or
<br>
B) and the benchmark took 16 
<br>
&nbsp;times longer on a SparcII Processor than on my
<br>
Pentium D(on one core).
<br>
So everything leads to the same conclusion.
<br>
I would be curious what such benchmark would give
<br>
between a Pentium D and the last generation Sparc
<br>
processor. 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Victor
<br>
&nbsp;
<br>
<p>--- Don Kerr &lt;Don.Kerr_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Victor,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Obviously there are many variables involved with
</span><br>
<span class="quotelev1">&gt; getting the best 
</span><br>
<span class="quotelev1">&gt; performance out of a machine and understanding the 2
</span><br>
<span class="quotelev1">&gt; environments you 
</span><br>
<span class="quotelev1">&gt; are comparing would be necessary as well as the job.
</span><br>
<span class="quotelev1">&gt; I would not be able 
</span><br>
<span class="quotelev1">&gt; to get my hands on another E10K for validation or
</span><br>
<span class="quotelev1">&gt; projecting possible 
</span><br>
<span class="quotelev1">&gt; gains myself. If your university is looking to
</span><br>
<span class="quotelev1">&gt; expand maybe gettting a 
</span><br>
<span class="quotelev1">&gt; sales engineer involved for a proper analysis and
</span><br>
<span class="quotelev1">&gt; proposal would be of 
</span><br>
<span class="quotelev1">&gt; interest.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am curious what benchmark you are using to compare
</span><br>
<span class="quotelev1">&gt; the two platforms 
</span><br>
<span class="quotelev1">&gt; though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -DON 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; victor marian wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Hi Don,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Seeing your mail, I suppose you are working at Sun.
</span><br>
<span class="quotelev1">&gt; We
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;have a Sun 10000 Server at our university, and my
</span><br>
<span class="quotelev2">&gt; &gt;program runs almost as fast on 16 UltraSparc2
</span><br>
<span class="quotelev2">&gt; &gt;processors as on a pentium D.The program is
</span><br>
<span class="quotelev1">&gt; perfectly
</span><br>
<span class="quotelev2">&gt; &gt;scallable. I am a little bit dissapointed. Our
</span><br>
<span class="quotelev1">&gt; Sparc
</span><br>
<span class="quotelev2">&gt; &gt;II are at 400MHz, and the Pentium D at 2.8GHz. I
</span><br>
<span class="quotelev1">&gt; could
</span><br>
<span class="quotelev2">&gt; &gt;expect that the pentium is 4 time faster, but not
</span><br>
<span class="quotelev1">&gt; 16
</span><br>
<span class="quotelev2">&gt; &gt;times.
</span><br>
<span class="quotelev2">&gt; &gt;I wonder how a Sparc IV would perform.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                                     Victor
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;--- Don Kerr &lt;Don.Kerr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Additionally, Solaris comes with the IB drivers
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev3">&gt; &gt;&gt;since the libs are 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;there OMPI thinks that it is available. You can
</span><br>
<span class="quotelev3">&gt; &gt;&gt;suppress this message with 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    --mca btl_base_warn_component_unused 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;or specifically call out the btls you wish to use,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;example
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    --mca btl self,sm,tcp
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Brock Palen wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;It means that your OMPI was compiled to support
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;uDAPL  (a type of  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;infinibad network)  but that your computer does
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;have such a card  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;installed.  Because you dont it will fall back to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;ethernet.  But  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;because you are just running on a single machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;You will use the  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;fastest form of communication using shared
</span><br>
<span class="quotelev1">&gt; memory. 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;so you can ignore  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;that message.  Unless in the future you add a
</span><br>
<span class="quotelev1">&gt; uDAPL
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;powered network  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;and you still get that message then you need to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;worry.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Brock Palen
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Center for Advanced Computing
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;brockp_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;(734)936-1985
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;On Jun 10, 2007, at 9:18 AM, victor marian wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Hello,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;I have a Pentium D computer with Solaris 10
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;installed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;I installed OpenMPI, succesfully compiled my
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Fortran
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;program, but when giving
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;mpirun -np 2 progexe
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;I receive
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;[0,1,0]: uDAPL on host SERVSOLARIS was unable to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;find
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;any NICs.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Another transport will be used instead, although
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;this
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;may result in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;lower performance.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;I am a begginer in MPI and don't know what it
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;means.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;What
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;should I do to solve the problem?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Thank you.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;______________________________________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;______________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Moody friends. Drama queens. Your life? Nope! -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;their life, your  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;story. Play Sims Stories at Yahoo! Games.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;<a href="http://sims.yahoo.com/">http://sims.yahoo.com/</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; 
</span><br>
=== message truncated ===
<br>
<p><p>Victor MARIAN
<br>
Department of Machine Elements and Tribology
<br>
University Politehnica of Bucharest
<br>
Spl. Indepentendei 313
<br>
060042 Bucharest
<br>
ROMANIA
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
____________________________________________________________________________________
<br>
Get the free Yahoo! toolbar and rest assured with the added security of spyware protection.
<br>
<a href="http://new.toolbar.yahoo.com/toolbar/features/norton/index.php">http://new.toolbar.yahoo.com/toolbar/features/norton/index.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3452.php">Kees Verstoep: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="3450.php">Brock Palen: "Re: [OMPI users] Library Definitions"</a>
<li><strong>In reply to:</strong> <a href="3449.php">Don Kerr: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
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
