<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  8 12:16:45 2005" -->
<!-- isoreceived="20051108171645" -->
<!-- sent="Tue, 8 Nov 2005 12:16:38 -0500" -->
<!-- isosent="20051108171638" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] help with openmpi rc5r8005" -->
<!-- id="e13540feadaa936a2cafcfc85d74c9ae_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52B7AD4481DAB448AA2A477E44A609F20142CA39_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-08 12:16:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0288.php">Jeff Squyres: "[O-MPI users] Open MPI @SC2005"</a>
<li><strong>Previous message:</strong> <a href="0286.php">Borenstein, Bernard S: "[O-MPI users] help with openmpi rc5r8005"</a>
<li><strong>In reply to:</strong> <a href="0286.php">Borenstein, Bernard S: "[O-MPI users] help with openmpi rc5r8005"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We discovered this exact same problem just a few days ago.  It was  
<br>
fixed in r8010 (slightly after your version).  Would you mind updating  
<br>
and trying again?  (thanks for your patience...)
<br>
<p>There are also some datatype fixes pending on the trunk right now that  
<br>
have not yet been fully vetted and brought over to the v1.0 branch.  As  
<br>
far as I know, they do not affect the NASA Overflow code, though.
<br>
<p><p>On Nov 8, 2005, at 11:29 AM, Borenstein, Bernard S wrote:
<br>
<p><span class="quotelev1">&gt; I am again trying to build and run the Nasa Overflow 1.8ab version  
</span><br>
<span class="quotelev1">&gt; using Open MPI and have run into this error message :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [hsd653:05053] *** An error occurred in MPI_Allreduce: the reduction  
</span><br>
<span class="quotelev1">&gt; operation M
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PI_OP_MIN is not defined on the MPI_DBLPREC datatype
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [hsd653:05053] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [hsd653:05053] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [hsd653:05053] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [hsd652:04317] *** An error occurred in MPI_Allreduce: the reduction  
</span><br>
<span class="quotelev1">&gt; operation M
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PI_OP_MIN is not defined on the MPI_DBLPREC datatype
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [hsd652:04317] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [hsd652:04317] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [hsd652:04317] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: mpirun encountered an abnormal exit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This means that mpirun exited before it received notification that all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; started processes had terminated.&#160; You should double check and ensure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that there are no runaway processes still executing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas why this is happening??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bernie Borenstein
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Boeing Company
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0288.php">Jeff Squyres: "[O-MPI users] Open MPI @SC2005"</a>
<li><strong>Previous message:</strong> <a href="0286.php">Borenstein, Bernard S: "[O-MPI users] help with openmpi rc5r8005"</a>
<li><strong>In reply to:</strong> <a href="0286.php">Borenstein, Bernard S: "[O-MPI users] help with openmpi rc5r8005"</a>
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
