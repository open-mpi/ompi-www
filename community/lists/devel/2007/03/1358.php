<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Mar 11 14:25:43 2007" -->
<!-- isoreceived="20070311182543" -->
<!-- sent="Sun, 11 Mar 2007 19:25:38 +0100" -->
<!-- isosent="20070311182538" -->
<!-- name="Christian Siebert" -->
<!-- email="christian.siebert_at_[hidden]" -->
<!-- subject="[OMPI devel] announcement of a multicast-based MPI broadcast implementation" -->
<!-- id="20070311192538.fxnr8fmh2osoo0cc_at_mail.tu-chemnitz.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Christian Siebert (<em>christian.siebert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-11 14:25:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1359.php">Greg Watson: "Re: [OMPI devel] Open MPI v1.2rc2 has been posted"</a>
<li><strong>Previous message:</strong> <a href="1357.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.2rc2 has been posted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear developers and users of Open MPI,
<br>
<p>because the links to the following implementation will disappear at the
<br>
end of March 2007, I thought it would be worth to make this announcement.
<br>
<p>During the work on my diploma thesis last year, I developed a new MPI
<br>
broadcast algorithm that utilizes a hardware feature called &quot;Multicast&quot;.
<br>
In most application cases, this algorithm scales independently of the
<br>
number of involved MPI processes (even for very small message sizes!).
<br>
So you won't see any performance differences between a broadcast to
<br>
10, 100 or even 1000 processes. We have shown this behaviour on our
<br>
Beowulf-style cluster at Chemnitz University of Technology with 528
<br>
compute nodes and a single large Fast Ethernet switch. It usually
<br>
outperforms all existing broadcast implementations when more than 8
<br>
cluster nodes are used.
<br>
<p><p>source code of the original implementation, called &quot;ipmc&quot;:
<br>
<a href="http://www-user.tu-chemnitz.de/~chsi/ipmc_component.tar.gz">http://www-user.tu-chemnitz.de/~chsi/ipmc_component.tar.gz</a>
<br>
<p>latest update patch (necessary because of internal changes in Open MPI!):
<br>
<a href="http://www-user.tu-chemnitz.de/~chsi/ipmc_update.patch">http://www-user.tu-chemnitz.de/~chsi/ipmc_update.patch</a>
<br>
(successfully tested with the latest SVN revision 14004)
<br>
<p>Still not convinced? You can even use it to improve your HPL performance:
<br>
<a href="http://www-user.tu-chemnitz.de/~chsi/hpl/">http://www-user.tu-chemnitz.de/~chsi/hpl/</a>
<br>
<p><p>A detailed explanation of the algorithm with its performance evaluation
<br>
can be found in my diploma thesis &quot;Efficient Broadcast for Multicast-
<br>
Capable Interconnection Networks&quot;. A more compact description (although
<br>
for a different interconnect) can be found in the paper &quot;A practically
<br>
constant-time MPI Broadcast Algorithm for large-scale InfiniBand
<br>
Clusters with Multicast&quot; (CAC 2007).
<br>
<p>advantages:
<br>
- alternative MPI_BCAST implementation
<br>
- uses hardware multicast and not only point-to-point communication
<br>
- scales independently of communicator size
<br>
- developed for productive application use (does not explicitly
<br>
&nbsp;&nbsp;synchronize, makes use of process skew, very balanced, ...)
<br>
- supports e.g. Fast/Gigabit Ethernet through IPv4 interface
<br>
- implemented as a self-contained Open MPI collective component
<br>
- quite simple main algorithm; solves all related problems
<br>
- works with any communicator (not only MPI_COMM_WORLD or root=0!)
<br>
- no special setup required (works even for multiple jobs per cluster!)
<br>
- ensures correct data delivery (CRC + retransmission)
<br>
- user-customizable through MCA parameters (for fine tuning)
<br>
- especially well-suited for small- and medium-sized messages
<br>
- no need for application change or rebuild
<br>
&nbsp;&nbsp;(simply copy the binaries into the Open MPI library directory)
<br>
- heavily tested and successfully used with many benchmarks
<br>
&nbsp;&nbsp;(e.g. IMB, HPL) as well as real applications (e.g. Abinit, CPMD)
<br>
- &lt; some more that I've forgotten at the time of writing ;-) &gt;
<br>
<p>disadvantages:
<br>
- scales, in the worst case, linearly with the number of processes
<br>
- not optimal for small communicators and/or large messages
<br>
- only the MPI_BCAST operation is implemented =&gt; falls back to the basic
<br>
&nbsp;&nbsp;implementation for all other collective operations
<br>
- only tested on a smaller number of clusters (namely with Fast/Gigabit
<br>
&nbsp;&nbsp;Ethernet and IPoIB; IA-32 and x86-64 architectures)
<br>
- no automatic parameter adaption (only default values)
<br>
- quite large implementation (due to the many details/solved problems)
<br>
- &lt; surely more - so please report them &gt;
<br>
<p><p>Although it is unclear if I can maintain and enhance this project in the
<br>
future, it is currently in an (almost) production-ready state. So I give
<br>
it to the Open MPI community and hope it will be useful for anyone.
<br>
<p>Don't hesitate to contact me [1] if you have any comments. I'm especially
<br>
interested in more applications that can benefit from this implementation.
<br>
<p><p>&quot;Now it is possible to use MPI_BCAST for large-scaling applications.&quot;
<br>
<p><p>Yours sincerely
<br>
<p>&nbsp;&nbsp;&nbsp;Christian Siebert
<br>
<p><p>[1] This e-mail address will become invalid at the end of March 2007 too.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1359.php">Greg Watson: "Re: [OMPI devel] Open MPI v1.2rc2 has been posted"</a>
<li><strong>Previous message:</strong> <a href="1357.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.2rc2 has been posted"</a>
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
