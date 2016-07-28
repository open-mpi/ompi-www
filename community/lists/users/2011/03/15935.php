<?
$subject_val = "Re: [OMPI users] Displaying MAIN in Totalview";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 13:22:13 2011" -->
<!-- isoreceived="20110321172213" -->
<!-- sent="Mon, 21 Mar 2011 11:22:02 -0600" -->
<!-- isosent="20110321172202" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Displaying MAIN in Totalview" -->
<!-- id="75959A36-53D2-451B-A15F-285847099513_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D878619.3010301_at_lbl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 13:22:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15936.php">Randall Svancara: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Previous message:</strong> <a href="15934.php">Ralph Castain: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>In reply to:</strong> <a href="15932.php">David Turner: "[OMPI users] Displaying MAIN in Totalview"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15938.php">Peter Thompson: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
<li><strong>Reply:</strong> <a href="15938.php">Peter Thompson: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
<li><strong>Reply:</strong> <a href="15946.php">Dominik Goeddeke: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ick - appears that got dropped a long time ago. I'll add it back in and post a CMR for 1.4 and 1.5 series.
<br>
<p>Thanks!
<br>
Ralph
<br>
<p><p>On Mar 21, 2011, at 11:08 AM, David Turner wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; About a month ago, this topic was discussed with no real resolution:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/02/15538.php">http://www.open-mpi.org/community/lists/users/2011/02/15538.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We noticed the same problem (TV does not display the user's MAIN
</span><br>
<span class="quotelev1">&gt; routine upon initial startup), and contacted the TV developers.
</span><br>
<span class="quotelev1">&gt; They suggested a simple OMPI code modification, which we implemented
</span><br>
<span class="quotelev1">&gt; and tested; it seems to work fine.  Hopefully, this capability
</span><br>
<span class="quotelev1">&gt; can be restored in future releases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the body of our communication with the TV developers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interestingly enough, someone else asked this very same question recently and I finally dug into it last week and figured out what was going on. TotalView publishes a public interface which allows any MPI implementor to set things up so that it should work fairly seamless with TotalView. I found that one of the defines in the interface is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPIR_force_to_main
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and when we find this symbol defined in mpirun (or orterun in Open MPI's case) then we spend a bit more effort to focus the source pane on the main routine. As you may guess, this is NOT being defined in OpenMPI 1.4.2. It was being defined in the 1.2.x builds though, in a routine called totalview.c. OpenMPI has been re-worked significantly since then, and totalview.c has been replaced by debuggers.c in orte/tools/orterun. About line 130 to 140 (depending on any changes since my look at the 1.4.1 sources) you should find a number of MPIR_ symbols being defined.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; struct MPIR_PROCDESC *MPIR_proctable = NULL;
</span><br>
<span class="quotelev1">&gt; int MPIR_proctable_size = 0;
</span><br>
<span class="quotelev1">&gt; int MPIR_being_debugged = 0;
</span><br>
<span class="quotelev1">&gt; volatile int MPIR_debug_state = 0;
</span><br>
<span class="quotelev1">&gt; volatile int MPIR_i_am_starter = 0;
</span><br>
<span class="quotelev1">&gt; volatile int MPIR_partial_attach_ok = 1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe you should be able to insert the line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int MPIR_force_to_main = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; into this section, and then the behavior you are looking for should work after you rebuild OpenMPI. I haven't yet had the time to do that myself, but that was all that existed in the 1.2.x sources, and I know those achieved the desired effect. It's quite possible that someone realized the symbol was initialized, but wasn't be used anyplace, so they just removed it. Without realizing we were looking for it in the debugger. When I pointed this out to the other user, he said he would try it out and pass it on to the Open MPI group. I just checked on that thread, and didn't see any update, so I passed on the info myself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Turner
</span><br>
<span class="quotelev1">&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
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
<li><strong>Next message:</strong> <a href="15936.php">Randall Svancara: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Previous message:</strong> <a href="15934.php">Ralph Castain: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>In reply to:</strong> <a href="15932.php">David Turner: "[OMPI users] Displaying MAIN in Totalview"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15938.php">Peter Thompson: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
<li><strong>Reply:</strong> <a href="15938.php">Peter Thompson: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
<li><strong>Reply:</strong> <a href="15946.php">Dominik Goeddeke: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
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
