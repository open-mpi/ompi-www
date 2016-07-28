<?
$subject_val = "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 14:16:45 2015" -->
<!-- isoreceived="20150407181645" -->
<!-- sent="Tue, 7 Apr 2015 20:16:44 +0200" -->
<!-- isosent="20150407181644" -->
<!-- name="Thomas Klimpel" -->
<!-- email="jacques.gentzen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5" -->
<!-- id="CAAowFmMVuBg-bi=StG=CNwwfwDM+30q6utwskzCC7m6zwiL=YQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAowFmOg8cJEXG-m8fY4QN+Mu=Bp3C5Suj+5K2q5HJpmrXWrMg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5<br>
<strong>From:</strong> Thomas Klimpel (<em>jacques.gentzen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-07 14:16:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26643.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26641.php">Ralph Castain: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)"</a>
<li><strong>In reply to:</strong> <a href="26595.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26652.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="26652.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is a stackdump from inside the debugger (because it gives filenames
<br>
and line numbers):
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
[Switching to Thread 0x7f1eb6bfd700 (LWP 24847)]
<br>
0x000000366aa79252 in _int_malloc () from /lib64/libc.so.6
<br>
(gdb) bt
<br>
#0  0x000000366aa79252 in _int_malloc () from /lib64/libc.so.6
<br>
#1  0x000000366aa7b7da in _int_realloc () from /lib64/libc.so.6
<br>
#2  0x000000366aa7baf5 in realloc () from /lib64/libc.so.6
<br>
#3  0x00007f1ee005d0a8 in epoll_dispatch (base=&lt;value optimized out&gt;,
<br>
arg=0x13d1310, tv=&lt;value optimized out&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../package/openmpi-1.6.5/opal/event/epoll.c:271
<br>
#4  0x00007f1ee005f1cf in opal_event_base_loop (base=0x13d1e50,
<br>
flags=&lt;value optimized out&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../package/openmpi-1.6.5/opal/event/event.c:838
<br>
#5  0x00007f1ee00842f9 in opal_progress () at
<br>
../../../../package/openmpi-1.6.5/opal/runtime/opal_progress.c:189
<br>
#6  0x00007f1ecd43cd7f in mca_pml_ob1_iprobe (src=&lt;value optimized out&gt;,
<br>
tag=-1, comm=0x164dd40, matched=0x7f1eb6bfb8ac, status=0x7f1eb6bfb8b0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
../../../../../../../package/openmpi-1.6.5/ompi/mca/pml/ob1/pml_ob1_iprobe.c:48
<br>
#7  0x00007f1edffe3427 in PMPI_Iprobe (source=227, tag=-1, comm=0x164dd40,
<br>
flag=&lt;value optimized out&gt;, status=&lt;value optimized out&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at piprobe.c:79
<br>
#8  0x00007f1eebb518e7 in OMPIConnection::Receive (this=0x13c7950,
<br>
rMessage_p=std::vector of length 0, capacity 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rMessageId_p=@0x7f1eb6bfc26c, NodeId_p=227)
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26642/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26643.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26641.php">Ralph Castain: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)"</a>
<li><strong>In reply to:</strong> <a href="26595.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26652.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="26652.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
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
