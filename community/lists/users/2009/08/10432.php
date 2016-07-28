<?
$subject_val = "Re: [OMPI users] problem with LD_LIBRARY_PATH???";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 10:39:14 2009" -->
<!-- isoreceived="20090819143914" -->
<!-- sent="Wed, 19 Aug 2009 08:39:09 -0600" -->
<!-- isosent="20090819143909" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with LD_LIBRARY_PATH???" -->
<!-- id="71d2d8cc0908190739s6b8ec86bhd219dfe4f146f71d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="380149.94906.qm_at_web28311.mail.ukl.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with LD_LIBRARY_PATH???<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-19 10:39:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10433.php">Lenny Verkhovsky: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<li><strong>Previous message:</strong> <a href="10431.php">Josh Hursey: "Re: [OMPI users] OPEN MPI with self"</a>
<li><strong>In reply to:</strong> <a href="10430.php">Jean Potsam: "[OMPI users] problem with LD_LIBRARY_PATH???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10434.php">Jean Potsam: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<li><strong>Reply:</strong> <a href="10434.php">Jean Potsam: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What OMPI version are you using?
<br>
<p><p><p>On Wed, Aug 19, 2009 at 8:36 AM, Jean Potsam &lt;jeanpotsam_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;           I'm a trying to install openmpi with self. However, I am
</span><br>
<span class="quotelev1">&gt; experiencing some problems with openmpi itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have successfully installed the software and added the path in the
</span><br>
<span class="quotelev1">&gt; .bashrc file as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=&quot;/home/jean/openmpisof/bin:$PATH&quot;
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=&quot;/home/jean/openmpisof/lib:$LD_LIBRARY_PATH&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when i run my mpi application specifying the whole path to mpirun, it works
</span><br>
<span class="quotelev1">&gt; fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jean:$ /home/jean/openmpisof/bin/mpirun mympi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; however if I do:
</span><br>
<span class="quotelev1">&gt; jean:$ mpirun mympi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ################
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 8464) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ######################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using  a single processor desktop PC with linux Ubuntu as the OS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please email me of you have any solution for this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jean
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10432/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10433.php">Lenny Verkhovsky: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<li><strong>Previous message:</strong> <a href="10431.php">Josh Hursey: "Re: [OMPI users] OPEN MPI with self"</a>
<li><strong>In reply to:</strong> <a href="10430.php">Jean Potsam: "[OMPI users] problem with LD_LIBRARY_PATH???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10434.php">Jean Potsam: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<li><strong>Reply:</strong> <a href="10434.php">Jean Potsam: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
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
