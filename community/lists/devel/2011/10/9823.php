<?
$subject_val = "Re: [OMPI devel] running OpenMPI examples on two hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 12 14:55:13 2011" -->
<!-- isoreceived="20111012185513" -->
<!-- sent="Wed, 12 Oct 2011 12:55:05 -0600" -->
<!-- isosent="20111012185505" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] running OpenMPI examples on two hosts" -->
<!-- id="20481245-242F-41FD-9A66-EEEB95EEE0D0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANePEPJ=bY2FG2bjPzzLR7Fs8Qfju=kBmXv8oB2Q6DsS-1u+fw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] running OpenMPI examples on two hosts<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-12 14:55:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9824.php">George Bosilca: "[OMPI devel] [Open MPI Announce] Open MPI 1.4.4 released"</a>
<li><strong>Previous message:</strong> <a href="9822.php">Bhargava Ramu Kavati: "[OMPI devel] running OpenMPI examples on two hosts"</a>
<li><strong>In reply to:</strong> <a href="9822.php">Bhargava Ramu Kavati: "[OMPI devel] running OpenMPI examples on two hosts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe the btl must include self - can't just be openib. So you need -mca btl self,openib, otherwise the proc cannot talk to itself.
<br>
<p><p>On Oct 12, 2011, at 12:46 PM, Bhargava Ramu Kavati wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI version 1.4.3 on CentOS5.4 machines (connected back to back using Infiniband HW)
</span><br>
<span class="quotelev1">&gt; I am trying to run example apps in OpenMPI using the below command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;mpirun --prefix /usr/local/ -np 2 --mca btl openib --mca btl_openib_cpc_include rdmacm -hostfile tmp_host_file ring_c&quot;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here tmp_host_file contains IP addresses of two hosts.  After running this command, I see the error as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.&quot;
</span><br>
<span class="quotelev1">&gt; This clearly indicates that there is an option missing the command due to which MPI processes are not able to reach each other.  Can you please let me know 
</span><br>
<span class="quotelev1">&gt; 1) how do we resolve this
</span><br>
<span class="quotelev1">&gt; 2) IP is the only way for MPI processes to reach each other (i.e. it'll go via IPoIB in infiniband case) ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev1">&gt; Ramu
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9823/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9824.php">George Bosilca: "[OMPI devel] [Open MPI Announce] Open MPI 1.4.4 released"</a>
<li><strong>Previous message:</strong> <a href="9822.php">Bhargava Ramu Kavati: "[OMPI devel] running OpenMPI examples on two hosts"</a>
<li><strong>In reply to:</strong> <a href="9822.php">Bhargava Ramu Kavati: "[OMPI devel] running OpenMPI examples on two hosts"</a>
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
