<?
$subject_val = "Re: [OMPI devel] VT in trunk + how to disable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 10:17:43 2008" -->
<!-- isoreceived="20080201151743" -->
<!-- sent="Fri, 01 Feb 2008 10:17:33 -0500" -->
<!-- isosent="20080201151733" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT in trunk + how to disable" -->
<!-- id="47A3380D.9070002_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF777D13-869E-4264-8D6C-2874C7EBA969_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-01 10:17:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3117.php">Jeff Squyres: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>Previous message:</strong> <a href="3115.php">Tim Prins: "[OMPI devel] More VT warnings"</a>
<li><strong>In reply to:</strong> <a href="3110.php">Josh Hursey: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3117.php">Jeff Squyres: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>Reply:</strong> <a href="3117.php">Jeff Squyres: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Should the default be to *disable* vampirtrace?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I mention this since, I assume, most people do not depend on this  
</span><br>
<span class="quotelev1">&gt; tool for every Open MPI install. Meaning that Open MPI does not  
</span><br>
<span class="quotelev1">&gt; require this integration for correct MPI functionality unlike  
</span><br>
<span class="quotelev1">&gt; something like ROMIO [example of opt-out functionality which is 3rd  
</span><br>
<span class="quotelev1">&gt; party].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I would suggest to the group that vampirtrace be an opt-in  
</span><br>
<span class="quotelev1">&gt; functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do others think?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I am not completely against disabling it as a default.  However, once it 
<br>
builds consistently having it enabled by default shouldn't really cause 
<br>
any problems for those not directly using it (well outside of more time 
<br>
to compile).   I imagine changing the default probably would help ORTE 
<br>
move forward but then I wonder if we will run into issues of the vampire 
<br>
stuff not being able to resolve their issues because of ORTE problems 
<br>
put back to the trunk.   
<br>
<p>--td
<br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2008, at 9:59 AM, Andreas Kn&#252;pfer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi everybody,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the vampirtrace integration arrived at the trunk today. There seems  
</span><br>
<span class="quotelev2">&gt;&gt; to be one
</span><br>
<span class="quotelev2">&gt;&gt; issue already, but we'll fix this asap.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a general hint, this is how to completely disable anything we  
</span><br>
<span class="quotelev2">&gt;&gt; integrated:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         configure --enable-contrib-no-build=vt ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then again, we'd like to see all the issues you may encounter and  
</span><br>
<span class="quotelev2">&gt;&gt; fix them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards, Andreas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Dipl. Math. Andreas Knuepfer,
</span><br>
<span class="quotelev2">&gt;&gt; Center for Information Services and
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing (ZIH), TU Dresden,
</span><br>
<span class="quotelev2">&gt;&gt; Willersbau A114, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev2">&gt;&gt; phone +49-351-463-38323, fax +49-351-463-37773
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
<li><strong>Next message:</strong> <a href="3117.php">Jeff Squyres: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>Previous message:</strong> <a href="3115.php">Tim Prins: "[OMPI devel] More VT warnings"</a>
<li><strong>In reply to:</strong> <a href="3110.php">Josh Hursey: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3117.php">Jeff Squyres: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>Reply:</strong> <a href="3117.php">Jeff Squyres: "Re: [OMPI devel] VT in trunk + how to disable"</a>
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
