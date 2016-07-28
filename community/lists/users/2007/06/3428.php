<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jun 10 12:58:08 2007" -->
<!-- isoreceived="20070610165808" -->
<!-- sent="Sun, 10 Jun 2007 11:57:58 -0500" -->
<!-- isosent="20070610165758" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running MPI on a dual-core pentium D" -->
<!-- id="466C2D96.1010603_at_uark.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="169290.61911.qm_at_web55811.mail.re3.yahoo.com" -->
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
<strong>From:</strong> Jeff Pummill (<em>jpummil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-10 12:57:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3429.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Previous message:</strong> <a href="3427.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>In reply to:</strong> <a href="3427.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3429.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Reply:</strong> <a href="3429.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Victor,
<br>
<p>Just on a hunch, look in your BIOS to see if Hyperthreading is turned 
<br>
on. If so, turn it off. We have seen some unusual behavior on some of 
<br>
our machines unless this is disabled.
<br>
<p>I am interested in your progress as I have just begun working with 
<br>
OpenMPI as well. I have used mpich for quite some time, but felt 
<br>
compelled to get some experience with OpenMPI as well. I just installed 
<br>
it this weekend on an AMD dual-core machine with 2 gigs of ram. Maybe I 
<br>
will try and replicate your experiment if you can direct me to what 
<br>
program you are benchmarking.
<br>
<p>Jeff F. Pummill
<br>
Senior Linux Cluster Administrator
<br>
University of Arkansas
<br>
Fayetteville, Arkansas 72701
<br>
(479) 575 - 4590
<br>
<a href="http://hpc.uark.edu">http://hpc.uark.edu</a>
<br>
<p>victor marian wrote:
<br>
<span class="quotelev1">&gt; The problem is that my executable file runs on the
</span><br>
<span class="quotelev1">&gt; Pentium D in 80 seconds on two cores and in 25 seconds
</span><br>
<span class="quotelev1">&gt; on one core.
</span><br>
<span class="quotelev1">&gt; And on another Sun SMP machine with 20 processors it
</span><br>
<span class="quotelev1">&gt; runs perfectly (the problem is perfectly scallable).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Victor Marian
</span><br>
<span class="quotelev1">&gt;       Laboratory of Machine Elements and Tribology
</span><br>
<span class="quotelev1">&gt;       University Politehnica of Bucharest
</span><br>
<span class="quotelev1">&gt;       Romania
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; It means that your OMPI was compiled to support
</span><br>
<span class="quotelev2">&gt;&gt; uDAPL  (a type of  
</span><br>
<span class="quotelev2">&gt;&gt; infinibad network)  but that your computer does not
</span><br>
<span class="quotelev2">&gt;&gt; have such a card  
</span><br>
<span class="quotelev2">&gt;&gt; installed.  Because you dont it will fall back to
</span><br>
<span class="quotelev2">&gt;&gt; ethernet.  But  
</span><br>
<span class="quotelev2">&gt;&gt; because you are just running on a single machine. 
</span><br>
<span class="quotelev2">&gt;&gt; You will use the  
</span><br>
<span class="quotelev2">&gt;&gt; fastest form of communication using shared memory. 
</span><br>
<span class="quotelev2">&gt;&gt; so you can ignore  
</span><br>
<span class="quotelev2">&gt;&gt; that message.  Unless in the future you add a uDAPL
</span><br>
<span class="quotelev2">&gt;&gt; powered network  
</span><br>
<span class="quotelev2">&gt;&gt; and you still get that message then you need to
</span><br>
<span class="quotelev2">&gt;&gt; worry.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 10, 2007, at 9:18 AM, victor marian wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a Pentium D computer with Solaris 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; installed.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed OpenMPI, succesfully compiled my
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Fortran
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program, but when giving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 progexe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I receive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,1,0]: uDAPL on host SERVSOLARIS was unable to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; find
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any NICs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another transport will be used instead, although
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may result in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am a begginer in MPI and don't know what it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; means.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  should I do to solve the problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ______________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Moody friends. Drama queens. Your life? Nope! -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; their life, your  
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; story. Play Sims Stories at Yahoo! Games.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://sims.yahoo.com/">http://sims.yahoo.com/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
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
<span class="quotelev1">&gt; ____________________________________________________________________________________
</span><br>
<span class="quotelev1">&gt; Moody friends. Drama queens. Your life? Nope! - their life, your story. Play Sims Stories at Yahoo! Games.
</span><br>
<span class="quotelev1">&gt; <a href="http://sims.yahoo.com/">http://sims.yahoo.com/</a>  
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
<p><pre>
-- 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3428/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3429.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Previous message:</strong> <a href="3427.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>In reply to:</strong> <a href="3427.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3429.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Reply:</strong> <a href="3429.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
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
