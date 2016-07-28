<?
$subject_val = "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 15:43:34 2008" -->
<!-- isoreceived="20080728194334" -->
<!-- sent="Mon, 28 Jul 2008 15:43:28 -0400" -->
<!-- isosent="20080728194328" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio" -->
<!-- id="99D8656B-101C-467A-A336-8CB9B54F7A43_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.GSO.1.10.0807281654540.3921_at_sunserv2" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 15:43:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6164.php">Jeff Squyres: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="6162.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>In reply to:</strong> <a href="6154.php">Mark Dixon: "[OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6179.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Reply:</strong> <a href="6179.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I compile with PGI 7.1.4 regularly on RHEL4U4 and don't see this  
<br>
problem.  It would be interesting to see the config.log's from these  
<br>
builds to see the actual details of what went wrong.
<br>
<p><p><p>On Jul 28, 2008, at 12:02 PM, Mark Dixon wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been attempting to build Open MPI 1.2.6 using a variety of  
</span><br>
<span class="quotelev1">&gt; compilers including, but not limited to, PGI 7.1-6 and Sun Studio 12  
</span><br>
<span class="quotelev1">&gt; (200709) on a CentOS 5.2 32-bit Intel box.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Building against either of the above compilers results in the  
</span><br>
<span class="quotelev1">&gt; following message produced by configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI was unable to find threading support on your system.  In the
</span><br>
<span class="quotelev1">&gt; near future, the OMPI development team is considering requiring
</span><br>
<span class="quotelev1">&gt; threading support for proper OMPI execution.  This is in part because
</span><br>
<span class="quotelev1">&gt; we are not aware of any users that do not have thread support - so we
</span><br>
<span class="quotelev1">&gt; need you to e-mail us at ompi_at_[hidden] and let us know about this
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see this when building against the Intel 10.1.015 or GNU GCC  
</span><br>
<span class="quotelev1">&gt; 4.1.2 compilers. I cannot see any answer to this in the FAQ or list  
</span><br>
<span class="quotelev1">&gt; archives.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attached files showing the output of configure and my  
</span><br>
<span class="quotelev1">&gt; environment to this message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this expected?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Mark Dixon                       Email    : m.c.dixon_at_[hidden]
</span><br>
<span class="quotelev1">&gt; HPC/Grid Systems Support         Tel (int): 35429
</span><br>
<span class="quotelev1">&gt; Information Systems Services     Tel (ext): +44(0)113 343 5429
</span><br>
<span class="quotelev1">&gt; University of Leeds, LS2 9JT, UK
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; &lt;sunstudio-build.txt.bz2&gt;&lt;pgi- 
</span><br>
<span class="quotelev1">&gt; build.txt.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="6164.php">Jeff Squyres: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="6162.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>In reply to:</strong> <a href="6154.php">Mark Dixon: "[OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6179.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Reply:</strong> <a href="6179.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
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
