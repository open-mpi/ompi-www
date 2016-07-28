<?
$subject_val = "Re: [OMPI devel] gdb libmpi.dylib on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 14:02:55 2008" -->
<!-- isoreceived="20080919180255" -->
<!-- sent="Fri, 19 Sep 2008 14:02:40 -0400" -->
<!-- isosent="20080919180240" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] gdb libmpi.dylib on Leopard" -->
<!-- id="50D1CE7C-CE7B-4F51-BB15-BBB90A04344A_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080917163948.GA12004_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] gdb libmpi.dylib on Leopard<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 14:02:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4667.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4665.php">Ralf Wildenhues: "Re: [OMPI devel] Upgrade GNU auto tools?"</a>
<li><strong>In reply to:</strong> <a href="4655.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4667.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Reply:</strong> <a href="4667.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralf for the support. I upgraded to libtool 2.2.6 and it didn't  
<br>
solved the problem though. Still looking for somebody to confirm that  
<br>
its working or not working on their Mac.
<br>
<p>Aurelien
<br>
<p>Le 17 sept. 08 &#224; 12:39, Ralf Wildenhues a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hello Aur&#233;lien,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Aur&#233;lien Bouteiller wrote on Wed, Sep 17, 2008 at 06:32:11PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; I have been facing a weird problem for several month now (I guess  
</span><br>
<span class="quotelev2">&gt;&gt; since I
</span><br>
<span class="quotelev2">&gt;&gt; upgraded from Tiger to Leopard). I am unable to debug Open MPI  
</span><br>
<span class="quotelev2">&gt;&gt; using gdb
</span><br>
<span class="quotelev2">&gt;&gt; on my mac. The problem comes from gdb not being able to load  
</span><br>
<span class="quotelev2">&gt;&gt; symbols from
</span><br>
<span class="quotelev2">&gt;&gt; the dynamic libraries of Open MPI. I receive a message &quot;warning:  
</span><br>
<span class="quotelev2">&gt;&gt; Could
</span><br>
<span class="quotelev2">&gt;&gt; not find object file &quot;/Users/bouteill/ompi/debug.build/
</span><br>
<span class="quotelev2">&gt;&gt; opal/.libs/libopen-pal.lax/libmca_memory.a/memory_base_close.o&quot; - no
</span><br>
<span class="quotelev2">&gt;&gt; debug information available for &quot;../../../../trunk/opal/mca/memory/
</span><br>
<span class="quotelev2">&gt;&gt; base/memory_base_close.c&quot;.&quot;. As you can see, the path to the object  
</span><br>
<span class="quotelev2">&gt;&gt; file
</span><br>
<span class="quotelev2">&gt;&gt; containing the symbols is not correct. It links to the temporary  
</span><br>
<span class="quotelev2">&gt;&gt; files
</span><br>
<span class="quotelev2">&gt;&gt; expanded during the final stage link. As those files do not exist
</span><br>
<span class="quotelev2">&gt;&gt; anymore, gdb gets confused.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a vague memory that this is fixed in Libtool 2.2.6.  If you're
</span><br>
<span class="quotelev1">&gt; using an older version, please retry bootstrapping OpenMPI with that
</span><br>
<span class="quotelev1">&gt; one.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4667.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4665.php">Ralf Wildenhues: "Re: [OMPI devel] Upgrade GNU auto tools?"</a>
<li><strong>In reply to:</strong> <a href="4655.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4667.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Reply:</strong> <a href="4667.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
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
