<?
$subject_val = "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 27 15:04:06 2009" -->
<!-- isoreceived="20090427190406" -->
<!-- sent="Mon, 27 Apr 2009 13:04:00 -0600" -->
<!-- isosent="20090427190400" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3" -->
<!-- id="71d2d8cc0904271204v53cc56aet3c49df5b749b10d6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47B27717-270A-49EC-9B81-5CE58DE97045_at_cisco.com" -->
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
<strong>Date:</strong> 2009-04-27 15:04:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9105.php">jan: "Re: [OMPI users] users Digest, Vol 1212, Issue 3, Message: 2"</a>
<li><strong>Previous message:</strong> <a href="9103.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>In reply to:</strong> <a href="9102.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9110.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="9110.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Remember also that the RTE API's changed between 1.2 and 1.3 - so I'm not
<br>
sure what will happen in that case. It could be that the ones touching the
<br>
MPI layer remained stable (don't honestly recall), though I believe there
<br>
are RTE calls in 1.3 that don't exist in 1.2. I would think you would have a
<br>
problem if you hit one of those (e.g., when doing a comm_spawn).
<br>
<p><p><p>On Mon, Apr 27, 2009 at 12:36 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'd actually be surprised if it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The back-end sizes of Open MPI structures definitely changed between 1.2
</span><br>
<span class="quotelev1">&gt; and 1.3.  We used to think that this didn't matter, but then we found out
</span><br>
<span class="quotelev1">&gt; that we were wrong.  :-)  Hence, I'd think that the same exact issues you
</span><br>
<span class="quotelev1">&gt; have with taking a 1.2-compiled MPI application and running with 1.3 would
</span><br>
<span class="quotelev1">&gt; also occur if you took a 1.3-compiled application and ran it with 1.2.  If
</span><br>
<span class="quotelev1">&gt; it works at all, I'm guessing that you're getting lucky.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We only finally put in some ABI fixes in 1.3.2.  So the ABI *should* be
</span><br>
<span class="quotelev1">&gt; steady throughout the rest of the 1.3 and 1.4 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 27, 2009, at 2:30 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I think Serge is talking about compiling the application against one
</span><br>
<span class="quotelev2">&gt;&gt; version of Open MPI, linking dynamically, then running against another
</span><br>
<span class="quotelev2">&gt;&gt; version of Open MPI.  Since it's dynamically linked, the ORTE/OMPI
</span><br>
<span class="quotelev2">&gt;&gt; interactions are covered (the version of mpirun, libopen-rte, and libmpi
</span><br>
<span class="quotelev2">&gt;&gt; all match).  The question of application binary compatibility can
</span><br>
<span class="quotelev2">&gt;&gt; generally be traced to a couple of issues:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   - function signatures of all MPI functions
</span><br>
<span class="quotelev2">&gt;&gt;   - constants in mpi.h changing
</span><br>
<span class="quotelev2">&gt;&gt;   - size of structures due to the bss optimization for globals
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't remember when we changed function signatures last, but it probably
</span><br>
<span class="quotelev2">&gt;&gt; has happened.  They may be minor enough to not matter, and definitely
</span><br>
<span class="quotelev2">&gt;&gt; wouldn't be in the usual set of functions people use (send,recv,wait,
</span><br>
<span class="quotelev2">&gt;&gt; etc.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The constants in mpi.h have been pretty steady since day 1, although I
</span><br>
<span class="quotelev2">&gt;&gt; haven't checked when they last changed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The final one actually should be ok for going from later versions of Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI to newer versions, as the structures in question usually grow and
</span><br>
<span class="quotelev2">&gt;&gt; rarely shrink in size.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In other words, it'll probably work, but no one in the group is going to
</span><br>
<span class="quotelev2">&gt;&gt; say anything stronger than that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 27 Apr 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It's hard for me to believe that would work as there are fundamental
</span><br>
<span class="quotelev3">&gt;&gt; &gt; differences in the MPI-to-RTE interactions between those releases. If it
</span><br>
<span class="quotelev3">&gt;&gt; &gt; does, it could be a fluke - I personally would not trust it.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Mon, Apr 27, 2009 at 12:04 PM, Serge &lt;skhan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;       &gt; That being said, we have fixed this issue and expect to
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       support binary
</span><br>
<span class="quotelev4">&gt;&gt; &gt;       &gt; compatibility between Open MPI releases starting with
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       v1.3.2 (v1.3.1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       As far as I can tell from reading the release notes for
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       v1.3.2, the binary compatibility has not been announced yet.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       It was rather a bug fix release. Is it correct? Does it mean
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       that the compatibility feature is pushed to later releases,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       v1.3.3, 1.3.4?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       In my original message (see below) I was looking for advice
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       as for a seamless transition from v1.2.x to v1.3.x in a
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       shared multi-user environment.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       Interestingly enough, recently I noticed that although it's
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       impossible to run an application compiled with v1.2.x under
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       v1.3.x, the opposite does actually work. An application
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       compiled with v1.3.x runs using Open MPI v1.2.x.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       Specifically, I tested an application compiled with v1.3.0
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       and v1.3.2, running under Open MPI v1.2.7.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       This gives me a perfect opportunity to recompile all the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       parallel applications with v1.3.x, transparently to users;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       and then switch the default Open MPI library from v1.2.7 to
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       v1.3.x, when all the apps have been rebuilt.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       The problem is that I am not 100% sure in this approach, even
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       having some successful tests done.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       Is it safe to run an application built with 1.3.x under
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       1.2.x? Does it make sense to you?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       = Serge
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             Unfortunately, binary compatibility between Open
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             MPI release versions has never been guaranteed
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             (even between subreleases).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             That being said, we have fixed this issue and
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             expect to support binary compatibility between
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             Open MPI releases starting with v1.3.2 (v1.3.1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             should be released soon; we're aiming for v1.3.2
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             towards the beginning of next month).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             On Mar 10, 2009, at 11:59 AM, Serge wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   Hello,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   We have a number of applications
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   built with Open MPI 1.2 in a shared
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   multi-user environment. The Open MPI
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   library upgrade has been always
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   transparent and painless within the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   v1.2 branch. Now we would like to
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   switch to Open MPI 1.3 as seamlessly.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   However, an application built with
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   ompi v1.2 will not run with the 1.3
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   library; the typical error messages
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   are given below. Apparently, the type
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   ompi_communicator_t has changed.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   Symbol `ompi_mpi_comm_null' has
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   different size in shared object,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   consider re-linking
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   Symbol `ompi_mpi_comm_world' has
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   different size in shared object,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   consider re-linking
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   Do I have to rebuild all the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   applications with Open MPI 1.3?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   Is there a better way to do a smooth
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   upgrade?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   Thank you.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   = Serge
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9104/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9105.php">jan: "Re: [OMPI users] users Digest, Vol 1212, Issue 3, Message: 2"</a>
<li><strong>Previous message:</strong> <a href="9103.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>In reply to:</strong> <a href="9102.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9110.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="9110.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
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
