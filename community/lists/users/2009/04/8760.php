<?
$subject_val = "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 09:20:27 2009" -->
<!-- isoreceived="20090403132027" -->
<!-- sent="Fri, 3 Apr 2009 09:20:20 -0400" -->
<!-- isosent="20090403132020" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]" -->
<!-- id="C70CC403-A048-4B86-9A90-C585DDE2686E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49D5C9DD.7090504_at_mailsnare.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-03 09:20:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8761.php">Segovia, Andrea: "[OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5"</a>
<li><strong>Previous message:</strong> <a href="8759.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>In reply to:</strong> <a href="8756.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and	SLURMon	Debian	(Lenny)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8762.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<li><strong>Reply:</strong> <a href="8762.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What George is saying is that OMPI has two different systems that use  
<br>
sockets: the BTL (MPI communications) and the OOB (OMPI's internal  
<br>
management communications).
<br>
<p>We've been talking about the TCP BTL parameters over the rest of this  
<br>
thread.
<br>
<p>For the TCP OOB, it looks like the parameter name is  
<br>
&quot;oob_tcp_static_ports&quot;.  I think it takes a comma-delimited list of  
<br>
ports.  You can probably specify, say, 10000 for btl_tcp_port_min_v4  
<br>
and 9000 for oob_tcp_static_ports.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca oob_tcp_static_ports 9000 --mca oob_tcp_static_ports  
<br>
10000 --mca btl tcp,self ring
<br>
<p>If you don't want to put those two variables on every mpirun command,  
<br>
you can set them in your environment, put them in your personal params  
<br>
file, or in the master params file.  Just make sure that those files  
<br>
are either the same on all nodes or visible on all nodes.  :-)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
<br>
<p><p>On Apr 3, 2009, at 4:33 AM, Jerome BENOIT wrote:
<br>
<p><span class="quotelev1">&gt; Hello List !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The range of ports for the OOB TCP has been removed by commit  
</span><br>
<span class="quotelev1">&gt; r20390.
</span><br>
<span class="quotelev2">&gt; &gt; Apparently it was replaced by the static port functionality. Only  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; TCP BTL use the range mechanism.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if applicable, what is the parameter name for the this static port ?
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="8761.php">Segovia, Andrea: "[OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5"</a>
<li><strong>Previous message:</strong> <a href="8759.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>In reply to:</strong> <a href="8756.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and	SLURMon	Debian	(Lenny)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8762.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<li><strong>Reply:</strong> <a href="8762.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]"</a>
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
