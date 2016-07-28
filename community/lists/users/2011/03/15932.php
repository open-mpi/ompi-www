<?
$subject_val = "[OMPI users] Displaying MAIN in Totalview";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 13:03:59 2011" -->
<!-- isoreceived="20110321170359" -->
<!-- sent="Mon, 21 Mar 2011 10:08:41 -0700" -->
<!-- isosent="20110321170841" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="[OMPI users] Displaying MAIN in Totalview" -->
<!-- id="4D878619.3010301_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Displaying MAIN in Totalview<br>
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 13:08:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15933.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>Previous message:</strong> <a href="15931.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15935.php">Ralph Castain: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
<li><strong>Reply:</strong> <a href="15935.php">Ralph Castain: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>About a month ago, this topic was discussed with no real resolution:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2011/02/15538.php">http://www.open-mpi.org/community/lists/users/2011/02/15538.php</a>
<br>
<p>We noticed the same problem (TV does not display the user's MAIN
<br>
routine upon initial startup), and contacted the TV developers.
<br>
They suggested a simple OMPI code modification, which we implemented
<br>
and tested; it seems to work fine.  Hopefully, this capability
<br>
can be restored in future releases.
<br>
<p>Here is the body of our communication with the TV developers:
<br>
<p>----------------------------------------------------------------------
<br>
<p>Interestingly enough, someone else asked this very same question 
<br>
recently and I finally dug into it last week and figured out what was 
<br>
going on. TotalView publishes a public interface which allows any MPI 
<br>
implementor to set things up so that it should work fairly seamless with 
<br>
TotalView. I found that one of the defines in the interface is
<br>
<p>MPIR_force_to_main
<br>
<p>and when we find this symbol defined in mpirun (or orterun in Open MPI's 
<br>
case) then we spend a bit more effort to focus the source pane on the 
<br>
main routine. As you may guess, this is NOT being defined in OpenMPI 
<br>
1.4.2. It was being defined in the 1.2.x builds though, in a routine 
<br>
called totalview.c. OpenMPI has been re-worked significantly since then, 
<br>
and totalview.c has been replaced by debuggers.c in orte/tools/orterun. 
<br>
About line 130 to 140 (depending on any changes since my look at the 
<br>
1.4.1 sources) you should find a number of MPIR_ symbols being defined.
<br>
<p>struct MPIR_PROCDESC *MPIR_proctable = NULL;
<br>
int MPIR_proctable_size = 0;
<br>
int MPIR_being_debugged = 0;
<br>
volatile int MPIR_debug_state = 0;
<br>
volatile int MPIR_i_am_starter = 0;
<br>
volatile int MPIR_partial_attach_ok = 1;
<br>
<p><p>I believe you should be able to insert the line:
<br>
<p>int MPIR_force_to_main = 0;
<br>
<p>into this section, and then the behavior you are looking for should work 
<br>
after you rebuild OpenMPI. I haven't yet had the time to do that myself, 
<br>
but that was all that existed in the 1.2.x sources, and I know those 
<br>
achieved the desired effect. It's quite possible that someone realized 
<br>
the symbol was initialized, but wasn't be used anyplace, so they just 
<br>
removed it. Without realizing we were looking for it in the debugger. 
<br>
When I pointed this out to the other user, he said he would try it out 
<br>
and pass it on to the Open MPI group. I just checked on that thread, and 
<br>
didn't see any update, so I passed on the info myself.
<br>
<p>----------------------------------------------------------------------
<br>
<p><pre>
-- 
Best regards,
David Turner
User Services Group        email: dpturner_at_[hidden]
NERSC Division             phone: (510) 486-4027
Lawrence Berkeley Lab        fax: (510) 486-4316
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15933.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>Previous message:</strong> <a href="15931.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15935.php">Ralph Castain: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
<li><strong>Reply:</strong> <a href="15935.php">Ralph Castain: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
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
