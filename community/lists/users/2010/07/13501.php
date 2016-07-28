<?
$subject_val = "Re: [OMPI users] Dynamic algorithms problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 11:00:57 2010" -->
<!-- isoreceived="20100707150057" -->
<!-- sent="Wed, 7 Jul 2010 17:00:51 +0200" -->
<!-- isosent="20100707150051" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic algorithms problem" -->
<!-- id="AANLkTinPDxlelxLdPTTRB-N6zk96sJkMjGgsjP2IsHxV_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F51B2AF-A78A-4FD9-9628-9462CD5F0575_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Dynamic algorithms problem<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 11:00:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13502.php">Jack Bryan: "[OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>Previous message:</strong> <a href="13500.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>In reply to:</strong> <a href="13498.php">Jeff Squyres: "Re: [OMPI users] Dynamic algorithms problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>the patch is working fine, with preliminary test with SKaMPI.
<br>
<p>Thanks very much!
<br>
<p>2010/7/7 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; I do believe that this is a bug.  I *think* that the included patch will
</span><br>
<span class="quotelev1">&gt; fix it for you, but George is on vacation until tomorrow (and I don't know
</span><br>
<span class="quotelev1">&gt; how long it'll take him to slog through his backlog :-( ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try the following patch and see if it fixes it for you?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/coll/tuned/coll_tuned_module.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/coll/tuned/coll_tuned_module.c     (revision 23360)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/coll/tuned/coll_tuned_module.c     (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -165,6 +165,7 @@
</span><br>
<span class="quotelev1">&gt;     {                                                                   \
</span><br>
<span class="quotelev1">&gt;         int need_dynamic_decision = 0;                                  \
</span><br>
<span class="quotelev1">&gt;         ompi_coll_tuned_forced_getvalues( (TYPE),
</span><br>
<span class="quotelev1">&gt; &amp;((DATA)-&gt;user_forced[(TYPE)]) ); \
</span><br>
<span class="quotelev1">&gt; +        (DATA)-&gt;com_rules[(TYPE)] = NULL;                               \
</span><br>
<span class="quotelev1">&gt;         if( 0 != (DATA)-&gt;user_forced[(TYPE)].algorithm ) {              \
</span><br>
<span class="quotelev1">&gt;             need_dynamic_decision = 1;                                  \
</span><br>
<span class="quotelev1">&gt;             EXECUTE;                                                    \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 4, 2010, at 8:12 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear OpenMPI user,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i'm trying to use collective dynamic rules with OpenMPi 1.4.2:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export OMPI_MCA_coll_tuned_use_dynamic_rules=1
</span><br>
<span class="quotelev2">&gt; &gt; export OMPI_MCA_coll_tuned_bcast_algorithm=1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My target is to test Bcast peformances using SKaMPI benchmark changing
</span><br>
<span class="quotelev1">&gt; dynamic rules. But at runtime i get the follow error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05871] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05871] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05871] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05871] Failing at address: 0xcc
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05872] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05872] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05872] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05872] Failing at address: 0xcc
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05871] [ 0] /lib64/libpthread.so.0 [0x3be160e4c0]
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05871] [ 1]
</span><br>
<span class="quotelev1">&gt; /gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; [0x2accf7210145]
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05871] [ 2]
</span><br>
<span class="quotelev1">&gt; /gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; [0x2accf720ef16]
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05871] [ 3]
</span><br>
<span class="quotelev1">&gt; /gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; [0x2accf721fec9]
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05871] [ 4]
</span><br>
<span class="quotelev1">&gt; /gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0(MPI_Bcast+0x171)
</span><br>
<span class="quotelev1">&gt; [0x2accf71b81e1]
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05871] [ 5] ./skampi [0x409566]
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05871] [ 6] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x3be0e1d974]
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05871] [ 7] ./skampi [0x404e19]
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05871] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05872] [ 0] /lib64/libpthread.so.0 [0x3be160e4c0]
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05872] [ 1]
</span><br>
<span class="quotelev1">&gt; /gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; [0x2b1959eb3145]
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05872] [ 2]
</span><br>
<span class="quotelev1">&gt; /gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; [0x2b1959eb1f16]
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05872] [ 3]
</span><br>
<span class="quotelev1">&gt; /gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; [0x2b1959ec2ec9]
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05872] [ 4]
</span><br>
<span class="quotelev1">&gt; /gpfs/scratch/userinternal/cin0243a/openmpi-1.4.2/openmpi-1.4.2-install/lib/libmpi.so.0(MPI_Bcast+0x171)
</span><br>
<span class="quotelev1">&gt; [0x2b1959e5b1e1]
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05872] [ 5] ./skampi [0x409566]
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05872] [ 6] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x3be0e1d974]
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05872] [ 7] ./skampi [0x404e19]
</span><br>
<span class="quotelev2">&gt; &gt; [node003:05872] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that process rank 9 with PID 5872 on node node003ib0
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The same using other Bcast algorithm. Disabling dynamic rules, it works
</span><br>
<span class="quotelev1">&gt; well. Maybe i'm using some wrong parameter setup?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Parallel programmer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Supercomputing Group
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; g.fatigati [AT] cineca.it
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13501/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13502.php">Jack Bryan: "[OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>Previous message:</strong> <a href="13500.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>In reply to:</strong> <a href="13498.php">Jeff Squyres: "Re: [OMPI users] Dynamic algorithms problem"</a>
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
