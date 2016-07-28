<?
$subject_val = "[OMPI users] Fortran features and interfaces (was: Strange behaviour OpenMPI in Fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 11:15:29 2016" -->
<!-- isoreceived="20160126161529" -->
<!-- sent="Tue, 26 Jan 2016 16:15:27 +0000" -->
<!-- isosent="20160126161527" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="[OMPI users] Fortran features and interfaces (was: Strange behaviour OpenMPI in Fortran)" -->
<!-- id="87powoco68.fsf_-__at_pc102091.liv.ac.uk" -->
<!-- inreplyto="55C02283-338B-4E96-A9A1-57F6F12B6FE6_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] Fortran features and interfaces (was: Strange behaviour OpenMPI in Fortran)<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-26 11:15:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28389.php">Gilles Gouaillardet: "Re: [OMPI users] build failure with NAG Fortran"</a>
<li><strong>Previous message:</strong> <a href="28387.php">Nick Papior: "Re: [OMPI users] build failure with NAG Fortran"</a>
<li><strong>In reply to:</strong> <a href="28369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28347.php">Gilles Gouaillardet: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; The following from the v1.10 README file may shed some light on your question:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi-release/blob/v1.10/README#L370-L405">https://github.com/open-mpi/ompi-release/blob/v1.10/README#L370-L405</a>
</span><br>
<p>Thanks; I should have remembered this.
<br>
<p>However, it's not generally true, as that says, that a non-GNU Fortran
<br>
compiler will provide interfaces for the &quot;choice&quot; buffers corresponding
<br>
to C void*.  [&quot;Prototype&quot; isn't a Fortran term as far as I know.]  The
<br>
NAG compiler apparently wouldn't (if the build didn't fail, per previous
<br>
mail).
<br>
<p>As I couldn't see this spelt out anywhere, for info the relevant GCC
<br>
release note is:
<br>
<p>* The new NO_ARG_CHECK attribute of the !GCC$ directive can be used to
<br>
&nbsp;&nbsp;disable the type-kind-rank (TKR) argument check for a dummy
<br>
&nbsp;&nbsp;argument. The feature is similar to ISO/IEC TS 29133:2012's TYPE(*),
<br>
&nbsp;&nbsp;except that it additionally also disables the rank check. Variables
<br>
&nbsp;&nbsp;with NO_ARG_CHECK have to be dummy arguments and may only be used as
<br>
&nbsp;&nbsp;argument to ISO_C_BINDING's C_LOC and as actual argument to another
<br>
&nbsp;&nbsp;NO_ARG_CHECK dummy argument; also the other constraints of TYPE(*)
<br>
&nbsp;&nbsp;apply. The dummy arguments should be declared as scalar or
<br>
&nbsp;&nbsp;assumed-size variable of type type(*) (recommended) - or of type
<br>
&nbsp;&nbsp;integer, real, complex or logical. With NO_ARG_CHECK, a pointer to the
<br>
&nbsp;&nbsp;data without further type or shape information is passed, similar to
<br>
&nbsp;&nbsp;C's void*.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28389.php">Gilles Gouaillardet: "Re: [OMPI users] build failure with NAG Fortran"</a>
<li><strong>Previous message:</strong> <a href="28387.php">Nick Papior: "Re: [OMPI users] build failure with NAG Fortran"</a>
<li><strong>In reply to:</strong> <a href="28369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28347.php">Gilles Gouaillardet: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
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
