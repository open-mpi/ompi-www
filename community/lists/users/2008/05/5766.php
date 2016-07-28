<?
$subject_val = "Re: [OMPI users] Help: Program Terminated";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 09:27:37 2008" -->
<!-- isoreceived="20080530132737" -->
<!-- sent="Fri, 30 May 2008 09:27:27 -0400" -->
<!-- isosent="20080530132727" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: Program Terminated" -->
<!-- id="C7C38E01-FBD0-4E06-8B2F-C183E1BE23B4_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080530131747.GA13452_at_hex.inf-ra.uni-jena.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: Program Terminated<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-30 09:27:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5767.php">Josh Hursey: "Re: [OMPI users] Process size"</a>
<li><strong>Previous message:</strong> <a href="5765.php">Andreas Sch&#228;fer: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>In reply to:</strong> <a href="5765.php">Andreas Sch&#228;fer: "Re: [OMPI users] Help: Program Terminated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5777.php">Lee Amy: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>Reply:</strong> <a href="5777.php">Lee Amy: "Re: [OMPI users] Help: Program Terminated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd also like to re-emphasize something Andreas said earlier: SIGTERM  
<br>
*usually* means that some external entity is killing your  
<br>
application.  It *could* be coming from within the application itself,  
<br>
but that's not too common.
<br>
<p>You might want to look into that to find out where the SIGTERM is  
<br>
coming from.  The Microtar maintainers might have some better ideas.
<br>
<p><p>On May 30, 2008, at 9:17 AM, Andreas Sch&#228;fer wrote:
<br>
<p><span class="quotelev1">&gt; On 12:28 Fri 30 May     , Lee Amy wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 2008/5/29 Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much. If I do a shorter job it seems run well. And  
</span><br>
<span class="quotelev2">&gt;&gt; the job
</span><br>
<span class="quotelev2">&gt;&gt; dosen't repeatedly fail at the same time, but it will fail at this  
</span><br>
<span class="quotelev2">&gt;&gt; error
</span><br>
<span class="quotelev2">&gt;&gt; messages. Anyway, I'm not using a scheduling system. So any  
</span><br>
<span class="quotelev2">&gt;&gt; suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At least no easy ones, sorry. ;-) You could ask the Microtar guys if
</span><br>
<span class="quotelev1">&gt; they know anything about that problem. And of course you could use a
</span><br>
<span class="quotelev1">&gt; debugger to dig into Microtar and find the problem yourself. ^^ Open
</span><br>
<span class="quotelev1">&gt; MPI has some doc how to attach gdb to a parallel job: (and how to use
</span><br>
<span class="quotelev1">&gt; valgrind etc.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=debugging">http://www.open-mpi.org/faq/?category=debugging</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good luck!
</span><br>
<span class="quotelev1">&gt; -Andi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev1">&gt; I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (\___/)
</span><br>
<span class="quotelev1">&gt; (+'.'+)
</span><br>
<span class="quotelev1">&gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev1">&gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev1">&gt; signature to help him gain world domination!
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
<li><strong>Next message:</strong> <a href="5767.php">Josh Hursey: "Re: [OMPI users] Process size"</a>
<li><strong>Previous message:</strong> <a href="5765.php">Andreas Sch&#228;fer: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>In reply to:</strong> <a href="5765.php">Andreas Sch&#228;fer: "Re: [OMPI users] Help: Program Terminated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5777.php">Lee Amy: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>Reply:</strong> <a href="5777.php">Lee Amy: "Re: [OMPI users] Help: Program Terminated"</a>
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
