<?
$subject_val = "Re: [OMPI users] Different CC for orte and opmi?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 16:09:27 2008" -->
<!-- isoreceived="20080609200927" -->
<!-- sent="Mon, 9 Jun 2008 13:02:56 -0700" -->
<!-- isosent="20080609200256" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Different CC for orte and opmi?" -->
<!-- id="32781610-3B7E-4AB6-8F71-6B47E52A6267_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1213041295.14757.12.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
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
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-09 16:02:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5856.php">jody: "[OMPI users] no reaction of remote hosts after ompi reinstall"</a>
<li><strong>Previous message:</strong> <a href="5854.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>In reply to:</strong> <a href="5854.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5857.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Reply:</strong> <a href="5857.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley,
<br>
<p>I am confused. In your first post you said orted fails, with link  
<br>
errors, when you try to launch a job. From this I inferred that the  
<br>
build and install steps for creating openmpi were successful. Was the  
<br>
build/install step successful. If so what dynamic libraries does ldd  
<br>
say that orted is using.
<br>
<p>Doug Reeder
<br>
On Jun 9, 2008, at 12:54 PM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Putting to side any religious views I might have about static linking
</span><br>
<span class="quotelev1">&gt; how would that help in this case?   It appears to be orted itself that
</span><br>
<span class="quotelev1">&gt; fails to link, I'm assuming that the application would actually run,
</span><br>
<span class="quotelev1">&gt; either because the LD_LIBRARY_PATH is set correctly on the front  
</span><br>
<span class="quotelev1">&gt; end or
</span><br>
<span class="quotelev1">&gt; the --prefix option to mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or do you mean static linking of the tools?  I could go for that if
</span><br>
<span class="quotelev1">&gt; there is a configure option for it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 2008-06-09 at 08:27 -0700, Doug Reeder wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ashley,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It could work but I think you would be better off to try and
</span><br>
<span class="quotelev2">&gt;&gt; statically link the intel libraries.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 9, 2008, at 4:34 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a way to use a different compiler for the orte component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the shared library component when using openmpi?  We are finding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we use icc to compile openmpi then orted fails with link errors  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; try and launch a job as the intel environment isn't loaded by  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We use the module command heavily and have modules for openmpi- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gnu and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-intel as well as a intel_compiler module.  To use openmpi-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we have to load intel_compiler by default on the compute nodes which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; isn't ideal, is it possible to compile the orte component with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the library component with icc?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yours,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ashley Pittman,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="5856.php">jody: "[OMPI users] no reaction of remote hosts after ompi reinstall"</a>
<li><strong>Previous message:</strong> <a href="5854.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>In reply to:</strong> <a href="5854.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5857.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Reply:</strong> <a href="5857.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
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
