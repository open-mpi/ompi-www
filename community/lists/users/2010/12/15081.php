<?
$subject_val = "Re: [OMPI users] Guaranteed run rank 0 on a given machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 17:51:33 2010" -->
<!-- isoreceived="20101210225133" -->
<!-- sent="Fri, 10 Dec 2010 14:50:51 -0800" -->
<!-- isosent="20101210225051" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Guaranteed run rank 0 on a given machine?" -->
<!-- id="4D02AECB.9060206_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E1PR7z7-0005Ae-FQ_at_mendel.bio.caltech.edu" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 17:50:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15082.php">Tang, Hsiu-Khuern: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>Previous message:</strong> <a href="15080.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>In reply to:</strong> <a href="15073.php">David Mathog: "[OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15088.php">jody: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Reply:</strong> <a href="15088.php">jody: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David Mathog wrote:
<br>
<p><span class="quotelev1">&gt;Also, in my limited testing --host and -hostfile seem to be mutually
</span><br>
<span class="quotelev1">&gt;exclusive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
No.  You can use both together.  Indeed, the mpirun man page even has 
<br>
examples of this (though personally, I don't see having a use for 
<br>
this).  I think the idea was you might use a hostfile to define the 
<br>
nodes in your cluster and an mpirun command line that uses --host to 
<br>
select specific nodes from the file.
<br>
<p><span class="quotelev1">&gt;That is reasonable, but it isn't clear that it is intended.
</span><br>
<span class="quotelev1">&gt; Example, with a hostfile containing one entry for &quot;monkey02.cluster
</span><br>
<span class="quotelev1">&gt;slots=1&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;mpirun  --host monkey01   --mca plm_rsh_agent rsh  hostname
</span><br>
<span class="quotelev1">&gt;monkey01.cluster
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Okay.
<br>
<p><span class="quotelev1">&gt;mpirun  --host monkey02   --mca plm_rsh_agent rsh  hostname
</span><br>
<span class="quotelev1">&gt;monkey02.cluster
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Okay.
<br>
<p><span class="quotelev1">&gt;mpirun  -hostfile /usr/common/etc/openmpi.machines.test1 \
</span><br>
<span class="quotelev1">&gt;   --mca plm_rsh_agent rsh  hostname
</span><br>
<span class="quotelev1">&gt;monkey02.cluster
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Okay.
<br>
<p><span class="quotelev1">&gt;mpirun  --host monkey01  \
</span><br>
<span class="quotelev1">&gt;  -hostfile /usr/commom/etc/openmpi.machines.test1 \
</span><br>
<span class="quotelev1">&gt;  --mca plm_rsh_agent rsh  hostname
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;There are no allocated resources for the application 
</span><br>
<span class="quotelev1">&gt;  hostname
</span><br>
<span class="quotelev1">&gt;that match the requested mapping:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Verify that you have mapped the allocated resources properly using the 
</span><br>
<span class="quotelev1">&gt;--host or --hostfile specification.
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Right.  Your hostfile has monkey02.  On the command line, you specify 
<br>
monkey01, but that's not in your hostfile.  That's a problem.  Just like 
<br>
on the mpirun man page.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15082.php">Tang, Hsiu-Khuern: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>Previous message:</strong> <a href="15080.php">Ralph Castain: "Re: [OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>In reply to:</strong> <a href="15073.php">David Mathog: "[OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15088.php">jody: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Reply:</strong> <a href="15088.php">jody: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
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
