<?
$subject_val = "Re: [OMPI users] help me please, about Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 09:11:20 2008" -->
<!-- isoreceived="20080617131120" -->
<!-- sent="Tue, 17 Jun 2008 09:10:18 -0400" -->
<!-- isosent="20080617131018" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help me please, about Open MPI" -->
<!-- id="B00409A0-B2D5-4E43-B09D-F0E9FBAB4FF1_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="BAY104-W23F374DE103FB3F71807F2FDA90_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] help me please, about Open MPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 09:10:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5900.php">Brad Benton: "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="5898.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>In reply to:</strong> <a href="5889.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5902.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Reply:</strong> <a href="5902.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is /tmp writable on your compute nodes?
<br>
<p><p>On Jun 16, 2008, at 1:49 PM, Tony Smith wrote:
<br>
<p><span class="quotelev1">&gt; Dear Sir:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks.
</span><br>
<span class="quotelev1">&gt; I have changed it to its absolute path:
</span><br>
<span class="quotelev1">&gt; /ptmp/myname/openmpi123/ompi123_install/bin/mpirun  -np 8  /ptmp/ 
</span><br>
<span class="quotelev1">&gt; myname/openmpi123/openmpi-1.2.3/examples/hello_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I still got the error :
</span><br>
<span class="quotelev1">&gt; ====================================================
</span><br>
<span class="quotelev1">&gt; [hpc-cluster-38 :32635] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; runtime/orte_init_stage1.c at line 626
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
<span class="quotelev1">&gt;   orte_session_dir failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [hpc-cluster-38 :32635] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; runtime/orte_system_init.c at line 42
</span><br>
<span class="quotelev1">&gt; [hpc-cluster-38 :32635] [0,0,0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 52
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to initialize properly.  The error occured while
</span><br>
<span class="quotelev1">&gt; attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ====================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can not find the file  &quot;runtime/orte_init_stage1.c&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that ORTE is not initialized .
</span><br>
<span class="quotelev1">&gt; I have built OPEN MPI and installed it correctly .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks a lot ,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; June 16  2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Mon, 16 Jun 2008 19:05:06 +0200
</span><br>
<span class="quotelev2">&gt; &gt; From: gentryx_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] help me please, about Open MPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear Mister Smith,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for installing Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 12:51 Mon 16 Jun , Tony Smith wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have changed PATH and LD_LIBRARY_PATH:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please be aware that you have to make those changes within your job
</span><br>
<span class="quotelev2">&gt; &gt; script. Otherwise they will only affect your local shell.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But, how can I make sure that the application is run by Open MPI  
</span><br>
<span class="quotelev1">&gt; not by mpich-
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You could enforce a certain mpirun by using its absolute path, e.g
</span><br>
<span class="quotelev2">&gt; &gt; &quot;/ptmp/myname/openmpi123/ompi123_install/bin/mpirun foo&quot; instead of
</span><br>
<span class="quotelev2">&gt; &gt; just &quot;mpirun foo&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I deleted /opt/mpich-gm/bin from PATH and added
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You should not need to delete, just add in front of MPICH.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Would you please help me with that ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I utterly hope I just did.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Most sincerely yours ;-)
</span><br>
<span class="quotelev2">&gt; &gt; -Andreas
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; ============================================
</span><br>
<span class="quotelev2">&gt; &gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev2">&gt; &gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev2">&gt; &gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev2">&gt; &gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev2">&gt; &gt; I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
</span><br>
<span class="quotelev2">&gt; &gt; ============================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (\___/)
</span><br>
<span class="quotelev2">&gt; &gt; (+'.'+)
</span><br>
<span class="quotelev2">&gt; &gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev2">&gt; &gt; signature to help him gain world domination!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now you can invite friends from Facebook and other groups to join  
</span><br>
<span class="quotelev1">&gt; you on Windows Live&#153; Messenger. Add them now!  
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5900.php">Brad Benton: "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="5898.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>In reply to:</strong> <a href="5889.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5902.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Reply:</strong> <a href="5902.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
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
