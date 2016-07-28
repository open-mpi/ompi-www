<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 18:29:53 2008" -->
<!-- isoreceived="20080911222953" -->
<!-- sent="Thu, 11 Sep 2008 15:29:43 -0700" -->
<!-- isosent="20080911222943" -->
<!-- name="Prasanna Ranganathan" -->
<!-- email="prasanna_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="C4EEE9E7.3111%prasanna_at_searchme.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.1259.1221161258.16379.users_at_open-mpi.org" -->
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
<strong>From:</strong> Prasanna Ranganathan (<em>prasanna_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-11 18:29:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6518.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6516.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="6478.php">Prasanna Ranganathan: "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6519.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6519.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6520.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have tried the following to no avail.
<br>
<p>On 499 machines running openMPI 1.2.7:
<br>
<p>mpirun -np 499 -bynode -hostfile nodelist /main/mpiHelloWorld ...
<br>
<p>With different combinations of the following parameters
<br>
<p>-mca btl_base_verbose 1 -mca btl_base_debug 2 -mca oob_base_verbose 1 -mca
<br>
oob_tcp_debug 1 -mca oob_tcp_listen_mode listen_thread -mca
<br>
btl_tcp_endpoint_cache 65536 -mca oob_tcp_peer_retries 120
<br>
<p>I still get the No route to Host error messages.
<br>
<p>Also, I tried with -mca pls_rsh_num_concurrent 499 --debug-daemons and did
<br>
not get any additional useful debug output other than the error messages.
<br>
<p>I did notice one strange thing though. The following is always successful
<br>
(atleast all my attempts)
<br>
<p>mpirun -np 100 -bynode -hostfile nodelist /main/mpiHelloWorld
<br>
<p>but
<br>
<p>mpirun -np 100 -bynode -hostfile nodelist /main/mpiHelloWorld
<br>
--debug-daemons
<br>
<p>prints these error messages at the end from each of the nodes :
<br>
<p>[idx2:04064] [0,0,1] orted_recv_pls: received message from [0,0,0]
<br>
[idx2:04064] [0,0,1] orted_recv_pls: received exit
<br>
[idx2:04064] *** Process received signal ***
<br>
[idx2:04064] Signal: Segmentation fault (11)
<br>
[idx2:04064] Signal code:  (128)
<br>
[idx2:04064] Failing at address: (nil)
<br>
[idx2:04064] [ 0] /lib/libpthread.so.0 [0x2b92cc729f30]
<br>
[idx2:04064] [ 1] /usr/lib64/libopen-rte.so.0(orte_pls_base_close+0x18)
<br>
[0x2b92cc0202a2]
<br>
[idx2:04064] [ 2] /usr/lib64/libopen-rte.so.0(orte_system_finalize+0x70)
<br>
[0x2b92cc00b5ac]
<br>
[idx2:04064] [ 3] /usr/lib64/libopen-rte.so.0(orte_finalize+0x20)
<br>
[0x2b92cc00875c]
<br>
[idx2:04064] [ 4] /usr/bin/orted(main+0x8a6) [0x4024ae]
<br>
[idx2:04064] *** End of error message ***
<br>
<p><p>I am not sure if this points to the actual cause for these issues. Is is to
<br>
do with the openMPI 1.2.7 having posix enabled in the current configuration
<br>
on these nodes? 
<br>
<p>Thanks again for your continued help.
<br>
<p>Regards,
<br>
<p>Prasanna.  
<br>
<p><span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Thu, 11 Sep 2008 12:16:50 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Need help resolving No route to host error
</span><br>
<span class="quotelev1">&gt; with OpenMPI 1.1.2
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;7110E2D0-EB89-4293-A241-8487174B4788_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 10, 2008, at 9:29 PM, Prasanna Ranganathan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have upgraded to 1.2.7 and am still noticing the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, we didn't change anything with regards to OOB and TCP from 1.2.6
</span><br>
<span class="quotelev1">&gt; -&gt; 1.2.7, but it's still good to be at the latest version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try running with this MCA parameter:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      mpirun --mca oob_tcp_listen_mode listen_thread ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry; I forgot that we did not enable that option by default in the
</span><br>
<span class="quotelev1">&gt; v1.2 series.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6518.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6516.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="6478.php">Prasanna Ranganathan: "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6519.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6519.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6520.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
