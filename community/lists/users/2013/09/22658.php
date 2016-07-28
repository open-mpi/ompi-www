<?
$subject_val = "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 15 13:02:13 2013" -->
<!-- isoreceived="20130915170213" -->
<!-- sent="Sun, 15 Sep 2013 10:02:08 -0700" -->
<!-- isosent="20130915170208" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2" -->
<!-- id="351E8D1A-FA5B-43F1-A13D-7C404069E2AA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHCaCkKY5faaVuTE-oUMWfSEU4fHS=TyiCHmOpJ-0pPkC3zhJw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-15 13:02:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22659.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22657.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>In reply to:</strong> <a href="22646.php">Matthieu Brucher: "[OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22659.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22659.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not entirely sure - I don't see anything that would cause that problem in that location. How did you configure this?
<br>
<p><p>On Sep 12, 2013, at 3:17 AM, Matthieu Brucher &lt;matthieu.brucher_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compiled OpenMPI on a RHEL6 box with LSF support, but when I run
</span><br>
<span class="quotelev1">&gt; sonthing, it crashes. Also orte-info crashes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 Package: Open MPI mbrucher_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.7.2
</span><br>
<span class="quotelev1">&gt;  Open RTE repo revision: r28673
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: Jun 26, 2013
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.7.2
</span><br>
<span class="quotelev1">&gt;      OPAL repo revision: r28673
</span><br>
<span class="quotelev1">&gt;       OPAL release date: Jun 26, 2013
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.7.2
</span><br>
<span class="quotelev1">&gt;                  Prefix: /xxx/mbrucher/openmpi
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;          Configure host: xxx.xxx.com
</span><br>
<span class="quotelev1">&gt;           Configured by: mbrucher
</span><br>
<span class="quotelev1">&gt;           Configured on: Thu Sep 12 10:22:06 BST 2013
</span><br>
<span class="quotelev1">&gt;          Configure host: xxx.xxx.com
</span><br>
<span class="quotelev1">&gt;                Built by: mbrucher
</span><br>
<span class="quotelev1">&gt;                Built on: Thu Sep 12 10:24:59 BST 2013
</span><br>
<span class="quotelev1">&gt;              Built host: xxx.xxx.com
</span><br>
<span class="quotelev1">&gt;              C compiler: gcc
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;  C compiler family name: GNU
</span><br>
<span class="quotelev1">&gt;      C compiler version: 4.4.6
</span><br>
<span class="quotelev1">&gt;  Internal debug support: no
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;         libltdl support: yes
</span><br>
<span class="quotelev1">&gt;   Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt; orterun default --prefix: no
</span><br>
<span class="quotelev1">&gt;       MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;     Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;   FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt; [abgengcluster:45509] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [abgengcluster:45509] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [abgengcluster:45509] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [abgengcluster:45509] Failing at address: 0xf8
</span><br>
<span class="quotelev1">&gt; [abgengcluster:45509] [ 0] /lib64/libpthread.so.0() [0x3ffc00f4a0]
</span><br>
<span class="quotelev1">&gt; [abgengcluster:45509] [ 1]
</span><br>
<span class="quotelev1">&gt; /xxx/mbrucher/openmpi/lib/libopen-pal.so.5(opal_libevent2019_event_priority_set+0x6f)
</span><br>
<span class="quotelev1">&gt; [0x2aae84a736ef]
</span><br>
<span class="quotelev1">&gt; [abgengcluster:45509] [ 2]
</span><br>
<span class="quotelev1">&gt; /xxx/mbrucher/openmpi/lib/libopen-rte.so.5(orte_iof_base_open+0x31c)
</span><br>
<span class="quotelev1">&gt; [0x2aae847edfbc]
</span><br>
<span class="quotelev1">&gt; [abgengcluster:45509] [ 3] orte-info(orte_info_open_components+0x71f) [0x406b8f]
</span><br>
<span class="quotelev1">&gt; [abgengcluster:45509] [ 4] orte-info(main+0x93d) [0x40450d]
</span><br>
<span class="quotelev1">&gt; [abgengcluster:45509] [ 5] /lib64/libc.so.6(__libc_start_main+0xfd)
</span><br>
<span class="quotelev1">&gt; [0x3ffb81ecdd]
</span><br>
<span class="quotelev1">&gt; [abgengcluster:45509] [ 6] orte-info() [0x403b09]
</span><br>
<span class="quotelev1">&gt; [abgengcluster:45509] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there something that I missed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matthieu
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev1">&gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev1">&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev1">&gt; Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
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
<li><strong>Next message:</strong> <a href="22659.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22657.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>In reply to:</strong> <a href="22646.php">Matthieu Brucher: "[OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22659.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22659.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
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
