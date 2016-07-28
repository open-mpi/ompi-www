<?
$subject_val = "Re: [OMPI users] Shared Memory Performance Problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 30 11:18:26 2011" -->
<!-- isoreceived="20110330151826" -->
<!-- sent="Wed, 30 Mar 2011 17:18:21 +0200" -->
<!-- isosent="20110330151821" -->
<!-- name="Michele Marena" -->
<!-- email="michelemarena_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory Performance Problem." -->
<!-- id="AANLkTi=zwUGPPEEZ8n1=8iLqmUg=pdE8ex+67miv89xF_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D1B792B3-DA4F-4186-BEB1-99E171303C55_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared Memory Performance Problem.<br>
<strong>From:</strong> Michele Marena (<em>michelemarena_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-30 11:18:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16057.php">Eugene Loh: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Previous message:</strong> <a href="16055.php">Hellm&#252;ller  Roman: "[OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine."</a>
<li><strong>In reply to:</strong> <a href="16053.php">Jeff Squyres: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16057.php">Eugene Loh: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Reply:</strong> <a href="16057.php">Eugene Loh: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
I thank you for your help,
<br>
I've launched my app with mpiP both when two processes are on different node
<br>
and when two processes are on the same node.
<br>
<p>The process 0 is the manager (gathers the results only), processes 1 and 2
<br>
are  workers (compute).
<br>
<p>This is the case processes 1 and 2 are on different nodes (runs in 162s).
<br>
<p>---------------------------------------------------------------------------
<br>
@--- MPI Time (seconds) ---------------------------------------------------
<br>
---------------------------------------------------------------------------
<br>
Task    AppTime    MPITime     MPI%
<br>
&nbsp;&nbsp;&nbsp;0        162        162    99.99
<br>
&nbsp;&nbsp;&nbsp;1        162       30.2    18.66
<br>
&nbsp;&nbsp;&nbsp;2        162       14.7     9.04
<br>
&nbsp;&nbsp;&nbsp;*        486        207    42.56
<br>
---------------------------------------------------------------------------
<br>
@--- Aggregate Time (top twenty, descending, milliseconds) ----------------
<br>
---------------------------------------------------------------------------
<br>
Call                 Site       Time    App%    MPI%     COV
<br>
Barrier                 5   1.28e+05   26.24   61.64    0.00
<br>
Barrier                14    2.3e+04    4.74   11.13    0.00
<br>
Barrier                 6   2.29e+04    4.72   11.08    0.00
<br>
Barrier                17   1.77e+04    3.65    8.58    1.41
<br>
Recv                    3   1.15e+04    2.37    5.58    0.00
<br>
Recv                   30   2.26e+03    0.47    1.09    0.00
<br>
Recv                   12        308    0.06    0.15    0.00
<br>
Recv                   26        286    0.06    0.14    0.00
<br>
Recv                   28        252    0.05    0.12    0.00
<br>
Recv                   31        246    0.05    0.12    0.00
<br>
Isend                  35        111    0.02    0.05    0.00
<br>
Isend                  34        108    0.02    0.05    0.00
<br>
Isend                  18        107    0.02    0.05    0.00
<br>
Isend                  19        105    0.02    0.05    0.00
<br>
Isend                   9       57.7    0.01    0.03    0.05
<br>
Isend                  32       39.7    0.01    0.02    0.00
<br>
Barrier                25       38.7    0.01    0.02    1.39
<br>
Isend                  11       38.6    0.01    0.02    0.00
<br>
Recv                   16       34.1    0.01    0.02    0.00
<br>
Recv                   27       26.5    0.01    0.01    0.00
<br>
---------------------------------------------------------------------------
<br>
@--- Aggregate Sent Message Size (top twenty, descending, bytes) ----------
<br>
---------------------------------------------------------------------------
<br>
Call                 Site      Count      Total       Avrg  Sent%
<br>
Isend                   9       4096   1.34e+08   3.28e+04  58.73
<br>
Isend                  34       1200   1.85e+07   1.54e+04   8.07
<br>
Isend                  35       1200   1.85e+07   1.54e+04   8.07
<br>
Isend                  18       1200   1.85e+07   1.54e+04   8.07
<br>
Isend                  19       1200   1.85e+07   1.54e+04   8.07
<br>
Isend                  32        240   3.69e+06   1.54e+04   1.61
<br>
Isend                  11        240   3.69e+06   1.54e+04   1.61
<br>
Isend                  15        180   3.44e+06   1.91e+04   1.51
<br>
Isend                  33         61      2e+06   3.28e+04   0.87
<br>
Isend                  10         61      2e+06   3.28e+04   0.87
<br>
Isend                  29         61      2e+06   3.28e+04   0.87
<br>
Isend                  22         61      2e+06   3.28e+04   0.87
<br>
Isend                  37        180   1.72e+06   9.57e+03   0.75
<br>
Isend                  24          2         16          8   0.00
<br>
Isend                  20          2         16          8   0.00
<br>
Send                    8          1          4          4   0.00
<br>
Send                    1          1          4          4   0.00
<br>
<p>The case when processes 1 and 2 are on the same node (runs in 260s).
<br>
---------------------------------------------------------------------------
<br>
@--- MPI Time (seconds) ---------------------------------------------------
<br>
---------------------------------------------------------------------------
<br>
Task    AppTime    MPITime     MPI%
<br>
&nbsp;&nbsp;&nbsp;0        260        260    99.99
<br>
&nbsp;&nbsp;&nbsp;1        260       39.7    15.29
<br>
&nbsp;&nbsp;&nbsp;2        260       26.4    10.17
<br>
&nbsp;&nbsp;&nbsp;*        779        326    41.82
<br>
<p>---------------------------------------------------------------------------
<br>
@--- Aggregate Time (top twenty, descending, milliseconds) ----------------
<br>
---------------------------------------------------------------------------
<br>
Call                 Site       Time    App%    MPI%     COV
<br>
Barrier                 5   2.23e+05   28.64   68.50    0.00
<br>
Barrier                 6   2.49e+04    3.20    7.66    0.00
<br>
Barrier                14   2.31e+04    2.96    7.09    0.00
<br>
Recv                   28   1.35e+04    1.73    4.14    0.00
<br>
Recv                   16   1.32e+04    1.70    4.06    0.00
<br>
Barrier                17   1.22e+04    1.56    3.74    1.41
<br>
Recv                    3   1.16e+04    1.48    3.55    0.00
<br>
Recv                   26   1.67e+03    0.21    0.51    0.00
<br>
Recv                   30        940    0.12    0.29    0.00
<br>
Recv                   12        674    0.09    0.21    0.00
<br>
Recv                   21        288    0.04    0.09    0.00
<br>
Recv                   31        259    0.03    0.08    0.00
<br>
Isend                   9       62.1    0.01    0.02    0.04
<br>
Recv                   27       39.5    0.01    0.01    0.00
<br>
Isend                  35       31.2    0.00    0.01    0.00
<br>
Isend                  19         31    0.00    0.01    0.00
<br>
Isend                  34         30    0.00    0.01    0.00
<br>
Isend                  18       29.4    0.00    0.01    0.00
<br>
Isend                  32       14.6    0.00    0.00    0.00
<br>
Isend                  11       14.4    0.00    0.00    0.00
<br>
---------------------------------------------------------------------------
<br>
@--- Aggregate Sent Message Size (top twenty, descending, bytes) ----------
<br>
---------------------------------------------------------------------------
<br>
Call                 Site      Count      Total       Avrg  Sent%
<br>
Isend                   9       4096   1.34e+08   3.28e+04  58.73
<br>
Isend                  34       1200   1.85e+07   1.54e+04   8.07
<br>
Isend                  35       1200   1.85e+07   1.54e+04   8.07
<br>
Isend                  18       1200   1.85e+07   1.54e+04   8.07
<br>
Isend                  19       1200   1.85e+07   1.54e+04   8.07
<br>
Isend                  32        240   3.69e+06   1.54e+04   1.61
<br>
Isend                  11        240   3.69e+06   1.54e+04   1.61
<br>
Isend                  15        180   3.44e+06   1.91e+04   1.51
<br>
Isend                  33         61      2e+06   3.28e+04   0.87
<br>
Isend                  10         61      2e+06   3.28e+04   0.87
<br>
Isend                  29         61      2e+06   3.28e+04   0.87
<br>
Isend                  22         61      2e+06   3.28e+04   0.87
<br>
Isend                  37        180   1.72e+06   9.57e+03   0.75
<br>
Isend                  24          2         16          8   0.00
<br>
Isend                  20          2         16          8   0.00
<br>
Send                    8          1          4          4   0.00
<br>
Send                    1          1          4          4   0.00
<br>
<p>I think there's a contention problem on the memory bus. If the Shared Memory
<br>
works correctly.
<br>
However, the message size is 4096 * sizeof(double). Maybe I are wrong in
<br>
this point. Is the message size too huge for shared memory?
<br>
<p>2011/3/30 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; How many messages are you sending, and how large are they?  I.e., if your
</span><br>
<span class="quotelev1">&gt; message passing is tiny, then the network transport may not be the
</span><br>
<span class="quotelev1">&gt; bottleneck here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 28, 2011, at 9:41 AM, Michele Marena wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I run ompi_info --param btl sm and this is the output
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_base_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           If btl_base_debug is 1 standard debug is
</span><br>
<span class="quotelev1">&gt; output, if &gt; 1 verbose debug is output
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Default selection set of components for the btl
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           Verbosity level for the btl framework (0 = no
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;65535&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_latency&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;100&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_max_procs&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;2&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_mpool&quot; (current value: &quot;sm&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;4096&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_max_frag_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;32768&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_size_of_cb_queue&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;128&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_cb_lazy_free_freq&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;120&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_sm_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: parameter &quot;btl_base_warn_component_unused&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                           This parameter is used to turn on warning
</span><br>
<span class="quotelev1">&gt; messages when certain NICs are not used
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2011/3/28 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The fact that this exactly matches the time you measured with shared
</span><br>
<span class="quotelev1">&gt; memory is suspicious. My guess is that you aren't actually using shared
</span><br>
<span class="quotelev1">&gt; memory at all.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does your &quot;ompi_info&quot; output show shared memory as being available? Jeff
</span><br>
<span class="quotelev1">&gt; or others may be able to give you some params that would let you check to
</span><br>
<span class="quotelev1">&gt; see if sm is actually being used between those procs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 28, 2011, at 7:51 AM, Michele Marena wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What happens with 2 processes on the same node with tcp?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; With --mca btl self,tcp my app runs in 23s.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2011/3/28 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ah, I didn't catch before that there were more variables than just tcp
</span><br>
<span class="quotelev1">&gt; vs. shmem.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What happens with 2 processes on the same node with tcp?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Eg, when both procs are on the same node, are you thrashing caches or
</span><br>
<span class="quotelev1">&gt; memory?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mar 28, 2011, at 6:27 AM, &quot;Michele Marena&quot; &lt;michelemarena_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; However, I thank you Tim, Ralh and Jeff.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; My sequential application runs in 24s (wall clock time).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; My parallel application runs in 13s with two processes on different
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; With shared memory, when two processes are on the same node, my app
</span><br>
<span class="quotelev1">&gt; runs in 23s.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm not understand why.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2011/3/28 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If your program runs faster across 3 processes, 2 of which are local to
</span><br>
<span class="quotelev1">&gt; each other, with --mca btl tcp,self compared to --mca btl tcp,sm,self, then
</span><br>
<span class="quotelev1">&gt; something is very, very strange.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tim cites all kinds of things that can cause slowdowns, but it's still
</span><br>
<span class="quotelev1">&gt; very, very odd that simply enabling using the shared memory communications
</span><br>
<span class="quotelev1">&gt; channel in Open MPI *slows your overall application down*.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; How much does your application slow down in wall clock time?  Seconds?
</span><br>
<span class="quotelev1">&gt;  Minutes?  Hours?  (anything less than 1 second is in the noise)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Mar 27, 2011, at 10:33 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; On Mar 27, 2011, at 7:37 AM, Tim Prince wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; On 3/27/2011 2:26 AM, Michele Marena wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt; My application performs good without shared memory utilization, but
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt; shared memory I get performance worst than without of it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt; Do I make a mistake? Don't I pay attention to something?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt; I know OpenMPI uses /tmp directory to allocate shared memory and it
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt; in the local filesystem.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; I guess you mean shared memory message passing.   Among relevant
</span><br>
<span class="quotelev1">&gt; parameters may be the message size where your implementation switches from
</span><br>
<span class="quotelev1">&gt; cached copy to non-temporal (if you are on a platform where that terminology
</span><br>
<span class="quotelev1">&gt; is used).  If built with Intel compilers, for example, the copy may be
</span><br>
<span class="quotelev1">&gt; performed by intel_fast_memcpy, with a default setting which uses
</span><br>
<span class="quotelev1">&gt; non-temporal when the message exceeds about some preset size, e.g. 50% of
</span><br>
<span class="quotelev1">&gt; smallest L2 cache for that architecture.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; A quick search for past posts seems to indicate that OpenMPI doesn't
</span><br>
<span class="quotelev1">&gt; itself invoke non-temporal, but there appear to be several useful articles
</span><br>
<span class="quotelev1">&gt; not connected with OpenMPI.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; In case guesses aren't sufficient, it's often necessary to profile
</span><br>
<span class="quotelev1">&gt; (gprof, oprofile, Vtune, ....) to pin this down.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; If shared message slows your application down, the question is
</span><br>
<span class="quotelev1">&gt; whether this is due to excessive eviction of data from cache; not a simple
</span><br>
<span class="quotelev1">&gt; question, as most recent CPUs have 3 levels of cache, and your application
</span><br>
<span class="quotelev1">&gt; may require more or less data which was in use prior to the message receipt,
</span><br>
<span class="quotelev1">&gt; and may use immediately only a small piece of a large message.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; There were several papers published in earlier years about shared
</span><br>
<span class="quotelev1">&gt; memory performance in the 1.2 series.There were known problems with that
</span><br>
<span class="quotelev1">&gt; implementation, which is why it was heavily revised for the 1.3/4 series.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; You might also look at the following links, though much of it has
</span><br>
<span class="quotelev1">&gt; been updated to the 1.3/4 series as we don't really support 1.2 any more:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=perftools">http://www.open-mpi.org/faq/?category=perftools</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; Tim Prince
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16056/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16057.php">Eugene Loh: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Previous message:</strong> <a href="16055.php">Hellm&#252;ller  Roman: "[OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine."</a>
<li><strong>In reply to:</strong> <a href="16053.php">Jeff Squyres: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16057.php">Eugene Loh: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Reply:</strong> <a href="16057.php">Eugene Loh: "Re: [OMPI users] Shared Memory Performance Problem."</a>
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
