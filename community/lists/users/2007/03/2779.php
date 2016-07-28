<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 12 16:04:30 2007" -->
<!-- isoreceived="20070312200430" -->
<!-- sent="Mon, 12 Mar 2007 14:04:25 -0600" -->
<!-- isosent="20070312200425" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LSF &amp;amp; OpenMPI" -->
<!-- id="C21B0E69.1FA7%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F1D1F3F0-303E-4F12-A21B-23C4751579D9_at_ieee.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-12 16:04:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2780.php">Ben Allan: "Re: [OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2778.php">Michael: "[OMPI users] LSF &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2778.php">Michael: "[OMPI users] LSF &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2796.php">Renato Golin: "Re: [OMPI users] LSF &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2796.php">Renato Golin: "Re: [OMPI users] LSF &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....well, the fact is that OpenMPI may not support LSF in the sense you
<br>
may be asking. As you have noticed, we don't actually read LSF enviro
<br>
variables to get the allocated node info nor interface to LSF for launch.
<br>
Obviously, as you have done, there are ways to work around that limitation.
<br>
We don't pass the full environment on to the nodes as (in most cases) that
<br>
can cause problems (e.g., with the DISPLAY value).
<br>
<p>I have been asked about providing native LSF support and hope to get to that
<br>
in the not-too-distant future, but have no access to an LSF machine to
<br>
verify operation (I may have a cooperative user, though, who will test for
<br>
me - I would welcome another!).
<br>
<p>Ralph
<br>
<p><p><p>On 3/12/07 1:52 PM, &quot;Michael&quot; &lt;mklus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What is the status of LSF and OpenMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running on a major HPC system using GM &amp; LSF and we have to use a
</span><br>
<span class="quotelev1">&gt; number of workarounds so that we can use OpenMPI.  Specifically,
</span><br>
<span class="quotelev1">&gt; using the scripts on this system we have to have our csh file source
</span><br>
<span class="quotelev1">&gt; a file to set up the environment on the nodes.  Using OpenMPI's
</span><br>
<span class="quotelev1">&gt; mpirun directly does not work because at the very minimum the hosts
</span><br>
<span class="quotelev1">&gt; to run on are not available to it, I had a work around but there it
</span><br>
<span class="quotelev1">&gt; seems that the environment is not passed to the nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The notes from the support people indicate that the problem is that
</span><br>
<span class="quotelev1">&gt; openmpi's mpirun command doesn't recognize the &quot;-gm-copy-env&quot;
</span><br>
<span class="quotelev1">&gt; option.  Does this mean anything to anyone?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  Open MPI: 1.1.2
</span><br>
<span class="quotelev1">&gt;     Open MPI SVN revision: r12073
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: sm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: gm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: mvapi (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have there been any improvements in the compatibility of OpenMPI with
</span><br>
<span class="quotelev1">&gt; LSF since version 1.1.2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone in the OpenMPI team have access to a system using the LSF
</span><br>
<span class="quotelev1">&gt; batch queueing system?  Is an machine with Gm and LSF different yet?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2780.php">Ben Allan: "Re: [OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2778.php">Michael: "[OMPI users] LSF &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2778.php">Michael: "[OMPI users] LSF &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2796.php">Renato Golin: "Re: [OMPI users] LSF &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2796.php">Renato Golin: "Re: [OMPI users] LSF &amp; OpenMPI"</a>
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
