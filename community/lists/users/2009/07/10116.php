<?
$subject_val = "[OMPI users] init failing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 04:07:18 2009" -->
<!-- isoreceived="20090728080718" -->
<!-- sent="Tue, 28 Jul 2009 10:07:11 +0200" -->
<!-- isosent="20090728080711" -->
<!-- name="Dominik T&#225;borsk&#253;" -->
<!-- email="bremby_at_[hidden]" -->
<!-- subject="[OMPI users] init failing" -->
<!-- id="1248768431.4204.18.camel_at_eddy" -->
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
<strong>Subject:</strong> [OMPI users] init failing<br>
<strong>From:</strong> Dominik T&#225;borsk&#253; (<em>bremby_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-28 04:07:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10117.php">Dominic Walsh: "[OMPI users] Vampir Trace &amp; -fPIC"</a>
<li><strong>Previous message:</strong> <a href="10115.php">Terry Frankcombe: "Re: [OMPI users] Installation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10245.php">Jeff Squyres: "Re: [OMPI users] init failing"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10245.php">Jeff Squyres: "Re: [OMPI users] init failing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I am trying to build my own system for my nodes - minimalistic. I tried
<br>
to make things easy so I didn't even recompile openMPI for it, I just
<br>
copied everything from my Ubuntu installation (I know, it's very dirty,
<br>
but I stick to KISS :) ). Before, things just worked perfectly with the
<br>
libraries. I only recompile executable binaries, not Glibc (not openMPI,
<br>
I also didn't succeed compiling openMPI but that's a different story).
<br>
<p>So, as I keep trying to run Hello world! program, I keep getting the
<br>
same error message every time. Everything in the system is fine from my
<br>
point of view. The error message is this:
<br>
<p>[user:24307] mca: base: components_open: component timer / linux open
<br>
function failed
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_carto_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -13 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[user:24307] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
<br>
file ../../../orte/runtime/orte_init.c at line 77
<br>
[user:24307] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
<br>
file ../../../orte/orted/orted_main.c at line 315
<br>
<p>I tried googling and searching the archives, nothing gave me a hint.
<br>
What might be missing? Should I really try to recompile openMPI? What
<br>
needs to be on/off in the kernel? Any ideas?
<br>
<p>Thanks in advance,
<br>
<p>bremby
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10117.php">Dominic Walsh: "[OMPI users] Vampir Trace &amp; -fPIC"</a>
<li><strong>Previous message:</strong> <a href="10115.php">Terry Frankcombe: "Re: [OMPI users] Installation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10245.php">Jeff Squyres: "Re: [OMPI users] init failing"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10245.php">Jeff Squyres: "Re: [OMPI users] init failing"</a>
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
