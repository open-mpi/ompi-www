<?
$subject_val = "Re: [OMPI users] Setting up Open MPI to run on multiple servers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 03:38:51 2008" -->
<!-- isoreceived="20080812073851" -->
<!-- sent="Tue, 12 Aug 2008 09:38:44 +0200" -->
<!-- isosent="20080812073844" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting up Open MPI to run on multiple servers" -->
<!-- id="9b0da5ce0808120038y559a5f21h43f4d83cfe8a55b4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0808120036g3c53ade0r3d9a895bc053f83c_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-08-12 03:38:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6311.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6309.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>In reply to:</strong> <a href="6309.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6311.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6311.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ryan
<br>
Another thing:
<br>
Have you checked if the mpiexec you call is really the one from your
<br>
Open-MPI installation?
<br>
<p>Try 'which mpiexec' to find out.
<br>
<p>Jody
<br>
<p>On Tue, Aug 12, 2008 at 9:36 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Ryan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The message &quot;Lamnodes Failed!&quot; seems to indicate that you still have a
</span><br>
<span class="quotelev1">&gt; LAM/MPI installation somewhere.
</span><br>
<span class="quotelev1">&gt; You should get rid of that first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 12, 2008 at 9:00 AM, Rayne &lt;lancer6238_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi, thanks for your reply.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did what you said, set up the password-less ssh, nfs etc, and put the IP address of the server in the default hostfile (in my PC only, the default hostfile in the server does not contain any IP addresses). Then I installed Open MPI in the server under the same directory as my PC, e.g. /usr/lib/openmpi/1.2.5-gcc/
</span><br>
<span class="quotelev2">&gt;&gt; All my MPI programs and executables, e.g. a.out are in the shared folder. However, I have trouble running the MPI programs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After compiling my MPI program on my PC, I tried to run it via &quot;mpiexec -n 2 ./a.out&quot;. However, I get the error message
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Failed to find or execute the following executable:
</span><br>
<span class="quotelev2">&gt;&gt; Host: (the name of the server)
</span><br>
<span class="quotelev2">&gt;&gt; Executable: ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cannot continue&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then when I tried to run the MPI program on my server after compiling, I get the error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Lamnodes Failed!
</span><br>
<span class="quotelev2">&gt;&gt; Check if you had booted lam before calling mpiexec else use -machinefile to pass host file to mpiexec&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm guessing that because the server cannot run the MPI program, I can't run the program on my PC as well. Is there some other configurations I missed when using Open MPI on my server?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Rayne
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- On Tue, 12/8/08, Joshua Bernstein &lt;jbernstein_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Joshua Bernstein &lt;jbernstein_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Setting up Open MPI to run on multiple servers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: lancer6238_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Tuesday, 12 August, 2008, 8:34 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rayne wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I am trying to set up Open MPI to run on multiple
</span><br>
<span class="quotelev3">&gt;&gt;&gt; servers, but as I
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; have very little experience in networking, I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; getting confused by the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; info on open-mpi.org, with the .rhosts, rsh, ssh etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Basically what I have now is a PC with Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed. I want to
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; connect it to, say, 10 servers, so I can run MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programs on all 11
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; nodes. From what I've read, I think I need to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; install Open MPI on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 10 servers too, and there must be a shared directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where I keep all
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; the MPI programs I've written, so all nodes can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; access them.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Then I need to create a machine file on my local PC (I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found a default
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; hostfile &quot;openmpi-default-hostfile&quot; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {prefix}/etc/. Can I use that
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; instead so I need not have &quot;-machinefile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine&quot; with every mpiexec?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; with the list of the 10 servers. I'm assuming I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need to put down the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; IP addresses of the 10 servers in this file. I've
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also read that the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 10 servers also need to each have a .rhosts file that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tells them the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; machine (i.e. my local PC) and user from which the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programs may be
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; launched from. Is this right?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; There is also the rsh/ssh configuration, which I find
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the most
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; confusing. How do I know whether I'm using rsh or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh? Is following
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; the instructions on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=rsh">http://www.open-mpi.org/faq/?category=rsh</a> under
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &quot;3: How can I make ssh not ask me for a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; password?&quot; sufficient? Does
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; this mean that when I'm using the 10 servers to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run the MPI program,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I'm login to them via ssh? Is this necessary in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; every case?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Is doing all of the above all it takes to run MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programs on all 11
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; nodes, or is there something else I missed?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; More or less. Though the first step is to setup
</span><br>
<span class="quotelev3">&gt;&gt;&gt; password-less SSH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between all 11 machines. I'd completely skip the use of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RSH as its very
</span><br>
<span class="quotelev3">&gt;&gt;&gt; insecure and shouldn't be used in non-dedicated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster, and even
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then... You should basically setup SSH so a user can SSH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from one node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to another without specify a password or entering in any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then, the next is to setup NFS. NFS provides you with a way
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to share a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory on one computer, to many other computers avoiding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the hassel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of having to copy all your MPI programs to all of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes. This is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generally as easy as configuring /etc/exports, and then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just mounting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the directory on the other computers. Be Sure you mount the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directories
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the same place on every node though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lastly, give your MPI programs a shot. While you don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need to have a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostlist, because you can specify the hostname (or IPs). on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command line. But you your case its likely a good idea.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hope that gets you started...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Joshua Bernstein
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Software Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Penguin Computing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      New Email names for you!
</span><br>
<span class="quotelev2">&gt;&gt; Get the Email name you've always wanted on the new @ymail and @rocketmail.
</span><br>
<span class="quotelev2">&gt;&gt; Hurry before someone else does!
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://mail.promotions.yahoo.com/newdomains/sg/">http://mail.promotions.yahoo.com/newdomains/sg/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6311.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6309.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>In reply to:</strong> <a href="6309.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6311.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6311.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
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
