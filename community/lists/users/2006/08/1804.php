<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 30 19:49:35 2006" -->
<!-- isoreceived="20060830234935" -->
<!-- sent="Thu, 31 Aug 2006 00:03:54 +0100 (GMT+01:00)" -->
<!-- isosent="20060830230354" -->
<!-- name="Eng. A.A. Isola" -->
<!-- email="alfonso.isola_at_[hidden]" -->
<!-- subject="Re: [OMPI users] little endian - big endian conversion" -->
<!-- id="10d61530a39.alfonso.isola_at_tin.it" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] little endian - big endian conversion" -->
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
<strong>From:</strong> Eng. A.A. Isola (<em>alfonso.isola_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-30 19:03:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1805.php">Tobias Graf: "[OMPI users] Problem with C++ Binding"</a>
<li><strong>Previous message:</strong> <a href="1803.php">chris.neale_at_[hidden]: "[OMPI users] short message maximum and btl_tcp_eager_limit"</a>
<li><strong>Maybe in reply to:</strong> <a href="1796.php">Eng. A.A. Isola: "[OMPI users] little endian - big endian conversion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1809.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1809.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;As of Open MPI 1.1, we do support endian
<br>
conversion between peers.  
<br>
It 
<br>
has not been as well tested as the rest of
<br>
the code base, but it 
<br>
should 
<br>
work.&quot;
<br>
<p>Then if I send for example a MPI_CHAR between a solaris 
<br>
SPARC 
<br>
and a LINUX pc both with a 32bit architecture, the communication 
<br>
will 
<br>
be correctly?
<br>
I want know only if the Open MPI v.1.1 support the 
<br>
endian 
<br>
conversion.
<br>
<p>Bye 
<br>
Alfonso
<br>
<p><span class="quotelev2">&gt;&gt;from brbarret
</span><br>
<span class="quotelev2">&gt;&gt;Actually, 
</span><br>
<span class="quotelev1">&gt;Jeff 
</span><br>
is incorrect.  As of Open MPI 1.1, we do support endian
<br>
<span class="quotelev2">&gt;&gt;conversion 
</span><br>
between peers.  It has not been as well tested as the rest 
<br>
<span class="quotelev1">&gt;of
</span><br>
<span class="quotelev2">&gt;&gt;the 
</span><br>
code base, but it should work.  Please let us know if you have 
<br>
<span class="quotelev1">&gt;any
</span><br>
<span class="quotelev2">&gt;&gt;issues with that mode and we'll work to resolve them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Wed, 2006-08-30 at 06:36 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open 
</span><br>
MPI 
<br>
<span class="quotelev1">&gt;does not yet support endian conversion between peers in a single
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 
</span><br>
<span class="quotelev1">&gt;job.  It's on the to-do list, but it's been a lower priority 
</span><br>
than some
<br>
<span class="quotelev3">&gt;&gt;&gt; other features and issues.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 8/30/06 
</span><br>
4:12 AM, &quot;Eng. 
<br>
<span class="quotelev1">&gt;A.A. Isola&quot; &lt;alfonso.isola_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 
</span><br>
Hi everybody,
<br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;                I got one doudt in OPEN-MPI. 
</span><br>
Suppose, if
<br>
<span class="quotelev4">&gt;&gt;&gt; &gt; i 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; run the application on different systems 
</span><br>
with different data formats
<br>
<span class="quotelev4">&gt;&gt;&gt; &gt; (little-endian &amp; big endian)...Willl 
</span><br>
OPEN-MPI converts from little
<br>
<span class="quotelev4">&gt;&gt;&gt; &gt; endian 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; to big-endian(if it 
</span><br>
is sending data from for eg, 
<br>
<span class="quotelev1">&gt;Linux Pc &amp;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Solaris)....
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; If it isn't able to do this, it 
</span><br>
<span class="quotelev1">&gt;will be able in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; future 
</span><br>
releases? (is in your to do list?)
<br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thanking u for ur 
</span><br>
response,
<br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; A.A. Isola
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing 
</span><br>
list
<br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi">http://www.open-mpi</a>.
</span><br>
org/mailman/listinfo.
<br>
<span class="quotelev1">&gt;cgi/users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1805.php">Tobias Graf: "[OMPI users] Problem with C++ Binding"</a>
<li><strong>Previous message:</strong> <a href="1803.php">chris.neale_at_[hidden]: "[OMPI users] short message maximum and btl_tcp_eager_limit"</a>
<li><strong>Maybe in reply to:</strong> <a href="1796.php">Eng. A.A. Isola: "[OMPI users] little endian - big endian conversion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1809.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1809.php">Jeff Squyres: "Re: [OMPI users] little endian - big endian conversion"</a>
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
