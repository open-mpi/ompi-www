<?
$subject_val = "Re: [OMPI users] WRF Slow Down";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 13:11:06 2009" -->
<!-- isoreceived="20090317171106" -->
<!-- sent="Tue, 17 Mar 2009 12:11:02 -0500" -->
<!-- isosent="20090317171102" -->
<!-- name="Elvedin Trnjanin" -->
<!-- email="trnja001_at_[hidden]" -->
<!-- subject="Re: [OMPI users] WRF Slow Down" -->
<!-- id="49BFD9A6.7020801_at_umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d3075b2b0903170801x2c8be648h31f8d139a6043153_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] WRF Slow Down<br>
<strong>From:</strong> Elvedin Trnjanin (<em>trnja001_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 13:11:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8485.php">Ethan Mallove: "Re: [OMPI users] compile crash with pathscale and openmpi-1.3"</a>
<li><strong>Previous message:</strong> <a href="8483.php">Jeff Squyres: "Re: [OMPI users] Run-time problem"</a>
<li><strong>In reply to:</strong> <a href="8482.php">Philip Hayes: "[OMPI users] WRF Slow Down"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you switched versions of OMPI and this behavior surfaced with that? 
<br>
Which version are you running and which version(s) do you know work? 
<br>
What about system specs - multiple cores, processors?
<br>
<p>I have experience with versions 1.2.5 and 1.2.8 running WRF with 4x DDR 
<br>
Infiniband working without that behavior.
<br>
<p>Philip Hayes wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running WRF simulations on multiple nodes and am running into 
</span><br>
<span class="quotelev1">&gt; problems where the simulation will randomly slow down.  The model 
</span><br>
<span class="quotelev1">&gt; still works, but slows down tremendously.  I looked at the each node 
</span><br>
<span class="quotelev1">&gt; and found that 1 node will only be using 25% of the CPU, while the 
</span><br>
<span class="quotelev1">&gt; others are using 100%.  Is there a chance that this is related to 
</span><br>
<span class="quotelev1">&gt; MPI?  I can resubmit the same run on a different nodes and sometimes 
</span><br>
<span class="quotelev1">&gt; it will work, and other times it slows down.   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any commands I can utilize that could point me to what is 
</span><br>
<span class="quotelev1">&gt; causing the node only to use 25%?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8485.php">Ethan Mallove: "Re: [OMPI users] compile crash with pathscale and openmpi-1.3"</a>
<li><strong>Previous message:</strong> <a href="8483.php">Jeff Squyres: "Re: [OMPI users] Run-time problem"</a>
<li><strong>In reply to:</strong> <a href="8482.php">Philip Hayes: "[OMPI users] WRF Slow Down"</a>
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
