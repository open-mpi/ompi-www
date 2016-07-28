<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 16 11:19:12 2005" -->
<!-- isoreceived="20050816161912" -->
<!-- sent="Tue, 16 Aug 2005 10:19:08 -0600" -->
<!-- isosent="20050816161908" -->
<!-- name="Nathan DeBardeleben" -->
<!-- email="ndebard_at_[hidden]" -->
<!-- subject="Re:  OMPI 32bit on a 64bit Linux box" -->
<!-- id="430211FC.9080104_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="bbed2e7ed2a400f1c9a917959ecceadf_at_open-mpi.org" -->
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
<strong>From:</strong> Nathan DeBardeleben (<em>ndebard_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-16 11:19:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0158.php">Jeff Squyres: "processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0156.php">Gleb Natapov: "configure of openib module"</a>
<li><strong>In reply to:</strong> <a href="0146.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0164.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0164.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Back from training and trying to test this but now OMPI doesn't compile 
<br>
at all:
<br>
<p><span class="quotelev1">&gt;  gcc -DHAVE_CONFIG_H -I. -I. -I../../../../include 
</span><br>
<span class="quotelev1">&gt; -I../../../../include -I../../../.. -I../../../.. 
</span><br>
<span class="quotelev1">&gt; -I../../../../include -I../../../../opal -I../../../../orte 
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi -g -Wall -Wundef -Wno-long-long -Wsign-compare 
</span><br>
<span class="quotelev1">&gt; -Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic 
</span><br>
<span class="quotelev1">&gt; -Werror-implicit-function-declaration -fno-strict-aliasing -MT 
</span><br>
<span class="quotelev1">&gt; ras_lsf_bproc.lo -MD -MP -MF .deps/ras_lsf_bproc.Tpo -c 
</span><br>
<span class="quotelev1">&gt; ras_lsf_bproc.c -o ras_lsf_bproc.o
</span><br>
<span class="quotelev1">&gt; ras_lsf_bproc.c: In function `orte_ras_lsf_bproc_node_insert':
</span><br>
<span class="quotelev1">&gt; ras_lsf_bproc.c:32: error: implicit declaration of function 
</span><br>
<span class="quotelev1">&gt; `orte_ras_base_node_insert'
</span><br>
<span class="quotelev1">&gt; ras_lsf_bproc.c: In function `orte_ras_lsf_bproc_node_query':
</span><br>
<span class="quotelev1">&gt; ras_lsf_bproc.c:37: error: implicit declaration of function 
</span><br>
<span class="quotelev1">&gt; `orte_ras_base_node_query'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [ras_lsf_bproc.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/ndebard/ompi/orte/mca/ras/lsf_bproc'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/ndebard/ompi/orte/mca/ras'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/ndebard/ompi/orte/mca'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/ndebard/ompi/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; [sparkplug]~/ompi &gt; 
</span><br>
<p>Clean SVN checkout this morning with configure:
<br>
<p><span class="quotelev1">&gt; [sparkplug]~/ompi &gt; ./configure --enable-static --disable-shared 
</span><br>
<span class="quotelev1">&gt; --without-threads --prefix=/home/ndebard/local/ompi --with-devel-headers
</span><br>
<p>-- Nathan
<br>
Correspondence
<br>
---------------------------------------------------------------------
<br>
Nathan DeBardeleben, Ph.D.
<br>
Los Alamos National Laboratory
<br>
Parallel Tools Team
<br>
High Performance Computing Environments
<br>
phone: 505-667-3428
<br>
email: ndebard_at_[hidden]
<br>
---------------------------------------------------------------------
<br>
<p><p><p>Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt;This is now fixed in SVN.  You should no longer need the 
</span><br>
<span class="quotelev1">&gt;--build=i586...  hack to compile 32 bit code on Opterons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Aug 12, 2005, at 3:17 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Aug 12, 2005, at 3:13 PM, Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;We've got a 64bit Linux (SUSE) box here.  For a variety of reasons
</span><br>
<span class="quotelev3">&gt;&gt;&gt;(Java, JNI, linking in with OMPI libraries, etc which I won't get
</span><br>
<span class="quotelev3">&gt;&gt;&gt;into)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I need to compile OMPI 32 bit (or get 64bit versions of a lot of other
</span><br>
<span class="quotelev3">&gt;&gt;&gt;libraries).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I get various compile errors when I try different things, but first
</span><br>
<span class="quotelev3">&gt;&gt;&gt;let
</span><br>
<span class="quotelev3">&gt;&gt;&gt;me explain the system we have:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;This goes on and on and on actually.  And the 'is incompatible with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;i386:x86-64 output' looks to be repeated for every line before this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;error which actually caused the Make to bomb.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Any suggestions at all?  Surely someone must have tried to force
</span><br>
<span class="quotelev3">&gt;&gt;&gt;OMPI to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;build in 32bit mode on a 64bit machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I don't think anyone has tried to build 32 bit on an Opteron, which
</span><br>
<span class="quotelev2">&gt;&gt;is the cause of the problems...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I think I know how to fix this, but won't happen until later in the
</span><br>
<span class="quotelev2">&gt;&gt;weekend.  I can't think of a good workaround until then.  Well, one
</span><br>
<span class="quotelev2">&gt;&gt;possibility is to set the target like you were doing and disable
</span><br>
<span class="quotelev2">&gt;&gt;ROMIO.  Actually, you'll also need to disable Fortran 77.  So
</span><br>
<span class="quotelev2">&gt;&gt;something like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   ./configure [usual options] --build=i586-suse-linux --disable-io-
</span><br>
<span class="quotelev2">&gt;&gt;romio --disable-f77
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;might just do the trick.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-- 
</span><br>
<span class="quotelev2">&gt;&gt;   Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI developer
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0158.php">Jeff Squyres: "processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0156.php">Gleb Natapov: "configure of openib module"</a>
<li><strong>In reply to:</strong> <a href="0146.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0164.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0164.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
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
