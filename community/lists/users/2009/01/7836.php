<?
$subject_val = "Re: [OMPI users] MPI_THREAD_MULTIPLE not provided";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 14:31:49 2009" -->
<!-- isoreceived="20090126193149" -->
<!-- sent="Mon, 26 Jan 2009 14:31:40 -0500" -->
<!-- isosent="20090126193140" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_THREAD_MULTIPLE not provided" -->
<!-- id="EFDB219A-6356-4353-B31B-49CDBFCE1B07_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="234773.67163.qm_at_web54303.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_THREAD_MULTIPLE not provided<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 14:31:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7837.php">Don Kerr: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="7835.php">Jeff Squyres: "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<li><strong>In reply to:</strong> <a href="7824.php">Ali Copey: "[OMPI users] MPI_THREAD_MULTIPLE not provided"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_THREAD_MULTIPLE support in the 1.2 series is unfortunately pretty  
<br>
broken/non-existent.
<br>
<p>The v1.3 series has MPI point-to-point support for several networks  
<br>
with MPI_THREAD_MULTIPLE; check the README file.
<br>
<p><p>On Jan 26, 2009, at 9:21 AM, Ali Copey wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to get multiple thread running, and have openMPI 1.2.8  
</span><br>
<span class="quotelev1">&gt; compiled with threading enabled:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xxx_at_xxx:/usr/lib$ ompi_info | grep Thread
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: yes, progress: no)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; however, when I attempt to get MPI_THREAD_MULTIPLE, ...FUNNELED  
</span><br>
<span class="quotelev1">&gt; or ...SERIALIZED I am returned MPI_THREAD_SINGLE (code fragment  
</span><br>
<span class="quotelev1">&gt; follows):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int provided = MPI::Init_thread(MPI_THREAD_MULTIPLE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     switch(provided)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;     case MPI_THREAD_SINGLE: cout &lt;&lt; &quot;MPI_THREAD_SINGLE&quot;; break;
</span><br>
<span class="quotelev1">&gt;     case MPI_THREAD_FUNNELED: cout &lt;&lt; &quot;MPI_THREAD_FUNNELED&quot;; break;
</span><br>
<span class="quotelev1">&gt;     case MPI_THREAD_SERIALIZED: cout &lt;&lt; &quot;MPI_THREAD_SERIALIZED&quot;;  
</span><br>
<span class="quotelev1">&gt; break;
</span><br>
<span class="quotelev1">&gt;     case MPI_THREAD_MULTIPLE: cout &lt;&lt; &quot;MPI_THREAD_MULTIPLE&quot;; break;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I missing a compiler flag somewhere?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; System:
</span><br>
<span class="quotelev1">&gt; Linux xxx 2.6.26-1-amd64 #1 SMP Thu Oct 9 14:16:53 UTC 2008 x86_64  
</span><br>
<span class="quotelev1">&gt; GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="7837.php">Don Kerr: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="7835.php">Jeff Squyres: "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<li><strong>In reply to:</strong> <a href="7824.php">Ali Copey: "[OMPI users] MPI_THREAD_MULTIPLE not provided"</a>
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
