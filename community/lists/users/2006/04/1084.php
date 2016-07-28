<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 16 17:17:34 2006" -->
<!-- isoreceived="20060416211734" -->
<!-- sent="Sun, 16 Apr 2006 14:17:27 -0700" -->
<!-- isosent="20060416211727" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster" -->
<!-- id="EDF8D33E-31C9-4947-9E2B-E5D3945B6B95_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4CEA1EE0-208E-4443-B959-462C36900378_at_Colorado.EDU" -->
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
<strong>Date:</strong> 2006-04-16 17:17:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1085.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Previous message:</strong> <a href="1083.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>In reply to:</strong> <a href="1083.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 16, 2006, at 2:10 PM, Lee D. Peterson wrote:
<br>
<p><span class="quotelev1">&gt; The firewires are all inactive. The only difference from ipconfig  
</span><br>
<span class="quotelev1">&gt; is that the cluster head has a ppp0 defined because of a VPN I'm  
</span><br>
<span class="quotelev1">&gt; using. I tried -mac btl_tcp_if_exclude ppp0, but that didn't work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I logged off the VPN, and now ifconfig -a on the cluster head  
</span><br>
<span class="quotelev1">&gt; does not show the ppp0. However, everything is now fixed: I can use  
</span><br>
<span class="quotelev1">&gt; mpiexec without the MCA declaration.
</span><br>
<p>That's very strange.  I can say with almost absolute certainty that  
<br>
we never tried that configuration ;).  I'm away from our cluster  
<br>
resources this week and don't want to mess with the networking from  
<br>
1500 miles away, but when I get back, I'll see if I can duplicate  
<br>
your problem.  Also very strange that excluding the device didn't fix  
<br>
the problem.
<br>
<p>In the mean time, you can probably get away with setting the MCA  
<br>
parameter in the system configuration file to include en0 and en1 to  
<br>
avoid potential VPN interaction.  More on setting MCA parameters is  
<br>
available from our FAQ:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=sysadmin#sysadmin-mca-params">http://www.open-mpi.org/faq/?category=sysadmin#sysadmin-mca-params</a>
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1085.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Previous message:</strong> <a href="1083.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>In reply to:</strong> <a href="1083.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
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
