<?
$subject_val = "Re: [OMPI devel] Open-mpi in Fedora 5";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct  7 12:17:20 2012" -->
<!-- isoreceived="20121007161720" -->
<!-- sent="Sun, 7 Oct 2012 09:17:14 -0700" -->
<!-- isosent="20121007161714" -->
<!-- name="Sandra Guija" -->
<!-- email="sguija_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-mpi in Fedora 5" -->
<!-- id="BAY166-W632701719639888FF11672CC890_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="84652E59-A5A7-404E-A51A-622AFF76010F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open-mpi in Fedora 5<br>
<strong>From:</strong> Sandra Guija (<em>sguija_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-07 12:17:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11572.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11570.php">Ralph Castain: "[OMPI devel] 1.7.0rc1 available"</a>
<li><strong>In reply to:</strong> <a href="11567.php">Jeff Squyres: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11574.php">Jeff Squyres: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<li><strong>Reply:</strong> <a href="11574.php">Jeff Squyres: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, I shared the openpi libraries through NFS. I am able to ssh with out password, using id_rsa and eval`ssh-agent`
<br>
I got mpirun run the thee test you mentioned below. The test succeed only if I run on the master.I am running with the mpiu user with same UID,But I am not able to run the mpirun on the remote host. The message I got when I run on the remote host is below.I have check the permission on the .ssh and libraries, and I included the PATH in .bashrc and .bash_profile, I tried modify /etc/profile but not sure how to do it.I attached the screen shoot when I run on the master.
<br>
shell$ mpirun--debig-daemons --host tango1 hello_world-bash:/home/openmpi/bin/mpirun: Permission denied
<br>
<p>Sandra Guija
<br>
<p><span class="quotelev1">&gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Fri, 5 Oct 2012 16:55:44 -0400
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Open-mpi in Fedora 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 5, 2012, at 3:40 PM, Sandra Guija wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I decided to use an environment with Fedora 5 and gcc 4.1.0.
</span><br>
<span class="quotelev2">&gt; &gt; I tried to installed 1.6.2 and it failed, then tried 1.4.5 and it failed, then 1.2.9 and I did not get any error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know that we are sometimes a little slow to answer user emails, but you need to give us more than a few hours to answer before re-posting your mails.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you want to see if there are easy fixes to why 1.4.x and/or 1.6.x fail to compile, see this page: <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>  Send all the info listed on that page.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; how I can check if the installation works, prior to configure the cluster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2012/03/18846.php">http://www.open-mpi.org/community/lists/users/2012/03/18846.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We say something quite similar in the (1.6.x) README file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When verifying a new Open MPI installation, we recommend running three
</span><br>
<span class="quotelev1">&gt; tests:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 1. Use &quot;mpirun&quot; to launch a non-MPI program (e.g., hostname or uptime)
</span><br>
<span class="quotelev1">&gt;    across multiple nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Use &quot;mpirun&quot; to launch a trivial MPI program that does no MPI
</span><br>
<span class="quotelev1">&gt;    communication (e.g., the hello_c program in the examples/ directory
</span><br>
<span class="quotelev1">&gt;    in the Open MPI distribution).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Use &quot;mpirun&quot; to launch a trivial MPI program that sends and
</span><br>
<span class="quotelev1">&gt;    receives a few MPI messages (e.g., the ring_c program in the
</span><br>
<span class="quotelev1">&gt;    examples/ directory in the Open MPI distribution).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you can run all three of these tests successfully, that is a good
</span><br>
<span class="quotelev1">&gt; indication that Open MPI built and installed properly.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Also, it will be ok if I copy the openmpi-1.2.9  directory to the other nodes? The installation took like almost 3 hours.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wow; configuration / compilation of Open MPI took *3 hours*?  I'm guessing you have very old / low-power processors, or very slow network filesystem access...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See this FAQ information on where to install OMPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I sent the &quot;ccIVTymL.out&quot; file to the forum but my mail is waiting for moderator approval.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It likely won't be approved.  Send a smaller attachment, please, such as a compressed text file (see the support page, above).  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11571/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-11571/openmpi_on_master.PNG" alt="openmpi_on_master.PNG">
<!-- attachment="openmpi_on_master.PNG" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11572.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11570.php">Ralph Castain: "[OMPI devel] 1.7.0rc1 available"</a>
<li><strong>In reply to:</strong> <a href="11567.php">Jeff Squyres: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11574.php">Jeff Squyres: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<li><strong>Reply:</strong> <a href="11574.php">Jeff Squyres: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
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
