<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr  1 15:12:20 2007" -->
<!-- isoreceived="20070401191220" -->
<!-- sent="Sun, 01 Apr 2007 13:12:08 -0600" -->
<!-- isosent="20070401191208" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level" -->
<!-- id="C2356028.248A%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4426.69.180.16.130.1175455933.squirrel_at_webmail.cc.gatech.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-01 15:12:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1391.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1389.php">pooja_at_[hidden]: "[OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1389.php">pooja_at_[hidden]: "[OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1391.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1391.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1394.php">Li-Ta Lo: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pooja
<br>
<p>What did you do to make your prof dislike you so much??? :-) These are, to
<br>
say the least, major tasks you have been describing. I've seen developers on
<br>
our team spend months trying to really understand even one or two of the
<br>
issues raised in your various emails, let alone make any kind of changes...
<br>
<p>I can't help you with the BTL question. On the others:
<br>
<p>1. states are reported via the orte/mca/smr framework. You will see the
<br>
states listed in orte/mca/smr/smr_types.h. We track both process and job
<br>
states. Hopefully, the state names will be somewhat self-explanatory and
<br>
indicative of the order in which they are traversed. The job states are set
<br>
when *all* of the processes in the job reach the corresponding state.
<br>
<p>2. I'm not sure what you mean by mapping MPI processes to &quot;physical&quot;
<br>
processes, but I assume you mean how do we assign MPI ranks to processes on
<br>
specific nodes. You will find that done in the orte/mca/rmaps framework. We
<br>
currently only have one component in that framework - the round-robin
<br>
implementation - that maps either by slot or by node, as indicated by the
<br>
user. That code is fairly heavily commented, so you hopefully can understand
<br>
what it is doing.
<br>
<p>Hope that helps!
<br>
Ralph
<br>
<p><p>On 4/1/07 1:32 PM, &quot;pooja_at_[hidden]&quot; &lt;pooja_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I am Pooja and I am working on a course project which requires me
</span><br>
<span class="quotelev1">&gt; -&gt; to track the internal state changes of MPI and need me to figure out
</span><br>
<span class="quotelev1">&gt; how does ORTE maps MPi Process to actual physical processes
</span><br>
<span class="quotelev1">&gt; -&gt;Also I need to find way to get BTL transports work directly with MPI
</span><br>
<span class="quotelev1">&gt; level calls.
</span><br>
<span class="quotelev1">&gt; I just want to know is this posible and if yes what procedure I should
</span><br>
<span class="quotelev1">&gt; follow or I should look into which files (for change).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please Help
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks and Regards
</span><br>
<span class="quotelev1">&gt; Pooja
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
<li><strong>Next message:</strong> <a href="1391.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1389.php">pooja_at_[hidden]: "[OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1389.php">pooja_at_[hidden]: "[OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1391.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1391.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Reply:</strong> <a href="1394.php">Li-Ta Lo: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
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
