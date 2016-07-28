<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 13 12:25:50 2006" -->
<!-- isoreceived="20060213172550" -->
<!-- sent="Mon, 13 Feb 2006 12:25:35 -0500" -->
<!-- isosent="20060213172535" -->
<!-- name="James Conway" -->
<!-- email="jxc100+_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4" -->
<!-- id="093CD7A0-E39B-4725-8F99-A19ED75AF56E_at_pitt.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="29AF5067-3DB2-4B79-97C6-0B9D6BBF3790_at_open-mpi.org" -->
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
<strong>From:</strong> James Conway (<em>jxc100+_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-13 12:25:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0653.php">Xiaoning (David) Yang: "[OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Previous message:</strong> <a href="0651.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>In reply to:</strong> <a href="0649.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0663.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0663.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, and George,
<br>
<p>I have success to report: --mca btl_tcp_if_include was needed.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; - Have you absolutely entirely disabled all firewalling between  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the two hosts?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As far as I know - simply, hit the &quot;Stop&quot; button on Mac OSX  
</span><br>
<span class="quotelev2">&gt;&gt; Sharing pref-panel for Firewall, on the local and remote systems  
</span><br>
<span class="quotelev2">&gt;&gt; both (one is my PowerBook G4, the other my PowerMac G5).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds like this should be sufficient.
</span><br>
<p>Indeed, I can confirm that it is.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; - Do you have only one TCP interface on both machines?  If you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have more than one, we can try telling Open MPI to ignore one of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interesting idea. The remote machine has two ethernet ports  
</span><br>
<span class="quotelev2">&gt;&gt; (PowerMac) and the local machine has ethernet and airport. Only  
</span><br>
<span class="quotelev2">&gt;&gt; one port should be enabled on each, but the PowerBook airport is  
</span><br>
<span class="quotelev2">&gt;&gt; what I use at home so maybe it didn't get properly disabled when I  
</span><br>
<span class="quotelev2">&gt;&gt; switched to my work settings. Since the call to MPI-send seems to  
</span><br>
<span class="quotelev2">&gt;&gt; hand on the local host, it may be an attempt to use the airport  
</span><br>
<span class="quotelev2">&gt;&gt; (wireless) connection. How to I tell Open MPI to ignore a  
</span><br>
<span class="quotelev2">&gt;&gt; particular interface?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check out <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>  
</span><br>
<span class="quotelev1">&gt; -- it talks about the MCA parameters you can use to specify  
</span><br>
<span class="quotelev1">&gt; different networks.  For example, on my powerbook, en0 appears to  
</span><br>
<span class="quotelev1">&gt; be my wired connection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let us know what happens.
</span><br>
<p>By including --mca btl_tcp_if_include on the command line, the ring  
<br>
program continues past the first round to completion. So even though  
<br>
my non-ethernet interfaces were disabled (airport, firewire), one of  
<br>
them seems to have been sufficiently active to get in the way. (In  
<br>
fact, about a week ago I started to be suspicious of a hardware fault  
<br>
on my PowerBook's airport card, and I have seen it attempting but  
<br>
failing to make connections when it was supposedly disabled). The  
<br>
Open MPI command line then is:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --hostfile mpi_hosts --mca btl_tcp_if_include en0 --np 2  
<br>
mpi_test1
<br>
<p>where en0 goes to the ethernet port on my PowerBook G4, and on to the  
<br>
remote PowerMac.
<br>
<p>On Feb 13, 2006, at 12:14 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I not 100% sure but I think I might know what's wrong. I can  
</span><br>
<span class="quotelev1">&gt; reproduce something similar (oddly it does not happens all the  
</span><br>
<span class="quotelev1">&gt; time) if I activate my firewall and let all the trafic through (ie.  
</span><br>
<span class="quotelev1">&gt; accept all connections). In few words, I think the firewall (even  
</span><br>
<span class="quotelev1">&gt; when disabled) introduce some delays in the setup stage of the TCP  
</span><br>
<span class="quotelev1">&gt; connection and we &quot;kind of&quot; lose one of the messages. Let me find a  
</span><br>
<span class="quotelev1">&gt; high delay cluster and I will take a look.
</span><br>
<p>It may be related - I would be interested to know if you made any  
<br>
progress on this. For now, I have the Firewall disabled (stopped) for  
<br>
testing, and I am sure to be OK since my fingers are crossed, right?  
<br>
(My test systems are behind a departmental firewall, so as long as I  
<br>
can trust my co-workers - and of course I do - the fingers-crossed  
<br>
method should suffice until I wire up a private network.)
<br>
<p>Thanks for the insight, Jeff. I look forward to progressing to real  
<br>
MPI software (which I have kindly been given).
<br>
<p>Best regards,
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
<li><strong>Next message:</strong> <a href="0653.php">Xiaoning (David) Yang: "[OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Previous message:</strong> <a href="0651.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>In reply to:</strong> <a href="0649.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0663.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0663.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
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
