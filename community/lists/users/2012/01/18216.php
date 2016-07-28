<?
$subject_val = "Re: [OMPI users] system() call corrupts MPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 10:22:17 2012" -->
<!-- isoreceived="20120119152217" -->
<!-- sent="Thu, 19 Jan 2012 10:22:13 -0500" -->
<!-- isosent="20120119152213" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] system() call corrupts MPI processes" -->
<!-- id="CAHXxYDgw-LOb+-Gc1Rha1gPgFMK14Pv95JeY_2nfmTm--nZxNw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F954CE5-6219-4607-A357-E0D18CE52B05_at_cisco.com" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 10:22:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18217.php">Jeff Squyres: "Re: [OMPI users] Bug Report for MPI_Alltoall"</a>
<li><strong>Previous message:</strong> <a href="18215.php">Lloyd Brown: "Re: [OMPI users] Checkpoint an MPI process"</a>
<li><strong>In reply to:</strong> <a href="18212.php">Jeff Squyres: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18221.php">Ralph Castain: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<li><strong>Reply:</strong> <a href="18221.php">Ralph Castain: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<li><strong>Reply:</strong> <a href="18222.php">Randolph Pullen: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is just a thought:
<br>
<p>according to the system() man page, 'SIGCHLD' is blocked during the
<br>
execution of the program. Since you are executing your command as a
<br>
daemon in the background, it will be permanently blocked.
<br>
<p>Does OpenMPI daemon depend on SIGCHLD in any way? That is about the
<br>
only difference that I can think of between running the command
<br>
stand-alone (which works) and running via a system() API call (that
<br>
does not work).
<br>
<p>Best
<br>
Durga
<br>
<p><p>On Thu, Jan 19, 2012 at 9:52 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Which network transport are you using, and what version of Open MPI are you using? &#160;Do you have OpenFabrics support compiled into your Open MPI installation?
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a section in my code running in rank 0 that must start a perl program that it then connects to via a tcp socket.
</span><br>
<span class="quotelev2">&gt;&gt; The initialisation section is shown here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; sprintf(buf, &quot;%s/session_server.pl -p %d &amp;&quot;, PATH,port);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; int i = system(buf);
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; printf(&quot;system returned %d\n&quot;, i);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some time after I run this code, while waiting for the data from the perl program, the error below occurs:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; qplan connection
</span><br>
<span class="quotelev2">&gt;&gt; DCsession_fetch: waiting for Mcode data...
</span><br>
<span class="quotelev2">&gt;&gt; [dc1:05387] [[40050,1],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file rml_oob_send.c at line 105
</span><br>
<span class="quotelev2">&gt;&gt; [dc1:05387] [[40050,1],0] could not get route to [[INVALID],INVALID]
</span><br>
<span class="quotelev2">&gt;&gt; [dc1:05387] [[40050,1],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file base/plm_base_proxy.c at line 86
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that the linux system() call is breaking OpenMPI internal connections. &#160;Removing the system() call and executing the perl code externaly fixes the problem but I can't go into production like that as its a security issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (environment: OpenMPI 1.4.1 on kernel Linux dc1 2.6.18-274.3.1.el5.028stab094.3 &#160;using TCP and mpirun)
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18217.php">Jeff Squyres: "Re: [OMPI users] Bug Report for MPI_Alltoall"</a>
<li><strong>Previous message:</strong> <a href="18215.php">Lloyd Brown: "Re: [OMPI users] Checkpoint an MPI process"</a>
<li><strong>In reply to:</strong> <a href="18212.php">Jeff Squyres: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18221.php">Ralph Castain: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<li><strong>Reply:</strong> <a href="18221.php">Ralph Castain: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<li><strong>Reply:</strong> <a href="18222.php">Randolph Pullen: "Re: [OMPI users] system() call corrupts MPI processes"</a>
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
