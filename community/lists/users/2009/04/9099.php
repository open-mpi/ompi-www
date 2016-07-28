<?
$subject_val = "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 27 14:05:01 2009" -->
<!-- isoreceived="20090427180501" -->
<!-- sent="Mon, 27 Apr 2009 15:04:23 -0300" -->
<!-- isosent="20090427180423" -->
<!-- name="Serge" -->
<!-- email="skhan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3" -->
<!-- id="49F5F3A7.204_at_ap.smu.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BAA8D566-1B5F-40FA-8FBA-8AD380602590_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3<br>
<strong>From:</strong> Serge (<em>skhan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-27 14:04:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9100.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="9098.php">Josh Hursey: "Re: [OMPI users] Question about restart"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8386.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9100.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="9100.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p><span class="quotelev1"> &gt; That being said, we have fixed this issue and expect to support binary
</span><br>
<span class="quotelev1"> &gt; compatibility between Open MPI releases starting with v1.3.2 (v1.3.1
</span><br>
<p>As far as I can tell from reading the release notes for v1.3.2, the 
<br>
binary compatibility has not been announced yet. It was rather a bug fix 
<br>
release. Is it correct? Does it mean that the compatibility feature is 
<br>
pushed to later releases, v1.3.3, 1.3.4?
<br>
<p>In my original message (see below) I was looking for advice as for a 
<br>
seamless transition from v1.2.x to v1.3.x in a shared multi-user 
<br>
environment.
<br>
<p>Interestingly enough, recently I noticed that although it's impossible 
<br>
to run an application compiled with v1.2.x under v1.3.x, the opposite 
<br>
does actually work. An application compiled with v1.3.x runs using Open 
<br>
MPI v1.2.x. Specifically, I tested an application compiled with v1.3.0 
<br>
and v1.3.2, running under Open MPI v1.2.7.
<br>
<p>This gives me a perfect opportunity to recompile all the parallel 
<br>
applications with v1.3.x, transparently to users; and then switch the 
<br>
default Open MPI library from v1.2.7 to v1.3.x, when all the apps have 
<br>
been rebuilt.
<br>
<p>The problem is that I am not 100% sure in this approach, even having 
<br>
some successful tests done.
<br>
<p>Is it safe to run an application built with 1.3.x under 1.2.x? Does it 
<br>
make sense to you?
<br>
<p>= Serge
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Unfortunately, binary compatibility between Open MPI release versions 
</span><br>
<span class="quotelev1">&gt; has never been guaranteed (even between subreleases).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, we have fixed this issue and expect to support binary 
</span><br>
<span class="quotelev1">&gt; compatibility between Open MPI releases starting with v1.3.2 (v1.3.1 
</span><br>
<span class="quotelev1">&gt; should be released soon; we're aiming for v1.3.2 towards the beginning 
</span><br>
<span class="quotelev1">&gt; of next month).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2009, at 11:59 AM, Serge wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have a number of applications built with Open MPI 1.2 in a shared
</span><br>
<span class="quotelev2">&gt;&gt; multi-user environment. The Open MPI library upgrade has been always
</span><br>
<span class="quotelev2">&gt;&gt; transparent and painless within the v1.2 branch. Now we would like to
</span><br>
<span class="quotelev2">&gt;&gt; switch to Open MPI 1.3 as seamlessly. However, an application built with
</span><br>
<span class="quotelev2">&gt;&gt; ompi v1.2 will not run with the 1.3 library; the typical error messages
</span><br>
<span class="quotelev2">&gt;&gt; are given below. Apparently, the type ompi_communicator_t has changed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Symbol `ompi_mpi_comm_null' has different size in shared object,
</span><br>
<span class="quotelev2">&gt;&gt; consider re-linking
</span><br>
<span class="quotelev2">&gt;&gt; Symbol `ompi_mpi_comm_world' has different size in shared object,
</span><br>
<span class="quotelev2">&gt;&gt; consider re-linking
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do I have to rebuild all the applications with Open MPI 1.3?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a better way to do a smooth upgrade?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; = Serge
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9100.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="9098.php">Josh Hursey: "Re: [OMPI users] Question about restart"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8386.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9100.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="9100.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
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
