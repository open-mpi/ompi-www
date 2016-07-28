<?
$subject_val = "Re: [OMPI users] Valgrind writev() errors with 1.3.2.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 09:43:59 2009" -->
<!-- isoreceived="20090609134359" -->
<!-- sent="Tue, 9 Jun 2009 15:43:54 +0200" -->
<!-- isosent="20090609134354" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind writev() errors with 1.3.2." -->
<!-- id="9b0da5ce0906090643r773a36e1kacd052a8970c780d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47050A9D-3EBB-42B6-B59F-640F0A012FF8_at_cisco.com" -->
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
<strong>Date:</strong> 2009-06-09 09:43:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9575.php">jody: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Previous message:</strong> <a href="9573.php">Jeff Squyres: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>In reply to:</strong> <a href="9573.php">Jeff Squyres: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9575.php">jody: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9575.php">jody: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9581.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I made a suppression file for the irrelevant memory leaks of ompi:
<br>
I make no claim that it catches all  possible ones, but it catches all
<br>
that appear in my code.
<br>
<p>{
<br>
&nbsp;&nbsp;OMPI_Leaks-init-malloc
<br>
&nbsp;&nbsp;Memcheck:Leak
<br>
&nbsp;&nbsp;fun:malloc
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;fun:PMPI_Init
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;fun:main
<br>
}
<br>
<p>{
<br>
&nbsp;&nbsp;OMPI_Leaks-init-malloc2
<br>
&nbsp;&nbsp;Memcheck:Leak
<br>
&nbsp;&nbsp;fun:malloc
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;fun:PMPI_Init
<br>
}
<br>
<p>{
<br>
&nbsp;&nbsp;OMPI_Leaks-init-calloc
<br>
&nbsp;&nbsp;Memcheck:Leak
<br>
&nbsp;&nbsp;fun:calloc
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;fun:PMPI_Init
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;fun:main
<br>
}
<br>
<p>{
<br>
&nbsp;&nbsp;OMPI_Leaks-init-realloc
<br>
&nbsp;&nbsp;Memcheck:Leak
<br>
&nbsp;&nbsp;fun:realloc
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;fun:PMPI_Init
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;fun:main
<br>
}
<br>
<p>{
<br>
&nbsp;&nbsp;OMPI_Leaks-finalize-malloc
<br>
&nbsp;&nbsp;Memcheck:Leak
<br>
&nbsp;&nbsp;fun:malloc
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;fun:PMPI_Init
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;fun:main
<br>
}
<br>
<p>I guess one could proceed similarily for the uninitalized values
<br>
<p>Jody
<br>
<p>On Tue, Jun 9, 2009 at 3:28 PM, Jeff Squyres&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; This is worth adding to the FAQ.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 9, 2009, at 2:31 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 2009-06-08 at 23:41 -0600, tom fogal wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; There is a whole page on valgrind web page about this topic. Please
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; read
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://valgrind.org/docs/manual/manual-core.html#manual-core.suppress">http://valgrind.org/docs/manual/manual-core.html#manual-core.suppress</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; &#160; for more information.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Even better, Ralph (et al.) is if we could just make valgrind think
</span><br>
<span class="quotelev3">&gt;&gt; &gt; this is defined memory. &#160;One can do this with client requests:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; <a href="http://valgrind.org/docs/manual/mc-manual.html#mc-manual.clientreqs">http://valgrind.org/docs/manual/mc-manual.html#mc-manual.clientreqs</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using the Valgrind client requests unnecessarily is a very bad idea,
</span><br>
<span class="quotelev2">&gt;&gt; they are intended for where applications use their own memory allocator
</span><br>
<span class="quotelev2">&gt;&gt; (i.e. replace malloc/free) or are using custom kernel modules or
</span><br>
<span class="quotelev2">&gt;&gt; hardware which Valgrind doesn't know about.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The correct solution is either to not send un-initialised memory or to
</span><br>
<span class="quotelev2">&gt;&gt; suppress the error using a suppression file as George said. &#160;As the
</span><br>
<span class="quotelev2">&gt;&gt; error is from MPI_Init() you can safely ignore it from a end-user
</span><br>
<span class="quotelev2">&gt;&gt; perspective.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ashley.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ashley Pittman
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Padb - A parallel job viewer for cluster computing
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9575.php">jody: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Previous message:</strong> <a href="9573.php">Jeff Squyres: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>In reply to:</strong> <a href="9573.php">Jeff Squyres: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9575.php">jody: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9575.php">jody: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9581.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
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
