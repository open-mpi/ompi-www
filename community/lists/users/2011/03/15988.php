<?
$subject_val = "Re: [OMPI users] Is there an mca parameter equivalent	to	-bind-to-core?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 21:38:46 2011" -->
<!-- isoreceived="20110325013846" -->
<!-- sent="Thu, 24 Mar 2011 21:38:37 -0400" -->
<!-- isosent="20110325013837" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is there an mca parameter equivalent	to	-bind-to-core?" -->
<!-- id="4D8BF21D.4070308_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E36B46E7-FA18-40FD-99E1-0814168467BA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Is there an mca parameter equivalent	to	-bind-to-core?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-24 21:38:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15989.php">Brock Palen: "Re: [OMPI users] MPI_AllReduce() deadlock on IB"</a>
<li><strong>Previous message:</strong> <a href="15987.php">Jeff Squyres: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="15980.php">Jeff Squyres: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15990.php">Jeff Squyres: "Re: [OMPI users] Is there an mca parameter equivalent	to	-bind-to-core?"</a>
<li><strong>Reply:</strong> <a href="15990.php">Jeff Squyres: "Re: [OMPI users] Is there an mca parameter equivalent	to	-bind-to-core?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 23, 2011, at 4:20 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, now when I do &quot;ompi_info -a&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; the output shows the non-default value 1 twice in a row,
</span><br>
<span class="quotelev2">&gt;&gt; then later it shows the default value 0 again!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's because we wanted to confuse you!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry about that; this is a legitimate bug.  
</span><br>
<span class="quotelev1">&gt; I've fixed it on the trunk and submitted CMRs for both v1.4 and v1.5.  
</span><br>
<span class="quotelev1">&gt; I believe that the correct value is actually being used, despite what 
</span><br>
<span class="quotelev1">&gt; your ompi_info is saying.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (I can explain further, if you care)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thank you Jeff, Ralph, Eugene
<br>
<p>As far as I can tell by observing [Open]MPI processes
<br>
with top (with 'f' &amp; 'J'), and by using the mpiexec --report-bindings 
<br>
switch, each process is indeed bound to a single core.
<br>
This binding happens whether I request it with the
<br>
mpiexec --bind-to-core switch,
<br>
or if I put the line 'opal_paffinity_alone = 1'
<br>
in the openmpi-mca-params.conf file,
<br>
exactly as Ralph said it would be.
<br>
<p>Hence, the two contradictory values of mpi_paffinity_alone
<br>
(1 and 0) reported by 'ompi_info -all', really seem
<br>
to have been nothing but a cheap plot by Jeff
<br>
to emulate the conspiracy against my sanity
<br>
long held by the cosmogenic flipping bits and the flaky logic gates.
<br>
<p>Gullible folks like me have always been reluctant
<br>
to learn this lesson.
<br>
In MPI, as in foreign policy, it seems to be
<br>
as that late president used to say:
<br>
&quot;Trust, but verify.&quot;
<br>
<p>Cheers,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15989.php">Brock Palen: "Re: [OMPI users] MPI_AllReduce() deadlock on IB"</a>
<li><strong>Previous message:</strong> <a href="15987.php">Jeff Squyres: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="15980.php">Jeff Squyres: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15990.php">Jeff Squyres: "Re: [OMPI users] Is there an mca parameter equivalent	to	-bind-to-core?"</a>
<li><strong>Reply:</strong> <a href="15990.php">Jeff Squyres: "Re: [OMPI users] Is there an mca parameter equivalent	to	-bind-to-core?"</a>
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
