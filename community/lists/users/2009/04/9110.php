<?
$subject_val = "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 07:40:17 2009" -->
<!-- isoreceived="20090428114017" -->
<!-- sent="Tue, 28 Apr 2009 08:39:41 -0300" -->
<!-- isosent="20090428113941" -->
<!-- name="Serge" -->
<!-- email="skhan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3" -->
<!-- id="49F6EAFD.7000203_at_ap.smu.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0904271204v53cc56aet3c49df5b749b10d6_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-04-28 07:39:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="9109.php">neeraj_at_[hidden]: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>In reply to:</strong> <a href="9104.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph, Brian, and Jeff,
<br>
<p>Thank you for your answers.
<br>
<p>I want to confirm Brian's words that I am &quot;compiling the application 
<br>
against one version of Open MPI, linking dynamically, then running 
<br>
against another version of Open MPI&quot;.
<br>
<p>The fact that the ABI has stabilized with the release of version 1.3.2, 
<br>
and it's supposed to be steady throughout v1.3 and 1.4, is great news.
<br>
<p>What I will try to do is to recompile more applications with v1.3.x and 
<br>
then try to run them against v1.2.x. After all, it's just for a quick 
<br>
smooth transition, so that we do not take an outage to make a 
<br>
system-wide upgrade. It's worth trying.
<br>
<p>= Serge
<br>
<p><p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Remember also that the RTE API's changed between 1.2 and 1.3 - so I'm 
</span><br>
<span class="quotelev1">&gt; not sure what will happen in that case. It could be that the ones 
</span><br>
<span class="quotelev1">&gt; touching the MPI layer remained stable (don't honestly recall), though I 
</span><br>
<span class="quotelev1">&gt; believe there are RTE calls in 1.3 that don't exist in 1.2. I would 
</span><br>
<span class="quotelev1">&gt; think you would have a problem if you hit one of those (e.g., when doing 
</span><br>
<span class="quotelev1">&gt; a comm_spawn).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 27, 2009 at 12:36 PM, Jeff Squyres &lt;jsquyres_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I'd actually be surprised if it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     The back-end sizes of Open MPI structures definitely changed between
</span><br>
<span class="quotelev1">&gt;     1.2 and 1.3.  We used to think that this didn't matter, but then we
</span><br>
<span class="quotelev1">&gt;     found out that we were wrong.  :-)  Hence, I'd think that the same
</span><br>
<span class="quotelev1">&gt;     exact issues you have with taking a 1.2-compiled MPI application and
</span><br>
<span class="quotelev1">&gt;     running with 1.3 would also occur if you took a 1.3-compiled
</span><br>
<span class="quotelev1">&gt;     application and ran it with 1.2.  If it works at all, I'm guessing
</span><br>
<span class="quotelev1">&gt;     that you're getting lucky.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     We only finally put in some ABI fixes in 1.3.2.  So the ABI *should*
</span><br>
<span class="quotelev1">&gt;     be steady throughout the rest of the 1.3 and 1.4 series.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     On Apr 27, 2009, at 2:30 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         I think Serge is talking about compiling the application against one
</span><br>
<span class="quotelev1">&gt;         version of Open MPI, linking dynamically, then running against
</span><br>
<span class="quotelev1">&gt;         another
</span><br>
<span class="quotelev1">&gt;         version of Open MPI.  Since it's dynamically linked, the ORTE/OMPI
</span><br>
<span class="quotelev1">&gt;         interactions are covered (the version of mpirun, libopen-rte,
</span><br>
<span class="quotelev1">&gt;         and libmpi
</span><br>
<span class="quotelev1">&gt;         all match).  The question of application binary compatibility can
</span><br>
<span class="quotelev1">&gt;         generally be traced to a couple of issues:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           - function signatures of all MPI functions
</span><br>
<span class="quotelev1">&gt;           - constants in mpi.h changing
</span><br>
<span class="quotelev1">&gt;           - size of structures due to the bss optimization for globals
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         I can't remember when we changed function signatures last, but
</span><br>
<span class="quotelev1">&gt;         it probably
</span><br>
<span class="quotelev1">&gt;         has happened.  They may be minor enough to not matter, and
</span><br>
<span class="quotelev1">&gt;         definitely
</span><br>
<span class="quotelev1">&gt;         wouldn't be in the usual set of functions people use
</span><br>
<span class="quotelev1">&gt;         (send,recv,wait,
</span><br>
<span class="quotelev1">&gt;         etc.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         The constants in mpi.h have been pretty steady since day 1,
</span><br>
<span class="quotelev1">&gt;         although I
</span><br>
<span class="quotelev1">&gt;         haven't checked when they last changed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         The final one actually should be ok for going from later
</span><br>
<span class="quotelev1">&gt;         versions of Open
</span><br>
<span class="quotelev1">&gt;         MPI to newer versions, as the structures in question usually
</span><br>
<span class="quotelev1">&gt;         grow and
</span><br>
<span class="quotelev1">&gt;         rarely shrink in size.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         In other words, it'll probably work, but no one in the group is
</span><br>
<span class="quotelev1">&gt;         going to
</span><br>
<span class="quotelev1">&gt;         say anything stronger than that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         On Mon, 27 Apr 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;          &gt; It's hard for me to believe that would work as there are
</span><br>
<span class="quotelev1">&gt;         fundamental
</span><br>
<span class="quotelev2">&gt;          &gt; differences in the MPI-to-RTE interactions between those
</span><br>
<span class="quotelev1">&gt;         releases. If it
</span><br>
<span class="quotelev2">&gt;          &gt; does, it could be a fluke - I personally would not trust it.
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt; Ralph
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt; On Mon, Apr 27, 2009 at 12:04 PM, Serge &lt;skhan_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:skhan_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;          &gt;       Hi Jeff,
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;          &gt;       &gt; That being said, we have fixed this issue and expect to
</span><br>
<span class="quotelev2">&gt;          &gt;       support binary
</span><br>
<span class="quotelev3">&gt;          &gt;       &gt; compatibility between Open MPI releases starting with
</span><br>
<span class="quotelev2">&gt;          &gt;       v1.3.2 (v1.3.1
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;       As far as I can tell from reading the release notes for
</span><br>
<span class="quotelev2">&gt;          &gt;       v1.3.2, the binary compatibility has not been announced
</span><br>
<span class="quotelev1">&gt;         yet.
</span><br>
<span class="quotelev2">&gt;          &gt;       It was rather a bug fix release. Is it correct? Does it
</span><br>
<span class="quotelev1">&gt;         mean
</span><br>
<span class="quotelev2">&gt;          &gt;       that the compatibility feature is pushed to later releases,
</span><br>
<span class="quotelev2">&gt;          &gt;       v1.3.3, 1.3.4?
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;       In my original message (see below) I was looking for advice
</span><br>
<span class="quotelev2">&gt;          &gt;       as for a seamless transition from v1.2.x to v1.3.x in a
</span><br>
<span class="quotelev2">&gt;          &gt;       shared multi-user environment.
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;       Interestingly enough, recently I noticed that although it's
</span><br>
<span class="quotelev2">&gt;          &gt;       impossible to run an application compiled with v1.2.x under
</span><br>
<span class="quotelev2">&gt;          &gt;       v1.3.x, the opposite does actually work. An application
</span><br>
<span class="quotelev2">&gt;          &gt;       compiled with v1.3.x runs using Open MPI v1.2.x.
</span><br>
<span class="quotelev2">&gt;          &gt;       Specifically, I tested an application compiled with v1.3.0
</span><br>
<span class="quotelev2">&gt;          &gt;       and v1.3.2, running under Open MPI v1.2.7.
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;       This gives me a perfect opportunity to recompile all the
</span><br>
<span class="quotelev2">&gt;          &gt;       parallel applications with v1.3.x, transparently to users;
</span><br>
<span class="quotelev2">&gt;          &gt;       and then switch the default Open MPI library from v1.2.7 to
</span><br>
<span class="quotelev2">&gt;          &gt;       v1.3.x, when all the apps have been rebuilt.
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;       The problem is that I am not 100% sure in this
</span><br>
<span class="quotelev1">&gt;         approach, even
</span><br>
<span class="quotelev2">&gt;          &gt;       having some successful tests done.
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;       Is it safe to run an application built with 1.3.x under
</span><br>
<span class="quotelev2">&gt;          &gt;       1.2.x? Does it make sense to you?
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;       = Serge
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;       Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;          &gt;             Unfortunately, binary compatibility between Open
</span><br>
<span class="quotelev2">&gt;          &gt;             MPI release versions has never been guaranteed
</span><br>
<span class="quotelev2">&gt;          &gt;             (even between subreleases).
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;             That being said, we have fixed this issue and
</span><br>
<span class="quotelev2">&gt;          &gt;             expect to support binary compatibility between
</span><br>
<span class="quotelev2">&gt;          &gt;             Open MPI releases starting with v1.3.2 (v1.3.1
</span><br>
<span class="quotelev2">&gt;          &gt;             should be released soon; we're aiming for v1.3.2
</span><br>
<span class="quotelev2">&gt;          &gt;             towards the beginning of next month).
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;             On Mar 10, 2009, at 11:59 AM, Serge wrote:
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;                   Hello,
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;                   We have a number of applications
</span><br>
<span class="quotelev2">&gt;          &gt;                   built with Open MPI 1.2 in a shared
</span><br>
<span class="quotelev2">&gt;          &gt;                   multi-user environment. The Open MPI
</span><br>
<span class="quotelev2">&gt;          &gt;                   library upgrade has been always
</span><br>
<span class="quotelev2">&gt;          &gt;                   transparent and painless within the
</span><br>
<span class="quotelev2">&gt;          &gt;                   v1.2 branch. Now we would like to
</span><br>
<span class="quotelev2">&gt;          &gt;                   switch to Open MPI 1.3 as seamlessly.
</span><br>
<span class="quotelev2">&gt;          &gt;                   However, an application built with
</span><br>
<span class="quotelev2">&gt;          &gt;                   ompi v1.2 will not run with the 1.3
</span><br>
<span class="quotelev2">&gt;          &gt;                   library; the typical error messages
</span><br>
<span class="quotelev2">&gt;          &gt;                   are given below. Apparently, the type
</span><br>
<span class="quotelev2">&gt;          &gt;                   ompi_communicator_t has changed.
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;                   Symbol `ompi_mpi_comm_null' has
</span><br>
<span class="quotelev2">&gt;          &gt;                   different size in shared object,
</span><br>
<span class="quotelev2">&gt;          &gt;                   consider re-linking
</span><br>
<span class="quotelev2">&gt;          &gt;                   Symbol `ompi_mpi_comm_world' has
</span><br>
<span class="quotelev2">&gt;          &gt;                   different size in shared object,
</span><br>
<span class="quotelev2">&gt;          &gt;                   consider re-linking
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;                   Do I have to rebuild all the
</span><br>
<span class="quotelev2">&gt;          &gt;                   applications with Open MPI 1.3?
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;                   Is there a better way to do a smooth
</span><br>
<span class="quotelev2">&gt;          &gt;                   upgrade?
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;                   Thank you.
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;                   = Serge
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="9109.php">neeraj_at_[hidden]: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>In reply to:</strong> <a href="9104.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
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
