<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 16 16:21:58 2005" -->
<!-- isoreceived="20050816212158" -->
<!-- sent="Tue, 16 Aug 2005 15:21:52 -0600" -->
<!-- isosent="20050816212152" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  OMPI 32bit on a 64bit Linux box" -->
<!-- id="430258F0.5010909_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43024993.7030808_at_lanl.gov" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-16 16:21:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0166.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0164.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0164.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0166.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0166.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure why this is even building... Is someone working on this?
<br>
I thought we had .ompi_ignore files in this directory.
<br>
<p>Tim
<br>
<p><p>Nathan DeBardeleben wrote:
<br>
<span class="quotelev1">&gt; So I'm seeing all these nice emails about people developing on OMPI 
</span><br>
<span class="quotelev1">&gt; today yet I can't get it to compile.  Am I out here in limbo on this or 
</span><br>
<span class="quotelev1">&gt; are others in the same boat?  The errors I'm seeing are about some bproc 
</span><br>
<span class="quotelev1">&gt; code calling undefined functions and they are linked again below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Nathan
</span><br>
<span class="quotelev1">&gt; Correspondence
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; High Performance Computing Environments
</span><br>
<span class="quotelev1">&gt; phone: 505-667-3428
</span><br>
<span class="quotelev1">&gt; email: ndebard_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Back from training and trying to test this but now OMPI doesn't compile 
</span><br>
<span class="quotelev2">&gt;&gt;at all:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;gcc -DHAVE_CONFIG_H -I. -I. -I../../../../include 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-I../../../../include -I../../../.. -I../../../.. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-I../../../../include -I../../../../opal -I../../../../orte 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-I../../../../ompi -g -Wall -Wundef -Wno-long-long -Wsign-compare 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-Werror-implicit-function-declaration -fno-strict-aliasing -MT 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;ras_lsf_bproc.lo -MD -MP -MF .deps/ras_lsf_bproc.Tpo -c 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;ras_lsf_bproc.c -o ras_lsf_bproc.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;ras_lsf_bproc.c: In function `orte_ras_lsf_bproc_node_insert':
</span><br>
<span class="quotelev3">&gt;&gt;&gt;ras_lsf_bproc.c:32: error: implicit declaration of function 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;`orte_ras_base_node_insert'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;ras_lsf_bproc.c: In function `orte_ras_lsf_bproc_node_query':
</span><br>
<span class="quotelev3">&gt;&gt;&gt;ras_lsf_bproc.c:37: error: implicit declaration of function 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;`orte_ras_base_node_query'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;make[4]: *** [ras_lsf_bproc.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;make[4]: Leaving directory `/home/ndebard/ompi/orte/mca/ras/lsf_bproc'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;make[3]: Leaving directory `/home/ndebard/ompi/orte/mca/ras'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;make[2]: Leaving directory `/home/ndebard/ompi/orte/mca'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;make[1]: Leaving directory `/home/ndebard/ompi/orte'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[sparkplug]~/ompi &gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Clean SVN checkout this morning with configure:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[sparkplug]~/ompi &gt; ./configure --enable-static --disable-shared 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;--without-threads --prefix=/home/ndebard/local/ompi --with-devel-headers
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-- Nathan
</span><br>
<span class="quotelev2">&gt;&gt;Correspondence
</span><br>
<span class="quotelev2">&gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt;Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;Parallel Tools Team
</span><br>
<span class="quotelev2">&gt;&gt;High Performance Computing Environments
</span><br>
<span class="quotelev2">&gt;&gt;phone: 505-667-3428
</span><br>
<span class="quotelev2">&gt;&gt;email: ndebard_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;This is now fixed in SVN.  You should no longer need the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;--build=i586...  hack to compile 32 bit code on Opterons.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Aug 12, 2005, at 3:17 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;On Aug 12, 2005, at 3:13 PM, Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;We've got a 64bit Linux (SUSE) box here.  For a variety of reasons
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;(Java, JNI, linking in with OMPI libraries, etc which I won't get
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;into)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;I need to compile OMPI 32 bit (or get 64bit versions of a lot of other
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;libraries).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;I get various compile errors when I try different things, but first
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;let
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;me explain the system we have:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&lt;snip&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;This goes on and on and on actually.  And the 'is incompatible with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;i386:x86-64 output' looks to be repeated for every line before this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;error which actually caused the Make to bomb.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Any suggestions at all?  Surely someone must have tried to force
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;OMPI to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;build in 32bit mode on a 64bit machine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I don't think anyone has tried to build 32 bit on an Opteron, which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;is the cause of the problems...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I think I know how to fix this, but won't happen until later in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;weekend.  I can't think of a good workaround until then.  Well, one
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;possibility is to set the target like you were doing and disable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;ROMIO.  Actually, you'll also need to disable Fortran 77.  So
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;something like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure [usual options] --build=i586-suse-linux --disable-io-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;romio --disable-f77
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;might just do the trick.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian Barrett
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI developer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="0166.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0164.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0164.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0166.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0166.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
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
