<?
$subject_val = "Re: [OMPI users] Problems with memchecker in version 1.4.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 04:58:13 2010" -->
<!-- isoreceived="20100622085813" -->
<!-- sent="Tue, 22 Jun 2010 10:58:18 +0200" -->
<!-- isosent="20100622085818" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with memchecker in version 1.4.2" -->
<!-- id="201006221058.18474.eg_at_fft.be" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTiltvlnnp9WMUQJwP63pUG8GWamx4_IVmiAzTp4q_at_mail.gmail.com" -->
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
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 04:58:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13370.php">Michele De Stefano: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>Previous message:</strong> <a href="13368.php">Michele De Stefano: "[OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>In reply to:</strong> <a href="13368.php">Michele De Stefano: "[OMPI users] Problems with memchecker in version 1.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13370.php">Michele De Stefano: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>Reply:</strong> <a href="13370.php">Michele De Stefano: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Michele,
<br>
<p>You may actually need to have gdb/valgrind installed before configuring and building OpenMPI with the --enable-memchecker option.
<br>
<p>Regards,
<br>
Eloi
<br>
<p><p>On Tuesday 22 June 2010 10:44:16 Michele De Stefano wrote:
<br>
<span class="quotelev1">&gt; Good morning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm experiencing some problems with Open MPI 1.4.2, built on a CentOS
</span><br>
<span class="quotelev1">&gt; 5.5, on a 32 bit machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've configured it with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi --enable-debug
</span><br>
<span class="quotelev1">&gt; --enable-memchecker --enable-heterogeneous
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run &quot;/usr/local/openmpi/bin/mpiexec -np 3 ls&quot;, Open MPI crashes
</span><br>
<span class="quotelev1">&gt; with this error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   opal_memchecker_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [ccdestefanolinux:06037] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found
</span><br>
<span class="quotelev1">&gt; in file ../../orte/runtime/orte_init.c at line 77
</span><br>
<span class="quotelev1">&gt; [ccdestefanolinux:06037] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found
</span><br>
<span class="quotelev1">&gt; in file ../../../../orte/tools/orterun/orterun.c at line 543
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that the memchecker does not work, because after
</span><br>
<span class="quotelev1">&gt; reconfiguring without &quot;--enable-memchecker&quot; and rebuilding, I don't
</span><br>
<span class="quotelev1">&gt; receive the same error anymore.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; May any of the Open MPI developers verify this problem, please ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt; Best regards.
</span><br>
<p><pre>
-- 
Eloi Gaudry
Free Field Technologies
Axis Park Louvain-la-Neuve
Rue Emile Francqui, 1
B-1435 Mont-Saint Guibert
BELGIUM
Company Phone: +32 10 487 959
Company Fax:   +32 10 454 626
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13370.php">Michele De Stefano: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>Previous message:</strong> <a href="13368.php">Michele De Stefano: "[OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>In reply to:</strong> <a href="13368.php">Michele De Stefano: "[OMPI users] Problems with memchecker in version 1.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13370.php">Michele De Stefano: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>Reply:</strong> <a href="13370.php">Michele De Stefano: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
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
