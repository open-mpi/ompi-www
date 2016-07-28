<?
$subject_val = "Re: [OMPI users] How to setup and use nodes for OpenMPI on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 10 09:10:49 2011" -->
<!-- isoreceived="20110810131049" -->
<!-- sent="Wed, 10 Aug 2011 15:10:37 +0200" -->
<!-- isosent="20110810131037" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to setup and use nodes for OpenMPI on Windows" -->
<!-- id="4E42834D.3040302_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2EAABC017DFC334F86A75A08D3FCE13F785BAD4C82_at_VAUNSW138.au.cbainet.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to setup and use nodes for OpenMPI on Windows<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-10 09:10:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17044.php">Matthew Russell: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17042.php">Jeff Squyres: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>Maybe in reply to:</strong> <a href="17028.php">Chee, Clinton: "[OMPI users] How to setup and use nodes for OpenMPI on Windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Clinton,
<br>
<p>I suggest that you build Open MPI directly on the Windows Server, so 
<br>
that the system dependencies wouldn't get wrong. If you just copy around 
<br>
the binaries, there will be problems:
<br>
<p>your local PC (I guess it's Windows Vista or 7) has inet_pton, but the 
<br>
Windows Server 2003 doesn't have it in the system level. So the binaries 
<br>
won't work. I'll fix this problem very soon.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p>On 2011-08-10 9:56 AM, Chee, Clinton wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks very much for your last email -- it was good help. I think my 
</span><br>
<span class="quotelev1">&gt; questions about security and group permissions on Windows are answered 
</span><br>
<span class="quotelev1">&gt; with the MSDN links for configuring remote access.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, I have managed to compile using VS C++ 2008 on my local PC 
</span><br>
<span class="quotelev1">&gt; (32bit) and it worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I moved to our Windows Server 2003 x64.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled the x64 test code and and I run it, I got
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;The procedure entry point inet_pton could not be located in the 
</span><br>
<span class="quotelev1">&gt; dynamic link library WS2_32.lib&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.I found a thread on this message but there was no solution at that 
</span><br>
<span class="quotelev1">&gt; time.  Has this problem been solved? If yes, How do I fix this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2.Also I read somewhere in the web that OpenMPI on Windows x64 for 
</span><br>
<span class="quotelev1">&gt; Fortran does not work properly yet. Is this still true?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________
</span><br>
<span class="quotelev1">&gt; *Commonwealth*Bank
</span><br>
<span class="quotelev1">&gt; Clinton Chee
</span><br>
<span class="quotelev1">&gt; Manager, Quantitative Analytics
</span><br>
<span class="quotelev1">&gt; Risk Management Centre
</span><br>
<span class="quotelev1">&gt; Lvl 14, Darling Park, 201 Sussex Street,
</span><br>
<span class="quotelev1">&gt; Sydney NSW 2000
</span><br>
<span class="quotelev1">&gt; M: 0402 058 983     P:  61 (0)2 9117 7544
</span><br>
<span class="quotelev1">&gt; F: 61 (0)2 9118 6509, 1300 711 441
</span><br>
<span class="quotelev1">&gt; E: Clinton.Chee_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Our vision is to be Australia's finest financial services 
</span><br>
<span class="quotelev1">&gt; organisation through excelling in customer service.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, 9 August 2011 7:50 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Cc:* Chee, Clinton
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] How to setup and use nodes for OpenMPI on 
</span><br>
<span class="quotelev1">&gt; Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Clinton,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just wondering if anyone can point me to the detailed information on 
</span><br>
<span class="quotelev1">&gt; how to setup multiple nodes and network them together to use OpenMPI. 
</span><br>
<span class="quotelev1">&gt; Also what is the proper way to specify which nodes to run on. I wish 
</span><br>
<span class="quotelev1">&gt; to use OpenMPI on the Windows XP or Windows Server 2008 platform, with 
</span><br>
<span class="quotelev1">&gt; Intel Fortran 11 as the programming language.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you use Windows XP, you have to specify --host or --hostfile option 
</span><br>
<span class="quotelev1">&gt; in the command line. see mpirun --help for more details. On Windows 
</span><br>
<span class="quotelev1">&gt; server 2008, you can also specify the node names through the Job 
</span><br>
<span class="quotelev1">&gt; Monitor GUI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have searched Google and also looked through the OpenMPI website but 
</span><br>
<span class="quotelev1">&gt; there does not seem to be any comprehensive documents to run OpenMPI 
</span><br>
<span class="quotelev1">&gt; on Windows, especially setting up the nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For working on multiple nodes on Windows XP, the only thing you have 
</span><br>
<span class="quotelev1">&gt; to make sure is that the WMI is able to launch process remotely, which 
</span><br>
<span class="quotelev1">&gt; referred to the two MSDN links in the WINDOWS.TXT file. Other then 
</span><br>
<span class="quotelev1">&gt; this, no other special setting is necessary, just install one 
</span><br>
<span class="quotelev1">&gt; pre-compiled installer, it will configure the environment 
</span><br>
<span class="quotelev1">&gt; automatically for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many years ago, I played a bit with Mpich and LAM MPI on a purely 
</span><br>
<span class="quotelev1">&gt; Linux platform. On Linux clusters, it is easy -- the head node see 
</span><br>
<span class="quotelev1">&gt; each of the compute nodes. As I remember, the programmer need to only 
</span><br>
<span class="quotelev1">&gt; write the names of the compute nodes in some sort of config file. The 
</span><br>
<span class="quotelev1">&gt; job is submitted and based on the compute nodes listed, the mpi will 
</span><br>
<span class="quotelev1">&gt; run on them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Windows, what kind of networking is needed to tie the nodes 
</span><br>
<span class="quotelev1">&gt; together? (assuming we are not using any of the MS HPC Pack or Compute 
</span><br>
<span class="quotelev1">&gt; Cluster). How do we specify which nodes to use? How do we specify any 
</span><br>
<span class="quotelev1">&gt; security or group permissions for the nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should have at least TCP connections among the nodes. I don't 
</span><br>
<span class="quotelev1">&gt; understand what security and group permissions stands for here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ************** IMPORTANT MESSAGE *****************************
</span><br>
<span class="quotelev1">&gt; This e-mail message is intended only for the addressee(s) and contains 
</span><br>
<span class="quotelev1">&gt; information which may be
</span><br>
<span class="quotelev1">&gt; confidential.
</span><br>
<span class="quotelev1">&gt; If you are not the intended recipient please advise the sender by 
</span><br>
<span class="quotelev1">&gt; return email, do not use or
</span><br>
<span class="quotelev1">&gt; disclose the contents, and delete the message and any attachments from 
</span><br>
<span class="quotelev1">&gt; your system. Unless
</span><br>
<span class="quotelev1">&gt; specifically indicated, this email does not constitute formal advice 
</span><br>
<span class="quotelev1">&gt; or commitment by the sender
</span><br>
<span class="quotelev1">&gt; or the Commonwealth Bank of Australia (ABN 48 123 123 124) or its 
</span><br>
<span class="quotelev1">&gt; subsidiaries.
</span><br>
<span class="quotelev1">&gt; We can be contacted through our web site: commbank.com.au.
</span><br>
<span class="quotelev1">&gt; If you no longer wish to receive commercial electronic messages from 
</span><br>
<span class="quotelev1">&gt; us, please reply to this
</span><br>
<span class="quotelev1">&gt; e-mail by typing Unsubscribe in the subject line.
</span><br>
<span class="quotelev1">&gt; **************************************************************
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
<span class="quotelev1">&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt; email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ************** IMPORTANT MESSAGE *****************************
</span><br>
<span class="quotelev1">&gt; This e-mail message is intended only for the addressee(s) and contains 
</span><br>
<span class="quotelev1">&gt; information which may be
</span><br>
<span class="quotelev1">&gt; confidential.
</span><br>
<span class="quotelev1">&gt; If you are not the intended recipient please advise the sender by 
</span><br>
<span class="quotelev1">&gt; return email, do not use or
</span><br>
<span class="quotelev1">&gt; disclose the contents, and delete the message and any attachments from 
</span><br>
<span class="quotelev1">&gt; your system. Unless
</span><br>
<span class="quotelev1">&gt; specifically indicated, this email does not constitute formal advice 
</span><br>
<span class="quotelev1">&gt; or commitment by the sender
</span><br>
<span class="quotelev1">&gt; or the Commonwealth Bank of Australia (ABN 48 123 123 124) or its 
</span><br>
<span class="quotelev1">&gt; subsidiaries.
</span><br>
<span class="quotelev1">&gt; We can be contacted through our web site: commbank.com.au.
</span><br>
<span class="quotelev1">&gt; If you no longer wish to receive commercial electronic messages from 
</span><br>
<span class="quotelev1">&gt; us, please reply to this
</span><br>
<span class="quotelev1">&gt; e-mail by typing Unsubscribe in the subject line.
</span><br>
<span class="quotelev1">&gt; **************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17043/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17044.php">Matthew Russell: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17042.php">Jeff Squyres: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>Maybe in reply to:</strong> <a href="17028.php">Chee, Clinton: "[OMPI users] How to setup and use nodes for OpenMPI on Windows"</a>
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
