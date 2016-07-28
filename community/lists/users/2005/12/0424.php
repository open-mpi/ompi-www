<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  6 13:28:33 2005" -->
<!-- isoreceived="20051206182833" -->
<!-- sent="Tue, 6 Dec 2005 13:28:12 -0500" -->
<!-- isosent="20051206182812" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] MCA paffinity_linux warning" -->
<!-- id="AD3BF644-3687-490C-85CB-54FF0163EF92_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051206175111.GB17042_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-12-06 13:28:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0425.php">Tim S. Woodall: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Previous message:</strong> <a href="0423.php">Daryl W. Grunau: "[O-MPI users] MCA paffinity_linux warning"</a>
<li><strong>In reply to:</strong> <a href="0423.php">Daryl W. Grunau: "[O-MPI users] MCA paffinity_linux warning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this on a BProc cluster?
<br>
<p>If so, Tim Woodall pointed this out to me last week and alas, I  
<br>
haven't committed the fix yet.  It's not your fault, it's a mistake  
<br>
on our part; but it's a harmless -- albeit annoying -- warning (this  
<br>
is only on the trunk, not in the release branch).
<br>
<p><p>On Dec 6, 2005, at 12:51 PM, Daryl W. Grunau wrote:
<br>
<p><span class="quotelev1">&gt; Hi, I'm running OMPI 1.1a1r8378 and get the following warnings  
</span><br>
<span class="quotelev1">&gt; every time I
</span><br>
<span class="quotelev1">&gt; run.  I'm not setting any such value at runtime:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;    WARNING: A user-supplied value attempted to override the read- 
</span><br>
<span class="quotelev1">&gt; only MCA
</span><br>
<span class="quotelev1">&gt;    parameter named &quot;paffinity_linux_have_cpu_set_t&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    The user-supplied value was ignored.
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;    WARNING: A user-supplied value attempted to override the read- 
</span><br>
<span class="quotelev1">&gt; only MCA
</span><br>
<span class="quotelev1">&gt;    parameter named &quot;paffinity_linux_have_cpu_set_t&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    The user-supplied value was ignored.
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do I need to specify a compile-time flag to silence this?  I tried  
</span><br>
<span class="quotelev1">&gt; to set
</span><br>
<span class="quotelev1">&gt; paffinity_linux_have_cpu_set_t = 0 in ~/.openmpi/mca-params.conf to no
</span><br>
<span class="quotelev1">&gt; avail.  Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daryl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 			***** Correspondence *****
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
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0425.php">Tim S. Woodall: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Previous message:</strong> <a href="0423.php">Daryl W. Grunau: "[O-MPI users] MCA paffinity_linux warning"</a>
<li><strong>In reply to:</strong> <a href="0423.php">Daryl W. Grunau: "[O-MPI users] MCA paffinity_linux warning"</a>
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
