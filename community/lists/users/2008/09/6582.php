<?
$subject_val = "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 11:57:52 2008" -->
<!-- isoreceived="20080917155752" -->
<!-- sent="Wed, 17 Sep 2008 11:57:45 -0400" -->
<!-- isosent="20080917155745" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?" -->
<!-- id="8EC844A1-38E4-4C0B-9110-E20E2842B4C3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48D10B00.1060500_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 11:57:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6583.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6581.php">Jeff Squyres: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<li><strong>In reply to:</strong> <a href="6574.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 17, 2008, at 9:49 AM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; If we add an &quot; -x OPAL_PREFIX &quot; flag, and through forces explicitly  
</span><br>
<span class="quotelev1">&gt; forwarding of this environment variable, the error was not occured.  
</span><br>
<span class="quotelev1">&gt; So we mean that this variable is needed to be exported across *all*  
</span><br>
<span class="quotelev1">&gt; systhems in cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems, the variable OPAL_PREFIX  will *NOT* be automatically  
</span><br>
<span class="quotelev1">&gt; exported to new processes on the local and remote nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe the FAQ in <a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a> 
</span><br>
<span class="quotelev1">&gt;  should be extended in this mean?
</span><br>
<p><p>Hmm.  I don't know why it's not exporting for you -- it *is*  
<br>
automatically exporting OPAL_PREFIX for me (i.e., I don't need to  
<br>
specify it on the mpirun/-x command line).
<br>
<p>Is there any chance that your wrapper is overriding this variable, or  
<br>
erasing the environment, or somesuch?
<br>
<p>Ah -- here's another important point (after looking in the code):  
<br>
OPAL_PREFIX is only automatically propagated *by Open MPI* when using  
<br>
the rsh/ssh launcher.  Is that what you are using?  If not, OMPI  
<br>
assumes that the resource manager propagates mpirun's environment out  
<br>
to the back-end nodes.  If this does not happen, then you'll need to - 
<br>
x OPAL_PREFIX.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6583.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6581.php">Jeff Squyres: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<li><strong>In reply to:</strong> <a href="6574.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
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
