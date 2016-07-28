<?
$subject_val = "Re: [OMPI users] Backwards compatibility?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 17:47:55 2009" -->
<!-- isoreceived="20090723214755" -->
<!-- sent="Thu, 23 Jul 2009 15:47:42 -0600" -->
<!-- isosent="20090723214742" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Backwards compatibility?" -->
<!-- id="6D030017-D94B-4209-A034-71CDECF64F09_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c19fcadc0907231428k4106c918yfdb1a2fe6b211c8c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Backwards compatibility?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 17:47:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10079.php">Song, Kai Song: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Previous message:</strong> <a href="10077.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel compiler"</a>
<li><strong>In reply to:</strong> <a href="10076.php">David Doria: "[OMPI users] Backwards compatibility?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10080.php">David Doria: "Re: [OMPI users] Backwards compatibility?"</a>
<li><strong>Reply:</strong> <a href="10080.php">David Doria: "Re: [OMPI users] Backwards compatibility?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I doubt those two would work together - however, a combination of  
<br>
1.3.2 and 1.3.3 should.
<br>
<p>You might look at the ABI compatibility discussion threads (there have  
<br>
been several) on this list for the reasons. Basically, binary  
<br>
compatibility is supported starting with 1.3.2 and above.
<br>
<p>On Jul 23, 2009, at 3:28 PM, David Doria wrote:
<br>
<p><span class="quotelev1">&gt; Is OpenMPI backwards compatible? I.e. If I am running 1.3.1 on one
</span><br>
<span class="quotelev1">&gt; machine and 1.3.3 on the rest, is it supposed to work? Or do they all
</span><br>
<span class="quotelev1">&gt; need exactly the same version?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I add this wrong version machine to the machinelist, with a
</span><br>
<span class="quotelev1">&gt; simple &quot;hello world from each process type program&quot;, I see no output
</span><br>
<span class="quotelev1">&gt; what soever, even with the verbose flag - it just sits there
</span><br>
<span class="quotelev1">&gt; indefinitely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David
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
<li><strong>Next message:</strong> <a href="10079.php">Song, Kai Song: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Previous message:</strong> <a href="10077.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel compiler"</a>
<li><strong>In reply to:</strong> <a href="10076.php">David Doria: "[OMPI users] Backwards compatibility?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10080.php">David Doria: "Re: [OMPI users] Backwards compatibility?"</a>
<li><strong>Reply:</strong> <a href="10080.php">David Doria: "Re: [OMPI users] Backwards compatibility?"</a>
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
