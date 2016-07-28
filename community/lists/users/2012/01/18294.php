<?
$subject_val = "Re: [OMPI users] MPI_Allgather problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 07:52:22 2012" -->
<!-- isoreceived="20120127125222" -->
<!-- sent="Fri, 27 Jan 2012 07:52:18 -0500" -->
<!-- isosent="20120127125218" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allgather problem" -->
<!-- id="BB04D1C0-AABF-4E18-90FF-DCEE2DF593F0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEK89dCTKJkzrjDoD4i7F8apN6oDERA0oiRsBN3q+gpfW-uh8Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allgather problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-27 07:52:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18295.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18293.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>In reply to:</strong> <a href="18291.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18292.php">TERRY DONTJE: "Re: [OMPI users] MPI_Allgather problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 27, 2012, at 5:12 AM, Brett Tully wrote:
<br>
<p><span class="quotelev1">&gt; Looking at the change log for 1.5.1 I see:
</span><br>
<span class="quotelev1">&gt; - Use memmove (instead of memcpy) when necessary (e.g., source and destination overlap).
</span><br>
<p>Checking the logs, it looks like that fix was in 1.4.3, too.
<br>
<p>Do you know if your application has sends/receives where the source and destination overlap?
<br>
<p>Just curious -- have you run your application thought a memory checking debugger, like valgrind?  Sometimes application memory corruption can show up in very strange (and non-deterministic) ways.
<br>
<p><span class="quotelev1">&gt; It seems as though this might be a likely candidate for a change that might fix my problems if I am indeed using 1.5.3 following the installation of OpenFOAM?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 27, 2012 at 10:02 AM, Brett Tully wrote:
</span><br>
<span class="quotelev1">&gt; Interesting. In the same set of updates, I installed OpenFOAM from their Ubuntu deb package and it claims to ship with openmpi. I just downloaded their Third-party source tar and unzipped it to see what version of openmpi they are using, and it is 1.5.3. However, when I do man openmpi, or ompi_info, I get the same version as before (1.4.3). How do I determine for sure what is being included when I compile something using mpicc?
</span><br>
<p>You need to be sure that the mpicc (etc.) you are using to compile your app exactly matches the mpirun.  mpicc --showme:version will show you the version that it is using.  In general, you should be able to &quot;which mpicc;which mpirun;which ompi_info&quot; to see where your executables are coming from.  This will likely give you a good clue to ensure that a) everything is matching (you want to ensure that your LD_LIBRARY_PATH also matches, or that your desired libmpi.so is in a system default library path), and b) what version they are. 
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18295.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18293.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>In reply to:</strong> <a href="18291.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18292.php">TERRY DONTJE: "Re: [OMPI users] MPI_Allgather problem"</a>
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
