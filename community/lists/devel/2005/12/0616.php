<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 13 16:06:14 2005" -->
<!-- isoreceived="20051213210614" -->
<!-- sent="Tue, 13 Dec 2005 16:06:06 -0500" -->
<!-- isosent="20051213210606" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="rsh and fork pls components" -->
<!-- id="9EA9623B-EE14-46AC-A743-91217D197069_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-13 16:06:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0617.php">Ralph H. Castain: "Re:  rsh and fork pls components"</a>
<li><strong>Previous message:</strong> <a href="0615.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0617.php">Ralph H. Castain: "Re:  rsh and fork pls components"</a>
<li><strong>Reply:</strong> <a href="0617.php">Ralph H. Castain: "Re:  rsh and fork pls components"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd like to suggest a change for the rsh and fork pls components  
<br>
based on some real-world feedback.
<br>
<p>The rsh pls, despite its name, defaults to using &quot;ssh -x&quot; instead of  
<br>
&quot;rsh&quot;.
<br>
<p>For users who do not have ssh in their PATH (e.g., for clusters that  
<br>
are walled off from the rest of the net and only have rsh), the rsh  
<br>
pls component will disqualify itself during selection and therefore  
<br>
the &quot;fork&quot; pls will get selected, which will fail when it tries to  
<br>
launch for a variety of reasons (it's only designed to work within  
<br>
the orted).
<br>
<p>1. I'd like to change the meaning of the pls_rsh_agent MCA parameter  
<br>
to be a colon-delimited list of agents to search for.  This is still  
<br>
backwards-compatible -- if someone does the following:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca pla_rsh_agent rsh -np 4 a.out
<br>
<p>That also still works.  But we might want to extend the default value  
<br>
from:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ssh -x
<br>
to:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ssh -x : rsh
<br>
<p>So that if &quot;ssh&quot; is not found in the $PATH, we'll then try to find  
<br>
&quot;rsh&quot; and use that if it's found.
<br>
<p>If the rsh pls cannot find any of the agents in the list, then it  
<br>
should disqualify itself from selection.
<br>
<p>2. I'd like to add some kind of check to the fork pls so that it  
<br>
never allows itself to be selected outside of the orted.  I'm not  
<br>
sure what that check would entail (haven't looked at the code yet),  
<br>
but we should prevent this situation because we know it will fail  
<br>
(and currently produce a cryptic error message for the user).
<br>
<p>I'd like to get both of these in for v1.0.2.
<br>
<p>Comments?
<br>
<p><pre>
--
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0617.php">Ralph H. Castain: "Re:  rsh and fork pls components"</a>
<li><strong>Previous message:</strong> <a href="0615.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0617.php">Ralph H. Castain: "Re:  rsh and fork pls components"</a>
<li><strong>Reply:</strong> <a href="0617.php">Ralph H. Castain: "Re:  rsh and fork pls components"</a>
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
