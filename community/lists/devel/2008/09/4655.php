<?
$subject_val = "Re: [OMPI devel] gdb libmpi.dylib on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 12:39:54 2008" -->
<!-- isoreceived="20080917163954" -->
<!-- sent="Wed, 17 Sep 2008 18:39:48 +0200" -->
<!-- isosent="20080917163948" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] gdb libmpi.dylib on Leopard" -->
<!-- id="20080917163948.GA12004_at_ins.uni-bonn.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DBA84ED0-9985-4207-99A2-0ED9BD3896AA_at_eecs.utk.edu" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 12:39:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4656.php">Jeff Squyres: "[OMPI devel] Upgrade GNU auto tools?"</a>
<li><strong>Previous message:</strong> <a href="4654.php">Aur&#233;lien Bouteiller: "[OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>In reply to:</strong> <a href="4654.php">Aur&#233;lien Bouteiller: "[OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4666.php">Aurélien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Reply:</strong> <a href="4666.php">Aurélien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Aur&#233;lien,
<br>
<p>* Aur&#233;lien Bouteiller wrote on Wed, Sep 17, 2008 at 06:32:11PM CEST:
<br>
<span class="quotelev1">&gt; I have been facing a weird problem for several month now (I guess since I 
</span><br>
<span class="quotelev1">&gt; upgraded from Tiger to Leopard). I am unable to debug Open MPI using gdb 
</span><br>
<span class="quotelev1">&gt; on my mac. The problem comes from gdb not being able to load symbols from 
</span><br>
<span class="quotelev1">&gt; the dynamic libraries of Open MPI. I receive a message &quot;warning: Could 
</span><br>
<span class="quotelev1">&gt; not find object file &quot;/Users/bouteill/ompi/debug.build/ 
</span><br>
<span class="quotelev1">&gt; opal/.libs/libopen-pal.lax/libmca_memory.a/memory_base_close.o&quot; - no  
</span><br>
<span class="quotelev1">&gt; debug information available for &quot;../../../../trunk/opal/mca/memory/ 
</span><br>
<span class="quotelev1">&gt; base/memory_base_close.c&quot;.&quot;. As you can see, the path to the object file 
</span><br>
<span class="quotelev1">&gt; containing the symbols is not correct. It links to the temporary files 
</span><br>
<span class="quotelev1">&gt; expanded during the final stage link. As those files do not exist 
</span><br>
<span class="quotelev1">&gt; anymore, gdb gets confused.
</span><br>
<p>I have a vague memory that this is fixed in Libtool 2.2.6.  If you're
<br>
using an older version, please retry bootstrapping OpenMPI with that
<br>
one.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4656.php">Jeff Squyres: "[OMPI devel] Upgrade GNU auto tools?"</a>
<li><strong>Previous message:</strong> <a href="4654.php">Aur&#233;lien Bouteiller: "[OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>In reply to:</strong> <a href="4654.php">Aur&#233;lien Bouteiller: "[OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4666.php">Aurélien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Reply:</strong> <a href="4666.php">Aurélien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
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
