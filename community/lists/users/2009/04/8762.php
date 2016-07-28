<?
$subject_val = "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 10:16:14 2009" -->
<!-- isoreceived="20090403141614" -->
<!-- sent="Fri, 03 Apr 2009 22:16:05 +0800" -->
<!-- isosent="20090403141605" -->
<!-- name="Jerome BENOIT" -->
<!-- email="ml.jgmbenoit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]" -->
<!-- id="49D61A25.40902_at_mailsnare.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C70CC403-A048-4B86-9A90-C585DDE2686E_at_cisco.com" -->
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
<strong>From:</strong> Jerome BENOIT (<em>ml.jgmbenoit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-03 10:16:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8763.php">Brian W. Barrett: "Re: [OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5"</a>
<li><strong>Previous message:</strong> <a href="8761.php">Segovia, Andrea: "[OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5"</a>
<li><strong>In reply to:</strong> <a href="8760.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8764.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: ConfigureOpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<li><strong>Reply:</strong> <a href="8764.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: ConfigureOpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply !
<br>
<p><p>I asked because
<br>
<p>&nbsp;ompi_info --param all all | grep static
<br>
<p>gave nothing.
<br>
<p>This feature is certainly for the coming version.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; What George is saying is that OMPI has two different systems that use 
</span><br>
<span class="quotelev1">&gt; sockets: the BTL (MPI communications) and the OOB (OMPI's internal 
</span><br>
<span class="quotelev1">&gt; management communications).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've been talking about the TCP BTL parameters over the rest of this 
</span><br>
<span class="quotelev1">&gt; thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the TCP OOB, it looks like the parameter name is 
</span><br>
<span class="quotelev1">&gt; &quot;oob_tcp_static_ports&quot;.  I think it takes a comma-delimited list of 
</span><br>
<span class="quotelev1">&gt; ports.  You can probably specify, say, 10000 for btl_tcp_port_min_v4 and 
</span><br>
<span class="quotelev1">&gt; 9000 for oob_tcp_static_ports.  For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mpirun --mca oob_tcp_static_ports 9000 --mca oob_tcp_static_ports 
</span><br>
<span class="quotelev1">&gt; 10000 --mca btl tcp,self ring
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you don't want to put those two variables on every mpirun command, 
</span><br>
<span class="quotelev1">&gt; you can set them in your environment, put them in your personal params 
</span><br>
<span class="quotelev1">&gt; file, or in the master params file.  Just make sure that those files are 
</span><br>
<span class="quotelev1">&gt; either the same on all nodes or visible on all nodes.  :-)
</span><br>
<p>I had my lesson !
<br>
<p>Thanks,
<br>
Jerome
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 3, 2009, at 4:33 AM, Jerome BENOIT wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello List !
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The range of ports for the OOB TCP has been removed by commit r20390.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Apparently it was replaced by the static port functionality. Only the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; TCP BTL use the range mechanism.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if applicable, what is the parameter name for the this static port ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8763.php">Brian W. Barrett: "Re: [OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5"</a>
<li><strong>Previous message:</strong> <a href="8761.php">Segovia, Andrea: "[OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5"</a>
<li><strong>In reply to:</strong> <a href="8760.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8764.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: ConfigureOpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<li><strong>Reply:</strong> <a href="8764.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: ConfigureOpenMPIand	SLURMon	Debian	(Lenny)]"</a>
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
