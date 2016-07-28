<?
$subject_val = "Re: [OMPI devel] 1.3.1rc5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 11:35:00 2009" -->
<!-- isoreceived="20090323153500" -->
<!-- sent="Mon, 23 Mar 2009 07:34:25 -0800" -->
<!-- isosent="20090323153425" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3.1rc5" -->
<!-- id="49C7AC01.4080501_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="05DE6AF1-42A8-4CBB-B20D-ED304ADCE158_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3.1rc5<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 11:34:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5686.php">Jeff Squyres: "[OMPI devel] Updated Sonoma/OpenFabrics WebEx URLs"</a>
<li><strong>Previous message:</strong> <a href="5684.php">Jeff Squyres: "Re: [OMPI devel] Next week: WebEx remote attendance of OpenFabricsSonoma conference"</a>
<li><strong>In reply to:</strong> <a href="5665.php">Jeff Squyres: "[OMPI devel] 1.3.1rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5687.php">Ralph Castain: "Re: [OMPI devel] 1.3.1rc5"</a>
<li><strong>Reply:</strong> <a href="5687.php">Ralph Castain: "Re: [OMPI devel] 1.3.1rc5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Looks good to cisco.  Ship it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm still seeing a very low incidence of the sm segv during startup (. 
</span><br>
<span class="quotelev1">&gt; 01% -- 23 tests out of ~160k), so let's ship 1.3.1 and roll in  
</span><br>
<span class="quotelev1">&gt; Eugene's new sm code for 1.3.2.
</span><br>
<p>For what it's worth, I just ran a start-up test... &quot;main() 
<br>
{MPI_Init();MPI_Finalize();}&quot; with 8 processes on a single node, 200k 
<br>
times with no failures.  This is before my sm changes.  I wanted to 
<br>
check that my sm changes didn't make things worse, but I can't reproduce 
<br>
the behavior in the first place.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5686.php">Jeff Squyres: "[OMPI devel] Updated Sonoma/OpenFabrics WebEx URLs"</a>
<li><strong>Previous message:</strong> <a href="5684.php">Jeff Squyres: "Re: [OMPI devel] Next week: WebEx remote attendance of OpenFabricsSonoma conference"</a>
<li><strong>In reply to:</strong> <a href="5665.php">Jeff Squyres: "[OMPI devel] 1.3.1rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5687.php">Ralph Castain: "Re: [OMPI devel] 1.3.1rc5"</a>
<li><strong>Reply:</strong> <a href="5687.php">Ralph Castain: "Re: [OMPI devel] 1.3.1rc5"</a>
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
