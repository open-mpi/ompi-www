<?
$subject_val = "Re: [OMPI devel] Error compiling";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 23 14:55:59 2012" -->
<!-- isoreceived="20121223195559" -->
<!-- sent="Sun, 23 Dec 2012 11:55:51 -0800" -->
<!-- isosent="20121223195551" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error compiling" -->
<!-- id="4E5155AA-6F81-49DD-8CFF-1FD019ECBDB1_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAD_Xbc6MRQt17MQMaT2s-bTr_QBuXPoEYR9cXNqqOFfZBHQKWw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-12-23 14:55:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11878.php">R C: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Previous message:</strong> <a href="11876.php">R C: "Re: [OMPI devel] Error compiling"</a>
<li><strong>In reply to:</strong> <a href="11876.php">R C: "Re: [OMPI devel] Error compiling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11878.php">R C: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Reply:</strong> <a href="11878.php">R C: "Re: [OMPI devel] Error compiling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sigh - sorry about that. Guess we'll have to feel our way down the various tools. I've committed a fix that -should- resolve this for the rest of the tools in the OMPI layer. Please let me know how it works for you.
<br>
<p>Ralph
<br>
<p>On Dec 23, 2012, at 10:56 AM, R C &lt;recifx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again for looking into this.
</span><br>
<span class="quotelev1">&gt; With r27717, 'make all' gives me the error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in tools/ompi_info
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/rc/Downloads/ompi/objd/ompi/tools/ompi_info'
</span><br>
<span class="quotelev1">&gt;   CC     ompi_info.o
</span><br>
<span class="quotelev1">&gt;   CC     param.o
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/tools/ompi_info/param.c: In function &#145;ompi_info_do_config&#146;:
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/tools/ompi_info/param.c:238:17: warning: ignoring return value of &#145;asprintf&#146;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/tools/ompi_info/param.c:252:17: warning: ignoring return value of &#145;asprintf&#146;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/tools/ompi_info/param.c:259:17: warning: ignoring return value of &#145;asprintf&#146;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/tools/ompi_info/param.c:271:13: warning: ignoring return value of &#145;asprintf&#146;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/tools/ompi_info/param.c:274:13: warning: ignoring return value of &#145;asprintf&#146;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt;   CC     components.o
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/tools/ompi_info/components.c: In function &#145;ompi_info_register_components&#146;:
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/tools/ompi_info/components.c:106:17: warning: ignoring return value of &#145;asprintf&#146;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/tools/ompi_info/components.c:109:21: warning: ignoring return value of &#145;asprintf&#146;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/tools/ompi_info/components.c:113:21: warning: ignoring return value of &#145;asprintf&#146;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt;   CC     version.o
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/tools/ompi_info/version.c: In function &#145;ompi_info_show_ompi_version&#146;:
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/tools/ompi_info/version.c:125:13: warning: ignoring return value of &#145;asprintf&#146;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/tools/ompi_info/version.c:134:13: warning: ignoring return value of &#145;asprintf&#146;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/tools/ompi_info/version.c:137:13: warning: ignoring return value of &#145;asprintf&#146;, declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt;   CCLD   ompi_info
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: version.o: undefined reference to symbol 'orte_info_type_orte'
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: note: 'orte_info_type_orte' is defined in DSO /home/rc/Downloads/ompi/objd/orte/.libs/libopen-rte.so.0 so try adding it to the linker command line
</span><br>
<span class="quotelev1">&gt; /home/rc/Downloads/ompi/objd/orte/.libs/libopen-rte.so.0: could not read symbols: Invalid operation
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [ompi_info] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/rc/Downloads/ompi/objd/ompi/tools/ompi_info'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/rc/Downloads/ompi/objd/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Dec 23, 2012 at 1:14 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Sorry about that - copy/paste error, combined with being in a hurry and not testing. Should be fixed now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 23, 2012, at 8:37 AM, R C &lt;recifx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I updated to r27716, reran autogen.pl and configure, but on running 'make all' I get this error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Making all in tools/orte-clean
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/rc/Downloads/ompi/objd/orte/tools/orte-clean'
</span><br>
<span class="quotelev2">&gt;&gt;   CC     orte-clean.o
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** No rule to make target `../../../orte/libopen-pal.la', needed by `orte-clean'.  Stop.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/rc/Downloads/ompi/objd/orte/tools/orte-clean'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/rc/Downloads/ompi/objd/orte'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for looking into this.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11877/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11878.php">R C: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Previous message:</strong> <a href="11876.php">R C: "Re: [OMPI devel] Error compiling"</a>
<li><strong>In reply to:</strong> <a href="11876.php">R C: "Re: [OMPI devel] Error compiling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11878.php">R C: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Reply:</strong> <a href="11878.php">R C: "Re: [OMPI devel] Error compiling"</a>
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
