<?
$subject_val = "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURMon	Debian	(Lenny)]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 08:56:26 2009" -->
<!-- isoreceived="20090327125626" -->
<!-- sent="Fri, 27 Mar 2009 05:56:21 -0700" -->
<!-- isosent="20090327125621" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURMon	Debian	(Lenny)]" -->
<!-- id="61CB7276-E1B5-4FF7-A122-60ACCEB43E99_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1238158361.4321.15.camel_at_ce170155.zmb.uni-essen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURMon	Debian	(Lenny)]<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 08:56:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8612.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and	SLURMon	Debian	(Lenny)]"</a>
<li><strong>Previous message:</strong> <a href="8610.php">Manuel Prinz: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian	(Lenny)]"</a>
<li><strong>In reply to:</strong> <a href="8610.php">Manuel Prinz: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian	(Lenny)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8612.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and	SLURMon	Debian	(Lenny)]"</a>
<li><strong>Reply:</strong> <a href="8612.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and	SLURMon	Debian	(Lenny)]"</a>
<li><strong>Reply:</strong> <a href="8615.php">George Bosilca: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURMon	Debian	(Lenny)]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>Did we change anything about the fixed ports stuff between 1.3.0 and  
<br>
1.3.1?
<br>
<p>Jerome -- can you send the full mpirun command / environment  
<br>
variables / MCA file settings that you tried to run to generate the  
<br>
error message that you showed?
<br>
<p><p>On Mar 27, 2009, at 5:52 AM, Manuel Prinz wrote:
<br>
<p><span class="quotelev1">&gt; Am Freitag, den 27.03.2009, 20:34 +0800 schrieb Jerome BENOIT:
</span><br>
<span class="quotelev2">&gt; &gt; I have just tried the Sid package (1.3-2), but it does not work  
</span><br>
<span class="quotelev1">&gt; properly
</span><br>
<span class="quotelev2">&gt; &gt; (when the firewall are off)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Though this should work, the version in Sid is broken in other  
</span><br>
<span class="quotelev1">&gt; respects.
</span><br>
<span class="quotelev1">&gt; I do not recommend using it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have just read that the current stable version for OpenMPI is  
</span><br>
<span class="quotelev1">&gt; now 1.3.1:
</span><br>
<span class="quotelev2">&gt; &gt; I will give it a try once it will be packaged in Sid.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm the Open MPI maintainer in Debian and am planning to upload a  
</span><br>
<span class="quotelev1">&gt; fixed
</span><br>
<span class="quotelev1">&gt; version soon, possible around middle of next week. (It has to be
</span><br>
<span class="quotelev1">&gt; coordinated with the release team.) There is a working version  
</span><br>
<span class="quotelev1">&gt; availble
</span><br>
<span class="quotelev1">&gt; in SVN (try &quot;debcheckout openmpi&quot;). You can either build it yourself  
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; I could build it for you. You can mail me in private if you'd like  
</span><br>
<span class="quotelev1">&gt; me to
</span><br>
<span class="quotelev1">&gt; do so. Please not that installing the new version will break other
</span><br>
<span class="quotelev1">&gt; MPI-related Debian packages. I can explain you the details in private
</span><br>
<span class="quotelev1">&gt; mail since I think this is off-topic for the list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Manuel
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
<li><strong>Next message:</strong> <a href="8612.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and	SLURMon	Debian	(Lenny)]"</a>
<li><strong>Previous message:</strong> <a href="8610.php">Manuel Prinz: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian	(Lenny)]"</a>
<li><strong>In reply to:</strong> <a href="8610.php">Manuel Prinz: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian	(Lenny)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8612.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and	SLURMon	Debian	(Lenny)]"</a>
<li><strong>Reply:</strong> <a href="8612.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and	SLURMon	Debian	(Lenny)]"</a>
<li><strong>Reply:</strong> <a href="8615.php">George Bosilca: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURMon	Debian	(Lenny)]"</a>
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
