<?
$subject_val = "Re: [OMPI users] Setting up Open MPI to run on multiple servers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 06:41:59 2008" -->
<!-- isoreceived="20080812104159" -->
<!-- sent="Tue, 12 Aug 2008 13:41:51 +0300" -->
<!-- isosent="20080812104151" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting up Open MPI to run on multiple servers" -->
<!-- id="453d39990808120341t69d6e74eme8c42a0594eb1b02_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0808120311o4fed0b37wcc89211a44ad050c_at_mail.gmail.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-12 06:41:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6316.php">Tom Riddle: "[OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Previous message:</strong> <a href="6314.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>In reply to:</strong> <a href="6314.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6317.php">Gus Correa: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6317.php">Gus Correa: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
you can also provide a full path to your mpi
<br>
<p>#/usr/lib/openmpi/1.2.5-gcc/bin/mpiexec -n 2 ./a.out
<br>
<p>On 8/12/08, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No.
</span><br>
<span class="quotelev1">&gt; The PATH variable simply tells the system in which order the
</span><br>
<span class="quotelev1">&gt; directories should be searched for executables.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so in .bash_profile just add the line
</span><br>
<span class="quotelev1">&gt;   PATH=/usr/lib/openmpi/1.2.5-gcc/bin:$PATH
</span><br>
<span class="quotelev1">&gt; after the line
</span><br>
<span class="quotelev1">&gt;   PATH=$PATH:$HOME/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then the system will search in /usr/lib/openmpi/1.2.5-gcc/bin before
</span><br>
<span class="quotelev1">&gt; it will look
</span><br>
<span class="quotelev1">&gt; in the directories it would have looked in anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 12, 2008 at 11:59 AM, Rayne &lt;lancer6238_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; My .bash_profile and .bashrc on the server are exactly the same as that
</span><br>
<span class="quotelev1">&gt; on my PC. However, I can run mpiexec without any problems just using my PC
</span><br>
<span class="quotelev1">&gt; as a single node, i.e. without trying to login to other servers and using
</span><br>
<span class="quotelev1">&gt; multiple nodes. I only get the errors on the server.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In .bash_profile, I see
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PATH=$PATH:$HOME/bin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I change this, won't it affect other programs as well?
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
<span class="quotelev2">&gt; &gt; --- On Tue, 12/8/08, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: jody &lt;jody.xha_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] Setting up Open MPI to run on multiple servers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: lancer6238_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: Tuesday, 12 August, 2008, 5:23 PM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What are the contents of your $PATH environment variable?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Make sure that your Open-MPI folder
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (/usr/lib/openmpi/1.2.5-gcc/bin)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; precedes '/usr/bin' in $PATH,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; i.e.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /usr/lib/openmpi/1.2.5-gcc/bin:/usr/bin
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; then the Open-MPI version of mpirun or mpiexec will be used
</span><br>
<span class="quotelev3">&gt; &gt;&gt; instead of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the LAM-versions.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This should also be the case on your other machines.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; BTW, since it seems you haven't correctly set your PATH
</span><br>
<span class="quotelev3">&gt; &gt;&gt; variable, i
</span><br>
<span class="quotelev3">&gt; &gt;&gt; suspect you have omitted
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to set LD_LIBRARY_PATH as well...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; see points 1,2 and 3 in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, Aug 12, 2008 at 11:10 AM, Rayne
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;lancer6238_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I looked for any folders with 'lam', and found
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2, under /usr/lib/lam and /etc/lam. I don't know if it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; means LAM was previously installed, because my PC also has
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /usr/lib/lam, although the contents are different. I renamed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the 2 folders, and got the &quot;*** Oops -- I cannot open
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the LAM help file.&quot; error below instead.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I tried 'whichexec', and it gave me
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /usr/bin/mpiexec. I checked the mpiexec there and it's
</span><br>
<span class="quotelev3">&gt; &gt;&gt; actually a Perl script, and I believe I installed OpenMPI in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /usr/lib64/openmpi/1.2.5-gcc/
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; So I tried mpirun instead and it gave me the following
</span><br>
<span class="quotelev3">&gt; &gt;&gt; message:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; &quot;*** Oops -- I cannot open the LAM help file.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; *** I tried looking for it in the following places:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ***
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ***   $HOME/lam-helpfile
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ***   $HOME/lam-7.0.6-helpfile
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ***   $HOME/etc/lam-helpfile
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ***   $HOME/etc/lam- 7.0.6-helpfile
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ***   $LAMHELPDIR/lam-helpfile
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ***   $LAMHELPDIR/lam-7.0.6-helpfile
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ***   $LAMHOME/etc/lam-helpfile
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ***   $LAMHOME/etc/lam-7.0.6-helpfile
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ***   $SYSCONFDIR/lam-helpfile
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ***   $SYSCONFDIR/lam- 7.0.6-helpfile
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ***
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; *** You were supposed to get help on the program
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;MPI&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; *** about the topic &quot;no-lamd&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ***
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; *** Sorry!&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Firstly, how do I change the settings such that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpiexec points to the mpiexec in my installation folder,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; which I believe should be
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; /usr/lib/openmpi/1.2.5-gcc/bin/mpiexec, and the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpiexec there seems to be a shortcut that points to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /usr/lib/openmpi/1.2.5-gcc/bin/orterun. Would this help?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; While I'm at it, it seems that mpirun, which is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /usr/bin/mpirun currently, should also point to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /usr/lib/openmpi/1.2.5-gcc/bin/mpirun, which also is a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; shortcut to /usr/lib/openmpi/1.2.5-gcc/bin/orterun.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Thank you.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Rayne
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; --- On Tue, 12/8/08, jody &lt;jody.xha_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; From: jody &lt;jody.xha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Subject: Re: [OMPI users] Setting up Open MPI to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; run on multiple servers
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; To: lancer6238_at_[hidden], &quot;Open MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Date: Tuesday, 12 August, 2008, 3:38 PM
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Hi Ryan
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Another thing:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Have you checked if the mpiexec you call is really
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the one
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; from your
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Open-MPI installation?
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Try 'which mpiexec' to find out.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Jody
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; On Tue, Aug 12, 2008 at 9:36 AM, jody
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; Hi Ryan
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; The message &quot;Lamnodes Failed!&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; seems to
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; indicate that you still have a
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; LAM/MPI installation somewhere.
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; You should get rid of that first.
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; Jody
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt; On Tue, Aug 12, 2008 at 9:00 AM, Rayne
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; &lt;lancer6238_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Hi, thanks for your reply.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; I did what you said, set up the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; password-less ssh,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; nfs etc, and put the IP address of the server in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the default
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; hostfile (in my PC only, the default hostfile in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the server
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; does not contain any IP addresses). Then I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; installed Open
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; MPI in the server under the same directory as my
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PC, e.g.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; /usr/lib/openmpi/1.2.5-gcc/
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; All my MPI programs and executables, e.g.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a.out
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; are in the shared folder. However, I have trouble
</span><br>
<span class="quotelev3">&gt; &gt;&gt; running
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; the MPI programs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; After compiling my MPI program on my PC,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I tried
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; to run it via &quot;mpiexec -n 2 ./a.out&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, I
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; get the error message
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &quot;Failed to find or execute the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; following
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; executable:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Host: (the name of the server)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Executable: ./a.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Cannot continue&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Then when I tried to run the MPI program
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on my
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; server after compiling, I get the error:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; &quot;Lamnodes Failed!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Check if you had booted lam before
</span><br>
<span class="quotelev3">&gt; &gt;&gt; calling mpiexec
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; else use -machinefile to pass host file to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpiexec&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; I'm guessing that because the server
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cannot
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; run the MPI program, I can't run the program
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on my PC as
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; well. Is there some other configurations I missed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; when using
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Open MPI on my server?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Rayne
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;      Yahoo! Toolbar is now powered with Search
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Assist.Download it now!
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://sg.toolbar.yahoo.com/">http://sg.toolbar.yahoo.com/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      New Email names for you!
</span><br>
<span class="quotelev2">&gt; &gt; Get the Email name you've always wanted on the new @ymail and
</span><br>
<span class="quotelev1">&gt; @rocketmail.
</span><br>
<span class="quotelev2">&gt; &gt; Hurry before someone else does!
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://mail.promotions.yahoo.com/newdomains/sg/">http://mail.promotions.yahoo.com/newdomains/sg/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6315/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6316.php">Tom Riddle: "[OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Previous message:</strong> <a href="6314.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>In reply to:</strong> <a href="6314.php">jody: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6317.php">Gus Correa: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Reply:</strong> <a href="6317.php">Gus Correa: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
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
