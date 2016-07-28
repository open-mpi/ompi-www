<?
$subject_val = "Re: [OMPI users] vprotocol pessimist";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 12:49:50 2008" -->
<!-- isoreceived="20080715164950" -->
<!-- sent="Tue, 15 Jul 2008 12:54:21 -0400" -->
<!-- isosent="20080715165421" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] vprotocol pessimist" -->
<!-- id="487CD63D.10507_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="892497.43989.qm_at_web55402.mail.re4.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] vprotocol pessimist<br>
<strong>From:</strong> Rolf vandeVaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-15 12:54:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6086.php">Daniel Felix Ferber: "[OMPI users] Getting default hostfile on Open MPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="6084.php">Tom Riddle: "Re: [OMPI users] vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="6084.php">Tom Riddle: "Re: [OMPI users] vprotocol pessimist"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And if you want to stop seeing it in the short term, you have at least 
<br>
two choices I know of.
<br>
<p>At configure time, add this to your configure line.
<br>
<p>--enable-mca-no-build=vprotocol
<br>
<p>This will prevent that component from being built, and will eliminate 
<br>
the message. 
<br>
<p>If it is in there, you can force the component to not be opened (and 
<br>
therefore eliminate the message) at run time with this mca parameter.
<br>
<p>--mca pml ^v
<br>
<p>Rolf
<br>
<p>Tom Riddle wrote:
<br>
<span class="quotelev1">&gt; Thanks! I hadn't seen any adverse effects to anything I was running 
</span><br>
<span class="quotelev1">&gt; but I'd thought I'd ask anyway. Tom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On *Tue, 7/15/08, Jeff Squyres /&lt;jsquyres_at_[hidden]&gt;/* wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subject: Re: [OMPI users] vprotocol pessimist
</span><br>
<span class="quotelev1">&gt;     To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Cc: rarebitusa_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     Date: Tuesday, July 15, 2008, 8:52 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It's also only on the developer trunk (and v1.3) branch; we have an  
</span><br>
<span class="quotelev1">&gt;     open ticket:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           <a href="https://svn.open-mpi.org/trac/ompi/ticket/1328">https://svn.open-mpi.org/trac/ompi/ticket/1328</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I'll add you into the CC list so that you can see what happens as we  
</span><br>
<span class="quotelev1">&gt;     fix it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Jul 15, 2008, at 11:49 AM, Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; This is a harmless error, related to
</span><br>
<span class="quotelev1">&gt;      fault tolerance component. If  
</span><br>
<span class="quotelev2">&gt;     &gt; you don't need FT, you can safely ignore it. It will disappear soon.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Aurelien
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Le 15 juil. 08 &#224; 11:22, Tom Riddle a &#233;crit :
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; I wonder if anyone can shed some light on what exactly this is  
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; referring to? At the start of any mpirun program I get the following
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; mca: base: component_find: unable to open vprotocol pessimist: file  
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; not found (ignored)
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; I combed the FAQs and the forum archives but didn't see anything  
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; that jumped out. I am running the latest version from the openmpi  
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; trunk. TIA, Tom
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Jeff Squyres
</span><br>
<span class="quotelev1">&gt;     Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="6086.php">Daniel Felix Ferber: "[OMPI users] Getting default hostfile on Open MPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="6084.php">Tom Riddle: "Re: [OMPI users] vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="6084.php">Tom Riddle: "Re: [OMPI users] vprotocol pessimist"</a>
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
