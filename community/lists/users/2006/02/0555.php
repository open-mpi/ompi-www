<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  2 00:51:04 2006" -->
<!-- isoreceived="20060202055104" -->
<!-- sent="Wed, 1 Feb 2006 23:50:51 -0600" -->
<!-- isosent="20060202055051" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] tcsh 'Unmatched &amp;quot;.' error on localhost" -->
<!-- id="0EB64A78-3360-4E4C-BC0A-CA6ED9526EFB_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="n54q3i7kvh.fsf_at_iris03.slac.stanford.edu" -->
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
<strong>Date:</strong> 2006-02-02 00:50:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0556.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Previous message:</strong> <a href="0554.php">Glenn Morris: "[O-MPI users] tcsh 'Unmatched &quot;.' error on localhost"</a>
<li><strong>In reply to:</strong> <a href="0554.php">Glenn Morris: "[O-MPI users] tcsh 'Unmatched &quot;.' error on localhost"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yowza -- what silly typos.
<br>
<p>Fixed on the trunk; will be committed on the release branch  
<br>
tomorrow.  Thanks again!
<br>
<p><p>On Feb 1, 2006, at 4:52 PM, Glenn Morris wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using v1.0.1, with tcsh as user login shell, trying to mpirun a job on
</span><br>
<span class="quotelev1">&gt; the localhost that involves tcsh produces an error from tcsh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.g.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hostfile = &quot;localhost&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --hostfile ./hostfile \
</span><br>
<span class="quotelev1">&gt;   --mca pls_rsh_agent ssh ... /bin/tcsh -c hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; results in the error `Unmatched &quot;.' from tcsh. /bin/bash is fine, as
</span><br>
<span class="quotelev1">&gt; is any host which is not the local machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tcsh -V showed the warning to come from one of the standard files in
</span><br>
<span class="quotelev1">&gt; /etc/profile.d/, which was trying to manipulate ${path}.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe the problem is caused by the \n added to the end of PATH and
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH in pls_rsh_module.c at lines 749 and 762. tcsh does
</span><br>
<span class="quotelev1">&gt; not seem to like these, and removing them stops the error message
</span><br>
<span class="quotelev1">&gt; occurring.
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
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0556.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Previous message:</strong> <a href="0554.php">Glenn Morris: "[O-MPI users] tcsh 'Unmatched &quot;.' error on localhost"</a>
<li><strong>In reply to:</strong> <a href="0554.php">Glenn Morris: "[O-MPI users] tcsh 'Unmatched &quot;.' error on localhost"</a>
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
