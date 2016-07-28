<?
$subject_val = "[OMPI users] Hang in MPI_Send";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  4 20:18:31 2015" -->
<!-- isoreceived="20150405001831" -->
<!-- sent="Sat, 4 Apr 2015 17:18:29 -0700" -->
<!-- isosent="20150405001829" -->
<!-- name="Subhra Mazumdar" -->
<!-- email="subhramazumdar1_at_[hidden]" -->
<!-- subject="[OMPI users] Hang in MPI_Send" -->
<!-- id="CAATkYOXVrf7Gn6kFR4Gst5EKJ_15ZShqruZwq-MoEOeANVABgQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Hang in MPI_Send<br>
<strong>From:</strong> Subhra Mazumdar (<em>subhramazumdar1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-04 20:18:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26609.php">Andreas Schäfer: "Re: [OMPI users] Hang in MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="26607.php">Lei Shi: "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26609.php">Andreas Schäfer: "Re: [OMPI users] Hang in MPI_Send"</a>
<li><strong>Reply:</strong> <a href="26609.php">Andreas Schäfer: "Re: [OMPI users] Hang in MPI_Send"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>When I run my mpi job with openmpi 1.8.4, it hangs in the following stack:
<br>
<p>#0  0x00007fe59e07b264 in __lll_lock_wait () from /lib64/libpthread.so.0
<br>
#1  0x00007fe59e076508 in _L_lock_854 () from /lib64/libpthread.so.0
<br>
#2  0x00007fe59e0763d7 in pthread_mutex_lock () from /lib64/libpthread.so.0
<br>
#3  0x00007fe598543341 in mca_btl_vader_component_progress () from
<br>
/root/openmpi-1.8.4/openmpinstall/lib/openmpi/mca_btl_vader.so
<br>
#4  0x00007fe59c4932ca in opal_progress () from
<br>
/root/openmpi-1.8.4/openmpinstall/lib/libopen-pal.so.6
<br>
#5  0x00007fe597f012c5 in mca_pml_ob1_send () from
<br>
/root/openmpi-1.8.4/openmpinstall/lib/openmpi/mca_pml_ob1.so
<br>
#6  0x00007fe59e2fe902 in PMPI_Send () from
<br>
./openmpi-1.8.4/openmpinstall/lib/libmpi.so.1
<br>
<p><p>Anyone seen this? I am using MPI_THREAD_MULTIPLE for mpi init since my mpi
<br>
processes are multithreaded. I also checked that I got the same level as
<br>
requested (MPI_THREAD_MULTIPLE) during init and I had compiled openmpi to
<br>
enable threading.
<br>
<p>Thanks,
<br>
Subhra.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26608/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26609.php">Andreas Schäfer: "Re: [OMPI users] Hang in MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="26607.php">Lei Shi: "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26609.php">Andreas Schäfer: "Re: [OMPI users] Hang in MPI_Send"</a>
<li><strong>Reply:</strong> <a href="26609.php">Andreas Schäfer: "Re: [OMPI users] Hang in MPI_Send"</a>
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
