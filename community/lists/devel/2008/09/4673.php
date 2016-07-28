<?
$subject_val = "Re: [OMPI devel] gdb libmpi.dylib on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 19:13:31 2008" -->
<!-- isoreceived="20080919231331" -->
<!-- sent="Fri, 19 Sep 2008 19:13:16 -0400" -->
<!-- isosent="20080919231316" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] gdb libmpi.dylib on Leopard" -->
<!-- id="4864E702-8394-4DCD-A1CF-1B740F9C4810_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E50BC8E1-B108-4AB2-B624-DF169F2CCF07_at_cisco.com" -->
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
<strong>Date:</strong> 2008-09-19 19:13:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4674.php">Jon Mason: "[OMPI devel] asm/byteorder.h needed in infiniband/cm.h"</a>
<li><strong>Previous message:</strong> <a href="4672.php">Jeff Squyres: "[OMPI devel] Fwd:  gdb libmpi.dylib on Leopard"</a>
<li><strong>In reply to:</strong> <a href="4671.php">Jeff Squyres: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I filed the following bug report on Apple Developer Connexion. As a  
<br>
short summary, I suggest they get in touch with us and include the -- 
<br>
whole-archive mechanism in their ld.
<br>
<p>Aurelien
<br>
<p>19-Sep-2008 03:08 PM Aurelien Bouteiller:
<br>
Summary:
<br>
Because the Apple ld does not include the GNU's ld --whole-archive/-- 
<br>
no-whole-archive mechanism to allow loading of all members of  
<br>
selective archives, libtool (including gnu libtool) is forced to  
<br>
unpack all the members of a convenience library (and later delete  
<br>
them), and afterwards needs to run dsymutil. Unfortunately, because  
<br>
the archives are uncompressed to a temporary space before being  
<br>
included in the final library, dsymutil seams to get confused. As a  
<br>
consequence, it is impossible to debug a library with gdb, the .o  
<br>
files never being found, even if the library actually contains all the  
<br>
necessary debug symbols.
<br>
<p>Steps to reproduce:
<br>
1. Download a svn Open MPI trunk release (or any libtool based  
<br>
project, I've experienced the same problems when compiling my own  
<br>
gcc4.3). Please note that you need autoconf 2.62 and automake 1.10 to  
<br>
compile Open MPI trunk.
<br>
2. configure Open MPI with the debug options (configure --enable-debug)
<br>
3. make install
<br>
4. find or create a sample MPI program, mpicc it.
<br>
5. mpirun -np 1 gdb mpi_sample_program
<br>
6. break MPI_Init, r, n.
<br>
<p>Expected results:
<br>
6: you should step each line of the MPI_Init function
<br>
<p>Actual results:
<br>
6. you see a large number of warnings
<br>
warning: Could not find object file &quot;/Users/bouteill/ompi/debug.build/ 
<br>
opal/.libs/libopen-pal.lax/libmca_memchecker.a/memchecker_base_open.o&quot;  
<br>
- no debug information available for &quot;../../../../trunk/opal/mca/ 
<br>
memchecker/base/memchecker_base_open.c&quot;.
<br>
<p>You are unable to step in MPI_Init. Instead the execution continues up  
<br>
to reach the &quot;main&quot; function.
<br>
<p>Regression:
<br>
Used to work with Tiger.
<br>
<p>Notes:
<br>
If you need some more details or want to cooperate with us, please  
<br>
register to the Open MPI devel mailing list. As a major open source  
<br>
project we have  been working on a fix for this issue for a while, but  
<br>
where unable to correct it without modifications to apple's ld.
<br>
<p>We believe that the best workaround would be to include the --whole- 
<br>
archive/--no-whole-archive mechanism. Then there is no need anymore to  
<br>
unpack the convenience archives before building the .dylib, and as a  
<br>
friendly side effect compilation time should improve a lot.
<br>
<p>Thanks,
<br>
<pre>
--
* Dr. Aur&#233;lien Bouteiller
* Sr. Research Associate at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 350
* Knoxville, TN 37996
* 865 974 6321
(on behalf of the Open MPI development community)
Le 19 sept. 08 &#224; 17:22, Jeff Squyres a &#233;crit :
&gt; Thanks for following up!
&gt;
&gt; Aurelien, I'll leave this to you -- I rarely do OMPI development on  
&gt; my Mac...
&gt;
&gt;
&gt; On Sep 19, 2008, at 5:08 PM, Ralf Wildenhues wrote:
&gt;
&gt;&gt; Hello,
&gt;&gt;
&gt;&gt; I asked Peter O'Gorman about this issue, and he said
&gt;&gt;
&gt;&gt; | I believe that running dsymutil on the generated lib would then  
&gt;&gt; create a
&gt;&gt; | libfoo.dSYM in the .libs directory conatining all the necessary
&gt;&gt; | debugging information, which could be used for debugging the  
&gt;&gt; library in
&gt;&gt; | the build tree (gdb should find it sitting there next to the  
&gt;&gt; original
&gt;&gt; | library and use the debug information  in the .dSYM).  
&gt;&gt; Libtool-2.2.6 does
&gt;&gt; | run dsymutil and create the .dSYM though...
&gt;&gt; |
&gt;&gt; | There should be a libmpi.dylib in a .libs directory and a
&gt;&gt; | libmpi.dylib.dSYM directory next to it.
&gt;&gt;
&gt;&gt; Also, he said that it could help if you reported a bug at
&gt;&gt; &lt;<a href="http://bugreporter.apple.com">http://bugreporter.apple.com</a>&gt;, under the notion that the
&gt;&gt; more people file bugs with them, the more they will understand
&gt;&gt; what problems users have with the dsymutils issues.
&gt;&gt;
&gt;&gt; Cheers,
&gt;&gt; Ralf
&gt;&gt;
&gt;&gt; * Aur&#233;lien Bouteiller wrote on Fri, Sep 19, 2008 at 09:44:46PM CEST:
&gt;&gt;&gt; Ok,
&gt;&gt;&gt;
&gt;&gt;&gt; I didn't forgot to rerun autogen.sh (I even erased the libltdl, and
&gt;&gt;&gt; various libtool wrappers that are generated at autogen/configure  
&gt;&gt;&gt; time). I
&gt;&gt;&gt; checked the link Ralf submitted to our attention. This is exactly  
&gt;&gt;&gt; the
&gt;&gt;&gt; same problem, or at least the same symptoms. The last version of  
&gt;&gt;&gt; libtool
&gt;&gt;&gt; runs dsymutil on the created .so/.dylib, but the bad thing is that
&gt;&gt;&gt; dsymutil returns similar warning message about missing &quot;.lax&quot; files.
&gt;&gt;&gt; Therefore, even running it manually on the .dsym does not help.
&gt;&gt;&gt;
&gt;&gt;&gt; I upgraded (compiled my own copy) my gcc to 4.3.2 (you should do  
&gt;&gt;&gt; it too,
&gt;&gt;&gt; Jeff, the experimental have been giving me headaches in the past).  
&gt;&gt;&gt; Now, I
&gt;&gt;&gt; also have the same warning messages for internal libs of gcc than  
&gt;&gt;&gt; for
&gt;&gt;&gt; open MPI. This leads me to believe this is not an Open MPI bug,  
&gt;&gt;&gt; but more
&gt;&gt;&gt; probably a libtool/ld issue.
&gt;&gt;&gt;
&gt;&gt;&gt; I'll switch to linux for my devel for now, but if you have any  
&gt;&gt;&gt; success
&gt;&gt;&gt; story...
&gt;&gt;&gt;
&gt;&gt;&gt; Aurelien
&gt;&gt;&gt;
&gt;&gt;&gt; Le 19 sept. 08 &#224; 15:20, Jeff Squyres a &#233;crit :
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; I get the same problem on my MBP with 10.5.5.  However, I'm running
&gt;&gt;&gt;&gt; the gcc from hpc.sf.net:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; -----
&gt;&gt;&gt;&gt; [15:16] rtp-jsquyres-8713:~/mpi % gcc --version
&gt;&gt;&gt;&gt; gcc (GCC) 4.3.0 20071026 (experimental)
&gt;&gt;&gt;&gt; ...
&gt;&gt;&gt;&gt; -----
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Not the /usr/bin/gcc that ships with Leopard.  I don't know if that
&gt;&gt;&gt;&gt; matters or not.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; I'm using AC 2.63, AM 1.10.1, LT 2.2.6a with a fairly vanilla  
&gt;&gt;&gt;&gt; build of
&gt;&gt;&gt;&gt; Open MPI:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; ./configure --prefix=/Users/jsquyres/bogus --disable-mpi-f77 --
&gt;&gt;&gt;&gt; enable-mpirun-prefix-by-default
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Here's what happens -- I fire up an MPI program and it  
&gt;&gt;&gt;&gt; deadlocks.  I
&gt;&gt;&gt;&gt; attach to an MPI process PID with gdb (I am using /usr/bin/gdb --  
&gt;&gt;&gt;&gt; the
&gt;&gt;&gt;&gt; Leopard-shipped gdb).  I get oodles of messages like Aurelien's:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; -----
&gt;&gt;&gt;&gt; warning: Could not find object file &quot;/data/jsquyres/svn/ompi/
&gt;&gt;&gt;&gt; ompi/.libs/libmpi.lax/libdatatype.a/convertor.o&quot; - no debug
&gt;&gt;&gt;&gt; information available for &quot;convertor.c&quot;.
&gt;&gt;&gt;&gt; warning: Could not find object file &quot;/data/jsquyres/svn/ompi/
&gt;&gt;&gt;&gt; ompi/.libs/libmpi.lax/libdatatype.a/copy_functions.o&quot; - no debug
&gt;&gt;&gt;&gt; information available for &quot;copy_functions.c&quot;.
&gt;&gt;&gt;&gt; warning: Could not find object file &quot;/data/jsquyres/svn/ompi/
&gt;&gt;&gt;&gt; ompi/.libs/libmpi.lax/libdatatype.a/ 
&gt;&gt;&gt;&gt; copy_functions_heterogeneous.o&quot; -
&gt;&gt;&gt;&gt; no debug information available for  
&gt;&gt;&gt;&gt; &quot;copy_functions_heterogeneous.c&quot;.
&gt;&gt;&gt;&gt; -----
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; On Sep 19, 2008, at 2:31 PM, Ralf Wildenhues wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; * Aur&#233;lien Bouteiller wrote on Fri, Sep 19, 2008 at 08:02:40PM  
&gt;&gt;&gt;&gt;&gt; CEST:
&gt;&gt;&gt;&gt;&gt;&gt; Thanks Ralf for the support. I upgraded to libtool 2.2.6 and it
&gt;&gt;&gt;&gt;&gt;&gt; didn't
&gt;&gt;&gt;&gt;&gt;&gt; solved the problem though. Still looking for somebody to confirm
&gt;&gt;&gt;&gt;&gt;&gt; that
&gt;&gt;&gt;&gt;&gt;&gt; its working or not working on their Mac.
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Did you rerun autogen.sh?  All I know is that your report looks
&gt;&gt;&gt;&gt;&gt; really
&gt;&gt;&gt;&gt;&gt; similar to &lt;<a href="http://gcc.gnu.org/ml/gcc/2008-08/msg00054.html">http://gcc.gnu.org/ml/gcc/2008-08/msg00054.html</a>&gt; and  
&gt;&gt;&gt;&gt;&gt; that
&gt;&gt;&gt;&gt;&gt; one is apparently solved with Libtool 2.2.6.
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; If yours is still broken, then some more details would be nice.
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt;
&gt; -- 
&gt; Jeff Squyres
&gt; Cisco Systems
&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4674.php">Jon Mason: "[OMPI devel] asm/byteorder.h needed in infiniband/cm.h"</a>
<li><strong>Previous message:</strong> <a href="4672.php">Jeff Squyres: "[OMPI devel] Fwd:  gdb libmpi.dylib on Leopard"</a>
<li><strong>In reply to:</strong> <a href="4671.php">Jeff Squyres: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
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
