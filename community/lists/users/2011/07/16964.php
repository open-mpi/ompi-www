<?
$subject_val = "Re: [OMPI users] no allocated resources for the	application........(mpirun)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 12:08:52 2011" -->
<!-- isoreceived="20110719160852" -->
<!-- sent="Tue, 19 Jul 2011 18:08:37 +0200" -->
<!-- isosent="20110719160837" -->
<!-- name="Mouhamad Al-Sayed-Ali" -->
<!-- email="Mouhamad.Al-Sayed-Ali_at_[hidden]" -->
<!-- subject="Re: [OMPI users] no allocated resources for the	application........(mpirun)" -->
<!-- id="20110719180837.212234gb3dihg64g_at_webmail.u-bourgogne.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E25A2F5.1020006_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Mouhamad Al-Sayed-Ali (<em>Mouhamad.Al-Sayed-Ali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-19 12:08:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16965.php">Paul Kapinos: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<li><strong>Previous message:</strong> <a href="16963.php">Gus Correa: "Re: [OMPI users] no allocated resources for the	application........(mpirun)"</a>
<li><strong>In reply to:</strong> <a href="16963.php">Gus Correa: "Re: [OMPI users] no allocated resources for the	application........(mpirun)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus Correa,
<br>
<p>&nbsp;&nbsp;Thank you for your response.
<br>
<p>&nbsp;&nbsp;I'll check what your saying and see if it'll work.
<br>
<p>many thanks
<br>
<p>sincerly
<br>
<p>Mouhamad
<br>
Gus Correa &lt;gus_at_[hidden]&gt; a &#233;crit&#160;:
<br>
<p><span class="quotelev1">&gt; Hi Mouhamad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you check if your Open MPI setup is working with the simple
</span><br>
<span class="quotelev1">&gt; programs in the &quot;examples&quot; subdirectory (connectivity_c.c,  
</span><br>
<span class="quotelev1">&gt; hello_c.c, ring_c.c)?
</span><br>
<span class="quotelev1">&gt; This will tell you if the problem is with Open MPI or with arpege
</span><br>
<span class="quotelev1">&gt; (whatever program arpege is).
</span><br>
<span class="quotelev1">&gt; You can compile the examples with mpicc and run them with mpirun
</span><br>
<span class="quotelev1">&gt; with the same hostfile that you used for arpege.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, make sure your PATH and LD_LIBRARY_PATH point to the bin and
</span><br>
<span class="quotelev1">&gt; lib subdirectories of your Open MPI installation.
</span><br>
<span class="quotelev1">&gt; You can set this in your .cshrc/.bashrc file.
</span><br>
<span class="quotelev1">&gt; See:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Open MPI FAQ are worth reading, and may help you with this and
</span><br>
<span class="quotelev1">&gt; other problems:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just a suggestion.
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mouhamad Al-Sayed-Ali wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been trying to run the executable &quot;arpege&quot; with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 --host file arpege
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where file contains the name of the machines. But, I get the  
</span><br>
<span class="quotelev2">&gt;&gt; following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; There are no allocated resources for the application
</span><br>
<span class="quotelev2">&gt;&gt;  arpege
</span><br>
<span class="quotelev2">&gt;&gt; that match the requested mapping:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev2">&gt;&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev2">&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt; -----------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone help me, please ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sincerly
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mouhamad Al sayed ali
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16965.php">Paul Kapinos: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<li><strong>Previous message:</strong> <a href="16963.php">Gus Correa: "Re: [OMPI users] no allocated resources for the	application........(mpirun)"</a>
<li><strong>In reply to:</strong> <a href="16963.php">Gus Correa: "Re: [OMPI users] no allocated resources for the	application........(mpirun)"</a>
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
