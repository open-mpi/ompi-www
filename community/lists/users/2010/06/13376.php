<?
$subject_val = "Re: [OMPI users] Problems with memchecker in version 1.4.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 10:57:20 2010" -->
<!-- isoreceived="20100622145720" -->
<!-- sent="Tue, 22 Jun 2010 16:57:13 +0200" -->
<!-- isosent="20100622145713" -->
<!-- name="Michele De Stefano" -->
<!-- email="micdestefano_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with memchecker in version 1.4.2" -->
<!-- id="AANLkTimQv3ZSbmhFjIivmBRxElAjRsHdiymLcZJ9xqjL_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3B3F6DFE-6B08-4A4E-B6BC-5A7D847171DF_at_cisco.com" -->
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
<strong>Date:</strong> 2010-06-22 10:57:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13377.php">Jeff Squyres: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>Previous message:</strong> <a href="13375.php">Jeff Squyres: "Re: [OMPI users] problems with turbFoam"</a>
<li><strong>In reply to:</strong> <a href="13373.php">Jeff Squyres: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13377.php">Jeff Squyres: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>Reply:</strong> <a href="13377.php">Jeff Squyres: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried to send the config.log ... but it seems to be too big, and the
<br>
message bouces back.
<br>
<p>Anyway, I've discovered that configure searches for
<br>
&lt;valgrind/valgrind.h&gt; and does not find it.
<br>
<p>Installing valgrind-devel solves the problem ... but I didn't need it
<br>
before (I mean I didn't need it before Open MPI 1.4.2).
<br>
<p>Best regards.
<br>
Michele
<br>
<p>2010/6/22 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; What is the output of ompi_info | grep memchecker?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you also send the stdout from OMPI's configure where it is checking for valgrind compatibility? &#160;It should be fairly obvious, probably deep in the middle of the output of configure. &#160;Here's what mine looks like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++ Configuring MCA framework memchecker
</span><br>
<span class="quotelev1">&gt; checking for no configure components in framework memchecker...
</span><br>
<span class="quotelev1">&gt; checking for m4 configure components in framework memchecker... valgrind
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component memchecker:valgrind (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component memchecker:valgrind compile mode... static
</span><br>
<span class="quotelev1">&gt; checking --with-valgrind value... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; checking valgrind/valgrind.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking valgrind/valgrind.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for valgrind/valgrind.h... yes
</span><br>
<span class="quotelev1">&gt; checking for VALGRIND_CHECK_MEM_IS_ADDRESSABLE... yes
</span><br>
<span class="quotelev1">&gt; checking if MCA component memchecker:valgrind can compile... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 22, 2010, at 5:14 AM, Michele De Stefano wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; valgrind is installed, and worked with Open MPI 1.4.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2010/6/22 Eloi Gaudry &lt;eg_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Michele,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; You may actually need to have gdb/valgrind installed before configuring and building OpenMPI with the --enable-memchecker option.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Eloi
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Tuesday 22 June 2010 10:44:16 Michele De Stefano wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Good morning.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I'm experiencing some problems with Open MPI 1.4.2, built on a CentOS
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 5.5, on a 32 bit machine.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I've configured it with
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ./configure --prefix=/usr/local/openmpi --enable-debug
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --enable-memchecker --enable-heterogeneous
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; When I run &quot;/usr/local/openmpi/bin/mpiexec -np 3 ls&quot;, Open MPI crashes
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; with this error message:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; likely to abort. &#160;There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; environment problems. &#160;This failure appears to be an internal failure;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &#160; opal_memchecker_base_select failed
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &#160; --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; [ccdestefanolinux:06037] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; in file ../../orte/runtime/orte_init.c at line 77
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; [ccdestefanolinux:06037] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; in file ../../../../orte/tools/orterun/orterun.c at line 543
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; It seems that the memchecker does not work, because after
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; reconfiguring without &quot;--enable-memchecker&quot; and rebuilding, I don't
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; receive the same error anymore.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; May any of the Open MPI developers verify this problem, please ?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thank you very much.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Best regards.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Eloi Gaudry
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Free Field Technologies
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Axis Park Louvain-la-Neuve
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Rue Emile Francqui, 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; B-1435 Mont-Saint Guibert
</span><br>
<span class="quotelev3">&gt;&gt; &gt; BELGIUM
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Company Phone: +32 10 487 959
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Company Fax: &#160; +32 10 454 626
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Michele De Stefano
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.linkedin.com/in/micdestefano">http://www.linkedin.com/in/micdestefano</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://code.google.com/p/mds-utils">http://code.google.com/p/mds-utils</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://micheledestefano.xoom.it">http://micheledestefano.xoom.it</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="13377.php">Jeff Squyres: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>Previous message:</strong> <a href="13375.php">Jeff Squyres: "Re: [OMPI users] problems with turbFoam"</a>
<li><strong>In reply to:</strong> <a href="13373.php">Jeff Squyres: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13377.php">Jeff Squyres: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>Reply:</strong> <a href="13377.php">Jeff Squyres: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
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
