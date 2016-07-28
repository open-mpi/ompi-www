<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 08:53:57 2011" -->
<!-- isoreceived="20110413125357" -->
<!-- sent="Wed, 13 Apr 2011 08:53:49 -0400" -->
<!-- isosent="20110413125349" -->
<!-- name="Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640" -->
<!-- email="jonathan.stergiou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc" -->
<!-- id="45A45D8D2A0DBB49B1BE570660FCE2F503C316CB_at_naeapaxrez04v.nadsusea.nads.navy.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="148A6FFA-A84A-4F1B-97D7-261C7B2A2F76_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc<br>
<strong>From:</strong> Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640 (<em>jonathan.stergiou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 08:53:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16214.php">Tim Prince: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Previous message:</strong> <a href="16212.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>In reply to:</strong> <a href="16206.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>It looks like the issue is solved.  Our sysadmin had been working on the issue too - he noticed a lot of &quot;junk&quot; in my /etc/ld.so.conf.d/ directory.  After &quot;cleaning&quot; it out (I think he ended up wiping everything out, then rebooting the machine, then re-configuring specific items as needed), my OpenMPI installation is working fine. 
<br>
<p>I can now run &quot;mpirun -np # hello_c&quot; where # is any integer.  The same holds true for our specialized applications (Gemini, Salinas, etc). 
<br>
<p>Apologies - I don't know why &quot;cleaning&quot; this directory fixed things.  I'm also not sure why OpenMPI stopped working in the first place.  The timing seems to coincide with two updates to my machine; the kernel, and subsequently the Nvidia driver, were both updated right before &quot;mpirun&quot; stopped working correctly. 
<br>
<p>The sysadmin mentioned it could be related to ldconfig.  Again, I don't know why this would cause &quot;mpirun&quot; to misbehave.  However, everything appears to work correctly now. 
<br>
<p>Thank you for your help, and hopefully this thread proves useful to someone in the future. 
<br>
<p><pre>
--
Jon Stergiou
Engineer
NSWC Carderock
-----Original Message-----
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
Sent: Tuesday, April 12, 2011 11:38
To: Open MPI Users
Subject: Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc
Okay, that says that mpirun is working correctly - the problem appears to be in MPI_Init.
How was OMPI configured?
On Apr 12, 2011, at 9:24 AM, Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640 wrote:
&gt; Ralph,
&gt; 
&gt; Thanks for the reply and guidance. 
&gt; 
&gt; I ran the following:
&gt; 
&gt; $&gt; mpirun -np 1 hostname
&gt; XXX_TUX01
&gt; 
&gt; $&gt; mpirun -np 2 hostname
&gt; XXX_TUX01
&gt; XXX_TUX01
&gt; 
&gt; $&gt; mpirun -np 1 ./hello_c
&gt; Hello, world, I am 0 of 1. 
&gt; 
&gt; $&gt; mpirun -np 2 ./hello_c
&gt; (no result, terminal does not respond until ctrl+c)
&gt; 
&gt; 
&gt; 
&gt;&gt; Let's simplify the issue as we have no idea what your codes are doing. 
&gt;&gt; 
&gt;&gt; Can you run two copies of hostname, for example? 
&gt;&gt; 
&gt;&gt; What about multiple copies of an MPI version of &quot;hello&quot; - see the examples directory in the OMPI tarball. 
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

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16213/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16214.php">Tim Prince: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Previous message:</strong> <a href="16212.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>In reply to:</strong> <a href="16206.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
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
