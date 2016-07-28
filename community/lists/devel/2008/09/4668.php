<?
$subject_val = "Re: [OMPI devel] gdb libmpi.dylib on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 15:20:33 2008" -->
<!-- isoreceived="20080919192033" -->
<!-- sent="Fri, 19 Sep 2008 15:20:27 -0400" -->
<!-- isosent="20080919192027" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] gdb libmpi.dylib on Leopard" -->
<!-- id="EBB6C903-BC9A-40F9-B712-3046FFA80EF9_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080919183106.GA27507_at_ins.uni-bonn.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 15:20:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4669.php">Aurélien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4667.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>In reply to:</strong> <a href="4667.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4669.php">Aurélien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Reply:</strong> <a href="4669.php">Aurélien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I get the same problem on my MBP with 10.5.5.  However, I'm running  
<br>
the gcc from hpc.sf.net:
<br>
<p>-----
<br>
[15:16] rtp-jsquyres-8713:~/mpi % gcc --version
<br>
gcc (GCC) 4.3.0 20071026 (experimental)
<br>
...
<br>
-----
<br>
<p>Not the /usr/bin/gcc that ships with Leopard.  I don't know if that  
<br>
matters or not.
<br>
<p>I'm using AC 2.63, AM 1.10.1, LT 2.2.6a with a fairly vanilla build of  
<br>
Open MPI:
<br>
<p>./configure --prefix=/Users/jsquyres/bogus --disable-mpi-f77 --enable- 
<br>
mpirun-prefix-by-default
<br>
<p>Here's what happens -- I fire up an MPI program and it deadlocks.  I  
<br>
attach to an MPI process PID with gdb (I am using /usr/bin/gdb -- the  
<br>
Leopard-shipped gdb).  I get oodles of messages like Aurelien's:
<br>
<p>-----
<br>
warning: Could not find object file &quot;/data/jsquyres/svn/ompi/ 
<br>
ompi/.libs/libmpi.lax/libdatatype.a/convertor.o&quot; - no debug  
<br>
information available for &quot;convertor.c&quot;.
<br>
warning: Could not find object file &quot;/data/jsquyres/svn/ompi/ 
<br>
ompi/.libs/libmpi.lax/libdatatype.a/copy_functions.o&quot; - no debug  
<br>
information available for &quot;copy_functions.c&quot;.
<br>
warning: Could not find object file &quot;/data/jsquyres/svn/ompi/ 
<br>
ompi/.libs/libmpi.lax/libdatatype.a/copy_functions_heterogeneous.o&quot; -  
<br>
no debug information available for &quot;copy_functions_heterogeneous.c&quot;.
<br>
-----
<br>
<p><p>On Sep 19, 2008, at 2:31 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; * Aur&#233;lien Bouteiller wrote on Fri, Sep 19, 2008 at 08:02:40PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Ralf for the support. I upgraded to libtool 2.2.6 and it  
</span><br>
<span class="quotelev2">&gt;&gt; didn't
</span><br>
<span class="quotelev2">&gt;&gt; solved the problem though. Still looking for somebody to confirm that
</span><br>
<span class="quotelev2">&gt;&gt; its working or not working on their Mac.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you rerun autogen.sh?  All I know is that your report looks really
</span><br>
<span class="quotelev1">&gt; similar to &lt;<a href="http://gcc.gnu.org/ml/gcc/2008-08/msg00054.html">http://gcc.gnu.org/ml/gcc/2008-08/msg00054.html</a>&gt; and that
</span><br>
<span class="quotelev1">&gt; one is apparently solved with Libtool 2.2.6.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If yours is still broken, then some more details would be nice.
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4669.php">Aurélien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4667.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>In reply to:</strong> <a href="4667.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4669.php">Aurélien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Reply:</strong> <a href="4669.php">Aurélien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
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
