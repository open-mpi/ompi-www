<?
$subject_val = "Re: [OMPI users] Setting bind-to none as default via environment?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 15:14:43 2015" -->
<!-- isoreceived="20151103201443" -->
<!-- sent="Tue, 3 Nov 2015 21:14:19 +0100" -->
<!-- isosent="20151103201419" -->
<!-- name="Nick Papior" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting bind-to none as default via environment?" -->
<!-- id="CAAbhqc4pBEWovbkUz1exwEaAOCLNVduFmCRhRU7onDxa=5f8VA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87h9l3otrj.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting bind-to none as default via environment?<br>
<strong>From:</strong> Nick Papior (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-03 15:14:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27984.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27982.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>In reply to:</strong> <a href="27982.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28005.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Reply:</strong> <a href="28005.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is what I do to successfully get the best performance for my
<br>
application using OpenMP and OpenMPI:
<br>
<p>(note this is for 8 cores per socket)
<br>
<p>mpirun -x OMP_PROC_BIND=true --report-bindings -x OMP_NUM_THREADS=8
<br>
--map-by ppr:1:socket:pe=8 &lt;exec&gt;
<br>
<p>It assigns 8 cores per MPI processor separated by sockets, each MPI
<br>
processor gets 8 threads and I bind the OpenMP threads for affinity. This
<br>
is for OpenMPI &gt;= 1.8.
<br>
<p><p><p>2015-11-03 18:52 GMT+01:00 Dave Love &lt;d.love_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Lloyd Brown &lt;lloyd_brown_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; No problem.  It wasn't much of a delay.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The scenario involves a combination of MPI and OpenMP (or other
</span><br>
<span class="quotelev2">&gt; &gt; threading scheme).  Basically, the software will launch one or more
</span><br>
<span class="quotelev2">&gt; &gt; processes via MPI, which then spawn threads to do the work.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What we've been seeing is that, without something like '--bind-to none'
</span><br>
<span class="quotelev2">&gt; &gt; or similar, those threads end up being pinned to the same processor as
</span><br>
<span class="quotelev2">&gt; &gt; the process that spawned them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The default binding is supposed to be to sockets, as --report-bindings
</span><br>
<span class="quotelev1">&gt; should show.  Otherwise see another message I just posted to for an
</span><br>
<span class="quotelev1">&gt; empirical test (and possibly examples in the tutorials referenced -- I
</span><br>
<span class="quotelev1">&gt; don't remember).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; We're okay with a bind=none, since we already have cgroups in place to
</span><br>
<span class="quotelev2">&gt; &gt; constrain the user to the resources they request.  We might get more
</span><br>
<span class="quotelev2">&gt; &gt; process/thread migration between processors (but within the cgroup) than
</span><br>
<span class="quotelev2">&gt; &gt; we would like, but that's still probably acceptable in this scenario.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If there's a better solution, we'd love to hear it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --cpus-per-proc, or whatever the non-deprecated version is in mpirun(1).
</span><br>
<span class="quotelev1">&gt; [You needed --loadbalance in OMPI 1.6 to make that work.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might also like to supply environment variables to get the OpenMP
</span><br>
<span class="quotelev1">&gt; runtime to DTRT for thread affinity, if it doesn't; there isn't an OMPI
</span><br>
<span class="quotelev1">&gt; mechanism for that but you can do it with a wrapper or simple LD_PRELOAD
</span><br>
<span class="quotelev1">&gt; library.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/27982.php">http://www.open-mpi.org/community/lists/users/2015/11/27982.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27983/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27984.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27982.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>In reply to:</strong> <a href="27982.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28005.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Reply:</strong> <a href="28005.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
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
