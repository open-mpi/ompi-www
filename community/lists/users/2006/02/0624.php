<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  9 23:26:49 2006" -->
<!-- isoreceived="20060210042649" -->
<!-- sent="Thu, 9 Feb 2006 23:26:42 -0500" -->
<!-- isosent="20060210042642" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Firewall ports and Mac OS X 10.4.4" -->
<!-- id="17E7FC98-6275-4BC1-9C1C-FFCC471E9601_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F66D4158-D8DB-41FD-A3E1-D7754FDD94A8_at_pitt.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-09 23:26:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0625.php">Sayantan Sur: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0623.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0622.php">James Conway: "[O-MPI users] Firewall ports and Mac OS X 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0636.php">James Conway: "[OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0636.php">James Conway: "[OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 9, 2006, at 6:50 PM, James Conway wrote:
<br>
<p><span class="quotelev1">&gt; I couldn't find any information on firewall ports to open up for
</span><br>
<span class="quotelev1">&gt; using OpenMPI. I have compiled and successfully run simple commands
</span><br>
<span class="quotelev1">&gt; (eg mpirun with &quot;uname -n&quot;) on the localhost, but including remote
</span><br>
<span class="quotelev1">&gt; hosts caused a hang. Statements in the remote .cshrc to echo would be
</span><br>
<span class="quotelev1">&gt; returned, but nothing would come back from the &quot;uname&quot; command - the
</span><br>
<span class="quotelev1">&gt; process hung until I control-c. I looked in the firewall log
</span><br>
<span class="quotelev1">&gt; (ipfw.log) on the remotehost but found no messages. However, the
</span><br>
<span class="quotelev1">&gt; localhost log showed that a return connection up in the 51000's was
</span><br>
<span class="quotelev1">&gt; being blocked, and when I turned off the localhost's firewall, the
</span><br>
<span class="quotelev1">&gt; mpirun command would complete correctly. (The remotehost firewall
</span><br>
<span class="quotelev1">&gt; remained on).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I cannot find a range of ports to open. I am not really
</span><br>
<span class="quotelev1">&gt; familiar with the ipfw syntax, and hope to rely on the very simple
</span><br>
<span class="quotelev1">&gt; interface provided by Mac OSX 10.4.4 (ie, define a range of ports,
</span><br>
<span class="quotelev1">&gt; TCP and/or UDP). Since this is clearly critical, I suspect that I
</span><br>
<span class="quotelev1">&gt; must have overlooked some information on the OpenMPI web-site - if
</span><br>
<span class="quotelev1">&gt; so, please direct me to it. If I haven't, it might be worth a word or
</span><br>
<span class="quotelev1">&gt; two in the FAQ.
</span><br>
<p>Open MPI uses random port numbers for all it's communication.  We've  
<br>
currently been focusing on the tightly integrated cluster  
<br>
environment, which generally does not have port blocking issues.  It  
<br>
would probably not be difficult to implement a port range scheme, but  
<br>
that has not been an issue that is scheduled to be addressed in the  
<br>
short term.  For now, your best option is to open the firewall on  
<br>
your machine to the other machines you wish to use with Open MPI.  A  
<br>
quick search on google for &quot;OS X ipfw&quot; should turn up a couple  
<br>
references on configuring the OS X firewall to do this  
<br>
(unfortunately, you can not configure the firewall using the System  
<br>
Preferences GUI to do this).
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0625.php">Sayantan Sur: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0623.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0622.php">James Conway: "[O-MPI users] Firewall ports and Mac OS X 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0636.php">James Conway: "[OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0636.php">James Conway: "[OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
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
