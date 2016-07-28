<?
$subject_val = "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 10:16:33 2013" -->
<!-- isoreceived="20130107151633" -->
<!-- sent="Mon, 7 Jan 2013 16:09:19 +0100 (CET)" -->
<!-- isosent="20130107150919" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI] #3351: JAVA scatter error" -->
<!-- id="201301071509.r07F9J2E017037_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] [Open MPI] #3351: JAVA scatter error" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI] #3351: JAVA scatter error<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-07 10:09:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21084.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>Previous message:</strong> <a href="21082.php">Yoshiki SATO: "[OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20966.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21108.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Reply:</strong> <a href="21108.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p><span class="quotelev3">&gt; &gt;&gt; I think the real shortcoming is that there is no Datatype.Resized
</span><br>
<span class="quotelev3">&gt; &gt;&gt; function.  That can be fixed.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Are you sure? That would at least solve one problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's a first cut at a patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know if this is fully correct; I don't quite understand
</span><br>
<span class="quotelev1">&gt; yet how baseSize is used in the .java files, but it seems
</span><br>
<span class="quotelev1">&gt; incorrect to me.
</span><br>
<p>I manually applied your patch to openmpi-1.9a1r27668, because
<br>
&quot;patch -i resized.patch&quot; couldn't find ompi/mpi/java/c/mpijava.exp
<br>
(it seems that this file isn't available in any tar ball). Furthermore
<br>
I modified your version of ColumnScatterMain.java.
<br>
<p>tyr Squyres 121 diff ColumnScatterMain.java*
<br>
11c11
<br>
&lt;       Datatype tmp_column_t, column_t;
<br>
<pre>
---
&gt;       Datatype column_t;
31,32c31
&lt;       tmp_column_t = Datatype.Vector (P, 1, Q, MPI.DOUBLE);
&lt;       column_t     = Datatype.Resized (tmp_column_t, 0, 8);
---
&gt;       column_t = Datatype.Vector (P, 1, Q, MPI.DOUBLE);
34d32
&lt;       tmp_column_t.finalize ();
Now I got the correct column values. Do you know how I can get the
size of MPI.DOUBLE or a different datatype (Java doesn't support
&quot;sizeof&quot; as far as I know)? I will rewrite my programs with 2D arrays
so that they only use 1D arrays if Open MPI cannot provide a solution
for Datatype.Vector which supports Java 2D arrays. Thank you very
much for your help.
Kind regards
Siegmar
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21084.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>Previous message:</strong> <a href="21082.php">Yoshiki SATO: "[OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20966.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21108.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Reply:</strong> <a href="21108.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
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
