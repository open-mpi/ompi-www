<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 12 13:15:26 2006" -->
<!-- isoreceived="20061012171526" -->
<!-- sent="Thu, 12 Oct 2006 19:15:14 +0200" -->
<!-- isosent="20061012171514" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Issues with 1.2 and intel/portland compilers" -->
<!-- id="20061012171514.GE4884_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="452E73E0.4010408_at_cora.nwra.com" -->
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
<strong>Date:</strong> 2006-10-12 13:15:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1111.php">Brian W. Barrett: "[OMPI devel] configure changes tonight"</a>
<li><strong>Previous message:</strong> <a href="1109.php">Orion Poplawski: "[OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
<li><strong>In reply to:</strong> <a href="1109.php">Orion Poplawski: "[OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1134.php">Jeff Squyres: "Re: [OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
<li><strong>Reply:</strong> <a href="1134.php">Jeff Squyres: "Re: [OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Orion,
<br>
<p>* Orion Poplawski wrote on Thu, Oct 12, 2006 at 06:57:04PM CEST:
<br>
<span class="quotelev1">&gt; I've been trying to build the openmpi 1.2 branch with the Intel and 
</span><br>
<span class="quotelev1">&gt; Portland Fortran compilers and was having trouble using their 
</span><br>
<span class="quotelev1">&gt; -i-static/-Bstatic_pgi options.
</span><br>
<p>Your report touches several issues:
<br>
<p><span class="quotelev1">&gt; I'm not sure what the most cross platform way to return only the first 
</span><br>
<span class="quotelev1">&gt; argument is.
</span><br>
<p>ompi_setup_f77.m4 should allow for more than one word in $F77.
<br>
Autoconf typically uses something like this to extract the first word:
<br>
<p># Extract the first word of &quot;$ac_prog&quot;, so it can be a program name with args.
<br>
set dummy $ac_prog; ac_word=$2
<br>
<p>so OpenMPI could use that, too (with variable names changed, of
<br>
course, so they don't interfere with Autoconf's),
<br>
<p><span class="quotelev1">&gt; Of course, if there was a way to get these passed to the appropriate 
</span><br>
<span class="quotelev1">&gt; link stages, we could avoid this.  But it looks like libtool strips the 
</span><br>
<span class="quotelev1">&gt; -i-static argument and doesn't pass it on to the link command, not sure 
</span><br>
<span class="quotelev1">&gt; about the -Bstatic_pgi argument.
</span><br>
<p>Yes, this is a problem.  On the libtool command lines, you can use
<br>
&nbsp;&nbsp;-Wc,-i-static
<br>
<p>to get -i-static passed to the compiler driver; and
<br>
&nbsp;&nbsp;-Wl,-i-static
<br>
<p>to get it passed to the linker directly (but that would be wrong in this
<br>
case).  Unfortunately, you may not in general be able to stuff this in
<br>
LDFLAGS at configure time (I haven't tried, it may just happen to work),
<br>
so one different way would be to stick it in at make time only:
<br>
&nbsp;&nbsp;make LDFLAGS=...
<br>
<p>But then, configuring with 
<br>
<span class="quotelev1">&gt; FC=&quot;ifort -i-static&quot;
</span><br>
<p>is a much better option: it tests the right setting at configure time.
<br>
<p>Note there may still be issues: libtool should actually be able to
<br>
understand what -i-static really means (and for example not worry about
<br>
those libraries that are linked statically).  But the FC setting should
<br>
get you going.
<br>
<p>Hope that helps.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1111.php">Brian W. Barrett: "[OMPI devel] configure changes tonight"</a>
<li><strong>Previous message:</strong> <a href="1109.php">Orion Poplawski: "[OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
<li><strong>In reply to:</strong> <a href="1109.php">Orion Poplawski: "[OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1134.php">Jeff Squyres: "Re: [OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
<li><strong>Reply:</strong> <a href="1134.php">Jeff Squyres: "Re: [OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
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
