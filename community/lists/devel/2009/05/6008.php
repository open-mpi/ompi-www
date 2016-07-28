<?
$subject_val = "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 09:43:33 2009" -->
<!-- isoreceived="20090512134333" -->
<!-- sent="Tue, 12 May 2009 09:43:27 -0400" -->
<!-- isosent="20090512134327" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure" -->
<!-- id="62934C79-E01E-4EE5-B0E6-0FFBE4F1C981_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D7C14FF1-EE83-4031-B663-0B10CD43B8BE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 09:43:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6009.php">Jeff Squyres: "[OMPI devel] new paffinity"</a>
<li><strong>Previous message:</strong> <a href="6007.php">Jeff Squyres: "Re: [OMPI devel] Bug in return status of MPI_WAIT()"</a>
<li><strong>In reply to:</strong> <a href="6006.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6010.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Reply:</strong> <a href="6010.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 12, 2009, at 9:37 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; For the same reasons that Jeff mentioned, I think it is probably
</span><br>
<span class="quotelev1">&gt; better to have a separate mpi-ext.h outside of mpi.h. It just makes
</span><br>
<span class="quotelev1">&gt; things a bit more explicit for the programmer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With regard to the #define, should we have one for all extended
</span><br>
<span class="quotelev1">&gt; interfaces (i.e., OMPI_HAVE_MPI_EXT) or one for each set of interfaces
</span><br>
<span class="quotelev1">&gt; (i.e., OMPI_HAVE_MPI_EXT_EXAMPLE, OMPI_HAVE_MPI_EXT_MAGIC, ...)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>(putting on my hat as a 3rd party MPI application developer)
<br>
<p>Probably having both would be good.
<br>
<p>1. Having the &quot;OMPI_HAVE_MPI_EXT&quot; is trivial to do; it can be hard- 
<br>
coded in the mpi-ext.h file.  Even if no one uses it, it costs us  
<br>
nothing to add it -- so on the off chance that the global flag is  
<br>
useful to someone, we might as well do it.
<br>
<p>2. Having the &quot;OMPI_HAVE_MPI_EXT_&lt;foo&gt;&quot; can certainly be useful to  
<br>
check for specific extensions, e.g., in someone's configure script and/ 
<br>
or directly in their source code.
<br>
<p>If you didn't find them already, IIRC the m4 function name to convert  
<br>
the &lt;foo&gt; extension name to all caps (and therefore suitable for  
<br>
AC_DEFINE) is something like m4_translit.  Grep through the OMPI m4  
<br>
code / google around to find examples of it.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6009.php">Jeff Squyres: "[OMPI devel] new paffinity"</a>
<li><strong>Previous message:</strong> <a href="6007.php">Jeff Squyres: "Re: [OMPI devel] Bug in return status of MPI_WAIT()"</a>
<li><strong>In reply to:</strong> <a href="6006.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6010.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Reply:</strong> <a href="6010.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
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
