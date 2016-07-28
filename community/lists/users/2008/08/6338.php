<?
$subject_val = "Re: [OMPI users] Setting up Open MPI to run on multiple servers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 21:45:37 2008" -->
<!-- isoreceived="20080814014537" -->
<!-- sent="Thu, 14 Aug 2008 09:45:32 +0800 (SGT)" -->
<!-- isosent="20080814014532" -->
<!-- name="Rayne" -->
<!-- email="lancer6238_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting up Open MPI to run on multiple servers" -->
<!-- id="30783.57029.qm_at_web76811.mail.sg1.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="9b0da5ce0808130326n582dc972sf3542cee9195e131_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-08-13 21:45:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6339.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6337.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>In reply to:</strong> <a href="6332.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6339.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to see if I can get my 64-bit PC to execute 64.out, and my 32-bit server to execute 32.out, by using
<br>
<p>mpirun --bynode -np 1 64.out : -np 1 32.out
<br>
<p>My hostfile contains:
<br>
<p>localhost
<br>
IP address of server
<br>
<p>However, I got the following error message:
<br>
<p>&quot;Failed to find the following executable:
<br>
<p>Host: (Name of server)
<br>
Executable: 32.out
<br>
<p>Cannot continue
<br>
-----------------------------------------------
<br>
mpirun noticed that job rank 0 with PID 12320 on node localhost.localdomain exited on signal 15 (Terminated).&quot;
<br>
<p>I don't understand why the server cannot find 32.out, when it is in the shared folder and I'm using mpirun in the shared folder's location.
<br>
<p>Thank you.
<br>
<p>Regards,
<br>
Rayne
<br>
<p>--- On Wed, 13/8/08, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: jody &lt;jody.xha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Setting up Open MPI to run on multiple servers
</span><br>
<span class="quotelev1">&gt; To: lancer6238_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Wednesday, 13 August, 2008, 6:26 PM
</span><br>
<span class="quotelev1">&gt; An application compiled for 64-bit *IS* different from a
</span><br>
<span class="quotelev1">&gt; 32-bit.
</span><br>
<span class="quotelev1">&gt; But if both your 64-bit server and and 32-bit PC have
</span><br>
<span class="quotelev1">&gt; compatible
</span><br>
<span class="quotelev1">&gt; processor types,
</span><br>
<span class="quotelev1">&gt; you can compile on the PC and run the program on the
</span><br>
<span class="quotelev1">&gt; server.
</span><br>
<span class="quotelev1">&gt; (as i told you in my previous mail)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 13, 2008 at 10:15 AM, Rayne
</span><br>
<span class="quotelev1">&gt; &lt;lancer6238_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm starting to think that the main problem lies
</span><br>
<span class="quotelev2">&gt; &gt; in the 32-bit server not being able to execute the program
</span><br>
<span class="quotelev2">&gt; &gt; compiled by the 64-bit PC, and vice versa. I just noticed
</span><br>
<span class="quotelev2">&gt; &gt; that the sizes of the executables created by the PC and
</span><br>
<span class="quotelev2">&gt; &gt; server are different - the one created by the 64-bit PC is
</span><br>
<span class="quotelev2">&gt; &gt; 3204 bytes larger. Does that imply that the programs are
</span><br>
<span class="quotelev2">&gt; &gt; somewhat different?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I compiled the program using the server and created
</span><br>
<span class="quotelev2">&gt; &gt; 32.out, then I compiled the program using the PC and created
</span><br>
<span class="quotelev2">&gt; &gt; 64.out.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I used the PC to run 32.out locally, I get the
</span><br>
<span class="quotelev2">&gt; &gt; error:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;error while loading shared libraries:
</span><br>
<span class="quotelev2">&gt; &gt; libmpi.so.0: wrong ELF class: ELFCLASS64&quot;
</span><br>
<span class="quotelev2">&gt; &gt; But when I used the PC to run 64.out locally, it ran
</span><br>
<span class="quotelev2">&gt; &gt; fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I got the following error message when I ran 64.out on
</span><br>
<span class="quotelev2">&gt; &gt; the server locally:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Could not execute the executable
</span><br>
<span class="quotelev2">&gt; &gt; &quot;./a.out&quot;: Exec format error
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This could mean that your PATH or executable name is
</span><br>
<span class="quotelev2">&gt; &gt; wrong, or that you do not have the necessary permissions.
</span><br>
<span class="quotelev2">&gt; &gt; Please ensure that your executable is able to be found and
</span><br>
<span class="quotelev2">&gt; &gt; executed.&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, when I used the server to run 32.out locally,
</span><br>
<span class="quotelev2">&gt; &gt; it ran fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does this mean that the errors I got are not due to
</span><br>
<span class="quotelev2">&gt; &gt; incorrect setup of the &quot;MPI network&quot;, but the
</span><br>
<span class="quotelev2">&gt; &gt; incompatibility issues of programs compiled by 32-bit and
</span><br>
<span class="quotelev2">&gt; &gt; 64-bit machines?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Rayne
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --- On Wed, 13/8/08, jody &lt;jody.xha_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: jody &lt;jody.xha_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] Setting up Open MPI to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; run on multiple servers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: lancer6238_at_[hidden], &quot;Open MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: Wednesday, 13 August, 2008, 2:56 PM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Rayne
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; SSH is used to start processes on the other
</span><br>
<span class="quotelev3">&gt; &gt;&gt; machines -
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that's why you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; must configure ssh to work without passwords.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As to your 64/32 bit problem: a program compiled
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for 32
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bits usually
</span><br>
<span class="quotelev3">&gt; &gt;&gt; works on a 64 bit machine,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; but not vice versa. There are methods to start MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; such
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that different
</span><br>
<span class="quotelev3">&gt; &gt;&gt; executables are started
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on different machines, but iguess the easiest way
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to get
</span><br>
<span class="quotelev3">&gt; &gt;&gt; things going
</span><br>
<span class="quotelev3">&gt; &gt;&gt; would be to use
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 32 bit versions of your program on all your
</span><br>
<span class="quotelev3">&gt; &gt;&gt;machines.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jody
</span><br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Email names for you! 
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
<li><strong>Next message:</strong> <a href="6339.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6337.php">Mohd Radzi Nurul Azri: "Re: [OMPI users] Fail to install openmpi 1.2.5 on bladecenter with OFED 1.3"</a>
<li><strong>In reply to:</strong> <a href="6332.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6339.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
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
