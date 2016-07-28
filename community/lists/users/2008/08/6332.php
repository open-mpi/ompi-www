<?
$subject_val = "Re: [OMPI users] Setting up Open MPI to run on multiple servers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 06:26:24 2008" -->
<!-- isoreceived="20080813102624" -->
<!-- sent="Wed, 13 Aug 2008 12:26:19 +0200" -->
<!-- isosent="20080813102619" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting up Open MPI to run on multiple servers" -->
<!-- id="9b0da5ce0808130326n582dc972sf3542cee9195e131_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="873427.5546.qm_at_web76803.mail.sg1.yahoo.com" -->
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
<strong>Date:</strong> 2008-08-13 06:26:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6333.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6331.php">Pavel Shamis (Pasha): "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>In reply to:</strong> <a href="6330.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6338.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6338.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6339.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
An application compiled for 64-bit *IS* different from a 32-bit.
<br>
But if both your 64-bit server and and 32-bit PC have compatible
<br>
processor types,
<br>
you can compile on the PC and run the program on the server.
<br>
(as i told you in my previous mail)
<br>
<p>Jody
<br>
<p>On Wed, Aug 13, 2008 at 10:15 AM, Rayne &lt;lancer6238_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm starting to think that the main problem lies in the 32-bit server not being able to execute the program compiled by the 64-bit PC, and vice versa. I just noticed that the sizes of the executables created by the PC and server are different - the one created by the 64-bit PC is 3204 bytes larger. Does that imply that the programs are somewhat different?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled the program using the server and created 32.out, then I compiled the program using the PC and created 64.out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I used the PC to run 32.out locally, I get the error:
</span><br>
<span class="quotelev1">&gt; &quot;error while loading shared libraries: libmpi.so.0: wrong ELF class: ELFCLASS64&quot;
</span><br>
<span class="quotelev1">&gt; But when I used the PC to run 64.out locally, it ran fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the following error message when I ran 64.out on the server locally:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Could not execute the executable &quot;./a.out&quot;: Exec format error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could mean that your PATH or executable name is wrong, or that you do not have the necessary permissions. Please ensure that your executable is able to be found and executed.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when I used the server to run 32.out locally, it ran fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this mean that the errors I got are not due to incorrect setup of the &quot;MPI network&quot;, but the incompatibility issues of programs compiled by 32-bit and 64-bit machines?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Rayne
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Wed, 13/8/08, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: jody &lt;jody.xha_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Setting up Open MPI to run on multiple servers
</span><br>
<span class="quotelev2">&gt;&gt; To: lancer6238_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wednesday, 13 August, 2008, 2:56 PM
</span><br>
<span class="quotelev2">&gt;&gt; Hi Rayne
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SSH is used to start processes on the other machines -
</span><br>
<span class="quotelev2">&gt;&gt; that's why you
</span><br>
<span class="quotelev2">&gt;&gt; must configure ssh to work without passwords.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As to your 64/32 bit problem: a program compiled for 32
</span><br>
<span class="quotelev2">&gt;&gt; bits usually
</span><br>
<span class="quotelev2">&gt;&gt; works on a 64 bit machine,
</span><br>
<span class="quotelev2">&gt;&gt; but not vice versa. There are methods to start MPI such
</span><br>
<span class="quotelev2">&gt;&gt; that different
</span><br>
<span class="quotelev2">&gt;&gt; executables are started
</span><br>
<span class="quotelev2">&gt;&gt; on different machines, but iguess the easiest way to get
</span><br>
<span class="quotelev2">&gt;&gt; things going
</span><br>
<span class="quotelev2">&gt;&gt; would be to use
</span><br>
<span class="quotelev2">&gt;&gt; 32 bit versions of your program on all your machines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Aug 13, 2008 at 4:52 AM, Rayne
</span><br>
<span class="quotelev2">&gt;&gt; &lt;lancer6238_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thank you for all the replies.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Here's what I have now.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I modified my .bash_profile on my server to include
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the path of my executables, and now mpiexec and mpicc both
</span><br>
<span class="quotelev3">&gt;&gt; &gt; point to the correct ones. I tried setting the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; LD_LIBRARY_PATH too, but it didn't seem to work, as it
</span><br>
<span class="quotelev3">&gt;&gt; &gt; kept telling me it couldn't find the sharded library
</span><br>
<span class="quotelev3">&gt;&gt; &gt; libmpi.so.0, although 'which libmpi.so.0' gave me
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the correct location. Then I modified the /etc/ld.so.conf
</span><br>
<span class="quotelev3">&gt;&gt; &gt; file to include the directory of the libraries, and now the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI programs work correctly on the server.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Now, my problem is that I have trouble running the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; program using my PC and remotely on my server. I have the IP
</span><br>
<span class="quotelev3">&gt;&gt; &gt; address of my server in the openmpi-default-hostfile in my
</span><br>
<span class="quotelev3">&gt;&gt; &gt; PC, and I have set up a password-less ssh between them
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (though I have set it up such that it asks for a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; passphrase). All my programs and executables are in the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; shared folder. However, when I tried to run the program on
</span><br>
<span class="quotelev3">&gt;&gt; &gt; my PC using 'mpiexec -n 2 ./a.out', I get the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; following error:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &quot;Failed to find or execute the following
</span><br>
<span class="quotelev3">&gt;&gt; &gt; executable:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Host: (Name of my server)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Executable: ./a.out
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cannot continue.&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If I try to compile then execute the program locally,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; on both my PC and server, they run fine. It's only when
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I try to get both PC and server to run the program
</span><br>
<span class="quotelev3">&gt;&gt; &gt; concurrently, (which is the purpose of using MPI) that I get
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the error. I have checked and the a.out file is exactly the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; same on the PC and server, in terms of the size and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; date/time modified.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; One thing is that my PC is a 64-bit machine, and my
</span><br>
<span class="quotelev3">&gt;&gt; &gt; server is a 32-bit machine. Could this be a factor, that a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; program compiled on a 64-bit machine cannot run on a 32-bit
</span><br>
<span class="quotelev3">&gt;&gt; &gt; machine?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Also, I don't quite understand the mechanism of
</span><br>
<span class="quotelev3">&gt;&gt; &gt; how MPI allows one machine to communicate with another. For
</span><br>
<span class="quotelev3">&gt;&gt; &gt; example, after compiling a program, an executable is created
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and stored on that machine and also on the remote nodes,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; through the use of a shared system. So when I run the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; program, how does the machine I'm at get the remode
</span><br>
<span class="quotelev3">&gt;&gt; &gt; nodes to run the program too?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thank you, and sorry for the long email.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Rayne
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      New Email names for you!
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
<li><strong>Next message:</strong> <a href="6333.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6331.php">Pavel Shamis (Pasha): "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>In reply to:</strong> <a href="6330.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6338.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6338.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6339.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
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
