<?
$subject_val = "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 16:37:25 2009" -->
<!-- isoreceived="20090512203725" -->
<!-- sent="Tue, 12 May 2009 16:37:23 -0400" -->
<!-- isosent="20090512203723" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure" -->
<!-- id="01F96138-1198-419A-A25E-55CBA1EB8BBE_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="62934C79-E01E-4EE5-B0E6-0FFBE4F1C981_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 16:37:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6011.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Previous message:</strong> <a href="6009.php">Jeff Squyres: "[OMPI devel] new paffinity"</a>
<li><strong>In reply to:</strong> <a href="6008.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6011.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Reply:</strong> <a href="6011.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I updated the branch with the following changes based on discussions  
<br>
on and off list:
<br>
<p>&nbsp;&nbsp;* Change configure option from '--enable-ext=LIST' to '--enable-mpi- 
<br>
ext[=LIST]'
<br>
<p>&nbsp;&nbsp;* If no list is given to '--enable-mpi-ext' then ALL extensions that  
<br>
can be built, are built.
<br>
<p>&nbsp;&nbsp;* Add &quot;#define OMPI_HAVE_MPI_EXT&quot; to mpi-ext.h
<br>
<p>&nbsp;&nbsp;* Add &quot;#define OMPI_HAVE_MPI_EXT_COMPONENT&quot; to mpi-ext.h
<br>
<p><p><p>On May 12, 2009, at 9:43 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 12, 2009, at 9:37 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the same reasons that Jeff mentioned, I think it is probably
</span><br>
<span class="quotelev2">&gt;&gt; better to have a separate mpi-ext.h outside of mpi.h. It just makes
</span><br>
<span class="quotelev2">&gt;&gt; things a bit more explicit for the programmer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With regard to the #define, should we have one for all extended
</span><br>
<span class="quotelev2">&gt;&gt; interfaces (i.e., OMPI_HAVE_MPI_EXT) or one for each set of  
</span><br>
<span class="quotelev2">&gt;&gt; interfaces
</span><br>
<span class="quotelev2">&gt;&gt; (i.e., OMPI_HAVE_MPI_EXT_EXAMPLE, OMPI_HAVE_MPI_EXT_MAGIC, ...)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (putting on my hat as a 3rd party MPI application developer)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Probably having both would be good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Having the &quot;OMPI_HAVE_MPI_EXT&quot; is trivial to do; it can be hard- 
</span><br>
<span class="quotelev1">&gt; coded in the mpi-ext.h file.  Even if no one uses it, it costs us  
</span><br>
<span class="quotelev1">&gt; nothing to add it -- so on the off chance that the global flag is  
</span><br>
<span class="quotelev1">&gt; useful to someone, we might as well do it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Having the &quot;OMPI_HAVE_MPI_EXT_&lt;foo&gt;&quot; can certainly be useful to  
</span><br>
<span class="quotelev1">&gt; check for specific extensions, e.g., in someone's configure script  
</span><br>
<span class="quotelev1">&gt; and/or directly in their source code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you didn't find them already, IIRC the m4 function name to  
</span><br>
<span class="quotelev1">&gt; convert the &lt;foo&gt; extension name to all caps (and therefore suitable  
</span><br>
<span class="quotelev1">&gt; for AC_DEFINE) is something like m4_translit.  Grep through the OMPI  
</span><br>
<span class="quotelev1">&gt; m4 code / google around to find examples of it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6011.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Previous message:</strong> <a href="6009.php">Jeff Squyres: "[OMPI devel] new paffinity"</a>
<li><strong>In reply to:</strong> <a href="6008.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6011.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Reply:</strong> <a href="6011.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
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
