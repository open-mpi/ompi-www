<?
$subject_val = "Re: [OMPI devel] Revise paffinity method?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  8 11:01:11 2009" -->
<!-- isoreceived="20090508150111" -->
<!-- sent="Fri, 08 May 2009 11:00:18 -0400" -->
<!-- isosent="20090508150018" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Revise paffinity method?" -->
<!-- id="4A044902.80204_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44C63312-F981-4EAA-8C61-F1F1CDEFA03A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Revise paffinity method?<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-08 11:00:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5992.php">Brian Barrett: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Previous message:</strong> <a href="5990.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>In reply to:</strong> <a href="5990.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5992.php">Brian Barrett: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I think that's the way to go then - it also follows our &quot;the user is 
</span><br>
<span class="quotelev1">&gt; always right - even when they are wrong&quot; philosophy. I'll probably 
</span><br>
<span class="quotelev1">&gt; have to draw on others to help ensure that the paffinity modules all 
</span><br>
<span class="quotelev1">&gt; report appropriately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yeah, that sounds like the right way to do it to me.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Think I have enough now to start on this - probably middle of next week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 8, 2009, at 8:37 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 8, 2009, at 10:32 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actually, I was wondering (hot tub thought for the night) if the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; paffinity system can't just tell us if the proc has been bound or not?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That would remove the need for YAP (i.e., yet another param).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, it can.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What it can't tell, though, is who set it.  So a user may have 
</span><br>
<span class="quotelev2">&gt;&gt; overridden the paffinity after main() starts but before MPI_INIT is 
</span><br>
<span class="quotelev2">&gt;&gt; invoked.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But perhaps that's not a crime -- users can override the paffinity at 
</span><br>
<span class="quotelev2">&gt;&gt; their own risk (we actually have no way to preventing them from doing 
</span><br>
<span class="quotelev2">&gt;&gt; so).  So perhaps just checking if affinity is already set is a &quot;good 
</span><br>
<span class="quotelev2">&gt;&gt; enough&quot; mechanism for the MPI_INIT-set-paffinity logic to determine 
</span><br>
<span class="quotelev2">&gt;&gt; whether it should set affinity itself or not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="5992.php">Brian Barrett: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Previous message:</strong> <a href="5990.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>In reply to:</strong> <a href="5990.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5992.php">Brian Barrett: "Re: [OMPI devel] Revise paffinity method?"</a>
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
