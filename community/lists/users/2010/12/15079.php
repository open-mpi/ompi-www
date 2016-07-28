<?
$subject_val = "Re: [OMPI users] Guaranteed run rank 0 on a given machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 17:48:09 2010" -->
<!-- isoreceived="20101210224809" -->
<!-- sent="Fri, 10 Dec 2010 15:47:58 -0700" -->
<!-- isosent="20101210224758" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Guaranteed run rank 0 on a given machine?" -->
<!-- id="4AD61A80-5018-45A8-B4E5-AD9B80EC94C3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D027A94.9010301_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Guaranteed run rank 0 on a given machine?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 17:47:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15080.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>Previous message:</strong> <a href="15078.php">Tang, Hsiu-Khuern: "[OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>In reply to:</strong> <a href="15074.php">Terry Dontje: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15081.php">Eugene Loh: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry is correct - not guaranteed, but that is the typical behavior.
<br>
<p>However, you -can- guarantee that rank=0 will be on a particular host. Just run your job:
<br>
<p>mpirun -n 1 -host &lt;target&gt; my_app : -n (N-1) my_app
<br>
<p>This guarantees that rank=0 is on host &lt;target&gt;. All other ranks will be distributed according to the selected mapping algorithm, including loadbalance
<br>
<p>Ralph
<br>
<p>On Dec 10, 2010, at 12:08 PM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; On 12/10/2010 01:46 PM, David Mathog wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The master is commonly very different from the workers, so I expected
</span><br>
<span class="quotelev2">&gt;&gt; there would be something like
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   --rank0-on &lt;hostname&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; but there doesn't seem to be a single switch on mpirun to do that.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If &quot;mastermachine&quot; is the first entry in the hostfile, or the first
</span><br>
<span class="quotelev2">&gt;&gt; machine in a -hosts list, will rank 0 always run there?  If so, will it
</span><br>
<span class="quotelev2">&gt;&gt; always run in the first slot on the first machine listed?  That seems to
</span><br>
<span class="quotelev2">&gt;&gt; be the case in practice, but is it guaranteed?  Even if -loadbalance is
</span><br>
<span class="quotelev2">&gt;&gt; used?  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; For Open MPI the above is correct, I am hesitant to use guaranteed though.
</span><br>
<span class="quotelev2">&gt;&gt; Otherwise, there is the rankfile method.  In the situation where the
</span><br>
<span class="quotelev2">&gt;&gt; master must run on a specific node, but there is no preference for the
</span><br>
<span class="quotelev2">&gt;&gt; workers, would a rank file like this be sufficient?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; rank 0=mastermachine slot=0
</span><br>
<span class="quotelev1">&gt; I thought you may have had to give all ranks but empirically it looks like you can.
</span><br>
<span class="quotelev2">&gt;&gt; The mpirun man page gives an example where all nodes/slots are
</span><br>
<span class="quotelev2">&gt;&gt; specified, but it doesn't say explicitly what happens if the
</span><br>
<span class="quotelev2">&gt;&gt; configuration is only partially specified, or how it interacts with the
</span><br>
<span class="quotelev2">&gt;&gt; -np parameter.  Modifying the man page example:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cat myrankfile
</span><br>
<span class="quotelev2">&gt;&gt; rank 0=aa slot=1:0-2
</span><br>
<span class="quotelev2">&gt;&gt; rank 1=bb slot=0:0,1
</span><br>
<span class="quotelev2">&gt;&gt; rank 2=cc slot=1-2
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -H aa,bb,cc,dd -np 4 -rf myrankfile ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Rank 0 runs on node aa, bound to socket 1, cores 0-2.
</span><br>
<span class="quotelev2">&gt;&gt; Rank 1 runs on node bb, bound to socket 0, cores 0 and 1.
</span><br>
<span class="quotelev2">&gt;&gt; Rank 2 runs on node cc, bound to cores 1 and 2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Rank 3 runs where?  not at all, or on dd, aa:slot=0, or ...? 
</span><br>
<span class="quotelev1">&gt; From my empirical runs it looks to me like rank 3 would end up on aa possibly slot=0.
</span><br>
<span class="quotelev1">&gt; In other words once you run out of entries in the rankfile it looks like the processes then start from the beginning of the hostlist again.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; Also, in my limited testing --host and -hostfile seem to be mutually
</span><br>
<span class="quotelev2">&gt;&gt; exclusive.  That is reasonable, but it isn't clear that it is intended.
</span><br>
<span class="quotelev2">&gt;&gt;  Example, with a hostfile containing one entry for &quot;monkey02.cluster
</span><br>
<span class="quotelev2">&gt;&gt; slots=1&quot;:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun  --host monkey01   --mca plm_rsh_agent rsh  hostname
</span><br>
<span class="quotelev2">&gt;&gt; monkey01.cluster
</span><br>
<span class="quotelev2">&gt;&gt; mpirun  --host monkey02   --mca plm_rsh_agent rsh  hostname
</span><br>
<span class="quotelev2">&gt;&gt; monkey02.cluster
</span><br>
<span class="quotelev2">&gt;&gt; mpirun  -hostfile /usr/common/etc/openmpi.machines.test1 \
</span><br>
<span class="quotelev2">&gt;&gt;    --mca plm_rsh_agent rsh  hostname
</span><br>
<span class="quotelev2">&gt;&gt; monkey02.cluster
</span><br>
<span class="quotelev2">&gt;&gt; mpirun  --host monkey01  \
</span><br>
<span class="quotelev2">&gt;&gt;   -hostfile /usr/commom/etc/openmpi.machines.test1 \
</span><br>
<span class="quotelev2">&gt;&gt;   --mca plm_rsh_agent rsh  hostname
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; There are no allocated resources for the application 
</span><br>
<span class="quotelev2">&gt;&gt;   hostname
</span><br>
<span class="quotelev2">&gt;&gt; that match the requested mapping:
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Verify that you have mapped the allocated resources properly using the 
</span><br>
<span class="quotelev2">&gt;&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; David Mathog
</span><br>
<span class="quotelev2">&gt;&gt; mathog_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Manager, Sequence Analysis Facility, Biology Division, Caltech
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15079/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15080.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>Previous message:</strong> <a href="15078.php">Tang, Hsiu-Khuern: "[OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>In reply to:</strong> <a href="15074.php">Terry Dontje: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15081.php">Eugene Loh: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
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
