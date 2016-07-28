<?
$subject_val = "Re: [OMPI users] Running on crashing nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 08:18:30 2010" -->
<!-- isoreceived="20100924121830" -->
<!-- sent="Fri, 24 Sep 2010 08:18:23 -0400" -->
<!-- isosent="20100924121823" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running on crashing nodes" -->
<!-- id="E6B2C526-4EAA-4869-82C2-8E4697BCB61C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTim7KMVLQHuJfR1aq4MkA-YN0OkgY9JF0YMjkWUU_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running on crashing nodes<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 08:18:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14319.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14317.php">Jeff Squyres: "Re: [OMPI users] Display in terminal of error message using throw std::runtime_error on distant node..."</a>
<li><strong>In reply to:</strong> <a href="14311.php">Andrei Fokau: "Re: [OMPI users] Running on crashing nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14350.php">Randolph Pullen: "Re: [OMPI users] Running on crashing nodes"</a>
<li><strong>Reply:</strong> <a href="14350.php">Randolph Pullen: "Re: [OMPI users] Running on crashing nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As one of the Open MPI developers actively working on the MPI layer stabilization/recover feature set, I don't think we can give you a specific timeframe for availability, especially availability in a stable release. Once the initial functionality is finished, we will open it up for user testing by making a public branch available. After addressing the concerns highlighted by public testing, we will attempt to work this feature into the mainline trunk and eventual release.
<br>
<p>Unfortunately it is difficult to assess the time needed to go through these development stages. What I can tell you is that the work to this point on the MPI layer is looking promising, and that as soon as we feel that the code is ready we will make it available to the public for further testing.
<br>
<p>-- Josh
<br>
<p>On Sep 24, 2010, at 3:37 AM, Andrei Fokau wrote:
<br>
<p><span class="quotelev1">&gt; Ralph, could you tell us when this functionality will be available in the stable version? A rough estimate will be fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 24, 2010 at 01:24, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; In a word, no. If a node crashes, OMPI will abort the currently-running job if it had processes on that node. There is no current ability to &quot;ride-thru&quot; such an event.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That said, there is work being done to support &quot;ride-thru&quot;. Most of that is in the current developer's code trunk, and more is coming, but I wouldn't consider it production-quality just yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically, the code that does what you specify below is done and works. It is recovery of the MPI job itself (collectives, lost messages, etc.) that remains to be completed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 23, 2010 at 7:22 AM, Andrei Fokau &lt;andrei.fokau_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our cluster has a number of nodes which have high probability to crash, so it happens quite often that calculations stop due to one node getting down. May be you know if it is possible to block the crashed nodes during run-time when running with OpenMPI? I am asking about principal possibility to program such behavior. Does OpenMPI allow such dynamic checking? The scheme I am curious about is the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. A code starts its tasks via mpirun on several nodes
</span><br>
<span class="quotelev1">&gt; 2. At some moment one node gets down
</span><br>
<span class="quotelev1">&gt; 3. The code realizes that the node is down (the results are lost) and excludes it from the list of nodes to run its tasks on
</span><br>
<span class="quotelev1">&gt; 4. At later moment the user restarts the crashed node
</span><br>
<span class="quotelev1">&gt; 5. The code notices that the node is up again, and puts it back to the list of active nodes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Andrei
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
<span class="quotelev1">&gt; &lt;ATT00001..txt&gt;
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://www.cs.indiana.edu/~jjhursey">http://www.cs.indiana.edu/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14319.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14317.php">Jeff Squyres: "Re: [OMPI users] Display in terminal of error message using throw std::runtime_error on distant node..."</a>
<li><strong>In reply to:</strong> <a href="14311.php">Andrei Fokau: "Re: [OMPI users] Running on crashing nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14350.php">Randolph Pullen: "Re: [OMPI users] Running on crashing nodes"</a>
<li><strong>Reply:</strong> <a href="14350.php">Randolph Pullen: "Re: [OMPI users] Running on crashing nodes"</a>
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
