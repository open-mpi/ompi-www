<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 30 09:38:14 2006" -->
<!-- isoreceived="20060830133814" -->
<!-- sent="Wed, 30 Aug 2006 07:38:11 -0600" -->
<!-- isosent="20060830133811" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] little endian - big endian conversion" -->
<!-- id="1156945091.26820.3.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="C11AE267.24CE0%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-08-30 09:38:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1801.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<li><strong>Previous message:</strong> <a href="1799.php">Ralph H Castain: "Re: [OMPI users] LSF with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="1797.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1801.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<li><strong>Reply:</strong> <a href="1801.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, Jeff is incorrect.  As of Open MPI 1.1, we do support endian
<br>
conversion between peers.  It has not been as well tested as the rest of
<br>
the code base, but it should work.  Please let us know if you have any
<br>
issues with that mode and we'll work to resolve them.
<br>
<p>Brian
<br>
<p><p>On Wed, 2006-08-30 at 06:36 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Open MPI does not yet support endian conversion between peers in a single
</span><br>
<span class="quotelev1">&gt; MPI job.  It's on the to-do list, but it's been a lower priority than some
</span><br>
<span class="quotelev1">&gt; other features and issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/30/06 4:12 AM, &quot;Eng. A.A. Isola&quot; &lt;alfonso.isola_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi everybody,
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;                I got one doudt in OPEN-MPI. Suppose, if
</span><br>
<span class="quotelev2">&gt; &gt; i 
</span><br>
<span class="quotelev2">&gt; &gt; run the application on different systems with different data formats
</span><br>
<span class="quotelev2">&gt; &gt; (little-endian &amp; big endian)...Willl OPEN-MPI converts from little
</span><br>
<span class="quotelev2">&gt; &gt; endian 
</span><br>
<span class="quotelev2">&gt; &gt; to big-endian(if it is sending data from for eg, Linux Pc &amp;
</span><br>
<span class="quotelev2">&gt; &gt; Solaris)....
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If it isn't able to do this, it will be able in the
</span><br>
<span class="quotelev2">&gt; &gt; future releases? (is in your to do list?)
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; Thanking u for ur response,
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; A.A. Isola
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1801.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<li><strong>Previous message:</strong> <a href="1799.php">Ralph H Castain: "Re: [OMPI users] LSF with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="1797.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1801.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<li><strong>Reply:</strong> <a href="1801.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
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
