<?
$subject_val = "Re: [OMPI devel] Finalize without Detach???";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 06:43:32 2009" -->
<!-- isoreceived="20091119114332" -->
<!-- sent="Thu, 19 Nov 2009 06:42:15 -0500" -->
<!-- isosent="20091119114215" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Finalize without Detach???" -->
<!-- id="4B052F17.50807_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="29C912A4-927C-4479-8B2A-906E7616A7FE_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Finalize without Detach???<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-19 06:42:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7132.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7130.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="7129.php">George Bosilca: "Re: [OMPI devel] Finalize without Detach???"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So is there any reason OMPI should not auto-detach buffers at Finalize?  
<br>
I understand technically we don't have to but there are false 
<br>
performance degradations incurred by us not detaching thus making OMPI 
<br>
look significantly slower compared to other MPIs for no real reason.  So 
<br>
unless there is some really good reason we shouldn't detach I would 
<br>
think detaching would make sense.
<br>
<p>--td
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; There is no such statement in the MPI Standard. In fact one of the 
</span><br>
<span class="quotelev1">&gt; example use exactly this: automatic detach at MPI_Finalize (example on 
</span><br>
<span class="quotelev1">&gt; page 310 on MPI 2.2). However, as the standard doesn't enforce a 
</span><br>
<span class="quotelev1">&gt; specific behavior, each MPI implementation can interpret/implement it 
</span><br>
<span class="quotelev1">&gt; differently. Therefore, by expecting the buffer detach at Finalize the 
</span><br>
<span class="quotelev1">&gt; user open itself to &quot;inconsistent&quot; behaviors depending on the MPI 
</span><br>
<span class="quotelev1">&gt; library used. On the opposite, i.e. by explicitly calling detach, the 
</span><br>
<span class="quotelev1">&gt; behavior is well defined in all cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 18, 2009, at 15:41 , Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The proper practice based on the MPI Standard will be to call the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; detach function before finalize.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't find this described anywhere in the standard.  To what 
</span><br>
<span class="quotelev2">&gt;&gt; chapter/verse should I point a user to convince them that detach 
</span><br>
<span class="quotelev2">&gt;&gt; before finalize is the proper thing to do?
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
<li><strong>Next message:</strong> <a href="7132.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7130.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="7129.php">George Bosilca: "Re: [OMPI devel] Finalize without Detach???"</a>
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
