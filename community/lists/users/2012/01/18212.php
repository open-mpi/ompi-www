<?
$subject_val = "Re: [OMPI users] system() call corrupts MPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 09:52:23 2012" -->
<!-- isoreceived="20120119145223" -->
<!-- sent="Thu, 19 Jan 2012 09:52:13 -0500" -->
<!-- isosent="20120119145213" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] system() call corrupts MPI processes" -->
<!-- id="4F954CE5-6219-4607-A357-E0D18CE52B05_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1326956239.4678.YahooMailNeo_at_web121004.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] system() call corrupts MPI processes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 09:52:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18213.php">Jeff Squyres: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Previous message:</strong> <a href="18211.php">Jeff Squyres: "Re: [OMPI users] FW: mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<li><strong>In reply to:</strong> <a href="18206.php">Randolph Pullen: "[OMPI users] system() call corrupts MPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18216.php">Durga Choudhury: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<li><strong>Reply:</strong> <a href="18216.php">Durga Choudhury: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Which network transport are you using, and what version of Open MPI are you using?  Do you have OpenFabrics support compiled into your Open MPI installation?
<br>
<p>If you're just using TCP and/or shared memory, I can't think of a reason immediately as to why this wouldn't work, but there may be a subtle interaction in there somewhere that causes badness (e.g., memory corruption).
<br>
<p><p>On Jan 19, 2012, at 1:57 AM, Randolph Pullen wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a section in my code running in rank 0 that must start a perl program that it then connects to via a tcp socket.
</span><br>
<span class="quotelev1">&gt; The initialisation section is shown here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     sprintf(buf, &quot;%s/session_server.pl -p %d &amp;&quot;, PATH,port);
</span><br>
<span class="quotelev1">&gt;     int i = system(buf);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;system returned %d\n&quot;, i);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some time after I run this code, while waiting for the data from the perl program, the error below occurs:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; qplan connection
</span><br>
<span class="quotelev1">&gt; DCsession_fetch: waiting for Mcode data...
</span><br>
<span class="quotelev1">&gt; [dc1:05387] [[40050,1],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file rml_oob_send.c at line 105
</span><br>
<span class="quotelev1">&gt; [dc1:05387] [[40050,1],0] could not get route to [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt; [dc1:05387] [[40050,1],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file base/plm_base_proxy.c at line 86
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that the linux system() call is breaking OpenMPI internal connections.  Removing the system() call and executing the perl code externaly fixes the problem but I can't go into production like that as its a security issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (environment: OpenMPI 1.4.1 on kernel Linux dc1 2.6.18-274.3.1.el5.028stab094.3  using TCP and mpirun)
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
<li><strong>Next message:</strong> <a href="18213.php">Jeff Squyres: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Previous message:</strong> <a href="18211.php">Jeff Squyres: "Re: [OMPI users] FW: mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<li><strong>In reply to:</strong> <a href="18206.php">Randolph Pullen: "[OMPI users] system() call corrupts MPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18216.php">Durga Choudhury: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<li><strong>Reply:</strong> <a href="18216.php">Durga Choudhury: "Re: [OMPI users] system() call corrupts MPI processes"</a>
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
