<?
$subject_val = "Re: [OMPI users] Passing data structure";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 12 08:36:01 2008" -->
<!-- isoreceived="20080412123601" -->
<!-- sent="Sat, 12 Apr 2008 08:35:51 -0400" -->
<!-- isosent="20080412123551" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Passing data structure" -->
<!-- id="2DB13C78-F356-45C0-85C2-AC9CF72B37B8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3345ae180804110933m3bb9e35cpbbd65fd9c8f438ec_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Passing data structure<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-12 08:35:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5383.php">Andreas Schäfer: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
<li><strong>Previous message:</strong> <a href="5381.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
<li><strong>In reply to:</strong> <a href="5377.php">Alessandro Palandri: "[OMPI users] Passing data structure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since you are using C++, you might also want to investigate the Boost C 
<br>
++ MPI bindings.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.boost.org/doc/libs/1_35_0/doc/html/mpi.html">http://www.boost.org/doc/libs/1_35_0/doc/html/mpi.html</a>
<br>
<p><p><p>On Apr 11, 2008, at 12:33 PM, Alessandro Palandri wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a new user of MPI and I would like to have your opinion on the  
</span><br>
<span class="quotelev1">&gt; following issue.
</span><br>
<span class="quotelev1">&gt; With 1 processor I keep the data in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; std::vector&lt;std::vector&lt;double&gt; &gt; X
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I call a function that takes various arguments, among which  
</span><br>
<span class="quotelev1">&gt; X[ i ] and X[ j ], i.e. two sub-vectors of X.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With MPI I would have the same function execute on different  
</span><br>
<span class="quotelev1">&gt; processors for different values of i and j in X[ i ] and X[ j ].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From my understanding since std::vector is not an MPI type it cannot  
</span><br>
<span class="quotelev1">&gt; be passed neither as a message nor an element of an MPI structure. I  
</span><br>
<span class="quotelev1">&gt; thought of using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; double X[200][4000]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which MPI would pass but I don't see how to isolate a single row,  
</span><br>
<span class="quotelev1">&gt; i.e. X[99] would not make sense in this context.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestion for an efficient and possibly simple solution?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alessandro
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5383.php">Andreas Schäfer: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
<li><strong>Previous message:</strong> <a href="5381.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
<li><strong>In reply to:</strong> <a href="5377.php">Alessandro Palandri: "[OMPI users] Passing data structure"</a>
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
