<?
$subject_val = "Re: [OMPI users] Setting up Open MPI to run on multiple servers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 02:56:31 2008" -->
<!-- isoreceived="20080813065631" -->
<!-- sent="Wed, 13 Aug 2008 08:56:26 +0200" -->
<!-- isosent="20080813065626" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting up Open MPI to run on multiple servers" -->
<!-- id="9b0da5ce0808122356w62b6e8cm868ebe14bfd68223_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="575367.55944.qm_at_web76802.mail.sg1.yahoo.com" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-13 02:56:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6328.php">Lenny Verkhovsky: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Previous message:</strong> <a href="6326.php">Dani&#235;l Mantione: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="6325.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6330.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6330.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rayne
<br>
<p>SSH is used to start processes on the other machines - that's why you
<br>
must configure ssh to work without passwords.
<br>
<p>As to your 64/32 bit problem: a program compiled for 32 bits usually
<br>
works on a 64 bit machine,
<br>
but not vice versa. There are methods to start MPI such that different
<br>
executables are started
<br>
on different machines, but iguess the easiest way to get things going
<br>
would be to use
<br>
32 bit versions of your program on all your machines.
<br>
<p>Jody
<br>
<p>On Wed, Aug 13, 2008 at 4:52 AM, Rayne &lt;lancer6238_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Thank you for all the replies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's what I have now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I modified my .bash_profile on my server to include the path of my executables, and now mpiexec and mpicc both point to the correct ones. I tried setting the LD_LIBRARY_PATH too, but it didn't seem to work, as it kept telling me it couldn't find the sharded library libmpi.so.0, although 'which libmpi.so.0' gave me the correct location. Then I modified the /etc/ld.so.conf file to include the directory of the libraries, and now the MPI programs work correctly on the server.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, my problem is that I have trouble running the program using my PC and remotely on my server. I have the IP address of my server in the openmpi-default-hostfile in my PC, and I have set up a password-less ssh between them (though I have set it up such that it asks for a passphrase). All my programs and executables are in the shared folder. However, when I tried to run the program on my PC using 'mpiexec -n 2 ./a.out', I get the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Failed to find or execute the following executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host: (Name of my server)
</span><br>
<span class="quotelev1">&gt; Executable: ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cannot continue.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I try to compile then execute the program locally, on both my PC and server, they run fine. It's only when I try to get both PC and server to run the program concurrently, (which is the purpose of using MPI) that I get the error. I have checked and the a.out file is exactly the same on the PC and server, in terms of the size and date/time modified.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One thing is that my PC is a 64-bit machine, and my server is a 32-bit machine. Could this be a factor, that a program compiled on a 64-bit machine cannot run on a 32-bit machine?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I don't quite understand the mechanism of how MPI allows one machine to communicate with another. For example, after compiling a program, an executable is created and stored on that machine and also on the remote nodes, through the use of a shared system. So when I run the program, how does the machine I'm at get the remode nodes to run the program too?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you, and sorry for the long email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Rayne
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      New Email addresses available on Yahoo!
</span><br>
<span class="quotelev1">&gt; Get the Email name you've always wanted on the new @ymail and @rocketmail.
</span><br>
<span class="quotelev1">&gt; Hurry before someone else does!
</span><br>
<span class="quotelev1">&gt; <a href="http://mail.promotions.yahoo.com/newdomains/sg/">http://mail.promotions.yahoo.com/newdomains/sg/</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6328.php">Lenny Verkhovsky: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>Previous message:</strong> <a href="6326.php">Dani&#235;l Mantione: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="6325.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6330.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6330.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
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
