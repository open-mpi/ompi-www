<?
$subject_val = "Re: [OMPI users] Question about checkpoint/restart protocol";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 04:37:07 2009" -->
<!-- isoreceived="20091105093707" -->
<!-- sent="Thu, 05 Nov 2009 10:38:45 +0100" -->
<!-- isosent="20091105093845" -->
<!-- name="Sergio D&#237;az" -->
<!-- email="sdiaz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about checkpoint/restart protocol" -->
<!-- id="4AF29D25.3020508_at_cesga.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="00BA3BD8D13D7D4092596C9E6AECD9FE429F30DB9E_at_sexgw3k-h2040.local.bibalex.dom" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about checkpoint/restart protocol<br>
<strong>From:</strong> Sergio D&#237;az (<em>sdiaz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 04:38:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11061.php">Mohamed Adel: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<li><strong>Previous message:</strong> <a href="11059.php">George Markomanolis: "Re: [OMPI users] using specific algorithm for collective communication and knowing the root cpu?"</a>
<li><strong>In reply to:</strong> <a href="11057.php">Mohamed Adel: "[OMPI users] Question about checkpoint/restart protocol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11061.php">Mohamed Adel: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<li><strong>Reply:</strong> <a href="11061.php">Mohamed Adel: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Did you load the BLCR modules before compiling OpenMPI?
<br>
<p>Regards,
<br>
Sergio
<br>
<p>Mohamed Adel escribi&#243;:
<br>
<span class="quotelev1">&gt; Dear OMPI users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm a new OpenMPI user. I've configured openmpi-1.3.3 with those options &quot;./configure --prefix=/home/mab/openmpi-1.3.3 --with-sge --enable-ft-thread --with-ft=cr --enable-mpi-threads --enable-static --disable-shared --with-blcr=/home/mab/blcr-0.8.2/&quot; then compiled and installed it successfully.
</span><br>
<span class="quotelev1">&gt; Now I'm trying to use the checkpoint/restart protocol. I run a program with the options &quot;mpirun -n 2 -am ft-enable-cr -H localhost prime/checkpoint-restart-test&quot; but I receive the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [madel:28896] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
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
<span class="quotelev1">&gt;   opal_cr_init() failed failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [madel:28896] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 77
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't find the files mentioned in this post &quot;<a href="http://www.open-mpi.org/community/lists/users/2009/09/10641.php">http://www.open-mpi.org/community/lists/users/2009/09/10641.php</a>&quot; (mca_crs_blcr.so, mca_crs_blcr.la). Could you please help me with that error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Mohamed Adel
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
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Sergio D&#237;az Montes
Centro de Supercomputacion de Galicia
Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de Compostela (Spain)
Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16
email: sdiaz_at_[hidden] ; <a href="http://www.cesga.es/">http://www.cesga.es/</a>
------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11061.php">Mohamed Adel: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<li><strong>Previous message:</strong> <a href="11059.php">George Markomanolis: "Re: [OMPI users] using specific algorithm for collective communication and knowing the root cpu?"</a>
<li><strong>In reply to:</strong> <a href="11057.php">Mohamed Adel: "[OMPI users] Question about checkpoint/restart protocol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11061.php">Mohamed Adel: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<li><strong>Reply:</strong> <a href="11061.php">Mohamed Adel: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
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
