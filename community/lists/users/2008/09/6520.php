<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 12 09:57:05 2008" -->
<!-- isoreceived="20080912135705" -->
<!-- sent="Fri, 12 Sep 2008 09:56:59 -0400" -->
<!-- isosent="20080912135659" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="11EEDA97-071B-4FFD-B322-5EB96C6E91D4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4EEE9E7.3111%prasanna_at_searchme.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-12 09:56:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6521.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6519.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6517.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6521.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 11, 2008, at 6:29 PM, Prasanna Ranganathan wrote:
<br>
<p><span class="quotelev1">&gt; I have tried the following to no avail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 499 machines running openMPI 1.2.7:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 499 -bynode -hostfile nodelist /main/mpiHelloWorld ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With different combinations of the following parameters
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl_base_verbose 1 -mca btl_base_debug 2 -mca oob_base_verbose  
</span><br>
<span class="quotelev1">&gt; 1 -mca
</span><br>
<span class="quotelev1">&gt; oob_tcp_debug 1 -mca oob_tcp_listen_mode listen_thread -mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_endpoint_cache 65536 -mca oob_tcp_peer_retries 120
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I still get the No route to Host error messages.
</span><br>
<p>This is quite odd -- with the oob_tcp_listen_mode option, we have run  
<br>
jobs in the thousands of processes in the v1.2 series.  The startup is  
<br>
still a bit slow (it's vastly improved in the upcoming v1.3 series),  
<br>
but we didn't run into problems like this.
<br>
<p>Can you absolutely verify that you are running 1.2.7 on all of your  
<br>
nodes and you have specified &quot;-mca oob_tcp_listen_mode listen_thread&quot;  
<br>
on the mpirun command line?  The important part here is that when you  
<br>
invoke OMPI v1.2.7's mpirun on the head node, you are also using  
<br>
v1.2.7 on all the back-end nodes as well.
<br>
<p><span class="quotelev1">&gt; Also, I tried with -mca pls_rsh_num_concurrent 499 --debug-daemons  
</span><br>
<span class="quotelev1">&gt; and did
</span><br>
<span class="quotelev1">&gt; not get any additional useful debug output other than the error  
</span><br>
<span class="quotelev1">&gt; messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did notice one strange thing though. The following is always  
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; (atleast all my attempts)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 100 -bynode -hostfile nodelist /main/mpiHelloWorld
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 100 -bynode -hostfile nodelist /main/mpiHelloWorld
</span><br>
<span class="quotelev1">&gt; --debug-daemons
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; prints these error messages at the end from each of the nodes :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [idx2:04064] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev1">&gt; [idx2:04064] [0,0,1] orted_recv_pls: received exit
</span><br>
<span class="quotelev1">&gt; [idx2:04064] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [idx2:04064] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [idx2:04064] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [idx2:04064] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [idx2:04064] [ 0] /lib/libpthread.so.0 [0x2b92cc729f30]
</span><br>
<span class="quotelev1">&gt; [idx2:04064] [ 1] /usr/lib64/libopen-rte.so.0(orte_pls_base_close 
</span><br>
<span class="quotelev1">&gt; +0x18)
</span><br>
<span class="quotelev1">&gt; [0x2b92cc0202a2]
</span><br>
<span class="quotelev1">&gt; [idx2:04064] [ 2] /usr/lib64/libopen-rte.so.0(orte_system_finalize 
</span><br>
<span class="quotelev1">&gt; +0x70)
</span><br>
<span class="quotelev1">&gt; [0x2b92cc00b5ac]
</span><br>
<span class="quotelev1">&gt; [idx2:04064] [ 3] /usr/lib64/libopen-rte.so.0(orte_finalize+0x20)
</span><br>
<span class="quotelev1">&gt; [0x2b92cc00875c]
</span><br>
<span class="quotelev1">&gt; [idx2:04064] [ 4] /usr/bin/orted(main+0x8a6) [0x4024ae]
</span><br>
<span class="quotelev1">&gt; [idx2:04064] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure if this points to the actual cause for these issues.  
</span><br>
<span class="quotelev1">&gt; Is is to
</span><br>
<span class="quotelev1">&gt; do with the openMPI 1.2.7 having posix enabled in the current  
</span><br>
<span class="quotelev1">&gt; configuration
</span><br>
<span class="quotelev1">&gt; on these nodes?
</span><br>
<p><p>POSIX threads enabled should not cause these issues.  What you want to  
<br>
see in ompi_info output is the following:
<br>
<p>[6:46] svbu-mpi:~/hg/openib-fd-progress % ompi_info | grep thread
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
<p>The two &quot;no&quot;'s are what are important here.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6521.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6519.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6517.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6521.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
