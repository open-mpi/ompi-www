<?
$subject_val = "Re: [OMPI users] OpenMPI with bounds checking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 11:47:20 2008" -->
<!-- isoreceived="20080619154720" -->
<!-- sent="Thu, 19 Jun 2008 17:47:11 +0200" -->
<!-- isosent="20080619154711" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with bounds checking" -->
<!-- id="3a37617f0806190847p7ea7a898q998d7d308298421c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B945D181-57C7-4E68-82CD-FBEC70D24BBC_at_cisco.com" -->
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
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 11:47:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5940.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Previous message:</strong> <a href="5938.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>In reply to:</strong> <a href="5938.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5940.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Reply:</strong> <a href="5940.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Reply:</strong> <a href="5946.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just a moment:
<br>
<p>i didn't compile OpenMPI with bounds checking, but only my application.
<br>
Problems with OMPI compiled with bound checking remains.
<br>
<p><p>2008/6/19 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; On Jun 19, 2008, at 11:25 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; i solved using Gigabit net and eth1 interface!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, there are problems beetween Infiniband and gcc with bound checking.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is probably not too surprising -- the IB driver gives back memory to
</span><br>
<span class="quotelev1">&gt; the process that didn't come from malloc or other traditional memory
</span><br>
<span class="quotelev1">&gt; allocators, and this can confuse bounds checkers, leading to false
</span><br>
<span class="quotelev1">&gt; positives.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the upcoming v1.3 series, we added a whole pile of stuff to handle these
</span><br>
<span class="quotelev1">&gt; kinds of false positives when running under valgrind.  Just curious -- does
</span><br>
<span class="quotelev1">&gt; the gcc bounds checking stuff give you the possibility of saying &quot;this
</span><br>
<span class="quotelev1">&gt; memory is ok&quot;?  (valgrind does; we use it for IB-driver allocated or
</span><br>
<span class="quotelev1">&gt; initialized memory)
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
<p><p><pre>
-- 
Gabriele Fatigati
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it Tel: +39 051 6171722
g.fatigati_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5939/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5940.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Previous message:</strong> <a href="5938.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>In reply to:</strong> <a href="5938.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5940.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Reply:</strong> <a href="5940.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Reply:</strong> <a href="5946.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with bounds checking"</a>
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
