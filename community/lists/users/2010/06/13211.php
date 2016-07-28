<?
$subject_val = "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 12:23:41 2010" -->
<!-- isoreceived="20100602162341" -->
<!-- sent="Wed, 2 Jun 2010 18:23:25 +0200" -->
<!-- isosent="20100602162325" -->
<!-- name="Yves Caniou" -->
<!-- email="yves.caniou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?" -->
<!-- id="201006021823.25923.yves.caniou_at_ens-lyon.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F7D13864-99A9-426D-9C8B-93669D3F98B9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?<br>
<strong>From:</strong> Yves Caniou (<em>yves.caniou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 12:23:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13212.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13210.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Maybe in reply to:</strong> <a href="13198.php">Yves Caniou: "[OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le Wednesday 02 June 2010 15:55:37, vous avez &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; On Jun 2, 2010, at 9:50 AM, Yves Caniou wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I copy the output of my last mail at the end of this one, to avoid
</span><br>
<span class="quotelev2">&gt; &gt; searching. Here is the line that I used to configure OMPI:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $&gt;./configure --prefix=/home/p10015/openmpi --with-threads=posix
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mpi-threads --enable-progress-threads
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mpirun-prefix-by-default --enable-sparse-groups
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My bad -- I missed that.
</span><br>
<p>In fact, it's my fault.. It's the first time I gave this line, and forgot to 
<br>
copy/paste the output (added in this mail).
<br>
<p><span class="quotelev1">&gt; --enable-progress-threads is likely the culprit here.  That option is VERY
</span><br>
<span class="quotelev1">&gt; poorly tested and likely does not work.  Can you try without that?
</span><br>
<p>Now, it seems to work pretty well, both versions (MPI_Finalize() and 
<br>
MPI_Abort())! Many thanks!
<br>
<p>.Yves.
<br>
<p><span class="quotelev1">&gt; ###########################################
</span><br>
<span class="quotelev1">&gt; $&gt;mpiexec -mca btl sm -n 4 magic-square -b 1 -a 5000 -r 200 -C 1000 -z 20
</span><br>
<span class="quotelev1">&gt; 100
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Process 1 ([[34810,1],3]) is on host: ha8000-1
</span><br>
<span class="quotelev1">&gt;  Process 2 ([[34810,1],3]) is on host: ha8000-1
</span><br>
<span class="quotelev1">&gt;  BTLs attempted: sm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [ha8000-1:461] Abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev1">&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [ha8000-1:464] Abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev1">&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [ha8000-1:462] Abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev1">&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [ha8000-1:463] Abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev1">&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec has exited due to process rank 0 with PID 461 on
</span><br>
<span class="quotelev1">&gt; node ha8000-1 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpiexec (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Killed
</span><br>
<span class="quotelev1">&gt; ################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Yves Caniou
Associate Professor at Universit&#233; Lyon 1,
Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
D&#233;l&#233;gation CNRS in Japan French Laboratory of Informatics (JFLI),
  * in Information Technology Center, The University of Tokyo,
    2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
    tel: +81-3-5841-0540
  * in National Institute of Informatics
    2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
    tel: +81-3-4212-2412 
<a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13212.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13210.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Maybe in reply to:</strong> <a href="13198.php">Yves Caniou: "[OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
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
