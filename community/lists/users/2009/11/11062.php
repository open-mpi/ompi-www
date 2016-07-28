<?
$subject_val = "[OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.076";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 07:18:44 2009" -->
<!-- isoreceived="20091105121844" -->
<!-- sent="Thu, 5 Nov 2009 13:18:37 +0100" -->
<!-- isosent="20091105121837" -->
<!-- name="Christophe Peyret" -->
<!-- email="christophe.peyret_at_[hidden]" -->
<!-- subject="[OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.076" -->
<!-- id="E4146187-753E-45DA-8AE0-6CC9FEF52D4C_at_onera.fr" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.076<br>
<strong>From:</strong> Christophe Peyret (<em>christophe.peyret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 07:18:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11063.php">Jeff Squyres: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers11.1.076"</a>
<li><strong>Previous message:</strong> <a href="11061.php">Mohamed Adel: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11063.php">Jeff Squyres: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers11.1.076"</a>
<li><strong>Reply:</strong> <a href="11063.php">Jeff Squyres: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers11.1.076"</a>
<li><strong>Reply:</strong> <a href="11064.php">Christophe Peyret: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.076"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm trying to launch a job with mpirun on my Mac Pro and I have a  
<br>
strange error message,
<br>
any idea ?
<br>
<p>Christophe
<br>
<p><p>[santafe.onera:00235] orte:plm:xgrid: Connection to XGrid controller  
<br>
unexpectedly closed: (600) The operation couldn&#146;t be completed. (BEEP  
<br>
error 600.)
<br>
2009-11-05 13:13:53.973 orted[235:903] *** Terminating app due to  
<br>
uncaught exception 'NSInvalidArgumentException', reason: '*** - 
<br>
[XGConnection&lt;0x100224df0&gt; finalize]: called when collecting not  
<br>
enabled'
<br>
*** Call stack at first throw:
<br>
(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0   CoreFoundation                      0x00007fff8712c5a4  
<br>
__exceptionPreprocess + 180
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1   libobjc.A.dylib                     0x00007fff87b8d313  
<br>
objc_exception_throw + 45
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2   CoreFoundation                      0x00007fff87147251 -[NSObject 
<br>
(NSObject) finalize] + 129
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3   mca_plm_xgrid.so                    0x0000000100149720 - 
<br>
[PlmXGridClient dealloc] + 64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   mca_plm_xgrid.so                    0x00000001001480e0  
<br>
orte_plm_xgrid_finalize + 64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5   mca_plm_xgrid.so                    0x0000000100147fa1  
<br>
orte_plm_xgrid_component_query + 529
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6   libopen-pal.0.dylib                 0x00000001000811ea  
<br>
mca_base_select + 186
<br>
)
<br>
terminate called after throwing an instance of 'NSException'
<br>
[santafe:00235] *** Process received signal ***
<br>
[santafe:00235] Signal: Abort trap (6)
<br>
[santafe:00235] Signal code:  (0)
<br>
[santafe:00235] *** End of error message ***
<br>
[santafe.onera:00233] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to  
<br>
start a daemon on the local node in file ess_singleton_module.c at  
<br>
line 381
<br>
[santafe.onera:00233] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to  
<br>
start a daemon on the local node in file ess_singleton_module.c at  
<br>
line 143
<br>
[santafe.onera:00233] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to  
<br>
start a daemon on the local node in file runtime/orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Unable to start a daemon on the local node  
<br>
(-128) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or  
<br>
environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Unable to start a daemon on the local node&quot; (-128)  
<br>
instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[santafe.onera:233] Abort before MPI_INIT completed successfully; not  
<br>
able to guarantee that all other processes were killed!
<br>
santafe:Example peyret$
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11062/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11063.php">Jeff Squyres: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers11.1.076"</a>
<li><strong>Previous message:</strong> <a href="11061.php">Mohamed Adel: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11063.php">Jeff Squyres: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers11.1.076"</a>
<li><strong>Reply:</strong> <a href="11063.php">Jeff Squyres: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers11.1.076"</a>
<li><strong>Reply:</strong> <a href="11064.php">Christophe Peyret: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.076"</a>
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
