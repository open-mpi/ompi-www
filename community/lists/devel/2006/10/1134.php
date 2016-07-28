<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 21 10:28:23 2006" -->
<!-- isoreceived="20061021142823" -->
<!-- sent="Sat, 21 Oct 2006 10:28:18 -0400" -->
<!-- isosent="20061021142818" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Issues with 1.2 and intel/portland compilers" -->
<!-- id="3B40C9D4-B6E5-4A53-938F-C4C362502B06_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061012171514.GE4884_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-21 10:28:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1135.php">Lisandro Dalcin: "Re: [OMPI devel] [Open MPI] #529: MPI_START* returning OMPI_* error codes"</a>
<li><strong>Previous message:</strong> <a href="1133.php">Jeff Squyres: "Re: [OMPI devel] Fwd: MPI_GROUP_TRANSLATE_RANKS (again)"</a>
<li><strong>In reply to:</strong> <a href="1110.php">Ralf Wildenhues: "Re: [OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay on replying to this.  Thanks for the bug report  
<br>
and the suggested fix!
<br>
<p>I'm committed the fix to the trunk; it'll make its way to the release  
<br>
branches shortly.
<br>
<p><p>On Oct 12, 2006, at 1:15 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello Orion,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Orion Poplawski wrote on Thu, Oct 12, 2006 at 06:57:04PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; I've been trying to build the openmpi 1.2 branch with the Intel and
</span><br>
<span class="quotelev2">&gt;&gt; Portland Fortran compilers and was having trouble using their
</span><br>
<span class="quotelev2">&gt;&gt; -i-static/-Bstatic_pgi options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your report touches several issues:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure what the most cross platform way to return only the  
</span><br>
<span class="quotelev2">&gt;&gt; first
</span><br>
<span class="quotelev2">&gt;&gt; argument is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_setup_f77.m4 should allow for more than one word in $F77.
</span><br>
<span class="quotelev1">&gt; Autoconf typically uses something like this to extract the first word:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Extract the first word of &quot;$ac_prog&quot;, so it can be a program name  
</span><br>
<span class="quotelev1">&gt; with args.
</span><br>
<span class="quotelev1">&gt; set dummy $ac_prog; ac_word=$2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so OpenMPI could use that, too (with variable names changed, of
</span><br>
<span class="quotelev1">&gt; course, so they don't interfere with Autoconf's),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course, if there was a way to get these passed to the appropriate
</span><br>
<span class="quotelev2">&gt;&gt; link stages, we could avoid this.  But it looks like libtool  
</span><br>
<span class="quotelev2">&gt;&gt; strips the
</span><br>
<span class="quotelev2">&gt;&gt; -i-static argument and doesn't pass it on to the link command, not  
</span><br>
<span class="quotelev2">&gt;&gt; sure
</span><br>
<span class="quotelev2">&gt;&gt; about the -Bstatic_pgi argument.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, this is a problem.  On the libtool command lines, you can use
</span><br>
<span class="quotelev1">&gt;   -Wc,-i-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to get -i-static passed to the compiler driver; and
</span><br>
<span class="quotelev1">&gt;   -Wl,-i-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to get it passed to the linker directly (but that would be wrong in  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; case).  Unfortunately, you may not in general be able to stuff this in
</span><br>
<span class="quotelev1">&gt; LDFLAGS at configure time (I haven't tried, it may just happen to  
</span><br>
<span class="quotelev1">&gt; work),
</span><br>
<span class="quotelev1">&gt; so one different way would be to stick it in at make time only:
</span><br>
<span class="quotelev1">&gt;   make LDFLAGS=...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But then, configuring with
</span><br>
<span class="quotelev2">&gt;&gt; FC=&quot;ifort -i-static&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is a much better option: it tests the right setting at configure time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note there may still be issues: libtool should actually be able to
</span><br>
<span class="quotelev1">&gt; understand what -i-static really means (and for example not worry  
</span><br>
<span class="quotelev1">&gt; about
</span><br>
<span class="quotelev1">&gt; those libraries that are linked statically).  But the FC setting  
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev1">&gt; get you going.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1135.php">Lisandro Dalcin: "Re: [OMPI devel] [Open MPI] #529: MPI_START* returning OMPI_* error codes"</a>
<li><strong>Previous message:</strong> <a href="1133.php">Jeff Squyres: "Re: [OMPI devel] Fwd: MPI_GROUP_TRANSLATE_RANKS (again)"</a>
<li><strong>In reply to:</strong> <a href="1110.php">Ralf Wildenhues: "Re: [OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
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
