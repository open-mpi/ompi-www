<?
$subject_val = "Re: [OMPI devel] algorithm selection in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  3 01:32:27 2012" -->
<!-- isoreceived="20120403053227" -->
<!-- sent="Tue, 3 Apr 2012 01:32:22 -0400" -->
<!-- isosent="20120403053222" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] algorithm selection in open mpi" -->
<!-- id="CAHwLALM+O8J4-a288kWuj_tP+oN5_RoLt2Pkhm3vmOb=9+f2WQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1333422646.9069.YahooMailNeo_at_web34502.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] algorithm selection in open mpi<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-03 01:32:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10805.php">Ralph Castain: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Previous message:</strong> <a href="10803.php">roswan ismail: "[OMPI devel] algorithm selection in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10803.php">roswan ismail: "[OMPI devel] algorithm selection in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10806.php">George Bosilca: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Performance depends on the network topology &amp; node hardware, and the
<br>
benchmark - so we don't have enough information to determine the root
<br>
of the issue...
<br>
<p>However, you can do some debugging on your end (once you master the
<br>
techniques you will be able to debug all sorts of performance problems
<br>
- not just those in Open MPI): Compile coll_tuned_decision_fixed.c
<br>
with debug on (-g), and remote log onto a node where one of the tasks
<br>
runs, and attach a debugger to see if the execution path changes. If
<br>
it does, then you next step will be to determine if the bottleneck of
<br>
the benchmark really is affected by the decisions made in
<br>
coll_tuned_decision_fixed.c  .
<br>
<p>Note that to attach a debugger (just gdb will do for this case), you
<br>
will need to put a sleep after main (ideally before MPI_Init() so that
<br>
you can attach the debugger. You can even use all sorts of hacks like
<br>
using shell script wrappers to echo the PID of the task and then sleep
<br>
in the script before starting the real MPI task so that you don't need
<br>
to recompile the benchmark...
<br>
<p>Rayson
<br>
<p>=================================
<br>
Open Grid Scheduler / Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p>Scalable Grid Engine Support Program
<br>
<a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
<br>
<p><p><p>On Mon, Apr 2, 2012 at 11:10 PM, roswan ismail &lt;iewanis_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi all..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am Roswan Ismail from Malaysia. I am focusing on MPI communication
</span><br>
<span class="quotelev1">&gt; performance on quad-core cluster at my university. I used Open MPI-1.4.3 and
</span><br>
<span class="quotelev1">&gt; measurements were done using scampi benchmark.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I know, open MPI used multiple algorithms to broadcast data (MPI_BCAST)
</span><br>
<span class="quotelev1">&gt; such as binomial, pipeline, binary tree, basic linear and split binary tree.
</span><br>
<span class="quotelev1">&gt; All these algorithms will be used based on message size and communicator
</span><br>
<span class="quotelev1">&gt; size. For example, binomial is used when message size to be broadcasted is
</span><br>
<span class="quotelev1">&gt; small while pipeline used for broadcasting a large message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I want to do now is, to use fixed algorithm i.e binomial for all
</span><br>
<span class="quotelev1">&gt; message size. I want to see and compare the results with the default
</span><br>
<span class="quotelev1">&gt; results. So, I was modified coll_tuned_decision_fixed.c which is located in
</span><br>
<span class="quotelev1">&gt; open mpi-1.4.3/ompi/mca/coll/tuned by returning binomial algorithm for all
</span><br>
<span class="quotelev1">&gt; condition. Then I recompile the files but the problem is, the results
</span><br>
<span class="quotelev1">&gt; obtained is same as default. It seems I do not do any changes to the codes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So could you guys tell me the right way to do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Roswan Binti Ismail,
</span><br>
<span class="quotelev1">&gt; FTMK,
</span><br>
<span class="quotelev1">&gt; Univ. Pend. Sultan Idris,
</span><br>
<span class="quotelev1">&gt; Tg Malim, Perak.
</span><br>
<span class="quotelev1">&gt; Pej: 05-4505173
</span><br>
<span class="quotelev1">&gt; H/P: 0123588047
</span><br>
<span class="quotelev1">&gt; iewanis_at_[hidden]
</span><br>
<span class="quotelev1">&gt; roswan_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><p><pre>
-- 
==================================================
Open Grid Scheduler - The Official Open Source Grid Engine
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10805.php">Ralph Castain: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Previous message:</strong> <a href="10803.php">roswan ismail: "[OMPI devel] algorithm selection in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10803.php">roswan ismail: "[OMPI devel] algorithm selection in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10806.php">George Bosilca: "Re: [OMPI devel] algorithm selection in open mpi"</a>
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
