<?
$subject_val = "Re: [OMPI devel] Problem with SVN access.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 14:57:17 2008" -->
<!-- isoreceived="20080804185717" -->
<!-- sent="Mon, 4 Aug 2008 14:57:08 -0400" -->
<!-- isosent="20080804185708" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with SVN access." -->
<!-- id="86C6211F-5B62-4362-8E9D-12290F1543B1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48974417.5050701_at_igi.cnr.it" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem with SVN access.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 14:57:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4532.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Previous message:</strong> <a href="4530.php">Shiqing Fan: "Re: [OMPI devel] Problem with SVN access."</a>
<li><strong>In reply to:</strong> <a href="4523.php">Anton Soppelsa: "[OMPI devel] Problem with SVN access."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4546.php">Anton Soppelsa: "Re: [OMPI devel] Problem with SVN access."</a>
<li><strong>Reply:</strong> <a href="4546.php">Anton Soppelsa: "Re: [OMPI devel] Problem with SVN access."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid that I'm not familiar with those tools.
<br>
<p>But I do SVN actions all the time from a variety of locations around  
<br>
the internet and have not had problems.  Do command-line checkouts  
<br>
work?  Do you have network connectivity to svn.open-mpi.org?  Try  
<br>
commands like:
<br>
<p>svn co <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
<br>
ping svn.open-mpi.org
<br>
telnet svn.open-mpi.org 80
<br>
<p>If you don't have network connectivity to the server, then your GUI  
<br>
commands won't work.
<br>
<p><p>On Aug 4, 2008, at 2:01 PM, Anton Soppelsa wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI repository maintainers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tryed to download the source code of OpenMPI with a couple of SVN  
</span><br>
<span class="quotelev1">&gt; graphical clients, namely the SVN plug-in for eclipse and Tortoise  
</span><br>
<span class="quotelev1">&gt; SVN. It simply does not work. i receive the following errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tortoise:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Command: Checkout from <a href="http://svn.open-mpi.org/svn/ompi">http://svn.open-mpi.org/svn/ompi</a>, revision  
</span><br>
<span class="quotelev1">&gt; HEAD, Fully recursive, Externals included    Error: OPTIONS of '<a href="http://svn.open-mpi.org/svn/ompi">http://svn.open-mpi.org/svn/ompi</a>' 
</span><br>
<span class="quotelev1">&gt; : could not connect to server (<a href="http://svn.open-mpi.org">http://svn.open-mpi.org</a>)    Finished!:
</span><br>
<span class="quotelev1">&gt; Subclipse:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   RA layer request failed
</span><br>
<span class="quotelev1">&gt;   svn: OPTIONS of '<a href="http://svn.open-mpi.org/svn/ompi">http://svn.open-mpi.org/svn/ompi</a>': could not  
</span><br>
<span class="quotelev1">&gt; connect to server (<a href="http://svn.open-mpi.org">http://svn.open-mpi.org</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the first project that does not work with the above plugins.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas how to solve this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Anton
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
<li><strong>Next message:</strong> <a href="4532.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Previous message:</strong> <a href="4530.php">Shiqing Fan: "Re: [OMPI devel] Problem with SVN access."</a>
<li><strong>In reply to:</strong> <a href="4523.php">Anton Soppelsa: "[OMPI devel] Problem with SVN access."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4546.php">Anton Soppelsa: "Re: [OMPI devel] Problem with SVN access."</a>
<li><strong>Reply:</strong> <a href="4546.php">Anton Soppelsa: "Re: [OMPI devel] Problem with SVN access."</a>
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
