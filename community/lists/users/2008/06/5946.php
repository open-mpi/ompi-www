<?
$subject_val = "Re: [OMPI users] OpenMPI with bounds checking";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 07:31:27 2008" -->
<!-- isoreceived="20080620113127" -->
<!-- sent="Fri, 20 Jun 2008 07:31:17 -0400" -->
<!-- isosent="20080620113117" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with bounds checking" -->
<!-- id="7440FDE7-CA9E-48A0-8210-2D85A85CE3F8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0806190847p7ea7a898q998d7d308298421c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI with bounds checking<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-20 07:31:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5947.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Previous message:</strong> <a href="5945.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5939.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5978.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Reply:</strong> <a href="5978.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 19, 2008, at 11:47 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; i didn't compile OpenMPI with bounds checking, but only my  
</span><br>
<span class="quotelev1">&gt; application. Problems with OMPI compiled with bound checking remains.
</span><br>
<p>Were you checking only with the OMPI 1.2 series?  If so, is there a  
<br>
chance you could test with the OMPI trunk?  If we do have real bounds  
<br>
issues, it would be good to get them cleared up.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/6/19 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; On Jun 19, 2008, at 11:25 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; i solved using Gigabit net and eth1 interface!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, there are problems beetween Infiniband and gcc with bound  
</span><br>
<span class="quotelev1">&gt; checking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is probably not too surprising -- the IB driver gives back  
</span><br>
<span class="quotelev1">&gt; memory to the process that didn't come from malloc or other  
</span><br>
<span class="quotelev1">&gt; traditional memory allocators, and this can confuse bounds checkers,  
</span><br>
<span class="quotelev1">&gt; leading to false positives.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the upcoming v1.3 series, we added a whole pile of stuff to  
</span><br>
<span class="quotelev1">&gt; handle these kinds of false positives when running under valgrind.   
</span><br>
<span class="quotelev1">&gt; Just curious -- does the gcc bounds checking stuff give you the  
</span><br>
<span class="quotelev1">&gt; possibility of saying &quot;this memory is ok&quot;?  (valgrind does; we use  
</span><br>
<span class="quotelev1">&gt; it for IB-driver allocated or initialized memory)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it Tel: +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati_at_[hidden] _______________________________________________
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
<li><strong>Next message:</strong> <a href="5947.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Previous message:</strong> <a href="5945.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5939.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5978.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Reply:</strong> <a href="5978.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
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
