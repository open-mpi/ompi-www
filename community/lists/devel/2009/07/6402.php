<?
$subject_val = "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 13:50:46 2009" -->
<!-- isoreceived="20090714175046" -->
<!-- sent="Tue, 14 Jul 2009 13:50:41 -0400" -->
<!-- isosent="20090714175041" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer" -->
<!-- id="5C6EDB25-8098-40DB-8235-126DB795C3CC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200907141323.27568.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-14 13:50:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6403.php">Ralph Castain: "[OMPI devel] Fwd: Open MPI v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="6401.php">Rainer Keller: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>In reply to:</strong> <a href="6401.php">Rainer Keller: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6411.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually you do not need BLCR to check the checkpoint/restart stuff.  
<br>
Just enable the C/R FT code lines (--with-ft=cr), and it should build.  
<br>
BLCR is only one component of the OPAL CRS framework. If it is not  
<br>
available then it will choose one of application level alternatives.
<br>
<p>I updated the wiki to reflect this point.
<br>
<p>-- Josh
<br>
<p>On Jul 14, 2009, at 1:23 PM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; 2.) didn't check with checkpoint restart (I'd need to setup blcr on  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; computer again) -- the code was accessing the ddt-structures directly.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6403.php">Ralph Castain: "[OMPI devel] Fwd: Open MPI v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="6401.php">Rainer Keller: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>In reply to:</strong> <a href="6401.php">Rainer Keller: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6411.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
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
