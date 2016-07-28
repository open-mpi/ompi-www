<?
$subject_val = "Re: [OMPI users] Problems with memchecker in version 1.4.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 05:14:09 2010" -->
<!-- isoreceived="20100622091409" -->
<!-- sent="Tue, 22 Jun 2010 11:14:02 +0200" -->
<!-- isosent="20100622091402" -->
<!-- name="Michele De Stefano" -->
<!-- email="micdestefano_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with memchecker in version 1.4.2" -->
<!-- id="AANLkTikJRXAEPS2UjAJZD6y9fvfLpxWmpg8dvqTi4vtH_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201006221058.18474.eg_at_fft.be" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with memchecker in version 1.4.2<br>
<strong>From:</strong> Michele De Stefano (<em>micdestefano_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 05:14:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13371.php">Jeff Squyres: "Re: [OMPI users] question about reconstructPar"</a>
<li><strong>Previous message:</strong> <a href="13369.php">Eloi Gaudry: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>In reply to:</strong> <a href="13369.php">Eloi Gaudry: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13372.php">Eloi Gaudry: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>Reply:</strong> <a href="13372.php">Eloi Gaudry: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>Reply:</strong> <a href="13373.php">Jeff Squyres: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
valgrind is installed, and worked with Open MPI 1.4.1.
<br>
<p>2010/6/22 Eloi Gaudry &lt;eg_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi Michele,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may actually need to have gdb/valgrind installed before configuring and building OpenMPI with the --enable-memchecker option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday 22 June 2010 10:44:16 Michele De Stefano wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Good morning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm experiencing some problems with Open MPI 1.4.2, built on a CentOS
</span><br>
<span class="quotelev2">&gt;&gt; 5.5, on a 32 bit machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've configured it with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/usr/local/openmpi --enable-debug
</span><br>
<span class="quotelev2">&gt;&gt; --enable-memchecker --enable-heterogeneous
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I run &quot;/usr/local/openmpi/bin/mpiexec -np 3 ls&quot;, Open MPI crashes
</span><br>
<span class="quotelev2">&gt;&gt; with this error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort. &#160;There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems. &#160;This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; opal_memchecker_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt; &#160; --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [ccdestefanolinux:06037] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found
</span><br>
<span class="quotelev2">&gt;&gt; in file ../../orte/runtime/orte_init.c at line 77
</span><br>
<span class="quotelev2">&gt;&gt; [ccdestefanolinux:06037] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found
</span><br>
<span class="quotelev2">&gt;&gt; in file ../../../../orte/tools/orterun/orterun.c at line 543
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that the memchecker does not work, because after
</span><br>
<span class="quotelev2">&gt;&gt; reconfiguring without &quot;--enable-memchecker&quot; and rebuilding, I don't
</span><br>
<span class="quotelev2">&gt;&gt; receive the same error anymore.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; May any of the Open MPI developers verify this problem, please ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev2">&gt;&gt; Best regards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eloi Gaudry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Free Field Technologies
</span><br>
<span class="quotelev1">&gt; Axis Park Louvain-la-Neuve
</span><br>
<span class="quotelev1">&gt; Rue Emile Francqui, 1
</span><br>
<span class="quotelev1">&gt; B-1435 Mont-Saint Guibert
</span><br>
<span class="quotelev1">&gt; BELGIUM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Company Phone: +32 10 487 959
</span><br>
<span class="quotelev1">&gt; Company Fax: &#160; +32 10 454 626
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
<p><p><p><pre>
-- 
Michele De Stefano
<a href="http://www.linkedin.com/in/micdestefano">http://www.linkedin.com/in/micdestefano</a>
<a href="http://code.google.com/p/mds-utils">http://code.google.com/p/mds-utils</a>
<a href="http://micheledestefano.xoom.it">http://micheledestefano.xoom.it</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13371.php">Jeff Squyres: "Re: [OMPI users] question about reconstructPar"</a>
<li><strong>Previous message:</strong> <a href="13369.php">Eloi Gaudry: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>In reply to:</strong> <a href="13369.php">Eloi Gaudry: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13372.php">Eloi Gaudry: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>Reply:</strong> <a href="13372.php">Eloi Gaudry: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>Reply:</strong> <a href="13373.php">Jeff Squyres: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
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
