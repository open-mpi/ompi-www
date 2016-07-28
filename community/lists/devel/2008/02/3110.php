<?
$subject_val = "Re: [OMPI devel] VT in trunk + how to disable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 07:37:28 2008" -->
<!-- isoreceived="20080201123728" -->
<!-- sent="Fri, 1 Feb 2008 07:36:28 -0500" -->
<!-- isosent="20080201123628" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT in trunk + how to disable" -->
<!-- id="EF777D13-869E-4264-8D6C-2874C7EBA969_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200801281559.39262.andreas.knuepfer_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VT in trunk + how to disable<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-01 07:36:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3111.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Previous message:</strong> <a href="3109.php">Ralf Wildenhues: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/3062.php">Andreas Kn&#252;pfer: "[OMPI devel] VT in trunk + how to disable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3116.php">Terry Dontje: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>Reply:</strong> <a href="3116.php">Terry Dontje: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>Reply:</strong> <a href="3129.php">Andreas Knüpfer: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should the default be to *disable* vampirtrace?
<br>
<p>I mention this since, I assume, most people do not depend on this  
<br>
tool for every Open MPI install. Meaning that Open MPI does not  
<br>
require this integration for correct MPI functionality unlike  
<br>
something like ROMIO [example of opt-out functionality which is 3rd  
<br>
party].
<br>
<p>So I would suggest to the group that vampirtrace be an opt-in  
<br>
functionality.
<br>
<p>What do others think?
<br>
<p>-- Josh
<br>
<p>On Jan 28, 2008, at 9:59 AM, Andreas Kn&#252;pfer wrote:
<br>
<p><span class="quotelev1">&gt; Hi everybody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the vampirtrace integration arrived at the trunk today. There seems  
</span><br>
<span class="quotelev1">&gt; to be one
</span><br>
<span class="quotelev1">&gt; issue already, but we'll fix this asap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a general hint, this is how to completely disable anything we  
</span><br>
<span class="quotelev1">&gt; integrated:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         configure --enable-contrib-no-build=vt ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then again, we'd like to see all the issues you may encounter and  
</span><br>
<span class="quotelev1">&gt; fix them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards, Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl. Math. Andreas Knuepfer,
</span><br>
<span class="quotelev1">&gt; Center for Information Services and
</span><br>
<span class="quotelev1">&gt; High Performance Computing (ZIH), TU Dresden,
</span><br>
<span class="quotelev1">&gt; Willersbau A114, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev1">&gt; phone +49-351-463-38323, fax +49-351-463-37773
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3111.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Previous message:</strong> <a href="3109.php">Ralf Wildenhues: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/3062.php">Andreas Kn&#252;pfer: "[OMPI devel] VT in trunk + how to disable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3116.php">Terry Dontje: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>Reply:</strong> <a href="3116.php">Terry Dontje: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>Reply:</strong> <a href="3129.php">Andreas Knüpfer: "Re: [OMPI devel] VT in trunk + how to disable"</a>
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
