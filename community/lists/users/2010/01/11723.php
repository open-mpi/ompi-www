<?
$subject_val = "Re: [OMPI users] problem with progress thread and orte";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  8 11:43:31 2010" -->
<!-- isoreceived="20100108164331" -->
<!-- sent="Fri, 8 Jan 2010 09:43:23 -0700" -->
<!-- isosent="20100108164323" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with progress thread and orte" -->
<!-- id="30AB3650-03C1-4CE9-A43B-F65B5B870F3E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5f330bae1001080838u63ea3fb8h3d8bdd2f8cb3645d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with progress thread and orte<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-08 11:43:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11724.php">Arunkumar C R: "[OMPI users] MPI debugger"</a>
<li><strong>Previous message:</strong> <a href="11722.php">Dong Li: "[OMPI users] problem with progress thread and orte"</a>
<li><strong>In reply to:</strong> <a href="11722.php">Dong Li: "[OMPI users] problem with progress thread and orte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11737.php">Sangamesh B: "Re: [OMPI users] problem with progress thread and orte"</a>
<li><strong>Reply:</strong> <a href="11737.php">Sangamesh B: "Re: [OMPI users] problem with progress thread and orte"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, the system doesn't currently support enable-progress-threads. It is a two-fold problem: ORTE won't work that way, and some parts of the MPI layer won't either.
<br>
<p>I am currently working on fixing ORTE so it will work with progress threads enabled. I believe (but can't confirm) that the TCP BTL will also work with that feature, but I have heard that the other BTL's won't (again, can't confirm).
<br>
<p>I'll send out a note when ORTE is okay, but that won't be included in a release for awhile.
<br>
<p>On Jan 8, 2010, at 9:38 AM, Dong Li wrote:
<br>
<p><span class="quotelev1">&gt; Hi, guys.
</span><br>
<span class="quotelev1">&gt; My application got stuck when I run an application with Open MPI 1.4
</span><br>
<span class="quotelev1">&gt; with progress thead enabled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The OpenMPI is configured and compiled with the following options.
</span><br>
<span class="quotelev1">&gt; ./configure --with-openib=/usr --enable-trace --enable-debug
</span><br>
<span class="quotelev1">&gt; --enable-peruse --enable-progress-threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then I started the application with two MPI processes, but it looks
</span><br>
<span class="quotelev1">&gt; like there is some problem with orte and the mpiexec just stuck there
</span><br>
<span class="quotelev1">&gt; and never run the application.
</span><br>
<span class="quotelev1">&gt; I used gdb to attach to the mpiexec to find out where the program got
</span><br>
<span class="quotelev1">&gt; stuck. The backtrace information is shown in the following for the two
</span><br>
<span class="quotelev1">&gt; MPI progresses (i.e. the rank 0 and the rank 1). It looks to me that
</span><br>
<span class="quotelev1">&gt; the problem happened in the rank 0 when it tries to do some atomic add
</span><br>
<span class="quotelev1">&gt; operation. Note that my processor is Intel Xeon CPU E5462, but the
</span><br>
<span class="quotelev1">&gt; open mpi tried to use some AMD64 instructions to conduct atomic add
</span><br>
<span class="quotelev1">&gt; operations. Is this a bug or something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any comment? Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dong
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***********************************************************************************************************************************************
</span><br>
<span class="quotelev1">&gt; The following is for the rank 0.
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007fbdd1c93264 in opal_atomic_cmpset_32 (addr=0x7fbdd1eede24,
</span><br>
<span class="quotelev1">&gt; oldval=1, newval=0) at ../opal/include/opal/sys/amd64/atomic.h:94
</span><br>
<span class="quotelev1">&gt; #1  0x00007fbdd1c93348 in opal_atomic_add_xx (addr=0x7fbdd1eede24,
</span><br>
<span class="quotelev1">&gt; value=1, length=4) at ../opal/include/opal/sys/atomic_impl.h:243
</span><br>
<span class="quotelev1">&gt; #2  0x00007fbdd1c932ad in opal_progress () at runtime/opal_progress.c:171
</span><br>
<span class="quotelev1">&gt; #3  0x00007fbdd1f5c9ad in orte_plm_base_daemon_callback
</span><br>
<span class="quotelev1">&gt; (num_daemons=1) at base/plm_base_launch_support.c:459
</span><br>
<span class="quotelev1">&gt; #4  0x00007fbdd0a5579d in orte_plm_rsh_launch (jdata=0x60f070) at
</span><br>
<span class="quotelev1">&gt; plm_rsh_module.c:1221
</span><br>
<span class="quotelev1">&gt; #5  0x0000000000403821 in orterun (argc=15, argv=0x7fffda18a498) at
</span><br>
<span class="quotelev1">&gt; orterun.c:748
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000402dc7 in main (argc=15, argv=0x7fffda18a498) at main.c:13
</span><br>
<span class="quotelev1">&gt; ************************************************************************************************************************************************
</span><br>
<span class="quotelev1">&gt; The following is for the rank 1.
</span><br>
<span class="quotelev1">&gt; #0  0x0000003c4c20b309 in pthread_cond_wait@@GLIBC_2.3.2 () from
</span><br>
<span class="quotelev1">&gt; /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x00007f6f8b04ba56 in opal_condition_wait (c=0x656ce0, m=0x656c88)
</span><br>
<span class="quotelev1">&gt; at ../../../../opal/threads/condition.h:78
</span><br>
<span class="quotelev1">&gt; #2  0x00007f6f8b04b8b7 in orte_rml_oob_send (peer=0x7f6f8c578978,
</span><br>
<span class="quotelev1">&gt; iov=0x7fff945798d0, count=1, tag=10, flags=16) at rml_oob_send.c:153
</span><br>
<span class="quotelev1">&gt; #3  0x00007f6f8b04c197 in orte_rml_oob_send_buffer
</span><br>
<span class="quotelev1">&gt; (peer=0x7f6f8c578978, buffer=0x6563b0, tag=10, flags=0) at
</span><br>
<span class="quotelev1">&gt; rml_oob_send.c:269
</span><br>
<span class="quotelev1">&gt; #4  0x00007f6f8c32fe24 in orte_daemon (argc=28, argv=0x7fff9457abd8)
</span><br>
<span class="quotelev1">&gt; at orted/orted_main.c:610
</span><br>
<span class="quotelev1">&gt; #5  0x0000000000400917 in main (argc=28, argv=0x7fff9457abd8) at orted.c:62
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11724.php">Arunkumar C R: "[OMPI users] MPI debugger"</a>
<li><strong>Previous message:</strong> <a href="11722.php">Dong Li: "[OMPI users] problem with progress thread and orte"</a>
<li><strong>In reply to:</strong> <a href="11722.php">Dong Li: "[OMPI users] problem with progress thread and orte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11737.php">Sangamesh B: "Re: [OMPI users] problem with progress thread and orte"</a>
<li><strong>Reply:</strong> <a href="11737.php">Sangamesh B: "Re: [OMPI users] problem with progress thread and orte"</a>
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
