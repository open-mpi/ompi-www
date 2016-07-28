<?
$subject_val = "Re: [OMPI devel] gdb libmpi.dylib on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 15:44:56 2008" -->
<!-- isoreceived="20080919194456" -->
<!-- sent="Fri, 19 Sep 2008 15:44:46 -0400" -->
<!-- isosent="20080919194446" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] gdb libmpi.dylib on Leopard" -->
<!-- id="BB6B3902-267D-4654-AE7B-A77DCCF27BF8_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EBB6C903-BC9A-40F9-B712-3046FFA80EF9_at_cisco.com" -->
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
<strong>Date:</strong> 2008-09-19 15:44:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4670.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4668.php">Jeff Squyres: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>In reply to:</strong> <a href="4668.php">Jeff Squyres: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4670.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Reply:</strong> <a href="4670.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok,
<br>
<p>I didn't forgot to rerun autogen.sh (I even erased the libltdl, and  
<br>
various libtool wrappers that are generated at autogen/configure  
<br>
time). I checked the link Ralf submitted to our attention. This is  
<br>
exactly the same problem, or at least the same symptoms. The last  
<br>
version of libtool runs dsymutil on the created .so/.dylib, but the  
<br>
bad thing is that dsymutil returns similar warning message about  
<br>
missing &quot;.lax&quot; files. Therefore, even running it manually on the .dsym  
<br>
does not help.
<br>
<p>I upgraded (compiled my own copy) my gcc to 4.3.2 (you should do it  
<br>
too, Jeff, the experimental have been giving me headaches in the  
<br>
past). Now, I also have the same warning messages for internal libs of  
<br>
gcc than for open MPI. This leads me to believe this is not an Open  
<br>
MPI bug, but more probably a libtool/ld issue.
<br>
<p>I'll switch to linux for my devel for now, but if you have any success  
<br>
story...
<br>
<p>Aurelien
<br>
<p>Le 19 sept. 08 &#224; 15:20, Jeff Squyres a &#233;crit :
<br>
<p><span class="quotelev1">&gt; I get the same problem on my MBP with 10.5.5.  However, I'm running  
</span><br>
<span class="quotelev1">&gt; the gcc from hpc.sf.net:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; [15:16] rtp-jsquyres-8713:~/mpi % gcc --version
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.3.0 20071026 (experimental)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not the /usr/bin/gcc that ships with Leopard.  I don't know if that  
</span><br>
<span class="quotelev1">&gt; matters or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using AC 2.63, AM 1.10.1, LT 2.2.6a with a fairly vanilla build  
</span><br>
<span class="quotelev1">&gt; of Open MPI:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/Users/jsquyres/bogus --disable-mpi-f77 -- 
</span><br>
<span class="quotelev1">&gt; enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's what happens -- I fire up an MPI program and it deadlocks.  I  
</span><br>
<span class="quotelev1">&gt; attach to an MPI process PID with gdb (I am using /usr/bin/gdb --  
</span><br>
<span class="quotelev1">&gt; the Leopard-shipped gdb).  I get oodles of messages like Aurelien's:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; warning: Could not find object file &quot;/data/jsquyres/svn/ompi/ 
</span><br>
<span class="quotelev1">&gt; ompi/.libs/libmpi.lax/libdatatype.a/convertor.o&quot; - no debug  
</span><br>
<span class="quotelev1">&gt; information available for &quot;convertor.c&quot;.
</span><br>
<span class="quotelev1">&gt; warning: Could not find object file &quot;/data/jsquyres/svn/ompi/ 
</span><br>
<span class="quotelev1">&gt; ompi/.libs/libmpi.lax/libdatatype.a/copy_functions.o&quot; - no debug  
</span><br>
<span class="quotelev1">&gt; information available for &quot;copy_functions.c&quot;.
</span><br>
<span class="quotelev1">&gt; warning: Could not find object file &quot;/data/jsquyres/svn/ompi/ 
</span><br>
<span class="quotelev1">&gt; ompi/.libs/libmpi.lax/libdatatype.a/copy_functions_heterogeneous.o&quot;  
</span><br>
<span class="quotelev1">&gt; - no debug information available for &quot;copy_functions_heterogeneous.c&quot;.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 19, 2008, at 2:31 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Aur&#233;lien Bouteiller wrote on Fri, Sep 19, 2008 at 08:02:40PM CEST:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Ralf for the support. I upgraded to libtool 2.2.6 and it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; didn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; solved the problem though. Still looking for somebody to confirm  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; its working or not working on their Mac.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you rerun autogen.sh?  All I know is that your report looks  
</span><br>
<span class="quotelev2">&gt;&gt; really
</span><br>
<span class="quotelev2">&gt;&gt; similar to &lt;<a href="http://gcc.gnu.org/ml/gcc/2008-08/msg00054.html">http://gcc.gnu.org/ml/gcc/2008-08/msg00054.html</a>&gt; and that
</span><br>
<span class="quotelev2">&gt;&gt; one is apparently solved with Libtool 2.2.6.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If yours is still broken, then some more details would be nice.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Ralf
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4670.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4668.php">Jeff Squyres: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>In reply to:</strong> <a href="4668.php">Jeff Squyres: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4670.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Reply:</strong> <a href="4670.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
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
