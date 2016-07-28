<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 30 10:38:59 2006" -->
<!-- isoreceived="20060830143859" -->
<!-- sent="Wed, 30 Aug 2006 08:38:57 -0600" -->
<!-- isosent="20060830143857" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] little endian - big endian conversion" -->
<!-- id="1156948737.26820.12.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="C11B19EF.24D71%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-30 10:38:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1803.php">chris.neale_at_[hidden]: "[OMPI users] short message maximum and btl_tcp_eager_limit"</a>
<li><strong>Previous message:</strong> <a href="1801.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<li><strong>In reply to:</strong> <a href="1801.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1804.php">Eng. A.A. Isola: "Re: [OMPI users] little endian - big endian conversion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Correct.  With the exception of MPI_BOOL / MPI_LOGICAL, we do not handle
<br>
sending datatypes that are different sizes on the sender and receiver.
<br>
So sending an MPI_LONG from a 32 bit machine to a 64 bit machine will
<br>
not work correctly.
<br>
<p>Brian
<br>
<p>On Wed, 2006-08-30 at 10:33 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Oops!  My mistake -- thanks for the correction...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am still correct in thinking that we do not properly handle *size*
</span><br>
<span class="quotelev1">&gt; endianness, right?  Meaning that if sizeof(long) on one node is different
</span><br>
<span class="quotelev1">&gt; than sizeof(long) on another, running an MPI job across those two nodes will
</span><br>
<span class="quotelev1">&gt; cause Bad Things to occur if you try to exchange MPI_LONGs between the MPI
</span><br>
<span class="quotelev1">&gt; processes, right?  (and similar for other datatypes that are different
</span><br>
<span class="quotelev1">&gt; sizes)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/30/06 9:38 AM, &quot;Brian Barrett&quot; &lt;brbarret_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Actually, Jeff is incorrect.  As of Open MPI 1.1, we do support endian
</span><br>
<span class="quotelev2">&gt; &gt; conversion between peers.  It has not been as well tested as the rest of
</span><br>
<span class="quotelev2">&gt; &gt; the code base, but it should work.  Please let us know if you have any
</span><br>
<span class="quotelev2">&gt; &gt; issues with that mode and we'll work to resolve them.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, 2006-08-30 at 06:36 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI does not yet support endian conversion between peers in a single
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI job.  It's on the to-do list, but it's been a lower priority than some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; other features and issues.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 8/30/06 4:12 AM, &quot;Eng. A.A. Isola&quot; &lt;alfonso.isola_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi everybody,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                I got one doudt in OPEN-MPI. Suppose, if
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; i 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; run the application on different systems with different data formats
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (little-endian &amp; big endian)...Willl OPEN-MPI converts from little
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; endian 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to big-endian(if it is sending data from for eg, Linux Pc &amp;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Solaris)....
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If it isn't able to do this, it will be able in the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; future releases? (is in your to do list?)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanking u for ur response,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; A.A. Isola
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1803.php">chris.neale_at_[hidden]: "[OMPI users] short message maximum and btl_tcp_eager_limit"</a>
<li><strong>Previous message:</strong> <a href="1801.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<li><strong>In reply to:</strong> <a href="1801.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1804.php">Eng. A.A. Isola: "Re: [OMPI users] little endian - big endian conversion"</a>
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
