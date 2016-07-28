<?
$subject_val = "[OMPI users] Specifying slots in rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 05:45:14 2010" -->
<!-- isoreceived="20100609094514" -->
<!-- sent="Wed, 9 Jun 2010 11:45:08 +0200" -->
<!-- isosent="20100609094508" -->
<!-- name="Grzegorz Maj" -->
<!-- email="maju3_at_[hidden]" -->
<!-- subject="[OMPI users] Specifying slots in rankfile" -->
<!-- id="AANLkTilTa7we5FDxs3yf2WGgqAJ2CjAsv1aWH7Lgumrb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Specifying slots in rankfile<br>
<strong>From:</strong> Grzegorz Maj (<em>maju3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 05:45:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13265.php">Grzegorz Maj: "Re: [OMPI users] Specifying slots in rankfile"</a>
<li><strong>Previous message:</strong> <a href="13263.php">Gus Correa: "[OMPI users] Collective component priorities and sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13265.php">Grzegorz Maj: "Re: [OMPI users] Specifying slots in rankfile"</a>
<li><strong>Reply:</strong> <a href="13265.php">Grzegorz Maj: "Re: [OMPI users] Specifying slots in rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'd like mpirun to run tasks with specific ranks on specific hosts,
<br>
but I don't want to provide any particular sockets/slots/cores.
<br>
The following example uses just one host, but generally I'll use more.
<br>
In my hostfile I just have:
<br>
<p>root_at_host01 slots=4
<br>
<p>I was playing with my rankfile to achieve what I've mentioned, but I
<br>
always get some problems.
<br>
<p>1) With rankfile like:
<br>
rank 0=host01 slot=*
<br>
rank 1=host01 slot=*
<br>
rank 2=host01 slot=*
<br>
rank 3=host01 slot=*
<br>
<p>I get:
<br>
<p>--------------------------------------------------------------------------
<br>
We were unable to successfully process/set the requested processor
<br>
affinity settings:
<br>
<p>Specified slot list: *
<br>
Error: Error
<br>
<p>This could mean that a non-existent processor was specified, or
<br>
that the specification had improper syntax.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to start the specified application as it encountered an error:
<br>
<p>Error name: Error
<br>
Node: host01
<br>
<p>when attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
[host01:13715] Rank 0: PAFFINITY cannot get physical processor id for
<br>
logical processor 4
<br>
<p><p>I think it tries to find processor #4, bug there are only 0-3
<br>
<p>2) With rankfile like:
<br>
rank 0=host01 slot=*:*
<br>
rank 1=host01 slot=*:*
<br>
rank 2=host01 slot=*:*
<br>
rank 3=host01 slot=*:*
<br>
<p>Everything looks well, i.e. my programs are spread across 4 processors.
<br>
But when running MPI program as follows:
<br>
<p>MPI::Init(argc, argv);
<br>
fprintf(stderr, &quot;after init %d\n&quot;, MPI::Is_initialized());
<br>
nprocs_mpi = MPI::COMM_WORLD.Get_size();
<br>
fprintf(stderr, &quot;won't get here\n&quot;);
<br>
<p>I get:
<br>
<p>after init 1
<br>
[host01:14348] *** Process received signal ***
<br>
[host01:14348] Signal: Segmentation fault (11)
<br>
[host01:14348] Signal code: Address not mapped (1)
<br>
[host01:14348] Failing at address: 0x8
<br>
[host01:14348] [ 0] [0xffffe410]
<br>
[host01:14348] [ 1] p(_ZNK3MPI4Comm8Get_sizeEv+0x19) [0x8051299]
<br>
[host01:14348] [ 2] p(main+0x86) [0x804ee4e]
<br>
[host01:14348] [ 3] /lib/libc.so.6(__libc_start_main+0xe5) [0x4180b5c5]
<br>
[host01:14348] [ 4] p(__gxx_personality_v0+0x125) [0x804ecc1]
<br>
[host01:14348] *** End of error message ***
<br>
<p>I'm using OPEN MPI v. 1.4.2 (downloaded yesterday).
<br>
In my rankfile I really want to write something like slot=*. I know
<br>
slot=0-3 would be a solution, but when generating rankfile I may not
<br>
be sure how many processors are there available on a particular host.
<br>
<p>Any help would be appreciated.
<br>
<p>Regards,
<br>
Grzegorz Maj
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13265.php">Grzegorz Maj: "Re: [OMPI users] Specifying slots in rankfile"</a>
<li><strong>Previous message:</strong> <a href="13263.php">Gus Correa: "[OMPI users] Collective component priorities and sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13265.php">Grzegorz Maj: "Re: [OMPI users] Specifying slots in rankfile"</a>
<li><strong>Reply:</strong> <a href="13265.php">Grzegorz Maj: "Re: [OMPI users] Specifying slots in rankfile"</a>
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
