<?
$subject_val = "Re: [OMPI users] Infiniband requirements";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 18:32:41 2009" -->
<!-- isoreceived="20090625223241" -->
<!-- sent="Thu, 25 Jun 2009 18:32:32 -0400" -->
<!-- isosent="20090625223232" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband requirements" -->
<!-- id="4A43FB00.2000505_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0228C6B6F0A7447C8B0B30FB7E65B37E_at_inspiron9100" -->
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
<strong>Subject:</strong> Re: [OMPI users] Infiniband requirements<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 18:32:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9726.php">Jeff Squyres: "Re: [OMPI users] Infiniband requirements"</a>
<li><strong>Previous message:</strong> <a href="9724.php">George Bosilca: "Re: [OMPI users] MX questions"</a>
<li><strong>In reply to:</strong> <a href="9714.php">Jim Kress: "[OMPI users] Infiniband requirements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9782.php">Prentice Bisbal: "Re: [OMPI users] Infiniband requirements"</a>
<li><strong>Reply:</strong> <a href="9782.php">Prentice Bisbal: "Re: [OMPI users] Infiniband requirements"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jim, list
<br>
<p>1) Your first question:
<br>
<p>I opened a thread on this list two months or so ago about a similar
<br>
situation: when OpenMPI would use/not use libnuma.
<br>
I asked a question very similar to your question about IB support,
<br>
and how the configure script would provide it or not.
<br>
Jeff answerer it, and I asked him to post the answer in the FAQ,
<br>
which he kindly did (or an edited version of it):
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#default-build">http://www.open-mpi.org/faq/?category=building#default-build</a>
<br>
<p>The wisdom is that OpenMPI will search for IB on standard places,
<br>
and will use it if it finds it.
<br>
If you don't have IB on a standard place, then you can use the
<br>
switch --with-openib=/dir to force IB to be part of your OpenMPI.
<br>
If I understood it right, the bottom line is that you
<br>
only don't get IB if it is hidden, or doesn't exist.
<br>
<p>2) Your second question:
<br>
<p>As for the --enable-static question, I don't know the answer.
<br>
I defer this one to the OpenMPI developers.
<br>
I confess I have no explanation for why &quot;-lrdmacm -libverbs&quot;
<br>
are listed amongst the &quot;Wrapper extra LIBS&quot; when OpenMPI is configured
<br>
with --enable-static, but those IB library flags are absent
<br>
when --enable-static is not used.
<br>
(Maybe because the dynamic linker does a smarter search.)
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>Jim Kress wrote:
<br>
<span class="quotelev1">&gt; Is it correct to assume that, when one is configuring openmpi v1.3.2 and if
</span><br>
<span class="quotelev1">&gt; one leaves out the
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --with-openib=/dir
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from the ./configure command line, that InfiniBand support will NOT be built
</span><br>
<span class="quotelev1">&gt; into openmpi v1.3.2?  Then, if an Ethernet network is present that connects
</span><br>
<span class="quotelev1">&gt; all the nodes, openmpi will use that network?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, is it required to add
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --enable-static
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to the ./configure command line to make sure Infiniband support is
</span><br>
<span class="quotelev1">&gt; available?  
</span><br>
<span class="quotelev1">&gt; If I do not then the ompi_info --config command yields
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wrapper extra LIBS:  -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note the absence of -lrdmacm and -libverbs which, I am told, are essential
</span><br>
<span class="quotelev1">&gt; for Infiniband support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Whereas if --enable-static IS included, the ompi_info --config command
</span><br>
<span class="quotelev1">&gt; yields
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wrapper extra LIBS: -lrdmacm -libverbs  -ldl -Wl,--export-dynamic -lnsl
</span><br>
<span class="quotelev1">&gt; -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And  -lrdmacm and -libverbs are now present.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jim
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9726.php">Jeff Squyres: "Re: [OMPI users] Infiniband requirements"</a>
<li><strong>Previous message:</strong> <a href="9724.php">George Bosilca: "Re: [OMPI users] MX questions"</a>
<li><strong>In reply to:</strong> <a href="9714.php">Jim Kress: "[OMPI users] Infiniband requirements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9782.php">Prentice Bisbal: "Re: [OMPI users] Infiniband requirements"</a>
<li><strong>Reply:</strong> <a href="9782.php">Prentice Bisbal: "Re: [OMPI users] Infiniband requirements"</a>
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
