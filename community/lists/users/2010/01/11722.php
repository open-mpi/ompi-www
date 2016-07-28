<?
$subject_val = "[OMPI users] problem with progress thread and orte";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  8 11:38:26 2010" -->
<!-- isoreceived="20100108163826" -->
<!-- sent="Fri, 8 Jan 2010 11:38:21 -0500" -->
<!-- isosent="20100108163821" -->
<!-- name="Dong Li" -->
<!-- email="lid_at_[hidden]" -->
<!-- subject="[OMPI users] problem with progress thread and orte" -->
<!-- id="5f330bae1001080838u63ea3fb8h3d8bdd2f8cb3645d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] problem with progress thread and orte<br>
<strong>From:</strong> Dong Li (<em>lid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-08 11:38:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11723.php">Ralph Castain: "Re: [OMPI users] problem with progress thread and orte"</a>
<li><strong>Previous message:</strong> <a href="11721.php">Roy Dragseth: "Re: [OMPI users] Memory corruption?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11723.php">Ralph Castain: "Re: [OMPI users] problem with progress thread and orte"</a>
<li><strong>Reply:</strong> <a href="11723.php">Ralph Castain: "Re: [OMPI users] problem with progress thread and orte"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, guys.
<br>
My application got stuck when I run an application with Open MPI 1.4
<br>
with progress thead enabled.
<br>
<p>The OpenMPI is configured and compiled with the following options.
<br>
./configure --with-openib=/usr --enable-trace --enable-debug
<br>
--enable-peruse --enable-progress-threads
<br>
<p>Then I started the application with two MPI processes, but it looks
<br>
like there is some problem with orte and the mpiexec just stuck there
<br>
and never run the application.
<br>
I used gdb to attach to the mpiexec to find out where the program got
<br>
stuck. The backtrace information is shown in the following for the two
<br>
MPI progresses (i.e. the rank 0 and the rank 1). It looks to me that
<br>
the problem happened in the rank 0 when it tries to do some atomic add
<br>
operation. Note that my processor is Intel Xeon CPU E5462, but the
<br>
open mpi tried to use some AMD64 instructions to conduct atomic add
<br>
operations. Is this a bug or something?
<br>
<p>Any comment? Thank you.
<br>
<p>-Dong
<br>
<p><p>***********************************************************************************************************************************************
<br>
The following is for the rank 0.
<br>
(gdb) bt
<br>
#0  0x00007fbdd1c93264 in opal_atomic_cmpset_32 (addr=0x7fbdd1eede24,
<br>
oldval=1, newval=0) at ../opal/include/opal/sys/amd64/atomic.h:94
<br>
#1  0x00007fbdd1c93348 in opal_atomic_add_xx (addr=0x7fbdd1eede24,
<br>
value=1, length=4) at ../opal/include/opal/sys/atomic_impl.h:243
<br>
#2  0x00007fbdd1c932ad in opal_progress () at runtime/opal_progress.c:171
<br>
#3  0x00007fbdd1f5c9ad in orte_plm_base_daemon_callback
<br>
(num_daemons=1) at base/plm_base_launch_support.c:459
<br>
#4  0x00007fbdd0a5579d in orte_plm_rsh_launch (jdata=0x60f070) at
<br>
plm_rsh_module.c:1221
<br>
#5  0x0000000000403821 in orterun (argc=15, argv=0x7fffda18a498) at
<br>
orterun.c:748
<br>
#6  0x0000000000402dc7 in main (argc=15, argv=0x7fffda18a498) at main.c:13
<br>
************************************************************************************************************************************************
<br>
The following is for the rank 1.
<br>
#0  0x0000003c4c20b309 in pthread_cond_wait@@GLIBC_2.3.2 () from
<br>
/lib64/libpthread.so.0
<br>
#1  0x00007f6f8b04ba56 in opal_condition_wait (c=0x656ce0, m=0x656c88)
<br>
at ../../../../opal/threads/condition.h:78
<br>
#2  0x00007f6f8b04b8b7 in orte_rml_oob_send (peer=0x7f6f8c578978,
<br>
iov=0x7fff945798d0, count=1, tag=10, flags=16) at rml_oob_send.c:153
<br>
#3  0x00007f6f8b04c197 in orte_rml_oob_send_buffer
<br>
(peer=0x7f6f8c578978, buffer=0x6563b0, tag=10, flags=0) at
<br>
rml_oob_send.c:269
<br>
#4  0x00007f6f8c32fe24 in orte_daemon (argc=28, argv=0x7fff9457abd8)
<br>
at orted/orted_main.c:610
<br>
#5  0x0000000000400917 in main (argc=28, argv=0x7fff9457abd8) at orted.c:62
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11723.php">Ralph Castain: "Re: [OMPI users] problem with progress thread and orte"</a>
<li><strong>Previous message:</strong> <a href="11721.php">Roy Dragseth: "Re: [OMPI users] Memory corruption?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11723.php">Ralph Castain: "Re: [OMPI users] problem with progress thread and orte"</a>
<li><strong>Reply:</strong> <a href="11723.php">Ralph Castain: "Re: [OMPI users] problem with progress thread and orte"</a>
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
