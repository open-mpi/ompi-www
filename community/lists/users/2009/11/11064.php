<?
$subject_val = "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.076";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 09:00:52 2009" -->
<!-- isoreceived="20091105140052" -->
<!-- sent="Thu, 5 Nov 2009 15:00:45 +0100" -->
<!-- isosent="20091105140045" -->
<!-- name="Christophe Peyret" -->
<!-- email="christophe.peyret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.076" -->
<!-- id="1C00AD80-F320-48EF-B312-3CB4C829FF67_at_onera.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E4146187-753E-45DA-8AE0-6CC9FEF52D4C_at_onera.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.076<br>
<strong>From:</strong> Christophe Peyret (<em>christophe.peyret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 09:00:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11065.php">Jeff Squyres: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + IntelCompilers 11.1.076"</a>
<li><strong>Previous message:</strong> <a href="11063.php">Jeff Squyres: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers11.1.076"</a>
<li><strong>In reply to:</strong> <a href="11062.php">Christophe Peyret: "[OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.076"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11065.php">Jeff Squyres: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + IntelCompilers 11.1.076"</a>
<li><strong>Reply:</strong> <a href="11065.php">Jeff Squyres: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + IntelCompilers 11.1.076"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How can I deactivate Xgrid launching in order to be able to use open- 
<br>
mpi under snow leopard ?
<br>
<p><p>Le 5 nov. 2009 &#224; 13:18, Christophe Peyret a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to launch a job with mpirun on my Mac Pro and I have a  
</span><br>
<span class="quotelev1">&gt; strange error message,
</span><br>
<span class="quotelev1">&gt; any idea ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Christophe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [santafe.onera:00235] orte:plm:xgrid: Connection to XGrid controller  
</span><br>
<span class="quotelev1">&gt; unexpectedly closed: (600) The operation couldn&#146;t be completed.  
</span><br>
<span class="quotelev1">&gt; (BEEP error 600.)
</span><br>
<span class="quotelev1">&gt; 2009-11-05 13:13:53.973 orted[235:903] *** Terminating app due to  
</span><br>
<span class="quotelev1">&gt; uncaught exception 'NSInvalidArgumentException', reason: '*** - 
</span><br>
<span class="quotelev1">&gt; [XGConnection&lt;0x100224df0&gt; finalize]: called when collecting not  
</span><br>
<span class="quotelev1">&gt; enabled'
</span><br>
<span class="quotelev1">&gt; *** Call stack at first throw:
</span><br>
<span class="quotelev1">&gt; (
</span><br>
<span class="quotelev1">&gt; 	0   CoreFoundation                      0x00007fff8712c5a4  
</span><br>
<span class="quotelev1">&gt; __exceptionPreprocess + 180
</span><br>
<span class="quotelev1">&gt; 	1   libobjc.A.dylib                     0x00007fff87b8d313  
</span><br>
<span class="quotelev1">&gt; objc_exception_throw + 45
</span><br>
<span class="quotelev1">&gt; 	2   CoreFoundation                      0x00007fff87147251 - 
</span><br>
<span class="quotelev1">&gt; [NSObject(NSObject) finalize] + 129
</span><br>
<span class="quotelev1">&gt; 	3   mca_plm_xgrid.so                    0x0000000100149720 - 
</span><br>
<span class="quotelev1">&gt; [PlmXGridClient dealloc] + 64
</span><br>
<span class="quotelev1">&gt; 	4   mca_plm_xgrid.so                    0x00000001001480e0  
</span><br>
<span class="quotelev1">&gt; orte_plm_xgrid_finalize + 64
</span><br>
<span class="quotelev1">&gt; 	5   mca_plm_xgrid.so                    0x0000000100147fa1  
</span><br>
<span class="quotelev1">&gt; orte_plm_xgrid_component_query + 529
</span><br>
<span class="quotelev1">&gt; 	6   libopen-pal.0.dylib                 0x00000001000811ea  
</span><br>
<span class="quotelev1">&gt; mca_base_select + 186
</span><br>
<span class="quotelev1">&gt; )
</span><br>
<span class="quotelev1">&gt; terminate called after throwing an instance of 'NSException'
</span><br>
<span class="quotelev1">&gt; [santafe:00235] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [santafe:00235] Signal: Abort trap (6)
</span><br>
<span class="quotelev1">&gt; [santafe:00235] Signal code:  (0)
</span><br>
<span class="quotelev1">&gt; [santafe:00235] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [santafe.onera:00233] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to  
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file ess_singleton_module.c at  
</span><br>
<span class="quotelev1">&gt; line 381
</span><br>
<span class="quotelev1">&gt; [santafe.onera:00233] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to  
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file ess_singleton_module.c at  
</span><br>
<span class="quotelev1">&gt; line 143
</span><br>
<span class="quotelev1">&gt; [santafe.onera:00233] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to  
</span><br>
<span class="quotelev1">&gt; start a daemon on the local node in file runtime/orte_init.c at line  
</span><br>
<span class="quotelev1">&gt; 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Unable to start a daemon on the local node  
</span><br>
<span class="quotelev1">&gt; (-128) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
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
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unable to start a daemon on the local node&quot; (-128)  
</span><br>
<span class="quotelev1">&gt; instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [santafe.onera:233] Abort before MPI_INIT completed successfully;  
</span><br>
<span class="quotelev1">&gt; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; santafe:Example peyret$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11064/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11065.php">Jeff Squyres: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + IntelCompilers 11.1.076"</a>
<li><strong>Previous message:</strong> <a href="11063.php">Jeff Squyres: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers11.1.076"</a>
<li><strong>In reply to:</strong> <a href="11062.php">Christophe Peyret: "[OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.076"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11065.php">Jeff Squyres: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + IntelCompilers 11.1.076"</a>
<li><strong>Reply:</strong> <a href="11065.php">Jeff Squyres: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + IntelCompilers 11.1.076"</a>
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
