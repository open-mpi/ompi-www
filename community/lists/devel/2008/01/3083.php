<?
$subject_val = "Re: [OMPI devel] RES:  v pml question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 15:01:14 2008" -->
<!-- isoreceived="20080129200114" -->
<!-- sent="Tue, 29 Jan 2008 15:01:10 -0500" -->
<!-- isosent="20080129200110" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RES:  v pml question" -->
<!-- id="CE400FD8-D508-4D5D-A043-0F1D048E60FF_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="00ed01c85e0a$a179ff30$02fefe0a_at_Leonardo" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RES:  v pml question<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 15:01:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3084.php">Ralph H Castain: "Re: [OMPI devel] Orte collectives"</a>
<li><strong>Previous message:</strong> <a href="3082.php">Richard Graham: "Re: [OMPI devel] Orte collectives"</a>
<li><strong>In reply to:</strong> <a href="3026.php">Leonardo Fialho: "[OMPI devel] RES:  v pml question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3085.php">Aurélien Bouteiller: "Re: [OMPI devel] RES:  v pml question"</a>
<li><strong>Reply:</strong> <a href="3085.php">Aurélien Bouteiller: "Re: [OMPI devel] RES:  v pml question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At the moment I do not plan on joining the crcpw and v_protocol.
<br>
<p>However those two components may currently work just fine together.  
<br>
They are both designed to wrap around whatever the 'selected' PML  
<br>
happens to be. If you tried to do this, I would expect the PML call  
<br>
stack to look something like the following:
<br>
PML_SEND -&gt; v_protocol -&gt; crcpw -&gt; ob1/cm
<br>
<p>But since I have not tried this out I cannot say for sure. Let us know  
<br>
if you have any problems.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Jan 23, 2008, at 4:55 PM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; I'm testing the v protocol just now. Anybody have plans to do a  
</span><br>
<span class="quotelev1">&gt; message
</span><br>
<span class="quotelev1">&gt; wrapper mixing crcpw and v_protocol?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leonardo Fialho
</span><br>
<span class="quotelev1">&gt; University Autonoma of Barcelona
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
<li><strong>Next message:</strong> <a href="3084.php">Ralph H Castain: "Re: [OMPI devel] Orte collectives"</a>
<li><strong>Previous message:</strong> <a href="3082.php">Richard Graham: "Re: [OMPI devel] Orte collectives"</a>
<li><strong>In reply to:</strong> <a href="3026.php">Leonardo Fialho: "[OMPI devel] RES:  v pml question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3085.php">Aurélien Bouteiller: "Re: [OMPI devel] RES:  v pml question"</a>
<li><strong>Reply:</strong> <a href="3085.php">Aurélien Bouteiller: "Re: [OMPI devel] RES:  v pml question"</a>
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
