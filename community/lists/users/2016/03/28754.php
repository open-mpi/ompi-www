<?
$subject_val = "Re: [OMPI users] Fault tolerant feature in Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 18 10:01:29 2016" -->
<!-- isoreceived="20160318140129" -->
<!-- sent="Fri, 18 Mar 2016 07:01:22 -0700" -->
<!-- isosent="20160318140122" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault tolerant feature in Open MPI" -->
<!-- id="C5A71AA1-C004-4FC4-89D2-D203D8C003E1_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CACPfdUsZ1TTSrt3KY_cTody78iwSc2VT3vM-ELJ4-1Zf4-Uxew_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fault tolerant feature in Open MPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-18 10:01:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28755.php">Andrus, Brian Contractor: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
<li><strong>Previous message:</strong> <a href="28753.php">Thomas Jahns: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>In reply to:</strong> <a href="28752.php">Husen R: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28759.php">Xavier Besseron: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don&#226;&#128;&#153;t believe OMPI supports FTB, I&#226;&#128;&#153;m afraid - you might want to post your question on an FTB mailing list (I don&#226;&#128;&#153;t recall if that project is even active any more?)
<br>
<p><p><p><span class="quotelev1">&gt; On Mar 18, 2016, at 3:24 AM, Husen R &lt;hus3nr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the reply and valuable informations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have configured MVAPICH2 using the instructions available in a resource provided by Xavier.
</span><br>
<span class="quotelev1">&gt; I also have installed FTB (Fault-Tolerant Backplane) in order for MVAPICH2 to have process migration feature.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; however, I got the following error message when I tried to run ftb_database_server.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; pro_at_head-node:/usr/local/sbin$ ftb_database_server &amp;
</span><br>
<span class="quotelev1">&gt; [2] 10678
</span><br>
<span class="quotelev1">&gt; pro_at_head-node:/usr/local/sbin$ [FTB_ERROR][/home/pro/ftb-0.6.2/src/manager_lib/network/network_sock/include/ftb_network_sock.h: line 205][hostname:head-node]Cannot find boot-strap server ip address
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error message : &quot;cannot find boot-strap server ip address&quot;.
</span><br>
<span class="quotelev1">&gt; I have configured bootstrap ip address when I install FTB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; does anyone have experience solving this problem when using FTB in Open MPI?
</span><br>
<span class="quotelev1">&gt; I need help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Husen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 18, 2016 at 12:06 AM, Xavier Besseron &lt;xavier.besseron_at_[hidden] &lt;mailto:xavier.besseron_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 17, 2016 at 3:17 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Just to clarify: I am not aware of any MPI that will allow you to relocate a
</span><br>
<span class="quotelev2">&gt; &gt; process while it is running. You have to checkpoint the job, terminate it,
</span><br>
<span class="quotelev2">&gt; &gt; and then restart the entire thing with the desired process on the new node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For your information, MVAPICH2 supports live migration of MPI
</span><br>
<span class="quotelev1">&gt; processes, without the need to terminate and restart the whole job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the details are in the MVAPICH2 user guide:
</span><br>
<span class="quotelev1">&gt;   - How to configure MVAPICH2 for migration
</span><br>
<span class="quotelev1">&gt;     <a href="http://mvapich.cse.ohio-state.edu/static/media/mvapich/mvapich2-2.2b-userguide.html#x1-120004.4">http://mvapich.cse.ohio-state.edu/static/media/mvapich/mvapich2-2.2b-userguide.html#x1-120004.4</a> &lt;<a href="http://mvapich.cse.ohio-state.edu/static/media/mvapich/mvapich2-2.2b-userguide.html#x1-120004.4">http://mvapich.cse.ohio-state.edu/static/media/mvapich/mvapich2-2.2b-userguide.html#x1-120004.4</a>&gt;
</span><br>
<span class="quotelev1">&gt;   - How to trigger process migration
</span><br>
<span class="quotelev1">&gt;     <a href="http://mvapich.cse.ohio-state.edu/static/media/mvapich/mvapich2-2.2b-userguide.html#x1-760006.14.3">http://mvapich.cse.ohio-state.edu/static/media/mvapich/mvapich2-2.2b-userguide.html#x1-760006.14.3</a> &lt;<a href="http://mvapich.cse.ohio-state.edu/static/media/mvapich/mvapich2-2.2b-userguide.html#x1-760006.14.3">http://mvapich.cse.ohio-state.edu/static/media/mvapich/mvapich2-2.2b-userguide.html#x1-760006.14.3</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can also check the paper &quot;High Performance Pipelined Process
</span><br>
<span class="quotelev1">&gt; Migration with RDMA&quot;
</span><br>
<span class="quotelev1">&gt; <a href="http://mvapich.cse.ohio-state.edu/static/media/publications/abstract/ouyangx-2011-ccgrid.pdf">http://mvapich.cse.ohio-state.edu/static/media/publications/abstract/ouyangx-2011-ccgrid.pdf</a> &lt;<a href="http://mvapich.cse.ohio-state.edu/static/media/publications/abstract/ouyangx-2011-ccgrid.pdf">http://mvapich.cse.ohio-state.edu/static/media/publications/abstract/ouyangx-2011-ccgrid.pdf</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Xavier
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 16, 2016, at 3:15 AM, Husen R &lt;hus3nr_at_[hidden] &lt;mailto:hus3nr_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the case of MPI application (not gromacs), How do I relocate MPI
</span><br>
<span class="quotelev2">&gt; &gt; application from one node to another node while it is running ?
</span><br>
<span class="quotelev2">&gt; &gt; I'm sorry, as far as I know the ompi-restart command is used to restart
</span><br>
<span class="quotelev2">&gt; &gt; application, based on checkpoint file, once the application already
</span><br>
<span class="quotelev2">&gt; &gt; terminated (no longer running).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Husen
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Mar 16, 2016 at 4:29 PM, Jeff Hammond &lt;jeff.science_at_[hidden] &lt;mailto:jeff.science_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Just checkpoint-restart the app to relocate. The overhead will be lower
</span><br>
<span class="quotelev3">&gt; &gt;&gt; than trying to do with MPI.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wednesday, March 16, 2016, Husen R &lt;hus3nr_at_[hidden] &lt;mailto:hus3nr_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks for the reply.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; After consulting the Gromacs docs, as you suggested, Gromacs already
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; supports checkpoint/restart. thanks for the suggestion.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Previously, I asked about checkpoint/restart in Open MPI because I want
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to checkpoint MPI Application and restart/migrate it while it is running.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; For the example, I run MPI application in node A,B and C in a cluster and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I want to migrate process running in node A to other node, let's say to node
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; C.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; is there a way to do this with open MPI ? thanks.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Husen
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Wed, Mar 16, 2016 at 12:37 PM, Jeff Hammond &lt;jeff.science_at_[hidden] &lt;mailto:jeff.science_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Why do you need OpenMPI to do this? Molecular dynamics trajectories are
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; trivial to checkpoint and restart at the application level. I'm sure Gromacs
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; already supports this. Please consult the Gromacs docs or user support for
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; details.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Jeff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Tuesday, March 15, 2016, Husen R &lt;hus3nr_at_[hidden] &lt;mailto:hus3nr_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Dear Open MPI Users,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Does the current stable release of Open MPI (v1.10 series) support
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; fault tolerant feature ?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I got the information from Open MPI FAQ that The checkpoint/restart
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; support was last released as part of the v1.6 series.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I just want to make sure about this.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; and by the way, does Open MPI able to checkpoint or restart mpi
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; application/GROMACS automatically ?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Please, I really need help.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Husen
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; jeff.science_at_[hidden] &lt;mailto:jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a> &lt;<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28705.php">http://www.open-mpi.org/community/lists/users/2016/03/28705.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/03/28705.php">http://www.open-mpi.org/community/lists/users/2016/03/28705.php</a>&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jeff.science_at_[hidden] &lt;mailto:jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a> &lt;<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28709.php">http://www.open-mpi.org/community/lists/users/2016/03/28709.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/03/28709.php">http://www.open-mpi.org/community/lists/users/2016/03/28709.php</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28710.php">http://www.open-mpi.org/community/lists/users/2016/03/28710.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/03/28710.php">http://www.open-mpi.org/community/lists/users/2016/03/28710.php</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28731.php">http://www.open-mpi.org/community/lists/users/2016/03/28731.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/03/28731.php">http://www.open-mpi.org/community/lists/users/2016/03/28731.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28742.php">http://www.open-mpi.org/community/lists/users/2016/03/28742.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/03/28742.php">http://www.open-mpi.org/community/lists/users/2016/03/28742.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28752.php">http://www.open-mpi.org/community/lists/users/2016/03/28752.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28754/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28755.php">Andrus, Brian Contractor: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
<li><strong>Previous message:</strong> <a href="28753.php">Thomas Jahns: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>In reply to:</strong> <a href="28752.php">Husen R: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28759.php">Xavier Besseron: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
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
