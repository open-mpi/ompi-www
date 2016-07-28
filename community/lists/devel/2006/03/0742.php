<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Mar  5 13:46:27 2006" -->
<!-- isoreceived="20060305184627" -->
<!-- sent="Sun, 5 Mar 2006 11:45:42 -0700" -->
<!-- isosent="20060305184542" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Applications" -->
<!-- id="95EF78D5-F35C-4CCF-8031-519306C203B6_at_cs.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="62f43a280603040823x95866aeg_at_mail.gmail.com" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-05 13:45:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0743.php">Leslie Watter: "Re: [OMPI devel] MPI Applications"</a>
<li><strong>Previous message:</strong> <a href="0741.php">Jeff Squyres: "Re: [OMPI devel] C++ bool type reduction failing"</a>
<li><strong>In reply to:</strong> <a href="0740.php">Leslie Watter: "[OMPI devel] MPI Applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0743.php">Leslie Watter: "Re: [OMPI devel] MPI Applications"</a>
<li><strong>Reply:</strong> <a href="0743.php">Leslie Watter: "Re: [OMPI devel] MPI Applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Leslie,
<br>
<p>To start I would try running the Intel test suite, you can find this  
<br>
here: <a href="http://www-unix.mcs.anl.gov/mpi/mpi-test/tsuite.html">http://www-unix.mcs.anl.gov/mpi/mpi-test/tsuite.html</a>  there are  
<br>
also several other test suites available on this site, this will give  
<br>
you correctness first.
<br>
For benchmarks you may try the NAS Parallel Benchmarks found here:  
<br>
<a href="http://www.nas.nasa.gov/Software/NPB/">http://www.nas.nasa.gov/Software/NPB/</a>
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p>On Mar 4, 2006, at 9:23 AM, Leslie Watter wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some time ago, I was trying to implement a new BTL to openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now it works here, but I need to test it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Someone (sorry, I've forgot who), told me to use NetPIPE to test  
</span><br>
<span class="quotelev1">&gt; the BTL layer.
</span><br>
<span class="quotelev1">&gt; Ok, I used it, but now I need some parallel applications that uses  
</span><br>
<span class="quotelev1">&gt; openmpi.
</span><br>
<span class="quotelev1">&gt; NetPIPE uses a ping-pong test between 2 machines to evaluate its test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If anybody could send me an application that uses openmpi,
</span><br>
<span class="quotelev1">&gt; I can return with the results after its execution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why this? I need to compare the execution time just changing the  
</span><br>
<span class="quotelev1">&gt; BTL protocol.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here I have a cluster with 16 machines (Athlon 1.2 128RAM with
</span><br>
<span class="quotelev1">&gt; 100Mbits ethernet and a 1Giga Switch), using openmpi-1.0 stable (with
</span><br>
<span class="quotelev1">&gt; modifications that include LLC BTL [ I plan to release my code in a
</span><br>
<span class="quotelev1">&gt; website as soon as I have the results and the analysis done. ].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What kind of application I'm looking for?
</span><br>
<span class="quotelev1">&gt; - applications that uses TCP btl
</span><br>
<span class="quotelev1">&gt; - applications that can run in 2,4, 8 and/or 16 machines
</span><br>
<span class="quotelev1">&gt; - preferably applications that are message passing intensive  
</span><br>
<span class="quotelev1">&gt; (optional)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leslie
</span><br>
<span class="quotelev1">&gt; PS: I want to put the results of execution time in mine master thesis.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Leslie H. Watter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0743.php">Leslie Watter: "Re: [OMPI devel] MPI Applications"</a>
<li><strong>Previous message:</strong> <a href="0741.php">Jeff Squyres: "Re: [OMPI devel] C++ bool type reduction failing"</a>
<li><strong>In reply to:</strong> <a href="0740.php">Leslie Watter: "[OMPI devel] MPI Applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0743.php">Leslie Watter: "Re: [OMPI devel] MPI Applications"</a>
<li><strong>Reply:</strong> <a href="0743.php">Leslie Watter: "Re: [OMPI devel] MPI Applications"</a>
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
