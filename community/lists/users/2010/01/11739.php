<?
$subject_val = "Re: [OMPI users] MPI problem after update";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 08:04:00 2010" -->
<!-- isoreceived="20100112130400" -->
<!-- sent="Tue, 12 Jan 2010 08:03:55 -0500" -->
<!-- isosent="20100112130355" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI problem after update" -->
<!-- id="1439BCEA-6AFC-4C6F-B025-A8030C421114_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100112093523.258540_at_gmx.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI problem after update<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-12 08:03:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11740.php">Jeff Squyres: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Previous message:</strong> <a href="11738.php">florian beutler: "[OMPI users] MPI problem after update"</a>
<li><strong>In reply to:</strong> <a href="11738.php">florian beutler: "[OMPI users] MPI problem after update"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Jan 12, 2010, at 4:35 AM, florian beutler wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone
</span><br>
<span class="quotelev1">&gt; I run an update of ubuntu 9.10 on my laptop and now my mpi programs do not work anymore... The error is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [florian-laptop:02935] [[INVALID],INVALID] ORTE_ERROR_LOG: A system-required executable either could not be found or was not executable by this user in file ../../../../../../orte/mca/ess/singleton/ess_singleton_module.c at line 269
</span><br>
<span class="quotelev1">&gt; [florian-laptop:02935] [[INVALID],INVALID] ORTE_ERROR_LOG: A system-required executable either could not be found or was not executable by this user in file ../../../../../../orte/mca/ess/singleton/ess_singleton_module.c at line 143
</span><br>
<span class="quotelev1">&gt; [florian-laptop:02935] [[INVALID],INVALID] ORTE_ERROR_LOG: A system-required executable either could not be found or was not executable by this user in file ../../../orte/runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned value A system-required executable either could not be found or was not executable by this user (-127) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned &quot;A system-required executable either could not be found or was not executable by this user&quot; (-127) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [florian-laptop:2935] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have not really an idea what causes this problem but it is definitely a problem of the mpi package because the mpi programs are working on other machines...
</span><br>
<span class="quotelev1">&gt; My MPI program is using MPI only
</span><br>
<span class="quotelev1">&gt; I am thankful for any help, if any additional informations are needed I am happy to provide them
</span><br>
<span class="quotelev1">&gt; best regards
</span><br>
<span class="quotelev1">&gt; florian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jetzt kostenlos herunterladen: Internet Explorer 8 und Mozilla Firefox 3.5 -
</span><br>
<span class="quotelev1">&gt; sicherer, schneller und einfacher! <a href="http://portal.gmx.net/de/go/atbrowser">http://portal.gmx.net/de/go/atbrowser</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11740.php">Jeff Squyres: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Previous message:</strong> <a href="11738.php">florian beutler: "[OMPI users] MPI problem after update"</a>
<li><strong>In reply to:</strong> <a href="11738.php">florian beutler: "[OMPI users] MPI problem after update"</a>
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
