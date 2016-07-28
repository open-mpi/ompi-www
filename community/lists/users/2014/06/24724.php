<?
$subject_val = "Re: [OMPI users] Problem moving from 1.4 to 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 14:03:34 2014" -->
<!-- isoreceived="20140627180334" -->
<!-- sent="Fri, 27 Jun 2014 20:03:23 +0200" -->
<!-- isosent="20140627180323" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem moving from 1.4 to 1.6" -->
<!-- id="AC0E9CE8-CAC8-451D-86FF-655AF9050CA8_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF5F9399A6.011F2211-ON85257D04.0061EA2F-85257D04.006294D6_at_notes.aero.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem moving from 1.4 to 1.6<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-27 14:03:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24725.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Previous message:</strong> <a href="24723.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>In reply to:</strong> <a href="24723.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24725.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Reply:</strong> <a href="24725.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 27.06.2014 um 19:56 schrieb Jeffrey A Cummings:
<br>
<p><span class="quotelev1">&gt; I appreciate your response and I understand the logic behind your suggestion, but you and the other regular expert contributors to this list are frequently working under a misapprehension.  Many of your openMPI users don't have any control over what version of openMPI is available on their system.  I'm stuck with whatever version my IT people choose to bless, which in general is the (possibly old and/or moldy) version that is bundled with some larger package (i.e., Rocks, Linux).  The fact that I'm only now seeing this 1.4 to 1.6 problem illustrates the situation I'm in.  I really need someone to did into their memory archives to see if they can come up with a clue for me.
</span><br>
<p>You can freely download the Open MPI source and install it for example in your personal ~/local/openmpi-1.8 or alike. Pointing your $PATH and $LD_LIBRARY_PATH to your own version will supersede installed system one.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Jeffrey A. Cummings
</span><br>
<span class="quotelev1">&gt; Engineering Specialist
</span><br>
<span class="quotelev1">&gt; Performance Modeling and Analysis Department
</span><br>
<span class="quotelev1">&gt; Systems Analysis and Simulation Subdivision
</span><br>
<span class="quotelev1">&gt; Systems Engineering Division
</span><br>
<span class="quotelev1">&gt; Engineering and Technology Group
</span><br>
<span class="quotelev1">&gt; The Aerospace Corporation
</span><br>
<span class="quotelev1">&gt; 571-307-4220
</span><br>
<span class="quotelev1">&gt; jeffrey.a.cummings_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From:        Gus Correa &lt;gus_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; To:        Open MPI Users &lt;users_at_[hidden]&gt;, 
</span><br>
<span class="quotelev1">&gt; Date:        06/27/2014 01:45 PM 
</span><br>
<span class="quotelev1">&gt; Subject:        Re: [OMPI users] Problem moving from 1.4 to 1.6 
</span><br>
<span class="quotelev1">&gt; Sent by:        &quot;users&quot; &lt;users-bounces_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It may be easier to install the latest OMPI from the tarball,
</span><br>
<span class="quotelev1">&gt; rather than trying to sort out the error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The packaged built of (somewhat old) OMPI 1.6.2 that came with
</span><br>
<span class="quotelev1">&gt; Linux may not have built against the same IB libraries, hardware,
</span><br>
<span class="quotelev1">&gt; and configuration you have.
</span><br>
<span class="quotelev1">&gt; [The error message reference to udapl is ominous.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The mpirun command line contains the argument '--mca btl ^openib', which
</span><br>
<span class="quotelev2">&gt; &gt; I thought told mpi to not look for the ib interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you said, the mca parameter above tells OMPI not to use openib,
</span><br>
<span class="quotelev1">&gt; although it may not be the only cause of the problem.
</span><br>
<span class="quotelev1">&gt; If you want to use openib switch to
</span><br>
<span class="quotelev1">&gt; --mca btl openib,sm,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another thing to check is whether there is a mixup of enviroment 
</span><br>
<span class="quotelev1">&gt; variables, PATH and LD_LIBRARY_PATH perhaps pointing to the old OMPI 
</span><br>
<span class="quotelev1">&gt; version you may have installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My two cents,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 06/27/2014 12:53 PM, Jeffrey A Cummings wrote:
</span><br>
<span class="quotelev2">&gt; &gt; We have recently upgraded our cluster to a version of Linux which comes
</span><br>
<span class="quotelev2">&gt; &gt; with openMPI version 1.6.2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; An application which ran previously (using some version of 1.4) now
</span><br>
<span class="quotelev2">&gt; &gt; errors out with the following messages:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;          librdmacm: Fatal: no RDMA devices found
</span><br>
<span class="quotelev2">&gt; &gt;          librdmacm: Fatal: no RDMA devices found
</span><br>
<span class="quotelev2">&gt; &gt;          librdmacm: Fatal: no RDMA devices found
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;          WARNING: Failed to open &quot;OpenIB-cma&quot; [DAT_INTERNAL_ERROR:].
</span><br>
<span class="quotelev2">&gt; &gt;          This may be a real error or it may be an invalid entry in the
</span><br>
<span class="quotelev2">&gt; &gt; uDAPL
</span><br>
<span class="quotelev2">&gt; &gt;          Registry which is contained in the dat.conf file. Contact your
</span><br>
<span class="quotelev2">&gt; &gt; local
</span><br>
<span class="quotelev2">&gt; &gt;          System Administrator to confirm the availability of the
</span><br>
<span class="quotelev2">&gt; &gt; interfaces in
</span><br>
<span class="quotelev2">&gt; &gt;          the dat.conf file.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;          [tupile:25363] 2 more processes have sent help message
</span><br>
<span class="quotelev2">&gt; &gt; help-mpi-btl-udapl.txt / dat_ia_open fail
</span><br>
<span class="quotelev2">&gt; &gt;          [tupile:25363] Set MCA parameter &quot;orte_base_help_aggregate&quot; to
</span><br>
<span class="quotelev2">&gt; &gt; 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The mpirun command line contains the argument '--mca btl ^openib', which
</span><br>
<span class="quotelev2">&gt; &gt; I thought told mpi to not look for the ib interface.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can anyone suggest what the problem might be?  Did the relevant syntax
</span><br>
<span class="quotelev2">&gt; &gt; change between versions 1.4 and 1.6?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeffrey A. Cummings
</span><br>
<span class="quotelev2">&gt; &gt; Engineering Specialist
</span><br>
<span class="quotelev2">&gt; &gt; Performance Modeling and Analysis Department
</span><br>
<span class="quotelev2">&gt; &gt; Systems Analysis and Simulation Subdivision
</span><br>
<span class="quotelev2">&gt; &gt; Systems Engineering Division
</span><br>
<span class="quotelev2">&gt; &gt; Engineering and Technology Group
</span><br>
<span class="quotelev2">&gt; &gt; The Aerospace Corporation
</span><br>
<span class="quotelev2">&gt; &gt; 571-307-4220
</span><br>
<span class="quotelev2">&gt; &gt; jeffrey.a.cummings_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24721.php">http://www.open-mpi.org/community/lists/users/2014/06/24721.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24722.php">http://www.open-mpi.org/community/lists/users/2014/06/24722.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24723.php">http://www.open-mpi.org/community/lists/users/2014/06/24723.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24725.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Previous message:</strong> <a href="24723.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>In reply to:</strong> <a href="24723.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24725.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Reply:</strong> <a href="24725.php">Jeffrey A Cummings: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
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
