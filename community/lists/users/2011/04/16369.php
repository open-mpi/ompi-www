<?
$subject_val = "Re: [OMPI users] MPI_Comm_create prevents external socket connections";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 28 08:01:24 2011" -->
<!-- isoreceived="20110428120124" -->
<!-- sent="Thu, 28 Apr 2011 08:01:18 -0400" -->
<!-- isosent="20110428120118" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_create prevents external socket connections" -->
<!-- id="65F8CA19-B8A6-4FA3-962E-72E607BA350B_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="700583.33144.qm_at_web121018.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_create prevents external socket connections<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-28 08:01:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16370.php">Jeff Squyres: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Previous message:</strong> <a href="16368.php">Jeff Squyres: "Re: [OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
<li><strong>In reply to:</strong> <a href="16365.php">Randolph Pullen: "[OMPI users] MPI_Comm_create prevents external socket connections"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_Comm_create shouldn't have any effect on existing fd's.
<br>
<p>Have you run your code through a memory-checking debugger such as valgrind?
<br>
<p><p>On Apr 28, 2011, at 12:57 AM, Randolph Pullen wrote:
<br>
<p><span class="quotelev1">&gt; I have a problem with MPI_Comm_create,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My server application has 2 processes per node, 1 listener and 1 worker.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Each listener monitors a specified port for incoming TCP connections with the goal that on receipt of a request it will distribute it over the workers in a SIMD fashion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This all works fine unless MPI_Comm_create is called on the listener process.  Then after the call the incoming socket cannot be reached by the external client processes.  The client reports &#147;&#148;Could&#146;t open socket&#148;.  No other error is apparent.   I have tried using a variety of different sockets but to no effect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use OpenMPI 1.4.1 on FD10 with vanilla TCP.  The install is totally standard with no changes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a known issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An help appreciated.
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16370.php">Jeff Squyres: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Previous message:</strong> <a href="16368.php">Jeff Squyres: "Re: [OMPI users] --enable-progress-threads broken in 1.5.3?"</a>
<li><strong>In reply to:</strong> <a href="16365.php">Randolph Pullen: "[OMPI users] MPI_Comm_create prevents external socket connections"</a>
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
