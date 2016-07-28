<?
$subject_val = "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 27 14:30:40 2009" -->
<!-- isoreceived="20090427183040" -->
<!-- sent="Mon, 27 Apr 2009 14:30:36 -0400 (EDT)" -->
<!-- isosent="20090427183036" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3" -->
<!-- id="alpine.DEB.1.10.0904271425290.26006_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0904271123h25f3742aibd4c49a48ece8231_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-27 14:30:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9102.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="9100.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>In reply to:</strong> <a href="9100.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9102.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="9102.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think Serge is talking about compiling the application against one 
<br>
version of Open MPI, linking dynamically, then running against another 
<br>
version of Open MPI.  Since it's dynamically linked, the ORTE/OMPI 
<br>
interactions are covered (the version of mpirun, libopen-rte, and libmpi 
<br>
all match).  The question of application binary compatibility can 
<br>
generally be traced to a couple of issues:
<br>
<p>&nbsp;&nbsp;&nbsp;- function signatures of all MPI functions
<br>
&nbsp;&nbsp;&nbsp;- constants in mpi.h changing
<br>
&nbsp;&nbsp;&nbsp;- size of structures due to the bss optimization for globals
<br>
<p>I can't remember when we changed function signatures last, but it probably 
<br>
has happened.  They may be minor enough to not matter, and definitely 
<br>
wouldn't be in the usual set of functions people use (send,recv,wait, 
<br>
etc.)
<br>
<p>The constants in mpi.h have been pretty steady since day 1, although I 
<br>
haven't checked when they last changed.
<br>
<p>The final one actually should be ok for going from later versions of Open 
<br>
MPI to newer versions, as the structures in question usually grow and 
<br>
rarely shrink in size.
<br>
<p>In other words, it'll probably work, but no one in the group is going to 
<br>
say anything stronger than that.
<br>
<p>Brian
<br>
<p>On Mon, 27 Apr 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; It's hard for me to believe that would work as there are fundamental
</span><br>
<span class="quotelev1">&gt; differences in the MPI-to-RTE interactions between those releases. If it
</span><br>
<span class="quotelev1">&gt; does, it could be a fluke - I personally would not trust it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 27, 2009 at 12:04 PM, Serge &lt;skhan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;       Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;       &gt; That being said, we have fixed this issue and expect to
</span><br>
<span class="quotelev1">&gt;       support binary
</span><br>
<span class="quotelev2">&gt;       &gt; compatibility between Open MPI releases starting with
</span><br>
<span class="quotelev1">&gt;       v1.3.2 (v1.3.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       As far as I can tell from reading the release notes for
</span><br>
<span class="quotelev1">&gt;       v1.3.2, the binary compatibility has not been announced yet.
</span><br>
<span class="quotelev1">&gt;       It was rather a bug fix release. Is it correct? Does it mean
</span><br>
<span class="quotelev1">&gt;       that the compatibility feature is pushed to later releases,
</span><br>
<span class="quotelev1">&gt;       v1.3.3, 1.3.4?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       In my original message (see below) I was looking for advice
</span><br>
<span class="quotelev1">&gt;       as for a seamless transition from v1.2.x to v1.3.x in a
</span><br>
<span class="quotelev1">&gt;       shared multi-user environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Interestingly enough, recently I noticed that although it's
</span><br>
<span class="quotelev1">&gt;       impossible to run an application compiled with v1.2.x under
</span><br>
<span class="quotelev1">&gt;       v1.3.x, the opposite does actually work. An application
</span><br>
<span class="quotelev1">&gt;       compiled with v1.3.x runs using Open MPI v1.2.x.
</span><br>
<span class="quotelev1">&gt;       Specifically, I tested an application compiled with v1.3.0
</span><br>
<span class="quotelev1">&gt;       and v1.3.2, running under Open MPI v1.2.7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       This gives me a perfect opportunity to recompile all the
</span><br>
<span class="quotelev1">&gt;       parallel applications with v1.3.x, transparently to users;
</span><br>
<span class="quotelev1">&gt;       and then switch the default Open MPI library from v1.2.7 to
</span><br>
<span class="quotelev1">&gt;       v1.3.x, when all the apps have been rebuilt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       The problem is that I am not 100% sure in this approach, even
</span><br>
<span class="quotelev1">&gt;       having some successful tests done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Is it safe to run an application built with 1.3.x under
</span><br>
<span class="quotelev1">&gt;       1.2.x? Does it make sense to you?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       = Serge
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;             Unfortunately, binary compatibility between Open
</span><br>
<span class="quotelev1">&gt;             MPI release versions has never been guaranteed
</span><br>
<span class="quotelev1">&gt;             (even between subreleases).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             That being said, we have fixed this issue and
</span><br>
<span class="quotelev1">&gt;             expect to support binary compatibility between
</span><br>
<span class="quotelev1">&gt;             Open MPI releases starting with v1.3.2 (v1.3.1
</span><br>
<span class="quotelev1">&gt;             should be released soon; we're aiming for v1.3.2
</span><br>
<span class="quotelev1">&gt;             towards the beginning of next month).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On Mar 10, 2009, at 11:59 AM, Serge wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   We have a number of applications
</span><br>
<span class="quotelev1">&gt;                   built with Open MPI 1.2 in a shared
</span><br>
<span class="quotelev1">&gt;                   multi-user environment. The Open MPI
</span><br>
<span class="quotelev1">&gt;                   library upgrade has been always
</span><br>
<span class="quotelev1">&gt;                   transparent and painless within the
</span><br>
<span class="quotelev1">&gt;                   v1.2 branch. Now we would like to
</span><br>
<span class="quotelev1">&gt;                   switch to Open MPI 1.3 as seamlessly.
</span><br>
<span class="quotelev1">&gt;                   However, an application built with
</span><br>
<span class="quotelev1">&gt;                   ompi v1.2 will not run with the 1.3
</span><br>
<span class="quotelev1">&gt;                   library; the typical error messages
</span><br>
<span class="quotelev1">&gt;                   are given below. Apparently, the type
</span><br>
<span class="quotelev1">&gt;                   ompi_communicator_t has changed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   Symbol `ompi_mpi_comm_null' has
</span><br>
<span class="quotelev1">&gt;                   different size in shared object,
</span><br>
<span class="quotelev1">&gt;                   consider re-linking
</span><br>
<span class="quotelev1">&gt;                   Symbol `ompi_mpi_comm_world' has
</span><br>
<span class="quotelev1">&gt;                   different size in shared object,
</span><br>
<span class="quotelev1">&gt;                   consider re-linking
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   Do I have to rebuild all the
</span><br>
<span class="quotelev1">&gt;                   applications with Open MPI 1.3?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   Is there a better way to do a smooth
</span><br>
<span class="quotelev1">&gt;                   upgrade?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   = Serge
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       _______________________________________________
</span><br>
<span class="quotelev1">&gt;       users mailing list
</span><br>
<span class="quotelev1">&gt;       users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9102.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="9100.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>In reply to:</strong> <a href="9100.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9102.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="9102.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
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
