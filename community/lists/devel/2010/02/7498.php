<?
$subject_val = "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 21:03:04 2010" -->
<!-- isoreceived="20100226020304" -->
<!-- sent="Thu, 25 Feb 2010 19:02:58 -0700" -->
<!-- isosent="20100226020258" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk" -->
<!-- id="71d2d8cc1002251802n42fe48acu33e70738a1fc03e0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E7B17362-F3E2-442D-80FB-3E53F2F2DB45_at_caos.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 21:02:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7499.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7497.php">Barrett, Brian W: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<li><strong>In reply to:</strong> <a href="7492.php">Leonardo Fialho: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7494.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe you are thinking parallel to what Josh and I have been doing, and
<br>
slightly different to the UTK approach. The &quot;orcm&quot; method follows what you
<br>
describe: we maintain operation on the current remaining nodes, see if we
<br>
can use another new node to replace the failed one, and redistribute the
<br>
affected procs (on the failed node) either to existing nodes or to new ones.
<br>
<p>I believe UTK's approach focuses on retaining operation of the existing
<br>
nodes, redistributing procs across them. I suspect we will eventually
<br>
integrate some of these operations so that users can exploit the best of
<br>
both methods.
<br>
<p>Josh hasn't exposed his MPI recovery work yet. As he mentioned in his
<br>
response, he has done some things in this area that are complementary to the
<br>
UTK method. Just needs to finish his thesis before making them public. :-)
<br>
<p><p>On Thu, Feb 25, 2010 at 9:54 AM, Leonardo Fialho
<br>
&lt;leonardofialho_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hum... I'm really afraid about this. I understand your choice since it
</span><br>
<span class="quotelev1">&gt; is really a good solution for fail/stop/restart behaviour, but looking from
</span><br>
<span class="quotelev1">&gt; the fail/recovery side, can you envision some alternative for the orted's
</span><br>
<span class="quotelev1">&gt; reconfiguration on the fly?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't see why the current code prohibit such behavior. However, I don't
</span><br>
<span class="quotelev1">&gt; see right now in this branch how the remaining daemons (and MPI processes)
</span><br>
<span class="quotelev1">&gt; reconstruct the communication topology, but this is just a technicality.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyway, this is the code that UT will bring in. All our work focus on
</span><br>
<span class="quotelev1">&gt; maintaining the exiting environment up and running instead of restarting
</span><br>
<span class="quotelev1">&gt; everything. The orted will auto-heal (i.e reshape the underlying topology,
</span><br>
<span class="quotelev1">&gt; recreate the connections, and so on), and the fault is propagated to the MPI
</span><br>
<span class="quotelev1">&gt; layer who will take the decision on what to do next.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you say MPI layer, what exactly it means? The MPI interface or the
</span><br>
<span class="quotelev1">&gt; network stack which supports the MPI communication (BTL, PML, etc.)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my mind I see an orted failure (and all procs running under this deamon)
</span><br>
<span class="quotelev1">&gt; as an environment failure which leads to job failures. Thus, to use a
</span><br>
<span class="quotelev1">&gt; fail/recovery strategy, this daemons should be recovered (possibly
</span><br>
<span class="quotelev1">&gt; relaunching and updating its procs/jobs structures) and after that all
</span><br>
<span class="quotelev1">&gt; failed procs which are originally running under this daemon should be
</span><br>
<span class="quotelev1">&gt; recovered also (maybe from a checkpoint, log optionally). Of course, in
</span><br>
<span class="quotelev1">&gt; available, an spare orted could be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding to the MPI application, probably this 'environment
</span><br>
<span class="quotelev1">&gt; reconfiguration' requires updates/reconfiguration/whatever on the
</span><br>
<span class="quotelev1">&gt; communication stack which supports the MPI communication (BTL, PML, etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are we thinking in the same direction or I have missed something in the
</span><br>
<span class="quotelev1">&gt; way?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Leonardo
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7498/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7499.php">Ralph Castain: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7497.php">Barrett, Brian W: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<li><strong>In reply to:</strong> <a href="7492.php">Leonardo Fialho: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7494.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
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
