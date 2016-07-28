<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 13 10:38:35 2007" -->
<!-- isoreceived="20070913143835" -->
<!-- sent="Thu, 13 Sep 2007 10:38:19 -0400" -->
<!-- isosent="20070913143819" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Adding a new component to MTL" -->
<!-- id="46E94B5B.3050701_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46E86B43.4070000_at_cs.unm.edu" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-13 10:38:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2314.php">Jeff Squyres: "Re: [OMPI devel] Adding a new component"</a>
<li><strong>Previous message:</strong> <a href="2312.php">Manjunath: "[OMPI devel] Adding a new component to MTL"</a>
<li><strong>In reply to:</strong> <a href="2312.php">Manjunath: "[OMPI devel] Adding a new component to MTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2320.php">Manjunath: "Re: [OMPI devel] Adding a new component to MTL"</a>
<li><strong>Reply:</strong> <a href="2320.php">Manjunath: "Re: [OMPI devel] Adding a new component to MTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In the configure output, there should be a section like:
<br>
<p>--- MCA component mtl:&lt;component name&gt; (m4 configuration macro)
<br>
checking for MCA component mtl:&lt;component name&gt; compile mode... dso
<br>
checking &lt;header&gt; usability... yes
<br>
checking if MCA component mtl:&lt;component name&gt; can compile... yes
<br>
<p>Make sure that last line is yes. If it is not, look at the output to see
<br>
which configure checks failed. You may need to edit the configure.m4 (if
<br>
you have one) in your component directory. There are lots of examples in
<br>
the different components of how they should look, such as
<br>
ompi/mca/mtl/mx/configure.m4.
<br>
<p>Alternatively, if you don't want any configure checks done, don't put a
<br>
configure.m4 file in the directory and it should just work after an
<br>
autogen.sh run. See ompi/mca/osc/pt2pt/ for an example of a component
<br>
that does not do configure checks.
<br>
<p>Also, the output in config.log is helpful, as well as looking at what
<br>
other components in the same framework do.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p>Manjunath wrote:
<br>
<span class="quotelev1">&gt; hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am a newbie to OpenMPI and started digging into code base.
</span><br>
<span class="quotelev1">&gt; I am trying to add a new component to MTL(mca/mtl/). I assumed adding a 
</span><br>
<span class="quotelev1">&gt; new component to MTL, is no different than adding a component to BTL
</span><br>
<span class="quotelev1">&gt; and followed slides below to do so.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/papers/workshop-2006/mon_07_mca_part_2.pdf">http://www.open-mpi.org/papers/workshop-2006/mon_07_mca_part_2.pdf</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, defined
</span><br>
<span class="quotelev1">&gt; mca_mycomponent_init(bool enable_progress_threads, bool 
</span><br>
<span class="quotelev1">&gt; enable_mpi_threads),
</span><br>
<span class="quotelev1">&gt; as mentioned in ( 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2007/09/2294.php">http://www.open-mpi.org/community/lists/devel/2007/09/2294.php</a> ),
</span><br>
<span class="quotelev1">&gt; which for now only returns success.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then ...
</span><br>
<span class="quotelev1">&gt;     $ompi-trunk/autogen.sh
</span><br>
<span class="quotelev1">&gt;     $ompi-trunk/configure --prefix=&lt;install-path&gt;
</span><br>
<span class="quotelev1">&gt; seems to generate relavant make file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However,
</span><br>
<span class="quotelev1">&gt; $ make all install
</span><br>
<span class="quotelev1">&gt; doesn't compile my component. Is there something I am missing ?
</span><br>
<span class="quotelev1">&gt; Any ideas or documentation I should be reading.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks in advance,
</span><br>
<span class="quotelev1">&gt; -Manjunath
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2314.php">Jeff Squyres: "Re: [OMPI devel] Adding a new component"</a>
<li><strong>Previous message:</strong> <a href="2312.php">Manjunath: "[OMPI devel] Adding a new component to MTL"</a>
<li><strong>In reply to:</strong> <a href="2312.php">Manjunath: "[OMPI devel] Adding a new component to MTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2320.php">Manjunath: "Re: [OMPI devel] Adding a new component to MTL"</a>
<li><strong>Reply:</strong> <a href="2320.php">Manjunath: "Re: [OMPI devel] Adding a new component to MTL"</a>
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
