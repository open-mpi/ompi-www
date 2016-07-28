<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 20:16:40 2008" -->
<!-- isoreceived="20080912001640" -->
<!-- sent="Thu, 11 Sep 2008 20:16:35 -0400" -->
<!-- isosent="20080912001635" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="48C9B4E3.30904_at_neuralbs.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-11 20:16:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6520.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6518.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6517.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6520.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Prasanna,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I opened up a bug report to enable a better control over the 
<br>
threading options (<a href="http://bugs.gentoo.org/show_bug.cgi?id=237435">http://bugs.gentoo.org/show_bug.cgi?id=237435</a>). In 
<br>
the meanwhile, if your helloWorld isn't too fluffy, could you send it 
<br>
over (off list if you prefer) so I can take a look at it, the 
<br>
Segmentation fault is probably hinting at another problem. Also, could 
<br>
you send the output of ompi_info now that you've recompiled openmpi with 
<br>
USE=-threads, I want to make sure the option went through as I hope it 
<br>
should. Simply attach the file named out.txt after running the following 
<br>
command:
<br>
<p>ompi_info &gt; out.txt
<br>
<p>...RTF files tend to make my eyes cross over ;)
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p>Prasanna Ranganathan wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried the following to no avail.
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
<span class="quotelev1">&gt; -mca btl_base_verbose 1 -mca btl_base_debug 2 -mca oob_base_verbose 1 -mca
</span><br>
<span class="quotelev1">&gt; oob_tcp_debug 1 -mca oob_tcp_listen_mode listen_thread -mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_endpoint_cache 65536 -mca oob_tcp_peer_retries 120
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I still get the No route to Host error messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I tried with -mca pls_rsh_num_concurrent 499 --debug-daemons and did
</span><br>
<span class="quotelev1">&gt; not get any additional useful debug output other than the error messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did notice one strange thing though. The following is always successful
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
<span class="quotelev1">&gt; [idx2:04064] [ 1] /usr/lib64/libopen-rte.so.0(orte_pls_base_close+0x18)
</span><br>
<span class="quotelev1">&gt; [0x2b92cc0202a2]
</span><br>
<span class="quotelev1">&gt; [idx2:04064] [ 2] /usr/lib64/libopen-rte.so.0(orte_system_finalize+0x70)
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
<span class="quotelev1">&gt; I am not sure if this points to the actual cause for these issues. Is is to
</span><br>
<span class="quotelev1">&gt; do with the openMPI 1.2.7 having posix enabled in the current configuration
</span><br>
<span class="quotelev1">&gt; on these nodes? 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again for your continued help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Prasanna.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Message: 2
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thu, 11 Sep 2008 12:16:50 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Need help resolving No route to host error
</span><br>
<span class="quotelev2">&gt;&gt; with OpenMPI 1.1.2
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;7110E2D0-EB89-4293-A241-8487174B4788_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 10, 2008, at 9:29 PM, Prasanna Ranganathan wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have upgraded to 1.2.7 and am still noticing the issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, we didn't change anything with regards to OOB and TCP from 1.2.6
</span><br>
<span class="quotelev2">&gt;&gt; -&gt; 1.2.7, but it's still good to be at the latest version.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try running with this MCA parameter:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      mpirun --mca oob_tcp_listen_mode listen_thread ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry; I forgot that we did not enable that option by default in the
</span><br>
<span class="quotelev2">&gt;&gt; v1.2 series.
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<span class="quotelev1">&gt;   
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6519/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6520.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6518.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6517.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6520.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
