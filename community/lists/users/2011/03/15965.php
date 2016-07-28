<?
$subject_val = "Re: [OMPI users] Displaying MAIN in Totalview";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 22 10:46:08 2011" -->
<!-- isoreceived="20110322144608" -->
<!-- sent="Tue, 22 Mar 2011 15:46:04 +0100" -->
<!-- isosent="20110322144604" -->
<!-- name="Dominik Goeddeke" -->
<!-- email="dominik.goeddeke_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Displaying MAIN in Totalview" -->
<!-- id="4D88B62C.5090506_at_math.tu-dortmund.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="88CA5373-DBDD-40F8-B0C5-A7BD85F501B5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Displaying MAIN in Totalview<br>
<strong>From:</strong> Dominik Goeddeke (<em>dominik.goeddeke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-22 10:46:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15966.php">Prentice Bisbal: "Re: [OMPI users] Parallel Computation under WiFi for Beginners"</a>
<li><strong>Previous message:</strong> <a href="15964.php">Jeff Squyres: "Re: [OMPI users] Parallel Computation under WiFi for Beginners"</a>
<li><strong>In reply to:</strong> <a href="15963.php">Jeff Squyres: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
did a quick check for a 1.5.2 build I have lying around (on an Ubuntu box):
<br>
$ nm libmpi.so | grep MPIR_Breakpoint
<br>
00000000000537bf T MPIR_Breakpoint
<br>
<p>Dominik
<br>
<p>On 03/22/2011 03:35 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Huh.  We hadn't had any reports of DDT issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it failing because MPIR_Breakpoint is physically not present in the library?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 21, 2011, at 2:50 PM, Dominik Goeddeke wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for what it's worth: Same thing happens with DDT. OpenMPI 1.2.x runs fine, later versions (at least 1.4.x and newer) let DDT bail out with &quot;Could not break at function MPIR_Breakpoint&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DDT has something like &quot;OpenMPI (compatibility mode)&quot; in its session launch dialog, with this setting (instead of the default &quot;OpenMPI&quot;) it works flawlessly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dominik
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 03/21/2011 06:22 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ick - appears that got dropped a long time ago. I'll add it back in and post a CMR for 1.4 and 1.5 series.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 21, 2011, at 11:08 AM, David Turner wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; About a month ago, this topic was discussed with no real resolution:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/02/15538.php">http://www.open-mpi.org/community/lists/users/2011/02/15538.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We noticed the same problem (TV does not display the user's MAIN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; routine upon initial startup), and contacted the TV developers.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; They suggested a simple OMPI code modification, which we implemented
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and tested; it seems to work fine.  Hopefully, this capability
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can be restored in future releases.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is the body of our communication with the TV developers:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Interestingly enough, someone else asked this very same question recently and I finally dug into it last week and figured out what was going on. TotalView publishes a public interface which allows any MPI implementor to set things up so that it should work fairly seamless with TotalView. I found that one of the defines in the interface is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPIR_force_to_main
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and when we find this symbol defined in mpirun (or orterun in Open MPI's case) then we spend a bit more effort to focus the source pane on the main routine. As you may guess, this is NOT being defined in OpenMPI 1.4.2. It was being defined in the 1.2.x builds though, in a routine called totalview.c. OpenMPI has been re-worked significantly since then, and totalview.c has been replaced by debuggers.c in orte/tools/orterun. About line 130 to 140 (depending on any changes since my look at the 1.4.1 sources) you should find a number of MPIR_ symbols being defined.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; struct MPIR_PROCDESC *MPIR_proctable = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int MPIR_proctable_size = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int MPIR_being_debugged = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; volatile int MPIR_debug_state = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; volatile int MPIR_i_am_starter = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; volatile int MPIR_partial_attach_ok = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I believe you should be able to insert the line:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int MPIR_force_to_main = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; into this section, and then the behavior you are looking for should work after you rebuild OpenMPI. I haven't yet had the time to do that myself, but that was all that existed in the 1.2.x sources, and I know those achieved the desired effect. It's quite possible that someone realized the symbol was initialized, but wasn't be used anyplace, so they just removed it. Without realizing we were looking for it in the debugger. When I pointed this out to the other user, he said he would try it out and pass it on to the Open MPI group. I just checked on that thread, and didn't see any update, so I passed on the info myself.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; David Turner
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Dominik G&#246;ddeke
</span><br>
<span class="quotelev2">&gt;&gt; Institut f&#252;r Angewandte Mathematik
</span><br>
<span class="quotelev2">&gt;&gt; Technische Universit&#228;t Dortmund
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.mathematik.tu-dortmund.de/~goeddeke">http://www.mathematik.tu-dortmund.de/~goeddeke</a>
</span><br>
<span class="quotelev2">&gt;&gt; Tel. +49-(0)231-755-7218  Fax +49-(0)231-755-5933
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dr. Dominik G&#246;ddeke
Institut f&#252;r Angewandte Mathematik
Technische Universit&#228;t Dortmund
<a href="http://www.mathematik.tu-dortmund.de/~goeddeke">http://www.mathematik.tu-dortmund.de/~goeddeke</a>
Tel. +49-(0)231-755-7218  Fax +49-(0)231-755-5933
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15966.php">Prentice Bisbal: "Re: [OMPI users] Parallel Computation under WiFi for Beginners"</a>
<li><strong>Previous message:</strong> <a href="15964.php">Jeff Squyres: "Re: [OMPI users] Parallel Computation under WiFi for Beginners"</a>
<li><strong>In reply to:</strong> <a href="15963.php">Jeff Squyres: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
<!-- nextthread="start" -->
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
