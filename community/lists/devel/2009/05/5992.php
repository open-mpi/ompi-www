<?
$subject_val = "Re: [OMPI devel] Revise paffinity method?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  8 13:21:31 2009" -->
<!-- isoreceived="20090508172131" -->
<!-- sent="Fri, 8 May 2009 12:21:14 -0500" -->
<!-- isosent="20090508172114" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Revise paffinity method?" -->
<!-- id="E92891BC-943F-4CF4-B8C3-7CA62DAA0773_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-08 13:21:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5993.php">ms3770_at_[hidden]: "[OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<li><strong>Previous message:</strong> <a href="5991.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>In reply to:</strong> <a href="5990.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jumping in late (travelling this morning). I think this is the right  
<br>
answer :).
<br>
<p>Brian
<br>
<p><pre>
-- 
Brian Barrett
There is an art . . . to flying. The knack lies in learning how to
throw yourself at the ground and miss.
On May 8, 2009, at 9:45, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; I think that's the way to go then - it also follows our &quot;the user is  
&gt; always right - even when they are wrong&quot; philosophy. I'll probably  
&gt; have to draw on others to help ensure that the paffinity modules all  
&gt; report appropriately.
&gt;
&gt; Think I have enough now to start on this - probably middle of next  
&gt; week.
&gt;
&gt; Thanks!
&gt;
&gt; On May 8, 2009, at 8:37 AM, Jeff Squyres wrote:
&gt;
&gt;&gt; On May 8, 2009, at 10:32 AM, Ralph Castain wrote:
&gt;&gt;
&gt;&gt;&gt; Actually, I was wondering (hot tub thought for the night) if the
&gt;&gt;&gt; paffinity system can't just tell us if the proc has been bound or  
&gt;&gt;&gt; not?
&gt;&gt;&gt; That would remove the need for YAP (i.e., yet another param).
&gt;&gt;&gt;
&gt;&gt;
&gt;&gt; Yes, it can.
&gt;&gt;
&gt;&gt; What it can't tell, though, is who set it.  So a user may have  
&gt;&gt; overridden the paffinity after main() starts but before MPI_INIT is  
&gt;&gt; invoked.
&gt;&gt;
&gt;&gt; But perhaps that's not a crime -- users can override the paffinity  
&gt;&gt; at their own risk (we actually have no way to preventing them from  
&gt;&gt; doing so).  So perhaps just checking if affinity is already set is  
&gt;&gt; a &quot;good enough&quot; mechanism for the MPI_INIT-set-paffinity logic to  
&gt;&gt; determine whether it should set affinity itself or not.
&gt;&gt;
&gt;&gt; -- 
&gt;&gt; Jeff Squyres
&gt;&gt; Cisco Systems
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5993.php">ms3770_at_[hidden]: "[OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<li><strong>Previous message:</strong> <a href="5991.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>In reply to:</strong> <a href="5990.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
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
