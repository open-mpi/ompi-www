<?
$subject_val = "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and	SLURMon	Debian	(Lenny)]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 04:33:43 2009" -->
<!-- isoreceived="20090403083343" -->
<!-- sent="Fri, 03 Apr 2009 16:33:33 +0800" -->
<!-- isosent="20090403083333" -->
<!-- name="Jerome BENOIT" -->
<!-- email="ml.jgmbenoit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: Re: Configure OpenMPI and	SLURMon	Debian	(Lenny)]" -->
<!-- id="49D5C9DD.7090504_at_mailsnare.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EB71FB49-4EB1-49C4-8F14-3B5CF449D187_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Fwd: Re: Configure OpenMPI and	SLURMon	Debian	(Lenny)]<br>
<strong>From:</strong> Jerome BENOIT (<em>ml.jgmbenoit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-03 04:33:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8757.php">Francesco Pietra: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>Previous message:</strong> <a href="8755.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8615.php">George Bosilca: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURMon	Debian	(Lenny)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8760.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<li><strong>Reply:</strong> <a href="8760.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello List !
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; The range of ports for the OOB TCP has been removed by commit r20390. 
</span><br>
<span class="quotelev1">&gt; Apparently it was replaced by the static port functionality. Only the 
</span><br>
<span class="quotelev1">&gt; TCP BTL use the range mechanism.
</span><br>
<p><p>if applicable, what is the parameter name for the this static port ?
<br>
<p><p>Thanks in advance,
<br>
Jerome
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 27, 2009, at 08:56 , Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did we change anything about the fixed ports stuff between 1.3.0 and 
</span><br>
<span class="quotelev2">&gt;&gt; 1.3.1?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jerome -- can you send the full mpirun command / environment variables 
</span><br>
<span class="quotelev2">&gt;&gt; / MCA file settings that you tried to run to generate the error 
</span><br>
<span class="quotelev2">&gt;&gt; message that you showed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 27, 2009, at 5:52 AM, Manuel Prinz wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am Freitag, den 27.03.2009, 20:34 +0800 schrieb Jerome BENOIT:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I have just tried the Sid package (1.3-2), but it does not work 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; properly
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; (when the firewall are off)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Though this should work, the version in Sid is broken in other respects.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do not recommend using it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I have just read that the current stable version for OpenMPI is now 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.3.1:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I will give it a try once it will be packaged in Sid.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm the Open MPI maintainer in Debian and am planning to upload a fixed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version soon, possible around middle of next week. (It has to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coordinated with the release team.) There is a working version availble
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in SVN (try &quot;debcheckout openmpi&quot;). You can either build it yourself or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I could build it for you. You can mail me in private if you'd like me to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do so. Please not that installing the new version will break other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI-related Debian packages. I can explain you the details in private
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mail since I think this is off-topic for the list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Manuel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8757.php">Francesco Pietra: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>Previous message:</strong> <a href="8755.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8615.php">George Bosilca: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURMon	Debian	(Lenny)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8760.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<li><strong>Reply:</strong> <a href="8760.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]"</a>
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
