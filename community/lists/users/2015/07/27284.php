<?
$subject_val = "Re: [OMPI users] binding/mapping using command line";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 12:26:22 2015" -->
<!-- isoreceived="20150716162622" -->
<!-- sent="Thu, 16 Jul 2015 09:26:18 -0700" -->
<!-- isosent="20150716162618" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] binding/mapping using command line" -->
<!-- id="A4006EA3-4E8B-46B3-A779-40B902636C48_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1436524314.3974.15.camel_at_lenovo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] binding/mapping using command line<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-16 12:26:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27285.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27283.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>In reply to:</strong> <a href="27270.php">Nils Smeds: "[OMPI users] binding/mapping using command line"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for delayed response - been a tad hectic lately.
<br>
<p>I think what you want to do is only provide the &#226;&#128;&#148;slot-list option. This will restrict you to specific cpu(s), and you&#226;&#128;&#153;ll be bound to just those cpu(s). So you don&#226;&#128;&#153;t need th other options - that&#226;&#128;&#153;s what the error message is trying to tell you.
<br>
<p>So if socket 1 has cores 1,3,5,7,9 in it, then you would use
<br>
<p>mpirun &#226;&#128;&#148;slot-list 1,3,5,7,9  &#226;&#128;&#166;
<br>
<p>to get what you want. You might wind up with each process being bound to only one core in that list, though - let me know if you do and I&#226;&#128;&#153;ll see if we need to make a change to allow &#226;&#128;&#148;bind-to none in some fashion
<br>
<p><p><span class="quotelev1">&gt; On Jul 10, 2015, at 3:31 AM, Nils Smeds &lt;nsmeds_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've not found a set of good examples on this, so please give me
</span><br>
<span class="quotelev1">&gt; pointers to any information I might have missed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need to experiment with &quot;odd&quot; process placements and am trying to
</span><br>
<span class="quotelev1">&gt; accomplish this via the command line rather than using a placement
</span><br>
<span class="quotelev1">&gt; file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.8.x
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have successfully used e.g. 
</span><br>
<span class="quotelev1">&gt; -display-map -map-by dist:span -mca rmaps_dist_device $hca_dev
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; together with -bind-to core  to map processes close to a PCI resource.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I'd like to (for comparison) map processes far away from the same
</span><br>
<span class="quotelev1">&gt; resource. The end result is to bind one process per node onto socket 1
</span><br>
<span class="quotelev1">&gt; (not 0) and/or numa node 2 or 3 (instead of 0 or 1). The MPI processes
</span><br>
<span class="quotelev1">&gt; may be bound to a single core or a set of cores, that is not important.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One not working example is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -map-by ppr=1:numa --slot-list 2 -bind-to core
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My reasoning was that I'd on each node would have 4 slots each spanning
</span><br>
<span class="quotelev1">&gt; a single numa node and I'd only use numa node 2 on each node. This I
</span><br>
<span class="quotelev1">&gt; have found is not how it is supposed to work. The error message is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Conflicting directives for binding policy are causing the policy
</span><br>
<span class="quotelev1">&gt;    to be redefined:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      New policy:   socket
</span><br>
<span class="quotelev1">&gt;      Prior policy:  CORE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A more direct way would be to only use socket 1 (not 0) in the system,
</span><br>
<span class="quotelev1">&gt; but trying that I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --map-by socket:span --bind-to socket --slot-list 1  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Conflicting directives for binding policy are causing the policy
</span><br>
<span class="quotelev1">&gt;    to be redefined:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      New policy:   socket
</span><br>
<span class="quotelev1">&gt;      Prior policy:  SOCKET
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pointers to working examples of various non-trivial bindings in
</span><br>
<span class="quotelev1">&gt; particular related to numa are welcome.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /Nils
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27270.php">http://www.open-mpi.org/community/lists/users/2015/07/27270.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27285.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27283.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>In reply to:</strong> <a href="27270.php">Nils Smeds: "[OMPI users] binding/mapping using command line"</a>
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
