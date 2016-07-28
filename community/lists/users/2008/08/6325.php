<?
$subject_val = "Re: [OMPI users] Setting up Open MPI to run on multiple servers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 22:52:19 2008" -->
<!-- isoreceived="20080813025219" -->
<!-- sent="Wed, 13 Aug 2008 10:52:15 +0800 (SGT)" -->
<!-- isosent="20080813025215" -->
<!-- name="Rayne" -->
<!-- email="lancer6238_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting up Open MPI to run on multiple servers" -->
<!-- id="575367.55944.qm_at_web76802.mail.sg1.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="48A1BC89.5060308_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting up Open MPI to run on multiple servers<br>
<strong>From:</strong> Rayne (<em>lancer6238_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-12 22:52:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6326.php">Daniël Mantione: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6324.php">Gus Correa: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="6317.php">Gus Correa: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6327.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6327.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for all the replies.
<br>
<p>Here's what I have now.
<br>
<p>I modified my .bash_profile on my server to include the path of my executables, and now mpiexec and mpicc both point to the correct ones. I tried setting the LD_LIBRARY_PATH too, but it didn't seem to work, as it kept telling me it couldn't find the sharded library libmpi.so.0, although 'which libmpi.so.0' gave me the correct location. Then I modified the /etc/ld.so.conf file to include the directory of the libraries, and now the MPI programs work correctly on the server.
<br>
<p>Now, my problem is that I have trouble running the program using my PC and remotely on my server. I have the IP address of my server in the openmpi-default-hostfile in my PC, and I have set up a password-less ssh between them (though I have set it up such that it asks for a passphrase). All my programs and executables are in the shared folder. However, when I tried to run the program on my PC using 'mpiexec -n 2 ./a.out', I get the following error:
<br>
<p>&quot;Failed to find or execute the following executable:
<br>
<p>Host: (Name of my server)
<br>
Executable: ./a.out
<br>
<p>Cannot continue.&quot;
<br>
<p>If I try to compile then execute the program locally, on both my PC and server, they run fine. It's only when I try to get both PC and server to run the program concurrently, (which is the purpose of using MPI) that I get the error. I have checked and the a.out file is exactly the same on the PC and server, in terms of the size and date/time modified.
<br>
<p>One thing is that my PC is a 64-bit machine, and my server is a 32-bit machine. Could this be a factor, that a program compiled on a 64-bit machine cannot run on a 32-bit machine?
<br>
<p>Also, I don't quite understand the mechanism of how MPI allows one machine to communicate with another. For example, after compiling a program, an executable is created and stored on that machine and also on the remote nodes, through the use of a shared system. So when I run the program, how does the machine I'm at get the remode nodes to run the program too?
<br>
<p>Thank you, and sorry for the long email.
<br>
<p>Regards,
<br>
Rayne
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Email addresses available on Yahoo!
<br>
Get the Email name you&amp;#39;ve always wanted on the new @ymail and @rocketmail. 
<br>
Hurry before someone else does!
<br>
<a href="http://mail.promotions.yahoo.com/newdomains/sg/">http://mail.promotions.yahoo.com/newdomains/sg/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6326.php">Daniël Mantione: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6324.php">Gus Correa: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="6317.php">Gus Correa: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6327.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6327.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
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
