<?
$subject_val = "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 24 09:19:04 2009" -->
<!-- isoreceived="20090424131904" -->
<!-- sent="Fri, 24 Apr 2009 14:19:00 +0100" -->
<!-- isosent="20090424131900" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules" -->
<!-- id="49F1BC44.4040807_at_ntlworld.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20090424144323.14955bu7f7xe6lez_at_mail.tu-chemnitz.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules<br>
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-24 09:19:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5865.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Previous message:</strong> <a href="5863.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Maybe in reply to:</strong> <a href="5862.php">Number Cruncher: "[OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5914.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christian Siebert wrote:
<br>
<span class="quotelev1">&gt; Hi Number Cruncher,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With, or without, C++ bindings, I'm getting serious warnings when 
</span><br>
<span class="quotelev2">&gt;&gt; compiling *any* C++ program which #includes &lt;mpi.h&gt;: &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that's one of the many reasons why the C++ bindings will very likely be 
</span><br>
<span class="quotelev1">&gt; removed in the next version of the MPI standard. If you really rely on 
</span><br>
<span class="quotelev1">&gt; C++ then you might try sth. like the Boost C++ Libraries ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Christian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Indeed boost::mpi is really good and I am using it, but it won't help 
<br>
here. But my problem exists ***without*** the C++ bindings. It should be 
<br>
possible for my C++ code to call the MPI C standard API without such 
<br>
warnings!
<br>
<p>It's fundamentally wrong to expect a C++ compiler to alias a 
<br>
&quot;ompi_predefined_communicator_t *&quot; to a &quot;ompi_communicator_t *&quot; unless 
<br>
it has the full definition of such types available. I'm not an expert, 
<br>
but I think the C standard is a bit more lax here.
<br>
<p>The bottom line is that spotting aliasing from types is a good thing and 
<br>
gives C++ better optimisation opportunities (e.g. Fortran has no 
<br>
aliasing). See <a href="http://en.wikipedia.org/wiki/Aliasing_(computing">http://en.wikipedia.org/wiki/Aliasing_(computing</a>) for a 
<br>
decent discussion.
<br>
<p>Simon.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5865.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Previous message:</strong> <a href="5863.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Maybe in reply to:</strong> <a href="5862.php">Number Cruncher: "[OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5914.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
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
