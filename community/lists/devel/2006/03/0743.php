<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar  6 09:53:03 2006" -->
<!-- isoreceived="20060306145303" -->
<!-- sent="Mon, 6 Mar 2006 11:52:56 -0300" -->
<!-- isosent="20060306145256" -->
<!-- name="Leslie Watter" -->
<!-- email="watter_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Applications" -->
<!-- id="62f43a280603060652u562f250n_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="95EF78D5-F35C-4CCF-8031-519306C203B6_at_cs.unm.edu" -->
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
<strong>From:</strong> Leslie Watter (<em>watter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-06 09:52:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0744.php">Jeff Squyres: "[OMPI devel] Changes to configure"</a>
<li><strong>Previous message:</strong> <a href="0742.php">Galen M. Shipman: "Re: [OMPI devel] MPI Applications"</a>
<li><strong>In reply to:</strong> <a href="0742.php">Galen M. Shipman: "Re: [OMPI devel] MPI Applications"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many Thanks Galen,
<br>
<p>I've been running an implementation of parallel Fast Fourier Transform
<br>
here for 1 week and it works fine.
<br>
<p>I'll try those benchmarks today and tomorrow.
<br>
<p>Cheers,
<br>
<p>LEslie
<br>
<p><p>2006/3/5, Galen M. Shipman &lt;gshipman_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi Leslie,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To start I would try running the Intel test suite, you can find this
</span><br>
<span class="quotelev1">&gt; here: <a href="http://www-unix.mcs.anl.gov/mpi/mpi-test/tsuite.html">http://www-unix.mcs.anl.gov/mpi/mpi-test/tsuite.html</a>  there are
</span><br>
<span class="quotelev1">&gt; also several other test suites available on this site, this will give
</span><br>
<span class="quotelev1">&gt; you correctness first.
</span><br>
<span class="quotelev1">&gt; For benchmarks you may try the NAS Parallel Benchmarks found here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.nas.nasa.gov/Software/NPB/">http://www.nas.nasa.gov/Software/NPB/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 4, 2006, at 9:23 AM, Leslie Watter wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Some time ago, I was trying to implement a new BTL to openmpi.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now it works here, but I need to test it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Someone (sorry, I've forgot who), told me to use NetPIPE to test
</span><br>
<span class="quotelev2">&gt; &gt; the BTL layer.
</span><br>
<span class="quotelev2">&gt; &gt; Ok, I used it, but now I need some parallel applications that uses
</span><br>
<span class="quotelev2">&gt; &gt; openmpi.
</span><br>
<span class="quotelev2">&gt; &gt; NetPIPE uses a ping-pong test between 2 machines to evaluate its test.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If anybody could send me an application that uses openmpi,
</span><br>
<span class="quotelev2">&gt; &gt; I can return with the results after its execution.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Why this? I need to compare the execution time just changing the
</span><br>
<span class="quotelev2">&gt; &gt; BTL protocol.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here I have a cluster with 16 machines (Athlon 1.2 128RAM with
</span><br>
<span class="quotelev2">&gt; &gt; 100Mbits ethernet and a 1Giga Switch), using openmpi-1.0 stable (with
</span><br>
<span class="quotelev2">&gt; &gt; modifications that include LLC BTL [ I plan to release my code in a
</span><br>
<span class="quotelev2">&gt; &gt; website as soon as I have the results and the analysis done. ].
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What kind of application I'm looking for?
</span><br>
<span class="quotelev2">&gt; &gt; - applications that uses TCP btl
</span><br>
<span class="quotelev2">&gt; &gt; - applications that can run in 2,4, 8 and/or 16 machines
</span><br>
<span class="quotelev2">&gt; &gt; - preferably applications that are message passing intensive
</span><br>
<span class="quotelev2">&gt; &gt; (optional)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Many Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Leslie
</span><br>
<span class="quotelev2">&gt; &gt; PS: I want to put the results of execution time in mine master thesis.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Leslie H. Watter
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
Leslie H. Watter
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0744.php">Jeff Squyres: "[OMPI devel] Changes to configure"</a>
<li><strong>Previous message:</strong> <a href="0742.php">Galen M. Shipman: "Re: [OMPI devel] MPI Applications"</a>
<li><strong>In reply to:</strong> <a href="0742.php">Galen M. Shipman: "Re: [OMPI devel] MPI Applications"</a>
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
