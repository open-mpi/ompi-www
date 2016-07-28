<?
$subject_val = "Re: [OMPI users] Failing to MPI run on my linux cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 11:39:52 2014" -->
<!-- isoreceived="20140108163952" -->
<!-- sent="Wed, 8 Jan 2014 16:39:48 +0000" -->
<!-- isosent="20140108163948" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Failing to MPI run on my linux cluster" -->
<!-- id="722647FB-9E50-45E8-AA9F-6C41DC309016_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CABsFK0QgbobmdhrL-yDDj3OpXpVcuMedo7HZzNaXnwptdNkF4w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Failing to MPI run on my linux cluster<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 11:39:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23338.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>Previous message:</strong> <a href="23336.php">Axel Vi&#240;arsson: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<li><strong>In reply to:</strong> <a href="23336.php">Axel Vi&#240;arsson: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23342.php">John Hearns: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds like you are having filesystem permission issues -- i.e., your app is trying to write to a file that is not writable (i.e., this doesn't sound like an MPI issue).
<br>
<p><p>On Jan 8, 2014, at 11:31 AM, Axel Vi&#240;arsson &lt;axelvinna_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Ralph, now I can least run the examples.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My app is called FDS or Fire dynamics simulator, if someone is familiar with that or just those errors i am getting then i would appreciate any help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Axel 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2014/1/8 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; I can't speak to your app as I don't know what it does. However, you *do* have to compile the example first! :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A simple &quot;make&quot; in the examples directory will create all the binaries
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 8, 2014, at 7:29 AM, Axel Vi&#240;arsson &lt;axelvinna_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hey all
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My cluster consist of 2 workstations with hyper threaded Intel Xeon processors and an old Dell dual core computer to control them.
</span><br>
<span class="quotelev2">&gt;&gt; I am failing to mpirun on the cluster.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1.When executing as user
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [prufa_at_master]$ mpirun -np 16 --hostfile /home/prufa/prufa.mpi_hostfile fds_mpi SST1SV20.fds
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Process   0 of  15 is running .....
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; forrtl: Permission denied
</span><br>
<span class="quotelev2">&gt;&gt; forrtl: severe (9): permission to access file denied, unit 4, file /share/apps/FDS/FDS6/FDS6/
</span><br>
<span class="quotelev2">&gt;&gt; Examples/Verkis/FDS6MPI_SST_1STEPVALUES_VEL_20.smv
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. Executing same command
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; forrtl: severe (47): write to READONLY file, unit 4, file /share/apps/FDS/FDS6/FDS6/Examples/Verkis/FDS6MPI_SST_1STEPVALUES_VEL_20.smv
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. When i try one of openmpi examples
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [prufa_at_master]$ mpirun -np 18 /share/apps/openmpi-1.6.5/
</span><br>
<span class="quotelev2">&gt;&gt; examples/hello_c.c 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to launch the specified application as it could not access
</span><br>
<span class="quotelev2">&gt;&gt; or execute an executable:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Executable: /share/apps/openmpi-1.6.5/examples/hello_c.c
</span><br>
<span class="quotelev2">&gt;&gt; Node: w0094.stofa.is
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 18 total processes failed to start
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please could you guys help me with this problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt; Axel
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="23338.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>Previous message:</strong> <a href="23336.php">Axel Vi&#240;arsson: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<li><strong>In reply to:</strong> <a href="23336.php">Axel Vi&#240;arsson: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23342.php">John Hearns: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
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
