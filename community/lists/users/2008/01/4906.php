<?
$subject_val = "Re: [OMPI users] Question about fault tolerance checkpointing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 13:24:54 2008" -->
<!-- isoreceived="20080129182454" -->
<!-- sent="Tue, 29 Jan 2008 19:24:51 +0100" -->
<!-- isosent="20080129182451" -->
<!-- name="Leonardo Fialho" -->
<!-- email="leonardofialho_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about fault tolerance checkpointing" -->
<!-- id="c8bcfafa0801291024h62dc622ax44b3846e58c1f503_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4161C916-76C2-4788-8D85-77885C2A5762_at_open-mpi.org" -->
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
<strong>From:</strong> Leonardo Fialho (<em>leonardofialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 13:24:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4907.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
<li><strong>Previous message:</strong> <a href="4905.php">Josh Hursey: "Re: [OMPI users] Question about fault tolerance checkpointing"</a>
<li><strong>In reply to:</strong> <a href="4905.php">Josh Hursey: "Re: [OMPI users] Question about fault tolerance checkpointing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
<p>At this moment I&#180;m working in the uncoordinated checkpoint, and
<br>
probably I&#180;ll have some tools to collect data from the process and
<br>
environment and probably from the application.
<br>
<p>About the application I&#180;m considering the possibility to do something
<br>
like this (MPI_Checkpoint??).
<br>
<p>Leonardo Fialho
<br>
<p>2008/1/29, Josh Hursey &lt;jjhursey_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Not at the moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would be a neat addition to Open MPI if application developers
</span><br>
<span class="quotelev1">&gt; see a need for it. There are many issues surrounding this type of a
</span><br>
<span class="quotelev1">&gt; feature (like any feature). Most of them surround what an application
</span><br>
<span class="quotelev1">&gt; expects and requires from such an API. One such question is whether an
</span><br>
<span class="quotelev1">&gt; MPI_Checkpoint function would imply a coordinated global checkpoint
</span><br>
<span class="quotelev1">&gt; with barrier or a local uncoordinated checkpoint or something else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The checkpoint/restart framework in Open MPI was designed to allow for
</span><br>
<span class="quotelev1">&gt; some exposure of the checkpoint/restart routines. So depending on what
</span><br>
<span class="quotelev1">&gt; you are looking for it may be fairly straight forward to expose a
</span><br>
<span class="quotelev1">&gt; simple checkpoint/restart API.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have not heard many requests for such an API, but I may be willing
</span><br>
<span class="quotelev1">&gt; to help investigate if users are interested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 29, 2008, at 11:37 AM, Wong, Wayne wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are there plans to provide an API that would allow a fault tolerant
</span><br>
<span class="quotelev2">&gt; &gt; enabled program to invoke checkpointing directly?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Wayne
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4907.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
<li><strong>Previous message:</strong> <a href="4905.php">Josh Hursey: "Re: [OMPI users] Question about fault tolerance checkpointing"</a>
<li><strong>In reply to:</strong> <a href="4905.php">Josh Hursey: "Re: [OMPI users] Question about fault tolerance checkpointing"</a>
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
