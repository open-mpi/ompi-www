<?
$subject_val = "Re: [OMPI users] no allocated resources for the	application........(mpirun)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 11:30:11 2011" -->
<!-- isoreceived="20110719153011" -->
<!-- sent="Tue, 19 Jul 2011 11:29:57 -0400" -->
<!-- isosent="20110719152957" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] no allocated resources for the	application........(mpirun)" -->
<!-- id="4E25A2F5.1020006_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110719171655.79233dazj195ws8w_at_webmail.u-bourgogne.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] no allocated resources for the	application........(mpirun)<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-19 11:29:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16964.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] no allocated resources for the	application........(mpirun)"</a>
<li><strong>Previous message:</strong> <a href="16962.php">Mouhamad Al-Sayed-Ali: "[OMPI users] no allocated resources for the application........(mpirun)"</a>
<li><strong>In reply to:</strong> <a href="16962.php">Mouhamad Al-Sayed-Ali: "[OMPI users] no allocated resources for the application........(mpirun)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16964.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] no allocated resources for the	application........(mpirun)"</a>
<li><strong>Reply:</strong> <a href="16964.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] no allocated resources for the	application........(mpirun)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mouhamad
<br>
<p>Did you check if your Open MPI setup is working with the simple
<br>
programs in the &quot;examples&quot; subdirectory (connectivity_c.c, hello_c.c, 
<br>
ring_c.c)?
<br>
This will tell you if the problem is with Open MPI or with arpege
<br>
(whatever program arpege is).
<br>
You can compile the examples with mpicc and run them with mpirun
<br>
with the same hostfile that you used for arpege.
<br>
<p>Also, make sure your PATH and LD_LIBRARY_PATH point to the bin and
<br>
lib subdirectories of your Open MPI installation.
<br>
You can set this in your .cshrc/.bashrc file.
<br>
See:
<br>
<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p>The Open MPI FAQ are worth reading, and may help you with this and
<br>
other problems:
<br>
<a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
<br>
<p>Just a suggestion.
<br>
Gus Correa
<br>
<p>Mouhamad Al-Sayed-Ali wrote:
<br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  I have been trying to run the executable &quot;arpege&quot; with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --host file arpege
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where file contains the name of the machines. But, I get the following 
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are no allocated resources for the application
</span><br>
<span class="quotelev1">&gt;   arpege
</span><br>
<span class="quotelev1">&gt; that match the requested mapping:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev1">&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone help me, please ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sincerly
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mouhamad Al sayed ali
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16964.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] no allocated resources for the	application........(mpirun)"</a>
<li><strong>Previous message:</strong> <a href="16962.php">Mouhamad Al-Sayed-Ali: "[OMPI users] no allocated resources for the application........(mpirun)"</a>
<li><strong>In reply to:</strong> <a href="16962.php">Mouhamad Al-Sayed-Ali: "[OMPI users] no allocated resources for the application........(mpirun)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16964.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] no allocated resources for the	application........(mpirun)"</a>
<li><strong>Reply:</strong> <a href="16964.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] no allocated resources for the	application........(mpirun)"</a>
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
