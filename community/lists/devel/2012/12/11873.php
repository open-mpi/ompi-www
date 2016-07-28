<?
$subject_val = "Re: [OMPI devel] Error compiling";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 23 10:56:57 2012" -->
<!-- isoreceived="20121223155657" -->
<!-- sent="Sun, 23 Dec 2012 07:56:50 -0800" -->
<!-- isosent="20121223155650" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error compiling" -->
<!-- id="9BF44E3A-14CE-4109-92D2-6EAA53093EAF_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAD_Xbc4-1mjrJPYWFKqXC3U5rTQ59SiY9G0afq=Vm8=r0+HKXQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error compiling<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-23 10:56:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11874.php">R C: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Previous message:</strong> <a href="11872.php">R C: "[OMPI devel] Error compiling"</a>
<li><strong>In reply to:</strong> <a href="11872.php">R C: "[OMPI devel] Error compiling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11874.php">R C: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Reply:</strong> <a href="11874.php">R C: "Re: [OMPI devel] Error compiling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should be fixed with r27716. We had reorganized the linking a little while ago, and the person who did it thought that the indirect references would be resolved - i.e., that linking against liborte would automatically resolve any calls to functions in libopal since liborte is linked against libopal. Sadly, this wasn't true for the Mac, and it looks like it isn't true for Ubuntu either.
<br>
<p>Anyway, I resolved it by simply adding libopal to the list of libs for those tools. Let me know if it fixes this for you.
<br>
<p><p>On Dec 23, 2012, at 7:39 AM, R C &lt;recifx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to compile the development version of openmpi obtained through svn yesterday, on a AMD64 computer running Ubuntu 12.10 (gcc 4.7.2) with valgrind-3.8.1 installed in /usr/local
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After ./autogen.pl. I ran configure:
</span><br>
<span class="quotelev1">&gt; ../configure FC=gfortran --with-mpi-f90-size=medium --with-f90-max-array-dim=6 --with-valgrind=/usr/local
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; however 'make all' exited with the error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/rc/Downloads/ompi/objd/orte/tools/orte-clean'
</span><br>
<span class="quotelev1">&gt;   CC     orte-clean.o
</span><br>
<span class="quotelev1">&gt;   CCLD   orte-clean
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: orte-clean.o: undefined reference to symbol 'opal_show_help_string'
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: note: 'opal_show_help_string' is defined in DSO /home/rc/Downloads/ompi/objd/opal/.libs/libopen-pal.so.0 so try adding it to the linker command line
</span><br>
<span class="quotelev1">&gt; /home/rc/Downloads/ompi/objd/opal/.libs/libopen-pal.so.0: could not read symbols: Invalid operation
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [orte-clean] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/rc/Downloads/ompi/objd/orte/tools/orte-clean'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/rc/Downloads/ompi/objd/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I checked libopen-pal.so.0 using nm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions to get the compilation working would be appreciated.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11873/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11874.php">R C: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Previous message:</strong> <a href="11872.php">R C: "[OMPI devel] Error compiling"</a>
<li><strong>In reply to:</strong> <a href="11872.php">R C: "[OMPI devel] Error compiling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11874.php">R C: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Reply:</strong> <a href="11874.php">R C: "Re: [OMPI devel] Error compiling"</a>
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
