<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 17 14:07:49 2007" -->
<!-- isoreceived="20070917180749" -->
<!-- sent="Mon, 17 Sep 2007 12:06:00 -0600" -->
<!-- isosent="20070917180600" -->
<!-- name="Manjunath" -->
<!-- email="manjugv_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Adding a new component to MTL" -->
<!-- id="46EEC208.9080609_at_cs.unm.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46E94B5B.3050701_at_cs.indiana.edu" -->
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
<strong>From:</strong> Manjunath (<em>manjugv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-17 14:06:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2321.php">Gleb Natapov: "[OMPI devel] Commit r16105"</a>
<li><strong>Previous message:</strong> <a href="2319.php">Terry Dontje: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>In reply to:</strong> <a href="2313.php">Tim Prins: "Re: [OMPI devel] Adding a new component to MTL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks that was helpful. Now I can call my component.
<br>
<p>-Manjunath
<br>
<p><p><p>Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the configure output, there should be a section like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component mtl:&lt;component name&gt; (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component mtl:&lt;component name&gt; compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking &lt;header&gt; usability... yes
</span><br>
<span class="quotelev1">&gt; checking if MCA component mtl:&lt;component name&gt; can compile... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sure that last line is yes. If it is not, look at the output to see
</span><br>
<span class="quotelev1">&gt; which configure checks failed. You may need to edit the configure.m4 (if
</span><br>
<span class="quotelev1">&gt; you have one) in your component directory. There are lots of examples in
</span><br>
<span class="quotelev1">&gt; the different components of how they should look, such as
</span><br>
<span class="quotelev1">&gt; ompi/mca/mtl/mx/configure.m4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively, if you don't want any configure checks done, don't put a
</span><br>
<span class="quotelev1">&gt; configure.m4 file in the directory and it should just work after an
</span><br>
<span class="quotelev1">&gt; autogen.sh run. See ompi/mca/osc/pt2pt/ for an example of a component
</span><br>
<span class="quotelev1">&gt; that does not do configure checks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, the output in config.log is helpful, as well as looking at what
</span><br>
<span class="quotelev1">&gt; other components in the same framework do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Manjunath wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am a newbie to OpenMPI and started digging into code base.
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to add a new component to MTL(mca/mtl/). I assumed adding a 
</span><br>
<span class="quotelev2">&gt;&gt; new component to MTL, is no different than adding a component to BTL
</span><br>
<span class="quotelev2">&gt;&gt; and followed slides below to do so.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/papers/workshop-2006/mon_07_mca_part_2.pdf">http://www.open-mpi.org/papers/workshop-2006/mon_07_mca_part_2.pdf</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, defined
</span><br>
<span class="quotelev2">&gt;&gt; mca_mycomponent_init(bool enable_progress_threads, bool 
</span><br>
<span class="quotelev2">&gt;&gt; enable_mpi_threads),
</span><br>
<span class="quotelev2">&gt;&gt; as mentioned in ( 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2007/09/2294.php">http://www.open-mpi.org/community/lists/devel/2007/09/2294.php</a> ),
</span><br>
<span class="quotelev2">&gt;&gt; which for now only returns success.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then ...
</span><br>
<span class="quotelev2">&gt;&gt;     $ompi-trunk/autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt;     $ompi-trunk/configure --prefix=&lt;install-path&gt;
</span><br>
<span class="quotelev2">&gt;&gt; seems to generate relavant make file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However,
</span><br>
<span class="quotelev2">&gt;&gt; $ make all install
</span><br>
<span class="quotelev2">&gt;&gt; doesn't compile my component. Is there something I am missing ?
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas or documentation I should be reading.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; -Manjunath
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2321.php">Gleb Natapov: "[OMPI devel] Commit r16105"</a>
<li><strong>Previous message:</strong> <a href="2319.php">Terry Dontje: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>In reply to:</strong> <a href="2313.php">Tim Prins: "Re: [OMPI devel] Adding a new component to MTL"</a>
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
