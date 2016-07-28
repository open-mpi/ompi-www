<?
$subject_val = "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  3 18:45:05 2014" -->
<!-- isoreceived="20140203234505" -->
<!-- sent="Mon, 3 Feb 2014 15:44:13 -0800" -->
<!-- isosent="20140203234413" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory" -->
<!-- id="4CAC945E-7221-4863-AA0C-F3DD546092D7_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52F011BD.3080404_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-03 18:44:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23553.php">Jeff Squyres (jsquyres): "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create	the, sub-directory"</a>
<li><strong>Previous message:</strong> <a href="23551.php">Reuti: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>In reply to:</strong> <a href="23550.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23553.php">Jeff Squyres (jsquyres): "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create	the, sub-directory"</a>
<li><strong>Reply:</strong> <a href="23553.php">Jeff Squyres (jsquyres): "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create	the, sub-directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 3, 2014, at 2:01 PM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 02/03/2014 04:20 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 3, 2014, at 1:13 PM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 02/03/2014 03:59 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Very strange - even if you kill the job with SIGTERM, or have processes that segfault, OMPI should clean itself up and remove those session directories. Granted, the 1.6 series isn't as good about doing so as the 1.7 series, but it at least to-date has done pretty well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok, one more information here that may matter: All sequential tests are launched *without* mpiexec...  I don't know if the &quot;cleanup&quot; phase is done by mpiexec or the binaries...
</span><br>
<span class="quotelev2">&gt;&gt; Ah, yes that would be a source of the problem! We can't guarantee cleanup if you just kill the procs or they segfault *unless* mpiexec is used to launch the job. What are you using to launch? Most resource managers provide an &quot;epilog&quot; capability for precisely this purpose as all MPIs would display the same issue.
</span><br>
<span class="quotelev1">&gt; For the sequential jobs, we just launch the tests on the &quot;command line&quot;... no resource manager is ever used.  For the jobs which requires more than 1 process, we have &quot;mpiexec -n ...&quot; added to the command line...
</span><br>
<p>Understood. FWIW, if those sequential jobs call &quot;MPI_Init&quot;, then they will create a session directory tree. I've been removing that in the 1.7 series so it only gets created when needed, but not in the 1.6 series.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which should delete files that shouldn't exists... ;-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But, IMHO, I still think OpenMPI should &quot;choose&quot; another directory name if it can't create it because a poor file exists!
</span><br>
<span class="quotelev2">&gt;&gt; We could do that - but now we get into the bottomless pit of trying every possible combination of directory names, and ensuring that every process comes up with the same answer! Remember, the session dir is where the shared memory regions rendezvous, so every process on a node would have to find the same place
</span><br>
<span class="quotelev1">&gt; ok.  Just for my knowledge: that means if I launch 2 processes on a single node and they have to communicate, they will do it by the files in /tmp?
</span><br>
<p>They won't communicate via the files - they just use the files as a rendezvous point to exchange shared memory region pointers.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How can all users be aware that they have to cleanup such files?
</span><br>
<span class="quotelev2">&gt;&gt; Given how long 1.6.x has been out there, and that this is about the only time I've heard of a problem, I'm not sure this is a general enough issue to merit the concern
</span><br>
<span class="quotelev1">&gt; Ok.  I did just verified on 8 other computers/architectures that are running the same tests: there is only 1 which have files in the directory level of /tmp/openmpi-sessions-${USER}*
</span><br>
<span class="quotelev1">&gt; Since we do that kind of testing since many years, I also agree it is not a widespread issue...  But it just occured 2 times in the last 3 days!!! :-/
</span><br>
<p>Bummer :-(
<br>
<p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe a good compromise would be to have the error message to tell there is a file with the same name of the directory chosen?
</span><br>
<span class="quotelev2">&gt;&gt; I can make that change - good suggestion.
</span><br>
<span class="quotelev1">&gt; ok, thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or add a new entry to the FAQ to help users find the workaround you proposed... ;-)
</span><br>
<span class="quotelev2">&gt;&gt; we can try to do that too
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I may suggest to test the behavior of 1.7.x... what about this: Have a test case that creates a bunch of files (from 0 to 65536) in /tmp/openmpi-sessions-${USER}... before launching an executable without mpirun... &gt;:)
</span><br>
<p>Ick - it will actually only conflict if/when the pid's wrap, so it's a pretty rare issue.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, thanks a lot!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23553.php">Jeff Squyres (jsquyres): "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create	the, sub-directory"</a>
<li><strong>Previous message:</strong> <a href="23551.php">Reuti: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>In reply to:</strong> <a href="23550.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23553.php">Jeff Squyres (jsquyres): "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create	the, sub-directory"</a>
<li><strong>Reply:</strong> <a href="23553.php">Jeff Squyres (jsquyres): "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create	the, sub-directory"</a>
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
