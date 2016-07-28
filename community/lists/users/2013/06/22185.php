<?
$subject_val = "Re: [OMPI users] error running with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 13:27:08 2013" -->
<!-- isoreceived="20130621172708" -->
<!-- sent="Fri, 21 Jun 2013 17:27:02 +0000" -->
<!-- isosent="20130621172702" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error running with mpirun" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F697B18_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BLU0-SMTP330FC3BF691B74AB81DBB34CB8E0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] error running with mpirun<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 13:27:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22186.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Previous message:</strong> <a href="22184.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>In reply to:</strong> <a href="22162.php">Lorenzo Don&#224;: "[OMPI users] error running with mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The ras/proxy plugin hasn't been around in a long, long time -- what version of OMPI are you running?
<br>
<p>Regardless, it sounds like a busted Open MPI install.  You should wholly re-install OMPI from scratch.  Be sure to *uninstall* the prior Open MPI install (which is easiest if you installed it into a standalone directory with nothing else), because installing a new Open MPI version does not remove all the plugins from a prior Open MPI installation.
<br>
<p>Make sense?
<br>
<p><p>On Jun 20, 2013, at 4:00 PM, Lorenzo Don&#224; &lt;lorechimica91_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all that help me: THANKS for your patience with me.
</span><br>
<span class="quotelev1">&gt; I was able to compile with open MPI:
</span><br>
<span class="quotelev1">&gt; but now I found this error message running programs copiled with open MPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host:      MacBook-Pro-di-Lorenzo-Dona.local
</span><br>
<span class="quotelev1">&gt; Framework: ras
</span><br>
<span class="quotelev1">&gt; Component: proxy
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona.local:34123] [[34784,0],0] ORTE_ERROR_LOG: Error in file ess_hnp_module.c at line 360
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
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
<span class="quotelev1">&gt;  orte_ras_base_open failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona.local:34122] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a daemon on the local node in file ess_singleton_module.c at line 428
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona.local:34122] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a daemon on the local node in file ess_singleton_module.c at line 211
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
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
<span class="quotelev1">&gt;  orte_ess_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Unable to start a daemon on the local node (-127) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt;  ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unable to start a daemon on the local node&quot; (-127) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona:34122] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona:34122] *** reported by process [4294967295,4294967295]
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona:34122] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona:34122] *** Unknown error
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona:34122] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona:34122] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;  Local host: MacBook-Pro-di-Lorenzo-Dona.local
</span><br>
<span class="quotelev1">&gt;  PID:        34122
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MacBook-Pro-di-Lorenzo-Dona:v1 lorenzodona$ export LD_LIBRARY_PATH=/Users/lorenzodona/Desktop/openmpi-1.7.1/bin/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; MacBook-Pro-di-Lorenzo-Dona:v1 lorenzodona$ mpirun -np 1 /Users/lorenzodona/Downloads/abinit-7.2.2/src/98_main/abinit &lt;t4x.files
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host:      MacBook-Pro-di-Lorenzo-Dona.local
</span><br>
<span class="quotelev1">&gt; Framework: ras
</span><br>
<span class="quotelev1">&gt; Component: proxy
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona.local:34143] [[34804,0],0] ORTE_ERROR_LOG: Error in file ess_hnp_module.c at line 360
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
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
<span class="quotelev1">&gt;  orte_ras_base_open failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona.local:34142] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a daemon on the local node in file ess_singleton_module.c at line 428
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona.local:34142] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a daemon on the local node in file ess_singleton_module.c at line 211
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
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
<span class="quotelev1">&gt;  orte_ess_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Unable to start a daemon on the local node (-127) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt;  ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unable to start a daemon on the local node&quot; (-127) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona:34142] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona:34142] *** reported by process [4294967295,4294967295]
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona:34142] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona:34142] *** Unknown error
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona:34142] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona:34142] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;  Local host: MacBook-Pro-di-Lorenzo-Dona.local
</span><br>
<span class="quotelev1">&gt;  PID:        34142
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MacBook-Pro-di-Lorenzo-Dona:v1 lorenzodona$ mpirun -np 1 /Users/lorenzodona/Downloads/abinit-7.2.2/src/98_main/abinit &lt;t4x.files
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host:      MacBook-Pro-di-Lorenzo-Dona.local
</span><br>
<span class="quotelev1">&gt; Framework: ras
</span><br>
<span class="quotelev1">&gt; Component: proxy
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona.local:34148] [[34767,0],0] ORTE_ERROR_LOG: Error in file ess_hnp_module.c at line 360
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
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
<span class="quotelev1">&gt;  orte_ras_base_open failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona.local:34147] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a daemon on the local node in file ess_singleton_module.c at line 428
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona.local:34147] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a daemon on the local node in file ess_singleton_module.c at line 211
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
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
<span class="quotelev1">&gt;  orte_ess_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Unable to start a daemon on the local node (-127) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt;  ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unable to start a daemon on the local node&quot; (-127) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona:34147] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona:34147] *** reported by process [4294967295,4294967295]
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona:34147] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona:34147] *** Unknown error
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona:34147] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro-di-Lorenzo-Dona:34147] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;  Local host: MacBook-Pro-di-Lorenzo-Dona.local
</span><br>
<span class="quotelev1">&gt;  PID:        34147
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you help me?
</span><br>
<span class="quotelev1">&gt; Thans again for your patince and help.
</span><br>
<span class="quotelev1">&gt; Dearly lorenzo.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22186.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Previous message:</strong> <a href="22184.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>In reply to:</strong> <a href="22162.php">Lorenzo Don&#224;: "[OMPI users] error running with mpirun"</a>
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
