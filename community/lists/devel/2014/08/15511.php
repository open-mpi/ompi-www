<?
$subject_val = "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 03:51:53 2014" -->
<!-- isoreceived="20140805075153" -->
<!-- sent="Tue, 5 Aug 2014 00:51:46 -0700" -->
<!-- isosent="20140805075146" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [vt] --with-openmpi-inside configure argument" -->
<!-- id="CAAvDA14Pt8UA=iwjn4UprKNPaux+WqAeLbLV+GVHdoTHLQsb5Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53E08216.1010303_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [vt] --with-openmpi-inside configure argument<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-05 03:51:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15512.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<li><strong>Previous message:</strong> <a href="15510.php">Bert Wesarg: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<li><strong>In reply to:</strong> <a href="15510.php">Bert Wesarg: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15604.php">Matthias Jurenz: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bert,
<br>
<p>It is just an observation of something that could easily break in the
<br>
future.
<br>
The code is correct as written.
<br>
So, no immediate action is required.
<br>
<p>-Paul
<br>
<p><p>On Tue, Aug 5, 2014 at 12:04 AM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On 08/05/2014 02:40 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I noticed that Open MPI is passing
</span><br>
<span class="quotelev2">&gt;&gt;      --with-openmpi-inside=1.7
</span><br>
<span class="quotelev2">&gt;&gt; in the arguments passed to
</span><br>
<span class="quotelev2">&gt;&gt;      ompi/contrib/vt/vt/configure
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt;      ompi/contrib/vt/vt/extlib/otf/configure
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The extlib/otf case just tests if the value is set, but the top-level
</span><br>
<span class="quotelev2">&gt;&gt; vt/configure is checking for the specific string &quot;1.7&quot;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Check whether we are inside Open MPI package
</span><br>
<span class="quotelev2">&gt;&gt; inside_openmpi=&quot;no&quot;
</span><br>
<span class="quotelev2">&gt;&gt; AC_ARG_WITH(openmpi-inside, [],
</span><br>
<span class="quotelev2">&gt;&gt; [
</span><br>
<span class="quotelev2">&gt;&gt;          AS_IF([test x&quot;$withval&quot; = &quot;xyes&quot; -o x&quot;$withval&quot; = &quot;x1.7&quot;],
</span><br>
<span class="quotelev2">&gt;&gt;          [
</span><br>
<span class="quotelev2">&gt;&gt;                  inside_openmpi=&quot;$withval&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                  CPPFLAGS=&quot;-DINSIDE_OPENMPI $CPPFLAGS&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  # Set FC to F77 if Open MPI version &lt; 1.7
</span><br>
<span class="quotelev2">&gt;&gt;                  AS_IF([test x&quot;$withval&quot; = &quot;xyes&quot; -a x&quot;$FC&quot; = x -a x&quot;$F77&quot;
</span><br>
<span class="quotelev2">&gt;&gt; != x],
</span><br>
<span class="quotelev2">&gt;&gt;                  [FC=&quot;$F77&quot;])
</span><br>
<span class="quotelev2">&gt;&gt;          ])
</span><br>
<span class="quotelev2">&gt;&gt; ])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That logic looks a bit fragile with respect to any future changes.
</span><br>
<span class="quotelev2">&gt;&gt; Specifically the inner AS_IF is true for the desired condition &quot;version &lt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.7&quot; only because the outer AS_IF currently ensures the only possible
</span><br>
<span class="quotelev2">&gt;&gt; values of &quot;$withval&quot; are &quot;yes&quot; and &quot;1.7&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Noted. But this is not my field. May take some time, because Matthias is
</span><br>
<span class="quotelev1">&gt; still in vacation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Bert Wesarg
</span><br>
<span class="quotelev1">&gt; wiss. Mitarbeiter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev1">&gt; Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev1">&gt; 01062 Dresden
</span><br>
<span class="quotelev1">&gt; Tel.: +49 (351) 463-42451
</span><br>
<span class="quotelev1">&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev1">&gt; E-Mail: bert.wesarg_at_[hidden]
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15510.php">http://www.open-mpi.org/community/lists/devel/2014/08/15510.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15511/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15512.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<li><strong>Previous message:</strong> <a href="15510.php">Bert Wesarg: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<li><strong>In reply to:</strong> <a href="15510.php">Bert Wesarg: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15604.php">Matthias Jurenz: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
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
