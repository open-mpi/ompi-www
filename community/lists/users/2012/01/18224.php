<?
$subject_val = "Re: [OMPI users] system() call corrupts MPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 20:08:20 2012" -->
<!-- isoreceived="20120120010820" -->
<!-- sent="Thu, 19 Jan 2012 18:08:11 -0700" -->
<!-- isosent="20120120010811" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] system() call corrupts MPI processes" -->
<!-- id="C36FF1CB-ED37-40D4-B7CA-3B6A1F6C466E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1327020896.31456.YahooMailNeo_at_web121001.mail.ne1.yahoo.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 20:08:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18225.php">Randolph Pullen: "[OMPI users] Fw:  system() call corrupts MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18223.php">Randolph Pullen: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18223.php">Randolph Pullen: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18222.php">Randolph Pullen: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm..well, unless you happened to guess poorly, I would think it unusually bad luck to have happened to pick the wrong port! OMPI should be selecting one via the OS, so the port it gets is somewhat random.
<br>
<p>I'm trying to understand what your MPI proc is doing. The function that is complaining is one used only for a call to MPI_Comm_spawn - are you executing such a call? This message normally would go to mpirun, which your proc should certainly know.
<br>
<p><p>On Jan 19, 2012, at 5:54 PM, Randolph Pullen wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The port is defined in config as 5000 it is used by both versions so you would think both would fail if where an issue.
</span><br>
<span class="quotelev1">&gt; Is there any way of reserving ports for non MPI use?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Friday, 20 January 2012 10:30 AM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] system() call corrupts MPI processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Randolph!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for delay - was on the road. This isn't an issue of corruption. What ORTE is complaining about is that your perl script wound up connecting to the same port that your process is listening on via ORTE. ORTE is rather particular about the message format - specifically, it requires a header that includes the name of the process and a bunch of other stuff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where did you get the port that you are passing to your perl script?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 19, 2012, at 8:22 AM, Durga Choudhury wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This is just a thought:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; according to the system() man page, 'SIGCHLD' is blocked during the
</span><br>
<span class="quotelev2">&gt; &gt; execution of the program. Since you are executing your command as a
</span><br>
<span class="quotelev2">&gt; &gt; daemon in the background, it will be permanently blocked.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Does OpenMPI daemon depend on SIGCHLD in any way? That is about the
</span><br>
<span class="quotelev2">&gt; &gt; only difference that I can think of between running the command
</span><br>
<span class="quotelev2">&gt; &gt; stand-alone (which works) and running via a system() API call (that
</span><br>
<span class="quotelev2">&gt; &gt; does not work).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Best
</span><br>
<span class="quotelev2">&gt; &gt; Durga
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Jan 19, 2012 at 9:52 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Which network transport are you using, and what version of Open MPI are you using?  Do you have OpenFabrics support compiled into your Open MPI installation?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you're just using TCP and/or shared memory, I can't think of a reason immediately as to why this wouldn't work, but there may be a subtle interaction in there somewhere that causes badness (e.g., memory corruption).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 19, 2012, at 1:57 AM, Randolph Pullen wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have a section in my code running in rank 0 that must start a perl program that it then connects to via a tcp socket.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The initialisation section is shown here:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    sprintf(buf, &quot;%s/session_server.pl -p %d &amp;&quot;, PATH,port);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    int i = system(buf);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    printf(&quot;system returned %d\n&quot;, i);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Some time after I run this code, while waiting for the data from the perl program, the error below occurs:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; qplan connection
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; DCsession_fetch: waiting for Mcode data...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [dc1:05387] [[40050,1],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file rml_oob_send.c at line 105
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [dc1:05387] [[40050,1],0] could not get route to [[INVALID],INVALID]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [dc1:05387] [[40050,1],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file base/plm_base_proxy.c at line 86
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It seems that the linux system() call is breaking OpenMPI internal connections.  Removing the system() call and executing the perl code externaly fixes the problem but I can't go into production like that as its a security issue.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Any ideas ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (environment: OpenMPI 1.4.1 on kernel Linux dc1 2.6.18-274.3.1.el5.028stab094.3  using TCP and mpirun)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18224/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18225.php">Randolph Pullen: "[OMPI users] Fw:  system() call corrupts MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18223.php">Randolph Pullen: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18223.php">Randolph Pullen: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18222.php">Randolph Pullen: "Re: [OMPI users] system() call corrupts MPI processes"</a>
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
