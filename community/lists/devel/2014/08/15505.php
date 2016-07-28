<?
$subject_val = "[OMPI devel] [vt] --with-openmpi-inside configure argument";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 20:40:02 2014" -->
<!-- isoreceived="20140805004002" -->
<!-- sent="Mon, 4 Aug 2014 17:40:00 -0700" -->
<!-- isosent="20140805004000" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [vt] --with-openmpi-inside configure argument" -->
<!-- id="CAAvDA16gKC=FDNW66mfoHYmJPSKedEyw4TVTLZ8g_sJN-ppDeA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] [vt] --with-openmpi-inside configure argument<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-04 20:40:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15506.php">Paul Hargrove: "[OMPI devel] minor atomics nit"</a>
<li><strong>Previous message:</strong> <a href="15504.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15510.php">Bert Wesarg: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<li><strong>Reply:</strong> <a href="15510.php">Bert Wesarg: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<li><strong>Reply:</strong> <a href="15604.php">Matthias Jurenz: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I noticed that Open MPI is passing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-openmpi-inside=1.7
<br>
in the arguments passed to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi/contrib/vt/vt/configure
<br>
and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi/contrib/vt/vt/extlib/otf/configure
<br>
<p>The extlib/otf case just tests if the value is set, but the top-level
<br>
vt/configure is checking for the specific string &quot;1.7&quot;:
<br>
<p># Check whether we are inside Open MPI package
<br>
inside_openmpi=&quot;no&quot;
<br>
AC_ARG_WITH(openmpi-inside, [],
<br>
[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test x&quot;$withval&quot; = &quot;xyes&quot; -o x&quot;$withval&quot; = &quot;x1.7&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inside_openmpi=&quot;$withval&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPPFLAGS=&quot;-DINSIDE_OPENMPI $CPPFLAGS&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Set FC to F77 if Open MPI version &lt; 1.7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test x&quot;$withval&quot; = &quot;xyes&quot; -a x&quot;$FC&quot; = x -a x&quot;$F77&quot;
<br>
!= x],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[FC=&quot;$F77&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;])
<br>
])
<br>
<p>That logic looks a bit fragile with respect to any future changes.
<br>
Specifically the inner AS_IF is true for the desired condition &quot;version &lt;
<br>
1.7&quot; only because the outer AS_IF currently ensures the only possible
<br>
values of &quot;$withval&quot; are &quot;yes&quot; and &quot;1.7&quot;.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15505/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15506.php">Paul Hargrove: "[OMPI devel] minor atomics nit"</a>
<li><strong>Previous message:</strong> <a href="15504.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15510.php">Bert Wesarg: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<li><strong>Reply:</strong> <a href="15510.php">Bert Wesarg: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<li><strong>Reply:</strong> <a href="15604.php">Matthias Jurenz: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
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
