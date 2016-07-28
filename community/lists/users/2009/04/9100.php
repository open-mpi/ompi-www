<?
$subject_val = "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 27 14:23:09 2009" -->
<!-- isoreceived="20090427182309" -->
<!-- sent="Mon, 27 Apr 2009 12:23:03 -0600" -->
<!-- isosent="20090427182303" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3" -->
<!-- id="71d2d8cc0904271123h25f3742aibd4c49a48ece8231_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49F5F3A7.204_at_ap.smu.ca" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-27 14:23:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9101.php">Brian W. Barrett: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="9099.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>In reply to:</strong> <a href="9099.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9101.php">Brian W. Barrett: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="9101.php">Brian W. Barrett: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's hard for me to believe that would work as there are fundamental
<br>
differences in the MPI-to-RTE interactions between those releases. If it
<br>
does, it could be a fluke - I personally would not trust it.
<br>
<p>Ralph
<br>
<p>On Mon, Apr 27, 2009 at 12:04 PM, Serge &lt;skhan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; That being said, we have fixed this issue and expect to support binary
</span><br>
<span class="quotelev2">&gt; &gt; compatibility between Open MPI releases starting with v1.3.2 (v1.3.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as I can tell from reading the release notes for v1.3.2, the binary
</span><br>
<span class="quotelev1">&gt; compatibility has not been announced yet. It was rather a bug fix release.
</span><br>
<span class="quotelev1">&gt; Is it correct? Does it mean that the compatibility feature is pushed to
</span><br>
<span class="quotelev1">&gt; later releases, v1.3.3, 1.3.4?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my original message (see below) I was looking for advice as for a
</span><br>
<span class="quotelev1">&gt; seamless transition from v1.2.x to v1.3.x in a shared multi-user
</span><br>
<span class="quotelev1">&gt; environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interestingly enough, recently I noticed that although it's impossible to
</span><br>
<span class="quotelev1">&gt; run an application compiled with v1.2.x under v1.3.x, the opposite does
</span><br>
<span class="quotelev1">&gt; actually work. An application compiled with v1.3.x runs using Open MPI
</span><br>
<span class="quotelev1">&gt; v1.2.x. Specifically, I tested an application compiled with v1.3.0 and
</span><br>
<span class="quotelev1">&gt; v1.3.2, running under Open MPI v1.2.7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This gives me a perfect opportunity to recompile all the parallel
</span><br>
<span class="quotelev1">&gt; applications with v1.3.x, transparently to users; and then switch the
</span><br>
<span class="quotelev1">&gt; default Open MPI library from v1.2.7 to v1.3.x, when all the apps have been
</span><br>
<span class="quotelev1">&gt; rebuilt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that I am not 100% sure in this approach, even having some
</span><br>
<span class="quotelev1">&gt; successful tests done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it safe to run an application built with 1.3.x under 1.2.x? Does it make
</span><br>
<span class="quotelev1">&gt; sense to you?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; = Serge
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, binary compatibility between Open MPI release versions has
</span><br>
<span class="quotelev2">&gt;&gt; never been guaranteed (even between subreleases).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That being said, we have fixed this issue and expect to support binary
</span><br>
<span class="quotelev2">&gt;&gt; compatibility between Open MPI releases starting with v1.3.2 (v1.3.1 should
</span><br>
<span class="quotelev2">&gt;&gt; be released soon; we're aiming for v1.3.2 towards the beginning of next
</span><br>
<span class="quotelev2">&gt;&gt; month).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 10, 2009, at 11:59 AM, Serge wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have a number of applications built with Open MPI 1.2 in a shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multi-user environment. The Open MPI library upgrade has been always
</span><br>
<span class="quotelev3">&gt;&gt;&gt; transparent and painless within the v1.2 branch. Now we would like to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; switch to Open MPI 1.3 as seamlessly. However, an application built with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi v1.2 will not run with the 1.3 library; the typical error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are given below. Apparently, the type ompi_communicator_t has changed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Symbol `ompi_mpi_comm_null' has different size in shared object,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consider re-linking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Symbol `ompi_mpi_comm_world' has different size in shared object,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consider re-linking
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do I have to rebuild all the applications with Open MPI 1.3?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a better way to do a smooth upgrade?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = Serge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9100/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9101.php">Brian W. Barrett: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="9099.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>In reply to:</strong> <a href="9099.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9101.php">Brian W. Barrett: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="9101.php">Brian W. Barrett: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
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
