<?
$subject_val = "Re: [OMPI users] Problem moving from 1.4 to 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 13:56:48 2014" -->
<!-- isoreceived="20140627175648" -->
<!-- sent="Fri, 27 Jun 2014 13:56:46 -0400" -->
<!-- isosent="20140627175646" -->
<!-- name="Jeffrey A Cummings" -->
<!-- email="Jeffrey.A.Cummings_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem moving from 1.4 to 1.6" -->
<!-- id="OF5F9399A6.011F2211-ON85257D04.0061EA2F-85257D04.006294D6_at_notes.aero.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="53ADAD80.2020305_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Jeffrey A Cummings (<em>Jeffrey.A.Cummings_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-27 13:56:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24724.php">Reuti: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Previous message:</strong> <a href="24722.php">Gus Correa: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>In reply to:</strong> <a href="24722.php">Gus Correa: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24724.php">Reuti: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Reply:</strong> <a href="24724.php">Reuti: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Reply:</strong> <a href="24726.php">Gus Correa: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I appreciate your response and I understand the logic behind your 
<br>
suggestion, but you and the other regular expert contributors to this list 
<br>
are frequently working under a misapprehension.  Many of your openMPI 
<br>
users don't have any control over what version of openMPI is available on 
<br>
their system.  I'm stuck with whatever version my IT people choose to 
<br>
bless, which in general is the (possibly old and/or moldy) version that is 
<br>
bundled with some larger package (i.e., Rocks, Linux).  The fact that I'm 
<br>
only now seeing this 1.4 to 1.6 problem illustrates the situation I'm in. 
<br>
I really need someone to did into their memory archives to see if they can 
<br>
come up with a clue for me.
<br>
<p>Jeffrey A. Cummings
<br>
Engineering Specialist
<br>
Performance Modeling and Analysis Department
<br>
Systems Analysis and Simulation Subdivision
<br>
Systems Engineering Division
<br>
Engineering and Technology Group
<br>
The Aerospace Corporation
<br>
571-307-4220
<br>
jeffrey.a.cummings_at_[hidden]
<br>
<p><p><p>From:   Gus Correa &lt;gus_at_[hidden]&gt;
<br>
To:     Open MPI Users &lt;users_at_[hidden]&gt;, 
<br>
Date:   06/27/2014 01:45 PM
<br>
Subject:        Re: [OMPI users] Problem moving from 1.4 to 1.6
<br>
Sent by:        &quot;users&quot; &lt;users-bounces_at_[hidden]&gt;
<br>
<p><p><p>It may be easier to install the latest OMPI from the tarball,
<br>
rather than trying to sort out the error.
<br>
<p><a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
<br>
<p>The packaged built of (somewhat old) OMPI 1.6.2 that came with
<br>
Linux may not have built against the same IB libraries, hardware,
<br>
and configuration you have.
<br>
[The error message reference to udapl is ominous.]
<br>
<p><span class="quotelev1"> &gt; The mpirun command line contains the argument '--mca btl ^openib', 
</span><br>
which
<br>
<span class="quotelev1"> &gt; I thought told mpi to not look for the ib interface.
</span><br>
<p>As you said, the mca parameter above tells OMPI not to use openib,
<br>
although it may not be the only cause of the problem.
<br>
If you want to use openib switch to
<br>
--mca btl openib,sm,self
<br>
<p>Another thing to check is whether there is a mixup of enviroment 
<br>
variables, PATH and LD_LIBRARY_PATH perhaps pointing to the old OMPI 
<br>
version you may have installed.
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<p>On 06/27/2014 12:53 PM, Jeffrey A Cummings wrote:
<br>
<span class="quotelev1">&gt; We have recently upgraded our cluster to a version of Linux which comes
</span><br>
<span class="quotelev1">&gt; with openMPI version 1.6.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An application which ran previously (using some version of 1.4) now
</span><br>
<span class="quotelev1">&gt; errors out with the following messages:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          librdmacm: Fatal: no RDMA devices found
</span><br>
<span class="quotelev1">&gt;          librdmacm: Fatal: no RDMA devices found
</span><br>
<span class="quotelev1">&gt;          librdmacm: Fatal: no RDMA devices found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt;          WARNING: Failed to open &quot;OpenIB-cma&quot; [DAT_INTERNAL_ERROR:].
</span><br>
<span class="quotelev1">&gt;          This may be a real error or it may be an invalid entry in the
</span><br>
<span class="quotelev1">&gt; uDAPL
</span><br>
<span class="quotelev1">&gt;          Registry which is contained in the dat.conf file. Contact your
</span><br>
<span class="quotelev1">&gt; local
</span><br>
<span class="quotelev1">&gt;          System Administrator to confirm the availability of the
</span><br>
<span class="quotelev1">&gt; interfaces in
</span><br>
<span class="quotelev1">&gt;          the dat.conf file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt;          [tupile:25363] 2 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-udapl.txt / dat_ia_open fail
</span><br>
<span class="quotelev1">&gt;          [tupile:25363] Set MCA parameter &quot;orte_base_help_aggregate&quot; to
</span><br>
<span class="quotelev1">&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mpirun command line contains the argument '--mca btl ^openib', which
</span><br>
<span class="quotelev1">&gt; I thought told mpi to not look for the ib interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone suggest what the problem might be?  Did the relevant syntax
</span><br>
<span class="quotelev1">&gt; change between versions 1.4 and 1.6?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeffrey A. Cummings
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/06/24721.php">http://www.open-mpi.org/community/lists/users/2014/06/24721.php</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/06/24722.php">http://www.open-mpi.org/community/lists/users/2014/06/24722.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24723/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24724.php">Reuti: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Previous message:</strong> <a href="24722.php">Gus Correa: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>In reply to:</strong> <a href="24722.php">Gus Correa: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24724.php">Reuti: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Reply:</strong> <a href="24724.php">Reuti: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Reply:</strong> <a href="24726.php">Gus Correa: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
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
