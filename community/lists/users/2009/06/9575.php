<?
$subject_val = "Re: [OMPI users] Valgrind writev() errors with 1.3.2.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 09:45:25 2009" -->
<!-- isoreceived="20090609134525" -->
<!-- sent="Tue, 9 Jun 2009 15:45:20 +0200" -->
<!-- isosent="20090609134520" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind writev() errors with 1.3.2." -->
<!-- id="9b0da5ce0906090645s760be64dx3359b7e160261596_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0906090643r773a36e1kacd052a8970c780d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Valgrind writev() errors with 1.3.2.<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 09:45:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9576.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for	a	single	machine	installation ?"</a>
<li><strong>Previous message:</strong> <a href="9574.php">jody: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>In reply to:</strong> <a href="9574.php">jody: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9581.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should add that the &quot;...&quot; are verbatim, not ellipses which indicate
<br>
that i left something out!
<br>
<p>On Tue, Jun 9, 2009 at 3:43 PM, jody&lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I made a suppression file for the irrelevant memory leaks of ompi:
</span><br>
<span class="quotelev1">&gt; I make no claim that it catches all &#160;possible ones, but it catches all
</span><br>
<span class="quotelev1">&gt; that appear in my code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; &#160;OMPI_Leaks-init-malloc
</span><br>
<span class="quotelev1">&gt; &#160;Memcheck:Leak
</span><br>
<span class="quotelev1">&gt; &#160;fun:malloc
</span><br>
<span class="quotelev1">&gt; &#160;...
</span><br>
<span class="quotelev1">&gt; &#160;fun:PMPI_Init
</span><br>
<span class="quotelev1">&gt; &#160;...
</span><br>
<span class="quotelev1">&gt; &#160;fun:main
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; &#160;OMPI_Leaks-init-malloc2
</span><br>
<span class="quotelev1">&gt; &#160;Memcheck:Leak
</span><br>
<span class="quotelev1">&gt; &#160;fun:malloc
</span><br>
<span class="quotelev1">&gt; &#160;...
</span><br>
<span class="quotelev1">&gt; &#160;fun:PMPI_Init
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; &#160;OMPI_Leaks-init-calloc
</span><br>
<span class="quotelev1">&gt; &#160;Memcheck:Leak
</span><br>
<span class="quotelev1">&gt; &#160;fun:calloc
</span><br>
<span class="quotelev1">&gt; &#160;...
</span><br>
<span class="quotelev1">&gt; &#160;fun:PMPI_Init
</span><br>
<span class="quotelev1">&gt; &#160;...
</span><br>
<span class="quotelev1">&gt; &#160;fun:main
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; &#160;OMPI_Leaks-init-realloc
</span><br>
<span class="quotelev1">&gt; &#160;Memcheck:Leak
</span><br>
<span class="quotelev1">&gt; &#160;fun:realloc
</span><br>
<span class="quotelev1">&gt; &#160;...
</span><br>
<span class="quotelev1">&gt; &#160;fun:PMPI_Init
</span><br>
<span class="quotelev1">&gt; &#160;...
</span><br>
<span class="quotelev1">&gt; &#160;fun:main
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; &#160;OMPI_Leaks-finalize-malloc
</span><br>
<span class="quotelev1">&gt; &#160;Memcheck:Leak
</span><br>
<span class="quotelev1">&gt; &#160;fun:malloc
</span><br>
<span class="quotelev1">&gt; &#160;...
</span><br>
<span class="quotelev1">&gt; &#160;fun:PMPI_Init
</span><br>
<span class="quotelev1">&gt; &#160;...
</span><br>
<span class="quotelev1">&gt; &#160;fun:main
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess one could proceed similarily for the uninitalized values
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 9, 2009 at 3:28 PM, Jeff Squyres&lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This is worth adding to the FAQ.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 9, 2009, at 2:31 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, 2009-06-08 at 23:41 -0600, tom fogal wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; There is a whole page on valgrind web page about this topic. Please
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; read
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; <a href="http://valgrind.org/docs/manual/manual-core.html#manual-core.suppress">http://valgrind.org/docs/manual/manual-core.html#manual-core.suppress</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; &#160; for more information.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Even better, Ralph (et al.) is if we could just make valgrind think
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; this is defined memory. &#160;One can do this with client requests:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; <a href="http://valgrind.org/docs/manual/mc-manual.html#mc-manual.clientreqs">http://valgrind.org/docs/manual/mc-manual.html#mc-manual.clientreqs</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using the Valgrind client requests unnecessarily is a very bad idea,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they are intended for where applications use their own memory allocator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (i.e. replace malloc/free) or are using custom kernel modules or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hardware which Valgrind doesn't know about.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The correct solution is either to not send un-initialised memory or to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suppress the error using a suppression file as George said. &#160;As the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error is from MPI_Init() you can safely ignore it from a end-user
</span><br>
<span class="quotelev3">&gt;&gt;&gt; perspective.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ashley.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ashley Pittman
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Padb - A parallel job viewer for cluster computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9576.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for	a	single	machine	installation ?"</a>
<li><strong>Previous message:</strong> <a href="9574.php">jody: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>In reply to:</strong> <a href="9574.php">jody: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9581.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
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
