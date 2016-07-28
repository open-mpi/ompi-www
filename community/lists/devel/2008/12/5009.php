<?
$subject_val = "Re: [OMPI devel] BTL move - the notion";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 06:49:51 2008" -->
<!-- isoreceived="20081205114951" -->
<!-- sent="Fri, 05 Dec 2008 06:49:45 -0500" -->
<!-- isosent="20081205114945" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL move - the notion" -->
<!-- id="49391559.6070807_at_sun.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C55DE750.2BF37%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL move - the notion<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 06:49:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5010.php">Ralph Castain: "Re: [OMPI devel] Jan ORTE meeting"</a>
<li><strong>Previous message:</strong> <a href="5008.php">Terry Dontje: "Re: [OMPI devel] Jan ORTE meeting"</a>
<li><strong>In reply to:</strong> <a href="5007.php">Richard Graham: "[OMPI devel] BTL move - the notion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5013.php">Richard Graham: "Re: [OMPI devel] BTL move - the notion"</a>
<li><strong>Reply:</strong> <a href="5013.php">Richard Graham: "Re: [OMPI devel] BTL move - the notion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Richard Graham wrote:
<br>
<span class="quotelev1">&gt; Let me start the e-mail conversation, and see how far we get.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Goal: The goal several of us have is to be able to use the btl&#146;s 
</span><br>
<span class="quotelev1">&gt; outside of the MPI layer in Open MPI. The layer itself is generic, w/o 
</span><br>
<span class="quotelev1">&gt; specific knowledge of Upper Level Protocols, so is well suited for 
</span><br>
<span class="quotelev1">&gt; this sort of use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Technical Approach: What we have suggested is to start the process 
</span><br>
<span class="quotelev1">&gt; with the Open MPI code base, and make it independent of the mpi-layer 
</span><br>
<span class="quotelev1">&gt; (which it is now), and the run-time layer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before we get into any specific technical details,
</span><br>
<span class="quotelev1">&gt; the first question I have is are people totally opposed to the notion 
</span><br>
<span class="quotelev1">&gt; of making the btl&#146;s independent of MPI and the run-time ?
</span><br>
<span class="quotelev1">&gt; This does not mean that it can&#146;t be used by it, but that there are 
</span><br>
<span class="quotelev1">&gt; well defined abstraction layers, i.e., are people against the goal in 
</span><br>
<span class="quotelev1">&gt; the first place ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
I am not against the idea of separating the BTLs out from OMPI. However, 
<br>
it would help to know what we are really trying to accomplish this and 
<br>
why using MPI is a non-starter. Is the issue to heavyweight of a 
<br>
protocol or is it the infrastructure. I guess one question I have is if 
<br>
we separate BTLs from OMPI do we lose valuable information needed to 
<br>
establish and maintain the connections and could we run into some 
<br>
chicken/egg problems. I assume the last issue is only of concern if we 
<br>
remove the orte/opal dependencies.
<br>
<span class="quotelev1">&gt; What are alternative suggestions to the technical approach ?
</span><br>
The technical approach is really the implementation logistics, right? 
<br>
That is how do we apply these changes to the trunk such that they get in 
<br>
asap as to not require significant ongoing maintenance by the 
<br>
implementors and not disturb the community members that are doing other 
<br>
work.
<br>
<p>Branch and patch - protects the community members the most until it 
<br>
comes to the flag day of pushing the patch. But as you mention below 
<br>
this has a heavy cost on the implementors and eventually a potentially 
<br>
large blackout period.
<br>
<p>Incremental approach - If we believe this project will be large I 
<br>
success we try and map out all the different pieces and try and figure 
<br>
out ways we can compartmentalize each piece such that they can be 
<br>
putback separately from each other. This is similar to the branch and 
<br>
patch approach except we try and do several patchs that each can be 
<br>
reasonably tested and putback separate from the others. The hope is that 
<br>
each patch is not that large and thus easier for the implementors to 
<br>
maintain and merge. But this will require a more thought out plan as to 
<br>
how things are done which might be detrimental to any agile development.
<br>
<p>Scorched earth - Map a calendar time frame that we say from X to Y the 
<br>
trunk will be under major renovation to move out the BTLs from OMPI. 
<br>
This help the BTL movement developers but could put any other 
<br>
development at risk. It also commits us completely to doing the BTL 
<br>
separation so if things start falling a part it will definitely delay 
<br>
the next release.
<br>
<p>I personally prefer the Incremental Approach but we will need to have a 
<br>
very well thought out plan to get this to work. This approach could 
<br>
devolve into the other two approaches without careful planning, which I 
<br>
don't believe anyone would really like to to see.
<br>
<p>HTH,
<br>
<p>--td
<br>
<span class="quotelev1">&gt; One suggestion has been to branch and patch. To me this is a long-term 
</span><br>
<span class="quotelev1">&gt; maintenance nightmare.
</span><br>
<span class="quotelev1">&gt;
</span><br>
What are peoples thoughts here ?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5010.php">Ralph Castain: "Re: [OMPI devel] Jan ORTE meeting"</a>
<li><strong>Previous message:</strong> <a href="5008.php">Terry Dontje: "Re: [OMPI devel] Jan ORTE meeting"</a>
<li><strong>In reply to:</strong> <a href="5007.php">Richard Graham: "[OMPI devel] BTL move - the notion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5013.php">Richard Graham: "Re: [OMPI devel] BTL move - the notion"</a>
<li><strong>Reply:</strong> <a href="5013.php">Richard Graham: "Re: [OMPI devel] BTL move - the notion"</a>
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
