<?
$subject_val = "Re: [OMPI users] help me please, about Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 13:49:51 2008" -->
<!-- isoreceived="20080616174951" -->
<!-- sent="Mon, 16 Jun 2008 13:49:42 -0400" -->
<!-- isosent="20080616174942" -->
<!-- name="Tony Smith" -->
<!-- email="dtustudy8_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help me please, about Open MPI" -->
<!-- id="BAY104-W23F374DE103FB3F71807F2FDA90_at_phx.gbl" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="20080616170506.GB7069_at_hex.inf-ra.uni-jena.de" -->
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
<strong>From:</strong> Tony Smith (<em>dtustudy8_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-16 13:49:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5890.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Previous message:</strong> <a href="5888.php">Andreas Sch&#228;fer: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>In reply to:</strong> <a href="5888.php">Andreas Sch&#228;fer: "Re: [OMPI users] help me please, about Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5899.php">Jeff Squyres: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Reply:</strong> <a href="5899.php">Jeff Squyres: "Re: [OMPI users] help me please, about Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Sir:  
<br>
<p>thanks.
<br>
I have changed it to its absolute path:
<br>
/ptmp/myname/openmpi123/ompi123_install/bin/mpirun  -np 8  /ptmp/myname/openmpi123/openmpi-1.2.3/examples/hello_c
<br>
<p>But I still got the error :
<br>
====================================================
<br>
[hpc-cluster-38 :32635] [0,0,0] ORTE_ERROR_LOG: Error in file 
<br>
<p>runtime/orte_init_stage1.c at line 626
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
<p>&nbsp;&nbsp;orte_session_dir failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
[hpc-cluster-38 :32635] [0,0,0] ORTE_ERROR_LOG: Error in file 
<br>
<p>runtime/orte_system_init.c at line 42
<br>
[hpc-cluster-38 :32635] [0,0,0] ORTE_ERROR_LOG: Error in file 
<br>
<p>runtime/orte_init.c at line 52
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to initialize properly.  The error occured while
<br>
attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p>====================================
<br>
<p>I can not find the file  &quot;runtime/orte_init_stage1.c&quot;
<br>
<p>It seems that ORTE is not initialized .
<br>
I have built OPEN MPI and installed it correctly . 
<br>
<p>Why ?
<br>
<p>thanks a lot ,
<br>
<p>June 16  2008
<br>
<p><p><p><span class="quotelev1">&gt; Date: Mon, 16 Jun 2008 19:05:06 +0200
</span><br>
<span class="quotelev1">&gt; From: gentryx_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] help me please, about Open MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear Mister Smith,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for installing Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12:51 Mon 16 Jun     , Tony Smith wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I have changed PATH and LD_LIBRARY_PATH:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please be aware that you have to make those changes within your job
</span><br>
<span class="quotelev1">&gt; script. Otherwise they will only affect your local shell.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; But, how can I make sure that the application is run by Open MPI not by mpich-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You could enforce a certain mpirun by using its absolute path, e.g
</span><br>
<span class="quotelev1">&gt; &quot;/ptmp/myname/openmpi123/ompi123_install/bin/mpirun foo&quot; instead of
</span><br>
<span class="quotelev1">&gt; just &quot;mpirun foo&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I deleted /opt/mpich-gm/bin from PATH and added 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You should not need to delete, just add in front of MPICH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Would you please help me with that ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I utterly hope I just did.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Most sincerely yours ;-)
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev1">&gt; I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (\___/)
</span><br>
<span class="quotelev1">&gt; (+'.'+)
</span><br>
<span class="quotelev1">&gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev1">&gt; This is Bunny. Copy and paste Bunny into your 
</span><br>
<span class="quotelev1">&gt; signature to help him gain world domination!
</span><br>
<p>_________________________________________________________________
<br>
Now you can invite friends from Facebook and other groups to join you on Windows Live&#153; Messenger. Add now.
<br>
<a href="https://www.invite2messenger.net/im/?source=TXT_EML_WLH_AddNow_Now">https://www.invite2messenger.net/im/?source=TXT_EML_WLH_AddNow_Now</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5889/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5890.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Previous message:</strong> <a href="5888.php">Andreas Sch&#228;fer: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>In reply to:</strong> <a href="5888.php">Andreas Sch&#228;fer: "Re: [OMPI users] help me please, about Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5899.php">Jeff Squyres: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Reply:</strong> <a href="5899.php">Jeff Squyres: "Re: [OMPI users] help me please, about Open MPI"</a>
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
