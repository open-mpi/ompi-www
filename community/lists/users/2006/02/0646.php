<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Feb 12 19:28:46 2006" -->
<!-- isoreceived="20060213002846" -->
<!-- sent="Sun, 12 Feb 2006 19:28:41 -0500" -->
<!-- isosent="20060213002841" -->
<!-- name="James Conway" -->
<!-- email="jxc100_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4" -->
<!-- id="7C50D951-13FD-41BB-815E-28452145A4A2_at_pitt.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="056BB5A1-8EA7-4331-8116-17926783B7A7_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-02-12 19:28:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0647.php">George Bosilca: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0645.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>In reply to:</strong> <a href="0645.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0649.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0649.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Thanks for your responses.
<br>
<p>On Feb 12, 2006, at 5:23 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 10, 2006, at 12:18 PM, James Conway wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI uses random port numbers for all it's communication.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (etc)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the explanation. I will live with the open Firewall, and
</span><br>
<span class="quotelev2">&gt;&gt; look at the ipfw docs for writing a script.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That may be somewhat difficult.  We previously looked into making  
</span><br>
<span class="quotelev1">&gt; LAM/ MPI work behind firewalls and ran into some unexpected issues  
</span><br>
<span class="quotelev1">&gt; -- the short version was that, at least for the way LAM was setup,  
</span><br>
<span class="quotelev1">&gt; even if you could restrict the port numbers that LAM would choose  
</span><br>
<span class="quotelev1">&gt; for its TCP communications, you had to have a virtual host out in  
</span><br>
<span class="quotelev1">&gt; front of the firewall that would relay the traffic to the  
</span><br>
<span class="quotelev1">&gt; appropriate internal host.  Specifically, you had to have an IP  
</span><br>
<span class="quotelev1">&gt; address out in front of the firewall for each host so that it would  
</span><br>
<span class="quotelev1">&gt; route to the appropriate back-end instance of the MPI application  
</span><br>
<span class="quotelev1">&gt; on the appropriate host.
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<p>Unfortunately, while not completely illiterate, I am not following  
<br>
this as much as I would like, but thanks for the explanation. It  
<br>
seems (and correct me if I am wrong) that the bottom line is to use  
<br>
some private network as one would in a dedicated cluster.
<br>
<p>Re: my problem with the &quot;MPI Tutorial: The cannonical ring program&quot;  
<br>
from &lt;<a href="http://www.lam-mpi.org/tutorials/">http://www.lam-mpi.org/tutorials/</a>&gt;.
<br>
<p><span class="quotelev1">&gt; Well that is definitely odd.  The fact that the first send finishes  
</span><br>
<span class="quotelev1">&gt; and the second does not is quite fishy.  A few questions:
</span><br>
<p>Yes, good, I am glad I had thought it out that far (ie, I don't seem  
<br>
to have embarrassed myself utterly - yet).
<br>
<p><span class="quotelev1">&gt; - Have you absolutely entirely disabled all firewalling between the  
</span><br>
<span class="quotelev1">&gt; two hosts?
</span><br>
<p>As far as I know - simply, hit the &quot;Stop&quot; button on Mac OSX Sharing  
<br>
pref-panel for Firewall, on the local and remote systems both (one is  
<br>
my PowerBook G4, the other my PowerMac G5). It seems very suggestive  
<br>
that one round of the ring works OK. (For both machines I set one  
<br>
process for MPI with &quot;--np 1&quot;, even though the PMac has 4 cores -  
<br>
easier to troubleshoot).
<br>
<p><span class="quotelev1">&gt; - Do you have only one TCP interface on both machines?  If you have  
</span><br>
<span class="quotelev1">&gt; more than one, we can try telling Open MPI to ignore one of them.
</span><br>
<p>Interesting idea. The remote machine has two ethernet ports  
<br>
(PowerMac) and the local machine has ethernet and airport. Only one  
<br>
port should be enabled on each, but the PowerBook airport is what I  
<br>
use at home so maybe it didn't get properly disabled when I switched  
<br>
to my work settings. Since the call to MPI-send seems to hand on the  
<br>
local host, it may be an attempt to use the airport (wireless)  
<br>
connection. How to I tell Open MPI to ignore a particular interface?  
<br>
It seems worth a try.
<br>
<p>Thanks again for your help.
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
<li><strong>Next message:</strong> <a href="0647.php">George Bosilca: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0645.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>In reply to:</strong> <a href="0645.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0649.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0649.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
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
