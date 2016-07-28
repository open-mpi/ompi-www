<?
$subject_val = "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 19:13:04 2015" -->
<!-- isoreceived="20150625231304" -->
<!-- sent="Thu, 25 Jun 2015 16:12:53 -0700" -->
<!-- isosent="20150625231253" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled" -->
<!-- id="CAAvDA142oLe-QyO+hc9ZtR4QNqqU4Tg=3AGcUm+aAjZGsJHEvg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="37305C6B-7D93-42AA-A90A-C5064642E4C7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-25 19:12:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17540.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="17538.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when	coll ml not disabled"</a>
<li><strong>In reply to:</strong> <a href="17538.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when	coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17540.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="17540.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can see cloning of existing component's source as a starting point for a
<br>
new one as a common occurrence (at least relative to creating new
<br>
components from zero).
<br>
So, this is probably not the last time this will ever occur.
<br>
<p>Would a build with --disable-dlopen have detected this problem (by failing
<br>
to build libmpi due to multiply defined symbols)?
<br>
If so, then maybe Jenkins should apply this test (which would NOT depend on
<br>
the dlopen load order).
<br>
<p>-Paul
<br>
<p><p>On Thu, Jun 25, 2015 at 3:03 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Devendar literally just reproduced here at the developer meeting, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sweet -- ok, so we understand what is going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Devendar/Mellanox is going to talk about this internally and get back to
</span><br>
<span class="quotelev1">&gt; us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 25, 2015, at 2:59 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; this is exactly what happens.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I will send a stack trace later
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thursday, June 25, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Gilles --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you send a stack trace from one of these crashes?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am *guessing* that the following is happening:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. coll selection begins
</span><br>
<span class="quotelev2">&gt; &gt; 2. coll ml is queried, and disqualifies itself (but is not dlclosed yet)
</span><br>
<span class="quotelev2">&gt; &gt; 3. coll hcol is queried, which ends up calling down into libhcol.
</span><br>
<span class="quotelev1">&gt; libhcol calls a coll_ml_* symbol (which is apparently in a different .o
</span><br>
<span class="quotelev1">&gt; file in the library), but the linker has already resolved that coll_ml_*
</span><br>
<span class="quotelev1">&gt; symbol in the coll ml DSO.  So the execution transfers back up into the
</span><br>
<span class="quotelev1">&gt; coll ml DSO, and ... kaboom.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A simple stack trace will confirm this -- it should show execution going
</span><br>
<span class="quotelev1">&gt; down into libhcol and then back up into coll ml.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Jun 25, 2015, at 1:03 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Folks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; this is a followup on an issue reported by Daniel on the users mailing
</span><br>
<span class="quotelev1">&gt; list :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OpenMPI is built with hcoll from Mellanox.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the coll ml module has default priority zero.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on my cluster, it works just fine
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on Daniel's cluster, it crashes.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; i was able to reproduce the crash by tweaking mca_base_component_path
</span><br>
<span class="quotelev1">&gt; and ensure
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the coll ml module is loaded first.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; basically, i found two issues :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1) libhcoll.so (vendor lib provided by Mellanox, i tested
</span><br>
<span class="quotelev1">&gt; hpcx-v1.3.336-gcc-OFED-1.5.4.1-redhat6.2-x86_64) seems to include its own
</span><br>
<span class="quotelev1">&gt; coll ml, since there are some *public* symbols that are common to this
</span><br>
<span class="quotelev1">&gt; module (ml_open, ml_coll_hier_barrier_setup, ...)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2) coll ml priority is zero, and even if the library is dlclose'd, it
</span><br>
<span class="quotelev1">&gt; seems this is uneffective
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (nothing changed in /proc/xxx/maps before and after dlclose)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; there are two workarounds :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun --mca coll ^ml
</span><br>
<span class="quotelev3">&gt; &gt; &gt; or
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun --mca coll ^hcoll ... (probably not what is needed though ...)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is it expected the library is not unloaded after dlclose ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Mellanox folks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; can you please double check how libhcoll is built ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; i guess it would work if the ml_ symbols were private to the library.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; if not, the only workaround is to mpirun --mca coll ^ml
</span><br>
<span class="quotelev3">&gt; &gt; &gt; otherwise, it might crash (if coll_ml is loaded before coll_hcoll,
</span><br>
<span class="quotelev1">&gt; which is really system dependent)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Gilles
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On 6/25/2015 10:46 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Daniel,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; thanks for the logs.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; an other workaround is to
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mpirun --mca coll ^hcoll ...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; i was able to reproduce the issue, and it surprisingly occurs only if
</span><br>
<span class="quotelev1">&gt; the coll_ml module is loaded *before* the hcoll module.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /* this is not the case on my system, so i had to hack my
</span><br>
<span class="quotelev1">&gt; mca_base_component_path in order to reproduce the issue */
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; as far as i understand, libhcoll is a proprietary software, so i
</span><br>
<span class="quotelev1">&gt; cannot dig into it.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; that being said, i noticed libhcoll defines some symbols (such as
</span><br>
<span class="quotelev1">&gt; ml_coll_hier_barrier_setup) that are also defined by the coll_ml module, so
</span><br>
<span class="quotelev1">&gt; it is likely hcoll coll_ml and openmpi coll_ml are not binary compatible
</span><br>
<span class="quotelev1">&gt; hence the error.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; i will dig a bit more and see if this is even supposed to happen
</span><br>
<span class="quotelev1">&gt; (since coll_ml_priority is zero, why is the module still loaded ?)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; as far as i am concerned, you *have to* mpirun --mca coll ^ml or
</span><br>
<span class="quotelev1">&gt; update your user/system wide config file to blacklist the coll_ml module to
</span><br>
<span class="quotelev1">&gt; ensure this is working.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Mike and Mellanox folks, could you please comment on that ?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On 6/24/2015 5:23 PM, Daniel Letai wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Gilles,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Attached the two output logs.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Daniel
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; On 06/22/2015 08:08 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Daniel,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; i double checked this and i cannot make any sense with these logs.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; if coll_ml_priority is zero, then i do not any way how
</span><br>
<span class="quotelev1">&gt; ml_coll_hier_barrier_setup can be invoked.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; could you please run again with --mca coll_base_verbose 100
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; with and without --mca coll ^ml
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; On 6/22/2015 12:08 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; Daniel,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; ok, thanks
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; it seems that even if priority is zero, some code gets executed
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; I will confirm this tomorrow and send you a patch to work around
</span><br>
<span class="quotelev1">&gt; the issue if that if my guess is proven right
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; On Sunday, June 21, 2015, Daniel Letai &lt;dani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; MCA coll: parameter &quot;coll_ml_priority&quot; (current value: &quot;0&quot;, data
</span><br>
<span class="quotelev1">&gt; source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; Not sure how to read this, but for any n&gt;1 mpirun only works with
</span><br>
<span class="quotelev1">&gt; --mca coll ^ml
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; Thanks for helping
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; On 06/18/2015 04:36 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; This is really odd...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; you can run
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; ompi_info --all
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; and search coll_ml_priority
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; it will display the current value and the origin
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; (e.g. default, system wide config, user config, cli, environment
</span><br>
<span class="quotelev1">&gt; variable)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; On Thursday, June 18, 2015, Daniel Letai &lt;dani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; No, that's the issue.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; I had to disable it to get things working.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; That's why I included my config settings - I couldn't figure out
</span><br>
<span class="quotelev1">&gt; which option enabled it, so I could remove it from the configuration...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; On 06/18/2015 02:43 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Daniel,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ML module is not ready for production and is disabled by default.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Did you explicitly enable this module ?
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; If yes, I encourage you to disable it
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thursday, June 18, 2015, Daniel Letai &lt;dani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; given a simple hello.c:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;         int size, rank, len;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;         char name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;         MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;         MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;         MPI_Get_processor_name(name, &amp;len);
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;         printf(&quot;%s: Process %d out of %d\n&quot;, name, rank, size);
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;         MPI_Finalize();ffff
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; for n=1
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -n 1 ./hello
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; it works correctly.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; for n&gt;1 it segfaults with signal 11
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; used gdb to trace the problem to ml coll:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00007ffff6750845 in ml_coll_hier_barrier_setup()
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     from &lt;path to openmpi 1.8.5&gt;/lib/openmpi/mca_coll_ml.so
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; running with
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -n 2 --mca coll ^ml ./hello
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; works correctly
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; using mellanox ofed 2.3-2.0.5-rhel6.4-x86_64, if it's at all
</span><br>
<span class="quotelev1">&gt; relevant.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi 1.8.5 was built with following options:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rpmbuild --rebuild --define 'configure_options
</span><br>
<span class="quotelev1">&gt; --with-verbs=/usr
</span><br>
<span class="quotelev1">&gt;  --with-verbs-libdir=/usr/lib64 CC=gcc CXX=g++ FC=gfortran CFLAGS=&quot;-g -O3&quot;
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; --disable-debug --with-knem=/opt/knem-1.1.1.90mlnx
</span><br>
<span class="quotelev1">&gt; --with-platform=optimized --without-mpi-param-check
</span><br>
<span class="quotelev1">&gt;          --with-contrib-vt-flags=--disable-iotrace --enable-builtin-atomics
</span><br>
<span class="quotelev1">&gt; --enable-cxx-exceptions --enable-sparse-groups --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt; --enable-memchecker --enable-btl-openib-failover --with-hwloc=internal
</span><br>
<span class="quotelev1">&gt; --with-verbs --with-x --with-slurm --with-pmi=/opt/slurm
</span><br>
<span class="quotelev1">&gt; --with-fca=/opt/mellanox/fca --with-mxm=/opt/mellanox/mxm
</span><br>
<span class="quotelev1">&gt; --with-hcoll=/opt/mellanox/hcoll' openmpi-1.8.5-1.src.rpm
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; gcc version 5.1.1
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27154.php">http://www.open-mpi.org/community/lists/users/2015/06/27154.php</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27155.php">http://www.open-mpi.org/community/lists/users/2015/06/27155.php</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27157.php">http://www.open-mpi.org/community/lists/users/2015/06/27157.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27169.php">http://www.open-mpi.org/community/lists/users/2015/06/27169.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27170.php">http://www.open-mpi.org/community/lists/users/2015/06/27170.php</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27183.php">http://www.open-mpi.org/community/lists/users/2015/06/27183.php</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subscription:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17528.php">http://www.open-mpi.org/community/lists/devel/2015/06/17528.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17529.php">http://www.open-mpi.org/community/lists/devel/2015/06/17529.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17533.php">http://www.open-mpi.org/community/lists/devel/2015/06/17533.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17537.php">http://www.open-mpi.org/community/lists/devel/2015/06/17537.php</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17538.php">http://www.open-mpi.org/community/lists/devel/2015/06/17538.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17539/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17540.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="17538.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when	coll ml not disabled"</a>
<li><strong>In reply to:</strong> <a href="17538.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when	coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17540.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Reply:</strong> <a href="17540.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
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
