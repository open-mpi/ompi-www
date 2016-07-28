<?
$subject_val = "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 10:48:02 2014" -->
<!-- isoreceived="20141205154802" -->
<!-- sent="Fri, 5 Dec 2014 07:47:55 -0800" -->
<!-- isosent="20141205154755" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code" -->
<!-- id="C4FE43E9-CC7A-4B37-8453-15BF9327D0E8_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAM2Y-dbPO-L+zR2dABUBP3g=0Ee2axeYhj7LYEPMq9Hdg9m3Pg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-05 10:47:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25919.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Previous message:</strong> <a href="25917.php">John Bray: "[OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>In reply to:</strong> <a href="25917.php">John Bray: "[OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25919.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Reply:</strong> <a href="25919.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;m trying to grok the problem, so bear with me a bit. It sounds like you have a machine with 12 physical cores, each with two hyperthreads, and you have HT turned on - correct?
<br>
<p>If that is true, then the problem is that you are attempting to bind-to core (of which you have 12), but asking for 2 cpus/proc. Since you haven&#226;&#128;&#153;t told us to use HTs as cpus, we are using &#226;&#128;&#156;cores&#226;&#128;&#157; as cpus - so this cmd is actually asking us to bind each process to 2 cores, resulting in an overload.
<br>
<p>So you have two options:
<br>
<p>* remove the cpus-per-proc directive. Since you are binding to core, we will automatically bind each process to both HTs in the core, which is the result you want
<br>
<p>* add the &#226;&#128;&#148;use-hwthread-cpus flag and change your binding request to &#226;&#128;&#156;hwthread&quot;. This will treat each HT as a separate cpu, and we will bind each process to 2 HTs, effectively binding them to the core.
<br>
<p>The revised manpage that hopefully helps explain this better is in the upcoming 1.8.4 release. I&#226;&#128;&#153;m also working on a page for the web site to better explain the new map/rank/bind system.
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Dec 5, 2014, at 12:55 AM, John Bray &lt;jbray_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To run a hybrid MPI/OpenMP code on a hyperthreaded machine with 24 virtual cores, I've been using -n 12 --cpus-per-proc 2 so I can use OMP_NUM_THREADS=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I now see that --cpus-per-proc is deprecated in favour of --map-by, but I've been struggling to find a conversion as the --map-by documentation is not very clear.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What should I use to bind 2 virtual cores to each process?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After I use -n 12 --cpus-per-proc 2 I get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Bind to:     CORE
</span><br>
<span class="quotelev1">&gt;    Node:        mic1
</span><br>
<span class="quotelev1">&gt;    #processes:  2
</span><br>
<span class="quotelev1">&gt;    #cpus:       1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and suggests I need an override option
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But this doesn't to match my request for 2 cores  per process, almost the reverse, having 2 processes per core. I don't think I'm overloading my virtual cores anyway
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; John
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25917.php">http://www.open-mpi.org/community/lists/users/2014/12/25917.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25919.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Previous message:</strong> <a href="25917.php">John Bray: "[OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>In reply to:</strong> <a href="25917.php">John Bray: "[OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25919.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Reply:</strong> <a href="25919.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
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
