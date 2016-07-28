<?
$subject_val = "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 07:50:31 2009" -->
<!-- isoreceived="20090428115031" -->
<!-- sent="Tue, 28 Apr 2009 05:50:15 -0600" -->
<!-- isosent="20090428115015" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3" -->
<!-- id="3F808113-5EA7-4624-89C4-D36F46D6B07F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49F6EAFD.7000203_at_ap.smu.ca" -->
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
<strong>Date:</strong> 2009-04-28 07:50:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9112.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="9110.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>In reply to:</strong> <a href="9110.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9112.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="9112.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd be fascinated to understand how this works. There are multiple  
<br>
function calls in MPI_Init, for example, that simply don't exist in  
<br>
1.3.x. There are references to fields in structures that are no longer  
<br>
present, though the structure itself does still exist. Etc.
<br>
<p>I frankly am stunned that the whole thing doesn't abort due to  
<br>
unresolved references. I tried it here, just for grins, and it aborted  
<br>
immediately.
<br>
<p>I wonder if you truly are running as you think, or if the application  
<br>
isn't picking up the 1.3.x libraries without you realizing it?
<br>
<p>Otherwise, I can only assume you have a magic system that can somehow  
<br>
translate calls to &quot;orte_gpr.xxx&quot; into their equivalent  
<br>
&quot;orte_grpcomm.yyy&quot;, with appropriate changes in parameters....and can  
<br>
figure out that it should just skip a call to &quot;orte_init_stage2&quot; since  
<br>
that function no longer exists....etc.  :-)
<br>
<p><p>On Apr 28, 2009, at 5:39 AM, Serge wrote:
<br>
<p><span class="quotelev1">&gt; Ralph, Brian, and Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your answers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to confirm Brian's words that I am &quot;compiling the application  
</span><br>
<span class="quotelev1">&gt; against one version of Open MPI, linking dynamically, then running  
</span><br>
<span class="quotelev1">&gt; against another version of Open MPI&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fact that the ABI has stabilized with the release of version  
</span><br>
<span class="quotelev1">&gt; 1.3.2, and it's supposed to be steady throughout v1.3 and 1.4, is  
</span><br>
<span class="quotelev1">&gt; great news.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I will try to do is to recompile more applications with v1.3.x  
</span><br>
<span class="quotelev1">&gt; and then try to run them against v1.2.x. After all, it's just for a  
</span><br>
<span class="quotelev1">&gt; quick smooth transition, so that we do not take an outage to make a  
</span><br>
<span class="quotelev1">&gt; system-wide upgrade. It's worth trying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; = Serge
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Remember also that the RTE API's changed between 1.2 and 1.3 - so  
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure what will happen in that case. It could be that the  
</span><br>
<span class="quotelev2">&gt;&gt; ones touching the MPI layer remained stable (don't honestly  
</span><br>
<span class="quotelev2">&gt;&gt; recall), though I believe there are RTE calls in 1.3 that don't  
</span><br>
<span class="quotelev2">&gt;&gt; exist in 1.2. I would think you would have a problem if you hit one  
</span><br>
<span class="quotelev2">&gt;&gt; of those (e.g., when doing a comm_spawn).
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Apr 27, 2009 at 12:36 PM, Jeff Squyres &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    I'd actually be surprised if it works.
</span><br>
<span class="quotelev2">&gt;&gt;    The back-end sizes of Open MPI structures definitely changed  
</span><br>
<span class="quotelev2">&gt;&gt; between
</span><br>
<span class="quotelev2">&gt;&gt;    1.2 and 1.3.  We used to think that this didn't matter, but then  
</span><br>
<span class="quotelev2">&gt;&gt; we
</span><br>
<span class="quotelev2">&gt;&gt;    found out that we were wrong.  :-)  Hence, I'd think that the same
</span><br>
<span class="quotelev2">&gt;&gt;    exact issues you have with taking a 1.2-compiled MPI application  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt;    running with 1.3 would also occur if you took a 1.3-compiled
</span><br>
<span class="quotelev2">&gt;&gt;    application and ran it with 1.2.  If it works at all, I'm guessing
</span><br>
<span class="quotelev2">&gt;&gt;    that you're getting lucky.
</span><br>
<span class="quotelev2">&gt;&gt;    We only finally put in some ABI fixes in 1.3.2.  So the ABI  
</span><br>
<span class="quotelev2">&gt;&gt; *should*
</span><br>
<span class="quotelev2">&gt;&gt;    be steady throughout the rest of the 1.3 and 1.4 series.
</span><br>
<span class="quotelev2">&gt;&gt;    On Apr 27, 2009, at 2:30 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;        I think Serge is talking about compiling the application  
</span><br>
<span class="quotelev2">&gt;&gt; against one
</span><br>
<span class="quotelev2">&gt;&gt;        version of Open MPI, linking dynamically, then running against
</span><br>
<span class="quotelev2">&gt;&gt;        another
</span><br>
<span class="quotelev2">&gt;&gt;        version of Open MPI.  Since it's dynamically linked, the  
</span><br>
<span class="quotelev2">&gt;&gt; ORTE/OMPI
</span><br>
<span class="quotelev2">&gt;&gt;        interactions are covered (the version of mpirun, libopen-rte,
</span><br>
<span class="quotelev2">&gt;&gt;        and libmpi
</span><br>
<span class="quotelev2">&gt;&gt;        all match).  The question of application binary  
</span><br>
<span class="quotelev2">&gt;&gt; compatibility can
</span><br>
<span class="quotelev2">&gt;&gt;        generally be traced to a couple of issues:
</span><br>
<span class="quotelev2">&gt;&gt;          - function signatures of all MPI functions
</span><br>
<span class="quotelev2">&gt;&gt;          - constants in mpi.h changing
</span><br>
<span class="quotelev2">&gt;&gt;          - size of structures due to the bss optimization for globals
</span><br>
<span class="quotelev2">&gt;&gt;        I can't remember when we changed function signatures last, but
</span><br>
<span class="quotelev2">&gt;&gt;        it probably
</span><br>
<span class="quotelev2">&gt;&gt;        has happened.  They may be minor enough to not matter, and
</span><br>
<span class="quotelev2">&gt;&gt;        definitely
</span><br>
<span class="quotelev2">&gt;&gt;        wouldn't be in the usual set of functions people use
</span><br>
<span class="quotelev2">&gt;&gt;        (send,recv,wait,
</span><br>
<span class="quotelev2">&gt;&gt;        etc.)
</span><br>
<span class="quotelev2">&gt;&gt;        The constants in mpi.h have been pretty steady since day 1,
</span><br>
<span class="quotelev2">&gt;&gt;        although I
</span><br>
<span class="quotelev2">&gt;&gt;        haven't checked when they last changed.
</span><br>
<span class="quotelev2">&gt;&gt;        The final one actually should be ok for going from later
</span><br>
<span class="quotelev2">&gt;&gt;        versions of Open
</span><br>
<span class="quotelev2">&gt;&gt;        MPI to newer versions, as the structures in question usually
</span><br>
<span class="quotelev2">&gt;&gt;        grow and
</span><br>
<span class="quotelev2">&gt;&gt;        rarely shrink in size.
</span><br>
<span class="quotelev2">&gt;&gt;        In other words, it'll probably work, but no one in the group  
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt;        going to
</span><br>
<span class="quotelev2">&gt;&gt;        say anything stronger than that.
</span><br>
<span class="quotelev2">&gt;&gt;        Brian
</span><br>
<span class="quotelev2">&gt;&gt;        On Mon, 27 Apr 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; It's hard for me to believe that would work as there are
</span><br>
<span class="quotelev2">&gt;&gt;        fundamental
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; differences in the MPI-to-RTE interactions between those
</span><br>
<span class="quotelev2">&gt;&gt;        releases. If it
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; does, it could be a fluke - I personally would not trust  
</span><br>
<span class="quotelev2">&gt;&gt; it.
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; On Mon, Apr 27, 2009 at 12:04 PM, Serge &lt;skhan_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:skhan_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;       &gt; That being said, we have fixed this issue and  
</span><br>
<span class="quotelev2">&gt;&gt; expect to
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       support binary
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;       &gt; compatibility between Open MPI releases starting  
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       v1.3.2 (v1.3.1
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       As far as I can tell from reading the release notes  
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       v1.3.2, the binary compatibility has not been  
</span><br>
<span class="quotelev2">&gt;&gt; announced
</span><br>
<span class="quotelev2">&gt;&gt;        yet.
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       It was rather a bug fix release. Is it correct?  
</span><br>
<span class="quotelev2">&gt;&gt; Does it
</span><br>
<span class="quotelev2">&gt;&gt;        mean
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       that the compatibility feature is pushed to later  
</span><br>
<span class="quotelev2">&gt;&gt; releases,
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       v1.3.3, 1.3.4?
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       In my original message (see below) I was looking  
</span><br>
<span class="quotelev2">&gt;&gt; for advice
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       as for a seamless transition from v1.2.x to v1.3.x  
</span><br>
<span class="quotelev2">&gt;&gt; in a
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       shared multi-user environment.
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       Interestingly enough, recently I noticed that  
</span><br>
<span class="quotelev2">&gt;&gt; although it's
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       impossible to run an application compiled with  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.x under
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       v1.3.x, the opposite does actually work. An  
</span><br>
<span class="quotelev2">&gt;&gt; application
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       compiled with v1.3.x runs using Open MPI v1.2.x.
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       Specifically, I tested an application compiled with  
</span><br>
<span class="quotelev2">&gt;&gt; v1.3.0
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       and v1.3.2, running under Open MPI v1.2.7.
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       This gives me a perfect opportunity to recompile  
</span><br>
<span class="quotelev2">&gt;&gt; all the
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       parallel applications with v1.3.x, transparently to  
</span><br>
<span class="quotelev2">&gt;&gt; users;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       and then switch the default Open MPI library from  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.7 to
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       v1.3.x, when all the apps have been rebuilt.
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       The problem is that I am not 100% sure in this
</span><br>
<span class="quotelev2">&gt;&gt;        approach, even
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       having some successful tests done.
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       Is it safe to run an application built with 1.3.x  
</span><br>
<span class="quotelev2">&gt;&gt; under
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       1.2.x? Does it make sense to you?
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       = Serge
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;       Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;             Unfortunately, binary compatibility between  
</span><br>
<span class="quotelev2">&gt;&gt; Open
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;             MPI release versions has never been guaranteed
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;             (even between subreleases).
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;             That being said, we have fixed this issue and
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;             expect to support binary compatibility between
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;             Open MPI releases starting with v1.3.2 (v1.3.1
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;             should be released soon; we're aiming for  
</span><br>
<span class="quotelev2">&gt;&gt; v1.3.2
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;             towards the beginning of next month).
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;             On Mar 10, 2009, at 11:59 AM, Serge wrote:
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   Hello,
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   We have a number of applications
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   built with Open MPI 1.2 in a shared
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   multi-user environment. The Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   library upgrade has been always
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   transparent and painless within the
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   v1.2 branch. Now we would like to
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   switch to Open MPI 1.3 as seamlessly.
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   However, an application built with
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   ompi v1.2 will not run with the 1.3
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   library; the typical error messages
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   are given below. Apparently, the type
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   ompi_communicator_t has changed.
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   Symbol `ompi_mpi_comm_null' has
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   different size in shared object,
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   consider re-linking
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   Symbol `ompi_mpi_comm_world' has
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   different size in shared object,
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   consider re-linking
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   Do I have to rebuild all the
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   applications with Open MPI 1.3?
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   Is there a better way to do a smooth
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   upgrade?
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;                   = Serge
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9112.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="9110.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>In reply to:</strong> <a href="9110.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9112.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="9112.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
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
