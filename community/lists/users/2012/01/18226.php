<?
$subject_val = "Re: [OMPI users] Fw:  system() call corrupts MPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 21:57:50 2012" -->
<!-- isoreceived="20120120025750" -->
<!-- sent="Thu, 19 Jan 2012 19:57:41 -0700" -->
<!-- isosent="20120120025741" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fw:  system() call corrupts MPI processes" -->
<!-- id="6BE71254-9519-49EB-959B-AF28CD36C2BB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1327026806.59157.YahooMailNeo_at_web121001.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fw:  system() call corrupts MPI processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 21:57:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18227.php">Randolph Pullen: "Re: [OMPI users] Fw:  system() call corrupts MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18225.php">Randolph Pullen: "[OMPI users] Fw:  system() call corrupts MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18225.php">Randolph Pullen: "[OMPI users] Fw:  system() call corrupts MPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18227.php">Randolph Pullen: "Re: [OMPI users] Fw:  system() call corrupts MPI processes"</a>
<li><strong>Reply:</strong> <a href="18227.php">Randolph Pullen: "Re: [OMPI users] Fw:  system() call corrupts MPI processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is bizarre. Afraid you have me stumped here - I can't think why an action in the perl script would trigger an action in OMPI. If your OMPI proc doesn't in any way read the info in &quot;log&quot; (using your example), does it still have a problem? In other words, if the perl script still executes a system command, but the OMPI proc doesn't interact with it in any way, does the problem persist?
<br>
<p>What I'm searching for is the connection. If your OMPI proc reads the results of that system command, then it's possible that something in your app is corrupting memory during the read operation - e.g., you are reading in more info than you have allocated memory.
<br>
<p><p>On Jan 19, 2012, at 7:33 PM, Randolph Pullen wrote:
<br>
<p><span class="quotelev1">&gt; FYI
</span><br>
<span class="quotelev1">&gt; ----- Forwarded Message -----
</span><br>
<span class="quotelev1">&gt; From: Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Jeff Squyres &lt;jsquyres_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Friday, 20 January 2012 12:45 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] system() call corrupts MPI processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using TCP on 1.4.1 (its actually IPoIB)
</span><br>
<span class="quotelev1">&gt; OpenIB is compiled in.
</span><br>
<span class="quotelev1">&gt; Note that these nodes are containers running in OpenVZ where IB is not available.  there may be some SDP running in system level routines on the VH but this is unlikely.
</span><br>
<span class="quotelev1">&gt; OpenIB is not available to the VMs.  they happily get TCP services from the VH
</span><br>
<span class="quotelev1">&gt; In any case, the problem still occurs if I use: --mca btl tcp,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have traced the perl code and observed that OpenMPI gets confused whenever the perl program executes a system command itself
</span><br>
<span class="quotelev1">&gt; eg:
</span><br>
<span class="quotelev1">&gt; `command 2&gt;&amp;1 1&gt; log`;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This probably narrows it down (I hope)
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Friday, 20 January 2012 1:52 AM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] system() call corrupts MPI processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which network transport are you using, and what version of Open MPI are you using?  Do you have OpenFabrics support compiled into your Open MPI installation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you're just using TCP and/or shared memory, I can't think of a reason immediately as to why this wouldn't work, but there may be a subtle interaction in there somewhere that causes badness (e.g., memory corruption).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 19, 2012, at 1:57 AM, Randolph Pullen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have a section in my code running in rank 0 that must start a perl program that it then connects to via a tcp socket.
</span><br>
<span class="quotelev2">&gt; &gt; The initialisation section is shown here:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    sprintf(buf, &quot;%s/session_server.pl -p %d &amp;&quot;, PATH,port);
</span><br>
<span class="quotelev2">&gt; &gt;    int i = system(buf);
</span><br>
<span class="quotelev2">&gt; &gt;    printf(&quot;system returned %d\n&quot;, i);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Some time after I run this code, while waiting for the data from the perl program, the error below occurs:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; qplan connection
</span><br>
<span class="quotelev2">&gt; &gt; DCsession_fetch: waiting for Mcode data...
</span><br>
<span class="quotelev2">&gt; &gt; [dc1:05387] [[40050,1],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file rml_oob_send.c at line 105
</span><br>
<span class="quotelev2">&gt; &gt; [dc1:05387] [[40050,1],0] could not get route to [[INVALID],INVALID]
</span><br>
<span class="quotelev2">&gt; &gt; [dc1:05387] [[40050,1],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file base/plm_base_proxy.c at line 86
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It seems that the linux system() call is breaking OpenMPI internal connections.  Removing the system() call and executing the perl code externaly fixes the problem but I can't go into production like that as its a security issue.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any ideas ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (environment: OpenMPI 1.4.1 on kernel Linux dc1 2.6.18-274.3.1.el5.028stab094.3  using TCP and mpirun)
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18226/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18227.php">Randolph Pullen: "Re: [OMPI users] Fw:  system() call corrupts MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18225.php">Randolph Pullen: "[OMPI users] Fw:  system() call corrupts MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18225.php">Randolph Pullen: "[OMPI users] Fw:  system() call corrupts MPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18227.php">Randolph Pullen: "Re: [OMPI users] Fw:  system() call corrupts MPI processes"</a>
<li><strong>Reply:</strong> <a href="18227.php">Randolph Pullen: "Re: [OMPI users] Fw:  system() call corrupts MPI processes"</a>
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
