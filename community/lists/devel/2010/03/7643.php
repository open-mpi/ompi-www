<?
$subject_val = "Re: [OMPI devel] vt compilation problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 09:16:05 2010" -->
<!-- isoreceived="20100322131605" -->
<!-- sent="Mon, 22 Mar 2010 14:15:59 +0100" -->
<!-- isosent="20100322131559" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vt compilation problem" -->
<!-- id="201003221415.59988.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BA3CBC5.5000609_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] vt compilation problem<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-22 09:15:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7644.php">herbey zepeda: "[OMPI devel] Location of binaries"</a>
<li><strong>Previous message:</strong> <a href="7642.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>In reply to:</strong> <a href="7640.php">Terry Dontje: "[OMPI devel] vt compilation problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed! Thanks for this hint.
<br>
<p>On Friday 19 March 2010 20:08:53 Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; I was trying to compile the trunk head using Linux and Sun Studio
</span><br>
<span class="quotelev1">&gt; compilers and saw the following error.  I am not sure that the compiler
</span><br>
<span class="quotelev1">&gt; really is the smoking gun.  I see that State.cpp was last modified in
</span><br>
<span class="quotelev1">&gt; r22820 and I wonder if the modification added the usage of
</span><br>
<span class="quotelev1">&gt; &quot;__FUNCTION__&quot; outside an ifdef of OTF_VERBOSE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyways, have anyone else ran into this issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          CC -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I../../../../../../../../../ompi/contrib/vt/vt/extlib/otf/tools/otfaux
</span><br>
<span class="quotelev1">&gt; -I../.. -I../../otflib
</span><br>
<span class="quotelev1">&gt; -I../../../../../../../../../ompi/contrib/vt/vt/extlib/otf/otflib
</span><br>
<span class="quotelev1">&gt; -I../../../../../../../../../ompi/contrib/vt/vt/extlib/otf
</span><br>
<span class="quotelev1">&gt; -DINSIDE_OPENMPI    -m64 -c -o State.o
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../../ompi/contrib/vt/vt/extlib/otf/tools/otfaux/State
</span><br>
<span class="quotelev1">&gt; .cpp
</span><br>
<span class="quotelev1">&gt;  &quot;../../../../../../../../../ompi/contrib/vt/vt/extlib/otf/tools/otfaux/Sta
</span><br>
<span class="quotelev1">&gt; te.cpp&quot;, line 180: Error: __FUNCTION__ is not defined.
</span><br>
<span class="quotelev1">&gt; 1 Error(s) detected.
</span><br>
<span class="quotelev1">&gt; make[9]: *** [State.o] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7644.php">herbey zepeda: "[OMPI devel] Location of binaries"</a>
<li><strong>Previous message:</strong> <a href="7642.php">Pascal Deveze: "Re: [OMPI devel] Problem with MPI_Type_indexed and hole (defined with MPI_Type_create_resized )"</a>
<li><strong>In reply to:</strong> <a href="7640.php">Terry Dontje: "[OMPI devel] vt compilation problem"</a>
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
