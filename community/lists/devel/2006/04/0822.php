<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 04:31:53 2006" -->
<!-- isoreceived="20060410083153" -->
<!-- sent="Mon, 10 Apr 2006 10:31:45 +0200" -->
<!-- isosent="20060410083145" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="[OMPI devel] [OT] padding and integer types" -->
<!-- id="20060410083145.GB9313_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-10 04:31:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0823.php">Brian Barrett: "Re: [OMPI devel] [OT] padding and integer types"</a>
<li><strong>Previous message:</strong> <a href="0821.php">Brian Barrett: "Re: [OMPI devel] Build is breaking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0823.php">Brian Barrett: "Re: [OMPI devel] [OT] padding and integer types"</a>
<li><strong>Reply:</strong> <a href="0823.php">Brian Barrett: "Re: [OMPI devel] [OT] padding and integer types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Apologies for a slightly off-topic (Autoconf-related) question.
<br>
<p>I believe OpenMPI deals with Fortran implementations where integer
<br>
types contain internal padding (i.e., not all bits are used for the
<br>
value); at least I read the configure macros this way.
<br>
<p>Is padding in C types a practical issue as well?  Say, a 'short' with a
<br>
maximum value of 32767 but 32 or 64 bits storage size?
<br>
<p>The only system we found that exhibits this was a Cray Y-MP from the
<br>
cray-cyber museum (it's accessible and usable), but we don't know of
<br>
more modern systems that do this.
<br>
<p>Background: there is discussion[1] over a macro to compute such ranges,
<br>
fit also for cross compilation, but we're unsure about its practical
<br>
value.  I figured the readers here may have more such experience.
<br>
<p>Cheers, and apologies again,
<br>
Ralf
<br>
<p>[1] <a href="http://thread.gmane.org/gmane.comp.sysutils.autoconf.patches/2745/focus=3117">http://thread.gmane.org/gmane.comp.sysutils.autoconf.patches/2745/focus=3117</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0823.php">Brian Barrett: "Re: [OMPI devel] [OT] padding and integer types"</a>
<li><strong>Previous message:</strong> <a href="0821.php">Brian Barrett: "Re: [OMPI devel] Build is breaking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0823.php">Brian Barrett: "Re: [OMPI devel] [OT] padding and integer types"</a>
<li><strong>Reply:</strong> <a href="0823.php">Brian Barrett: "Re: [OMPI devel] [OT] padding and integer types"</a>
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
