<?
$subject_val = "Re: [OMPI users] mpirun hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 08:24:42 2008" -->
<!-- isoreceived="20080917122442" -->
<!-- sent="Wed, 17 Sep 2008 08:24:31 -0400" -->
<!-- isosent="20080917122431" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hang" -->
<!-- id="2D0F05E7-8B55-47D7-B6FF-C72A826FFE34_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f2843b810809170353x40b516b1w89eb7a9390903d17_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun hang<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 08:24:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6571.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?"</a>
<li><strong>Previous message:</strong> <a href="6569.php">Santolo Felaco: "Re: [OMPI users] BLCR not found"</a>
<li><strong>In reply to:</strong> <a href="6565.php">Christophe Spaggiari: "[OMPI users] mpirun hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6573.php">Christophe Spaggiari: "Re: [OMPI users] mpirun hang"</a>
<li><strong>Reply:</strong> <a href="6573.php">Christophe Spaggiari: "Re: [OMPI users] mpirun hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christophe,
<br>
<p>Looks like a firewall problem. Please check the mailing list archives  
<br>
for the proper fix.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sep 17, 2008, at 6:53 AM, Christophe Spaggiari wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to MPI and try to get my Open MPI environment up and  
</span><br>
<span class="quotelev1">&gt; running. I have two machines Alpha and Beta, on which I have  
</span><br>
<span class="quotelev1">&gt; successfully installed Open MPI in /usr/local/openmpi. I have made  
</span><br>
<span class="quotelev1">&gt; the ssh setting to not have to enter password manually (using rsa  
</span><br>
<span class="quotelev1">&gt; keys), and I have modified the .rc files to get the right path and  
</span><br>
<span class="quotelev1">&gt; right LD_LIBRARY_PATH when login using ssh on both machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to check if my installation was working I have started  
</span><br>
<span class="quotelev1">&gt; &quot;mpirun hostname&quot; on Alpha and it is working just fine.
</span><br>
<span class="quotelev1">&gt; I have tested as well &quot;mpirun hostname&quot; on Beta and it is working  
</span><br>
<span class="quotelev1">&gt; fine too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tested &quot;ssh beta env&quot; to check that my setting are correct  
</span><br>
<span class="quotelev1">&gt; and it is working as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BUT when I am running &quot;mpirun -host beta hostname&quot; from Alpha  
</span><br>
<span class="quotelev1">&gt; nothing happens. After several minutes I have to kill the &quot;mpirun&quot;  
</span><br>
<span class="quotelev1">&gt; process with Ctrl-C (two times). Does any of you run into similar  
</span><br>
<span class="quotelev1">&gt; problem and could tell me what I am doing wrong ? It seems that each  
</span><br>
<span class="quotelev1">&gt; local installation are working fine but I can not start tasks on  
</span><br>
<span class="quotelev1">&gt; other nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The interesting point is that when I run a &quot;ps&quot; on Beta I can see  
</span><br>
<span class="quotelev1">&gt; that a &quot;orted&quot; process is started (and stay in process list) for  
</span><br>
<span class="quotelev1">&gt; each of my try to run &quot;mpirun&quot; command from Alpha. So somehow Beta  
</span><br>
<span class="quotelev1">&gt; gets the command to start orted and does it but then, nothing  
</span><br>
<span class="quotelev1">&gt; happens .......
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been browsing the users list for similar issues and I found  
</span><br>
<span class="quotelev1">&gt; one guy describing exactly the same problem but it was no answer to  
</span><br>
<span class="quotelev1">&gt; his post.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure if this is relevant but Alpha and Beta are Sony PS3  
</span><br>
<span class="quotelev1">&gt; machines running Yellow Dog Linux 6.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Chris
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
<li><strong>Next message:</strong> <a href="6571.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?"</a>
<li><strong>Previous message:</strong> <a href="6569.php">Santolo Felaco: "Re: [OMPI users] BLCR not found"</a>
<li><strong>In reply to:</strong> <a href="6565.php">Christophe Spaggiari: "[OMPI users] mpirun hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6573.php">Christophe Spaggiari: "Re: [OMPI users] mpirun hang"</a>
<li><strong>Reply:</strong> <a href="6573.php">Christophe Spaggiari: "Re: [OMPI users] mpirun hang"</a>
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
