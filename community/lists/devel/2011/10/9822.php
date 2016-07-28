<?
$subject_val = "[OMPI devel] running OpenMPI examples on two hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 12 14:46:10 2011" -->
<!-- isoreceived="20111012184610" -->
<!-- sent="Thu, 13 Oct 2011 00:16:06 +0530" -->
<!-- isosent="20111012184606" -->
<!-- name="Bhargava Ramu Kavati" -->
<!-- email="ramu.kavati_at_[hidden]" -->
<!-- subject="[OMPI devel] running OpenMPI examples on two hosts" -->
<!-- id="CANePEPJ=bY2FG2bjPzzLR7Fs8Qfju=kBmXv8oB2Q6DsS-1u+fw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] running OpenMPI examples on two hosts<br>
<strong>From:</strong> Bhargava Ramu Kavati (<em>ramu.kavati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-12 14:46:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9823.php">Ralph Castain: "Re: [OMPI devel] running OpenMPI examples on two hosts"</a>
<li><strong>Previous message:</strong> <a href="9821.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25248"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9823.php">Ralph Castain: "Re: [OMPI devel] running OpenMPI examples on two hosts"</a>
<li><strong>Reply:</strong> <a href="9823.php">Ralph Castain: "Re: [OMPI devel] running OpenMPI examples on two hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am using OpenMPI version 1.4.3 on CentOS5.4 machines (connected back to
<br>
back using Infiniband HW)
<br>
I am trying to run example apps in OpenMPI using the below command.
<br>
<p>&quot;*mpirun --prefix /usr/local/ -np 2 --mca btl openib --mca
<br>
btl_openib_cpc_include rdmacm -hostfile tmp_host_file ring_c*&quot;
<br>
<p>Here tmp_host_file contains IP addresses of two hosts.  After running this
<br>
command, I see the error as
<br>
<p>&quot;*At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.*&quot;
<br>
This clearly indicates that there is an option missing the command due to
<br>
which MPI processes are not able to reach each other.  Can you please let me
<br>
know
<br>
1) how do we resolve this
<br>
2) IP is the only way for MPI processes to reach each other (i.e. it'll go
<br>
via IPoIB in infiniband case) ?
<br>
<p>Thanks &amp; Regards,
<br>
Ramu
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9822/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9823.php">Ralph Castain: "Re: [OMPI devel] running OpenMPI examples on two hosts"</a>
<li><strong>Previous message:</strong> <a href="9821.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25248"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9823.php">Ralph Castain: "Re: [OMPI devel] running OpenMPI examples on two hosts"</a>
<li><strong>Reply:</strong> <a href="9823.php">Ralph Castain: "Re: [OMPI devel] running OpenMPI examples on two hosts"</a>
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
