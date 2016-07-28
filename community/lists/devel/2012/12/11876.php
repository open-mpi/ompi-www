<?
$subject_val = "Re: [OMPI devel] Error compiling";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 23 13:56:47 2012" -->
<!-- isoreceived="20121223185647" -->
<!-- sent="Sun, 23 Dec 2012 13:56:38 -0500" -->
<!-- isosent="20121223185638" -->
<!-- name="R C" -->
<!-- email="recifx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error compiling" -->
<!-- id="CAD_Xbc6MRQt17MQMaT2s-bTr_QBuXPoEYR9cXNqqOFfZBHQKWw_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="02EB803D-E0C6-44CC-9D17-6C2F74529E2D_at_open-mpi.org" -->
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
<strong>From:</strong> R C (<em>recifx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-23 13:56:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11877.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Previous message:</strong> <a href="11875.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<li><strong>In reply to:</strong> <a href="11875.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11877.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Reply:</strong> <a href="11877.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks again for looking into this.
<br>
With r27717, 'make all' gives me the error:
<br>
<p>Making all in tools/ompi_info
<br>
make[2]: Entering directory
<br>
`/home/rc/Downloads/ompi/objd/ompi/tools/ompi_info'
<br>
&nbsp;&nbsp;CC     ompi_info.o
<br>
&nbsp;&nbsp;CC     param.o
<br>
../../../../ompi/tools/ompi_info/param.c: In function &#145;ompi_info_do_config&#146;:
<br>
../../../../ompi/tools/ompi_info/param.c:238:17: warning: ignoring return
<br>
value of &#145;asprintf&#146;, declared with attribute warn_unused_result
<br>
[-Wunused-result]
<br>
../../../../ompi/tools/ompi_info/param.c:252:17: warning: ignoring return
<br>
value of &#145;asprintf&#146;, declared with attribute warn_unused_result
<br>
[-Wunused-result]
<br>
../../../../ompi/tools/ompi_info/param.c:259:17: warning: ignoring return
<br>
value of &#145;asprintf&#146;, declared with attribute warn_unused_result
<br>
[-Wunused-result]
<br>
../../../../ompi/tools/ompi_info/param.c:271:13: warning: ignoring return
<br>
value of &#145;asprintf&#146;, declared with attribute warn_unused_result
<br>
[-Wunused-result]
<br>
../../../../ompi/tools/ompi_info/param.c:274:13: warning: ignoring return
<br>
value of &#145;asprintf&#146;, declared with attribute warn_unused_result
<br>
[-Wunused-result]
<br>
&nbsp;&nbsp;CC     components.o
<br>
../../../../ompi/tools/ompi_info/components.c: In function
<br>
&#145;ompi_info_register_components&#146;:
<br>
../../../../ompi/tools/ompi_info/components.c:106:17: warning: ignoring
<br>
return value of &#145;asprintf&#146;, declared with attribute warn_unused_result
<br>
[-Wunused-result]
<br>
../../../../ompi/tools/ompi_info/components.c:109:21: warning: ignoring
<br>
return value of &#145;asprintf&#146;, declared with attribute warn_unused_result
<br>
[-Wunused-result]
<br>
../../../../ompi/tools/ompi_info/components.c:113:21: warning: ignoring
<br>
return value of &#145;asprintf&#146;, declared with attribute warn_unused_result
<br>
[-Wunused-result]
<br>
&nbsp;&nbsp;CC     version.o
<br>
../../../../ompi/tools/ompi_info/version.c: In function
<br>
&#145;ompi_info_show_ompi_version&#146;:
<br>
../../../../ompi/tools/ompi_info/version.c:125:13: warning: ignoring return
<br>
value of &#145;asprintf&#146;, declared with attribute warn_unused_result
<br>
[-Wunused-result]
<br>
../../../../ompi/tools/ompi_info/version.c:134:13: warning: ignoring return
<br>
value of &#145;asprintf&#146;, declared with attribute warn_unused_result
<br>
[-Wunused-result]
<br>
../../../../ompi/tools/ompi_info/version.c:137:13: warning: ignoring return
<br>
value of &#145;asprintf&#146;, declared with attribute warn_unused_result
<br>
[-Wunused-result]
<br>
&nbsp;&nbsp;CCLD   ompi_info
<br>
/usr/bin/ld: version.o: undefined reference to symbol 'orte_info_type_orte'
<br>
/usr/bin/ld: note: 'orte_info_type_orte' is defined in DSO
<br>
/home/rc/Downloads/ompi/objd/orte/.libs/libopen-rte.so.0 so try adding it
<br>
to the linker command line
<br>
/home/rc/Downloads/ompi/objd/orte/.libs/libopen-rte.so.0: could not read
<br>
symbols: Invalid operation
<br>
collect2: error: ld returned 1 exit status
<br>
make[2]: *** [ompi_info] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/rc/Downloads/ompi/objd/ompi/tools/ompi_info'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/rc/Downloads/ompi/objd/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>On Sun, Dec 23, 2012 at 1:14 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry about that - copy/paste error, combined with being in a hurry and
</span><br>
<span class="quotelev1">&gt; not testing. Should be fixed now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 23, 2012, at 8:37 AM, R C &lt;recifx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I updated to r27716, reran autogen.pl and configure, but on running 'make
</span><br>
<span class="quotelev1">&gt; all' I get this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in tools/orte-clean
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/rc/Downloads/ompi/objd/orte/tools/orte-clean'
</span><br>
<span class="quotelev1">&gt;   CC     orte-clean.o
</span><br>
<span class="quotelev1">&gt; make[2]: *** No rule to make target `../../../orte/libopen-pal.la',
</span><br>
<span class="quotelev1">&gt; needed by `orte-clean'.  Stop.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/rc/Downloads/ompi/objd/orte/tools/orte-clean'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/rc/Downloads/ompi/objd/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for looking into this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11876/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11877.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Previous message:</strong> <a href="11875.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<li><strong>In reply to:</strong> <a href="11875.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11877.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Reply:</strong> <a href="11877.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
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
