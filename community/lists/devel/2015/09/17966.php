<?
$subject_val = "Re: [OMPI devel] RFC: Remove --without-hwloc configure option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 09:06:43 2015" -->
<!-- isoreceived="20150904130643" -->
<!-- sent="Fri, 4 Sep 2015 22:06:41 +0900" -->
<!-- isosent="20150904130641" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove --without-hwloc configure option" -->
<!-- id="CAAkFZ5utbF0bQe5jvnK3HS=Qpj+=5B0vcZgfkHO-w4N-5ML-dw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D9E73430-CE57-4671-9EDA-ADFAE4E6286C_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-04 09:06:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17967.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17965.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17964.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17968.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Reply:</strong> <a href="17968.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
iirc, hwloc can read input from an xml file.
<br>
if not already the case, should we provide a simple mechanism to tell hwloc
<br>
not to detect the topology from the os but from a config file.
<br>
for example, if working on a new os and/or hardware, then manually generate
<br>
the hwloc xml file on each node and do something like
<br>
mpirun --mca hwloc_file /etc/hwloc.xml ...
<br>
<p>makes sense ?
<br>
<p>On Friday, September 4, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It sounds, then, like removing &#226;&#128;&#148;without-hwloc will do no harm. At worst,
</span><br>
<span class="quotelev1">&gt; hwloc might report inaccurate info, but that won&#226;&#128;&#153;t stop us from running
</span><br>
<span class="quotelev1">&gt; with appropriate cmd line options (e.g., to set the #slots and bind-to
</span><br>
<span class="quotelev1">&gt; none).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unless there are any further concerns, I&#226;&#128;&#153;ll prep the PR
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 4, 2015, at 1:08 AM, Kawashima, Takahiro &lt;
</span><br>
<span class="quotelev1">&gt; t-kawashima_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','t-kawashima_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm a developer of Fujitsu MPI for K computer and Fujitsu
</span><br>
<span class="quotelev1">&gt; PRIMEHPC FX10/FX100 (SPARC-based CPU).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Though I'm not familiar with the hwloc code and didn't know
</span><br>
<span class="quotelev1">&gt; the issue reported by Gilles, I also would be able to help
</span><br>
<span class="quotelev1">&gt; you to fix the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bottom line, even if hwloc is not fully ported, it should build and ompi
</span><br>
<span class="quotelev1">&gt; should get something usable.
</span><br>
<span class="quotelev1">&gt; in this case, i have no objection removing the --without-hwloc configure
</span><br>
<span class="quotelev1">&gt; option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you can contact me off-list regarding the FX10 specific issue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/4/2015 2:31 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 04/09/2015 00:36, Gilles Gouaillardet a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; just to be clear, your proposal is to abort if openmpi is configured
</span><br>
<span class="quotelev1">&gt; with --without-hwloc, right ?
</span><br>
<span class="quotelev1">&gt; ( the --with-hwloc option is not removed because we want to keep the
</span><br>
<span class="quotelev1">&gt; option of using an external hwloc library )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if I understand correctly, Paul's point is that if openmpi is ported
</span><br>
<span class="quotelev1">&gt; to a new architecture for which hwloc has not been ported yet
</span><br>
<span class="quotelev1">&gt; (embedded hwloc or external hwloc), then the very first step is to
</span><br>
<span class="quotelev1">&gt; port hwloc before ompi can be built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; did I get it right Paul ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice, what would happen in such a case ?
</span><br>
<span class="quotelev1">&gt; embedded hwloc cannot be built ?
</span><br>
<span class="quotelev1">&gt; hwloc returns little or no information ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it's a new operating system and it supports at least things like
</span><br>
<span class="quotelev1">&gt; sysconf, you will get a Machine object with one PUs per logical processor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it's a new platform running Linux, they are supposed to tell Linux
</span><br>
<span class="quotelev1">&gt; at least package/core/thread information. That's what we have for ARM
</span><br>
<span class="quotelev1">&gt; for instance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Missing topology detection can be worked around easily (with XML and
</span><br>
<span class="quotelev1">&gt; synthetic description, what we did for BlueGene/Q before adding manual
</span><br>
<span class="quotelev1">&gt; support for that specific processor). Binding support can't.
</span><br>
<span class="quotelev1">&gt; And once you get binding, you get x86-topology even if the operating
</span><br>
<span class="quotelev1">&gt; system isn't supported (using cpuid).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for example, on Fujitsu FX10 node (single socket, 16 cores), hwloc
</span><br>
<span class="quotelev1">&gt; reports 16 sockets with one core each and no cache. though this is
</span><br>
<span class="quotelev1">&gt; not correct, that can be seen as equivalent to the real config by
</span><br>
<span class="quotelev1">&gt; ompi, so this is not really an issue for ompi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you help fixing this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The issue is indeed with supercomputers with uncommon architectures
</span><br>
<span class="quotelev1">&gt; like this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17961.php">http://www.open-mpi.org/community/lists/devel/2015/09/17961.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17966/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17967.php">Ralph Castain: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17965.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17964.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17968.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Reply:</strong> <a href="17968.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
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
