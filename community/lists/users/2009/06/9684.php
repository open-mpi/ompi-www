<?
$subject_val = "Re: [OMPI users] MPI over ethernet non default-adapter - Need	Help/Advice";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 15:42:33 2009" -->
<!-- isoreceived="20090623194233" -->
<!-- sent="Tue, 23 Jun 2009 15:42:24 -0400" -->
<!-- isosent="20090623194224" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI over ethernet non default-adapter - Need	Help/Advice" -->
<!-- id="4A413020.1050003_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4A40F7BD.80400_at_fh-hagenberg.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI over ethernet non default-adapter - Need	Help/Advice<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 15:42:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9685.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9683.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2forcing all MPI traffic over Ethernet instead of using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9673.php">Andreas Hoelzlwimmer: "[OMPI users] MPI over ethernet non default-adapter - Need Help/Advice"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Andreas:
<br>
<p>You can either exclude eth0 or include eth1 on the OpenMPI
<br>
byte transport layer.
<br>
To do that you need to insert these flags on your mpiexec command line:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca btl tcp,sm,self
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca btl_tcp_if_exclude lo,eth0
<br>
<p>or
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca btl tcp,sm,self
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca btl_tcp_if_include eth1
<br>
<p>See this FAQ for more info:
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
<p>(BTW, the OpenMPI FAQs are a great resource!)
<br>
<p>You can use the default hosts file (10.42.0.21, 10.42.0.22).
<br>
At least it works fine this way for me here,
<br>
and diverts all the MPI traffic to the eth1 subnet.
<br>
Changing the hosts/machines file would be needed in MPICH2,
<br>
not in OpenMPI, as far as I know.
<br>
(Here we also use the eth0 network for login, control, and I/O,
<br>
which I suppose is what you want to do.
<br>
We run both OpenMPI and MPICH2.)
<br>
<p>Of course your 10.0.1.0 network should be working correctly (and 
<br>
separate from the  10.42.0.0 net).
<br>
You can check this out with the tools (ping, etc).
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>Andreas Hoelzlwimmer wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#146;m using Open-MPI on a small Cluster of RHEL5.3-Nodes, current 
</span><br>
<span class="quotelev1">&gt; MPI-Version. For me it is a requirement now to run MPI over a certain 
</span><br>
<span class="quotelev1">&gt; adapter, in the current case the &#147;eth1&#148;-interface of my system. The 
</span><br>
<span class="quotelev1">&gt; adapter I want to use MPI for is not the default-adapter (eth0) all the 
</span><br>
<span class="quotelev1">&gt; rest of the traffic has to go over, but I cannot make MPI use the other 
</span><br>
<span class="quotelev1">&gt; adapter and therefore a different IP-Address.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The exact problem, showed on 2 Nodes:
</span><br>
<span class="quotelev1">&gt; Node 1:
</span><br>
<span class="quotelev1">&gt; eth0: 10.42.0.21
</span><br>
<span class="quotelev1">&gt; eth1: 10.0.1.21
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Node 2:
</span><br>
<span class="quotelev1">&gt; eth0: 10.42.0.22
</span><br>
<span class="quotelev1">&gt; eth1: 10.0.1.22
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for testing purposes, I linked the eth1 adapters of both machines 
</span><br>
<span class="quotelev1">&gt; together directly and access the machines remotely via eth0. If I now 
</span><br>
<span class="quotelev1">&gt; try to run an MPI-Program (in this case the MPI-Benchmark HPL) with a 
</span><br>
<span class="quotelev1">&gt; hosts file that specifies 10.0.1.21 and 10.0.1.22 as hosts, it gets 
</span><br>
<span class="quotelev1">&gt; quite problematic. The &#147;netstat &#150;a&#148; command shows me that it uses the 
</span><br>
<span class="quotelev1">&gt; addresses 10.42.* for the connection, the --debug-demon flag tells me 
</span><br>
<span class="quotelev1">&gt; that MPI initializes both nodes, but after that it runs forever and does 
</span><br>
<span class="quotelev1">&gt; not terminate. In addition to that, apart from initial traffic of a 
</span><br>
<span class="quotelev1">&gt; couple of packets, it does not send any network traffic over either of 
</span><br>
<span class="quotelev1">&gt; the network adapters.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please tell me if any of you have encounter such a problem or setup and 
</span><br>
<span class="quotelev1">&gt; can tell me how to fix it. I tried modifying routing tables, play around 
</span><br>
<span class="quotelev1">&gt; with subnetting, but I wasn&#146;t able to get a successful connection. If 
</span><br>
<span class="quotelev1">&gt; you need more information on that, please tell me. Please note that I&#146;m 
</span><br>
<span class="quotelev1">&gt; quite new to Open-MPI, so it might possibly be something about Open-MPI 
</span><br>
<span class="quotelev1">&gt; I just haven&#146;t discovered yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Andreas Hoelzlwimmer
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
<li><strong>Next message:</strong> <a href="9685.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9683.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2forcing all MPI traffic over Ethernet instead of using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9673.php">Andreas Hoelzlwimmer: "[OMPI users] MPI over ethernet non default-adapter - Need Help/Advice"</a>
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
