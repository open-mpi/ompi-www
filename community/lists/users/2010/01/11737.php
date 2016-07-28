<?
$subject_val = "Re: [OMPI users] problem with progress thread and orte";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 00:31:31 2010" -->
<!-- isoreceived="20100112053131" -->
<!-- sent="Tue, 12 Jan 2010 11:01:26 +0530" -->
<!-- isosent="20100112053126" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with progress thread and orte" -->
<!-- id="cb60cbc41001112131m42270803hdb08f7bb308352d2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="30AB3650-03C1-4CE9-A43B-F65B5B870F3E_at_open-mpi.org" -->
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
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-12 00:31:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11738.php">florian beutler: "[OMPI users] MPI problem after update"</a>
<li><strong>Previous message:</strong> <a href="11736.php">Rainer Keller: "Re: [OMPI users] OpenMPI w valgrind: need to recompile?"</a>
<li><strong>In reply to:</strong> <a href="11723.php">Ralph Castain: "Re: [OMPI users] problem with progress thread and orte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11744.php">Ralph Castain: "Re: [OMPI users] problem with progress thread and orte"</a>
<li><strong>Reply:</strong> <a href="11744.php">Ralph Castain: "Re: [OMPI users] problem with progress thread and orte"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;What are the advantages with progress-threads feature?
<br>
<p>Thanks,
<br>
Sangamesh
<br>
<p>On Fri, Jan 8, 2010 at 10:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yeah, the system doesn't currently support enable-progress-threads. It is a
</span><br>
<span class="quotelev1">&gt; two-fold problem: ORTE won't work that way, and some parts of the MPI layer
</span><br>
<span class="quotelev1">&gt; won't either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am currently working on fixing ORTE so it will work with progress threads
</span><br>
<span class="quotelev1">&gt; enabled. I believe (but can't confirm) that the TCP BTL will also work with
</span><br>
<span class="quotelev1">&gt; that feature, but I have heard that the other BTL's won't (again, can't
</span><br>
<span class="quotelev1">&gt; confirm).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll send out a note when ORTE is okay, but that won't be included in a
</span><br>
<span class="quotelev1">&gt; release for awhile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 8, 2010, at 9:38 AM, Dong Li wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi, guys.
</span><br>
<span class="quotelev2">&gt; &gt; My application got stuck when I run an application with Open MPI 1.4
</span><br>
<span class="quotelev2">&gt; &gt; with progress thead enabled.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The OpenMPI is configured and compiled with the following options.
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --with-openib=/usr --enable-trace --enable-debug
</span><br>
<span class="quotelev2">&gt; &gt; --enable-peruse --enable-progress-threads
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Then I started the application with two MPI processes, but it looks
</span><br>
<span class="quotelev2">&gt; &gt; like there is some problem with orte and the mpiexec just stuck there
</span><br>
<span class="quotelev2">&gt; &gt; and never run the application.
</span><br>
<span class="quotelev2">&gt; &gt; I used gdb to attach to the mpiexec to find out where the program got
</span><br>
<span class="quotelev2">&gt; &gt; stuck. The backtrace information is shown in the following for the two
</span><br>
<span class="quotelev2">&gt; &gt; MPI progresses (i.e. the rank 0 and the rank 1). It looks to me that
</span><br>
<span class="quotelev2">&gt; &gt; the problem happened in the rank 0 when it tries to do some atomic add
</span><br>
<span class="quotelev2">&gt; &gt; operation. Note that my processor is Intel Xeon CPU E5462, but the
</span><br>
<span class="quotelev2">&gt; &gt; open mpi tried to use some AMD64 instructions to conduct atomic add
</span><br>
<span class="quotelev2">&gt; &gt; operations. Is this a bug or something?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any comment? Thank you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Dong
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ***********************************************************************************************************************************************
</span><br>
<span class="quotelev2">&gt; &gt; The following is for the rank 0.
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00007fbdd1c93264 in opal_atomic_cmpset_32 (addr=0x7fbdd1eede24,
</span><br>
<span class="quotelev2">&gt; &gt; oldval=1, newval=0) at ../opal/include/opal/sys/amd64/atomic.h:94
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00007fbdd1c93348 in opal_atomic_add_xx (addr=0x7fbdd1eede24,
</span><br>
<span class="quotelev2">&gt; &gt; value=1, length=4) at ../opal/include/opal/sys/atomic_impl.h:243
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00007fbdd1c932ad in opal_progress () at runtime/opal_progress.c:171
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00007fbdd1f5c9ad in orte_plm_base_daemon_callback
</span><br>
<span class="quotelev2">&gt; &gt; (num_daemons=1) at base/plm_base_launch_support.c:459
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x00007fbdd0a5579d in orte_plm_rsh_launch (jdata=0x60f070) at
</span><br>
<span class="quotelev2">&gt; &gt; plm_rsh_module.c:1221
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x0000000000403821 in orterun (argc=15, argv=0x7fffda18a498) at
</span><br>
<span class="quotelev2">&gt; &gt; orterun.c:748
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x0000000000402dc7 in main (argc=15, argv=0x7fffda18a498) at
</span><br>
<span class="quotelev1">&gt; main.c:13
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ************************************************************************************************************************************************
</span><br>
<span class="quotelev2">&gt; &gt; The following is for the rank 1.
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x0000003c4c20b309 in pthread_cond_wait@@GLIBC_2.3.2 () from
</span><br>
<span class="quotelev2">&gt; &gt; /lib64/libpthread.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00007f6f8b04ba56 in opal_condition_wait (c=0x656ce0, m=0x656c88)
</span><br>
<span class="quotelev2">&gt; &gt; at ../../../../opal/threads/condition.h:78
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00007f6f8b04b8b7 in orte_rml_oob_send (peer=0x7f6f8c578978,
</span><br>
<span class="quotelev2">&gt; &gt; iov=0x7fff945798d0, count=1, tag=10, flags=16) at rml_oob_send.c:153
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00007f6f8b04c197 in orte_rml_oob_send_buffer
</span><br>
<span class="quotelev2">&gt; &gt; (peer=0x7f6f8c578978, buffer=0x6563b0, tag=10, flags=0) at
</span><br>
<span class="quotelev2">&gt; &gt; rml_oob_send.c:269
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x00007f6f8c32fe24 in orte_daemon (argc=28, argv=0x7fff9457abd8)
</span><br>
<span class="quotelev2">&gt; &gt; at orted/orted_main.c:610
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x0000000000400917 in main (argc=28, argv=0x7fff9457abd8) at
</span><br>
<span class="quotelev1">&gt; orted.c:62
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11737/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11738.php">florian beutler: "[OMPI users] MPI problem after update"</a>
<li><strong>Previous message:</strong> <a href="11736.php">Rainer Keller: "Re: [OMPI users] OpenMPI w valgrind: need to recompile?"</a>
<li><strong>In reply to:</strong> <a href="11723.php">Ralph Castain: "Re: [OMPI users] problem with progress thread and orte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11744.php">Ralph Castain: "Re: [OMPI users] problem with progress thread and orte"</a>
<li><strong>Reply:</strong> <a href="11744.php">Ralph Castain: "Re: [OMPI users] problem with progress thread and orte"</a>
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
