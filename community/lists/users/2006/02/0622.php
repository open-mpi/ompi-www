<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  9 18:50:53 2006" -->
<!-- isoreceived="20060209235053" -->
<!-- sent="Thu, 09 Feb 2006 18:50:26 -0500" -->
<!-- isosent="20060209235026" -->
<!-- name="James Conway" -->
<!-- email="jxc100_at_[hidden]" -->
<!-- subject="[O-MPI users] Firewall ports and Mac OS X 10.4.4" -->
<!-- id="F66D4158-D8DB-41FD-A3E1-D7754FDD94A8_at_pitt.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> James Conway (<em>jxc100_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-09 18:50:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0623.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0621.php">Brightwell, Ronald: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0624.php">Brian Barrett: "Re: [O-MPI users] Firewall ports and Mac OS X 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0624.php">Brian Barrett: "Re: [O-MPI users] Firewall ports and Mac OS X 10.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I couldn't find any information on firewall ports to open up for  
<br>
using OpenMPI. I have compiled and successfully run simple commands  
<br>
(eg mpirun with &quot;uname -n&quot;) on the localhost, but including remote  
<br>
hosts caused a hang. Statements in the remote .cshrc to echo would be  
<br>
returned, but nothing would come back from the &quot;uname&quot; command - the  
<br>
process hung until I control-c. I looked in the firewall log  
<br>
(ipfw.log) on the remotehost but found no messages. However, the  
<br>
localhost log showed that a return connection up in the 51000's was  
<br>
being blocked, and when I turned off the localhost's firewall, the  
<br>
mpirun command would complete correctly. (The remotehost firewall  
<br>
remained on).
<br>
<p>However, I cannot find a range of ports to open. I am not really  
<br>
familiar with the ipfw syntax, and hope to rely on the very simple  
<br>
interface provided by Mac OSX 10.4.4 (ie, define a range of ports,  
<br>
TCP and/or UDP). Since this is clearly critical, I suspect that I  
<br>
must have overlooked some information on the OpenMPI web-site - if  
<br>
so, please direct me to it. If I haven't, it might be worth a word or  
<br>
two in the FAQ.
<br>
<p>Thanks for any help.
<br>
<p>James Conway
<br>
----------------------------------------------------------------------
<br>
James Conway, PhD.,
<br>
Department of Structural Biology
<br>
University of Pittsburgh School of Medicine
<br>
Biomedical Science Tower 3, Room 2047
<br>
3501 5th Ave
<br>
Pittsburgh, PA 15260
<br>
U.S.A.
<br>
Phone: +1-412-383-9847
<br>
Fax:   +1-412-648-8998
<br>
Email: jxc100_at_[hidden]
<br>
Web:   &lt;<a href="http://www.pitt.edu/~jxc100/">http://www.pitt.edu/~jxc100/</a>&gt; (under construction)
<br>
----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0623.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0621.php">Brightwell, Ronald: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0624.php">Brian Barrett: "Re: [O-MPI users] Firewall ports and Mac OS X 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0624.php">Brian Barrett: "Re: [O-MPI users] Firewall ports and Mac OS X 10.4.4"</a>
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
