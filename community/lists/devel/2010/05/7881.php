<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 06:36:32 2010" -->
<!-- isoreceived="20100504103632" -->
<!-- sent="04 May 2010 11:36:28 +0100" -->
<!-- isosent="20100504103628" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing" -->
<!-- id="Prayer.1.3.2.1005041136280.28930_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BDFECB5.5050000_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 06:36:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7882.php">Ralph Castain: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7880.php">Terry Dontje: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7880.php">Terry Dontje: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7882.php">Ralph Castain: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 4 2010, Terry Dontje wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Is a configure-time test good enough?  For example, are all Linuxes the 
</span><br>
<span class="quotelev1">&gt;same in this regard.  That is if you built OMPI on RH and it configured 
</span><br>
<span class="quotelev1">&gt;in the new SysV SM will those bits actually run on other Linux systems 
</span><br>
<span class="quotelev1">&gt;correctly?  I think Jeff had hinted to this similarly when suggesting 
</span><br>
<span class="quotelev1">&gt;this may need to be a runtime test. 
</span><br>
<p>A very good question.  It is clearly NOT good enough for the affinity
<br>
problems I mentioned, because they are changeable by system configuration,
<br>
but this is more basic.  I don't remember seeing any parameters to change
<br>
the behaviour of System V shared memory, as distinct from its constants.
<br>
<p>Five years ago, I would have guessed &quot;no&quot;, because this is exactly the
<br>
sort of area where the single-CPU and multi-CPU kernels differed, but
<br>
I believe that there is less of that sort of thing nowadays.  However,
<br>
it's worth watching out for.
<br>
<p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7882.php">Ralph Castain: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7880.php">Terry Dontje: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7880.php">Terry Dontje: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7882.php">Ralph Castain: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
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
