<?
$subject_val = "Re: [OMPI users] Cannot compile on Linux Itanium system";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 27 12:03:53 2009" -->
<!-- isoreceived="20090127170353" -->
<!-- sent="Tue, 27 Jan 2009 12:03:44 -0500" -->
<!-- isosent="20090127170344" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot compile on Linux Itanium system" -->
<!-- id="77ACB8E2-E0FE-4DEB-A97D-94420FBD0A76_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1D367926756E9848BABD800E249AA5E042633A_at_NASCMEX01.na.mscsoftware.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot compile on Linux Itanium system<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-27 12:03:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7864.php">Amos Leffler: "[OMPI users] Compilers"</a>
<li><strong>Previous message:</strong> <a href="7862.php">Jeff Squyres: "Re: [OMPI users] OpenMPI-1.3 and XGrid"</a>
<li><strong>In reply to:</strong> <a href="7851.php">Joe Griffin: "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7869.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Joe -- let us know what you find...
<br>
<p>&nbsp;From his config.log, I think his configure line was:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure --prefix=/opt/openmpi-1.3
<br>
<p>See the full attachment here (scroll down to the bottom of the web  
<br>
page):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2009/01/7810.php">http://www.open-mpi.org/community/lists/users/2009/01/7810.php</a>
<br>
<p><p><p>On Jan 26, 2009, at 4:31 PM, Joe Griffin wrote:
<br>
<p><span class="quotelev1">&gt; Tony,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know what iac is.  I use ias for my ASM code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ia64b &lt;82&gt; cd /opt/intel
</span><br>
<span class="quotelev1">&gt; ia64b &lt;83&gt; find . -name 'iac'
</span><br>
<span class="quotelev1">&gt; ia64b &lt;84&gt; find . -name 'ias'
</span><br>
<span class="quotelev1">&gt; ./fc/10.1.012/bin/ias
</span><br>
<span class="quotelev1">&gt; ./cc/10.1.012/bin/ias
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, if you want another data point and see if my compilers work I
</span><br>
<span class="quotelev1">&gt; will gladly try to compile if you send me your configure / make lines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aiming to help if I can,
</span><br>
<span class="quotelev1">&gt; Joe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Iannetti, Anthony C. (GRC-RTB0)
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, January 26, 2009 12:45 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Cannot compile on Linux Itanium system
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    I could successfully compile OpenMPI versions 1.2.X on Itanium
</span><br>
<span class="quotelev1">&gt; Linux
</span><br>
<span class="quotelev2">&gt;&gt; with the same compilers.  I was never able to compile the 1.3 beta
</span><br>
<span class="quotelev2">&gt;&gt; versions on IA64 Linux.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Joe,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   I am using whatever assembler that ./configure provides.  I believe
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev2">&gt;&gt; is icc.  Should I set AS (I think) to iac?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Tony
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7864.php">Amos Leffler: "[OMPI users] Compilers"</a>
<li><strong>Previous message:</strong> <a href="7862.php">Jeff Squyres: "Re: [OMPI users] OpenMPI-1.3 and XGrid"</a>
<li><strong>In reply to:</strong> <a href="7851.php">Joe Griffin: "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7869.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
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
