<?
$subject_val = "Re: [OMPI devel] Open-mpi in Fedora 5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  8 20:19:19 2012" -->
<!-- isoreceived="20121009001919" -->
<!-- sent="Mon, 8 Oct 2012 20:19:14 -0400" -->
<!-- isosent="20121009001914" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-mpi in Fedora 5" -->
<!-- id="14B851B8-C871-4F63-8D03-1D24A5E9B319_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BAY166-W632701719639888FF11672CC890_at_phx.gbl" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-08 20:19:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11575.php">Jeff Squyres: "Re: [OMPI devel] RFC: New memchecker component - mempin"</a>
<li><strong>Previous message:</strong> <a href="11573.php">Shiqing Fan: "[OMPI devel] RFC: New memchecker component - mempin"</a>
<li><strong>In reply to:</strong> <a href="11571.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11576.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<li><strong>Reply:</strong> <a href="11576.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure I understand -- you said you are able to run on the master, but then you said you get an error message when you run on the master.
<br>
<p>Please see the help page I mentioned (<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>) for a list of information that we need to be able to help you.
<br>
<p>If you're getting a message about permission denied for /home/openmpi/bin/orted, you should check the permissions on that file; it needs to be executable.  If it isn't executable, then you need to check how you installed Open MPI -- Open MPI's installer should have marked it as executable during the installation process.
<br>
<p><p>On Oct 7, 2012, at 12:17 PM, Sandra Guija wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff, 
</span><br>
<span class="quotelev1">&gt; I shared the openpi libraries through NFS. I am able to ssh with out password, using id_rsa and eval`ssh-agent`
</span><br>
<span class="quotelev1">&gt; I got mpirun run the thee test you mentioned below. The test succeed only if I run on the master.
</span><br>
<span class="quotelev1">&gt; I am running with the mpiu user with same UID,
</span><br>
<span class="quotelev1">&gt; But I am not able to run the mpirun on the remote host. The message I got when I run on the remote host is below.
</span><br>
<span class="quotelev1">&gt; I have check the permission on the .ssh and libraries, and I included the PATH in .bashrc and .bash_profile, I tried modify /etc/profile but not sure how to do it.
</span><br>
<span class="quotelev1">&gt; I attached the screen shoot when I run on the master.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shell$ mpirun--debig-daemons --host tango1 hello_world
</span><br>
<span class="quotelev1">&gt; -bash:/home/openmpi/bin/mpirun: Permission denied
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sandra Guija
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Date: Fri, 5 Oct 2012 16:55:44 -0400
</span><br>
<span class="quotelev2">&gt; &gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI devel] Open-mpi in Fedora 5
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 5, 2012, at 3:40 PM, Sandra Guija wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I decided to use an environment with Fedora 5 and gcc 4.1.0.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I tried to installed 1.6.2 and it failed, then tried 1.4.5 and it failed, then 1.2.9 and I did not get any error.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I know that we are sometimes a little slow to answer user emails, but you need to give us more than a few hours to answer before re-posting your mails. :-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If you want to see if there are easy fixes to why 1.4.x and/or 1.6.x fail to compile, see this page: <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> Send all the info listed on that page.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; how I can check if the installation works, prior to configure the cluster
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; See:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2012/03/18846.php">http://www.open-mpi.org/community/lists/users/2012/03/18846.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We say something quite similar in the (1.6.x) README file:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When verifying a new Open MPI installation, we recommend running three
</span><br>
<span class="quotelev2">&gt; &gt; tests:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; 1. Use &quot;mpirun&quot; to launch a non-MPI program (e.g., hostname or uptime)
</span><br>
<span class="quotelev2">&gt; &gt; across multiple nodes.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2. Use &quot;mpirun&quot; to launch a trivial MPI program that does no MPI
</span><br>
<span class="quotelev2">&gt; &gt; communication (e.g., the hello_c program in the examples/ directory
</span><br>
<span class="quotelev2">&gt; &gt; in the Open MPI distribution).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 3. Use &quot;mpirun&quot; to launch a trivial MPI program that sends and
</span><br>
<span class="quotelev2">&gt; &gt; receives a few MPI messages (e.g., the ring_c program in the
</span><br>
<span class="quotelev2">&gt; &gt; examples/ directory in the Open MPI distribution).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If you can run all three of these tests successfully, that is a good
</span><br>
<span class="quotelev2">&gt; &gt; indication that Open MPI built and installed properly.
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Also, it will be ok if I copy the openmpi-1.2.9 directory to the other nodes? The installation took like almost 3 hours.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Wow; configuration / compilation of Open MPI took *3 hours*? I'm guessing you have very old / low-power processors, or very slow network filesystem access...?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; See this FAQ information on where to install OMPI:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I sent the &quot;ccIVTymL.out&quot; file to the forum but my mail is waiting for moderator approval.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It likely won't be approved. Send a smaller attachment, please, such as a compressed text file (see the support page, above). :-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &lt;openmpi_on_master.PNG&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11575.php">Jeff Squyres: "Re: [OMPI devel] RFC: New memchecker component - mempin"</a>
<li><strong>Previous message:</strong> <a href="11573.php">Shiqing Fan: "[OMPI devel] RFC: New memchecker component - mempin"</a>
<li><strong>In reply to:</strong> <a href="11571.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11576.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<li><strong>Reply:</strong> <a href="11576.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
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
