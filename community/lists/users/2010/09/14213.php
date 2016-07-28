<?
$subject_val = "[OMPI users] Strange Segmentation Fault inside MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 11 03:35:47 2010" -->
<!-- isoreceived="20100911073547" -->
<!-- sent="Sat, 11 Sep 2010 13:05:40 +0530" -->
<!-- isosent="20100911073540" -->
<!-- name="Srikanth Raju" -->
<!-- email="srikiraju_at_[hidden]" -->
<!-- subject="[OMPI users] Strange Segmentation Fault inside MPI_Init" -->
<!-- id="AANLkTinYvNSyL6JbSgdXPhejuuxY+ESJ-bc8J-UtOKs1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Strange Segmentation Fault inside MPI_Init<br>
<strong>From:</strong> Srikanth Raju (<em>srikiraju_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-11 03:35:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14214.php">Jeff Squyres: "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="14212.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14214.php">Jeff Squyres: "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<li><strong>Reply:</strong> <a href="14214.php">Jeff Squyres: "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<li><strong>Reply:</strong> <a href="14216.php">Ralph Castain: "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello OMPI Users,
<br>
I'm using OpenMPI 1.4.1 with gcc 4.4.3 on my x86_64 linux system running the
<br>
latest Ubuntu 10.04 distro. I don't seem to be able to run any OpenMPI
<br>
application. I try running the simplest application, which goes like this
<br>
<p>#include&lt;mpi.h&gt;
<br>
int main(int argc, char * argv[])
<br>
{
<br>
MPI_Init(NULL, NULL);
<br>
MPI_Finalize();
<br>
}
<br>
<p>Compiling it with &quot;mpicc -g test.c&quot;
<br>
Running with &quot;mpirun -n 2 -hostfile hosts a.out&quot;
<br>
hosts file contains &quot;localhost slots=2&quot;
<br>
On run, I get this
<br>
<p><p>[starbuck:18829] *** Process received signal ***
<br>
[starbuck:18830] *** Process received signal ***
<br>
[starbuck:18830] Signal: Segmentation fault (11)
<br>
[starbuck:18830] Signal code: Address not mapped (1)
<br>
[starbuck:18830] Failing at address: 0x3c
<br>
[starbuck:18829] Signal: Segmentation fault (11)
<br>
[starbuck:18829] Signal code: Address not mapped (1)
<br>
[starbuck:18829] Failing at address: 0x3c
<br>
[starbuck:18830] [ 0] /lib/libpthread.so.0(+0xf8f0) [0x7f3b0aae08f0]
<br>
[starbuck:18830] [ 1] /usr/local/lib/libmca_common_sm.so.1(+0x1561)
<br>
[0x7f3b082e8561]
<br>
[starbuck:18830] [ 2]
<br>
/usr/local/lib/libmca_common_sm.so.1(mca_common_sm_mmap_init+0x6c1)
<br>
[0x7f3b082e9137]
<br>
[starbuck:18830] [ 3] /usr/lib/openmpi/lib/openmpi/mca_mpool_sm.so(+0x137b)
<br>
[0x7f3b084ed37b]
<br>
[starbuck:18830] [ 4]
<br>
/usr/lib/libmpi.so.0(mca_mpool_base_module_create+0x7d) [0x7f3b0bacc38d]
<br>
[starbuck:18830] [ 5] /usr/lib/openmpi/lib/openmpi/mca_btl_sm.so(+0x2a38)
<br>
[0x7f3b06c52a38]
<br>
[starbuck:18830] [ 6] /usr/lib/openmpi/lib/openmpi/mca_bml_r2.so(+0x18e7)
<br>
[0x7f3b076a48e7]
<br>
[starbuck:18830] [ 7] /usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0x258c)
<br>
[0x7f3b07aae58c]
<br>
[starbuck:18830] [ 8] /usr/lib/libmpi.so.0(+0x392bf) [0x7f3b0ba8b2bf]
<br>
[starbuck:18830] [ 9] /usr/lib/libmpi.so.0(MPI_Init+0x170) [0x7f3b0baac330]
<br>
[starbuck:18830] [10] a.out(main+0x22) [0x400866]
<br>
[starbuck:18830] [11] /lib/libc.so.6(__libc_start_main+0xfd)
<br>
[0x7f3b0a76cc4d]
<br>
[starbuck:18830] [12] a.out() [0x400789]
<br>
[starbuck:18830] *** End of error message ***
<br>
[starbuck:18829] [ 0] /lib/libpthread.so.0(+0xf8f0) [0x7fb6efefe8f0]
<br>
[starbuck:18829] [ 1] /usr/local/lib/libmca_common_sm.so.1(+0x1561)
<br>
[0x7fb6ed706561]
<br>
[starbuck:18829] [ 2]
<br>
/usr/local/lib/libmca_common_sm.so.1(mca_common_sm_mmap_init+0x6c1)
<br>
[0x7fb6ed707137]
<br>
[starbuck:18829] [ 3] /usr/lib/openmpi/lib/openmpi/mca_mpool_sm.so(+0x137b)
<br>
[0x7fb6ed90b37b]
<br>
[starbuck:18829] [ 4]
<br>
/usr/lib/libmpi.so.0(mca_mpool_base_module_create+0x7d) [0x7fb6f0eea38d]
<br>
[starbuck:18829] [ 5] /usr/lib/openmpi/lib/openmpi/mca_btl_sm.so(+0x2a38)
<br>
[0x7fb6ec070a38]
<br>
[starbuck:18829] [ 6] /usr/lib/openmpi/lib/openmpi/mca_bml_r2.so(+0x18e7)
<br>
[0x7fb6ecac28e7]
<br>
[starbuck:18829] [ 7] /usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0x258c)
<br>
[0x7fb6ececc58c]
<br>
[starbuck:18829] [ 8] /usr/lib/libmpi.so.0(+0x392bf) [0x7fb6f0ea92bf]
<br>
[starbuck:18829] [ 9] /usr/lib/libmpi.so.0(MPI_Init+0x170) [0x7fb6f0eca330]
<br>
[starbuck:18829] [10] a.out(main+0x22) [0x400866]
<br>
[starbuck:18829] [11] /lib/libc.so.6(__libc_start_main+0xfd)
<br>
[0x7fb6efb8ac4d]
<br>
[starbuck:18829] [12] a.out() [0x400789]
<br>
[starbuck:18829] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 18830 on node starbuck exited on
<br>
signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>My stack trace from gdb is:
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
0x00007ffff43c2561 in opal_list_get_first (list=0x7ffff45c5240)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../opal/class/opal_list.h:201
<br>
201         assert(1 == item-&gt;opal_list_item_refcount);
<br>
(gdb) bt
<br>
#0  0x00007ffff43c2561 in opal_list_get_first (list=0x7ffff45c5240)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../opal/class/opal_list.h:201
<br>
#1  0x00007ffff43c3137 in mca_common_sm_mmap_init (procs=0x673cb0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;num_procs=2, size=67113040,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;file_name=0x673c40
<br>
&quot;/tmp/openmpi-sessions-srikanth_at_starbuck_0/1510/1/shared_mem_pool.starbuck&quot;,
<br>
size_ctl_structure=4176, data_seg_alignment=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../ompi/mca/common/sm/common_sm_mmap.c:291
<br>
#2  0x00007ffff45c737b in mca_mpool_sm_init (resources=&lt;value optimized
<br>
out&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../ompi/mca/mpool/sm/mpool_sm_component.c:214
<br>
#3  0x00007ffff7ba638d in mca_mpool_base_module_create ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/lib/libmpi.so.0
<br>
#4  0x00007ffff2d2ca38 in sm_btl_first_time_init (btl=&lt;value optimized
<br>
out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nprocs=&lt;value optimized out&gt;, procs=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;peers=&lt;value optimized out&gt;, reachability=&lt;value optimized out&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../ompi/mca/btl/sm/btl_sm.c:228
<br>
#5  mca_btl_sm_add_procs (btl=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nprocs=&lt;value optimized out&gt;, procs=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;peers=&lt;value optimized out&gt;, reachability=&lt;value optimized out&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../ompi/mca/btl/sm/btl_sm.c:500
<br>
#6  0x00007ffff377e8e7 in mca_bml_r2_add_procs (nprocs=&lt;value optimized
<br>
out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;procs=0x2, reachable=0x7fffffffdd00)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../ompi/mca/bml/r2/bml_r2.c:206
<br>
#7  0x00007ffff3b8858c in mca_pml_ob1_add_procs (procs=0x678ce0, nprocs=2)
<br>
---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../ompi/mca/pml/ob1/pml_ob1.c:315
<br>
#8  0x00007ffff7b652bf in ?? () from /usr/lib/libmpi.so.0
<br>
#9  0x00007ffff7b86330 in PMPI_Init () from /usr/lib/libmpi.so.0
<br>
#10 0x0000000000400866 in main (argc=1, argv=0x7fffffffe008)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at test.c:4
<br>
<p>I can't figure out what's going on here! It says MPI_Init is segfaulting,
<br>
but I think it is probably some kind of misconfiguration.
<br>
I have tried reinstalling the openmpi package. I have an AMD Turion X2
<br>
M500(64 bit) processor.
<br>
<p>The interesting thing is, the Segfault occurs only when I try to run
<br>
multiple processes. With n = 1, it has no problems.
<br>
Thanks for any help!
<br>
<p><pre>
-- 
Regards,
Srikanth Raju
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14213/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14214.php">Jeff Squyres: "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="14212.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14214.php">Jeff Squyres: "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<li><strong>Reply:</strong> <a href="14214.php">Jeff Squyres: "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<li><strong>Reply:</strong> <a href="14216.php">Ralph Castain: "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
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
