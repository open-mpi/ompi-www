<?
$subject_val = "Re: [OMPI users] Different CC for orte and opmi?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 15:55:00 2008" -->
<!-- isoreceived="20080609195500" -->
<!-- sent="Mon, 09 Jun 2008 20:54:55 +0100" -->
<!-- isosent="20080609195455" -->
<!-- name="Ashley Pittman" -->
<!-- email="apittman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Different CC for orte and opmi?" -->
<!-- id="1213041295.14757.12.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
<!-- inreplyto="1D2FE8B7-8429-46F6-B263-1E27CF31CA51_at_rain.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Different CC for orte and opmi?<br>
<strong>From:</strong> Ashley Pittman (<em>apittman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-09 15:54:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5855.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Previous message:</strong> <a href="5853.php">Reuti: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>In reply to:</strong> <a href="5851.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5855.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Reply:</strong> <a href="5855.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Putting to side any religious views I might have about static linking
<br>
how would that help in this case?   It appears to be orted itself that
<br>
fails to link, I'm assuming that the application would actually run,
<br>
either because the LD_LIBRARY_PATH is set correctly on the front end or
<br>
the --prefix option to mpirun.
<br>
<p>Or do you mean static linking of the tools?  I could go for that if
<br>
there is a configure option for it.
<br>
<p>Ashley Pittman.
<br>
<p>On Mon, 2008-06-09 at 08:27 -0700, Doug Reeder wrote:
<br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It could work but I think you would be better off to try and  
</span><br>
<span class="quotelev1">&gt; statically link the intel libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On Jun 9, 2008, at 4:34 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to use a different compiler for the orte component and
</span><br>
<span class="quotelev2">&gt; &gt; the shared library component when using openmpi?  We are finding  
</span><br>
<span class="quotelev2">&gt; &gt; that if
</span><br>
<span class="quotelev2">&gt; &gt; we use icc to compile openmpi then orted fails with link errors when I
</span><br>
<span class="quotelev2">&gt; &gt; try and launch a job as the intel environment isn't loaded by default.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We use the module command heavily and have modules for openmpi-gnu and
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-intel as well as a intel_compiler module.  To use openmpi- 
</span><br>
<span class="quotelev2">&gt; &gt; intel
</span><br>
<span class="quotelev2">&gt; &gt; we have to load intel_compiler by default on the compute nodes which
</span><br>
<span class="quotelev2">&gt; &gt; isn't ideal, is it possible to compile the orte component with gcc and
</span><br>
<span class="quotelev2">&gt; &gt; the library component with icc?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yours,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ashley Pittman,
</span><br>
<span class="quotelev2">&gt; &gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5855.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Previous message:</strong> <a href="5853.php">Reuti: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>In reply to:</strong> <a href="5851.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5855.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Reply:</strong> <a href="5855.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
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
