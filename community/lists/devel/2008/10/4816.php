<?
$subject_val = "Re: [OMPI devel] Comm_spawn limits";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 19:40:29 2008" -->
<!-- isoreceived="20081027234029" -->
<!-- sent="Mon, 27 Oct 2008 17:40:21 -0600" -->
<!-- isosent="20081027234021" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Comm_spawn limits" -->
<!-- id="E7E97ECD-E92D-4BFB-970C-5D56DA3FE50C_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="242E3CF6-FBF7-44FC-89C5-C4BA93E13479_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Comm_spawn limits<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-27 19:40:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4817.php">George Bosilca: "[OMPI devel] MPI_Com_spawn"</a>
<li><strong>Previous message:</strong> <a href="4815.php">Jeff Squyres: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>In reply to:</strong> <a href="4815.php">Jeff Squyres: "Re: [OMPI devel] Comm_spawn limits"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, since I'm the &quot;guy who wrote the code&quot;, I'll offer my $0.0001  
<br>
(my dollars went the way of the market...).
<br>
<p>Jeff's memory about why we went to 16 bits isn't quite accurate. The  
<br>
fact is that we always had 32-bit jobids, and still do. Up to about a  
<br>
year ago, all of that space was available for comm_spawn. What changed  
<br>
at that time was a decision to make every mpirun independently create  
<br>
a unique identifier so that two mpirun's could connect/accept without  
<br>
requiring a persistent orted to coordinate their name at launch. This  
<br>
was the subject of a lengthy discussion involving multiple  
<br>
institutions that spanned several months last year.
<br>
<p>As a result of that discussion, we claimed 16-bits of the 32-bits for  
<br>
the mpirun identifier. We investigated using only 8-bits (thus leaving  
<br>
24-bits for comm_spawn'd jobs), but the probability of duplicate  
<br>
identifiers was too high.
<br>
<p>Likewise, we looked at increasing the total size of the jobid to 64- 
<br>
bits, but that seemed ridiculously high - and (due to the way memory  
<br>
gets allocated for structures) meant that we had to also increase the  
<br>
vpid size to 64-bits. Thus, the move to 64-bit id's would have  
<br>
increased the size of the name struct from 32-bits to 128-bits - and  
<br>
now you do start to see a non-zero impact on memory footprint for  
<br>
extreme scale clusters involving several hundred thousand processes.
<br>
<p>So we accepted the 16-bit limit on comm_spawn and moved on....until  
<br>
someone now wants to do 100k comm_spawns.
<br>
<p>I don't believe Jeff's proposed solution will solve that user's  
<br>
request as he was dynamically constructing a very large server farm  
<br>
(so the procs are not short lived). However, IMHO, I think this was a  
<br>
poorly designed application - it didn't need to be done the way he was  
<br>
doing it, and could easily (and more efficiently) be built to fit  
<br>
within the 64k constraint.
<br>
<p>So, my suggestion is to stick with the 64k limit, perhaps add this  
<br>
reuse proposal, and just document that constraint.
<br>
<p>Ralph
<br>
<p><p>On Oct 27, 2008, at 4:14 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 27, 2008, at 5:52 PM, Andreas Sch&#228;fer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know any implementation details, but is making a 16-bit
</span><br>
<span class="quotelev2">&gt;&gt; counter a 32-bit counter really so much harder than this fancy
</span><br>
<span class="quotelev2">&gt;&gt; (overengineered? ;-) ) table construction? The way I see it, this
</span><br>
<span class="quotelev2">&gt;&gt; table which might become a real mess if there are multiple
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_spawn issued simultaneously in different communicators.  
</span><br>
<span class="quotelev2">&gt;&gt; (Would
</span><br>
<span class="quotelev2">&gt;&gt; that be legal MPI?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, all the spawns are proxied back to the HNP (i.e., mpirun), so  
</span><br>
<span class="quotelev1">&gt; there would only be a need for 1 table.  I don't think that a simple  
</span><br>
<span class="quotelev1">&gt; table lookup is overengineered.  :-)  It's a simple solution to the  
</span><br>
<span class="quotelev1">&gt; &quot;need a global ID&quot; issue.  By limiting the size of the table, you  
</span><br>
<span class="quotelev1">&gt; can avoid scalability issues as MPI jobs are being run on more and  
</span><br>
<span class="quotelev1">&gt; more cores (e.g., growing without bound, particularly for 99% of the  
</span><br>
<span class="quotelev1">&gt; apps out there that never call comm_spawn).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We actually went down to 16 bits recently (it used to be 32) as one  
</span><br>
<span class="quotelev1">&gt; item toward reducing the memory footprint of MPI processes (and  
</span><br>
<span class="quotelev1">&gt; mpirun and the orted's), particularly when running very large scale  
</span><br>
<span class="quotelev1">&gt; jobs.  So while increasing this one value back to 32 bits may not be  
</span><br>
<span class="quotelev1">&gt; tragic, it would be nice to keep it down as 16 bits (IMHO).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regardless of how big the value is (8, 16, 32, 64...) you still need  
</span><br>
<span class="quotelev1">&gt; a unique value for comm_spawn.  Therefore, some kind of duplicate  
</span><br>
<span class="quotelev1">&gt; detection mechanism is needed.  If you increase the size of the  
</span><br>
<span class="quotelev1">&gt; container, you decrease the probability of collision, but it can  
</span><br>
<span class="quotelev1">&gt; still happen.  And since machines are growing in size and # of  
</span><br>
<span class="quotelev1">&gt; cores, it could just delay the probability of collision until  
</span><br>
<span class="quotelev1">&gt; someone runs on a big enough machine.  Regardless, I'd prefer to fix  
</span><br>
<span class="quotelev1">&gt; it the Right way rather than rely on probability to prevent a  
</span><br>
<span class="quotelev1">&gt; problem.  In my experience, &quot;that could *never* happen!&quot; is just an  
</span><br>
<span class="quotelev1">&gt; invitation for a disaster, even if it's 1-5 years in the future.  
</span><br>
<span class="quotelev1">&gt; (didn't someone say that we'd never need more than 640k of RAM? :-) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just my IMHO, of course... (and I'm not the guy writing the  
</span><br>
<span class="quotelev1">&gt; code!)  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4817.php">George Bosilca: "[OMPI devel] MPI_Com_spawn"</a>
<li><strong>Previous message:</strong> <a href="4815.php">Jeff Squyres: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>In reply to:</strong> <a href="4815.php">Jeff Squyres: "Re: [OMPI devel] Comm_spawn limits"</a>
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
