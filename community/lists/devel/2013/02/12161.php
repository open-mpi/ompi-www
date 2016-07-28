<?
$subject_val = "Re: [OMPI devel] v1.7.0rc7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 25 18:30:12 2013" -->
<!-- isoreceived="20130225233012" -->
<!-- sent="Tue, 26 Feb 2013 03:30:08 +0400" -->
<!-- isosent="20130225233008" -->
<!-- name="Pavel Mezentsev" -->
<!-- email="pavel.mezentsev_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.0rc7" -->
<!-- id="CAFamD4X=iHRgu_gevucM75gWOkfMq=+tqTAuiWMER-r4kP5Ugg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F6013C48-1792-43CA-87A6-5462AE4C40AA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.7.0rc7<br>
<strong>From:</strong> Pavel Mezentsev (<em>pavel.mezentsev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-25 18:30:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12162.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Previous message:</strong> <a href="12160.php">Ralph Castain: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>In reply to:</strong> <a href="12160.php">Ralph Castain: "Re: [OMPI devel] v1.7.0rc7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12163.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Reply:</strong> <a href="12163.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've tried to build it but got different errors with different compilers.
<br>
<p>With Intel (2011.5.220) and pgi (13.2) I get the following error:
<br>
CC       bcol_iboffload_module.lo
<br>
bcol_iboffload_module.c(37): catastrophic error: cannot open source file
<br>
&quot;ompi/mca/common/netpatterns/common_netpatterns.h&quot;
<br>
&nbsp;&nbsp;#include &quot;ompi/mca/common/netpatterns/common_netpatterns.h&quot;
<br>
<p>I failed to find that file anywhere among the sources.
<br>
<p>With pathscale (4.0.12.1) I get the following:
<br>
&nbsp;&nbsp;PPFC     mpi-f08-interfaces-callbacks.lo
<br>
<p>module mpi_f08_interfaces_callbacks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf95-855 pathf95: ERROR MPI_F08_INTERFACES_CALLBACKS, File =
<br>
mpi-f08-interfaces-callbacks.F90, Line = 9, Column = 8
<br>
&nbsp;&nbsp;The compiler has detected errors in module
<br>
&quot;MPI_F08_INTERFACES_CALLBACKS&quot;.  No module information file will be created
<br>
for this module.
<br>
<p><p>&nbsp;attribute_val_in,attribute_val_out,flag,ierror) &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>pathf95-1691 pathf95: ERROR MPI_COMM_COPY_ATTR_FUNCTION, File =
<br>
mpi-f08-interfaces-callbacks.F90, Line = 66, Column = 75
<br>
&nbsp;&nbsp;For &quot;FLAG&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
<br>
<p><p>attribute_val_in,attribute_val_out,flag,ierror) &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>pathf95-1691 pathf95: ERROR MPI_WIN_COPY_ATTR_FUNCTION, File =
<br>
mpi-f08-interfaces-callbacks.F90, Line = 91, Column = 74
<br>
&nbsp;&nbsp;For &quot;FLAG&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
<br>
<p><p>&nbsp;attribute_val_in,attribute_val_out,flag,ierror) &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>pathf95-1691 pathf95: ERROR MPI_TYPE_COPY_ATTR_FUNCTION, File =
<br>
mpi-f08-interfaces-callbacks.F90, Line = 116, Column = 75
<br>
&nbsp;&nbsp;For &quot;FLAG&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
<br>
<p>SUBROUTINE MPI_Grequest_cancel_function(extra_state,complete,ierror) &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf95-1691 pathf95: ERROR MPI_GREQUEST_CANCEL_FUNCTION, File =
<br>
mpi-f08-interfaces-callbacks.F90, Line = 195, Column = 53
<br>
&nbsp;&nbsp;For &quot;COMPLETE&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
<br>
<p>pathf95: PathScale(TM) Fortran Version 4.0.12.1 (f14) Tue Feb 26, 2013
<br>
&nbsp;06:33:40
<br>
pathf95: 429 source lines
<br>
pathf95: 5 Error(s), 0 Warning(s), 0 Other message(s), 0 ANSI(s)
<br>
pathf95: &quot;explain pathf95-message number&quot; gives more information about each
<br>
message
<br>
make[2]: *** [mpi-f08-interfaces-callbacks.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/tmp/mpi_install_tmp21558/openmpi-1.7rc7/ompi/mpi/fortran/base'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/tmp/mpi_install_tmp21558/openmpi-1.7rc7/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p>I am not a fortran guy and don't really know what's the problem here.
<br>
<p>I tried configuring all cases only with setting the compilers in the
<br>
environment variables and setting --prefix. I managed to build 1.6.3 using
<br>
all 3 mentioned compilers with the same configuration lines without any
<br>
errors.
<br>
<p>Not sure about the problem with pathscale but the first problem seems to be
<br>
a real error. Or did I miss something?
<br>
<p>Regards, Pavel Mezentsev.
<br>
<p><p>2013/2/26 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2013, at 1:40 PM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 2/23/2013 11:45 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This release candidate is the last one we expect to have before
</span><br>
<span class="quotelev1">&gt; release, so please test it. Can be downloaded from the usual place:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Latest changes include:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * update of the alps/lustre configure code
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * fixed solaris hwloc code
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * various mxm updates
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * removed java bindings (delayed until later release)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * improved the --report-bindings output
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * a variety of minor cleanups
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; any reason to not include the cygwin patches added to 1.6.4 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't believe they were ever CMR'd for 1.7.0, so they were never moved
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Marco
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12161/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12162.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Previous message:</strong> <a href="12160.php">Ralph Castain: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>In reply to:</strong> <a href="12160.php">Ralph Castain: "Re: [OMPI devel] v1.7.0rc7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12163.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Reply:</strong> <a href="12163.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
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
