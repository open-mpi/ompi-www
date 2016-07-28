<?
$subject_val = "Re: [OMPI users] [Fwd: Re: ConfigureOpenMPIand	SLURMon	Debian	(Lenny)]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 10:34:57 2009" -->
<!-- isoreceived="20090403143457" -->
<!-- sent="Fri, 3 Apr 2009 10:34:52 -0400" -->
<!-- isosent="20090403143452" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: Re: ConfigureOpenMPIand	SLURMon	Debian	(Lenny)]" -->
<!-- id="04929B2A-2166-4F8A-AD20-039255FCDAA8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49D61A25.40902_at_mailsnare.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Fwd: Re: ConfigureOpenMPIand	SLURMon	Debian	(Lenny)]<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-03 10:34:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8765.php">Terry Dontje: "Re: [OMPI users] Problems Compiling OpenMPI with Sun Studio 12"</a>
<li><strong>Previous message:</strong> <a href="8763.php">Brian W. Barrett: "Re: [OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5"</a>
<li><strong>In reply to:</strong> <a href="8762.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gahh -- you're right.  I accidentally checked our development trunk,  
<br>
not the released v1.3 series...  Sorry for the confusion.
<br>
<p>George, too, was referring to something that happened on our  
<br>
development trunk, not the v1.3 series.
<br>
<p><p>On Apr 3, 2009, at 10:16 AM, Jerome BENOIT wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the reply !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I asked because
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ompi_info --param all all | grep static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gave nothing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This feature is certainly for the coming version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; What George is saying is that OMPI has two different systems that  
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev2">&gt; &gt; sockets: the BTL (MPI communications) and the OOB (OMPI's internal
</span><br>
<span class="quotelev2">&gt; &gt; management communications).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We've been talking about the TCP BTL parameters over the rest of  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev2">&gt; &gt; thread.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For the TCP OOB, it looks like the parameter name is
</span><br>
<span class="quotelev2">&gt; &gt; &quot;oob_tcp_static_ports&quot;.  I think it takes a comma-delimited list of
</span><br>
<span class="quotelev2">&gt; &gt; ports.  You can probably specify, say, 10000 for  
</span><br>
<span class="quotelev1">&gt; btl_tcp_port_min_v4 and
</span><br>
<span class="quotelev2">&gt; &gt; 9000 for oob_tcp_static_ports.  For example:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     mpirun --mca oob_tcp_static_ports 9000 --mca  
</span><br>
<span class="quotelev1">&gt; oob_tcp_static_ports
</span><br>
<span class="quotelev2">&gt; &gt; 10000 --mca btl tcp,self ring
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you don't want to put those two variables on every mpirun  
</span><br>
<span class="quotelev1">&gt; command,
</span><br>
<span class="quotelev2">&gt; &gt; you can set them in your environment, put them in your personal  
</span><br>
<span class="quotelev1">&gt; params
</span><br>
<span class="quotelev2">&gt; &gt; file, or in the master params file.  Just make sure that those  
</span><br>
<span class="quotelev1">&gt; files are
</span><br>
<span class="quotelev2">&gt; &gt; either the same on all nodes or visible on all nodes.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had my lesson !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jerome
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 3, 2009, at 4:33 AM, Jerome BENOIT wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello List !
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; The range of ports for the OOB TCP has been removed by commit  
</span><br>
<span class="quotelev1">&gt; r20390.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Apparently it was replaced by the static port functionality.  
</span><br>
<span class="quotelev1">&gt; Only the
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; TCP BTL use the range mechanism.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; if applicable, what is the parameter name for the this static  
</span><br>
<span class="quotelev1">&gt; port ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="8765.php">Terry Dontje: "Re: [OMPI users] Problems Compiling OpenMPI with Sun Studio 12"</a>
<li><strong>Previous message:</strong> <a href="8763.php">Brian W. Barrett: "Re: [OMPI users] Problems Compiling OpenMPI with Sun Studio 12 compilers on RHEL 5"</a>
<li><strong>In reply to:</strong> <a href="8762.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPIand	SLURMon	Debian	(Lenny)]"</a>
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
