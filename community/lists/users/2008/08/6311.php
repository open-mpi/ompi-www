<?
$subject_val = "Re: [OMPI users] Setting up Open MPI to run on multiple servers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 05:10:19 2008" -->
<!-- isoreceived="20080812091019" -->
<!-- sent="Tue, 12 Aug 2008 17:10:12 +0800 (SGT)" -->
<!-- isosent="20080812091012" -->
<!-- name="Rayne" -->
<!-- email="lancer6238_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting up Open MPI to run on multiple servers" -->
<!-- id="330062.95240.qm_at_web76803.mail.sg1.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="9b0da5ce0808120038y559a5f21h43f4d83cfe8a55b4_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-08-12 05:10:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6312.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6310.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>In reply to:</strong> <a href="6310.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6312.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6312.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I looked for any folders with 'lam', and found 2, under /usr/lib/lam and /etc/lam. I don't know if it means LAM was previously installed, because my PC also has /usr/lib/lam, although the contents are different. I renamed the 2 folders, and got the &quot;*** Oops -- I cannot open the LAM help file.&quot; error below instead.
<br>
<p>I tried 'whichexec', and it gave me /usr/bin/mpiexec. I checked the mpiexec there and it's actually a Perl script, and I believe I installed OpenMPI in /usr/lib64/openmpi/1.2.5-gcc/
<br>
<p>So I tried mpirun instead and it gave me the following message:
<br>
<p>&quot;*** Oops -- I cannot open the LAM help file.
<br>
*** I tried looking for it in the following places:
<br>
***
<br>
***   $HOME/lam-helpfile
<br>
***   $HOME/lam-7.0.6-helpfile
<br>
***   $HOME/etc/lam-helpfile
<br>
***   $HOME/etc/lam- 7.0.6-helpfile
<br>
***   $LAMHELPDIR/lam-helpfile
<br>
***   $LAMHELPDIR/lam-7.0.6-helpfile
<br>
***   $LAMHOME/etc/lam-helpfile
<br>
***   $LAMHOME/etc/lam-7.0.6-helpfile
<br>
***   $SYSCONFDIR/lam-helpfile
<br>
***   $SYSCONFDIR/lam- 7.0.6-helpfile
<br>
***
<br>
*** You were supposed to get help on the program &quot;MPI&quot;
<br>
*** about the topic &quot;no-lamd&quot;
<br>
***
<br>
*** Sorry!&quot;
<br>
<p>Firstly, how do I change the settings such that mpiexec points to the mpiexec in my installation folder, which I believe should be
<br>
/usr/lib/openmpi/1.2.5-gcc/bin/mpiexec, and the mpiexec there seems to be a shortcut that points to /usr/lib/openmpi/1.2.5-gcc/bin/orterun. Would this help? While I'm at it, it seems that mpirun, which is /usr/bin/mpirun currently, should also point to /usr/lib/openmpi/1.2.5-gcc/bin/mpirun, which also is a shortcut to /usr/lib/openmpi/1.2.5-gcc/bin/orterun.
<br>
<p>Thank you.
<br>
<p>Regards,
<br>
Rayne
<br>
<p>--- On Tue, 12/8/08, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: jody &lt;jody.xha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Setting up Open MPI to run on multiple servers
</span><br>
<span class="quotelev1">&gt; To: lancer6238_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tuesday, 12 August, 2008, 3:38 PM
</span><br>
<span class="quotelev1">&gt; Hi Ryan
</span><br>
<span class="quotelev1">&gt; Another thing:
</span><br>
<span class="quotelev1">&gt; Have you checked if the mpiexec you call is really the one
</span><br>
<span class="quotelev1">&gt; from your
</span><br>
<span class="quotelev1">&gt; Open-MPI installation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try 'which mpiexec' to find out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 12, 2008 at 9:36 AM, jody
</span><br>
<span class="quotelev1">&gt; &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ryan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The message &quot;Lamnodes Failed!&quot; seems to
</span><br>
<span class="quotelev1">&gt; indicate that you still have a
</span><br>
<span class="quotelev2">&gt; &gt; LAM/MPI installation somewhere.
</span><br>
<span class="quotelev2">&gt; &gt; You should get rid of that first.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jody
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Aug 12, 2008 at 9:00 AM, Rayne
</span><br>
<span class="quotelev1">&gt; &lt;lancer6238_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi, thanks for your reply.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I did what you said, set up the password-less ssh,
</span><br>
<span class="quotelev1">&gt; nfs etc, and put the IP address of the server in the default
</span><br>
<span class="quotelev1">&gt; hostfile (in my PC only, the default hostfile in the server
</span><br>
<span class="quotelev1">&gt; does not contain any IP addresses). Then I installed Open
</span><br>
<span class="quotelev1">&gt; MPI in the server under the same directory as my PC, e.g.
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/1.2.5-gcc/
</span><br>
<span class="quotelev3">&gt; &gt;&gt; All my MPI programs and executables, e.g. a.out
</span><br>
<span class="quotelev1">&gt; are in the shared folder. However, I have trouble running
</span><br>
<span class="quotelev1">&gt; the MPI programs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; After compiling my MPI program on my PC, I tried
</span><br>
<span class="quotelev1">&gt; to run it via &quot;mpiexec -n 2 ./a.out&quot;. However, I
</span><br>
<span class="quotelev1">&gt; get the error message
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;Failed to find or execute the following
</span><br>
<span class="quotelev1">&gt; executable:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Host: (the name of the server)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Executable: ./a.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cannot continue&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Then when I tried to run the MPI program on my
</span><br>
<span class="quotelev1">&gt; server after compiling, I get the error:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;Lamnodes Failed!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Check if you had booted lam before calling mpiexec
</span><br>
<span class="quotelev1">&gt; else use -machinefile to pass host file to mpiexec&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm guessing that because the server cannot
</span><br>
<span class="quotelev1">&gt; run the MPI program, I can't run the program on my PC as
</span><br>
<span class="quotelev1">&gt; well. Is there some other configurations I missed when using
</span><br>
<span class="quotelev1">&gt; Open MPI on my server?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rayne
</span><br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yahoo! Toolbar is now powered with Search Assist.Download it now!
<br>
<a href="http://sg.toolbar.yahoo.com/">http://sg.toolbar.yahoo.com/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6312.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6310.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>In reply to:</strong> <a href="6310.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6312.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6312.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
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
