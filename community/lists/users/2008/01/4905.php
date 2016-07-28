<?
$subject_val = "Re: [OMPI users] Question about fault tolerance checkpointing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 13:16:46 2008" -->
<!-- isoreceived="20080129181646" -->
<!-- sent="Tue, 29 Jan 2008 13:16:42 -0500" -->
<!-- isosent="20080129181642" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about fault tolerance checkpointing" -->
<!-- id="4161C916-76C2-4788-8D85-77885C2A5762_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="755A7FC671B5C84B9467E77829ACFCCD32FE31_at_ava-es5.solers.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about fault tolerance checkpointing<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 13:16:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4906.php">Leonardo Fialho: "Re: [OMPI users] Question about fault tolerance checkpointing"</a>
<li><strong>Previous message:</strong> <a href="4904.php">Wong, Wayne: "[OMPI users] Question about fault tolerance checkpointing"</a>
<li><strong>In reply to:</strong> <a href="4904.php">Wong, Wayne: "[OMPI users] Question about fault tolerance checkpointing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4906.php">Leonardo Fialho: "Re: [OMPI users] Question about fault tolerance checkpointing"</a>
<li><strong>Reply:</strong> <a href="4906.php">Leonardo Fialho: "Re: [OMPI users] Question about fault tolerance checkpointing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not at the moment.
<br>
<p>This would be a neat addition to Open MPI if application developers  
<br>
see a need for it. There are many issues surrounding this type of a  
<br>
feature (like any feature). Most of them surround what an application  
<br>
expects and requires from such an API. One such question is whether an  
<br>
MPI_Checkpoint function would imply a coordinated global checkpoint  
<br>
with barrier or a local uncoordinated checkpoint or something else.
<br>
<p>The checkpoint/restart framework in Open MPI was designed to allow for  
<br>
some exposure of the checkpoint/restart routines. So depending on what  
<br>
you are looking for it may be fairly straight forward to expose a  
<br>
simple checkpoint/restart API.
<br>
<p>I have not heard many requests for such an API, but I may be willing  
<br>
to help investigate if users are interested.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Jan 29, 2008, at 11:37 AM, Wong, Wayne wrote:
<br>
<p><span class="quotelev1">&gt; Are there plans to provide an API that would allow a fault tolerant  
</span><br>
<span class="quotelev1">&gt; enabled program to invoke checkpointing directly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Wayne
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4906.php">Leonardo Fialho: "Re: [OMPI users] Question about fault tolerance checkpointing"</a>
<li><strong>Previous message:</strong> <a href="4904.php">Wong, Wayne: "[OMPI users] Question about fault tolerance checkpointing"</a>
<li><strong>In reply to:</strong> <a href="4904.php">Wong, Wayne: "[OMPI users] Question about fault tolerance checkpointing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4906.php">Leonardo Fialho: "Re: [OMPI users] Question about fault tolerance checkpointing"</a>
<li><strong>Reply:</strong> <a href="4906.php">Leonardo Fialho: "Re: [OMPI users] Question about fault tolerance checkpointing"</a>
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
