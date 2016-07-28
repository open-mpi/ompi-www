<?
$subject_val = "Re: [OMPI users] Specifying slots in rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 07:10:40 2010" -->
<!-- isoreceived="20100609111040" -->
<!-- sent="Wed, 9 Jun 2010 12:39:09 +0200" -->
<!-- isosent="20100609103909" -->
<!-- name="Grzegorz Maj" -->
<!-- email="maju3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Specifying slots in rankfile" -->
<!-- id="AANLkTikq5NDNKRhgHToD6nczqUQMmuo-rYuweFeDYmnD_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTilTa7we5FDxs3yf2WGgqAJ2CjAsv1aWH7Lgumrb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Specifying slots in rankfile<br>
<strong>From:</strong> Grzegorz Maj (<em>maju3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 06:39:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13266.php">asmae.elbahlouli_at_[hidden]: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="13264.php">Grzegorz Maj: "[OMPI users] Specifying slots in rankfile"</a>
<li><strong>In reply to:</strong> <a href="13264.php">Grzegorz Maj: "[OMPI users] Specifying slots in rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13272.php">Ralph Castain: "Re: [OMPI users] Specifying slots in rankfile"</a>
<li><strong>Reply:</strong> <a href="13272.php">Ralph Castain: "Re: [OMPI users] Specifying slots in rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In my previous mail I said that slot=0-3 would be a solution.
<br>
Unfortunately it gives me exactly the same segfault as in case with
<br>
*:*
<br>
<p>2010/6/9 Grzegorz Maj &lt;maju3_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'd like mpirun to run tasks with specific ranks on specific hosts,
</span><br>
<span class="quotelev1">&gt; but I don't want to provide any particular sockets/slots/cores.
</span><br>
<span class="quotelev1">&gt; The following example uses just one host, but generally I'll use more.
</span><br>
<span class="quotelev1">&gt; In my hostfile I just have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; root_at_host01 slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was playing with my rankfile to achieve what I've mentioned, but I
</span><br>
<span class="quotelev1">&gt; always get some problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) With rankfile like:
</span><br>
<span class="quotelev1">&gt; rank 0=host01 slot=*
</span><br>
<span class="quotelev1">&gt; rank 1=host01 slot=*
</span><br>
<span class="quotelev1">&gt; rank 2=host01 slot=*
</span><br>
<span class="quotelev1">&gt; rank 3=host01 slot=*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; We were unable to successfully process/set the requested processor
</span><br>
<span class="quotelev1">&gt; affinity settings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specified slot list: *
</span><br>
<span class="quotelev1">&gt; Error: Error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could mean that a non-existent processor was specified, or
</span><br>
<span class="quotelev1">&gt; that the specification had improper syntax.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to start the specified application as it encountered an error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error name: Error
</span><br>
<span class="quotelev1">&gt; Node: host01
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [host01:13715] Rank 0: PAFFINITY cannot get physical processor id for
</span><br>
<span class="quotelev1">&gt; logical processor 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it tries to find processor #4, bug there are only 0-3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) With rankfile like:
</span><br>
<span class="quotelev1">&gt; rank 0=host01 slot=*:*
</span><br>
<span class="quotelev1">&gt; rank 1=host01 slot=*:*
</span><br>
<span class="quotelev1">&gt; rank 2=host01 slot=*:*
</span><br>
<span class="quotelev1">&gt; rank 3=host01 slot=*:*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything looks well, i.e. my programs are spread across 4 processors.
</span><br>
<span class="quotelev1">&gt; But when running MPI program as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI::Init(argc, argv);
</span><br>
<span class="quotelev1">&gt; fprintf(stderr, &quot;after init %d\n&quot;, MPI::Is_initialized());
</span><br>
<span class="quotelev1">&gt; nprocs_mpi = MPI::COMM_WORLD.Get_size();
</span><br>
<span class="quotelev1">&gt; fprintf(stderr, &quot;won't get here\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; after init 1
</span><br>
<span class="quotelev1">&gt; [host01:14348] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [host01:14348] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [host01:14348] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [host01:14348] Failing at address: 0x8
</span><br>
<span class="quotelev1">&gt; [host01:14348] [ 0] [0xffffe410]
</span><br>
<span class="quotelev1">&gt; [host01:14348] [ 1] p(_ZNK3MPI4Comm8Get_sizeEv+0x19) [0x8051299]
</span><br>
<span class="quotelev1">&gt; [host01:14348] [ 2] p(main+0x86) [0x804ee4e]
</span><br>
<span class="quotelev1">&gt; [host01:14348] [ 3] /lib/libc.so.6(__libc_start_main+0xe5) [0x4180b5c5]
</span><br>
<span class="quotelev1">&gt; [host01:14348] [ 4] p(__gxx_personality_v0+0x125) [0x804ecc1]
</span><br>
<span class="quotelev1">&gt; [host01:14348] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using OPEN MPI v. 1.4.2 (downloaded yesterday).
</span><br>
<span class="quotelev1">&gt; In my rankfile I really want to write something like slot=*. I know
</span><br>
<span class="quotelev1">&gt; slot=0-3 would be a solution, but when generating rankfile I may not
</span><br>
<span class="quotelev1">&gt; be sure how many processors are there available on a particular host.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Grzegorz Maj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13266.php">asmae.elbahlouli_at_[hidden]: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="13264.php">Grzegorz Maj: "[OMPI users] Specifying slots in rankfile"</a>
<li><strong>In reply to:</strong> <a href="13264.php">Grzegorz Maj: "[OMPI users] Specifying slots in rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13272.php">Ralph Castain: "Re: [OMPI users] Specifying slots in rankfile"</a>
<li><strong>Reply:</strong> <a href="13272.php">Ralph Castain: "Re: [OMPI users] Specifying slots in rankfile"</a>
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
