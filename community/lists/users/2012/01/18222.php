<?
$subject_val = "Re: [OMPI users] system() call corrupts MPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 19:51:18 2012" -->
<!-- isoreceived="20120120005118" -->
<!-- sent="Thu, 19 Jan 2012 16:51:14 -0800 (PST)" -->
<!-- isosent="20120120005114" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] system() call corrupts MPI processes" -->
<!-- id="1327020674.25361.YahooMailNeo_at_web121001.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAHXxYDgw-LOb+-Gc1Rha1gPgFMK14Pv95JeY_2nfmTm--nZxNw_at_mail.gmail.com" -->
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
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 19:51:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18223.php">Randolph Pullen: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18221.php">Ralph Castain: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18216.php">Durga Choudhury: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I assume that the SIGCHLD was released after starting the daemon ie on return of the system() call


________________________________
 From: Durga Choudhury &lt;dpchoudh_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Friday, 20 January 2012 2:22 AM
Subject: Re: [OMPI users] system() call corrupts MPI processes
 
This is just a thought:

according to the system() man page, 'SIGCHLD' is blocked during the
execution of the program. Since you are executing your command as a
daemon in the background, it will be permanently blocked.

Does OpenMPI daemon depend on SIGCHLD in any way? That is about the
only difference that I can think of between running the command
stand-alone (which works) and running via a system() API call (that
does not work).

Best
Durga


On Thu, Jan 19, 2012 at 9:52 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; Which network transport are you using, and what version of Open MPI are you using? &#160;Do you have OpenFabrics support compiled into your Open MPI installation?
&gt;
&gt; If you're just using TCP and/or shared memory, I can't think of a reason immediately as to why this wouldn't work, but there may be a subtle interaction in there somewhere that causes badness (e.g., memory corruption).
&gt;
&gt;
&gt; On Jan 19, 2012, at 1:57 AM, Randolph Pullen wrote:
&gt;
&gt;&gt;
&gt;&gt; I have a section in my code running in rank 0 that must start a perl program that it then connects to via a tcp socket.
&gt;&gt; The initialisation section is shown here:
&gt;&gt;
&gt;&gt; &#160; &#160; sprintf(buf, &quot;%s/session_server.pl -p %d &amp;&quot;, PATH,port);
&gt;&gt; &#160; &#160; int i = system(buf);
&gt;&gt; &#160; &#160; printf(&quot;system returned %d\n&quot;, i);
&gt;&gt;
&gt;&gt;
&gt;&gt; Some time after I run this code, while waiting for the data from the perl program, the error below occurs:
&gt;&gt;
&gt;&gt; qplan connection
&gt;&gt; DCsession_fetch: waiting for Mcode data...
&gt;&gt; [dc1:05387] [[40050,1],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file rml_oob_send.c at line 105
&gt;&gt; [dc1:05387] [[40050,1],0] could not get route to [[INVALID],INVALID]
&gt;&gt; [dc1:05387] [[40050,1],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file base/plm_base_proxy.c at line 86
&gt;&gt;
&gt;&gt;
&gt;&gt; It seems that the linux system() call is breaking OpenMPI internal connections. &#160;Removing the system() call and executing the perl code externaly fixes the problem but I can't go into production like that as its a security issue.
&gt;&gt;
&gt;&gt; Any ideas ?
&gt;&gt;
&gt;&gt; (environment: OpenMPI 1.4.1 on kernel Linux dc1 2.6.18-274.3.1.el5.028stab094.3 &#160;using TCP and mpirun)
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18222/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18223.php">Randolph Pullen: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18221.php">Ralph Castain: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18216.php">Durga Choudhury: "Re: [OMPI users] system() call corrupts MPI processes"</a>
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
