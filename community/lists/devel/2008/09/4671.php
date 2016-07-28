<?
$subject_val = "Re: [OMPI devel] gdb libmpi.dylib on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 17:22:51 2008" -->
<!-- isoreceived="20080919212251" -->
<!-- sent="Fri, 19 Sep 2008 17:22:43 -0400" -->
<!-- isosent="20080919212243" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] gdb libmpi.dylib on Leopard" -->
<!-- id="E50BC8E1-B108-4AB2-B624-DF169F2CCF07_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080919210810.GA28210_at_ins.uni-bonn.de" -->
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
<strong>Date:</strong> 2008-09-19 17:22:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4672.php">Jeff Squyres: "[OMPI devel] Fwd:  gdb libmpi.dylib on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4670.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>In reply to:</strong> <a href="4670.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4673.php">Aurélien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Reply:</strong> <a href="4673.php">Aurélien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for following up!
<br>
<p>Aurelien, I'll leave this to you -- I rarely do OMPI development on my  
<br>
Mac...
<br>
<p><p>On Sep 19, 2008, at 5:08 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I asked Peter O'Gorman about this issue, and he said
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | I believe that running dsymutil on the generated lib would then  
</span><br>
<span class="quotelev1">&gt; create a
</span><br>
<span class="quotelev1">&gt; | libfoo.dSYM in the .libs directory conatining all the necessary
</span><br>
<span class="quotelev1">&gt; | debugging information, which could be used for debugging the  
</span><br>
<span class="quotelev1">&gt; library in
</span><br>
<span class="quotelev1">&gt; | the build tree (gdb should find it sitting there next to the  
</span><br>
<span class="quotelev1">&gt; original
</span><br>
<span class="quotelev1">&gt; | library and use the debug information  in the .dSYM).  
</span><br>
<span class="quotelev1">&gt; Libtool-2.2.6 does
</span><br>
<span class="quotelev1">&gt; | run dsymutil and create the .dSYM though...
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | There should be a libmpi.dylib in a .libs directory and a
</span><br>
<span class="quotelev1">&gt; | libmpi.dylib.dSYM directory next to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, he said that it could help if you reported a bug at
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://bugreporter.apple.com">http://bugreporter.apple.com</a>&gt;, under the notion that the
</span><br>
<span class="quotelev1">&gt; more people file bugs with them, the more they will understand
</span><br>
<span class="quotelev1">&gt; what problems users have with the dsymutils issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Aur&#233;lien Bouteiller wrote on Fri, Sep 19, 2008 at 09:44:46PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; Ok,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I didn't forgot to rerun autogen.sh (I even erased the libltdl, and
</span><br>
<span class="quotelev2">&gt;&gt; various libtool wrappers that are generated at autogen/configure  
</span><br>
<span class="quotelev2">&gt;&gt; time). I
</span><br>
<span class="quotelev2">&gt;&gt; checked the link Ralf submitted to our attention. This is exactly the
</span><br>
<span class="quotelev2">&gt;&gt; same problem, or at least the same symptoms. The last version of  
</span><br>
<span class="quotelev2">&gt;&gt; libtool
</span><br>
<span class="quotelev2">&gt;&gt; runs dsymutil on the created .so/.dylib, but the bad thing is that
</span><br>
<span class="quotelev2">&gt;&gt; dsymutil returns similar warning message about missing &quot;.lax&quot; files.
</span><br>
<span class="quotelev2">&gt;&gt; Therefore, even running it manually on the .dsym does not help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I upgraded (compiled my own copy) my gcc to 4.3.2 (you should do it  
</span><br>
<span class="quotelev2">&gt;&gt; too,
</span><br>
<span class="quotelev2">&gt;&gt; Jeff, the experimental have been giving me headaches in the past).  
</span><br>
<span class="quotelev2">&gt;&gt; Now, I
</span><br>
<span class="quotelev2">&gt;&gt; also have the same warning messages for internal libs of gcc than for
</span><br>
<span class="quotelev2">&gt;&gt; open MPI. This leads me to believe this is not an Open MPI bug, but  
</span><br>
<span class="quotelev2">&gt;&gt; more
</span><br>
<span class="quotelev2">&gt;&gt; probably a libtool/ld issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll switch to linux for my devel for now, but if you have any  
</span><br>
<span class="quotelev2">&gt;&gt; success
</span><br>
<span class="quotelev2">&gt;&gt; story...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 19 sept. 08 &#224; 15:20, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get the same problem on my MBP with 10.5.5.  However, I'm running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the gcc from hpc.sf.net:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [15:16] rtp-jsquyres-8713:~/mpi % gcc --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc (GCC) 4.3.0 20071026 (experimental)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not the /usr/bin/gcc that ships with Leopard.  I don't know if that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; matters or not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using AC 2.63, AM 1.10.1, LT 2.2.6a with a fairly vanilla  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/Users/jsquyres/bogus --disable-mpi-f77 --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's what happens -- I fire up an MPI program and it deadlocks.  I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attach to an MPI process PID with gdb (I am using /usr/bin/gdb --  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Leopard-shipped gdb).  I get oodles of messages like Aurelien's:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning: Could not find object file &quot;/data/jsquyres/svn/ompi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/.libs/libmpi.lax/libdatatype.a/convertor.o&quot; - no debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information available for &quot;convertor.c&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning: Could not find object file &quot;/data/jsquyres/svn/ompi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/.libs/libmpi.lax/libdatatype.a/copy_functions.o&quot; - no debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information available for &quot;copy_functions.c&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning: Could not find object file &quot;/data/jsquyres/svn/ompi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/.libs/libmpi.lax/libdatatype.a/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; copy_functions_heterogeneous.o&quot; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no debug information available for &quot;copy_functions_heterogeneous.c&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 19, 2008, at 2:31 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Aur&#233;lien Bouteiller wrote on Fri, Sep 19, 2008 at 08:02:40PM  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CEST:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks Ralf for the support. I upgraded to libtool 2.2.6 and it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; didn't
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; solved the problem though. Still looking for somebody to confirm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; its working or not working on their Mac.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Did you rerun autogen.sh?  All I know is that your report looks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; really
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; similar to &lt;<a href="http://gcc.gnu.org/ml/gcc/2008-08/msg00054.html">http://gcc.gnu.org/ml/gcc/2008-08/msg00054.html</a>&gt; and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one is apparently solved with Libtool 2.2.6.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If yours is still broken, then some more details would be nice.
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
<li><strong>Next message:</strong> <a href="4672.php">Jeff Squyres: "[OMPI devel] Fwd:  gdb libmpi.dylib on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4670.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>In reply to:</strong> <a href="4670.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4673.php">Aurélien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Reply:</strong> <a href="4673.php">Aurélien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
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
