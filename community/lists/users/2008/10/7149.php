<?
$subject_val = "Re: [OMPI users] Openmpi ver1.3beta1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 04:42:07 2008" -->
<!-- isoreceived="20081031084207" -->
<!-- sent="Fri, 31 Oct 2008 02:41:59 -0600" -->
<!-- isosent="20081031084159" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi ver1.3beta1" -->
<!-- id="E8AF5AAF-99CB-4EFC-AA97-5385CE333AD2_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BLU0-SMTP224B5E356302AC7AA4481088200_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi ver1.3beta1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 04:41:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7150.php">Benjamin Lamptey: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>Previous message:</strong> <a href="7148.php">Allan Menezes: "[OMPI users] Openmpi ver1.3beta1"</a>
<li><strong>In reply to:</strong> <a href="7148.php">Allan Menezes: "[OMPI users] Openmpi ver1.3beta1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When you typed the --host x1 command, were you sitting on x1?  
<br>
Likewise, when you typed the --host x2 command, were you not on host x2?
<br>
<p>If the answer to both questions is &quot;yes&quot;, then my guess is that  
<br>
something is preventing you from launching a daemon on host x2. Try  
<br>
adding --leave-session-attached to your cmd line and see if any error  
<br>
messages appear. And check the FAQ for tips on how to setup for ssh  
<br>
launch (I'm assuming that is what you are using).
<br>
<p><a href="http://www.open-mpi.org/faq/?category=rsh">http://www.open-mpi.org/faq/?category=rsh</a>
<br>
<p>Ralph
<br>
<p>On Oct 31, 2008, at 12:06 AM, Allan Menezes wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;   I built open mpi version 1.3b1 withe following cofigure command:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi13b1 --enable-mpi-threads --with- 
</span><br>
<span class="quotelev1">&gt; threads=posix --disable-ipv6
</span><br>
<span class="quotelev1">&gt; I have six nodes x1..6
</span><br>
<span class="quotelev1">&gt; I distributed the /opt/openmpi13b1 with scp to all other nodes from  
</span><br>
<span class="quotelev1">&gt; the head node
</span><br>
<span class="quotelev1">&gt; When i run the following command:
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /opt/openmpi13b1  --host x1 hostname it works on x1  
</span><br>
<span class="quotelev1">&gt; printing out the hostname of x1
</span><br>
<span class="quotelev1">&gt; But when i type
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /opt/openmpi13b1 --host x2 hostname it hangs and  
</span><br>
<span class="quotelev1">&gt; does not give me any output
</span><br>
<span class="quotelev1">&gt; I have a 6 node intel quad core cluster with OSCAR and pci express  
</span><br>
<span class="quotelev1">&gt; gigabit ethernet for eth0
</span><br>
<span class="quotelev1">&gt; Can somebody advise?
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt; Allan Menezes
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
<li><strong>Next message:</strong> <a href="7150.php">Benjamin Lamptey: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>Previous message:</strong> <a href="7148.php">Allan Menezes: "[OMPI users] Openmpi ver1.3beta1"</a>
<li><strong>In reply to:</strong> <a href="7148.php">Allan Menezes: "[OMPI users] Openmpi ver1.3beta1"</a>
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
