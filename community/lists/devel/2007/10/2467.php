<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 18 07:25:39 2007" -->
<!-- isoreceived="20071018112539" -->
<!-- sent="Thu, 18 Oct 2007 07:23:07 -0400" -->
<!-- isosent="20071018112307" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hybrid examples" -->
<!-- id="4717421B.7070709_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200710180915.51696.Tobias.Hilbrich_at_zih.tu-dresden.de" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-18 07:23:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2468.php">Sajjad Tabib: "[OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="2466.php">George Bosilca: "Re: [OMPI devel] putting common request completion waiting code	into separate inline function"</a>
<li><strong>In reply to:</strong> <a href="2463.php">Tobias Hilbrich: "Re: [OMPI devel] Hybrid examples"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tobias Hilbrich wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------- Original-Nachricht --------
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Datum: Wed, 17 Oct 2007 17:05:47 -0400
</span><br>
<span class="quotelev2">&gt;&gt; Von: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Betreff: Re: [OMPI devel] Hybrid examples
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; We've never made our ompi-tests SVN repository public mainly because  
</span><br>
<span class="quotelev2">&gt;&gt; it's mainly a collection of MPI benchmarks and tests that we've  
</span><br>
<span class="quotelev2">&gt;&gt; collected from around the net, but we've never looked into  
</span><br>
<span class="quotelev2">&gt;&gt; redistribution rights.  Hence, our SVN is not publicly readable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As the SVN URL implies, the thread tests came from Sun, so I think  
</span><br>
<span class="quotelev2">&gt;&gt; it's up to them as to whether they want them to be public or not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for your answer, is anyone from Sun here ? 
</span><br>
<span class="quotelev1">&gt; I am still interested in these tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Yes Sun is here.  We'd be more than happy to have you use the source.  
<br>
Though I still wonder since
<br>
U Dresden is a member of the Community why you don't request access to 
<br>
the ompi-test repository
<br>
(Edgar Gabriel mentioned this earlier).  I would rather you do that and 
<br>
possibly put back any potential
<br>
bug fixes there instead of creating and maintaining your own private 
<br>
repository.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; mfg Tobias Hilbrich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 4, 2007, at 7:22 AM, Tobias Hilbrich wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am a developer of MARMOT (MPI Checker) and currently working on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_THREAD_MULTIPLE programs. Therefore I am looking for test  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; examples which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are realy rare. I heard from Matthias M&#252;ller that you have a suit  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programs that use MPI_THREAD_MULTIPLE. They should be located at:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/sun/threads">https://svn.open-mpi.org/svn/ompi-tests/trunk/sun/threads</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunatly I and also the other people here in Dresden have no  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; access to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these examples. So it would be nice to get a login or to get these  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; examples
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in some other way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mfg Tobias Hilbrich
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2468.php">Sajjad Tabib: "[OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="2466.php">George Bosilca: "Re: [OMPI devel] putting common request completion waiting code	into separate inline function"</a>
<li><strong>In reply to:</strong> <a href="2463.php">Tobias Hilbrich: "Re: [OMPI devel] Hybrid examples"</a>
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
