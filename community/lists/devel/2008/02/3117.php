<?
$subject_val = "Re: [OMPI devel] VT in trunk + how to disable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 10:28:57 2008" -->
<!-- isoreceived="20080201152857" -->
<!-- sent="Fri, 1 Feb 2008 10:28:29 -0500" -->
<!-- isosent="20080201152829" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT in trunk + how to disable" -->
<!-- id="3FFB1C14-0A96-4249-9914-18FBBA05D32D_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47A3380D.9070002_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-01 10:28:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3118.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3116.php">Terry Dontje: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>In reply to:</strong> <a href="3116.php">Terry Dontje: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3129.php">Andreas Knüpfer: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think my position is about the same as Terry's.
<br>
<p>I also think we have a precedent for building everything that is  
<br>
possible and letting the user choose at run-time what they want to  
<br>
do.  My $0.02 is that it's easier to tell random users (and  
<br>
customers!) &quot;yes, OMPI should have built that for you by default; you  
<br>
use it like this...&quot; vs. &quot;No, sorry, you need to go re-install OMPI to  
<br>
have feature X.&quot;
<br>
<p>We developers are probably a bit more sensitive to this issue since it  
<br>
makes longer builds (and we re-build all the time).  But remember that  
<br>
most people install OMPI only a small number of times -- so build time  
<br>
is less of an issue for them.
<br>
<p>(I'm assuming that at least one of your motivations for asking was the  
<br>
longer build time...?)
<br>
<p><p>On Feb 1, 2008, at 10:17 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Should the default be to *disable* vampirtrace?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I mention this since, I assume, most people do not depend on this
</span><br>
<span class="quotelev2">&gt;&gt; tool for every Open MPI install. Meaning that Open MPI does not
</span><br>
<span class="quotelev2">&gt;&gt; require this integration for correct MPI functionality unlike
</span><br>
<span class="quotelev2">&gt;&gt; something like ROMIO [example of opt-out functionality which is 3rd
</span><br>
<span class="quotelev2">&gt;&gt; party].
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I would suggest to the group that vampirtrace be an opt-in
</span><br>
<span class="quotelev2">&gt;&gt; functionality.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What do others think?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I am not completely against disabling it as a default.  However,  
</span><br>
<span class="quotelev1">&gt; once it
</span><br>
<span class="quotelev1">&gt; builds consistently having it enabled by default shouldn't really  
</span><br>
<span class="quotelev1">&gt; cause
</span><br>
<span class="quotelev1">&gt; any problems for those not directly using it (well outside of more  
</span><br>
<span class="quotelev1">&gt; time
</span><br>
<span class="quotelev1">&gt; to compile).   I imagine changing the default probably would help ORTE
</span><br>
<span class="quotelev1">&gt; move forward but then I wonder if we will run into issues of the  
</span><br>
<span class="quotelev1">&gt; vampire
</span><br>
<span class="quotelev1">&gt; stuff not being able to resolve their issues because of ORTE problems
</span><br>
<span class="quotelev1">&gt; put back to the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 28, 2008, at 9:59 AM, Andreas Kn&#252;pfer wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi everybody,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the vampirtrace integration arrived at the trunk today. There seems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issue already, but we'll fix this asap.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As a general hint, this is how to completely disable anything we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; integrated:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        configure --enable-contrib-no-build=vt ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then again, we'd like to see all the issues you may encounter and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fix them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards, Andreas
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dipl. Math. Andreas Knuepfer,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Center for Information Services and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; High Performance Computing (ZIH), TU Dresden,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Willersbau A114, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev3">&gt;&gt;&gt; phone +49-351-463-38323, fax +49-351-463-37773
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3118.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3116.php">Terry Dontje: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>In reply to:</strong> <a href="3116.php">Terry Dontje: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3129.php">Andreas Knüpfer: "Re: [OMPI devel] VT in trunk + how to disable"</a>
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
