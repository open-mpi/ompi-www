<?
$subject_val = "Re: [OMPI users] Sending relatively large messages with high frequency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 15:43:03 2010" -->
<!-- isoreceived="20100225204303" -->
<!-- sent="Thu, 25 Feb 2010 15:42:58 -0500" -->
<!-- isosent="20100225204258" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sending relatively large messages with high frequency" -->
<!-- id="4B86E0D2.8020107_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4b583f3d1002242135k1f28119n23e9274870cb07da_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Sending relatively large messages with high frequency<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 15:42:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12161.php">Prentice Bisbal: "Re: [OMPI users] Sending relatively large messages with high	frequency"</a>
<li><strong>Previous message:</strong> <a href="12159.php">Josh Hursey: "Re: [OMPI users] orte-checkpoint hangs"</a>
<li><strong>In reply to:</strong> <a href="12149.php">Amr Hassan: "[OMPI users] Sending relatively large messages with high frequency"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was getting the same error a few weeks ago. In my case the error
<br>
message was spot on. I was trying to put too much data in a buffer using
<br>
MPI_Pack.
<br>
<p>I was able to track down the problem using valgrind. Have you tried that
<br>
yet? You need to install valgrind first and then compile OpenMPI with
<br>
valgrind support. It takes some time, but is worth it.
<br>
<p><a href="http://www.open-mpi.org/faq/?category=debugging#memchecker_what">http://www.open-mpi.org/faq/?category=debugging#memchecker_what</a>
<br>
<p>Amr Hassan wrote:
<br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm facing a strange problem with OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm developing an application which is required to send a message from
</span><br>
<span class="quotelev1">&gt; each client  (1 MB each) to a server node for around 10 times per second
</span><br>
<span class="quotelev1">&gt; (it's a distributed render application and I'm trying to reach a higher
</span><br>
<span class="quotelev1">&gt; frame rate ). The problem is that OpenMPI crash in that case and only
</span><br>
<span class="quotelev1">&gt; works if I partition this messages into a set of 20 k sub-messages with
</span><br>
<span class="quotelev1">&gt; a sleep between each one of them for around 1 to 10 ms!! This solution
</span><br>
<span class="quotelev1">&gt; is very expensive in term of time needed to send the data.  Is there any
</span><br>
<span class="quotelev1">&gt; other solutions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error i got now is:
</span><br>
<span class="quotelev1">&gt; Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; Signal code:  Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; Failing at address: xxxxxxxxxxxxx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The OS is Linux CentOS.  I'm using the latest version of OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I appreciate any help regarding that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Regards,
</span><br>
<span class="quotelev1">&gt; Amr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><pre>
-- 
Prentice Bisbal
Linux Software Support Specialist/System Administrator
School of Natural Sciences
Institute for Advanced Study
Princeton, NJ
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12161.php">Prentice Bisbal: "Re: [OMPI users] Sending relatively large messages with high	frequency"</a>
<li><strong>Previous message:</strong> <a href="12159.php">Josh Hursey: "Re: [OMPI users] orte-checkpoint hangs"</a>
<li><strong>In reply to:</strong> <a href="12149.php">Amr Hassan: "[OMPI users] Sending relatively large messages with high frequency"</a>
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
