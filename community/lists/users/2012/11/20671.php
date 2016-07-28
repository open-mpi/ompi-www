<?
$subject_val = "Re: [OMPI users] mpi_leave_pinned is dangerous";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 09:55:30 2012" -->
<!-- isoreceived="20121108145530" -->
<!-- sent="Thu, 8 Nov 2012 09:55:25 -0500" -->
<!-- isosent="20121108145525" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_leave_pinned is dangerous" -->
<!-- id="BF651AFF-8759-4022-B361-04C5592A3FF2_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="509BC621.8020509_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_leave_pinned is dangerous<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-08 09:55:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20672.php">Tru Huynh: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>Previous message:</strong> <a href="20670.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
<li><strong>In reply to:</strong> <a href="20669.php">Brice Goglin: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20674.php">Shamis, Pavel: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nope, that wasn't it.
<br>
<p>...oh, I see, Linus' reply didn't go to LKML; it just went to a bunch of individuals.  Here's part of his reply:
<br>
<p><pre>
----
The interface claims to be generic, but is really just a hack for a single
use case that very few people care about. I find the design depressingly
stupid, even if the code itself is at least small and simple.
Last update I got was that people who can't even agree on some other
interface but still are otherwise doing the same RDMA crap want to then
use this crud too - but no explanation of why they couldn't agree on the
other interface.
----
Here's another relevant bit:
-----
Can't you crazy RDMA people just agree on an RDMA interface, and making it
part of that? It still makes _zero_ sense outside of that small niche as
far as I can tell.
-----
...it goes downhill from there.  :-)
On Nov 8, 2012, at 9:48 AM, Brice Goglin wrote:
&gt; My understanding of the upstreaming failure was more like:
&gt; * Linus was going to be OK
&gt; * Some perf (or trace?) guys came late and said &quot;oh your code should be
&gt; integrated into our more general stuff&quot; but they didn't do it, and
&gt; basically vetoed anything that didn't do what they said
&gt; 
&gt; Brice
&gt; 
&gt; 
&gt; 
&gt; Le 08/11/2012 15:43, Jeff Squyres a &#233;crit :
&gt;&gt; Note that the saga of trying to push ummunotify upstream to Linux ended up with Linus essentially saying &quot;fix your own network stack; don't put this in the main kernel.&quot;
&gt;&gt; 
&gt;&gt; He's was right back then.  With a 2nd &quot;customer&quot; for this kind of thing (cuda), that equation might be changing, but I'll leave that to Nvidia to push on Linus.  :-)
&gt;&gt; 
&gt;&gt; Something like ummunotify should be in the ibcore area in the kernel.  And at least initially, probably something like this should be in the cuda kernel module(s).
&gt;&gt; 
&gt;&gt; Just my $0.02...
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; On Nov 8, 2012, at 9:38 AM, Shamis, Pavel wrote:
&gt;&gt; 
&gt;&gt;&gt; Another good reason for ummunotify kernel module
&gt;&gt;&gt; (<a href="http://lwn.net/Articles/345013/">http://lwn.net/Articles/345013/</a>)
&gt;&gt;&gt; 
&gt;&gt;&gt; Pavel (Pasha) Shamis
&gt;&gt;&gt; ---
&gt;&gt;&gt; Computer Science Research Group
&gt;&gt;&gt; Computer Science and Math Division
&gt;&gt;&gt; Oak Ridge National Laboratory
&gt;&gt;&gt; 
&gt;&gt;&gt; On Nov 8, 2012, at 9:08 AM, Jeff Squyres wrote:
&gt;&gt;&gt; 
&gt;&gt;&gt; On Nov 8, 2012, at 8:51 AM, Rolf vandeVaart wrote:
&gt;&gt;&gt; 
&gt;&gt;&gt; Not sure.  I will look into this.   And thank you for the feedback Jens!
&gt;&gt;&gt; 
&gt;&gt;&gt; FWIW, I +1 Jens' request.  MPI implementations are able to handle network registration mechanisms via standard memory hooks (their hooks are actually pretty terrible, but for the most part, they are generally functional).
&gt;&gt;&gt; 
&gt;&gt;&gt; If CUDA requires registered memory, then it should also provide hooks so that MPI implementations can &quot;just make it work&quot; from the users' perspective (and please please please provide BETTER hooks than verbs / glibc malloc!).
&gt;&gt;&gt; 
&gt;&gt;&gt; --
&gt;&gt;&gt; Jeff Squyres
&gt;&gt;&gt; jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20672.php">Tru Huynh: "Re: [OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>Previous message:</strong> <a href="20670.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
<li><strong>In reply to:</strong> <a href="20669.php">Brice Goglin: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20674.php">Shamis, Pavel: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
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
