<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 22 08:34:10 2007" -->
<!-- isoreceived="20070622123410" -->
<!-- sent="Fri, 22 Jun 2007 14:30:24 +0200" -->
<!-- isosent="20070622123024" -->
<!-- name="sadfub_at_[hidden]" -->
<!-- email="sadfub_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="467BC0E0.5060706_at_gmx.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200706221244.28106.markus.daene_at_physik.uni-halle.de" -->
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
<strong>From:</strong> <a href="mailto:sadfub_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20(loose)%20SGE%20Integration%20fails,%20why?"><em>sadfub_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-06-22 08:30:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1749.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1747.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1747.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Markus Daene wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; to your memory problem:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I had similar problems when I specified the h_vmem option to use in SGE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Without SGE everything works, but starting with SGE gives such memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errors. You can easily check this with 'qconf -sc'. If you have used this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option, try without it. The problem in my case was that OpenMPI allocates
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sometimes a lot of memory and the job gets immediately killed by SGE, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one gets such error messages, see my posting some days ago. I am not sure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if this helps in your case but it could be an explanation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am sorry to discuss SGE stuff here as well, but there was this question and 
</span><br>
<span class="quotelev1">&gt; one should make clear that this is not just related to OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think your output shows exactely the problem: you have set h_vmem as 
</span><br>
<span class="quotelev1">&gt; requestable and the default value to 0, the job has no memory at all. OMPI 
</span><br>
<p>(thought that zero means infinity)
<br>
<p><span class="quotelev1">&gt; somehow knows that is has just this memory granted by SGE, so it cannot 
</span><br>
<span class="quotelev1">&gt; allocate any memory in this case. Of course you get the errors.
</span><br>
<span class="quotelev1">&gt; You should either set h_vmem to not requestable, or set a proper default 
</span><br>
<span class="quotelev1">&gt; value. e.g. 2.0G, or specify the memory consumption in your job script like
</span><br>
<span class="quotelev1">&gt; #$ -l h_vmem=2000M
</span><br>
<span class="quotelev1">&gt; it is not important that your queue has set h_vmem to infinity, this gives you 
</span><br>
<span class="quotelev1">&gt; just the maximum which you can request. 
</span><br>
<p>If I use the h_vmem option I get a slight different error, but if I mark
<br>
h_vmem as not requestable =&gt; same error. Below is the slight different
<br>
error message:
<br>
<p>[node17:02861] mca: base: component_find: unable to open: libsysfs.so.1:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[node17:02861] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_pml_ob1.so: failed
<br>
to map segment from shared o
<br>
bject: Cannot allocate memory (ignored)
<br>
[node17:02861] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_coll_basic.so:
<br>
failed to map segment from share
<br>
d object: Cannot allocate memory (ignored)
<br>
[node17:02861] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_coll_hierarch.so:
<br>
failed to map segment from sh
<br>
ared object: Cannot allocate memory (ignored)
<br>
[node17:02861] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_coll_self.so: failed
<br>
to map segment from shared
<br>
&nbsp;object: Cannot allocate memory (ignored)
<br>
[node17:02861] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_coll_sm.so: failed
<br>
to map segment from shared o
<br>
bject: Cannot allocate memory (ignored)
<br>
[node17:02861] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_coll_tuned.so:
<br>
failed to map segment from share
<br>
d object: Cannot allocate memory (ignored)
<br>
[node17:02861] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_osc_pt2pt.so: failed
<br>
to map segment from shared
<br>
&nbsp;object: Cannot allocate memory (ignored)
<br>
[node17:02862] mca: base: component_find: unable to open: libsysfs.so.1:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[node17:02862] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_pml_ob1.so: failed
<br>
to map segment from shared o
<br>
bject: Cannot allocate memory (ignored)
<br>
[node17:02862] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_coll_basic.so:
<br>
failed to map segment from share
<br>
d object: Cannot allocate memory (ignored)
<br>
[node17:02862] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_coll_hierarch.so:
<br>
failed to map segment from sh
<br>
ared object: Cannot allocate memory (ignored)
<br>
[node17:02862] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_coll_self.so: failed
<br>
to map segment from shared
<br>
&nbsp;object: Cannot allocate memory (ignored)
<br>
[node17:02862] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_coll_sm.so: failed
<br>
to map segment from shared o
<br>
bject: Cannot allocate memory (ignored)
<br>
[node17:02862] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_coll_tuned.so:
<br>
failed to map segment from share
<br>
d object: Cannot allocate memory (ignored)
<br>
[node17:02862] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_osc_pt2pt.so: failed
<br>
to map segment from shared
<br>
&nbsp;object: Cannot allocate memory (ignored)
<br>
[node17:02863] mca: base: component_find: unable to open: libsysfs.so.1:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[node17:02863] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_pml_ob1.so: failed
<br>
to map segment from shared o
<br>
bject: Cannot allocate memory (ignored)
<br>
[node17:02863] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_coll_basic.so:
<br>
failed to map segment from share
<br>
d object: Cannot allocate memory (ignored)
<br>
[node17:02863] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_coll_hierarch.so:
<br>
failed to map segment from sh
<br>
ared object: Cannot allocate memory (ignored)
<br>
[node17:02863] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_coll_self.so: failed
<br>
to map segment from shared
<br>
&nbsp;object: Cannot allocate memory (ignored)
<br>
[node17:02863] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_coll_sm.so: failed
<br>
to map segment from shared o
<br>
bject: Cannot allocate memory (ignored)
<br>
[node17:02863] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_coll_tuned.so:
<br>
failed to map segment from share
<br>
d object: Cannot allocate memory (ignored)
<br>
[node17:02863] mca: base: component_find: unable to open:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/lib64/openmpi/mca_osc_pt2pt.so: failed
<br>
to map segment from shared
<br>
&nbsp;object: Cannot allocate memory (ignored)
<br>
[node17:02864] mca: base: component_find: unable to open: libsysfs.so.1:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
--------------------------------------------------------------------------
<br>
No available pml components were found!
<br>
<p>This means that there are no components of this type installed on your
<br>
system or all the components reported that they could not be used.
<br>
<p>Hmm, I also marked the h_vmem ressource as not requestable, as you
<br>
suggested =&gt; same error message. Lot of thanks anyway.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1749.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1747.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1747.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
