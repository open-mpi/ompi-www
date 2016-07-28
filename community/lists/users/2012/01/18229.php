<?
$subject_val = "Re: [OMPI users] Fw:  system() call corrupts MPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 22:34:04 2012" -->
<!-- isoreceived="20120120033404" -->
<!-- sent="Thu, 19 Jan 2012 19:33:58 -0800 (PST)" -->
<!-- isosent="20120120033358" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fw:  system() call corrupts MPI processes" -->
<!-- id="1327030457.0000_at_hypermail.dummy" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1327029437.60435.YahooMailNeo_at_web121006.mail.ne1.yahoo.com" -->
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
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 22:33:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18230.php">Rodrigo Oliveira: "Re: [OMPI users] Checkpoint an MPI process"</a>
<li><strong>Previous message:</strong> <a href="18228.php">Randolph Pullen: "Re: [OMPI users] Fw:  system() call corrupts MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18227.php">Randolph Pullen: "Re: [OMPI users] Fw:  system() call corrupts MPI processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aha! I may have been stupid.

The perl program is calling another small openMPI routine via mpirun and system()
That is bad isn't it?

How can MPI tell that a program 2 system calls away is MPI ?
A better question is how can I trick it to not knowing that its MPI so it runs just as it does when started manually ?
Doh !

________________________________
 From: Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;
To: Ralph Castain &lt;rhc_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Friday, 20 January 2012 2:17 PM
Subject: Re: [OMPI users] Fw:  system() call corrupts MPI processes
 

Removing the redirection to the log makes no difference.

Running the script externally is fine (method #1). &#160;Only occurs when the perl is started by the OpenMPI process (method #2)
Both methods open a TCP socket and both methods have the perl do a(nother) system call

Appart from MPI starting the perl both methods are identical.

BTW - the perl is the server the openMPI is the client.


________________________________
 From: Ralph Castain &lt;rhc_at_[hidden]&gt;
To: Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Friday, 20 January 2012 1:57 PM
Subject: Re: [OMPI users] Fw:  system() call corrupts MPI processes
 

That is bizarre. Afraid you have me stumped here - I can't think why an action in the perl script would trigger an action in OMPI. If your OMPI proc doesn't in any way read the info in &quot;log&quot; (using your example), does it still have a problem? In other words, if the perl script still executes a system command, but the OMPI proc doesn't interact with it in any way, does the problem persist?

What I'm searching for is the connection. If your OMPI proc reads the results of that system command, then it's possible that something in your app is corrupting memory during the read operation - e.g., you are reading in more info than you have allocated memory.




On Jan 19, 2012, at 7:33 PM, Randolph Pullen wrote:

FYI
&gt;----- Forwarded Message -----
&gt;From: Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;
&gt;To: Jeff Squyres &lt;jsquyres_at_[hidden]&gt; 
&gt;Sent: Friday, 20 January 2012 12:45 PM
&gt;Subject: Re: [OMPI users] system() call corrupts MPI processes
&gt; 
&gt;
&gt;I'm using TCP on 1.4.1 (its actually IPoIB)
&gt;OpenIB is compiled in.
&gt;Note that these nodes are containers running in OpenVZ where IB is not available. &#160;there may be some SDP running in system level routines on the VH but this is unlikely.
&gt;OpenIB is not available to the VMs. &#160;they happily get TCP services from the VH
&gt;In any case, the problem still occurs if I use:&#160;--mca btl tcp,self
&gt;
&gt;
&gt;I have traced the perl code and observed that OpenMPI gets confused whenever the perl program executes a system command itself
&gt;eg:
&gt;`command 2&gt;&amp;1 1&gt; log`;
&gt;
&gt;
&gt;This probably narrows it down (I hope)
&gt;
&gt;________________________________
&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt;To: Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
&gt;Sent: Friday, 20 January 2012 1:52 AM
&gt;Subject: Re: [OMPI users] system() call corrupts MPI processes
&gt; 
&gt;Which network transport are you using, and what version of Open MPI are you using?&#160; Do you have OpenFabrics support compiled into your Open MPI installation?
&gt;
&gt;If you're just using TCP and/or shared memory, I can't think of a reason immediately as to why this wouldn't work, but there may be a subtle interaction in there
 somewhere that causes badness (e.g., memory corruption).
&gt;
&gt;
&gt;On Jan 19, 2012, at 1:57 AM, Randolph Pullen wrote:
&gt;
&gt;&gt; 
&gt;&gt; I have a section in my code running in rank 0 that must start a perl program that it then connects to via a tcp socket.
&gt;&gt; The initialisation section is shown here:
&gt;&gt; 
&gt;&gt;&#160; &#160;  sprintf(buf, &quot;%s/session_server.pl -p %d &amp;&quot;, PATH,port);
&gt;&gt;&#160; &#160;  int i = system(buf);
&gt;&gt;&#160; &#160;  printf(&quot;system returned %d\n&quot;, i);
&gt;&gt; 
&gt;&gt; 
&gt;&gt; Some time after I run this code, while waiting for the data from the perl program, the error below occurs:
&gt;&gt; 
&gt;&gt; qplan connection
&gt;&gt; DCsession_fetch: waiting for Mcode data...
&gt;&gt; [dc1:05387] [[40050,1],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file rml_oob_send.c at line 105
&gt;&gt; [dc1:05387] [[40050,1],0] could not get route to
 [[INVALID],INVALID]
&gt;&gt; [dc1:05387] [[40050,1],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file base/plm_base_proxy.c at line 86
&gt;&gt; 
&gt;&gt; 
&gt;&gt; It seems that the linux system() call is breaking OpenMPI internal connections.&#160; Removing the system() call and executing the perl code externaly fixes the problem but I can't go into production like that as its a security issue.
&gt;&gt; 
&gt;&gt; Any ideas ?
&gt;&gt; 
&gt;&gt; (environment: OpenMPI 1.4.1 on kernel Linux dc1 2.6.18-274.3.1.el5.028stab094.3&#160; using TCP and mpirun)
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt;-- 
&gt;Jeff
 Squyres
&gt;jsquyres_at_[hidden]
&gt;For corporate legal information go to:
&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
&gt;
&gt;
&gt;
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>



_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18229/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18230.php">Rodrigo Oliveira: "Re: [OMPI users] Checkpoint an MPI process"</a>
<li><strong>Previous message:</strong> <a href="18228.php">Randolph Pullen: "Re: [OMPI users] Fw:  system() call corrupts MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18227.php">Randolph Pullen: "Re: [OMPI users] Fw:  system() call corrupts MPI processes"</a>
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
