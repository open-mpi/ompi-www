<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jun 10 13:26:06 2007" -->
<!-- isoreceived="20070610172606" -->
<!-- sent="Sun, 10 Jun 2007 10:26:02 -0700 (PDT)" -->
<!-- isosent="20070610172602" -->
<!-- name="victor marian" -->
<!-- email="vctrmarian_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running MPI on a dual-core pentium D" -->
<!-- id="703393.80090.qm_at_web55802.mail.re3.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="466C2D96.1010603_at_uark.edu" -->
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
<strong>Date:</strong> 2007-06-10 13:26:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3430.php">Jeff Pummill: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Previous message:</strong> <a href="3428.php">Jeff Pummill: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>In reply to:</strong> <a href="3428.php">Jeff Pummill: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3430.php">Jeff Pummill: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Reply:</strong> <a href="3430.php">Jeff Pummill: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Reply:</strong> <a href="3447.php">Don Kerr: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;I can't turn it off right now to look in BIOS (the
<br>
computer is not at home), but I think the Pentium D
<br>
which is dual-core doesn't support hyper-threading. 
<br>
&nbsp;&nbsp;The program I made relies on an MPI library (it is
<br>
not a benchmarking program). I think you are right,
<br>
maibe I should run a benchmarking program first to see
<br>
what happens. If you have a benchmarking program I
<br>
would gladly test it. 
<br>
&nbsp;&nbsp;&nbsp;What is the best way to debug OpenMPI programs?
<br>
Until now I ran prism which is part of the
<br>
SunClusterTools.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Victor
<br>
<p>--- Jeff Pummill &lt;jpummil_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Victor,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just on a hunch, look in your BIOS to see if
</span><br>
<span class="quotelev1">&gt; Hyperthreading is turned 
</span><br>
<span class="quotelev1">&gt; on. If so, turn it off. We have seen some unusual
</span><br>
<span class="quotelev1">&gt; behavior on some of 
</span><br>
<span class="quotelev1">&gt; our machines unless this is disabled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am interested in your progress as I have just
</span><br>
<span class="quotelev1">&gt; begun working with 
</span><br>
<span class="quotelev1">&gt; OpenMPI as well. I have used mpich for quite some
</span><br>
<span class="quotelev1">&gt; time, but felt 
</span><br>
<span class="quotelev1">&gt; compelled to get some experience with OpenMPI as
</span><br>
<span class="quotelev1">&gt; well. I just installed 
</span><br>
<span class="quotelev1">&gt; it this weekend on an AMD dual-core machine with 2
</span><br>
<span class="quotelev1">&gt; gigs of ram. Maybe I 
</span><br>
<span class="quotelev1">&gt; will try and replicate your experiment if you can
</span><br>
<span class="quotelev1">&gt; direct me to what 
</span><br>
<span class="quotelev1">&gt; program you are benchmarking.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff F. Pummill
</span><br>
<span class="quotelev1">&gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev1">&gt; University of Arkansas
</span><br>
<span class="quotelev1">&gt; Fayetteville, Arkansas 72701
</span><br>
<span class="quotelev1">&gt; (479) 575 - 4590
</span><br>
<span class="quotelev1">&gt; <a href="http://hpc.uark.edu">http://hpc.uark.edu</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; victor marian wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The problem is that my executable file runs on the
</span><br>
<span class="quotelev2">&gt; &gt; Pentium D in 80 seconds on two cores and in 25
</span><br>
<span class="quotelev1">&gt; seconds
</span><br>
<span class="quotelev2">&gt; &gt; on one core.
</span><br>
<span class="quotelev2">&gt; &gt; And on another Sun SMP machine with 20 processors
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev2">&gt; &gt; runs perfectly (the problem is perfectly
</span><br>
<span class="quotelev1">&gt; scallable).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;           Victor Marian
</span><br>
<span class="quotelev2">&gt; &gt;       Laboratory of Machine Elements and Tribology
</span><br>
<span class="quotelev2">&gt; &gt;       University Politehnica of Bucharest
</span><br>
<span class="quotelev2">&gt; &gt;       Romania
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --- Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It means that your OMPI was compiled to support
</span><br>
<span class="quotelev3">&gt; &gt;&gt; uDAPL  (a type of  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; infinibad network)  but that your computer does
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have such a card  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; installed.  Because you dont it will fall back to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ethernet.  But  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; because you are just running on a single machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You will use the  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fastest form of communication using shared
</span><br>
<span class="quotelev1">&gt; memory. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; so you can ignore  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that message.  Unless in the future you add a
</span><br>
<span class="quotelev1">&gt; uDAPL
</span><br>
<span class="quotelev3">&gt; &gt;&gt; powered network  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and you still get that message then you need to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; worry.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 10, 2007, at 9:18 AM, victor marian wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have a Pentium D computer with Solaris 10
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt; &gt;&gt; installed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I installed OpenMPI, succesfully compiled my
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fortran
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; program, but when giving
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpirun -np 2 progexe
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I receive
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [0,1,0]: uDAPL on host SERVSOLARIS was unable to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt; &gt;&gt; find
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; any NICs.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Another transport will be used instead, although
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; may result in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I am a begginer in MPI and don't know what it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt; &gt;&gt; means.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; What
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  should I do to solve the problem?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thank you.
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
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
______________________________________________________________________
<br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ______________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Moody friends. Drama queens. Your life? Nope! -
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt; &gt;&gt; their life, your  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; story. Play Sims Stories at Yahoo! Games.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://sims.yahoo.com/">http://sims.yahoo.com/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
____________________________________________________________________________________
<br>
<span class="quotelev2">&gt; &gt; Moody friends. Drama queens. Your life? Nope! -
</span><br>
<span class="quotelev1">&gt; their life, your story. Play Sims Stories at Yahoo!
</span><br>
<span class="quotelev1">&gt; Games.
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://sims.yahoo.com/">http://sims.yahoo.com/</a>  
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________________________________________________________
<br>
Luggage? GPS? Comic books? 
<br>
Check out fitting gifts for grads at Yahoo! Search
<br>
<a href="http://search.yahoo.com/search?fr=oni_on_mail&amp;p=graduation+gifts&amp;cs=bz">http://search.yahoo.com/search?fr=oni_on_mail&amp;p=graduation+gifts&amp;cs=bz</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3430.php">Jeff Pummill: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Previous message:</strong> <a href="3428.php">Jeff Pummill: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>In reply to:</strong> <a href="3428.php">Jeff Pummill: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3430.php">Jeff Pummill: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Reply:</strong> <a href="3430.php">Jeff Pummill: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Reply:</strong> <a href="3447.php">Don Kerr: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
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
