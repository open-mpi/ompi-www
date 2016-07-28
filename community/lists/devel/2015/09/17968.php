<?
$subject_val = "Re: [OMPI devel] RFC: Remove --without-hwloc configure option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 09:30:30 2015" -->
<!-- isoreceived="20150904133030" -->
<!-- sent="Fri, 4 Sep 2015 06:30:27 -0700" -->
<!-- isosent="20150904133027" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove --without-hwloc configure option" -->
<!-- id="8BC49CA7-A49B-4040-AB61-1FAAC834622C_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5utbF0bQe5jvnK3HS=Qpj+=5B0vcZgfkHO-w4N-5ML-dw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove --without-hwloc configure option<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-04 09:30:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17969.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17967.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17966.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think we already do, but I can check
<br>
<p><span class="quotelev1">&gt; On Sep 4, 2015, at 6:06 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iirc, hwloc can read input from an xml file.
</span><br>
<span class="quotelev1">&gt; if not already the case, should we provide a simple mechanism to tell hwloc not to detect the topology from the os but from a config file.
</span><br>
<span class="quotelev1">&gt; for example, if working on a new os and/or hardware, then manually generate the hwloc xml file on each node and do something like
</span><br>
<span class="quotelev1">&gt; mpirun --mca hwloc_file /etc/hwloc.xml ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; makes sense ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Friday, September 4, 2015, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; It sounds, then, like removing &#226;&#128;&#148;without-hwloc will do no harm. At worst, hwloc might report inaccurate info, but that won&#226;&#128;&#153;t stop us from running with appropriate cmd line options (e.g., to set the #slots and bind-to none).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unless there are any further concerns, I&#226;&#128;&#153;ll prep the PR
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 4, 2015, at 1:08 AM, Kawashima, Takahiro &lt;t-kawashima_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','t-kawashima_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brice,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm a developer of Fujitsu MPI for K computer and Fujitsu
</span><br>
<span class="quotelev2">&gt;&gt; PRIMEHPC FX10/FX100 (SPARC-based CPU).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Though I'm not familiar with the hwloc code and didn't know
</span><br>
<span class="quotelev2">&gt;&gt; the issue reported by Gilles, I also would be able to help
</span><br>
<span class="quotelev2">&gt;&gt; you to fix the issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev2">&gt;&gt; MPI development team,
</span><br>
<span class="quotelev2">&gt;&gt; Fujitsu
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Brice,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bottom line, even if hwloc is not fully ported, it should build and ompi 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should get something usable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in this case, i have no objection removing the --without-hwloc configure 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you can contact me off-list regarding the FX10 specific issue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 9/4/2015 2:31 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 04/09/2015 00:36, Gilles Gouaillardet a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; just to be clear, your proposal is to abort if openmpi is configured 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with --without-hwloc, right ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ( the --with-hwloc option is not removed because we want to keep the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; option of using an external hwloc library )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if I understand correctly, Paul's point is that if openmpi is ported 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to a new architecture for which hwloc has not been ported yet 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (embedded hwloc or external hwloc), then the very first step is to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; port hwloc before ompi can be built.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; did I get it right Paul ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Brice, what would happen in such a case ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; embedded hwloc cannot be built ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc returns little or no information ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If it's a new operating system and it supports at least things like 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sysconf, you will get a Machine object with one PUs per logical processor.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If it's a new platform running Linux, they are supposed to tell Linux 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at least package/core/thread information. That's what we have for ARM 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for instance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Missing topology detection can be worked around easily (with XML and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; synthetic description, what we did for BlueGene/Q before adding manual 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support for that specific processor). Binding support can't.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And once you get binding, you get x86-topology even if the operating 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system isn't supported (using cpuid).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for example, on Fujitsu FX10 node (single socket, 16 cores), hwloc 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; reports 16 sockets with one core each and no cache. though this is 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; not correct, that can be seen as equivalent to the real config by 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi, so this is not really an issue for ompi.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you help fixing this?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The issue is indeed with supercomputers with uncommon architectures 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; like this one.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17961.php">http://www.open-mpi.org/community/lists/devel/2015/09/17961.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/09/17961.php">http://www.open-mpi.org/community/lists/devel/2015/09/17961.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17966.php">http://www.open-mpi.org/community/lists/devel/2015/09/17966.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17968/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17969.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17967.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17966.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
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
